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

/* extension/module/octwitter.twig */
class __TwigTemplate_54f5f0260efc3d9707338b01b53a8ce92005338b1fdd939baa219442ba86abbc extends \Twig\Template
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
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
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
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"module_octwitter_status\" id=\"input-status\" class=\"form-control\">
                                ";
        // line 32
        if (($context["module_octwitter_status"] ?? null)) {
            // line 33
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 36
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 39
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-id\">";
        // line 44
        echo ($context["entry_id"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_octwitter_id\" value=\"";
        // line 46
        echo ($context["module_octwitter_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_id"] ?? null);
        echo "\" id=\"input-id\" class=\"form-control\" />
                            ";
        // line 47
        if (($context["error_id"] ?? null)) {
            // line 48
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_id"] ?? null);
            echo "</div>
                            ";
        }
        // line 50
        echo "                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 54
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_octwitter_limit\" value=\"";
        // line 56
        echo ($context["module_octwitter_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-show-time\">";
        // line 61
        echo ($context["entry_show_time"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <select name=\"module_octwitter_show_time\" id=\"input-show-time\" class=\"form-control\">
                                ";
        // line 64
        if (($context["module_octwitter_show_time"] ?? null)) {
            // line 65
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\">";
            // line 66
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        } else {
            // line 68
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    <option value=\"0\" selected=\"selected\">";
            // line 69
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                ";
        }
        // line 71
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-consumer-key\">";
        // line 76
        echo ($context["entry_consumer_key"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_octwitter_consumer_key\" value=\"";
        // line 78
        echo ($context["module_octwitter_consumer_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_consumer_key"] ?? null);
        echo "\" id=\"input-consumer-key\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-consumer-secret\">";
        // line 83
        echo ($context["entry_consumer_secret"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_octwitter_consumer_secret\" value=\"";
        // line 85
        echo ($context["module_octwitter_consumer_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_consumer_secret"] ?? null);
        echo "\" id=\"input-consumer-secret\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-access-token\">";
        // line 90
        echo ($context["entry_access_token"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_octwitter_access_token\" value=\"";
        // line 92
        echo ($context["module_octwitter_access_token"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_token"] ?? null);
        echo "\" id=\"input-access-token\" class=\"form-control\" />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-access-token-secret\">";
        // line 97
        echo ($context["entry_access_token_secret"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"module_octwitter_access_token_secret\" value=\"";
        // line 99
        echo ($context["module_octwitter_access_token_secret"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_token_secret"] ?? null);
        echo "\" id=\"input-access-token-secret\" class=\"form-control\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 107
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/octwitter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 107,  267 => 99,  262 => 97,  252 => 92,  247 => 90,  237 => 85,  232 => 83,  222 => 78,  217 => 76,  210 => 71,  205 => 69,  200 => 68,  195 => 66,  190 => 65,  188 => 64,  182 => 61,  172 => 56,  167 => 54,  161 => 50,  155 => 48,  153 => 47,  147 => 46,  142 => 44,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/octwitter.twig", "");
    }
}
