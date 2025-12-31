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

/* tt_koparion4/template/blog/article.twig */
class __TwigTemplate_544ad6bc260edf476343891da6dda5ff4e6b7d3a33aed2dc19e17da9f7625dcf extends \Twig\Template
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
        <div class=\"article-container\">
\t\t\t
            <div class=\"article-subtitle\">
                <!-- AddThis Button BEGIN -->
                <!--<div class=\"addthis_toolbox addthis_default_style\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
                <script  src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>-->
                <!-- AddThis Button END -->
            </div>
            <div class=\"article-description\">
                <img src=\"";
        // line 29
        echo ($context["image"] ?? null);
        echo "\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"/>
\t\t\t\t<div class=\"article-title\">
\t\t\t\t  <h1>";
        // line 31
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<p class=\"article-date\">";
        // line 33
        echo ($context["date"] ?? null);
        if (($context["author"] ?? null)) {
            echo (" | " . ($context["author"] ?? null));
        }
        echo "</p>
                <div style=\"padding: 20px 0 10px;\">";
        // line 34
        echo ($context["description"] ?? null);
        echo "</div>
            </div>
        </div>
      ";
        // line 37
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 38
        echo ($context["column_right"] ?? null);
        echo "</div>
</div></div>
";
        // line 40
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 40,  133 => 38,  129 => 37,  123 => 34,  116 => 33,  111 => 31,  104 => 29,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  68 => 12,  64 => 11,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/blog/article.twig", "");
    }
}
