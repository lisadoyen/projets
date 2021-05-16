<?php

namespace App\Form;

use App\Entity\TrancheAge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrancheAgeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, [
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('ageMin', IntegerType::class, [
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('ageMax', IntegerType::class, [
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TrancheAge::class,
        ]);
    }
}
