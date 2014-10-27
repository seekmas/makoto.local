<?php
namespace Makoto\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlockAdmin extends Admin
{
    protected function configureFormFields( FormMapper $formMapper)
    {
        $formMapper
            ->add('blockAlias')
            ->add('blockTitle')
            ->add('blockContent','sonata_formatter_type',array(
                'source_field'         => 'blockContent',
                'source_field_options' => array('attr' => array('class' => 'span10', 'rows' => 80)),
                'format_field'         => 'formatter',
                'target_field'         => 'blockContent',
                'ckeditor_context'     => 'default',
                'event_dispatcher'     => $formMapper->getFormBuilder()->getEventDispatcher()
            ))
            ->add('fromPage')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('blockAlias')
            ->add('blockTitle')
            ->add('blockContent')
            ->add('fromPage')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('blockAlias')
            ->add('blockTitle')
            //->add('blockContent')
            ->add('fromPage')
        ;
    }
}