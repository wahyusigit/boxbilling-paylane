<?php

/* mod_order_manage.phtml */
class __TwigTemplate_1e94a07b9493731afcb873fe6ec60ab98abf78e96990c2f8f51cba628e89b59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        // line 13
        $context["active_menu"] = "order";
        // line 15
        $context["service_partial"] = (("mod_service" . $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "service_type")) . "_manage.phtml");
        // line 16
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_master") == 1)) {
            // line 17
            $context["addons"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_addons", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        }
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
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
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
        echo "\">";
        echo gettext("Orders");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
<div class=\"widget simpleTabs tabsRight\">

    <div class=\"head\">
        <h5 class=\"iFrames\">";
        // line 25
        echo gettext("Order management");
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">";
        // line 29
        echo gettext("Details");
        echo "</a></li>
        <li><a href=\"#tab-manage\">";
        // line 30
        echo gettext("Edit order");
        echo "</a></li>
        <li><a href=\"#tab-config\">";
        // line 31
        echo gettext("Edit order config");
        echo "</a></li>
        ";
        // line 32
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            echo "<li><a href=\"#tab-service\">";
            echo gettext("Service management");
            echo "</a></li>";
        }
        // line 33
        echo "        <li><a href=\"#tab-invoices\">";
        echo gettext("Invoices");
        echo "</a></li>
        ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["addons"]) ? $context["addons"] : null)) > 0)) {
            echo "<li><a href=\"#tab-addons\">";
            echo gettext("Addons");
            echo "</a></li>";
        }
        // line 35
        echo "        <li><a href=\"#tab-status\">";
        echo gettext("History");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 36
        echo gettext("Support");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">
            <div class=\"help\">
                <h2>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"block\">
                <table class=\"tableStatic wide\">
                    <tbody>
                    <tr class=\"noborder\">
                        <td><label>";
        // line 50
        echo gettext("Order");
        echo "</label></td>
                        <td>#";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "service_type"), "html", null, true);
        echo ")</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 55
        echo gettext("Client");
        echo "</label></td>
                        <td><a href=\"";
        // line 56
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 60
        echo gettext("Title");
        echo "</label></td>
                        <td><a href=\"";
        // line 61
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "product_id"), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</strong></a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 65
        echo gettext("Payment amount");
        echo "</label></td>
                        <td>";
        // line 66
        echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
        echo " ";
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
        }
        echo " ";
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "quantity") > 1)) {
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "quantity"), "html", null, true);
            echo " x ";
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "price"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo ")";
        }
        echo "</td>
                    </tr>

                    ";
        // line 69
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "discount") && ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "discount") > 0))) {
            // line 70
            echo "                    <tr>
                        <td><label>";
            // line 71
            echo gettext("Order discount");
            echo "</label></td>
                        <td>-";
            // line 72
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "discount"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo " </td>
                    </tr>

                    <tr>
                        <td><label>";
            // line 76
            echo gettext("Payment amount after discount");
            echo "</label></td>
                        <td>";
            // line 77
            echo $context["mf"]->getcurrency_format(($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total") - $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "discount")), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo " </td>
                    </tr>
                    ";
        }
        // line 80
        echo "
                    <tr>
                        <td><label>";
        // line 82
        echo gettext("Order status");
        echo "</label></td>
                        <td>";
        // line 83
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 87
        echo gettext("Order created");
        echo "</label></td>
                        <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at"), "l, d F Y"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 92
        echo gettext("Activated");
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")), "html", null, true);
            echo " ago";
        }
        echo "</label></td>
                        <td>";
        // line 93
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at"), "l, d F Y"), "html", null, true);
            echo " ";
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 97
        echo gettext("Renewal date");
        echo " ";
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo " in ";
            echo twig_escape_filter($this->env, twig_daysleft_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            echo " day(s) ";
        }
        echo "</label></td>
                        <td>";
        // line 98
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at"), "l, d F Y"), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 102
        echo gettext("Order notes");
        echo "</label></td>
                        <td>";
        // line 103
        echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes"));
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 107
        echo gettext("Order group ID");
        echo "</label></td>
                        <td>";
        // line 108
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_id"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 111
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "promo_id")) {
            // line 112
            echo "                    <tr>
                        <td><label>";
            // line 113
            echo gettext("Order promo code");
            echo "</label></td>
                        <td>
                            ";
            // line 115
            $context["promo"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_promo_get", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "promo_id"))), "method");
            // line 116
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "code"), "html", null, true);
            echo "
                        </td>
                    </tr>
                    ";
        }
        // line 120
        echo "                    
                    ";
        // line 121
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets") > 0)) {
            // line 122
            echo "                    <tr>
                        <td><label>";
            // line 123
            echo gettext("Active support tickets");
            echo "</label></td>
                        <td>
                            <div class=\"num\"><a href=\"";
            // line 125
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open", "order_id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" class=\"redNum\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets"), "html", null, true);
            echo "</a></div>
                        </td>
                    </tr>
                    ";
        }
        // line 129
        echo "                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"2\">
                                
                                <div class=\"aligncenter\">
                                    ";
        // line 136
        ob_start();
        // line 137
        echo "                                    
                                    ";
        // line 138
        if ((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "pending_setup") || ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "failed_setup"))) {
            // line 139
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/activate", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order activated\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Activate</span></a>
                                    ";
        }
        // line 141
        echo "                                    
                                    ";
        // line 142
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 143
            echo "                                    ";
            $context["params"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "extension_config_get", array(0 => array("ext" => "mod_order")), "method");
            // line 144
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/renew", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order renewed\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Renew</span></a>

                                    ";
            // line 146
            if ((trim($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "suspend_reason_list")) == null)) {
                // line 147
                echo "                                    <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/suspend", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
                echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-prompt-key=\"reason\" data-api-prompt=\"1\" data-api-prompt-text=\"";
                echo gettext("Reason of suspension");
                echo "\" data-api-prompt-title=\"";
                echo gettext("Suspension reason");
                echo "\" data-api-reload=\"Order suspended\"><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Suspend</span></a>

                                    ";
            } else {
                // line 150
                echo "                                    <div id=\"suspend_popup\" style=\"position: fixed; z-index: 99999; padding: 5px; margin: 0px; min-width: 310px; max-width: 310px; top: 30%; left: 45%; display: none;\">
                                        <h5 id=\"suspend_popup_title\">";
                // line 151
                echo gettext("Suspension reason");
                echo "</h5>
                                        <div id=\"suspend_popup_content\" class=\"confirm\">
                                            <div id=\"suspend_popup_message\">
                                                <div>";
                // line 154
                echo gettext("Reason of suspension");
                // line 155
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter(trim($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "suspend_reason_list")), "
"));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 156
                    echo "                                                    <div class=\"item\">
                                                        <input type=\"radio\" value=\"";
                    // line 157
                    echo twig_escape_filter($this->env, (isset($context["reason"]) ? $context["reason"] : null), "html", null, true);
                    echo "\" name=\"reason\"/> <label>";
                    echo twig_escape_filter($this->env, (isset($context["reason"]) ? $context["reason"] : null), "html", null, true);
                    echo "</label>
                                                    </div>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "                                                </div>
                                            </div>
                                            <div id=\"suspend_popup_panel\">
                                                <input type=\"button\" class=\"blueBtn\" value=\"&nbsp;";
                // line 163
                echo gettext("Suspend");
                echo "&nbsp;\" id=\"popup_ok\" onclick=\"return susp.suspendOrder('admin/order/suspend?id=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
                echo "', 'reason');\"/>
                                                <input type=\"button\" class=\"basicBtn\" value=\"&nbsp;Cancel&nbsp;\" id=\"popup_cancel\" onclick=\"return susp.suspenderHide();\"/>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"#\" title=\"\" id=\"suspend_button\" onclick=\"return susp.showSuspendPopup()\" data-api-reload=\"Order suspended\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Suspend</span></a>
                                    ";
            }
            // line 170
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/cancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-prompt-key=\"reason\" data-api-prompt=\"1\" data-api-prompt-text=\"";
            echo gettext("Reason of cancelation");
            echo "\" data-api-prompt-title=\"";
            echo gettext("Cancelation reason");
            echo "\" data-api-reload=\"Order canceled\"><img src=\"images/icons/middlenav/close.png\" alt=\"\"><span>Cancel</span></a>
                                    ";
        }
        // line 172
        echo "                                    
                                    ";
        // line 173
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "suspended")) {
            // line 174
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/unsuspend", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order activated\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Unsuspend</span></a>
                                    ";
        }
        // line 176
        echo "                                    
                                    ";
        // line 177
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "canceled")) {
            // line 178
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/uncancel", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"Order activated\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Activate</span></a>
                                    ";
        }
        // line 180
        echo "                                    
                                    <a href=\"";
        // line 181
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/delete", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
        echo "\" title=\"\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
        echo "\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>Delete</span></a>

                                    ";
        // line 183
        if ((!$this->getAttribute((isset($context["order"]) ? $context["order"] : null), "unpaid_invoice_id"))) {
            // line 184
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/renewal_invoice", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" title=\"\" data-api-confirm=\"Are you sure?\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/create.png\" alt=\"\"><span>Issue invoice</span></a>
                                    ";
        }
        // line 186
        echo "                                    ";
        $context["order_actions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 187
        echo "                                    
                                    ";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["order_actions"]) ? $context["order_actions"] : null), "html", null, true);
        echo "
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <div class=\"help\">
                <h2>Order management</h2>
            </div>
            <form method=\"post\" action=\"";
        // line 202
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/update");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 206
        echo gettext("Title");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 214
        echo gettext("Changes status without performing action");
        echo "</label>
                        <div class=\"formRight noborder\">
                            ";
        // line 216
        echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_status_pairs"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"), 0, "Select status");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 222
        echo gettext("Invoice option");
        echo "</label>
                        <div class=\"formRight noborder\">
                            ";
        // line 224
        echo $context["mf"]->getselectbox("invoice_option", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_invoice_options"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "invoice_option"));
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 230
        echo gettext("Price");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "price"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 238
        echo gettext("Reason");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"reason\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "reason"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 246
        echo gettext("Period");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 248
        echo $context["mf"]->getselectbox("period", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"), 0, "Not recurrent");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 254
        echo gettext("Expires at");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"expires_at\" value=\"";
        // line 256
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 262
        echo gettext("Created at");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "\" required=\"required\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 270
        echo gettext("Activated at");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"activated_at\" value=\"";
        // line 272
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at"), "Y-m-d"), "html", null, true);
        echo "\" required=\"required\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 278
        echo gettext("Notes");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"5\">";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                     <input type=\"submit\" value=\"";
        // line 285
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
            </form>
            
            ";
        // line 308
        echo "            ";
        // line 309
        echo "            
            ";
        // line 333
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-config\">
            <div class=\"help\">
                <h2>";
        // line 337
        echo gettext("Order config management");
        echo "</h2>
                <h6>";
        // line 338
        echo gettext("Please be cautious and make sure you know what you are doing when editing order config! BoxBilling relies on these parameters and you might get unexpected results if you change some of them");
        echo "</h6>
            </div>
            <form method=\"post\" action=\"";
        // line 340
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/update_config");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    ";
        // line 342
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "config"));
        foreach ($context['_seq'] as $context["key"] => $context["config"]) {
            // line 343
            echo "                    <div class=\"rowElem noborder\">
                        <label>";
            // line 344
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "</label>
                        <div class=\"formRight noborder\">
                            ";
            // line 346
            if (twig_test_iterable((isset($context["config"]) ? $context["config"] : null))) {
                // line 347
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["config"]) ? $context["config"] : null));
                foreach ($context['_seq'] as $context["key2"] => $context["config2"]) {
                    // line 348
                    echo "                                    <input type=\"text\" name=\"config[";
                    echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, (isset($context["key2"]) ? $context["key2"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["config2"]) ? $context["config2"] : null), "html", null, true);
                    echo "\" ";
                    if ((null === (isset($context["config2"]) ? $context["config2"] : null))) {
                        echo " placeholder=\"null\" ";
                    }
                    echo "/>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['config2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "                            ";
            } else {
                // line 351
                echo "                                <input type=\"text\" name=\"config[";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
                echo "\" ";
                if ((null === (isset($context["config"]) ? $context["config"] : null))) {
                    echo " placeholder=\"null\" ";
                }
                echo "/>
                            ";
            }
            // line 353
            echo "                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "
                     <input type=\"submit\" value=\"";
        // line 358
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-addons\">
            <div class=\"help\">
                <h2>";
        // line 366
        echo gettext("Addons you have ordered with this service");
        echo "</h2>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 371
        echo gettext("Product/Service");
        echo "</td>
                        <td>";
        // line 372
        echo gettext("Price");
        echo "</td>
                        <td>";
        // line 373
        echo gettext("Billing Cycle");
        echo "</td>
                        <td>";
        // line 374
        echo gettext("Next due date");
        echo "</td>
                        <td>";
        // line 375
        echo gettext("Status");
        echo "</td>
                        <td>&nbsp</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 381
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addons"]) ? $context["addons"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
            // line 382
            echo "                <tr>
                    <td>";
            // line 383
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 384
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "total"), $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "currency"));
            echo "</td>
                    <td>";
            // line 385
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "period"));
            echo "</td>
                    <td>";
            // line 386
            if ($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at"), "l, d F Y"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                    <td>";
            // line 387
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "status"));
            echo "</td>
                    <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 388
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 391
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-service\">
            ";
        // line 396
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            // line 397
            echo "                ";
            $context["service"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_service", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
            // line 398
            echo "                ";
            $template = $this->env->resolveTemplate((isset($context["service_partial"]) ? $context["service_partial"] : null));
            $template->display(array_merge($context, array("order" => (isset($context["order"]) ? $context["order"] : null), "service" => (isset($context["service"]) ? $context["service"] : null))));
            // line 399
            echo "            ";
        } elseif (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "form_id") && $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "formbuilder")), "method"))) {
            // line 400
            echo "                ";
            $this->env->loadTemplate("mod_formbuilder_manage.phtml")->display(array_merge($context, (isset($context["order"]) ? $context["order"] : null)));
            // line 401
            echo "            ";
        } else {
            // line 402
            echo "                ";
            // line 403
            echo "            ";
        }
        // line 404
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-invoices\">
            <div class=\"help\">
                <h2>";
        // line 408
        echo gettext("Order invoices");
        echo "</h2>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"15%\">";
        // line 415
        echo gettext("Amount");
        echo "</td>
                        <td width=\"30%\">";
        // line 416
        echo gettext("Issued at");
        echo "</td>
                        <td width=\"30%\">";
        // line 417
        echo gettext("Paid at");
        echo "</td>
                        <td width=\"15%\">";
        // line 418
        echo gettext("Status");
        echo "</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                    ";
        // line 424
        $context["invoices"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_list", array(0 => array("per_page" => 50, "order_id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 425
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoices"]) ? $context["invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 426
            echo "                    <tr>
                        <td>";
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 428
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), 1);
            echo "</td>
                        <td>";
            // line 429
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 430
            if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 431
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 432
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 435
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 436
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-status\">
            <div class=\"help\">
                <h2>";
        // line 445
        echo gettext("Order status change history");
        echo "</h2>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 450
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 451
        echo gettext("Note");
        echo "</td>
                        <td>";
        // line 452
        echo gettext("Date");
        echo "</td>
                        <td>";
        // line 453
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 457
        $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_status_history_get_list", array(0 => array("per_page" => 50, "id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 458
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "list"));
        foreach ($context['_seq'] as $context["i"] => $context["sh"]) {
            // line 459
            echo "                    <tr>
                        <td>";
            // line 460
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "status"));
            echo "</td>
                        <td><div style=\"overflow: auto; width: 470px; max-height: 50px;\">";
            // line 461
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "notes"), "html", null, true);
            echo "</div></td>
                        <td>";
            // line 462
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 464
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/status_history_delete", array("id" => $this->getAttribute((isset($context["sh"]) ? $context["sh"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['sh'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <div class=\"help\">
                <h2>";
        // line 474
        echo gettext("Support tickets regarding this order");
        echo "</h2>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">";
        // line 480
        echo gettext("Subject");
        echo "</td>
                        <td width=\"15%\">";
        // line 481
        echo gettext("Help desk");
        echo "</td>
                        <td width=\"15%\">";
        // line 482
        echo gettext("Status");
        echo "</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 488
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => array("per_page" => "20", "order_id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 489
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 490
            echo "                    <tr>
                        <td>";
            // line 491
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 492
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 493
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 494
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 495
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 498
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 499
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
        echo "                </tbody>
            </table>
        </div>
    </div>

</div>
";
    }

    // line 509
    public function block_js($context, array $blocks = array())
    {
        // line 510
        echo "<script type=\"text/javascript\">
    var susp = {
        showSuspendPopup: function() {
                    \$('#suspend_popup').show();
                    return false;

        },
    suspendOrder: function(url, name) {
        var p = {};
        var inps = document.getElementsByName(name);
        var value = '';
        \$.each(inps, function(index, input){

            if (input.checked) {
                value = input.value;

            }
        });

        p[name] = value;
        bb.get(url, p, function(result) {return bb._afterComplete(\$('#suspend_button'), result);});

        \$('#suspend_popup').hide();
        return false;
    },
    suspenderHide: function() {
        \$('#suspend_popup').hide();
    }
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1161 => 510,  1158 => 509,  1148 => 502,  1139 => 499,  1136 => 498,  1126 => 495,  1122 => 494,  1118 => 493,  1114 => 492,  1110 => 491,  1107 => 490,  1101 => 489,  1099 => 488,  1090 => 482,  1086 => 481,  1082 => 480,  1073 => 474,  1065 => 468,  1053 => 464,  1048 => 462,  1044 => 461,  1040 => 460,  1037 => 459,  1032 => 458,  1030 => 457,  1023 => 453,  1019 => 452,  1015 => 451,  1011 => 450,  1003 => 445,  995 => 439,  986 => 436,  983 => 435,  973 => 432,  969 => 431,  961 => 430,  957 => 429,  953 => 428,  949 => 427,  946 => 426,  940 => 425,  938 => 424,  929 => 418,  925 => 417,  921 => 416,  917 => 415,  907 => 408,  901 => 404,  898 => 403,  896 => 402,  893 => 401,  890 => 400,  887 => 399,  883 => 398,  880 => 397,  878 => 396,  871 => 391,  860 => 388,  856 => 387,  848 => 386,  844 => 385,  840 => 384,  836 => 383,  833 => 382,  829 => 381,  820 => 375,  816 => 374,  812 => 373,  808 => 372,  804 => 371,  796 => 366,  787 => 360,  782 => 358,  779 => 357,  770 => 353,  758 => 351,  755 => 350,  738 => 348,  733 => 347,  731 => 346,  726 => 344,  723 => 343,  719 => 342,  714 => 340,  709 => 338,  705 => 337,  699 => 333,  696 => 309,  694 => 308,  688 => 287,  683 => 285,  675 => 280,  670 => 278,  661 => 272,  656 => 270,  647 => 264,  642 => 262,  631 => 256,  626 => 254,  617 => 248,  612 => 246,  603 => 240,  598 => 238,  589 => 232,  584 => 230,  575 => 224,  570 => 222,  561 => 216,  556 => 214,  547 => 208,  542 => 206,  535 => 202,  518 => 188,  515 => 187,  512 => 186,  506 => 184,  504 => 183,  497 => 181,  494 => 180,  488 => 178,  486 => 177,  483 => 176,  477 => 174,  475 => 173,  472 => 172,  462 => 170,  450 => 163,  445 => 160,  434 => 157,  431 => 156,  425 => 155,  423 => 154,  417 => 151,  414 => 150,  403 => 147,  401 => 146,  395 => 144,  392 => 143,  390 => 142,  387 => 141,  381 => 139,  379 => 138,  376 => 137,  374 => 136,  365 => 129,  356 => 125,  351 => 123,  348 => 122,  346 => 121,  343 => 120,  335 => 116,  333 => 115,  328 => 113,  325 => 112,  323 => 111,  317 => 108,  313 => 107,  306 => 103,  302 => 102,  291 => 98,  281 => 97,  269 => 93,  260 => 92,  253 => 88,  249 => 87,  242 => 83,  238 => 82,  234 => 80,  228 => 77,  224 => 76,  217 => 72,  213 => 71,  210 => 70,  208 => 69,  190 => 66,  186 => 65,  175 => 61,  171 => 60,  158 => 56,  154 => 55,  145 => 51,  141 => 50,  131 => 43,  121 => 36,  116 => 35,  110 => 34,  105 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  80 => 25,  74 => 21,  71 => 20,  64 => 9,  58 => 8,  52 => 7,  49 => 6,  46 => 5,  40 => 3,  34 => 17,  32 => 16,  30 => 15,  28 => 13,  26 => 2,);
    }
}
