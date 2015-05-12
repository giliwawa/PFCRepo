<?php

/* _style_config.html */
class __TwigTemplate_491950b63537aadc49f77495ceae2537 extends Twig_Template
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
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "FALSE")) {
            // line 2
            echo "\tVariables below change style behavior.

\tList of variables and values (do not edit!):
\t\tForums list layout:
\t\t\t\$STANDARD_FORUMS_LAYOUT = 0\t-> Layout with topics and posts below forum title
\t\t\t\$STANDARD_FORUMS_LAYOUT = 1\t-> Default layout with separate columns for topics and posts

\t\tHide forum description:
\t\t\t\$HIDE_FORUM_DESCRIPTION = 0 -> Always show it
\t\t\t\$HIDE_FORUM_DESCRIPTION = 1 -> Show it only when hovering forum title

\t\tWrap header / navigation:
\t\t\t\$WRAP_HEADER = 0 -> Header and navigation will not be included in global wrapper
\t\t\t\$WRAP_HEADER = 1 -> Both header and navigation will be included in global wrapper
\t\t\t\$WRAP_HEADER = 2 -> Header will not be included in global wrapper, navigation will be included

\t\tWrap footer:
\t\t\t\$WRAP_FOOTER = 0 -> Footer will be outside of content wrapper
\t\t\t\$WRAP_FOOTER = 1 -> Footer will be inside content wrapper

\t\tQuick search position:
\t\t\t\$SEARCH_IN_NAVBAR = 0 -> Search bar will be displayed in header
\t\t\t\$SEARCH_IN_NAVBAR = 1 -> Search bar will be displayed in secondary navigation

\tEdit variables below:
";
        }
        // line 28
        echo "
";
        // line 29
        $value = 1;
        $context['definition']->set('STANDARD_FORUMS_LAYOUT', $value);
        // line 30
        $value = 0;
        $context['definition']->set('HIDE_FORUM_DESCRIPTION', $value);
        // line 31
        $value = 2;
        $context['definition']->set('WRAP_HEADER', $value);
        // line 32
        $value = 0;
        $context['definition']->set('WRAP_FOOTER', $value);
        // line 33
        $value = 0;
        $context['definition']->set('SEARCH_IN_NAVBAR', $value);
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "FALSE")) {
            // line 36
            echo "\tDo not edit code below!
";
        }
    }

    public function getTemplateName()
    {
        return "_style_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 35,  67 => 34,  64 => 33,  61 => 32,  58 => 31,  52 => 29,  49 => 28,  449 => 121,  446 => 120,  436 => 116,  432 => 114,  430 => 113,  426 => 112,  421 => 109,  420 => 108,  417 => 107,  413 => 105,  411 => 104,  407 => 102,  395 => 101,  392 => 100,  386 => 96,  384 => 95,  378 => 91,  375 => 90,  370 => 89,  361 => 84,  353 => 83,  347 => 82,  339 => 81,  334 => 79,  331 => 78,  328 => 77,  326 => 76,  320 => 73,  316 => 72,  312 => 71,  294 => 70,  286 => 64,  280 => 61,  277 => 60,  276 => 59,  264 => 56,  259 => 53,  254 => 51,  251 => 50,  238 => 44,  230 => 42,  228 => 41,  225 => 40,  217 => 38,  215 => 37,  210 => 35,  204 => 33,  198 => 31,  194 => 29,  192 => 28,  189 => 27,  185 => 26,  179 => 25,  176 => 24,  170 => 22,  168 => 21,  165 => 20,  147 => 18,  132 => 17,  121 => 16,  110 => 15,  99 => 14,  88 => 13,  77 => 12,  72 => 36,  60 => 9,  35 => 7,  22 => 2,  285 => 72,  282 => 62,  281 => 70,  278 => 69,  273 => 66,  272 => 65,  261 => 64,  260 => 54,  255 => 61,  252 => 60,  250 => 49,  247 => 58,  242 => 46,  240 => 54,  214 => 53,  213 => 52,  208 => 50,  205 => 49,  203 => 48,  200 => 47,  195 => 44,  193 => 43,  184 => 42,  173 => 41,  172 => 40,  169 => 39,  157 => 38,  154 => 37,  152 => 36,  149 => 35,  148 => 34,  145 => 33,  138 => 29,  133 => 28,  127 => 26,  124 => 25,  116 => 23,  114 => 22,  107 => 21,  100 => 20,  85 => 18,  80 => 17,  78 => 16,  75 => 11,  74 => 14,  71 => 13,  59 => 12,  56 => 11,  55 => 30,  54 => 9,  51 => 8,  39 => 7,  34 => 5,  31 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
