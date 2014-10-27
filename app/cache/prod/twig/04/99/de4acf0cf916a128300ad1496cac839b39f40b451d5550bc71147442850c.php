<?php

/* MakotoComponentBundle:Footer:index.html.twig */
class __TwigTemplate_0499de4acf0cf916a128300ad1496cac839b39f40b451d5550bc71147442850c extends Twig_Template
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
        echo "<!-- Footer -->
<footer class=\"footer\" id=\"footer\">
\t<div class=\"footer-widgets\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Widget :: Latest Posts -->
\t\t\t\t\t<div class=\"latest-posts-widget widget widget__footer\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Latest Posts</h3>
\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t<ul class=\"latest-posts-list\">
\t\t\t\t\t\t\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest_posts"]) ? $context["latest_posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<figure class=\"thumbnail\"><a href=\"#\"></a></figure>
\t\t\t\t\t\t\t\t\t<span class=\"date\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "d/m/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<h5 class=\"title\"><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue_article", array("alias" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "alias"), "_format" => "makoto")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a></h5>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Widget :: Latest Posts -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Widget :: Contacts Info -->
\t\t\t\t\t<div class=\"contacts-widget widget widget__footer\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Contact Us</h3>
\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t<ul class=\"contacts-info-list\">
\t\t\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contactUs"]) ? $context["contactUs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
            // line 32
            echo $this->getAttribute($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "contactType"), "icon");
            echo "
\t\t\t\t\t\t\t\t\t<div class=\"info-item\" title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "description"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "contactMethod"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Widget :: Contacts Info -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Widget :: Categories -->
\t\t\t\t\t<div class=\"widget_categories widget widget__footer\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Categories</h3>
\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue", array("alias" => $this->getAttribute((isset($context["cate"]) ? $context["cate"] : null), "alias"), "_format" => "html")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cate"]) ? $context["cate"] : null), "subject"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Widget :: Categories -->
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Widget :: Flickr -->
\t\t\t\t\t<div class=\"widget_flickr widget widget__footer\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Flickr</h3>
\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t<!-- Flickr images will appear here -->
\t\t\t\t\t\t\t<ul id=\"flickr\" class=\"flickr-feed\"></ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /Widget :: Flickr -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\tCopyright &copy; 2014  <a href=\"index-2.html\">Makoto Globals</a> &nbsp;| &nbsp;All Rights Reserved
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-8\">
\t\t\t\t\t<div class=\"social-links-wrapper\">
\t\t\t\t\t\t<span class=\"social-links-txt\">Connect with us</span>
\t\t\t\t\t\t<ul class=\"social-links social-links__dark\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Footer / End -->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Footer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  197 => 87,  165 => 71,  161 => 70,  146 => 63,  139 => 59,  127 => 50,  124 => 49,  23 => 1,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  282 => 128,  279 => 127,  215 => 72,  210 => 70,  188 => 84,  184 => 83,  180 => 81,  172 => 56,  160 => 53,  152 => 51,  148 => 50,  126 => 41,  114 => 38,  104 => 34,  97 => 30,  83 => 34,  77 => 19,  53 => 13,  37 => 6,  34 => 14,  228 => 127,  213 => 123,  205 => 120,  194 => 111,  190 => 110,  175 => 103,  120 => 55,  118 => 39,  96 => 43,  65 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 129,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 103,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 48,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 73,  217 => 124,  208 => 68,  204 => 67,  179 => 69,  159 => 92,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 44,  71 => 16,  67 => 15,  63 => 6,  59 => 14,  47 => 12,  201 => 92,  196 => 90,  183 => 108,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 59,  138 => 54,  136 => 46,  123 => 47,  121 => 52,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 17,  49 => 11,  38 => 5,  101 => 32,  94 => 28,  89 => 25,  85 => 25,  79 => 33,  75 => 32,  68 => 30,  56 => 9,  50 => 10,  87 => 64,  72 => 31,  66 => 24,  55 => 19,  41 => 6,  28 => 3,  24 => 3,  25 => 3,  31 => 4,  26 => 6,  98 => 31,  93 => 38,  88 => 33,  78 => 21,  46 => 13,  44 => 16,  32 => 12,  27 => 4,  22 => 2,  43 => 6,  40 => 15,  35 => 7,  29 => 3,  21 => 2,  19 => 1,  209 => 121,  203 => 78,  199 => 65,  193 => 62,  189 => 71,  187 => 84,  182 => 66,  176 => 80,  173 => 65,  168 => 55,  164 => 54,  162 => 59,  154 => 68,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 45,  130 => 41,  125 => 44,  122 => 40,  116 => 41,  112 => 43,  109 => 36,  106 => 49,  103 => 32,  99 => 36,  95 => 35,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 14,  64 => 14,  60 => 13,  57 => 5,  54 => 10,  51 => 15,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 13,  33 => 6,  30 => 7,);
    }
}
