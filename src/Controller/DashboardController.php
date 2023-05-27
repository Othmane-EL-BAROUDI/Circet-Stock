<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Machine;
use App\Entity\Affectation;
use App\Entity\Notification;
use App\Entity\Restitution;
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

        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $nbr_of_admins = $query->getSingleScalarResult();

        $query = $entityManager->createQuery('SELECT COUNT(u) FROM App\Entity\Affectation u WHERE u.Accept LIKE :state');
        $query->setParameter('state', true);
        $affecationsnbr = $query->getSingleScalarResult();

        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid  ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();


       

        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Affectation::class)->findAll();
        
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Affectation u WHERE u.Visibility = :state ');
        $query->setParameter('state', true);
        $results = $query->getResult();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Restitution u WHERE u.Visibility = :state ');
        $query->setParameter('state', true);
        $results2 = $query->getResult();

        return $this->render('Pages/Dashboard.html.twig', [
            'userInfo' => $user,
            'usersnbr' => $nbr_of_users,
            'machinesnbr' => $nbr_of_machines,
            'adminsnbr' => $nbr_of_admins,
            'affecationsnbr' => $affecationsnbr,
            'AllAffectations' => $results,
            'AllRestitutions' => $results2,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
          

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
        $newNotification->setDescription('La demande sur '. $affectation->getMachineAffectation()->getModel()->getType() . ' est refuse');
        $newNotification->setSrcImg('images/decline.png');
        $newNotification->setDateNotifications(new DateTime(date('Y-m-d H:i:s')));
        $entityManager->persist($newNotification);
        $entityManager->remove($affectation);
        $entityManager->flush();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach($AllAdmins as $admin){
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription( $this->getUser()->getUsername() . ' a refuser la demande de' . $affectation->getUserAffectation()->getUsername() .' - '. $affectation->getUserAffectation()->getMatricule().' sur ' . $affectation->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $affectation->getMachineAffectation()->getModel()->getModelName());
            $Notification->setSrcImg('images/info.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }
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
        $newNotification->setDescription('La demande sur '. $affectation->getMachineAffectation()->getModel()->getType() . ' est accepter');
        $newNotification->setSrcImg('images/accept.png');
        $newNotification->setDateNotifications(new \DateTime(date('Y-m-d H:i:s')));
        $entityManager->persist($newNotification);

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach($AllAdmins as $admin){
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription( $this->getUser()->getUsername() . ' a accepter la demande de ' .$affectation->getUserAffectation()->getUsername() .' - '. $affectation->getUserAffectation()->getMatricule().' sur ' . $affectation->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $affectation->getMachineAffectation()->getModel()->getModelName());
            $Notification->setSrcImg('images/info.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }

        $entityManager->flush();
        $this->addFlash(
            'success',
            sprintf(
                'Demande accepter',
            )
        );
        return $this->redirectToRoute('Dashboard');
    }
     /**
     * @Route("restitution/Delete/{id}" , name="resitutionRemove")
     */
    public function resitutionRemove(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $restitution = $entityManager->getRepository(Restitution::class)->find($id);
        $newNotification = new Notification();
        $newNotification->setUserId($restitution->getAffectation()->getUserAffectation()->getId());
        $newNotification->setDescription('La demande de restitution sur '. $restitution->getAffectation()->getMachineAffectation()->getModel()->getType() . ' est refuse');
        $newNotification->setSrcImg('images/decline.png');
        $newNotification->setDateNotifications(new DateTime(date('Y-m-d H:i:s')));
        $entityManager->persist($newNotification);
        


        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach($AllAdmins as $admin){
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription( $this->getUser()->getUsername() . ' a refuser la demande de restitution de' . $restitution->getAffectation()->getUserAffectation()->getUsername() .' - '. $restitution->getAffectation()->getUserAffectation()->getMatricule().' sur ' . $restitution->getAffectation()->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $restitution->getAffectation()->getMachineAffectation()->getModel()->getModelName());
            $Notification->setSrcImg('images/delete-file.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }
        $entityManager->remove($restitution);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf(
                'Demande de restitution refuse',
            )
        );
        return $this->redirectToRoute('Dashboard');
    }
     /**
     * @Route("restitution/Accept/{id}" , name="restitutionAccept")
     */
    public function restitutionAccept(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $restitution = $entityManager->getRepository(Restitution::class)->find($id);
        $restitution->setAccept(true);
        $restitution->setVisibility(false);
        $restitution->setDate(date("d/m/Y") . ' ' . date("h:i:sa"));
        $restitution->getAffectation()->setAccept(true);
        $newNotification = new Notification();
        $newNotification->setUserId($restitution->getAffectation()->getUserAffectation()->getId());
        $newNotification->setDescription('La demande de restitution sur '. $restitution->getAffectation()->getMachineAffectation()->getModel()->getType() . ' est accepter');
        $newNotification->setSrcImg('images/accept.png');
        $newNotification->setDateNotifications(new \DateTime(date('Y-m-d H:i:s')));
        $entityManager->persist($newNotification);

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach($AllAdmins as $admin){
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription( $this->getUser()->getUsername() . ' a accepter la demande de restitution de ' .$restitution->getAffectation()->getUserAffectation()->getUsername() .' - '. $restitution->getAffectation()->getUserAffectation()->getMatricule().' sur ' . $restitution->getAffectation()->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $restitution->getAffectation()->getMachineAffectation()->getModel()->getModelName());
            $Notification->setSrcImg('images/delivery-status.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }

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
