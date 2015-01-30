<?php

/* jumpbox.html */
class __TwigTemplate_beb4ae1095838b6b3dd894559852f215 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif ((isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "
\t<div class=\"dropdown-container dropdown-container-";
            // line 14
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            if ((!(isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null))) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t<span title=\"";
            // line 15
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" class=\"dropdown-trigger button dropdown-select\">
\t\t\t";
            // line 16
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            // line 17
            echo "\t\t</span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums"));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 22
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_ID") != (-1))) {
                    // line 23
                    echo "\t\t\t\t\t<li>";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "level"));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_NAME");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

";
        } else {
            // line 31
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 31,  137 => 26,  131 => 25,  114 => 23,  111 => 22,  107 => 21,  101 => 17,  83 => 15,  74 => 14,  71 => 13,  69 => 12,  66 => 11,  22 => 2,  115 => 21,  93 => 16,  82 => 18,  67 => 14,  64 => 13,  44 => 7,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1443 => 396,  1440 => 395,  1434 => 392,  1422 => 391,  1419 => 390,  1417 => 389,  1414 => 388,  1402 => 387,  1401 => 386,  1396 => 383,  1392 => 381,  1386 => 379,  1383 => 378,  1370 => 377,  1368 => 376,  1364 => 375,  1361 => 374,  1359 => 373,  1356 => 372,  1350 => 368,  1335 => 366,  1331 => 365,  1327 => 364,  1318 => 360,  1311 => 359,  1309 => 358,  1306 => 357,  1294 => 356,  1290 => 354,  1289 => 353,  1286 => 352,  1282 => 350,  1276 => 349,  1259 => 348,  1257 => 347,  1254 => 346,  1253 => 345,  1249 => 343,  1248 => 342,  1245 => 341,  1239 => 337,  1234 => 335,  1226 => 334,  1218 => 333,  1216 => 332,  1210 => 330,  1208 => 329,  1205 => 328,  1191 => 326,  1189 => 325,  1186 => 324,  1181 => 322,  1170 => 316,  1164 => 312,  1163 => 311,  1160 => 310,  1151 => 309,  1149 => 308,  1143 => 307,  1140 => 306,  1136 => 304,  1127 => 303,  1123 => 302,  1120 => 301,  1116 => 299,  1107 => 298,  1103 => 297,  1100 => 296,  1097 => 295,  1090 => 294,  1089 => 293,  1086 => 292,  1082 => 290,  1073 => 288,  1069 => 287,  1064 => 285,  1060 => 283,  1058 => 282,  1053 => 280,  1050 => 279,  1042 => 276,  1039 => 275,  1037 => 274,  1034 => 273,  1027 => 269,  1023 => 268,  1019 => 267,  1015 => 266,  1011 => 265,  1005 => 263,  998 => 259,  994 => 258,  990 => 257,  986 => 256,  982 => 255,  976 => 253,  974 => 252,  955 => 250,  952 => 249,  949 => 248,  945 => 246,  943 => 245,  933 => 242,  930 => 241,  927 => 240,  917 => 237,  914 => 236,  911 => 235,  901 => 232,  898 => 231,  895 => 230,  885 => 227,  882 => 226,  879 => 225,  869 => 222,  866 => 221,  863 => 220,  853 => 217,  850 => 216,  847 => 215,  846 => 214,  843 => 213,  840 => 212,  838 => 211,  816 => 209,  806 => 207,  803 => 206,  797 => 203,  793 => 202,  788 => 201,  782 => 198,  778 => 197,  773 => 196,  770 => 195,  768 => 194,  762 => 190,  760 => 189,  753 => 184,  747 => 183,  743 => 181,  741 => 180,  734 => 178,  716 => 177,  712 => 175,  709 => 174,  705 => 173,  702 => 172,  698 => 171,  689 => 167,  683 => 165,  680 => 164,  677 => 163,  676 => 162,  673 => 161,  671 => 160,  665 => 159,  654 => 157,  651 => 156,  646 => 155,  645 => 154,  642 => 153,  634 => 151,  631 => 150,  629 => 149,  626 => 148,  616 => 147,  606 => 146,  589 => 145,  586 => 144,  576 => 143,  572 => 141,  564 => 140,  561 => 139,  559 => 138,  556 => 137,  543 => 136,  540 => 135,  539 => 134,  524 => 132,  516 => 131,  488 => 128,  478 => 126,  475 => 125,  473 => 124,  469 => 123,  466 => 122,  457 => 116,  453 => 115,  446 => 111,  443 => 110,  435 => 107,  431 => 105,  429 => 104,  426 => 103,  420 => 100,  416 => 98,  414 => 97,  405 => 94,  398 => 92,  395 => 91,  389 => 90,  388 => 89,  375 => 87,  352 => 86,  326 => 85,  314 => 84,  296 => 83,  294 => 82,  290 => 81,  276 => 78,  272 => 77,  262 => 71,  260 => 70,  255 => 67,  251 => 65,  245 => 63,  242 => 62,  229 => 61,  227 => 60,  216 => 59,  213 => 58,  211 => 57,  208 => 56,  200 => 51,  192 => 50,  186 => 49,  182 => 48,  177 => 46,  174 => 45,  172 => 44,  169 => 43,  157 => 42,  153 => 40,  152 => 39,  149 => 38,  145 => 36,  139 => 35,  122 => 34,  120 => 33,  117 => 22,  116 => 31,  110 => 27,  104 => 20,  99 => 21,  94 => 20,  86 => 18,  84 => 17,  75 => 14,  73 => 13,  70 => 15,  57 => 9,  54 => 9,  52 => 7,  49 => 6,  43 => 5,  34 => 5,  31 => 7,  19 => 1,);
    }
}
