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

/* catalog/occategorythumbnail_list.twig */
class __TwigTemplate_2d9579174d5d4c3c259def9b79ca6d831860175597b9f14053e8cf2d7ea736bf extends \Twig\Template
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
            <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 19
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 20
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 24
        echo "        ";
        if (($context["information"] ?? null)) {
            // line 25
            echo "        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["information"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 29
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <td class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\">
                        <thead>
                        <tr>
                            <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "name")) {
            // line 39
            echo "                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 41
            echo "                                <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                ";
        }
        // line 42
        echo "</td>
                            <td class=\"text-center\">";
        // line 43
        echo ($context["column_thumbnail"] ?? null);
        echo "</td>
                            <td class=\"text-center\">";
        // line 44
        echo ($context["column_homethumb"] ?? null);
        echo "</td>
                            <td class=\"text-center\">";
        // line 45
        echo ($context["column_featured"] ?? null);
        echo "</td>
                            <td class=\"text-right\">";
        // line 46
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 47
            echo "                                <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 49
            echo "                                <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                                ";
        }
        // line 50
        echo "</td>
                            <td class=\"text-right\">";
        // line 51
        echo ($context["column_action"] ?? null);
        echo "</td>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 55
        if (($context["categories"] ?? null)) {
            // line 56
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 57
                echo "                            <tr>
                                <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58);
                echo "</td>
                                <td class=\"text-center\">";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumbnail_image", [], "any", false, false, false, 59)) {
                    // line 60
                    echo "                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumbnail_image", [], "any", false, false, false, 60);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60);
                    echo "\" class=\"img-thumbnail\" />
                                    ";
                } else {
                    // line 62
                    echo "                                    <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                    ";
                }
                // line 63
                echo "</td>
                                <td class=\"text-center\">";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["category"], "homethumb_image", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "homethumb_image", [], "any", false, false, false, 65);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65);
                    echo "\" class=\"img-thumbnail\" />
                                    ";
                } else {
                    // line 67
                    echo "                                    <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                    ";
                }
                // line 68
                echo "</td>
                                <td class=\"text-center\">
                                    ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "featured", [], "any", false, false, false, 70) == 1)) {
                    // line 71
                    echo "                                        <span>";
                    echo ($context["text_yes"] ?? null);
                    echo "</span>
                                    ";
                } else {
                    // line 73
                    echo "                                        <span>";
                    echo ($context["text_no"] ?? null);
                    echo "</span>
                                    ";
                }
                // line 75
                echo "                                </td>
                                <td class=\"text-right\">";
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 76);
                echo "</td>
                                <td class=\"text-right\"><a href=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 77);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                        ";
        } else {
            // line 81
            echo "                        <tr>
                            <td class=\"text-center\" colspan=\"4\">";
            // line 82
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                        </tr>
                        ";
        }
        // line 85
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 89
        echo ($context["pagination"] ?? null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 90
        echo ($context["results"] ?? null);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 96
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/occategorythumbnail_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 96,  285 => 90,  281 => 89,  275 => 85,  269 => 82,  266 => 81,  263 => 80,  252 => 77,  248 => 76,  245 => 75,  239 => 73,  233 => 71,  231 => 70,  227 => 68,  223 => 67,  215 => 65,  213 => 64,  210 => 63,  206 => 62,  198 => 60,  196 => 59,  192 => 58,  189 => 57,  184 => 56,  182 => 55,  175 => 51,  172 => 50,  164 => 49,  154 => 47,  152 => 46,  148 => 45,  144 => 44,  140 => 43,  137 => 42,  129 => 41,  119 => 39,  117 => 38,  107 => 31,  103 => 29,  95 => 25,  92 => 24,  84 => 20,  81 => 19,  73 => 15,  71 => 14,  65 => 10,  54 => 8,  50 => 7,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/occategorythumbnail_list.twig", "");
    }
}
