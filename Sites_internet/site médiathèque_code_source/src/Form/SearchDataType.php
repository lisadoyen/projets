<?php
namespace App\Form;

use App\Data\SearchData;
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


class SearchDataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('search', TextType::class, [
                'label' => false,
                'required' => false,
            ])
            ->add('genre', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>Genre::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('categorie', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>Categorie::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('nouveaute',CheckboxType::class,[
                'label' => 'nouveaute',
                'required' => false,
            ])
            ->add('statut', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>Statut::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('age', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>TrancheAge::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('rubrique', EntityType::class,[
                'label' => false,
                'required' => false,
                'class' =>Rubrique::class,
                'expanded' => true,
                'multiple' => true
            ])
            ->add('dateMin')
            ->add('dateMax')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults([
           'data_class' => SearchData::class,
           'method' => 'GET',
           'csrf_protection' =>false
       ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}