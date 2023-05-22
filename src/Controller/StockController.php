<?php

namespace App\Controller;

use App\Entity\Affectation;
use App\Entity\Machine;
use App\Entity\Model;
use App\Entity\Notification;
use App\Form\MachineFormType;
use App\Form\MachineInfoFormType;
use App\Form\MachinePictureFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class StockController extends AbstractController
{
    /**
     * @Route("/Stock" , name="Stock")
     */
    public function Stock(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Machine::class)->findAll();
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }

        $machine = new Machine();
        $form = $this->createForm(MachineFormType::class, $machine);
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid()) {
            $machine = $form->getData();
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a ajouter une nouveau materiel  ' .$machine->getModel()->getMarque()->getMarqueName() . " " .$machine->getModel()->getModelName()  );
                $Notification->setSrcImg('images/success.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $uploadedPicture = $form->get('img_src')->getData();
            $uploadType = $machine->getModel()->getType();
            if ($uploadedPicture) {
                $file = 'upload/' . $uploadType . '/' . uniqid() . '.' . $uploadedPicture->guessExtension();
                try {
                    $uploadedPicture->move(
                        $this->getParameter('kernel.project_dir') . '/public/images/upload/' . $uploadType,
                        $file
                    );
                } catch (FileException $error) {
                    return new Response($error->getMessage());
                }
                $machine->setImgSrc('/images/' . $file);
            } else {
                $machine->setImgSrc('');
            }
            /*  else{
                $machine->setImgSrc('/CIRCET-STOCK/public/images/laptop.png');
            }*/
            $entityManager->persist($machine);
            $entityManager->flush();
            $this->addFlash(
                'success',
                sprintf('  " %s - %s " ajouté avec succès ', $machine->getModel()->getMarque()->getMarqueName(), $machine->getModel()->getModelName())
            );
            return $this->redirectToRoute('Stock');
        }


        return $this->render('Pages/Stock.html.twig', [
            'userInfo' => $user,
            'form' => $form->createView(),
            'Allmachines' => $results,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
         

        ]);
    }

    /**
     * @Route("/stockView/{id}" , name="stockView")
     */
    public function stockView($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $machine = $entityManager->getRepository(Machine::class)->find($id);
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();



        $AllAffectations = $entityManager->getRepository(Affectation::class)->search($id);


        return $this->render('Pages/view/stockView.html.twig', [
            'userInfo' => $user,
            'machine' => $machine,
            'AllAffectation' => $AllAffectations,
            'Path' => '/Stock',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
     

        ]);
    }

    

    /**
     * @Route("/Stock/Remove/{id}" , name="StockRemove")
     */
    public function PermissionDelete(EntityManagerInterface $entityManager, $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $stock = $entityManager->getRepository(Machine::class)->find($id);
        $entityManager->remove($stock);
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach ($AllAdmins as $admin) {
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription($this->getUser()->getUsername() . ' a supprimer la marque ' . $stock->getModel()->getMarque()->getMarqueName() ." ". $stock->getModel()->getModelName() );
            $Notification->setSrcImg('images/delete-file.png');
            $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
            $entityManager->persist($Notification);
        }
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf(' " %s - %s " Supprimé avec succès.', $stock->getModel()->getMarque()->getMarqueName(), $stock->getModel()->getModelName())
        );
        return $this->redirectToRoute('Stock');
    }
    /**
     * @Route("/Stock/Edit/{id}" , name="StockUpdate")
     */
    public function StockUpdate(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $CurrentUser = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $CurrentUser->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();



        $entityManager = $this->getDoctrine()->getManager();
        $stock = $entityManager->getRepository(Machine::class)->find($id);
        $form = $this->createForm(MachineInfoFormType::class, $stock);
        $form->handleRequest($request);
        $formPic = $this->createForm(MachinePictureFormType::class, $stock);
        $formPic->handleRequest($request);
        $uploadedPicture = $formPic->get('img_src')->getData();
        $uploadType = $stock->getModel()->getType();
        if ($form->isSubmitted()  && $form->isValid()) {
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier le materiel ' . $stock->getModel()->getMarque()->getMarqueName() ." ". $stock->getModel()->getModelName() );
                $Notification->setSrcImg('images/updated.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf(' " %s - %s " Mis à jour avec succés.', $stock->getModel()->getMarque()->getMarqueName(), $stock->getModel()->getModelName())
            );
            return $this->redirectToRoute('Stock');
        }
        if ($formPic->isSubmitted()  && $formPic->isValid()) {
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier le materiel ' . $stock->getModel()->getMarque()->getMarqueName() ." ".$stock->getModel()->getModelName() );
                $Notification->setSrcImg('images/updated.png');
                $Notification->setDateNotifications(new \DateTime(date('Y-m-d H:i')));
                $entityManager->persist($Notification);
            }
            if ($uploadedPicture) {
                if ($stock->getImgSrc() != null) {
                    if (file_exists(
                        $this->getParameter('kernel.project_dir') . '/public/images/upload/' . $uploadType
                    )) {
                        $this->GetParameter('kernel.project_dir') . '/public/images/upload/' . $uploadType;
                        $newfile = 'upload/' . $uploadType . '/' . uniqid() . '.' . $uploadedPicture->guessExtension();
                        try {
                            $uploadedPicture->move(
                                $this->getParameter('kernel.project_dir') . '/public/images/upload/' . $uploadType,
                                $newfile
                            );
                        } catch (FileException $error) {
                            return new Response($error->getMessage());
                        }
                        $stock->setImgSrc('/images/' . $newfile);
                    }
                }
            }
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf(' " %s - %s " Mis à jour avec succés.', $stock->getModel()->getMarque()->getMarqueName(), $stock->getModel()->getModelName())
            );
            return $this->redirectToRoute('Stock');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $CurrentUser,
            'Path' => '/Stock',
            'form' => $form->createView(),
            'formPic' => $formPic->createView(),
            'Title' => 'Stock',
            'PageName' => 'Mise à jour',
            'StockPic' => $stock->getImgSrc(),
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
            


        ]);
    }
}
