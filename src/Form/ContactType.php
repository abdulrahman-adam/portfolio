<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => "Le nom",
        ])

        ->add('prenom', TextType::class, [
            'label' => "Le prénom",
        ])
        ->add('email', EmailType::class, [
            'label' => "L'adresse mail",
        ])
        ->add('numero', TextType::class, [
            'label' => "Numéro de téléphone",
            'required' => true,

        ])

        ->add('enterprise', TextType::class, [
            'label' => "Le nom de l'enterprise",
            'required' => true,

        ])

        ->add('adresse', TextType::class, [
            'label' => "L'adresse",
            'required' => true,

        ])

        ->add('postal', NumberType::class, [
            'label' => "Le code postale",
            'required' => true,

            
        ])

        ->add('ville', TextType::class, [
            'label' => "La ville",
            'required' => true,

            
        ])
        ->add('poste', TextareaType::class, [
            'label' => "Poste recherché",
            'required' => true,

            
        ])

        ->add('submit', SubmitType::class, [
            'label' => "Envoyer",
            
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }

}
