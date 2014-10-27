<?php

/* SonataUserBundle:Block:account.html.twig */
class __TwigTemplate_5f0e6c336a73798048f6e5e54e15f9f6d3386f01e0f6da4906582683e290f16f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
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

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div style=\"display:inline;\">
        ";
        // line 16
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Block:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 220,  601 => 216,  585 => 209,  559 => 201,  551 => 199,  526 => 190,  497 => 156,  493 => 155,  485 => 124,  424 => 91,  406 => 111,  391 => 163,  340 => 136,  333 => 132,  318 => 86,  313 => 84,  307 => 82,  261 => 73,  206 => 57,  12 => 36,  90 => 16,  993 => 273,  990 => 272,  987 => 271,  973 => 299,  970 => 298,  968 => 297,  962 => 294,  951 => 292,  949 => 291,  940 => 288,  938 => 287,  935 => 286,  929 => 284,  927 => 283,  918 => 280,  913 => 278,  907 => 276,  905 => 275,  894 => 269,  890 => 263,  885 => 260,  877 => 255,  865 => 248,  859 => 246,  857 => 245,  853 => 243,  847 => 240,  844 => 239,  842 => 238,  839 => 237,  836 => 236,  828 => 264,  825 => 235,  817 => 305,  810 => 266,  802 => 232,  794 => 223,  790 => 222,  769 => 215,  757 => 213,  743 => 210,  734 => 208,  731 => 207,  721 => 204,  710 => 200,  706 => 198,  698 => 195,  688 => 193,  685 => 192,  682 => 191,  670 => 188,  667 => 186,  660 => 185,  657 => 184,  651 => 183,  644 => 181,  638 => 179,  611 => 166,  605 => 164,  602 => 163,  578 => 161,  545 => 198,  534 => 145,  531 => 144,  520 => 137,  492 => 122,  489 => 121,  475 => 120,  451 => 112,  414 => 104,  395 => 103,  378 => 92,  367 => 88,  364 => 87,  352 => 85,  350 => 84,  345 => 83,  223 => 23,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 304,  981 => 307,  979 => 302,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 293,  946 => 290,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 282,  921 => 284,  916 => 279,  908 => 278,  902 => 274,  900 => 271,  897 => 270,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 250,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 235,  830 => 250,  826 => 247,  824 => 246,  822 => 234,  819 => 244,  815 => 269,  812 => 238,  808 => 234,  806 => 234,  804 => 233,  801 => 232,  797 => 224,  793 => 227,  791 => 226,  789 => 225,  782 => 221,  779 => 216,  754 => 212,  748 => 205,  745 => 203,  739 => 200,  735 => 198,  732 => 197,  728 => 206,  726 => 191,  723 => 205,  717 => 186,  714 => 201,  704 => 197,  701 => 196,  699 => 179,  690 => 174,  687 => 173,  681 => 169,  673 => 189,  671 => 164,  668 => 163,  663 => 160,  654 => 155,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 177,  627 => 140,  620 => 223,  614 => 133,  609 => 129,  599 => 215,  576 => 115,  574 => 205,  570 => 161,  567 => 110,  562 => 108,  556 => 307,  552 => 102,  550 => 230,  544 => 99,  541 => 97,  522 => 92,  519 => 91,  505 => 127,  502 => 87,  472 => 79,  465 => 116,  463 => 117,  446 => 110,  443 => 109,  429 => 66,  412 => 126,  399 => 56,  397 => 128,  394 => 54,  389 => 51,  383 => 49,  357 => 37,  349 => 34,  342 => 82,  334 => 92,  330 => 103,  328 => 22,  326 => 129,  300 => 93,  178 => 48,  157 => 37,  786 => 220,  780 => 219,  777 => 234,  775 => 216,  771 => 231,  768 => 230,  756 => 229,  753 => 228,  750 => 211,  747 => 226,  744 => 225,  742 => 202,  737 => 209,  725 => 220,  722 => 219,  719 => 187,  711 => 213,  708 => 212,  691 => 194,  674 => 209,  669 => 207,  664 => 206,  648 => 182,  646 => 197,  624 => 224,  598 => 191,  595 => 226,  592 => 223,  589 => 178,  586 => 187,  584 => 176,  581 => 162,  572 => 204,  568 => 178,  566 => 203,  561 => 175,  554 => 232,  542 => 156,  539 => 96,  521 => 166,  512 => 131,  509 => 130,  507 => 165,  483 => 156,  481 => 155,  478 => 154,  476 => 147,  467 => 146,  462 => 143,  456 => 140,  450 => 114,  447 => 113,  441 => 136,  428 => 133,  425 => 108,  422 => 107,  419 => 130,  416 => 129,  410 => 113,  404 => 90,  401 => 89,  388 => 117,  382 => 115,  376 => 153,  369 => 148,  363 => 109,  359 => 144,  356 => 105,  353 => 103,  348 => 101,  346 => 33,  335 => 133,  332 => 82,  329 => 130,  291 => 46,  286 => 82,  280 => 87,  255 => 284,  245 => 270,  76 => 80,  321 => 100,  274 => 135,  284 => 76,  275 => 86,  256 => 79,  253 => 78,  250 => 274,  237 => 71,  222 => 66,  185 => 61,  100 => 43,  560 => 187,  558 => 174,  553 => 184,  549 => 182,  537 => 176,  532 => 192,  528 => 173,  525 => 172,  518 => 180,  514 => 167,  511 => 166,  508 => 165,  501 => 163,  491 => 157,  487 => 156,  455 => 115,  449 => 111,  442 => 134,  439 => 71,  436 => 132,  433 => 130,  420 => 106,  415 => 127,  411 => 103,  405 => 118,  403 => 150,  380 => 107,  366 => 110,  354 => 142,  331 => 96,  325 => 94,  320 => 87,  317 => 17,  311 => 118,  308 => 89,  304 => 85,  272 => 134,  233 => 82,  167 => 75,  692 => 175,  683 => 170,  678 => 168,  676 => 190,  666 => 382,  661 => 159,  656 => 378,  652 => 154,  645 => 150,  641 => 180,  631 => 364,  625 => 175,  615 => 354,  607 => 218,  597 => 342,  590 => 338,  583 => 334,  579 => 118,  577 => 206,  575 => 114,  569 => 325,  565 => 109,  555 => 200,  548 => 158,  540 => 308,  536 => 194,  529 => 191,  524 => 297,  516 => 294,  510 => 293,  504 => 164,  500 => 291,  495 => 123,  490 => 154,  486 => 286,  482 => 285,  470 => 121,  464 => 275,  459 => 116,  434 => 256,  421 => 90,  417 => 105,  400 => 116,  361 => 86,  339 => 28,  324 => 179,  310 => 83,  302 => 79,  296 => 167,  270 => 84,  259 => 149,  244 => 34,  226 => 131,  150 => 35,  81 => 31,  358 => 103,  351 => 141,  347 => 140,  343 => 132,  338 => 99,  327 => 102,  323 => 88,  319 => 124,  315 => 98,  301 => 144,  299 => 86,  293 => 109,  289 => 83,  277 => 44,  271 => 108,  265 => 41,  262 => 81,  257 => 37,  251 => 101,  248 => 35,  239 => 64,  202 => 55,  174 => 42,  267 => 74,  263 => 294,  242 => 269,  231 => 69,  218 => 97,  207 => 58,  195 => 54,  129 => 27,  20 => 1,  74 => 27,  84 => 34,  153 => 55,  260 => 293,  225 => 67,  186 => 47,  170 => 79,  145 => 48,  137 => 29,  134 => 182,  70 => 26,  288 => 107,  959 => 752,  948 => 744,  937 => 736,  926 => 728,  915 => 720,  904 => 277,  893 => 704,  882 => 696,  871 => 251,  860 => 680,  849 => 672,  838 => 664,  827 => 656,  816 => 648,  805 => 233,  795 => 228,  785 => 626,  774 => 212,  762 => 609,  751 => 206,  740 => 593,  729 => 585,  718 => 577,  707 => 569,  696 => 178,  672 => 540,  665 => 536,  658 => 158,  649 => 153,  642 => 522,  635 => 226,  617 => 135,  610 => 499,  603 => 192,  594 => 212,  587 => 177,  580 => 207,  563 => 202,  543 => 179,  523 => 189,  503 => 416,  477 => 82,  460 => 143,  452 => 268,  392 => 317,  385 => 159,  377 => 47,  370 => 45,  344 => 193,  212 => 60,  249 => 74,  232 => 26,  216 => 100,  211 => 319,  200 => 54,  198 => 55,  192 => 53,  181 => 311,  58 => 22,  191 => 196,  155 => 68,  113 => 40,  426 => 126,  396 => 349,  373 => 90,  281 => 75,  236 => 109,  52 => 21,  110 => 41,  197 => 72,  165 => 61,  161 => 162,  146 => 34,  139 => 46,  127 => 52,  124 => 43,  23 => 3,  306 => 95,  303 => 94,  295 => 48,  292 => 91,  290 => 90,  287 => 77,  282 => 3,  279 => 104,  215 => 320,  210 => 59,  188 => 48,  184 => 48,  180 => 49,  172 => 46,  160 => 38,  152 => 61,  148 => 49,  126 => 26,  114 => 39,  104 => 18,  97 => 41,  83 => 30,  77 => 28,  53 => 35,  37 => 18,  34 => 17,  228 => 83,  213 => 69,  205 => 90,  194 => 66,  190 => 49,  175 => 47,  120 => 42,  118 => 23,  96 => 18,  65 => 29,  480 => 162,  474 => 122,  469 => 118,  461 => 155,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 70,  435 => 69,  430 => 134,  427 => 65,  423 => 63,  413 => 128,  409 => 132,  407 => 152,  402 => 58,  398 => 88,  393 => 168,  387 => 110,  384 => 94,  381 => 157,  379 => 154,  374 => 112,  368 => 112,  365 => 41,  362 => 39,  360 => 38,  355 => 106,  341 => 131,  337 => 153,  322 => 93,  314 => 16,  312 => 97,  309 => 148,  305 => 115,  298 => 12,  294 => 85,  285 => 45,  283 => 138,  278 => 331,  268 => 300,  264 => 74,  258 => 72,  252 => 68,  247 => 75,  241 => 33,  229 => 25,  220 => 65,  214 => 63,  177 => 43,  169 => 44,  140 => 51,  132 => 44,  128 => 47,  111 => 39,  107 => 35,  61 => 21,  273 => 85,  269 => 43,  254 => 147,  246 => 67,  243 => 66,  240 => 72,  238 => 32,  235 => 63,  230 => 62,  227 => 243,  224 => 61,  221 => 99,  219 => 237,  217 => 56,  208 => 57,  204 => 57,  179 => 86,  159 => 158,  143 => 33,  135 => 35,  131 => 48,  119 => 44,  108 => 21,  102 => 36,  71 => 31,  67 => 30,  63 => 13,  59 => 24,  47 => 21,  201 => 56,  196 => 52,  183 => 46,  171 => 57,  166 => 77,  163 => 58,  158 => 75,  156 => 38,  151 => 49,  142 => 30,  138 => 49,  136 => 45,  123 => 48,  121 => 42,  117 => 40,  115 => 45,  105 => 37,  91 => 27,  69 => 15,  62 => 25,  49 => 22,  38 => 6,  101 => 33,  94 => 30,  89 => 31,  85 => 27,  79 => 28,  75 => 17,  68 => 10,  56 => 18,  50 => 8,  87 => 14,  72 => 16,  66 => 14,  55 => 22,  41 => 18,  28 => 3,  24 => 6,  25 => 3,  31 => 4,  26 => 14,  98 => 34,  93 => 33,  88 => 26,  78 => 35,  46 => 32,  44 => 20,  32 => 16,  27 => 4,  22 => 1,  43 => 19,  40 => 19,  35 => 15,  29 => 15,  21 => 11,  19 => 1,  209 => 58,  203 => 55,  199 => 316,  193 => 51,  189 => 63,  187 => 69,  182 => 87,  176 => 85,  173 => 46,  168 => 41,  164 => 55,  162 => 54,  154 => 36,  149 => 62,  147 => 52,  144 => 60,  141 => 58,  133 => 46,  130 => 49,  125 => 46,  122 => 45,  116 => 41,  112 => 105,  109 => 19,  106 => 86,  103 => 41,  99 => 17,  95 => 34,  92 => 35,  86 => 33,  82 => 21,  80 => 13,  73 => 27,  64 => 24,  60 => 12,  57 => 26,  54 => 22,  51 => 34,  48 => 20,  45 => 85,  42 => 11,  39 => 6,  36 => 8,  33 => 3,  30 => 1,);
    }
}
