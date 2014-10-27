<?php
// src/Makoto/AdminBundle/Admin/ContactTypeAdmin.php

namespace Makoto\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ContactTypeAdmin extends Admin
{
	protected function configureFormFields( FormMapper $formMapper)
	{
		$formMapper
			->add('subject')
			->add('icon')
			->add('orderId')
			;
	}

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('orderId')
        	->add('subject')
        	->add('icon')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('orderId')
            ->addIdentifier('subject')
            ->add('icon')
        ;
    }
}