<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Username'
                ),
            ])
          //  ->add('usernameCanonical')
            ->add('email',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Email'
                ),
            ])
           // ->add('emailCanonical')
           // ->add('enabled')
           // ->add('salt')
            ->add('password',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Password'
                ),
            ])
           // ->add('lastLogin')
          //  ->add('confirmationToken')
          //  ->add('passwordRequestedAt')
            ->add('roles')
            ->add('matricule',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Matricule'
                ),
            ])
            ->add('job',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Job'
                ),
            ])
            ->add('manager',TextType::class,[
                'attr' =>array(
                    'placeholder' => '@Manager'
                ),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
