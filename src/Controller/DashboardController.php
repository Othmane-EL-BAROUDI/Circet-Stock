<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Machine;
use App\Entity\Affectation;
use App\Entity\Notification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    /**
     * @Route("Dashboard" , name="Dashboard")
     */
    public function Dashboard(EntityManagerInterface $entityManager): Response
    {

        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\User u');
        $nbr_of_users = $query->getSingleScalarResult();

        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\Machine u');
        $nbr_of_machines = $query->getSingleScalarResult();

        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\User u WHERE u.roles LIKE :role');
        $query->setParameter('role', '%"ROLE_ADMIN"%');
        $nbr_of_admins = $query->getSingleScalarResult();

        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\Affectation u WHERE u.Accept LIKE :state');
        $query->setParameter('state', true);
        $affecationsnbr = $query->getSingleScalarResult();

        $user = $this->getUser();
        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Affectation::class)->findAll();
        
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Affectation u WHERE u.Visibility = :state ');
        $query->setParameter('state', true);
        $results = $query->getResult();

        return $this->render('Pages/Dashboard.html.twig', [
            'userInfo' => $user,
            'usersnbr' => $nbr_of_users,
            'machinesnbr' => $nbr_of_machines,
            'adminsnbr' => $nbr_of_admins,
            'affecationsnbr' => $affecationsnbr,
            'AllAffectations' => $results,
        ]);
    }
    /**
     * @Route("Affecation/Delete/{id}" , name="AffectationRemove")
     */
    public function AffectationRemove(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $affectation = $entityManager->getRepository(Affectation::class)->find($id);
        $newNotification = new Notification();
        $newNotification->setUserId($affectation->getUserAffectation()->getId());
        $newNotification->setDescription('La demande sur '.$affectation->getMachineAffectation()->getModel()->getMarque()->getmarqueName() .' '. $affectation->getMachineAffectation()->getModel()->getModelName() . ' est refuse');
        $newNotification->setSrcImg('images/decline.png');
        $newNotification->setDateNotifications(new DateTime(date('Y-m-d H:i:s')));
        $entityManager->persist($newNotification);
        $entityManager->remove($affectation);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf(
                'Demande refuse',
            )
        );
        return $this->redirectToRoute('Dashboard');
    }
    /**
     * @Route("Affecation/Accept/{id}" , name="AffectationAccept")
     */
    public function AffectationAccept(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $affectation = $entityManager->getRepository(Affectation::class)->find($id);
        $affectation->setAccept(true);
        $affectation->setVisibility(false);
        $affectation->setDateAffectation(date("d/m/Y") . ' ' . date("h:i:sa"));
        $affectation->getMachineAffectation()->setAvailable(false);
        $newNotification = new Notification();
        $newNotification->setUserId($affectation->getUserAffectation()->getId());
        $newNotification->setDescription('La demande sur '.$affectation->getMachineAffectation()->getModel()->getMarque()->getmarqueName() .' '. $affectation->getMachineAffectation()->getModel()->getModelName() . ' est accepter');
        $newNotification->setSrcImg('images/accept.png');
        $newNotification->setDateNotifications(new \DateTime(date('Y-m-d H:i:s')));
        $entityManager->persist($newNotification);
        $entityManager->flush();
        $this->addFlash(
            'success',
            sprintf(
                'Demande accepter',
            )
        );
        return $this->redirectToRoute('Dashboard');
    }
}
