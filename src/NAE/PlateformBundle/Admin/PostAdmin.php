<?php
// src/NAE/PlateformBundle/Admin/PostAdmin.php

namespace NAE\PlateformBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PostAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array('label' => 'Textes'))
            ->add('author', 'entity', array('class' => 'NAE\PlateformBundle\Entity\Post'))
            ->add('body') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('text')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('text')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('text')
            ->add('id')
//            ->add('id_user')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}