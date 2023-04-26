<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class UsersController extends AbstractController
{
     /**
     * @Route("Users" , name="Users")
     */
    public function Users(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u');
        $results = $query->getResult();
        $user = $this->getUser();
        return $this->render('Pages/Users.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allusers' => $results,
        ]);
    }
}