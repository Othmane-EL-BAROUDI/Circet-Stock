<?php

namespace App\Controller;
use App\Entity\Permission;
use App\Entity\Role;
use App\Entity\User;
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
       
        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(User::class)->findAll();
        $roles = $entityManager->getRepository(Role::class)->findAll();
        $permissions = $entityManager->getRepository(Permission::class)->findAll();
        $user = $this->getUser();
        return $this->render('Pages/Users.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allusers' => $users,
            'allroles' => $roles,
            'allpermissions' => $permissions,
        ]);
    }
}