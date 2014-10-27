<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_22d263c1582f06c3da516eb2144a1bd33274e349bb090f77e9e3230343fe0425 extends Twig_Template
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
        // line 2
        echo "
<div class=\"text-center\">
    <ul class=\"pagination-custom list-unstyled list-inline\">
";
        // line 5
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 6
            echo "    ";
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 7
                echo "    <li>
        <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\"><<</a>
    </li>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\"><</a></li>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 18
                    echo "            <li>
                <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-default\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 22
                    echo "            <li><a href=\"#\" class=\"btn btn-sm btn-primary\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 24
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
    ";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                echo "    <li>
        <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">>></a>
    </li>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 34
                echo "    <li>
        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default\">>></a>
    </li>        
    ";
            }
            // line 38
            echo "
";
        }
        // line 40
        echo "
</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  111 => 38,  105 => 35,  102 => 34,  100 => 33,  97 => 32,  91 => 29,  86 => 27,  76 => 24,  70 => 22,  59 => 18,  56 => 17,  52 => 16,  43 => 13,  32 => 8,  26 => 6,  24 => 5,  19 => 2,  197 => 87,  188 => 84,  184 => 83,  180 => 81,  176 => 80,  165 => 71,  161 => 70,  154 => 68,  146 => 63,  139 => 59,  127 => 50,  124 => 49,  112 => 43,  106 => 40,  99 => 36,  95 => 35,  88 => 28,  83 => 26,  79 => 29,  62 => 19,  53 => 13,  49 => 15,  41 => 12,  38 => 11,  29 => 7,);
    }
}
