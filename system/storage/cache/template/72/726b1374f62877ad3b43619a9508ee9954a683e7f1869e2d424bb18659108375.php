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

/* tt_koparion4/template/common/search.twig */
class __TwigTemplate_7e218ddb159c19a99179a98782a1134ae4c827b9e35c3ce8865ba10f6b4fdcc8 extends \Twig\Template
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
        echo "<div id=\"search\" class=\"input-group\">
\t<div class=\"search-content\" >
\t\t<input type=\"text\" name=\"search\" value=\"";
        // line 3
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
\t\t<span class=\"input-group-btn\">
\t\t<button type=\"button\" class=\"btn btn-default btn-lg\"></button>
\t\t</span>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/common/search.twig", "");
    }
}
