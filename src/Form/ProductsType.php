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
                'label' => 'ProductName',
                'attr' => [
                    'placeholder' => 'ProductName',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productscale', TextType::class, [
                'label' => 'ProductScale',
                'attr' => [
                    'placeholder' => 'ProductScale',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productvendor', TextType::class, [
                'label' => 'ProductVendor',
                'attr' => [
                    'placeholder' => 'ProductVendor',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productdescription', TextType::class, [
                'label' => 'ProductDescription',
                'attr' => [
                    'placeholder' => 'ProductDescription',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('quantityinstock', NumberType::class, [
                'label' => 'QuantityInStock',
                'attr' => [
                    'placeholder' => 'QuantityInStock',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('buyprice', TextType::class, [
                'label' => 'BuyPrice',
                'attr' => [
                    'placeholder' => 'BuyPrice',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('msrp', TextType::class, [
                'label' => 'MRSP',
                'attr' => [
                    'placeholder' => 'MRSP',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
