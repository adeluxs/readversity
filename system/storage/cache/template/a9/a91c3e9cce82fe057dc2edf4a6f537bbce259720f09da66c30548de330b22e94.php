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

/* tt_koparion4/template/blog/blog.twig */
class __TwigTemplate_d89f1f41a1ce8ee3c080ae9f159814feaaf6c9e86bc0f5de863c907b770bc573 extends \Twig\Template
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
<div class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>
  <div class=\"container\">
        <div class=\"main\">
  <div class=\"row\">";
        // line 11
        echo ($context["column_left"] ?? null);
        echo "
      ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "          ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "      ";
        } else {
            // line 17
            echo "          ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "      ";
        }
        // line 19
        echo "      <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 21
        if (($context["articles"] ?? null)) {
            // line 22
            echo "          <div class=\"article-page\">
            ";
            // line 23
            $context["i"] = 0;
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 25
                echo "              ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 26
                echo "            <div class=\"article-layout article-list\">
                <div class=\"article-item ";
                // line 27
                echo ((((($context["i"] ?? null) % 2) == 0)) ? ("even") : ("odd"));
                echo "\">
                <div class=\"article-item-inner\">
                  <div class=\"article-intro\">
                    
                    <div class=\"intro-content\">
\t\t\t\t\t<img src=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 32);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 32);
                echo "\"/>
\t\t\t\t\t<div class=\"article-name\"><h3><a href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 33);
                echo "</a></h3></div>
                    <p class=\"articledate\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 34);
                if (twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 34)) {
                    echo (" | " . twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 34));
                }
                echo "</p>
\t\t\t\t\t<div style=\"padding: 20px 0 10px;\">";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["article"], "intro_text", [], "any", false, false, false, 35);
                echo "</div>
\t\t\t\t\t</div>
                  </div>
                  <a class=\"readmore-page\" href=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo ($context["button_read_more"] ?? null);
                echo "</a>
                </div>
              </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "          </div>
          <div class=\"toolbar toolbar-products toolbar-bottom\">
\t\t\t\t<div class=\"toolbar-amount\"><span>";
            // line 45
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t\t\t<div class=\"pages\">";
            // line 46
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t</div>
      ";
        } else {
            // line 49
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 51
        echo "          ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
      ";
        // line 52
        echo ($context["column_right"] ?? null);
        echo "</div>
</div></div>
";
        // line 54
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/blog/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 54,  188 => 52,  183 => 51,  177 => 49,  171 => 46,  167 => 45,  163 => 43,  150 => 38,  144 => 35,  137 => 34,  131 => 33,  125 => 32,  117 => 27,  114 => 26,  111 => 25,  106 => 24,  104 => 23,  101 => 22,  99 => 21,  95 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  68 => 12,  64 => 11,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/blog/blog.twig", "");
    }
}
