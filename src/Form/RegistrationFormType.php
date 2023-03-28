<?php

namespace App\Form;

use App\Entity\Centref;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            
            ->add('matfis', NumberType::class, [
                'label' => 'matricule fiscale',
                'attr' => ['placeholder' => 'entrez votre matricule fiscale'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre matricule fiscale s"il vous plait',
                    ]),
                ],
            ])

            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'entrez votre nom du centre'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre nom du centre s"il vous plait',
                    ]),
                ],
            ])
            ->add('numtel', TelType::class, [
                'label' => 'numero du téléphone',
                'attr' => ['placeholder' => 'entrez votre numero du téléphone'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre numero du téléphone s"il vous plait',
                    ]),
                ],
            ])
            ->add('nbsalle', NumberType::class, [
                'label' => 'nombre des salles',
                'attr' => ['placeholder' => 'entrez vos nombre de salle'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez vos nombre de salle s"il vous plait',
                    ]),
                ],
            ])
            ->add('ville', TextType::class, [
                'label' => 'ville',
                'attr' => ['placeholder' => 'entrez votre ville'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre ville s"il vous plait',
                    ]),
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'adresse',
                'attr' => ['placeholder' => 'entrez votre adresse du centre'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'entrez votre adresse s"il vous plait',
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Centref::class,
        ]);
    }
}
