<?php

/* MakotoComponentBundle:Pages:single_3.html.twig */
class __TwigTemplate_2c93f79f44638cebab79cde58ebaaa9796195ab5f88f5cac21c440bc31796e1a extends Twig_Template
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
                <h1>Last News</h1>
            </div>
            <div class=\"col-md-6\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Home</a></li>
                    <li class=\"active\">Last News</li>
                    <li ></li>
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
                 <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/news2.jpg"), "html", null, true);
        echo "\">
             </div>
            <div class=\"col-md-8\">
            <h2>Lean Benchmarking Tours(JAPAN LEAN EXPERIENCE)</h2>
             Makoto offers a unique and powerful management experience called the Japan Lean Experience or JLE.  Many of our clients plus some of the best known consulting firms and several fortune 1000 companies take advantage of this engagement annually.  Whether it is a means to align their operational excellence efforts, learn what other industries are doing to drive good lean practices or simply to establish a common framework with expected deliverables for their programs, JLE’s are a tremendous way to impact your journey.  For us at Makoto, we strive to connect three things on our JLE tours.  1st – Mindset & Behaviours for Employee Engagement.  2nd – Technical & Operational Traits.  3rd – Management & Leadership Focus.  Come and check out for yourself what some of the best companies in the world are doing to increase innovation, inspire employee engagement and remain competitive with their competition.  We can do this both in Japan and in the USA. 
             </div>
        </div>
    </div>
</section>
<!-- Page Content / End --";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:single_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 24,  30 => 10,  19 => 1,);
    }
}
