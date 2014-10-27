<?php

namespace Makoto\ComponentBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;  
use Symfony\Component\DependencyInjection\ContainerBuilder;  
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;  
use Symfony\Component\Config\FileLocator;

class NavigationExtension extends Extension
{

	public function load( array $configs, ContainerBuilder $container )
	{
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('extension.yml');
	}

    public function getAlias()
    {
        return 'navigation_extension';
    }

}