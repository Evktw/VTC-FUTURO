<?php
/**
 * Created by PhpStorm.
 * User: kmessmer
 * Date: 14/02/2019
 * Time: 14:39
 */

namespace App\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientNom', TextType::class)
            ->add('clientPrenom', TextType::class)
            ->add('clientTelephone', IntegerType::class)
            ->add('clientEmail', EmailType::class);
    }
}
