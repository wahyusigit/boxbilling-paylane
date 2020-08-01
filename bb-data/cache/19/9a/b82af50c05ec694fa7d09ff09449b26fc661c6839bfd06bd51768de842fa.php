<?php

/* mod_order_index.phtml */
class __TwigTemplate_199ab82af50c05ec694fa7d09ff09449b26fc661c6839bfd06bd51768de842fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
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
        $context["active_menu"] = "order";
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Orders");
    }

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        // line 8
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 9
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 10
            echo gettext("Filter orders");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "_url"), "html", null, true);
            echo "\" />
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 17
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 25
            echo gettext("Title");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"title\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 33
            echo gettext("Status");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 35
            echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_status_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"), 0, "All statuses");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 41
            echo gettext("Type");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 43
            echo $context["mf"]->getselectbox("type", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_types"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "type"), 0, "All types");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 49
            echo gettext("Product");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 51
            echo $context["mf"]->getselectbox("product_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id"), 0, "All products");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 57
            echo gettext("Period");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 59
            echo $context["mf"]->getselectbox("period", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period"), 0, "All periods");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 65
            echo gettext("Invoice option");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 67
            echo $context["mf"]->getselectbox("invoice_option", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_invoice_options"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "invoice_option"), 0, "All types");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 73
            echo gettext("Creation date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 76
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 78
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
            // line 85
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 92
            $context["count_orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_statuses");
            // line 93
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 95
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("status" => "pending_setup"));
            echo "\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "pending_setup"), "html", null, true);
            echo "</a><span>";
            echo gettext("Pending setup");
            echo "</span></li>
        <li><a href=\"";
            // line 96
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("status" => "active"));
            echo "\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "active"), "html", null, true);
            echo "</a><span>";
            echo gettext("Active");
            echo "</span></li>
        <li><a href=\"";
            // line 97
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("status" => "suspended"));
            echo "\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "suspended"), "html", null, true);
            echo "</a><span>";
            echo gettext("Suspended");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 98
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_orders"]) ? $context["count_orders"] : null), "total"), "html", null, true);
            echo " </a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>

";
        }
        // line 104
        echo "
";
    }

    // line 107
    public function block_content($context, array $blocks = array())
    {
        // line 108
        echo "
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 111
        echo gettext("Orders");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 112
        echo gettext("New order");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
        ";
        // line 118
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\" style=\"table-layout: fixed\">
            <thead>
                <tr>
                    <td style=\"width: 3%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                    <td style=\"width: 5%\">";
        // line 123
        echo gettext("ID");
        echo "</td>
                    <td width=\"13%\">";
        // line 124
        echo gettext("Client");
        echo "</td>
                    <td width=\"45%\">";
        // line 125
        echo gettext("Title");
        echo "</td>
                    <td style=\"width: 7%\">";
        // line 126
        echo gettext("Amount");
        echo "</td>
                    <td>";
        // line 127
        echo gettext("Period");
        echo "</td>
                    <td>";
        // line 128
        echo gettext("Status");
        echo "</td>
                    <td style=\"width: 10%\">&nbsp;</td>
                </tr>
            </thead>

            <tbody>
                ";
        // line 134
        $context["orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 135
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 136
            echo "                <tr>
                    <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"/></td>
                    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
                    <td class=\"truncate\">
                        <span style=\"float: left;\">
                            <a href=\"";
            // line 141
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client_id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "email"), "html", null, true);
            echo "\" /></a>
                        </span>
                        <span style=\"margin-left: 10px;\">
                            <a href=\"";
            // line 144
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client_id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), "1", null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
            echo "</a>
                        </span>
                    </td>
                    <td class=\"truncate\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 148
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo "</td>
                    <td>";
            // line 149
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            echo "</td>
                    <td>";
            // line 150
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 152
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 153
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/delete", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id")));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 157
            echo "                <tr>
                    <td colspan=\"8\">";
            // line 158
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "            </tbody>
        </table>
        ";
        // line 163
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["orders"]) ? $context["orders"] : null), "url" => "order")));
        // line 164
        echo "        ";
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/order/batch_delete")));
        // line 165
        echo "        </div>
    </div>
    
    <div class=\"tab_content nopadding\" id=\"tab-new\">
        <form method=\"post\" action=\"";
        // line 169
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/new");
        echo "\" class=\"mainForm\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 172
        echo gettext("Client");
        echo "</label>
                    <div class=\"formRight\">
                        ";
        // line 174
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))) {
            // line 175
            echo "                        <input type=\"text\" id=\"client_selector\" placeholder=\"";
            echo gettext("Start typing clients name, email or ID");
            echo "\" required=\"required\"/>
                        <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\" id=\"client_id\"/>
                        ";
        } else {
            // line 178
            echo "                            ";
            $context["client"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get", array(0 => array("id" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))), "method");
            // line 179
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
            echo "
                        ";
        }
        // line 181
        echo "                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 185
        echo gettext("Product");
        echo ":</label>
                    <div class=\"formRight\">
                        ";
        // line 187
        echo $context["mf"]->getselectbox("product_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id"), 1);
        echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
            <input type=\"submit\" value=\"";
        // line 192
        echo gettext("Continue");
        echo "\" class=\"greyishBtn submitForm\" />
            ";
        // line 193
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id")) {
            // line 194
            echo "            <input type=\"hidden\" name=\"client_id\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\" />
            ";
        }
        // line 196
        echo "            </fieldset>
        </form>
    </div>
</div>

";
    }

    // line 203
    public function block_head($context, array $blocks = array())
    {
        // line 204
        echo "<link href=\"css/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
";
    }

    // line 208
    public function block_js($context, array $blocks = array())
    {
        // line 209
        if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))) {
            // line 210
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

});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 210,  496 => 209,  493 => 208,  487 => 204,  484 => 203,  475 => 196,  469 => 194,  467 => 193,  463 => 192,  455 => 187,  450 => 185,  444 => 181,  436 => 179,  433 => 178,  428 => 176,  423 => 175,  421 => 174,  416 => 172,  410 => 169,  404 => 165,  401 => 164,  399 => 163,  395 => 161,  386 => 158,  383 => 157,  372 => 153,  366 => 152,  361 => 150,  357 => 149,  353 => 148,  349 => 147,  337 => 144,  325 => 141,  319 => 138,  315 => 137,  312 => 136,  306 => 135,  304 => 134,  295 => 128,  291 => 127,  287 => 126,  283 => 125,  279 => 124,  275 => 123,  267 => 118,  258 => 112,  254 => 111,  249 => 108,  246 => 107,  241 => 104,  228 => 98,  220 => 97,  212 => 96,  204 => 95,  200 => 93,  198 => 92,  188 => 85,  174 => 78,  165 => 76,  159 => 73,  150 => 67,  145 => 65,  136 => 59,  131 => 57,  122 => 51,  117 => 49,  108 => 43,  103 => 41,  94 => 35,  89 => 33,  80 => 27,  75 => 25,  66 => 19,  61 => 17,  55 => 14,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  34 => 5,  29 => 3,  27 => 2,);
    }
}
