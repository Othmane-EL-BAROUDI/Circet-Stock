<?php

namespace App\Controller;

use App\Entity\Machine;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomePageController extends AbstractController
{
     /**
     * @Route("HomePage" , name="HomePage")
     */
    public function HomePage(Request $request,EntityManagerInterface $entityManager): Response
    {       
        $entityManager = $this->getDoctrine()->getManager();
        $searchQuery = $request->query->get('search');
        $results = $entityManager->getRepository(Machine::class)->search($searchQuery);
        $user = $this->getUser();
        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }
        return $this->render('Pages/homePage.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'data' => $results,
        ]);
    }
}
