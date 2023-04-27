<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
      /**
     * @Route("Dashboard" , name="Dashboard")
     */
    public function Dashboard(EntityManagerInterface $entityManager): Response
    {
        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\User u');
        $nbr_of_users = $query->getResult();
        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\Machine u');
        $nbr_of_machines = $query->getResult();
        $nbr_of_admins = $entityManager->createQueryBuilder('u')
            ->select('COUNT(u)')
            ->from(User::class, 'u')
            ->where('u.roles = :admin')
            ->setParameter('admin', 'ROLE_ADMIN')
            ->getQuery()
            ->getSingleScalarResult();
       
        $user = $this->getUser();
        return $this->render('Pages/Dashboard.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'usersnbr' => $nbr_of_users[0],
            'machinesnbr' => $nbr_of_machines[0],
            'adminsnbr' => $nbr_of_admins[0],
        ]);
    }
}
