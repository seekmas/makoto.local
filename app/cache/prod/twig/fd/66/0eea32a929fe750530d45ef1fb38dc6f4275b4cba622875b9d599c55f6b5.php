<?php

/* MakotoCmsBundle:Article:index.html.twig */
class __TwigTemplate_fd660eea32a929fe750530d45ef1fb38dc6f4275b4cba622875b9d599c55f6b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MakotoCmsBundle::layouts.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 0, array(), "array"), "title"), "html", null, true);
        echo " - Makoto";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "\t<!-- Page Heading -->
\t<section class=\"page-heading\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue", array("alias" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 1, array(), "array"), "alias"), "_format" => "html")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 1, array(), "array"), "subject"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Post</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 1, array(), "array"), "subject"), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Page Heading / End -->
\t\t\t<!-- Page Content -->
\t\t\t<section class=\"page-content\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"content col-md-8\">

\t\t\t\t\t\t\t<!-- Post (Standard Format) -->
\t\t\t\t\t\t\t<article class=\"entry entry__standard entry__with-icon\">
\t\t\t\t\t\t\t\t<div class=\"entry-icon visible-md visible-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<header class=\"entry-header\">
\t\t\t\t\t\t\t\t\t<h2>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 0, array(), "array"), "title"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 0, array(), "array"), "date"), "H:i:s  Y / m / d"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"entry-category\">in <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue", array("alias" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 1, array(), "array"), "alias"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 1, array(), "array"), "subject"), "html", null, true);
        echo "</a></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"entry-author\">by <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 0, array(), "array"), "author"), "html", null, true);
        echo "</strong></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"entry-content\">
\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), 0, array(), "array"), "body");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- Post (Standard Format) / End -->


\t\t\t\t\t\t\t";
        // line 54
        if (false) {
            // line 55
            echo "\t\t\t\t\t\t\t<!-- Comments Form -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"respond\" class=\"comment-respond\">
\t\t\t\t\t\t\t\t<h3 class=\"reply-title\">Leave a reply</h3>
\t\t\t\t\t\t\t\t<p class=\"comment-notes text-muted\"><i>Your email address will not be published. Required fields are marked <span class=\"required\">*</span></i></p>

\t\t\t\t\t\t\t\t<form action=\"#\" method=\"POST\" role=\"form\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Name <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Email <span class=\"required\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"\">Website</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"url\" class=\"form-control\" id=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"\">Comment</label>
\t\t\t\t\t\t\t\t\t\t<textarea cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Send Comment</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Comments Form / End -->
\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<aside class=\"sidebar col-md-3 col-md-offset-1 col-bordered\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"visible-sm visible-xs lg\">

\t\t\t\t\t\t\t<!-- Widget :: Categories -->
\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:Navbar:sidecategory"));
        echo "
\t\t\t\t\t\t\t<!-- /Widget :: Categories -->

\t\t\t\t\t\t\t<!-- Widget :: Tags Cloud -->
\t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:PageWidget:tag"));
        echo "
\t\t\t\t\t\t\t<!-- /Widget :: Tags Cloud -->

\t\t\t\t\t\t\t<!-- Widget :: Text Widget -->
\t\t\t\t\t\t\t<div class=\"widget_text widget widget__sidebar\">
\t\t\t\t\t\t\t\t<h3 class=\"widget-title\">";
        // line 108
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subject", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subject"), "html", null, true);
        }
        echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t";
        // line 110
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"), "html", null, true);
        }
        // line 111
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Widget :: Text Widget -->

\t\t\t\t\t\t\t<!-- Widget :: Latest Posts -->
\t\t\t\t\t\t\t<div class=\"latest-posts-widget widget widget__sidebar\">
\t\t\t\t\t\t\t\t<h3 class=\"widget-title\">Latest Posts</h3>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"latest-posts-list\">
\t\t\t\t\t\t\t\t\t\t";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest_posts"]) ? $context["latest_posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["po"]) {
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">";
            // line 123
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["po"]) ? $context["po"] : null), "date"), "m/d/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\"><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue_article", array("alias" => $this->getAttribute((isset($context["po"]) ? $context["po"] : null), "alias"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["po"]) ? $context["po"] : null), "title"), "html", null, true);
            echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['po'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Widget :: Latest Posts -->


\t\t\t\t\t\t</aside>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Page Content / End -->
<style>
.entry-content {
\tfont-size: 16px;
}
.entry-content img 
{
\twidth: 100%;
}
</style>

";
    }

    public function getTemplateName()
    {
        return "MakotoCmsBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 127,  213 => 123,  205 => 120,  194 => 111,  190 => 110,  175 => 103,  120 => 55,  118 => 54,  96 => 43,  65 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 124,  208 => 68,  204 => 72,  179 => 69,  159 => 92,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 44,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  47 => 12,  201 => 92,  196 => 90,  183 => 108,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  38 => 6,  101 => 32,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  87 => 40,  72 => 16,  66 => 24,  55 => 14,  41 => 7,  28 => 3,  24 => 3,  25 => 3,  31 => 5,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  32 => 4,  27 => 4,  22 => 2,  43 => 6,  40 => 8,  35 => 5,  29 => 3,  21 => 2,  19 => 1,  209 => 121,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 99,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 48,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 42,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 13,  57 => 11,  54 => 10,  51 => 13,  48 => 8,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 7,);
    }
}
