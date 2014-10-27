<?php
namespace Makoto\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TimelineBlock extends Admin
{
    protected function configureFormFields( FormMapper $formMapper)
    {
        $formMapper
            ->add('events')
            ->add('year')
            ->add('locatedLeft')
            ->add('highLight')
            ->add('isEnabled')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('events')
            ->add('year')
            ->add('locatedLeft')
            ->add('isEnabled')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('events')
            ->add('year')
            ->add('isEnabled')        ;
    }
}