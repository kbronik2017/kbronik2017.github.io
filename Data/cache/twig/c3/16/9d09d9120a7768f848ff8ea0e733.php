<?php

/* overall_header.html */
class __TwigTemplate_c3169d09d9120a7768f848ff8ea0e733 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html dir=\"";
        // line 3
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>


";
        // line 7
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
<title>";
        // line 8
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (((!(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) && (!(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

";
        // line 10
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 11
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\" />";
            }
            // line 12
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\" />";
            }
            // line 13
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\" />";
            }
            // line 14
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\" />";
            }
            // line 15
            echo "\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\" />";
            }
            // line 16
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\" />";
            }
            // line 17
            echo "\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\" />";
            }
        }
        // line 19
        echo "
";
        // line 20
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 21
            echo "\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\" />
";
        }
        // line 23
        echo "
<!--
\tphpBB style name: prosilver
\tBased on style:   xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxprosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:
-->

<link href=\"";
        // line 31
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/print.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" title=\"printonly\" />
";
        // line 32
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<link href=\"//fonts.googleapis.com/css?family=Open+Sans:600&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />";
        }
        // line 33
        echo "<link href=\"";
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 34
        echo (isset($context["T_STYLESHEET_LANG_LINK"]) ? $context["T_STYLESHEET_LANG_LINK"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 35
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"only screen and (max-width: 700px), only screen and (max-device-width: 700px)\" />

";
        // line 37
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 38
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
";
        }
        // line 40
        echo "
";
        // line 41
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 42
            echo "\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
";
        }
        // line 44
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 46
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<![endif]-->

";
        // line 49
        // line 50
        echo "
";
        // line 51
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS");
        echo "

";
        // line 53
        // line 54
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 56
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

";
        // line 58
        // line 59
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\" />
<title>Forum</title>
<meta name=\"description\" content=\"\" />
<meta name=\"generator\" content=\"One.com Web Editor\" />
<meta http-equiv=\"Cache-Control\" content=\"must-revalidate, max-age=0, public\" />
<meta http-equiv=\"Expires\" content=\"-1\" />
<link rel=\"stylesheet\" href=\"http://ultimateprogrammer.co.uk/onewebstatic/mydick1.css\" />
<meta name=\"HandheldFriendly\" content=\"True\" />
<meta name=\"MobileOptimized\" content=\"320\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
<link rel=\"stylesheet\" href=\"http://ultimateprogrammer.co.uk/onewebstatic/mydick3.css\" />
</head>
<body class=\"body blockbody\">

<div class=\"mm\"><div id=\"mmt\">Forum</div>
<div id=\"mmb\"></div>
</div>
<div id=\"mm\">
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/index.html\">Home</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/home/pc-matrices.html\">Pc Matrices</a></li>
</ul>
</li>
<li><a href=\"http://ultimateprogrammer.co.uk/about/index.html\">About</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/about/how-to.html\">How-to</a></li>
</ul>
</li>
<li><a href=\"http://ultimateprogrammer.co.uk/tutorial/index.html\">Tutorial</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/tutorial/scientific-programming.html\">Scientific Programming</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/tutorial/game-programming.html\">Game programming</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/tutorial/business-programming.html\">Business Programming</a></li>
</ul>
</li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/index.html\">Research</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/research/identification.html\">Identification</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/literature-review.html\">Literature review</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/purpose.html\">Purpose</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/hypotheses.html\">Hypotheses</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/data.html\">Data</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/analysis.html\">Analysis</a></li>
<li><a href=\"http://ultimateprogrammer.co.uk/research/results.html\">Results</a></li>
</ul>
</li>
<li><a href=\"http://ultimateprogrammer.co.uk/prices/index.html\">Prices</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/prices/payment.html\">Payment</a></li>
</ul>
</li>
<li class=\"expanded\"><a href=\"http://ultimateprogrammer.co.uk/forum/index.html\" class=\"current\">Forum</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/forum/faq.html\">FAQ</a></li>
</ul>
</li>
<li><a href=\"http://ultimateprogrammer.co.uk/contact/index.html\">Contact</a><div></div>
<ul>
<li><a href=\"http://ultimateprogrammer.co.uk/contact/ques.html\">Ques?</a></li>
</ul>
</li>
</ul>
</div>
<div class=\"innerBody self container\" style=\"width:941px;min-height:799px;width:941px;margin:auto;\"><div class=\"block\">
<div class=\"self container horizontalcontainer\" style=\"width:941px;min-height:800px;height:800px;\">
<div class=\"marginwrapper horizontalwrapper\" style=\"padding:0px 0px 0px 0px;width:192px;\">
<div class=\"block id9DA8F7A0BD224796B44A52332E1A61B1\">
<div class=\"self container\" style=\"width:192px;min-height:1048px;\">
<div class=\"block\">
<div class=\"self container\" style=\"width:192px;min-height:559px;\">
<div class=\"image marginwrapper anchor\" style=\"padding:28px 78px 26px 49px;\">
<div class=\"block\">
<!--[if !IE]> --><div class=\"anchorwrapper\"><!-- <![endif]-->
<div class=\"imageself self mobile-leaf\" style=\"width:65px;height:80px;\">
<img width=\"58\" height=\"78\" src=\"http://ultimateprogrammer.co.uk/onewebstatic/de2e1e8cad-8216372d15-Untitled1%20%282%29.png\" style=\"display:block;margin-top:1px;margin-left:3px;\" title=\"\" alt=\"\" /></div>
<!--[if IE]><div class=\"image float block\" style=\"width:100px;left:-21px;bottom:-55px; \">
<![endif]--><!--[if !IE]> --><div class=\"image float block\" style=\"width:100px;left:-21px;bottom:-55px; \">
<!-- <![endif]--><div class=\"imageself self mobile-leaf\" style=\"width:100px;height:54px;\">
<img width=\"100\" height=\"54\" src=\"http://ultimateprogrammer.co.uk/onewebstatic/303bee87bc-pic.png\" style=\"display:block;\" title=\"\" alt=\"\" /></div>
</div><!--[if !IE]> --></div><!-- <![endif]-->
</div>
</div><div class=\"block\">
<div class=\"self container\" style=\"width:192px;min-height:230px;\">
<div class=\"block\">
<div class=\"self container horizontalcontainer\" style=\"width:192px;min-height:66px;height:66px;\">
</div>
</div>
<div class=\"image marginwrapper\">
<div class=\"block\">
<div class=\"imageself self mobile-leaf\" style=\"width:192px;height:170px;\">
<img width=\"129\" height=\"150\" src=\"http://ultimateprogrammer.co.uk/onewebstatic/mydick2.png\" style=\"display:block;margin-left:40px;\" title=\"\" alt=\"\" /></div>
</div>
</div><div class=\"end\"></div></div>
</div>
<div class=\"marginwrapper menu\">
<div class=\"block\">
<div class=\"self menuself menuvertical menuhorizontalfit menuverticaltop\" style=\"width:192px;height:346px;\">
<ul class=\"menu1\">
<li><a class=\"menu1item menu1expandable\" style=\"color:#cccccc;\" href=\"http://ultimateprogrammer.co.uk/index.html\">Home</a></li><li class=\"divider menu1divider\"></li><li><a class=\"menu1item menu1expandable\" href=\"http://ultimateprogrammer.co.uk/about/index.html\">About</a></li><li class=\"divider menu1divider\"></li><li><a class=\"menu1item menu1expandable\" href=\"http://ultimateprogrammer.co.uk/tutorial/index.html\">Tutorial</a></li><li class=\"divider menu1divider\"></li><li><a class=\"menu1item menu1expandable\" href=\"http://ultimateprogrammer.co.uk/research/index.html\">Research</a></li><li class=\"divider menu1divider\"></li><li><a class=\"menu1item menu1expandable\" href=\"http://ultimateprogrammer.co.uk/prices/index.html\">Prices</a></li><li class=\"divider menu1divider\"></li><li><a class=\"menu1item menu1expandable menu1expanded\" href=\"http://ultimateprogrammer.co.uk/forum/index.html\">Forum</a></li><li class=\"divider menu1divider\"></li><ul class=\"menu2\">
<li><a class=\"menu2item\" style=\"color:#dcaf72;\" href=\"http://ultimateprogrammer.co.uk/forum/faq.html\"><div class=\"indent menu1indent1\">FAQ</div></a></li></ul><li class=\"divider menu1divider\"></li><li><a class=\"menu1item menu1expandable\" href=\"http://ultimateprogrammer.co.uk/contact/index.html\">Contact</a></li></ul></div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
<div class=\"end\"></div></div>
</div>
</div>
<div class=\"marginwrapper horizontalwrapper\" style=\"padding:0px 0px 0px 0px;width:749px;\">
<div class=\"block id8A59B202B14A484F9C219F87515C90F8\">
<div class=\"self container\" style=\"width:748px;min-height:793px;\">
<div class=\"marginwrapper menu\" style=\"padding:0px 0px 0px 38px;\">
<div class=\"block\">
<div class=\"self menuself menuhorizontal menuhorizontalfit menuverticaltop\" style=\"width:710px;height:33px;\">
<ul class=\"menu3\">
<li><a class=\"menu3item menu3expandable\" style=\"color:#cccccc;\" href=\"http://ultimateprogrammer.co.uk/index.html\">Home</a></li><li class=\"divider menu3divider\"></li><li><a class=\"menu3item menu3expandable\" href=\"http://ultimateprogrammer.co.uk/about/index.html\">About</a></li><li class=\"divider menu3divider\"></li><li><a class=\"menu3item menu3expandable\" href=\"http://ultimateprogrammer.co.uk/tutorial/index.html\">Tutorial</a></li><li class=\"divider menu3divider\"></li><li><a class=\"menu3item menu3expandable\" href=\"http://ultimateprogrammer.co.uk/research/index.html\">Research</a></li><li class=\"divider menu3divider\"></li><li><a class=\"menu3item menu3expandable\" href=\"http://ultimateprogrammer.co.uk/prices/index.html\">Prices</a></li><li class=\"divider menu3divider\"></li><li><a class=\"menu3item menu3expandable menu3expanded\" href=\"http://ultimateprogrammer.co.uk/forum/index.html\">Forum</a></li><li class=\"divider menu3divider\"></li><li><a class=\"menu3item menu3expandable\" href=\"http://ultimateprogrammer.co.uk/contact/index.html\">Contact</a></li></ul></div>
</div>
</div>
<div class=\"holder  \">
<div class=\"self\" style=\"width:100%;min-height:0px;\">
<div class=\" filler block\">
<div class=\"self container\" style=\"width:100%;height:100%;\">
<div class=\"marginwrapper\" style=\"padding:73px 0px 0px 16px;\">
<div>
<div class=\"code self mobile-leaf\" style=\"width:732px;min-height:578px;\">
<!-- begin here -->

<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-header\">
\t\t<div class=\"headerbar\">
\t\t\t<div class=\"inner\">

\t\t\t<div id=\"site-description\">
\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 194
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\">";
        echo (isset($context["SITE_LOGO_IMG"]) ? $context["SITE_LOGO_IMG"] : null);
        echo "</a>
\t\t\t\t<h1>";
        // line 195
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</h1>
\t\t\t\t<p>";
        // line 196
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 197
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t</div>

\t\t\t";
        // line 200
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) && (!(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null)))) {
            // line 201
            echo "\t\t\t<div id=\"search-box\" class=\"search-box search-header\">
\t\t\t\t<form action=\"";
            // line 202
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" method=\"get\" id=\"search\">
\t\t\t\t<fieldset>
\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" maxlength=\"128\" title=\"";
            // line 204
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" class=\"inputbox search tiny\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_MINI");
            echo "\" />
\t\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
            // line 205
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t<a href=\"";
            // line 206
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"button icon-button search-adv-icon\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "</a>
\t\t\t\t\t";
            // line 207
            echo (isset($context["S_SEARCH_HIDDEN_FIELDS"]) ? $context["S_SEARCH_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
        }
        // line 212
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 216
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("navbar_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 217
        echo "\t</div>

\t";
        // line 219
        // line 220
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\">
\t\t";
        // line 223
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 224
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 226
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 230
        echo "
\t\t";
        // line 231
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 231,  508 => 230,  498 => 226,  494 => 224,  492 => 223,  487 => 220,  486 => 219,  482 => 217,  470 => 216,  464 => 212,  456 => 207,  448 => 206,  442 => 205,  434 => 204,  429 => 202,  426 => 201,  424 => 200,  418 => 197,  414 => 196,  410 => 195,  394 => 194,  257 => 59,  256 => 58,  247 => 56,  242 => 53,  237 => 51,  234 => 50,  233 => 49,  225 => 46,  221 => 44,  213 => 42,  211 => 41,  208 => 40,  200 => 38,  198 => 37,  187 => 34,  182 => 33,  178 => 32,  162 => 23,  154 => 20,  151 => 19,  133 => 17,  118 => 16,  107 => 15,  96 => 14,  85 => 13,  63 => 11,  61 => 10,  36 => 8,  32 => 7,  23 => 3,  259 => 68,  254 => 65,  243 => 54,  232 => 57,  228 => 56,  224 => 55,  218 => 51,  216 => 50,  210 => 46,  207 => 45,  193 => 44,  191 => 35,  181 => 38,  175 => 35,  172 => 31,  165 => 31,  159 => 30,  156 => 21,  153 => 28,  150 => 27,  136 => 26,  132 => 25,  130 => 24,  127 => 23,  124 => 22,  115 => 21,  106 => 20,  104 => 19,  98 => 18,  91 => 17,  81 => 14,  74 => 12,  71 => 12,  65 => 11,  57 => 10,  48 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
