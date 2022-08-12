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

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('criticite'),           
        ];
    }
    
}
