<?php

/* mod_support_canned_selector.phtml */
class __TwigTemplate_aa23d7f7ce2cd24525acd3160bc32f6e0cfd731af8fbc06d456a79665d32b2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "<div class=\"canned_response\" style=\"position: relative;\">
    <select name=\"canned_response\" class=\"canned\" style=\"position: absolute; top:6px; right: 10px; margin-bottom: 10px; min-width: 50%\">
        <option value=\"\"></option>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_canned_pairs"));
        foreach ($context['_seq'] as $context["ctitle"] => $context["cat"]) {
            // line 8
            echo "            <optgroup label=\"";
            echo twig_escape_filter($this->env, (isset($context["ctitle"]) ? $context["ctitle"] : null), "html", null, true);
            echo "\">
                ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) ? $context["cat"] : null));
            foreach ($context['_seq'] as $context["mid"] => $context["mtitle"]) {
                // line 10
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mid"]) ? $context["mid"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["mtitle"]) ? $context["mtitle"] : null), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mid'], $context['mtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </optgroup>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ctitle'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </select>
</div>

<script src='js/forms/select2.min.js'></script>
<script type=\"text/javascript\">
    \$(function () {
        \$('select.canned').on(\"change\", function () {
            var id = \$(this).val();
            if (id) bb.get('admin/support/canned_get', {id: id}, function (result) {
                bb.insertToTextarea('rt', result.content)
            });
            return false;
        });
        \$(\"select.canned\").select2({
            placeholder: \"Select Canned Response\"
        });
    });
</script>
";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<link rel='stylesheet' href='css/select2.css' />
";
    }

    public function getTemplateName()
    {
        return "mod_support_canned_selector.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 2,  80 => 1,  58 => 14,  51 => 12,  40 => 10,  36 => 9,  31 => 8,  22 => 4,  20 => 1,  782 => 330,  750 => 301,  743 => 297,  719 => 275,  716 => 274,  705 => 265,  695 => 263,  693 => 262,  688 => 260,  681 => 256,  677 => 255,  673 => 254,  669 => 253,  662 => 249,  658 => 248,  651 => 246,  647 => 244,  645 => 243,  639 => 242,  632 => 237,  613 => 232,  609 => 231,  597 => 228,  589 => 227,  581 => 225,  564 => 224,  548 => 213,  541 => 208,  532 => 205,  529 => 204,  519 => 201,  515 => 200,  511 => 199,  507 => 198,  503 => 197,  500 => 196,  494 => 195,  492 => 194,  466 => 171,  462 => 170,  456 => 167,  449 => 165,  445 => 163,  427 => 159,  418 => 157,  414 => 156,  407 => 155,  390 => 154,  380 => 147,  375 => 145,  368 => 141,  363 => 139,  354 => 133,  349 => 131,  340 => 125,  335 => 123,  326 => 117,  321 => 115,  315 => 112,  304 => 103,  296 => 101,  294 => 100,  284 => 98,  274 => 96,  272 => 95,  263 => 88,  253 => 85,  249 => 84,  246 => 83,  244 => 82,  241 => 81,  231 => 78,  227 => 77,  224 => 76,  222 => 75,  219 => 74,  213 => 71,  209 => 70,  206 => 69,  204 => 68,  201 => 67,  199 => 66,  191 => 61,  187 => 60,  181 => 56,  166 => 54,  162 => 53,  157 => 51,  149 => 46,  144 => 44,  129 => 40,  125 => 39,  118 => 35,  114 => 34,  102 => 25,  94 => 24,  90 => 23,  86 => 22,  79 => 18,  74 => 15,  71 => 14,  62 => 9,  56 => 8,  50 => 7,  47 => 6,  44 => 5,  34 => 3,  29 => 13,  27 => 7,);
    }
}
