<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    #[Route('/post', name: 'app_post')]
    public function index(ManagerRegistry $manager, Request $request): Response
    {
        {
            $post = new Post();
            $form= $this->createForm(PostType::class, $post);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $post = $form->getData();
                $em = $manager->getManager();
                $em->persist($post);
                $em->flush();
                $this->addFlash("success", "Merci, nous avons reçu votre message, nous allons repondre plus que possible");
                return $this->redirectToRoute('app_personal');
            }
            return $this->renderForm('post/index.html.twig',[
                'formPost'=>$form
            ]);
        }
    }
}
