<?php

/* overall_header.html */
class __TwigTemplate_1d08cab2def70b30ba675d24e232594c extends Twig_Template
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
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\" />
";
        // line 6
        if ((isset($context["META"]) ? $context["META"] : null)) {
            echo (isset($context["META"]) ? $context["META"] : null);
        }
        // line 7
        echo "<title>";
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 9
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 14
        echo (isset($context["CURRENT_PAGE"]) ? $context["CURRENT_PAGE"] : null);
        echo "';
var per_page = '";
        // line 15
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "';
var base_url = '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "js");
        echo "';

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id) || document[id];

\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

// ]]>
</script>

";
        // line 88
        // line 89
        echo "
";
        // line 90
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS");
        echo "

";
        // line 92
        // line 93
        echo "
</head>

<body class=\"";
        // line 96
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo " nojs\">

";
        // line 98
        // line 99
        echo "
<div id=\"wrap\">
\t<div id=\"page-header\">
\t\t<h1>";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL");
        echo "</h1>
\t\t<p><a href=\"";
        // line 103
        echo (isset($context["U_ADM_INDEX"]) ? $context["U_ADM_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADMIN_INDEX");
        echo "</a> &bull; <a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM_INDEX");
        echo "</a></p>
\t\t<p id=\"skip\"><a href=\"#acp\">";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>
\t
\t<div id=\"page-body\">
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 111
            echo "\t\t\t\t<li class=\"tab";
            if ($this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "S_SELECTED")) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "U_TITLE");
            echo "\">";
            echo $this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "L_TITLE");
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t</ul>
\t\t</div>

\t\t<div id=\"acp\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div id=\"menu\">
\t\t\t\t\t\t<p>";
        // line 119
        echo $this->env->getExtension('phpbb')->lang("LOGGED_IN_AS");
        echo "<br /><strong>";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</strong> [&nbsp;<a href=\"";
        echo (isset($context["U_LOGOUT"]) ? $context["U_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGOUT");
        echo "</a>&nbsp;][&nbsp;<a href=\"";
        echo (isset($context["U_ADM_LOGOUT"]) ? $context["U_ADM_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADM_LOGOUT");
        echo "</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t\t\t\t\t";
        // line 120
        $value = 0;
        $context['definition']->set('LI_USED', $value);
        // line 121
        echo "\t\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 122
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute((isset($context["l_block1"]) ? $context["l_block1"] : null), "S_SELECTED")) {
                // line 123
                echo "\t
\t\t\t\t\t\t";
                // line 124
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["l_block1"]) ? $context["l_block1"] : null), "l_block2"));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 125
                    echo "\t\t\t\t\t\t\t";
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["l_block2"]) ? $context["l_block2"] : null), "l_block3"))) {
                        // line 126
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED")) {
                            echo "</ul></div>";
                        }
                        // line 127
                        echo "\t\t\t\t\t\t\t<div class=\"menu-block\">
\t\t\t\t\t\t\t\t<a class=\"header\" href=\"javascript:void(0);\">";
                        // line 128
                        echo $this->getAttribute((isset($context["l_block2"]) ? $context["l_block2"] : null), "L_TITLE");
                        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 130
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 131
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 133
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["l_block2"]) ? $context["l_block2"] : null), "l_block3"));
                    foreach ($context['_seq'] as $context["_key"] => $context["l_block3"]) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t<li";
                        if ($this->getAttribute((isset($context["l_block3"]) ? $context["l_block3"] : null), "S_SELECTED")) {
                            echo " id=\"activemenu\"";
                        }
                        echo "><a href=\"";
                        echo $this->getAttribute((isset($context["l_block3"]) ? $context["l_block3"] : null), "U_TITLE");
                        echo "\"><span>";
                        echo $this->getAttribute((isset($context["l_block3"]) ? $context["l_block3"] : null), "L_TITLE");
                        echo "</span></a></li>
\t\t\t\t\t\t\t\t";
                        // line 135
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 136
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED")) {
            // line 142
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t</div>
\t
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t<div class=\"main\">
";
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
        return array (  319 => 145,  314 => 142,  311 => 141,  305 => 140,  301 => 138,  295 => 137,  289 => 136,  286 => 135,  275 => 134,  271 => 133,  268 => 132,  265 => 131,  262 => 130,  257 => 128,  254 => 127,  249 => 126,  246 => 125,  242 => 124,  239 => 123,  236 => 122,  231 => 121,  228 => 120,  214 => 119,  206 => 113,  191 => 111,  187 => 110,  178 => 104,  168 => 103,  164 => 102,  159 => 99,  158 => 98,  151 => 96,  146 => 93,  145 => 92,  140 => 90,  137 => 89,  136 => 88,  57 => 15,  53 => 14,  35 => 7,  22 => 2,  141 => 46,  138 => 45,  131 => 42,  129 => 41,  126 => 40,  114 => 36,  110 => 35,  104 => 32,  100 => 31,  95 => 28,  91 => 27,  84 => 23,  80 => 22,  74 => 18,  64 => 15,  61 => 16,  51 => 11,  48 => 13,  46 => 9,  41 => 9,  36 => 5,  31 => 6,  19 => 1,);
    }
}
