<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Makoto\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PostCategoryAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('subject', 'text', array('label' => 'Category Title'))
            ->add('alias' , 'text' , array('label' => 'Alias for URL'))
            ->add('orderId', 'text', array('label' => 'Order Id'))
            ->add('description' , 'textarea' , array('label' => 'description'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('subject')
            ->add('alias')
            ->add('orderId')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('subject')
            ->add('alias')
            ->add('orderId')
        ;
    }

    protected function configureShowFields( ShowMapper $showMapper )
    {
        $showMapper->add('subject')

        ;
    }
}