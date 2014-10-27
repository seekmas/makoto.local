<?php

/* MakotoComponentBundle:Pages:investments.html.twig */
class __TwigTemplate_1068d22343f157a7f4c2a6d6b5276cca077b58ea5978cd0beeaaf3e523240dae extends Twig_Template
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
                <h1>Investments</h1>
            </div>
            <div class=\"col-md-6\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Makoto's DNA</a></li>
                    <li class=\"active\">Investments</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Page Heading / End -->

            <!-- Page Content -->
            <div class=\"row\" align=\"center\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/investment.jpg"), "html", null, true);
        echo "\" width=\"70%\" >
            </div>
            <section class=\"page-content\">

                <div class=\"container\">
                   
                        
                    
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h2>Investments & Business Development Support</h2>
                            <p>We support Business matching and Investments as well as provide Lean training to newly merged firms to smooth over the transition process.</p>

                            <div class=\"spacer-sm\"></div>
                                <div class=\"progress\" data-animation=\"fadeInLeft\" data-animation-delay=\"0\">
                                    <div class=\"progress-bar\" style=\"width: 100%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"80\" role=\"progressbar\">
                                        <span class=\"progress-label\">
                                            SINCERITY
                                        </span>
                                        100%
                                    </div>
                                </div>
                                <div class=\"progress\" data-animation=\"fadeInLeft\" data-animation-delay=\"200\">
                                    <div class=\"progress-bar\" style=\"width: 100%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"80\" role=\"progressbar\">
                                        <span class=\"progress-label\">
                                            TRUTH
                                        </span>
                                        100%
                                    </div>
                                </div>
                                <div class=\"progress\" data-animation=\"fadeInLeft\" data-animation-delay=\"200\">
                                    <div class=\"progress-bar\" style=\"width: 100%;\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"80\" role=\"progressbar\">
                                        <span class=\"progress-label\">
                                            TRUST or BELIEF
                                        </span>
                                        100%
                                    </div>
                                </div>

                        </div>
                        <div class=\"col-md-6\">
                            <figure class=\"alignnone\">
                                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/investments.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Content / End-->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:investments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 63,  44 => 21,  30 => 10,  19 => 1,);
    }
}
