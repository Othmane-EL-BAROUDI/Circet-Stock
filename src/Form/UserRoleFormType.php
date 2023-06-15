<?php

namespace App\Form;
use App\Entity\Role;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UserRoleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('roles', EntityType::class, [
            'required' => true,
            'class' => Role::class,
            'choice_label' => 'roleName',
            'label' => 'Rôles',
            'query_builder' => function (\App\Repository\RoleRepository $r) {
                return $r->createQueryBuilder('r');
                    
            },
          
                'mapped' => false,
                'multiple' => false,
                'expanded' => false,
            'attr' => ['class' => 'form-control']
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
