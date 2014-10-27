<?php

/* MakotoComponentBundle:Navbar:index.html.twig */
class __TwigTemplate_405b4b892e6cad4a0604bfb11f38c19aa992128410bb0af4dd0c82fb9ba7e6c9 extends Twig_Template
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
        $context["current"] = (("http://" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "server"), "get", array(0 => "HTTP_HOST"), "method")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "server"), "get", array(0 => "REDIRECT_URL"), "method"));
        // line 2
        echo "<!-- Header -->
<header class=\"header header header-top-colored menu-colored\">

\t<div class=\"header-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header-top-right\">\t
\t\t\t\t<span class=\"register\">
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_redirect");
        echo "\">Login</a>
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"header-main\">
\t\t<div class=\"container\">
\t\t<!-- Logo -->
\t\t<div class=\"logo\">
\t\t\t<img alt=\"Stability\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\"></img>
\t\t</div>
\t\t<!-- Logo / End -->

\t\t<button type=\"button\" class=\"navbar-toggle\">
\t        \t\t<i class=\"fa fa-bars\"></i>
\t      \t</button>

\t      <!-- Navigation -->
\t\t\t<nav class=\"nav-main\">
\t\t\t\t<ul data-breakpoint=\"992\" class=\"flexnav\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "\">Makoto's DNA</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a id=\"roll1Btn\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "#roll1\">The Meaning of Makoto</a></li>
\t\t\t\t\t\t\t<li><a id=\"roll2Btn\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("makoto_cms_homepage");
        echo "#roll2\">The Makoto Way</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "makoto_global", "_format" => "jsp")), "html", null, true);
        echo "\">MAKOTO GLOBAL</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a id=\"ktwBtn\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "makoto_global", "_format" => "jsp")), "html", null, true);
        echo "#ktw\">Kaizen Training Workshops</a></li>
\t\t\t\t\t\t\t<li><a id=\"jleBtn\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "makoto_global", "_format" => "jsp")), "html", null, true);
        echo "#jle\">Japan Lean Experience (JLE)</a></li>
\t\t\t\t\t\t\t<li><a id=\"kcaBtn\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "makoto_global", "_format" => "jsp")), "html", null, true);
        echo "#kca\">Kaizen Consulting Activities</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "investments", "_format" => "jsp")), "html", null, true);
        echo "\">Investments</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "service", "_format" => "jsp")), "html", null, true);
        echo "\">Services</a>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a id=\"jle2Btn\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "service", "_format" => "jsp")), "html", null, true);
        echo "#jle2\">Japan Lean Experience</a></li>
\t\t\t\t\t\t\t<li><a id=\"conBtn\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "service", "_format" => "jsp")), "html", null, true);
        echo "#con\">Consulting</a></li>
\t\t\t\t\t\t\t<li><a id=\"leaBtn\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "service", "_format" => "jsp")), "html", null, true);
        echo "#lea\">Learning</a></li>
\t\t\t\t\t\t\t<li><a id=\"othBtn\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cms_makoto_pages", array("template_name" => "service", "_format" => "jsp")), "html", null, true);
        echo "#oth\">Other Services</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 56
            echo "
\t\t\t\t\t<li ";
            // line 57
            if (($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "route") && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) == $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "route"), $this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "parameter"))))) {
                echo "class=\"active\"";
            }
            echo ">

\t\t\t\t\t\t";
            // line 59
            if ($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "parameter")) {
                // line 60
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "route"), $this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "parameter")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "name"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            } elseif ($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "route")) {
                // line 64
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"";
                // line 65
                echo $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "route"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "name"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "name"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 72
            echo "
\t\t\t\t\t\t";
            // line 73
            if ($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "sub", array(), "any", true, true)) {
                // line 74
                echo "
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 77
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["node"]) ? $context["node"] : $this->getContext($context, "node")), "sub"));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_node"]) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t";
                    // line 81
                    if ($this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : $this->getContext($context, "sub_node")), "route")) {
                        // line 82
                        echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 83
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : $this->getContext($context, "sub_node")), "route"), $this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : $this->getContext($context, "sub_node")), "parameter")), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : $this->getContext($context, "sub_node")), "name"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 88
                        echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 90
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : $this->getContext($context, "sub_node")), "name"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t";
                    }
                    // line 94
                    echo "
\t\t\t\t\t\t\t\t\t";
                    // line 95
                    if ($this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : null), "sub", array(), "any", true, true)) {
                        // line 96
                        echo "
\t\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t";
                        // line 99
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sub_node"]) ? $context["sub_node"] : $this->getContext($context, "sub_node")), "sub"));
                        foreach ($context['_seq'] as $context["_key"] => $context["sub_sub_node"]) {
                            // line 100
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 103
                            if ($this->getAttribute((isset($context["sub_sub_node"]) ? $context["sub_sub_node"] : $this->getContext($context, "sub_sub_node")), "route")) {
                                // line 104
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["sub_sub_node"]) ? $context["sub_sub_node"] : $this->getContext($context, "sub_sub_node")), "route"), $this->getAttribute((isset($context["sub_sub_node"]) ? $context["sub_sub_node"] : $this->getContext($context, "sub_sub_node")), "parameter")), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub_sub_node"]) ? $context["sub_sub_node"] : $this->getContext($context, "sub_sub_node")), "name"), "html", null, true);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 106
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sub_sub_node"]) ? $context["sub_sub_node"] : $this->getContext($context, "sub_sub_node")), "name"), "html", null, true);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_sub_node'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 111
                        echo "
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_node'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
            }
            // line 121
            echo "
\t\t\t\t\t</li>

\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
\t\t\t\t</ul>
\t\t\t</nav>
\t\t\t<!-- Navigation / End -->
\t\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "MakotoComponentBundle:Navbar:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 121,  272 => 119,  263 => 115,  257 => 111,  249 => 108,  243 => 106,  235 => 104,  233 => 103,  228 => 100,  224 => 99,  217 => 95,  214 => 94,  207 => 90,  203 => 88,  196 => 84,  192 => 83,  189 => 82,  187 => 81,  182 => 78,  178 => 77,  173 => 74,  171 => 73,  162 => 69,  159 => 68,  151 => 65,  137 => 60,  135 => 59,  128 => 57,  125 => 56,  121 => 55,  110 => 50,  106 => 49,  102 => 48,  90 => 42,  86 => 41,  82 => 40,  78 => 39,  66 => 33,  62 => 32,  43 => 19,  30 => 9,  21 => 2,  19 => 1,  73 => 37,  68 => 12,  51 => 15,  46 => 13,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  285 => 125,  282 => 128,  279 => 127,  252 => 103,  219 => 96,  215 => 72,  210 => 70,  204 => 67,  199 => 65,  193 => 62,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  172 => 56,  168 => 72,  164 => 54,  160 => 53,  156 => 52,  152 => 51,  148 => 64,  144 => 49,  140 => 61,  136 => 46,  133 => 45,  126 => 41,  122 => 40,  118 => 39,  114 => 51,  109 => 36,  104 => 34,  97 => 46,  89 => 25,  83 => 22,  77 => 19,  71 => 16,  67 => 15,  63 => 6,  57 => 30,  53 => 10,  45 => 8,  41 => 7,  37 => 6,  49 => 14,  44 => 12,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
