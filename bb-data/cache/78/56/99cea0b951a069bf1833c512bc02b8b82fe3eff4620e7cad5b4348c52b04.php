<?php

/* mod_invoice_invoice.phtml */
class __TwigTemplate_785699cea0b951a069bf1833c512bc02b8b82fe3eff4620e7cad5b4348c52b04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
            'head' => array($this, 'block_head'),
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
        $context["active_menu"] = "invoice";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
        echo "\">";
        echo gettext("Invoices");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<div class=\"widget simpleTabs tabsRight\">
    <div class=\"head\">
        <h5>";
        // line 20
        echo gettext("Invoice");
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">Details</a></li>
        <li><a href=\"#tab-manage\">Manage</a></li>
        <li><a href=\"#tab-texts\">Texts</a></li>
        <li><a href=\"#tab-buyer-credentials\">Client credentials</a></li>
        <li><a href=\"#tab-seller-credentials\">Company credentials</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">
            <div class=\"block\">
                <table class=\"tableStatic wide\">
                    <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 20%\"><label>";
        // line 38
        echo gettext("ID");
        echo "</label></td>
                        <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 42
        echo gettext("Number");
        echo "</label></td>
                        <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 46
        echo gettext("Currency");
        echo "</label></td>
                        <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 50
        echo gettext("Client");
        echo "</label></td>
                        <td><a href=\"";
        // line 51
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 55
        echo gettext("Status");
        echo "</label></td>
                        <td>";
        // line 56
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"));
        echo "</td>
                    </tr>

                    ";
        // line 59
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax")) {
            // line 60
            echo "                    <tr>
                        <td><label>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%</label></td>
                        <td>";
            // line 62
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 65
        echo "                    
                    <tr>
                        <td><label>";
        // line 67
        echo gettext("Total");
        echo "</label></td>
                        <td>";
        // line 68
        echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
        echo "</td>
                    </tr>
                    
                    <tr>
                        <td><label>";
        // line 72
        echo gettext("Created at");
        echo "</label></td>
                        <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 77
        echo gettext("Due at");
        echo "</label></td>
                        <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 82
        echo gettext("Paid at");
        echo "</label></td>
                        <td>";
        // line 83
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 87
        echo gettext("Reminded at");
        echo "</label></td>
                        <td>";
        // line 88
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reminded_at")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reminded_at")), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "reminded_at")), "html", null, true);
            echo " ago) ";
        }
        echo "</td>
                    </tr>
                    
                    ";
        // line 91
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "notes")) {
            // line 92
            echo "                    <tr>
                        <td><label>";
            // line 93
            echo gettext("Notes");
            echo "</label></td>
                        <td>";
            // line 94
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "notes"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 97
        echo "                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"2\">
                                <div class=\"aligncenter\">
                                    <a href=\"";
        // line 103
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/preview.png\" alt=\"\"><span>View as client</span></a>
                                    <a href=\"";
        // line 104
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/delete", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")));
        echo "\" data-api-confirm=\"Are you sure?\"  title=\"\" class=\"btn55 mr10 api-link\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
        echo "\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>Delete</span></a>
                                    ";
        // line 105
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 106
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/send_reminder", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")));
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"Payment reminder was sent\"><img src=\"images/icons/middlenav/mail.png\" alt=\"\"><span>Send reminder</span></a>
                                    <a href=\"";
            // line 107
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/mark_as_paid", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "execute" => 1));
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"Invoice marked as paid\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Mark as paid</span></a>
                                    ";
        }
        // line 109
        echo "                                    
                                    ";
        // line 110
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "paid")) {
            // line 111
            echo "                                    <a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/refund", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\"  title=\"\" class=\"btn55 mr10 api-link\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>Refund</span></a>
                                    ";
        }
        // line 113
        echo "                                    <a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/incoming.png\" alt=\"\"><span>PDF</span></a>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <form action=\"";
        // line 124
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-reload=\"Invoice updated\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 127
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"paid\"";
        // line 129
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "paid")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Paid</label>
                            <input type=\"radio\" name=\"status\" value=\"unpaid\"";
        // line 130
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Unpaid</label>
                            <input type=\"radio\" name=\"status\" value=\"refunded\"";
        // line 131
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "refunded")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Refunded</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 132
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Canceled</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 138
        echo gettext("Approved");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"approved\" value=\"1\"";
        // line 140
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"approved\" value=\"0\"";
        // line 141
        if ((!$this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 147
        echo gettext("Serie and number");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"serie\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">&nbsp;</li>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"nr\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr"), "html", null, true);
        echo "\"/>
                                </li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 163
        echo gettext("Tax");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"taxname\" value=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">&nbsp;</li>
                                <li style=\"width: 40px\">
                                    <input type=\"text\" name=\"taxrate\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">%</li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 179
        echo gettext("Payment method");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 181
        echo $context["mf"]->getselectbox("gateway_id", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways", array(0 => array("format" => "pairs")), "method"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "gateway_id"), 0, "Select payment method");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 187
        echo gettext("Created at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 195
        echo gettext("Due at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"due_at\" value=\"";
        // line 197
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 203
        echo gettext("Paid at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"paid_at\" value=\"";
        // line 205
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 211
        echo gettext("Notes");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"6\">";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 218
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-texts\">
            <form action=\"";
        // line 225
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <label class=\"topLabel\">";
        // line 227
        echo gettext("Text before invoice items table");
        echo "</label>
                    <textarea name=\"text_1\"  cols=\"5\" rows=\"6\" class=\"bb-textarea\"/>";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_1"), "html", null, true);
        echo "</textarea>
                </fieldset>
                
                <fieldset>    
                    <label class=\"topLabel\">";
        // line 232
        echo gettext("Text after invoice items table");
        echo "</label>
                    <textarea name=\"text_2\" cols=\"5\" rows=\"6\" class=\"bb-textarea\"/>";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_2"), "html", null, true);
        echo "</textarea>
                    <input type=\"submit\" value=\"";
        // line 234
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-seller-credentials\">
            ";
        // line 243
        $context["seller"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "seller");
        // line 244
        echo "            <form action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <legend>Company details at the moment of purchase</legend>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 249
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 257
        echo gettext("Company VAT");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company_vat\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company_vat"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 265
        echo gettext("Company Number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company_number\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 273
        echo gettext("Address");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_address\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "address"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 281
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_phone\" value=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "phone"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 289
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_email\" value=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 296
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>


        <div class=\"tab_content nopadding\" id=\"tab-buyer-credentials\">
            ";
        // line 306
        $context["buyer"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer");
        // line 307
        echo "            <form action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <legend>Client details at the moment of purchase</legend>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 312
        echo gettext("First name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_first_name\" value=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "first_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 320
        echo gettext("Last name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_last_name\" value=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "last_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 328
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company\" value=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 336
        echo gettext("Company VAT");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company_vat\" value=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_vat"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 344
        echo gettext("Company Number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company_number\" value=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 352
        echo gettext("Address");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_address\" value=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "address"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 360
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_city\" value=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "city"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 368
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 371
        echo "                            <input type=\"text\" name=\"buyer_state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 377
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 379
        echo $context["mf"]->getselectbox("buyer_country", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "country"), 0, "Select country");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 385
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_phone\" value=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "phone"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 393
        echo gettext("Zip");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_zip\" value=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "zip"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 401
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_email\" value=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 408
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

    </div>
</div>


<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 422
        echo gettext("Invoice items");
        echo "</h5>
    </div>

";
        // line 425
        if ((!$this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved"))) {
            // line 426
            echo "
    <form action=\"";
            // line 427
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
            echo "\" method=\"post\" class=\"mainForm api-form\" data-api-reload=\"1\">
        <fieldset>
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <th>";
            // line 432
            echo gettext("Title");
            echo "</th>
                    <th class=\"currency\">";
            // line 433
            echo gettext("Price");
            echo "</th>
                    <th>";
            // line 434
            echo gettext("Tax");
            echo "</th>
                    <th class=\"actions\">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 440
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "lines"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 441
                echo "                <tr>
                    <td style=\"width: 60%;\"><input type=\"text\" name=\"items[";
                // line 442
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "][title]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "\" style=\"width:98%\"></td>
                    <td style=\"width: 20%;\"><input type=\"text\" name=\"items[";
                // line 443
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "][price]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price"), "html", null, true);
                echo "\" style=\"width:80px\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), "html", null, true);
                echo "</td>
                    <td style=\"width: 5%;\">
                        <input type=\"checkbox\" name=\"items[";
                // line 445
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "][taxed]\" value=\"1\" ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "taxed")) {
                    echo "checked=\"checked\"";
                }
                echo "/>
                    </td>
                    <td style=\"width: 5%;\">
                        <a class=\"bb-button btn14 api-link\" data-api-confirm=\"Are you sure?\" href=\"";
                // line 448
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/item_delete", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id")));
                echo "\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 452
            echo "
                <tr>
                    <td style=\"width: 70%;\"><input type=\"text\" name=\"new_item[title]\" value=\"\" style=\"width:98%\" placeholder=\"New line description\"></td>
                    <td style=\"width: 20%;\"><input type=\"text\" name=\"new_item[price]\" value=\"\" style=\"width:80px\" placeholder=\"Price\"> ";
            // line 455
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), "html", null, true);
            echo "</td>
                    <td><input type=\"checkbox\" name=\"new_item[taxed]\" value=\"1\"/></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        Subtotal: ";
            // line 464
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "subtotal"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        ";
            // line 469
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%: ";
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        Total: ";
            // line 474
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\">
                        ";
            // line 479
            if ((!$this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "approved"))) {
                // line 480
                echo "                        <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/approve", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")));
                echo "\"  title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoices");
                echo "\"><img src=\"images/icons/dark/check.png\" alt=\"\" class=\"icon\"><span>Approve</span></a>
                        ";
            }
            // line 482
            echo "                        <input type=\"submit\" value=\"";
            echo gettext("Update");
            echo "\" class=\"greyishBtn submitForm\" style=\"width:100px\"/>
                    </td>
                </tr>
            </tfoot>
        </table>
        </fieldset>

        <input type=\"hidden\" name=\"id\" value=\"";
            // line 489
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\" />
    </form>

";
        } else {
            // line 493
            echo "    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <th  style=\"width: 11%;\" colspan=\"2\"></th>
                <th style=\"width: 70%;\">";
            // line 497
            echo gettext("Title");
            echo "</th>
                <th style=\"width: 7%;\">";
            // line 498
            echo gettext("Tax");
            echo "</th>
                <th class=\"currency\" style=\"width: 15%;\">";
            // line 499
            echo gettext("Total");
            echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 504
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "lines"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 505
                echo "
            <tr>
                <td>";
                // line 507
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
                echo ".</td>
                <td>
                    <div class=\"bull task ";
                // line 509
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status"), "html", null, true);
                echo "\" title=\"Task status: ";
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status"));
                echo "\"></div>
                    <div class=\"bull charge ";
                // line 510
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "charged")) ? ("yes") : ("no"));
                echo "\" title=\"";
                echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "charged")) ? ("Charged from client balance") : ("Not charged from client balance"));
                echo "\"></div>
                </td>
                <td>
                ";
                // line 513
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id")) {
                    // line 514
                    echo "                <a href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                        echo " x ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                        echo " ";
                    }
                    echo "</a>
                ";
                } else {
                    // line 516
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                        echo " x ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                        echo " ";
                    }
                    // line 517
                    echo "                ";
                }
                // line 518
                echo "                </td>
                <td>";
                // line 519
                echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
                <td class=\"currency\">";
                // line 520
                echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
            </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "        </tbody>
        
        <tfoot>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    Subtotal: ";
            // line 529
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "subtotal"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    ";
            // line 534
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%: ";
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    Total: ";
            // line 539
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                </td>
            </tr>
        </tfoot>
    </table>
";
        }
        // line 545
        echo "
</div>

";
        // line 548
        $context["transactions"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_list", array(0 => array("invoice_id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "per_page" => 100)), "method"), "list");
        // line 549
        echo "
";
        // line 550
        if ((twig_length_filter($this->env, (isset($context["transactions"]) ? $context["transactions"] : null)) > 0)) {
            // line 551
            echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
            // line 554
            echo gettext("Transactions");
            echo "</h5>
    </div>
    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <th>";
            // line 559
            echo gettext("ID");
            echo "</th>
                <th>";
            // line 560
            echo gettext("Type");
            echo "</th>
                <th>";
            // line 561
            echo gettext("Gateway");
            echo "</th>
                <th>";
            // line 562
            echo gettext("Amount");
            echo "</th>
                <th>";
            // line 563
            echo gettext("Status");
            echo "</th>
                 <th>";
            // line 564
            echo gettext("Date");
            echo "</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 570
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
                // line 571
                echo "            <tr>
                <td>";
                // line 572
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "txn_id"), "html", null, true);
                echo "</td>
                <td>";
                // line 573
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "type"), "html", null, true);
                echo "</td>
                <td>";
                // line 574
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway"), "html", null, true);
                echo "</td>
                <td>";
                // line 575
                echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency"));
                echo "</td>
                <td>";
                // line 576
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "status"));
                echo "</td>
                <td>";
                // line 577
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_datetime($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
                echo "</td>
                <td style=\"width: 5%\">
                    <a class=\"bb-button btn14\" href=\"";
                // line 579
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/transaction");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
                echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 583
            echo "        </tbody>
    </table>
</div>

";
        }
        // line 588
        echo "
";
    }

    // line 591
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 592
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
        // line 595
        echo gettext("Actions");
        echo "</h2>
    </div>
    <div class=\"block\">
        <button class=\"bb-button\" type=\"button\" onclick=\"window.print()\"><span class=\"dark-icon i-print\"></span> ";
        // line 598
        echo gettext("Print");
        echo "</button>
        ";
        // line 599
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 600
            echo "        <a class=\"bb-button api-link\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/client/invoice/delete", array("hash" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash")));
            echo "\"  data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\"><span class=\"dark-icon i-bin\"></span> ";
            echo gettext("Delete");
            echo "</a>
        ";
        }
        // line 602
        echo "    </div>
</div>


";
    }

    // line 608
    public function block_head($context, array $blocks = array())
    {
        echo $context["mf"]->getbb_editor(".bb-textarea");
    }

    // line 609
    public function block_js($context, array $blocks = array())
    {
        // line 611
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('input[name=gateway]:first').attr('checked', true);
    \$('#pay-now-button').click(function(){
        var link = \$('input[name=gateway]:checked').val();
        bb.redirect(link);
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_invoice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1306 => 611,  1303 => 609,  1297 => 608,  1289 => 602,  1279 => 600,  1277 => 599,  1273 => 598,  1267 => 595,  1262 => 592,  1259 => 591,  1254 => 588,  1247 => 583,  1235 => 579,  1230 => 577,  1226 => 576,  1222 => 575,  1218 => 574,  1214 => 573,  1210 => 572,  1207 => 571,  1203 => 570,  1194 => 564,  1190 => 563,  1186 => 562,  1182 => 561,  1178 => 560,  1174 => 559,  1166 => 554,  1161 => 551,  1159 => 550,  1156 => 549,  1154 => 548,  1149 => 545,  1140 => 539,  1128 => 534,  1120 => 529,  1113 => 524,  1103 => 520,  1099 => 519,  1096 => 518,  1093 => 517,  1084 => 516,  1068 => 514,  1066 => 513,  1058 => 510,  1052 => 509,  1047 => 507,  1043 => 505,  1039 => 504,  1031 => 499,  1027 => 498,  1023 => 497,  1017 => 493,  1010 => 489,  999 => 482,  991 => 480,  989 => 479,  981 => 474,  969 => 469,  961 => 464,  949 => 455,  944 => 452,  934 => 448,  924 => 445,  915 => 443,  909 => 442,  906 => 441,  902 => 440,  893 => 434,  889 => 433,  885 => 432,  877 => 427,  874 => 426,  872 => 425,  866 => 422,  850 => 409,  846 => 408,  838 => 403,  833 => 401,  824 => 395,  819 => 393,  810 => 387,  805 => 385,  796 => 379,  791 => 377,  781 => 371,  776 => 368,  767 => 362,  762 => 360,  753 => 354,  748 => 352,  739 => 346,  734 => 344,  725 => 338,  720 => 336,  711 => 330,  706 => 328,  697 => 322,  692 => 320,  683 => 314,  678 => 312,  669 => 307,  667 => 306,  655 => 297,  651 => 296,  643 => 291,  638 => 289,  629 => 283,  624 => 281,  615 => 275,  610 => 273,  601 => 267,  596 => 265,  587 => 259,  582 => 257,  573 => 251,  568 => 249,  559 => 244,  557 => 243,  546 => 235,  542 => 234,  538 => 233,  534 => 232,  527 => 228,  523 => 227,  518 => 225,  509 => 219,  505 => 218,  497 => 213,  492 => 211,  481 => 205,  476 => 203,  465 => 197,  460 => 195,  451 => 189,  446 => 187,  437 => 181,  432 => 179,  421 => 171,  414 => 167,  407 => 163,  396 => 155,  389 => 151,  382 => 147,  371 => 141,  365 => 140,  360 => 138,  349 => 132,  343 => 131,  337 => 130,  331 => 129,  326 => 127,  320 => 124,  303 => 113,  295 => 111,  293 => 110,  290 => 109,  285 => 107,  280 => 106,  278 => 105,  272 => 104,  266 => 103,  258 => 97,  252 => 94,  248 => 93,  245 => 92,  243 => 91,  232 => 88,  228 => 87,  217 => 83,  213 => 82,  206 => 78,  202 => 77,  195 => 73,  191 => 72,  184 => 68,  180 => 67,  176 => 65,  170 => 62,  164 => 61,  161 => 60,  159 => 59,  153 => 56,  149 => 55,  136 => 51,  132 => 50,  126 => 47,  122 => 46,  115 => 43,  111 => 42,  105 => 39,  101 => 38,  78 => 20,  73 => 17,  70 => 16,  62 => 11,  56 => 10,  50 => 9,  47 => 8,  44 => 7,  35 => 3,  30 => 4,  28 => 2,);
    }
}
