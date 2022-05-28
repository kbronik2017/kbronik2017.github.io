<?php

/* overall_footer.html */
class __TwigTemplate_8fdaa6cea29c5ad349e7e83894d603c2 extends Twig_Template
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
<div id=\"page-footer\">
\t";
        // line 7
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
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t";
        // line 12
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 15
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 16
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 18
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
        // line 23
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

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 37
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 38
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 40
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 41
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 42
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 43
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 44
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 45
        echo "
";
        // line 46
        // line 47
        echo "
";
        // line 48
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
        // line 49
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS");
        echo "


<!-- end here -->
</div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
</div>
</div>
<div class=\"marginwrapper\" style=\"padding:90px 0px 0px 34px;\">
<div class=\"block id3D3C73DD11724BF4A239945B95BEB43B\">

<div class=\"marginwrapper\" style=\"padding:10px 0px 30px 0px;\">
<div class=\"block\">
<div class=\"self container\" style=\"width:714px;min-height:320px;\">
<div class=\"block\">
<div class=\"self container horizontalcontainer\" style=\"width:714px;min-height:192px;height:192px;\">
<div class=\"horizontalwrapper block\" style=\"width:642px; \">
<div class=\"self container\" style=\"width:642px;min-height:192px;\">
<div class=\"marginwrapper\" style=\"padding:0px 0px 0px 28px;\">
<div class=\"block\">
<div class=\"self container\" style=\"width:614px;min-height:192px;\">
<div class=\"block\">
<div class=\"self container horizontalcontainer\" style=\"width:614px;min-height:192px;height:192px;\">
<div class=\"horizontalwrapper block\" style=\"width:94px; \">
<div class=\"self container\" style=\"width:94px;min-height:16px;\">
<div class=\"end\"></div></div>
</div>
<div class=\"marginwrapper horizontalwrapper menu\" style=\"padding:168px 2px 0px 4px;width:514px;\">
<div class=\"block\">
<div class=\"self menuself menuhorizontal menuhorizontalfit menuverticaltop\" style=\"width:514px;height:24px;\">
<ul class=\"menu4\">
<li><a class=\"menu4item menu4expandable\" style=\"color:#cccccc;\" href=\"http://ultimateprogrammer.co.uk/index.html\">Home</a></li><li class=\"divider menu4divider\"></li><li><a class=\"menu4item menu4expandable\" href=\"http://ultimateprogrammer.co.uk/about/index.html\">About</a></li><li class=\"divider menu4divider\"></li><li><a class=\"menu4item menu4expandable\" href=\"http://ultimateprogrammer.co.uk/tutorial/index.html\">Tutorial</a></li><li class=\"divider menu4divider\"></li><li><a class=\"menu4item menu4expandable\" href=\"http://ultimateprogrammer.co.uk/research/index.html\">Research</a></li><li class=\"divider menu4divider\"></li><li><a class=\"menu4item menu4expandable\" href=\"http://ultimateprogrammer.co.uk/prices/index.html\">Prices</a></li><li class=\"divider menu4divider\"></li><li><a class=\"menu4item menu4expandable menu4expanded\" href=\"http://ultimateprogrammer.co.uk/forum/index.html\">Forum</a></li><li class=\"divider menu4divider\"></li><li><a class=\"menu4item menu4expandable\" href=\"http://ultimateprogrammer.co.uk/contact/index.html\">Contact</a></li></ul></div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
<div class=\"end\"></div></div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
<div class=\"horizontalwrapper block\" style=\"width:72px; \">
<div class=\"self container\" style=\"width:72px;min-height:16px;\">
<div class=\"end\"></div></div>
</div>
<div class=\"end\"></div></div>
</div>
<div class=\"image marginwrapper\">
<div class=\"block\">
<div class=\"imageself self mobile-leaf\" style=\"width:714px;height:61px;\">
<img width=\"550\" height=\"55\" class=\"mobile-fit\" src=\"http://ultimateprogrammer.co.uk/onewebstatic/de949cdcee-de949cdcee-comp.png\" style=\"display:block;margin-top:3px;margin-left:82px;\" title=\"\" alt=\"\" /></div>
</div>
</div><div class=\"anchor block idAF2EA7DFB29D4195BFD57294FD612A79\">
<!--[if !IE]> --><div class=\"anchorwrapper\"><!-- <![endif]-->
<!--[if IE]><div class=\"float \" style=\"width:245px;right:210px;top:3px; \">
<![endif]--><!--[if !IE]> --><div class=\"float \" style=\"width:245px;right:210px;top:-18px; \">
<!-- <![endif]--><div class=\"code self mobile-leaf\" style=\"width:245px;height:64px;\">
 <script>
 document.write(Date());
 </script>
</div>
</div>
<!--[if IE]><div class=\"float \" style=\"width:168px;left:543px;top:3px; \">
<![endif]--><!--[if !IE]> --><div class=\"float \" style=\"width:168px;left:543px;top:-18px; \">
<!-- <![endif]--><div class=\"code self mobile-leaf\" style=\"width:168px;height:68px;\">
<!-- Lockerz Share BEGIN -->
<a class=\"a2a_dd\" href=\"http://www.addtoany.com/share_save\"><img src=\"http://static.addtoany.com/buttons/share_save_171_16.png\" width=\"171\" height=\"16\" border=\"0\" alt=\"Share\"/></a>
<script type=\"text/javascript\" src=\"http://static.addtoany.com/menu/page.js\"></script>
<a href=\"http://ultimateprogrammer.co.uk/\" target=\"_blank\">
<img src=\"http://005.free-counters.co.uk/count-080.pl?count=webvisitcount&type=neg1digit&prog=hit\" border=\"0\" alt=\"Free Counters\" title=\"Free Counters\"></a>
<noscript>The following text will not be seen after you upload your website,
please keep it in order to retain your counter functionality 
<br><a href=\"http://www.free-counters.co.uk/trackers/\" target=\"_blank\">Trackers</a><br> <a href=\"http://www.free-counters.co.uk/help/counter/\" target=\"_blank\">Counter Help</a><br>
</noscript>
<!-- Lockerz Share END -->
</div>
</div>
<div class=\"self mobile-leaf text textnormal mobile-undersized-upper\" style=\"width:714px;min-height:13px;\"><p><span class=\" mobile-undersized-lower mobile-undersized-upper\" style=\"font-size:11px;text-shadow:none;\">© Copyright 2010. All Rights Reserved.</span></p></div>
<!--[if !IE]> --></div><!-- <![endif]-->
</div>
<div class=\"end\"></div></div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
</div>
<div class=\"end\"></div></div>
</div>
<div class=\"end\"></div></div>
<footer>
</footer>
<div class=\"end\"></div>
<script src=\"http://ultimateprogrammer.co.uk/onewebstatic/b866bb27dc.js\"></script>
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
        return array (  174 => 47,  155 => 44,  121 => 40,  117 => 38,  113 => 37,  78 => 18,  65 => 15,  59 => 14,  47 => 11,  42 => 8,  21 => 2,  376 => 103,  372 => 101,  366 => 99,  363 => 98,  362 => 97,  356 => 93,  354 => 92,  351 => 91,  347 => 89,  344 => 88,  336 => 84,  318 => 81,  312 => 80,  309 => 79,  299 => 78,  295 => 76,  280 => 73,  272 => 71,  270 => 70,  245 => 64,  228 => 58,  214 => 54,  212 => 53,  206 => 51,  204 => 50,  177 => 48,  167 => 46,  150 => 41,  129 => 37,  111 => 36,  98 => 33,  93 => 32,  92 => 31,  89 => 30,  80 => 26,  67 => 19,  51 => 17,  44 => 12,  41 => 11,  37 => 9,  27 => 3,  22 => 2,  160 => 39,  153 => 42,  145 => 40,  138 => 39,  125 => 41,  112 => 28,  108 => 35,  84 => 23,  82 => 27,  68 => 21,  52 => 12,  46 => 10,  38 => 9,  30 => 7,  25 => 4,  416 => 111,  406 => 109,  404 => 108,  401 => 107,  400 => 106,  397 => 105,  395 => 104,  389 => 103,  388 => 102,  375 => 101,  373 => 100,  369 => 99,  360 => 98,  358 => 97,  348 => 90,  345 => 95,  343 => 87,  340 => 86,  335 => 90,  332 => 89,  330 => 88,  322 => 86,  320 => 85,  311 => 84,  308 => 83,  304 => 81,  292 => 80,  284 => 79,  279 => 78,  261 => 72,  246 => 66,  241 => 62,  232 => 61,  220 => 58,  217 => 55,  196 => 52,  193 => 51,  192 => 50,  183 => 48,  180 => 47,  169 => 46,  158 => 45,  157 => 44,  142 => 34,  141 => 42,  135 => 38,  134 => 37,  127 => 34,  110 => 32,  105 => 26,  102 => 34,  95 => 27,  88 => 25,  81 => 24,  69 => 21,  50 => 16,  45 => 14,  43 => 13,  40 => 10,  39 => 11,  26 => 5,  511 => 231,  508 => 230,  498 => 226,  494 => 224,  492 => 223,  487 => 220,  486 => 219,  482 => 217,  470 => 216,  464 => 212,  456 => 207,  448 => 206,  442 => 205,  434 => 204,  429 => 202,  426 => 201,  424 => 200,  418 => 197,  414 => 196,  410 => 195,  394 => 194,  257 => 70,  247 => 65,  243 => 54,  242 => 64,  237 => 60,  234 => 50,  233 => 49,  225 => 46,  213 => 42,  208 => 40,  198 => 49,  191 => 49,  187 => 34,  182 => 33,  178 => 32,  172 => 31,  162 => 44,  156 => 21,  151 => 19,  133 => 42,  118 => 29,  107 => 31,  85 => 28,  74 => 16,  61 => 19,  36 => 8,  32 => 7,  23 => 3,  301 => 74,  298 => 73,  297 => 77,  294 => 71,  289 => 68,  288 => 75,  277 => 66,  276 => 77,  271 => 63,  268 => 62,  266 => 74,  263 => 68,  258 => 71,  256 => 67,  230 => 55,  229 => 54,  224 => 60,  221 => 59,  219 => 56,  216 => 49,  211 => 41,  209 => 52,  200 => 38,  189 => 43,  188 => 42,  185 => 49,  173 => 46,  170 => 45,  168 => 38,  165 => 45,  164 => 36,  161 => 35,  154 => 20,  149 => 30,  143 => 28,  140 => 43,  132 => 38,  130 => 35,  123 => 23,  116 => 22,  101 => 20,  96 => 25,  94 => 23,  91 => 17,  90 => 16,  87 => 29,  75 => 14,  72 => 13,  71 => 20,  63 => 18,  60 => 8,  58 => 18,  57 => 13,  54 => 16,  48 => 15,  34 => 3,  31 => 2,  19 => 1,);
    }
}
