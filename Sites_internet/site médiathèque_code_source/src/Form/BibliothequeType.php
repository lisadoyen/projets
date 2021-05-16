<?php

namespace App\Form;

use App\Entity\Bibliotheque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BibliothequeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeLivre')
            ->add('codeIsbn')
            ->add('titreDesignation')
            ->add('photo')
            ->add('format')
            ->add('descriptionArticle')
            ->add('typologie')
            ->add('dateAchat')
            ->add('nombreDeSorties')
            ->add('dateDeRetrait')
            ->add('inactif')
            ->add('disponible')
            ->add('lien')
            ->add('dateCreation', DateType::class, array(
                'empty_data' => ' ',
                'html5' => false,
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'attr' => ['placeholder' => 'jj/mm/aaaa']
            ))
            ->add('fkIdAuteur')
            ->add('fkIdGenre')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bibliotheque::class,
        ]);
    }
}
