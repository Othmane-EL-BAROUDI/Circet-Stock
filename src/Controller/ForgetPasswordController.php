<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForgetPasswordController extends AbstractController
{
 /**
     * @Route("ForgetPassword" , name="ForgetPassword")
     */
    public function ForgetPassword(): Response
    {
        $user = $this->getUser();
        return $this->render('authentification/forgetPassword.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
}
