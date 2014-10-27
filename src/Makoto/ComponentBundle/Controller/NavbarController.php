<?php

namespace Makoto\ComponentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NavbarController extends Controller
{
    public function indexAction( $active_router = null)
    {
    	//load navigation parameters from yml configuration file
    	$parameters = $this->container->getParameterBag()->get('navigation_patameter');

    	if( $active_router == null)
    		$active_router = 'makoto_cms_homepage';

        return $this->render('MakotoComponentBundle:Navbar:index.html.twig' , 
        			array( 'parameters' => $parameters , 
        				   'active_router'     => $active_router , 
        				 )
        );
    }

    public function sidecategoryAction()
    {

        $categories = $this->getDoctrine()
                         ->getRepository('MakotoAdminBundle:PostCategory')
                         ->createQueryBuilder('c')
                         ->select('c')
                         ->orderBy('c.orderId' , 'DESC')
                         ->getQuery()
                         ->getResult();

        return $this->render('MakotoComponentBundle:Navbar:sidecategory.html.twig' , 
            array( 'categories' => $categories
                 )
        );
    }
}