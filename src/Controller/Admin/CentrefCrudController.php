<?php

namespace App\Controller\Admin;

use App\Entity\Centref;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;

class CentrefCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Centref::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('matfis','matricule fiscale'),
            TextField::new('nom'),
            NumberField::new('nbsalle','nombre de salle'),
            TextField::new('ville'),
            TextField::new('adresse'),
            TelephoneField::new('numtel','numero telephone'),
            EmailField::new('email')
        ];
    }
   
}
