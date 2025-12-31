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

/* tt_koparion4/template/product/octestimonial.twig */
class __TwigTemplate_8e3523215dab76ea016ca9f9cf623ddddd69666b05b04915371eda2b20c0d713 extends \Twig\Template
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
<div class=\"container main\">
<div class=\"main\">
    <div id=\"content\">
    <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
        <ul class=\"breadcrumb\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t\t<li> <a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\"> ";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo " </a> </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
        <div class=\"testimonial-product\">
        
\t\t";
        // line 14
        if (($context["testimonials"] ?? null)) {
            // line 15
            echo "            <div class=\"testimonial-content\">
              \t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 17
                echo "\t\t\t\t<div class=\"row-testimonials\">
\t\t\t\t\t<div class=\"testimonial-images\"><img src=\"";
                // line 18
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["testimonial"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["image"] ?? null) : null);
                echo "\" alt=\"image\" /></div>
\t\t\t\t\t<div class=\"box-testimonial \">
\t\t\t\t\t\t<div class=\"testimonial-std\">";
                // line 20
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["testimonial"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["content"] ?? null) : null);
                echo "</div>
\t\t\t\t\t\t<div class=\"testimonial-name\"><h4>--";
                // line 21
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["testimonial"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["customer_name"] ?? null) : null);
                echo "--</h4></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
            // line 27
            echo ($context["pagination"] ?? null);
            echo "</div>
                <div class=\"col-sm-6 text-right\">";
            // line 28
            echo ($context["results"] ?? null);
            echo "</div>
            </div>
           ";
        } else {
            // line 31
            echo "            <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
            <div class=\"buttons\">
                <div class=\"pull-right\"><a href=\"";
            // line 33
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
            </div>
           ";
        }
        // line 36
        echo "        </div>
    </div>
</div>
    ";
        // line 39
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 41
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/product/octestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  137 => 39,  132 => 36,  124 => 33,  118 => 31,  112 => 28,  108 => 27,  104 => 25,  94 => 21,  90 => 20,  85 => 18,  82 => 17,  78 => 16,  75 => 15,  73 => 14,  68 => 11,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/product/octestimonial.twig", "");
    }
}
