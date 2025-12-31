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

/* tt_koparion4/template/common/currency.twig */
class __TwigTemplate_04881d113fcd460532d9ac728cce8bbed82e1fe0425f8d287ae97e5b9366ece5 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t<div class=\"btn-group\">
\t\t<span class=\"pull-left hidden-xs hidden-sm hidden-md text-ex\">";
            // line 4
            echo ($context["text_currency"] ?? null);
            echo ":</span>
\t  <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 7) == ($context["code"] ?? null))) {
                    echo " 
\t\t\t\t";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 8);
                    echo "
\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t";
                }
                // line 11
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t  </button>
\t  <ul class=\"dropdown-menu\">
\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 15
                echo "\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 15) == ($context["code"] ?? null))) {
                    // line 16
                    echo "\t\t<li>
\t\t  <button class=\"item-selected currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 17);
                    echo "\">
\t\t\t";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 18)) {
                        echo " 
\t\t\t\t";
                        // line 19
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 19);
                        echo "
\t\t\t";
                    }
                    // line 20
                    echo "\t\t\t
\t\t\t";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 21);
                    echo "
\t\t\t";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 22)) {
                        echo " 
\t\t\t\t";
                        // line 23
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 23);
                        echo "
\t\t\t";
                    }
                    // line 25
                    echo "\t\t</button>
\t\t</li>
\t\t";
                } else {
                    // line 28
                    echo "\t\t<li>
\t\t  <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 29);
                    echo "\">
\t\t\t";
                    // line 30
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 30)) {
                        echo " 
\t\t\t\t";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 31);
                        echo "
\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t
\t\t\t";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 33);
                    echo "
\t\t\t";
                    // line 34
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 34)) {
                        echo " 
\t\t\t\t";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 35);
                        echo "
\t\t\t";
                    }
                    // line 37
                    echo "\t\t  </button>
\t\t</li>
\t\t";
                }
                // line 40
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t  </ul>
\t</div>
\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 44
            echo ($context["redirect"] ?? null);
            echo "\" />
</form>
";
        }
        // line 46
        echo " ";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 46,  167 => 44,  162 => 41,  156 => 40,  151 => 37,  146 => 35,  142 => 34,  138 => 33,  135 => 32,  130 => 31,  126 => 30,  122 => 29,  119 => 28,  114 => 25,  109 => 23,  105 => 22,  101 => 21,  98 => 20,  93 => 19,  89 => 18,  85 => 17,  82 => 16,  79 => 15,  75 => 14,  65 => 11,  59 => 8,  54 => 7,  50 => 6,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/common/currency.twig", "");
    }
}
