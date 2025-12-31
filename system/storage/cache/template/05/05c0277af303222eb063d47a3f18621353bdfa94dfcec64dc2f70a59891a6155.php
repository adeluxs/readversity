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

/* tt_koparion4/template/product/ocquickview/qvcontainer.twig */
class __TwigTemplate_37af436a2adca9910cfb53f32473604c184d473d4c9ed99e357a97b383d391c0 extends \Twig\Template
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
        if (($context["ocquickview_status"] ?? null)) {
            // line 2
            echo "<div id=\"quickview-content\">
    <!-- Load quickview content into here -->
</div>

<div id=\"quickview-bg-block\">
    <!-- Quick View deep background -->
</div>

<div class=\"quickview-load-img\">
    <img src=\"";
            // line 11
            echo ($context["ocquickview_loader_img"] ?? null);
            echo "\" alt=\"\" />
</div>

<div>
    <input type=\"hidden\" id=\"qv-status\" value=\"<?php echo \$ocquickview_status; ?>\" />
    <input type=\"hidden\" id=\"qv-container\" value=\"<?php echo \$ocquickview_container ?>\" />
    <input type=\"hidden\" id=\"qv-parent-element\" value=\"<?php echo \$ocquickview_parent_element ?>\" />
    <input type=\"hidden\" id=\"qv-children-element\" value=\"<?php echo \$ocquickview_children_element ?>\" />
</div>

<script >
    \$('#quickview-bg-block').click(function () {
        ocquickview.closeQVFrame();
    })
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/product/ocquickview/qvcontainer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/product/ocquickview/qvcontainer.twig", "");
    }
}
