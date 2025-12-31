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

/* default/template/extension/payment/paystack.twig */
class __TwigTemplate_1f5c073a65d718620b444d894f3c43cdd2c6f0619d96ace16438cfc11f8547de extends \Twig\Template
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
        if ( !($context["livemode"] ?? null)) {
            // line 2
            echo " <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_testmode"] ?? null);
            echo "
";
        }
        // line 4
        echo "
<form >
  <script src=\"https://js.paystack.co/v1/inline.js\"></script>
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"button\"  onclick=\"payWithPaystack()\" value=\"";
        // line 9
        echo ($context["button_confirm"] ?? null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
 
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: '";
        // line 17
        echo ($context["key"] ?? null);
        echo "',
      currency: '";
        // line 18
        echo ($context["currency"] ?? null);
        echo "',
      email: '";
        // line 19
        echo ($context["email"] ?? null);
        echo "',
      amount: ";
        // line 20
        echo ($context["amount"] ?? null);
        echo ",
      ref: '";
        // line 21
        echo ($context["ref"] ?? null);
        echo "',
      metadata:{
         \"custom_fields\":[
            {
              \"display_name\":\"Plugin\",
              \"variable_name\":\"plugin\",
              \"value\":\"opencart-3.x\"
            }
          ]
      },
      callback: function(response){
          window.location.href='";
        // line 32
        echo ($context["callback"] ?? null);
        echo "'.replace('&amp;', '&').replace('&amp;', '&');
      },
      onClose: function(){
          window.location.href='";
        // line 35
        echo ($context["callback"] ?? null);
        echo "'.replace('&amp;', '&').replace('&amp;', '&');
      }
    });
    console.log(handler);
    handler.openIframe();
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/paystack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  93 => 32,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  63 => 17,  52 => 9,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/paystack.twig", "");
    }
}
