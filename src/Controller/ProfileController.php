<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Notification;
use App\Form\UserPasswordFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends AbstractController
{
    /**
     * @Route("Profile" , name="Profile")
     */
    public function ForgetPassword(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $this->getUser();
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications ASC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();

        $user = $entityManager->getRepository(User::class)->find($user->getId());
        $form = $this->createForm(UserPasswordFormType::class);
       
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid()) {
         
     
                if ($form->get('Newpassword')->getData() == $form->get('Confpassword')->getData()) {
                    $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
                    $query->setParameter('role', '%"ADMIN"%');
                    $query->setParameter('role2', '%"SUPER ADMIN"%');
                    $AllAdmins = $query->getResult();
                    foreach ($AllAdmins as $admin) {
                        $Notification = new Notification();
                        $Notification->setUserId($admin->getId());
                        $Notification->setDescription($user->getUsername() . ' - ' . $user->getMatricule()   .' a modifier le mot de passe ');
                        $Notification->setSrcImg('images/reset-password.png');
                        $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                        $entityManager->persist($Notification);
                    }
                    $NewEncoded = $encoder->encodePassword($user,$form->get('Newpassword')->getData());
                    $user->setPassword($NewEncoded);
                    $user->setConnected(true);
                    $entityManager->flush();
                    return $this->redirectToRoute('HomePage');
                }
             else {
                $this->addFlash(
                    'alert',
                    sprintf('  Les informations sont incorrects  ')
                );
            
        }
    }
   

        return $this->render('Pages/Profile.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
            'form' => $form->createView(),

        ]);
    }
}
