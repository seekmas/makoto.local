<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_45957cf3a178774b94df939ba89df8c34b4610618862a8cb6e8ea1ba5c7e8b35 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  24 => 13,  22 => 12,  19 => 11,  121 => 50,  115 => 47,  111 => 46,  105 => 44,  103 => 43,  98 => 41,  92 => 38,  86 => 35,  82 => 34,  77 => 32,  73 => 30,  70 => 29,  67 => 28,  61 => 26,  59 => 25,  54 => 23,  51 => 22,  48 => 21,  42 => 19,  36 => 16,  31 => 15,  28 => 14,);
    }
}
