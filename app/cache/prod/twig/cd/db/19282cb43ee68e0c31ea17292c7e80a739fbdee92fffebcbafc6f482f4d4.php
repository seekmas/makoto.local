<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cddb19282cb43ee68e0c31ea17292c7e80a739fbdee92fffebcbafc6f482f4d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  31 => 5,  26 => 3,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 7,  44 => 9,  32 => 9,  27 => 4,  22 => 2,  43 => 8,  40 => 8,  35 => 4,  29 => 4,  21 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 41,  73 => 19,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 3,);
    }
}
