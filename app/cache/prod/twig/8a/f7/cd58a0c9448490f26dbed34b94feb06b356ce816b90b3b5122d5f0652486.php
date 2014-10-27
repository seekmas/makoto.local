<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_8af7cd58a0c9448490f26dbed34b94feb06b356ce816b90b3b5122d5f0652486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 25
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "

        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
        <title>
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 61
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 62
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 64
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 65
                echo "                    -
                    ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 67
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 68
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2)) {
                            // line 69
                            echo "                                &gt;
                            ";
                        }
                        // line 71
                        echo "
                            ";
                        // line 72
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 74
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                ";
            }
            // line 76
            echo "            ";
        }
        // line 77
        echo "        </title>
    </head>
    <body ";
        // line 79
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 80
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 155
        echo "
        ";
        // line 156
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 311
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/skins/sonata/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/sets/markdown/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/sets/html/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/sets/textile/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/jquery.markitup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/sets/markdown/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/sets/html/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamarkitup/markitup/markitup/sets/textile/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
</html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 25
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 26
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "
            ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : $this->getContext($context, "stylesheet"))), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 44
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 45
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 53
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : $this->getContext($context, "javascript"))), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        ";
    }

    // line 79
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 80
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 81
        echo "            <header class=\"header\">
                ";
        // line 82
        $this->displayBlock('logo', $context, $blocks);
        // line 92
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 153
        echo "            </header>
        ";
    }

    // line 82
    public function block_logo($context, array $blocks = array())
    {
        // line 83
        echo "                    <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 84
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 85
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "\">";
            if (("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method"))) {
                echo "&nbsp;";
            }
            // line 86
            echo "                        ";
        }
        // line 87
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 88
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "
                        ";
        }
        // line 90
        echo "                    </a>
                ";
    }

    // line 92
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 93
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 94
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 103
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 128
            echo "                            </div>

                            ";
            // line 130
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 150
            echo "                        </nav>
                    ";
        }
        // line 152
        echo "                ";
    }

    // line 103
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 104
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 105
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 106
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 107
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 108
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 109
                        echo "                                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 110
                            echo "                                                            <li>
                                                                ";
                            // line 111
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 112
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 114
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 116
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 118
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 120
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                                                ";
                }
                // line 122
                echo "                                            ";
            } else {
                // line 123
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 125
            echo "                                        </ol>
                                    ";
        }
        // line 127
        echo "                                ";
    }

    // line 130
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 131
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 137
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 138
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 144
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 145
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 156
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 157
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 158
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 230
        echo "
                <aside class=\"right-side\">
                    ";
        // line 232
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 307
        echo "                </aside>

            </div>
        ";
    }

    // line 158
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 159
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 161
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 227
        echo "                        </section>
                    </aside>
                ";
    }

    // line 161
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 162
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 176
        echo "
                                ";
        // line 177
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 178
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 223
        echo "                                ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 226
        echo "                            ";
    }

    // line 162
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 163
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 164
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 175
        echo "                                ";
    }

    // line 177
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 178
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 179
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 180
            echo "                                        <ul class=\"sidebar-menu\">
                                            ";
            // line 181
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 182
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 183
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 184
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 185
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "
                                                ";
                // line 188
                echo "                                                ";
                $context["item_count"] = 0;
                // line 189
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 190
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 191
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 192
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 193
                                echo "                                                        ";
                            }
                            // line 194
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "                                                ";
                }
                // line 196
                echo "
                                                ";
                // line 197
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 198
                    echo "                                                    <li class=\"treeview\">
                                                        <a href=\"#\">
                                                            ";
                    // line 200
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    }
                    // line 201
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        ";
                    // line 204
                    $context["active"] = false;
                    // line 205
                    echo "                                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 206
                        echo "                                                            ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
                            // line 207
                            echo "                                                                ";
                            $context["active"] = true;
                            // line 208
                            echo "                                                            ";
                        }
                        // line 209
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    echo "                                                        <ul class=\"treeview-menu";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 211
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 212
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 213
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 215
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 219
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                                        </ul>
                                    ";
        }
        // line 222
        echo "                                ";
    }

    // line 223
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 224
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"#\" rel=\"noreferrer\" target=\"_blank\">Makoto project</a></p>
                                ";
    }

    // line 232
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 233
        echo "                        <section class=\"content-header\">
                            ";
        // line 234
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 266
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 269
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 305
        echo "                        </section>
                    ";
    }

    // line 234
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 235
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 264
        echo "
                            ";
    }

    // line 235
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 236
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 237
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 238
            if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"))))) {
                // line 239
                echo "                                                <div class=\"navbar-header\">
                                                    <span class=\"navbar-brand\">";
                // line 240
                echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
                echo "</span>
                                                </div>
                                            ";
            }
            // line 243
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 245
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 246
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 248
            echo "                                                </div>

                                                ";
            // line 250
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 251
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 255
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 260
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 263
        echo "                                ";
    }

    // line 269
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 270
        echo "
                                ";
        // line 271
        $this->displayBlock('notice', $context, $blocks);
        // line 274
        echo "
                                ";
        // line 275
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 276
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 278
        echo "
                                ";
        // line 279
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 280
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 282
        echo "
                                ";
        // line 283
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 284
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 286
        echo "
                                ";
        // line 287
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 288
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 290
        echo "
                                ";
        // line 291
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 292
            echo "                                    <div class=\"row\">
                                        <div class=\"sonata-ba-list ";
            // line 293
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 294
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                        </div>

                                        ";
            // line 297
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 298
                echo "                                            <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 299
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                            </div>
                                        ";
            }
            // line 302
            echo "                                    </div>
                                ";
        }
        // line 304
        echo "                            ";
    }

    // line 271
    public function block_notice($context, array $blocks = array())
    {
        // line 272
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 273
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  993 => 273,  990 => 272,  987 => 271,  983 => 304,  979 => 302,  973 => 299,  970 => 298,  968 => 297,  962 => 294,  954 => 293,  951 => 292,  949 => 291,  946 => 290,  940 => 288,  938 => 287,  935 => 286,  929 => 284,  927 => 283,  924 => 282,  918 => 280,  916 => 279,  913 => 278,  907 => 276,  905 => 275,  902 => 274,  900 => 271,  897 => 270,  894 => 269,  890 => 263,  885 => 260,  877 => 255,  871 => 251,  869 => 250,  865 => 248,  859 => 246,  857 => 245,  853 => 243,  847 => 240,  844 => 239,  842 => 238,  839 => 237,  836 => 236,  833 => 235,  828 => 264,  825 => 235,  822 => 234,  817 => 305,  815 => 269,  810 => 266,  808 => 234,  805 => 233,  802 => 232,  797 => 224,  794 => 223,  790 => 222,  786 => 220,  780 => 219,  775 => 216,  769 => 215,  757 => 213,  754 => 212,  750 => 211,  743 => 210,  737 => 209,  734 => 208,  731 => 207,  728 => 206,  723 => 205,  721 => 204,  714 => 201,  710 => 200,  706 => 198,  704 => 197,  701 => 196,  698 => 195,  691 => 194,  688 => 193,  685 => 192,  682 => 191,  676 => 190,  673 => 189,  670 => 188,  667 => 186,  660 => 185,  657 => 184,  651 => 183,  648 => 182,  644 => 181,  641 => 180,  638 => 179,  635 => 178,  629 => 177,  625 => 175,  611 => 166,  605 => 164,  602 => 163,  599 => 162,  595 => 226,  592 => 223,  589 => 178,  587 => 177,  584 => 176,  581 => 162,  578 => 161,  572 => 227,  570 => 161,  566 => 159,  563 => 158,  556 => 307,  554 => 232,  550 => 230,  548 => 158,  545 => 157,  542 => 156,  534 => 145,  531 => 144,  523 => 138,  520 => 137,  512 => 131,  509 => 130,  505 => 127,  501 => 125,  495 => 123,  492 => 122,  489 => 121,  475 => 120,  469 => 118,  465 => 116,  459 => 114,  451 => 112,  449 => 111,  446 => 110,  443 => 109,  425 => 108,  422 => 107,  420 => 106,  417 => 105,  414 => 104,  411 => 103,  407 => 152,  403 => 150,  401 => 130,  397 => 128,  395 => 103,  384 => 94,  381 => 93,  378 => 92,  373 => 90,  367 => 88,  364 => 87,  361 => 86,  352 => 85,  350 => 84,  345 => 83,  342 => 82,  337 => 153,  334 => 92,  332 => 82,  329 => 81,  326 => 80,  320 => 79,  315 => 55,  306 => 53,  302 => 52,  295 => 48,  291 => 46,  285 => 45,  277 => 44,  269 => 43,  265 => 41,  262 => 40,  257 => 37,  248 => 35,  244 => 34,  241 => 33,  238 => 32,  232 => 26,  229 => 25,  223 => 23,  215 => 320,  211 => 319,  207 => 318,  203 => 317,  199 => 316,  194 => 314,  190 => 313,  186 => 312,  181 => 311,  179 => 156,  176 => 155,  174 => 80,  170 => 79,  166 => 77,  163 => 76,  160 => 75,  146 => 74,  141 => 72,  138 => 71,  128 => 67,  111 => 66,  105 => 64,  99 => 62,  97 => 61,  92 => 59,  88 => 57,  86 => 40,  83 => 39,  76 => 30,  71 => 25,  66 => 23,  61 => 21,  57 => 19,  55 => 18,  51 => 16,  49 => 15,  45 => 13,  43 => 12,  41 => 11,  143 => 24,  137 => 22,  134 => 69,  131 => 68,  121 => 46,  117 => 45,  108 => 65,  100 => 34,  90 => 29,  84 => 26,  81 => 32,  79 => 20,  73 => 29,  70 => 17,  65 => 50,  63 => 22,  59 => 20,  56 => 15,  53 => 17,  47 => 14,  42 => 9,  37 => 6,  32 => 3,);
    }
}
