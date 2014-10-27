<?php

/* MakotoCmsBundle:Default:index.html.twig */
class __TwigTemplate_404f72cd4deabd7e22d45dc10d8a39a1306f57880d566c2ede5efacb6b4fe6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MakotoCmsBundle::layouts.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MakotoCmsBundle::layouts.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
\t";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:Slider:index"));
        echo "

\t";
        // line 7
        echo twig_include($this->env, $context, "MakotoComponentBundle:Pages:makoto_way.html.twig");
        echo "

\t";
        // line 9
        echo twig_include($this->env, $context, "MakotoComponentBundle:Pages:water.html.twig");
        echo "

\t";
        // line 11
        echo twig_include($this->env, $context, "MakotoComponentBundle:Pages:makoto_way_section2.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "MakotoCmsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
