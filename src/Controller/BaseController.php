<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;



class BaseController extends AbstractController
{
    /**
     * @Route("/" , name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('fos_user_security_login');
    }
    /**
     * @Route("HomePage" , name="HomePage")
     */
    public function HomePage(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Machine u');
        $results = $query->getResult();
        $user = $this->getUser();
        return $this->render('Pages/homePage.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'data' => $results,
        ]);
    }
    /**
     * @Route("Dashboard" , name="Dashboard")
     */
    public function Dashboard(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\User u');
        $nbr_of_users = $query->getResult();
        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\Machine u');
        $nbr_of_machines = $query->getResult();
        $query = $entityManager->createQuery(' SELECT COUNT(u.id) FROM App\Entity\User u WHERE  u.roles = \'ROLE_ADMIN\' ');
        $nbr_of_admins = $query->getResult();
        $user = $this->getUser();
        return $this->render('Pages/Dashboard.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'usersnbr' => $nbr_of_users[0],
            'machinesnbr' => $nbr_of_machines[0],
            'adminsnbr' => $nbr_of_admins[0],
        ]);
    }


     /**
     * @Route("ForgetPassword" , name="ForgetPassword")
     */
    public function ForgetPassword(): Response
    {
        $user = $this->getUser();
        return $this->render('authentification/forgetPassword.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
     /**
     * @Route("Historique" , name="Historique")
     */
    public function Historique(): Response
    {
        $user = $this->getUser();
        return $this->render('Pages/Historique.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
     /**
     * @Route("Role" , name="Role")
     */
    public function Role(): Response
    {
        
        $user = $this->getUser();
        return $this->render('Pages/Role.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
      /**
     * @Route("Permission" , name="Permission")
     */
    public function Permission(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Permission u');
        $allPermissions = $query->getResult();
        $user = $this->getUser();
        return $this->render('Pages/Permission.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allPermissions' => $allPermissions,
        ]);
    }
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
     /**
     * @Route("Stock" , name="Stock")
     */
    public function Stock(): Response
    {
        $user = $this->getUser();
        return $this->render('Pages/Stock.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }

     /**
     * @Route("Profile" , name="Profile")
     */
    public function Profile(): Response
    {
        $user = $this->getUser();
        return $this->render('Pages/Profile.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
        ]);
    }
}
