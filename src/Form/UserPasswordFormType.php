<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserPasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

      
            ->add('Newpassword',TextType::class,[
                'attr' => array('class' => 'form-control', 'placeholder' => 'Confirmation du mot de passe' , 'style'=> 'margin-bottom : 10px'),
                'label' => "Nouveau mot de passe",
                'required' => true,
                ])
                ->add('Confpassword',TextType::class,[
                    'attr' => array('class' => 'form-control', 'placeholder' => 'Confirmation du mot de passe'),
                    'label' => "Confirmation du mot de passe",
                    'required' => true,
                    ])
          
       
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
