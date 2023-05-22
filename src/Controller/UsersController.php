<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\User;
use App\Form\UserFormType;
use App\Entity\Notification;
use App\Form\OriginalUserFormType;
use App\Form\UserPasswordFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{
    /**
     * @Route("Users" , name="Users")
     */
    public function Users(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        $username = $request->query->get('username');

        $userRepository = $entityManager->getRepository(User::class);
        $queryBuilder = $userRepository->createQueryBuilder('u');

        if ($username) {
            $queryBuilder
                ->andWhere('u.username LIKE :username')
                ->setParameter('username', $username . '%');
        }

        $users = $queryBuilder->getQuery()->getResult();
        $roles = $entityManager->getRepository(Role::class)->findAll();
        $user = $this->getUser();
        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }

        $Nuser = new User();
        $form = $this->createForm(OriginalUserFormType::class, $Nuser);
        $form->handleRequest($request);

        if ($form->isSubmitted()  && $form->isValid()) {
            $Nuser = $form->getData();
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a ajouter une nouveau utilisateur  ' . $Nuser->getUsername() . " - " . $Nuser->getMatricule());
                $Notification->setSrcImg('images/success.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $encoded = $encoder->encodePassword($Nuser, $Nuser->getPassword());
            $Nuser->setPassword($encoded);
            $selectedRole = $form->get('roles')->getData();
            $Nuser->addRole($selectedRole->getRoleName());
            $entityManager->persist($Nuser);
            $Nuser->setEnabled(true);
            $Nuser->setConnected(false);
            $entityManager->flush();
            $this->addFlash(
                'success',
                sprintf('  "%s" ajouté avec succès du poste  "%s" ', $Nuser->getUsername(), $Nuser->getJob())
            );
            return $this->redirectToRoute('Users');
        }
        return $this->render('Pages/Users.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'allusers' => $users,
            'allroles' => $roles,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }

    /**
     * @Route("User/{id}" , name="UserView")
     */
    public function UserView(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $CurrentUser = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();


        return $this->render('Pages/view/userView.html.twig', [
            'userInfo' => $CurrentUser,
            'user' => $user,
            'Path' => '/Users',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }


    /**
     * @Route("User/Remove/{id}" , name="UserRemove")
     */
    public function UserDelete(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $entityManager->remove($user);
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach ($AllAdmins as $admin) {
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription($this->getUser()->getUsername() . ' a supprimer un utilisateur : ' . $user->getUsername() . " - " . $user->getMatricule());
            $Notification->setSrcImg('images/delete-file.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" Supprimé avec succès.', $user->getUsername())
        );
        return $this->redirectToRoute('Users');
    }

    /**
     * @Route("User/Edit/{id}" , name="UserUpdate")
     */
    public function UserUpdate(Request $request, EntityManagerInterface $entityManager, $id, UserPasswordEncoderInterface $encoder): Response
    {
        $CurrentUser = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $CurrentUser->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $form = $this->createForm(UserFormType::class, $user);
        $form->get('roles')->setData($user->getRoles()[0]);
        $form->handleRequest($request);
        $Passform = $this->createForm(UserPasswordFormType::class);
        $Passform->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid()) {
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier un utilisateur  ' .  $user->getUsername() . " - " . $user->getMatricule());
                $Notification->setSrcImg('images/updated.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
        

            $user->setRoles(array($form->get('roles')->getData()->getRoleName()));
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" Mis à jour avec succés.', $user->getUsername())
            );
            return $this->redirectToRoute('Users');
        }
        if ($Passform->isSubmitted()  && $Passform->isValid()) {
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier le mot de passe de  ' .  $user->getUsername() . " - " . $user->getMatricule());
                $Notification->setSrcImg('images/reset-password.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $NewEncoded = $encoder->encodePassword($user, $Passform->get('Newpassword')->getData());
            $user->setPassword($NewEncoded);
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" Mise à jour avec succés.', $user->getUsername())
            );
            return $this->redirectToRoute('Users');
        }

        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $CurrentUser,
            'Path' => '/Users',
            'form' => $form->createView(),
            'Passform' => $Passform->createView(),
            'Title' => 'Utilisateur',
            'PageName' => 'Mise à jour',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }
}
