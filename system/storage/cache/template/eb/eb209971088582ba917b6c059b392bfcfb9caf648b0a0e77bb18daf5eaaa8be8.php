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

/* tt_koparion4/template/common/cart.twig */
class __TwigTemplate_ffbf5031305aadf894d3a25a56068f6424d00e45fa866d040bf96a5b006635a3 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn dropdown-toggle\"><i class=\"icon-cart\"></i><span id=\"cart-total\">";
        echo ($context["text_items"] ?? null);
        echo "</span><span class=\"mycart\"><span>";
        echo ($context["text_items2"] ?? null);
        echo "</span><span class=\"total-price\">";
        if (twig_get_attribute($this->env, $this->source, ($context["total"] ?? null), "text", [], "any", false, false, false, 2)) {
            echo twig_get_attribute($this->env, $this->source, ($context["total"] ?? null), "text", [], "any", false, false, false, 2);
        } else {
            echo "0.00";
        }
        echo "</span></span></button>
  <ul class=\"dropdown-menu pull-right\">
    ";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 5
            echo "    <li class=\"has-scroll\">
      <table class=\"table\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "        <tr>
          <td class=\"text-center\">";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                    echo "\"><img class=\"cart-image\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    echo "\" /></a> ";
                }
                echo "</td>
          <td class=\"text-left info-item\"><a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
            - <small>";
                        // line 12
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 12);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 12);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "            ";
                }
                // line 14
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 14)) {
                    echo " <br />
            - <small>";
                    // line 15
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 15);
                    echo "</small> ";
                }
                // line 16
                echo "\t\t\t<p class=\"cart-quantity\">&times;";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 16);
                echo "</p>
\t\t\t<p class=\"cart-price\">";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 17);
                echo "</p>
\t\t</td>          
          <td class=\"text-center cart-close\"><button type=\"button\" onclick=\"cart.remove('";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 19);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"ion-android-close\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 23
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 25);
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 27);
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 28);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"ion-android-close\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </table>
    </li>
    <li>
        <table class=\"table\">
          ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 36
                echo "          <tr>
            <td class=\"text-left\">";
                // line 37
                echo (twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 37) . " :");
                echo "</td>
            <td class=\"text-right\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 38);
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </table>
        <p class=\"text-center cart-button\"><a href=\"";
            // line 42
            echo ($context["cart"] ?? null);
            echo "\">";
            echo ($context["text_cart"] ?? null);
            echo "</a><a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a></p>      
    </li>
    ";
        } else {
            // line 45
            echo "    <li>
      <p class=\"text-center cart-empty\">";
            // line 46
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
    ";
        }
        // line 49
        echo "  </ul>
</div>
<script >
\$(document).ready(function () {
\tvar total = \$('#cart .table .text-right').html();
\t\$('#cart .total-price').html(total);
});
</script>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 49,  212 => 46,  209 => 45,  197 => 42,  194 => 41,  185 => 38,  181 => 37,  178 => 36,  174 => 35,  168 => 31,  157 => 28,  153 => 27,  148 => 25,  144 => 23,  139 => 22,  128 => 19,  123 => 17,  118 => 16,  112 => 15,  107 => 14,  104 => 13,  95 => 12,  88 => 11,  82 => 10,  68 => 9,  65 => 8,  61 => 7,  57 => 5,  55 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/common/cart.twig", "");
    }
}
