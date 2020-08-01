<?php

/* mod_support_public_tickets.phtml */
class __TwigTemplate_d830c29ee2563cc36d76c66bfdb3a676fa9c9ccc80819c4114a0ab72e286b734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "support";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Public tickets";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_public_ticket_get_statuses");
        // line 7
        echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-tickets", array("status" => "open"));
        echo "\" class=\"count green\" title=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open"), "html", null, true);
        echo "</a><span>";
        echo gettext("Tickets waiting for staff reply");
        echo "</span></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-tickets", array("status" => "on_hold"));
        echo "\" class=\"count blue\" title=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold"), "html", null, true);
        echo "</a><span>";
        echo gettext("Tickets waiting for client reply");
        echo "</span></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-tickets", array("status" => "closed"));
        echo "\" class=\"count grey\" title=\"\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed"), "html", null, true);
        echo "</a><span>";
        echo gettext("Solved tickets");
        echo "</span></li>
        <li class=\"last\"><a href=\"";
        // line 12
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-tickets");
        echo "\" class=\"count grey\" title=\"\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "open") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "on_hold")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "closed")), "html", null, true);
        echo "</a><span>";
        echo gettext("Total");
        echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>

<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">";
        // line 18
        echo gettext("Public tickets");
        echo "</h5></div>

";
        // line 20
        echo $context["mf"]->gettable_search();
        echo "
<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
            <td style=\"width: 50%\">";
        // line 25
        echo gettext("Subject");
        echo "</td>
            <td>";
        // line 26
        echo gettext("Email");
        echo "</td>
            <td>";
        // line 27
        echo gettext("Status");
        echo "</td>
            <td>";
        // line 28
        echo gettext("Date");
        echo "</td>
            <td style=\"width: 5%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
    ";
        // line 34
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_public_ticket_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 35
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 36
            echo "    <tr>
        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"/></td>
        <td><a href=\"";
            // line 38
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/public-ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "messages")), "html", null, true);
            echo ")</a></td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "author_email"), "html", null, true);
            echo "</td>
        <td>";
            // line 40
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</td>
        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "updated_at"), "Y-m-d"), "html", null, true);
            echo "</td>
        <td class=\"actions\">
            <a class=\"bb-button btn14\" href=\"";
            // line 43
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/public-ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "        <tr>
            <td colspan=\"5\">
                ";
            // line 49
            echo gettext("The list is empty");
            // line 50
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </tbody>
</table>
</div>
";
        // line 56
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/support/batch_delete_public")));
        // line 57
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["tickets"]) ? $context["tickets"] : null), "url" => "support/public-tickets")));
        // line 58
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_support_public_tickets.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 58,  189 => 57,  187 => 56,  182 => 53,  174 => 50,  172 => 49,  168 => 47,  157 => 43,  152 => 41,  148 => 40,  144 => 39,  132 => 38,  128 => 37,  125 => 36,  119 => 35,  117 => 34,  108 => 28,  104 => 27,  100 => 26,  96 => 25,  88 => 20,  83 => 18,  70 => 12,  62 => 11,  54 => 10,  46 => 9,  42 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 4,  24 => 2,);
    }
}
