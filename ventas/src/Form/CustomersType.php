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
                'label' => 'name',
                'attr' => [
                    'placeholder' => 'name',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('contactlastname', TextType::class, [
                'label' => 'lastname',
                'attr' => [
                    'placeholder' => 'lastname',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('contactfirstname', TextType::class, [
                'label' => 'firstname',
                'attr' => [
                    'placeholder' => 'firstname',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'phone',
                'attr' => [
                    'placeholder' => 'phone',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline1', TextType::class, [
                'label' => 'addressline1',
                'attr' => [
                    'placeholder' => 'addressline1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline2', TextType::class, [
                'label' => 'addressline2',
                'attr' => [
                    'placeholder' => 'addressline2',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'city',
                'attr' => [
                    'placeholder' => 'city',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('state', TextType::class, [
                'label' => 'state',
                'attr' => [
                    'placeholder' => 'state',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('postalcode', NumberType::class, [
                'label' => 'postalcode',
                'attr' => [
                    'placeholder' => 'postalcode',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('country', TextType::class, [
                'label' => 'country',
                'attr' => [
                    'placeholder' => 'country',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('creditlimit', NumberType::class, [
                'label' => 'creditlimit',
                'attr' => [
                    'placeholder' => 'creditlimit',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('salesrepemployeenumber', TextType::class, [
                'label' => 'salesrepemployeenumber',
                'attr' => [
                    'placeholder' => 'salesrepemployeenumber',
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
