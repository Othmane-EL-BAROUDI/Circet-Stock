<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class stockViewController extends AbstractController
{
    /**
     * @Route("stockView" , name="stockView")
     */
    public function stockView(): Response
    {
        $user = $this->getUser();
        return $this->render('Pages/view/stockView.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
}
