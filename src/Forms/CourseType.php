<?php
/**
 * Created by PhpStorm.
 * User: kmessmer
 * Date: 18/03/2019
 * Time: 15:33
 */

namespace App\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adrDepart', TextType::class)
            ->add('adrArrivee', TextType::class)
            ->add('HeureDepart', DateTimeType::class)
            ->add('nbPassagers', IntegerType::class);
    }
}