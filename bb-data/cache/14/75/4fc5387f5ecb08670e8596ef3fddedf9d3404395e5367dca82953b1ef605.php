<?php

/* mod_support_ticket.phtml */
class __TwigTemplate_14754fc5387f5ecb08670e8596ef3fddedf9d3404395e5367dca82953b1ef605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 13
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages")), "html", null, true);
        echo " ";
        echo gettext("message(s)");
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
        echo "\">";
        echo gettext("Support tickets");
        echo "</a></li>
    <li class=\"lastB\">#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "  - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget simpleTabs tabsRight\">
    <div class=\"head\">
        <h5 class=\"iSpeech\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 22
        echo gettext("Ticket");
        echo "</a></li>
        <li><a href=\"#tab-manage\">";
        // line 23
        echo gettext("Manage");
        echo "</a></li>
        <li><a href=\"#tab-notes\">";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")) > 0)) {
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")), "html", null, true);
            echo " - ";
        }
        echo gettext("Notes");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 25
        echo gettext("Client tickets");
        echo "</a></li>
    </ul>
    
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 30%\">";
        // line 34
        echo gettext("Ticket ID");
        echo "</td>
                        <td><b>#";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "</b></td>
                    </tr>

                    <tr>
                        <td>";
        // line 39
        echo gettext("Client");
        echo "</td>
                        <td>#";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "id"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>
                    
                    <tr>
                        <td>";
        // line 44
        echo gettext("Help desk");
        echo "</td>
                        <td class=\"shd\">
                            ";
        // line 46
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "support_helpdesk_id"), 1);
        echo "
                        </td>
                    </tr>

                    <tr>
                        <td>";
        // line 51
        echo gettext("Status");
        echo "</td>
                        <td>
                            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses", array(0 => array("titles" => 1)), "method"));
        foreach ($context['_seq'] as $context["tcode"] => $context["tstatus"]) {
            // line 54
            echo "                            <label><input class=\"tst\" type=\"radio\" name=\"status\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["tcode"]) ? $context["tcode"] : null), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == (isset($context["tcode"]) ? $context["tcode"] : null))) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            echo twig_escape_filter($this->env, (isset($context["tstatus"]) ? $context["tstatus"] : null), "html", null, true);
            echo "</label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tcode'], $context['tstatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </td>
                    </tr>
                    
                    <tr>
                        <td>";
        // line 60
        echo gettext("Time opened");
        echo "</td>
                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at"), "l, d F Y"), "html", null, true);
        echo "</td>
                    </tr>

                 </tbody>

                ";
        // line 66
        $context["task"] = $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "rel");
        // line 67
        echo "                <tbody>
                ";
        // line 68
        if ($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "task")) {
            // line 69
            echo "                <tr>
                    <td><label>";
            // line 70
            echo gettext("Task");
            echo "</label></td>
                    <td><strong>";
            // line 71
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "task"));
            echo "</strong></td>
                </tr>
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "type") == "order")) {
            // line 76
            echo "                <tr>
                    <td><label>";
            // line 77
            echo gettext("Related to");
            echo "</label></td>
                    <td><a href=\"";
            // line 78
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id"), "html", null, true);
            echo "\">Order #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "id"), "html", null, true);
            echo "</a></td>
                </tr>
                ";
        }
        // line 81
        echo "
                ";
        // line 82
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "task") == "upgrade")) {
            // line 83
            echo "                <tr>
                    <td><label>";
            // line 84
            echo gettext("Upgrade to");
            echo "</label></td>
                    <td><a href=\"";
            // line 85
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "new_value"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"), $this->getAttribute((isset($context["task"]) ? $context["task"] : null), "new_value"), array(), "array"), "html", null, true);
            echo "</a></td>
                </tr>
                ";
        }
        // line 88
        echo "
                </tbody>

                 <tfoot>
                     <tr>
                         <td colspan=\"2\">
                            <div class=\"aligncenter\">
                                ";
        // line 95
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed")) {
            // line 96
            echo "                                <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_close", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open"));
            echo "\" class=\"btn55 mr10 api-link\" ><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>";
            echo gettext("Close ticket");
            echo "</span></a>
                                ";
        }
        // line 98
        echo "                                <a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_delete", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id")));
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
        echo "\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>";
        echo gettext("Delete");
        echo "</span></a>

                                ";
        // line 100
        if (($this->getAttribute((isset($context["task"]) ? $context["task"] : null), "status") == "pending")) {
            // line 101
            echo "                                <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/task_complete", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id")));
            echo "\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/check.png\" alt=\"\" data-api-reload=\"1\"><span>";
            echo gettext("Set Task complete");
            echo "</span></a>
                                ";
        }
        // line 103
        echo "                            </div>
                         </td>
                     </tr>
                 </tfoot>
            </table>
            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <form method=\"post\" action=\"";
        // line 112
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_update");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 115
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 123
        echo gettext("Help desk");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 125
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "support_helpdesk_id"), 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 131
        echo gettext("Status");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 133
        echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses", array(0 => array("titles" => 1)), "method"), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"), 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 139
        echo gettext("Priority");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"priority\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "priority"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                     <input type=\"submit\" value=\"";
        // line 145
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\">
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-notes\">

            <table class=\"tableStatic wide\">
            ";
        // line 154
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 155
            echo "                <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                    <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "note"), "html", null, true);
            echo "</td>
                    <td style=\"width: 20%\"><a href=\"";
            // line 157
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff");
            echo "/manage/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "admin_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "author"), "name"), "html", null, true);
            echo "</a></td>
                    <td style=\"width: 5%\">
                        <a href=\"";
            // line 159
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/note_delete", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\" class=\"bb-button btn14 api-link\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                <tfoot>
                    <tr>
                        <td colspan=\"3\" ";
        // line 165
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")) == 0)) {
            echo "class=\"noborder\"";
        }
        echo ">

                            <form method=\"post\" action=\"";
        // line 167
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/note_create");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"1\">
                                <fieldset>
                                    <textarea name=\"note\" cols=\"5\" rows=\"5\" required=\"required\" placeholder=\"Add new note\" style=\"width: 98%\"></textarea>
                                    <input type=\"submit\" value=\"";
        // line 170
        echo gettext("Add note");
        echo "\" class=\"greyishBtn submitForm\" style=\" margin-top: 22px; width: 100px\"/>
                                    <input type=\"hidden\" name=\"ticket_id\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\">
                                </fieldset>
                            </form>

                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">Subject</td>
                        <td width=\"15%\">Help desk</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 194
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "id"))), "method");
        // line 195
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 196
            echo "                    <tr>
                        <td>";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 198
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 200
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 201
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 204
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 205
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <a href=\"";
        // line 213
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id")));
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\" ><img src=\"images/icons/dark/help.png\" alt=\"\" class=\"icon\"><span>";
        echo gettext("New support ticket");
        echo "</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>

<div class=\"conversation\">
";
        // line 224
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["message"]) {
            // line 225
            echo "<div class=\"widget ";
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) ? ("last") : (""));
            echo "\" id=\"";
            echo ((($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id") == (isset($context["request_message"]) ? $context["request_message"] : null))) ? ("direct-msg") : (""));
            echo "\">
    <div class=\"head\" style=\"cursor: pointer;\">
        <h5 class=\"no-icon\"><img src=\"";
            // line 227
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "\" class=\"gravatar\"/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "author"), "name"), "html", null, true);
            echo "</h5>
        <h5 style=\"float:right;\"><a href=\"";
            // line 228
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "/message/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
            echo "\" style=\"color:inherit\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_datetime($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "created_at")), "html", null, true);
            echo "</a></h5>
    </div>

    <div class=\"body\" style=\"display:";
            // line 231
            echo ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last") || (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") + 1) == twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages"))))) ? ("block") : ("none"));
            echo ";\">
        ";
            // line 232
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content"));
            echo "
        <div class=\"clear\"></div>
    </div>
</div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "</div>


<div class=\"widget\" id=\"reply-box\">
    <div class=\"head\">
        <h5 class=\"iSpeech\">";
        // line 242
        echo gettext("Reply as");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "name"), "html", null, true);
        echo "</h5>
        ";
        // line 243
        $this->env->loadTemplate("mod_support_canned_selector.phtml")->display($context);
        // line 244
        echo "    </div>

    <form method=\"post\" action=\"";
        // line 246
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_reply");
        echo "\" class=\"mainForm api-form\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open"));
        echo "\">
        <fieldset>
            <textarea name=\"content\" cols=\"5\" rows=\"20\" required=\"required\" class=\"bb-textarea\" id=\"rt\">Hello ";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "first_name"), "html", null, true);
        echo ",
";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["canned_delay_message"]) ? $context["canned_delay_message"] : null), "html", null, true);
        echo "



";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "
";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "signature"), "html", null, true);
        echo "</textarea>
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo "\">
            <input type=\"submit\" value=\"";
        // line 256
        echo gettext("Post");
        echo "\" class=\"greyishBtn submitForm\" />


            <div class=\"body\">
                <a href=\"#\"  class=\"btnIconLeft mr10\" id=\"toggleMessages\" ><span>";
        // line 260
        echo gettext("Show/Hide messages");
        echo "</span></a>

                ";
        // line 262
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages")) > 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") != "closed"))) {
            // line 263
            echo "                <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_close", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open"));
            echo "\" class=\"btnIconLeft mr10 api-link\" ><span>";
            echo gettext("Close ticket");
            echo "</span></a>
                ";
        }
        // line 265
        echo "            </div>
        </fieldset>
    </form>

    <div class=\"clear\"></div>
</div>

";
    }

    // line 274
    public function block_js($context, array $blocks = array())
    {
        // line 275
        echo "<script type=\"text/javascript\">
function setSelRange(inputEl, selStart, selEnd) { 
   if (inputEl.setSelectionRange) { 
     inputEl.focus(); 
     inputEl.setSelectionRange(selStart, selEnd); 
   } else if (inputEl.createTextRange) { 
     var range = inputEl.createTextRange(); 
     range.collapse(true); 
     range.moveEnd('character', selEnd); 
     range.moveStart('character', selStart); 
     range.select(); 
   }
}

\$(function() {

    \$('#reply-box textarea').focus();
    var ta = document.getElementById('rt');
    var pos = ta.innerHTML.indexOf('\\n') + 2;
    setSelRange(ta, pos, pos);
 
    \$('.shd select').change(function(){
        bb.get('admin/support/ticket_update', {id:";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo ", support_helpdesk_id: \$(this).val()});
    });
    
    \$('input.tst').click(function(){
        bb.get('admin/support/ticket_update', {id:";
        // line 301
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
        echo ", status: \$(this).val()});
    });

    \$('.conversation').on('click', '.head', function(e){
        if( e.target !== this )
            return;
        \$(this).siblings('.body').toggle();
        return false;
    });

    if (\$('#direct-msg').length > 0){
        \$('#direct-msg > .body').show();
        \$('html, body').animate({
            scrollTop: \$('#direct-msg').offset().top-50
        }, 500);
        \$('#direct-msg').css(\"background-color\", \"rgb(228, 228, 228)\");
    }

    var showAllMessages = false;
    \$('.api-form').on('click', '#toggleMessages', function(e) {
        e.preventDefault();
        showAllMessages = !showAllMessages;
        \$('.conversation .body').toggle(showAllMessages);

    });
});
</script>
";
    }

    // line 330
    public function block_head($context, array $blocks = array())
    {
        echo $context["mf"]->getbb_editor(".bb-textarea");
    }

    public function getTemplateName()
    {
        return "mod_support_ticket.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 330,  750 => 301,  743 => 297,  719 => 275,  716 => 274,  705 => 265,  695 => 263,  693 => 262,  688 => 260,  681 => 256,  677 => 255,  673 => 254,  669 => 253,  662 => 249,  658 => 248,  651 => 246,  647 => 244,  645 => 243,  639 => 242,  632 => 237,  613 => 232,  609 => 231,  597 => 228,  589 => 227,  581 => 225,  564 => 224,  548 => 213,  541 => 208,  532 => 205,  529 => 204,  519 => 201,  515 => 200,  511 => 199,  507 => 198,  503 => 197,  500 => 196,  494 => 195,  492 => 194,  466 => 171,  462 => 170,  456 => 167,  449 => 165,  445 => 163,  427 => 159,  418 => 157,  414 => 156,  407 => 155,  390 => 154,  380 => 147,  375 => 145,  368 => 141,  363 => 139,  354 => 133,  349 => 131,  340 => 125,  335 => 123,  326 => 117,  321 => 115,  315 => 112,  304 => 103,  296 => 101,  294 => 100,  284 => 98,  274 => 96,  272 => 95,  263 => 88,  253 => 85,  249 => 84,  246 => 83,  244 => 82,  241 => 81,  231 => 78,  227 => 77,  224 => 76,  222 => 75,  219 => 74,  213 => 71,  209 => 70,  206 => 69,  204 => 68,  201 => 67,  199 => 66,  191 => 61,  187 => 60,  181 => 56,  166 => 54,  162 => 53,  157 => 51,  149 => 46,  144 => 44,  129 => 40,  125 => 39,  118 => 35,  114 => 34,  102 => 25,  94 => 24,  90 => 23,  86 => 22,  79 => 18,  74 => 15,  71 => 14,  62 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  34 => 3,  29 => 13,  27 => 2,);
    }
}
