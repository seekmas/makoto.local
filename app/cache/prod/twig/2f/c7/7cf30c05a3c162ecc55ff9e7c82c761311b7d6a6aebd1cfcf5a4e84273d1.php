<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_2fc77cf30c05a3c162ecc55ff9e7c82c761311b7d6a6aebd1cfcf5a4e84273d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 399,  683 => 393,  678 => 390,  676 => 385,  666 => 382,  661 => 380,  656 => 378,  652 => 376,  645 => 369,  641 => 368,  631 => 364,  625 => 361,  615 => 354,  607 => 349,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 317,  548 => 313,  540 => 308,  536 => 306,  529 => 299,  524 => 297,  516 => 294,  510 => 293,  504 => 292,  500 => 291,  495 => 289,  490 => 287,  486 => 286,  482 => 285,  470 => 278,  464 => 275,  459 => 273,  434 => 256,  421 => 244,  417 => 243,  400 => 233,  361 => 207,  339 => 191,  324 => 179,  310 => 171,  302 => 168,  296 => 167,  270 => 157,  259 => 149,  244 => 140,  226 => 131,  150 => 65,  81 => 25,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 173,  301 => 117,  299 => 116,  293 => 113,  289 => 163,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  202 => 77,  174 => 67,  267 => 5,  263 => 4,  242 => 101,  231 => 133,  218 => 97,  207 => 91,  195 => 84,  129 => 57,  20 => 11,  74 => 34,  84 => 39,  153 => 115,  260 => 104,  225 => 87,  186 => 83,  170 => 74,  145 => 64,  137 => 59,  134 => 59,  70 => 37,  288 => 241,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 712,  893 => 704,  882 => 696,  871 => 688,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 640,  795 => 633,  785 => 626,  774 => 618,  762 => 609,  751 => 601,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 561,  672 => 540,  665 => 536,  658 => 532,  649 => 526,  642 => 522,  635 => 365,  617 => 503,  610 => 499,  603 => 495,  594 => 489,  587 => 485,  580 => 481,  563 => 467,  543 => 450,  523 => 433,  503 => 416,  477 => 393,  460 => 379,  452 => 268,  392 => 317,  385 => 225,  377 => 308,  370 => 304,  344 => 193,  212 => 162,  249 => 178,  232 => 104,  216 => 96,  211 => 81,  200 => 88,  198 => 151,  192 => 86,  181 => 80,  58 => 23,  191 => 111,  155 => 90,  113 => 44,  426 => 376,  396 => 349,  373 => 329,  281 => 110,  236 => 201,  52 => 20,  110 => 48,  197 => 119,  165 => 72,  161 => 71,  146 => 58,  139 => 60,  127 => 56,  124 => 31,  23 => 18,  306 => 136,  303 => 135,  295 => 139,  292 => 138,  290 => 135,  287 => 134,  282 => 161,  279 => 127,  215 => 126,  210 => 70,  188 => 84,  184 => 81,  180 => 81,  172 => 131,  160 => 70,  152 => 92,  148 => 64,  126 => 41,  114 => 71,  104 => 67,  97 => 63,  83 => 41,  77 => 58,  53 => 10,  37 => 17,  34 => 16,  228 => 88,  213 => 82,  205 => 90,  194 => 111,  190 => 158,  175 => 77,  120 => 55,  118 => 55,  96 => 37,  65 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 263,  440 => 148,  437 => 147,  435 => 146,  430 => 255,  427 => 143,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 217,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 253,  285 => 111,  283 => 88,  278 => 160,  268 => 107,  264 => 84,  258 => 81,  252 => 3,  247 => 78,  241 => 77,  229 => 73,  220 => 128,  214 => 95,  177 => 65,  169 => 74,  140 => 48,  132 => 58,  128 => 47,  111 => 78,  107 => 52,  61 => 24,  273 => 121,  269 => 6,  254 => 147,  246 => 99,  243 => 98,  240 => 139,  238 => 85,  235 => 197,  230 => 103,  227 => 81,  224 => 166,  221 => 99,  219 => 84,  217 => 124,  208 => 124,  204 => 78,  179 => 107,  159 => 70,  143 => 59,  135 => 81,  131 => 55,  119 => 28,  108 => 48,  102 => 74,  71 => 28,  67 => 27,  63 => 24,  59 => 49,  47 => 17,  201 => 92,  196 => 90,  183 => 78,  171 => 102,  166 => 100,  163 => 62,  158 => 62,  156 => 93,  151 => 61,  142 => 61,  138 => 36,  136 => 46,  123 => 54,  121 => 53,  117 => 51,  115 => 50,  105 => 47,  91 => 34,  69 => 24,  62 => 29,  49 => 21,  38 => 32,  101 => 49,  94 => 69,  89 => 40,  85 => 25,  79 => 37,  75 => 28,  68 => 31,  56 => 40,  50 => 20,  87 => 65,  72 => 25,  66 => 25,  55 => 21,  41 => 18,  28 => 14,  24 => 13,  25 => 12,  31 => 15,  26 => 20,  98 => 44,  93 => 45,  88 => 60,  78 => 36,  46 => 35,  44 => 19,  32 => 16,  27 => 13,  22 => 12,  43 => 19,  40 => 18,  35 => 17,  29 => 15,  21 => 11,  19 => 11,  209 => 92,  203 => 122,  199 => 86,  193 => 83,  189 => 71,  187 => 110,  182 => 80,  176 => 77,  173 => 72,  168 => 70,  164 => 72,  162 => 71,  154 => 67,  149 => 60,  147 => 90,  144 => 62,  141 => 55,  133 => 45,  130 => 57,  125 => 57,  122 => 56,  116 => 42,  112 => 49,  109 => 69,  106 => 49,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 37,  82 => 28,  80 => 33,  73 => 57,  64 => 51,  60 => 22,  57 => 22,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 7,  39 => 17,  36 => 17,  33 => 11,  30 => 15,);
    }
}
