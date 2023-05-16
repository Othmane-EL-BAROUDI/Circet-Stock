<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserProfileController extends AbstractController
{
    /**
     * @Route("UserProfile" , name="UserProfile")
     */
    public function UserProfile(): Response
    {
        $user = $this->getUser();
        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }
        return $this->render('Pages/UserProfile.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
}
