<?php

namespace Makoto\ComponentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SliderController extends Controller
{
    public function indexAction()
    {

    	$sliderData = $this->getDoctrine()
    					   ->getRepository('MakotoAdminBundle:Slider')
    					   ->createQueryBuilder('s')
    					   ->orderBy('s.orderId' , 'ASC')
    					   ->getQuery()
    					   ->getResult();


        return $this->render('MakotoComponentBundle:Slider:index.html.twig' , array('sliderData'=>$sliderData));
    }
}