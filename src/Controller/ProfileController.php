<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("Profile" , name="Profile")
     */
    public function ForgetPassword(): Response
    {
        $user = $this->getUser();
        return $this->render('Pages/Profile.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
}
