<?php
namespace App\Form;

use App\Data\SearchData;
use App\Data\StatistiqueSearch;
use App\Entity\Categorie;
use App\Entity\Genre;
use App\Entity\Rubrique;
use App\Entity\Statut;
use App\Entity\TrancheAge;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class StatistiqueSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>Categorie::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('genre', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>Genre::class,
                'expanded' => true,
                'multiple' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults([
           'data_class' => StatistiqueSearch::class,
           'method' => 'GET',
           'csrf_protection' =>false
       ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}