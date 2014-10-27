<?php

namespace Makoto\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogueController extends Controller
{
    public function indexAction( $alias = null , $page = 1 )
    {
    	if( $alias)
    	{
    		$category = $this->getDoctrine()
    		 				 ->getRepository('MakotoAdminBundle:PostCategory')
    		 				 ->findOneByAlias( $alias);

    		$query = $this->getDoctrine()
    		 			   ->getRepository('MakotoAdminBundle:Post')
    		 			   ->createQueryBuilder('p')
    		 			   ->select('p')
                           //->select('p.id,p.title,p.author,p.preview,p.alias,p.date')
    		 			   //->leftJoin('MakotoAdminBundle:PostCategory' , 'c' , 'WITH' , 'p.postCategory = c')
    		 			   ->where('p.categoryId = :categoryId')
    		 			   ->setParameter('categoryId' , $category->getId()  )
    		 			   ->orderBy('p.id' , 'DESC')
    		 			   ->getQuery();
    	}else
    	{
    		$category = array();
    		$query = $this->getDoctrine()
    		 			   ->getRepository('MakotoAdminBundle:Post')
    		 			   ->createQueryBuilder('p')
    		 			   ->select('p')
    		 			   ->orderBy('p.id' , 'DESC')
    		 			   ->getQuery();	
    	}

        $paginator  = $this->get('knp_paginator');
        $posts = $paginator->paginate(
            $query,
            $page,
            12
        );
        
        $latest_posts = $this->getDoctrine()
                       ->getRepository('MakotoAdminBundle:Post')
                       ->createQueryBuilder('p')
                       ->select('p.title,p.author,p.preview,p.alias,p.date')
                       ->leftJoin('MakotoAdminBundle:PostCategory' , 'c' , 'WITH' , 'p.postCategory = c')
                       ->setMaxResults(12)
                       ->setFirstResult(0)
                       ->orderBy('p.id' , 'DESC')
                       ->getQuery()->getResult();

    	return $this->render('MakotoCmsBundle:Catalogue:index.html.twig' , 
    		array( 
    			 	'category' => $category , 
    			 	'posts'    => $posts , 
                    'latest_posts' => $latest_posts , 
    			 )
    	);

    }
}
