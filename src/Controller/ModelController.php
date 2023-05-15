<?php

namespace App\Controller;
use App\Entity\Model;
use App\Form\ModelFormType;
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

        $model = new Model();
        $form = $this->createForm(ModelFormType::class, $model);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
            $model = $form->getData();
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
        ]);
    }
       /**
     * @Route("/Model/{id}" , name="ModelUpdate")
     */
    public function ModelUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();
        if( $user->getConnected() == false ){
            return $this->redirect('Profile');
        }
        $entityManager = $this->getDoctrine()->getManager();
        $model = $entityManager->getRepository(Model::class)->find($id);
        $form = $this->createForm(ModelFormType::class, $model);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
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
            'Title' => 'Modèle'
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
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" Supprimé avec succès.', $model->getModelName())
         );
        return $this->redirectToRoute('Model');
    }
}
