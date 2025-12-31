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

/* extension/module/ocslideshow/ocslideshow_list.twig */
class __TwigTemplate_3a4c900af085a020aa43b178125ea03b634606189ee0431f1babf3de112a2f93 extends \Twig\Template
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
        echo ($context["button_insert"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\" onclick=\"\$('#form-ocslideshows').attr('action', '";
        echo ($context["copy"] ?? null);
        echo "').submit()\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-ocslideshows').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ul class=\"breadcrumb\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t  </ul>

    </div>
  </div>
  <div class=\"container-fluid\">
  ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ocslideshows\" class=\"form-horizontal\">
\t\t\t\t <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\"> ";
        // line 35
        if ((($context["sort"] ?? null) == "name")) {
            // line 36
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 38
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 39
        echo "</td>
                  <td class=\"text-left\">";
        // line 40
        if ((($context["sort"] ?? null) == "status")) {
            // line 41
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                   ";
        } else {
            // line 43
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 44
        echo "</td>
                  <td class=\"text-right\">";
        // line 45
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
\t\t\t  ";
        // line 49
        if (($context["ocslideshows"] ?? null)) {
            // line 50
            echo "\t\t\t\t  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ocslideshows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ocslideshow"]) {
                // line 51
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t  <td class=\"text-center\"> ";
                // line 52
                if (twig_in_filter((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["ocslideshow"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["ocslideshow_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    // line 53
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["ocslideshow"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["ocslideshow_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["ocslideshow"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["ocslideshow_id"] ?? null) : null);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 56
                echo " </td>
\t\t\t\t\t  <td class=\"text-left\">";
                // line 57
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["ocslideshow"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                echo "</td>
\t\t\t\t\t  <td class=\"text-left\">";
                // line 58
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["ocslideshow"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["status"] ?? null) : null);
                echo "</td>
\t\t\t\t\t  <td class=\"text-right\"><a href=\"";
                // line 59
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["ocslideshow"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["action"] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[0] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["href"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["text_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ocslideshow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t";
        }
        // line 63
        echo "              </tbody>
            </table>
          </div>
        </form>
\t\t <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 68
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 69
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
 </div>
";
        // line 75
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/ocslideshow/ocslideshow_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 75,  233 => 69,  229 => 68,  222 => 63,  219 => 62,  208 => 59,  204 => 58,  200 => 57,  197 => 56,  191 => 55,  185 => 53,  183 => 52,  180 => 51,  175 => 50,  173 => 49,  166 => 45,  163 => 44,  155 => 43,  145 => 41,  143 => 40,  140 => 39,  132 => 38,  122 => 36,  120 => 35,  111 => 29,  105 => 26,  101 => 24,  93 => 20,  91 => 19,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocslideshow/ocslideshow_list.twig", "");
    }
}
