<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MachineFormController extends AbstractController
{
      /**
     * @Route("Stock/create" , name="createStock")
     */
    public function create(): Response
    {
        $user = $this->getUser();
   
        return $this->render('Action/createStock.html.twig',[
                
                'userInfo' => $user,
        ]);
    }
}
