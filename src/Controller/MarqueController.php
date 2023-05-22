<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Entity\Notification;
use App\Form\MarqueFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MarqueController extends AbstractController
{
    /**
     * @Route("/Marque" , name="Marque")
     */
    public function Marque(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $searchQuery = $request->query->get('search');
        $allMarques = $entityManager->getRepository(Marque::class)->search($searchQuery);
        $user = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid  ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }

        $marque = new Marque();
        $form = $this->createForm(MarqueFormType::class, $marque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newMarque = $form->getData();
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a ajouter une nouvelle marque  ' . $newMarque->getMarqueName()  );
                $Notification->setSrcImg('images/success.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $entityManager->persist($newMarque);
            $entityManager->flush();
            $this->addFlash(
                'success',
                sprintf('"%s" ajouté avec succès.', $newMarque->getMarqueName())
            );
            return $this->redirectToRoute('Marque');
        }

        return $this->render('Pages/Marque.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allMarques' => $allMarques,
            'form' => $form->createView(),
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }

    /**
     * @Route("/Marque/{id}" , name="MarqueUpdate")
     */
    public function MarqueUpdate(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $user = $this->getUser();

        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC ');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        $entityManager = $this->getDoctrine()->getManager();
        $marque = $entityManager->getRepository(Marque::class)->find($id);
        $CurrentMarqueName = $marque->getMarqueName();
        $form = $this->createForm(MarqueFormType::class, $marque);
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid()) {
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier la marque ' . $CurrentMarqueName . ' vers ' . $form->get('marque_name')->getData() );
                $Notification->setSrcImg('images/updated.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" Mis à jour avec succés.', $marque->getMarqueName())
            );
            return $this->redirectToRoute('Marque');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Mise à jour',
            'Path' => '/Marque',
            'marque' => $marque,
            'form' => $form->createView(),
            'Title' => 'Marque',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,


        ]);
    }

    /**
     * @Route("/Marque/Remove/{id}" , name="MarquelRemove")
     */
    public function MarqueDelete(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $marque = $entityManager->getRepository(Marque::class)->find($id);
        $entityManager->remove($marque);
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach ($AllAdmins as $admin) {
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription($this->getUser()->getUsername() . ' a supprimer la marque ' . $marque->getMarqueName() );
            $Notification->setSrcImg('images/delete-file.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" Supprimé avec succès.', $marque->getMarqueName())
        );
        return $this->redirectToRoute('Marque');
    }
}
