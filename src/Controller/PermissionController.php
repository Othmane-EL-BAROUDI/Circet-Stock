<?php

namespace App\Controller;

use App\Entity\Permission;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PermissionController extends AbstractController
{
     /**
     * @Route("Permission" , name="Permission")
     */
    public function Permission(EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $allPermissions = $entityManager->getRepository(Permission::class)->findAll();
        $user = $this->getUser();
        return $this->render('Pages/Permission.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allPermissions' => $allPermissions,
        ]);
    }
}
