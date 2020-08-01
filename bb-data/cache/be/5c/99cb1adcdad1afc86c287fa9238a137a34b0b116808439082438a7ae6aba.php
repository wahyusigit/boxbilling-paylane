<?php

/* mod_servicedomain_index.phtml */
class __TwigTemplate_be5c99cb1adcdad1afc86c287fa9238a137a34b0b116808439082438a7ae6aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["active_menu"] = "system";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Domain management";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-tlds\">";
        // line 10
        echo gettext("Top level domains");
        echo "</a></li>
        <li><a href=\"#tab-new-tld\">";
        // line 11
        echo gettext("New top level domain");
        echo "</a></li>
        <li><a href=\"#tab-registrars\">";
        // line 12
        echo gettext("Registrars");
        echo "</a></li>
        <li><a href=\"#tab-new-registrar\">";
        // line 13
        echo gettext("New domain registrar");
        echo "</a></li>
        <li><a href=\"#tab-nameservers\">";
        // line 14
        echo gettext("Nameservers");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-tlds\">

<div class=\"help\">
    <h5>";
        // line 22
        echo gettext("Manage TLDs");
        echo "</h5>
    <p>";
        // line 23
        echo gettext("Setup domain pricing and allowed operations. Assign specific domain registrars for each Top Level Domain (TLD)");
        echo "</p>
</div>

<table class=\"tableStatic wide\">
    <thead>
        <tr class=\"noborder\">
            <td>";
        // line 29
        echo gettext("TLD");
        echo "</td>
            <td>";
        // line 30
        echo gettext("Registration");
        echo "</td>
            <td>";
        // line 31
        echo gettext("Renew");
        echo "</td>
            <td>";
        // line 32
        echo gettext("Transfer");
        echo " </td>
            <td>";
        // line 33
        echo gettext("Operations");
        echo "</td>
            <td>";
        // line 34
        echo gettext("Registrar");
        echo "</td>
            <td style=\"width:13%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_tld_get_list", array(0 => array("per_page" => 99)), "method"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
            // line 41
            echo "        <tr>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "tld"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "price_registration")), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "price_renew")), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "price_transfer")), "method"), "html", null, true);
            echo "</td>
            <td>
             ";
            // line 47
            echo gettext("Allow register:");
            echo " ";
            if ($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "allow_register")) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
            echo "<br/>
             ";
            // line 48
            echo gettext("Allow transfer:");
            echo " ";
            if ($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "allow_transfer")) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
            echo "<br/>
             ";
            // line 49
            echo gettext("Active:");
            echo " ";
            if ($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "active")) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
            // line 50
            echo "            </td>
            <td><a class=\"\" href=\"";
            // line 51
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("servicedomain/registrar");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "registrar"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "registrar"), "title"), "html", null, true);
            echo "</a></td>
            <td class=\"actions\">
                <a class=\"btn14 mr5\" href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("servicedomain/tld");
            echo "/";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "tld"), 1), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\" href=\"";
            // line 54
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/tld_delete", array("tld" => $this->getAttribute((isset($context["tld"]) ? $context["tld"] : null), "tld")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "     </tbody>

</table>
</div>

        <div class=\"tab_content nopadding\" id=\"tab-new-tld\">

            <div class=\"help\">
                <h5>";
        // line 66
        echo gettext("Add new top level domain");
        echo "</h5>
                <p>";
        // line 67
        echo gettext("Setup new TLD prices and properties");
        echo "</p>
            </div>

            <form method=\"post\" action=\"";
        // line 70
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/tld_create");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 73
        echo gettext("Tld");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"tld\" value=\".\" required=\"required\" class=\"dirTop\" title=\"Must start with a dot\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 80
        echo gettext("Registrar");
        echo ":</label>
                        <div class=\"formRight\">
                            <select name=\"tld_registrar_id\" required=\"required\">
                                ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_pairs"));
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 84
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 92
        echo gettext("Registration price");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price_registration\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 100
        echo gettext("Renewal price");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price_renew\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 108
        echo gettext("Transfer price");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"price_transfer\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 116
        echo gettext("Minimum years of registration");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"min_years\" value=\"1\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 124
        echo gettext("Allow registration");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"allow_register\" value=\"1\"checked=\"checked\"/><label>";
        // line 126
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"allow_register\" value=\"0\"/><label>";
        // line 127
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 133
        echo gettext("Allow transfer");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"allow_transfer\" value=\"1\" checked=\"checked\"/><label>";
        // line 135
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"allow_transfer\" value=\"0\"/><label>";
        // line 136
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 142
        echo gettext("Active");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"active\" value=\"1\" checked=\"checked\"/><label>";
        // line 144
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"active\" value=\"0\"/><label>";
        // line 145
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 150
        echo gettext("Add");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-registrars\">

        <div class=\"help\">
            <h5>";
        // line 159
        echo gettext("Domain registrars");
        echo "</h5>
            <p>";
        // line 160
        echo gettext("Manage domain registrars");
        echo "</p>
        </div>

        <table class=\"tableStatic wide\">
            <thead>
                <tr class=\"noborder\">
                    <th>";
        // line 166
        echo gettext("Title");
        echo "</th>
                    <th style=\"width:18%\">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 171
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_list"), "list"));
        foreach ($context['_seq'] as $context["_key"] => $context["registrar"]) {
            // line 172
            echo "                <tr>
                    <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn14 mr5\" href=\"";
            // line 175
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("servicedomain/registrar/");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 api-link\" href=\"";
            // line 176
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/registrar_copy", array("id" => $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id")));
            echo "\" data-api-reload=\"1\" title=\"Install\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 api-link\" href=\"";
            // line 177
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/registrar_delete", array("id" => $this->getAttribute((isset($context["registrar"]) ? $context["registrar"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registrar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </tbody>
        </table>

            </div>

        <div class=\"tab_content nopadding\" id=\"tab-nameservers\">

        <div class=\"help\">
            <h5>";
        // line 189
        echo gettext("Nameservers");
        echo "</h5>
            <p>";
        // line 190
        echo gettext("Setup default nameservers that will be used for new domain registrations if client have not provided his own nameservers in order form");
        echo "</p>
        </div>

        <form method=\"post\" action=\"";
        // line 193
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"Nameservers updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 196
        echo gettext("Nameserver 1");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_1\" value=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_1")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 204
        echo gettext("Nameserver 2");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_2\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_2")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 211
        echo gettext("Nameserver 3");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_3\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_3")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 219
        echo gettext("Nameserver 4");
        echo ":</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"nameserver_4\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_param", array(0 => array("key" => "nameserver_4")), "method"), "html", null, true);
        echo "\">
                </div>
                <div class=\"fix\"></div>
            </div>
            <input type=\"submit\" value=\"";
        // line 225
        echo gettext("Update nameservers");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
        </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-registrar\">
            ";
        // line 231
        $this->env->loadTemplate("partial_extensions.phtml")->display(array("type" => "domain-registrar", "header" => "List of domain registrars on extensions site"));
        // line 232
        echo "            <div class=\"body\">
                <h1 class=\"pt10\">";
        // line 233
        echo gettext("Adding new domain registrar");
        echo "</h1>
                <p>";
        // line 234
        echo gettext("Follow instructions below to install new domain registrar.");
        echo "</p>

                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>";
        // line 238
        echo gettext("Check domain registrar you are looking for is available at");
        echo " <a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">BoxBilling extensions site</a></li>
                        <li>";
        // line 239
        echo gettext("Download domain registrar file and place to");
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_LIBRARY"), "html", null, true);
        echo "/Registrar/Adapter</strong></li>
                        <li>";
        // line 240
        echo gettext("Reload this page to see newly detected domain registrar");
        echo "</li>
                        <li>";
        // line 241
        echo gettext("Click on install button. Now you will be able to create top level domains with new domain registrar");
        echo "</li>
                        <li>";
        // line 242
        echo gettext("For developers. Read");
        echo " <a href=\"http://docs.boxbilling.com/en/latest/reference/extension.html#domain-registrar\" target=\"_blank\">";
        echo gettext("BoxBilling documentation");
        echo "</a> ";
        echo gettext("to learn how to create your own domain registrar.");
        echo "</li>
                    </ul>
                </div>

            </div>

            ";
        // line 248
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_available")) > 0)) {
            // line 249
            echo "            <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td>";
            // line 252
            echo gettext("Code");
            echo "</td>
                    <td style=\"width: 5%\">";
            // line 253
            echo gettext("Install");
            echo "</td>
                </tr>
            </thead>

            <tbody>
            ";
            // line 258
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "servicedomain_registrar_get_available"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
                // line 259
                echo "            <tr>
                <td>";
                // line 260
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14 api-link\" href=\"";
                // line 262
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/servicedomain/registrar_install", array("code" => (isset($context["code"]) ? $context["code"] : null)));
                echo "\" data-api-msg=\"Domain registrar installed\" title=\"Install\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                </td>
            </tr>
            </tbody>

            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 268
                echo "            <tbody>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 271
                echo gettext("All payment gateways installed");
                // line 272
                echo "                    </td>
                </tr>
            </tbody>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "        </table>
        ";
        }
        // line 278
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 278,  616 => 276,  607 => 272,  605 => 271,  600 => 268,  589 => 262,  584 => 260,  581 => 259,  576 => 258,  568 => 253,  564 => 252,  559 => 249,  557 => 248,  544 => 242,  540 => 241,  536 => 240,  530 => 239,  526 => 238,  519 => 234,  515 => 233,  512 => 232,  510 => 231,  501 => 225,  494 => 221,  489 => 219,  480 => 213,  475 => 211,  467 => 206,  462 => 204,  453 => 198,  448 => 196,  442 => 193,  436 => 190,  432 => 189,  422 => 181,  412 => 177,  408 => 176,  402 => 175,  397 => 173,  394 => 172,  390 => 171,  382 => 166,  373 => 160,  369 => 159,  357 => 150,  349 => 145,  345 => 144,  340 => 142,  331 => 136,  327 => 135,  322 => 133,  313 => 127,  309 => 126,  304 => 124,  293 => 116,  282 => 108,  271 => 100,  260 => 92,  252 => 86,  241 => 84,  237 => 83,  231 => 80,  221 => 73,  215 => 70,  209 => 67,  205 => 66,  195 => 58,  185 => 54,  179 => 53,  170 => 51,  167 => 50,  159 => 49,  149 => 48,  139 => 47,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  119 => 41,  115 => 40,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  77 => 23,  73 => 22,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  31 => 2,  26 => 3,);
    }
}
