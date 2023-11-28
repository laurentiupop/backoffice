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

/* default/base_structure/head.html.twig */
class __TwigTemplate_429bbba481a90abe1da729ece9c23ed8a1762b6205328aad429e82dd0c637f8f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/base_structure/head.html.twig"));

        // line 2
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">";
        // line 10
        echo "<meta charset=\"utf-8\">
<!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">-->

<title> Admin </title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

<!-- Basic Styles -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo " \">

<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo " \">

<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/smartadmin-production-plugins.min.css"), "html", null, true);
        echo " \">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/smartadmin-production.min.css"), "html", null, true);
        echo " \">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/smartadmin-skins.min.css"), "html", null, true);
        echo " \">

<!-- SmartAdmin RTL Support  -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/smartadmin-rtl.min.css"), "html", null, true);
        echo " \">

<!-- We recommend you use \"your_style.css\" to override SmartAdmin
     specific styles this will also ensure you retrain your customization with each SmartAdmin update.-->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/your_style.css"), "html", null, true);
        echo " \">

<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demo.min.css"), "html", null, true);
        echo " \">

<!-- FAVICONS -->
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-57x57.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-60x60.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-72x72.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-76x76.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-114x114.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-120x120.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-144x144.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-152x152.png"), "html", null, true);
        echo "\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/apple-icon-180x180.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/android-icon-192x192.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon-96x96.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
<link rel=\"manifest\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/manifest.json"), "html", null, true);
        echo "\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/ms-icon-144x144.png"), "html", null, true);
        echo "\">
<meta name=\"theme-color\" content=\"#ffffff\">

<!-- GOOGLE FONT -->
<link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("http://fonts.googleapis.com/css"), "html", null, true);
        echo "?family=Open+Sans:400italic,700italic,300,400,700\">

<!-- Specifying a Webpage Icon for Web Clip
     Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
<link rel=\"apple-touch-icon\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/sptouch-icon-iphone.png"), "html", null, true);
        echo " \">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/touch-icon-ipad.png"), "html", null, true);
        echo " \">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/touch-icon-iphone-retina.png"), "html", null, true);
        echo " \">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/touch-icon-ipad-retina.png"), "html", null, true);
        echo " \">

<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">

<!-- Startup image for web apps -->
<link rel=\"apple-touch-startup-image\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/ipad-landscape.png"), "html", null, true);
        echo " \" media=\"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)\">
<link rel=\"apple-touch-startup-image\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/ipad-portrait.png"), "html", null, true);
        echo " \" media=\"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)\">
<link rel=\"apple-touch-startup-image\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/splash/iphone.png"), "html", null, true);
        echo " \" media=\"screen and (max-device-width: 320px)\">

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
\t\t<script>
\t\t\tif (!window.jQuery) {
\t\t\t\tdocument.write('<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/libs/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"><\\/script>');
\t\t\t}
\t\t</script>

\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t\t<script>
\t\t\tif (!window.jQuery.ui) {
\t\t\t\tdocument.write('<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/libs/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\"><\\/script>');
\t\t\t}
\t\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/base_structure/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 88,  211 => 81,  202 => 75,  198 => 74,  194 => 73,  184 => 66,  180 => 65,  176 => 64,  172 => 63,  165 => 59,  158 => 55,  153 => 53,  149 => 52,  145 => 51,  141 => 50,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  95 => 37,  89 => 34,  82 => 30,  76 => 27,  72 => 26,  68 => 25,  62 => 22,  57 => 20,  45 => 10,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#--- Style ---#}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">


{#--- End Style ---#}

<meta charset=\"utf-8\">
<!--<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">-->

<title> Admin </title>
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

<!-- Basic Styles -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/bootstrap.min.css') }} \">

<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/font-awesome.min.css') }} \">

<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-production-plugins.min.css') }} \">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-production.min.css') }} \">
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-skins.min.css') }} \">

<!-- SmartAdmin RTL Support  -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/smartadmin-rtl.min.css') }} \">

<!-- We recommend you use \"your_style.css\" to override SmartAdmin
     specific styles this will also ensure you retrain your customization with each SmartAdmin update.-->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/your_style.css') }} \">

<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset('css/demo.min.css') }} \">

<!-- FAVICONS -->
<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('img/favicon/apple-icon-57x57.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('img/favicon/apple-icon-60x60.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('img/favicon/apple-icon-72x72.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/favicon/apple-icon-76x76.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('img/favicon/apple-icon-114x114.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('img/favicon/apple-icon-120x120.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('img/favicon/apple-icon-144x144.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('img/favicon/apple-icon-152x152.png') }}\">
<link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('img/favicon/apple-icon-180x180.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"{{ asset('img/favicon/android-icon-192x192.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('img/favicon/favicon-32x32.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('img/favicon/favicon-96x96.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('img/favicon/favicon-16x16.png') }}\">
<link rel=\"manifest\" href=\"{{ asset('img/favicon/manifest.json') }}\">
<meta name=\"msapplication-TileColor\" content=\"#ffffff\">
<meta name=\"msapplication-TileImage\" content=\"{{ asset('img/favicon/ms-icon-144x144.png') }}\">
<meta name=\"theme-color\" content=\"#ffffff\">

<!-- GOOGLE FONT -->
<link rel=\"stylesheet\" href=\"{{ asset('http://fonts.googleapis.com/css') }}?family=Open+Sans:400italic,700italic,300,400,700\">

<!-- Specifying a Webpage Icon for Web Clip
     Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
<link rel=\"apple-touch-icon\" href=\"{{ asset('img/splash/sptouch-icon-iphone.png') }} \">
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/splash/touch-icon-ipad.png') }} \">
<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('img/splash/touch-icon-iphone-retina.png') }} \">
<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('img/splash/touch-icon-ipad-retina.png') }} \">

<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">

<!-- Startup image for web apps -->
<link rel=\"apple-touch-startup-image\" href=\"{{ asset('img/splash/ipad-landscape.png') }} \" media=\"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)\">
<link rel=\"apple-touch-startup-image\" href=\"{{ asset('img/splash/ipad-portrait.png') }} \" media=\"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)\">
<link rel=\"apple-touch-startup-image\" href=\"{{ asset('img/splash/iphone.png') }} \" media=\"screen and (max-device-width: 320px)\">

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
\t\t<script>
\t\t\tif (!window.jQuery) {
\t\t\t\tdocument.write('<script src=\"{{ asset('js/libs/jquery-2.1.1.min.js') }}\"><\\/script>');
\t\t\t}
\t\t</script>

\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t\t<script>
\t\t\tif (!window.jQuery.ui) {
\t\t\t\tdocument.write('<script src=\"{{ asset('js/libs/jquery-ui-1.10.3.min.js') }}\"><\\/script>');
\t\t\t}
\t\t</script>
", "default/base_structure/head.html.twig", "/srv/workspace/backofficenew/templates/default/base_structure/head.html.twig");
    }
}
