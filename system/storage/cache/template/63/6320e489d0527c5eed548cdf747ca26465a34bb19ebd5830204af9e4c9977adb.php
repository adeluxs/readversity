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

/* default/template/extension/module/markeaze.twig */
class __TwigTemplate_d57f0cda60b458f9aff74e5632d4f0a7e7b2b849536bd375dd3e17adda8f6ae5 extends \Twig\Template
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
(function() {
  if (window.mkz) return

  (function(w,d,c){w[c]=w[c]||function(){(w[c].q=w[c].q||[]).push(arguments)};var t = document.cookie.match(new RegExp('(^| )mkz_version=([^;]+)'));var h = 'https://cdn.jsdelivr.net/gh/markeaze/markeaze-js-tracker@'+(t&&t[2]||'latest')+'/dist/mkz.js';var s = d.createElement('script');s.type = 'text/javascript';s.async = true;s.charset = 'utf-8';s.src = h;var x = d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);})(window,document,'mkz');

  window.mkz('watch', 'url.change', function() {
    mkz('trackPageView');
  });

  window.mkz('appKey', '";
        // line 11
        echo ($context["app_key"] ?? null);
        echo "');
  ";
        // line 12
        if (($context["visitor_info"] ?? null)) {
            echo "window.mkz('setVisitorInfo', ";
            echo json_encode(($context["visitor_info"] ?? null));
            echo ");";
        }
        // line 13
        echo "  ";
        if (($context["view_product"] ?? null)) {
            echo "window.mkz('setOfferView', ";
            echo json_encode(($context["view_product"] ?? null));
            echo ");";
        }
        // line 14
        echo "})();
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/markeaze.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  59 => 13,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/markeaze.twig", "");
    }
}
