<?php
// src/NAE/PlateformBundle/Admin/PostAdmin.php

namespace NAE\PlateformBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    // Fields to be shown on create/edit forms -> cette fonction permet d'ajouter des champs pour l'ajout
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
            //->add('title', 'entity', array('class'=>'NAE\PlateformBundle\Entity\Post'))
            ->add('title')
            ->add('text','textarea', array('attr'=>array('class'=>'ckeditor')));
    }

    // Fields to be shown on filter forms -> cette fonction permet de gerer le filtre
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('text')
        ;
    }

    // Fields to be shown on lists -> cette fonction permet d'ajouter les colones dans l'admin
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('text')
            ->add('id')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}