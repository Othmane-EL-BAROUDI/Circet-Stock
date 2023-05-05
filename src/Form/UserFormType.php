<?php

namespace App\Form;

use App\Entity\Role;
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
                    'placeholder' => '@Username'
                ),
            ])
            ->add('matricule', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Matricule'
                ),
            ])
            ->add('job', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Job'
                ),
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
            ->add('password', TextType::class, [
                'attr' => array(
                    'placeholder' => '@Password',
                ),
            ])
            ->add('user_permission', EntityType::class, [
                'required' => true,
                'class' => Permission::class,
                'choice_label' => 'permission_name',
            ])

            // ->add('lastLogin')
            //  ->add('confirmationToken')
            //  ->add('passwordRequestedAt')
            ->add('roles', EntityType::class, [
                'required' => true,
                'class' => Role::class,
                'choice_label' => 'roleName',
                'query_builder' => function (\App\Repository\RoleRepository $r) {
                    return $r->createQueryBuilder('r');
                        
                },
              
                    'mapped' => false,
                    'multiple' => false,
                    'expanded' => false,
                'attr' => ['class' => 'form-control']
            ])
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
