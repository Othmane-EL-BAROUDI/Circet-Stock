<?php

namespace App\Controller;
use App\Entity\Machine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockController extends AbstractController
{
    /**
     * @Route("Stock" , name="Stock")
     */
    public function Stock(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Machine::class)->findAll();
        $user = $this->getUser();
        return $this->render('Pages/Stock.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'Allmachines' => $results,
        ]);
    }
}
