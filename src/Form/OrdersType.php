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
                'label' => 'OrderDate',
                'attr' => [
                    'placeholder' => 'OrderDate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('requireddate', TextType::class, [
                'label' => 'RequiredDate',
                'attr' => [
                    'placeholder' => 'RequireDate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('shippeddate', TextType::class, [
                'label' => 'ShippedDate',
                'attr' => [
                    'placeholder' => 'ShippedDate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('status', TextType::class, [
                'label' => 'Status',
                'attr' => [
                    'placeholder' => 'Status',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('comments', TextType::class, [
                'label' => 'Comments',
                'attr' => [
                    'placeholder' => 'Comments',
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
            'data_class' => Orders::class,
        ]);
    }
}
