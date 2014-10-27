<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_b130366c242d75338ce04dacd5954e0b076d772daf15fd6b2e9fea42ca83e03b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sonata-news-block-recent-post panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"sonata-news-block-recent-post panel-title\"><i
                        class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
        </div>
        <h3></h3>


        <div class=\"panel-group\" id=\"accordion\">
            ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "username"), "html", null, true);
            echo "
                                - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "timestamp")), "html", null, true);
            echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) ? ("in") : (""));
            echo "\">
                        <div class=\"panel-body\">
                            <ul>
                                ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                    <li>
                                        ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "revisionType"), "html", null, true);
                echo "
                                        / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "id"), "html", null, true);
                echo "
                                    </li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                            </ul>
                        </div>
                    </div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  202 => 77,  174 => 67,  267 => 5,  263 => 4,  242 => 101,  231 => 99,  218 => 97,  207 => 91,  195 => 84,  129 => 59,  20 => 11,  74 => 23,  84 => 33,  153 => 115,  260 => 104,  225 => 87,  186 => 81,  170 => 71,  145 => 64,  137 => 52,  134 => 47,  70 => 37,  288 => 241,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 712,  893 => 704,  882 => 696,  871 => 688,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 640,  795 => 633,  785 => 626,  774 => 618,  762 => 609,  751 => 601,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 561,  672 => 540,  665 => 536,  658 => 532,  649 => 526,  642 => 522,  635 => 518,  617 => 503,  610 => 499,  603 => 495,  594 => 489,  587 => 485,  580 => 481,  563 => 467,  543 => 450,  523 => 433,  503 => 416,  477 => 393,  460 => 379,  452 => 374,  392 => 317,  385 => 313,  377 => 308,  370 => 304,  344 => 281,  212 => 162,  249 => 178,  232 => 104,  216 => 96,  211 => 81,  200 => 88,  198 => 151,  192 => 150,  181 => 77,  58 => 22,  191 => 111,  155 => 90,  113 => 44,  426 => 376,  396 => 349,  373 => 329,  281 => 110,  236 => 201,  52 => 19,  110 => 50,  197 => 74,  165 => 64,  161 => 70,  146 => 58,  139 => 54,  127 => 54,  124 => 49,  23 => 27,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  282 => 125,  279 => 127,  215 => 163,  210 => 70,  188 => 148,  184 => 81,  180 => 81,  172 => 131,  160 => 53,  152 => 120,  148 => 60,  126 => 41,  114 => 38,  104 => 34,  97 => 47,  83 => 41,  77 => 29,  53 => 10,  37 => 18,  34 => 4,  228 => 88,  213 => 82,  205 => 90,  194 => 111,  190 => 158,  175 => 77,  120 => 55,  118 => 55,  96 => 37,  65 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 253,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 157,  214 => 95,  177 => 65,  169 => 66,  140 => 48,  132 => 59,  128 => 47,  111 => 44,  107 => 52,  61 => 24,  273 => 121,  269 => 6,  254 => 102,  246 => 99,  243 => 98,  240 => 106,  238 => 85,  235 => 197,  230 => 103,  227 => 81,  224 => 166,  221 => 99,  219 => 84,  217 => 124,  208 => 173,  204 => 78,  179 => 76,  159 => 66,  143 => 59,  135 => 53,  131 => 55,  119 => 42,  108 => 82,  102 => 44,  71 => 28,  67 => 27,  63 => 33,  59 => 23,  47 => 17,  201 => 92,  196 => 90,  183 => 78,  171 => 100,  166 => 131,  163 => 62,  158 => 62,  156 => 64,  151 => 61,  142 => 59,  138 => 57,  136 => 46,  123 => 47,  121 => 89,  117 => 57,  115 => 83,  105 => 39,  91 => 34,  69 => 26,  62 => 24,  49 => 9,  38 => 6,  101 => 49,  94 => 35,  89 => 40,  85 => 25,  79 => 37,  75 => 30,  68 => 30,  56 => 22,  50 => 18,  87 => 42,  72 => 33,  66 => 29,  55 => 24,  41 => 18,  28 => 13,  24 => 3,  25 => 12,  31 => 14,  26 => 14,  98 => 37,  93 => 45,  88 => 33,  78 => 31,  46 => 17,  44 => 18,  32 => 12,  27 => 13,  22 => 2,  43 => 6,  40 => 13,  35 => 11,  29 => 15,  21 => 11,  19 => 1,  209 => 92,  203 => 89,  199 => 86,  193 => 83,  189 => 71,  187 => 110,  182 => 69,  176 => 73,  173 => 72,  168 => 70,  164 => 54,  162 => 68,  154 => 63,  149 => 60,  147 => 118,  144 => 49,  141 => 55,  133 => 45,  130 => 48,  125 => 57,  122 => 56,  116 => 42,  112 => 43,  109 => 53,  106 => 49,  103 => 50,  99 => 38,  95 => 72,  92 => 36,  86 => 37,  82 => 28,  80 => 33,  73 => 14,  64 => 25,  60 => 15,  57 => 25,  54 => 30,  51 => 22,  48 => 21,  45 => 23,  42 => 7,  39 => 17,  36 => 17,  33 => 11,  30 => 10,);
    }
}
