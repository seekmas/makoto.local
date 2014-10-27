<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_6f0bc276962e34937d935ea4da22e0d6c57a92a53b4b0d7d624ee98683437e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.jquery.js")), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/ready.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.standard.js")), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ";
    initTinyMCE();
//]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  27 => 5,  25 => 4,  21 => 2,  19 => 1,  993 => 273,  990 => 272,  987 => 271,  983 => 304,  979 => 302,  973 => 299,  970 => 298,  968 => 297,  962 => 294,  954 => 293,  951 => 292,  949 => 291,  946 => 290,  940 => 288,  938 => 287,  935 => 286,  929 => 284,  927 => 283,  924 => 282,  918 => 280,  916 => 279,  913 => 278,  907 => 276,  905 => 275,  902 => 274,  900 => 271,  897 => 270,  894 => 269,  890 => 263,  885 => 260,  877 => 255,  871 => 251,  869 => 250,  865 => 248,  859 => 246,  857 => 245,  853 => 243,  847 => 240,  844 => 239,  842 => 238,  839 => 237,  836 => 236,  833 => 235,  828 => 264,  825 => 235,  822 => 234,  817 => 305,  815 => 269,  810 => 266,  808 => 234,  805 => 233,  802 => 232,  797 => 224,  794 => 223,  790 => 222,  786 => 220,  780 => 219,  775 => 216,  769 => 215,  757 => 213,  754 => 212,  750 => 211,  743 => 210,  737 => 209,  734 => 208,  731 => 207,  728 => 206,  723 => 205,  721 => 204,  714 => 201,  710 => 200,  706 => 198,  704 => 197,  701 => 196,  698 => 195,  691 => 194,  688 => 193,  685 => 192,  682 => 191,  676 => 190,  673 => 189,  670 => 188,  667 => 186,  660 => 185,  657 => 184,  651 => 183,  648 => 182,  644 => 181,  641 => 180,  638 => 179,  635 => 178,  629 => 177,  625 => 175,  611 => 166,  605 => 164,  602 => 163,  599 => 162,  595 => 226,  592 => 223,  589 => 178,  587 => 177,  584 => 176,  581 => 162,  578 => 161,  572 => 227,  570 => 161,  566 => 159,  563 => 158,  556 => 307,  554 => 232,  550 => 230,  548 => 158,  545 => 157,  542 => 156,  534 => 145,  531 => 144,  523 => 138,  520 => 137,  512 => 131,  509 => 130,  505 => 127,  501 => 125,  495 => 123,  492 => 122,  489 => 121,  475 => 120,  469 => 118,  465 => 116,  459 => 114,  451 => 112,  449 => 111,  446 => 110,  443 => 109,  425 => 108,  422 => 107,  420 => 106,  417 => 105,  414 => 104,  411 => 103,  407 => 152,  403 => 150,  401 => 130,  397 => 128,  395 => 103,  384 => 94,  381 => 93,  378 => 92,  373 => 90,  367 => 88,  364 => 87,  361 => 86,  352 => 85,  350 => 84,  345 => 83,  342 => 82,  337 => 153,  334 => 92,  332 => 82,  329 => 81,  326 => 80,  320 => 79,  315 => 55,  306 => 53,  302 => 52,  295 => 48,  291 => 46,  285 => 45,  277 => 44,  269 => 43,  265 => 41,  262 => 40,  257 => 37,  248 => 35,  244 => 34,  241 => 33,  238 => 32,  232 => 26,  229 => 25,  223 => 23,  215 => 320,  211 => 319,  207 => 318,  203 => 317,  199 => 316,  194 => 314,  190 => 313,  186 => 312,  181 => 311,  179 => 156,  176 => 155,  174 => 80,  170 => 79,  166 => 77,  163 => 76,  160 => 75,  146 => 74,  141 => 72,  138 => 71,  128 => 67,  111 => 66,  105 => 64,  99 => 62,  97 => 61,  92 => 59,  88 => 57,  86 => 40,  83 => 39,  76 => 30,  71 => 25,  66 => 23,  61 => 21,  57 => 19,  55 => 14,  51 => 12,  49 => 15,  45 => 13,  43 => 12,  41 => 11,  143 => 24,  137 => 22,  134 => 69,  131 => 68,  121 => 46,  117 => 45,  108 => 65,  100 => 34,  90 => 29,  84 => 26,  81 => 32,  79 => 20,  73 => 29,  70 => 17,  65 => 50,  63 => 22,  59 => 20,  56 => 15,  53 => 17,  47 => 14,  42 => 9,  37 => 8,  32 => 6,);
    }
}
