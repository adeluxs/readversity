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

/* extension/module/occmsblock/cmsblock_form.twig */
class __TwigTemplate_8ce278af82ae2eb1795683d31887d706d7cf8d52e09745eead646790024a068d extends \Twig\Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-banner\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-banner\" class=\"form-horizontal\">
\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 30
        echo ($context["entry_type"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"type\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 33
        if (($context["type"] ?? null)) {
            // line 34
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_description"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 35
            echo ($context["text_link"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_description"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 38
            echo ($context["text_link"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 44
        echo ($context["entry_identify"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"identify\" value=\"";
        // line 46
        echo ($context["identify"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group entry_link\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 51
        echo ($context["entry_link"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<input type=\"text\" name=\"link\" value=\"";
        // line 53
        echo ($context["link"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 58
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<select name=\"status\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 61
        if (($context["status"] ?? null)) {
            // line 62
            echo "\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\">";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 66
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 72
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"sort_order\" value=\"";
        // line 74
        echo ($context["sort_order"] ?? null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 79
        echo ($context["entry_store"] ?? null);
        echo "</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 83
            echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"banner_store[]\" value=\"";
            // line 85
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["store"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["store_id"] ?? null) : null);
            echo "\" ";
            if (twig_in_filter((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["store"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["store_id"] ?? null) : null), ($context["banner_store"] ?? null))) {
                echo "  checked=\"checked\" ";
            }
            echo "  />
\t\t\t\t\t\t\t\t\t";
            // line 86
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["store"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
            echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t   <ul class=\"nav nav-tabs\" id=\"languages\">
\t\t\t\t   ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 97
            echo "\t\t\t\t\t   <li><a href=\"#language";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["language"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["language_id"] ?? null) : null);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["code"] ?? null) : null);
            echo "/";
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["code"] ?? null) : null);
            echo ".png\" title=\" ";
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
            echo "\" /> ";
            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["language"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
            echo "</a></li>
\t\t\t\t   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "\t\t\t\t  </ul>

\t\t\t\t  <div class =\"tab-content\">
\t\t\t\t\t    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 103
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"language";
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["language"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["language_id"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 105
            echo ($context["entry_title"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input  class=\"form-control\" type=\"text\" name=\"cmsblock_description[";
            // line 107
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["language"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["language_id"] ?? null) : null);
            echo "][title]\" size=\"100\" value=\"";
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["cmsblock_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[(($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["language"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["language_id"] ?? null) : null)] ?? null) : null)) {
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["cmsblock_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[(($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["language"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["title"] ?? null) : null);
                echo " ";
            } else {
                echo "  ";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 108
            if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_title"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[(($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["language"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["language_id"] ?? null) : null)] ?? null) : null)) {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t  <span class=\"error\"> ";
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["error_title"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[(($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["language"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["language_id"] ?? null) : null)] ?? null) : null);
                echo "</span>
\t\t\t\t\t\t\t\t\t  ";
            }
            // line 111
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group entry_des\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 116
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["language"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["language_id"] ?? null) : null);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" data-toggle=\"summernote\" data-lang=\"";
            // line 118
            echo ($context["summernote"] ?? null);
            echo "\" name=\"cmsblock_description[";
            echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["language"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["language_id"] ?? null) : null);
            echo "][description]\" id=\"input-description";
            echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["language"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["language_id"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 119
            if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["cmsblock_description"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[(($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["language"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["language_id"] ?? null) : null)] ?? null) : null)) {
                echo "  ";
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["cmsblock_description"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[(($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["language"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["description"] ?? null) : null);
                echo " ";
            } else {
                echo "  ";
            }
            // line 120
            echo "\t\t\t\t\t\t\t\t\t</textarea>
\t\t\t\t\t\t\t\t\t";
            // line 121
            if ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["error_description"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[(($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["language_id"] ?? null) : null)] ?? null) : null)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"error\">";
                echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["error_description"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[(($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["language"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["language_id"] ?? null) : null)] ?? null) : null);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t  </div>
\t\t\t\t</div>

        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>

<script type=\"text/javascript\"><!--
\t
\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 143
            echo "\t\t\t\$('#languages li:first-child a').tab('show');
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "
\tvar type_cur = ";
        // line 146
        echo ($context["type"] ?? null);
        echo "
\t\tif(type_cur == 0) {
\t\t\t\$('.entry_des').hide();
\t\t\t\$('.entry_link').show();
\t\t} else {
\t\t\t\$('.entry_link').hide();
\t\t\t\$('.entry_des').show();
\t\t}
\t\$('select[name=\"type\"]').bind('change', function() {
\t\tvar type = \$(this).val();
\t\tif(type == 0) {
\t\t\t\$('.entry_des').hide();
\t\t\t\$('.entry_link').show();
\t\t} else {
\t\t\t\$('.entry_link').hide();
\t\t\t\$('.entry_des').show();
\t\t}
\t});
//--></script> 
</div>
";
        // line 166
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/occmsblock/cmsblock_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 166,  395 => 146,  392 => 145,  385 => 143,  381 => 142,  365 => 128,  356 => 124,  350 => 122,  348 => 121,  345 => 120,  337 => 119,  329 => 118,  322 => 116,  315 => 111,  309 => 109,  307 => 108,  296 => 107,  291 => 105,  285 => 103,  281 => 102,  276 => 99,  259 => 97,  255 => 96,  247 => 90,  237 => 86,  229 => 85,  225 => 83,  221 => 82,  215 => 79,  207 => 74,  202 => 72,  196 => 68,  191 => 66,  186 => 65,  181 => 63,  176 => 62,  174 => 61,  168 => 58,  160 => 53,  155 => 51,  147 => 46,  142 => 44,  136 => 40,  131 => 38,  126 => 37,  121 => 35,  116 => 34,  114 => 33,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/occmsblock/cmsblock_form.twig", "");
    }
}
