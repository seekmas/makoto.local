<?php

/* MakotoComponentBundle:Pages:contact.html.twig */
class __TwigTemplate_81f7d014881cc9e0fa68ec09f9a968a8244477468defd25bfd0996d19916cfb8 extends Twig_Template
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
                <h1>CONTACT</h1>
            </div>
            <div class=\"col-md-6\">
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
                            <figure class=\"alignnone\">
                                <img alt=\"\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/samples/img2.jpg"), "html", null, true);
        echo "\"></img>
                            </figure>
                        </div>
                        <div class=\"col-md-6\">
                          <div class=\"title-accent\">
                            <h3 id=\"timeline\">
                              <span>
                                About
                              </span>
                              Us
                            </h3>
                          </div>
                          <span class=\"description\">
                            ";
        // line 35
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "aboutus", array(), "array"), "blockContent");
        echo "
                          </span>
                        </div>
                    </div>

        <hr class=\"lg\">

        <ul class=\"team-list row\">
              <div class=\"title-accent text-center\">
                  <h3 id=\"timeline\">
                    <span>
                    Our
                    </span>
                    Team
                  </h3>
              </div>
            <li class=\"team-item col-md-3\">
              <figure class=\"alignnone\">
                <img alt=\"\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/brad.jpg"), "html", null, true);
        echo "\">
              </figure>
              <header class=\"team-head\">
                <span class=\"team-head-info\"></span>
                <h4 class=\"team-name\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "Brad-Schmidt-Profile", array(), "array"), "blockTitle"), "html", null, true);
        echo "</h4>
                <ul class=\"team-social list-unstyled\">
                  <li>
                    <i class=\"fa fa-envelope-o\"></i><a href=\"mailto:bschmidt@makoto-investments.com\">bschmidt@makoto-investments.com</a>
                  </li>
                </ul>
              </header>
                <span class=\"description\">
                    ";
        // line 65
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "Brad-Schmidt-Profile", array(), "array"), "blockContent");
        echo "
                </span>
            </li>
            <li class=\"team-item col-md-3\">
              <figure class=\"alignnone\">
                <img alt=\"\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/dj.jpg"), "html", null, true);
        echo "\">
              </figure>
              <header class=\"team-head\">
                <span class=\"team-head-info\"></span>
                <h4 class=\"team-name\">";
        // line 74
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "DJ-Duarte-Profile", array(), "array"), "blockTitle");
        echo "</h4>
                <ul class=\"team-social list-unstyled\">
                  <li>
                    <i class=\"fa fa-envelope-o\"></i><a href=\"mailto:dduarte@makoto-investments.com\">dduarte@makoto-investments.com</a>
                  </li>
                </ul>
              </header>
              <span class=\"description\">
                    ";
        // line 82
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "DJ-Duarte-Profile", array(), "array"), "blockContent");
        echo "
              </span>
            </li>
            <li class=\"team-item col-md-3\">
              <figure class=\"alignnone\">
                <img alt=\"\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/geno.jpg"), "html", null, true);
        echo "\">
              </figure>
              <header class=\"team-head\">
                <span class=\"team-head-info\"></span>
                <h4 class=\"team-name\">";
        // line 91
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "CE-Geno-Johnston-Profile", array(), "array"), "blockTitle");
        echo "</h4>
                <ul class=\"team-social list-unstyled\">
                  <li>
                    <i class=\"fa fa-envelope-o\"></i><a href=\"mailto:gjohnston@makoto-investments.com\">gjohnston@makoto-investments.com</a>
                  </li>
                </ul>
              </header>
              <span class=\"description\">
                    ";
        // line 99
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "CE-Geno-Johnston-Profile", array(), "array"), "blockContent");
        echo "
              </span>
            </li>
            <li class=\"team-item col-md-3\">
              <figure class=\"alignnone\">
                <img alt=\"\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/law.jpg"), "html", null, true);
        echo "\">
              </figure>
              <header class=\"team-head\">
                <span class=\"team-head-info\"></span>
                <h4 class=\"team-name\">";
        // line 108
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "Paul-Law-Profile", array(), "array"), "blockTitle");
        echo "</h4>
                <ul class=\"team-social list-unstyled\">
                  <li>
                    <i class=\"fa fa-envelope-o\"></i><a href=\"mailto:plaw@makoto-investments.com\">plaw@makoto-investments.com</a>
                  </li>
                </ul>
              </header>
                <span class=\"description\">
                    ";
        // line 116
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "Paul-Law-Profile", array(), "array"), "blockContent");
        echo "
                </span>
            </li>
        </ul>

        <hr class=\"lg\">
        
        <div class=\"row\">
            <div class=\"title-accent\" align=\"center\">
                <h3 id=\"timeline\">Corporate History</h3>
            </div>
            <ul class=\"timeline\">
                ";
        // line 128
        $context["prev"] = 0;
        // line 129
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "Timeline", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 130
            echo "

                <li";
            // line 132
            if (((null === $this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "locatedLeft")) || ($this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "locatedLeft") == 0))) {
                echo " class=\"timeline-inverted\"";
            }
            echo ">
                ";
            // line 133
            if (($this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "year") != (isset($context["prev"]) ? $context["prev"] : $this->getContext($context, "prev")))) {
                // line 134
                echo "                      <div class=\"timeline-badge ";
                if (($this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "highLight") == true)) {
                    echo "warning";
                } else {
                    echo "info";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "year"), "html", null, true);
                echo "</div>
                      ";
                // line 135
                $context["prev"] = $this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "year");
                // line 136
                echo "                ";
            }
            // line 137
            echo "                  <div class=\"timeline-panel\">
                    <div class=\"timeline-heading\">
                      <strong>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "events"), "html", null, true);
            echo "</strong>
                    </div>
                  </div>
                </li>
              
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "

            </ul>
        </div>
         <!-- time line end -->

        <hr class=\"lg\">
            
        <div class=\"row\">
            <div class=\"title-accent\" align=\"center\">
                <h3>Global Reach = Local Deployment</h3>
            </div>
            

            <div class=\"col-md-12\" align=\"center\">
                <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/global-map.png"), "html", null, true);
        echo "\" width=\"100%\" alt=\"\">
            </div>
            <div class=\"col-md-2\">
                <div class=\"list\">
                    <ul>
                        <li>Australia</li>
                        <li>Canada</li>
                        <li>China</li>
                        <li>Chzech Repubiic</li>
                        <li>Denmark</li>
                        <li>Egypt</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"list\">
                    <ul>
                        <li>Ethiopia</li>
                        <li>France</li>
                        <li>Germany</li>
                        <li>India</li>
                        <li>Indonesia</li>
                        <li>Japan</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"list\">
                    <ul>
                        <li>Kenya</li>
                        <li>Macau</li>
                        <li>Malaysia</li>
                        <li>Netherlands</li>
                        <li>Poland</li>
                        <li>Serbia</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"list\">
                    <ul>
                        <li>Singapore</li>
                        <li>Slovakia</li>
                        <li>South Africa</li>
                        <li>Taiwan</li>
                        <li>Thailand</li>
                        <li>United Arab Emirates</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"list\">
                    <ul>
                        <li>United Kingdom</li>
                        <li>United States</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Page Content / End -->
";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 160,  241 => 145,  229 => 139,  225 => 137,  222 => 136,  220 => 135,  209 => 134,  207 => 133,  201 => 132,  197 => 130,  192 => 129,  190 => 128,  175 => 116,  164 => 108,  157 => 104,  149 => 99,  138 => 91,  131 => 87,  123 => 82,  112 => 74,  105 => 70,  97 => 65,  86 => 57,  79 => 53,  58 => 35,  42 => 22,  19 => 1,);
    }
}
