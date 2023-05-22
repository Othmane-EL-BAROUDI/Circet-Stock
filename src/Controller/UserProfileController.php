<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class UserProfileController extends AbstractController
{
    /**
     * @Route("UserProfile" , name="UserProfile")
     */
    public function UserProfile(EntityManagerInterface $entityManager): Response
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
        return $this->render('Pages/UserProfile.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
           

        ]);
    }
}
