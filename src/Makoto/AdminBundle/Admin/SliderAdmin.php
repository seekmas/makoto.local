<?php
// src/Makoto/AdminBundle/Admin/SliderAdmin.php

namespace Makoto\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SliderAdmin extends Admin
{
	protected function configureFormFields( FormMapper $formMapper)
	{
		$formMapper
			->add('headTitle')
			->add('bigTitle')
			->add('smallTitle')
			->add('orderId')
			->add('media' , 'text' , array('required'=>false))
			;
	}

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('orderId')
            ->add('headTitle')
            ->add('bigTitle')
            ->add('smallTitle')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('orderId')
            ->addIdentifier('headTitle')
            ->add('bigTitle')
        ;
    }
}