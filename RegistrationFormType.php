<?php
public function buildForm(FormbuildertInterface $builder, array $options): void
  {
    $builder
      ->add('email' EmailType::class, [
            'label'=> 'E-mail'
      ])
      ->add('plainPassword', PasswordType::class, [
            'mapped' => false,
            'attr' => ['autocomplete' => 'new-password'],
            'constraints' => [
            new NotBlanc([
                         'message' => 'Entrez votre mot de pass',
            ]),
            new length([
                       'min' => 6,
                       'minMessage' => "Le mot de passe n'a pas {{ limit}} caractères",
                       'max' => 4096,
            ]),
            ],
            'label' => 'Mot de pass'
      ])
      ->add('username', TextType::class, [
             'label' => 'Nom'
      ])
      ->add('address', TextType::class, [
             'label' => 'Adresse'
      ])
      ->add('codeAdress', TextType::class, [
            'label' => 'Code Postal'
      ])
      ->add('city', TextType::class, [
            'label' => 'Ville'
      ]);
  }