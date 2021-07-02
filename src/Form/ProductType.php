<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Department;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'label'=>'Product name',
                'attr'=> array( 'class'=>'form-control', 'placeholder'=>'Please type in the category name...' )
            ])
            ->add('code',TextType::class,[
                'label'=>'Product Code',
                'attr'=> array( 'class'=>'form-control', 'placeholder'=>'Please type in the category name...' )
            ])
            ->add('price',TextType::class,[
                'label'=>'Product Price',
                'attr'=> array( 'class'=>'form-control', 'placeholder'=>'Please type in the category name...' )
            ])
            ->add('category', EntityType::class, [
                'class'=>Category::class,
                'label'=>"Category",
                'required'=>true,
                'placeholder'=>'Please choose a value',
                'attr'=>array('class'=>'form-control')
           ])
            ->add('department', EntityType::class, [
                'class'=>Department::class,
                'label'=>"Department",
                'required'=>true,
                'placeholder'=>'Please choose a value',
                'attr'=>array('class'=>'form-control')
           ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
