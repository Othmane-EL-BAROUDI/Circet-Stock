<?php

namespace App\Form;

use App\Entity\Marque;
use App\Entity\Model;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ModelFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('model_name',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Nom_du_modèle'
                ),
                'required' => true,
                'label' => 'Nom du modèle',
            ])
            ->add('marque', EntityType::class, [
                'class' => Marque::class,
                'choice_label' => 'marque_name',
                'multiple' => false,
                'required' => true,
                'attr' => array('class' => 'form-control'),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Model::class,
        ]);
    }
}
