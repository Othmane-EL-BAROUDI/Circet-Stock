<?php

namespace App\Controller;

use App\Entity\Marque;
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
    public function Marque(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $allMarques = $entityManager->getRepository(Marque::class)->findAll();
        $user = $this->getUser();

        $marque = new Marque();
        $form = $this->createForm(MarqueFormType::class, $marque);
        $form->handleRequest($request);

        if(  $form->isSubmitted()  && $form->isValid()){
            $newMarque = $form->getData();
            $entityManager->persist($newMarque);
            $entityManager->flush();
            $this->addFlash(
               'success',
               sprintf('"%s" added successfully.', $newMarque->getMarqueName())
            );
            return $this->redirectToRoute('Marque');
        }

        return $this->render('Pages/Marque.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'allMarques' => $allMarques,
            'form' => $form->createView(),
        ]);
    }

       /**
     * @Route("/Marque/{id}" , name="MarqueUpdate")
     */
    public function MarqueUpdate(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $user = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $marque = $entityManager->getRepository(Marque::class)->find($id);
        $form = $this->createForm(MarqueFormType::class, $marque);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $entityManager->flush();
            $this->addFlash(
                'update',
                sprintf('"%s" updated successfully.', $marque->getMarqueName())
             );
            return $this->redirectToRoute('Marque');
        }
        return $this->render('Pages/update/Update.html.twig', [
            'userInfo' => $user,
            'PageName' => 'Mise à jour',
            'Path' => '/Marque',
            'marque' => $marque,
            'form' => $form->createView(),
            'Title' => 'Marque'
        ]);
    }

      /**
     * @Route("/Marque/Remove/{id}" , name="MarquelRemove")
     */
    public function MarqueDelete(Request $request , EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $marque = $entityManager->getRepository(Marque::class)->find($id);
        $entityManager->remove($marque);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf('"%s" deleted successfully.', $marque->getMarqueName())
         );
        return $this->redirectToRoute('Marque');
    }
}