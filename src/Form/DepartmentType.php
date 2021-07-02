<?php

namespace App\Form;

use App\Entity\Department;
use App\Entity\Depot;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DepartmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => array('class' => 'form-control', 'placeholder' => '')
            ])
            ->add('department', EntityType::class, [
                 'class'=>Depot::class,
                 'label'=>"Depot",
                 'required'=>true,
                 'placeholder'=>'Please choose a value',
                 'attr'=>array('class'=>'form-control')
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Department::class,
        ]);
    }
}
