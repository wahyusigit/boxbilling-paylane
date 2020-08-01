<?php

/* 404.phtml */
class __TwigTemplate_6838f7595c014b1f9d840466622ea1c42b229c3a1434c3b6d65c329c42d2e14a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Error");
    }

    // line 5
    public function block_body_class($context, array $blocks = array())
    {
        echo "error-page";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<section class=\"error-container\">
    ";
        // line 8
        if ($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getCode")) {
            // line 9
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getCode"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 11
            echo "        <h1>404</h1>
    ";
        }
        // line 13
        echo "    <p class=\"description\">";
        echo gettext("Whoops! This is not the web page you are looking for.");
        echo "</p>
    <p class=\"alert alert-danger\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "getMessage"), "html", null, true);
        echo ".</p>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\" class=\"btn btn-alt btn-primary btn-large\" title=\"Back to Homepage\">Back to Homepage</a>
</section>
";
    }

    public function getTemplateName()
    {
        return "404.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  65 => 14,  60 => 13,  56 => 11,  50 => 9,  48 => 8,  45 => 7,  42 => 6,  36 => 5,  30 => 3,);
    }
}
