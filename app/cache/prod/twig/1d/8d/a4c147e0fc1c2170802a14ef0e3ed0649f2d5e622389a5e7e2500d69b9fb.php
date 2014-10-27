<?php

/* MakotoComponentBundle:Pages:render_page.html.twig */
class __TwigTemplate_1d8da4c147e0fc1c2170802a14ef0e3ed0649f2d5e622389a5e7e2500d69b9fb extends Twig_Template
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
        echo "\t
\t";
        // line 5
        $context["path"] = (("MakotoComponentBundle:Pages:" . (isset($context["template_name"]) ? $context["template_name"] : $this->getContext($context, "template_name"))) . ".html.twig");
        // line 6
        echo "\t
\t";
        // line 7
        echo twig_include($this->env, $context, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")));
        echo "

";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:render_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
