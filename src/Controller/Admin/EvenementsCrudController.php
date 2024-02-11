<?php

namespace App\Controller\Admin;

use App\Entity\Evenements;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EvenementsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Evenements::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('titre'),
            AssociationField::new('categorie'),
            TextEditorField::new('description'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(),
            ImageField::new('image')->setBasePath('/uploads/images/evenements')->onlyOnIndex(),
            DateTimeField::new('created_at'),
            TextField::new('lieu'),
            TextField::new('invite'),

        ];
    }
    
}
