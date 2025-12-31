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

/* tt_koparion4/template/extension/module/ocinstagram.twig */
class __TwigTemplate_5e10005d356281f7ba717601c23837f45a34ff16ef532f058c040d6738a61330 extends \Twig\Template
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
        echo "<div id=\"instagram_block_home\" class=\"block\">
\t<div class=\"title_block\">
\t\t<h3 >";
        // line 3
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t</div>
\t";
        // line 5
        if ((($context["error_connect"] ?? null) == false)) {
            // line 6
            echo "\t\t<p class=\"text_error_instagram\">";
            echo ($context["text_error"] ?? null);
            echo "</p>
\t";
        } else {
            // line 8
            echo "        ";
            list($context["count"], $context["rows"]) =             [0, twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_rows", [], "any", false, false, false, 8)];
            // line 9
            echo "        ";
            if ( !($context["rows"] ?? null)) {
                // line 10
                echo "            ";
                $context["rows"] = 1;
                // line 11
                echo "        ";
            }
            // line 12
            echo "            <div class=\"content_block owl-carousel owl-theme\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["instagrams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["instagram"]) {
                // line 14
                echo "                    ";
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 15
                    echo "                        <div class=\"row_items\">
                    ";
                }
                // line 17
                echo "                    ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 18
                echo "                            <a class=\"fancybox ";
                if ((twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_view_mode", [], "any", false, false, false, 18) != "slider")) {
                    echo " col-xs-4 ";
                }
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["instagram"], "image", [], "any", false, false, false, 18);
                echo "\" style=\"display: block;\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["instagram"], "image", [], "any", false, false, false, 18);
                echo "\" alt=\"\" /></a>
                    ";
                // line 19
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 20
                    echo "                        </div>
                    ";
                } else {
                    // line 22
                    echo "                        ";
                    if ((($context["count"] ?? null) == twig_length_filter($this->env, ($context["instagrams"] ?? null)))) {
                        // line 23
                        echo "                        </div>
                        ";
                    }
                    // line 25
                    echo "                    ";
                }
                // line 26
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instagram'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </div>
        ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_view_mode", [], "any", false, false, false, 28) == "slider")) {
                // line 29
                echo "        <script >
            \$(\"#instagram_block_home .content_block\").owlCarousel({
                autoPlay: ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "autoplay", [], "any", false, false, false, 31)) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                echo ",
                navSpeed : ";
                // line 32
                if (twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_speed", [], "any", false, false, false, 32)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_speed", [], "any", false, false, false, 32);
                    echo " ";
                } else {
                    echo " 3000 ";
                }
                echo ",
                nav : ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_show_nextback", [], "any", false, false, false, 33)) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                echo ",
                dots : ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "f_show_ctr", [], "any", false, false, false, 34)) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                echo ",
                autoplayHoverPause : true,
\t\t\t\tmargin: 10,
                responsive:{
\t\t\t\t\t0:{
\t\t\t\t\t\titems: 2
\t\t\t\t\t},
\t\t\t\t\t480:{
\t\t\t\t\t\titems: 3
\t\t\t\t\t},
\t\t\t\t\t768:{
\t\t\t\t\t\titems: 3
\t\t\t\t\t},
\t\t\t\t\t992:{
\t\t\t\t\t\titems: 3
\t\t\t\t\t},
\t\t\t\t\t1200:{
\t\t\t\t\t\titems: ";
                // line 51
                echo twig_get_attribute($this->env, $this->source, ($context["config_slide"] ?? null), "items", [], "any", false, false, false, 51);
                echo "
\t\t\t\t\t},
                }
            });
        </script>
        ";
            }
            // line 57
            echo "        <script >
            \$('.content_block').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled : true
                }
            });
        </script>
    ";
        }
        // line 67
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/ocinstagram.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  184 => 57,  175 => 51,  151 => 34,  143 => 33,  133 => 32,  125 => 31,  121 => 29,  119 => 28,  116 => 27,  110 => 26,  107 => 25,  103 => 23,  100 => 22,  96 => 20,  94 => 19,  83 => 18,  80 => 17,  76 => 15,  73 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  48 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/ocinstagram.twig", "");
    }
}
