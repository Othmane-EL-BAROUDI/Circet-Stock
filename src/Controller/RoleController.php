<?php

namespace App\Controller;

use App\Entity\Role;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class RoleController extends AbstractController
{
    /**
     * @Route("Role" , name="Role")
     */
    public function Role(EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $roles = $entityManager->getRepository(Role::class)->findAll();
        $user = $this->getUser();

        return $this->render('Pages/Role.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allRoles' => $roles,
        ]);
    }
}
