<?php

namespace App\Form;

use App\Entity\Model;
use App\Entity\Marque;
use App\Entity\Machine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Proxies\__CG__\App\Entity\Model as EntityModel;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class MachineFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
            ->add('model', EntityType::class, [
                'required' => true,
                'class' => Model::class,
                'choice_label' => 'model_name',
                'multiple' => false,
                'required' => true,
                'attr' => array('class' => 'form-control'),
            ])
            ->add('type', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Type'
                ),
            ])
            ->add('serial_num', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Serial number'
                ),
            ])
            ->add('state', ChoiceType::class, [

                'choices'  => [
                    'Good' => "Good",
                    'Bad' => "bad",

                ],
                'attr' => array('class' => 'form-control', 'placeholder' => '@state'),

            ])
            ->add('available', CheckboxType::class, [

                'attr' => array('class' => 'form-control', 'style' => 'margin-top: -3.5%; width:180px;'),
            ])
            ->add('description', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Description'
                ),
            ])
            ->add('mac_ethernet', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Mac_ethernet'
                ),
            ])
            ->add('mac_wifi', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Mac_wifi'
                ),
            ]);
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Machine::class,
        ]);
    }
}
