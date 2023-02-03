<?php

namespace App\Form;

use App\Data\SearchData;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options) /* Définition des divers types de champs pour le formulaire de recherche et des paramètres qui leur sont assignés si besoin */
    {
        $builder ->add('mac', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder' => 'Recherche Machine'
            ]
        ])

        ->add('ti', TextType::class, [
            'label' => false,
            'required' => false,
            'attr' => [
                'placeholder' => 'RechercheType de maintenance'
            ]
        ])
            ->add('tp', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Recherche type de panne'
                ]
            ])
            ->add('min',  DateTimeType::class, [
                'label' => 'Date min',
                'required' => false,
                'years' => range(1960,2100), 
                'date_format'=> 'dd MM yyyy'       
            ])
            ->add('max',  DateTimeType::class, [
                'label' => 'Date max',
                'required' => false,
                'years' => range(1960,2100), 
                'date_format'=> 'dd MM yyyy'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver) /* Spécification de l'emploi de la méthode " GET " au niveau du filtre, pour pouvoir passer les paramètres dans l'URL  */
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    public function getBlockPrefix() /* Fonction permettant de retirer le préfixe afin d'avoir des paramètres les plus simple possible*/
    {
        return '';
    }

}
