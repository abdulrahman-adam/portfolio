<?php

namespace App\Controller;

use App\Entity\Propos;
use App\Form\ProposType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProposController extends AbstractController
{
    #[Route('/propos', name: 'app_propos')]
    public function index(): Response
    {
        return $this->render('propos/index.html.twig', [
            'controller_name' => 'ProposController',
        ]);
    }

    #[Route('/propos', name: 'app_propos')]
    public function single(Request $request, ManagerRegistry $manager): Response
    {
        $propos = new Propos();
        $form = $this->createForm(ProposType::class, $propos);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $propos = $form->getData();
            $em = $manager->getManager();
            $em->persist($propos);
            $em->flush();
            $this->addFlash("success", "Merci, nous avons reçu votre message, nous allons repondre plus que possible");
            return $this->redirectToRoute('app_personal');
        }
        return $this->renderForm('propos/index.html.twig',[
            'formPropos'=>$form
        ]);
    }

}
