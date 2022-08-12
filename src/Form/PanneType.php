<?php

namespace App\Form;

use App\Entity\Panne;
use App\Entity\Arret;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void  
    {
        $builder
        ->add('machine')
        ->add('criticite')
        ->add('arret')
        ->add('debutarret', DateTimeType::class)
        ->add('finarret',DateTimeType::class)
        ->add('demandeur')
        ->add('intervenant')
        ->add('typeintervention')
        ->add('typepanne')
        ->add('dureeintervention',TimeType::class)
        ->add('travaux',TextareaType::class)        
        ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Panne::class,
        ]);
    }
}
