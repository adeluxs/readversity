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

/* tt_koparion4/template/extension/module/newslettersubscribe.twig */
class __TwigTemplate_5e6522ee6df6febf6899e3c0d941dc5b02927958669a4c7a1c358b0739b11d17 extends \Twig\Template
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
        echo "<div class=\"newletter-subscribe-container\">
<div class=\"container-inner\">
<div class=\"newletter-subscribe\">
\t<div id=\"boxes-normal\" class=\"newletter-container\">
\t\t<div style=\"\" id=\"dialog-normal\" class=\"window\">
\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"newletter-title\">
\t\t\t\t\t\t\t<h3>";
        // line 8
        echo ($context["heading_title2"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t<label>";
        // line 9
        echo ($context["newletter_des2"] ?? null);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-content newleter-content\">
\t\t\t\t\t\t\t<div id=\"frm_subscribe-normal\">
\t\t\t\t\t\t\t\t<form name=\"subscribe\" id=\"subscribe-normal\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"\" name=\"subscribe_email\" id=\"subscribe_email-normal\" placeholder=\"";
        // line 14
        echo ($context["entry_email"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"subscribe_name\" id=\"subscribe_name\" />
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div id=\"notification-normal\"></div>  
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_subscribe()\" title=\"";
        // line 19
        echo ($context["entry_button"] ?? null);
        echo "\"><span>";
        echo ($context["entry_button"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 20
        if (($context["option_unsubscribe"] ?? null)) {
            // line 21
            echo "\t\t\t\t\t\t\t\t\t<a class=\"btn\" onclick=\"email_unsubscribe()\" title=\"";
            echo ($context["entry_unbutton"] ?? null);
            echo "\"><span>";
            echo ($context["entry_unbutton"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t";
        }
        // line 22
        echo " 
\t\t\t\t\t\t\t</div><!-- /#frm_subscribe -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.box-content -->
\t\t\t</div>
\t\t</div>
<script >
function email_subscribe(){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/newslettersubscribe/subscribe',
\t\tdataType: 'html',
\t\tdata:\$(\"#subscribe-normal\").serialize(),
\t\tsuccess: function (html) {
\t\t\ttry {
\t\t\t\teval(html);
\t\t\t} 
\t\t\tcatch (e) {
\t\t\t}\t\t\t\t
\t\t}});
}
function email_unsubscribe(){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/newslettersubscribe/unsubscribe',
\t\tdataType: 'html',
\t\tdata:\$(\"#subscribe\").serialize(),
\t\tsuccess: function (html) {
\t\t\ttry {
\t\t\t\teval(html);
\t\t\t} catch (e) {
\t\t\t}
\t\t}}); 
\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
}
</script>
<script >
    \$(document).ready(function() {
\t\t\$('#subscribe_email').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribe();
            }
\t\t\tvar name= \$(this).val();
\t\t  \t\$('#subscribe_name').val(name);
        });
\t\t\$('#subscribe_email').change(function() {
\t\t var name= \$(this).val();
\t\t  \t\t\$('#subscribe_name').val(name);
\t\t});
    });
</script>
</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_koparion4/template/extension/module/newslettersubscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  74 => 21,  72 => 20,  66 => 19,  58 => 14,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_koparion4/template/extension/module/newslettersubscribe.twig", "");
    }
}
