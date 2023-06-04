<?php

namespace App\Controller;
use App\Entity\Permission;
use App\Form\PermissionFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Notification;

class PermissionController extends AbstractController
{
     /**
     * @Route("/Permission" , name="Permission")
     */
    public function Permission(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $searchQuery = $request->query->get('search');
        $allPermissions = $entityManager->getRepository(Permission::class)->search($searchQuery);
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications ASC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();


  

        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }

        $permission = new Permission();
        $form = $this->createForm(PermissionFormType::class, $permission);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $newPermission = $form->getData();
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a ajouter une nouvelle permission  ' . $permission->getPermissionName()  );
                $Notification->setSrcImg('images/success.png');
                $timezone = new \DateTimeZone('Africa/Casablanca'); 
                $currentDateTime = new \DateTime('now', $timezone); 
                $Notification->setDateNotifications($currentDateTime);
                $entityManager->persist($Notification);
            }
            $entityManager->persist($newPermission);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('"%s" ajouté avec succès.', $newPermission->getPermissionName())
            );
            return $this->redirectToRoute('Permission');
        }

        return $this->render('Pages/Permission.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'allPermissions' => $allPermissions,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
          

        ]);
    }
       /**
     * @Route("/Permission/{id}" , name="PermissionUpdate")
     */
    public function PermissionUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications ASC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();


        


        $entityManager = $this->getDoctrine()->getManager();
        $permission = $entityManager->getRepository(Permission::class)->find($id);
        $CurrentPermissionName = $permission->getPermissionName();
        $form = $this->createForm(PermissionFormType::class, $permission);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier la permission ' . $CurrentPermissionName . ' vers ' . $form->get('permission_name')->getData() );
                $Notification->setSrcImg('images/updated.png');
                $timezone = new \DateTimeZone('Africa/Casablanca'); 
                $currentDateTime = new \DateTime('now', $timezone); 
                $Notification->setDateNotifications($currentDateTime);
                $entityManager->persist($Notification);
            }
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" Mis à jour avec succés.', $permission->getPermissionName())
             );
            return $this->redirectToRoute('Permission');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Mise à jour',
            'Path' => '/Permission',
            'permission' => $permission,
            'form' => $form->createView(),
            'Title' => 'Permission',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
        

        ]);
    }

      /**
     * @Route("/Permission/Remove/{id}" , name="PermissionRemove")
     */
    public function PermissionDelete(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $permission = $entityManager->getRepository(Permission::class)->find($id);
        $entityManager->remove($permission);
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach ($AllAdmins as $admin) {
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription($this->getUser()->getUsername() . ' a supprimer la permission ' . $permission->getPermissionName() );
            $Notification->setSrcImg('images/delete-file.png');
            $timezone = new \DateTimeZone('Africa/Casablanca'); 
            $currentDateTime = new \DateTime('now', $timezone); 
            $Notification->setDateNotifications($currentDateTime);
            $entityManager->persist($Notification);
        }
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" Supprimé avec succès.', $permission->getPermissionName())
         );
        return $this->redirectToRoute('Permission');

    }
}
