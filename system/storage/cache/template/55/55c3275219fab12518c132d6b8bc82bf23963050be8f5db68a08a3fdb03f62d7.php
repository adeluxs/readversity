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

/* extension/module/instagram.twig */
class __TwigTemplate_68bed78d2bd317a633c91b5b02b3645077ae8b2886f90158ac7422e2fd8d3912 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-instagram\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid\">      
\t\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 22
        echo "
\t\t\t";
        // line 23
        if (($context["text_success_clear"] ?? null)) {
            // line 24
            echo "\t\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["text_success_clear"] ?? null);
            echo "   
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 28
        echo "\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-instagram\" class=\"form-horizontal\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-instagram\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"#tab-css\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 36
        echo ($context["text_customize_css"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"#tab-log\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 37
        echo ($context["text_log"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li class=\"support-me\"><a href=\"#tab-support\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 38
        echo ($context["text_support_me"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-module_instagram_status\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"module_instagram_status\" id=\"input-module_instagram_status\" class=\"form-control\">                  
\t\t\t\t\t\t\t\t\t";
        // line 44
        if (($context["module_instagram_status"] ?? null)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>";
            echo ($context["text_enabled"] ?? null);
            echo "</option>                  
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 46
            echo ($context["text_disabled"] ?? null);
            echo "</option>                  
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected>";
            // line 49
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"tab-instagram\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-instagram-options\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 58
        echo ($context["text_api_options"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">\t\t
\t\t\t\t\t\t\t\t\t<div id=\"tab-instagram-options\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-access_token\"><span data-toggle=\"tooltip\" title=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["help_access_token"] ?? null));
        echo "\">";
        echo ($context["entry_access_token"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"module_instagram_access_token\" value=\"";
        // line 65
        echo ($context["module_instagram_access_token"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_token"] ?? null);
        echo "\" id=\"input-access_token\" class=\"form-control\" />";
        if (($context["error_access_token"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_access_token"] ?? null);
            echo "</div>";
        }
        echo "<div><a href=\"http://instagram.pixelunion.net/\" target=\"_blank\">";
        echo ($context["entry_text_generate_token"] ?? null);
        echo "</a></div></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-photo-amount\">";
        // line 69
        echo ($context["entry_module_name"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_module_name\" value=\"";
        // line 71
        echo ($context["module_instagram_module_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_module_name"] ?? null);
        echo "\" id=\"input-module_name\" class=\"form-control\" />                
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-text-align\">";
        // line 76
        echo ($context["entry_text_align"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_text_align\" id=\"input-plugin-text-align\" class=\"form-control\">                    
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"left\"    ";
        // line 79
        echo (((($context["module_instagram_text_align"] ?? null) == "left")) ? ("selected") : (""));
        echo " >Left</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"center\"  ";
        // line 80
        echo (((($context["module_instagram_text_align"] ?? null) == "center")) ? ("selected") : (""));
        echo " >Center</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"right\"   ";
        // line 81
        echo (((($context["module_instagram_text_align"] ?? null) == "right")) ? ("selected") : (""));
        echo " >Right</option>                  
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-hover-effect\">";
        // line 87
        echo ($context["entry_text_hover_heart"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_hover_heart\" id=\"input-plugin-hover-effect\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 90
        if (($context["module_instagram_hover_heart"] ?? null)) {
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 92
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 95
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group heart-input ";
        // line 101
        echo ((($context["module_instagram_hover_heart"] ?? null)) ? ("") : ("hidden"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"heart_color\">";
        // line 102
        echo ($context["entry_heart_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 105
        echo ($context["module_instagram_heart_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["module_instagram_heart_color"] ?? null);
        echo "\"  class=\"form-control color-heart\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"heart_color\" name=\"module_instagram_heart_color\" value=\"";
        // line 106
        echo ($context["module_instagram_heart_color"] ?? null);
        echo "\" class=\"color-heart\">\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span data-toggle=\"tooltip\" title=\"";
        // line 107
        echo ($context["help_instagram_heart_color"] ?? null);
        echo "\"><input type='text' id=\"instagram_heart_color\" /> </span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group heart-input ";
        // line 112
        echo ((($context["module_instagram_hover_heart"] ?? null)) ? ("") : ("hidden"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"heart_text_color\">";
        // line 113
        echo ($context["entry_heart_text_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 116
        echo ($context["module_instagram_text_heart_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["module_instagram_text_heart_color"] ?? null);
        echo " \"  class=\"form-control color-text-heart\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"heart_text_color\" name=\"module_instagram_text_heart_color\" value=\"";
        // line 117
        echo ($context["module_instagram_text_heart_color"] ?? null);
        echo "\" class=\"color-text-heart\">\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span data-toggle=\"tooltip\" title=\"";
        // line 118
        echo ($context["help_instagram_text_heart_color"] ?? null);
        echo "\"><input type='text' id=\"instagram_text_heart_color\" /> </span></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-photo-amount\">";
        // line 124
        echo ($context["entry_photo_amount"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_photo_amount\" value=\"";
        // line 126
        echo ($context["module_instagram_photo_amount"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_photo_amount"] ?? null);
        echo "\" id=\"input-photo_amount\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 127
        if (($context["error_photo_amount"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_photo_amount"] ?? null);
            echo "</div>";
        }
        // line 128
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 132
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 136
        echo ($context["text_plugin_edit"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-slick-options\" data-toggle=\"tab\" aria-expanded=\"true\">";
        // line 141
        echo ($context["text_slick_options"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"#tab-grid-options\" data-toggle=\"tab\" aria-expanded=\"false\">";
        // line 142
        echo ($context["text_grid_options"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t<div id=\"tab-slick-options\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-use-slick\">";
        // line 147
        echo ($context["entry_use_slick"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_use_plugin\" id=\"input-use-slick\" class=\"form-control\">                  
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 150
        if (($context["module_instagram_use_plugin"] ?? null)) {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 152
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 155
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 157
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"use-plugin ";
        // line 160
        echo ((($context["module_instagram_use_plugin"] ?? null)) ? ("") : ("hidden"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-photo-show\">";
        // line 162
        echo ($context["entry_photo_show"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_slide_show\" value=\"";
        // line 164
        echo ($context["module_instagram_plugin_slide_show"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_photo_show"] ?? null);
        echo "\" id=\"input-photo-show\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 165
        if (($context["error_slide_show"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_slide_show"] ?? null);
            echo "</div>";
        }
        // line 166
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-slide-show\">";
        // line 170
        echo ($context["entry_slide_scroll"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_slide_scroll\" value=\"";
        // line 172
        echo ($context["module_instagram_plugin_slide_scroll"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_slide_scroll"] ?? null);
        echo "\" id=\"input-plugin-slide-scroll\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 173
        if (($context["error_slide_scroll"] ?? null)) {
            echo " <div class=\"text-danger\">";
            echo ($context["error_slide_scroll"] ?? null);
            echo "</div>";
        }
        // line 174
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-photo-show\">";
        // line 178
        echo ($context["entry_photo_show_tablet"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_slide_show_tablet\" value=\"";
        // line 180
        echo ($context["module_instagram_plugin_slide_show_tablet"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_photo_show_tablet"] ?? null);
        echo "\" id=\"input-photo-show\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 181
        if (($context["error_slide_show_tablet"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_slide_show_tablet"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 183
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-slide-show\">";
        // line 187
        echo ($context["entry_slide_scroll_tablet"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_slide_scroll_tablet\" value=\"";
        // line 189
        echo ($context["module_instagram_plugin_slide_scroll_tablet"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_slide_scroll_tablet"] ?? null);
        echo "\" id=\"input-plugin-slide-scroll\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 190
        if (($context["error_slide_scroll_tablet"] ?? null)) {
            echo "<div class=\"text-danger\">";
            echo ($context["error_slide_scroll_tablet"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-photo-show\">";
        // line 196
        echo ($context["entry_photo_show_celphone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_slide_show_celphone\" value=\"";
        // line 198
        echo ($context["module_instagram_plugin_slide_show_celphone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_photo_show_celphone"] ?? null);
        echo "\" id=\"input-photo-show\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 199
        if (($context["error_slide_show_celphone"] ?? null)) {
            // line 200
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_slide_show_celphone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 202
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-slide-show\">";
        // line 206
        echo ($context["entry_slide_scroll_celphone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_slide_scroll_celphone\" value=\"";
        // line 208
        echo ($context["module_instagram_plugin_slide_scroll_celphone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_slide_scroll_celphone"] ?? null);
        echo "\" id=\"input-plugin-slide-scroll\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 209
        if (($context["error_slide_scroll_celphone"] ?? null)) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_slide_scroll_celphone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 212
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-auto-play\">";
        // line 216
        echo ($context["entry_auto_play"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_plugin_auto_play\" id=\"input-plugin-dots\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 219
        if (($context["module_instagram_plugin_auto_play"] ?? null)) {
            echo "                 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 220
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 221
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 223
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 224
            echo ($context["text_disabled"] ?? null);
            echo "</option>                  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 226
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-dots\">";
        // line 231
        echo ($context["entry_slide_dots"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_plugin_dots\" id=\"input-plugin-dots\" class=\"form-control\">                  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 234
        if (($context["module_instagram_plugin_dots"] ?? null)) {
            // line 235
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 236
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 238
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 239
            echo ($context["text_disabled"] ?? null);
            echo "</option>                  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 241
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-arrows\">";
        // line 246
        echo ($context["entry_slide_arrows"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_plugin_arrows\" id=\"input-plugin-arrows\" class=\"form-control\">                  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 249
        if (($context["module_instagram_plugin_arrows"] ?? null)) {
            // line 250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 251
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 254
            echo ($context["text_disabled"] ?? null);
            echo "</option>           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 256
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group color-input ";
        // line 260
        echo ((($context["module_instagram_plugin_arrows"] ?? null)) ? ("") : ("hidden"));
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"arrow_color\">";
        // line 261
        echo ($context["entry_arrow_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 264
        echo ($context["module_instagram_arrow_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["module_instagram_arrow_color"] ?? null);
        echo "\"  class=\"form-control color\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_instagram_arrow_color\" value=\"";
        // line 265
        echo ($context["module_instagram_arrow_color"] ?? null);
        echo "\" class=\"color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 266
        if (($context["error_color"] ?? null)) {
            echo "                   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            // line 267
            echo ($context["error_color"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 269
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span data-toggle=\"tooltip\" title=\"";
        echo ($context["help_instagram_arrow_color"] ?? null);
        echo "\"><input type='text' id=\"instagram_color\" /> </span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-center-mode\">";
        // line 275
        echo ($context["entry_center_mode"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"module_instagram_center_mode\" id=\"input-center-mode\" class=\"form-control\">                  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 278
        if (($context["module_instagram_center_mode"] ?? null)) {
            // line 279
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 280
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 282
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 283
            echo ($context["text_disabled"] ?? null);
            echo "</option>           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 285
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-plugin-auto-play-speed\">";
        // line 290
        echo ($context["entry_auto_play_speed"] ?? null);
        echo "<span data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, ($context["help_auto_play_speed"] ?? null));
        echo "\"></span></label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_instagram_plugin_auto_play_speed\" value=\"";
        // line 292
        echo ($context["module_instagram_plugin_auto_play_speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_auto_play_speed"] ?? null);
        echo "\" id=\"input-plugin-auto-play-speed\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 293
        if (($context["error_auto_play_speed"] ?? null)) {
            echo "                   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            // line 294
            echo ($context["error_auto_play_speed"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 296
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<div id=\"tab-log\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 310
        echo ($context["text_log_tab"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class='col-md-2' style=\"line-height: 40.38px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 316
        echo ($context["download"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_download"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-download\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"confirm('";
        // line 317
        echo ($context["text_confirm"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
        // line 323
        echo ($context["log_instagram"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"tab-css\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> Customize Instagram Layout:</h3>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pull-right\" style=\"padding: 15px; \">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 332
        echo ($context["reset"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["help_instagram_reset"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<textarea id=\"css_editor\" spellcheck=\"false\" class=\"css_editor\" name=\"module_instagram_style\" cols=\"30\" rows=\"10\" style=\"min-width: 1027px; min-height: 400px;\">";
        // line 336
        echo ($context["module_instagram_style"] ?? null);
        echo "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div id=\"tab-support\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<h4>That's For <strong>You</strong>!</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"card-title\">First... Thank You!</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">I hope that it is useful to engage your store and that makes you increase your daily views, I'm working too hard to improve and do something better! I think it's the decent thing to do. So I would be very happy if you consider making a donation of any value, I would be very grateful!</p>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=9CKVACZ7M99L6&lc=BR&item_name=Hebert%20Lima&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted\" target=\"_blank\" class=\"btn btn-success\"><i class=\"fa fa-paypal\"></i> Make a Donation with PayPal</a>
\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t<p>if you need support, I will be happy to help you!</p>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:hebert.dev@hotmail.com?subject=I need Support (";
        // line 351
        echo ($context["version"] ?? null);
        echo ")\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-envelope\"></i> Get Support</a>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t\t\t\t\t\tNew great Updates Coming Soon!
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<script type=\"text/javascript\">
\t\t\$('#input-plugin-arrows').change(function(event) {
\t\t\tvar option = \$('#input-plugin-arrows').val();

\t\t\tif(option == '0'){
\t\t\t\t\$('.color-input').addClass('hidden');
\t\t\t}else{
\t\t\t\t\$('.color-input').removeClass('hidden');
\t\t\t}
\t\t});

\t\t\$(\"#instagram_color\").spectrum({
\t\t\tcolor: '";
        // line 377
        echo ($context["module_instagram_arrow_color"] ?? null);
        echo "',
\t\t\tpreferredFormat: \"rgb\",
\t\t\tshowInput: true,
\t\t\tchange: function(color) {                   
\t\t\t\t\$('.color').val(color.toHexString());
\t\t\t}
\t\t});

\t\t\$('#input-use-slick').change(function(event) {
\t\t\tvar option = \$('#input-use-slick').val();

\t\t\tif(option == '0'){
\t\t\t\t\$('.use-plugin').addClass('hidden');
\t\t\t}else{
\t\t\t\t\$('.use-plugin').removeClass('hidden');
\t\t\t}
\t\t});

\t\t\$('#input-use-grid').change(function(event) {
\t\t\tvar option = \$('#input-use-grid').val();

\t\t\tif(option == '0'){
\t\t\t\t\$('.use-grid').addClass('hidden');
\t\t\t}else{
\t\t\t\t\$('.use-grid').removeClass('hidden');
\t\t\t}
\t\t});

\t\t\$('#input-plugin-hover-effect').change(function(event) {
\t\t\tvar option = \$('#input-plugin-hover-effect').val();

\t\t\tif(option == '0'){
\t\t\t\t\$('.heart-input').addClass('hidden');
\t\t\t}else{
\t\t\t\t\$('.heart-input').removeClass('hidden');
\t\t\t}
\t\t});

\t\t\$(\"#instagram_heart_color\").spectrum({
\t\t\tcolor: '";
        // line 416
        echo ($context["module_instagram_heart_color"] ?? null);
        echo "',
\t\t\tpreferredFormat: \"rgb\",
\t\t\tshowAlpha: true,
\t\t\tshowInput: true,
\t\t\tchange: function(color) {\t\t\t\t\t
\t\t\t\t\$('.color-heart').val(color.toRgbString());
\t\t\t}
\t\t});

\t\t\$(\"#instagram_text_heart_color\").spectrum({
\t\t\tcolor: '";
        // line 426
        echo ($context["module_instagram_text_heart_color"] ?? null);
        echo "',
\t\t\tpreferredFormat: \"rgb\",
\t\t\tshowAlpha: true,
\t\t\tshowInput: true,
\t\t\tchange: function(color) {\t\t\t\t\t
\t\t\t\t\$('.color-text-heart').val(color.toHexString());
\t\t\t}
\t\t});


\t\tvar editor = CodeMirror.fromTextArea(document.getElementById(\"css_editor\"), {
\t\t\textraKeys: {\"Ctrl-Space\": \"autocomplete\"},
\t\t\ttheme: \"ambiance\"
\t\t});

\t\t\$('.CodeMirror').trigger('click');
\t\t</script>
\t</div>
\t";
        // line 444
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/instagram.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  956 => 444,  935 => 426,  922 => 416,  880 => 377,  851 => 351,  833 => 336,  824 => 332,  812 => 323,  799 => 317,  793 => 316,  784 => 310,  768 => 296,  763 => 294,  759 => 293,  753 => 292,  746 => 290,  739 => 285,  734 => 283,  729 => 282,  724 => 280,  719 => 279,  717 => 278,  711 => 275,  701 => 269,  696 => 267,  692 => 266,  688 => 265,  682 => 264,  676 => 261,  672 => 260,  666 => 256,  661 => 254,  656 => 253,  651 => 251,  646 => 250,  644 => 249,  638 => 246,  631 => 241,  626 => 239,  621 => 238,  616 => 236,  611 => 235,  609 => 234,  603 => 231,  596 => 226,  591 => 224,  586 => 223,  581 => 221,  577 => 220,  573 => 219,  567 => 216,  561 => 212,  555 => 210,  553 => 209,  547 => 208,  542 => 206,  536 => 202,  530 => 200,  528 => 199,  522 => 198,  517 => 196,  511 => 192,  504 => 190,  498 => 189,  493 => 187,  487 => 183,  480 => 181,  474 => 180,  469 => 178,  463 => 174,  457 => 173,  451 => 172,  446 => 170,  440 => 166,  434 => 165,  428 => 164,  423 => 162,  418 => 160,  413 => 157,  408 => 155,  403 => 154,  398 => 152,  393 => 151,  391 => 150,  385 => 147,  377 => 142,  373 => 141,  365 => 136,  359 => 132,  354 => 128,  348 => 127,  342 => 126,  337 => 124,  328 => 118,  324 => 117,  318 => 116,  312 => 113,  308 => 112,  300 => 107,  296 => 106,  290 => 105,  284 => 102,  280 => 101,  274 => 97,  269 => 95,  264 => 94,  259 => 92,  254 => 91,  252 => 90,  246 => 87,  237 => 81,  233 => 80,  229 => 79,  223 => 76,  213 => 71,  208 => 69,  191 => 65,  185 => 64,  179 => 60,  175 => 58,  166 => 51,  161 => 49,  156 => 48,  151 => 46,  146 => 45,  144 => 44,  138 => 41,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  115 => 33,  109 => 30,  105 => 28,  97 => 24,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/instagram.twig", "");
    }
}
