<?php

/* MakotoComponentBundle:Pages:learning.html.twig */
class __TwigTemplate_1f112151c7ccc068dcf0dc36b1f20cd1af742ac213750d19822243705f97f05d extends Twig_Template
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
                <h1>Learning</h1>
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
            <div class=\"col-md-8\">
                <div class=\"icon-box squared icon-box-animated\">
                    <div class=\"icon\">
                        <i class=\"fa fa-check-square-o\"></i>
                    </div>
                    <div class=\"icon-box-body\">
                        <div class=\"title-accent\">
                        <h3>Kaizen Training Workshops</h3>
                        </div>
                        <div class=\"list\">
                            <ul>
                                <li>Curriculum /  Training Packages (Onlinelean.com; Certifications; Schedule)</li>
                                <li>Seminars/Key Notes (Academia vs. Industry)</li>
                                <li>Testimonials/Videos (Standard for all sections)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/learning.jpg"), "html", null, true);
        echo "\" width=\"100%\">
            </div>
        </div>
    </div>
</section>
<!-- Page Content / End -->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 45,  34 => 11,  30 => 10,  19 => 1,);
    }
}
