<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_4de4f3c85eed7fe0d28f925f5ab51e832c0b7ef57996f32d4b247b396e355313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");

        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_list_table($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"box box-primary\">
        <div class=\"box-body\">
            <ul class=\"nav nav-pills\">
                <li><a><strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts"));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 21
            echo "                    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "providers")) == 0)) {
                // line 22
                echo "                        ";
                $context["urlParams"] = array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 23
                echo "                    ";
            } else {
                // line 24
                echo "                        ";
                $context["urlParams"] = array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "provider" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "providers"), 0, array(), "array"));
                // line 25
                echo "                    ";
            }
            // line 26
            echo "
                    ";
            // line 27
            if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"))) {
                // line 28
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 30
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                ";
        // line 34
        $context["providers"] = $this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "getProviderNamesByContext", array(0 => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context")), "method");
        // line 35
        echo "
                ";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers"))) > 1)) {
            // line 37
            echo "                        </ul>
                    </div>
                    <div class=\"box-footer\">
                        <ul class=\"nav nav-pills\">
                            <li><a><strong>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

                            ";
            // line 43
            if ((!$this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider"))) {
                // line 44
                echo "                                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                            ";
            } else {
                // line 46
                echo "                                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 48
            echo "
                            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 50
                echo "                                ";
                if (($this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider") == (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))) {
                    // line 51
                    echo "                                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                                ";
                } else {
                    // line 53
                    echo "                                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                                ";
                }
                // line 55
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                ";
        }
        // line 57
        echo "            </ul>
        </div>
    </div>

    ";
        // line 61
        $this->displayParentBlock("list_table", $context, $blocks);
        echo "

";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 61,  160 => 57,  157 => 56,  151 => 55,  143 => 53,  135 => 51,  132 => 50,  128 => 49,  125 => 48,  117 => 46,  109 => 44,  107 => 43,  102 => 41,  96 => 37,  94 => 36,  91 => 35,  89 => 34,  86 => 33,  80 => 32,  72 => 30,  64 => 28,  62 => 27,  59 => 26,  56 => 25,  53 => 24,  50 => 23,  47 => 22,  44 => 21,  40 => 20,  36 => 19,  31 => 16,  28 => 15,);
    }
}
