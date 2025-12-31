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

/* default/template/extension/module/tawkto.twig */
class __TwigTemplate_65718336fec441352da37831a20d16c03e370edd4a0ce25bc57454f0eb021750 extends \Twig\Template
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
        echo "<script type=\"text/javascript\">
var Tawk_API={},\$_Tawk_LoadStart=new Date();
";
        // line 3
        if (($context["condicion1"] ?? null)) {
            // line 4
            echo "    Tawk_API.visitor = {
        name  : \"";
            // line 5
            echo ($context["nombre"] ?? null);
            echo "\",
        email : \"";
            // line 6
            echo ($context["correo"] ?? null);
            echo "\",
    };
";
        }
        // line 9
        echo "(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/";
        // line 12
        echo ($context["page_id"] ?? null);
        echo "/";
        echo ($context["widget_id"] ?? null);
        echo "';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/tawkto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  56 => 9,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/tawkto.twig", "");
    }
}
