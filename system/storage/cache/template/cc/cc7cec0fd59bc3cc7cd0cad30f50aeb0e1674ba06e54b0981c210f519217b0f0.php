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

/* tt_koparion4/template/extension/module/oclayerednavigation/occategory.twig */
class __TwigTemplate_60cc9b72557614a367fbe2ba67eedda20d04f8a5f74aa4f2e886e3a5590e17d7 extends \Twig\Template
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
<div class=\"container layer-category\">
    <div class=\"layered-navigation-block\"></div>
    <div class=\"ajax-loader\">
        <img src=\"";
        // line 5
        echo ($context["module_oclayerednavigation_loader_img"] ?? null);
        echo "\" alt=\"\" />
    </div>
\t
    <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
    <div class=\"row\"><div class=\"col-order\">";
        // line 13
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "            ";
            $context["class"] = "col-md-6 col-sm-12";
            // line 16
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "            ";
            $context["class"] = "col-md-9 col-sm-12";
            // line 18
            echo "        ";
        } else {
            // line 19
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "        ";
        }
        // line 21
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"category-info\">
            
            
\t\t\t";
        // line 25
        if (($context["thumb"] ?? null)) {
            // line 26
            echo "\t\t\t\t<div class=\"box-image\">
\t\t\t\t\t<div class=\"category-image\"><img src=\"";
            // line 27
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "\t\t\t<h1 class=\"category-name\">";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t";
        // line 31
        if (($context["description"] ?? null)) {
            // line 32
            echo "\t\t\t\t<div class=\"category-des\">";
            echo ($context["description"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 33
        echo " 
\t\t\t\t
\t\t\t
\t\t\t</div>
            ";
        // line 37
        if (($context["categories"] ?? null)) {
            // line 38
            echo "                <h3 class=\"text-refine\">";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
                ";
            // line 39
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 40
                echo "                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <ul class=\"list-cate\">
                                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    echo "                                    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            </ul>
                        </div>
                    </div>
                ";
            } else {
                // line 50
                echo "                    <div class=\"row\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 51
                    echo "                        <div class=\"col-sm-3\">
                            <ul>
                                ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 54
                        echo "                                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 54);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                        echo "</a></li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                            </ul>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo " </div>
                    <br />
                ";
            }
            // line 61
            echo "            ";
        }
        // line 62
        echo "            <div class=\"custom-category\">
                ";
        // line 63
        if (($context["products"] ?? null)) {
            // line 64
            echo "                <div><a href=\"";
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t\t
\t\t\t\t<div class=\"toolbar toolbar-products\">
\t\t\t\t\t<div class=\"modes\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn\">";
            // line 69
            echo ($context["button_grid"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn\">";
            // line 70
            echo ($context["button_list"] ?? null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"toolbar-amount\">
\t\t\t\t\t\t<span>";
            // line 74
            echo ($context["results"] ?? null);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorter\">
\t\t\t\t\t\t<label>";
            // line 77
            echo ($context["text_sort"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 80) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 81);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 81);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 83);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 83);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"limiter\">
\t\t\t\t\t\t<label>";
            // line 89
            echo ($context["text_limit"] ?? null);
            echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"oclayerednavigationajax.filter(this.value)\">
\t\t\t\t\t\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 92) == ($context["limit"] ?? null))) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 93);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 93);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 95);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 95);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                <div class=\"custom-products\">
                    <div class=\"row\">
\t\t\t\t\t\t";
            // line 103
            $context["count"] = 1;
            // line 104
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 105
                echo "\t\t\t\t\t\t<div class=\"product-layout product-list\">
\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"item ";
                // line 107
                echo ("item" . ($context["count"] ?? null));
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"item-inner\">\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-image\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image images-container\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 111);
                echo "\" class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 112);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 112);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 113)) {
                    echo "<img class=\"img-r img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rotator_image", [], "any", false, false, false, 113);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 113);
                    echo "\"  />";
                }
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 115
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_sale\">";
                    echo ($context["text_label_sale"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"label-product label_new\">";
                    echo ($context["text_label_new"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-quickview\" type=\"button\"  title=\"";
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"ocquickview.ajaxView('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 121);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-des\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 127
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 127)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturers", [], "any", false, false, false, 129);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 129);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 131
                echo "          \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 132)) {
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ratings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 136) == $context["i"])) {
                            // line 137
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["class_r"] = ("rating" . $context["i"]);
                            // line 138
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                            echo ($context["class_r"] ?? null);
                            echo "\">rating</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 140
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-name\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 144);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 145
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 145)) {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>";
                    // line 147
                    echo ($context["price_label"] ?? null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 148)) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"regular-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 149);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 151
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"special-price\"><span class=\"price\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 151);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"old-price\"><span class=\"price\">";
                        // line 152
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 152);
                        echo "</span></p>\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 154)) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price-tax\"><span class=\"price\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 155);
                        echo "</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-des\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 160);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-cart\" type=\"button\"  title=\"";
                // line 163
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 163);
                echo "')\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-to-links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-wishlist\" type=\"button\"  title=\"";
                // line 165
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 165);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button btn-compare\" type=\"button\"  title=\"";
                // line 166
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 166);
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
                // line 178
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 179
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t\t</div>
                </div>
                <div class=\"toolbar toolbar-products toolbar-bottom\">
                    <div class=\"toolbar-amount\"><span>";
            // line 183
            echo ($context["results"] ?? null);
            echo "</span></div>
\t\t\t\t\t<div class=\"pages\">";
            // line 184
            echo ($context["pagination"] ?? null);
            echo "</div>
                </div>
                ";
        }
        // line 187
        echo "                ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 188
            echo "                    <p class=\"text_empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                    <div class=\"buttons\">
                        <div class=\"pull-right\"><a href=\"";
            // line 190
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
                    </div>
                ";
        }
        // line 193
        echo "            </div>
            ";
        // line 194
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 195
        echo ($context["column_right"] ?? null);
        echo "</div></div>
</div>
";
        // line 197
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/oclayerednavigation/occategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 197,  591 => 195,  587 => 194,  584 => 193,  576 => 190,  570 => 188,  567 => 187,  561 => 184,  557 => 183,  552 => 180,  546 => 179,  544 => 178,  525 => 166,  517 => 165,  506 => 163,  500 => 160,  497 => 159,  493 => 157,  485 => 155,  482 => 154,  477 => 152,  472 => 151,  466 => 149,  464 => 148,  460 => 147,  457 => 146,  455 => 145,  448 => 144,  443 => 141,  437 => 140,  431 => 138,  428 => 137,  425 => 136,  421 => 135,  417 => 133,  415 => 132,  412 => 131,  404 => 129,  401 => 128,  399 => 127,  385 => 121,  379 => 119,  376 => 118,  370 => 116,  368 => 115,  365 => 114,  355 => 113,  347 => 112,  343 => 111,  336 => 107,  332 => 105,  327 => 104,  325 => 103,  318 => 98,  312 => 97,  304 => 95,  296 => 93,  293 => 92,  289 => 91,  284 => 89,  279 => 86,  273 => 85,  265 => 83,  257 => 81,  254 => 80,  250 => 79,  245 => 77,  239 => 74,  232 => 70,  228 => 69,  217 => 64,  215 => 63,  212 => 62,  209 => 61,  204 => 58,  196 => 56,  185 => 54,  181 => 53,  177 => 51,  172 => 50,  166 => 46,  155 => 44,  151 => 43,  146 => 40,  144 => 39,  139 => 38,  137 => 37,  131 => 33,  125 => 32,  123 => 31,  118 => 30,  108 => 27,  105 => 26,  103 => 25,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  66 => 12,  55 => 10,  51 => 9,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/oclayerednavigation/occategory.twig", "");
    }
}
