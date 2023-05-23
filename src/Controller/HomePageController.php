<?php

namespace App\Controller;

use DateTime;
use App\Entity\Machine;
use App\Entity\Affectation;
use App\Entity\Notification;
use App\Form\AffectationFormType;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Stmt\Foreach_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    /**
     * @Route("HomePage" , name="HomePage")
     */
    public function HomePage(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $searchQuery1 = $request->query->get('ModelSearch');
        $searchQuery2 = $request->query->get('MarqueSearch');
        $results = $entityManager->getRepository(Machine::class)->search($searchQuery1, $searchQuery2);

        $user = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();

        if ($user->getRoles()[0] == 'SUPER ADMIN') {
            return $this->redirect('Dashboard');
        }
        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }
        return $this->render('Pages/homePage.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'data' => $results,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
        ]);
    }
    /**
     * @Route("/materialView/{id}" , name="materialView")
     */
    public function MaterialView($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $machine = $entityManager->getRepository(Machine::class)->find($id);

        $user = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();

        return $this->render('Pages/view/materielView.html.twig', [
            'userInfo' => $user,
            'machine' => $machine,
            'Path' => '/HomePage',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }
    /**
     * @Route("/Affectation/{id}" , name="Affectation")
     */
    public function Affectation($id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();



        $entityManager = $this->getDoctrine()->getManager();
        $machine = $entityManager->getRepository(Machine::class)->find($id);



        $affectation = new Affectation();
        $affectation->setDateAffectation(date("d/m/Y") . ' ' . date("h:i:sa"));
        $affectation->setUserAffectation($user);
        $affectation->setMachineAffectation($machine);
        $affectation->setAccept(false);
        $affectation->setVisibility(true);
        $form = $this->createForm(AffectationFormType::class, $affectation);
        $form->handleRequest($request);

        if ($form->isSubmitted()  && $form->isValid()) {

            $newNotification = new Notification();
            $newNotification->setUserId($affectation->getUserAffectation()->getId());
            $newNotification->setDescription('En attend la reponse sur la  demande sur ' . $affectation->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $affectation->getMachineAffectation()->getModel()->getModelName());
            $newNotification->setSrcImg('images/time-left.png');
            $newNotification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($newNotification);

            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($affectation->getUserAffectation()->getUsername() . ' attend la  reponse sur la  demande sur ' . $affectation->getMachineAffectation()->getModel()->getMarque()->getmarqueName() . ' ' . $affectation->getMachineAffectation()->getModel()->getModelName());
                $Notification->setSrcImg('images/info.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }

            $affectation = $form->getData();
            $entityManager->persist($affectation);
            $entityManager->flush();
            $this->addFlash(
                'success',
                sprintf(' demande envoye avec succès.')
            );
            return $this->redirectToRoute('HomePage');
        }
        return $this->render('Pages/affectation.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'machine' => $machine,
            'Path' => '/HomePage',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }
    /**
     * @Route("/DeleteNotification" , name="DeleteNotification")
     */
    public function DeleteNotification(EntityManagerInterface $entityManager): Response
    {
        $userId = $this->getUser()->getId();

        $repository = $entityManager->getRepository(Notification::class);
        $notifications = $repository->findBy(['userId' => $userId]);

        foreach ($notifications as $notification) {
            $entityManager->remove($notification);
        }

        $entityManager->flush();

        return $this->redirectToRoute('HomePage');
    }
}
