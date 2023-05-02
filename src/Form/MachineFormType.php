<?php

namespace App\Form;

use App\Entity\Machine;
use App\Entity\Marque;
use App\Entity\Model;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class MachineFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Type'
                ),
            ])
            ->add('serial_num', TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Serial number'
                ),
            ])
            ->add('state', TextType::class,[
                'attr' =>array(
                    'placeholder' => '@state'
                ),
            ])
            ->add('available')
            ->add('description', TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Description'
                ),
            ])
            ->add('mac_ethernet', TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Mac_ethernet'
                ),
            ])
            ->add('mac_wifi', TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Mac_wifi'
                ),
            ])
    
           
            
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Machine::class,
        ]);
    }
}
