<?php

/* mod_invoice_subscription.phtml */
class __TwigTemplate_90d74b6f004691e3c956305c35e12bf9609551cd5e04336e1b6cbb72704c05fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        $context["active_menu"] = "invoice";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Subscription ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "sid"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Subscription");
        echo "</a></li>
        <li><a href=\"#tab-manage\">";
        // line 11
        echo gettext("Manage");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h3>";
        // line 18
        echo gettext("Subscription details");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td>";
        // line 24
        echo gettext("Client");
        echo "</td>
                        <td><a href=\"";
        // line 25
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td>";
        // line 29
        echo gettext("Amount");
        echo "</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "amount"), 1 => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "currency")), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "period_name", array(0 => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "period")), "method"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 34
        echo gettext("Payment gateway");
        echo "</td>
                        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "gateway"), "title"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 39
        echo gettext("Subscription ID on payment gateway");
        echo "</td>
                        <td>";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "sid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "sid"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 44
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "status")), "method"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 49
        echo gettext("Created at");
        echo "</td>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "created_at"), "l, d F Y"), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 53
        if (($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "created_at") != $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "updated_at"))) {
            // line 54
            echo "                    <tr>
                        <td>";
            // line 55
            echo gettext("Updated at");
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "updated_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        // line 59
        echo "                 </tbody>

                 <tfoot>
                     <tr>
                         <td colspan=\"2\">
                            <div class=\"aligncenter\">
                                <a class=\"btn55 mr10 api-link\" href=\"";
        // line 65
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/subscription_delete", array("id" => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id")));
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/subscriptions");
        echo "\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>";
        echo gettext("Delete");
        echo "</span></a>
                            </div>
                         </td>
                     </tr>
                 </tfoot>
            </table>

        </div>

        <div id=\"tab-manage\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"";
        // line 75
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/subscription_update");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem\">
                        <label>";
        // line 78
        echo gettext("Payment Gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "gateway_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_pairs"), 2 => $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "gateway"), "id"), 3 => 0, 4 => "Select payment gateway"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 85
        echo gettext("Subscription ID on payment gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"sid\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "sid"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 92
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\" ";
        // line 94
        if (($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "status") == "active")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Active</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\" ";
        // line 95
        if (($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Canceled</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 100
        echo gettext("Period");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "period", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), 2 => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "period"), 3 => 1, 4 => "Select period"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 108
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"amount\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "amount"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 116
        echo gettext("Currency");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "currency", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), 2 => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "currency"), 3 => 1, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 123
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>
        </div>

    </div>

    <div class=\"fix\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_subscription.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 124,  275 => 123,  267 => 118,  262 => 116,  253 => 110,  248 => 108,  239 => 102,  234 => 100,  224 => 95,  218 => 94,  213 => 92,  205 => 87,  200 => 85,  192 => 80,  187 => 78,  181 => 75,  164 => 65,  156 => 59,  150 => 56,  146 => 55,  143 => 54,  141 => 53,  135 => 50,  131 => 49,  124 => 45,  120 => 44,  113 => 40,  109 => 39,  102 => 35,  98 => 34,  89 => 30,  85 => 29,  72 => 25,  68 => 24,  59 => 18,  49 => 11,  45 => 10,  39 => 6,  36 => 5,  29 => 3,  24 => 2,);
    }
}
