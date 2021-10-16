<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('productname', TextType::class, [
                'label' => 'productname',
                'attr' => [
                    'placeholder' => 'productname',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productscale', TextType::class, [
                'label' => 'productscale',
                'attr' => [
                    'placeholder' => 'productscale',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productvendor', TextType::class, [
                'label' => 'productvendor',
                'attr' => [
                    'placeholder' => 'productvendor',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productdescription', TextType::class, [
                'label' => 'productdescription',
                'attr' => [
                    'placeholder' => 'productdescription',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('quantityinstock', NumberType::class, [
                'label' => 'quantityinstock',
                'attr' => [
                    'placeholder' => 'quantityinstock',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('buyprice', TextType::class, [
                'label' => 'buyprice',
                'attr' => [
                    'placeholder' => 'buyprice',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('msrp', TextType::class, [
                'label' => 'msrp',
                'attr' => [
                    'placeholder' => 'msrp',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productline')
            ->add('ordernumber')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
