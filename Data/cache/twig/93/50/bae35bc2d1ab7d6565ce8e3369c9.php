<?php

/* mcp_front.html */
class __TwigTemplate_9350bae35bc2d1ab7d6565ce8e3369c9 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 5
        if ((isset($context["S_SHOW_UNAPPROVED"]) ? $context["S_SHOW_UNAPPROVED"] : null)) {
            // line 6
            echo "
\t<form id=\"mcp_queue\" method=\"post\" action=\"";
            // line 7
            echo (isset($context["S_MCP_QUEUE_ACTION"]) ? $context["S_MCP_QUEUE_ACTION"] : null);
            echo "\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("LATEST_UNAPPROVED");
            echo "</h3>
\t\t<p>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("UNAPPROVED_TOTAL");
            echo "</p>

\t\t";
            // line 15
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "unapproved"))) {
                // line 16
                echo "\t\t\t<ul class=\"topiclist missing-column\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t\t";
                // line 26
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "unapproved"));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 27
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 31
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_POST_DETAILS");
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "SUBJECT");
                    echo "</a> ";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "AUTHOR_FULL");
                    echo " &raquo; ";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "POST_TIME");
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\"><span>
\t\t\t\t\t\t";
                    // line 36
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_TOPIC");
                    echo "\">";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "TOPIC_TITLE");
                    echo "</a> [<a href=\"";
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_MCP_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("MODERATE");
                    echo "</a>]<br />
\t\t\t\t\t\t";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_FORUM")) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_FORUM");
                        echo "\">";
                        echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "FORUM_NAME");
                        echo "</a>";
                    } else {
                        echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "FORUM_NAME");
                    }
                    if ($this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_MCP_FORUM")) {
                        echo " [<a href=\"";
                        echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "U_MCP_FORUM");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("MODERATE");
                        echo "</a>]";
                    }
                    echo "</span>
\t\t\t\t\t</dd>

\t\t\t \t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                    // line 40
                    echo $this->getAttribute((isset($context["unapproved"]) ? $context["unapproved"] : null), "POST_ID");
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t</ul>
\t\t";
            }
            // line 46
            echo "
\t\t</div>
\t";
            // line 48
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</div>

\t";
            // line 51
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "unapproved"))) {
                // line 52
                echo "\t<fieldset class=\"display-actions\">
\t\t";
                // line 53
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" />
\t\t<div><a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', true); return false;\">";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t</fieldset>
\t";
            }
            // line 59
            echo "\t\t</form>
";
        }
        // line 61
        echo "
";
        // line 62
        if ((isset($context["S_SHOW_REPORTS"]) ? $context["S_SHOW_REPORTS"] : null)) {
            // line 63
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED");
            echo "</h3>
\t\t<p>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 69
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "report"))) {
                // line 70
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 74
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 80
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "report"));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 81
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute((isset($context["report"]) ? $context["report"] : null), "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 85
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "U_POST_DETAILS");
                    echo "#reports\" class=\"topictitle\">";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "SUBJECT");
                    echo "</a> ";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 86
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "AUTHOR_FULL");
                    echo " &raquo; ";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "POST_TIME");
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 90
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "REPORTER_FULL");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "REPORT_TIME");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 91
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "U_FORUM");
                    echo "\">";
                    echo $this->getAttribute((isset($context["report"]) ? $context["report"] : null), "FORUM_NAME");
                    echo "</a></span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t</ul>
\t\t";
            }
            // line 98
            echo "
\t\t</div>
\t</div>
";
        }
        // line 102
        echo "
";
        // line 103
        if ((isset($context["S_SHOW_PM_REPORTS"]) ? $context["S_SHOW_PM_REPORTS"] : null)) {
            // line 104
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED_PMS");
            echo "</h3>
\t\t<p>";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("PM_REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 110
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_report"))) {
                // line 111
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 114
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 115
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 121
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_report"));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 122
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 126
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "U_PM_DETAILS");
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "PM_SUBJECT");
                    echo "</a> ";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 127
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "PM_AUTHOR_FULL");
                    echo " &raquo; ";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "PM_TIME");
                    echo "</span><br />
\t\t\t\t\t\t\t<span>";
                    // line 128
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                    echo " ";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "RECIPIENTS");
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "REPORTER_FULL");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    echo $this->getAttribute((isset($context["pm_report"]) ? $context["pm_report"] : null), "REPORT_TIME");
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "\t\t\t</ul>
\t\t";
            }
            // line 139
            echo "
\t\t</div>
\t</div>
";
        }
        // line 143
        echo "
";
        // line 144
        if ((isset($context["S_SHOW_LOGS"]) ? $context["S_SHOW_LOGS"] : null)) {
            // line 145
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("LATEST_LOGS");
            echo "</h3>

\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
            // line 153
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 154
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("IP");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 156
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 157
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 158
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
            // line 162
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "log"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 163
                echo "\t\t<tr class=\"";
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "S_ROW_COUNT") % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td>";
                // line 164
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "ACTION");
                echo "</td>
\t\t\t<td><span>";
                // line 165
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "USERNAME");
                echo "</span></td>
\t\t\t<td><span>";
                // line 166
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "IP");
                echo "</span></td>
\t\t\t<td><span>";
                // line 167
                if ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "U_VIEW_TOPIC")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "U_VIEW_TOPIC");
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 168
                if ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "U_VIEWLOGS")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "U_VIEWLOGS");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 169
                echo $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "TIME");
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 172
                echo "\t\t<tr>
\t\t\t<td colspan=\"6\">";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t</tbody>
\t\t</table>

\t\t</div>
\t</div>
";
        }
        // line 182
        echo "
";
        // line 183
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 183,  556 => 182,  548 => 176,  539 => 173,  536 => 172,  528 => 169,  518 => 168,  506 => 167,  502 => 166,  498 => 165,  494 => 164,  485 => 163,  480 => 162,  473 => 158,  469 => 157,  465 => 156,  461 => 155,  457 => 154,  453 => 153,  445 => 148,  440 => 145,  438 => 144,  435 => 143,  429 => 139,  425 => 137,  406 => 132,  397 => 128,  389 => 127,  381 => 126,  369 => 122,  365 => 121,  356 => 115,  352 => 114,  347 => 111,  345 => 110,  340 => 108,  336 => 107,  331 => 104,  329 => 103,  326 => 102,  320 => 98,  316 => 96,  300 => 91,  288 => 90,  275 => 86,  267 => 85,  255 => 81,  251 => 80,  240 => 74,  236 => 73,  231 => 70,  229 => 69,  224 => 67,  220 => 66,  215 => 63,  213 => 62,  210 => 61,  206 => 59,  198 => 56,  194 => 55,  190 => 54,  186 => 53,  183 => 52,  181 => 51,  175 => 48,  171 => 46,  167 => 44,  157 => 40,  133 => 37,  120 => 36,  107 => 32,  99 => 31,  87 => 27,  83 => 26,  72 => 20,  68 => 19,  63 => 16,  61 => 15,  56 => 13,  52 => 12,  44 => 7,  41 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
