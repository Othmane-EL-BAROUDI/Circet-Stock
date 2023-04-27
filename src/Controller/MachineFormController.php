<?php

namespace App\Controller;
use App\Entity\Machine;
use App\Form\MachineFormType;
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
        $machine = new Machine();
        $form = $this->createForm(MachineFormType::class, $machine);
        return $this->render('Action/createStock.html.twig',[
                'form' => $form->createView(),
                'userInfo' => $user,
        ]);
    }
}
