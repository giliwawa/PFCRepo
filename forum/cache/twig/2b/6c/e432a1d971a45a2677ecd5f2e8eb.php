<?php

/* overall_footer.html */
class __TwigTemplate_2b6ce432a1d971a45a2677ecd5f2e8eb extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
";
        // line 6
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_FOOTER") == 0)) {
            // line 7
            echo "\t";
            $location = "navbar_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("navbar_footer.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "</div>
";
        }
        // line 10
        echo "
<div id=\"page-footer\" class=\"page-width\">
\t";
        // line 12
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_FOOTER") == 1)) {
            // line 13
            echo "\t\t";
            $location = "navbar_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("navbar_footer.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "\t";
        }
        // line 15
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 17
        // line 18
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t<a href=\"http://www.colorizeit.com/styles/phpbb-31-styles/364.black.html\">Color scheme created with Colorize It</a>. 
\t\t<br />Style by <a href=\"http://www.artodia.com/\">Arty</a>
\t\t";
        // line 21
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 22
        echo "\t\t";
        // line 23
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 24
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 25
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

";
        // line 42
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_FOOTER") == 1)) {
            // line 43
            echo "</div>
";
        }
        // line 45
        echo "
<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 48
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 49
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 51
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 52
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 53
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 54
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 55
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 56
        echo "
";
        // line 57
        // line 58
        echo "
";
        // line 59
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("plupload.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 60
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS");
        echo "

";
        // line 62
        // line 63
        echo "
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 62,  214 => 59,  211 => 58,  162 => 52,  154 => 49,  150 => 48,  124 => 32,  104 => 25,  95 => 24,  89 => 23,  74 => 17,  48 => 10,  44 => 8,  29 => 6,  26 => 5,  160 => 39,  145 => 45,  142 => 34,  118 => 29,  112 => 28,  105 => 26,  96 => 25,  84 => 23,  82 => 21,  54 => 13,  46 => 11,  38 => 9,  30 => 7,  25 => 4,  684 => 203,  679 => 202,  677 => 201,  666 => 194,  662 => 193,  655 => 189,  652 => 188,  642 => 186,  640 => 185,  637 => 184,  636 => 183,  633 => 182,  631 => 181,  625 => 180,  624 => 179,  611 => 178,  609 => 177,  605 => 176,  596 => 175,  594 => 174,  584 => 173,  581 => 172,  579 => 171,  576 => 170,  572 => 168,  570 => 167,  565 => 164,  559 => 162,  557 => 161,  554 => 160,  551 => 159,  543 => 157,  540 => 156,  532 => 154,  530 => 153,  521 => 152,  518 => 151,  515 => 150,  507 => 148,  505 => 147,  494 => 146,  491 => 145,  488 => 144,  485 => 143,  477 => 141,  475 => 140,  464 => 139,  462 => 138,  457 => 137,  454 => 136,  451 => 135,  419 => 132,  416 => 131,  410 => 129,  405 => 127,  403 => 126,  396 => 124,  389 => 119,  376 => 115,  374 => 114,  365 => 113,  355 => 111,  352 => 110,  349 => 109,  345 => 107,  333 => 106,  327 => 103,  313 => 100,  310 => 99,  302 => 94,  295 => 92,  288 => 91,  275 => 86,  271 => 84,  270 => 83,  253 => 80,  249 => 78,  246 => 77,  229 => 72,  223 => 70,  213 => 67,  207 => 56,  196 => 64,  186 => 61,  182 => 59,  178 => 57,  153 => 37,  144 => 46,  141 => 43,  139 => 42,  125 => 30,  120 => 34,  113 => 32,  92 => 27,  87 => 22,  79 => 24,  68 => 21,  66 => 20,  63 => 20,  57 => 17,  47 => 11,  39 => 8,  32 => 5,  23 => 3,  70 => 15,  64 => 33,  61 => 18,  58 => 17,  55 => 30,  52 => 12,  49 => 28,  21 => 2,  449 => 134,  446 => 133,  436 => 116,  432 => 114,  430 => 113,  426 => 112,  421 => 109,  420 => 108,  417 => 107,  413 => 105,  411 => 104,  407 => 128,  395 => 101,  392 => 100,  386 => 118,  384 => 117,  378 => 91,  375 => 90,  370 => 89,  361 => 84,  353 => 83,  347 => 82,  339 => 81,  334 => 79,  331 => 78,  328 => 77,  326 => 76,  320 => 101,  316 => 72,  312 => 71,  294 => 70,  286 => 90,  282 => 62,  280 => 61,  277 => 60,  276 => 59,  264 => 56,  260 => 54,  259 => 53,  254 => 51,  251 => 50,  250 => 79,  242 => 46,  238 => 76,  228 => 60,  225 => 40,  217 => 38,  215 => 37,  210 => 57,  204 => 33,  198 => 31,  194 => 29,  192 => 55,  189 => 27,  185 => 26,  179 => 25,  176 => 56,  170 => 53,  168 => 21,  165 => 42,  147 => 18,  121 => 16,  110 => 15,  99 => 29,  88 => 13,  77 => 12,  75 => 18,  72 => 36,  60 => 9,  35 => 7,  31 => 7,  22 => 2,  261 => 81,  256 => 65,  245 => 59,  234 => 63,  230 => 42,  226 => 71,  220 => 51,  218 => 50,  212 => 46,  209 => 45,  195 => 63,  193 => 43,  183 => 60,  177 => 54,  174 => 34,  167 => 31,  161 => 51,  158 => 51,  155 => 28,  152 => 27,  138 => 33,  134 => 25,  132 => 31,  129 => 23,  126 => 38,  117 => 21,  108 => 27,  106 => 30,  100 => 18,  93 => 17,  83 => 14,  76 => 23,  73 => 12,  67 => 14,  59 => 10,  50 => 12,  36 => 8,  33 => 6,  19 => 1,);
    }
}
