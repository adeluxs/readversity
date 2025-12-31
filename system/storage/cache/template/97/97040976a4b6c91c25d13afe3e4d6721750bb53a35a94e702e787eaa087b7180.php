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

/* tt_koparion4/template/extension/module/ocproduct.twig */
class __TwigTemplate_79d73c8e3635b7f3d179f58a4559bf17381cf1845aa89a859f520dffa37d2f8f extends \Twig\Template
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
        echo "<div class=\"tt_product_module";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 1) >= 2)) {
            echo " multi-rows";
        }
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "class", [], "any", false, false, false, 1);
        echo "\" id=\"product_module";
        echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 1);
        echo "\">
    <div class=\"module-title\">
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
        echo "\t</div>
\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t";
            $context["class_slider"] = " owl-carousel owl-theme ";
            // line 18
            echo "\t";
        } else {
            // line 19
            echo "\t\t";
            $context["class_slider"] = "";
            // line 20
            echo "\t";
        }
        // line 21
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 21) == 0)) {
            // line 22
            echo "\t\t";
            $context["class"] = "two_items col-lg-6 col-md-6 col-sm-6 col-xs-12";
            // line 23
            echo "\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 23) == 1)) {
            // line 24
            echo "\t\t";
            $context["class"] = "three_items col-lg-4 col-md-4 col-sm-4 col-xs-12";
            // line 25
            echo "\t";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "nrow", [], "any", false, false, false, 25) == 2)) {
            // line 26
            echo "\t\t";
            $context["class"] = "four_items col-lg-3 col-md-3 col-sm-3 col-xs-12";
            // line 27
            echo "\t";
        } else {
            echo "\t\t
\t\t";
            // line 28
            $context["class"] = "six_items col-lg-2 col-md-2 col-sm-2 col-xs-12";
            // line 29
            echo "\t";
        }
        // line 30
        echo "\t";
        if ((twig_length_filter($this->env, ($context["products"] ?? null)) > 0)) {
            // line 31
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 31)) {
                // line 32
                echo "\t\t\t";
                $context["rows"] = twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "row", [], "any", false, false, false, 32);
                // line 33
                echo "\t\t";
            } else {
                // line 34
                echo "\t\t\t";
                $context["rows"] = 1;
                // line 35
                echo "\t\t";
            }
            // line 36
            echo "\t\t";
            $context["count"] = 0;
            // line 37
            echo "    <div class=\"owl-container\">
\t<div class=\"tt-product ";
            // line 38
            echo ($context["class_slider"] ?? null);
            echo "\">\t
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                echo " 
\t\t\t";
                // line 40
                if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 40)) {
                    $context["rows"] = 1;
                }
                // line 41
                echo "            <!-- Grid -->
\t\t\t";
                // line 42
                if (((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0)) {
                    // line 43
                    echo "\t\t\t<div class=\"row_items ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 43)) {
                        echo ($context["class"] ?? null);
                    }
                    echo "\">
\t\t\t";
                }
                // line 45
                echo "\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 46
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "type", [], "any", false, false, false, 46) == 0)) {
                    // line 47
                    echo "\t\t\t\t<div class=\"product-layout grid-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                    echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 53
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 53) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 53))) {
                        echo "<img class=\"img-r\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 53);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                        echo "\" />";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 54);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 54);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                    // line 56
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 56)) {
                        // line 57
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57)) {
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                            echo ($context["text_label_sale"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 59
                        echo " 
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 61)) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 62)) {
                            // line 63
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                            echo ($context["text_label_new"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["use_quickview"] ?? null)) {
                        // line 67
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 67)) {
                            // line 68
                            echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                            echo ($context["button_quickview"] ?? null);
                            echo "\" onclick=\"ocquickview.ajaxView('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
                            echo "')\"><span>";
                            echo ($context["button_quickview"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 70
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 75
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 75)) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 77);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 77);
                        echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 80)) {
                        echo "<div class=\"text-hurryup\"><p>";
                        echo ($context["text_hurryup"] ?? null);
                        echo "</p></div><div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "\" class=\"box-timer\"></div> ";
                    }
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 81)) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 85) == $context["i"])) {
                                // line 86
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 87
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo ($context["class_r"] ?? null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 89
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "  
\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 95
                    if (($context["use_catalog"] ?? null)) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 96)) {
                            // line 97
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                            // line 98
                            echo ($context["price_label"] ?? null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                            // line 99
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99)) {
                                // line 100
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 102
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                // line 103
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                                echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 105
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 105)) {
                                // line 106
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 108
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"available\">";
                    echo ($context["text_stock"] ?? null);
                    echo "<span class=\"ex-text\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 111);
                    echo "</span></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 113
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 113)) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 114);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 116
                    if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 116) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 116)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 116))) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 120
                        if (($context["use_catalog"] ?? null)) {
                            // line 121
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 121)) {
                                // line 122
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                echo ($context["button_cart"] ?? null);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                                echo "');\"><span>";
                                echo ($context["button_cart"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 126
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 126)) {
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 127);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 129)) {
                            // line 130
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 130);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                    // line 140
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 140) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 140))) {
                        // line 141
                        echo "\t\t\t\t\t\t<script >
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 143
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 143);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                        // line 144
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 144), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 144), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 144), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 144), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 144), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 144), "s");
                        echo "),
\t\t\t\t\t\tlabels: ['";
                        // line 145
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
                        // line 146
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
\t\t\t\t\t\t //\$('#Countdown";
                        // line 148
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 148);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t\t</div><!-- product-layout -->
            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 153
($context["config_module"] ?? null), "type", [], "any", false, false, false, 153) == 1)) {
                    // line 154
                    echo "            <!-- List -->
            <div class=\"product-layout list-style \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 160);
                    echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 161
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 161) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 161))) {
                        echo "<img class=\"img-r\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 161);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 161);
                        echo "\" />";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 162);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 162);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t";
                    // line 164
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 164)) {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 165)) {
                            // line 166
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                            echo ($context["text_label_sale"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 169)) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 170)) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                            echo ($context["text_label_new"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 174)) {
                        // line 175
                        echo "\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 175);
                        echo "');\"><span>";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 177
                    echo "\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t";
                    // line 179
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 179)) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 181
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 181);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 181);
                        echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 184)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 187
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 188) == $context["i"])) {
                                // line 189
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 190
                                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo ($context["class_r"] ?? null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 192
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 193
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 196);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 196);
                    echo "</a></h4> 
\t\t\t\t\t\t\t\t\t";
                    // line 197
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 197)) {
                        // line 198
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 198);
                        echo "</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 200
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 201
                    if (($context["use_catalog"] ?? null)) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 202)) {
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t<label>";
                            // line 204
                            echo ($context["price_label"] ?? null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                            // line 205
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 205)) {
                                // line 206
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 206);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 208
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 208);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                // line 209
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 209);
                                echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 211
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 211)) {
                                // line 212
                                echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 212);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 220
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 220)) {
                        echo "<div class=\"text-hurryup\"><p>";
                        echo ($context["text_hurryup"] ?? null);
                        echo "</p></div><div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 220);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "\" class=\"box-timer\"></div> ";
                    }
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 221) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 221)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 221))) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 224
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 224)) {
                            // line 225
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 225);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 227
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 228
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 228)) {
                                // line 229
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                echo ($context["button_cart"] ?? null);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 229);
                                echo "');\"><span>";
                                echo ($context["button_cart"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 231
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 232
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 233
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 233)) {
                                // line 234
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 234);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 236
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 237
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 240
                    echo "\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                    // line 244
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 244) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 244))) {
                        // line 245
                        echo "\t\t\t\t\t\t<script >
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 247);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                        // line 248
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 248), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 248), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 248), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 248), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 248), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 248), "s");
                        echo "),
\t\t\t\t\t\tlabels: ['";
                        // line 249
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
                        // line 250
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
\t\t\t\t\t\t//\$('#Countdown";
                        // line 252
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 252);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                    }
                    // line 256
                    echo "\t\t\t\t</div><!-- product-layout -->
            ";
                } else {
                    // line 258
                    echo "            <!-- other type -->
            <div class=\"product-layout product-customize \">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t<div class=\"item-inner\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col col1 col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption-top\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                    // line 266
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 266);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 266);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 267
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 267)) {
                        // line 268
                        echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 269
                        echo ($context["text_manufacture"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 270
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 270);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 270);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "description", [], "any", false, false, false, 273)) {
                        // line 274
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-des\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 274);
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"read-more\" href=\"";
                        // line 275
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 275);
                        echo "\">";
                        echo ($context["text_more"] ?? null);
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 277
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col2 col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 281
                    if (($context["use_catalog"] ?? null)) {
                        // line 282
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 282)) {
                            // line 283
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>";
                            // line 284
                            echo ($context["price_label"] ?? null);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 285
                            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 285)) {
                                // line 286
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 286);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 288
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 288);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                                // line 289
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 289);
                                echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 291
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 291)) {
                                // line 292
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                                echo ($context["text_tax"] ?? null);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 292);
                                echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 294
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 296
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 297
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 297)) {
                        // line 298
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 300
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 301
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 301) == $context["i"])) {
                                // line 302
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                $context["class_r"] = ("rating" . $context["i"]);
                                // line 303
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                                echo ($context["class_r"] ?? null);
                                echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 305
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 306
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 309
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 309) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 309)) || twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 309))) {
                        echo "\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 311
                        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcompare", [], "any", false, false, false, 311)) {
                            // line 312
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 312);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 314
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_catalog"] ?? null)) {
                            // line 315
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showcart", [], "any", false, false, false, 315)) {
                                // line 316
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                                echo ($context["button_cart"] ?? null);
                                echo "\" onclick=\"cart.add('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 316);
                                echo "');\"><span>";
                                echo ($context["button_cart"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 318
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 319
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quickview"] ?? null)) {
                            // line 320
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showquickview", [], "any", false, false, false, 320)) {
                                // line 321
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                                echo ($context["button_quickview"] ?? null);
                                echo "\" onclick=\"ocquickview.ajaxView('";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 321);
                                echo "')\"><span>";
                                echo ($context["button_quickview"] ?? null);
                                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 323
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 324
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 328
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 328)) {
                        echo "<div class=\"text-hurryup\"><p>";
                        echo ($context["text_hurryup"] ?? null);
                        echo "</p></div><div id=\"Countdown";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 328);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "\" class=\"box-timer\"></div> ";
                    }
                    // line 329
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div><!-- caption -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col col3 col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container \">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 334
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 334);
                    echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 335
                    if ((twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "rotator", [], "any", false, false, false, 335) && twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 335))) {
                        echo "<img class=\"img-r\" src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 335);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 335);
                        echo "\" />";
                    }
                    // line 336
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 336);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 336);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 336);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 338
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "salelabel", [], "any", false, false, false, 338)) {
                        // line 339
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 339)) {
                            // line 340
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                            echo ($context["text_label_sale"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 341
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 343
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "newlabel", [], "any", false, false, false, 343)) {
                        // line 344
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 344)) {
                            // line 345
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                            echo ($context["text_label_new"] ?? null);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 347
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 348
                    echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 349
                    if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "showwishlist", [], "any", false, false, false, 349)) {
                        // line 350
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                        echo ($context["button_wishlist"] ?? null);
                        echo "\" onclick=\"wishlist.add('";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 350);
                        echo "');\"><span>";
                        echo ($context["button_wishlist"] ?? null);
                        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 352
                    echo "\t\t\t\t\t\t\t\t\t\t</div><!-- image -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- product-thumb -->
\t\t\t\t\t\t";
                    // line 358
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 358) && twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 358))) {
                        // line 359
                        echo "\t\t\t\t\t\t<script >
\t\t\t\t\t\t\$(document).ready(function () {
\t\t\t\t\t\t\$('#Countdown";
                        // line 361
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 361);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown({
\t\t\t\t\t\tuntil: new Date(";
                        // line 362
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 362), "Y");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 362), "m");
                        echo "-1, ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 362), "d");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 362), "H");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 362), "i");
                        echo ", ";
                        echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 362), "s");
                        echo "),
\t\t\t\t\t\tlabels: ['";
                        // line 363
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
                        // line 364
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
\t\t\t\t\t\t \$('#Countdown";
                        // line 366
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 366);
                        echo "-";
                        echo ($context["i"] ?? null);
                        echo "').countdown('pause');
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                    }
                    // line 370
                    echo "\t\t\t\t</div><!-- product-layout -->
            ";
                }
                // line 372
                echo "\t\t\t\t";
                if ((((($context["count"] ?? null) % ($context["rows"] ?? null)) == 0) || (($context["count"] ?? null) == twig_length_filter($this->env, ($context["products"] ?? null))))) {
                    // line 373
                    echo "\t\t\t\t</div>
\t\t\t\t";
                }
                // line 375
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
    </div>
\t</div>
\t";
        } else {
            // line 379
            echo "\t\t<p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t";
        }
        // line 381
        echo "\t<div class=\"clearfix\"></div>
</div>
";
        // line 383
        if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "slider", [], "any", false, false, false, 383)) {
            // line 384
            echo "    <script >
        \$(document).ready(function() {
            \$(\"#product_module";
            // line 386
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 386);
            echo " .tt-product\").owlCarousel({
                loop: ";
            // line 387
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "loop", [], "any", false, false, false, 387)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                margin: ";
            // line 388
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", true, true, false, 388)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "margin", [], "any", false, false, false, 388);
                echo " ";
            } else {
                echo " 20 ";
            }
            echo ",
                nav: ";
            // line 389
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "navigation", [], "any", false, false, false, 389)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                dots: ";
            // line 390
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "pagination", [], "any", false, false, false, 390)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                autoplay:  ";
            // line 391
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "auto", [], "any", false, false, false, 391)) {
                echo " true ";
            } else {
                echo " false ";
            }
            echo ",
                autoplayTimeout: ";
            // line 392
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 392)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "time", [], "any", false, false, false, 392);
                echo " ";
            } else {
                echo " 2000 ";
            }
            echo ",
                autoplayHoverPause: true,
                autoplaySpeed: ";
            // line 394
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 394)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 394);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
                navSpeed: ";
            // line 395
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 395)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 395);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
                dotsSpeed: ";
            // line 396
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 396)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "speed", [], "any", false, false, false, 396);
                echo " ";
            } else {
                echo " 3000 ";
            }
            echo ",
\t\t\t\tlazyLoad: true,
                responsive:{
\t\t\t\t\t0:{
\t\t\t\t\t\titems: 1,
\t\t\t\t\t\tnav: false
\t\t\t\t\t},
\t\t\t\t\t480:{
\t\t\t\t\t\titems: ";
            // line 404
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "smobile", [], "any", false, false, false, 404);
            echo ",
\t\t\t\t\t\tnav: false
\t\t\t\t\t},
\t\t\t\t\t768:{
\t\t\t\t\t\titems: ";
            // line 408
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "mobile", [], "any", false, false, false, 408);
            echo "
\t\t\t\t\t},
\t\t\t\t\t992:{
\t\t\t\t\t\titems: ";
            // line 411
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "tablet", [], "any", false, false, false, 411);
            echo "
\t\t\t\t\t},
\t\t\t\t\t1200:{
\t\t\t\t\t\titems: ";
            // line 414
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "desktop", [], "any", false, false, false, 414);
            echo "
\t\t\t\t\t},
\t\t\t\t\t1600:{
\t\t\t\t\t\titems: ";
            // line 417
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "items", [], "any", false, false, false, 417);
            echo "
\t\t\t\t\t}
                },
\t\t\t\tonInitialized: function() {
\t\t\t\t\tvar count = \$(\"#product_module";
            // line 421
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 421);
            echo " .tt-product .owl-item.active\").length;
\t\t\t\t\tif(count == 1) {
\t\t\t\t\t\t\$(\"#product_module";
            // line 423
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 423);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 424
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 424);
            echo " .tt-product .active\").addClass('first');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\"#product_module";
            // line 426
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 426);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 427
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 427);
            echo " .tt-product .owl-item.active:first\").addClass('first');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t},
\t\t\t\tonTranslated: function() {
\t\t\t\t\tvar count = \$(\"#product_module";
            // line 432
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 432);
            echo " .tt-product .owl-item.active\").length;
\t\t\t\t\tif(count == 1) {
\t\t\t\t\t\t\$(\"#product_module";
            // line 434
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 434);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 435
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 435);
            echo " .tt-product .active\").addClass('first');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(\"#product_module";
            // line 437
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 437);
            echo " .tt-product .owl-item\").removeClass('first');
\t\t\t\t\t\t\$(\"#product_module";
            // line 438
            echo twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "module_id", [], "any", false, false, false, 438);
            echo " .tt-product .owl-item.active:first\").addClass('first');
\t\t\t\t\t}
\t\t\t\t}
            });
\t\t\t
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/ocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1448 => 438,  1444 => 437,  1439 => 435,  1435 => 434,  1430 => 432,  1422 => 427,  1418 => 426,  1413 => 424,  1409 => 423,  1404 => 421,  1397 => 417,  1391 => 414,  1385 => 411,  1379 => 408,  1372 => 404,  1355 => 396,  1345 => 395,  1335 => 394,  1324 => 392,  1316 => 391,  1308 => 390,  1300 => 389,  1290 => 388,  1282 => 387,  1278 => 386,  1274 => 384,  1272 => 383,  1268 => 381,  1262 => 379,  1251 => 375,  1247 => 373,  1244 => 372,  1240 => 370,  1231 => 366,  1214 => 364,  1198 => 363,  1184 => 362,  1178 => 361,  1174 => 359,  1172 => 358,  1164 => 352,  1154 => 350,  1152 => 349,  1149 => 348,  1146 => 347,  1140 => 345,  1137 => 344,  1134 => 343,  1130 => 341,  1124 => 340,  1121 => 339,  1119 => 338,  1109 => 336,  1101 => 335,  1097 => 334,  1090 => 329,  1079 => 328,  1073 => 324,  1070 => 323,  1060 => 321,  1057 => 320,  1054 => 319,  1051 => 318,  1041 => 316,  1038 => 315,  1035 => 314,  1025 => 312,  1023 => 311,  1017 => 309,  1012 => 306,  1006 => 305,  1000 => 303,  997 => 302,  994 => 301,  990 => 300,  986 => 298,  983 => 297,  980 => 296,  976 => 294,  968 => 292,  965 => 291,  960 => 289,  955 => 288,  949 => 286,  947 => 285,  943 => 284,  940 => 283,  937 => 282,  935 => 281,  929 => 277,  922 => 275,  917 => 274,  914 => 273,  906 => 270,  902 => 269,  899 => 268,  897 => 267,  891 => 266,  881 => 258,  877 => 256,  868 => 252,  851 => 250,  835 => 249,  821 => 248,  815 => 247,  811 => 245,  809 => 244,  803 => 240,  798 => 237,  795 => 236,  785 => 234,  782 => 233,  779 => 232,  776 => 231,  766 => 229,  763 => 228,  760 => 227,  750 => 225,  748 => 224,  741 => 221,  731 => 220,  726 => 217,  723 => 216,  719 => 214,  711 => 212,  708 => 211,  703 => 209,  698 => 208,  692 => 206,  690 => 205,  686 => 204,  683 => 203,  680 => 202,  678 => 201,  675 => 200,  669 => 198,  667 => 197,  660 => 196,  655 => 193,  649 => 192,  643 => 190,  640 => 189,  637 => 188,  633 => 187,  629 => 185,  626 => 184,  618 => 181,  615 => 180,  613 => 179,  609 => 177,  599 => 175,  596 => 174,  593 => 173,  587 => 171,  584 => 170,  581 => 169,  578 => 168,  572 => 166,  569 => 165,  567 => 164,  557 => 162,  549 => 161,  545 => 160,  537 => 154,  535 => 153,  532 => 152,  523 => 148,  506 => 146,  490 => 145,  476 => 144,  470 => 143,  466 => 141,  464 => 140,  458 => 136,  452 => 132,  442 => 130,  439 => 129,  429 => 127,  427 => 126,  424 => 125,  421 => 124,  411 => 122,  408 => 121,  406 => 120,  399 => 116,  396 => 115,  390 => 114,  388 => 113,  380 => 111,  377 => 110,  373 => 108,  365 => 106,  362 => 105,  357 => 103,  352 => 102,  346 => 100,  344 => 99,  340 => 98,  337 => 97,  334 => 96,  332 => 95,  325 => 93,  322 => 92,  317 => 90,  311 => 89,  305 => 87,  302 => 86,  299 => 85,  295 => 84,  291 => 82,  288 => 81,  277 => 80,  269 => 77,  266 => 76,  264 => 75,  258 => 71,  255 => 70,  245 => 68,  242 => 67,  239 => 66,  236 => 65,  230 => 63,  227 => 62,  224 => 61,  220 => 59,  214 => 58,  211 => 57,  209 => 56,  199 => 54,  191 => 53,  187 => 52,  180 => 47,  177 => 46,  174 => 45,  166 => 43,  164 => 42,  161 => 41,  157 => 40,  151 => 39,  147 => 38,  144 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 33,  129 => 32,  126 => 31,  123 => 30,  120 => 29,  118 => 28,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  81 => 16,  78 => 15,  72 => 12,  69 => 11,  67 => 10,  64 => 9,  58 => 7,  52 => 5,  50 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/ocproduct.twig", "");
    }
}
