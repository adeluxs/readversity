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

/* tt_koparion4/template/product/ocquickview/product.twig */
class __TwigTemplate_010384be14445f40583ba54d295104f7345f6619d0aa81c6861276e60fc0bca5 extends \Twig\Template
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
        echo "<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" ></script>
        <div id=\"content\" class=\"product-quickview\">
            <div class=\"row\">
\t\t\t\t\t <div class=\"col-sm-6 block-1 owl-style2\"> 
\t\t\t\t\t\t";
        // line 8
        if (($context["thumb"] ?? null)) {
            // line 9
            echo "\t\t\t\t\t\t\t<div class=\"thumbnails\">
\t\t\t\t\t\t\t\t<a class=\"thumbnail\" title=\"";
            // line 10
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\t<img data-zoom-image=\"";
            // line 11
            echo ($context["popup"] ?? null);
            echo "\" src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t";
            // line 14
            if (($context["images"] ?? null)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<div class=\"image-additional-container owl-style3\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div id=\"gallery_02\" class=\"thumbnails-additional owl-carousel owl-theme\">
\t\t\t\t\t\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail current-additional\" data-image=\"";
                // line 18
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"  title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 19
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 22);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 22);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 23);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</div><!-- block-1 -->
\t\t\t\t\t<div class=\"col-sm-6 block-2 product-info-main\">
\t\t\t\t\t\t<h1 class=\"product-name\">";
        // line 33
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t";
        // line 34
        if (($context["review_status"] ?? null)) {
            // line 35
            echo "\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) == $context["i"])) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["class_r"] = ("rating" . $context["i"]);
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo ($context["class_r"] ?? null);
                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t            
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t";
        if (($context["price"] ?? null)) {
            // line 47
            echo "\t\t\t\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 48
                echo "\t\t\t\t\t\t\t<div class=\"price-box box-regular\">
\t\t\t\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t\t\t\t<span class=\"price\">";
                // line 50
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t\t\t<div class=\"price-box box-special\">
\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                // line 55
                echo ($context["special"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                // line 56
                echo ($context["price"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"box-options\">
\t\t\t\t\t\t  ";
        // line 63
        if (($context["price"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 65
            if (($context["tax"] ?? null)) {
                // line 66
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "<span class=\"ex-text\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
\t\t\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 69
                echo "\t\t\t\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 72
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t  <hr>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 76
                    echo "\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 76);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 76);
                    echo "</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "\t\t\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t\t\t  <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 82
        if (($context["manufacturer"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t<li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\"><span class=\"ex-text\">";
            echo ($context["manufacturer"] ?? null);
            echo "</span></a></li>
\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t<li>";
        echo ($context["text_model"] ?? null);
        echo " <span class=\"ex-text\">";
        echo ($context["model"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t\t";
        // line 86
        if (($context["reward"] ?? null)) {
            // line 87
            echo "\t\t\t\t\t\t\t<li>";
            echo ($context["text_reward"] ?? null);
            echo " <span class=\"ex-text\">";
            echo ($context["reward"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t<li>";
        echo ($context["text_stock"] ?? null);
        echo " <span class=\"ex-text\">";
        echo ($context["stock"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"short-des\">";
        // line 92
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t<div id=\"product\"> 
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-quantity\">";
        // line 95
        echo ($context["entry_qty"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"quantity-box\">
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"minus\" value=\"-\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 98
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<input type=\"button\" id=\"plus\" value=\"&#43;\" class=\"form-control\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 101
        echo ($context["product_id"] ?? null);
        echo "\" />              
\t\t\t\t\t\t\t<button type=\"button\" class=\"button button-cart btn\" id=\"button-cart\" data-loading-text=\"";
        // line 102
        echo ($context["text_loading"] ?? null);
        echo "\" >";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button class=\"button btn-wishlist btn btn-default\" type=\"button\"   title=\"";
        // line 103
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"addWishlist('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t<button class=\"button btn-compare btn btn-default\" type=\"button\"   title=\"";
        // line 104
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"addCompare('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 106
        if (($context["options"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t\t<div class=\"option-container\">
\t\t\t\t\t\t\t<h3>";
            // line 108
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 110
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 110) == "select")) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 111)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 112);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 112);
                    echo "</label>
\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 113
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 113);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 113);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 114
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 115));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 116);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 116);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                        // line 117
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 117)) {
                            // line 118
                            echo "\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 118);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 118);
                            echo ")
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 125) == "radio")) {
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 126)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 127);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                    echo "\"> 
\t\t\t\t\t\t\t\t\t\t";
                    // line 129
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 129));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 132
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 132);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 132);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 133
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 133)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 133);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 133);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 133);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 133);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 134
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 134);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 135
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 135)) {
                            // line 136
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 136);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 136);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 144) == "checkbox")) {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 145)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 146);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 147
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 151
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 151);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 152
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 152)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 152);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 152);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 152);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 152);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 153
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 153);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 154
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 154)) {
                            // line 155
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 155);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 155);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 157
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 163
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "text")) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 164)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 165);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 166
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 166);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 166);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "textarea")) {
                    // line 170
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 170)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 171);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 172);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 172);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 172);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 175) == "file")) {
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 176)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 177);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 182) == "date")) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 183)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 186);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 193
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 193) == "datetime")) {
                    // line 194
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 194)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 195
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 195);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 195);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 197);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 197);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 204
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 204) == "time")) {
                    // line 205
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 205)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 206
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 206);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 206);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 208);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 215
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 218
        echo "\t\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 219
            echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
            // line 220
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 223
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 225
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 225);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 225);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\t\t\t";
        if ((($context["minimum"] ?? null) > 1)) {
            // line 232
            echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 233
            echo ($context["text_minimum"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t\t</div><!-- #product -->
\t\t\t\t\t\t";
        // line 236
        if (($context["tags"] ?? null)) {
            // line 237
            echo "\t\t\t\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t\t\t\t";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 239
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 239);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 239);
                    echo "</a>,
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 240
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 240);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 240);
                    echo "</a> ";
                }
                // line 241
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
\t\t\t\t\t\t";
        }
        // line 243
        echo "\t\t\t\t\t</div><!-- block-2 -->                    
            </div>            
        </div>
<script ><!--
    \$('.product-quickview select[name=\\'recurring_id\\'], .product-quickview input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('.product-quickview input[name=\\'product_id\\'], .product-quickview input[name=\\'quantity\\'], .product-quickview select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('.product-quickview #recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                if (json['success']) {
                    \$('.product-quickview #recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script ><!--
    \$('.product-quickview #button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('.product-quickview #product input[type=\\'text\\'], .product-quickview #product input[type=\\'hidden\\'], .product-quickview #product input[type=\\'radio\\']:checked, .product-quickview #product input[type=\\'checkbox\\']:checked, .product-quickview #product select, .product-quickview #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('.product-quickview #button-cart').button('loading');
            },
            complete: function() {
                \$('.product-quickview #button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');
                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('.product-quickview #input-option' + i.replace('_', '-'));
                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }
                    if (json['error']['recurring']) {
                        \$('.product-quickview select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }
                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }
                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    \$('#cart > button #cart-total').html(json['total']);
\t\t\t\t\t\$('#cart > button .total-price').html(json['total_price']);
                    \$('#quickview-content').animate({ scrollTop: 0 }, 'slow');
                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script ><!--
    \$('.date').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickTime: false
    });
    \$('.datetime').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickDate: true,
        pickTime: true
    });
    \$('.time').datetimepicker({
        language: document.cookie.match(new RegExp('language=([^;]+)'))[1],
        pickDate: false
    });
    \$('.product-quickview button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;
        \$('#form-upload').remove();
        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
        \$('.product-quickview #form-upload input[name=\\'file\\']').trigger('click');
        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }
        timer = setInterval(function() {
            if (\$('.product-quickview #form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);
                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('.product-quickview #form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();
                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }
                        if (json['success']) {
                            alert(json['success']);
                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script ><!--   
    function addWishlist(product_id) {
        \$.ajax({
            url: 'index.php?route=account/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
                \$('#wishlist-total .count').html(json['total']);
\t\t\t\t\$('#wishlist-total').attr('title', json['total']);
                \$('#quickview-content').animate({ scrollTop: 0 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
    function addCompare(product_id) {
        \$.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();
                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    \$('#compare-total').html(json['total']);
                    \$('#quickview-content').animate({ scrollTop: 0 }, 'slow');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
\tvar thumbnails_owl = \$('.product-quickview .thumbnails-additional');\t
\tthumbnails_owl.on('initialize.owl.carousel initialized.owl.carousel ' +
\t\t'initialize.owl.carousel initialize.owl.carousel ',
\t\tfunction(e) {
\t\t  \$(\".product-quickview #gallery_02 .thumbnail\").show();
\t\t});
\tthumbnails_owl.owlCarousel({
\t\t
\t\tnav: false,
\t\tdots: false,
\t\tnavSpeed: 1000,
\t\tmargin: 10,
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems: 3,
\t\t\t\tnav: false
\t\t\t},
\t\t\t480:{
\t\t\t\titems: 4,
\t\t\t\tnav: false
\t\t\t},
\t\t\t768:{
\t\t\t\titems: 4
\t\t\t},
\t\t\t992:{
\t\t\t\titems: 4
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: 4
\t\t\t}
\t\t}
\t\t\t\t
\t});\t
\t\$(\".product-quickview .thumbnails img\").elevateZoom({
\t\tzoomType : \"window\",
\t\tcursor: \"crosshair\",
\t\tgallery:'gallery_02', 
\t\tgalleryActiveClass: \"active\", 
\t\timageCrossfade: true,
\t\tresponsive: true,
\t\tzoomWindowOffetx: 0,
\t\tzoomWindowOffety: 0,
\t});
\tvar thumbnails_additional = \$('.product-quickview .thumbnails-additional .thumbnail');
\tthumbnails_additional.each(function(){
\t\t\$(this).click(function(){
\t\t\tthumbnails_additional.removeClass('current-additional');
\t\t\t\$(this).addClass('current-additional');
\t\t});
\t});
\tvar minimum_qv = ";
        // line 462
        echo ($context["minimum"] ?? null);
        echo ";
\t\$(\".product-quickview #input-quantity\").change(function(){
\t\tif (\$(this).val() < minimum) {
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\".product-quickview #input-quantity\").val(minimum);
\t\t}
\t});
\t  // increase number of product
\tfunction minus_qv(minimum){
\t\tvar currentval = parseInt(\$(\".product-quickview #input-quantity\").val());
\t\t\$(\".product-quickview #input-quantity\").val(currentval-1);
\t\tif(\$(\".product-quickview #input-quantity\").val() <= 0 || \$(\".product-quickview #input-quantity\").val() < minimum){
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\".product-quickview #input-quantity\").val(minimum);
\t\t}
\t  };
\t  // decrease of product
\tfunction plus_qv(){
\t\tvar currentval = parseInt(\$(\".product-quickview #input-quantity\").val());
\t\t\$(\".product-quickview #input-quantity\").val(currentval+1);
\t};
\t\$('.product-quickview #minus').click(function(){
\t\tminus_qv(minimum);
\t});
\t\$('.product-quickview #plus').click(function(){
\t\tplus_qv();
\t});
//--></script>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/product/ocquickview/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1067 => 462,  846 => 243,  837 => 241,  830 => 240,  820 => 239,  816 => 238,  811 => 237,  809 => 236,  806 => 235,  801 => 233,  798 => 232,  795 => 231,  789 => 227,  778 => 225,  774 => 224,  770 => 223,  764 => 220,  761 => 219,  758 => 218,  754 => 216,  748 => 215,  734 => 208,  727 => 206,  720 => 205,  717 => 204,  703 => 197,  696 => 195,  689 => 194,  686 => 193,  672 => 186,  665 => 184,  658 => 183,  655 => 182,  647 => 179,  639 => 178,  635 => 177,  628 => 176,  625 => 175,  613 => 172,  607 => 171,  600 => 170,  597 => 169,  585 => 166,  579 => 165,  572 => 164,  569 => 163,  564 => 160,  556 => 157,  549 => 155,  547 => 154,  542 => 153,  526 => 152,  520 => 151,  516 => 149,  512 => 148,  508 => 147,  504 => 146,  497 => 145,  494 => 144,  489 => 141,  481 => 138,  474 => 136,  472 => 135,  468 => 134,  450 => 133,  444 => 132,  440 => 130,  436 => 129,  432 => 128,  428 => 127,  421 => 126,  418 => 125,  413 => 122,  406 => 120,  399 => 118,  397 => 117,  390 => 116,  386 => 115,  382 => 114,  376 => 113,  370 => 112,  363 => 111,  360 => 110,  356 => 109,  352 => 108,  349 => 107,  347 => 106,  338 => 104,  330 => 103,  324 => 102,  320 => 101,  314 => 98,  308 => 95,  302 => 92,  293 => 89,  285 => 87,  283 => 86,  276 => 85,  266 => 83,  264 => 82,  261 => 81,  257 => 79,  254 => 78,  243 => 76,  239 => 75,  234 => 72,  231 => 71,  223 => 69,  220 => 68,  212 => 66,  210 => 65,  207 => 64,  205 => 63,  200 => 60,  197 => 59,  191 => 56,  187 => 55,  184 => 54,  177 => 50,  173 => 48,  170 => 47,  167 => 46,  162 => 43,  156 => 42,  150 => 40,  147 => 39,  144 => 38,  140 => 37,  136 => 35,  134 => 34,  130 => 33,  126 => 31,  123 => 30,  117 => 26,  104 => 23,  95 => 22,  91 => 21,  82 => 19,  74 => 18,  69 => 15,  67 => 14,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/product/ocquickview/product.twig", "");
    }
}
