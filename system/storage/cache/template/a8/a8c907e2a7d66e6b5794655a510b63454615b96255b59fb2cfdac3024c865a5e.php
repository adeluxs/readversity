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

/* tt_koparion4/template/product/product.twig */
class __TwigTemplate_727792cae3ccb42f4529e60d2ad24c5c3961f0962b24a183b2842e4a11ed6ee6 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
      <div class=\"column-main\">
\t  <div class=\"row\"> ";
        // line 18
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "        ";
            $context["class"] = "col-md-4 col-sm-6";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "        ";
            $context["class"] = "col-md-4 col-sm-6";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo " block-1 owl-style2\"> 
\t\t";
        // line 24
        if (($context["thumb"] ?? null)) {
            // line 25
            echo "\t\t\t<div class=\"thumbnails\">
\t\t\t\t<a class=\"thumbnail\" title=\"";
            // line 26
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t\t\t\t<img data-zoom-image=\"";
            // line 27
            echo ($context["popup"] ?? null);
            echo "\" src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" />
\t\t\t\t</a>
\t\t\t</div>\t\t\t
\t\t\t";
            // line 30
            if (($context["images"] ?? null)) {
                // line 31
                echo "\t\t\t\t<div class=\"image-additional-container owl-style3\">
\t\t\t\t\t\t<div id=\"gallery_01\" class=\"thumbnails-additional owl-carousel owl-theme\">
\t\t\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail current-additional\" data-image=\"";
                // line 33
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"  title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 34
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 37
                    echo "\t\t\t\t\t\t\t<a style=\"display: none\" href=\"#\" class=\"thumbnail\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 37);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 37);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 44
            echo "\t\t";
        }
        // line 45
        echo "        </div><!-- block-1 -->
        ";
        // line 46
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 47
            echo "        ";
            $context["class"] = "col-md-5 col-sm-6";
            // line 48
            echo "        ";
        } else {
            // line 49
            echo "        ";
            $context["class"] = "col-md-5 col-sm-6";
            // line 50
            echo "        ";
        }
        // line 51
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo " block-2 product-info-main\">
\t\t\t";
        // line 52
        if (($context["tags"] ?? null)) {
            // line 53
            echo "\t\t\t\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " 
\t\t\t\t\t\t\t<a href=\"";
                    // line 56
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 56);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 56);
                    echo "</a>,
\t\t\t\t\t\t";
                } else {
                    // line 57
                    echo " 
\t\t\t\t\t\t\t<a href=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 58);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 58);
                    echo "</a> 
\t\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t</p>
\t\t\t";
        }
        // line 63
        echo "\t\t\t<!--h1 class=\"heading-title\">";
        echo ($context["title_breadcrumb"] ?? null);
        echo "</h1-->
\t\t\t<h1 class=\"product-name\">";
        // line 64
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t";
        // line 65
        if (($context["review_status"] ?? null)) {
            // line 66
            echo "\t\t\t<div class=\"ratings\">
\t\t\t\t<div class=\"rating-box\">
\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 69
                echo "\t\t\t\t\t";
                if ((($context["rating"] ?? null) == $context["i"])) {
                    // line 70
                    echo "\t\t\t\t\t";
                    $context["class_r"] = ("rating" . $context["i"]);
                    // line 71
                    echo "\t\t\t\t\t<div class=\"";
                    echo ($context["class_r"] ?? null);
                    echo "\">rating</div>
\t\t\t\t\t";
                }
                // line 73
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t</div>
\t\t\t\t<a class=\"review-count\" href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('.block-3 .nav-tabs').offset().top}, 800); return false;\">";
            // line 75
            echo ($context["reviews"] ?? null);
            echo "</a><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('.block-3 .nav-tabs').offset().top}, 800); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a>
\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t            
\t\t\t";
        }
        // line 78
        echo "\t\t\t";
        if (($context["price"] ?? null)) {
            // line 79
            echo "\t\t\t\t";
            if ( !($context["special"] ?? null)) {
                // line 80
                echo "\t\t\t\t<div class=\"price-box box-regular\">
\t\t\t\t\t<span class=\"regular-price\">
\t\t\t\t\t\t<span class=\"price\">";
                // line 82
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t<div class=\"price-box box-special\">
\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                // line 87
                echo ($context["special"] ?? null);
                echo "</span></p>
\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                // line 88
                echo ($context["price"] ?? null);
                echo "</span></p>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 91
            echo "\t\t\t";
        }
        // line 92
        echo "\t\t\t
\t\t\t
\t\t\t
\t\t\t<div class=\"box-options\">
\t\t\t  ";
        // line 96
        if (($context["price"] ?? null)) {
            // line 97
            echo "\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t";
            // line 98
            if (($context["tax"] ?? null)) {
                // line 99
                echo "\t\t\t\t<li>";
                echo ($context["text_tax"] ?? null);
                echo "<span class=\"ex-text\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t";
            if (($context["points"] ?? null)) {
                // line 102
                echo "\t\t\t\t<li>";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 105
                echo "\t\t\t\t<li>
\t\t\t\t  <hr>
\t\t\t\t</li>
\t\t\t\t";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 109
                    echo "\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 109);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 109);
                    echo "</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t</ul>
\t\t\t";
        }
        // line 114
        echo "\t\t\t  <ul class=\"list-unstyled\">
\t\t\t\t";
        // line 115
        if (($context["manufacturer"] ?? null)) {
            // line 116
            echo "\t\t\t\t<li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\"><span class=\"ex-text\">";
            echo ($context["manufacturer"] ?? null);
            echo "</span></a></li>
\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t<li>";
        echo ($context["text_model"] ?? null);
        echo " <span class=\"ex-text\">";
        echo ($context["model"] ?? null);
        echo "</span></li>
\t\t\t\t";
        // line 119
        if (($context["reward"] ?? null)) {
            // line 120
            echo "\t\t\t\t<li>";
            echo ($context["text_reward"] ?? null);
            echo " <span class=\"ex-text\">";
            echo ($context["reward"] ?? null);
            echo "</span></li>
\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t<li>";
        echo ($context["text_stock"] ?? null);
        echo " <span class=\"ex-text\">";
        echo ($context["stock"] ?? null);
        echo "</span></li>
\t\t\t  </ul>
\t\t\t</div>
\t\t\t<div class=\"short-des\">";
        // line 125
        echo ($context["short_description"] ?? null);
        echo "</div>
\t\t<div id=\"product\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label\" for=\"input-quantity\">";
        // line 128
        echo ($context["entry_qty"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"quantity-box\">
\t\t\t\t\t<input type=\"button\" id=\"minus\" value=\"-\" class=\"form-control\" />\t
\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 131
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t<input type=\"button\" id=\"plus\" value=\"&#43;\" class=\"form-control\"/>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 134
        echo ($context["product_id"] ?? null);
        echo "\" />              
\t\t\t\t<button type=\"button\" class=\"button button-cart btn\" id=\"button-cart\" data-loading-text=\"";
        // line 135
        echo ($context["text_loading"] ?? null);
        echo "\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
\t\t\t\t<button class=\"button btn-wishlist btn btn-default\" type=\"button\"   title=\"";
        // line 136
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><span>";
        echo ($context["button_wishlist"] ?? null);
        echo "</span></button>
\t\t\t\t<button class=\"button btn-compare btn btn-default\" type=\"button\"   title=\"";
        // line 137
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
            </div>
\t\t\t";
        // line 139
        if (($context["options"] ?? null)) {
            // line 140
            echo "\t\t\t<div class=\"option-container\">
\t\t\t<h3>";
            // line 141
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 143
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 143) == "select")) {
                    // line 144
                    echo "\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 144)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo "</label>
\t\t\t\t\t<select name=\"option[";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">";
                    // line 147
                    echo ($context["text_select"] ?? null);
                    echo "</option>
\t\t\t\t\t\t";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 149
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 149);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 149);
                        echo "
\t\t\t\t\t\t";
                        // line 150
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 150)) {
                            // line 151
                            echo "\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 151);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 151);
                            echo ")
\t\t\t\t\t\t";
                        }
                        // line 153
                        echo "\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 155
                    echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 158
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 158) == "radio")) {
                    // line 159
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 159)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    echo "</label>
\t\t\t\t\t\t<div id=\"input-option";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                    echo "\"> 
\t\t\t\t\t\t";
                    // line 162
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 163
                        echo "\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 165
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 165);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 165);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 166
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 166)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 166);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 166);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 166);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 166);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
\t\t\t\t\t\t\t\t\t";
                        // line 167
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 167);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 168
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 168)) {
                            // line 169
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 169);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 169);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 171
                        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 177) == "checkbox")) {
                    // line 178
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 178)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 179);
                    echo "</label>
\t\t\t\t\t\t<div id=\"input-option";
                    // line 180
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 180);
                    echo "\">
\t\t\t\t\t\t";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 181));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 184
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 184);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 184);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 185
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 185)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 185);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 185);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 186
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 186);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 187
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 187)) {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 188);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 188);
                            echo ")
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 190
                        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 196) == "text")) {
                    // line 197
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 197)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 198
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 198);
                    echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 199
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 199);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 199);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 199);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 202
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 202) == "textarea")) {
                    // line 203
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 204
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                    echo "</label>
\t\t\t\t\t\t<textarea name=\"option[";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 205);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 205);
                    echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 208
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 208) == "file")) {
                    // line 209
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 209)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 210
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 210);
                    echo "</label>
\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 211
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 211);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 212
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                    echo "\" />
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 215
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 215) == "date")) {
                    // line 216
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 216)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 217);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 217);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 219
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 219);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 219);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 226
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 226) == "datetime")) {
                    // line 227
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 227)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 228
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 228);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 230);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 237) == "time")) {
                    // line 238
                    echo "\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 238)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 239
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 239);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 239);
                    echo "</label>
\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 241);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 241);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 248
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 251
        echo "\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 252
            echo "\t\t\t<hr>
\t\t\t<h3>";
            // line 253
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t<div class=\"form-group required\">
\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
            // line 256
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t";
            // line 257
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 258
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 258);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 258);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "\t\t\t\t</select>
\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t</div>
\t\t\t";
        }
        // line 264
        echo "            ";
        if ((($context["minimum"] ?? null) > 1)) {
            // line 265
            echo "\t\t\t<div class=\"clearfix\"></div>
            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            // line 266
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 268
        echo "\t\t</div><!-- #product -->            
\t\t<!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 270
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
\t  </div><!-- block-2 -->
\t\t";
        // line 274
        if (($context["products"] ?? null)) {
            // line 275
            echo "\t\t<div class=\"related-products list-module col-md-3 col-sm-12 \">
\t\t\t<div class=\"module-title\">
\t\t\t\t<h2>";
            // line 277
            echo ($context["text_related"] ?? null);
            echo "</h2>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"owl-container\">
\t\t\t<div class=\"related-container tt-product owl-carousel owl-theme\">
\t\t\t";
            // line 282
            $context["rows"] = 4;
            // line 283
            echo "\t\t\t";
            $context["count"] = 0;
            // line 284
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 285
                echo "\t\t\t\t";
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 286
                    echo "\t\t\t\t<div class=\"row_items\">
\t\t\t\t";
                }
                // line 288
                echo "\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 289
                echo "\t\t\t\t<div class=\"product-layout list-style\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">\t\t
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 294
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 294);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                // line 295
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 295)) {
                    echo "<img class=\"img-r\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 295);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 295);
                    echo "\" />";
                }
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 296);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 296);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 296);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 303
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 303)) {
                    // line 304
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 305
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 305);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 305);
                    echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 308
                echo "\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 308)) {
                    // line 309
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 311
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 312
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 312) == $context["i"])) {
                            // line 313
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 314
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 316
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 317
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 320
                echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 320);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 320);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 322
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 322)) {
                    // line 323
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 324
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    // line 325
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 325)) {
                        // line 326
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 326);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 328
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 328);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 329
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 329);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 331)) {
                        // line 332
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 332);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 334
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 336
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- caption -->\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->\t\t\t\t\t\t
\t\t\t\t</div><!-- product-layout -->        
\t\t\t\t";
                // line 345
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["products"] ?? null))))) {
                    // line 346
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 348
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            echo "\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div>
        ";
        }
        // line 354
        echo "\t\t</div>
\t\t
\t\t</div><!-- .row -->
\t\t<div class=\"block-3  product-info-detailed\">
\t\t\t<ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 359
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 360
        if (($context["attribute_groups"] ?? null)) {
            // line 361
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 363
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 364
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 366
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 368
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 369
        if (($context["attribute_groups"] ?? null)) {
            // line 370
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 373
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 375
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 375);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 379
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 379));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 380
                    echo "                <tr>
                  <td>";
                    // line 381
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 381);
                    echo "</td>
                  <td>";
                    // line 382
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 382);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "              </table>
            </div>
            ";
        }
        // line 390
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 391
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 394
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 395
            if (($context["review_guest"] ?? null)) {
                // line 396
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 398
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 399
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 404
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 406
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 411
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 412
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 422
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 424
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 427
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 431
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 433
            echo "              </form>
            </div>
            ";
        }
        // line 436
        echo "\t\t\t</div>
\t\t </div><!-- block-3 -->
\t\t ";
        // line 438
        echo ($context["content_bottom"] ?? null);
        echo "
      </div><!-- #content -->
    ";
        // line 440
        echo ($context["column_right"] ?? null);
        echo "</div>
                    
</div><!-- #product-product -->
<script ><!--
\$('#product-product select[name=\\'recurring_id\\'], #product-product input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('#product-product input[name=\\'product_id\\'], #product-product input[name=\\'quantity\\'], #product-product select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#product-product #recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\tif (json['success']) {
\t\t\t\t\$('#product-product #recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script ><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}
\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}
\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\$('#cart > button #cart-total').html(json['total']);
\t\t\t\t\t\t\$('#cart > button .total-price').html(json['total_price']);
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script ><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 511
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 515
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
\$('.time').datetimepicker({
\tlanguage: '";
        // line 520
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});
\$('#product-product button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;
\t\$('#product-product #form-upload').remove();
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t\$('#product-product #form-upload input[name=\\'file\\']').trigger('click');
\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}
\ttimer = setInterval(function() {
\t\tif (\$('#product-product #form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#product-product #form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script ><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();
    \$('#review').fadeOut('slow');
    \$('#review').load(this.href);
    \$('#review').fadeIn('slow');
});
\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 573
        echo ($context["product_id"] ?? null);
        echo "');
\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 576
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}
\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');
\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});
\$(document).ready(function() {
\t\$('.related-container').owlCarousel({
\t\tnav: false,
\t\tdots: false,
\t\tnavSpeed: 1000,
\t\tmargin: 0,
\t\tresponsive:{
\t\t\t0:{
\t\t\t\titems: 1,
\t\t\t\tnav: false
\t\t\t},
\t\t\t480:{
\t\t\t\titems: 2,
\t\t\t\tnav: false
\t\t\t},
\t\t\t768:{
\t\t\t\titems: 2
\t\t\t},
\t\t\t992:{
\t\t\t\titems: 1
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: 1
\t\t\t}
\t\t\t
\t\t},
\t\tonInitialized: function() {
\t\t\towlAction();
\t\t},
\t\tonTranslated: function() {
\t\t\towlAction();
\t\t}\t
\t});
\tfunction owlAction() {
\t\t\$(\".related-container .owl-item\").removeClass('first');
\t\t\$(\".related-container .owl-item\").removeClass('last');
\t\t\$(\".related-container .owl-item\").removeClass('before-active');
\t\t\$(\".related-container .owl-item.active:first\").addClass('first');
\t\t\$(\".related-container .owl-item.active:last\").addClass('last');
\t\t\$('.related-container .owl-item.active:first').prev().addClass('before-active');
\t}
\tvar thumbnails_owl = \$('#product-product .thumbnails-additional');\t
\tthumbnails_owl.on('initialize.owl.carousel initialized.owl.carousel ' +
\t\t'initialize.owl.carousel initialize.owl.carousel ',
\t\tfunction(e) {
\t\t  \$(\"#product-product #gallery_01 .thumbnail\").show();
\t\t});
\tthumbnails_owl.owlCarousel({
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
\t\t\t\titems: 3
\t\t\t},
\t\t\t992:{
\t\t\t\titems: 3
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: 4
\t\t\t}
\t\t}
\t});\t
\t\$(\"#product-product .thumbnails img\").elevateZoom({
\t\tzoomType : \"window\",
\t\tcursor: \"crosshair\",
\t\tgallery:'gallery_01', 
\t\tgalleryActiveClass: \"active\", 
\t\timageCrossfade: true,
\t\tresponsive: true,
\t\tzoomWindowOffetx: 0,
\t\tzoomWindowOffety: 0,
\t});
\tvar thumbnails_additional = \$('#product-product .thumbnails-additional .thumbnail');
\tthumbnails_additional.each(function(){
\t\t\$(this).click(function(){
\t\t\tthumbnails_additional.removeClass('current-additional');
\t\t\t\$(this).addClass('current-additional');
\t\t});
\t});
\tvar minimum = ";
        // line 689
        echo ($context["minimum"] ?? null);
        echo ";
\t\$(\"#product-product #input-quantity\").change(function(){
\t\tif (\$(this).val() < minimum) {
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t});
\t  // increase number of product
\tfunction minus(minimum){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval-1);
\t\tif(\$(\"#product-product #input-quantity\").val() <= 0 || \$(\"#product-product #input-quantity\").val() < minimum){
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t  };
\t  // decrease of product
\tfunction plus(){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval+1);
\t};
\t\$('#product-product #minus').click(function(){
\t\tminus(minimum);
\t});
\t\$('#product-product #plus').click(function(){
\t\tplus();
\t});
});
//--></script> 
";
        // line 718
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1637 => 718,  1605 => 689,  1489 => 576,  1483 => 573,  1427 => 520,  1419 => 515,  1412 => 511,  1338 => 440,  1333 => 438,  1329 => 436,  1324 => 433,  1318 => 431,  1309 => 427,  1303 => 424,  1298 => 422,  1285 => 412,  1281 => 411,  1273 => 406,  1268 => 404,  1260 => 399,  1256 => 398,  1252 => 396,  1250 => 395,  1246 => 394,  1241 => 391,  1238 => 390,  1233 => 387,  1226 => 385,  1217 => 382,  1213 => 381,  1210 => 380,  1206 => 379,  1199 => 375,  1195 => 373,  1191 => 372,  1187 => 370,  1185 => 369,  1181 => 368,  1177 => 366,  1171 => 364,  1168 => 363,  1162 => 361,  1160 => 360,  1156 => 359,  1149 => 354,  1142 => 349,  1136 => 348,  1132 => 346,  1130 => 345,  1119 => 336,  1115 => 334,  1107 => 332,  1104 => 331,  1099 => 329,  1094 => 328,  1088 => 326,  1086 => 325,  1082 => 324,  1079 => 323,  1077 => 322,  1069 => 320,  1064 => 317,  1058 => 316,  1052 => 314,  1049 => 313,  1046 => 312,  1042 => 311,  1038 => 309,  1035 => 308,  1027 => 305,  1024 => 304,  1022 => 303,  1007 => 296,  999 => 295,  995 => 294,  988 => 289,  985 => 288,  981 => 286,  978 => 285,  973 => 284,  970 => 283,  968 => 282,  960 => 277,  956 => 275,  954 => 274,  947 => 270,  943 => 268,  938 => 266,  935 => 265,  932 => 264,  926 => 260,  915 => 258,  911 => 257,  907 => 256,  901 => 253,  898 => 252,  895 => 251,  891 => 249,  885 => 248,  871 => 241,  864 => 239,  857 => 238,  854 => 237,  840 => 230,  833 => 228,  826 => 227,  823 => 226,  809 => 219,  802 => 217,  795 => 216,  792 => 215,  784 => 212,  776 => 211,  772 => 210,  765 => 209,  762 => 208,  750 => 205,  744 => 204,  737 => 203,  734 => 202,  722 => 199,  716 => 198,  709 => 197,  706 => 196,  701 => 193,  693 => 190,  686 => 188,  684 => 187,  679 => 186,  663 => 185,  657 => 184,  653 => 182,  649 => 181,  645 => 180,  641 => 179,  634 => 178,  631 => 177,  626 => 174,  618 => 171,  611 => 169,  609 => 168,  605 => 167,  587 => 166,  581 => 165,  577 => 163,  573 => 162,  569 => 161,  565 => 160,  558 => 159,  555 => 158,  550 => 155,  543 => 153,  536 => 151,  534 => 150,  527 => 149,  523 => 148,  519 => 147,  513 => 146,  507 => 145,  500 => 144,  497 => 143,  493 => 142,  489 => 141,  486 => 140,  484 => 139,  475 => 137,  467 => 136,  461 => 135,  457 => 134,  451 => 131,  445 => 128,  439 => 125,  430 => 122,  422 => 120,  420 => 119,  413 => 118,  403 => 116,  401 => 115,  398 => 114,  394 => 112,  391 => 111,  380 => 109,  376 => 108,  371 => 105,  368 => 104,  360 => 102,  357 => 101,  349 => 99,  347 => 98,  344 => 97,  342 => 96,  336 => 92,  333 => 91,  327 => 88,  323 => 87,  320 => 86,  313 => 82,  309 => 80,  306 => 79,  303 => 78,  295 => 75,  292 => 74,  286 => 73,  280 => 71,  277 => 70,  274 => 69,  270 => 68,  266 => 66,  264 => 65,  260 => 64,  255 => 63,  251 => 61,  245 => 60,  238 => 58,  235 => 57,  228 => 56,  223 => 55,  219 => 54,  214 => 53,  212 => 52,  207 => 51,  204 => 50,  201 => 49,  198 => 48,  195 => 47,  193 => 46,  190 => 45,  187 => 44,  182 => 41,  169 => 38,  160 => 37,  156 => 36,  147 => 34,  139 => 33,  135 => 31,  133 => 30,  121 => 27,  117 => 26,  114 => 25,  112 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  93 => 18,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/product/product.twig", "");
    }
}
