<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/payment/paystack.twig */
class __TwigTemplate_1871919a75297e377ae05d01895a3715248b0a0743c4cdbdcdc96d74cdcb745b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
";
        // line 2
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-pp-std-uk\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button> <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>
";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\t</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
\t\t\t\t<li><a href=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 20
        if (($context["error_warning"] ?? null)) {
            echo " 
\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo ($context["error_warning"] ?? null);
            echo "
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 24
        echo " 
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t<i class=\"fa fa-pencil\"></i> 
\t\t\t\t\t";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-pp-std-uk\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_general"] ?? null);
        echo "
\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-status\" data-toggle=\"tab\">";
        // line 37
        echo ($context["tab_order_status"] ?? null);
        echo "
\t\t\t\t\t\t</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-test-secret\">";
        // line 43
        echo ($context["entry_test_secret"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paystack_test_secret\" value=\"";
        // line 46
        echo ($context["payment_paystack_test_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_test_secret"] ?? null);
        echo "\" id=\"entry-test-secret\" class=\"form-control\" />

\t\t\t\t\t\t\t\t\t";
        // line 48
        if (( !($context["payment_paystack_live"] ?? null) && ($context["error_keys"] ?? null))) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 50
            echo ($context["error_keys"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-test-public\">";
        // line 56
        echo ($context["entry_test_public"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paystack_test_public\" value=\"";
        // line 59
        echo ($context["payment_paystack_test_public"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_test_public"] ?? null);
        echo "\" id=\"entry-test-public\" class=\"form-control\" />

\t\t\t\t\t\t\t\t\t";
        // line 61
        if (( !($context["payment_paystack_live"] ?? null) && ($context["error_keys"] ?? null))) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 63
            echo ($context["error_keys"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-live-demo\"><span data-toggle=\"tooltip\" title=\"";
        // line 69
        echo ($context["help_live"] ?? null);
        echo "\">";
        echo ($context["entry_live"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</span></label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paystack_live\" id=\"input-live-demo\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 73
        echo ((($context["payment_paystack_live"] ?? null)) ? ("selected=\"selected\"") : (""));
        echo "> ";
        echo ($context["text_yes"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 75
        echo ((($context["payment_paystack_live"] ?? null)) ? ("") : ("selected=\"selected\""));
        echo "> ";
        echo ($context["text_no"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-live-secret\">";
        // line 81
        echo ($context["entry_live_secret"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paystack_live_secret\" value=\"";
        // line 84
        echo ($context["payment_paystack_live_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_live_secret"] ?? null);
        echo "\" id=\"entry-live-secret\" class=\"form-control\" />

\t\t\t\t\t\t\t\t\t";
        // line 86
        if ((($context["payment_paystack_live"] ?? null) && ($context["error_keys"] ?? null))) {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 88
            echo ($context["error_keys"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"entry-live-public\"> ";
        // line 94
        echo ($context["entry_live_public"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paystack_live_public\" value=\"";
        // line 97
        echo ($context["payment_paystack_live_public"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_live_public"] ?? null);
        echo "\" id=\"entry-live-public\" class=\"form-control\" />

\t\t\t\t\t\t\t\t\t";
        // line 99
        if ((($context["payment_paystack_live"] ?? null) && ($context["error_keys"] ?? null))) {
            // line 100
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">
\t\t\t\t\t\t\t\t\t";
            // line 101
            echo ($context["error_keys"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 107
        echo ($context["help_debug"] ?? null);
        echo "\"> ";
        echo ($context["entry_debug"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</span></label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paystack_debug\" id=\"input-debug\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 111
        if (($context["payment_paystack_debug"] ?? null)) {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\"> ";
            echo ($context["text_enabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\"> ";
            // line 114
            echo ($context["text_disabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\"> ";
            echo ($context["text_enabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\"> ";
            // line 119
            echo ($context["text_disabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 126
        echo ($context["help_total"] ?? null);
        echo "\"> ";
        echo ($context["entry_total"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</span></label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paystack_total\" value=\"";
        // line 129
        echo ($context["payment_paystack_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">
\t\t\t\t\t\t\t\t";
        // line 134
        echo ($context["entry_sort_order"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paystack_sort_order\" value=\"";
        // line 137
        echo ($context["payment_paystack_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">
\t\t\t\t\t\t\t\t";
        // line 142
        echo ($context["entry_geo_zone"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paystack_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">
\t\t\t\t\t\t\t\t\t\t";
        // line 147
        echo ($context["text_all_zones"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zone"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zones"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["geo_zone"] ?? null), "geo_zone_id", [], "any", false, false, false, 150) == ($context["payment_paystack_geo_zone_id"] ?? null))) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["geo_zone"] ?? null), "geo_zone_id", [], "any", false, false, false, 151);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, ($context["geo_zone"] ?? null), "name", [], "any", false, false, false, 151);
                echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["geo_zone"] ?? null), "geo_zone_id", [], "any", false, false, false, 154);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, ($context["geo_zone"] ?? null), "name", [], "any", false, false, false, 154);
                echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 162
        echo ($context["entry_status"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paystack_status\" id=\"input-status\" class=\"form-control\">

\t\t\t\t\t\t\t\t";
        // line 167
        if (($context["payment_paystack_status"] ?? null)) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 170
            echo ($context["text_disabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 175
            echo ($context["text_disabled"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-status\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 184
        echo ($context["entry_order_status"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paystack_order_status_id\" id=\"input-order-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 189) == ($context["payment_paystack_order_status_id"] ?? null))) {
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 190);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 190);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 192
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 192);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 192);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 194
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-pending-status\">";
        // line 199
        echo ($context["entry_pending_status"] ?? null);
        echo "
\t\t\t\t\t\t\t\t</label> 
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paystack_pending_status_id\" id=\"input-pending-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 204) == ($context["payment_paystack_pending_status_id"] ?? null))) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 205);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 205);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 207);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 207);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-canceled-status\">";
        // line 214
        echo ($context["entry_canceled_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"payment_paystack_canceled_status_id\" id=\"input-canceled-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 218
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 218) == ($context["payment_paystack_canceled_status_id"] ?? null))) {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 219);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 219);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 221
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 221);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 221);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 223
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-failed-status\">";
        // line 228
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"payment_paystack_failed_status_id\" id=\"input-failed-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 232
            echo "\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 232) == ($context["payment_paystack_failed_status_id"] ?? null))) {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 233);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 233);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 235
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 235);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 235);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 237
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"color:#222222;text-align:center;\">
\t\t\t<a href=\"http://www.paystack.com\" target=\"_blank\">";
        // line 247
        echo ($context["heading_title"] ?? null);
        echo "
\t\t\tv1.0.0</a>
\t\t</div>
\t</div>
</div>

";
        // line 253
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/paystack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 253,  613 => 247,  602 => 238,  596 => 237,  588 => 235,  580 => 233,  577 => 232,  573 => 231,  567 => 228,  561 => 224,  555 => 223,  547 => 221,  539 => 219,  536 => 218,  532 => 217,  526 => 214,  520 => 210,  514 => 209,  506 => 207,  498 => 205,  495 => 204,  491 => 203,  484 => 199,  478 => 195,  472 => 194,  464 => 192,  456 => 190,  453 => 189,  449 => 188,  442 => 184,  434 => 178,  428 => 175,  422 => 173,  416 => 170,  410 => 168,  408 => 167,  400 => 162,  394 => 158,  388 => 157,  379 => 154,  370 => 151,  367 => 150,  363 => 149,  358 => 147,  350 => 142,  340 => 137,  334 => 134,  324 => 129,  316 => 126,  310 => 122,  304 => 119,  298 => 117,  292 => 114,  286 => 112,  284 => 111,  275 => 107,  270 => 104,  264 => 101,  261 => 100,  259 => 99,  252 => 97,  246 => 94,  241 => 91,  235 => 88,  232 => 87,  230 => 86,  223 => 84,  217 => 81,  206 => 75,  199 => 73,  190 => 69,  185 => 66,  179 => 63,  176 => 62,  174 => 61,  167 => 59,  161 => 56,  156 => 53,  150 => 50,  147 => 49,  145 => 48,  138 => 46,  132 => 43,  123 => 37,  118 => 35,  113 => 33,  106 => 29,  99 => 24,  92 => 21,  88 => 20,  81 => 15,  71 => 14,  65 => 13,  59 => 10,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/paystack.twig", "");
    }
}
