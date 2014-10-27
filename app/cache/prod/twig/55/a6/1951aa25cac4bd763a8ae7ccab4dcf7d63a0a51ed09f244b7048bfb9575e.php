<?php

/* MakotoComponentBundle:Pages:marketplace.html.twig */
class __TwigTemplate_55a61951aa25cac4bd763a8ae7ccab4dcf7d63a0a51ed09f244b7048bfb9575e extends Twig_Template
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
        echo "<!-- Page Heading -->
<section class=\"page-heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h1>Unique Offerings in the Marketplace</h1>
            </div>
            <div class=\"col-md-6\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Makoto's DNA</a></li>
                    <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "service", "_format" => "makoto")), "html", null, true);
        echo "\">Services</a></li>
                    <li class=\"active\">Consulting</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Heading / End -->

<!-- Page Content -->
<section class=\"page-content\">
    <div class=\"container\">
        
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"icon-box squared icon-box-animated\">
                    <div class=\"icon\">
                        <i class=\"fa fa-check-square-o\"></i>
                    </div>
                    <div class=\"icon-box-body\">
                        <div class=\"title-accent\">
                        <h3>Being effective overseas!</h3>
                        </div>
                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/being.jpg"), "html", null, true);
        echo "\" width=\"100%\">
                        A lot of Japanese are going overseas but cultural and linguistic issues keep them from being as effective as they could be.  Learn the do’s and don’ts before getting on the plane. 
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"icon-box squared icon-box-animated\">
                    <div class=\"icon\">
                        <i class=\"fa fa-check-square-o\"></i>
                    </div>
                    <div class=\"icon-box-body\">
                        <div class=\"title-accent\">
                        <h3>How to be a successful lean leader in Japan?</h3>
                        </div>
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/successful.jpg"), "html", null, true);
        echo "\" width=\"100%\">
                        Japan has a lot of unwritten rules, which once understood open the whole country up to you.  Learn in a short period how you can be effective and make inroads into the Japan market with us. 
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
            </div>
        </div>

    </div>
</section>
<!-- Page Content / End -->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:marketplace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 48,  60 => 34,  34 => 11,  30 => 10,  19 => 1,);
    }
}
