<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/redirect-after-login", name="redirect_after_login")
     */
    public function redirectAfterLogin()
    {
        return $this->redirectToRoute('HomePage');
    }
}