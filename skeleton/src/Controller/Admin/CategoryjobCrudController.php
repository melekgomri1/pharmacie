<?php

namespace App\Controller\Admin;

use App\Entity\Categoryjob;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoryjobCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categoryjob::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
