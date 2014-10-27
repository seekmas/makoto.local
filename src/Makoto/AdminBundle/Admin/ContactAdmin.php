<?php
// src/Makoto/AdminBundle/Admin/ContactAdmin.php

namespace Makoto\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ContactAdmin extends Admin
{
	protected function configureFormFields( FormMapper $formMapper)
	{
		$formMapper
			->add('contactType' , 'entity' , array('class'=>'Makoto\AdminBundle\Entity\ContactType' , 
                                                   'property' => 'subject',
                                                   )
            )
			->add('contactMethod')
			->add('description')
			->add('orderId')
			->add('active')
			;
	}

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
        	->add('description')
        	->add('orderId')
            ->add('contactType.subject')
            ->add('contactMethod')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('orderId')
            ->addIdentifier('contactType.subject')
            ->add('active')
            ->add('contactMethod')
        ;
    }
}