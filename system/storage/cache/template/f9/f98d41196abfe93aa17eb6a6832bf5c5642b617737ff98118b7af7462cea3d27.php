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

/* extension/extension/login2.twig */
class __TwigTemplate_482e41eaf67408b9bd96313df8c396f63265af2f6aaf78c5c26408eb4f2811ae extends \Twig\Template
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
        echo "<!--**********************************
*** Perfect Admin Login
*** Date: 20.06.2017
*** version mod: 3.0
*** Opencart 3.0
*** Developer: reds
*** Site: www.agenciaprai.com
*** Email: suporte@agenciaprai.com
*************************************-->
<!DOCTYPE html>
<html dir=\"";
        // line 11
        echo ($context["direction"] ?? null);
        echo "\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<title>ADMIN PAINEL</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
\t\t
\t\t<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
\t\t<link href=\"view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
\t\t<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
<style rel=\"stylesheet\">
.login_pg{overflow-x:hidden;background:#1872A2; background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);,radial-gradient(ellipse at top,rgb(43, 144, 198) 2%,rgb(31, 158, 227) 35%,rgb(0, 62, 95) 75%)}
.login_painel{border:1px solid #1872A2;border-radius:3px;transition:all .5s ease 0s;-webkit-transition:all .5s ease 0s;-moz-transition:all .5s ease 0s}
.login_painel:hover{box-shadow:0 10px 3px -5px #0f648b;border:none;border-radius:0;transform:scale(1.05);-webkit-transform:scale(1.05);-moz-transform:scale(1.05)}
.panel-heading{border-top-left-radius:10px;border-top-right-radius:10px}
.panel-body{padding:25px}
.panel-title{font-size: 1.3em;text-transform: uppercase;padding: 4px 0;text-align: left;}
.panel-heading i{font-size: 2.3em;color: rgb(10, 174, 0);float: left;padding-right: 10px;}


.login-container {margin-top:5%;}
</style>
</head>
\t<body class=\"login_pg\">
<div id=\"content\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"login-container col-xs-12 col-sm-6 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-4\">
\t\t\t\t<div class=\"login_painel panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading text-center\">
\t\t\t\t\t\t<h1 class=\"panel-title\"> ";
        // line 42
        echo ($context["text_login"] ?? null);
        echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t";
        // line 45
        if (($context["success"] ?? null)) {
            // line 46
            echo "\t\t\t\t\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t";
        if (($context["error_warning"] ?? null)) {
            // line 51
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" value=\"";
        // line 58
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 63
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 65
        if (($context["forgotten"] ?? null)) {
            // line 66
            echo "\t\t\t\t\t\t\t\t<span class=\"help-block\"><small><a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\"><i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></span></small>
\t\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-unlock\"></i> ";
        // line 70
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 72
        if (($context["redirect"] ?? null)) {
            // line 73
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "extension/extension/login2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 75,  155 => 73,  153 => 72,  148 => 70,  144 => 68,  136 => 66,  134 => 65,  127 => 63,  117 => 58,  110 => 55,  102 => 51,  99 => 50,  91 => 46,  89 => 45,  83 => 42,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/extension/login2.twig", "");
    }
}
