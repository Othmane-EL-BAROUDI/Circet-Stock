<?php

namespace App\Form;

use App\Entity\Restitution;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RestitutionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type_restitution', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Titre de restitution',
                    'style' => ' width:100%;',
                    'class' => 'form-control',
                ),
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'attr' => array(
                    'placeholder' => '@Description',
                    'style' => ' width:100%;  height:90px; resize: none;',
                    'class' => 'form-control',
                ),
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restitution::class,
        ]);
    }
}
