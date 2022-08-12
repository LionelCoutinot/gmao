<?php

namespace App\Controller\Admin;

use App\Entity\Panne;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
class PanneCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Panne::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('machine'),
            AssociationField::new('criticite'),
            AssociationField::new('arret'),
            DateTimeField::new('debutarret'),
            DateTimeField::new('finarret'),
            TextField::new('demandeur'), 
            TextField::new('intervenant'),
            AssociationField::new('typeintervention'),
            AssociationField::new('typepanne'),
            TimeField::new('dureeintervention'),
            TextEditorField::new('travaux'),
        ];
    }
    
}
