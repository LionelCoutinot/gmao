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

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('arret'),            
        ];
    }
    
}
