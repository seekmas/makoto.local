<?php

/* MakotoCmsBundle:Catalogue:index.html.twig */
class __TwigTemplate_584ad6e3efd3bbe19ec3463fd5169baccff50eadf0efb561919e31b29026d903 extends Twig_Template
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
        echo "Makoto Blog - ";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subject", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "subject"), "html", null, true);
        }
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<section class=\"page-heading\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t<li class=\"active\">";
        // line 13
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subject", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "subject"), "html", null, true);
        }
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h1>";
        // line 17
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subject", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "subject"), "html", null, true);
        }
        echo "</h1>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

\t\t\t<!-- Page Content -->
\t\t\t<section class=\"page-content\">
\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"content col-md-8\">
\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 30
            echo "\t\t\t\t\t\t\t<!-- Post (Standard Format) -->
\t\t\t\t\t\t\t<article class=\"entry entry__standard\">
\t\t\t\t\t\t\t\t<header class=\"entry-header\">
\t\t\t\t\t\t\t\t\t<h2><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue_article", array("alias" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "alias"), "_format" => "jsp")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t\t\t<div class=\"entry-meta\">
\t\t\t\t\t\t\t\t\t\t<span class=\"entry-date\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "H:i:s  Y / m / d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"entry-author\">by ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t<div class=\"excerpt\">
\t\t\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "preview"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<footer class=\"entry-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_catalogue_article", array("alias" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "alias"), "_format" => "jsp")), "html", null, true);
            echo "\" class=\"btn btn-default\">Read More</a>
\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t</article>
\t\t\t\t\t\t\t<!-- Post (Standard Format) / End -->

\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('knp_pagination')->render((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<aside class=\"sidebar col-md-3 col-md-offset-1 col-bordered\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr class=\"visible-sm visible-xs lg\">

\t\t\t\t\t\t\t<!-- Widget :: Categories -->
\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:Navbar:sidecategory"));
        echo "
\t\t\t\t\t\t\t<!-- /Widget :: Categories -->

\t\t\t\t\t\t\t<!-- Widget :: Tags Cloud -->
\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:PageWidget:tag"));
        echo "
\t\t\t\t\t\t\t<!-- /Widget :: Tags Cloud -->

\t\t\t\t\t\t\t<!-- Widget :: Text Widget -->
\t\t\t\t\t\t\t<div class=\"widget_text widget widget__sidebar\">
\t\t\t\t\t\t\t\t<h3 class=\"widget-title\">";
        // line 68
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subject", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "subject"), "html", null, true);
        }
        echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t";
        // line 70
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "description"), "html", null, true);
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Widget :: Text Widget -->

\t\t\t\t\t\t\t<!-- Widget :: Latest Posts -->
\t\t\t\t\t\t\t<div class=\"latest-posts-widget widget widget__sidebar\">
\t\t\t\t\t\t\t\t<h3 class=\"widget-title\">Latest Posts</h3>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"latest-posts-list\">
\t\t\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest_posts"]) ? $context["latest_posts"] : $this->getContext($context, "latest_posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["po"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["po"]) ? $context["po"] : $this->getContext($context, "po")), "date"), "m/d/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\"><a href=\"#\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["po"]) ? $context["po"] : $this->getContext($context, "po")), "title"), "html", null, true);
            echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['po'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /Widget :: Latest Posts -->


\t\t\t\t\t\t</aside>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Page Content / End -->


";
    }

    public function getTemplateName()
    {
        return "MakotoCmsBundle:Catalogue:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 87,  188 => 84,  184 => 83,  180 => 81,  176 => 80,  165 => 71,  161 => 70,  154 => 68,  146 => 63,  139 => 59,  127 => 50,  124 => 49,  112 => 43,  106 => 40,  99 => 36,  95 => 35,  88 => 33,  83 => 30,  79 => 29,  62 => 17,  53 => 13,  49 => 12,  41 => 6,  38 => 5,  29 => 3,);
    }
}
