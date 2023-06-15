<?php

namespace App\Form;


use App\Entity\User;
use App\Entity\Permission;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Username',
                ),
            ])
            ->add('matricule', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Matricule'
                ),
            ])
            ->add('job', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Poste'
                ),
                'label' => 'Poste',
            ])
            //  ->add('usernameCanonical')
            ->add('email', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Email'
                ),
            ])
            // ->add('emailCanonical')
            // ->add('enabled')
            // ->add('salt')
          
            ->add('user_permission', EntityType::class, [
                'required' => true,
                'class' => Permission::class,
                'choice_label' => 'permission_name',
                'multiple' => true,
                'required' => false,
                'label' => 'Permissions',
            ])

            // ->add('lastLogin')
            //  ->add('confirmationToken')
            //  ->add('passwordRequestedAt')
           
            ->add('manager', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Manager'
                ),
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
