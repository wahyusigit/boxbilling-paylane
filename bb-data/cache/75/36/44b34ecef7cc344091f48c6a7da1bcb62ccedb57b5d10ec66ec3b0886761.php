<?php

/* mod_invoice_transactions.phtml */
class __TwigTemplate_753644b34ecef7cc344091f48c6a7da1bcb62ccedb57b5d10ec66ec3b0886761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
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
        echo gettext("Transactions");
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
            echo gettext("Filter transactions");
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
            echo gettext("ID on payment gateway");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"txn_id\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "txn_id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 33
            echo gettext("Invoice Id");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"invoice_id\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "invoice_id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 41
            echo gettext("Currency");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 43
            echo $context["mf"]->getselectbox("currency", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 0, "All currencies");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 49
            echo gettext("Status");
            echo "</label>
                        <div class=\"formRight\">
                            ";
            // line 51
            echo $context["mf"]->getselectbox("status", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_statuses_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"), 0, "All statuses");
            echo "
                        </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 57
            echo gettext("Payment Gateway");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 59
            echo $context["mf"]->getselectbox("gateway_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "gateway_id"), 0, "All payment gateways");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 65
            echo gettext("Received at");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 68
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 70
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
            // line 77
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 84
            $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_statuses");
            // line 85
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 87
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transactions", array("status" => "processed"));
            echo "\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "processed"), "html", null, true);
            echo "</a><span>";
            echo gettext("Processed");
            echo "</span></li>
        <li><a href=\"";
            // line 88
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transactions", array("status" => "approved"));
            echo "\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "approved"), "html", null, true);
            echo "</a><span>";
            echo gettext("Approved");
            echo "</span></li>
        <li><a href=\"";
            // line 89
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transactions", array("status" => "error"));
            echo "\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "error"), "html", null, true);
            echo "</a><span>";
            echo gettext("Error");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 90
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transactions");
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "received") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "approved")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "processed")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "error")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 95
        echo "
";
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "
<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 101
        echo gettext("Transactions");
        echo "</h5></div>
    
    ";
        // line 103
        echo $context["mf"]->gettable_search();
        echo "
    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                <td width=\"5%\">";
        // line 108
        echo gettext("Invoice");
        echo "</td>
                <td>";
        // line 109
        echo gettext("Type");
        echo "</td>
                <td>";
        // line 110
        echo gettext("Status");
        echo "</td>
                <td>";
        // line 111
        echo gettext("Gateway");
        echo "</td>
                <td>";
        // line 112
        echo gettext("Amount");
        echo "</td>
                <td>";
        // line 113
        echo gettext("Date");
        echo "</td>
                <td width=\"18%\">&nbsp;</td>
            </tr>
        </thead>

        <tbody>
            ";
        // line 119
        $context["transactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 120
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["transactions"]) ? $context["transactions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 121
            echo "            <tr>
                <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
            echo "\"/></td>
                <td>";
            // line 123
            if ($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "invoice_id")) {
                echo "<a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "invoice_id"), "html", null, true);
                echo "\">#";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "invoice_id"), "html", null, true);
                echo "</a>";
            } else {
                echo "n/a";
            }
            echo "</td>
                <td>";
            // line 124
            echo $context["mf"]->getstatus_name((($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "type"), "-")) : ("-")));
            echo "</td>
                <td>";
            // line 125
            if ($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "error")) {
                echo "<a href=\"#\" onclick=\"bb.msg('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "error"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "error_code"), "html", null, true);
                echo "'); return false;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "error_code"), "html", null, true);
                echo "</a>";
            } else {
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "status"));
            }
            echo "</td>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway"), "html", null, true);
            echo "</td>
                <td>";
            // line 127
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency"));
            echo "</td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                <td class=\"actions\">
                    <a class=\"btn14\" href=\"";
            // line 130
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transaction");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"btn14 api-link\" href=\"";
            // line 131
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/transaction_process", array("id" => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id")));
            echo "\" data-api-msg=\"Processed\" title=\"Process again\"><img src=\"images/icons/dark/refresh4.png\" alt=\"\"></a>
                    <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 132
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/transaction_delete", array("id" => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 136
            echo "            <tr>
                <td colspan=\"7\">
                    ";
            // line 138
            echo gettext("The list is empty");
            // line 139
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        </tbody>
    </table>


</div>
";
        // line 147
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/invoice/batch_delete_transaction")));
        // line 148
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["transactions"]) ? $context["transactions"] : null), "url" => "invoice/transactions")));
    }

    public function getTemplateName()
    {
        return "mod_invoice_transactions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 148,  378 => 147,  371 => 142,  363 => 139,  361 => 138,  357 => 136,  348 => 132,  344 => 131,  338 => 130,  333 => 128,  329 => 127,  325 => 126,  311 => 125,  307 => 124,  293 => 123,  289 => 122,  286 => 121,  280 => 120,  278 => 119,  269 => 113,  265 => 112,  261 => 111,  257 => 110,  253 => 109,  249 => 108,  241 => 103,  236 => 101,  232 => 99,  229 => 98,  224 => 95,  212 => 90,  204 => 89,  196 => 88,  188 => 87,  184 => 85,  182 => 84,  172 => 77,  158 => 70,  149 => 68,  143 => 65,  134 => 59,  129 => 57,  120 => 51,  115 => 49,  106 => 43,  101 => 41,  92 => 35,  87 => 33,  78 => 27,  73 => 25,  64 => 19,  59 => 17,  53 => 14,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  32 => 3,  27 => 4,  25 => 2,);
    }
}
