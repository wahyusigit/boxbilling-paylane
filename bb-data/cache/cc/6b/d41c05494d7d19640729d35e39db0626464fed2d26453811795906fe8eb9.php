<?php

/* mod_servicedomain_manage.phtml */
class __TwigTemplate_cc6bd41c05494d7d19640729d35e39db0626464fed2d26453811795906fe8eb9 extends Twig_Template
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
        echo "<div class=\"help\">
    <h2>";
        // line 2
        echo gettext("Domain details");
        echo "</h2>
</div>

<table class=\"tableStatic wide\">
    <tbody>
        <tr class=\"noborder\">
            <td style=\"width: 30%;\">";
        // line 8
        echo gettext("Domain");
        echo "</td>
            <td><a target=\"_blank\" href=\"http://";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
        echo "</a> </td>
        </tr>
        
        <tr>
            <td>";
        // line 13
        echo gettext("Registrar");
        echo "</td>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "registrar"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 18
        echo gettext("Nameserver 1");
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns1"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 23
        echo gettext("Nameserver 2");
        echo "</td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns2"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 28
        echo gettext("Nameserver 3");
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns3"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 33
        echo gettext("Nameserver 4");
        echo "</td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns4"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 38
        echo gettext("Transfer code");
        echo "</td>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "transfer_code"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 43
        echo gettext("Privacy protected");
        echo "</td>
            <td id=\"privacy-value\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "privacy"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 48
        echo gettext("Locked");
        echo "</td>
            <td id=\"locked-value\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "locked"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 53
        echo gettext("Registration/Renewal years");
        echo "</td>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "period"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <td>";
        // line 58
        echo gettext("Registration date");
        echo "</td>
            <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "registered_at"), "l, d F Y"), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <td>";
        // line 63
        echo gettext("Expires at");
        echo "</td>
            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "expires_at"), "l, d F Y"), "html", null, true);
        echo "</td>
        </tr>

    </tbody>
    
    
    <tfoot>
        <tr>
            <td colspan=\"2\">
                <div class=\"aligncenter\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["order_actions"]) ? $context["order_actions"] : null), "html", null, true);
        echo "
                    ";
        // line 75
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 76
            echo "                    <a class=\"btn55 mr10\" type=\"button\" id=\"get-epp\"><img src=\"images/icons/middlenav/key.png\" alt=\"\"><span>Get EPP</span></a>
                    <a class=\"btn55 mr10\" type=\"button\" id=\"domain-unlock\" ";
            // line 77
            if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "locked") == 0)) {
                echo "style=\"display:none;\"";
            }
            echo "><img src=\"images/icons/middlenav/locked2.png\" alt=\"\"><span>";
            echo gettext("Unlock");
            echo "</span></a>
                    <a class=\"btn55 mr10\" type=\"button\" id=\"domain-lock\" ";
            // line 78
            if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "locked") == 1)) {
                echo "style=\"display:none;\"";
            }
            echo "><img src=\"images/icons/middlenav/unlocked.png\" alt=\"\"><span>";
            echo gettext("Lock");
            echo "</span></a>
                    <a class=\"btn55 mr10\" type=\"button\" id=\"domain-disable-pp\"><img src=\"images/icons/middlenav/umbrella.png\" alt=\"\"><span>";
            // line 79
            echo gettext("Disable privacy protection");
            echo "</span></a>
                    <a class=\"btn55 mr10\" type=\"button\" id=\"domain-enable-pp\"><img src=\"images/icons/middlenav/umbrella.png\" alt=\"\"><span>";
            // line 80
            echo gettext("Enable privacy protection");
            echo "</span></a>
                    ";
        }
        // line 82
        echo "                </div>
            </td>
        </tr>
    </tfoot>
    
</table>

";
        // line 89
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 90
            echo "<div class=\"help\">
    <h2>";
            // line 91
            echo gettext("Nameservers");
            echo "</h2>
</div>

<form method=\"post\" action=\"";
            // line 94
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/update_nameservers");
            echo "\" class=\"mainForm api-form\" data-api-msg=\"Nameservers updated\">
    <fieldset>
        <div class=\"rowElem\">
            <label>";
            // line 97
            echo gettext("Nameserver 1");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"ns1\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns1"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns1"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns1"))), "html", null, true);
            echo "\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 105
            echo gettext("Nameserver 2");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"ns2\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns2"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns2"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns2"))), "html", null, true);
            echo "\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 113
            echo gettext("Nameserver 3");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"ns3\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns3", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns3"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns3"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns3"))), "html", null, true);
            echo "\">
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 121
            echo gettext("Nameserver 4");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"ns4\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns4", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns4"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns4"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns4"))), "html", null, true);
            echo "\">
            </div>
            <div class=\"fix\"></div>
        </div>
            
        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
        <input class=\"greyishBtn submitForm\" type=\"submit\" value=\"";
            // line 129
            echo gettext("Update");
            echo "\">
    </fieldset>
</form>

<div class=\"help\">
    <h2>";
            // line 134
            echo gettext("Domain data");
            echo "</h2>
</div>
<form method=\"post\" action=\"";
            // line 136
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/update");
            echo "\" class=\"mainForm api-form\" data-api-msg=\"Domain data updated\">
    <fieldset>
        <div class=\"rowElem\">
            <label>";
            // line 139
            echo gettext("Transfer code (EPP)");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"transfer_code\" value=\"";
            // line 141
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "transfer_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "transfer_code"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "transfer_code"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "transfer_code"))), "html", null, true);
            echo "\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 147
            echo gettext("Period");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"period\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "period"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "period"))), "html", null, true);
            echo "\">
            </div>
            <div class=\"fix\"></div>
        </div>


        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
        <input class=\"greyishBtn submitForm\" type=\"submit\" value=\"";
            // line 156
            echo gettext("Update");
            echo "\">
    </fieldset>
</form>

<div class=\"help\">
    <h2>";
            // line 161
            echo gettext("Update domain contact details");
            echo "</h2>
</div>
<form method=\"post\" action=\"";
            // line 163
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/update_contacts");
            echo "\" class=\"mainForm api-form\" data-api-msg=\"Domain contact details updated\">
    <fieldset>
        <div class=\"rowElem\">
            <label>";
            // line 166
            echo gettext("First Name");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"contact[first_name]\" value=\"";
            // line 168
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "first_name"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "first_name"))), "html", null, true);
            echo "\" required=\"required\">
            </div>
            <div class=\"fix\"></div>
        </div>
        
        <div class=\"rowElem\">
            <label>";
            // line 174
            echo gettext("Last Name");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[last_name]\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "last_name"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "last_name"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 182
            echo gettext("Email");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[email]\" value=\"";
            // line 184
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "email"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "email"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 190
            echo gettext("Company");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[company]\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "company"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "company"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 198
            echo gettext("Address Line 1");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[address1]\" value=\"";
            // line 200
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address1"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address1"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address1"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 206
            echo gettext("Address Line 2");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[address2]\" value=\"";
            // line 208
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address2"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address2"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address2"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 214
            echo gettext("Country");
            echo ": </label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"contact[country]\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "country"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "country"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 222
            echo gettext("City");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[city]\" value=\"";
            // line 224
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "city"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "city"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 230
            echo gettext("State");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[state]\" value=\"";
            // line 232
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "state"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "state"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 238
            echo gettext("Zip");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[postcode]\" value=\"";
            // line 240
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "postcode"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "postcode"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 246
            echo gettext("Phone Country Code");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[phone_cc]\" value=\"";
            // line 248
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone_cc"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone_cc"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
            // line 254
            echo gettext("Phone number");
            echo ": </label>
            <div class=\"formRight\">
            <input type=\"text\" name=\"contact[phone]\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone"))), "html", null, true);
            echo "\" required=\"required\" >
            </div>
            <div class=\"fix\"></div>
        </div>


        <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
        <input class=\"greyishBtn submitForm\" type=\"submit\" value=\"";
            // line 263
            echo gettext("Update");
            echo "\">
    </fieldset>
</form>

";
        }
        // line 268
        echo "
<script type=\"text/javascript\">
\$(function() {

   ";
        // line 272
        if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "privacy") == 0)) {
            // line 273
            echo "       \$('#domain-disable-pp').hide();
   ";
        }
        // line 275
        echo "
   ";
        // line 276
        if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "privacy") == 1)) {
            // line 277
            echo "       \$('#domain-enable-pp').hide();
   ";
        }
        // line 279
        echo "    
    \$('#domain-lock').bind('click',function(event){
        bb.post(
            'admin/servicedomain/lock',
            { order_id: ";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Domain locked');
                \$('#domain-lock').toggle();
                \$('#domain-unlock').toggle();
                \$('#locked-value').text('1');
            }
        );
    });

    \$('#domain-unlock').bind('click',function(event){
        bb.post(
            'admin/servicedomain/unlock',
            { order_id: ";
        // line 296
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Domain unlocked');
                \$('#domain-lock').toggle();
                \$('#domain-unlock').toggle();
                \$('#locked-value').text('0');
            }
        );
    });

    \$('#domain-enable-pp').bind('click',function(event){
        bb.post(
            'admin/servicedomain/enable_privacy_protection',
            { order_id: ";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Privacy Protection enabled');
                \$('#domain-enable-pp').toggle();
                \$('#domain-disable-pp').toggle();
                \$('#privacy-value').text('1');
            }
        );
    });

    \$('#domain-disable-pp').bind('click',function(event){
        bb.post(
            'admin/servicedomain/disable_privacy_protection',
            { order_id: ";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Privacy Protection disabled');
                \$('#domain-enable-pp').toggle();
                \$('#domain-disable-pp').toggle();
                \$('#privacy-value').text('0');
            }
        );
    });

    \$('#get-epp').bind('click',function(event){
        bb.post(
            'admin/servicedomain/get_transfer_code',
            { order_id: ";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Domain transfer code is: ' + result);
            }
        );
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 322,  599 => 309,  583 => 296,  567 => 283,  557 => 277,  555 => 276,  552 => 275,  548 => 273,  546 => 272,  540 => 268,  532 => 263,  528 => 262,  519 => 256,  514 => 254,  505 => 248,  500 => 246,  491 => 240,  463 => 224,  458 => 222,  449 => 216,  444 => 214,  435 => 208,  430 => 206,  421 => 200,  416 => 198,  407 => 192,  402 => 190,  393 => 184,  388 => 182,  360 => 166,  354 => 163,  349 => 161,  341 => 156,  337 => 155,  314 => 141,  309 => 139,  303 => 136,  298 => 134,  290 => 129,  286 => 128,  278 => 123,  273 => 121,  264 => 115,  259 => 113,  250 => 107,  245 => 105,  236 => 99,  231 => 97,  225 => 94,  219 => 91,  216 => 90,  214 => 89,  205 => 82,  200 => 80,  196 => 79,  188 => 78,  180 => 77,  177 => 76,  147 => 59,  143 => 58,  136 => 54,  132 => 53,  125 => 49,  114 => 44,  103 => 39,  92 => 34,  88 => 33,  81 => 29,  77 => 28,  70 => 24,  66 => 23,  59 => 19,  55 => 18,  48 => 14,  44 => 13,  35 => 9,  31 => 8,  22 => 2,  19 => 1,  1161 => 510,  1158 => 509,  1148 => 502,  1139 => 499,  1136 => 498,  1126 => 495,  1122 => 494,  1118 => 493,  1114 => 492,  1110 => 491,  1107 => 490,  1101 => 489,  1099 => 488,  1090 => 482,  1086 => 481,  1082 => 480,  1073 => 474,  1065 => 468,  1053 => 464,  1048 => 462,  1044 => 461,  1040 => 460,  1037 => 459,  1032 => 458,  1030 => 457,  1023 => 453,  1019 => 452,  1015 => 451,  1011 => 450,  1003 => 445,  995 => 439,  986 => 436,  983 => 435,  973 => 432,  969 => 431,  961 => 430,  957 => 429,  953 => 428,  949 => 427,  946 => 426,  940 => 425,  938 => 424,  929 => 418,  925 => 417,  921 => 416,  917 => 415,  907 => 408,  901 => 404,  898 => 403,  896 => 402,  893 => 401,  890 => 400,  887 => 399,  883 => 398,  880 => 397,  878 => 396,  871 => 391,  860 => 388,  856 => 387,  848 => 386,  844 => 385,  840 => 384,  836 => 383,  833 => 382,  829 => 381,  820 => 375,  816 => 374,  812 => 373,  808 => 372,  804 => 371,  796 => 366,  787 => 360,  782 => 358,  779 => 357,  770 => 353,  758 => 351,  755 => 350,  738 => 348,  733 => 347,  731 => 346,  726 => 344,  723 => 343,  719 => 342,  714 => 340,  709 => 338,  705 => 337,  699 => 333,  696 => 309,  694 => 308,  688 => 287,  683 => 285,  675 => 280,  670 => 278,  661 => 272,  656 => 270,  647 => 264,  642 => 262,  631 => 335,  626 => 254,  617 => 248,  612 => 246,  603 => 240,  598 => 238,  589 => 232,  584 => 230,  575 => 224,  570 => 222,  561 => 279,  556 => 214,  547 => 208,  542 => 206,  535 => 202,  518 => 188,  515 => 187,  512 => 186,  506 => 184,  504 => 183,  497 => 181,  494 => 180,  488 => 178,  486 => 238,  483 => 176,  477 => 232,  475 => 173,  472 => 230,  462 => 170,  450 => 163,  445 => 160,  434 => 157,  431 => 156,  425 => 155,  423 => 154,  417 => 151,  414 => 150,  403 => 147,  401 => 146,  395 => 144,  392 => 143,  390 => 142,  387 => 141,  381 => 139,  379 => 176,  376 => 137,  374 => 174,  365 => 168,  356 => 125,  351 => 123,  348 => 122,  346 => 121,  343 => 120,  335 => 116,  333 => 115,  328 => 149,  325 => 112,  323 => 147,  317 => 108,  313 => 107,  306 => 103,  302 => 102,  291 => 98,  281 => 97,  269 => 93,  260 => 92,  253 => 88,  249 => 87,  242 => 83,  238 => 82,  234 => 80,  228 => 77,  224 => 76,  217 => 72,  213 => 71,  210 => 70,  208 => 69,  190 => 66,  186 => 65,  175 => 75,  171 => 74,  158 => 64,  154 => 63,  145 => 51,  141 => 50,  131 => 43,  121 => 48,  116 => 35,  110 => 43,  105 => 33,  99 => 38,  95 => 31,  91 => 30,  87 => 29,  80 => 25,  74 => 21,  71 => 20,  64 => 9,  58 => 8,  52 => 7,  49 => 6,  46 => 5,  40 => 3,  34 => 17,  32 => 16,  30 => 15,  28 => 13,  26 => 2,);
    }
}
