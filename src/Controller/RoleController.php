<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\Notification;
use App\Entity\Permission;
use App\Form\RoleFormType;
use App\Form\PermissionFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoleController extends AbstractController
{
    /**
     * @Route("Role" , name="Role")
     */
    public function Role(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $searchQuery = $request->query->get('search');
        $roles = $entityManager->getRepository(Role::class)->search($searchQuery);
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        $role = new Role();
        $form = $this->createForm(RoleFormType::class, $role);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $newRole = $form->getData();
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a ajouter une nouveau role  ' . $newRole->getRoleName()  );
                $Notification->setSrcImg('images/success.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $entityManager->persist($newRole);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('"%s" ajouté avec succès.', $newRole->getRoleName())
            );
            return $this->redirectToRoute('Role');
        }

        return $this->render('Pages/Role.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allRoles' => $roles,
            'form' => $form->createView(),
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
            

        ]);
    }

       /**
     * @Route("Role/Edit/{id}" , name="RoleUpdate")
     */
    public function RoleUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();


       

        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $role = $entityManager->getRepository(Role::class)->find($id);
        $CurrentRoleName = $role->getRoleName();
        $form = $this->createForm(RoleFormType::class, $role);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier la role ' . $CurrentRoleName . ' vers ' . $form->get('roleName')->getData() );
                $Notification->setSrcImg('images/updated.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" Mis à jour avec succés.', $role->getRoleName())
             );
            return $this->redirectToRoute('Role');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Mise à jour',
            'Path' => '/Role',
            'form' => $form->createView(),
            'Title' => 'Rôle',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
           

        ]);
    }

      /**
     * @Route("/Role/Remove/{id}" , name="RoleRemove")
     */
    public function RoleDelete(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $role = $entityManager->getRepository(Role::class)->find($id);
        $entityManager->remove($role);
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach ($AllAdmins as $admin) {
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription($this->getUser()->getUsername() . ' a supprimer le role ' . $role->getRoleName() );
            $Notification->setSrcImg('images/delete-file.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" Supprimé avec succès.', $role->getRoleName())
         );
        return $this->redirectToRoute('Role');

    }
}
