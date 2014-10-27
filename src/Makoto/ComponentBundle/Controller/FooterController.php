<?php

namespace Makoto\ComponentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FooterController extends Controller
{
    public function indexAction()
    {

      //$style = $this->container->getParameter('footer');
      $style = 'content';

      if( 'content'  === $style )
      {
        
          return $this->render('MakotoComponentBundle:Footer:content.html.twig');

      }else
      {
        $category = $this->getDoctrine()
                 ->getRepository('MakotoAdminBundle:PostCategory')
                 ->createQueryBuilder('pc')
                 ->orderBy('pc.orderId' , 'DESC')
                 ->getQuery()
                 ->getResult();

        $contactUs = $this->getDoctrine()
                          ->getRepository('MakotoAdminBundle:Contact')
                          ->createQueryBuilder('c')
                          ->orderBy('c.orderId' , 'ASC')
                          ->getQuery()
                          ->getResult();
        $latest_posts = $this->getDoctrine()
                             ->getRepository('MakotoAdminBundle:Post')
                             ->createQueryBuilder('p')
                             ->select('p.title,p.alias,p.date')
                             ->orderBy('p.id' , 'DESC')
                             ->setMaxResults(5)
                             ->getQuery()
                             ->getResult();

        return $this->render('MakotoComponentBundle:Footer:index.html.twig' , 
            array('categories' => $category , 
                  'contactUs'  => $contactUs , 
                  'latest_posts'=>$latest_posts , 
                 )
          )
        ;
      }

    }
}
