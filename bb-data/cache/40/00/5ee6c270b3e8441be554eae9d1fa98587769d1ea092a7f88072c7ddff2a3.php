<?php

/* partial_batch_delete.phtml */
class __TwigTemplate_40005ee6c270b3e8441be554eae9d1fa98587769d1ea092a7f88072c7ddff2a3 extends Twig_Template
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
        echo "<a class=\"bb-button btn14\" id=\"batch-delete-selected-btn\" style=\"margin: 10px\"><img src=\"images/icons/dark/trash.png\" alt=\"\" > ";
        echo gettext("Delete selected");
        echo "</a>
<script type=\"text/javascript\">
    \$(function () {
        \$('#batch-delete-selected-btn').click(function () {
            if (\$('input.batch-delete-checkbox:checked').length) {
                jConfirm('Are you sure?', 'Confirm Batch Delete', function (r) {
                    if (r) {
                        var ids = \$('input.batch-delete-checkbox:checked').map(function () {
                            return \$(this).attr(\"data-item-id\");
                        }).get();
                        bb.post(
                            '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "',
                            {ids: ids},
                            function (result) {
                                bb.reload();
                            })
                    }
                });
            } else {
                jAlert('You need to select at least one item to delete');
            }

        });

        \$('input.batch-delete-master-checkbox').click(function () {
            \$('input.batch-delete-checkbox').prop('checked', this.checked);
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "partial_batch_delete.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  511 => 228,  476 => 195,  473 => 194,  467 => 190,  464 => 189,  452 => 179,  444 => 174,  440 => 173,  435 => 171,  429 => 168,  424 => 165,  421 => 164,  419 => 163,  414 => 160,  405 => 157,  402 => 156,  393 => 152,  387 => 151,  382 => 149,  374 => 148,  370 => 147,  366 => 146,  360 => 145,  350 => 144,  340 => 143,  336 => 142,  333 => 141,  327 => 140,  325 => 139,  317 => 134,  313 => 133,  309 => 132,  305 => 131,  301 => 130,  293 => 125,  283 => 118,  279 => 117,  273 => 113,  270 => 112,  265 => 109,  253 => 104,  245 => 103,  237 => 102,  229 => 101,  225 => 99,  223 => 98,  213 => 91,  199 => 84,  190 => 82,  184 => 79,  181 => 78,  169 => 62,  161 => 61,  153 => 60,  145 => 59,  140 => 57,  131 => 51,  126 => 49,  117 => 43,  114 => 42,  106 => 40,  103 => 39,  101 => 38,  97 => 37,  89 => 32,  80 => 26,  75 => 24,  66 => 18,  61 => 16,  55 => 13,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  34 => 12,  29 => 4,  27 => 2,);
    }
}
