<?php

namespace App\Controller\Admin;

use App\Entity\Typepanne;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TypepanneCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Typepanne::class;
    }

    
    public function configureFields(string $pageName): iterable  /* Configuration des champs de l'entité " Typepanne " au niveau de l'administration */      
    {
        return [            
            TextField::new('typepanne'),            
        ];
    }
    
}
