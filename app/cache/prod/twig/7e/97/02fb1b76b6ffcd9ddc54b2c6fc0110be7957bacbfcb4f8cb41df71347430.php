<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_7e9702fb1b76b6ffcd9ddc54b2c6fc0110be7957bacbfcb4f8cb41df71347430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        ";
            if ((!call_user_func_array($this->env->getFunction('ckeditor_is_loaded')->getCallable(), array()))) {
                // line 6
                echo "            <script type=\"text/javascript\">
                var CKEDITOR_BASEPATH = \"";
                // line 7
                echo call_user_func_array($this->env->getFunction('ckeditor_base_path')->getCallable(), array((isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path"))));
                echo "\";
            </script>

            <script type=\"text/javascript\" src=\"";
                // line 10
                echo call_user_func_array($this->env->getFunction('ckeditor_js_path')->getCallable(), array((isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path"))));
                echo "\"></script>
        ";
            }
            // line 12
            echo "
        <script type=\"text/javascript\">
            ";
            // line 14
            echo call_user_func_array($this->env->getFunction('ckeditor_destroy')->getCallable(), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            echo "

            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 17
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_plugin')->getCallable(), array((isset($context["plugin_name"]) ? $context["plugin_name"] : $this->getContext($context, "plugin_name")), (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : $this->getContext($context, "styles")));
            foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
                // line 21
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_styles_set')->getCallable(), array((isset($context["style_name"]) ? $context["style_name"] : $this->getContext($context, "style_name")), (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
            foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
                // line 25
                echo "                ";
                echo call_user_func_array($this->env->getFunction('ckeditor_template')->getCallable(), array((isset($context["template_name"]) ? $context["template_name"] : $this->getContext($context, "template_name")), (isset($context["template"]) ? $context["template"] : $this->getContext($context, "template"))));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
            ";
            // line 28
            echo call_user_func_array($this->env->getFunction('ckeditor_replace')->getCallable(), array((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config"))));
            echo "
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  78 => 20,  75 => 19,  57 => 14,  82 => 21,  46 => 11,  54 => 12,  50 => 11,  40 => 8,  28 => 3,  20 => 1,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 333,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  975 => 305,  971 => 304,  967 => 303,  963 => 302,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  891 => 271,  888 => 270,  884 => 267,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  830 => 250,  826 => 247,  824 => 246,  822 => 245,  819 => 244,  815 => 239,  812 => 238,  808 => 235,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 173,  683 => 170,  681 => 169,  678 => 168,  673 => 165,  671 => 164,  668 => 163,  663 => 160,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  645 => 150,  643 => 149,  640 => 148,  636 => 145,  633 => 144,  629 => 141,  627 => 140,  617 => 135,  614 => 133,  609 => 129,  592 => 126,  589 => 124,  587 => 123,  584 => 122,  579 => 118,  576 => 115,  575 => 114,  570 => 112,  567 => 110,  565 => 109,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  522 => 92,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  465 => 77,  446 => 75,  443 => 74,  439 => 71,  437 => 70,  435 => 69,  429 => 66,  427 => 65,  425 => 64,  423 => 63,  402 => 58,  399 => 56,  397 => 55,  394 => 54,  389 => 51,  383 => 49,  377 => 47,  373 => 46,  370 => 45,  365 => 41,  362 => 39,  360 => 38,  357 => 37,  349 => 34,  346 => 33,  342 => 30,  339 => 28,  337 => 27,  334 => 26,  330 => 23,  328 => 22,  321 => 18,  317 => 17,  314 => 16,  300 => 13,  298 => 12,  295 => 11,  290 => 7,  285 => 4,  282 => 3,  278 => 331,  275 => 330,  273 => 317,  270 => 316,  268 => 300,  265 => 299,  263 => 294,  260 => 293,  257 => 291,  255 => 284,  250 => 274,  247 => 273,  245 => 270,  242 => 269,  240 => 263,  237 => 262,  232 => 249,  222 => 238,  219 => 237,  209 => 223,  199 => 212,  196 => 211,  194 => 197,  191 => 196,  188 => 194,  181 => 185,  176 => 178,  166 => 167,  164 => 163,  161 => 162,  159 => 158,  154 => 153,  141 => 143,  139 => 139,  124 => 108,  121 => 107,  119 => 95,  116 => 94,  111 => 90,  106 => 86,  104 => 74,  101 => 73,  96 => 53,  94 => 24,  91 => 23,  84 => 33,  79 => 26,  238 => 84,  233 => 82,  227 => 243,  217 => 232,  214 => 231,  200 => 73,  197 => 72,  187 => 69,  184 => 68,  177 => 65,  174 => 64,  171 => 173,  168 => 62,  165 => 61,  162 => 60,  157 => 57,  153 => 55,  151 => 152,  146 => 147,  140 => 52,  136 => 138,  125 => 46,  109 => 50,  89 => 37,  86 => 30,  83 => 37,  71 => 15,  64 => 3,  99 => 54,  66 => 17,  63 => 14,  52 => 17,  35 => 5,  27 => 16,  25 => 12,  37 => 20,  87 => 28,  81 => 32,  76 => 25,  73 => 26,  61 => 2,  56 => 28,  53 => 12,  51 => 25,  48 => 10,  45 => 9,  38 => 20,  32 => 18,  30 => 4,  24 => 12,  21 => 11,  36 => 5,  34 => 4,  31 => 4,  29 => 15,  26 => 2,  22 => 11,  19 => 11,  635 => 226,  624 => 139,  620 => 136,  612 => 220,  607 => 218,  601 => 216,  599 => 128,  594 => 127,  585 => 209,  580 => 207,  577 => 116,  574 => 113,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 199,  545 => 198,  536 => 95,  532 => 192,  529 => 191,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 165,  504 => 164,  501 => 163,  497 => 156,  493 => 155,  490 => 154,  485 => 124,  474 => 80,  470 => 78,  463 => 76,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 91,  421 => 62,  415 => 127,  412 => 60,  410 => 59,  406 => 111,  404 => 90,  401 => 89,  398 => 88,  393 => 168,  391 => 163,  385 => 159,  381 => 48,  379 => 154,  376 => 153,  369 => 148,  359 => 144,  354 => 142,  351 => 141,  347 => 140,  340 => 136,  335 => 133,  333 => 132,  329 => 130,  326 => 21,  323 => 19,  320 => 87,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  287 => 5,  284 => 76,  281 => 75,  264 => 74,  261 => 73,  258 => 72,  252 => 283,  246 => 67,  243 => 66,  239 => 64,  235 => 250,  230 => 244,  224 => 241,  212 => 224,  210 => 59,  207 => 216,  204 => 215,  201 => 213,  198 => 55,  195 => 54,  192 => 53,  189 => 70,  186 => 190,  183 => 189,  180 => 66,  178 => 184,  175 => 47,  173 => 177,  169 => 168,  163 => 40,  160 => 39,  156 => 157,  152 => 36,  149 => 148,  144 => 144,  134 => 133,  131 => 132,  129 => 65,  126 => 121,  120 => 176,  117 => 175,  114 => 91,  110 => 28,  108 => 171,  105 => 170,  103 => 43,  100 => 42,  98 => 25,  95 => 41,  93 => 35,  90 => 27,  85 => 32,  80 => 36,  77 => 27,  74 => 16,  72 => 28,  69 => 11,  67 => 32,  62 => 16,  58 => 20,  55 => 18,  49 => 18,  42 => 7,  39 => 6,);
    }
}
