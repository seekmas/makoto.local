<?php

namespace Makoto\ComponentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageWidgetController extends Controller
{
    public function indexAction()
    {
        return $this->render('MakotoComponentBundle:PageWidget:index.html.twig');
    }

    public function workAction()
    {
        return $this->render('MakotoComponentBundle:PageWidget:work.html.twig');
    }

    public function powerAction()
    {
        return $this->render('MakotoComponentBundle:PageWidget:power.html.twig');
    }

    public function quoteAction()
    {
        return $this->render('MakotoComponentBundle:PageWidget:quote.html.twig');
    }

    public function tagAction()
    {   
        $tags = $this->getDoctrine()
                     ->getRepository('MakotoAdminBundle:PostTag')
                     ->findAll();

        return $this->render('MakotoComponentBundle:PageWidget:tag.html.twig' , array('tags' => $tags));
    }
}