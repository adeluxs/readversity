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

/* extension/module/tawkto.twig */
class __TwigTemplate_0e3dc3c316c81676acbb51144667af3eaa7f1d315ccf2b4de1cfa789f3d52fa2 extends \Twig\Template
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
<link href=\"https://plugins.tawk.to/public/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<style type=\"text/css\">
.form-group + .form-group {
    border: none;
    margin: 0px 0;
}
</style>
";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
\t\t     <div class=\"pull-right\">
        <a href=\"";
        // line 14
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t
        <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"box\">
            <div class=\"heading\">
                <h1><img src=\"view/image/tawkto/tawky.png\" alt=\"\" /> ";
        // line 26
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
            <div class=\"box\">
                ";
        // line 29
        if ( !($context["same_user"] ?? null)) {
            // line 30
            echo "                <div id=\"widget_already_set\" style=\"width: 100%;color: #3c763d; border-color: #d6e9c6; font-weight: bold; margin: 20px 0 30px;\" class=\"alert alert-warning\">Notice: Widget already set by other user</div>
                ";
        }
        // line 32
        echo "            </div>
            <div class=\"content\" style=\"position: relative;min-height: 330px;\">
                <div id=\"loader\" style=\"position: absolute; top : 50%; left : 50%; margin-top : -35px; margin-left: -35px;\">
                    <img src=\"view/image/tawkto/loader.gif\" alt=\"\" />
                </div>
                <iframe id=\"tawkIframe\" src=\"\" style=\"min-height: 305px; width : 100%; border: none; display: none\">
                </iframe>
                <input type=\"hidden\" class=\"hidden widget_vars\" name=\"module_tawkto_page_id\" value=\"";
        // line 39
        echo ($context["widgetconfig"] ?? null);
        echo "\">
                <input type=\"hidden\" class=\"hidden widget_vars\" name=\"module_tawkto_widget_id\" value=\"";
        // line 40
        echo ($context["widgetconfigid"] ?? null);
        echo "\">
                <input type=\"hidden\" class=\"hidden widget_vars\" name=\"module_tawkto_store_id\" value=\"";
        // line 41
        echo ($context["store_id"] ?? null);
        echo "\">
                <input type=\"hidden\" class=\"hidden widget_vars\" name=\"module_tawkto_store_layout_id\" value=\"";
        // line 42
        echo ($context["store_layout_id"] ?? null);
        echo "\">
            </div>
        </div>
        <hr>
        <div class=\"box\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <form id=\"formulario\" class=\"form-horizontal\" action=\"";
        // line 49
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
                        <div class=\"col-lg-12\">
                            <div class=\"panel-heading\"><strong>Visibility Settings</strong></div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label for=\"always_display\" class=\"col-lg-6 control-label\">Always show Tawk.To widget on every page</label>
                            <div class=\"col-lg-6 control-label \">
                               
                                <input type=\"checkbox\" class=\"col-lg-6\" name=\"always_display\" 
                                    id=\"always_display\" value=\"1\" ";
        // line 58
        if (($context["alwaysdisplay"] ?? null)) {
            echo "checked";
        }
        echo " />
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label for=\"hide_oncustom\" class=\"col-lg-6 control-label\">Except on pages:</label>
                            <div class=\"col-lg-6 control-label\">
                                ";
        // line 64
        if (($context["hideoncustom"] ?? null)) {
            // line 65
            echo "                                    <textarea class=\"form-control hide_specific\" name=\"hide_oncustom\" 
                                        id=\"hide_oncustom\" cols=\"30\" rows=\"10\">";
            // line 66
            echo ($context["whitelist"] ?? null);
            echo "</textarea>
                                ";
        } else {
            // line 68
            echo "                                    <textarea class=\"form-control hide_specific\" name=\"hide_oncustom\" id=\"hide_oncustom\" cols=\"30\" rows=\"10\"></textarea>
                                ";
        }
        // line 70
        echo "                                <br>
                                <p style=\"text-align: justify;\">
                                Add URLs to pages in which you would like to hide the widget. ( if \"always show\" is checked )<br>
                                Put each URL in a new line.
                                </p>
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label for=\"show_onfrontpage\" class=\"col-lg-6 control-label\">Show on frontpage</label>
                            <div class=\"col-lg-6 control-label \">
                                <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_onfrontpage\" 
                                    id=\"show_onfrontpage\" value=\"1\" 
                                    ";
        // line 82
        if (($context["showonfrontpage"] ?? null)) {
            echo "checked";
        }
        echo " />
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label for=\"show_oncategory\" class=\"col-lg-6 control-label\">Show on category pages</label>
                            <div class=\"col-lg-6 control-label \">
                                <input type=\"checkbox\" class=\"col-lg-6 show_specific\" name=\"show_oncategory\" id=\"show_oncategory\" value=\"1\" 
                                    ";
        // line 89
        if (($context["showoncategory"] ?? null)) {
            echo "checked";
        }
        echo " />
                            </div>
                        </div>
                        <div class=\"form-group col-lg-12\">
                            <label for=\"show_oncustom\" class=\"col-lg-6 control-label\">Show on pages:</label>
                            <div class=\"col-lg-6 control-label\">
                                ";
        // line 95
        if (($context["showoncustom"] ?? null)) {
            // line 96
            echo "                                    <textarea class=\"form-control show_specific\" name=\"show_oncustom\" 
                                        id=\"show_oncustom\" cols=\"30\" rows=\"10\">";
            // line 97
            echo ($context["whitelist2"] ?? null);
            echo "</textarea>
                                ";
        } else {
            // line 99
            echo "                                    <textarea class=\"form-control show_specific\" name=\"show_oncustom\" id=\"show_oncustom\" cols=\"30\" rows=\"10\"></textarea>
                                ";
        }
        // line 101
        echo "                                <br>
                                <p style=\"text-align: justify;\">
                                Add URLs to pages in which you would like to show the widget.<br>
                                Put each URL in a new line.
                                </p>
                            </div>
                        </div>
                        <div style=\"position: relative; overflow: hidden; width: 100%; padding: 5px 0;\">
                            <div id=\"optionsSuccessMessage\" style=\"position:absolute;top:0;left;0;background-color: #dff0d8; color: #3c763d; border-color: #d6e9c6; font-weight: bold; display: none;\" class=\"alert alert-success col-lg-5\">Successfully set widget options to your site</div>
                            <label for=\"module_form_submit_btn\" class=\"col-lg-6 control-label\"></label>
\t\t\t\t\t\t\t<div class=\"form-group col-lg-3\">
                                <button type=\"submit\" value=\"1\" id=\"module_form_submit_btn\" name=\"submitBlockCategories\" class=\"btn btn-default pull-right\"><i class=\"process-icon-save\"></i> Save</button>    
                            </div>
                        </div>
\t\t\t\t\t\t
\t\t\t<div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 117
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"tawkto_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 120
        if (($context["status"] ?? null)) {
            // line 121
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 122
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 124
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 125
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 127
        echo "              </select>
            </div>
          </div>
                    </form>
                    
                </div>
                <div class=\"col-lg-4\"></div>
            </div>
        </div>
    </div>
</div>

<script>
var currentHost = window.location.protocol + '//' + window.location.host,
url = '";
        // line 141
        echo ($context["iframe_url"] ?? null);
        echo "&parentDomain=' + currentHost,
baseUrl = '";
        // line 142
        echo ($context["base_url"] ?? null);
        echo "',
storeHierarchy = ";
        // line 143
        echo ($context["hierarchy2"] ?? null);
        echo ";

jQuery('#tawkIframe').attr('src', url);
jQuery('#tawkIframe').load(function() {
    \$('#loader').hide();
    \$(this).show();
});
var iframe = jQuery('#tawk_widget_customization')[0];

window.addEventListener('message', function(e) {

    if(e.origin === baseUrl) {

        if(e.data.action === 'setWidget') {
            setTawkWidget(e);
        }

        if(e.data.action === 'removeWidget') {
            removeTawkWidget(e);
        }

        if(e.data.action === 'getIdValues') {
            e.source.postMessage({action: 'idValues', values : storeHierarchy}, baseUrl);
        }
    }
});

function setTawkWidget(e) {
    var store_layout = e.data.id;
    jQuery.post('";
        // line 172
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["url"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["set_widget_url"] ?? null) : null);
        echo "', {
        pageId   : e.data.pageId,
        widgetId : e.data.widgetId,
        id       : e.data.id,
        store     : parseInt(store_layout),
        store_layout : e.data.id
    }, function(r) {
        if(r.success) {
            e.source.postMessage({action: 'setDone'}, baseUrl);

            jQuery('input[name=\"page_id\"]').val(e.data.pageId);
            jQuery('input[name=\"widget_id\"]').val(e.data.widgetId);
            var newval = parseInt(store_layout);
            jQuery('input[name=\"store_id\"]').val(newval);
            jQuery('input[name=\"store_layout_id\"]').val(e.data.id);
        } else {
            e.source.postMessage({action: 'setFail'}, baseUrl);
        }
    });
}

function removeTawkWidget(e) {
    var store_layout = e.data.id;
    jQuery.post('";
        // line 195
        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["url"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["remove_widget_url"] ?? null) : null);
        echo "', {
        id : e.data.id,
        store : parseInt(store_layout),
        store_layout : e.data.id,
    }, function(r) {
        if(r.success) {
            e.source.postMessage({action: 'removeDone'}, baseUrl);

            jQuery('.widget_vars').val();
        } else {
            e.source.postMessage({action: 'removeFail'}, baseUrl);
        }

    });
}
jQuery(document).ready(function() {
    if(jQuery(\"#always_display\").prop(\"checked\")){
        jQuery('.show_specific').prop('disabled', true);
    } else {
        jQuery('.hide_specific').prop('disabled', true);
    }

    jQuery(\"#always_display\").change(function() {
        if(this.checked){
            jQuery('.hide_specific').prop('disabled', false);
            jQuery('.show_specific').prop('disabled', true);
        }else{
            jQuery('.hide_specific').prop('disabled', true);
            jQuery('.show_specific').prop('disabled', false);
        }
    });

    // process the form
    jQuery('#formulario').submit(function(event) {
        \$path = '";
        // line 229
        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["url"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["set_options_url"] ?? null) : null);
        echo "';
        jQuery.post(\$path, {
            action     : 'set_visibility',
            ajax       : true,
            page_id    : jQuery('input[name=\"page_id\"]').val(),
            widget_id  : jQuery('input[name=\"widget_id\"]').val(),
            store      : parseInt(jQuery('input[name=\"store_layout_id\"]').val()),
            options    : jQuery(this).serialize()
        }, function(r) {
            if(r.success) {
                \$('#optionsSuccessMessage').toggle().delay(3000).fadeOut();
            }
        });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });
});
</script>

";
        // line 249
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/tawkto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 249,  383 => 229,  346 => 195,  320 => 172,  288 => 143,  284 => 142,  280 => 141,  264 => 127,  259 => 125,  254 => 124,  249 => 122,  244 => 121,  242 => 120,  236 => 117,  218 => 101,  214 => 99,  209 => 97,  206 => 96,  204 => 95,  193 => 89,  181 => 82,  167 => 70,  163 => 68,  158 => 66,  155 => 65,  153 => 64,  142 => 58,  130 => 49,  120 => 42,  116 => 41,  112 => 40,  108 => 39,  99 => 32,  95 => 30,  93 => 29,  87 => 26,  79 => 20,  68 => 18,  64 => 17,  56 => 14,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tawkto.twig", "");
    }
}
