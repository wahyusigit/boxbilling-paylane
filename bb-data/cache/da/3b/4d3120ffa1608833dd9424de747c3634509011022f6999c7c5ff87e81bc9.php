<?php

/* mod_servicedomain_order.phtml */
class __TwigTemplate_da3b4d3120ffa1608833dd9424de747c3634509011022f6999c7c5ff87e81bc9 extends Twig_Template
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
        echo "<div class=\"rowElem\">
    <label>";
        // line 2
        echo gettext("Domain action");
        echo ":</label>
    <div class=\"formRight domain-action-select\">
        <input type=\"radio\" name=\"config[action]\" value=\"register\" checked=\"checked\"/><label>Register</label>
        <input type=\"radio\" name=\"config[action]\" value=\"transfer\" /><label>Transfer</label>
    </div>
    <div class=\"fix\"></div>
</div>

<div class=\"rowElem domain-action domain-register\">
    <label>";
        // line 11
        echo gettext("Register domain");
        echo ":</label>
    <div class=\"formRight\">
        <ul>
            <li style=\"width: 200px\"><input type=\"text\" name=\"config[register_sld]\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "register_sld"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Domain name to register");
        echo "\"></li>
            <li style=\"width: 90px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectboxtld", array(0 => "config[register_tld]", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "serviceDomain_tlds", array(0 => array("allow_register" => 1)), "method")), "method"), "html", null, true);
        echo "</li>
            <li style=\"width: 80px\"><input type=\"text\" name=\"config[register_years]\" value=\"1\" placeholder=\"";
        // line 16
        echo gettext("Years");
        echo "\"></li>
        </ul>
    </div>
    <div class=\"fix\"></div>
</div>

<div class=\"rowElem domain-action domain-transfer\" style=\"display: none;\">
    <label>";
        // line 23
        echo gettext("Transfer domain");
        echo ":</label>
    <div class=\"formRight\">
        <ul>
            <li style=\"width: 200px\"><input type=\"text\" name=\"config[transfer_sld]\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "transfer_sld"), "html", null, true);
        echo "\"  placeholder=\"";
        echo gettext("Domain name to transfer");
        echo "\"></li>
            <li style=\"width: 90px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectboxtld", array(0 => "config[transfer_tld]", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "serviceDomain_tlds", array(0 => array("allow_transfer" => 1)), "method")), "method"), "html", null, true);
        echo "</li>
            <li style=\"width: 200px\"><input type=\"text\" name=\"config[transfer_code]\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "transfer_code"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Domain transfer code");
        echo "\"></li>
        </ul>
    </div>
    <div class=\"fix\"></div>
</div>

<script type=\"text/javascript\">
\$(function() {

    \$('.domain-action-select input').bind('click', function (){
        \$('.domain-action').hide();
        if(\$(this).val() == 'register') {
            \$('.domain-action.domain-register').show();
        } else {
            \$('.domain-action.domain-transfer').show();
        }
    });

});
</script>";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_order.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  72 => 27,  66 => 26,  60 => 23,  50 => 16,  46 => 15,  40 => 14,  34 => 11,  22 => 2,  19 => 1,  225 => 87,  219 => 84,  206 => 74,  201 => 71,  198 => 70,  188 => 63,  184 => 62,  180 => 61,  177 => 60,  174 => 59,  170 => 58,  167 => 57,  165 => 56,  162 => 55,  154 => 49,  133 => 47,  129 => 46,  123 => 43,  120 => 42,  118 => 41,  107 => 33,  98 => 27,  93 => 25,  86 => 21,  75 => 19,  70 => 17,  67 => 16,  64 => 15,  58 => 13,  51 => 9,  45 => 8,  39 => 7,  36 => 6,  33 => 5,  28 => 3,  26 => 2,);
    }
}
