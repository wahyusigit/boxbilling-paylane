<?php

/* mod_news_index.phtml */
class __TwigTemplate_e8b5480a02021001464883df420522a2507429f2df5dfcc79b2c01f95b9cc1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Blog");
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo gettext("Blog");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <div class=\"row-fluid\"></div>
                <h1>";
        // line 12
        echo gettext("News & Announcements");
        echo "</h1>
                <p>";
        // line 13
        echo gettext("Track our latest information.");
        echo "</p>
            </header>
            <section>
                ";
        // line 16
        $context["posts"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "news_get_list", array(0 => array("page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "per_page" => 5)), "method");
        // line 17
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "list"));
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
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 18
            echo "                <div class=\"article";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo " last";
            }
            echo " data-container\">
                    <header>
                        <h2><a href=\"";
            // line 20
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a></h2>
                        <div class=\"pull-right\"><h5>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "updated_at")), "html", null, true);
            echo "</h5></div>
                    </header>
                   <section>
                       ";
            // line 24
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt")) {
                // line 25
                echo "                            ";
                echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt"));
                echo "
                       ";
            } else {
                // line 27
                echo "                            ";
                echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content"));
                echo "
                       ";
            }
            // line 29
            echo "                   </section>
                    <a class=\"btn btn-primary btn-small read_more\" href=\"";
            // line 30
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"), "html", null, true);
            echo "\">";
            echo gettext("Read more ...");
            echo "</a>
                </div>
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
            // line 33
            echo "                <p>The list is empty</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </section>
        </div>
        ";
        // line 37
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["posts"]) ? $context["posts"] : null))));
        // line 38
        echo "    </article>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  151 => 37,  147 => 35,  140 => 33,  120 => 30,  117 => 29,  111 => 27,  105 => 25,  103 => 24,  97 => 21,  89 => 20,  81 => 18,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  43 => 7,  40 => 6,  34 => 4,  28 => 3,);
    }
}
