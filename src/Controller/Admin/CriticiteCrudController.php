<?php

namespace App\Controller\Admin;

use App\Entity\Criticite;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class CriticiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Criticite::class;
    }

    
    public function configureFields(string $pageName): iterable    /* Configuration des champs de l'entité " Criticite " au niveau de l'administration */      
    {
        return [
            TextField::new('criticite'),    
        ];
    }
    
}
