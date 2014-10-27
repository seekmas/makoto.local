<?php

/* MakotoComponentBundle:Pages:single_1.html.twig */
class __TwigTemplate_71575f4944cf759bfe827df7c14879bb5735e217790746007735a4792f996c91 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/news.jpg"), "html", null, true);
        echo "\">
             </div>
            <div class=\"col-md-8\">
            <h2>OPERATIONS & SERVICE CONSULTING</h2>
             For more than 27 years, Makoto practitioners have been solutions providers of KAIZEN (Lean Manufacturing) around the globe.  We have sought and successfully applied the principles and practices into areas that are not usually seen as wasteful.  Through this journey, our experienced has validated that 40% of waste is in OPERATIONS (servicing guests, making products, processing activities, etc.) & that 60% of waste is in SUPPORT SERVICES (HR, IT, Sales, etc.).  Therefore, the transactional and/or service environments are major contributors to successfully meeting customer demands and achieving sustainable & tangible results.  Our customers hire us not to just save money but to increase the overall system performance.  By informing, involving and inspiring people, the engagement of talent allows businesses to gain the most from current practices, develop new ways of working and pave the way forward into new markets.  The Makoto advantage is not just in our years of application experience but rather in our ability to collaboratively share how “your system” aligned with “proven methodologies” can generate breakthrough results.  So whatever stage your organization is at on the continuous improvement journey, Makoto is set to engage your leaders and workforce in a variety of activities that will take the organization to the next level, leaving a legacy for others to follow.
             </div>
        </div>
    </div>
</section>
<!-- Page Content / End -->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:single_1.html.twig";
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
