<?php

/* mod_support_tickets.phtml */
class __TwigTemplate_ef18c16b152829f7217cfe70f2dab991297e5fbab2f1777fd5652820bd11f256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        // line 4
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Support tickets");
    }

    // line 5
    public function block_top_content($context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 7
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 8
            echo gettext("Filter support tickets");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "_url"), "html", null, true);
            echo "\" />
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 15
            echo gettext("Client ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"client_id\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 23
            echo gettext("Order ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"order_id\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "order_id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 31
            echo gettext("Ticket subject");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"subject\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 39
            echo gettext("Ticket messages");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"content\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 47
            echo gettext("Priority");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"priority\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "priority"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 55
            echo gettext("Status");
            echo "</label>
                        <div class=\"formRight\">
                            ";
            // line 57
            echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses", array(0 => array("titles" => 1)), "method"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"), 0, "All statuses");
            echo "
                        </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 63
            echo gettext("Help desk");
            echo ":</label>
                    <div class=\"formRight\">
                            ";
            // line 65
            echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 0, "All help desks");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 71
            echo gettext("Created at");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 74
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 76
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        </ul>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"hidden\" name=\"show_filter\" value=\"1\" />
                <input type=\"submit\" value=\"";
            // line 83
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 90
            $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_statuses");
            // line 91
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 93
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open"));
            echo "\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open"), "html", null, true);
            echo "</a><span>";
            echo gettext("Tickets waiting for staff reply");
            echo "</span></li>
        <li><a href=\"";
            // line 94
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "on_hold"));
            echo "\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold"), "html", null, true);
            echo "</a><span>";
            echo gettext("Tickets waiting for client reply");
            echo "</span></li>
        <li><a href=\"";
            // line 95
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "closed"));
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed"), "html", null, true);
            echo "</a><span>";
            echo gettext("Solved tickets");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 96
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 101
        echo "
";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        // line 105
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 109
        echo gettext("Support tickets");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 110
        echo gettext("New ticket");
        echo "</a></li>
        <li><a href=\"#tab-email\">";
        // line 111
        echo gettext("New email");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 119
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td colspan=\"2\">";
        // line 124
        echo gettext("Client");
        echo "</td>
                        <td>";
        // line 125
        echo gettext("Subject");
        echo "</td>
                        <td>";
        // line 126
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 127
        echo gettext("Helpdesk");
        echo "</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 133
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 134
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 135
            echo "                    <tr class=\"priority_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "priority"), "html", null, true);
            echo "\">
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"/></td>
                        <td style=\"width:5%\"><a href=\"";
            // line 137
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client_id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"gravatar\" /></a></td>
                        <td style=\"width:20%\"><a href=\"";
            // line 138
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "first_name"), 1, null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "client"), "last_name"), "html", null, true);
            echo "</a></td>
                        <td>
                            <a href=\"";
            // line 140
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "#reply-box\">#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 50), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "replies"), "html", null, true);
            echo ")</a>
                            <br/>
                            ";
            // line 142
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes"))) {
                // line 143
                echo "                            <a href=\"#\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "notes")), "html", null, true);
                echo "\" class=\"show-notes\"><img src=\"images/icons/dark/notebook.png\" alt=\"\" /></a>
                            ";
            }
            // line 145
            echo "                            ";
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "updated_at")), "html", null, true);
            echo " ";
            echo gettext("ago");
            // line 146
            echo "                        </td>
                        <td>";
            // line 147
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 150
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "#reply-box\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 151
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_delete", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 156
            echo "
                    <tr>
                        <td colspan=\"6\">";
            // line 158
            echo gettext("The list is empty");
            echo "</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
                </tbody>
            </table>
            ";
        // line 165
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/support/batch_delete")));
        // line 166
        echo "            ";
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["tickets"]) ? $context["tickets"] : null), "url" => "support")));
        // line 167
        echo "
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>";
        // line 172
        echo gettext("Open ticket for existing client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 175
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/ticket_create");
        echo "\" class=\"mainForm api-form\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
        echo "\">
                <fieldset>
                    ";
        // line 177
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))) {
            // line 178
            echo "                    <div class=\"rowElem noborder\">
                        <label>";
            // line 179
            echo gettext("Client");
            echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" id=\"client_selector\" placeholder=\"";
            // line 181
            echo gettext("Start typing clients name, email or ID");
            echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
        }
        // line 186
        echo "                    <div class=\"rowElem\">
                        <label>";
        // line 187
        echo gettext("Help desk");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 189
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_helpdesk_get_pairs"), "", 1);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 195
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 203
        echo gettext("Message");
        echo "</label>
                        <div class=\"formRight\">
                        <textarea name=\"content\" cols=\"5\" rows=\"10\" required=\"required\" id=\"msg-area-";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id"), "html", null, true);
        echo "\">

";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                    <input type=\"submit\" value=\"";
        // line 213
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-email\">
            <div class=\"help\">
                <h3>";
        // line 220
        echo gettext("Open public ticket for non client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 223
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/support/public_ticket_create");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterPublicTicketCreate\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 226
        echo gettext("Receivers name");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"name\" required=\"required\" placeholder=\"";
        // line 228
        echo gettext("John Smith");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 234
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"email\" required=\"required\" placeholder=\"";
        // line 236
        echo gettext("to@gmail.com");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 242
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("Email subject");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 250
        echo gettext("Message");
        echo "</label>
                        <div class=\"formRight\">
                        <textarea name=\"message\" cols=\"5\" rows=\"10\" required=\"required\">

";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                    <input type=\"submit\" value=\"";
        // line 260
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
    
</div>

";
    }

    // line 272
    public function block_js($context, array $blocks = array())
    {
        // line 273
        echo "<script type=\"text/javascript\">
\$(function() {

\t\$('#client_selector').autocomplete({
        source: function( request, response ) {
            \$.ajax({
                url: bb.restUrl('admin/client/get_pairs'),
                dataType: \"json\",
                data: {
                    per_page: 10,
                    search: request.term
                },
                success: function( data ) {
                    response( \$.map( data.result, function( name, id) {
                        return {
                            label: name,
                            value: id
                        }
                    }));
                }
            });
        },
        minLength: 1,
        select: function( event, ui ) {
            \$(\"#client_selector\").val(ui.item.label);
            \$(\"#client_id\").val(ui.item.value);
            return false;
        }
    });

    \$('a.show-notes').click(function(){
        bb.post('admin/support/ticket_get', { id:\$(this).attr('rel') }, function(result){
            var html = \$('<div>');
            \$.each(result.notes, function(i, v){
                html.append(\$('<div>').html(v.note));
                html.append(\$('<hr>'));
            });
            jAlert(html, '";
        // line 310
        echo gettext("Notes");
        echo "');
        });
        
        return false;
    });

});

function onAfterPublicTicketCreate(result) {
    bb.redirect(\"";
        // line 319
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-ticket");
        echo "/\"+result);
}

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_tickets.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 319,  651 => 310,  612 => 273,  609 => 272,  595 => 260,  591 => 259,  583 => 254,  576 => 250,  565 => 244,  560 => 242,  551 => 236,  546 => 234,  537 => 228,  532 => 226,  526 => 223,  520 => 220,  510 => 213,  506 => 212,  498 => 207,  493 => 205,  488 => 203,  479 => 197,  474 => 195,  465 => 189,  460 => 187,  457 => 186,  449 => 181,  444 => 179,  441 => 178,  439 => 177,  432 => 175,  426 => 172,  419 => 167,  416 => 166,  414 => 165,  409 => 162,  399 => 158,  395 => 156,  383 => 151,  377 => 150,  372 => 148,  368 => 147,  365 => 146,  360 => 145,  352 => 143,  350 => 142,  337 => 140,  326 => 138,  318 => 137,  314 => 136,  309 => 135,  303 => 134,  301 => 133,  292 => 127,  288 => 126,  284 => 125,  280 => 124,  272 => 119,  261 => 111,  257 => 110,  253 => 109,  247 => 105,  244 => 104,  239 => 101,  227 => 96,  219 => 95,  211 => 94,  203 => 93,  199 => 91,  197 => 90,  187 => 83,  173 => 76,  164 => 74,  158 => 71,  149 => 65,  144 => 63,  135 => 57,  130 => 55,  121 => 49,  116 => 47,  107 => 41,  102 => 39,  93 => 33,  88 => 31,  79 => 25,  74 => 23,  65 => 17,  60 => 15,  54 => 12,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 4,  26 => 2,);
    }
}
