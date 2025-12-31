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

/* tt_koparion4/template/common/language.twig */
class __TwigTemplate_b5baa638e745fdc0b4ef605ba0f3b893db2e6b12ea1d3ec6c531d273ee10924e extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) >= 1)) {
            // line 2
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group\">
\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">";
            // line 4
            echo ($context["text_language"] ?? null);
            echo ":</span>
      <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 7
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    echo " 
\t\t\t<img src=\"catalog/language/";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 8);
                    echo "\" />
\t\t\t";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 9);
                    echo "
\t\t\t<i class=\"fa fa-angle-down\"></i>
      ";
                }
                // line 12
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "      </button>
      <ul class=\"dropdown-menu\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 16
                echo "\t\t ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 16) == ($context["code"] ?? null))) {
                    // line 17
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select item-selected\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17);
                    echo "\"><img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 17);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 17);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 17);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 17);
                    echo "</button></li>
\t\t";
                } else {
                    // line 19
                    echo "\t\t\t<li><button class=\"btn btn-link btn-block language-select\" type=\"button\" name=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 19);
                    echo "\"><img src=\"catalog/language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 19);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 19);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 19);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 19);
                    echo "\" /> ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 19);
                    echo "</button></li>
\t\t";
                }
                // line 21
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 25
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 25,  130 => 22,  124 => 21,  108 => 19,  92 => 17,  89 => 16,  85 => 15,  81 => 13,  75 => 12,  69 => 9,  59 => 8,  54 => 7,  50 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/common/language.twig", "");
    }
}
