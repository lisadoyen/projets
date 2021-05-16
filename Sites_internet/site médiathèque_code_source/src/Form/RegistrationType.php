<?php

namespace App\Form;

use App\Entity\Entreprise;
use App\Entity\Fonction;
use App\Entity\User;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('avatar', FileType::class, [
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png' ,
                            'image/jpg',
                            'image/jpeg'
                        ],
                        'mimeTypesMessage' => 'Insérer une image valide (png,jpg,jpeg)',
                    ])
                ],
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ])
            ->add('username', TextType::class, array(
                'label' => 'Identifiant',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'identifiant doit faire au minimum 2 caractères']),
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('Roles', ChoiceType::class, [
                'required' => true,
                'choices'  => [
                    'Admin' => "ROLE_ADMIN",
                    'Benevole' => "ROLE_BENEVOLE",
                    'Adherent' => "ROLE_ADHERENT",
                ],
                'multiple' => true
            ])
            ->add('email_recup', TextType::class, array(
                'label' => 'Email de récupération',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'email doit faire au minimum 2 caractères']),
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('matricule', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('nom', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('prenom', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('sexe', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('password',PasswordType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('email_perso', TextType::class, array(
                'label' => 'Email Personnel',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'email doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_perso', TextType::class, array(
                'label' => 'Téléphone Personnel',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_perso2', TextType::class, array(
                'label' => 'Téléphone Personnel secondaire',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('email_pro', TextType::class, array(
                'label' => 'Email Professionnel',
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\'email doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_pro', TextType::class, array(
                'label' => 'Téléphone Professionnel',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_pro2', TextType::class, array(
                'label' => 'Téléphone Professionnel secondaire',
                'constraints' => [
                    new Assert\Length(['min' => 10, 'minMessage' => 'Le numéro de téléphone doit faire 10 chiffres']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('notification_perso', CheckboxType::class, [
                'label' => 'Notification Personnel',
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ])
            ->add('notification_pro', CheckboxType::class, [
                'label' => 'Notification Professionnel',
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ])
            ->add('droitEmprunt', CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ])
            ->add('droitAchat', CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ])
            ->add('ville', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'La ville doit faire au minimum 2 caractères']),
                ],
                'required' => false
            ))
            ->add('adresse_rue', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'L\' adresse de doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('adresse_rue_complement', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le complement doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('code_postal', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('entreprise', EntityType::class, array(
                'class' => Entreprise::class,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('fonction', EntityType::class, array(
                'class' => Fonction::class,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('commentaire_utilisateur', TextareaType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le commentaire doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('commentaire_staff', TextareaType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le commentaire doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
