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

/* extension/module/ocinstagram.twig */
class __TwigTemplate_4900395e8026b410e7f15bccd86f49ce723c09c361bfc43c340e33e3558130b2 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-ocinstagram\" data-toggle=\"tooltip\" title=\"";
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
            echo "                    <li><a href=\"";
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
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocinstagram\" class=\"form-horizontal\">
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 31
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                            ";
        // line 32
        if (($context["error_name"] ?? null)) {
            // line 33
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                            ";
        }
        // line 35
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 38
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 41
        if (($context["status"] ?? null)) {
            // line 42
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 43
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 45
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 48
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-userid\">";
        // line 52
        echo ($context["entry_userid"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"userid\" value=\"";
        // line 54
        echo ($context["userid"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_userid"] ?? null);
        echo "\" id=\"input-userid\" class=\"form-control\" />
                            <div class=\"text-info\" style=\"margin-top: 5px;\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
        // line 55
        echo ($context["help_userid"] ?? null);
        echo "</div>
                            ";
        // line 56
        if (($context["error_userid"] ?? null)) {
            // line 57
            echo "                            <div class=\"text-danger\" style=\"margin-top: 5px;\">";
            echo ($context["error_userid"] ?? null);
            echo "</div>
                            ";
        }
        // line 59
        echo "                        </div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-access-token\">";
        // line 62
        echo ($context["entry_access_token"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"access_token\" value=\"";
        // line 64
        echo ($context["access_token"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_token"] ?? null);
        echo "\" id=\"input-access-token\" class=\"form-control\" />
                            <div class=\"text-info\" style=\"margin-top: 5px;\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
        // line 65
        echo ($context["help_access_token"] ?? null);
        echo "</div>
                            ";
        // line 66
        if (($context["error_access_token"] ?? null)) {
            // line 67
            echo "                            <div class=\"text-danger\" style=\"margin-top: 5px;\">";
            echo ($context["error_access_token"] ?? null);
            echo "</div>
                            ";
        }
        // line 69
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 72
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"limit\" value=\"";
        // line 74
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-rows\">";
        // line 78
        echo ($context["entry_rows"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"rows\" value=\"";
        // line 80
        echo ($context["rows"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rows"] ?? null);
        echo "\" id=\"input-rows\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-mode\">";
        // line 84
        echo ($context["entry_view_mode"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select class=\"form-control\" id=\"input-mode\" name=\"view_mode\">
                                <option value=\"gallery\" ";
        // line 87
        if ((($context["view_mode"] ?? null) == "gallery")) {
            echo " selected=\"selected\" ";
        }
        echo " >";
        echo ($context["text_gallery_mode"] ?? null);
        echo "</option>
                                <option value=\"slider\"  ";
        // line 88
        if ((($context["view_mode"] ?? null) == "slider")) {
            echo "  selected=\"selected\" ";
        }
        echo " >";
        echo ($context["text_slider_mode"] ?? null);
        echo "</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group mode-slider\">
                        <label class=\"col-sm-2 control-label\" for=\"input-item\">";
        // line 93
        echo ($context["entry_item"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"item\" value=\"";
        // line 95
        echo ($context["item"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_item"] ?? null);
        echo "\" id=\"input-item\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"form-group mode-slider\">
                        <label class=\"col-sm-2 control-label\" for=\"input-speed\">";
        // line 99
        echo ($context["entry_speed"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"speed\" value=\"";
        // line 101
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_speed"] ?? null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"form-group mode-slider\">
                        <label class=\"col-sm-2 control-label\" for=\"input-autoplay\">";
        // line 105
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"autoplay\" id=\"input-autoplay\" class=\"form-control\">
                                ";
        // line 108
        if (($context["autoplay"] ?? null)) {
            // line 109
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 110
            echo ($context["text_no"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 112
            echo "                                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 113
            echo ($context["text_no"] ?? null);
            echo "</option>
                                ";
        }
        // line 115
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group mode-slider\">
                        <label class=\"col-sm-2 control-label\" for=\"input-shownextback\">";
        // line 119
        echo ($context["entry_shownextback"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select id=\"input-shownextback\" name=\"shownextback\" class=\"form-control\">
                                <option value=\"0\"  ";
        // line 122
        if ((($context["shownextback"] ?? null) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo " >";
        echo ($context["text_no"] ?? null);
        echo "</option>
                                <option value=\"1\"  ";
        // line 123
        if ((($context["shownextback"] ?? null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo " >";
        echo ($context["text_yes"] ?? null);
        echo "</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group mode-slider\">
                        <label class=\"col-sm-2 control-label\" for=\"input-shownav\">";
        // line 128
        echo ($context["entry_shownav"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select id=\"input-shownav\" name=\"shownav\" class=\"form-control\">
                                <option value=\"0\"  ";
        // line 131
        if ((($context["shownav"] ?? null) == 0)) {
            echo " selected=\"selected\" ";
        }
        echo " >";
        echo ($context["text_no"] ?? null);
        echo "</option>
                                <option value=\"1\"  ";
        // line 132
        if ((($context["shownav"] ?? null) == 1)) {
            echo " selected=\"selected\" ";
        }
        echo " >";
        echo ($context["text_yes"] ?? null);
        echo "</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.mode-slider').hide();
        var view_mode = \$('#input-mode').val();
        if(view_mode == 'slider') {
            \$('.mode-slider').show();
        }

        \$('#input-mode').change(function () {
            view_mode = \$('#input-mode').val();
            if(view_mode == 'slider') {
                \$('.mode-slider').show();
            } else {
                \$('.mode-slider').hide();
            }
        })
    })
</script>
";
        // line 159
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocinstagram.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 159,  377 => 132,  369 => 131,  363 => 128,  351 => 123,  343 => 122,  337 => 119,  331 => 115,  326 => 113,  321 => 112,  316 => 110,  311 => 109,  309 => 108,  303 => 105,  294 => 101,  289 => 99,  280 => 95,  275 => 93,  263 => 88,  255 => 87,  249 => 84,  240 => 80,  235 => 78,  226 => 74,  221 => 72,  216 => 69,  210 => 67,  208 => 66,  204 => 65,  198 => 64,  193 => 62,  188 => 59,  182 => 57,  180 => 56,  176 => 55,  170 => 54,  165 => 52,  159 => 48,  154 => 46,  149 => 45,  144 => 43,  139 => 42,  137 => 41,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocinstagram.twig", "");
    }
}
