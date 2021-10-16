<?php

namespace App\Form;

use App\Entity\Payments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class PaymentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('checknumber', TextType::class, [
                'label' => 'CheckNumber',
                'attr' => [
                    'placeholder' => 'CheckNumber',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('paymentdate', TextType::class, [
               'label' => 'PaymentDate',
                'attr' => [
                     'placeholder' => 'PaymentDate',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                 ]
             ])
            ->add('amount', TextType::class, [
                'label' => 'Amount',
                'attr' => [
                    'placeholder' => 'Amount',
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
            'data_class' => Payments::class,
        ]);
    }
}
