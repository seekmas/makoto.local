<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_5ce41a4faf73a2c22d2db105c44855e2923fbaa3d65db2f977d86233abbc0b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "multiple") == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null)))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if ((!twig_test_empty((isset($context["result"]) ? $context["result"] : null)))) {
                        // line 24
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . (isset($context["delimiter"]) ? $context["delimiter"] : null));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), (isset($context["val"]) ? $context["val"] : null), array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "choices"), (isset($context["val"]) ? $context["val"] : null), array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "choices"), (isset($context["val"]) ? $context["val"] : null), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : null) . (isset($context["val"]) ? $context["val"] : null));
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                $context["value"] = (isset($context["result"]) ? $context["result"] : null);
                // line 39
                echo "
        ";
            } elseif (twig_in_filter((isset($context["value"]) ? $context["value"] : null), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "choices")))) {
                // line 41
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "choices"), (isset($context["value"]) ? $context["value"] : null), array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "choices"), (isset($context["value"]) ? $context["value"] : null), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 220,  601 => 216,  585 => 209,  559 => 201,  551 => 199,  526 => 190,  497 => 156,  493 => 155,  485 => 124,  424 => 91,  406 => 111,  391 => 163,  340 => 136,  333 => 132,  318 => 86,  313 => 84,  307 => 82,  261 => 73,  206 => 57,  12 => 36,  90 => 36,  993 => 273,  990 => 272,  987 => 271,  973 => 299,  970 => 298,  968 => 297,  962 => 294,  951 => 292,  949 => 291,  940 => 288,  938 => 287,  935 => 286,  929 => 284,  927 => 283,  918 => 280,  913 => 278,  907 => 276,  905 => 275,  894 => 269,  890 => 263,  885 => 260,  877 => 255,  865 => 248,  859 => 246,  857 => 245,  853 => 243,  847 => 240,  844 => 239,  842 => 238,  839 => 237,  836 => 236,  828 => 264,  825 => 235,  817 => 305,  810 => 266,  802 => 232,  794 => 223,  790 => 222,  769 => 215,  757 => 213,  743 => 210,  734 => 208,  731 => 207,  721 => 204,  710 => 200,  706 => 198,  698 => 195,  688 => 193,  685 => 192,  682 => 191,  670 => 188,  667 => 186,  660 => 185,  657 => 184,  651 => 183,  644 => 181,  638 => 179,  611 => 166,  605 => 164,  602 => 163,  578 => 161,  545 => 198,  534 => 145,  531 => 144,  520 => 137,  492 => 122,  489 => 121,  475 => 120,  451 => 112,  414 => 104,  395 => 103,  378 => 92,  367 => 88,  364 => 87,  352 => 85,  350 => 84,  345 => 83,  223 => 23,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 304,  981 => 307,  979 => 302,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 293,  946 => 290,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 282,  921 => 284,  916 => 279,  908 => 278,  902 => 274,  900 => 271,  897 => 270,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 250,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 235,  830 => 250,  826 => 247,  824 => 246,  822 => 234,  819 => 244,  815 => 269,  812 => 238,  808 => 234,  806 => 234,  804 => 233,  801 => 232,  797 => 224,  793 => 227,  791 => 226,  789 => 225,  782 => 221,  779 => 216,  754 => 212,  748 => 205,  745 => 203,  739 => 200,  735 => 198,  732 => 197,  728 => 206,  726 => 191,  723 => 205,  717 => 186,  714 => 201,  704 => 197,  701 => 196,  699 => 179,  690 => 174,  687 => 173,  681 => 169,  673 => 189,  671 => 164,  668 => 163,  663 => 160,  654 => 155,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 177,  627 => 140,  620 => 223,  614 => 133,  609 => 129,  599 => 215,  576 => 115,  574 => 205,  570 => 161,  567 => 110,  562 => 108,  556 => 307,  552 => 102,  550 => 230,  544 => 99,  541 => 97,  522 => 92,  519 => 91,  505 => 127,  502 => 87,  472 => 79,  465 => 116,  463 => 117,  446 => 110,  443 => 109,  429 => 66,  412 => 126,  399 => 56,  397 => 128,  394 => 54,  389 => 51,  383 => 49,  357 => 37,  349 => 34,  342 => 82,  334 => 92,  330 => 103,  328 => 22,  326 => 129,  300 => 93,  178 => 48,  157 => 56,  786 => 220,  780 => 219,  777 => 234,  775 => 216,  771 => 231,  768 => 230,  756 => 229,  753 => 228,  750 => 211,  747 => 226,  744 => 225,  742 => 202,  737 => 209,  725 => 220,  722 => 219,  719 => 187,  711 => 213,  708 => 212,  691 => 194,  674 => 209,  669 => 207,  664 => 206,  648 => 182,  646 => 197,  624 => 224,  598 => 191,  595 => 226,  592 => 223,  589 => 178,  586 => 187,  584 => 176,  581 => 162,  572 => 204,  568 => 178,  566 => 203,  561 => 175,  554 => 232,  542 => 156,  539 => 96,  521 => 166,  512 => 131,  509 => 130,  507 => 165,  483 => 156,  481 => 155,  478 => 154,  476 => 147,  467 => 146,  462 => 143,  456 => 140,  450 => 114,  447 => 113,  441 => 136,  428 => 133,  425 => 108,  422 => 107,  419 => 130,  416 => 129,  410 => 113,  404 => 90,  401 => 89,  388 => 117,  382 => 115,  376 => 153,  369 => 148,  363 => 109,  359 => 144,  356 => 105,  353 => 103,  348 => 101,  346 => 33,  335 => 133,  332 => 82,  329 => 130,  291 => 46,  286 => 82,  280 => 87,  255 => 284,  245 => 270,  76 => 35,  321 => 100,  274 => 135,  284 => 76,  275 => 86,  256 => 79,  253 => 78,  250 => 274,  237 => 71,  222 => 66,  185 => 86,  100 => 81,  560 => 187,  558 => 174,  553 => 184,  549 => 182,  537 => 176,  532 => 192,  528 => 173,  525 => 172,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 163,  491 => 157,  487 => 156,  455 => 115,  449 => 111,  442 => 134,  439 => 71,  436 => 132,  433 => 130,  420 => 106,  415 => 127,  411 => 103,  405 => 118,  403 => 150,  380 => 107,  366 => 110,  354 => 142,  331 => 96,  325 => 94,  320 => 87,  317 => 17,  311 => 118,  308 => 89,  304 => 85,  272 => 134,  233 => 82,  167 => 57,  692 => 175,  683 => 170,  678 => 168,  676 => 190,  666 => 382,  661 => 159,  656 => 378,  652 => 154,  645 => 150,  641 => 180,  631 => 364,  625 => 175,  615 => 354,  607 => 218,  597 => 342,  590 => 338,  583 => 334,  579 => 118,  577 => 206,  575 => 114,  569 => 325,  565 => 109,  555 => 200,  548 => 158,  540 => 308,  536 => 194,  529 => 191,  524 => 297,  516 => 294,  510 => 293,  504 => 164,  500 => 291,  495 => 123,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 275,  459 => 116,  434 => 256,  421 => 90,  417 => 105,  400 => 116,  361 => 86,  339 => 28,  324 => 179,  310 => 83,  302 => 79,  296 => 167,  270 => 84,  259 => 149,  244 => 34,  226 => 131,  150 => 56,  81 => 33,  358 => 103,  351 => 141,  347 => 140,  343 => 132,  338 => 99,  327 => 102,  323 => 88,  319 => 124,  315 => 98,  301 => 144,  299 => 86,  293 => 109,  289 => 83,  277 => 44,  271 => 108,  265 => 41,  262 => 81,  257 => 37,  251 => 101,  248 => 35,  239 => 64,  202 => 55,  174 => 80,  267 => 74,  263 => 294,  242 => 269,  231 => 69,  218 => 97,  207 => 58,  195 => 54,  129 => 49,  20 => 11,  74 => 29,  84 => 34,  153 => 55,  260 => 293,  225 => 67,  186 => 51,  170 => 79,  145 => 54,  137 => 29,  134 => 182,  70 => 27,  288 => 107,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 277,  893 => 704,  882 => 696,  871 => 251,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 233,  795 => 228,  785 => 626,  774 => 212,  762 => 609,  751 => 206,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 178,  672 => 540,  665 => 536,  658 => 158,  649 => 153,  642 => 522,  635 => 226,  617 => 135,  610 => 499,  603 => 192,  594 => 212,  587 => 177,  580 => 207,  563 => 202,  543 => 179,  523 => 189,  503 => 416,  477 => 82,  460 => 143,  452 => 268,  392 => 317,  385 => 159,  377 => 47,  370 => 45,  344 => 193,  212 => 60,  249 => 74,  232 => 26,  216 => 100,  211 => 319,  200 => 73,  198 => 55,  192 => 53,  181 => 311,  58 => 25,  191 => 196,  155 => 52,  113 => 44,  426 => 126,  396 => 349,  373 => 90,  281 => 75,  236 => 109,  52 => 23,  110 => 172,  197 => 72,  165 => 61,  161 => 162,  146 => 74,  139 => 139,  127 => 52,  124 => 51,  23 => 12,  306 => 95,  303 => 94,  295 => 48,  292 => 91,  290 => 90,  287 => 77,  282 => 3,  279 => 104,  215 => 320,  210 => 59,  188 => 194,  184 => 48,  180 => 49,  172 => 46,  160 => 57,  152 => 61,  148 => 64,  126 => 48,  114 => 44,  104 => 40,  97 => 56,  83 => 39,  77 => 33,  53 => 27,  37 => 18,  34 => 17,  228 => 83,  213 => 69,  205 => 90,  194 => 52,  190 => 49,  175 => 47,  120 => 46,  118 => 29,  96 => 37,  65 => 29,  480 => 162,  474 => 122,  469 => 118,  461 => 155,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 70,  435 => 69,  430 => 134,  427 => 65,  423 => 63,  413 => 128,  409 => 132,  407 => 152,  402 => 58,  398 => 88,  393 => 168,  387 => 110,  384 => 94,  381 => 157,  379 => 154,  374 => 112,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 106,  341 => 131,  337 => 153,  322 => 93,  314 => 16,  312 => 97,  309 => 148,  305 => 115,  298 => 12,  294 => 85,  285 => 45,  283 => 138,  278 => 331,  268 => 300,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 33,  229 => 25,  220 => 65,  214 => 63,  177 => 65,  169 => 44,  140 => 51,  132 => 42,  128 => 47,  111 => 43,  107 => 38,  61 => 26,  273 => 85,  269 => 43,  254 => 147,  246 => 67,  243 => 66,  240 => 72,  238 => 32,  235 => 63,  230 => 62,  227 => 243,  224 => 61,  221 => 99,  219 => 237,  217 => 64,  208 => 57,  204 => 57,  179 => 156,  159 => 158,  143 => 38,  135 => 35,  131 => 181,  119 => 108,  108 => 42,  102 => 37,  71 => 30,  67 => 32,  63 => 20,  59 => 27,  47 => 19,  201 => 56,  196 => 211,  183 => 50,  171 => 44,  166 => 77,  163 => 58,  158 => 75,  156 => 38,  151 => 152,  142 => 30,  138 => 49,  136 => 138,  123 => 47,  121 => 52,  117 => 45,  115 => 47,  105 => 41,  91 => 37,  69 => 29,  62 => 28,  49 => 20,  38 => 21,  101 => 39,  94 => 41,  89 => 42,  85 => 32,  79 => 31,  75 => 31,  68 => 24,  56 => 28,  50 => 21,  87 => 35,  72 => 30,  66 => 28,  55 => 24,  41 => 20,  28 => 22,  24 => 12,  25 => 12,  31 => 16,  26 => 14,  98 => 36,  93 => 35,  88 => 37,  78 => 32,  46 => 19,  44 => 18,  32 => 19,  27 => 14,  22 => 12,  43 => 18,  40 => 19,  35 => 16,  29 => 15,  21 => 11,  19 => 11,  209 => 58,  203 => 317,  199 => 316,  193 => 50,  189 => 52,  187 => 69,  182 => 85,  176 => 155,  173 => 46,  168 => 43,  164 => 163,  162 => 41,  154 => 153,  149 => 35,  147 => 52,  144 => 26,  141 => 58,  133 => 49,  130 => 33,  125 => 46,  122 => 45,  116 => 48,  112 => 105,  109 => 46,  106 => 86,  103 => 44,  99 => 38,  95 => 35,  92 => 28,  86 => 25,  82 => 34,  80 => 31,  73 => 34,  64 => 27,  60 => 15,  57 => 18,  54 => 16,  51 => 16,  48 => 22,  45 => 21,  42 => 20,  39 => 25,  36 => 20,  33 => 16,  30 => 13,);
    }
}
