<?php

// src/Makoto/ExtensionBundle/Twig/Extension.php

namespace Makoto\ExtensionBundle\Twig;

class TagExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('tagit', array( $this, 'tag' , array( 'is_safe' => array('html')) ) ),
        );
    }

    public function tag( $string )
    {
        return '<span class="label label-succes">'.$string.'</span>';
    }

    public function getName()
    {
        return 'makoto_tag_extension';
    }
}