<?php

namespace App\Controller\Admin;

use App\Entity\Arret;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class ArretCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Arret::class;
    }

    
    public function configureFields(string $pageName): iterable /* Configuration des champs de l'entité " Arret " au niveau de l'administration */
    {
        return [
            TextField::new('arret'),            
        ];
    }
    
}
