<?php

namespace App\Controller;

use App\Entity\Affectation;
use App\Entity\Machine;
use App\Form\AffectationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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
        $results = $entityManager->getRepository(Machine::class)->search($searchQuery1,$searchQuery2);
        $user = $this->getUser();
        if ($user->getConnected() == false) {
            return $this->redirect('Profile');
        }
        return $this->render('Pages/homePage.html.twig', [
            'controller_name' => 'BaseController',
            'userInfo' => $user,
            'data' => $results,
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
        return $this->render('Pages/view/materielView.html.twig', [
            'userInfo' => $user,
            'machine' => $machine,
            'Path' => '/HomePage',
        ]);
    }
     /**
     * @Route("/Affectation/{id}" , name="Affectation")
     */
    public function Affectation($id,Request $request , EntityManagerInterface $entityManager): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $machine = $entityManager->getRepository(Machine::class)->find($id);

        $user = $this->getUser();

        $affectation = new Affectation();
        $affectation->setDateAffectation(date("d/m/Y") . ' ' . date("h:i:sa"));
        $affectation->setUserAffectation($user);
        $affectation->setMachineAffectation($machine);
        $affectation->setAutocad(1);
        $form = $this->createForm(AffectationFormType::class, $affectation);
        $form->handleRequest($request);
        
        if(  $form->isSubmitted()  && $form->isValid()){
          //  dd($form);
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
        ]);
    }
}
