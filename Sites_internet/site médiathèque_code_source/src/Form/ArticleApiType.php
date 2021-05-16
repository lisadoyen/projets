<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Genre;
use App\Entity\Rubrique;
use App\Entity\Statut;
use App\Entity\Tag;
use App\Entity\TrancheAge;
use App\Repository\ActionRepository;
use App\Repository\TypeActionRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleApiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gencode', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('codeArticle', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('titre', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('description', CKEditorType::class, [
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('vignette', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('datePublication', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['data-provide' => 'datepicker', 'class' => 'form-maintenance-responsive'],
                'html5' => false,
                'format' => 'MM/dd/yyyy'
            ])
            ->add('dateObtention', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['data-provide' => 'datepicker', 'value' => $options['dateObtention'], 'class' => 'form-maintenance-responsive'],
                'html5' => false,
                'mapped' => false,
                'format' => 'MM/dd/yyyy'
            ])
            ->add('montantObtention', NumberType::class, [
                'required' => true,
                'label' => 'Montant d\'achat',
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('montantCaution', NumberType::class, [
                'required' => true,
                'label' => 'Montant de caution',
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('montantVente', NumberType::class, [
                'required' => true,
                'label' => 'Montant de vente par défaut',
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('observation', TextType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('numerique')
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'required' => true,
                'placeholder' => 'Choisissez une catégorie ...',
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('trancheAge', EntityType::class, [
                'class' => TrancheAge::class,
                'required' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('statut', EntityType::class, [
                'class' => Statut::class,
                'required' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('genre', EntityType::class, [
                'class' => Genre::class,
                'required' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            ->add('rubriques', EntityType::class, [
                'class' => Rubrique::class,
                'required' => false,
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
            // TODO: system de tags (a changer dans le template/article/_form.html.twig)
                /*
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'required' => false,
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
                */
            ->add('entites', CollectionType::class, [
                'entry_type' => EntiteType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'label' => 'Entités associées',
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ]
            ])
        ;

        $formModifier = function (FormInterface $form, Categorie $categorie = null) {
            $genres = null === $categorie ? [] : $categorie->getGenres();
            $rubriques = null === $categorie ? [] : $categorie->getRubriques();

            $form->add('genre', EntityType::class, [
                'class' => Genre::class,
                'placeholder' => 'Choisissez un genre ...',
                'choices' => $genres,
            ]);
            $form->add('rubriques', EntityType::class, [
                'class' => Rubrique::class,
                'multiple' => true,
                'expanded' => true,
                'placeholder' => 'Choisissez une ou plusieurs rubrique(s) ...',
                'choices' => $rubriques,
            ]);
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // l'article du formulaire
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getCategorie());
            }
        );

        $builder->get('categorie')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $categorie = $event->getForm()->getData();

                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $categorie);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'dateObtention' => ''
        ]);
        $resolver->setAllowedTypes('dateObtention', 'string');
    }
}
