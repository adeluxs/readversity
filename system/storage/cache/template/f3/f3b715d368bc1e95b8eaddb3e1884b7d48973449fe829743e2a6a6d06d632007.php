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

/* extension/module/markeaze.twig */
class __TwigTemplate_85201ed80af666e92b4483956e928fafd8593b2f2988c46f8e5f56faff598acd extends \Twig\Template
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
        <button type=\"submit\" form=\"form-markeaze\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t    <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t    <ul class=\"breadcrumb\">
\t\t\t  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t    </ul>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t";
        // line 21
        if ((($context["error_warning"] ?? null) == true)) {
            // line 22
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 26
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-markeaze\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-appkey\">";
        // line 33
        echo ($context["entry_app_key"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"markeaze_app_key\" id=\"input-appkey\" class=\"form-control\" type=\"text\" value=\"";
        // line 35
        echo ($context["markeaze_app_key"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-secretkey\">";
        // line 39
        echo ($context["entry_secret_key"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input name=\"markeaze_secret_key\" id=\"input-secretkey\" class=\"form-control\" type=\"text\" value=\"";
        // line 41
        echo ($context["markeaze_secret_key"] ?? null);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"ttps://auth.markeaze.com?utm_source=opencart&utm_medium=referral&utm_campaign=Opencart_plugin\" target=\"_blank\">";
        // line 46
        echo ($context["go_to_markeaze"] ?? null);
        echo "</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

";
        // line 54
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/markeaze.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  138 => 46,  130 => 41,  125 => 39,  118 => 35,  113 => 33,  108 => 31,  102 => 28,  98 => 26,  90 => 22,  88 => 21,  81 => 16,  70 => 14,  66 => 13,  61 => 11,  55 => 10,  51 => 9,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/markeaze.twig", "");
    }
}
