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

/* catalog/octestimonial_list.twig */
class __TwigTemplate_9dbba604bbe3fe26f0e901eb77697d1d214337773361b037f21390be251457db extends \Twig\Template
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
            <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["insert"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-information').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
             <ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t  </ul>
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
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-information\">
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t<td class=\"text-left\">";
        // line 33
        echo ($context["entry_name"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
        // line 34
        echo ($context["column_sort_order"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
        // line 35
        echo ($context["column_status"] ?? null);
        echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
        // line 36
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 40
        if (($context["testimonials"] ?? null)) {
            // line 41
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 42
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">\t";
                // line 43
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["testimonial"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["selected"] ?? null) : null)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["testimonial"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["testimonial_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["testimonial"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["testimonial_id"] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "</td>
\t\t\t\t\t\t<td class=\"text-left\">";
                // line 48
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["testimonial"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["customer_name"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
                // line 49
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["testimonial"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["sort_order"] ?? null) : null);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-right\">";
                // line 50
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["testimonial"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["status"] ?? null) : null);
                echo "</td>

\t\t\t\t\t\t<td class=\"text-right\">";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["testimonial"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["action"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 53
                    echo "\t\t\t\t\t\t\t <a href=\"";
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["action"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["action"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["text"] ?? null) : null);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"4\">";
            // line 59
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</form>
      </div>
    </div>
  </div>
</div>
";
        // line 71
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/octestimonial_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 71,  207 => 62,  201 => 59,  198 => 58,  195 => 57,  187 => 54,  176 => 53,  172 => 52,  167 => 50,  163 => 49,  159 => 48,  156 => 47,  150 => 46,  144 => 44,  142 => 43,  139 => 42,  134 => 41,  132 => 40,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  104 => 27,  98 => 24,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/octestimonial_list.twig", "");
    }
}
