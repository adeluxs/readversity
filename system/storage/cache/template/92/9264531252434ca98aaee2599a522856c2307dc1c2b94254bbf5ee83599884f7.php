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

/* tt_koparion4/template/extension/module/octestimonial.twig */
class __TwigTemplate_c2bb357ee4215ae3515a13bf045295a06a123d7b89c8d341239b7857e693a645 extends \Twig\Template
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
        echo "<div class=\"testimonial-container\">

\t<div class=\"module-title\">
\t\t<h2>
\t\t\t";
        // line 5
        echo ($context["title"] ?? null);
        echo "
\t\t</h2>
\t</div>
\t";
        // line 8
        $context["count"] = 0;
        // line 9
        echo "\t";
        if (($context["rows"] ?? null)) {
            echo "\t\t
\t\t";
            // line 10
            $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 10);
            // line 11
            echo "\t";
        } else {
            // line 12
            echo "\t\t";
            $context["rows"] = 1;
            // line 13
            echo "\t";
        }
        // line 14
        echo "\t";
        if (($context["testimonials"] ?? null)) {
            // line 15
            echo "\t\t<div class=\"block-content\">
\t\t\t<div id=\"slides\" class=\"owl-carousel owl-theme\">
\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 18
                echo "\t\t\t\t\t";
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 19
                    echo "\t\t\t\t\t<div class=\"row_items\">
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 22
                echo "\t\t\t\t\t<div class=\"testimonial-content\">
\t\t\t\t\t\t<div class=\"testimonial-images\">
\t\t\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 24);
                echo "\">\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"icon\"><i class=\"icon-2\"></i></div>
\t\t\t\t\t\t<div class=\"testimonial-box\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo ($context["more"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 28);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"testimonial-author\">";
                // line 30
                echo (("- " . twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 30)) . ".");
                echo "</p>
\t\t\t\t\t</div><!--testimonial-content-->
\t\t\t\t\t";
                // line 32
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["testimonials"] ?? null))))) {
                    // line 33
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t</div>
\t\t</div><!--block-content-->
\t";
        } else {
            // line 39
            echo "\t\t<p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t";
        }
        // line 41
        echo "
</div><!--testimonial-container-->\t\t\t\t\t
<script >
\$(document).ready(function() {
    \$(\"#slides\").owlCarousel({
\t\tautoPlay : ";
        // line 46
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slide"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["auto"] ?? null) : null)) {
            echo " ";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["slide"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["auto"] ?? null) : null);
            echo " ";
        } else {
            echo " false ";
        }
        echo ",
\t\titems : ";
        // line 47
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["slide"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["items"] ?? null) : null);
        echo ",\t
\t\tloop: true,
\t\tmargin: 30,
\t\tnavSpeed : ";
        // line 50
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["slide"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["speed"] ?? null) : null);
        echo ",
\t\tdotsSpeed : ";
        // line 51
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["slide"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["speed"] ?? null) : null);
        echo ",
\t\tautoplaySpeed : ";
        // line 52
        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["slide"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["speed"] ?? null) : null);
        echo ",
\t\tnav : ";
        // line 53
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["slide"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["navigation"] ?? null) : null)) {
            echo " true  ";
        } else {
            echo " false ";
        }
        echo ",
\t\tdots :";
        // line 54
        if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["slide"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["pagination"] ?? null) : null)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\tlazyLoad: true,
\t\tnavText : ['<i class=\"ion-ios-arrow-left\"></i>','<i class=\"ion-ios-arrow-right\"></i>'],
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t480:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t768:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t980:{
\t\t\t\titems: 1
\t\t\t}
\t\t}
    });
});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/octestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  153 => 47,  143 => 46,  136 => 41,  130 => 39,  125 => 36,  119 => 35,  115 => 33,  113 => 32,  108 => 30,  101 => 28,  92 => 24,  88 => 22,  85 => 21,  81 => 19,  78 => 18,  74 => 17,  70 => 15,  67 => 14,  64 => 13,  61 => 12,  58 => 11,  56 => 10,  51 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/octestimonial.twig", "");
    }
}
