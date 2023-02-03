<?php

namespace App\Form;

use App\Entity\Machine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MachineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void  /* Définition des divers types de champs pour le formulaire d'ajout de machine et des paramètres qui leur sont assignés si besoin */
    {
        $builder
            ->add('nom')
            ->add('type')
            ->add('miseservice', DateType::class, 
            array('years' => range(1960,2100) ))
            ->add('caracteristique')
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Machine::class,
        ]);
    }
}
