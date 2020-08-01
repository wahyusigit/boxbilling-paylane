<?php

/* mod_order_new.phtml */
class __TwigTemplate_fb3c34f0ffe76b93a4c70d3d9fcd211ddf5be1afc7f85528197584e3c8491e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        $context["active_menu"] = "order";
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "    <ul>
        <li class=\"firstB\"><a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
        echo "\">";
        echo gettext("Orders");
        echo "</a></li>
        <li class=\"lastB\">";
        // line 9
        echo gettext("Create new order");
        echo "</li>
    </ul>
";
    }

    // line 13
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Create new order");
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 17
        echo gettext("Create new order");
        echo "</h5></div>
            <div class=\"help\">
                <h2>\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
        echo "\" ";
        echo gettext("for");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "</h2>
            </div>
    <form method=\"get\" action=\"";
        // line 21
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/order/create");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterOrderPlaced\">
        <fieldset>

            <div class=\"rowElem noborder\">
                <label>";
        // line 25
        echo gettext("Invoice option");
        echo "</label>
                <div class=\"formRight noborder\">
                    ";
        // line 27
        echo $context["mf"]->getselectbox("invoice_option", $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_invoice_options"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "invoice_option"));
        echo "
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <div class=\"rowElem\">
                <label>";
        // line 33
        echo gettext("Activate order");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"activate\" value=\"1\" checked=\"checked\"/><label>Yes</label>
                    <input type=\"radio\" name=\"activate\" value=\"0\" /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            ";
        // line 41
        if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "type") == "recurrent")) {
            // line 42
            echo "            <div class=\"rowElem\">
                <label>";
            // line 43
            echo gettext("Period");
            echo "</label>
                <div class=\"formRight\">
                    <select name=\"period\" id=\"period\" required=\"required\">
                        ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods"));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 47
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "recurrent"), (isset($context["val"]) ? $context["val"] : null), array(), "array"), "price"), "html", null, true);
                echo "\" data-status=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "recurrent"), (isset($context["val"]) ? $context["val"] : null), array(), "array"), "enabled"), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "period") == (isset($context["val"]) ? $context["val"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </select>
                    <span id=\"period-info\" class=\"help\"></span>
                </div>
                <div class=\"fix\"></div>
            </div>
            ";
        }
        // line 55
        echo "            
            ";
        // line 56
        $context["product_order"] = (("mod_service" . $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")) . "_order.phtml");
        // line 57
        echo "            ";
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_template_exists", array(0 => array("file" => (isset($context["product_order"]) ? $context["product_order"] : null))), "method")) {
            // line 58
            echo "                ";
            $template = $this->env->resolveTemplate((isset($context["product_order"]) ? $context["product_order"] : null));
            $template->display($context);
            // line 59
            echo "            ";
        }
        // line 60
        echo "            
            <input type=\"submit\" value=\"";
        // line 61
        echo gettext("Place new order");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\" />
        </fieldset>
    </form>
</div>

";
    }

    // line 70
    public function block_js($context, array $blocks = array())
    {
        // line 71
        echo "<script type=\"text/javascript\">

    function onAfterOrderPlaced(id) {
        bb.redirect(\"";
        // line 74
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage/");
        echo "/\"+id);
    }

    \$('#period').on('change', function(){
        var optionSelected = \$(\"option:selected\", this);
        var periodNotification = \$('#period-info');
        var spanElem = \$('<span />').css({'padding-left' : '20px', 'line-height' : '28px', 'float' : 'left'});

        periodNotification.text('');
        if (optionSelected.data('price') == 0){
            spanElem.clone().text(\"";
        // line 84
        echo gettext("Selected price is 0.00");
        echo "\").appendTo(periodNotification);
        }
        if (optionSelected.data('status') == 0){
            spanElem.clone().text(\"";
        // line 87
        echo gettext("Product is disabled in configuration");
        echo "\").appendTo(periodNotification);
        }

    });
    
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_new.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 87,  219 => 84,  206 => 74,  201 => 71,  198 => 70,  188 => 63,  184 => 62,  180 => 61,  177 => 60,  174 => 59,  170 => 58,  167 => 57,  165 => 56,  162 => 55,  154 => 49,  133 => 47,  129 => 46,  123 => 43,  120 => 42,  118 => 41,  107 => 33,  98 => 27,  93 => 25,  86 => 21,  75 => 19,  70 => 17,  67 => 16,  64 => 15,  58 => 13,  51 => 9,  45 => 8,  39 => 7,  36 => 6,  33 => 5,  28 => 3,  26 => 2,);
    }
}
