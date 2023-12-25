<?php

namespace App\Controller\Admin;

use App\Entity\Job;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class JobCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Job::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('categoryjob'),
            TextField::new('nom'),
            TextField::new('prenom'), 
            TextField::new('email'),
            IntegerField::new('numtelephone'),
            TextField::new('competance'),
            AssociationField::new('categoryjob')
        ];
}
}