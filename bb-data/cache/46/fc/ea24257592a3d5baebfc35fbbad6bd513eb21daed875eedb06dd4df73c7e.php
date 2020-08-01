<?php

/* mod_product_index.phtml */
class __TwigTemplate_46fcea24257592a3d5baebfc35fbbad6bd513eb21daed875eedb06dd4df73c7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "products";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Products");
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
        echo gettext("Products");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 11
        echo gettext("New product");
        echo "</a></li>
        <li><a href=\"#tab-new-category\">";
        // line 12
        echo gettext("New category");
        echo "</a></li>
        <li><a href=\"#tab-categories\">";
        // line 13
        echo gettext("Manage categories");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "table_search"), "html", null, true);
        echo "
            <form method=\"post\" action=\"";
        // line 22
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/update_priority");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"1\">
            <fieldset>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td width=\"50%\">Title</td>
                        <td>Status</td>
                        <td>Category</td>
                        <td width=\"10%\">Type</td>
                        <td style=\"width: 5%\">";
        // line 31
        echo gettext("Priority");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 36
        $context["products"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 37
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products"]) ? $context["products"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "                    <tr>
                        <td><a href=\"";
            // line 39
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/category");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "category"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "category"), "title"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")), "method"), "html", null, true);
            echo "</td>
                        <td><input type=\"text\" name=\"priority[";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "priority"), "html", null, true);
            echo "\" style=\"width:30px;\"></td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 45
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 46
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id")));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 51
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
                
            ";
        // line 57
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["products"]) ? $context["products"] : null), "url" => "product")));
        // line 58
        echo "            
                    <input type=\"submit\" value=\"";
        // line 59
        echo gettext("Update priority");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"";
        // line 65
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/prepare");
        echo "\" class=\"mainForm\" id=\"prepare-product\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 68
        echo gettext("Type");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "type", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_get_types"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "type"), 3 => 1), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 75
        echo gettext("Category");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "product_category_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_category_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_category_id"), 3 => 1), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 82
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" placeholder=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>


                    <input type=\"submit\" value=\"";
        // line 90
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-category\">

            <form method=\"post\" action=\"";
        // line 99
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/category_create");
        echo "\" class=\"mainForm save api-form\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 102
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "cat_title"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 110
        echo gettext("Icon URL");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"icon_url\" value=\"\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 118
        echo gettext("Description");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"description\" cols=\"5\" rows=\"4\">";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "cat_description"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 125
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-categories\">
            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "product_category_get_pairs"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["cat_id"] => $context["cat_title"]) {
            // line 134
            echo "                    <tr ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "class=\"noborder\"";
            }
            echo ">
                        <td>";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["cat_title"]) ? $context["cat_title"] : null), "html", null, true);
            echo "</td>
                        <td class=\"actions\" style=\"width:13%\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 137
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/product/category");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["cat_id"]) ? $context["cat_id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 138
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/category_delete", array("id" => (isset($context["cat_id"]) ? $context["cat_id"] : null)));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 142
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 143
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_id'], $context['cat_title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </tbody>
            </table>
        </div>

    </div>

</div>

";
    }

    // line 156
    public function block_js($context, array $blocks = array())
    {
        // line 157
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#prepare-product').bind('submit', function(){
        bb.post(
            \$(this).attr('action'),
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 165
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/manage/");
        echo "/' + result);
            }
        );
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 165,  381 => 157,  378 => 156,  366 => 146,  357 => 143,  354 => 142,  335 => 138,  329 => 137,  324 => 135,  317 => 134,  299 => 133,  288 => 125,  280 => 120,  275 => 118,  264 => 110,  255 => 104,  250 => 102,  242 => 99,  230 => 90,  221 => 84,  216 => 82,  208 => 77,  203 => 75,  195 => 70,  190 => 68,  184 => 65,  175 => 59,  172 => 58,  170 => 57,  165 => 54,  156 => 51,  153 => 50,  142 => 46,  136 => 45,  129 => 43,  125 => 42,  117 => 41,  113 => 40,  105 => 39,  102 => 38,  96 => 37,  94 => 36,  86 => 31,  74 => 22,  70 => 21,  59 => 13,  55 => 12,  51 => 11,  47 => 10,  41 => 6,  38 => 5,  32 => 3,  27 => 2,);
    }
}
