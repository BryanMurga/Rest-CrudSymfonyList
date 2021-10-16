<?php

namespace App\Form;

use App\Entity\Productlines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ProductlinesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('textdescription', TextType::class, [
                'label' => 'TextDescripción',
                'attr' => [
                    'placeholder' => 'TextDescripción',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('htmldescription', TextType::class, [
                'label' => 'HtmlDescription',
                'attr' => [
                    'placeholder' => 'HtmlDescription',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('image', NumberType::class, [
                'label' => 'Image',
                'attr' => [
                    'placeholder' => 'Image',
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
            'data_class' => Productlines::class,
        ]);
    }
}