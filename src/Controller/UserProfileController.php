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
    public function ForgetPassword(): Response
    {
        $user = $this->getUser();
        return $this->render('Pages/UserProfile.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
}