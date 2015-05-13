<?php

/* navbar_header.html */
class __TwigTemplate_2ecd01d50706cec8012a1787da4c4a68 extends Twig_Template
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
        echo "<div class=\"navbar tabbed not-static\" role=\"navigation\">
\t<div class=\"inner page-width\">
\t\t<div class=\"nav-tabs\" data-current-page=\"";
        // line 3
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAV_SECTION")) {
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAV_SECTION");
        } else {
            echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        }
        echo "\">
\t\t\t<ul class=\"leftside\">
\t\t\t\t";
        // line 5
        // line 6
        echo "\t\t\t\t";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 7
            echo "\t\t\t\t\t<li class=\"tab home\" data-responsive-class=\"small-icon icon-home\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 8
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t<li id=\"quick-links\" class=\"tab responsive-menu dropdown-container\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-trigger\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t";
        // line 16
        // line 17
        echo "
\t\t\t\t\t\t\t";
        // line 18
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 19
            echo "\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t";
            // line 20
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                echo " 
\t\t\t\t\t\t\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                // line 27
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 30
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 32
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 34
        echo "
\t\t\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t\t\t";
        // line 37
        // line 38
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"tab forums selected\" data-responsive-class=\"small-icon icon-forums\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 42
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUMS");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 44
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 45
            echo "\t\t\t\t\t<li class=\"tab members dropdown-container\" data-select-match=\"member\" data-responsive-class=\"small-icon icon-members\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-trigger\" href=\"";
            // line 46
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 50
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 52
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t";
        // line 57
        echo "\t\t\t</ul>
\t\t\t<ul class=\"rightside\">
\t\t\t\t";
        // line 59
        // line 60
        echo "\t\t\t\t<li class=\"tab faq\" data-select-match=\"faq\" data-responsive-class=\"small-icon icon-faq\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 61
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 63
        // line 64
        echo "\t\t\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<li class=\"tab acp\" data-last-responsive=\"true\" data-responsive-class=\"small-icon icon-acp\"><a class=\"nav-link\" href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 65
        echo "\t\t\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 66
            echo "\t\t\t\t\t<li class=\"tab mcp\" data-last-responsive=\"true\" data-select-match=\"mcp\" data-responsive-class=\"small-icon icon-mcp\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 67
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 71
            echo "\t\t\t\t\t<li id=\"username_logged_in\" class=\"tab account dropdown-container\" data-skip-responsive=\"true\" data-select-match=\"ucp\">
\t\t\t\t\t\t<a href=\"";
            // line 72
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" class=\"nav-link dropdown-trigger\">";
            echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
            echo "</a>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t\t\t";
            // line 76
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 77
            echo "\t\t\t
\t\t\t\t\t\t\t\t";
            // line 78
            // line 79
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 80
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 81
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t
\t\t\t\t\t\t\t\t";
            // line 83
            // line 84
            echo "\t\t\t
\t\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 86
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 90
            if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
                // line 91
                echo "\t\t\t\t\t\t<li class=\"tab pm";
                if (((isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"pm\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 92
                echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo "</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 94
                echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 99
            echo "\t\t\t\t\t";
            if ((isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null)) {
                // line 100
                echo "\t\t\t\t\t\t<li class=\"tab notifications dropdown-container";
                if (((isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null) > 0)) {
                    echo " non-zero";
                }
                echo "\" data-skip-responsive=\"true\" data-select-match=\"notifications\">
\t\t\t\t\t\t\t<a href=\"";
                // line 101
                echo (isset($context["U_VIEW_ALL_NOTIFICATIONS"]) ? $context["U_VIEW_ALL_NOTIFICATIONS"] : null);
                echo "\" id=\"notification_list_button\" class=\"nav-link dropdown-trigger\">";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t<span class=\"counter\">";
                // line 103
                echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t<span class=\"arrow\"></span>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t";
                // line 106
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("notification_dropdown.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 107
                echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 111
            echo "\t\t\t\t\t<li class=\"tab logout\"  data-skip-responsive=\"true\"><a class=\"nav-link\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t\t<li class=\"tab login\"  data-skip-responsive=\"true\" data-select-match=\"login\"><a class=\"nav-link\" href=\"";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 114
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 115
                echo "\t\t\t\t\t\t<li class=\"tab register\" data-skip-responsive=\"true\" data-select-match=\"register\"><a class=\"nav-link\" href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 117
            echo "\t\t\t\t\t";
            // line 118
            echo "\t\t\t\t";
        }
        // line 119
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<div class=\"navbar secondary";
        // line 124
        if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR") == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX"))) {
            echo " with-search";
        }
        echo "\">
\t<ul role=\"menubar\">
\t\t";
        // line 126
        ob_start();
        // line 127
        echo "\t\t";
        // line 128
        echo "\t\t";
        if (trim($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS"))) {
            // line 129
            echo "\t\t\t";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS");
            echo "
\t\t";
        }
        // line 131
        echo "\t\t";
        if (((!trim($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS"))) || ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS_SHOW_DEFAULT") == 1))) {
            // line 132
            echo "\t\t\t";
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
            // line 133
            echo "\t\t";
        }
        // line 134
        echo "\t\t";
        // line 135
        echo "\t\t";
        $context["secondary_links"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 136
        echo "\t\t";
        if (trim((isset($context["secondary_links"]) ? $context["secondary_links"] : null))) {
            // line 137
            echo "\t\t\t";
            echo (isset($context["secondary_links"]) ? $context["secondary_links"] : null);
            echo "
\t\t\t";
            // line 138
            if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NAVLINKS_SHOW_DEFAULT") && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                // line 139
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR") == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX"))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 140
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 141
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 143
                echo "\t\t\t";
            }
            // line 144
            echo "\t\t";
        } else {
            // line 145
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 146
                echo "\t\t\t\t<li class=\"small-icon icon-search";
                if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR") == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX"))) {
                    echo " responsive-hide";
                }
                echo "\"><a href=\"";
                echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</a></li>
\t\t\t\t";
                // line 147
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 148
                    echo "\t\t\t\t\t<li class=\"small-icon icon-new-posts\"><a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\" role=\"menuitem\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 150
                echo "\t\t\t";
            }
            // line 151
            echo "\t\t\t";
            if ((!(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null))) {
                // line 152
                echo "\t\t\t\t<li class=\"small-icon icon-login\"><a href=\"";
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a></li>
\t\t\t\t";
                // line 153
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    // line 154
                    echo "\t\t\t\t\t<li class=\"small-icon icon-register\"><a href=\"";
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a></li>
\t\t\t\t";
                }
                // line 156
                echo "\t\t\t";
            } elseif ((!(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                // line 157
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
                echo "\" class=\"small-icon icon-profile\">";
                echo (isset($context["CURRENT_USERNAME_SIMPLE"]) ? $context["CURRENT_USERNAME_SIMPLE"] : null);
                echo "</a></li>
\t\t\t";
            }
            // line 159
            echo "\t\t";
        }
        // line 160
        echo "
\t\t";
        // line 161
        if ((($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_IN_NAVBAR") == 1) && $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX"))) {
            // line 162
            echo "\t\t\t<li class=\"search-box not-responsive\">";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SEARCH_BOX");
            echo "</li>
\t\t";
        }
        // line 164
        echo "\t</ul>
</div>

";
        // line 167
        ob_start();
        // line 168
        echo "<div class=\"navbar nav-breadcrumbs\">
\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 170
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 171
        echo "\t\t";
        // line 172
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 173
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<span class=\"crumb\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
            echo " data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 174
        echo "\t\t\t";
        // line 175
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
        echo " data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks"));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 177
            echo "\t\t\t\t";
            // line 178
            echo "\t\t\t\t<span class=\"crumb\"><a href=\"";
            echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "U_VIEW_FORUM");
            echo "\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA");
            if ($this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "MICRODATA")) {
                echo " ";
                echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "MICRODATA");
            }
            echo ">";
            echo $this->getAttribute((isset($context["navlinks"]) ? $context["navlinks"] : null), "FORUM_NAME");
            echo "</a></span>
\t\t\t\t";
            // line 179
            // line 180
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t";
        // line 182
        echo "\t\t</li>
\t\t";
        // line 183
        // line 184
        echo "
\t\t";
        // line 185
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) && (!(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null)))) {
            // line 186
            echo "\t\t\t<li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t";
        }
        // line 188
        echo "\t\t<li class=\"rightside dropdown-container icon-only\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger time\" title=\"";
        // line 189
        echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
        echo "\"><i class=\"fa fa-clock-o\"></i></a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t<li>";
        // line 193
        echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
        echo "</li>
\t\t\t\t\t<li>";
        // line 194
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
";
        $value = ('' === $value = ob_get_clean()) ? '' : new \Twig_Markup($value, $this->env->getCharset());
        $context['definition']->set('BREADCRUMBS', $value);
        // line 201
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "WRAP_HEADER") != 0)) {
            // line 202
            echo "\t";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BREADCRUMBS");
            echo "
\t";
            // line 203
            $value = "";
            $context['definition']->set('BREADCRUMBS', $value);
        }
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 203,  679 => 202,  677 => 201,  666 => 194,  662 => 193,  655 => 189,  652 => 188,  642 => 186,  640 => 185,  637 => 184,  636 => 183,  633 => 182,  631 => 181,  625 => 180,  624 => 179,  611 => 178,  609 => 177,  605 => 176,  596 => 175,  594 => 174,  584 => 173,  581 => 172,  579 => 171,  576 => 170,  572 => 168,  570 => 167,  565 => 164,  559 => 162,  557 => 161,  554 => 160,  551 => 159,  543 => 157,  540 => 156,  532 => 154,  530 => 153,  521 => 152,  518 => 151,  515 => 150,  507 => 148,  505 => 147,  494 => 146,  491 => 145,  488 => 144,  485 => 143,  477 => 141,  475 => 140,  464 => 139,  462 => 138,  457 => 137,  454 => 136,  451 => 135,  419 => 132,  416 => 131,  410 => 129,  405 => 127,  403 => 126,  396 => 124,  389 => 119,  376 => 115,  374 => 114,  365 => 113,  355 => 111,  352 => 110,  349 => 109,  345 => 107,  333 => 106,  327 => 103,  313 => 100,  310 => 99,  302 => 94,  295 => 92,  288 => 91,  275 => 86,  271 => 84,  270 => 83,  253 => 80,  249 => 78,  246 => 77,  229 => 72,  223 => 70,  213 => 67,  207 => 65,  196 => 64,  186 => 61,  182 => 59,  178 => 57,  153 => 50,  144 => 46,  141 => 45,  139 => 44,  125 => 37,  120 => 34,  113 => 32,  92 => 27,  87 => 26,  79 => 24,  68 => 21,  66 => 20,  63 => 19,  57 => 16,  47 => 11,  39 => 8,  32 => 5,  23 => 3,  70 => 35,  64 => 33,  61 => 18,  58 => 17,  55 => 30,  52 => 29,  49 => 28,  21 => 2,  449 => 134,  446 => 133,  436 => 116,  432 => 114,  430 => 113,  426 => 112,  421 => 109,  420 => 108,  417 => 107,  413 => 105,  411 => 104,  407 => 128,  395 => 101,  392 => 100,  386 => 118,  384 => 117,  378 => 91,  375 => 90,  370 => 89,  361 => 84,  353 => 83,  347 => 82,  339 => 81,  334 => 79,  331 => 78,  328 => 77,  326 => 76,  320 => 101,  316 => 72,  312 => 71,  294 => 70,  286 => 90,  282 => 62,  280 => 61,  277 => 60,  276 => 59,  264 => 56,  260 => 54,  259 => 53,  254 => 51,  251 => 50,  250 => 79,  242 => 46,  238 => 76,  228 => 41,  225 => 40,  217 => 38,  215 => 37,  210 => 66,  204 => 33,  198 => 31,  194 => 29,  192 => 28,  189 => 27,  185 => 26,  179 => 25,  176 => 56,  170 => 52,  168 => 21,  165 => 20,  147 => 18,  121 => 16,  110 => 15,  99 => 29,  88 => 13,  77 => 12,  75 => 11,  72 => 36,  60 => 9,  35 => 7,  31 => 6,  22 => 2,  261 => 81,  256 => 65,  245 => 59,  234 => 57,  230 => 42,  226 => 71,  220 => 51,  218 => 50,  212 => 46,  209 => 45,  195 => 63,  193 => 43,  183 => 60,  177 => 35,  174 => 34,  167 => 31,  161 => 51,  158 => 29,  155 => 28,  152 => 27,  138 => 26,  134 => 25,  132 => 42,  129 => 23,  126 => 38,  117 => 21,  108 => 20,  106 => 30,  100 => 18,  93 => 17,  83 => 14,  76 => 23,  73 => 12,  67 => 34,  59 => 10,  50 => 12,  36 => 7,  33 => 6,  19 => 1,);
    }
}
