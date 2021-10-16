<?php

namespace App\Form;

use App\Entity\Orders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderdate', TextType::class, [
                'label' => 'orderdate',
                'attr' => [
                    'placeholder' => 'orderdate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('requireddate', TextType::class, [
                'label' => 'requireddate',
                'attr' => [
                    'placeholder' => 'requireddate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('shippeddate', TextType::class, [
                'label' => 'shippeddate',
                'attr' => [
                    'placeholder' => 'shippeddate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('status', TextType::class, [
                'label' => 'status',
                'attr' => [
                    'placeholder' => 'status',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('comments', TextType::class, [
                'label' => 'comments',
                'attr' => [
                    'placeholder' => 'comments',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('customernumber')
            ->add('productcode')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Orders::class,
        ]);
    }
}
