<?php
// src/Makoto/AdminBundle/Admin/PostAdmin.php

namespace Makoto\AdminBundle\Admin;

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
            ->add('title', 'text', array('label' => 'Post Title' , 'attr' => array('class'=>'form-control')))
            ->add('alias', 'text', array('label' => 'Alias Title For Link' , 'attr' => array('class'=>'form-control')))
            ->add('author', 'entity', array('class' => 'Application\Sonata\UserBundle\Entity\User' , 
                                            'attr' => array( 'style' => 'width:200px;' ) , 
                )
            )
            ->add('postTag' , 'entity' , array('required' => false ,
					       'class'=>'Makoto\AdminBundle\Entity\PostTag' ,
                                               'property' => 'tag' , 
                                               'multiple' => true , 
                                               'attr' => array( 'style' => 'width:400px;' ) , 
                                              )
            )
            ->add('postCategory' , 'entity' ,  array('required'     => false , 
						     'class'        => 'Makoto\AdminBundle\Entity\PostCategory' , 
                                                     'property'     => 'subject' , 
                                                     'empty_value'  => 'Select a Category' ,
                                                     'required'     => false

                                                    )
            )
            ->add('body', 'sonata_formatter_type', array(
                'source_field'         => 'body',
                'source_field_options' => array('attr' => array('class' => 'span10', 'rows' => 80)),
                'format_field'         => 'bodyFormatter',
                'target_field'         => 'body',
                'ckeditor_context'     => 'default',
                'event_dispatcher'     => $formMapper->getFormBuilder()->getEventDispatcher()
            ));
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('author')
            ->add('body')
            ->add('postCategory.subject')
            ->add('date')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('author')
            ->add('postCategory.subject')
            ->add('date')
        ;
    }

    public function prePersist( $post)
    {
        $this->autoUpdate( $post);
    }

    public function preUpdate( $post)
    {
        $this->autoUpdate( $post);
    }

    protected function autoUpdate( $post)
    {
        $alias = $post->getAlias();

        $alias = trim( preg_replace('/[^a-zA-Z0-9]+/', '-', $alias ) , '-' );

        $alias = strtolower( $alias);

        $post->setDate( new \Datetime() );

        $post->setPreview( strip_tags( mb_substr( $post->getBody() , 0 , 400 ) ). ' .. ' );
        
        $post->setAlias( $alias  ); 
    }

}
