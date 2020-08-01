<?php

/* partial_pagination.phtml */
class __TwigTemplate_093a04788adcf7bcc7fccf8dcf49b21fa5e382cbb0b05ef85136a4b767f4cb34 extends Twig_Template
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
        if (($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages") > 1)) {
            // line 2
            $context["currentPage"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), 1)) : (1));
            // line 3
            $context["paginator"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_paginator", array(0 => array("total" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "total"), "page" => (isset($context["currentPage"]) ? $context["currentPage"] : null), "per_page" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "per_page"))), "method");
            // line 4
            echo "
<div class=\"pagination\">
    <ul class=\"pages\">
        ";
            // line 7
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != 1)) {
                // line 8
                echo "        <li class=\"prev\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1))));
                echo "\"><</a></li>
        ";
            }
            // line 10
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) != 1)) {
                // line 11
                echo "            <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), array("page" => 1));
                echo "\" >1</a></li>
        ";
            }
            // line 13
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "start"), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "end")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "
            ";
                // line 15
                if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) > 2) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0)))) {
                    // line 16
                    echo "                ...
            ";
                }
                // line 18
                echo "
            ";
                // line 19
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage"))) {
                    // line 20
                    echo "                <li><a class=\"active\" href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 22
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => (isset($context["i"]) ? $context["i"] : null))));
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array") < ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages") - 1)) && ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "end") == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array")))) {
                // line 27
                echo "            ...
            <li><a href=\"";
                // line 28
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))));
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))) {
                // line 32
                echo "        <li class=\"next\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1))));
                echo "\">></a></li>
        ";
            }
            // line 34
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  104 => 31,  94 => 28,  91 => 27,  86 => 25,  72 => 22,  64 => 19,  57 => 16,  52 => 14,  47 => 13,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  19 => 1,  511 => 228,  476 => 195,  473 => 194,  467 => 190,  464 => 189,  452 => 179,  444 => 174,  440 => 173,  435 => 171,  429 => 168,  424 => 165,  421 => 164,  419 => 163,  414 => 160,  405 => 157,  402 => 156,  393 => 152,  387 => 151,  382 => 149,  374 => 148,  370 => 147,  366 => 146,  360 => 145,  350 => 144,  340 => 143,  336 => 142,  333 => 141,  327 => 140,  325 => 139,  317 => 134,  313 => 133,  309 => 132,  305 => 131,  301 => 130,  293 => 125,  283 => 118,  279 => 117,  273 => 113,  270 => 112,  265 => 109,  253 => 104,  245 => 103,  237 => 102,  229 => 101,  225 => 99,  223 => 98,  213 => 91,  199 => 84,  190 => 82,  184 => 79,  181 => 78,  169 => 62,  161 => 61,  153 => 60,  145 => 59,  140 => 57,  131 => 51,  126 => 49,  117 => 43,  114 => 42,  106 => 32,  103 => 39,  101 => 30,  97 => 37,  89 => 26,  80 => 24,  75 => 24,  66 => 20,  61 => 18,  55 => 15,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  34 => 12,  29 => 4,  27 => 2,);
    }
}
