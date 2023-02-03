<?php

namespace App\Controller\Admin;

use App\Entity\Machine;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;


class MachineCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Machine::class;
    }

    
    public function configureFields(string $pageName): iterable   /* Configuration des champs de l'entité " Machine " au niveau de l'administration */      
    {
        return [            
            TextField::new('nom'),
            TextField::new('type'),
            DateField::new('miseservice'),
            TextEditorField::new('caracteristique'),
        ];
    }
    
}
