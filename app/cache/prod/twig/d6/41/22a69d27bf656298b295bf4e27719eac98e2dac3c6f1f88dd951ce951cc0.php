<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_d64122a69d27bf656298b295bf4e27719eac98e2dac3c6f1f88dd951ce951cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 40
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "current")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : null), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes")), (isset($context["attributes"]) ? $context["attributes"] : null))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  20 => 11,  74 => 34,  84 => 40,  153 => 115,  260 => 115,  225 => 100,  186 => 82,  170 => 74,  145 => 64,  137 => 61,  134 => 99,  70 => 37,  288 => 241,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 712,  893 => 704,  882 => 696,  871 => 688,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 640,  795 => 633,  785 => 626,  774 => 618,  762 => 609,  751 => 601,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 561,  672 => 540,  665 => 536,  658 => 532,  649 => 526,  642 => 522,  635 => 518,  617 => 503,  610 => 499,  603 => 495,  594 => 489,  587 => 485,  580 => 481,  563 => 467,  543 => 450,  523 => 433,  503 => 416,  477 => 393,  460 => 379,  452 => 374,  392 => 317,  385 => 313,  377 => 308,  370 => 304,  344 => 281,  212 => 162,  249 => 178,  232 => 104,  216 => 96,  211 => 94,  200 => 88,  198 => 151,  192 => 150,  181 => 146,  58 => 22,  191 => 111,  155 => 90,  113 => 78,  426 => 376,  396 => 349,  373 => 329,  281 => 243,  236 => 201,  52 => 23,  110 => 50,  197 => 87,  165 => 72,  161 => 70,  146 => 63,  139 => 107,  127 => 50,  124 => 49,  23 => 27,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  282 => 125,  279 => 127,  215 => 163,  210 => 70,  188 => 148,  184 => 81,  180 => 81,  172 => 131,  160 => 53,  152 => 120,  148 => 65,  126 => 41,  114 => 38,  104 => 34,  97 => 47,  83 => 41,  77 => 36,  53 => 23,  37 => 18,  34 => 15,  228 => 127,  213 => 154,  205 => 120,  194 => 111,  190 => 158,  175 => 77,  120 => 55,  118 => 55,  96 => 67,  65 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 255,  298 => 91,  294 => 253,  285 => 129,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 211,  247 => 78,  241 => 77,  229 => 73,  220 => 157,  214 => 95,  177 => 65,  169 => 60,  140 => 48,  132 => 59,  128 => 49,  111 => 51,  107 => 52,  61 => 26,  273 => 121,  269 => 119,  254 => 111,  246 => 108,  243 => 88,  240 => 106,  238 => 85,  235 => 197,  230 => 103,  227 => 81,  224 => 166,  221 => 99,  219 => 73,  217 => 124,  208 => 173,  204 => 90,  179 => 78,  159 => 69,  143 => 56,  135 => 53,  131 => 69,  119 => 42,  108 => 82,  102 => 44,  71 => 36,  67 => 25,  63 => 33,  59 => 32,  47 => 24,  201 => 92,  196 => 90,  183 => 142,  171 => 100,  166 => 131,  163 => 62,  158 => 126,  156 => 68,  151 => 63,  142 => 59,  138 => 109,  136 => 46,  123 => 47,  121 => 89,  117 => 57,  115 => 83,  105 => 51,  91 => 44,  69 => 31,  62 => 27,  49 => 23,  38 => 8,  101 => 49,  94 => 39,  89 => 43,  85 => 25,  79 => 37,  75 => 30,  68 => 30,  56 => 23,  50 => 22,  87 => 42,  72 => 33,  66 => 29,  55 => 24,  41 => 18,  28 => 44,  24 => 3,  25 => 12,  31 => 14,  26 => 13,  98 => 24,  93 => 45,  88 => 33,  78 => 31,  46 => 17,  44 => 18,  32 => 12,  27 => 13,  22 => 2,  43 => 6,  40 => 19,  35 => 7,  29 => 14,  21 => 11,  19 => 11,  209 => 121,  203 => 159,  199 => 65,  193 => 84,  189 => 83,  187 => 110,  182 => 66,  176 => 80,  173 => 65,  168 => 73,  164 => 54,  162 => 59,  154 => 68,  149 => 51,  147 => 118,  144 => 49,  141 => 48,  133 => 45,  130 => 101,  125 => 57,  122 => 56,  116 => 41,  112 => 43,  109 => 53,  106 => 49,  103 => 50,  99 => 48,  95 => 72,  92 => 42,  86 => 41,  82 => 39,  80 => 19,  73 => 14,  64 => 28,  60 => 26,  57 => 25,  54 => 30,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 11,  30 => 10,);
    }
}
