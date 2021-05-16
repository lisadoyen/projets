<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dureeEmpruntMax', IntegerType::class,[
                'attr' => [
                'class' => 'form-maintenance-responsive'
                    ]
                ]
            )
            ->add('dureeEmpruntMaxNouveaute', IntegerType::class,[
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('nbEmpruntMax', IntegerType::class,[
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('nbEmpruntMaxNouveaute', IntegerType::class,[
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('dureeNouveaute', IntegerType::class,[
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('genres')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
