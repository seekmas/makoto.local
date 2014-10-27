<?php

/* MakotoComponentBundle:Pages:single_2.html.twig */
class __TwigTemplate_3fea8ea67f91d7c79f0c26a2d64968384b1592a0570791b012a3eeeeda1bfe31 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/news1.jpg"), "html", null, true);
        echo "\">
             </div>
            <div class=\"col-md-8\">
            <h2>GLOBAL LEAN DEPLOYMENT IMPLEMENTATION</h2>
             With our core systematic 4 Phased Approach to Lean Deployment, we are poised to support any organization in a multitude of languages in achieving their desired state of true operational excellence.  From initial concept to full scale deployment or just “re-engineering” their processes with a focused deployment, our professionals are well versed & certified in a variety of improvement methodologies to support your organizational needs.  Whether you seek ways to flow your system (Lean Manufacturing – Kaizen) or a desire to eliminate the variation in outcomes (Lean Six Sigma - Design for Six Sigma), our team is able to move your efforts forward that creates real impactful deliverables.  With Makoto’s reach and our team based in various regions of the world, we understand regional and local cultural issues and how to gain acceptance in the most effective way.  From London to Frankfurt, Shanghai to Tokyo or Singapore to Seattle, we can be your global solutions provider for continuous improvement – “The Makoto Way”.
             </div>
        </div>
    </div>
</section>
<!-- Page Content / End -->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:single_2.html.twig";
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
