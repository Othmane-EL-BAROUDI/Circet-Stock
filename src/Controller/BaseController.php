<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    
    /**
     * @Route("HomePage" , name="HomePage")
     */
    public function HomePage(): Response
    {
        return $this->render('Pages/homePage.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
    /**
     * @Route("Dashboard" , name="Dashboard")
     */
    public function Dashboard(): Response
    {
        return $this->render('Pages/Dashboard.html.twig', [
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
     /**
     * @Route("Historique" , name="Historique")
     */
    public function Historique(): Response
    {
        return $this->render('Pages/Historique.html.twig', [
            'controller_name' => 'BaseController',
        ]);
    }
}
