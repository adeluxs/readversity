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

/* default/template/extension/module/instagram.twig */
class __TwigTemplate_079aed8c56bb78eedf96a03d25a42aaedaccd385f76b9907286f193624b56177 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"container-fluid module-instagram\">
        ";
        // line 3
        if (($context["instagrams"] ?? null)) {
            echo "\t\t
            <h4>";
            // line 4
            echo ($context["entry_instagram"] ?? null);
            echo "</h4>
            <div class=\"instagram\" id=\"instagram\">

                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["instagrams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["instagram"]) {
                // line 8
                echo "                    <div class=\"item ";
                echo ($context["hover_effect"] ?? null);
                echo "\">
                        <a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["instagram"], "href", [], "any", false, false, false, 9);
                echo "\" target=\"_blank\" data-like=\"";
                echo twig_get_attribute($this->env, $this->source, $context["instagram"], "likes", [], "any", false, false, false, 9);
                echo "\">
                            <i class=\"fa fa-heart\" aria-hidden=\"true\"></i>
                            <img src=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["instagram"], "img", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["instagram"], "text", [], "any", false, false, false, 11);
                echo "\"> 
                        </a> 
                    </div> 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instagram'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                
            </div>
        ";
        }
        // line 18
        echo "    </div>
</div>

<style>
.module-instagram .slick-prev:before, 
.module-instagram .slick-next:before{
    color: ";
        // line 24
        echo ($context["color"] ?? null);
        echo ";
}
/**/
.module-instagram h4{
    text-align: ";
        // line 28
        echo ($context["text_align"] ?? null);
        echo ";
}
.instagram .item .fa:before{
    color:";
        // line 31
        echo ($context["heart_color"] ?? null);
        echo "
}
.instagram .item a:before{
    color: ";
        // line 34
        echo ($context["heart_text_color"] ?? null);
        echo " !important;
}
";
        // line 36
        if (($context["center_mode"] ?? null)) {
            // line 37
            echo ".slick-slide{
    opacity: .2;
    transition: opacity .3s linear 0s; 
}
.slick-slide.slick-active.slick-center{
    opacity: 1;
}
";
        }
        // line 45
        echo "</style>



";
        // line 49
        if (($context["instagrams"] ?? null)) {
            // line 50
            echo "    <script>
    \$('#instagram').slick({
        slidesToShow: ";
            // line 52
            echo ($context["slidesToShow"] ?? null);
            echo ",
        slidesToScroll: ";
            // line 53
            echo ($context["slidesToScroll"] ?? null);
            echo ",
        autoplay: ";
            // line 54
            echo ($context["autoplay"] ?? null);
            echo ",
        autoplaySpeed: ";
            // line 55
            echo ($context["autoplaySpeed"] ?? null);
            echo ",
        dots : ";
            // line 56
            echo ($context["dots"] ?? null);
            echo ",
        arrows : ";
            // line 57
            echo ($context["arrows"] ?? null);
            echo ",
        ";
            // line 58
            echo ($context["center_mode"] ?? null);
            echo "
        responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: ";
            // line 63
            echo ($context["slidesToShow"] ?? null);
            echo ",
                slidesToScroll: ";
            // line 64
            echo ($context["slidesToScroll"] ?? null);
            echo ",
                infinite: true,
                arrows: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: ";
            // line 72
            echo ($context["slidesToShowTablet"] ?? null);
            echo ",
                slidesToScroll: ";
            // line 73
            echo ($context["slidesToScrollTablet"] ?? null);
            echo ",
                arrows: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: ";
            // line 80
            echo ($context["slidesToShowCelphone"] ?? null);
            echo ",
                slidesToScroll: ";
            // line 81
            echo ($context["slidesToScrollCelphone"] ?? null);
            echo ",
                arrows: true
            }
        }   
        ]
    });
    </script>

";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/instagram.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 81,  201 => 80,  191 => 73,  187 => 72,  176 => 64,  172 => 63,  164 => 58,  160 => 57,  156 => 56,  152 => 55,  148 => 54,  144 => 53,  140 => 52,  136 => 50,  134 => 49,  128 => 45,  118 => 37,  116 => 36,  111 => 34,  105 => 31,  99 => 28,  92 => 24,  84 => 18,  79 => 15,  67 => 11,  60 => 9,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/instagram.twig", "");
    }
}
