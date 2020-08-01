<?php

/* mod_invoice_subscriptions.phtml */
class __TwigTemplate_4dfb97e78df7e640c86621d5359617a9ddfe653d3b1d40acec928a84a206d4c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        $context["active_menu"] = "invoice";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Subscriptions");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 11
        echo gettext("Subscriptions");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 12
        echo gettext("New subscription");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        ";
        // line 20
        echo $context["mf"]->gettable_search();
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                    <th colspan=\"2\">";
        // line 25
        echo gettext("ID");
        echo "</th>
                    <th>";
        // line 26
        echo gettext("Status");
        echo "</th>
                    <th>";
        // line 27
        echo gettext("Gateway");
        echo "</th>
                    <th>";
        // line 28
        echo gettext("Amount");
        echo "</th>
                    <th width=\"13%\">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 34
        $context["subscriptions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_subscription_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 35
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subscriptions"]) ? $context["subscriptions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["subscription"]) {
            // line 36
            echo "                <tr>
                    <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id"), "html", null, true);
            echo "\"/></td>
                    <td style=\"width:5%;\"><a href=\"";
            // line 38
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "email"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "client"), "last_name"), "html", null, true);
            echo "\"/></a></td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "sid"), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "status"));
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "gateway"), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "amount"), $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "currency"));
            echo " ";
            echo $context["mf"]->getperiod_name($this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "period"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"btn14\" href=\"";
            // line 44
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/subscription");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 45
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/subscription_delete", array("id" => $this->getAttribute((isset($context["subscription"]) ? $context["subscription"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                <tr>
                    <td colspan=\"6\">
                        ";
            // line 51
            echo gettext("The list is empty");
            // line 52
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </tbody>
        </table>

            ";
        // line 58
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/invoice/batch_delete_subscription")));
        // line 59
        echo "            ";
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["subscriptions"]) ? $context["subscriptions"] : null), "url" => "invoice/subscriptions")));
        // line 60
        echo "    </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"";
        // line 64
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/subscription_create");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 67
        echo gettext("Client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" id=\"client_selector\" placeholder=\"";
        // line 69
        echo gettext("Start typing clients name, email or ID");
        echo "\"/>
                            <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" id=\"client_id\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 75
        echo gettext("Payment Gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 77
        echo $context["mf"]->getselectbox("gateway_id", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "gateway_id"), 0, "Select payment gateway");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 82
        echo gettext("Subscription ID on payment gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"sid\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "sid"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 89
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 91
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\" /><label>";
        // line 92
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 97
        echo gettext("Period");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 99
        echo $context["mf"]->getselectbox("period", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period"), 1, "Select period");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 105
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"amount\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "amount"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 113
        echo gettext("Currency");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 115
        echo $context["mf"]->getselectbox("currency", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 1, "Select currency");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 120
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
            </div>
        
    </div>
</div>
";
    }

    // line 130
    public function block_js($context, array $blocks = array())
    {
        // line 131
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

    public function getTemplateName()
    {
        return "mod_invoice_subscriptions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 131,  303 => 130,  291 => 120,  283 => 115,  278 => 113,  269 => 107,  264 => 105,  255 => 99,  250 => 97,  242 => 92,  238 => 91,  233 => 89,  225 => 84,  220 => 82,  212 => 77,  207 => 75,  199 => 70,  195 => 69,  190 => 67,  184 => 64,  178 => 60,  175 => 59,  173 => 58,  168 => 55,  160 => 52,  158 => 51,  154 => 49,  145 => 45,  139 => 44,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  106 => 38,  102 => 37,  99 => 36,  93 => 35,  91 => 34,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  62 => 20,  51 => 12,  47 => 11,  41 => 7,  38 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
