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

/* tt_koparion4/template/extension/module/octabproducts.twig */
class __TwigTemplate_f970d7b32115fde77aca363b6f303ea6477208979867ecc45df23d6c213c6292 extends \Twig\Template
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
        echo "<div class=\"tt_tabsproduct_module";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 1) >= 2)) {
            echo " multi-rows";
        }
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "class", [], "any", false, false, false, 1);
        echo "\" id=\"product_module";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 1);
        echo "\">
\t<div class=\"module-title\">
\t  <h2>
\t\t";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "title_lang", [], "any", false, false, false, 4)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["code"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t  ";
            echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "title_lang", [], "any", false, false, false, 5)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["code"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 5);
            echo "
\t\t";
        } else {
            // line 7
            echo "\t\t  ";
            echo ($context["heading_title"] ?? null);
            echo "
\t\t";
        }
        // line 9
        echo "\t  </h2>
\t  ";
        // line 10
        if (($context["module_description"] ?? null)) {
            // line 11
            echo "\t\t<div class=\"module-description\">
\t\t  ";
            // line 12
            echo ($context["module_description"] ?? null);
            echo "
\t\t</div>
\t  ";
        }
        // line 15
        echo "\t   <ul class=\"tab-heading tabs-categorys\">
\t  ";
        // line 16
        $context["i"] = 0;
        // line 17
        echo "\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["octabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 18
            echo "\t\t<li>
\t\t\t<a data-toggle=\"pill\" href=\"#tab-";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 19);
            echo ($context["i"] ?? null);
            echo "\">
\t\t\t\t";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 20) == 2)) {
                echo "\t
\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["octab"], "thumbnail_image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t<span class=\"wrapper-thumb\"><img class=\"thumb-img\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octab"], "thumbnail_image", [], "any", false, false, false, 22);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["octab"], "title", [], "any", false, false, false, 22);
                    echo "\" /></span>
\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t<span>";
            echo twig_get_attribute($this->env, $this->source, $context["octab"], "title", [], "any", false, false, false, 25);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 28
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 29
            echo "\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t</ul>
\t<div class=\"clearfix\"></div>  
  </div>
 
\t
  ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 35)) {
            // line 36
            echo "\t";
            $context["class_slider"] = " owl-carousel owl-theme ";
            // line 37
            echo "  ";
        } else {
            // line 38
            echo "\t";
            $context["class_slider"] = "";
            // line 39
            echo "  ";
        }
        // line 40
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 40) == 0)) {
            // line 41
            echo "\t";
            $context["class"] = "two_items col-lg-6 col-md-6 col-sm-6 col-xs-12";
            echo "\t
  ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 42
($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 42) == 1)) {
            // line 43
            echo "\t";
            $context["class"] = "three_items col-lg-4 col-md-4 col-sm-4 col-xs-12";
            // line 44
            echo "  ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 44) == 2)) {
            // line 45
            echo "\t";
            $context["class"] = "four_items col-lg-3 col-md-3 col-sm-3 col-xs-12";
            // line 46
            echo "  ";
        } else {
            // line 47
            echo "\t";
            $context["class"] = "six_items col-lg-2 col-md-2 col-sm-2 col-xs-12";
            // line 48
            echo "  ";
        }
        // line 49
        echo "  <div class=\"box-style\">
\t<div class=\"owl-container\">
  <div class=\"tt-product \">
    <div class=\"tab-content\">
\t\t";
        // line 53
        $context["i"] = 0;
        echo "\t  
\t\t";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 54)) {
            // line 55
            echo "\t\t\t";
            $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 55);
            // line 56
            echo "\t\t";
        } else {
            // line 57
            echo "\t\t\t";
            $context["rows"] = 1;
            // line 58
            echo "\t\t";
        }
        echo "\t\t
\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["octabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["octab"]) {
            // line 60
            echo "\t";
            list($context["count"], $context["count_i"]) =             [0, 0];
            // line 61
            echo "\t";
            list($context["items_numb"], $context["items_gnumb"]) =             [3, 6];
            // line 62
            echo "\t<div class=\"tab-container-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 62);
            echo " ";
            echo ($context["class_slider"] ?? null);
            echo " tab-pane fade\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 62);
            echo ($context["i"] ?? null);
            echo "\">\t\t
\t";
            // line 63
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 63)) > 0)) {
                // line 64
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 65
                    echo "\t\t\t";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 65)) {
                        $context["rows"] = 1;
                    }
                    // line 66
                    echo "            <!-- Grid -->
\t\t\t";
                    // line 67
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 67) == 0)) {
                        echo "\t
\t\t\t";
                        // line 68
                        if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                            // line 69
                            echo "\t\t\t<div class=\"row_items ";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 69)) {
                                echo ($context["class"] ?? null);
                            }
                            echo "\">
\t\t\t";
                        }
                        // line 71
                        echo "\t\t\t";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 72
                        echo "\t\t\t\t\t
\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 79
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 79);
                        echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 80
                        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 80) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 80))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 80);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                            echo "\" />";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 81);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                        // line 83
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 83)) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 84)) {
                                // line 85
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo ($context["text_label_sale"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 88)) {
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 89)) {
                                // line 90
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo ($context["text_label_new"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 94
                        if (($context["use_quickview"] ?? null)) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 95)) {
                                // line 96
                                echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 98
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 103
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 103)) {
                            // line 104
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 105
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 105);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 105);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 108)) {
                            // line 109
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 111
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 112
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 112) == $context["i"])) {
                                    // line 113
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 114
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo ($context["class_r"] ?? null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 116
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 120);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 120);
                        echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                        // line 121
                        if (($context["use_catalog"] ?? null)) {
                            // line 122
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 122)) {
                                // line 123
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                                // line 124
                                echo ($context["price_label"] ?? null);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                                // line 125
                                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 125)) {
                                    // line 126
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 126);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 128
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 128);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                    // line 129
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 129);
                                    echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 131
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 131)) {
                                    // line 132
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                    echo ($context["text_tax"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 132);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 134
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 136
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 139
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 139)) {
                            // line 140
                            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 140);
                            echo "</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 142)) {
                            echo "<div class=\"text-hurryup\"><p>";
                            echo ($context["text_hurryup"] ?? null);
                            echo "</p></div><div id=\"Countdown";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 142);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 143
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 143) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 143)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 143))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 146
                            if (($context["use_catalog"] ?? null)) {
                                // line 147
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 147)) {
                                    // line 148
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                    echo ($context["button_cart"] ?? null);
                                    echo "\" onclick=\"cart.add('";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                                    echo "');\"><span>";
                                    echo ($context["button_cart"] ?? null);
                                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 150
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 151
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 152
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 152)) {
                                // line 153
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 153);
                                echo "');\"><span>";
                                echo ($context["button_wishlist"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 155
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 155)) {
                                // line 156
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                                echo "');\"><span>";
                                echo ($context["button_compare"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 158
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 166
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 166) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 166))) {
                            // line 167
                            echo "\t\t\t\t\t\t<script >
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 169
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 169);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 170
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 170), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 170), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 170), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 170), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 170), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 170), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 171
                            echo ($context["text_years"] ?? null);
                            echo "', '";
                            echo ($context["text_months"] ?? null);
                            echo " ', '";
                            echo ($context["text_weeks"] ?? null);
                            echo "', '";
                            echo ($context["text_days"] ?? null);
                            echo "', '";
                            echo ($context["text_hrs"] ?? null);
                            echo "', '";
                            echo ($context["text_mins"] ?? null);
                            echo "', '";
                            echo ($context["text_secs"] ?? null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 172
                            echo ($context["text_year"] ?? null);
                            echo "', '";
                            echo ($context["text_month"] ?? null);
                            echo " ', '";
                            echo ($context["text_week"] ?? null);
                            echo "', '";
                            echo ($context["text_day"] ?? null);
                            echo "', '";
                            echo ($context["text_hr"] ?? null);
                            echo "', '";
                            echo ($context["text_min"] ?? null);
                            echo "', '";
                            echo ($context["text_sec"] ?? null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                            // line 174
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 178
                        echo "\t\t\t\t</div><!-- product-layout -->
\t\t\t\t";
                        // line 179
                        if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 179))))) {
                            // line 180
                            echo "\t\t\t\t</div>
\t\t\t\t";
                        }
                        // line 182
                        echo "            ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 182) == 1)) {
                        // line 183
                        echo "            <!-- List -->
\t\t\t";
                        // line 184
                        if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                            // line 185
                            echo "\t\t\t<div class=\"row_items ";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 185)) {
                                echo ($context["class"] ?? null);
                            }
                            echo "\">
\t\t\t";
                        }
                        // line 187
                        echo "\t\t\t";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 188
                        echo "\t\t\t\t<div class=\"product-layout list-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 193);
                        echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 194
                        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 194) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 194))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 194);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 194);
                            echo "\" />";
                        }
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 195);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 195);
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                        // line 197
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 197)) {
                            // line 198
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 198)) {
                                // line 199
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo ($context["text_label_sale"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 201
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 203)) {
                                // line 204
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo ($context["text_label_new"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 206
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 207
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 208
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 208)) {
                                // line 209
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view\"><button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 209);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button></div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 211
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 212
                        echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                        // line 214
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 214)) {
                            // line 215
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 216);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 216);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 219)) {
                            // line 220
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                            // line 222
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 223
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 223) == $context["i"])) {
                                    // line 224
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 225
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo ($context["class_r"] ?? null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 227
                                echo "\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 228
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 231
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 231);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 231);
                        echo "</a></h4> 
\t\t\t\t\t\t\t\t\t";
                        // line 232
                        if (($context["use_catalog"] ?? null)) {
                            // line 233
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 233)) {
                                // line 234
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                                // line 235
                                echo ($context["price_label"] ?? null);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                                // line 236
                                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 236)) {
                                    // line 237
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 237);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 239
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 239);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                    // line 240
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 240);
                                    echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 242
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 242)) {
                                    // line 243
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                    echo ($context["text_tax"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 243);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 245
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 247
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 248
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 249)) {
                            // line 250
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 250);
                            echo "</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 252
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 252)) {
                            echo "<div class=\"text-hurryup\"><p>";
                            echo ($context["text_hurryup"] ?? null);
                            echo "</p></div><div id=\"Countdown";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 252);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 253
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 253) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 253)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 253))) {
                            echo "\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 255
                            if (($context["use_catalog"] ?? null)) {
                                // line 256
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 256)) {
                                    // line 257
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                    echo ($context["button_cart"] ?? null);
                                    echo "\" onclick=\"cart.add('";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 257);
                                    echo "');\"><span>";
                                    echo ($context["button_cart"] ?? null);
                                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 259
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 260
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 260)) {
                                // line 261
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 261);
                                echo "');\"><span>";
                                echo ($context["button_wishlist"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 263
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 263)) {
                                // line 264
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 264);
                                echo "');\"><span>";
                                echo ($context["button_compare"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 266
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 268
                        echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 272
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 272) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 272))) {
                            // line 273
                            echo "\t\t\t\t\t\t<script >
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 275
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 275);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 276
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 276), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 277
                            echo ($context["text_years"] ?? null);
                            echo "', '";
                            echo ($context["text_months"] ?? null);
                            echo " ', '";
                            echo ($context["text_weeks"] ?? null);
                            echo "', '";
                            echo ($context["text_days"] ?? null);
                            echo "', '";
                            echo ($context["text_hrs"] ?? null);
                            echo "', '";
                            echo ($context["text_mins"] ?? null);
                            echo "', '";
                            echo ($context["text_secs"] ?? null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 278
                            echo ($context["text_year"] ?? null);
                            echo "', '";
                            echo ($context["text_month"] ?? null);
                            echo " ', '";
                            echo ($context["text_week"] ?? null);
                            echo "', '";
                            echo ($context["text_day"] ?? null);
                            echo "', '";
                            echo ($context["text_hr"] ?? null);
                            echo "', '";
                            echo ($context["text_min"] ?? null);
                            echo "', '";
                            echo ($context["text_sec"] ?? null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                            // line 280
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 280);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 284
                        echo "\t\t\t\t</div><!-- product-layout -->
\t\t\t\t";
                        // line 285
                        if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 285))))) {
                            // line 286
                            echo "\t\t\t\t</div>
\t\t\t\t";
                        }
                        // line 288
                        echo "            ";
                    } else {
                        // line 289
                        echo "            <!-- other type -->
\t\t\t";
                        // line 290
                        if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                            // line 291
                            echo "\t\t\t<div class=\"row_items ";
                            if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 291)) {
                                echo ($context["class"] ?? null);
                            }
                            echo "\">
\t\t\t";
                        }
                        // line 293
                        echo "\t\t\t";
                        $context["count"] = (($context["count"] ?? null) + 1);
                        // line 294
                        echo "\t\t\t\t<div class=\"product-layout product-customize \">
\t\t\t\t\t<div class=\"product-thumb transition \">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 300
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 300);
                        echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 301
                        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 301) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 301))) {
                            echo "<img class=\"img-r\" src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 301);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 301);
                            echo "\" />";
                        }
                        // line 302
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 302);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 302);
                        echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                        // line 304
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 304)) {
                            // line 305
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 305)) {
                                // line 306
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                                echo ($context["text_label_sale"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 308
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 309)) {
                            // line 310
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 310)) {
                                // line 311
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                                echo ($context["text_label_new"] ?? null);
                                echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 313
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 314
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 315
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 315)) {
                                // line 316
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"quick-view\"><button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 316);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button></div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 318
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 319
                        echo "\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                        // line 323
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 323)) {
                            // line 324
                            echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 325
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 325);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 325);
                            echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 328
                        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 328);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 328);
                        echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                        // line 329
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 329)) {
                            // line 330
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 332
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(0, 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 333
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 333) == $context["i"])) {
                                    // line 334
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["class_r"] = ("rating" . $context["i"]);
                                    // line 335
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                    echo ($context["class_r"] ?? null);
                                    echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 337
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 338
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 340
                        echo "\t
\t\t\t\t\t\t\t\t\t";
                        // line 341
                        if (($context["use_catalog"] ?? null)) {
                            // line 342
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 342)) {
                                // line 343
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                                // line 344
                                echo ($context["price_label"] ?? null);
                                echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                                // line 345
                                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 345)) {
                                    // line 346
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 346);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 348
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 348);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                    // line 349
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 349);
                                    echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 351
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 351)) {
                                    // line 352
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                    echo ($context["text_tax"] ?? null);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 352);
                                    echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 354
                                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 356
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 357
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                        // line 358
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 358)) {
                            echo "<div class=\"text-hurryup\"><p>";
                            echo ($context["text_hurryup"] ?? null);
                            echo "</p></div><div id=\"Countdown";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 358);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "\" class=\"box-timer\"></div> ";
                        }
                        // line 359
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 359) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 359)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 359))) {
                            echo "\t
\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 361
                            if (($context["use_catalog"] ?? null)) {
                                // line 362
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 362)) {
                                    // line 363
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                    echo ($context["button_cart"] ?? null);
                                    echo "\" onclick=\"cart.add('";
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 363);
                                    echo "');\"><span>";
                                    echo ($context["button_cart"] ?? null);
                                    echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 365
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 366
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 366)) {
                                // line 367
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                                echo ($context["button_wishlist"] ?? null);
                                echo "\" onclick=\"wishlist.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 367);
                                echo "');\"><span>";
                                echo ($context["button_wishlist"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 369
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 369)) {
                                // line 370
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                                echo ($context["button_compare"] ?? null);
                                echo "\" onclick=\"compare.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 370);
                                echo "');\"><span>";
                                echo ($context["button_compare"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 372
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 374
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 374)) {
                            // line 375
                            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 375);
                            echo "</p>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 377
                        echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                        // line 382
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 382) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 382))) {
                            // line 383
                            echo "\t\t\t\t\t\t<script >
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                            // line 385
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 385);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                            // line 386
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 386), "Y");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 386), "m");
                            echo "-1, ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 386), "d");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 386), "H");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 386), "i");
                            echo ", ";
                            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 386), "s");
                            echo "),
\t\t\t\t\t\tlabels: ['";
                            // line 387
                            echo ($context["text_years"] ?? null);
                            echo "', '";
                            echo ($context["text_months"] ?? null);
                            echo " ', '";
                            echo ($context["text_weeks"] ?? null);
                            echo "', '";
                            echo ($context["text_days"] ?? null);
                            echo "', '";
                            echo ($context["text_hrs"] ?? null);
                            echo "', '";
                            echo ($context["text_mins"] ?? null);
                            echo "', '";
                            echo ($context["text_secs"] ?? null);
                            echo "'],
\t\t\t\t\t\tlabels1: ['";
                            // line 388
                            echo ($context["text_year"] ?? null);
                            echo "', '";
                            echo ($context["text_month"] ?? null);
                            echo " ', '";
                            echo ($context["text_week"] ?? null);
                            echo "', '";
                            echo ($context["text_day"] ?? null);
                            echo "', '";
                            echo ($context["text_hr"] ?? null);
                            echo "', '";
                            echo ($context["text_min"] ?? null);
                            echo "', '";
                            echo ($context["text_sec"] ?? null);
                            echo "'],
\t\t\t\t\t\t});
\t\t\t\t\t\t// \$('#Countdown";
                            // line 390
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 390);
                            echo "-";
                            echo ($context["i"] ?? null);
                            echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                        }
                        // line 394
                        echo "\t\t\t\t</div><!-- product-layout -->
\t\t\t";
                        // line 395
                        if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["octab"], "products", [], "any", false, false, false, 395))))) {
                            // line 396
                            echo "\t\t\t\t</div>
\t\t\t";
                        }
                        // line 398
                        echo "\t\t\t";
                    }
                    // line 399
                    echo "\t\t\t\t
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 400
                echo "\t\t  \t\t  
\t\t";
            } else {
                // line 402
                echo "\t\t\t<p class=\"text_empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
\t\t";
            }
            // line 404
            echo "        </div>
\t\t";
            // line 405
            $context["i"] = (($context["i"] ?? null) + 1);
            echo "\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['octab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
        echo "\t\t
    </div>
  </div>
  </div>
  </div>
  <div class=\"clearfix\"></div>
</div>

  <script >
    \$(document).ready(function() {
      \$('a[href=\"#tab-";
        // line 416
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 416);
        echo "0\"]').trigger( \"click\" );
\t  ";
        // line 417
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 417)) {
            // line 418
            echo "      \$(\".tab-container-";
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 418);
            echo "\").owlCarousel({
\t\titems: ";
            // line 419
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 419);
            echo ",
        loop: ";
            // line 420
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "loop", [], "any", false, false, false, 420)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        margin: ";
            // line 421
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", true, true, false, 421)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", false, false, false, 421);
                echo " ";
            } else {
                echo " 20 ";
            }
            echo ",
        nav: ";
            // line 422
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "navigation", [], "any", false, false, false, 422)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        dots: ";
            // line 423
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "pagination", [], "any", false, false, false, 423)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        autoplay:  ";
            // line 424
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "auto", [], "any", false, false, false, 424)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
        autoplayTimeout: ";
            // line 425
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 425)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 425);
                echo " ";
            } else {
                echo " 2000 ";
            }
            echo ",
        autoplayHoverPause: true,
        autoplaySpeed: ";
            // line 427
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 427)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 427);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
        navSpeed: ";
            // line 428
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 428)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 428);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
        dotsSpeed: ";
            // line 429
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 429)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 429);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\tlazyLoad: true,
        responsive:{
\t\t\t0:{
\t\t\t\titems: 1,
\t\t\t\tnav: false
\t\t\t},
\t\t\t480:{
\t\t\t\titems: ";
            // line 437
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "smobile", [], "any", false, false, false, 437);
            echo ",
\t\t\t\tnav: false
\t\t\t},
\t\t\t768:{
\t\t\t\titems: ";
            // line 441
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "mobile", [], "any", false, false, false, 441);
            echo "
\t\t\t},
\t\t\t992:{
\t\t\t\titems: ";
            // line 444
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "tablet", [], "any", false, false, false, 444);
            echo "
\t\t\t},
\t\t\t1200:{
\t\t\t\titems: ";
            // line 447
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "desktop", [], "any", false, false, false, 447);
            echo "
\t\t\t},
\t\t\t1600:{
\t\t\t\titems: ";
            // line 450
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 450);
            echo "
\t\t\t}
\t\t},
\t\tonInitialized: function() {
\t\t\tvar count = \$(\".tab-container-";
            // line 454
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 454);
            echo " .owl-item.active\").length;
\t\t\tif(count == 1) {
\t\t\t\t\$(\".tab-container-";
            // line 456
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 456);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 457
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 457);
            echo " .owl-item.active\").addClass('first');
\t\t\t} else {
\t\t\t\t\$(\".tab-container-";
            // line 459
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 459);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 460
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 460);
            echo " .owl-item.active:first\").addClass('first');
\t\t\t}
\t\t},
\t\tonTranslated: function() {
\t\t\tvar count = \$(\".tab-container-";
            // line 464
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 464);
            echo " .owl-item.active\").length;
\t\t\tif(count == 1) {
\t\t\t\t\$(\".tab-container-";
            // line 466
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 466);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 467
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 467);
            echo " .owl-item.active\").addClass('first');
\t\t\t} else {
\t\t\t\t\$(\".tab-container-";
            // line 469
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 469);
            echo " .owl-item\").removeClass('first');
\t\t\t\t\$(\".tab-container-";
            // line 470
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 470);
            echo " .owl-item.active:first\").addClass('first');
\t\t\t}
\t\t}
      });
\t";
        }
        // line 475
        echo "    });
  </script>

";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/octabproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1568 => 475,  1560 => 470,  1556 => 469,  1551 => 467,  1547 => 466,  1542 => 464,  1535 => 460,  1531 => 459,  1526 => 457,  1522 => 456,  1517 => 454,  1510 => 450,  1504 => 447,  1498 => 444,  1492 => 441,  1485 => 437,  1468 => 429,  1458 => 428,  1448 => 427,  1437 => 425,  1429 => 424,  1421 => 423,  1413 => 422,  1403 => 421,  1395 => 420,  1391 => 419,  1386 => 418,  1384 => 417,  1380 => 416,  1368 => 406,  1360 => 405,  1357 => 404,  1351 => 402,  1347 => 400,  1340 => 399,  1337 => 398,  1333 => 396,  1331 => 395,  1328 => 394,  1319 => 390,  1302 => 388,  1286 => 387,  1272 => 386,  1266 => 385,  1262 => 383,  1260 => 382,  1253 => 377,  1247 => 375,  1244 => 374,  1240 => 372,  1230 => 370,  1227 => 369,  1217 => 367,  1214 => 366,  1211 => 365,  1201 => 363,  1198 => 362,  1196 => 361,  1190 => 359,  1180 => 358,  1177 => 357,  1174 => 356,  1170 => 354,  1162 => 352,  1159 => 351,  1154 => 349,  1149 => 348,  1143 => 346,  1141 => 345,  1137 => 344,  1134 => 343,  1131 => 342,  1129 => 341,  1126 => 340,  1121 => 338,  1115 => 337,  1109 => 335,  1106 => 334,  1103 => 333,  1099 => 332,  1095 => 330,  1093 => 329,  1086 => 328,  1078 => 325,  1075 => 324,  1073 => 323,  1067 => 319,  1064 => 318,  1054 => 316,  1051 => 315,  1048 => 314,  1045 => 313,  1039 => 311,  1036 => 310,  1033 => 309,  1030 => 308,  1024 => 306,  1021 => 305,  1019 => 304,  1009 => 302,  1001 => 301,  997 => 300,  989 => 294,  986 => 293,  978 => 291,  976 => 290,  973 => 289,  970 => 288,  966 => 286,  964 => 285,  961 => 284,  952 => 280,  935 => 278,  919 => 277,  905 => 276,  899 => 275,  895 => 273,  893 => 272,  887 => 268,  883 => 266,  873 => 264,  870 => 263,  860 => 261,  857 => 260,  854 => 259,  844 => 257,  841 => 256,  839 => 255,  833 => 253,  822 => 252,  816 => 250,  814 => 249,  811 => 248,  808 => 247,  804 => 245,  796 => 243,  793 => 242,  788 => 240,  783 => 239,  777 => 237,  775 => 236,  771 => 235,  768 => 234,  765 => 233,  763 => 232,  756 => 231,  751 => 228,  745 => 227,  739 => 225,  736 => 224,  733 => 223,  729 => 222,  725 => 220,  722 => 219,  714 => 216,  711 => 215,  709 => 214,  705 => 212,  702 => 211,  692 => 209,  689 => 208,  686 => 207,  683 => 206,  677 => 204,  674 => 203,  671 => 202,  668 => 201,  662 => 199,  659 => 198,  657 => 197,  647 => 195,  639 => 194,  635 => 193,  628 => 188,  625 => 187,  617 => 185,  615 => 184,  612 => 183,  609 => 182,  605 => 180,  603 => 179,  600 => 178,  591 => 174,  574 => 172,  558 => 171,  544 => 170,  538 => 169,  534 => 167,  532 => 166,  525 => 161,  520 => 158,  510 => 156,  507 => 155,  497 => 153,  495 => 152,  492 => 151,  489 => 150,  479 => 148,  476 => 147,  474 => 146,  467 => 143,  456 => 142,  450 => 140,  448 => 139,  444 => 137,  441 => 136,  437 => 134,  429 => 132,  426 => 131,  421 => 129,  416 => 128,  410 => 126,  408 => 125,  404 => 124,  401 => 123,  398 => 122,  396 => 121,  389 => 120,  384 => 117,  378 => 116,  372 => 114,  369 => 113,  366 => 112,  362 => 111,  358 => 109,  355 => 108,  347 => 105,  344 => 104,  342 => 103,  336 => 99,  333 => 98,  323 => 96,  320 => 95,  318 => 94,  315 => 93,  312 => 92,  306 => 90,  303 => 89,  300 => 88,  297 => 87,  291 => 85,  288 => 84,  286 => 83,  276 => 81,  268 => 80,  264 => 79,  255 => 72,  252 => 71,  244 => 69,  242 => 68,  238 => 67,  235 => 66,  230 => 65,  225 => 64,  223 => 63,  213 => 62,  210 => 61,  207 => 60,  203 => 59,  198 => 58,  195 => 57,  192 => 56,  189 => 55,  187 => 54,  183 => 53,  177 => 49,  174 => 48,  171 => 47,  168 => 46,  165 => 45,  162 => 44,  159 => 43,  157 => 42,  152 => 41,  149 => 40,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  135 => 35,  128 => 30,  122 => 29,  120 => 28,  113 => 25,  110 => 24,  102 => 22,  100 => 21,  96 => 20,  91 => 19,  88 => 18,  83 => 17,  81 => 16,  78 => 15,  72 => 12,  69 => 11,  67 => 10,  64 => 9,  58 => 7,  52 => 5,  50 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/octabproducts.twig", "");
    }
}
