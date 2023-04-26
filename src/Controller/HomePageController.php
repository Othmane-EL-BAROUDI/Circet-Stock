<?php

namespace App\Controller;

use App\Entity\Machine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
     /**
     * @Route("HomePage" , name="HomePage")
     */
    public function HomePage(EntityManagerInterface $entityManager): Response
    {       
        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Machine::class)->findAll();
        $user = $this->getUser();
        return $this->render('Pages/homePage.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'data' => $results,
        ]);
    }
}
