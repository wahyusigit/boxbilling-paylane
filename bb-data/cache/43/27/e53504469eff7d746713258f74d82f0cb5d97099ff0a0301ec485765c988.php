<?php

/* mod_invoice_transaction.phtml */
class __TwigTemplate_4327e53504469eff7d746713258f74d82f0cb5d97099ff0a0301ec485765c988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        echo "Transaction ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "txn_id"), "html", null, true);
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transactions");
        echo "\">";
        echo gettext("Transactions");
        echo "</a></li>
    <li class=\"lastB\">#";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 19
        echo gettext("Transaction");
        echo "</a></li>
        <li><a href=\"#tab-manage\">";
        // line 20
        echo gettext("Manage");
        echo "</a></li>
        <li><a href=\"#tab-ipn\">";
        // line 21
        echo gettext("IPN");
        echo "</a></li>
        <li><a href=\"#tab-note\">";
        // line 22
        echo gettext("Notes");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h3>";
        // line 29
        echo gettext("Transaction details");
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id"), "html", null, true);
        echo "</h3>
            </div>

            ";
        // line 32
        if ($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "error")) {
            // line 33
            echo "            <div class=\"body\">
                <strong class=\"red\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "error_code"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "error"), "html", null, true);
            echo "</strong>
                <p>";
            // line 35
            echo gettext("If you are sure that this transaction is valid you can update transaction details in &quot;Manage&quot; tab and try processing transaction again");
            echo "</p>
            </div>
            ";
        }
        // line 38
        echo "
            
            <table class=\"tableStatic wide\">
                <tbody>
                    <tr ";
        // line 42
        if ((!$this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "error"))) {
            echo "class=\"noborder\"";
        }
        echo ">
                        <td style=\"width: 35%\">";
        // line 43
        echo gettext("ID");
        echo "</td>
                        <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 48
        echo gettext("Invoice Id");
        echo "</td>
                        <td><a href=\"";
        // line 49
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/manage");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "invoice_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "invoice_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "invoice_id"), "-")) : ("-")), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td>";
        // line 53
        echo gettext("Amount");
        echo "</td>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "amount"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "currency"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 58
        echo gettext("Payment gateway");
        echo "</td>
                        <td>";
        // line 59
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "gateway", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "gateway"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 63
        echo gettext("Transaction ID on payment gateway");
        echo "</td>
                        <td>";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "txn_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "txn_id"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 68
        echo gettext("Transaction status on payment gateway");
        echo "</td>
                        <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "txn_status")), "method"), "html", null, true);
        echo "</td>
                    </tr>
                    
                    <tr>
                        <td>";
        // line 73
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "status")), "method"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>";
        // line 78
        echo gettext("IP");
        echo "</td>
                        <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ip"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_ipcountryname_filter($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ip")), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 82
        if ($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "note")) {
            // line 83
            echo "                    <tr>
                        <td>";
            // line 84
            echo gettext("Note");
            echo "</td>
                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "note"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        // line 88
        echo "
                    <tr>
                        <td>";
        // line 90
        echo gettext("Received at");
        echo "</td>
                        <td>";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "created_at"), "l, d F Y"), "html", null, true);
        echo "</td>
                    </tr>

                    ";
        // line 94
        if (($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "created_at") != $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "updated_at"))) {
            // line 95
            echo "                    <tr>
                        <td>";
            // line 96
            echo gettext("Updated at");
            echo "</td>
                        <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "updated_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        // line 100
        echo "                 </tbody>

                 <tfoot>
                     <tr>
                         <td colspan=\"2\">
                            <div class=\"aligncenter\">
                                <a class=\"btn55 mr10 api-link\" href=\"";
        // line 106
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/transaction_process", array("id" => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id")));
        echo "\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>";
        echo gettext("Process");
        echo "</span></a>
                                <a class=\"btn55 mr10 api-link\" href=\"";
        // line 107
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/transaction_delete", array("id" => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id")));
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/transactions");
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
        // line 117
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/transaction_update");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"Transaction updated\">
                <fieldset>
                    <legend>Transaction payment information</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 121
        echo gettext("Invoice ID");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"invoice_id\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "invoice_id"), "html", null, true);
        echo "\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 128
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"amount\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "amount"), "html", null, true);
        echo "\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 135
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"currency\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "currency"), "html", null, true);
        echo "\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 144
        echo gettext("Transaction processing information");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 146
        echo gettext("Payment Gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "gateway_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_pairs"), 2 => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "gateway_id"), 3 => 0, 4 => "Select payment gateway"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 153
        echo gettext("Validate IPN");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"validate_ipn\" value=\"1\"";
        // line 155
        if ($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "validate_ipn")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"validate_ipn\" value=\"0\"";
        // line 156
        if ((!$this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "validate_ipn"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 163
        echo gettext("Transaction information on payment gateway");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 165
        echo gettext("Transaction type");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "type", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_types"), 2 => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "type"), 3 => 0, 4 => "Select transaction type"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 172
        echo gettext("Transaction status on Payment Gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "txn_status", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_gateway_statuses"), 2 => $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "txn_status"), 3 => 0, 4 => "Select status"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 179
        echo gettext("Transaction ID on Payment Gateway");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"txn_id\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "txn_id"), "html", null, true);
        echo "\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 185
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div id=\"tab-note\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 193
        echo gettext("Note about this transaction");
        echo "</h3>
            </div>
            <form method=\"post\" action=\"";
        // line 195
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/transaction_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Transaction note updated\">
                <fieldset>
                    <div class=\"rowElem\">
                        <div class=\"formBottom\">
                            <textarea name=\"note\" cols=\"\" rows=\"10\">";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "note"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>

                <fieldset>
                    <input type=\"submit\" value=\"";
        // line 206
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div id=\"tab-ipn\" class=\"tab_content nopadding\">

            
            <div class=\"help\">
                <h3>";
        // line 216
        echo gettext("GET");
        echo "</h3>
            </div>
            ";
        // line 218
        if ($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "get")) {
            // line 219
            echo "            <table class=\"tableStatic wide\">
                <tbody>
                    ";
            // line 221
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "get"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 222
                echo "                    <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                        <td width=\"30%\">";
                // line 223
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "</td>
                        <td>";
                // line 224
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                </tbody>
            </table>
            ";
        } else {
            // line 230
            echo "            <div class=\"body\">
                <p>";
            // line 231
            echo gettext("No GET parameters received");
            echo "</p>
            </div>
            ";
        }
        // line 234
        echo "
            
            <div class=\"help\">
                <h3>";
        // line 237
        echo gettext("POST");
        echo "</h3>
            </div>
            ";
        // line 239
        if ($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "post")) {
            // line 240
            echo "            <table class=\"tableStatic wide\">
                <tbody>
                    ";
            // line 242
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "post"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 243
                echo "                    <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                        <td width=\"30%\">";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "</td>
                        <td>";
                // line 245
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                </tbody>
            </table>
            ";
        } else {
            // line 251
            echo "            <div class=\"body\">
                <p>";
            // line 252
            echo gettext("No POST parameters received");
            echo "</p>
            </div>
            ";
        }
        // line 255
        echo "            
            <div class=\"help\">
                <h3>";
        // line 257
        echo gettext("SERVER");
        echo "</h3>
            </div>
            ";
        // line 259
        if ($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "server")) {
            // line 260
            echo "            <table class=\"tableStatic wide\">
                <tbody>
                    ";
            // line 262
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "server"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 263
                echo "                    <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                        <td width=\"30%\">";
                // line 264
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "</td>
                        <td>";
                // line 265
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "                </tbody>
            </table>
            ";
        } else {
            // line 271
            echo "            <div class=\"body\">
                <p>";
            // line 272
            echo gettext("No SERVER parameters logged");
            echo "</p>
            </div>
            ";
        }
        // line 275
        echo "            
            
            <div class=\"help\">
                <h3>";
        // line 278
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "http_raw_post_data"), "html", null, true);
        echo "</h3>
            </div>
            ";
        // line 280
        if ($this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "http_raw_post_data")) {
            // line 281
            echo "            <div class=\"body\">
                ";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["transaction"]) ? $context["transaction"] : null), "ipn"), "http_raw_post_data"), "html", null, true);
            echo "
            </div>
            ";
        } else {
            // line 285
            echo "            <div class=\"body\">
                <p>No ";
            // line 286
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, "http_raw_post_data"), "html", null, true);
            echo " parameters received</p>
            </div>
            ";
        }
        // line 289
        echo "            <div class=\"fix\"></div>
        </div>
    </div>

    <div class=\"fix\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_transaction.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 289,  727 => 286,  724 => 285,  718 => 282,  715 => 281,  713 => 280,  708 => 278,  703 => 275,  697 => 272,  694 => 271,  689 => 268,  672 => 265,  668 => 264,  661 => 263,  644 => 262,  640 => 260,  638 => 259,  633 => 257,  629 => 255,  623 => 252,  620 => 251,  615 => 248,  598 => 245,  594 => 244,  587 => 243,  570 => 242,  566 => 240,  564 => 239,  559 => 237,  554 => 234,  548 => 231,  545 => 230,  540 => 227,  523 => 224,  519 => 223,  512 => 222,  495 => 221,  491 => 219,  489 => 218,  484 => 216,  472 => 207,  468 => 206,  458 => 199,  451 => 195,  446 => 193,  436 => 186,  432 => 185,  425 => 181,  420 => 179,  412 => 174,  407 => 172,  399 => 167,  394 => 165,  389 => 163,  377 => 156,  371 => 155,  366 => 153,  358 => 148,  353 => 146,  348 => 144,  338 => 137,  333 => 135,  325 => 130,  320 => 128,  312 => 123,  307 => 121,  300 => 117,  283 => 107,  277 => 106,  269 => 100,  263 => 97,  259 => 96,  256 => 95,  254 => 94,  248 => 91,  244 => 90,  240 => 88,  234 => 85,  230 => 84,  227 => 83,  225 => 82,  217 => 79,  213 => 78,  206 => 74,  202 => 73,  195 => 69,  191 => 68,  184 => 64,  180 => 63,  173 => 59,  169 => 58,  160 => 54,  156 => 53,  145 => 49,  141 => 48,  134 => 44,  130 => 43,  124 => 42,  118 => 38,  112 => 35,  106 => 34,  103 => 33,  101 => 32,  93 => 29,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  65 => 15,  62 => 14,  55 => 10,  49 => 9,  43 => 8,  40 => 7,  37 => 6,  30 => 3,  25 => 2,);
    }
}
