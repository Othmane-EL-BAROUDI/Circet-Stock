<?php

namespace App\Controller;

use App\Entity\Affectation;
use App\Entity\Restitution;
use App\Form\RestitutionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Notification;

class RestitutionController extends AbstractController
{
    /**
     * @Route("/restitution", name="restitution")
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications Desc');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();
        $entity = $entityManager->getRepository(Affectation::class);
        $UserMachine =  $entity->createQueryBuilder('m')
            ->select('m')
            ->join('m.user', 'u')
            ->join('m.machine', 's')
            ->where($entity->createQueryBuilder('m')->expr()->like('u.id', ':UserQuery'))
            ->andwhere(' m.Accept LIKE :StockQuery')
            ->setParameter('UserQuery',  $user->getId())
            ->setParameter('StockQuery', true )
            ->getQuery()
            ->getResult();
      
            if ($user->getRoles()[0] == 'SUPER ADMIN') {
                return $this->redirect('Dashboard');
            }
            if ($user->getRoles()[0] == 'ADMIN') {
                return $this->redirect('Dashboard');
            }
        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }
        return $this->render('Pages/Restitution.html.twig', [
            'userInfo' => $user,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
            'UserMachine' => $UserMachine,

        ]);
    }
        /**
     * @Route("/DemandeRestitution/{id}", name="DemandeRestitution")
     */
    public function demande(EntityManagerInterface $entityManager, $id , Request $request): Response
    {
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications Desc');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();

        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $machine = $entityManager->getRepository(Affectation::class)->find($id);
        $restitution = new Restitution;
        $form = $this->createForm(RestitutionFormType::class, $restitution);
        $form->handleRequest($request);

        if ($form->isSubmitted()  && $form->isValid()) {

            $newNotification = new Notification();
            $newNotification->setUserId($machine->getUserAffectation()->getId());
            $newNotification->setDescription('En attend la reponse sur la  demande de restitution sur ' . $machine->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $machine->getMachineAffectation()->getModel()->getModelName());
            $newNotification->setSrcImg('images/time-left.png');
            $timezone = new \DateTimeZone('Africa/Casablanca'); 
            $currentDateTime = new \DateTime('now', $timezone); 
            $newNotification->setDateNotifications($currentDateTime);
            $entityManager->persist($newNotification);

            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach($AllAdmins as $admin){
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription( $machine->getUserAffectation()->getUsername() . ' - ' .  $machine->getUserAffectation()->getMatricule() .' attend la  reponse sur la  demande de restitution sur ' . $machine->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $machine->getMachineAffectation()->getModel()->getModelName());
                $Notification->setSrcImg('images/info.png');
                $timezone = new \DateTimeZone('Africa/Casablanca'); 
                $currentDateTime = new \DateTime('now', $timezone); 
                $Notification->setDateNotifications($currentDateTime);
                $entityManager->persist($Notification);
            }

            $restitution = $form->getData();
            $restitution->setAffectation($machine);
            $restitution->setDate(date("d/m/Y") . ' ' . date("h:i:sa"));
            $restitution->setAccept(false);
            $restitution->setVisibility(true);
          
            $entityManager->persist($restitution);
            $entityManager->flush();
            $this->addFlash(
                'success',
                sprintf(' demande envoye avec succès.')
            );
            return $this->redirectToRoute('restitution');
        }

        return $this->render('Pages/restitutionDemande.html.twig', [
            'userInfo' => $user,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
            'machine' => $machine,
            'form' => $form->createView(),
            'Path' => '/restitution',
            

        ]);
    }
}
