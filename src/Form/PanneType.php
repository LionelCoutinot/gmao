<?php

namespace App\Form;

use App\Entity\Panne;
use App\Entity\Arret;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PanneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void  /* Définition des divers types de champs pour le formulaire de commande et des paramètres qui leur sont assignés si besoin */
    {
        $builder
        ->add('machine')
        ->add('criticite')
        ->add('arret')
        ->add('debutarret', DateTimeType::class,
        array('years' => range(1000,2100), 
        'date_format'=> 'dd MM yyyy')
         )
        ->add('finarret',DateTimeType::class, 
        array('years' => range(1000,2100), 
        'date_format'=> 'dd MM yyyy')
         )
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
