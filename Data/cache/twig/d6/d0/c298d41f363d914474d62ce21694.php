<?php

/* posting_editor.html */
class __TwigTemplate_d6d0c298d41f363d914474d62ce21694 extends Twig_Template
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
        echo "<fieldset class=\"fields1\">
";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon"));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_ID");
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_ID");
                echo "\" value=\"";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_ID");
                echo "\" ";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "S_ICON_CHECKED");
                echo " tabindex=\"1\" /><img src=\"";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_IMG");
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_WIDTH");
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["topic_icon"]) ? $context["topic_icon"] : null), "ICON_HEIGHT");
                echo "\" alt=\"\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (((!(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 17
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        // line 22
        echo "
\t";
        // line 23
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            // line 26
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
            // line 28
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 29
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 30
                echo "\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $template = $this->env->resolveTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""));
                $template->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 31
                echo "\t";
            }
            // line 32
            echo "\t";
        }
        // line 33
        echo "
\t";
        // line 34
        // line 35
        echo "
\t";
        // line 36
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("posting_buttons.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        echo "
\t<div id=\"smiley-box\">
\t\t";
        // line 39
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley")))) {
            // line 40
            echo "\t\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley"));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 42
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute((isset($context["smiley"]) ? $context["smiley"] : null), "A_SMILEY_CODE");
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute((isset($context["smiley"]) ? $context["smiley"] : null), "SMILEY_IMG");
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["smiley"]) ? $context["smiley"] : null), "SMILEY_WIDTH");
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["smiley"]) ? $context["smiley"] : null), "SMILEY_HEIGHT");
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["smiley"]) ? $context["smiley"] : null), "SMILEY_CODE");
                echo "\" title=\"";
                echo $this->getAttribute((isset($context["smiley"]) ? $context["smiley"] : null), "SMILEY_DESC");
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t";
        }
        // line 45
        echo "\t\t";
        if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
            // line 46
            echo "\t\t\t<br /><a href=\"";
            echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 48
        echo "
\t\t";
        // line 49
        if ((isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null)) {
            // line 50
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 51
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley"))) {
                echo "<hr />";
            }
            // line 52
            echo "\t\t\t";
            echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
            echo "<br />
\t\t\t";
            // line 53
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 54
                echo "\t\t\t\t";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo "<br />
\t\t\t\t";
                // line 55
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo "<br />
\t\t\t\t";
                // line 56
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo "<br />
\t\t\t";
            }
            // line 58
            echo "\t\t\t";
            echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
            echo "
\t\t</div>
\t\t";
        }
        // line 61
        echo "\t\t";
        if (((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null) || (isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null))) {
            // line 62
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<hr />";
            }
            // line 63
            echo "\t\t\t";
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "<strong><a href=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 64
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<strong><a href=\"#review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 65
            echo "\t\t";
        }
        // line 66
        echo "\t</div>

\t";
        // line 68
        // line 69
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 71
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) && (!(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) && (!(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t</div>

\t";
        // line 74
        // line 75
        echo "\t</fieldset>

";
        // line 77
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS") == 1)) {
            // line 78
            echo "
\t";
            // line 79
            if ((!(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null))) {
                // line 80
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 83
            echo "
\t";
            // line 84
            if (((!(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) && ((!$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT")) == 1))) {
                // line 85
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 88
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t";
                // line 89
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 90
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 91
                echo "\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 92
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if ((!(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 100
            echo "
\t";
            // line 101
            if ((((!(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) && (!(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null))) && ((!$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT")) == 1))) {
                // line 102
                echo "\t\t<div id=\"tabs\" class=\"sub-panels\" data-show-panel=\"";
                if ((isset($context["SHOW_PANEL"]) ? $context["SHOW_PANEL"] : null)) {
                    echo (isset($context["SHOW_PANEL"]) ? $context["SHOW_PANEL"] : null);
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 104
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 105
                if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                    // line 106
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 108
                    echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\"><strong id=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t";
                if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                    // line 113
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 114
                    echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 117
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 120
            echo "
\t";
            // line 121
            if (((!(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) && ((!$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT")) == 1))) {
                // line 122
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 126
                // line 127
                echo "\t\t\t";
                if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                    // line 128
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 130
                echo "\t\t\t";
                if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                    // line 131
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 133
                echo "\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 134
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 136
                echo "\t\t\t";
                if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
                    // line 137
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 139
                echo "\t\t\t";
                if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
                    // line 140
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 142
                echo "\t\t\t";
                if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
                    // line 143
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 145
                echo "\t\t\t";
                if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
                    // line 146
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo " [";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 148
                echo "
\t\t\t";
                // line 149
                if ((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 150
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 152
                echo "
\t\t\t";
                // line 153
                if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
                    // line 154
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 155
                    if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 156
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type"));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        echo $this->getAttribute((isset($context["topic_type"]) ? $context["topic_type"] : null), "VALUE");
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute((isset($context["topic_type"]) ? $context["topic_type"] : null), "VALUE");
                        echo "\" value=\"";
                        echo $this->getAttribute((isset($context["topic_type"]) ? $context["topic_type"] : null), "VALUE");
                        echo "\"";
                        echo $this->getAttribute((isset($context["topic_type"]) ? $context["topic_type"] : null), "S_CHECKED");
                        echo " />";
                        echo $this->getAttribute((isset($context["topic_type"]) ? $context["topic_type"] : null), "L_TOPIC_TYPE");
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 159
                echo "
\t\t\t";
                // line 160
                if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 161
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 162
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" size=\"3\" maxlength=\"3\" value=\"";
                    // line 163
                    echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 164
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 167
                echo "
\t\t\t";
                // line 168
                if (((isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                    // line 169
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 171
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 172
                    echo (isset($context["S_SOFTDELETE_CHECKED"]) ? $context["S_SOFTDELETE_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 173
                    if (((isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null) && (isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null))) {
                        // line 174
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 178
                echo "
\t\t\t";
                // line 179
                if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
                    // line 180
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 181
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 182
                    echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 185
                echo "\t\t</fieldset>
\t\t";
            }
            // line 187
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 187,  641 => 185,  635 => 182,  630 => 181,  627 => 180,  625 => 179,  622 => 178,  618 => 176,  612 => 174,  610 => 173,  604 => 172,  599 => 171,  595 => 169,  593 => 168,  590 => 167,  584 => 164,  578 => 163,  573 => 162,  570 => 161,  568 => 160,  565 => 159,  542 => 156,  533 => 155,  530 => 154,  528 => 153,  525 => 152,  521 => 150,  519 => 149,  516 => 148,  506 => 146,  503 => 145,  495 => 143,  492 => 142,  484 => 140,  481 => 139,  473 => 137,  470 => 136,  462 => 134,  459 => 133,  451 => 131,  448 => 130,  440 => 128,  437 => 127,  436 => 126,  430 => 122,  428 => 121,  425 => 120,  420 => 117,  414 => 114,  411 => 113,  408 => 112,  401 => 108,  397 => 106,  395 => 105,  391 => 104,  381 => 102,  379 => 101,  376 => 100,  366 => 93,  357 => 92,  350 => 91,  344 => 90,  340 => 89,  336 => 88,  331 => 85,  329 => 84,  326 => 83,  321 => 80,  319 => 79,  316 => 78,  314 => 77,  310 => 75,  309 => 74,  295 => 71,  291 => 69,  290 => 68,  286 => 66,  283 => 65,  276 => 64,  262 => 62,  259 => 61,  252 => 58,  247 => 56,  238 => 54,  236 => 53,  231 => 52,  224 => 50,  219 => 48,  211 => 46,  208 => 45,  205 => 44,  186 => 42,  182 => 41,  177 => 40,  175 => 39,  171 => 37,  159 => 36,  156 => 35,  152 => 33,  149 => 32,  146 => 31,  132 => 30,  128 => 29,  126 => 28,  114 => 26,  106 => 24,  101 => 22,  100 => 21,  97 => 20,  91 => 17,  83 => 15,  78 => 13,  73 => 10,  50 => 9,  42 => 8,  33 => 5,  28 => 3,  306 => 84,  301 => 81,  287 => 80,  284 => 79,  270 => 78,  267 => 63,  253 => 76,  246 => 72,  243 => 55,  230 => 70,  227 => 51,  222 => 49,  216 => 63,  202 => 62,  199 => 61,  187 => 54,  179 => 49,  174 => 48,  169 => 46,  165 => 45,  160 => 42,  158 => 41,  155 => 34,  141 => 39,  138 => 38,  124 => 37,  121 => 36,  113 => 31,  109 => 25,  104 => 23,  102 => 26,  95 => 24,  92 => 23,  86 => 16,  81 => 14,  76 => 16,  68 => 14,  66 => 13,  57 => 10,  55 => 9,  52 => 8,  44 => 6,  36 => 6,  34 => 3,  31 => 4,  38 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
