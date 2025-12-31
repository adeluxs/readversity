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

/* tt_koparion4/template/extension/module/ocvermegamenu.twig */
class __TwigTemplate_3c581a584c55bfa77e77856b7934398472eaceadd71884ae903a232422a164e4 extends \Twig\Template
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
        echo "<div class=\"vermagemenu visible-lg visible-md\">
    <div class=\"content-vermagemenu\"> 
        <h2>";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h2>
        <div class=\"navleft-container\">
            <div id=\"pt_vmegamenu\" class=\"pt_vmegamenu\">
                ";
        // line 6
        echo ($context["vermegamenu"] ?? null);
        echo " 
            </div>\t
        </div>
    </div>
</div>
<script >
//<![CDATA[
var body_class = \$('body').attr('class'); 
 if(body_class.search('common-home') != -1) {
  \$('#pt_ver_menu_home').addClass('act');
 }
var CUSTOMMENU_POPUP_EFFECT = ";
        // line 17
        echo ($context["effect"] ?? null);
        echo "
var CUSTOMMENU_POPUP_TOP_OFFSET = ";
        // line 18
        echo ($context["top_offset"] ?? null);
        echo "
//]]>
        \$('.vermagemenu h2').click(function () {
            \$( \".navleft-container\" ).slideToggle(\"slow\");
        });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/ocvermegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  61 => 17,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/ocvermegamenu.twig", "");
    }
}
