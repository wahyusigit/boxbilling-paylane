<?php

/* mod_product_category.phtml */
class __TwigTemplate_72657d19a8f07ef49f23c98075cfa722aed432a56d329e922811552d783b444e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
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
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
        echo "\">";
        echo gettext("Products");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product");
        echo "#tab-categories\">";
        echo gettext("Categories");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"widget\">
    
    <div class=\"head\">
        <h5>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "</h5>
    </div>
    
    <form method=\"post\" action=\"";
        // line 22
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/product/category_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"";
        echo gettext("Category updated");
        echo "\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 25
        echo gettext("Title");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"title\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <div class=\"rowElem\">
                <label>";
        // line 33
        echo gettext("Icon");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"icon_url\" id=\"bb-icon\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon_url"), "html", null, true);
        echo "\" style=\"width: 80%\"/>
                    <input type=\"button\" value=\"";
        // line 36
        echo gettext("Browse");
        echo "\" class=\"bHtml blueBtn button\" />
                </div>
                <div class=\"fix\"></div>
            </div>

            <textarea name=\"description\" cols=\"5\" rows=\"20\" class=\"bb-textarea\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description"), "html", null, true);
        echo "</textarea>

            <input type=\"submit\" value=\"";
        // line 43
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    // line 51
    public function block_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "bb_editor", array(0 => ".bb-textarea"), "method"), "html", null, true);
    }

    // line 53
    public function block_js($context, array $blocks = array())
    {
        // line 54
        echo "<script type=\"text/javascript\">
\$(function() {
\t\$(\".bHtml\").click( function() {
\t\tjAlert(bb.load('";
        // line 57
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("filemanager/icons");
        echo "', {rel:\"bb-icon\"}), '";
        echo gettext("Select icon and click OK");
        echo "');
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_product_category.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  152 => 54,  149 => 53,  143 => 51,  133 => 44,  129 => 43,  124 => 41,  116 => 36,  112 => 35,  107 => 33,  98 => 27,  93 => 25,  85 => 22,  79 => 19,  74 => 16,  71 => 15,  64 => 11,  58 => 10,  52 => 9,  46 => 8,  43 => 7,  40 => 6,  34 => 3,  29 => 2,);
    }
}
