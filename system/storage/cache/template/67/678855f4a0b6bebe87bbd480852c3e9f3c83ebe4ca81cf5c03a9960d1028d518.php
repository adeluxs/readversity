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

/* tt_koparion4/template/extension/module/oclayerednavigation/occategoryfilter.twig */
class __TwigTemplate_79f3e6cee7969607e7d009ad270e73012ad0395c378e064e280c4beff2de969c extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "                <div><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t<div class=\"toolbar toolbar-products\">
\t\t\t\t\t<div class=\"modes\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn\">";
            // line 6
            echo ($context["button_grid"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn\">";
            // line 7
            echo ($context["button_list"] ?? null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"toolbar-amount\">
\t\t\t\t\t\t<span>";
            // line 11
            echo ($context["results"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorter\">
\t\t\t\t\t\t<label>";
            // line 14
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 17) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 18);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 18);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 20);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"limiter\">
\t\t\t\t\t\t<label>";
            // line 26
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 29) == ($context["limit"] ?? null))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 30);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 30);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 32);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 32);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    <div class=\"row\">
\t\t\t\t\t\t";
            // line 40
            $context["count"] = 1;
            // line 41
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 42
                echo "\t\t\t\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"item ";
                // line 44
                echo ("item" . ($context["count"] ?? null));
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 48);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 50)) {
                    echo "<img class=\"img-r img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 50);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 50);
                    echo "\"  />";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 55)) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-des\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 66);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 66);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "          \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 73) == $context["i"])) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 75
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 81);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 84
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 85
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 85)) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 86);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 88);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 89
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 91)) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 92);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 97);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                // line 100
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 100);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 100);
                echo "')\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                // line 102
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                // line 103
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 103);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 115
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 116
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "\t\t\t\t\t</div>
                </div>
                <div class=\"toolbar toolbar-products toolbar-bottom\">
                    <div class=\"toolbar-amount\"><span>";
            // line 120
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"pages\">";
            // line 121
            echo ($context["pagination"] ?? null);
            echo "</div>
                </div>
                ";
        }
        // line 124
        echo "                ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 125
            echo "                    <p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\"><a href=\"";
            // line 127
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
                    </div>
                ";
        }
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/oclayerednavigation/occategoryfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 127,  391 => 125,  388 => 124,  382 => 121,  378 => 120,  373 => 117,  367 => 116,  365 => 115,  346 => 103,  338 => 102,  327 => 100,  321 => 97,  318 => 96,  314 => 94,  306 => 92,  303 => 91,  298 => 89,  293 => 88,  287 => 86,  285 => 85,  281 => 84,  278 => 83,  276 => 82,  269 => 81,  264 => 78,  258 => 77,  252 => 75,  249 => 74,  246 => 73,  242 => 72,  238 => 70,  236 => 69,  233 => 68,  225 => 66,  222 => 65,  220 => 64,  206 => 58,  200 => 56,  197 => 55,  191 => 53,  189 => 52,  186 => 51,  176 => 50,  168 => 49,  164 => 48,  157 => 44,  153 => 42,  148 => 41,  146 => 40,  139 => 35,  133 => 34,  125 => 32,  117 => 30,  114 => 29,  110 => 28,  105 => 26,  100 => 23,  94 => 22,  86 => 20,  78 => 18,  75 => 17,  71 => 16,  66 => 14,  60 => 11,  53 => 7,  49 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/oclayerednavigation/occategoryfilter.twig", "");
    }
}
