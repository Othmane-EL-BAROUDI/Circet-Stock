<?php

namespace App\Controller;

use App\Entity\Role;

use App\Entity\Permission;
use App\Form\RoleFormType;
use App\Form\PermissionFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoleController extends AbstractController
{
    /**
     * @Route("Role" , name="Role")
     */
    public function Role(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $roles = $entityManager->getRepository(Role::class)->findAll();
        $user = $this->getUser();

        $role = new Role();
        $form = $this->createForm(RoleFormType::class, $role);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $newRole = $form->getData();
            $entityManager->persist($newRole);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('"%s" added successfully.', $newRole->getRoleName())
            );
            return $this->redirectToRoute('Role');
        }

        return $this->render('Pages/Role.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allRoles' => $roles,
            'form' => $form->createView(),
        ]);
    }

       /**
     * @Route("Role/Edit/{id}" , name="RoleUpdate")
     */
    public function RoleUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $role = $entityManager->getRepository(Role::class)->find($id);
        $form = $this->createForm(RoleFormType::class, $role);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" updated successfully.', $role->getRoleName())
             );
            return $this->redirectToRoute('Role');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Role Update',
            'Path' => '/Role',
            'form' => $form->createView(),
            'Title' => 'Role Update'
        ]);
    }

      /**
     * @Route("/Role/Remove/{id}" , name="RoleRemove")
     */
    public function RoleDelete(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $role = $entityManager->getRepository(Role::class)->find($id);
        $entityManager->remove($role);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" deleted successfully.', $role->getRoleName())
         );
        return $this->redirectToRoute('Role');

    }
}
