<?php

namespace App\Controller;
use App\Entity\Permission;
use App\Entity\Role;
use App\Entity\User;
use App\Form\UserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class UsersController extends AbstractController
{
     /**
     * @Route("Users" , name="Users")
     */
    public function Users(Request $request , EntityManagerInterface $entityManager): Response
    {
       
        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(User::class)->findAll();
        $roles = $entityManager->getRepository(Role::class)->findAll();
        $permissions = $entityManager->getRepository(Permission::class)->findAll();
        $user = $this->getUser();

        $Nuser = new User();
        $form = $this->createForm(UserFormType::class, $Nuser);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $newUser = $form->getData();
            $entityManager->persist($newUser);
            $newUser->setEnabled(true);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf(' new "%s" added successfully.', $newUser->getJob())
            );
            return $this->redirectToRoute('Users');
        }
        return $this->render('Pages/Users.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'allusers' => $users,
            'allroles' => $roles,
            'allpermissions' => $permissions,
        ]);
    }
     /**
     * @Route("User/{id}" , name="UserView")
     */
    public function UserView(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $CurrentUser = $this->getUser();
        return $this->render('Pages/view/userView.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $CurrentUser,
            'user' => $user,
            'Path' => '/Users'
        ]);
    }
}