<?php

namespace App\Form;

use App\Data\ArticleSearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class php extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => false,
                'required' => true,
                'choices' => [
                    'Identifiant' => 'id',
                    'Gencode' => 'gencode',
                    'Code d\'article' => 'codeArticle',
                ],
                'placeholder' => 'Comment cherchez-vous l\'article ?',
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('value', TextType::class, [
                'label' => false,
                'required' => true,
                'attr' => ['placeholder' => 'Identifiant ou ISBN ou code d\'article...', 'class' => 'form-maintenance-responsive']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => ArticleSearch::class,
           'method' => 'GET',
           'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}