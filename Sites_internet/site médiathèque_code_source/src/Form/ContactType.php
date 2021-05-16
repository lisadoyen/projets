<?php

namespace App\Form;

use App\Data\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => "Nom",
                'required' => true,
                'attr' => ['class' => 'form-maintenance-responsive']
            ])
            ->add('prenom', TextType::class, [
                'label' => "Prénom",
                'required' => true,
                'attr' => ['class' => 'form-maintenance-responsive']
            ])
            ->add('email', EmailType::class, [
                'label' => "Adresse e-mail",
                'required' => true,
                'attr' => ['class' => 'form-maintenance-responsive']
            ])
            ->add('contenu', TextareaType::class, [
                'label' => "Message",
                'required' => true,
                'attr' => ['class' => 'form-maintenance-responsive']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => Contact::class,
           'method' => 'GET',
           'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}