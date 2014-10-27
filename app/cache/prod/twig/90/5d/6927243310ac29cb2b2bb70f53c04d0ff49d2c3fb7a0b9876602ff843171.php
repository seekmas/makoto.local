<?php

/* ::base.html.twig */
class __TwigTemplate_905d6927243310ac29cb2b2bb70f53c04d0ff49d2c3fb7a0b9876602ff843171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        

        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Makoto";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  68 => 12,  51 => 15,  46 => 13,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  285 => 129,  282 => 128,  279 => 127,  252 => 103,  219 => 73,  215 => 72,  210 => 70,  204 => 67,  199 => 65,  193 => 62,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 46,  133 => 45,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  109 => 36,  104 => 34,  97 => 30,  89 => 25,  83 => 22,  77 => 19,  71 => 16,  67 => 15,  63 => 6,  57 => 5,  53 => 10,  45 => 8,  41 => 7,  37 => 6,  49 => 14,  44 => 12,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
