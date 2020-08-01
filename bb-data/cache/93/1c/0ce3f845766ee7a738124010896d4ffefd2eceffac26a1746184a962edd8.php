<?php

/* mod_product_promos.phtml */
class __TwigTemplate_931c0ce3f845766ee7a738124010896d4ffefd2eceffac26a1746184a962edd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Product promotions");
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
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo gettext("Product promotions");
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-promos\">";
        // line 17
        echo gettext("Promo");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 18
        echo gettext("New promo");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-promos\">

            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "table_search"), "html", null, true);
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 30
        echo gettext("Code");
        echo "</td>
                        <td>";
        // line 31
        echo gettext("Discount");
        echo "</td>
                        <td>";
        // line 32
        echo gettext("Applies to");
        echo "</td>
                        <td>";
        // line 33
        echo gettext("Client groups");
        echo "</td>
                        <td>";
        // line 34
        echo gettext("Valid period");
        echo "</td>
                        <td>";
        // line 35
        echo gettext("Enabled");
        echo "</td>
                        <td>";
        // line 36
        echo gettext("Usage");
        echo "</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 42
        $context["promos"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_promo_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 43
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promos"]) ? $context["promos"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promo"]) {
            // line 44
            echo "                <tr>
                    <td><strong>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "code"), "html", null, true);
            echo "</strong></td>
                    <td>";
            // line 46
            if (($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "type") == "percentage")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "value"), "html", null, true);
                echo "%";
            }
            if (($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "type") == "absolute")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "value")), "method"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "applies_to"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["pid"] => $context["product"]) {
                // line 48
                echo "                        <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/manage");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["pid"]) ? $context["pid"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["product"]) ? $context["product"] : null), 15), "html", null, true);
                echo "</a><br/>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 50
                echo "                        All products
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pid'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                    </td>
                    <td>";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "cgroups"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["cid"] => $context["client_group"]) {
                // line 54
                echo "                        <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/group");
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["cid"]) ? $context["cid"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (isset($context["client_group"]) ? $context["client_group"] : null), 15), "html", null, true);
                echo "</a><br/>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 56
                echo "                        All client groups
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['cid'], $context['client_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </td>
                    <td>
                        From ";
            // line 60
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "start_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "start_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "now";
            }
            // line 61
            echo "                        untill ";
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "end_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "end_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "disabled";
            }
            // line 62
            echo "                    </td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "q", array(0 => $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "active")), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "used"), "html", null, true);
            echo " / ";
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "maxuses")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "maxuses"), "html", null, true);
            } else {
                echo "&#8734;";
            }
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 66
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/promo");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 67
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/promo_delete", array("id" => $this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "id")));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/promos");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    <tr>
                        <td colspan=\"7\">
                            ";
            // line 73
            echo gettext("The list is empty");
            // line 74
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </tbody>
            </table>
            
            ";
        // line 80
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["promos"]) ? $context["promos"] : null), "url" => "product/promos")));
        // line 81
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>";
        // line 85
        echo gettext("Create new coupon code");
        echo "</h3>
                <p>";
        // line 86
        echo gettext("Create special offers for your clients by creating coupon codes.");
        echo "</p>
            </div>
            
            <form method=\"post\" action=\"";
        // line 89
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/promo_create");
        echo "\" class=\"mainForm save api-form\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/promos");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 92
        echo gettext("Code");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"code\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 99
        echo gettext("Discount type");
        echo "</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 270px\">
                                    <input type=\"radio\" name=\"type\" value=\"absolute\" checked=\"checked\"/><label>";
        // line 103
        echo gettext("Absolute");
        echo "</label>
                                    <input type=\"radio\" name=\"type\" value=\"percentage\"/><label>";
        // line 104
        echo gettext("Percentage");
        echo "</label>
                                </li>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"value\" value=\"\" required=\"required\" placeholder=\"0\"/></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 113
        echo gettext("Recurring");
        echo "</label>
                        <div class=\"formRight moreFields\">
                            <input type=\"radio\" name=\"recurring\" value=\"1\" checked=\"checked\"/><label>Applies to first order and renewals</label>
                            <input type=\"radio\" name=\"recurring\" value=\"0\"/><label>Applies to first order only</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 122
        echo gettext("Active");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"active\" value=\"1\" checked=\"checked\"/><label>";
        // line 124
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"active\" value=\"0\"/><label>";
        // line 125
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 130
        echo gettext("Free setup");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"freesetup\" value=\"1\"/><label>";
        // line 132
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"freesetup\" value=\"0\" checked=\"checked\"/><label>";
        // line 133
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>";
        // line 140
        echo gettext("Promo code limitations");
        echo "</legend>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 143
        echo gettext("Once per client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"once_per_client\" value=\"1\" checked=\"checked\"/><label>Yes</label>
                            <input type=\"radio\" name=\"once_per_client\" value=\"0\"/><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 152
        echo gettext("Max uses (zero for unlimited)");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"maxuses\" value=\"\" class=\"dirRight\" title=\"Leave blank for unlimited uses\"  placeholder=\"0\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 159
        echo gettext("Valid time (Leave blank for undefined time)");
        echo "</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"start_at\" value=\"\" placeholder=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/></li>
                                <li class=\"sep\">-</li>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"end_at\" value=\"\" placeholder=\"";
        // line 164
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 170
        echo gettext("Products (Select none to apply to all products)");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 172
        $context["products"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_pairs");
        // line 173
        echo "                            <select name=\"products[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)), "html", null, true);
        echo "\">
                                ";
        // line 174
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["product"]) {
            // line 175
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["product"]) ? $context["product"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 182
        echo gettext("Periods (Select none to apply to all periods)");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 184
        $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
        // line 185
        echo "                            <select name=\"periods[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["periods"]) ? $context["periods"] : null)), "html", null, true);
        echo "\">
                                ";
        // line 186
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periods"]) ? $context["periods"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["period"]) {
            // line 187
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['period'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 194
        echo gettext("Client Groups (Select none to apply to all client groups)");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 196
        $context["client_groups"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs");
        // line 197
        echo "                            <select name=\"client_groups[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["groups"]) ? $context["groups"] : null)), "html", null, true);
        echo "\">
                                ";
        // line 198
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client_groups"]) ? $context["client_groups"] : null));
        foreach ($context['_seq'] as $context["id"] => $context["client_group"]) {
            // line 199
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["client_group"]) ? $context["client_group"] : null), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['client_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
        // line 219
        echo "                    <input type=\"submit\" value=\"";
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_product_promos.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 219,  523 => 201,  512 => 199,  508 => 198,  503 => 197,  501 => 196,  496 => 194,  489 => 189,  478 => 187,  474 => 186,  469 => 185,  467 => 184,  462 => 182,  455 => 177,  444 => 175,  440 => 174,  435 => 173,  433 => 172,  428 => 170,  419 => 164,  414 => 162,  408 => 159,  398 => 152,  386 => 143,  380 => 140,  370 => 133,  366 => 132,  361 => 130,  353 => 125,  349 => 124,  344 => 122,  332 => 113,  320 => 104,  316 => 103,  309 => 99,  299 => 92,  291 => 89,  285 => 86,  281 => 85,  275 => 81,  273 => 80,  268 => 77,  260 => 74,  258 => 73,  254 => 71,  243 => 67,  237 => 66,  226 => 64,  222 => 63,  219 => 62,  212 => 61,  206 => 60,  202 => 58,  195 => 56,  183 => 54,  178 => 53,  175 => 52,  168 => 50,  156 => 48,  151 => 47,  141 => 46,  137 => 45,  134 => 44,  128 => 43,  126 => 42,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  86 => 26,  75 => 18,  71 => 17,  66 => 14,  63 => 13,  56 => 9,  50 => 8,  44 => 7,  41 => 6,  38 => 5,  32 => 2,  27 => 3,);
    }
}
