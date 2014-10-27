<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_07e4392b8572ed2573bbfe1dbf5a820af337438f9ec54e8f4d24bc8c4fc7feea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        echo " cms-container";
        if ((!$this->getAttribute((isset($context["block"]) ? $context["block"] : null), "hasParent", array(), "method"))) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class")) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "class"), "html", null, true);
        }
    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        echo "container";
    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "pre");
        }
        // line 23
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : null)) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : null), "post");
        }
    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : null)));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  84 => 32,  153 => 115,  260 => 115,  225 => 100,  186 => 82,  170 => 74,  145 => 64,  137 => 61,  134 => 99,  70 => 37,  288 => 241,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 712,  893 => 704,  882 => 696,  871 => 688,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 640,  795 => 633,  785 => 626,  774 => 618,  762 => 609,  751 => 601,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 561,  672 => 540,  665 => 536,  658 => 532,  649 => 526,  642 => 522,  635 => 518,  617 => 503,  610 => 499,  603 => 495,  594 => 489,  587 => 485,  580 => 481,  563 => 467,  543 => 450,  523 => 433,  503 => 416,  477 => 393,  460 => 379,  452 => 374,  392 => 317,  385 => 313,  377 => 308,  370 => 304,  344 => 281,  212 => 162,  249 => 178,  232 => 104,  216 => 96,  211 => 94,  200 => 88,  198 => 151,  192 => 150,  181 => 146,  58 => 22,  191 => 111,  155 => 90,  113 => 78,  426 => 376,  396 => 349,  373 => 329,  281 => 243,  236 => 201,  52 => 29,  110 => 50,  197 => 87,  165 => 72,  161 => 70,  146 => 63,  139 => 107,  127 => 50,  124 => 49,  23 => 27,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  282 => 125,  279 => 127,  215 => 163,  210 => 70,  188 => 148,  184 => 81,  180 => 81,  172 => 131,  160 => 53,  152 => 120,  148 => 65,  126 => 41,  114 => 38,  104 => 34,  97 => 71,  83 => 41,  77 => 27,  53 => 13,  37 => 16,  34 => 14,  228 => 127,  213 => 154,  205 => 120,  194 => 111,  190 => 158,  175 => 77,  120 => 55,  118 => 55,  96 => 67,  65 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 255,  298 => 91,  294 => 253,  285 => 129,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 211,  247 => 78,  241 => 77,  229 => 73,  220 => 157,  214 => 95,  177 => 65,  169 => 60,  140 => 48,  132 => 59,  128 => 49,  111 => 51,  107 => 50,  61 => 26,  273 => 121,  269 => 119,  254 => 111,  246 => 108,  243 => 88,  240 => 106,  238 => 85,  235 => 197,  230 => 103,  227 => 81,  224 => 166,  221 => 99,  219 => 73,  217 => 124,  208 => 173,  204 => 90,  179 => 78,  159 => 69,  143 => 56,  135 => 53,  131 => 69,  119 => 42,  108 => 82,  102 => 44,  71 => 36,  67 => 29,  63 => 33,  59 => 32,  47 => 24,  201 => 92,  196 => 90,  183 => 142,  171 => 100,  166 => 131,  163 => 62,  158 => 126,  156 => 68,  151 => 63,  142 => 59,  138 => 109,  136 => 46,  123 => 47,  121 => 89,  117 => 44,  115 => 83,  105 => 40,  91 => 28,  69 => 28,  62 => 17,  49 => 23,  38 => 8,  101 => 25,  94 => 39,  89 => 63,  85 => 25,  79 => 40,  75 => 30,  68 => 30,  56 => 23,  50 => 18,  87 => 42,  72 => 29,  66 => 24,  55 => 26,  41 => 6,  28 => 44,  24 => 3,  25 => 5,  31 => 14,  26 => 28,  98 => 24,  93 => 46,  88 => 33,  78 => 31,  46 => 17,  44 => 21,  32 => 12,  27 => 4,  22 => 2,  43 => 6,  40 => 19,  35 => 7,  29 => 15,  21 => 11,  19 => 11,  209 => 121,  203 => 159,  199 => 65,  193 => 84,  189 => 83,  187 => 110,  182 => 66,  176 => 80,  173 => 65,  168 => 73,  164 => 54,  162 => 59,  154 => 68,  149 => 51,  147 => 118,  144 => 49,  141 => 48,  133 => 45,  130 => 101,  125 => 57,  122 => 56,  116 => 41,  112 => 43,  109 => 56,  106 => 49,  103 => 49,  99 => 48,  95 => 72,  92 => 42,  86 => 63,  82 => 22,  80 => 19,  73 => 14,  64 => 14,  60 => 34,  57 => 5,  54 => 30,  51 => 22,  48 => 21,  45 => 8,  42 => 18,  39 => 13,  36 => 12,  33 => 11,  30 => 10,);
    }
}
