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

/* tt_koparion4/template/product/manufacturer_info.twig */
class __TwigTemplate_663a08694d866bcb1cd27d04a5bf48c49a4e8e7ae2309fe801b1e4abf2d0fcc6 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
            echo "                <div><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t<div class=\"toolbar toolbar-products\">
\t\t\t\t\t<div class=\"modes\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn\">";
            // line 23
            echo ($context["button_grid"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn\">";
            // line 24
            echo ($context["button_list"] ?? null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"toolbar-amount\">
\t\t\t\t\t\t<span>";
            // line 28
            echo ($context["results"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorter\">
\t\t\t\t\t\t<label>";
            // line 31
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 34
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 34) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 35);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 35);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 37);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 37);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"limiter\">
\t\t\t\t\t\t<label>";
            // line 43
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 46) == ($context["limit"] ?? null))) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 47);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 47);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 49);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    <div class=\"row\">
\t\t\t\t\t\t";
            // line 57
            $context["count"] = 1;
            // line 58
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                echo "\t\t\t\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"item ";
                // line 61
                echo ("item" . ($context["count"] ?? null));
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 66
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 66);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 67)) {
                    echo "<img class=\"img-r img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 67);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                    echo "\"  />";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 69
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 69)) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 72)) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-des\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 83);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 83);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "          \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 90) == $context["i"])) {
                            // line 91
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 98);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 98);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 99)) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 101
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102)) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 105);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 106
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 106);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 108)) {
                        // line 109
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 109);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 114);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                // line 117
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 117);
                echo "')\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                // line 119
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 119);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                // line 120
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
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
                // line 132
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 133
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t\t\t\t\t</div>
                </div>
                <div class=\"toolbar toolbar-products toolbar-bottom\">
                    <div class=\"toolbar-amount\"><span>";
            // line 137
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"pages\">";
            // line 138
            echo ($context["pagination"] ?? null);
            echo "</div>
                </div>
                ";
        } else {
            // line 140
            echo "                
\t\t\t\t  <p>";
            // line 141
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t\t  <div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 143
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
\t\t\t\t  </div>
\t\t\t\t  ";
        }
        // line 146
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 147
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 149
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 149,  468 => 147,  463 => 146,  455 => 143,  450 => 141,  447 => 140,  441 => 138,  437 => 137,  432 => 134,  426 => 133,  424 => 132,  405 => 120,  397 => 119,  386 => 117,  380 => 114,  377 => 113,  373 => 111,  365 => 109,  362 => 108,  357 => 106,  352 => 105,  346 => 103,  344 => 102,  340 => 101,  337 => 100,  335 => 99,  328 => 98,  323 => 95,  317 => 94,  311 => 92,  308 => 91,  305 => 90,  301 => 89,  297 => 87,  295 => 86,  292 => 85,  284 => 83,  281 => 82,  279 => 81,  265 => 75,  259 => 73,  256 => 72,  250 => 70,  248 => 69,  245 => 68,  235 => 67,  227 => 66,  223 => 65,  216 => 61,  212 => 59,  207 => 58,  205 => 57,  198 => 52,  192 => 51,  184 => 49,  176 => 47,  173 => 46,  169 => 45,  164 => 43,  159 => 40,  153 => 39,  145 => 37,  137 => 35,  134 => 34,  130 => 33,  125 => 31,  119 => 28,  112 => 24,  108 => 23,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/product/manufacturer_info.twig", "");
    }
}
