<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class BaseController extends AbstractController
{
    /**
     * @Route("/" , name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('fos_user_security_login');
    }
    
}
