<?php

namespace App\Controller\Admin;

use App\Entity\Typeintervention;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TypeinterventionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Typeintervention::class;
    }

    
    public function configureFields(string $pageName): iterable   /* Configuration des champs de l'entité " Typeintervention " au niveau de l'administration */      
    {
        return [
           
            TextField::new('typeintervention'),
            
        ];
    }
    
}
