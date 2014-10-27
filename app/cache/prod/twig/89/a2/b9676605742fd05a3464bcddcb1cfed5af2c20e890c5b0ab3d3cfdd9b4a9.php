<?php

/* MakotoComponentBundle:Navbar:sidecategory.html.twig */
class __TwigTemplate_89a2b9676605742fd05a3464bcddcb1cfed5af2c20e890c5b0ab3d3cfdd9b4a9 extends Twig_Template
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
        echo "<div class=\"widget_categories widget widget__sidebar\">
\t<h3 class=\"widget-title\">Categories</h3>
\t<div class=\"widget-content\">
\t\t<ul>
\t\t\t";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 6
            echo "\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue", array("alias" => $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "alias"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : $this->getContext($context, "cate")), "subject"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</ul>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Navbar:sidecategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  37 => 9,  33 => 8,  25 => 5,  115 => 40,  111 => 38,  105 => 35,  102 => 34,  100 => 33,  97 => 32,  91 => 29,  86 => 27,  76 => 24,  70 => 22,  59 => 18,  56 => 17,  52 => 16,  43 => 13,  32 => 8,  26 => 6,  24 => 5,  19 => 1,  197 => 87,  188 => 84,  184 => 83,  180 => 81,  176 => 80,  165 => 71,  161 => 70,  154 => 68,  146 => 63,  139 => 59,  127 => 50,  124 => 49,  112 => 43,  106 => 40,  99 => 36,  95 => 35,  88 => 28,  83 => 26,  79 => 29,  62 => 19,  53 => 13,  49 => 15,  41 => 12,  38 => 11,  29 => 6,);
    }
}
