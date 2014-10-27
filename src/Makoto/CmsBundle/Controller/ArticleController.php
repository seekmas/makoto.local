<?php

namespace Makoto\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller
{
    public function indexAction( $alias)
    {
    	$article = $this->getDoctrine()
    	     			->getRepository('MakotoAdminBundle:Post')
             			->createQueryBuilder('p')
             			->select('p,c')
             			->leftJoin('MakotoAdminBundle:PostCategory' , 'c' , 'WITH' , 'p.postCategory = c')
             			->where('p.alias = :alias')
             			->setParameter('alias' , $alias)
             			->getQuery()
             			->getArrayResult();

        $category = $this->getDoctrine()
                         ->getRepository('MakotoAdminBundle:PostCategory')
                         ->findOneById( $article[1]['id']);

        $latest_posts = $this->getDoctrine()
                       ->getRepository('MakotoAdminBundle:Post')
                       ->createQueryBuilder('p')
                       ->select('p.title,p.author,p.preview,p.alias,p.date')
                       ->leftJoin('MakotoAdminBundle:PostCategory' , 'c' , 'WITH' , 'p.postCategory = c')
                       ->setMaxResults(12)
                       ->setFirstResult(0)
                       ->orderBy('p.id' , 'DESC')
                       ->getQuery()->getResult();

    	return $this->render('MakotoCmsBundle:Article:index.html.twig' , array(
            'article' => $article ,
            'category' => $category ,
            'latest_posts' => $latest_posts ,
            )
        );
    }

}
