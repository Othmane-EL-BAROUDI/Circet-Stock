<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="Login")
     */
    public function index(): Response
    {
        return $this->render('authentification/index.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

    /**
     * @Route("HomePage" , name="HomePage")
     */
    public function HomePage(): Response
    {
        return $this->render('homePage/home.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }

     /**
     * @Route("ForgetPassword" , name="ForgetPassword")
     */
    public function ForgetPassword(): Response
    {
        return $this->render('authentification/forgetPassword.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}
