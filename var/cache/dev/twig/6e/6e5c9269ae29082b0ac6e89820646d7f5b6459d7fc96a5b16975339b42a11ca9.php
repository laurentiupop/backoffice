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

/* default/users/fastRegister.html.twig */
class __TwigTemplate_ebc13b1028ef56fb39425c8549c8ffebc582d3eb745ae43998266838aa8e462b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/users/fastRegister.html.twig"));

        // line 1
        echo "

<article class=\"col-sm-12 col-md-12 col-lg-12\">
    <!-- new widget -->
    <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-1\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\">

        <!-- widget options:
        usage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">

        data-widget-colorbutton=\"false\"
        data-widget-editbutton=\"false\"
        data-widget-togglebutton=\"false\"
        data-widget-deletebutton=\"false\"
        data-widget-fullscreenbutton=\"false\"
        data-widget-custombutton=\"false\"
        data-widget-collapsed=\"true\"
        data-widget-sortable=\"false\"

        -->

        <header>
            <span class=\"widget-icon\"> <i class=\"fa fa-comments txt-color-white\"></i> </span>
            <h2> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 23, $this->source); })()), "getLang", [0 => "Fast registration"], "method", false, false, false, 23), "html", null, true);
        echo " </h2>
            <div class=\"widget-toolbar non-hidden\">
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

                <form action=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fast_registration");
        echo "\" id=\"fastRegistrationForm\" name=\"preg_form\" class=\"smart-form client-form\">

                    <input type=hidden name=mode value=\"save\">
                    <input type=\"hidden\" name=\"section\" value=\"1\">
                    <fieldset>
                        <section>
                            <label class=\"text-align-left display-block\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 49, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 49), "html", null, true);
        echo "</label>
                            <label class=\"input\"> <i class=\"icon-append fa fa-user\"></i>
                                <input type=\"text\" name=\"username\" class=\"usrSrch\" size=40  value=\"\" >
                                <b class=\"tooltip tooltip-bottom-right\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 52, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 52), "html", null, true);
        echo "</b> </label>
                        </section>

                        <section>
                            <label class=\"text-align-left display-block\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 56, $this->source); })()), "getLang", [0 => "Password"], "method", false, false, false, 56), "html", null, true);
        echo "</label>
                            <label class=\"input\"> <i class=\"icon-append fa fa-key\"></i>
                                <input type=\"password\" name=\"password\" size=40  value=\"\">
                                <b class=\"tooltip tooltip-bottom-right\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 59, $this->source); })()), "getLang", [0 => "Password"], "method", false, false, false, 59), "html", null, true);
        echo "</b> </label>
                        </section>

                        <section>
                            <label class=\"text-align-left display-block\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 63, $this->source); })()), "getLang", [0 => "Repeat password"], "method", false, false, false, 63), "html", null, true);
        echo "</label>
                            <label class=\"input\"> <i class=\"icon-append fa fa-key\"></i>
                                <input type=\"password\" name=\"confirm_password\" size=40  value=\"\">
                                <b class=\"tooltip tooltip-bottom-right\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 66, $this->source); })()), "getLang", [0 => "Repeat password"], "method", false, false, false, 66), "html", null, true);
        echo "</b> </label>
                        </section>

                        <section>
                            <label class=\"text-align-left display-block\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 70, $this->source); })()), "getLang", [0 => "Jurisdiction"], "method", false, false, false, 70), "html", null, true);
        echo "</label>
                            <label class=\"select\">
                                <select name='jurisdiction' id='jurisdictionFast'>
                                    ";
        // line 74
        echo "                                    ";
        // line 75
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jurList"]) || array_key_exists("jurList", $context) ? $context["jurList"] : (function () { throw new RuntimeError('Variable "jurList" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["v"] => $context["k"]) {
            // line 76
            echo "                                        ";
            // line 77
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\">
                                            ";
            // line 79
            echo "                                            ";
            // line 80
            echo "                                            ";
            // line 81
            echo "                                            ";
            // line 82
            echo "                                            ";
            // line 83
            echo "
                                            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["k"]);
            foreach ($context['_seq'] as $context["v2"] => $context["k2"]) {
                // line 85
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
            // line 87
            echo "                                        </optgroup>
                                        ";
            // line 89
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['v'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                                    ";
        // line 91
        echo "                                    ";
        // line 92
        echo "                                </select>
                                <b class=\"tooltip tooltip-bottom-right\"></b> </label>
                        </section>
                        ";
        // line 96
        echo "                        ";
        // line 97
        echo "                        ";
        // line 98
        echo "                        ";
        // line 99
        echo "                    </fieldset>

                    <footer>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 103, $this->source); })()), "getLang", [0 => "Register"], "method", false, false, false, 103), "html", null, true);
        echo "
                        </button>
                    </footer>


                </form>

                <!-- end content -->
            </div>

        </div>
        <!-- end widget div -->
    </div>
    <!-- end widget -->


</article>

<script>
    \$(document).ready(function(){

        \$('#fastRegistrationForm').on('submit',function (e) {
            e.preventDefault();

            var data = \$(this).serializeArray();
            \$.ajax({
                url: '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fast_registration");
        echo "',
                method: \"POST\",
                data: data,


            }).done(function (data) {
                if (data == -1) {
                    \$.bigBox({
                        title : \"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 137, $this->source); })()), "getLang", [0 => "Session expired"], "method", false, false, false, 137), "html", null, true);
        echo "\",
                        content : \"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 138, $this->source); })()), "getLang", [0 => "Your session has expired, please login again"], "method", false, false, false, 138), "html", null, true);
        echo "!\",
                        color : \"#C46A69\",
                        //timeout: 6000,
                        icon : \"fa fa-warning shake animated\",
                        number : \"1\",
                        timeout : 6000
                    });
                } else {
                    try {

                        if(data == 1){
                            \$.bigBox({
                                title : \"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 150, $this->source); })()), "getLang", [0 => "Success"], "method", false, false, false, 150), "html", null, true);
        echo "\",
                                content : \"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 151, $this->source); })()), "getLang", [0 => "You have registered a new user"], "method", false, false, false, 151), "html", null, true);
        echo "!\",
                                color : \"#76BA1B\",
                                //timeout: 6000,
                                icon : \"fa fa-thumbs-up shake animated\",
                                number : \"1\",
                                timeout : 6000
                            });
                        }else{
                            \$.bigBox({
                                title : \"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 160, $this->source); })()), "getLang", [0 => "Warning"], "method", false, false, false, 160), "html", null, true);
        echo "\",
                                content : data,
                                color : \"#ffb200\",
                                //timeout: 6000,
                                icon : \"fa fa-thumbs-up shake animated\",
                                number : \"1\",
                                timeout : 6000
                            });
                        }

                        if (data == 0) {
                            \$('#addUserFastModal').modal('hide');

                            \$('#accountFastForm').closest('form').find(\"input[type=text]\").val(\"\");


                            //                                                window.location.href = '/login';
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
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 190, $this->source); })()), "getLang", [0 => "Error"], "method", false, false, false, 190), "html", null, true);
        echo "\",
                            content : \"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 191, $this->source); })()), "getLang", [0 => "Something went wrong"], "method", false, false, false, 191), "html", null, true);
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
        return "default/users/fastRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 191,  319 => 190,  286 => 160,  274 => 151,  270 => 150,  255 => 138,  251 => 137,  240 => 129,  211 => 103,  205 => 99,  203 => 98,  201 => 97,  199 => 96,  194 => 92,  192 => 91,  190 => 90,  184 => 89,  181 => 87,  170 => 85,  166 => 84,  163 => 83,  161 => 82,  159 => 81,  157 => 80,  155 => 79,  150 => 77,  148 => 76,  143 => 75,  141 => 74,  135 => 70,  128 => 66,  122 => 63,  115 => 59,  109 => 56,  102 => 52,  96 => 49,  87 => 43,  64 => 23,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<article class=\"col-sm-12 col-md-12 col-lg-12\">
    <!-- new widget -->
    <div class=\"jarviswidget jarviswidget-color-blueDark\" id=\"wid-id-1\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\">

        <!-- widget options:
        usage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">

        data-widget-colorbutton=\"false\"
        data-widget-editbutton=\"false\"
        data-widget-togglebutton=\"false\"
        data-widget-deletebutton=\"false\"
        data-widget-fullscreenbutton=\"false\"
        data-widget-custombutton=\"false\"
        data-widget-collapsed=\"true\"
        data-widget-sortable=\"false\"

        -->

        <header>
            <span class=\"widget-icon\"> <i class=\"fa fa-comments txt-color-white\"></i> </span>
            <h2> {{ translator.getLang('Fast registration') }} </h2>
            <div class=\"widget-toolbar non-hidden\">
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

                <form action=\"{{ path('fast_registration') }}\" id=\"fastRegistrationForm\" name=\"preg_form\" class=\"smart-form client-form\">

                    <input type=hidden name=mode value=\"save\">
                    <input type=\"hidden\" name=\"section\" value=\"1\">
                    <fieldset>
                        <section>
                            <label class=\"text-align-left display-block\">{{ translator.getLang('Username') }}</label>
                            <label class=\"input\"> <i class=\"icon-append fa fa-user\"></i>
                                <input type=\"text\" name=\"username\" class=\"usrSrch\" size=40  value=\"\" >
                                <b class=\"tooltip tooltip-bottom-right\">{{ translator.getLang('Username') }}</b> </label>
                        </section>

                        <section>
                            <label class=\"text-align-left display-block\">{{ translator.getLang('Password') }}</label>
                            <label class=\"input\"> <i class=\"icon-append fa fa-key\"></i>
                                <input type=\"password\" name=\"password\" size=40  value=\"\">
                                <b class=\"tooltip tooltip-bottom-right\">{{ translator.getLang('Password') }}</b> </label>
                        </section>

                        <section>
                            <label class=\"text-align-left display-block\">{{ translator.getLang('Repeat password') }}</label>
                            <label class=\"input\"> <i class=\"icon-append fa fa-key\"></i>
                                <input type=\"password\" name=\"confirm_password\" size=40  value=\"\">
                                <b class=\"tooltip tooltip-bottom-right\">{{ translator.getLang('Repeat password') }}</b> </label>
                        </section>

                        <section>
                            <label class=\"text-align-left display-block\">{{ translator.getLang('Jurisdiction') }}</label>
                            <label class=\"select\">
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
                                <b class=\"tooltip tooltip-bottom-right\"></b> </label>
                        </section>
                        {#<section style=\"text-align: left;\">#}
                        {#<label class=\"select\">{{ translator.getLang('Skin') }} :</label>#}
                        {#<div id=\"skinFast\"></div>#}
                        {#</section>#}
                    </fieldset>

                    <footer>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            {{ translator.getLang('Register') }}
                        </button>
                    </footer>


                </form>

                <!-- end content -->
            </div>

        </div>
        <!-- end widget div -->
    </div>
    <!-- end widget -->


</article>

<script>
    \$(document).ready(function(){

        \$('#fastRegistrationForm').on('submit',function (e) {
            e.preventDefault();

            var data = \$(this).serializeArray();
            \$.ajax({
                url: '{{ path('fast_registration') }}',
                method: \"POST\",
                data: data,


            }).done(function (data) {
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

                        if(data == 1){
                            \$.bigBox({
                                title : \"{{ translator.getLang('Success') }}\",
                                content : \"{{ translator.getLang('You have registered a new user') }}!\",
                                color : \"#76BA1B\",
                                //timeout: 6000,
                                icon : \"fa fa-thumbs-up shake animated\",
                                number : \"1\",
                                timeout : 6000
                            });
                        }else{
                            \$.bigBox({
                                title : \"{{ translator.getLang('Warning') }}\",
                                content : data,
                                color : \"#ffb200\",
                                //timeout: 6000,
                                icon : \"fa fa-thumbs-up shake animated\",
                                number : \"1\",
                                timeout : 6000
                            });
                        }

                        if (data == 0) {
                            \$('#addUserFastModal').modal('hide');

                            \$('#accountFastForm').closest('form').find(\"input[type=text]\").val(\"\");


                            //                                                window.location.href = '/login';
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
</script>", "default/users/fastRegister.html.twig", "/srv/workspace/backofficenew/templates/default/users/fastRegister.html.twig");
    }
}
