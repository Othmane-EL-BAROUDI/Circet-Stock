<?php

namespace App\Controller;
use App\Entity\Model;
use App\Form\ModelFormType;
use App\Entity\Notification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModelController extends AbstractController
{
     /**
     * @Route("/Model" , name="Model")
     */
    public function Model(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $searchQuery = $request->query->get('search');
        $allModels = $entityManager->getRepository(Model::class)->search($searchQuery);
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();




        $model = new Model();
        $form = $this->createForm(ModelFormType::class, $model);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $model = $form->getData();
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a ajouter un nouveau model  ' . $model->getModelName()  );
                $Notification->setSrcImg('images/success.png');
                $timezone = new \DateTimeZone('Africa/Casablanca'); 
                $currentDateTime = new \DateTime('now', $timezone); 
                $Notification->setDateNotifications($currentDateTime);
                $entityManager->persist($Notification);
            }
            $entityManager->persist($model);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('"%s" ajouté avec succès.', $model->getModelName())
            );
            return $this->redirectToRoute('Model');
        }

        return $this->render('Pages/Model.html.twig', [
            'form' => $form->createView(),
            'userInfo' => $user,
            'allModels' => $allModels,
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
       

        ]);
    }
       /**
     * @Route("/Model/{id}" , name="ModelUpdate")
     */
    public function ModelUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();
         
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\Notification u WHERE u.userId LIKE :uid ORDER BY u.DateNotifications DESC');
        $query->setParameter('uid', $user->getId());
        $AllNotification = $query->getResult();
        $query->setMaxResults(5);
        $RecentNotification = $query->getResult();


     

        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }
        $entityManager = $this->getDoctrine()->getManager();
        $model = $entityManager->getRepository(Model::class)->find($id);
        $CurrentModelame = $model->getModelName();
        $form = $this->createForm(ModelFormType::class, $model);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
            $query->setParameter('role', '%"ADMIN"%');
            $query->setParameter('role2', '%"SUPER ADMIN"%');
            $AllAdmins = $query->getResult();
            foreach ($AllAdmins as $admin) {
                $Notification = new Notification();
                $Notification->setUserId($admin->getId());
                $Notification->setDescription($this->getUser()->getUsername() . ' a modifier le model ' . $CurrentModelame . ' vers ' . $form->get('model_name')->getData() );
                $Notification->setSrcImg('images/updated.png');
                $timezone = new \DateTimeZone('Africa/Casablanca'); 
                $currentDateTime = new \DateTime('now', $timezone); 
                $Notification->setDateNotifications($currentDateTime);
                $entityManager->persist($Notification);
            }
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" Mis à jour avec succés.', $model->getModelName())
             );
            return $this->redirectToRoute('Model');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Mise à jour',
            'Path' => '/Model',
            'model' => $model,
            'form' => $form->createView(),
            'Title' => 'Modèle',
            'AllNotification' => $AllNotification,
            'RecentNotification' => $RecentNotification,
           

        ]);
    }

      /**
     * @Route("/Model/Remove/{id}" , name="ModelRemove")
     */
    public function ModelDelete(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $model = $entityManager->getRepository(Model::class)->find($id);
        $entityManager->remove($model);
        $query = $entityManager->createQuery('SELECT u FROM App\Entity\User u WHERE u.roles LIKE :role or u.roles LIKE :role2');
        $query->setParameter('role', '%"ADMIN"%');
        $query->setParameter('role2', '%"SUPER ADMIN"%');
        $AllAdmins = $query->getResult();
        foreach ($AllAdmins as $admin) {
            $Notification = new Notification();
            $Notification->setUserId($admin->getId());
            $Notification->setDescription($this->getUser()->getUsername() . ' a supprimer le model ' . $model->getModelName() );
            $Notification->setSrcImg('images/delete-file.png');
            $timezone = new \DateTimeZone('Africa/Casablanca'); 
                $currentDateTime = new \DateTime('now', $timezone); 
                $Notification->setDateNotifications($currentDateTime);
            $entityManager->persist($Notification);
        }
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" Supprimé avec succès.', $model->getModelName())
         );
        return $this->redirectToRoute('Model');
    }
}
