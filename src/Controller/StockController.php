<?php

namespace App\Controller;
use App\Entity\Machine;
use App\Form\MachineFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class StockController extends AbstractController
{
    /**
     * @Route("Stock" , name="Stock")
     */
    public function Stock(Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $results = $entityManager->getRepository(Machine::class)->findAll();
        $user = $this->getUser();

        $machine = new Machine();
        $form = $this->createForm(MachineFormType::class, $machine);
        $form->handleRequest($request);
        if(  $form->isSubmitted()  && $form->isValid()){
            $newItem = $form->getData();
            $entityManager->persist($newItem);
            $entityManager->flush();
            return $this->redirectToRoute('Stock');
        }
        
        return $this->render('Pages/Stock.html.twig', [
            'userInfo' => $user,
            'form' => $form->createView(),
            'Allmachines' => $results,
        ]);
    }

     /**
     * @Route("stockView/{id}" , name="stockView")
     */
    public function stockView($id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $machine = $entityManager->getRepository(Machine::class)->find($id);
        $user = $this->getUser();
        return $this->render('Pages/view/stockView.html.twig', [
            'userInfo' => $user,
            'machine' => $machine,
            'Path' => '/Stock',
        ]);
    }

    /**
     * @Route("Stock/Remove/{id}" , name="StockRemove")
     */
    public function PermissionDelete( EntityManagerInterface $entityManager, $id): Response
    {   
        $entityManager = $this->getDoctrine()->getManager();
        $stock = $entityManager->getRepository(Machine::class)->find($id);
        $entityManager->remove($stock);
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf(' " %s - %s " deleted successfully.', $stock->getModel()->getMarque()->getMarqueName() ,$stock->getModel()->getModelName())
         );
        return $this->redirectToRoute('Stock');

    }
}
