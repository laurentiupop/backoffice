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

/* default/users/search.html.twig */
class __TwigTemplate_34e3b2f6a683c1c1911fabeccfcca1f7afa354ec7a84a0661a0fed83771abd81 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/users/search.html.twig"));

        // line 1
        echo "<article class=\"col-sm-12 col-md-12 col-lg-12\">
    <!-- new widget -->
    <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-1\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\">

        <style>
            div .label{
                color:#333!important;
            }
            div, td{
                text-align: left;
            }
        </style>

        <header>
            <span class=\"widget-icon\"> <i class=\"fa fa-comments txt-color-white\"></i> </span>
            <h2> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 16, $this->source); })()), "getLang", [0 => "Filtre"], "method", false, false, false, 16), "html", null, true);
        echo " </h2>
            <div class=\"widget-toolbar\">
                <!-- add: non-hidden - to disable auto hide -->


            </div>
        </header>

        <!-- widget div-->
        <div>
            <!-- widget edit box -->
            <div class=\"jarviswidget-editbox\">
                <div>
                    <label>Title:</label>
                    <input type=\"text\" />
                </div>
            </div>
            <!-- end widget edit box -->

            <div class=\"widget-body widget-hide-overflow no-padding\">
                <!-- content goes here -->

                <form id=\"searchUserForm\" method=\"POST\">
                    <table cellpadding=\"4\" cellspacing=\"0\" border=\"0\">
                        ";
        // line 41
        echo "                        ";
        // line 42
        echo "                        ";
        // line 43
        echo "                        ";
        // line 44
        echo "                        ";
        // line 45
        echo "                        ";
        // line 46
        echo "                        <tr valign=top>
                            <td colspan=2 class=formheading><b>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 47, $this->source); })()), "getLang", [0 => "Quick Search"], "method", false, false, false, 47), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td class=\"label\" >";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 50, $this->source); })()), "getLang", [0 => "Search type"], "method", false, false, false, 50), "html", null, true);
        echo "</td>
                            <td>
                                <select name=\"field\">
                                    <option value=\"0\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 53, $this->source); })()), "getLang", [0 => "Smart"], "method", false, false, false, 53), "html", null, true);
        echo "</option>
                                    <option value=\"1\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 54, $this->source); })()), "getLang", [0 => "User"], "method", false, false, false, 54), "html", null, true);
        echo "</option>
                                    <option value=\"2\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 55, $this->source); })()), "getLang", [0 => "Customer number"], "method", false, false, false, 55), "html", null, true);
        echo "</option>
                                    <option value=\"3\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 56, $this->source); })()), "getLang", [0 => "Mail address"], "method", false, false, false, 56), "html", null, true);
        echo "</option>
                                    <option value=\"4\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 57, $this->source); })()), "getLang", [0 => "IP address"], "method", false, false, false, 57), "html", null, true);
        echo "</option>
                                    <option value=\"6\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 58, $this->source); })()), "getLang", [0 => "Surname, Name"], "method", false, false, false, 58), "html", null, true);
        echo "</option>
                                    <option value=\"7\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 59, $this->source); })()), "getLang", [0 => "Partner user id"], "method", false, false, false, 59), "html", null, true);
        echo "</option>
                                    ";
        // line 61
        echo "                                    ";
        // line 62
        echo "                                    ";
        // line 63
        echo "                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"label\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 67, $this->source); })()), "getLang", [0 => "String Search"], "method", false, false, false, 67), "html", null, true);
        echo ": </td>
                            <td class=\"content\"> <input name=\"search_string\" type=\"text\" value=\"\" /></td>
                        </tr>
                        <tr>
                            <td class=\"label\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 71, $this->source); })()), "getLang", [0 => "Exactly Result"], "method", false, false, false, 71), "html", null, true);
        echo ": </td>
                            <td class=\"content\"> <input type=\"checkbox\" name=\"exact\" ></td>
                        </tr>

                        <tr>
                            <td class=\"label\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 76, $this->source); })()), "getLang", [0 => "Jurisdiction"], "method", false, false, false, 76), "html", null, true);
        echo ": </td>
                            <td>
                                <select name='jurisdiction' id='jurisdictionFast'>
                                    ";
        // line 80
        echo "                                    ";
        // line 81
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jurList"]) || array_key_exists("jurList", $context) ? $context["jurList"] : (function () { throw new RuntimeError('Variable "jurList" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["v"] => $context["k"]) {
            // line 82
            echo "                                        ";
            // line 83
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\">
                                            ";
            // line 85
            echo "                                            ";
            // line 86
            echo "                                            ";
            // line 87
            echo "                                            ";
            // line 88
            echo "                                            ";
            // line 89
            echo "
                                            ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["k"]);
            foreach ($context['_seq'] as $context["v2"] => $context["k2"]) {
                // line 91
                echo "                                                <option value='";
                echo twig_escape_filter($this->env, $context["v2"], "html", null, true);
                echo "' >";
                echo twig_escape_filter($this->env, $context["k2"], "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['v2'], $context['k2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                                        </optgroup>
                                        ";
            // line 95
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                    ";
        // line 97
        echo "                                    ";
        // line 98
        echo "                                </select>
                            </td>
                        </tr>

                        ";
        // line 103
        echo "                        ";
        // line 104
        echo "                        ";
        // line 105
        echo "                        ";
        // line 106
        echo "
                        ";
        // line 108
        echo "                        ";
        // line 109
        echo "                        ";
        // line 110
        echo "                        <tr>
                            <td colspan=\"2\">
                                <input type=\"hidden\" name=\"page\" value=\"customers/search\">
                                <input type=\"hidden\" name=\"start_search\" value=\"yes\">
                                <input type=\"hidden\" name=\"doQuery\" value=\"yes\">
                                <input type=\"submit\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 115, $this->source); })()), "getLang", [0 => "Search"], "method", false, false, false, 115), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                    </table>
                </form>


                <!-- end content -->
            </div>

        </div>
        <!-- end widget div -->
    </div>
    <!-- end widget -->


</article>

<article class=\"col-sm-12 col-md-12 col-lg-12\">
    <!-- new widget -->
    <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-1\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\">

        <style>
            div .label{
                color:#333!important;
            }
            div, td{
                text-align: left;
            }
        </style>

        <header>
            <span class=\"widget-icon\"> <i class=\"fa fa-comments txt-color-white\"></i> </span>
            <h2> ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 149, $this->source); })()), "getLang", [0 => "Search results"], "method", false, false, false, 149), "html", null, true);
        echo " </h2>
            <div class=\"widget-toolbar\">
                <!-- add: non-hidden - to disable auto hide -->


            </div>
        </header>

        <!-- widget div-->
        <div>
            <!-- widget edit box -->
            <div class=\"jarviswidget-editbox\">
                <div>
                    <label>Title:</label>
                    <input type=\"text\" />
                </div>
            </div>
            <!-- end widget edit box -->

            <div class=\"widget-body widget-hide-overflow no-padding\" id=\"searchResults\">
                <!-- content goes here -->


                <div class=\"table-responsive\">

                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 177, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 177), "html", null, true);
        echo "</th>
                            <th>";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 178, $this->source); })()), "getLang", [0 => "First name"], "method", false, false, false, 178), "html", null, true);
        echo "</th>
                            <th>";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 179, $this->source); })()), "getLang", [0 => "Email"], "method", false, false, false, 179), "html", null, true);
        echo "</th>
                            <th>";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 180, $this->source); })()), "getLang", [0 => "Customer number"], "method", false, false, false, 180), "html", null, true);
        echo "</th>
                            <th>";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 181, $this->source); })()), "getLang", [0 => "Betting Club"], "method", false, false, false, 181), "html", null, true);
        echo "</th>
                            <th>";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 182, $this->source); })()), "getLang", [0 => "District"], "method", false, false, false, 182), "html", null, true);
        echo "</th>
                            <th>";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 183, $this->source); })()), "getLang", [0 => "Nation"], "method", false, false, false, 183), "html", null, true);
        echo "</th>
                            <th>";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 184, $this->source); })()), "getLang", [0 => "Region"], "method", false, false, false, 184), "html", null, true);
        echo "</th>
                            <th>";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 185, $this->source); })()), "getLang", [0 => "Credits"], "method", false, false, false, 185), "html", null, true);
        echo "</th>
                            <th>";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 186, $this->source); })()), "getLang", [0 => "Total bets"], "method", false, false, false, 186), "html", null, true);
        echo "</th>
                            <th>";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 187, $this->source); })()), "getLang", [0 => "Total wins"], "method", false, false, false, 187), "html", null, true);
        echo "</th>
                            <th>";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 188, $this->source); })()), "getLang", [0 => "Total deposits"], "method", false, false, false, 188), "html", null, true);
        echo "</th>
                            <th>";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 189, $this->source); })()), "getLang", [0 => "Total withdrawals"], "method", false, false, false, 189), "html", null, true);
        echo "</th>
                            <th>";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 190, $this->source); })()), "getLang", [0 => "Registration date"], "method", false, false, false, 190), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>


                <!-- end content -->
            </div>

        </div>
        <!-- end widget div -->
    </div>
    <!-- end widget -->


</article>

<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/datatables/dataTables.colVis.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/datatables/dataTables.tableTools.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/datatable-responsive/datatables.responsive.min.js"), "html", null, true);
        echo "\"></script>

<script>
    \$(document).ready(function(){


        \$('#searchUserForm').on('submit',function (e) {
            e.preventDefault();

            var data = \$(this).serializeArray();
            \$.ajax({
                url: '";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_search");
        echo "',
                method: \"POST\",
                data: data,


            }).done(function (data) {
                console.log(data)
                if (data == -1) {
                    \$.bigBox({
                        title : \"";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 236, $this->source); })()), "getLang", [0 => "Session expired"], "method", false, false, false, 236), "html", null, true);
        echo "\",
                        content : \"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 237, $this->source); })()), "getLang", [0 => "Your session has expired, please login again"], "method", false, false, false, 237), "html", null, true);
        echo "!\",
                        color : \"#C46A69\",
                        //timeout: 6000,
                        icon : \"fa fa-warning shake animated\",
                        number : \"1\",
                        timeout : 6000
                    });
                } else {
                    try {
                        \$.bigBox({
                            title : \"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 247, $this->source); })()), "getLang", [0 => "Success"], "method", false, false, false, 247), "html", null, true);
        echo "\",
                            content : \"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 248, $this->source); })()), "getLang", [0 => "You results are here"], "method", false, false, false, 248), "html", null, true);
        echo "!\",
                            color : \"#76BA1B\",
                            //timeout: 6000,
                            icon : \"fa fa-thumbs-up shake animated\",
                            number : \"1\",
                            timeout : 6000
                        });
                        if (data == 0) {
                            \$('#addUserFastModal').modal('hide');

                            \$('#accountFastForm').closest('form').find(\"input[type=text]\").val(\"\");


                            //                                                window.location.href = '/login';
                        }

                        let toPrint = ''
                        if(typeof data[0] != 'string'){
                            \$.each(data, function (i,e) {
                                toPrint += '<tr>'
                                toPrint += '<td>'+e[\"pun_username\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_first_name\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_email\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_customer_number\"]+'</td>';
                                toPrint += '<td>'+e[\"Betting Club\"]+'</td>';
                                toPrint += '<td>'+e[\"District\"]+'</td>';
                                toPrint += '<td>'+e[\"Nation\"]+'</td>';
                                toPrint += '<td>'+e[\"Region\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_credits\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_bets\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_wins\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_deposits\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_withdrawals\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_reg_date\"]+'</td>';
                                toPrint += '</tr>'
                            })

                            if (  \$.fn.DataTable.isDataTable( '#searchResults table' ) ) {
                                \$('#searchResults table').dataTable().fnDestroy();
                            }
                            \$('#searchResults tbody').empty().append(toPrint)
                            \$('#searchResults table').dataTable({
                                // \"sDom\": \"<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                //     \"t\"+
                                //     \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>\",
                                \"sDom\": \"<'dt-toolbar'<'col-sm-6 col-xs-12 hidden-xs'l><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                    \"t\"+
                                    \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>\",
                                \"autoWidth\" : true,
                                \"oLanguage\": {
                                    \"sSearch\": '<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>'
                                },
                                \"preDrawCallback\" : function() {
                                    // Initialize the responsive datatables helper once.
                                    // if (!responsiveHelper_datatable_col_reorder) {
                                    //     responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper(\$('#datatable_col_reorder'), breakpointDefinition);
                                    // }
                                },
                                \"rowCallback\" : function(nRow) {
                                    // responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
                                },
                                \"drawCallback\" : function(oSettings) {
                                    // responsiveHelper_datatable_col_reorder.respond();
                                }
                            });

                        }else{
                            \$.bigBox({
                                title : \"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 316, $this->source); })()), "getLang", [0 => "Warning"], "method", false, false, false, 316), "html", null, true);
        echo "\",
                                content : data[0],
                                color : \"orange\",
                                //timeout: 6000,
                                icon : \"fa fa-warning shake animated\",
                                number : \"1\",
                                timeout : 6000
                            });
                            if (  \$.fn.DataTable.isDataTable( '#searchResults table' ) ) {
                                \$('#searchResults table').dataTable().fnDestroy();
                            }
                            \$('#searchResults tbody').empty().append(toPrint)
                            \$('#searchResults table').dataTable({
                                // \"sDom\": \"<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                //     \"t\"+
                                //     \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>\",
                                \"sDom\": \"<'dt-toolbar'<'col-sm-6 col-xs-12 hidden-xs'l><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                    \"t\"+
                                    \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>\",
                                \"autoWidth\" : true,
                                \"oLanguage\": {
                                    \"sSearch\": '<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>'
                                },
                                \"preDrawCallback\" : function() {
                                    // Initialize the responsive datatables helper once.
                                    // if (!responsiveHelper_datatable_col_reorder) {
                                    //     responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper(\$('#datatable_col_reorder'), breakpointDefinition);
                                    // }
                                },
                                \"rowCallback\" : function(nRow) {
                                    // responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
                                },
                                \"drawCallback\" : function(oSettings) {
                                    // responsiveHelper_datatable_col_reorder.respond();
                                }
                            });
                        }

                        if (data == -28) {

                        }

                        if (data != 0 && data != -28) {
                        }

                        return data;
                    }
                    catch (e) {
                        console.log(e);
                        \$.bigBox({
                            title : \"";
        // line 366
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 366, $this->source); })()), "getLang", [0 => "Error"], "method", false, false, false, 366), "html", null, true);
        echo "\",
                            content : \"";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 367, $this->source); })()), "getLang", [0 => "Something went wrong"], "method", false, false, false, 367), "html", null, true);
        echo "!\",
                            color : \"#C46A69\",
                            //timeout: 6000,
                            icon : \"fa fa-warning shake animated\",
                            number : \"1\",
                            timeout : 6000
                        });
                        return false;
                    }
                }
            })
                .fail(function (error) {
                    console.log(error);
                    return false
                })
                .always(function () {
                    return false
                });
            return false;
        })
    })
</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/users/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 367,  579 => 366,  526 => 316,  455 => 248,  451 => 247,  438 => 237,  434 => 236,  422 => 227,  408 => 216,  404 => 215,  400 => 214,  396 => 213,  392 => 212,  367 => 190,  363 => 189,  359 => 188,  355 => 187,  351 => 186,  347 => 185,  343 => 184,  339 => 183,  335 => 182,  331 => 181,  327 => 180,  323 => 179,  319 => 178,  315 => 177,  284 => 149,  247 => 115,  240 => 110,  238 => 109,  236 => 108,  233 => 106,  231 => 105,  229 => 104,  227 => 103,  221 => 98,  219 => 97,  217 => 96,  211 => 95,  208 => 93,  197 => 91,  193 => 90,  190 => 89,  188 => 88,  186 => 87,  184 => 86,  182 => 85,  177 => 83,  175 => 82,  170 => 81,  168 => 80,  162 => 76,  154 => 71,  147 => 67,  141 => 63,  139 => 62,  137 => 61,  133 => 59,  129 => 58,  125 => 57,  121 => 56,  117 => 55,  113 => 54,  109 => 53,  103 => 50,  97 => 47,  94 => 46,  92 => 45,  90 => 44,  88 => 43,  86 => 42,  84 => 41,  57 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<article class=\"col-sm-12 col-md-12 col-lg-12\">
    <!-- new widget -->
    <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-1\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\">

        <style>
            div .label{
                color:#333!important;
            }
            div, td{
                text-align: left;
            }
        </style>

        <header>
            <span class=\"widget-icon\"> <i class=\"fa fa-comments txt-color-white\"></i> </span>
            <h2> {{ translator.getLang('Filtre') }} </h2>
            <div class=\"widget-toolbar\">
                <!-- add: non-hidden - to disable auto hide -->


            </div>
        </header>

        <!-- widget div-->
        <div>
            <!-- widget edit box -->
            <div class=\"jarviswidget-editbox\">
                <div>
                    <label>Title:</label>
                    <input type=\"text\" />
                </div>
            </div>
            <!-- end widget edit box -->

            <div class=\"widget-body widget-hide-overflow no-padding\">
                <!-- content goes here -->

                <form id=\"searchUserForm\" method=\"POST\">
                    <table cellpadding=\"4\" cellspacing=\"0\" border=\"0\">
                        {#<tr>#}
                        {#<th colspan=2 class=\"heading\">{{ translator.getLang('Quick Search') }} &nbsp;&nbsp;|&nbsp;&nbsp;</th>#}
                        {#</tr>#}
                        {#<tr>#}
                        {#<td colspan=2>&nbsp;</td>#}
                        {#</tr>#}
                        <tr valign=top>
                            <td colspan=2 class=formheading><b>{{ translator.getLang('Quick Search') }}</td>
                        </tr>
                        <tr>
                            <td class=\"label\" >{{ translator.getLang('Search type') }}</td>
                            <td>
                                <select name=\"field\">
                                    <option value=\"0\">{{ translator.getLang('Smart') }}</option>
                                    <option value=\"1\">{{ translator.getLang('User') }}</option>
                                    <option value=\"2\">{{ translator.getLang('Customer number') }}</option>
                                    <option value=\"3\">{{ translator.getLang('Mail address') }}</option>
                                    <option value=\"4\">{{ translator.getLang('IP address') }}</option>
                                    <option value=\"6\">{{ translator.getLang('Surname, Name') }}</option>
                                    <option value=\"7\">{{ translator.getLang('Partner user id') }}</option>
                                    {#<?php if(DOT_IT) : ?>#}
                                    {#<option value=\"5\"<?= (\$field == 5) ? ' selected' : '' ?>> <?=\$lang->getLang(\"National Insurance number\")?></option>#}
                                    {#<?php endif; ?>#}
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"label\">{{ translator.getLang('String Search') }}: </td>
                            <td class=\"content\"> <input name=\"search_string\" type=\"text\" value=\"\" /></td>
                        </tr>
                        <tr>
                            <td class=\"label\">{{ translator.getLang('Exactly Result') }}: </td>
                            <td class=\"content\"> <input type=\"checkbox\" name=\"exact\" ></td>
                        </tr>

                        <tr>
                            <td class=\"label\">{{ translator.getLang('Jurisdiction') }}: </td>
                            <td>
                                <select name='jurisdiction' id='jurisdictionFast'>
                                    {#<?#}
                                    {#foreach(\$clubs as \$k=>\$v){#}
                                    {% for v,k in  jurList%}
                                        {#?>#}
                                        <optgroup label=\"{{ v }}\">
                                            {#{% for v2,k2 in k %}#}
                                            {#{% if v2 == 'club_name' %}#}
                                            {#<option value='{{ k.club_id }}' >{{ k2 }}</option>#}
                                            {#{% endif %}#}
                                            {#{% endfor %}#}

                                            {% for v2,k2 in k %}
                                                <option value='{{ v2 }}' >{{ k2 }}</option>
                                            {% endfor %}
                                        </optgroup>
                                        {#<?#}
                                    {% endfor %}
                                    {#}#}
                                    {#?>#}
                                </select>
                            </td>
                        </tr>

                        {#<?php#}
                        {#include('jurisdiction_filters.php');#}
                        {#include('jurisdiction_filter_tabrow.php');#}
                        {#?>#}

                        {#<?php#}
                        {#}#}
                        {#?>#}
                        <tr>
                            <td colspan=\"2\">
                                <input type=\"hidden\" name=\"page\" value=\"customers/search\">
                                <input type=\"hidden\" name=\"start_search\" value=\"yes\">
                                <input type=\"hidden\" name=\"doQuery\" value=\"yes\">
                                <input type=\"submit\" value=\"{{ translator.getLang('Search') }}\">
                            </td>
                        </tr>

                    </table>
                </form>


                <!-- end content -->
            </div>

        </div>
        <!-- end widget div -->
    </div>
    <!-- end widget -->


</article>

<article class=\"col-sm-12 col-md-12 col-lg-12\">
    <!-- new widget -->
    <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-1\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\">

        <style>
            div .label{
                color:#333!important;
            }
            div, td{
                text-align: left;
            }
        </style>

        <header>
            <span class=\"widget-icon\"> <i class=\"fa fa-comments txt-color-white\"></i> </span>
            <h2> {{ translator.getLang('Search results') }} </h2>
            <div class=\"widget-toolbar\">
                <!-- add: non-hidden - to disable auto hide -->


            </div>
        </header>

        <!-- widget div-->
        <div>
            <!-- widget edit box -->
            <div class=\"jarviswidget-editbox\">
                <div>
                    <label>Title:</label>
                    <input type=\"text\" />
                </div>
            </div>
            <!-- end widget edit box -->

            <div class=\"widget-body widget-hide-overflow no-padding\" id=\"searchResults\">
                <!-- content goes here -->


                <div class=\"table-responsive\">

                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th>{{ translator.getLang('Username') }}</th>
                            <th>{{ translator.getLang('First name') }}</th>
                            <th>{{ translator.getLang('Email') }}</th>
                            <th>{{ translator.getLang('Customer number') }}</th>
                            <th>{{ translator.getLang('Betting Club') }}</th>
                            <th>{{ translator.getLang('District') }}</th>
                            <th>{{ translator.getLang('Nation') }}</th>
                            <th>{{ translator.getLang('Region') }}</th>
                            <th>{{ translator.getLang('Credits') }}</th>
                            <th>{{ translator.getLang('Total bets') }}</th>
                            <th>{{ translator.getLang('Total wins') }}</th>
                            <th>{{ translator.getLang('Total deposits') }}</th>
                            <th>{{ translator.getLang('Total withdrawals') }}</th>
                            <th>{{ translator.getLang('Registration date') }}</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>


                <!-- end content -->
            </div>

        </div>
        <!-- end widget div -->
    </div>
    <!-- end widget -->


</article>

<script src=\"{{ asset('js/plugin/datatables/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/datatables/dataTables.colVis.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/datatables/dataTables.tableTools.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/datatables/dataTables.bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/datatable-responsive/datatables.responsive.min.js') }}\"></script>

<script>
    \$(document).ready(function(){


        \$('#searchUserForm').on('submit',function (e) {
            e.preventDefault();

            var data = \$(this).serializeArray();
            \$.ajax({
                url: '{{ path('user_search') }}',
                method: \"POST\",
                data: data,


            }).done(function (data) {
                console.log(data)
                if (data == -1) {
                    \$.bigBox({
                        title : \"{{ translator.getLang('Session expired') }}\",
                        content : \"{{ translator.getLang('Your session has expired, please login again') }}!\",
                        color : \"#C46A69\",
                        //timeout: 6000,
                        icon : \"fa fa-warning shake animated\",
                        number : \"1\",
                        timeout : 6000
                    });
                } else {
                    try {
                        \$.bigBox({
                            title : \"{{ translator.getLang('Success') }}\",
                            content : \"{{ translator.getLang('You results are here') }}!\",
                            color : \"#76BA1B\",
                            //timeout: 6000,
                            icon : \"fa fa-thumbs-up shake animated\",
                            number : \"1\",
                            timeout : 6000
                        });
                        if (data == 0) {
                            \$('#addUserFastModal').modal('hide');

                            \$('#accountFastForm').closest('form').find(\"input[type=text]\").val(\"\");


                            //                                                window.location.href = '/login';
                        }

                        let toPrint = ''
                        if(typeof data[0] != 'string'){
                            \$.each(data, function (i,e) {
                                toPrint += '<tr>'
                                toPrint += '<td>'+e[\"pun_username\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_first_name\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_email\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_customer_number\"]+'</td>';
                                toPrint += '<td>'+e[\"Betting Club\"]+'</td>';
                                toPrint += '<td>'+e[\"District\"]+'</td>';
                                toPrint += '<td>'+e[\"Nation\"]+'</td>';
                                toPrint += '<td>'+e[\"Region\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_credits\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_bets\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_wins\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_deposits\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pcr_total_withdrawals\"]+e[\"pun_currency\"]+'</td>';
                                toPrint += '<td>'+e[\"pun_reg_date\"]+'</td>';
                                toPrint += '</tr>'
                            })

                            if (  \$.fn.DataTable.isDataTable( '#searchResults table' ) ) {
                                \$('#searchResults table').dataTable().fnDestroy();
                            }
                            \$('#searchResults tbody').empty().append(toPrint)
                            \$('#searchResults table').dataTable({
                                // \"sDom\": \"<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                //     \"t\"+
                                //     \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>\",
                                \"sDom\": \"<'dt-toolbar'<'col-sm-6 col-xs-12 hidden-xs'l><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                    \"t\"+
                                    \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>\",
                                \"autoWidth\" : true,
                                \"oLanguage\": {
                                    \"sSearch\": '<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>'
                                },
                                \"preDrawCallback\" : function() {
                                    // Initialize the responsive datatables helper once.
                                    // if (!responsiveHelper_datatable_col_reorder) {
                                    //     responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper(\$('#datatable_col_reorder'), breakpointDefinition);
                                    // }
                                },
                                \"rowCallback\" : function(nRow) {
                                    // responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
                                },
                                \"drawCallback\" : function(oSettings) {
                                    // responsiveHelper_datatable_col_reorder.respond();
                                }
                            });

                        }else{
                            \$.bigBox({
                                title : \"{{ translator.getLang('Warning') }}\",
                                content : data[0],
                                color : \"orange\",
                                //timeout: 6000,
                                icon : \"fa fa-warning shake animated\",
                                number : \"1\",
                                timeout : 6000
                            });
                            if (  \$.fn.DataTable.isDataTable( '#searchResults table' ) ) {
                                \$('#searchResults table').dataTable().fnDestroy();
                            }
                            \$('#searchResults tbody').empty().append(toPrint)
                            \$('#searchResults table').dataTable({
                                // \"sDom\": \"<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                //     \"t\"+
                                //     \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>\",
                                \"sDom\": \"<'dt-toolbar'<'col-sm-6 col-xs-12 hidden-xs'l><'col-sm-6 col-xs-6 hidden-xs'C>r>\"+
                                    \"t\"+
                                    \"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>\",
                                \"autoWidth\" : true,
                                \"oLanguage\": {
                                    \"sSearch\": '<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>'
                                },
                                \"preDrawCallback\" : function() {
                                    // Initialize the responsive datatables helper once.
                                    // if (!responsiveHelper_datatable_col_reorder) {
                                    //     responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper(\$('#datatable_col_reorder'), breakpointDefinition);
                                    // }
                                },
                                \"rowCallback\" : function(nRow) {
                                    // responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
                                },
                                \"drawCallback\" : function(oSettings) {
                                    // responsiveHelper_datatable_col_reorder.respond();
                                }
                            });
                        }

                        if (data == -28) {

                        }

                        if (data != 0 && data != -28) {
                        }

                        return data;
                    }
                    catch (e) {
                        console.log(e);
                        \$.bigBox({
                            title : \"{{ translator.getLang('Error') }}\",
                            content : \"{{ translator.getLang('Something went wrong') }}!\",
                            color : \"#C46A69\",
                            //timeout: 6000,
                            icon : \"fa fa-warning shake animated\",
                            number : \"1\",
                            timeout : 6000
                        });
                        return false;
                    }
                }
            })
                .fail(function (error) {
                    console.log(error);
                    return false
                })
                .always(function () {
                    return false
                });
            return false;
        })
    })
</script>", "default/users/search.html.twig", "/srv/workspace/backofficenew/templates/default/users/search.html.twig");
    }
}
