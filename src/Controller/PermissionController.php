<?php

namespace App\Controller;
use App\Entity\Permission;
use App\Form\PermissionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PermissionController extends AbstractController
{
     /**
     * @Route("/Permission" , name="Permission")
     */
    public function Permission(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $allPermissions = $entityManager->getRepository(Permission::class)->findAll();
        $user = $this->getUser();

        $permission = new Permission();
        $form = $this->createForm(PermissionFormType::class, $permission);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $newPermission = $form->getData();
            $entityManager->persist($newPermission);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('"%s" added successfully.', $newPermission->getPermissionName())
            );
            return $this->redirectToRoute('Permission');
        }

        return $this->render('Pages/Permission.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'allPermissions' => $allPermissions,
        ]);
    }
       /**
     * @Route("/Permission/{id}" , name="PermissionUpdate")
     */
    public function PermissionUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $permission = $entityManager->getRepository(Permission::class)->find($id);
        $form = $this->createForm(PermissionFormType::class, $permission);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            // $permission->setPermissionName($form->get('permission_name')->getData());
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" updated successfully.', $permission->getPermissionName())
             );
            return $this->redirectToRoute('Permission');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Mise à jour',
            'Path' => '/Permission',
            'permission' => $permission,
            'form' => $form->createView(),
            'Title' => 'Permission'
        ]);
    }

      /**
     * @Route("/Permission/Remove/{id}" , name="PermissionRemove")
     */
    public function PermissionDelete(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $permission = $entityManager->getRepository(Permission::class)->find($id);
        $entityManager->remove($permission);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" deleted successfully.', $permission->getPermissionName())
         );
        return $this->redirectToRoute('Permission');

    }
}
