<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' =>'Intitulé du poste',
                'required' => true,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
            ])

            ->add('type', TextType::class, [
                'label' =>'Objet de la mission',
                'required' => true,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
            ])

            ->add('description', TextareaType::class, [
                'label' =>'Description de la mission',
                'required' => true,
                'row_attr' => [
                    'class' => 'form-floating',
                ],
            ])

            ->add('submit', SubmitType::class, [
                'label' =>'Envoyer'
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
