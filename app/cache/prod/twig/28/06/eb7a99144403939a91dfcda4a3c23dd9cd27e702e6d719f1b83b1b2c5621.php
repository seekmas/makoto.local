<?php

/* MakotoCmsBundle::layouts.html.twig */
class __TwigTemplate_2806eb7a99144403939a91dfcda4a3c23dd9cd27e702e6d719f1b83b1b2c5621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/fonts/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\" media=\"screen\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/owl-carousel/owl.theme.css"), "html", null, true);
        echo "\" media=\"screen\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" media=\"screen\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/rs-plugin/css/settings.css"), "html", null, true);
        echo "\" media=\"screen\">

\t<!-- Theme CSS-->
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/theme.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/theme-elements.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/animate.min.css"), "html", null, true);
        echo "\">

\t<!-- Skin CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/skins/blue.css"), "html", null, true);
        echo "\">

\t<!-- Makoto CSS -->
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/makoto.css"), "html", null, true);
        echo "\">

\t<!-- Head Libs -->
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>

\t<!--[if lt IE 9]>
\t\t<link rel=\"stylesheet\" href=\"vendor/rs-plugin/css/settings-ie8.css\" media=\"screen\">
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/respond.min.js"), "html", null, true);
        echo "\"></script>
\t<![endif]-->

\t<!--[if IE]>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/css/ie.css"), "html", null, true);
        echo "\">
\t<![endif]-->
\t<link rel=\"stylesheet\" media=\"screen,projection\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/back/css/ui.totop.css"), "html", null, true);
        echo "\" />

\t<link rel=\"apple-touch-icon\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/images/apple-touch-icon.png"), "html", null, true);
        echo "\">
\t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/images/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
\t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/images/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
\t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/images/apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">

";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "

\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery.flexnav.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery.hoverIntent.minified.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery.flickrfeed.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/isotope/jquery.isotope.sloppy-masonry.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/isotope/jquery.imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/magnific-popup/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/jquery.appear.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/js/custom.js"), "html", null, true);
        echo "\"></script>

\t<!-- UItoTop plugin -->
\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/back/js/easing.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t
\t<script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/back/js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<!-- Starting the plugin -->

\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/roll/scrolld.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- jQuery REVOLUTION Slider  -->
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/stability/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t});
\t</script>
\t<script type=\"text/javascript\">
\t\$(\"[id*='Btn']\").stop(true).on('click', function (e) 
\t{
\t\tvar target = e.target.id.replace('Btn' , '');

\t\tif( \$('#'+target).attr('id') == undefined )
\t\t{
\t\t\treturn ;
\t\t}

\t\te.preventDefault();
\t\t\$(this).scrolld();
\t}
\t)
\t</script>

\t<script>
    \$(function() {
        \$('.description').readmore({
            speed: 75,
            maxHeight: 122
        });
    });
    </script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Readmore.js/readmore.js"), "html", null, true);
        echo "\"></script>

    \t\t<script>
\t\t\tjQuery(document).ready(function() {
\t\t\t\tjQuery('.tp-banner').revolution({
\t\t\t\t\tdottedOverlay:\"filled\",
\t\t\t\t\tdelay:6000,
\t\t\t\t\tstartwidth:1140,
\t\t\t\t\tstartheight:556,
\t\t\t\t\thideThumbs:10,
\t\t\t\t\tfullWidth:\"on\",
\t\t\t\t\tforceFullWidth:\"on\",
\t\t\t\t\thideCaptionAtLimit:480,
\t\t\t\t\t//navigationType: \"none\",
\t\t\t\t\tsoloArrowLeftHOffset:20,
\t\t\t\t\tsoloArrowRightHOffset:20,
\t\t\t\t\tnavigationType:\"bullet\",
\t\t\t\t\tnavigationArrows:\"solo\", // nexttobullets, solo (old name verticalcentered), none
\t\t\t\t\tnavigationStyle:\"round\"  // round, square, navbar, round-old, square-old, navbar-old 
\t\t\t\t});
\t\t   });
\t\t</script>
";
    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        // line 128
        echo "\t\t
\t";
        // line 129
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:Navbar:index", array("active_router" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "all"), "_route"))));
        // line 134
        echo "
\t";
        // line 135
        $this->displayBlock('main', $context, $blocks);
        // line 138
        echo "
\t";
        // line 139
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("MakotoComponentBundle:Footer:index"));
        echo "


";
    }

    // line 135
    public function block_main($context, array $blocks = array())
    {
        // line 136
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "MakotoCmsBundle::layouts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  285 => 129,  282 => 128,  279 => 127,  252 => 103,  219 => 73,  215 => 72,  210 => 70,  204 => 67,  199 => 65,  193 => 62,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 46,  133 => 45,  126 => 41,  122 => 40,  118 => 39,  114 => 38,  109 => 36,  104 => 34,  97 => 30,  89 => 25,  83 => 22,  77 => 19,  71 => 16,  67 => 15,  63 => 14,  57 => 11,  53 => 10,  45 => 8,  41 => 7,  37 => 6,  49 => 9,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
