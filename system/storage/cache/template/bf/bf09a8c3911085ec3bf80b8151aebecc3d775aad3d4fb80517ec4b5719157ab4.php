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

/* tt_koparion4/template/blog/blog_home.twig */
class __TwigTemplate_1a04bbe5f763c90c5c4b33632b91da056e777ec1569f25ceb74eab184c4570ca extends \Twig\Template
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
        echo "<div id=\"blog_home\" class=\"menu-recent \">
\t<div>
\t\t<div class=\"blog-title module-title\">
\t\t   <h2>";
        // line 4
        echo ($context["text_headingtitle"] ?? null);
        echo "</h2>
\t\t</div>
\t \t";
        // line 6
        list($context["count"], $context["rows"]) =         [0, twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 6)];
        // line 7
        echo "\t\t";
        if ( !($context["rows"] ?? null)) {
            // line 8
            echo "\t\t\t";
            $context["rows"] = 1;
            // line 9
            echo "\t\t";
        }
        // line 10
        echo "
\t\t";
        // line 11
        if (($context["articles"] ?? null)) {
            // line 12
            echo "\t\t\t<div class=\"owl-container\">
\t\t\t<div class=\"articles-container owl-carousel owl-theme\">
\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 15
                echo "\t\t\t\t";
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 16
                    echo "\t\t\t\t<div class=\"row_items\">
\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 19
                echo "\t\t\t\t\t<div class=\"articles-inner \">
\t\t\t\t\t\t<div class=\"articles-image\">
\t\t\t\t\t\t\t<a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 21);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 21);
                echo "\"/></a>
\t\t\t\t\t\t\t<div class=\"articles-date\">
\t\t\t\t\t\t\t\t";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"author-name\">";
                    echo ($context["text_post_by"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 24);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t<span class=\"artice-day\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added_d", [], "any", false, false, false, 26);
                echo "</span>";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added_m", [], "any", false, false, false, 26);
                echo " 
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"aritcles-content\">
\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t<a class=\"articles-name\" href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 31);
                echo "</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"articles-intro\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["article"], "intro_text", [], "any", false, false, false, 33);
                echo "</div>
\t\t\t\t\t\t\t\t<a class=\"read-more\" href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo ($context["button_read_more"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t";
                // line 38
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["articles"] ?? null))))) {
                    // line 39
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 41
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t</div>
\t\t\t</div>
\t\t";
        } else {
            // line 45
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t";
        }
        // line 47
        echo "\t</div>

</div>
<script >
    \$(document).ready(function() {
        \$(\".articles-container\").owlCarousel({
            autoPlay : ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 53)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
        \titems : ";
        // line 54
        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["slide"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["items"] ?? null) : null);
        echo ",
\t\t\tmargin: 0,
\t\t\tloop: true,\t\t\t
\t\t\tnavSpeed : ";
        // line 57
        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["slide"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["speed"] ?? null) : null);
        echo ",
\t\t\tdotsSpeed : ";
        // line 58
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["slide"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["speed"] ?? null) : null);
        echo ",
\t\t\tautoplaySpeed : ";
        // line 59
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["slide"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["speed"] ?? null) : null);
        echo ",
\t\t\tnav : ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 60)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tdots : ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 61)) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
\t\t\tnavText : ['<i class=\"ion-chevron-left\"></i>','<i class=\"ion-chevron-right\"></i>'],
\t\t\tresponsive:{
\t\t\t\t0:{
\t\t\t\t\titems: 1,
\t\t\t\t\tnav: false
\t\t\t\t},
\t\t\t\t480:{
\t\t\t\t\titems: 2,
\t\t\t\t\tnav: false
\t\t\t\t},
\t\t\t\t768:{
\t\t\t\t\titems: 2
\t\t\t\t},
\t\t\t\t992:{
\t\t\t\t\titems: 1
\t\t\t\t},
\t\t\t\t1200:{
\t\t\t\t\titems: ";
        // line 79
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["slide"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["items"] ?? null) : null);
        echo "
\t\t\t\t}
\t\t\t}
    \t});
    });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/blog/blog_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 79,  199 => 61,  191 => 60,  187 => 59,  183 => 58,  179 => 57,  173 => 54,  165 => 53,  157 => 47,  151 => 45,  146 => 42,  140 => 41,  136 => 39,  134 => 38,  125 => 34,  121 => 33,  114 => 31,  103 => 26,  96 => 24,  94 => 23,  85 => 21,  81 => 19,  78 => 18,  74 => 16,  71 => 15,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/blog/blog_home.twig", "");
    }
}
