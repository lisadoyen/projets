<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class EditProfilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ->add('email_perso', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],)
            )
            ->add('email_recup', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_perso', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_perso2', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('email_pro', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_pro', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('tel_pro2', TextType::class, array(
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
            ->add('notification_perso', CheckboxType::class, [
                'label_attr' => ['class' => 'switch-custom'],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ])
            ->add('notification_pro', CheckboxType::class, [
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
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
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
            ->add('commentaire_utilisateur', TextType::class, array(
                'constraints' => [
                    new Assert\Length(['min' => 2, 'minMessage' => 'Le commentaire doit faire au minimum 2 caractères']),
                ],
                'required' => false,
                'attr' => [
                    'class' => 'form-maintenance-responsive'
                ],
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
