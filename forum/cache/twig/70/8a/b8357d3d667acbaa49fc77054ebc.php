<?php

/* navbar_footer.html */
class __TwigTemplate_708ab8357d3d667acbaa49fc77054ebc extends Twig_Template
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
        echo "<div class=\"navbar\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"linklist bulletin\" role=\"menubar\">
\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 6
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 7
        echo "\t\t\t";
        // line 8
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 9
        // line 10
        echo "\t\t</li>
\t\t";
        // line 11
        if (((isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            echo "<li class=\"small-icon icon-";
            if ((isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null)) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_WATCH_FORUM_LINK"]) ? $context["U_WATCH_FORUM_LINK"] : null);
            echo "\" title=\"";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
            if ((!(isset($context["S_WATCHING_FORUM"]) ? $context["S_WATCHING_FORUM"] : null))) {
                echo "unsubscribe";
            } else {
                echo "subscribe";
            }
            echo "\" data-toggle-text=\"";
            echo (isset($context["S_WATCH_FORUM_TOGGLE"]) ? $context["S_WATCH_FORUM_TOGGLE"] : null);
            echo "\" data-toggle-url=\"";
            echo (isset($context["U_WATCH_FORUM_TOGGLE"]) ? $context["U_WATCH_FORUM_TOGGLE"] : null);
            echo "\">";
            echo (isset($context["S_WATCH_FORUM_TITLE"]) ? $context["S_WATCH_FORUM_TITLE"] : null);
            echo "</a></li>";
        }
        // line 12
        echo "
\t\t";
        // line 13
        // line 14
        echo "\t\t<li class=\"rightside\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t";
        // line 15
        // line 16
        echo "\t\t";
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 17
            echo "\t\t\t<li class=\"small-icon icon-delete-cookies rightside\"><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t";
            // line 18
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members rightside\" data-last-responsive=\"true\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        // line 21
        echo "\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li class=\"small-icon icon-team rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 22
        echo "\t\t";
        // line 23
        echo "\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li class=\"small-icon icon-contact rightside\" data-last-responsive=\"true\"><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 24
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  119 => 23,  117 => 22,  93 => 18,  86 => 17,  83 => 16,  43 => 9,  234 => 63,  233 => 62,  211 => 58,  177 => 54,  162 => 52,  158 => 51,  150 => 48,  104 => 25,  89 => 23,  82 => 15,  48 => 10,  29 => 6,  26 => 6,  25 => 4,  408 => 109,  401 => 104,  399 => 103,  393 => 101,  388 => 98,  385 => 97,  381 => 95,  363 => 92,  357 => 91,  354 => 90,  344 => 89,  342 => 88,  340 => 87,  311 => 81,  309 => 80,  305 => 78,  297 => 76,  289 => 74,  287 => 73,  284 => 72,  263 => 67,  258 => 66,  241 => 61,  232 => 59,  227 => 57,  222 => 55,  218 => 53,  216 => 52,  187 => 50,  175 => 46,  160 => 42,  151 => 40,  142 => 39,  136 => 38,  118 => 35,  112 => 34,  108 => 21,  103 => 19,  102 => 31,  97 => 29,  95 => 24,  90 => 26,  81 => 20,  73 => 12,  44 => 10,  41 => 11,  40 => 10,  37 => 9,  30 => 4,  27 => 3,  684 => 203,  679 => 202,  677 => 201,  666 => 194,  662 => 193,  655 => 189,  652 => 188,  642 => 186,  640 => 185,  637 => 184,  636 => 183,  633 => 182,  631 => 181,  625 => 180,  624 => 179,  611 => 178,  609 => 177,  605 => 176,  596 => 175,  594 => 174,  584 => 173,  581 => 172,  579 => 171,  576 => 170,  572 => 168,  570 => 167,  565 => 164,  559 => 162,  557 => 161,  554 => 160,  551 => 159,  543 => 157,  540 => 156,  532 => 154,  530 => 153,  521 => 152,  518 => 151,  515 => 150,  507 => 148,  505 => 147,  494 => 146,  491 => 145,  488 => 144,  485 => 143,  477 => 141,  475 => 140,  464 => 139,  462 => 138,  457 => 137,  454 => 136,  451 => 135,  419 => 132,  416 => 131,  410 => 129,  405 => 127,  403 => 126,  396 => 102,  389 => 99,  376 => 115,  374 => 114,  365 => 113,  355 => 111,  352 => 110,  349 => 109,  345 => 107,  333 => 106,  327 => 84,  313 => 100,  310 => 99,  302 => 94,  295 => 92,  288 => 91,  275 => 86,  271 => 68,  270 => 83,  253 => 64,  249 => 78,  246 => 77,  229 => 72,  226 => 71,  223 => 70,  207 => 56,  196 => 64,  186 => 61,  183 => 49,  182 => 59,  178 => 57,  161 => 51,  153 => 50,  144 => 46,  141 => 43,  139 => 42,  126 => 38,  125 => 37,  120 => 34,  113 => 32,  106 => 20,  92 => 27,  87 => 22,  79 => 24,  76 => 13,  68 => 21,  66 => 20,  63 => 19,  57 => 16,  50 => 12,  47 => 11,  36 => 8,  33 => 6,  32 => 5,  23 => 3,  70 => 15,  67 => 14,  64 => 33,  61 => 18,  58 => 17,  52 => 12,  49 => 28,  449 => 134,  446 => 133,  436 => 116,  432 => 114,  430 => 113,  426 => 112,  421 => 114,  420 => 108,  417 => 112,  413 => 105,  411 => 110,  407 => 108,  395 => 101,  392 => 100,  386 => 118,  384 => 117,  378 => 91,  375 => 90,  370 => 89,  361 => 84,  353 => 83,  347 => 82,  339 => 81,  334 => 86,  331 => 78,  328 => 77,  326 => 76,  320 => 83,  316 => 72,  312 => 71,  294 => 70,  286 => 90,  280 => 61,  277 => 60,  276 => 59,  264 => 56,  259 => 53,  254 => 51,  251 => 50,  238 => 76,  230 => 58,  228 => 60,  225 => 56,  217 => 38,  215 => 37,  210 => 57,  204 => 33,  198 => 31,  194 => 29,  192 => 55,  189 => 27,  185 => 26,  179 => 25,  176 => 47,  170 => 53,  168 => 21,  165 => 20,  147 => 18,  132 => 42,  121 => 36,  110 => 15,  99 => 30,  88 => 13,  77 => 14,  72 => 36,  60 => 9,  35 => 7,  22 => 2,  285 => 72,  282 => 62,  281 => 71,  278 => 69,  273 => 66,  272 => 65,  261 => 81,  260 => 54,  255 => 65,  252 => 60,  250 => 63,  247 => 58,  242 => 46,  240 => 54,  214 => 59,  213 => 67,  208 => 50,  205 => 49,  203 => 48,  200 => 47,  195 => 63,  193 => 43,  184 => 42,  173 => 41,  172 => 45,  169 => 44,  157 => 41,  154 => 49,  152 => 36,  149 => 35,  148 => 34,  145 => 45,  138 => 29,  133 => 37,  127 => 26,  124 => 32,  116 => 23,  114 => 22,  107 => 21,  100 => 20,  85 => 18,  80 => 17,  78 => 16,  75 => 18,  74 => 17,  71 => 13,  59 => 17,  56 => 11,  55 => 30,  54 => 13,  51 => 8,  39 => 8,  34 => 7,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
