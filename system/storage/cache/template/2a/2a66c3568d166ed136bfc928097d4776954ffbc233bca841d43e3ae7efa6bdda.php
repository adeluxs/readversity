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

/* tt_koparion4/template/common/footer.twig */
class __TwigTemplate_4f98dda25936094ddc8f71c210760982270c95fbc9eb5b95b7ac9d254c7d8be2 extends \Twig\Template
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
        echo "<footer>
\t
\t<div class=\"footer-top\">
\t  <div class=\"container\">
\t\t";
        // line 5
        if (($context["block4"] ?? null)) {
            // line 6
            echo "\t\t\t";
            echo ($context["block4"] ?? null);
            echo "
\t\t";
        }
        // line 7
        echo "\t
\t\t<div class=\"row\">
\t\t\t  
\t\t\t  ";
        // line 10
        if (($context["informations"] ?? null)) {
            // line 11
            echo "\t\t\t  <div class=\"col-md-3 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h5>";
            // line 12
            echo ($context["text_information"] ?? null);
            echo "</h5></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 16
                echo "\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 16);
                echo "</a></li>
\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t\t  <li><a href=\"";
            echo ($context["voucher"] ?? null);
            echo "\">";
            echo ($context["text_voucher"] ?? null);
            echo "</a></li>
\t\t\t\t\t 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  ";
        }
        // line 24
        echo "\t\t\t  <div class=\"col-md-3 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h5>";
        // line 25
        echo ($context["text_service"] ?? null);
        echo "</h5></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 28
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 29
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 30
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 31
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 32
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t  
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-3 col-sm-6 col-footer\">
\t\t\t\t<div class=\"footer-title\"><h5>";
        // line 38
        echo ($context["text_extra"] ?? null);
        echo "</h5></div>
\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t<ul class=\"list-unstyled text-content\">
\t\t\t\t\t  <li><a href=\"";
        // line 41
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 42
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 43
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 44
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t  <li><a href=\"";
        // line 45
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t 
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col-md-3 col-sm-6 col-footer\">
\t\t\t\t\t";
        // line 51
        if (($context["block5"] ?? null)) {
            // line 52
            echo "\t\t\t\t\t\t";
            echo ($context["block5"] ?? null);
            echo "
\t\t\t\t\t";
        }
        // line 53
        echo "\t
\t\t\t\t</div>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"container-inner\">
\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t<p>";
        // line 62
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t";
        // line 64
        if (($context["block6"] ?? null)) {
            // line 65
            echo "\t\t\t\t\t";
            echo ($context["block6"] ?? null);
            echo "
\t\t\t\t";
        }
        // line 67
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div id=\"back-top\"><i class=\"fa fa-angle-up\"></i></div>
</footer>
<script >
\$(document).ready(function(){
\t// hide #back-top first
\t\$(\"#back-top\").hide();
\t// fade in #back-top
\t\$(function () {
\t\t\$(window).scroll(function () {
\t\t\tif (\$(this).scrollTop() > \$('body').height()/3) {
\t\t\t\t\$('#back-top').fadeIn();
\t\t\t} else {
\t\t\t\t\$('#back-top').fadeOut();
\t\t\t}
\t\t});
\t\t// scroll body to 0px on click
\t\t\$('#back-top').click(function () {
\t\t\t\$('body,html').animate({scrollTop: 0}, 800);
\t\t\treturn false;
\t\t});
\t});
});
</script>
";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 94
            echo "<script src=\"";
            echo $context["script"];
            echo "\" ></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div><!-- wrapper -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 96,  243 => 94,  239 => 93,  211 => 67,  205 => 65,  203 => 64,  198 => 62,  187 => 53,  181 => 52,  179 => 51,  168 => 45,  162 => 44,  156 => 43,  150 => 42,  144 => 41,  138 => 38,  127 => 32,  121 => 31,  115 => 30,  109 => 29,  103 => 28,  97 => 25,  94 => 24,  82 => 18,  71 => 16,  67 => 15,  61 => 12,  58 => 11,  56 => 10,  51 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/common/footer.twig", "");
    }
}
