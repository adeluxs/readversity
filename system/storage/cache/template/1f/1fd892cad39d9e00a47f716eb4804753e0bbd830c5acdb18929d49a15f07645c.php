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

/* design/layout_plaza_form.twig */
class __TwigTemplate_e98ce1a897ddbd45ec272c2f04993b312bcf7c546f5a47b2e94fb2d15e29502a extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo ($context["entry_layout_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_layout_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if (($context["error_name"] ?? null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo ($context["text_default"] ?? null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 54) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 54))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 55);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 55);
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 57);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 57);
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 61);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo ($context["text_module"] ?? null);
        echo "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 83
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 88
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 88) == "column_left")) {
                // line 89
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 91
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 93
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 93);
                    echo "\">
                            ";
                    // line 94
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 95) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 95))) {
                            // line 96
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 96);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 96);
                            echo "</option>
                            ";
                        } else {
                            // line 98
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 98);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                            echo "</option>
                            ";
                        }
                        // line 100
                        echo "                            ";
                    } else {
                        // line 101
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 101));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 102
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 102) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 102))) {
                                // line 103
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 103);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 103);
                                echo "</option>
                            ";
                            } else {
                                // line 105
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 105);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 105);
                                echo "</option>
                            ";
                            }
                            // line 107
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo "                            ";
                    }
                    // line 109
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 112
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 112);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 113
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 113);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 114);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 115
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 119
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 120
                echo "                    ";
            }
            // line 121
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 129
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 129);
            echo "\">
                            ";
            // line 130
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 130)) {
                // line 131
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 131);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 131);
                echo "</option>
                            ";
            } else {
                // line 133
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 133));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 134
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 134);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 134);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                            ";
            }
            // line 137
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 141
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
\t\t\t\t<table id=\"module-block1\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 152
        echo ($context["text_block1"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 157
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 157) == "block1")) {
                // line 158
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 161
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 162
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 163
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 163);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 164
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 164)) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 165) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 165))) {
                            // line 166
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 166);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 166);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 168
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 168);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 168);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 171));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 172
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 172) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 172))) {
                                // line 173
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 173);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 173);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 175
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 175);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 175);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 177
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 179
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 182
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 182);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 183
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 183);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 184);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 185
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 190
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 191
                echo "\t\t";
            }
            // line 192
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 201
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 201);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 202
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 202)) {
                // line 203
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 203);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 203);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 205
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 205));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 206
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 206);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 206);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 209
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block1');\" data-toggle=\"tooltip\" title=\"";
        // line 213
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 223
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 228
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 228) == "content_top")) {
                // line 229
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 231
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 233
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 233);
                    echo "\">
                            ";
                    // line 234
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 234)) {
                        // line 235
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 235) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 235))) {
                            // line 236
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 236);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 236);
                            echo "</option>
                            ";
                        } else {
                            // line 238
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 238);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 238);
                            echo "</option>
                            ";
                        }
                        // line 240
                        echo "                            ";
                    } else {
                        // line 241
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 241));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 242
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 242) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 242))) {
                                // line 243
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 243);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 243);
                                echo "</option>
                            ";
                            } else {
                                // line 245
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 245);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 245);
                                echo "</option>
                            ";
                            }
                            // line 247
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 248
                        echo "                            ";
                    }
                    // line 249
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 251
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 252
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 252);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 253
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 253);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 254);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 255
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 259
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 260
                echo "                    ";
            }
            // line 261
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 268
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 269
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 269);
            echo "\">
                            ";
            // line 270
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 270)) {
                // line 271
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 271);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 271);
                echo "</option>
                            ";
            } else {
                // line 273
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 273));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 274
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 274);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 274);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "                            ";
            }
            // line 277
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 281
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 290
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 295
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 295) == "content_bottom")) {
                // line 296
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 298
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 300
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 300);
                    echo "\">
                            ";
                    // line 301
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 301)) {
                        // line 302
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 302) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 302))) {
                            // line 303
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 303);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 303);
                            echo "</option>
                            ";
                        } else {
                            // line 305
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 305);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 305);
                            echo "</option>
                            ";
                        }
                        // line 307
                        echo "                            ";
                    } else {
                        // line 308
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 308));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 309
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 309) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 309))) {
                                // line 310
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 310);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 310);
                                echo "</option>
                            ";
                            } else {
                                // line 312
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 312);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 312);
                                echo "</option>
                            ";
                            }
                            // line 314
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 315
                        echo "                            ";
                    }
                    // line 316
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 318
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 319
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 319);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 320
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 320);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 321
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 321);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 322
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 326
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 327
                echo "                    ";
            }
            // line 328
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 335
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 336
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 336);
            echo "\">
                            ";
            // line 337
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 337)) {
                // line 338
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 338);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 338);
                echo "</option>
                            ";
            } else {
                // line 340
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 340));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 341
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 341);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 341);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 343
                echo "                            ";
            }
            // line 344
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 348
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
\t\t\t\t<table id=\"module-block2\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 357
        echo ($context["text_block2"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 362
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 362) == "block2")) {
                // line 363
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 366
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 367
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 368
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 368);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 369
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 369)) {
                        // line 370
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 370) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 370))) {
                            // line 371
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 371);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 371);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 373
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 373);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 373);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 375
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 376
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 376));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 377
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 377) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 377))) {
                                // line 378
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 378);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 378);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 380
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 380);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 380);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 382
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 383
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 384
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 386
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 387
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 387);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 388
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 388);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 389
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 389);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 390
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 395
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 396
                echo "\t\t";
            }
            // line 397
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 406
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 406);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 407
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 407)) {
                // line 408
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 408);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 408);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 410
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 410));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 411
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 411);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 411);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 413
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 414
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block2');\" data-toggle=\"tooltip\" title=\"";
        // line 418
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block3\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 428
        echo ($context["text_block3"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 433
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 433) == "block3")) {
                // line 434
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 437
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 438
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 439
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 439);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 440
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 440)) {
                        // line 441
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 441) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 441))) {
                            // line 442
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 442);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 442);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 444
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 444);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 444);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 446
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 447
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 447));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 448
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 448) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 448))) {
                                // line 449
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 449);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 449);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 451
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 451);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 451);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 453
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 454
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 455
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 457
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 458
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 458);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 459
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 459);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 460
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 460);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 461
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 466
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 467
                echo "\t\t";
            }
            // line 468
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 477
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 477);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 478
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 478)) {
                // line 479
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 479);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 479);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 481
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 481));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 482
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 482);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 482);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 484
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 485
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block3');\" data-toggle=\"tooltip\" title=\"";
        // line 489
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block4\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 499
        echo ($context["text_block4"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 504
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 504) == "block4")) {
                // line 505
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 508
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 509
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 510
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 510);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 511
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 511)) {
                        // line 512
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 512) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 512))) {
                            // line 513
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 513);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 513);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 515
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 515);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 515);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 517
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 518
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 518));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 519
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 519) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 519))) {
                                // line 520
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 520);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 520);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 522
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 522);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 522);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 524
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 525
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 526
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 528
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 529
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 529);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 530
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 530);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 531
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 531);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 532
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 537
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 538
                echo "\t\t";
            }
            // line 539
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 540
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 548
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 548);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 549
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 549)) {
                // line 550
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 550);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 550);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 552
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 552));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 553
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 553);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 553);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 555
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 556
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 558
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block4');\" data-toggle=\"tooltip\" title=\"";
        // line 560
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block5\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 570
        echo ($context["text_block5"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 574
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 575
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 575) == "block5")) {
                // line 576
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 579
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 580
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 581
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 581);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 582
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 582)) {
                        // line 583
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 583) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 583))) {
                            // line 584
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 584);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 584);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 586
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 586);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 586);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 588
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 589
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 589));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 590
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 590) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 590))) {
                                // line 591
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 591);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 591);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 593
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 593);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 593);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 595
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 596
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 597
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 599
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 600
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 600);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 601
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 601);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 602
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 602);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 603
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 608
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 609
                echo "\t\t";
            }
            // line 610
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 618
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 619
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 619);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 620
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 620)) {
                // line 621
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 621);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 621);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 623
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 623));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 624
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 624);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 624);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 626
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 627
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 629
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block5');\" data-toggle=\"tooltip\" title=\"";
        // line 631
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block6\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 641
        echo ($context["text_block6"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 646
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 646) == "block6")) {
                // line 647
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 650
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 651
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 652
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 652);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 653
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 653)) {
                        // line 654
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 654) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 654))) {
                            // line 655
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 655);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 655);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 657
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 657);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 657);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 659
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 660
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 660));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 661
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 661) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 661))) {
                                // line 662
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 662);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 662);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 664
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 664);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 664);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 666
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 667
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 668
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 670
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 671
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 671);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 672
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 672);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 673
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 673);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 674
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 679
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 680
                echo "\t\t";
            }
            // line 681
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 682
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 689
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 690
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 690);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 691
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 691)) {
                // line 692
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 692);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 692);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 694
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 694));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 695
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 695);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 695);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 697
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 698
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block6');\" data-toggle=\"tooltip\" title=\"";
        // line 702
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block7\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 712
        echo ($context["text_block7"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 716
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 717
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 717) == "block7")) {
                // line 718
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 721
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 722
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 723
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 723);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 724
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 724)) {
                        // line 725
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 725) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 725))) {
                            // line 726
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 726);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 726);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 728
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 728);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 728);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 730
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 731
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 731));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 732
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 732) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 732))) {
                                // line 733
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 733);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 733);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 735
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 735);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 735);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 737
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 738
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 739
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 741
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 742
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 742);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 743
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 743);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 744
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 744);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 745
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 750
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 751
                echo "\t\t";
            }
            // line 752
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 760
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 761
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 761);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 762
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 762)) {
                // line 763
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 763);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 763);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 765
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 765));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 766
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 766);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 766);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 768
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 769
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 771
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block7');\" data-toggle=\"tooltip\" title=\"";
        // line 773
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block8\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 783
        echo ($context["text_block8"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 788
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 788) == "block8")) {
                // line 789
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 792
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 793
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 794
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 794);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 795
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 795)) {
                        // line 796
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 796) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 796))) {
                            // line 797
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 797);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 797);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 799
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 799);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 799);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 801
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 802
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 802));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 803
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 803) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 803))) {
                                // line 804
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 804);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 804);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 806
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 806);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 806);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 808
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 809
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 810
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 812
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 813
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 813);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 814
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 814);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 815
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 815);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 816
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 821
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 822
                echo "\t\t";
            }
            // line 823
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 824
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 832
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 832);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 833
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 833)) {
                // line 834
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 834);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 834);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 836
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 836));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 837
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 837);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 837);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 839
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 840
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 842
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block8');\" data-toggle=\"tooltip\" title=\"";
        // line 844
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block9\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 854
        echo ($context["text_block9"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 858
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 859
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 859) == "block9")) {
                // line 860
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 863
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 864
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 865
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 865);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 866
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 866)) {
                        // line 867
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 867) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 867))) {
                            // line 868
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 868);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 868);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 870
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 870);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 870);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 872
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 873
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 873));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 874
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 874) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 874))) {
                                // line 875
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 875);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 875);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 877
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 877);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 877);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 879
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 880
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 881
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 883
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 884
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 884);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 885
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 885);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 886
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 886);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 887
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 892
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 893
                echo "\t\t";
            }
            // line 894
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 895
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 902
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 903
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 903);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 904
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 904)) {
                // line 905
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 905);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 905);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 907
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 907));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 908
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 908);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 908);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 910
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 911
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 913
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block9');\" data-toggle=\"tooltip\" title=\"";
        // line 915
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
<table id=\"module-block10\" class=\"table table-striped table-bordered table-hover\">
\t<thead>
\t\t<tr>
\t\t\t<td class=\"text-center\">";
        // line 925
        echo ($context["text_block10"] ?? null);
        echo "</td>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 929
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 930
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 930) == "block10")) {
                // line 931
                echo "\t\t\t<tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<select name=\"layout_module[";
                // line 934
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
\t\t\t\t\t\t\t\t\t";
                // line 935
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 936
                    echo "\t\t\t\t\t\t<optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 936);
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 937
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 937)) {
                        // line 938
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 938) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 938))) {
                            // line 939
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 939);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 939);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 941
                            echo "\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 941);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 941);
                            echo "</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 943
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 944
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 944));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 945
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 945) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 945))) {
                                // line 946
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 946);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 946);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 948
                                echo "\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 948);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 948);
                                echo "</option>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 950
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 951
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 952
                    echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 954
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 955
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 955);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"layout_module[";
                // line 956
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 956);
                echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\"><a href=\"";
                // line 957
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 957);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t<button type=\"button\" onclick=\"\$('#module-row";
                // line 958
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                // line 963
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 964
                echo "\t\t";
            }
            // line 965
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 966
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<td class=\"text-left\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<select class=\"form-control input-sm\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t";
        // line 973
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 974
            echo "\t\t\t\t\t<optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 974);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 975
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 975)) {
                // line 976
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 976);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 976);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 978
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 978));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 979
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 979);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 979);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 981
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 982
            echo "\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 984
        echo "\t\t\t\t\t</select>
\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"addModule('block10');\" data-toggle=\"tooltip\" title=\"";
        // line 986
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>
\t</tfoot>
</table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 998
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 1003
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 1003) == "column_right")) {
                // line 1004
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 1006
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 1007
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 1008
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1008);
                    echo "\">
                            ";
                    // line 1009
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1009)) {
                        // line 1010
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1010) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 1010))) {
                            // line 1011
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1011);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1011);
                            echo "</option>
                            ";
                        } else {
                            // line 1013
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1013);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1013);
                            echo "</option>
                            ";
                        }
                        // line 1015
                        echo "                            ";
                    } else {
                        // line 1016
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1016));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 1017
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1017) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 1017))) {
                                // line 1018
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1018);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1018);
                                echo "</option>
                            ";
                            } else {
                                // line 1020
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1020);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1020);
                                echo "</option>
                            ";
                            }
                            // line 1022
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1023
                        echo "                            ";
                    }
                    // line 1024
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1026
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 1027
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 1027);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 1028
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 1028);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 1029
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 1029);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 1030
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 1034
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 1035
                echo "                    ";
            }
            // line 1036
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1037
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 1043
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 1044
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1044);
            echo "\">
                            ";
            // line 1045
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1045)) {
                // line 1046
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1046);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1046);
                echo "</option>
                            ";
            } else {
                // line 1048
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1048));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 1049
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1049);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1049);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1051
                echo "                            ";
            }
            // line 1052
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1054
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 1056
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 1070
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 1075
        echo ($context["text_default"] ?? null);
        echo "</option>';
\t";
        // line 1076
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1077
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1077);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1077), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1079
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 1080
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1081
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 1089
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 1094
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 1095
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1095), "js");
            echo "\">';
\t";
            // line 1096
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1096)) {
                // line 1097
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 1097);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 1097), "js");
                echo "</option>';
\t";
            } else {
                // line 1099
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 1099));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 1100
                    echo "\thtml += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 1100);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 1100), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1102
                echo "\t";
            }
            // line 1103
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1105
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 1108
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4,#module-block5,#module-block6,#module-block7,#module-block8,#module-block9,#module-block10').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 1128
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 1130
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom, #module-block1, #module-block2, #module-block3, #module-block4,#module-block5,#module-block6,#module-block7,#module-block8,#module-block9,#module-block10').trigger('change');
//--></script> 
</div>
";
        // line 1137
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/layout_plaza_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3343 => 1137,  3333 => 1130,  3328 => 1128,  3303 => 1108,  3298 => 1105,  3291 => 1103,  3288 => 1102,  3277 => 1100,  3272 => 1099,  3264 => 1097,  3262 => 1096,  3257 => 1095,  3253 => 1094,  3245 => 1089,  3234 => 1081,  3230 => 1080,  3227 => 1079,  3216 => 1077,  3212 => 1076,  3208 => 1075,  3200 => 1070,  3183 => 1056,  3179 => 1054,  3172 => 1052,  3169 => 1051,  3158 => 1049,  3153 => 1048,  3145 => 1046,  3143 => 1045,  3138 => 1044,  3134 => 1043,  3126 => 1037,  3120 => 1036,  3117 => 1035,  3115 => 1034,  3106 => 1030,  3100 => 1029,  3094 => 1028,  3088 => 1027,  3085 => 1026,  3078 => 1024,  3075 => 1023,  3069 => 1022,  3061 => 1020,  3053 => 1018,  3050 => 1017,  3045 => 1016,  3042 => 1015,  3034 => 1013,  3026 => 1011,  3023 => 1010,  3021 => 1009,  3016 => 1008,  3012 => 1007,  3008 => 1006,  3002 => 1004,  2999 => 1003,  2995 => 1002,  2988 => 998,  2973 => 986,  2969 => 984,  2962 => 982,  2959 => 981,  2948 => 979,  2943 => 978,  2935 => 976,  2933 => 975,  2928 => 974,  2924 => 973,  2915 => 966,  2909 => 965,  2906 => 964,  2904 => 963,  2894 => 958,  2888 => 957,  2882 => 956,  2876 => 955,  2873 => 954,  2866 => 952,  2863 => 951,  2857 => 950,  2849 => 948,  2841 => 946,  2838 => 945,  2833 => 944,  2830 => 943,  2822 => 941,  2814 => 939,  2811 => 938,  2809 => 937,  2804 => 936,  2800 => 935,  2796 => 934,  2789 => 931,  2786 => 930,  2782 => 929,  2775 => 925,  2762 => 915,  2758 => 913,  2751 => 911,  2748 => 910,  2737 => 908,  2732 => 907,  2724 => 905,  2722 => 904,  2717 => 903,  2713 => 902,  2704 => 895,  2698 => 894,  2695 => 893,  2693 => 892,  2683 => 887,  2677 => 886,  2671 => 885,  2665 => 884,  2662 => 883,  2655 => 881,  2652 => 880,  2646 => 879,  2638 => 877,  2630 => 875,  2627 => 874,  2622 => 873,  2619 => 872,  2611 => 870,  2603 => 868,  2600 => 867,  2598 => 866,  2593 => 865,  2589 => 864,  2585 => 863,  2578 => 860,  2575 => 859,  2571 => 858,  2564 => 854,  2551 => 844,  2547 => 842,  2540 => 840,  2537 => 839,  2526 => 837,  2521 => 836,  2513 => 834,  2511 => 833,  2506 => 832,  2502 => 831,  2493 => 824,  2487 => 823,  2484 => 822,  2482 => 821,  2472 => 816,  2466 => 815,  2460 => 814,  2454 => 813,  2451 => 812,  2444 => 810,  2441 => 809,  2435 => 808,  2427 => 806,  2419 => 804,  2416 => 803,  2411 => 802,  2408 => 801,  2400 => 799,  2392 => 797,  2389 => 796,  2387 => 795,  2382 => 794,  2378 => 793,  2374 => 792,  2367 => 789,  2364 => 788,  2360 => 787,  2353 => 783,  2340 => 773,  2336 => 771,  2329 => 769,  2326 => 768,  2315 => 766,  2310 => 765,  2302 => 763,  2300 => 762,  2295 => 761,  2291 => 760,  2282 => 753,  2276 => 752,  2273 => 751,  2271 => 750,  2261 => 745,  2255 => 744,  2249 => 743,  2243 => 742,  2240 => 741,  2233 => 739,  2230 => 738,  2224 => 737,  2216 => 735,  2208 => 733,  2205 => 732,  2200 => 731,  2197 => 730,  2189 => 728,  2181 => 726,  2178 => 725,  2176 => 724,  2171 => 723,  2167 => 722,  2163 => 721,  2156 => 718,  2153 => 717,  2149 => 716,  2142 => 712,  2129 => 702,  2125 => 700,  2118 => 698,  2115 => 697,  2104 => 695,  2099 => 694,  2091 => 692,  2089 => 691,  2084 => 690,  2080 => 689,  2071 => 682,  2065 => 681,  2062 => 680,  2060 => 679,  2050 => 674,  2044 => 673,  2038 => 672,  2032 => 671,  2029 => 670,  2022 => 668,  2019 => 667,  2013 => 666,  2005 => 664,  1997 => 662,  1994 => 661,  1989 => 660,  1986 => 659,  1978 => 657,  1970 => 655,  1967 => 654,  1965 => 653,  1960 => 652,  1956 => 651,  1952 => 650,  1945 => 647,  1942 => 646,  1938 => 645,  1931 => 641,  1918 => 631,  1914 => 629,  1907 => 627,  1904 => 626,  1893 => 624,  1888 => 623,  1880 => 621,  1878 => 620,  1873 => 619,  1869 => 618,  1860 => 611,  1854 => 610,  1851 => 609,  1849 => 608,  1839 => 603,  1833 => 602,  1827 => 601,  1821 => 600,  1818 => 599,  1811 => 597,  1808 => 596,  1802 => 595,  1794 => 593,  1786 => 591,  1783 => 590,  1778 => 589,  1775 => 588,  1767 => 586,  1759 => 584,  1756 => 583,  1754 => 582,  1749 => 581,  1745 => 580,  1741 => 579,  1734 => 576,  1731 => 575,  1727 => 574,  1720 => 570,  1707 => 560,  1703 => 558,  1696 => 556,  1693 => 555,  1682 => 553,  1677 => 552,  1669 => 550,  1667 => 549,  1662 => 548,  1658 => 547,  1649 => 540,  1643 => 539,  1640 => 538,  1638 => 537,  1628 => 532,  1622 => 531,  1616 => 530,  1610 => 529,  1607 => 528,  1600 => 526,  1597 => 525,  1591 => 524,  1583 => 522,  1575 => 520,  1572 => 519,  1567 => 518,  1564 => 517,  1556 => 515,  1548 => 513,  1545 => 512,  1543 => 511,  1538 => 510,  1534 => 509,  1530 => 508,  1523 => 505,  1520 => 504,  1516 => 503,  1509 => 499,  1496 => 489,  1492 => 487,  1485 => 485,  1482 => 484,  1471 => 482,  1466 => 481,  1458 => 479,  1456 => 478,  1451 => 477,  1447 => 476,  1438 => 469,  1432 => 468,  1429 => 467,  1427 => 466,  1417 => 461,  1411 => 460,  1405 => 459,  1399 => 458,  1396 => 457,  1389 => 455,  1386 => 454,  1380 => 453,  1372 => 451,  1364 => 449,  1361 => 448,  1356 => 447,  1353 => 446,  1345 => 444,  1337 => 442,  1334 => 441,  1332 => 440,  1327 => 439,  1323 => 438,  1319 => 437,  1312 => 434,  1309 => 433,  1305 => 432,  1298 => 428,  1285 => 418,  1281 => 416,  1274 => 414,  1271 => 413,  1260 => 411,  1255 => 410,  1247 => 408,  1245 => 407,  1240 => 406,  1236 => 405,  1227 => 398,  1221 => 397,  1218 => 396,  1216 => 395,  1206 => 390,  1200 => 389,  1194 => 388,  1188 => 387,  1185 => 386,  1178 => 384,  1175 => 383,  1169 => 382,  1161 => 380,  1153 => 378,  1150 => 377,  1145 => 376,  1142 => 375,  1134 => 373,  1126 => 371,  1123 => 370,  1121 => 369,  1116 => 368,  1112 => 367,  1108 => 366,  1101 => 363,  1098 => 362,  1094 => 361,  1087 => 357,  1075 => 348,  1071 => 346,  1064 => 344,  1061 => 343,  1050 => 341,  1045 => 340,  1037 => 338,  1035 => 337,  1030 => 336,  1026 => 335,  1018 => 329,  1012 => 328,  1009 => 327,  1007 => 326,  998 => 322,  992 => 321,  986 => 320,  980 => 319,  977 => 318,  970 => 316,  967 => 315,  961 => 314,  953 => 312,  945 => 310,  942 => 309,  937 => 308,  934 => 307,  926 => 305,  918 => 303,  915 => 302,  913 => 301,  908 => 300,  904 => 299,  900 => 298,  894 => 296,  891 => 295,  887 => 294,  880 => 290,  868 => 281,  864 => 279,  857 => 277,  854 => 276,  843 => 274,  838 => 273,  830 => 271,  828 => 270,  823 => 269,  819 => 268,  811 => 262,  805 => 261,  802 => 260,  800 => 259,  791 => 255,  785 => 254,  779 => 253,  773 => 252,  770 => 251,  763 => 249,  760 => 248,  754 => 247,  746 => 245,  738 => 243,  735 => 242,  730 => 241,  727 => 240,  719 => 238,  711 => 236,  708 => 235,  706 => 234,  701 => 233,  697 => 232,  693 => 231,  687 => 229,  684 => 228,  680 => 227,  673 => 223,  660 => 213,  656 => 211,  649 => 209,  646 => 208,  635 => 206,  630 => 205,  622 => 203,  620 => 202,  615 => 201,  611 => 200,  602 => 193,  596 => 192,  593 => 191,  591 => 190,  581 => 185,  575 => 184,  569 => 183,  563 => 182,  560 => 181,  553 => 179,  550 => 178,  544 => 177,  536 => 175,  528 => 173,  525 => 172,  520 => 171,  517 => 170,  509 => 168,  501 => 166,  498 => 165,  496 => 164,  491 => 163,  487 => 162,  483 => 161,  476 => 158,  473 => 157,  469 => 156,  462 => 152,  448 => 141,  444 => 139,  437 => 137,  434 => 136,  423 => 134,  418 => 133,  410 => 131,  408 => 130,  403 => 129,  399 => 128,  391 => 122,  385 => 121,  382 => 120,  380 => 119,  371 => 115,  365 => 114,  359 => 113,  353 => 112,  350 => 111,  343 => 109,  340 => 108,  334 => 107,  326 => 105,  318 => 103,  315 => 102,  310 => 101,  307 => 100,  299 => 98,  291 => 96,  288 => 95,  286 => 94,  281 => 93,  277 => 92,  273 => 91,  267 => 89,  264 => 88,  260 => 87,  253 => 83,  246 => 78,  244 => 77,  240 => 76,  231 => 70,  225 => 66,  219 => 65,  217 => 64,  210 => 62,  202 => 61,  199 => 60,  193 => 59,  185 => 57,  177 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  157 => 50,  152 => 49,  150 => 48,  142 => 43,  138 => 42,  131 => 37,  125 => 35,  123 => 34,  117 => 33,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/layout_plaza_form.twig", "");
    }
}
