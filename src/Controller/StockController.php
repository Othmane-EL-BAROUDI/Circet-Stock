<?php

namespace App\Controller;

use App\Entity\Machine;
use App\Entity\Model;
use App\Form\MachineFormType;
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

        $machine = new Machine();
        $form = $this->createForm(MachineFormType::class, $machine);
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid()) {
            $machine = $form->getData();
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
        return $this->render('Pages/view/stockView.html.twig', [
            'userInfo' => $user,
            'machine' => $machine,
            'Path' => '/Stock',
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
        $entityManager->flush();
        $this->addFlash(
            'delete',
            sprintf(' " %s - %s " Supprimé avec succès.', $stock->getModel()->getMarque()->getMarqueName(), $stock->getModel()->getModelName())
        );
        return $this->redirectToRoute('Stock');
    }
    /**
     * @Route("Stock/Edit/{id}" , name="StockUpdate")
     */
    public function StockUpdate(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $CurrentUser = $this->getUser();
        $entityManager = $this->getDoctrine()->getManager();
        $stock = $entityManager->getRepository(Machine::class)->find($id);
        $form = $this->createForm(MachineFormType::class, $stock);
        $form->handleRequest($request);
        $uploadedPicture = $form->get('img_src')->getData();
        $uploadType = $stock->getModel()->getType();
        if ($form->isSubmitted()  && $form->isValid()) {
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
            'Title' => 'Stock',
            'PageName' => 'Mise à jour',

        ]);
    }
}
