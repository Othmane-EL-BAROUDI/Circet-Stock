<?php

namespace App\Controller;
use App\Entity\Role;
use App\Entity\User;
use App\Form\UserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersController extends AbstractController
{
     /**
     * @Route("Users" , name="Users")
     */
    public function Users(Request $request , EntityManagerInterface $entityManager,UserPasswordEncoderInterface $encoder): Response
    {
        
        $entityManager = $this->getDoctrine()->getManager();
        $users = $entityManager->getRepository(User::class)->findAll();
        $roles = $entityManager->getRepository(Role::class)->findAll();
        $user = $this->getUser();

        $Nuser = new User();
        $form = $this->createForm(UserFormType::class, $Nuser);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $newUser = $form->getData();
            $encoded = $encoder->encodePassword($Nuser, $newUser->getPassword());
            $newUser->setPassword($encoded);
            $selectedRole = $form->get('roles')->getData();
            $newUser->addRole($selectedRole->getRoleName());
            $entityManager->persist($newUser);
            $newUser->setEnabled(true);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('  "%s" added successfully as "%s" ', $newUser->getUsername(),$newUser->getJob())
            );
            return $this->redirectToRoute('Users');
        }
        return $this->render('Pages/Users.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'allusers' => $users,
            'allroles' => $roles,
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
            'userInfo' => $CurrentUser,
            'user' => $user,
            'Path' => '/Users'
        ]);
    }

    
      /**
     * @Route("User/Remove/{id}" , name="UserRemove")
     */
    public function UserDelete(EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $entityManager->remove($user);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" deleted successfully.', $user->getUsername())
         );
        return $this->redirectToRoute('Users');

    }

       /**
     * @Route("User/Edit/{id}" , name="UserUpdate")
     */
    public function UserUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $CurrentUser = $this->getUser();

        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        $form = $this->createForm(UserFormType::class, $user);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" updated successfully.', $user->getUsername())
             );
             return $this->redirectToRoute('Users');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $CurrentUser,
            'Path' => '/Users',
            'form' => $form->createView(),
            'Title' => 'Users',
            'PageName' => 'User Update'
        ]);
    }
}