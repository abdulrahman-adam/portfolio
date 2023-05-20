<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, ManagerRegistry $manager): Response
    {
        $contact = new Contact();
        $form= $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $contact = $form->getData();
            $em = $manager->getManager();
            $em->persist($contact);
            $em->flush();
            $this->addFlash("success", "Merci, nous avons reçu votre message, nous allons repondre plus que possible");
            return $this->redirectToRoute('app_personal');
        }
        return $this->renderForm('contact/index.html.twig',[
            'formContact'=>$form
        ]);
    }

}
