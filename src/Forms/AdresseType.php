<?php
/**
 * Created by PhpStorm.
 * User: kmessmer
 * Date: 18/03/2019
 * Time: 15:33
 */

namespace App\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class AdresseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresseAdresse', TextType::class)
            ->add('adresseCp', IntegerType::class)
            ->add('adresseVille', TextType::class);
    }
}