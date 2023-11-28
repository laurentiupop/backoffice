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

/* default/base_structure/header.html.twig */
class __TwigTemplate_a2565241ce6eef43e6d997c69902ab791d18937db7f8edc6a9a3c33be4233d59 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/base_structure/header.html.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        // line 4
        echo "            ";
        // line 5
        echo "                ";
        // line 6
        echo "            ";
        // line 7
        echo "        ";
        // line 8
        echo "    ";
        // line 10
        echo "<header id=\"header\">
\t<div id=\"logo-group\">

\t\t<!-- PLACE YOUR LOGO HERE -->
\t\t<span id=\"logo\"> <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/admin.png"), "html", null, true);
        echo "\" alt=\"\"> </span>
\t\t<!-- END LOGO PLACEHOLDER -->

        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "
        ";
        // line 22
        echo "        ";
        // line 23
        echo "
        ";
        // line 25
        echo "        ";
        // line 26
        echo "        ";
        // line 27
        echo "        ";
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        // line 30
        echo "        ";
        // line 31
        echo "        ";
        // line 32
        echo "        ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        // line 36
        echo "
        ";
        // line 38
        echo "        ";
        // line 39
        echo "
        ";
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        // line 44
        echo "
        ";
        // line 46
        echo "
        ";
        // line 48
        echo "        ";
        // line 49
        echo "
        ";
        // line 51
        echo "        ";
        // line 52
        echo "        ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        // line 57
        echo "
        ";
        // line 59
        echo "        ";
        // line 60
        echo "\t</div>

    ";
        // line 63
        echo "    ";
        // line 64
        echo "
    ";
        // line 66
        echo "    ";
        // line 67
        echo "
    ";
        // line 69
        echo "    ";
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        // line 75
        echo "    ";
        // line 76
        echo "    ";
        // line 77
        echo "    ";
        // line 78
        echo "    ";
        // line 79
        echo "    ";
        // line 80
        echo "    ";
        // line 81
        echo "    ";
        // line 82
        echo "    ";
        // line 83
        echo "    ";
        // line 84
        echo "    ";
        // line 85
        echo "
    ";
        // line 87
        echo "\t<!-- end projects dropdown -->

\t<!-- pulled right: nav area -->
\t<div class=\"pull-right\">

\t\t<!-- collapse menu button -->
        <div id=\"hide-menu\" class=\"btn-header pull-right\">
        <span> <a href=\"javascript:void(0);\" data-action=\"toggleMenu\" title=\"Collapse Menu\"><i class=\"fa fa-reorder\"></i></a> </span>
        </div>
\t\t<!-- end collapse menu -->

\t\t<!-- #MOBILE -->
\t\t<!-- Top menu profile link : this shows only when top menu is active -->
\t\t<ul id=\"mobile-profile-img\" class=\"header-dropdown-list hidden-xs padding-5\">
\t\t\t<li class=\"\">
\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"padding-10 padding-top-0 padding-bottom-0\"><i class=\"fa fa-cog\"></i> Setting</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"profile.html\" class=\"padding-10 padding-top-0 padding-bottom-0\"> <i class=\"fa fa-user\"></i> <u>P</u>rofile</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"padding-10 padding-top-0 padding-bottom-0\" data-action=\"toggleShortcut\"><i class=\"fa fa-arrow-down\"></i> <u>S</u>hortcut</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"padding-10 padding-top-0 padding-bottom-0\" data-action=\"launchFullscreen\"><i class=\"fa fa-arrows-alt\"></i> Full <u>S</u>creen</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" class=\"padding-10 padding-top-5 padding-bottom-5\" data-action=\"userLogout\"><i class=\"fa fa-sign-out fa-lg\"></i> <strong><u>L</u>ogout</strong></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
        ";
        // line 125
        if ((0 !== twig_compare((isset($context["loggedUser"]) || array_key_exists("loggedUser", $context) ? $context["loggedUser"] : (function () { throw new RuntimeError('Variable "loggedUser" does not exist.', 125, $this->source); })()), ""))) {
            // line 126
            echo "\t\t\t<!-- logout button -->
\t\t\t<div id=\"logout\" class=\"btn-header transparent pull-right\">
\t\t\t\t<span> <a href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" title=\"Sign Out\" data-action=\"userLogout\" data-logout-msg=\"You can improve your security further after logging out by closing this opened browser\"><i class=\"fa fa-sign-out\"></i></a> </span>
\t\t\t</div>
\t\t\t<!-- end logout button -->

\t\t\t<!-- search mobile button (this is hidden till mobile view port) -->
\t\t\t<div id=\"search-mobile\" class=\"btn-header transparent pull-right\">
\t\t\t\t<span> <a href=\"javascript:void(0)\" title=\"Search\"><i class=\"fa fa-search\"></i></a> </span>
\t\t\t</div>
\t\t\t<!-- end search mobile button -->

\t\t\t<!-- input: search field -->
            ";
            // line 140
            echo "            ";
            // line 141
            echo "            ";
            // line 142
            echo "            ";
            // line 143
            echo "            ";
            // line 144
            echo "            ";
            // line 145
            echo "            ";
            // line 146
            echo "            ";
            // line 147
            echo "            ";
            // line 148
            echo "            ";
            // line 149
            echo "            ";
            // line 150
            echo "            ";
            // line 151
            echo "            ";
            // line 152
            echo "            ";
            // line 153
            echo "            ";
            // line 154
            echo "            ";
            // line 155
            echo "            ";
            // line 156
            echo "            ";
            // line 157
            echo "            ";
            // line 158
            echo "            ";
            // line 159
            echo "            ";
            // line 160
            echo "            ";
            // line 161
            echo "            ";
            // line 162
            echo "            ";
            // line 163
            echo "            ";
            // line 164
            echo "            ";
            // line 165
            echo "            ";
            // line 166
            echo "            ";
            // line 167
            echo "            ";
            // line 168
            echo "\t\t\t<!-- end input: search field -->

\t\t\t<!-- fullscreen button -->
\t\t\t<div id=\"fullscreen\" class=\"btn-header transparent pull-right\">
\t\t\t\t<span> <a href=\"javascript:void(0);\"  data-action=\"launchFullscreen\" title=\"Full Screen\"><i class=\"fa fa-arrows-alt\"></i></a> </span>
\t\t\t</div>
\t\t\t<!-- end fullscreen button -->

\t\t\t<!-- #Voice Command: Start Speech -->
\t\t\t<div id=\"speech-btn\" class=\"btn-header transparent pull-right hidden-sm hidden-xs\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://testadm.cspstar.com/\" title=\"Voice Command\" style=\"    font-size: 10px;    border: 1px solid #20d200;    color: #20d200;\" data-action=\"\">";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 179, $this->source); })()), "getLang", [0 => "Old admin"], "method", false, false, false, 179), "html", null, true);
            echo "</a>
\t\t\t\t\t<div class=\"popover bottom\"><div class=\"arrow\"></div>
\t\t\t\t\t\t<div class=\"popover-content\">
\t\t\t\t\t\t\t<h4 class=\"vc-title\">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
\t\t\t\t\t\t\t<h4 class=\"vc-title-error text-center\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-microphone-slash\"></i> Voice command failed
\t\t\t\t\t\t\t\t<br><small class=\"txt-color-red\">Must <strong>\"Allow\"</strong> Microphone</small>
\t\t\t\t\t\t\t\t<br><small class=\"txt-color-red\">Must have <strong>Internet Connection</strong></small>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-success\" onclick=\"commands.help()\">See Commands</a>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn bg-color-purple txt-color-white\" onclick=\"\$('#speech-btn .popover').fadeOut(50);\">Close Popup</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end voice command -->
        ";
        }
        // line 196
        echo "\t\t<!-- multiple lang dropdown : find all flags in the flags page -->
\t\t<ul class=\"header-dropdown-list hidden-xs\">
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <img src=\"img/blank.gif\" class=\"flag flag-";
        // line 199
        if ((0 === twig_compare(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 199, $this->source); })()), "language_code", [], "any", false, false, false, 199)), "EN"))) {
            echo "us";
        } else {
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 199, $this->source); })()), "language_code", [], "any", false, false, false, 199)), "html", null, true);
        }
        echo "\" alt=\"United States\"> <span>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 199, $this->source); })()), "language_code", [], "any", false, false, false, 199)), "html", null, true);
        echo "</span> <i class=\"fa fa-angle-down\"></i> </a>
\t\t\t\t<ul class=\"dropdown-menu pull-right\">
                    ";
        // line 202
        echo "                    ";
        // line 203
        echo "                    ";
        // line 204
        echo "                    ";
        // line 205
        echo "                    ";
        // line 206
        echo "                    ";
        // line 207
        echo "                    ";
        // line 208
        echo "                    ";
        // line 209
        echo "                    ";
        // line 210
        echo "                    ";
        // line 211
        echo "                    ";
        // line 212
        echo "                    ";
        // line 213
        echo "                    ";
        // line 214
        echo "                    ";
        // line 215
        echo "                    ";
        // line 216
        echo "                    ";
        // line 217
        echo "                    ";
        // line 218
        echo "                    ";
        // line 219
        echo "                    ";
        // line 220
        echo "                    ";
        // line 221
        echo "                    ";
        // line 222
        echo "
                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 223, $this->source); })()), "availableLanguage", [], "any", false, false, false, 223));
        foreach ($context['_seq'] as $context["language"] => $context["name"]) {
            // line 224
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lang", ["locale" => $context["language"]]), "html", null, true);
            echo "\"><img src=\"img/blank.gif\" class=\"flag flag-";
            if ((0 === twig_compare($context["language"], "en"))) {
                echo "us";
            } else {
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            }
            echo "\" alt=\" ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
\t\t\t\t\t\t</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "                    ";
        // line 229
        echo "                    ";
        // line 230
        echo "                    ";
        // line 231
        echo "                    ";
        // line 232
        echo "                    ";
        // line 233
        echo "                    ";
        // line 234
        echo "                    ";
        // line 235
        echo "                    ";
        // line 236
        echo "                    ";
        // line 237
        echo "
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t\t<!-- end multiple lang -->

\t</div>
\t<!-- end pulled right: nav area -->

</header>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/base_structure/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 237,  444 => 236,  442 => 235,  440 => 234,  438 => 233,  436 => 232,  434 => 231,  432 => 230,  430 => 229,  428 => 228,  409 => 225,  406 => 224,  402 => 223,  399 => 222,  397 => 221,  395 => 220,  393 => 219,  391 => 218,  389 => 217,  387 => 216,  385 => 215,  383 => 214,  381 => 213,  379 => 212,  377 => 211,  375 => 210,  373 => 209,  371 => 208,  369 => 207,  367 => 206,  365 => 205,  363 => 204,  361 => 203,  359 => 202,  348 => 199,  343 => 196,  323 => 179,  310 => 168,  308 => 167,  306 => 166,  304 => 165,  302 => 164,  300 => 163,  298 => 162,  296 => 161,  294 => 160,  292 => 159,  290 => 158,  288 => 157,  286 => 156,  284 => 155,  282 => 154,  280 => 153,  278 => 152,  276 => 151,  274 => 150,  272 => 149,  270 => 148,  268 => 147,  266 => 146,  264 => 145,  262 => 144,  260 => 143,  258 => 142,  256 => 141,  254 => 140,  240 => 128,  236 => 126,  234 => 125,  226 => 120,  191 => 87,  188 => 85,  186 => 84,  184 => 83,  182 => 82,  180 => 81,  178 => 80,  176 => 79,  174 => 78,  172 => 77,  170 => 76,  168 => 75,  166 => 74,  164 => 73,  162 => 72,  160 => 71,  158 => 70,  156 => 69,  153 => 67,  151 => 66,  148 => 64,  146 => 63,  142 => 60,  140 => 59,  137 => 57,  135 => 56,  133 => 55,  131 => 54,  129 => 53,  127 => 52,  125 => 51,  122 => 49,  120 => 48,  117 => 46,  114 => 44,  112 => 43,  110 => 42,  108 => 41,  105 => 39,  103 => 38,  100 => 36,  98 => 35,  96 => 34,  94 => 33,  92 => 32,  90 => 31,  88 => 30,  86 => 29,  84 => 28,  82 => 27,  80 => 26,  78 => 25,  75 => 23,  73 => 22,  70 => 20,  68 => 19,  66 => 18,  60 => 14,  54 => 10,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#<header class=\"headerStyle\">#}
    {#<div class=\"container\">#}
        {#<div class=\"row\">#}
            {#<div class=\"logo\">#}
                {#<img src=\"{{ asset('img/logo/logo.gif') }}\">#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
{#</header>#}
<header id=\"header\">
\t<div id=\"logo-group\">

\t\t<!-- PLACE YOUR LOGO HERE -->
\t\t<span id=\"logo\"> <img src=\"{{ asset('img/logo/admin.png') }}\" alt=\"\"> </span>
\t\t<!-- END LOGO PLACEHOLDER -->

        {#<!-- Note: The activity badge color changes when clicked and resets the number to 0#}
        {#Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->#}
        {#<span id=\"activity\" class=\"activity-dropdown\"> <i class=\"fa fa-user\"></i> <b class=\"badge\"> 0 </b> </span>#}

        {#<!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->#}
        {#<div class=\"ajax-dropdown\">#}

        {#<!-- the ID links are fetched via AJAX to the ajax container \"ajax-notifications\" -->#}
        {#<div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">#}
        {#<label class=\"btn btn-default\">#}
        {#<input type=\"radio\" name=\"activity\" id=\"ajax/notify/mail.html\">#}
        {#Msgs (14) </label>#}
        {#<label class=\"btn btn-default\">#}
        {#<input type=\"radio\" name=\"activity\" id=\"ajax/notify/notifications.html\">#}
        {#notify (3) </label>#}
        {#<label class=\"btn btn-default\">#}
        {#<input type=\"radio\" name=\"activity\" id=\"ajax/notify/tasks.html\">#}
        {#Tasks (4) </label>#}
        {#</div>#}

        {#<!-- notification content -->#}
        {#<div class=\"ajax-notifications custom-scroll\">#}

        {#<div class=\"alert alert-transparent\">#}
        {#<h4>Click a button to show messages here</h4>#}
        {#This blank page message helps protect your privacy, or you can show the first message here automatically.#}
        {#</div>#}

        {#<i class=\"fa fa-lock fa-4x fa-border\"></i>#}

        {#</div>#}
        {#<!-- end notification content -->#}

        {#<!-- footer: refresh area -->#}
        {#<span> Last updated on: 12/12/2013 9:43AM#}
        {#<button type=\"button\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> Loading...\" class=\"btn btn-xs btn-default pull-right\">#}
        {#<i class=\"fa fa-refresh\"></i>#}
        {#</button>#}
        {#</span>#}
        {#<!-- end footer -->#}

        {#</div>#}
        {#<!-- END AJAX-DROPDOWN -->#}
\t</div>

    {#<!-- projects dropdown -->#}
    {#<div class=\"project-context hidden-xs\">#}

    {#<span class=\"label\">Projects:</span>#}
    {#<span class=\"project-selector dropdown-toggle\" data-toggle=\"dropdown\">Recent projects <i class=\"fa fa-angle-down\"></i></span>#}

    {#<!-- Suggestion: populate this list with fetch and push technique -->#}
    {#<ul class=\"dropdown-menu\">#}
    {#<li>#}
    {#<a href=\"javascript:void(0);\">Online e-merchant management system - attaching integration with the iOS</a>#}
    {#</li>#}
    {#<li>#}
    {#<a href=\"javascript:void(0);\">Notes on pipeline upgradee</a>#}
    {#</li>#}
    {#<li>#}
    {#<a href=\"javascript:void(0);\">Assesment Report for merchant account</a>#}
    {#</li>#}
    {#<li class=\"divider\"></li>#}
    {#<li>#}
    {#<a href=\"javascript:void(0);\"><i class=\"fa fa-power-off\"></i> Clear</a>#}
    {#</li>#}
    {#</ul>#}
    {#<!-- end dropdown-menu-->#}

    {#</div>#}
\t<!-- end projects dropdown -->

\t<!-- pulled right: nav area -->
\t<div class=\"pull-right\">

\t\t<!-- collapse menu button -->
        <div id=\"hide-menu\" class=\"btn-header pull-right\">
        <span> <a href=\"javascript:void(0);\" data-action=\"toggleMenu\" title=\"Collapse Menu\"><i class=\"fa fa-reorder\"></i></a> </span>
        </div>
\t\t<!-- end collapse menu -->

\t\t<!-- #MOBILE -->
\t\t<!-- Top menu profile link : this shows only when top menu is active -->
\t\t<ul id=\"mobile-profile-img\" class=\"header-dropdown-list hidden-xs padding-5\">
\t\t\t<li class=\"\">
\t\t\t\t<ul class=\"dropdown-menu pull-right\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"padding-10 padding-top-0 padding-bottom-0\"><i class=\"fa fa-cog\"></i> Setting</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"profile.html\" class=\"padding-10 padding-top-0 padding-bottom-0\"> <i class=\"fa fa-user\"></i> <u>P</u>rofile</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"padding-10 padding-top-0 padding-bottom-0\" data-action=\"toggleShortcut\"><i class=\"fa fa-arrow-down\"></i> <u>S</u>hortcut</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"padding-10 padding-top-0 padding-bottom-0\" data-action=\"launchFullscreen\"><i class=\"fa fa-arrows-alt\"></i> Full <u>S</u>creen</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('logout') }}\" class=\"padding-10 padding-top-5 padding-bottom-5\" data-action=\"userLogout\"><i class=\"fa fa-sign-out fa-lg\"></i> <strong><u>L</u>ogout</strong></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
        {% if loggedUser != '' %}
\t\t\t<!-- logout button -->
\t\t\t<div id=\"logout\" class=\"btn-header transparent pull-right\">
\t\t\t\t<span> <a href=\"{{ path('logout') }}\" title=\"Sign Out\" data-action=\"userLogout\" data-logout-msg=\"You can improve your security further after logging out by closing this opened browser\"><i class=\"fa fa-sign-out\"></i></a> </span>
\t\t\t</div>
\t\t\t<!-- end logout button -->

\t\t\t<!-- search mobile button (this is hidden till mobile view port) -->
\t\t\t<div id=\"search-mobile\" class=\"btn-header transparent pull-right\">
\t\t\t\t<span> <a href=\"javascript:void(0)\" title=\"Search\"><i class=\"fa fa-search\"></i></a> </span>
\t\t\t</div>
\t\t\t<!-- end search mobile button -->

\t\t\t<!-- input: search field -->
            {#<form action=\"search.html\" class=\"header-search pull-right\">#}
            {#<input id=\"search-fld\"  type=\"text\" name=\"param\" placeholder=\"Find reports and more\" data-autocomplete='[#}
            {#\"ActionScript\",#}
            {#\"AppleScript\",#}
            {#\"Asp\",#}
            {#\"BASIC\",#}
            {#\"C\",#}
            {#\"C++\",#}
            {#\"Clojure\",#}
            {#\"COBOL\",#}
            {#\"ColdFusion\",#}
            {#\"Erlang\",#}
            {#\"Fortran\",#}
            {#\"Groovy\",#}
            {#\"Haskell\",#}
            {#\"Java\",#}
            {#\"JavaScript\",#}
            {#\"Lisp\",#}
            {#\"Perl\",#}
            {#\"PHP\",#}
            {#\"Python\",#}
            {#\"Ruby\",#}
            {#\"Scala\",#}
            {#\"Scheme\"]'>#}
            {#<button type=\"submit\">#}
            {#<i class=\"fa fa-search\"></i>#}
            {#</button>#}
            {#<a href=\"javascript:void(0);\" id=\"cancel-search-js\" title=\"Cancel Search\"><i class=\"fa fa-times\"></i></a>#}
            {#</form>#}
\t\t\t<!-- end input: search field -->

\t\t\t<!-- fullscreen button -->
\t\t\t<div id=\"fullscreen\" class=\"btn-header transparent pull-right\">
\t\t\t\t<span> <a href=\"javascript:void(0);\"  data-action=\"launchFullscreen\" title=\"Full Screen\"><i class=\"fa fa-arrows-alt\"></i></a> </span>
\t\t\t</div>
\t\t\t<!-- end fullscreen button -->

\t\t\t<!-- #Voice Command: Start Speech -->
\t\t\t<div id=\"speech-btn\" class=\"btn-header transparent pull-right hidden-sm hidden-xs\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://testadm.cspstar.com/\" title=\"Voice Command\" style=\"    font-size: 10px;    border: 1px solid #20d200;    color: #20d200;\" data-action=\"\">{{ translator.getLang('Old admin') }}</a>
\t\t\t\t\t<div class=\"popover bottom\"><div class=\"arrow\"></div>
\t\t\t\t\t\t<div class=\"popover-content\">
\t\t\t\t\t\t\t<h4 class=\"vc-title\">Voice command activated <br><small>Please speak clearly into the mic</small></h4>
\t\t\t\t\t\t\t<h4 class=\"vc-title-error text-center\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-microphone-slash\"></i> Voice command failed
\t\t\t\t\t\t\t\t<br><small class=\"txt-color-red\">Must <strong>\"Allow\"</strong> Microphone</small>
\t\t\t\t\t\t\t\t<br><small class=\"txt-color-red\">Must have <strong>Internet Connection</strong></small>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-success\" onclick=\"commands.help()\">See Commands</a>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn bg-color-purple txt-color-white\" onclick=\"\$('#speech-btn .popover').fadeOut(50);\">Close Popup</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end voice command -->
        {% endif %}
\t\t<!-- multiple lang dropdown : find all flags in the flags page -->
\t\t<ul class=\"header-dropdown-list hidden-xs\">
\t\t\t<li>
\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"> <img src=\"img/blank.gif\" class=\"flag flag-{% if translator.language_code|upper == 'EN'%}us{% else %}{{ translator.language_code|lower }}{% endif %}\" alt=\"United States\"> <span>{{ translator.language_code|upper }}</span> <i class=\"fa fa-angle-down\"></i> </a>
\t\t\t\t<ul class=\"dropdown-menu pull-right\">
                    {#<li class=\"active\">#}
                    {#<a href=\"/lng/en\"><img src=\"img/blank.gif\" class=\"flag flag-us\" alt=\"United States\"> English (US)</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-fr\" alt=\"France\"> Français</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-es\" alt=\"Spanish\"> Español</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-de\" alt=\"German\"> Deutsch</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-jp\" alt=\"Japan\"> 日本語</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-cn\" alt=\"China\"> 中文</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"/lng/it\"><img src=\"img/blank.gif\" class=\"flag flag-it\" alt=\"Italy\"> Italiano</a>#}
                    {#</li>#}

                    {%  for language,name in translator.availableLanguage  %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a  href=\"{{ path('lang', {locale: language}) }}\"><img src=\"img/blank.gif\" class=\"flag flag-{% if language == 'en'%}us{% else %}{{ language }}{% endif %}\" alt=\" {{ name }}\"> {{ name }}</a>
\t\t\t\t\t\t</li>
                    {% endfor %}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-pt\" alt=\"Portugal\"> Portugal</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-ru\" alt=\"Russia\"> Русский язык</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"javascript:void(0);\"><img src=\"img/blank.gif\" class=\"flag flag-kr\" alt=\"Korea\"> 한국어</a>#}
                    {#</li>#}

\t\t\t\t</ul>
\t\t\t</li>
\t\t</ul>
\t\t<!-- end multiple lang -->

\t</div>
\t<!-- end pulled right: nav area -->

</header>", "default/base_structure/header.html.twig", "/srv/workspace/backofficenew/templates/default/base_structure/header.html.twig");
    }
}
