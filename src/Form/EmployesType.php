<?php

namespace App\Form;

use App\Entity\Employes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use App\Entity\StatutEmployes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EmployesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('employeNom',TextType::class,['label' => 'Nom : '])
            ->add('employePrenom',TextType::class,['label' => 'Prenom : '])
            ->add('employeTelephone',IntegerType::class,['label' => 'Telephone'])
            ->add('employeMail',EmailType::class,['label' => 'Mail'])
            ->add('employeAdresse',TextType::class,['label' => 'Adresse : '])
            ->add('employeCp',IntegerType::class,['label' => 'Cp'])
            ->add('employeVille',TextType::class,['label' => 'Ville : '])
            ->add('roles', ChoiceType::class, [
                'choices'  => [
                    'Rh' => 'Role_Rh',
                    'Compta' => 'Role_Compta',
                    'Hotline' => 'Role_Hotline',
                    'Chauffeur' => 'Role_Chauffeur',
                ],
                'multiple'  => true,
            ])
            ->add('StatutEmploye', EntityType::class, [
                'class' => StatutEmployes::class,
                'choice_label' => 'statutNomemploye',
            ])
        ;
        dump($options);

        if($options["data"]->getIdEmploye() == null){
            $builder ->add('login',TextType::class,['label' => 'Login : '])
                ->add('employeMdp',PasswordType::class,['label' => 'Mdp : ']);
        }else{
            $builder ->add('login',HiddenType::class,['label' => 'Login : '])
                ->add('employeMdp',HiddenType::class,['label' => 'Mdp : ']);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Employes::class,
        ]);
    }
}
