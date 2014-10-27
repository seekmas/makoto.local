<?php

/* knp_menu.html.twig */
class __TwigTemplate_bdde839eb79568c4549a3434011ab648e93ddbc0c6906b93744282ee5f39501d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu_base.html.twig");

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes");
        // line 19
        $this->displayBlock("list", $context, $blocks);
    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : null));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : null);
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : null);
        // line 36
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth")))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "depth") - 1)));
        }
        // line 40
        if (((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth"))) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth") > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : null), "matchingDepth") - 1)));
        }
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : null), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : null);
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : null);
    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayed")) {
            // line 54
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentClass")));
            } elseif ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "matchingDepth")), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "ancestorClass")));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeFirst")) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "firstClass")));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "actsLikeLast")) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "lastClass")));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "depth") === 0)))) {
                // line 69
                echo "        ";
                if (((!twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class"))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "displayChildren"))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "branch_class")));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ((!twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class")))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : null), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "leaf_class")));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes");
            // line 77
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : null)))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : null), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : null), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">";
            // line 83
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"))) && ((!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : null), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : null), "currentAsLink")))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level"))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : null), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri"), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes"));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "labelAttributes"));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label"), "html", null, true);
        }
    }

    // line 3
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (((!(null === (isset($context["value"]) ? $context["value"] : null))) && (!((isset($context["value"]) ? $context["value"] : null) === false)))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : null), ((((isset($context["value"]) ? $context["value"] : null) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  195 => 84,  129 => 59,  20 => 11,  74 => 34,  84 => 36,  153 => 115,  260 => 115,  225 => 100,  186 => 81,  170 => 71,  145 => 64,  137 => 52,  134 => 51,  70 => 37,  288 => 241,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 712,  893 => 704,  882 => 696,  871 => 688,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 640,  795 => 633,  785 => 626,  774 => 618,  762 => 609,  751 => 601,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 561,  672 => 540,  665 => 536,  658 => 532,  649 => 526,  642 => 522,  635 => 518,  617 => 503,  610 => 499,  603 => 495,  594 => 489,  587 => 485,  580 => 481,  563 => 467,  543 => 450,  523 => 433,  503 => 416,  477 => 393,  460 => 379,  452 => 374,  392 => 317,  385 => 313,  377 => 308,  370 => 304,  344 => 281,  212 => 162,  249 => 178,  232 => 104,  216 => 96,  211 => 94,  200 => 88,  198 => 151,  192 => 150,  181 => 77,  58 => 22,  191 => 111,  155 => 90,  113 => 78,  426 => 376,  396 => 349,  373 => 329,  281 => 243,  236 => 201,  52 => 19,  110 => 50,  197 => 87,  165 => 69,  161 => 70,  146 => 58,  139 => 54,  127 => 50,  124 => 49,  23 => 27,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  282 => 125,  279 => 127,  215 => 163,  210 => 70,  188 => 148,  184 => 81,  180 => 81,  172 => 131,  160 => 53,  152 => 120,  148 => 65,  126 => 41,  114 => 38,  104 => 34,  97 => 47,  83 => 41,  77 => 31,  53 => 23,  37 => 18,  34 => 15,  228 => 127,  213 => 154,  205 => 90,  194 => 111,  190 => 158,  175 => 77,  120 => 55,  118 => 55,  96 => 67,  65 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 255,  298 => 91,  294 => 253,  285 => 129,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 157,  214 => 95,  177 => 65,  169 => 60,  140 => 48,  132 => 59,  128 => 47,  111 => 44,  107 => 52,  61 => 24,  273 => 121,  269 => 6,  254 => 111,  246 => 108,  243 => 88,  240 => 106,  238 => 85,  235 => 197,  230 => 103,  227 => 81,  224 => 166,  221 => 99,  219 => 73,  217 => 124,  208 => 173,  204 => 90,  179 => 76,  159 => 66,  143 => 56,  135 => 53,  131 => 69,  119 => 42,  108 => 82,  102 => 44,  71 => 36,  67 => 25,  63 => 33,  59 => 23,  47 => 17,  201 => 92,  196 => 90,  183 => 78,  171 => 100,  166 => 131,  163 => 62,  158 => 126,  156 => 64,  151 => 61,  142 => 59,  138 => 109,  136 => 46,  123 => 47,  121 => 89,  117 => 57,  115 => 83,  105 => 51,  91 => 41,  69 => 26,  62 => 27,  49 => 23,  38 => 12,  101 => 49,  94 => 43,  89 => 40,  85 => 25,  79 => 37,  75 => 30,  68 => 30,  56 => 22,  50 => 18,  87 => 42,  72 => 33,  66 => 29,  55 => 24,  41 => 18,  28 => 44,  24 => 3,  25 => 12,  31 => 14,  26 => 13,  98 => 24,  93 => 45,  88 => 33,  78 => 31,  46 => 17,  44 => 18,  32 => 12,  27 => 13,  22 => 2,  43 => 6,  40 => 13,  35 => 11,  29 => 14,  21 => 11,  19 => 11,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 82,  187 => 110,  182 => 66,  176 => 73,  173 => 72,  168 => 70,  164 => 54,  162 => 68,  154 => 63,  149 => 60,  147 => 118,  144 => 49,  141 => 55,  133 => 45,  130 => 48,  125 => 57,  122 => 56,  116 => 41,  112 => 43,  109 => 53,  106 => 49,  103 => 50,  99 => 48,  95 => 72,  92 => 42,  86 => 37,  82 => 34,  80 => 33,  73 => 14,  64 => 25,  60 => 26,  57 => 25,  54 => 30,  51 => 22,  48 => 21,  45 => 20,  42 => 18,  39 => 17,  36 => 16,  33 => 11,  30 => 10,);
    }
}
