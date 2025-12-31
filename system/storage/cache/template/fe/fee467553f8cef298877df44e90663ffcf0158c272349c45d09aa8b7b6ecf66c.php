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

/* default/template/extension/payment/free_checkout.twig */
class __TwigTemplate_978a18a81e47810b2b76a22657d19bf3c92de5cff82d8d179c6172436d640a2f extends \Twig\Template
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
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 3
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\ttype: 'get',
\t\turl: 'index.php?route=extension/payment/free_checkout/confirm',
\t\tcache: false,
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function() {
\t\t\tlocation = '";
        // line 19
        echo ($context["continue"] ?? null);
        echo "';
\t\t}
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/free_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/free_checkout.twig", "");
    }
}
