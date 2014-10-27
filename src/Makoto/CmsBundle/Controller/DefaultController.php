<?php

namespace Makoto\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $template_name = 'makoto_dna';

        if( method_exists( $this , $template_name) )
        {
            $data = $this->$template_name();
        }else
        {
            $data = [];
        }
        

        return $this->render('MakotoCmsBundle:Default:index.html.twig' ,
            [
                'data' => $data
            ]
        );
    }

    public function makotoAction( $template_name)
    {

        if( method_exists( $this , $template_name) )
        {
            $data = $this->$template_name();
        }else
        {
            $data = [];
        }
        
        return $this->render('MakotoComponentBundle:Pages:render_page.html.twig' , 
            [
                'template_name' => $template_name , 
                'data' => $data
            ]
        );
    }

    public function makoto_dna()
    {
         $page_data = [];

         $page_data['What_does_Makoto_Mean'] = $this->get('block.repository')->findBy(
            [
                'fromPage' => 'makoto_dna' ,
                'blockAlias' => 'What_does_Makoto_Mean' ,
            ]
        );

        $page_data['What_The_Meaning_of_Makoto'] = $this->get('block.repository')->findBy(
            [
                'fromPage' => 'makoto_dna' ,
                'blockAlias' => 'The_Meaning_of_Makoto' ,
            ]
        );

        return $page_data;
    }

    public function makoto_global()
    {
        $data = [];
        $data['Basic_Structure'] = $this->get('block.repository')->findOneBy(
                [
                    'blockAlias' => 'Basic_Structure'
                ]
        );

        $data['Kaizen_Consulting_Activities'] = $this->get('block.repository')->findOneBy(
                [
                    'blockAlias' => 'Kaizen_Consulting_Activities'
                ]
        );

        $data['Japan_Lean_Experience'] = $this->get('block.repository')->findOneBy(
                [
                    'blockAlias' => 'Japan_Lean_Experience'
                ]
        );

        $data['center_block'] = $this->get('block.repository')->findBy(
            [
                'blockAlias' => 'center_block' , 
            ]
        );

        $data['Kaizen_Training_Workshops'] = $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'Kaizen_Training_Workshops' , 
            ]
        );

        return $data;
    }

    public function consulting()
    {
        return [];
    }

    public function contact()
    {

        $data = [];
        $data['Timeline'] = $this->get('timeline.repository')
                                                      ->createQueryBuilder('t')
                                                      ->select('t')
                                                      ->orderBy('t.year' , 'desc')
                                                      ->getQuery()
                                                      ->getResult();


        $data['aboutus'] = $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'About-Us' ,
                'fromPage'   => 'Contact' ,
            ]
        );

        $data['Brad-Schmidt-Profile'] =  $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'Brad-Schmidt-Profile' ,
                'fromPage'   => 'Contact' ,
            ]
        );
        $data['DJ-Duarte-Profile'] =  $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'DJ-Duarte-Profile' ,
                'fromPage'   => 'Contact' ,
            ]
        );
        $data['CE-Geno-Johnston-Profile'] =  $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'CE-Geno-Johnston-Profile' ,
                'fromPage'   => 'Contact' ,
            ]
        );
        $data['Paul-Law-Profile'] =  $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'Paul-Law-Profile' ,
                'fromPage'   => 'Contact' ,
            ]
        );

        return $data;
    }

    public function service()
    {
        $data = [];
        $data['Japan_Lean_Experience'] = $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'Japan_Lean_Experience' ,
                'fromPage'   => 'Services' ,
            ]
        );
        $data['Consulting'] = $this->get('block.repository')->findBy(
            [
                'blockAlias' => 'Consulting' ,
                'fromPage'   => 'Services' ,
            ]
        );
        $data['Learning'] = $this->get('block.repository')->findOneBy(
            [
                'blockAlias' => 'Learning' ,
                'fromPage'   => 'Services' ,
            ]
        );
        $data['Other_Service'] = $this->get('block.repository')->findBy(
            [
                'blockAlias' => 'Other Service' ,
                'fromPage'   => 'Services' ,
            ]
        );
        return $data;
    }
}
