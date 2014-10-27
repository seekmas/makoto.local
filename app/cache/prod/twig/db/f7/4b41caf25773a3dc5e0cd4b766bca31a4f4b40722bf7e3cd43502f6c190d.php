<?php

/* MakotoComponentBundle:Pages:consulting.html.twig */
class __TwigTemplate_dbf74b41caf25773a3dc5e0cd4b766bca31a4f4b40722bf7e3cd43502f6c190d extends Twig_Template
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
                <h1>Consulting</h1>
            </div>
            <div class=\"col-md-6\">
                <ul class=\"breadcrumb\">
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Makoto's DNA</a></li>
                    <li><a href=\"\">Services</a></li>
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
                        <div class=\"col-md-6\">
                            <div class=\"icon-box squared icon-box-animated\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-check-square-o\"></i>
                                </div>
                                <div class=\"icon-box-body\">
                                    <div class=\"title-accent\">
                                    <h3>Kaizen Focused Activities</h3>
                                    </div>
                                    <h2>5-15 Day</h2>
                                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/activities.jpg"), "html", null, true);
        echo "\" >
                                    <p>efforts designed to deploy isolated activities like 5S in a Shop, Total Productive Maintenance (TPM) on a machine, Lean 101 Management Training, Practical Problem Solving, other core trainings, etc. </p>
                                    <p><strong><em>(Learn & Deploy – Create Model Areas)</em></strong></p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"icon-box squared icon-box-animated\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-check-square-o\"></i>
                                </div>
                                <div class=\"icon-box-body\">
                                    <div class=\"title-accent\">
                                    <h3>Kaizen Events</h3>
                                    </div>
                                    <h2>5-45 Day</h2>
                                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/events.jpg"), "html", null, true);
        echo "\" >
                                    <p>efforts focused on improving specific processes and problems within the organization or department through a structured 5 day approach and 30-40 day follow-up of actions.</p>
                                    <p><strong><em>(Learn & Deploy – Create Model Areas)</em></strong></p>
                                </div>
                            </div>
                        </div>

                        </div>
                        
                        <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"icon-box squared icon-box-animated\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-check-square-o\"></i>
                                </div>
                                <div class=\"icon-box-body\">
                                    <div class=\"title-accent\">
                                    <h3>Kaizen Projects</h3>
                                    </div>
                                    <h2>30-120 Day</h2>
                                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/projects.jpg"), "html", null, true);
        echo "\" >
                                    <p>efforts designed on implementing more complex elements like 5S Organizational Wide Rollout, Creating Kaizen Leaders (behavior aligned to Standard Work), Influencing Change Overs (SMED), Deploying Just-In-Time Practices (JIT) that creates FLOW within operations, Jidoka Practices that create smooth operations between people & machines, Visual Management & Control systems, etc. </p>
                                    <p><strong><em>(Focused Area Deployments with Huge QDC Impacts) </em></strong></p>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"icon-box squared icon-box-animated\">
                                <div class=\"icon\">
                                    <i class=\"fa fa-check-square-o\"></i>
                                </div>
                                <div class=\"icon-box-body\">
                                    <div class=\"title-accent\">
                                    <h3>Kaizen Transformations</h3>
                                    </div>
                                    <h2>120-365 Day</h2>
                                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/transformations.jpg"), "html", null, true);
        echo "\">
                                     <p>designed to totally transform all aspects of the business from the shop floor to the board room starting with Strategy, Hoshin Kanri, Policy Deployments & Value Stream / Supply Chain Impact, etc.</P>
                                     <p><strong><em>(Learn & Deploy – Create Model Areas)</em></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    

                </div>
            </section>
            <!-- Page Content / End -->";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:consulting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 89,  101 => 72,  78 => 52,  58 => 35,  30 => 10,  19 => 1,);
    }
}
