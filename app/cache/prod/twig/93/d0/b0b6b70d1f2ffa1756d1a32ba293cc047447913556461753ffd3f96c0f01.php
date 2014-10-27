<?php

/* SonataFormatterBundle:Ckeditor:browser.html.twig */
class __TwigTemplate_93d0b0b6b70d1f2ffa1756d1a32ba293cc047447913556461753ffd3f96c0f01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle::empty_layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'preview' => array($this, 'block_preview'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["ckParameters"] = array("CKEditor" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "CKEditorFuncNum"), "method"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(function () {
            \$(\".select\").click(function (e) {
                e.preventDefault();
                window.opener.CKEDITOR.tools.callFunction(";
        // line 23
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \$(this).attr(\"href\"));
                window.close();
            });
        });
    </script>
";
    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        // line 32
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : null), "contexts"));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 36
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "providers")) == 0)) {
                // line 37
                echo "                ";
                $context["urlParams"] = twig_array_merge(array("context" => (isset($context["name"]) ? $context["name"] : null)), (isset($context["ckParameters"]) ? $context["ckParameters"] : null));
                // line 38
                echo "            ";
            } else {
                // line 39
                echo "                ";
                $context["urlParams"] = twig_array_merge(array("context" => (isset($context["name"]) ? $context["name"] : null), "provider" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "providers"), 0, array(), "array")), (isset($context["ckParameters"]) ? $context["ckParameters"] : null));
                // line 40
                echo "            ";
            }
            // line 41
            echo "
            ";
            // line 42
            if (((isset($context["name"]) ? $context["name"] : null) == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "context"))) {
                // line 43
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", (isset($context["urlParams"]) ? $context["urlParams"] : null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 45
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", (isset($context["urlParams"]) ? $context["urlParams"] : null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : null), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        ";
        // line 49
        $context["providers"] = $this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : null), "getProviderNamesByContext", array(0 => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "context")), "method");
        // line 50
        echo "
        ";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["providers"]) ? $context["providers"] : null)) > 1)) {
            // line 52
            echo "            <li><a><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

            ";
            // line 54
            if ((!$this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "provider"))) {
                // line 55
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "context"), "provider" => null), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 57
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "context"), "provider" => null), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 59
            echo "
            ";
            // line 60
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 61
                echo "                ";
                if (($this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "provider") == (isset($context["provider_name"]) ? $context["provider_name"] : null))) {
                    // line 62
                    echo "                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : null)), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : null), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 64
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge(array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : null), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : null)), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : null), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 66
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "        ";
        }
        // line 68
        echo "    </ul>

";
    }

    // line 72
    public function block_list_table($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "batchactions");
        // line 74
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results")) > 0)) {
            // line 75
            echo "        <table class=\"table table-bordered table-striped\">
            ";
            // line 76
            $this->displayBlock('table_header', $context, $blocks);
            // line 104
            echo "
            ";
            // line 105
            $this->displayBlock('table_body', $context, $blocks);
            // line 129
            echo "
            ";
            // line 130
            $this->displayBlock('table_footer', $context, $blocks);
            // line 201
            echo "        </table>
    ";
        } else {
            // line 203
            echo "        <p class=\"notice\">
            ";
            // line 204
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
    }

    // line 76
    public function block_table_header($context, array $blocks = array())
    {
        // line 77
        echo "                <thead>
                <tr class=\"sonata-ba-list-field-header\">
                    ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 80
            echo "                        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "getOption", array(0 => "code"), "method") == "_batch") || ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "name") == "_action"))) {
                // line 81
                echo "                            ";
                // line 82
                echo "                        ";
            } else {
                // line 83
                echo "                            ";
                $context["sortable"] = false;
                // line 84
                echo "                            ";
                if (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "sortable"))) {
                    // line 85
                    echo "                                ";
                    $context["sortable"] = true;
                    // line 86
                    echo "                                ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_by") == (isset($context["field_description"]) ? $context["field_description"] : null));
                    // line 87
                    echo "                                ";
                    $context["sort_parameters"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "sortparameters", array(0 => (isset($context["field_description"]) ? $context["field_description"] : null), 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid")), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null));
                    // line 88
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 89
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : null)) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), "_sort_order")) : ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "_sort_order")));
                    // line 90
                    echo "                            ";
                }
                // line 91
                echo "
                            ";
                // line 92
                ob_start();
                // line 93
                echo "                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "type"), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : null), "html", null, true);
                }
                echo "\">
                                    ";
                // line 94
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", (isset($context["sort_parameters"]) ? $context["sort_parameters"] : null)), "html", null, true);
                    echo "\">";
                }
                // line 95
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "label")), "method"), "html", null, true);
                echo "
                                        ";
                // line 96
                if ((isset($context["sortable"]) ? $context["sortable"] : null)) {
                    echo "</a>";
                }
                // line 97
                echo "                                </th>
                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 99
                echo "                        ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </tr>
                </thead>
            ";
    }

    // line 105
    public function block_table_body($context, array $blocks = array())
    {
        // line 106
        echo "                <tbody>
                    ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "results"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 108
            echo "                        <tr>
                            <td colspan=\"";
            // line 109
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - 1), "html", null, true);
            echo "\">
                                <div>
                                    <a href=\"";
            // line 111
            echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : null), "reference");
            echo "\" class=\"select\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('sonata_media')->thumbnail((isset($context["object"]) ? $context["object"] : null), "admin", array("width" => 75, "height" => 60));
            echo "</a>

                                    <strong><a href=\"";
            // line 113
            echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : null), "reference");
            echo "\" class=\"select\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "name"), "html", null, true);
            echo "</a></strong> <br />
                                    ";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "providerName"), array(), "SonataMediaBundle"), "html", null, true);
            if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "width")) {
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "width"), "html", null, true);
                if ($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "height")) {
                    echo "x";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "height"), "html", null, true);
                }
                echo "px";
            }
            // line 115
            echo "
                                    ";
            // line 116
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["formats"]) ? $context["formats"] : null), $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id"), array(), "array")) > 0)) {
                // line 117
                echo "                                        - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
                echo ":
                                        ";
                // line 118
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formats"]) ? $context["formats"] : null), $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "id"), array(), "array"));
                foreach ($context['_seq'] as $context["name"] => $context["format"]) {
                    // line 119
                    echo "                                            <a href=\"";
                    echo $this->env->getExtension('sonata_media')->path((isset($context["object"]) ? $context["object"] : null), (isset($context["name"]) ? $context["name"] : null));
                    echo "\" class=\"select\">";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "</a> ";
                    if ($this->getAttribute((isset($context["format"]) ? $context["format"] : null), "width")) {
                        echo "(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "width"), "html", null, true);
                        if ($this->getAttribute((isset($context["format"]) ? $context["format"] : null), "height")) {
                            echo "x";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "height"), "html", null, true);
                        }
                        echo "px)";
                    }
                    // line 120
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                                    ";
            }
            // line 122
            echo "                                    <br />
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                </tbody>
            ";
    }

    // line 130
    public function block_table_footer($context, array $blocks = array())
    {
        // line 131
        echo "                <tr>
                    <th colspan=\"";
        // line 132
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")) - 2), "html", null, true);
        echo "\">
                        <div class=\"form-inline\">
                            <div class=\"pull-right\">
                                ";
        // line 135
        $this->displayBlock('pager_results', $context, $blocks);
        // line 157
        echo "                            </div>
                        </div>
                    </th>
                </tr>

                ";
        // line 162
        $this->displayBlock('pager_links', $context, $blocks);
        // line 199
        echo "
            ";
    }

    // line 135
    public function block_pager_results($context, array $blocks = array())
    {
        // line 136
        echo "                                    ";
        $this->displayBlock('num_pages', $context, $blocks);
        // line 140
        echo "
                                    ";
        // line 141
        $this->displayBlock('num_results', $context, $blocks);
        // line 145
        echo "
                                    ";
        // line 146
        $this->displayBlock('max_per_page', $context, $blocks);
        // line 156
        echo "                                ";
    }

    // line 136
    public function block_num_pages($context, array $blocks = array())
    {
        // line 137
        echo "                                        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
                                        &nbsp;-&nbsp;
                                    ";
    }

    // line 141
    public function block_num_results($context, array $blocks = array())
    {
        // line 142
        echo "                                        ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 143
        echo "                                        &nbsp;-&nbsp;
                                    ";
    }

    // line 146
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 147
        echo "                                        <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
                                        <select class=\"per-page small\" id=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
                                            ";
        // line 149
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 150
            echo "                                                <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge(array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), array("_per_page" => (isset($context["per_page"]) ? $context["per_page"] : null)))), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
            echo "\">
                                                    ";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : null), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                                        </select>
                                    ";
    }

    // line 162
    public function block_pager_links($context, array $blocks = array())
    {
        // line 163
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "haveToPaginate", array(), "method")) {
            // line 164
            echo "                        <tr>
                            <td colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "list"), "elements")), "html", null, true);
            echo "\">
                                <div class=\"pagination pagination-centered\">
                                    <ul>
                                        ";
            // line 168
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") > 2)) {
                // line 169
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => 1), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                        ";
            }
            // line 171
            echo "
                                        ";
            // line 172
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage"))) {
                // line 173
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "previouspage")), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                        ";
            }
            // line 175
            echo "
                                        ";
            // line 177
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "getLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 178
                echo "                                            ";
                if (((isset($context["page"]) ? $context["page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"))) {
                    // line 179
                    echo "                                                <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a></li>
                                            ";
                } else {
                    // line 181
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : null)), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 183
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "
                                        ";
            // line 185
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage"))) {
                // line 186
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                        ";
            }
            // line 188
            echo "
                                        ";
            // line 189
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nextpage")))) {
                // line 190
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage")), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                        ";
            }
            // line 192
            echo "                                    </ul>
                                </div>
                            </td>
                        </tr>

                    ";
        }
        // line 198
        echo "                ";
    }

    // line 209
    public function block_list_filters($context, array $blocks = array())
    {
        // line 210
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters")) {
            // line 211
            echo "        <form class=\"sonata-filter-form ";
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isChild") && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo $this->env->getExtension('routing')->getUrl("ckeditor_browser");
            echo "\" method=\"GET\">
            <fieldset class=\"filter_legend\">
                <legend class=\"filter_legend ";
            // line 213
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "</legend>

                <div class=\"filter_container ";
            // line 215
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "hasActiveFilters")) ? ("active") : ("inactive"));
            echo "\">
                    <div>
                        ";
            // line 217
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "filters"));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 218
                echo "                            <div class=\"clearfix\">
                                <label for=\"";
                // line 219
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), "vars"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "label")), "method"), "html", null, true);
                echo "</label>
                                ";
                // line 220
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "type", array(), "array"), 'widget', array("attr" => array("class" => "span8 sonata-filter-option")));
                echo "
                                ";
                // line 221
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), $this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "formName"), array(), "array"), "children"), "value", array(), "array"), 'widget', array("attr" => array("class" => "span8")));
                echo "
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                    </div>

                    <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\" />

                    ";
            // line 228
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children"), "_page", array(), "array"), "setRendered", array(), "method");
            // line 229
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

                    <input type=\"submit\" class=\"btn btn-primary\" value=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" />

                    <a class=\"btn\" href=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ckeditor_browser", twig_array_merge(array("filters" => "reset"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                </div>

                ";
            // line 236
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "persistentParameters"), (isset($context["ckParameters"]) ? $context["ckParameters"] : null)));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 237
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["paramKey"]) ? $context["paramKey"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["paramValue"]) ? $context["paramValue"] : null), "html", null, true);
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 239
            echo "            </fieldset>
        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:browser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  712 => 231,  689 => 221,  679 => 219,  634 => 192,  626 => 190,  621 => 188,  613 => 186,  608 => 184,  546 => 165,  506 => 148,  499 => 147,  496 => 146,  488 => 142,  468 => 156,  466 => 146,  458 => 140,  445 => 162,  438 => 157,  371 => 115,  266 => 87,  612 => 220,  601 => 216,  585 => 209,  559 => 201,  551 => 199,  526 => 190,  497 => 156,  493 => 155,  485 => 141,  424 => 130,  406 => 121,  391 => 163,  340 => 136,  333 => 132,  318 => 86,  313 => 84,  307 => 82,  261 => 73,  206 => 67,  12 => 36,  90 => 25,  993 => 273,  990 => 272,  987 => 271,  973 => 299,  970 => 298,  968 => 297,  962 => 294,  951 => 292,  949 => 291,  940 => 288,  938 => 287,  935 => 286,  929 => 284,  927 => 283,  918 => 280,  913 => 278,  907 => 276,  905 => 275,  894 => 269,  890 => 263,  885 => 260,  877 => 255,  865 => 248,  859 => 246,  857 => 245,  853 => 243,  847 => 240,  844 => 239,  842 => 238,  839 => 237,  836 => 236,  828 => 264,  825 => 235,  817 => 305,  810 => 266,  802 => 232,  794 => 223,  790 => 222,  769 => 215,  757 => 213,  743 => 210,  734 => 208,  731 => 207,  721 => 204,  710 => 200,  706 => 229,  698 => 224,  688 => 193,  685 => 220,  682 => 191,  670 => 188,  667 => 215,  660 => 213,  657 => 184,  651 => 183,  644 => 181,  638 => 179,  611 => 185,  605 => 164,  602 => 183,  578 => 177,  545 => 198,  534 => 145,  531 => 144,  520 => 137,  492 => 122,  489 => 121,  475 => 137,  451 => 112,  414 => 104,  395 => 103,  378 => 92,  367 => 88,  364 => 87,  352 => 85,  350 => 84,  345 => 83,  223 => 23,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 304,  981 => 307,  979 => 302,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 293,  946 => 290,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 282,  921 => 284,  916 => 279,  908 => 278,  902 => 274,  900 => 271,  897 => 270,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 250,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 235,  830 => 250,  826 => 247,  824 => 246,  822 => 234,  819 => 244,  815 => 269,  812 => 238,  808 => 234,  806 => 234,  804 => 233,  801 => 232,  797 => 224,  793 => 227,  791 => 226,  789 => 225,  782 => 221,  779 => 216,  754 => 212,  748 => 205,  745 => 203,  739 => 200,  735 => 198,  732 => 197,  728 => 206,  726 => 191,  723 => 205,  717 => 233,  714 => 201,  704 => 228,  701 => 196,  699 => 179,  690 => 174,  687 => 173,  681 => 169,  673 => 189,  671 => 164,  668 => 163,  663 => 160,  654 => 155,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 177,  627 => 140,  620 => 223,  614 => 133,  609 => 129,  599 => 215,  576 => 115,  574 => 205,  570 => 161,  567 => 173,  562 => 171,  556 => 307,  552 => 168,  550 => 230,  544 => 99,  541 => 97,  522 => 92,  519 => 91,  505 => 127,  502 => 87,  472 => 136,  465 => 116,  463 => 145,  446 => 110,  443 => 109,  429 => 66,  412 => 126,  399 => 56,  397 => 128,  394 => 54,  389 => 51,  383 => 49,  357 => 37,  349 => 34,  342 => 109,  334 => 92,  330 => 103,  328 => 22,  326 => 129,  300 => 93,  178 => 48,  157 => 49,  786 => 220,  780 => 219,  777 => 234,  775 => 216,  771 => 231,  768 => 230,  756 => 229,  753 => 228,  750 => 211,  747 => 226,  744 => 225,  742 => 202,  737 => 209,  725 => 236,  722 => 219,  719 => 187,  711 => 213,  708 => 212,  691 => 194,  674 => 209,  669 => 207,  664 => 206,  648 => 182,  646 => 209,  624 => 189,  598 => 191,  595 => 226,  592 => 223,  589 => 178,  586 => 179,  584 => 176,  581 => 162,  572 => 204,  568 => 178,  566 => 203,  561 => 175,  554 => 169,  542 => 156,  539 => 96,  521 => 166,  512 => 131,  509 => 130,  507 => 165,  483 => 156,  481 => 155,  478 => 154,  476 => 147,  467 => 146,  462 => 143,  456 => 140,  450 => 114,  447 => 199,  441 => 136,  428 => 133,  425 => 108,  422 => 107,  419 => 127,  416 => 129,  410 => 113,  404 => 90,  401 => 89,  388 => 117,  382 => 115,  376 => 117,  369 => 148,  363 => 109,  359 => 144,  356 => 105,  353 => 103,  348 => 101,  346 => 33,  335 => 107,  332 => 106,  329 => 105,  291 => 46,  286 => 82,  280 => 87,  255 => 88,  245 => 270,  76 => 34,  321 => 100,  274 => 135,  284 => 76,  275 => 90,  256 => 79,  253 => 78,  250 => 274,  237 => 71,  222 => 66,  185 => 61,  100 => 34,  560 => 187,  558 => 174,  553 => 184,  549 => 182,  537 => 162,  532 => 154,  528 => 173,  525 => 172,  518 => 180,  514 => 150,  511 => 166,  508 => 165,  501 => 163,  491 => 143,  487 => 156,  455 => 136,  449 => 111,  442 => 134,  439 => 71,  436 => 135,  433 => 130,  420 => 106,  415 => 127,  411 => 103,  405 => 118,  403 => 150,  380 => 107,  366 => 110,  354 => 113,  331 => 96,  325 => 94,  320 => 87,  317 => 100,  311 => 118,  308 => 89,  304 => 85,  272 => 89,  233 => 82,  167 => 54,  692 => 175,  683 => 170,  678 => 168,  676 => 218,  666 => 382,  661 => 159,  656 => 378,  652 => 211,  645 => 150,  641 => 180,  631 => 364,  625 => 175,  615 => 354,  607 => 218,  597 => 342,  590 => 338,  583 => 178,  579 => 118,  577 => 206,  575 => 175,  569 => 325,  565 => 172,  555 => 200,  548 => 158,  540 => 163,  536 => 194,  529 => 191,  524 => 297,  516 => 294,  510 => 149,  504 => 164,  500 => 291,  495 => 123,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 275,  459 => 116,  434 => 256,  421 => 90,  417 => 105,  400 => 120,  361 => 86,  339 => 108,  324 => 179,  310 => 97,  302 => 79,  296 => 167,  270 => 84,  259 => 89,  244 => 34,  226 => 131,  150 => 35,  81 => 25,  358 => 103,  351 => 141,  347 => 111,  343 => 132,  338 => 99,  327 => 102,  323 => 101,  319 => 124,  315 => 98,  301 => 95,  299 => 86,  293 => 109,  289 => 83,  277 => 44,  271 => 94,  265 => 41,  262 => 81,  257 => 84,  251 => 82,  248 => 84,  239 => 64,  202 => 74,  174 => 42,  267 => 74,  263 => 86,  242 => 79,  231 => 69,  218 => 130,  207 => 58,  195 => 54,  129 => 51,  20 => 1,  74 => 19,  84 => 39,  153 => 55,  260 => 85,  225 => 67,  186 => 47,  170 => 79,  145 => 48,  137 => 54,  134 => 35,  70 => 32,  288 => 107,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 277,  893 => 704,  882 => 696,  871 => 251,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 233,  795 => 228,  785 => 626,  774 => 212,  762 => 609,  751 => 206,  740 => 239,  729 => 237,  718 => 577,  707 => 569,  696 => 178,  672 => 217,  665 => 536,  658 => 158,  649 => 210,  642 => 198,  635 => 226,  617 => 135,  610 => 499,  603 => 192,  594 => 181,  587 => 177,  580 => 207,  563 => 202,  543 => 164,  523 => 151,  503 => 416,  477 => 82,  460 => 143,  452 => 135,  392 => 317,  385 => 119,  377 => 47,  370 => 45,  344 => 193,  212 => 60,  249 => 81,  232 => 76,  216 => 70,  211 => 68,  200 => 65,  198 => 64,  192 => 53,  181 => 66,  58 => 31,  191 => 57,  155 => 59,  113 => 40,  426 => 126,  396 => 349,  373 => 90,  281 => 92,  236 => 109,  52 => 23,  110 => 28,  197 => 72,  165 => 62,  161 => 162,  146 => 34,  139 => 55,  127 => 36,  124 => 49,  23 => 12,  306 => 96,  303 => 94,  295 => 94,  292 => 91,  290 => 90,  287 => 77,  282 => 3,  279 => 104,  215 => 129,  210 => 104,  188 => 48,  184 => 56,  180 => 49,  172 => 46,  160 => 57,  152 => 61,  148 => 43,  126 => 50,  114 => 39,  104 => 40,  97 => 42,  83 => 37,  77 => 113,  53 => 12,  37 => 8,  34 => 4,  228 => 75,  213 => 105,  205 => 75,  194 => 66,  190 => 68,  175 => 47,  120 => 29,  118 => 23,  96 => 68,  65 => 39,  480 => 162,  474 => 122,  469 => 118,  461 => 141,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 70,  435 => 69,  430 => 132,  427 => 131,  423 => 63,  413 => 128,  409 => 122,  407 => 152,  402 => 58,  398 => 88,  393 => 168,  387 => 110,  384 => 94,  381 => 118,  379 => 154,  374 => 116,  368 => 112,  365 => 41,  362 => 39,  360 => 114,  355 => 106,  341 => 131,  337 => 153,  322 => 93,  314 => 99,  312 => 97,  309 => 148,  305 => 115,  298 => 12,  294 => 85,  285 => 45,  283 => 93,  278 => 91,  268 => 300,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 33,  229 => 25,  220 => 201,  214 => 63,  177 => 43,  169 => 44,  140 => 91,  132 => 51,  128 => 32,  111 => 77,  107 => 45,  61 => 26,  273 => 85,  269 => 88,  254 => 83,  246 => 80,  243 => 66,  240 => 72,  238 => 77,  235 => 76,  230 => 62,  227 => 204,  224 => 203,  221 => 73,  219 => 237,  217 => 56,  208 => 76,  204 => 57,  179 => 86,  159 => 158,  143 => 57,  135 => 53,  131 => 52,  119 => 44,  108 => 39,  102 => 41,  71 => 34,  67 => 32,  63 => 29,  59 => 14,  47 => 22,  201 => 56,  196 => 72,  183 => 58,  171 => 57,  166 => 61,  163 => 53,  158 => 60,  156 => 38,  151 => 55,  142 => 30,  138 => 49,  136 => 45,  123 => 48,  121 => 48,  117 => 45,  115 => 47,  105 => 37,  91 => 40,  69 => 17,  62 => 16,  49 => 22,  38 => 17,  101 => 42,  94 => 41,  89 => 34,  85 => 38,  79 => 36,  75 => 35,  68 => 25,  56 => 13,  50 => 11,  87 => 29,  72 => 30,  66 => 17,  55 => 14,  41 => 16,  28 => 14,  24 => 13,  25 => 4,  31 => 4,  26 => 2,  98 => 25,  93 => 35,  88 => 39,  78 => 20,  46 => 10,  44 => 17,  32 => 6,  27 => 5,  22 => 12,  43 => 19,  40 => 8,  35 => 17,  29 => 3,  21 => 2,  19 => 1,  209 => 58,  203 => 55,  199 => 73,  193 => 62,  189 => 63,  187 => 67,  182 => 87,  176 => 85,  173 => 64,  168 => 52,  164 => 55,  162 => 61,  154 => 36,  149 => 41,  147 => 57,  144 => 38,  141 => 56,  133 => 46,  130 => 84,  125 => 48,  122 => 82,  116 => 41,  112 => 43,  109 => 44,  106 => 41,  103 => 32,  99 => 43,  95 => 30,  92 => 40,  86 => 118,  82 => 37,  80 => 33,  73 => 19,  64 => 31,  60 => 23,  57 => 14,  54 => 23,  51 => 12,  48 => 10,  45 => 23,  42 => 7,  39 => 6,  36 => 14,  33 => 15,  30 => 15,);
    }
}
