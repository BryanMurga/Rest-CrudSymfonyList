<?php

namespace App\Form;

use App\Entity\Customers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CustomersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customername', TextType::class, [
                'label' => 'CustomerName',
                'attr' => [
                    'placeholder' => 'CustomerName',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('contactlastname', TextType::class, [
                'label' => 'ContactLastName',
                'attr' => [
                    'placeholder' => 'ContactLastName',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('contactfirstname', TextType::class, [
                'label' => 'ContactFirstName',
                'attr' => [
                    'placeholder' => 'ContactFirstName',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Phone',
                'attr' => [
                    'placeholder' => 'Phone',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline1', TextType::class, [
                'label' => 'AddressLine1',
                'attr' => [
                    'placeholder' => 'AddressLine1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline2', TextType::class, [
                'label' => 'AddressLine2',
                'attr' => [
                    'placeholder' => 'AddressLine2',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'City',
                'attr' => [
                    'placeholder' => 'City',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('state', TextType::class, [
                'label' => 'State',
                'attr' => [
                    'placeholder' => 'State',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('postalcode', NumberType::class, [
                'label' => 'PostalCode',
                'attr' => [
                    'placeholder' => 'PostalCode',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('country', TextType::class, [
                'label' => 'Country',
                'attr' => [
                    'placeholder' => 'Country',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('creditlimit', NumberType::class, [
                'label' => 'CrediLimit',
                'attr' => [
                    'placeholder' => 'CrediLimit',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('salesrepemployeenumber', TextType::class, [
                'label' => 'SalesEmployeeNumber',
                'attr' => [
                    'placeholder' => 'SalesEmployeeNumber',
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
            'data_class' => Customers::class,
        ]);
    }
}
