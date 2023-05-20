<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ProposType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Le Nom',
                'required' => true,
                'attr' => [
                    'placeholder' => "Indiquez Votre nom"
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => "L'email",
                'required' => true,
                'attr' => [
                    'placeholder' => "Indiquez Vorte Email"
                ]
            ])

            ->add('langauge', TextType::class, [
                'label' => 'La langue préférer',
                'required' => true,
                'attr' => [
                    'placeholder' => "Indiquez La Langur préférer"
                ]
            ])

            ->add('description', TextareaType::class, [
                'label' => 'La description',
                'required' => true,
                'attr' => [
                    'placeholder' => "Indiquez La discription votre poste"
                ]
            ])


            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
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
