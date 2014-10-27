<?php

// src/Makoto/ExtensionBundle/Twig/Extension.php

namespace Makoto\ExtensionBundle\Twig;

class Extension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('number_format_decimal', array($this, 'number_format_decimal_Filter')),
        );
    }

    public function number_format_decimal_Filter($number)
    {
        return number_format( $number);
    }

    public function getName()
    {
        return 'makoto_extension';
    }
}