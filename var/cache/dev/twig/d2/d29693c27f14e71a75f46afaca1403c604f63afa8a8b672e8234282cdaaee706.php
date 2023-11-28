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

/* default/games/new_lobby.html.twig */
class __TwigTemplate_ca8ccf2ac38c35f4d1ec1ac4079d54ffb1a3773ca4e11506f7ecc932d83f6e8d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/games/new_lobby.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\">





<style>
    .backgroud-black{
        background: black;
        height:100%;
        min-width: 833px!important;
        padding-left: 15px;
        padding-right: 15px;
    }

    .logoLobby, .gamesLobby, .manageLobby{
        color:white;
        height: 30px;
    }

    .gamesContainer{
        display: block;
        width: 100%;
        height: 51px;
        /*background: red;*/
        margin-top: 15px;
        border-radius: 4px;
        /*background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);*/
    }

    .headerLobby{
        height: 66px;
    }

    .logoH{
        max-height: 51px;
        width: 140px;
        margin-top: 15px;
    }

    .usernamePosition{
        margin-top: 15px;
        border-radius: 4px 4px 4px 4px;
        background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);
        height: 51px;
        color: black;
    }

    .cashierPosition{
        margin-top: 15px;
        border-radius: 0 4px 4px 0;
        background: linear-gradient( #AF4C4C 0%, #AF4C4C 25%, #A13E3F 75%, #A13E3F 100%);
        height:51px;
        color: white;
        text-align: center;
        vertical-align: middle;
        line-height: 51px;
        cursor: pointer;
    }

    .cashierPosition:hover{
        opacity: 0.9;
    }

    body{
        background-color: #000!important;
    }

    .hidden{
        display: none!important;
    }

    .namePosition{
        font-size: 14px;
        font-weight: 600;
        padding: 5px 0px 0px 0px;
    }

    .creditPosition{
        font-size: 13px;
        padding-top: 1px;
        color: #5a5959;
    }

    .showCredit{
        float: right;
        font-size: 14px;
        color: black;
    }

    span.showCredit {
        float: right;
    }

    .mainLobby{
        margin-top: 14px!important;
        font-size: 12px;
        height: calc( 80% - 81px);
    }

    @media only screen and (max-width: 633px) {
        .col-xs-0{
            display: none;
        }

        .backgroud-black{
            min-width: 833px;
        }
    }

    .nav-tabs .nav-link{
        border-top-right-radius: 0!important;
        border-top-left-radius: 0!important;
        color: white;
        background: linear-gradient(#757678 0%, #6B6C6E 4.59%, #5C5C5D 15.37%, #515151 28.81%, #4A4A4A 47.66%, #494949 100%);
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        font-weight: 600;
        border: 0!important;
        height: 26px;
        /*background: linear-gradient(#979898 100%, #9FA0A0 94.31%, #C6C6C6 66.01%, #E2E1E1 39.92%, #F3F2F2 17.08%, #f9f8f8 0%)!important;*/


        background: #8e9eab; /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #bbbdbe, #f5f5f5); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #bbbdbe, #f5f5f5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .nav-link{
        padding: 0.2rem 2.5rem;
        text-transform: uppercase;
        border: 1px solid #707173!important;
    }

    ul > li:last-child > a.nav-link{
        border-radius: 0 3px 0 0!important;
    }

    ul > li:first-child > a.nav-link{
        border-radius: 3px 3px 0 0!important;
    }

    tr{
        border-radius: 4px;
    }


    .for2{
        right: -66%!important;
        margin-left: 4px!important;
    }


    .menuGames {
        color: black;
        text-align: center;
        line-height: 46px;
        text-transform: uppercase;
        font-size: 13px;
        background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);
        position: relative;
        float: right;
        right: 0;
        min-width: 32%;
        margin-left: 6px;
        border-radius: 3px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        /*border-bottom: 4px solid #4B95CF;*/
        cursor:pointer;
    }
    .nav-tabs {
        border-bottom: 0 solid #dee2e6;
    }

    .tab-content>.active {
        display: block;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        background: linear-gradient(#f9f8f8 100%, #F3F2F2 94.31%, #E2E1E1 66.01%, #C6C6C6 39.92%, #9FA0A0 17.08%, #979898 0%)!important;
    }

    .miniHeader{
        height: 22px;
        /*background: linear-gradient(#f9f8f8 0%, #F3F2F2 17.08%, #E2E1E1 39.92%, #C6C6C6 66.01%, #9FA0A0 94.31%, #979898 100%)!important;*/
    }

    thead{
        background: -webkit-linear-gradient(to top, #bbbdbe, #f5f5f5); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #bbbdbe, #f5f5f5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .tableLobby{
        text-align: center;
        line-height: 18px;
        font-size: 12px;
    }

    td {
        border: 1px solid #ddd;

    }

    tr:nth-child(even){
        background-color: #E6E7E8;
    }

    tr:hover, .colored {
        background: linear-gradient(#3d87c2 0%, #4B95CF 100%);}

    .tableContainer{
        overflow: hidden;
        overflow-y: auto;
        /*height:78%;*/
    }

    ul#playersTab > .nav-item > .nav-link {
        padding: 3px!important;
        text-align: center;
        border: 1px solid #707173;
    }
    ul#playersTab > .nav-item {
        width: calc(33.3%)!important;
    }

    ul#playersTab {
        margin-top: 26px;
    }

    .h-100-26{
        height: calc(100% - 26px);
    }

    #tBodytable tr{
        cursor: pointer;
    }

    .footerInfo{
        height: 81px;
        background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin-top: 42px;
    }

    .menuGames.active{
        border-bottom: 4px solid #a0d1f9;
    }

    #actualTime{
        float: right;
        font-size: 12px;
        text-align: right;
        margin-right: 10px;
        margin-top: 4px;
    }

    .version{
        margin-right: -97px;
        font-size: 12px;
        margin-top: 22px;
        float: right;
    }

    #numberOfPlayers,#numberOfPlayers2 {
        text-align: center;
        float: left;
        font-size: 20px;
        display: inline-block;
        margin-left: 30px;
        margin-top: 23px;
        background: black;
        border-radius: 30px;
        /* border-color: #6f6f71; */
        border: 2px solid #6f6f71;
        padding-left: 26px;
        color: white;
        padding-top: 6px;
        padding-bottom: 5px;
        width: 100%;
        line-height: 24px;
        font-weight: 900;
    }

    #nrTalbe, #nrTalbe2{
        text-align: center;
        font-size: 20px;
        display: inline-block;
        margin-left: -30px;
        margin-top: 22px;
        background: black;
        border-radius: 30px;
        border: 2px solid #6f6f71;
        color: white;
        padding-top: 3px;
        padding-bottom: 4px;
        width: 100%;
        line-height: 24px;
        font-weight: 900;
        float: left;
    }

    .nrPlayer{
        background: url('";
        // line 309
        echo twig_escape_filter($this->env, (isset($context["commons_dir"]) || array_key_exists("commons_dir", $context) ? $context["commons_dir"] : (function () { throw new RuntimeError('Variable "commons_dir" does not exist.', 309, $this->source); })()), "html", null, true);
        echo "/media/images/jackpot/online_player.png') no-repeat left;
        background-size: 100%;
        height: 86px;
        display: inline-block;
        z-index: 1;
        width: 50px;
        margin-left: 10px;
        position: absolute;
        left: 18px;
    }

    .numberOfTalbe{
        background: url('";
        // line 321
        echo twig_escape_filter($this->env, (isset($context["commons_dir"]) || array_key_exists("commons_dir", $context) ? $context["commons_dir"] : (function () { throw new RuntimeError('Variable "commons_dir" does not exist.', 321, $this->source); })()), "html", null, true);
        echo "/media/images/jackpot/tables.png') no-repeat right;
        background-size: 100%;
        height: 82px;
        display: inline-block;
        z-index: 1;
        width: 50px;
        margin-left: -30px;
        position: absolute;
    }

    .joinGame, .joinTableGame{
        text-align: center;
        background: linear-gradient( #64B463 0%, #56A656 100%);
        width: 49%;
        height: 81px;
        display: inline-block;
        border-radius: 3px;
        line-height: 81px;
        color: white;
        cursor: pointer;
        font-size: 20px;
        margin-top: 42px;
        font-family: arial black;
        text-transform: uppercase;
        text-shadow: 4px 4px 9px #000000;
    }

    .joinGame:hover ,.joinTableGame:hover{
        opacity: 0.8;
    }

    .refreshStyle{
        color: #449d44;
        cursor: pointer;
    }

    .needLogin{
        position: absolute;
        background: black;
        width: 100%;
        height: 100%;
        display: block;
        z-index: 99999;
        top: 0;
        opacity: 0.6;
    }

    .modalInfo{
        position: absolute;
        color: white;
        display: block;
        margin: auto;
        align-content: center;
        text-align: center;
        width: 50%;
        z-index: 999999;
        top: 25%;
        background: #191919;
        left: 25%;
        height: 30%;
        font-size: 22px;
        vertical-align: middle;
        line-height: 9;
    }

    .noUserInfo{
        text-align: center;
        font-size: 20px;
        margin-top: 47px;
    }

    .jackpotImg{
        width: 300px;
        height: 120px;
        /* background-attachment: fixed; */
        background: url('";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["commons_dir"]) || array_key_exists("commons_dir", $context) ? $context["commons_dir"] : (function () { throw new RuntimeError('Variable "commons_dir" does not exist.', 396, $this->source); })()), "html", null, true);
        echo "/media/images/jackpot/Jackpot.png') no-repeat center;
        position: relative;
        display: block;
        background-size: 100%;
        margin-top: -26px;
        z-index: 1;
        margin-left: auto;
        margin-right: auto;
    }

    .onlinePl{
        font-size: 12px;
        display: inline-block;
        color: darkgray;
        width: 60px;
        text-transform: uppercase;
        line-height: 1;
        text-align: left;
        float: left;
        margin-left: 13px;
    }

    .onlineTB{
        font-size: 12px;
        display: inline-block;
        color: darkgray;
        width: 72px;
        text-transform: uppercase;
        line-height: 1;
        text-align: right;
        margin-left: 13px;
        margin-top: 2px;
    }

    .centerJakcpot{
        text-align: center;
        color: white;
        /* font-weight: 900; */
        margin-top: 54px;
        position: absolute;
        width: 100%;
        font-size: 30px;
        font-family: arial black;
    }

    .spclJckp{
        background: #9a0000;
        color: white;
        border: 0.1em solid #e9b622;
        border-radius: 3px;
        text-shadow: 4px 4px 9px #000000;
        width: 100%;
        display: block;
    }

    .styleJack {
        color: #eebc42;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        text-transform: uppercase;
    }

    .opc0{
        opacity: 0;
    }

    .red{
        color:red;
        padding-left: 5px;
    }

    .fa-bolt.activess {
        padding-right: 5px;
        color: orange;
    }


</style>

<div class=\"backgroud-black\">

    <div class=\"row p-0 m-0 headerLobby\">
        <div class=\"col col-2 logoLobby\">
        </div>
        <div class=\"col col-md-6 col-lg-7 col-xs-0 mr-0 pr-0 gamesLobby\">
            <div class=\"gamesContainer\">
                <div class=\"row m-0 p-0\">
                    <!--  <div class=\"col-4 menuGames\"></div>
                      <div class=\"col-4 menuGames\"></div>-->

                    <div class=\"col-3 menuGames active hidden\" id=\"bankrouletteTab\">Bank roulette</div>




                    ";
        // line 490
        if ((0 !== twig_compare((isset($context["gamesDisabled"]) || array_key_exists("gamesDisabled", $context) ? $context["gamesDisabled"] : (function () { throw new RuntimeError('Variable "gamesDisabled" does not exist.', 490, $this->source); })()), "zecchinetta"))) {
            // line 491
            echo "                        <div class=\"col-3 menuGames hidden\" id=\"zecchinettaTab\">Zechinetta</div>

                    ";
        }
        // line 494
        echo "                    <div class=\"col-3 menuGames hidden\" id=\"bankroulettemultiliveTab\">Bank roulette live</div>
                    <div class=\"col-3 menuGames hidden\" data-select=\"BankRouletteLivePorto\" id=\"bankrouletteliveportoTab\">Bank roulette live porto</div>
                    <!--<div class=\"col-3 menuGames hidden\" id=\"bankrouletteliveTab\">Bank roulette live</div>-->

                </div>
            </div>
        </div>
        <div class=\"col col-md-4 col-lg-3  manageLobby\">
            <div class=\"row ml-0\">
                <div class=\"col col-12 usernamePosition\">
                    <div class=\"namePosition\">";
        // line 504
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 504, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 504), "html", null, true);
        echo "</div>
                    <div class=\"creditPosition\">";
        // line 505
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 505, $this->source); })()), "getLang", [0 => "Credit"], "method", false, false, false, 505), "html", null, true);
        echo " <a id=\"refresh\" class=\"fa fa-refresh refreshStyle\" onclick=\"if(!this.clicked){this.clicked = true; setTimeout('document.getElementById('refresh').clicked = false;' ,5000); return true;} return false;\"></a> <span class=\"showCredit\">0</span></div>
                </div>
                <!--<div class=\"col-4 cashierPosition\" onclick=\"openCashier('cashier');\">Cashier</div> -->
            </div>
        </div>
    </div>
    <div class=\"row p-0 m-0  mainLobby\">
        <div class=\"col col-8 col-lg-9 p-0\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"all-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"all\" aria-selected=\"true\" href=\"#all\">All</a>
                </li>
                <!--<li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"freeContent-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"freeContent\" aria-selected=\"false\" href=\"#freeContent\">Free</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"vipContent-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"vipContent\" aria-selected=\"false\" href=\"#vipContent\">Vip</a>
                </li>-->

            </ul>
            <div class=\"tab-content h-100\" style=\"padding-bottom: 1px\">
                <div id=\"all\" class=\"tab-pane h-100 fade show active\" role=\"tabpanel\" aria-labelledby=\"all-tab\">
                    <div class=\"row h-100 m-0 p-0 miniHeader\">
                        <div class=\"col-12 p-0 m-0\">
                            <div class=\"tableContainer\">
                                <table id=\"tables\" class=\"tableLobby w-100\">
                                    <thead>
                                    <tr>
                                        <th>";
        // line 533
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 533, $this->source); })()), "getLang", [0 => "ID"], "method", false, false, false, 533), "html", null, true);
        echo "</th>
                                        <!--<th>Start</th> -->
                                        <th class=\"jckpt styleJack\">";
        // line 535
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 535, $this->source); })()), "getLang", [0 => "Jackpot"], "method", false, false, false, 535), "html", null, true);
        echo "</th>
                                        <th>";
        // line 536
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 536, $this->source); })()), "getLang", [0 => "Name"], "method", false, false, false, 536), "html", null, true);
        echo "</th>
                                        <th>";
        // line 537
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 537, $this->source); })()), "getLang", [0 => "Buy-in"], "method", false, false, false, 537), "html", null, true);
        echo "</th>
                                        <th>";
        // line 538
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 538, $this->source); })()), "getLang", [0 => "Min"], "method", false, false, false, 538), "html", null, true);
        echo "</th>
                                        <th>";
        // line 539
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 539, $this->source); })()), "getLang", [0 => "Max"], "method", false, false, false, 539), "html", null, true);
        echo "</th>
                                        <th>";
        // line 540
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 540, $this->source); })()), "getLang", [0 => "Credit"], "method", false, false, false, 540), "html", null, true);
        echo "</th>
                                        <th>";
        // line 541
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 541, $this->source); })()), "getLang", [0 => "Status"], "method", false, false, false, 541), "html", null, true);
        echo "</th>
                                        <th>";
        // line 542
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 542, $this->source); })()), "getLang", [0 => "On seat"], "method", false, false, false, 542), "html", null, true);
        echo "</th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"tBodyTable\">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div id=\"freeContent\" class=\"tab-pane h-100 fade\" role=\"tabpanel\" aria-labelledby=\"freeContent-tab\">

                </div>
                <div id=\"vipContent\" class=\"tab-pane h-100 fade\" role=\"tabpanel\" aria-labelledby=\"vipContent-tab\">

                </div>
            </div>
        </div>
        <div class=\"col col-4 col-lg-3 pr-0 py-0\">
            <div class=\"newLine\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"playersTab\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"player-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"player\" aria-selected=\"true\" href=\"#player\">";
        // line 565
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 565, $this->source); })()), "getLang", [0 => "Player"], "method", false, false, false, 565), "html", null, true);
        echo "</a>
                    </li>
                    <!--<li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"waiting-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"waiting\" aria-selected=\"false\" href=\"#waiting\">Waiting</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"info-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"info\" aria-selected=\"false\" href=\"#info\">Info</a>
                    </li>-->

                </ul>
                <div class=\"tab-content h-100\">
                    <div id=\"player\" class=\"tab-pane h-100-26 fade show active\" role=\"tabpanel\" aria-labelledby=\"player-tab\">
                        <div class=\"row h-100 m-0 p-0 miniHeader\">
                            <div class=\"col-12 p-0 m-0\">
                                <div class=\"tableContainer\">
                                    <table id=\"tables2\" class=\"tableLobby w-100\">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div id=\"waiting\" class=\"tab-pane h-100-26 \" role=\"tabpanel\" aria-labelledby=\"player-tab\">

                    </div>
                    <div id=\"info\" class=\"tab-pane h-100-26\" role=\"tabpanel\" aria-labelledby=\"player-tab\">

                    </div>-->
                </div>
            </div>
            <!--<div class=\"newLine\" style=\"height: 29%;\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tournamentsTab\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"player-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tournaments\" aria-selected=\"true\" href=\"#tournaments\">My tournaments</a>
                    </li>
                </ul>
                <div class=\"tab-content h-100\">
                    <div id=\"tournaments\" class=\"tab-pane h-100-26 fade show active\" role=\"tabpanel\" aria-labelledby=\"tournaments-tab\">
                        <div class=\"row h-100 m-0 p-0 miniHeader\">
                            <div class=\"col-12 p-0 m-0\">
                                <div class=\"tableContainer\">
                                    <table id=\"tables3\" class=\"tableLobby w-100\">
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>

    <div class=\"row p-0 m-0 footerLobby\">
        <div class=\"col col-8 col-lg-9 p-0\">
            <div class=\"footerInfo\">
                <div class=\"row\" style=\"margin-top: -8px;\">
                    <div class=\"col-lg-3 col-md-2 mr-0\">
                        <div class=\"nrPlayer\"></div>
                        <div id=\"numberOfPlayers\"></div>
                    </div>
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"jackpotImg\">
                            <div class=\"centerJakcpot\"></div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-2 ml-0\">
                        <div id=\"nrTalbe\"></div>
                        <div class=\"numberOfTalbe\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col col-4 col-lg-3 pr-0 mr-0\" style=\"margin-top: -8px;\">
            <div class=\"joinGame\">
                ";
        // line 654
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 654, $this->source); })()), "getLang", [0 => "Open room"], "method", false, false, false, 654), "html", null, true);
        echo "
            </div>
            <div class=\"joinTableGame\">
                ";
        // line 657
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 657, $this->source); })()), "getLang", [0 => "Add table"], "method", false, false, false, 657), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
";
        // line 666
        echo (isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new RuntimeError('Variable "scripts" does not exist.', 666, $this->source); })());
        echo "

<script>
    nrIframes = 0;
    function openMultiTable(game,table,checkSess,type){
        var url = \"";
        // line 671
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 671, $this->source); })()), "html", null, true);
        echo "\";
        var w= \"960\";
        var h= \"640\";

        var title=game+\".Table:\" + table;
        url +='&gid='+table;
        if(typeof targetWin != 'undefined' && targetWin != 'undefined'){
            if(type == 0 ){
                targetWin.close();
                targetWin = typeof ups;
                console.log('test0');
            }
        }

        if(typeof targetWin != 'undefined' && targetWin != 'undefined' ){
            if(nrIframes < 3){
                targetWin.document.write(\"<div><span class='fa fa-times closeIframe'>";
        // line 687
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 687, $this->source); })()), "getLang", [0 => "Quit"], "method", false, false, false, 687), "html", null, true);
        echo "</span><iframe  id='iframe'\"+nrIframes+\" src=\"+url+\"></iframe></div>\");
                nrIframes++;
                console.log(nrIframes)
                if(nrIframes < 2){
                    targetWin.document.write (\"<style>iframe{position:relative;width: calc(100%); height: 50%; margin: 0 3px; border: 0;}</style>\");
                }else{
                    targetWin.document.write (\"<style>iframe{position:relative;width: calc(50% - 6px); height: 50%; margin: 0 3px; border: 0;}</style>\");
                }
            }else{
                alert(`";
        // line 696
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 696, $this->source); })()), "getLang", [0 => "You have reach the maximum tables"], "method", false, false, false, 696), "html", null, true);
        echo "`)
            }

        }else
        {
            currentOpenedTable=table;
            var left = (screen.width/2)-(w/2);
            var top = (screen.height/2)-(h/2);
            targetWin = window.open ('', title,'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
            targetWin.document.write (\"<span class='fa fa-times closeIframe'>";
        // line 705
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 705, $this->source); })()), "getLang", [0 => "Quit"], "method", false, false, false, 705), "html", null, true);
        echo "</span><iframe id='iframe1' src=\"+url+\"></iframe>\");
            targetWin.document.write (\"<style>body{    background: #000;}</style>\");
            targetWin.document.write (\"<style>iframe{width: 100%;height: 100%;border: 0;}</style>\");
            targetWin.document.write (\"<style>.closeIframe{color: #000;display: inline-block; position: absolute;top: 10px;text-transform: uppercase;text-decoration: none;font-weight: 900; background: linear-gradient(0deg, rgba(165,138,86,1) 0%, rgba(193,177,139,1) 57%);padding: 12px; border-radius: 2px; border: 1px solid #c1b18b; width: 8%; text-align: center; cursor: pointer;}</style>\");
            targetWin.focus();

            \$(\".closeIframe\", targetWin.document).click(function(e){
                \$(this).parent().remove();
            });

            targetWin.addEventListener('resize', function () {
                console.log(targetWin.width)
                console.log(targetWin.height)
            })

            targetWin.onunload = targetWin.onbeforeunload = (function(){
                currentOpenedTable='';nrIframes = 0;targetWin = 'undefined';
                return null;
            });

            targetWin.addEventListener(\"pagehide\", function(){
                currentOpenedTable='';nrIframes = 0;targetWin = 'undefined';
                return null;
            },false);

        }
    }

    function sessionNotExp(wdw,doNotRedirect){
        doNotRedirect = typeof doNotRedirect !== 'undefined' ? doNotRedirect : false;
        \$.post(\"/services\",{action:\"14\"}, function(data){
            if(data!=1){
                wdw.close();
                jAlert('Your session has expired.Please login again to enjoy out games!','Session Expired', function(answer) {
                    if (answer)
                    {
                        if(!doNotRedirect) {
                            doLogin();
                        }
                    }
                });

                return false;
            }
        });
    }
    function doLogin(){
        window.location.href = '/login/do';
    }



</script>
<script>
    secondsRefreshTime = 5000;
    currentOpenedTable='';
    noUser = 0;

    var webApp = '";
        // line 763
        echo twig_escape_filter($this->env, (isset($context["webApp"]) || array_key_exists("webApp", $context) ? $context["webApp"] : (function () { throw new RuntimeError('Variable "webApp" does not exist.', 763, $this->source); })()), "html", null, true);
        echo "'
    function openCashier(type){
        type = typeof type !== 'undefined' ? type : '';
        var w='1065';
        var h='650';

        var targetWin = window.open ('/cashierLobby?', type,'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top);

        targetWin.focus();


    }

    \$('#refresh').on('click', function(){
        \$('.showCredit').css('opacity','1');
        setTimeout(function(){
            \$('.showCredit').css('opacity','1');
        },500)
    });

    \$(document).ready(function(){
        getCredits();
        var maxH = '500px';

        var initialH2 = window.innerHeight - 210;
        \$('.tab-content').css('max-height', initialH2+'px')
        var initialH = document.getElementsByClassName('tab-content')[0].offsetHeight -12;

        \$('.tableContainer').css('max-height', initialH+'px')


        \$( window ).resize(function() {
            var initialH = document.getElementsByClassName('tab-content')[0].offsetHeight - 12;
            var initialH2 = window.innerHeight - 210;
            \$('.tableContainer').css('max-height', initialH+'px')
            \$('.tab-content').css('max-height', initialH2+'px');
        });
        var type, args = [];
        if( typeof location.search.substr(1) != 'undefined'){
            args = location.search.substr(1).split(/&/);

            if(typeof args[1] !='undefined'){
                if (args[1] != \"\") {
                    type = args[1].split('=')[1];
                }

                if(type == 'Zechinetta')
                    setTimeout(function(){
                        if(!\$('#zecchinettaTab').hasClass('hidden'))
                            \$('#zecchinettaTab').click();
                    },100);
            }

        }

        \$('.refreshStyle').on('click', function () {
            getCredits();
        });

        function getCredits(key)
        {
            \$.ajax({
                url: \"";
        // line 825
        echo twig_escape_filter($this->env, (isset($context["hostLobby"]) || array_key_exists("hostLobby", $context) ? $context["hostLobby"] : (function () { throw new RuntimeError('Variable "hostLobby" does not exist.', 825, $this->source); })()), "html", null, true);
        echo "\",
                xhrFields: {
                    withCredentials: true
                },
                type: \"POST\",
                data: {
                    sessionid: \"";
        // line 831
        if ((isset($context["key"]) || array_key_exists("key", $context))) {
            echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 831, $this->source); })()), "html", null, true);
        }
        echo "\",
                    opcode: '";
        // line 832
        echo twig_escape_filter($this->env, (isset($context["lobbyCreditRequestCode"]) || array_key_exists("lobbyCreditRequestCode", $context) ? $context["lobbyCreditRequestCode"] : (function () { throw new RuntimeError('Variable "lobbyCreditRequestCode" does not exist.', 832, $this->source); })()), "html", null, true);
        echo "'
                }
            })
                .done(function( data ) {
                    try {
                        creditsnew = data.split(\"~\");
                        var credit = creditsnew[0];
                        ";
        // line 839
        if ((0 !== twig_compare((isset($context["showCurrency"]) || array_key_exists("showCurrency", $context) ? $context["showCurrency"] : (function () { throw new RuntimeError('Variable "showCurrency" does not exist.', 839, $this->source); })()), "false"))) {
            // line 840
            echo "                        credit+=  \" ";
            echo twig_escape_filter($this->env, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 840, $this->source); })()), "html", null, true);
            echo "\";
                        ";
        }
        // line 842
        echo "                        var username = creditsnew[1];
                        \$(\".showCredit\").fadeOut(\"slow\").fadeIn(\"slow\").empty().append(credit);
                        \$(\".namePosition\").empty().append(username);
                    }
                    catch (e){
                        console.log(e);
                    }

                });

        }

        ";
        // line 854
        if ((0 === twig_compare((isset($context["hasKeyVal"]) || array_key_exists("hasKeyVal", $context) ? $context["hasKeyVal"] : (function () { throw new RuntimeError('Variable "hasKeyVal" does not exist.', 854, $this->source); })()), 0))) {
            // line 855
            echo "        \$('.logoH').appendTo(\$('.logoLobby'));
        ";
        }
        // line 857
        echo "

        ";
        // line 859
        if ((0 === twig_compare((isset($context["hasKeyVal"]) || array_key_exists("hasKeyVal", $context) ? $context["hasKeyVal"] : (function () { throw new RuntimeError('Variable "hasKeyVal" does not exist.', 859, $this->source); })()), 1))) {
            // line 860
            echo "        \$('.logoH').remove();
        ";
        }
        // line 862
        echo "        \$('.logoH').on('error', function(){
//            \$('.logoH').remove();
        });

        if(\$('.username').length == 0){
            \$('html').append('<div class=\"needLogin\"><div class=\"modalInfo\">";
        // line 867
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 867, $this->source); })()), "getLang", [0 => "You are not logged in"], "method", false, false, false, 867), "html", null, true);
        echo "!</div></div>');
            setTimeout(function(){
                \$('.needLogin').remove();
            },3000);
            noUser = 0;
        }else {

            var text = \$('.username').text();
            \$('.namePosition').empty().append(text);

            var credit = \$('.credit').text();
            \$('.showCredit').empty().append(credit);
        }
        function actulizeTime() {
            var newDate = new Date();
            var newDateToPrint = newDate.getDate() + '-' + (newDate.getMonth() + 1) + '-' + newDate.getFullYear() + ' ' + (newDate.getHours() < 10 ? ('0' + newDate.getHours()) : newDate.getHours()) + ':' + (newDate.getMinutes() < 10 ? ('0' + newDate.getMinutes()) : newDate.getMinutes()) + ':' + (newDate.getSeconds() < 10 ? ('0' + newDate.getSeconds()) : newDate.getSeconds());
            \$('#actualTime').empty().append(newDateToPrint);
        }

        if(noUser == 1) {
            var intervalTime = setInterval(function () {
                actulizeTime();

            }, 1000);

            var intervalTime = setInterval(function () {

                updateGamesInfo();
            }, secondsRefreshTime);
        }



        function takeGames(){

            var url = '";
        // line 902
        echo twig_escape_filter($this->env, (isset($context["hostLobby"]) || array_key_exists("hostLobby", $context) ? $context["hostLobby"] : (function () { throw new RuntimeError('Variable "hostLobby" does not exist.', 902, $this->source); })()), "html", null, true);
        echo "';
            \$.ajax({
                url: url,
                method: 'POST',
                data: {
                    opcode: 4000,
                    hosts: true,
                    get: true
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    \$.each(obj ,function(key,item) {
                        \$('#'+ key.toLowerCase() +'Tab').removeClass('hidden').attr('data-select', key);

                        if(Object.keys(obj).length === 1){
                            \$('#'+ key.toLowerCase() +'Tab').addClass('for2');
                        }
                    })

                    if(\$('#bankrouletteTab').hasClass('hidden')){
                        \$('#bankrouletteTab').click();
                    }
                    rebuildRequest(\$('.menuGames.active').attr('data-select'));

                }
            });

        }

        onlyOneTime = 0;
        takeGames();
//        centerJakcpot
        function rebuildRequest(game) {
            \$.ajax({
                url: '";
        // line 936
        echo twig_escape_filter($this->env, (isset($context["hostLobby"]) || array_key_exists("hostLobby", $context) ? $context["hostLobby"] : (function () { throw new RuntimeError('Variable "hostLobby" does not exist.', 936, $this->source); })()), "html", null, true);
        echo "',
                method: 'POST',
                data: {
                    opcode: '";
        // line 939
        echo twig_escape_filter($this->env, (isset($context["lobbyInfoRequestCode"]) || array_key_exists("lobbyInfoRequestCode", $context) ? $context["lobbyInfoRequestCode"] : (function () { throw new RuntimeError('Variable "lobbyInfoRequestCode" does not exist.', 939, $this->source); })()), "html", null, true);
        echo "',
                    gname: game,
                    get: true
                },
                success: function (data) {
                    if(noUser != 1 ) {
                        if(data == -48){
                            // \$('.tableContainer').empty().append('<div class=\"noUserInfo\">Service not available</div>')
                            buildLobbyStructure([]);
                        }else{
                            var gamesInfo = [];
                            var games = data.split('\$');
                            \$.each(games, function (index, element) {
                                gamesInfo[index] = element.split('~');
                            });

                            \$.each(gamesInfo, function (index, element) {
                                gamesInfo[index][5] = element[5].split('@');
                            });

                            buildLobbyStructure(gamesInfo);

                            \$.ajax({
                                url: '";
        // line 962
        echo twig_escape_filter($this->env, (isset($context["hostLobby"]) || array_key_exists("hostLobby", $context) ? $context["hostLobby"] : (function () { throw new RuntimeError('Variable "hostLobby" does not exist.', 962, $this->source); })()), "html", null, true);
        echo "',
                                method: 'POST',
                                data: {
                                    opcode: 4000,
                                    get: true,
                                    jackpot: true,
                                    gname: game
                                },
                                success: function (data) {

                                    // if (onlyOneTime == 0)
                                    if (noUser == 1) {
                                        var curr,rate;
                                        \$.ajax({
                                            url: webApp,
                                            type: \"POST\",
                                            data: {
                                                skinid : '";
        // line 979
        echo twig_escape_filter($this->env, (isset($context["skinid"]) || array_key_exists("skinid", $context) ? $context["skinid"] : (function () { throw new RuntimeError('Variable "skinid" does not exist.', 979, $this->source); })()), "html", null, true);
        echo "',
                                                username: '";
        // line 980
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 980, $this->source); })()), "html", null, true);
        echo "',
                                                sessionid: \"";
        // line 981
        if ((isset($context["key"]) || array_key_exists("key", $context))) {
            echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 981, $this->source); })()), "html", null, true);
        }
        echo "\",
                                                extall: false,
                                                operationtype: 3006
                                            }
                                        })
                                            .done(function( data2 ) {
                                                curr = data2.split('~')[2];
                                                rate = data2.split('~')[3];
                                                var toFxd = 2;
                                                if(parseFloat(rate) > 50)
                                                    toFxd = 0
                                                if(parseFloat(rate) > 50)
                                                    if(!curr.startsWith('&'))
                                                        curr = '';
                                                data = JSON.parse(data);
                                                var totalJack = 0;
                                                \$.each(data, function (index, element) {
                                                    \$('.jackpot' + element.gid).find('span').html((element.amount * rate).toFixed(toFxd) +' '+curr)
                                                    totalJack = parseFloat(totalJack) + parseFloat(element.amount) * rate
                                                });

                                                var totalToPrint = totalJack;
                                                \$('.centerJakcpot').html(totalToPrint.toFixed(toFxd) + ' ' +curr);
                                            });
                                    }
                                }
                            })
                        }
                    }
                    else{
                        \$('.tableContainer').empty().append('<div class=\"noUserInfo\">";
        // line 1011
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1011, $this->source); })()), "getLang", [0 => "You must login for play"], "method", false, false, false, 1011), "html", null, true);
        echo "</div>')
                    }
                }
            });
        }


        function updateGamesInfo(){
            rebuildRequest(\$('.menuGames.active').attr('data-select'));
        }

        \$('.menuGames').off('click')
        \$('.menuGames').on('click', function(){
            \$('.menuGames').removeClass('active')
            \$(this).addClass('active');

            if(\$('#zecchinettaTab').hasClass('active')){

                \$('.jckpt').addClass('hidden');
                \$('.jackpotImg').addClass('hidden');
            }else{
                if(\$('#bankrouletteliveTab').hasClass('active')){


                    \$('.jckpt').removeClass('hidden');
                    \$('.jackpotImg').removeClass('hidden');
                }else{

                    \$('.jckpt').removeClass('hidden');
                    \$('.jackpotImg').removeClass('hidden');
                }
            }
            rebuildRequest(\$('.menuGames.active').attr('data-select'));

        })
    });

    function buildGamesDetails(id, data){

        var toPrint = '';
        var header = '<thead><tr class=\"roomId\" id=\"'+ id +'\"><th> ";
        // line 1051
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1051, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 1051), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1051, $this->source); })()), "getLang", [0 => "Credit"], "method", false, false, false, 1051), "html", null, true);
        echo "</th></tr></thead>';
        \$.each(data, function(index, element){
            if(element[2] == id) {
                if(element[5]) {
                    var nr  = element[5][5].split('/')[0];
                    if(element[5][8] != 'null'){
                        var players = element[5][8].split(';');

                        \$.each(players, function(key, player){
                            toPrint += '<tr><td>' + player.split(',')[0] + '</td><td>' + (player.split(',')[1] / 100) + '</td></tr>';
                        });

                        for(var i = 0 ;i < 10 - nr; i++){
                            toPrint += '<tr><td>-</td><td>-</td></tr>'
                        }

                    }
                }
            }

        });

        if(toPrint == ''){
            for(var j = 0 ;j < 10; j++){
                toPrint += '<tr><td>-</td><td>-</td></tr>'
            }

        }
        \$('#tables2').empty().append(header + toPrint);
    }



    function buildLobbyStructure(gamesInfoArray){
        var curr,rate;
        \$.ajax({
            url: webApp,
            type: \"POST\",
            data: {
                skinid : '";
        // line 1090
        echo twig_escape_filter($this->env, (isset($context["skinid"]) || array_key_exists("skinid", $context) ? $context["skinid"] : (function () { throw new RuntimeError('Variable "skinid" does not exist.', 1090, $this->source); })()), "html", null, true);
        echo "',
                username: '";
        // line 1091
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 1091, $this->source); })()), "html", null, true);
        echo "',
                sessionid: \"";
        // line 1092
        if ((isset($context["key"]) || array_key_exists("key", $context))) {
            echo twig_escape_filter($this->env, (isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 1092, $this->source); })()), "html", null, true);
        }
        echo "\",
                extall: false,
                operationtype: 3006
            }
        })
            .done(function( data22 ) {
                curr = data22.split('~')[2];
                rate = data22.split('~')[3];
                var toFxd = 2;
                if(parseFloat(rate) > 50)
                    toFxd = 0
                if(parseFloat(rate) > 50)
                    if(!curr.startsWith('&'))
                        curr = '';
                var tableList = '';
                var totaltOnline = 0;
                var totaltTables = gamesInfoArray.length;

                \$.each(gamesInfoArray, function(index, element){
                    tableList += '<tr id=\"'+ element[2] +'\"  ondblclick=\"openMultiTable(\\'bankroulette\\',\$(\\'.roomId\\').attr(\\'id\\'),true);\">';
                    tableList += '<td>' + element[2] + '</td>';
                    if(\$('#zecchinettaTab').hasClass('active'))
                        tableList += '<td class=\"jckpt hidden jackpot'+element[2]+'\"><span class=\"spclJckp\">' + 0 +' '+curr+ '</span></td>';
                    else{
                        tableList += '<td class=\"jckpt jackpot'+element[2]+'\"><span class=\"spclJckp\">' + 0 +' '+curr+ '</span></td>';

                    }


                    if(element[5]) {
                        var toSplit = element[2].split('');

                        var flash = (element[5][9] <= 30 && element[5][9] > 0 && toSplit[0] == 1 && toSplit[1] == 1) ? ' <i class=\"fa fa-bolt red activess\"></i>' : '<i class=\"fa fa-bolt red opc0\"></i>';

//                    tableList += '<td>' + element[5][4].replace('=',' ') + '</td>';
                        tableList += '<td>' + element[5][0] + '</td>';
                        tableList += '<td>' + ((element[5][7].split(',')[1] / 100 )* rate).toFixed(toFxd) +' ' + curr + '/' + ((element[5][7].split(',')[0] / 100 )*rate).toFixed(toFxd) + ' ' + curr + '</td>';
                        tableList += '<td>' + ((element[5][6].split(',')[1] / 100 )* rate).toFixed(toFxd) +' '+ curr+ '</td>';
                        tableList += '<td>' + ((element[5][6].split(',')[0] / 100 )* rate).toFixed(toFxd)  +' '+ curr+ '</td>';
                        var locked = element[5][10] == '1' ? '<i class=\"fa fa-lock red activess\"></i>' : '<i class=\"fa fa-lock red opc0\"></i>';
                        if(element[5][8] != 'null'){
                            var players = element[5][8].split(';');
                            var total = 0;
                            var isDealear = 0;

                            \$.each(players, function(key, player){
                                total = total + (player.split(',')[1] / 100);
                                totaltOnline = totaltOnline + 1;

                                if(player.split(',')[2] == 'D')
                                    isDealear = isDealear + 1;
                            });
                            tableList += '<td>'+ (total.toFixed(toFxd) * rate).toFixed(toFxd) + ' ' + curr +'</td>';
                            tableList += '<td>' +flash+ (isDealear == 0 ? '<span class=\"text-success\">";
        // line 1145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1145, $this->source); })()), "getLang", [0 => "Classic"], "method", false, false, false, 1145), "html", null, true);
        echo "</span>' : '<span class=\"text-warning\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1145, $this->source); })()), "getLang", [0 => "Banker"], "method", false, false, false, 1145), "html", null, true);
        echo "</span>') + locked+'</td>';

                        }else{
                            tableList += '<td>0</td>';
                            tableList += '<td>'+flash+'<span class=\"text-success\">";
        // line 1149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1149, $this->source); })()), "getLang", [0 => "Classic"], "method", false, false, false, 1149), "html", null, true);
        echo "</span>'+locked+'</td>'
                        }

                    }else{
                        tableList += '<td>0></td><td>0></td><td>0></td><td>0></td><td>0></td>';
                        tableList += '<td><span class=\"text-success\">";
        // line 1154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1154, $this->source); })()), "getLang", [0 => "Classic"], "method", false, false, false, 1154), "html", null, true);
        echo "</span></td>'
                    }




                    if(element[5])
                        tableList += '<td>' + element[5][5] +'</td>';
                    else
                        tableList += '<td>0'+' '+ curr+'/' + '0'+ ' ' + curr+'</td>'

                });
                tableList += '</tr>';

                var roomId = typeof \$('.roomId').attr('id') != 'undefined' ? \$('.roomId').attr('id') : 0;
                \$('#tBodyTable').empty().append(tableList);

                if(\$('.activess').length == 0){
                    \$('.opc0').remove();
                }
                if(roomId != 0){
                    \$('#'+ roomId).trigger('click');
                }else
                    setTimeout(function(){\$('#tBodytable tr').first().trigger('click')},500);
                \$('#tBodytable tr').off('click');
                \$('#tBodytable tr').on('click', function() {
                    \$('.colored').removeClass('colored');
                    \$(this).toggleClass('colored');
                    buildGamesDetails(\$(this).attr('id'), gamesInfoArray);
                });

                \$('#numberOfPlayers').empty().append('<span class=\"onlinePl\">";
        // line 1185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1185, $this->source); })()), "getLang", [0 => "Online players"], "method", false, false, false, 1185), "html", null, true);
        echo "</span> ' + totaltOnline);
                \$('#nrTalbe').empty().append(totaltTables + ' <span class=\"onlineTB\">";
        // line 1186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 1186, $this->source); })()), "getLang", [0 => "Tables available"], "method", false, false, false, 1186), "html", null, true);
        echo "</span>');

                \$('.joinGame').on('click', function(){
                    openMultiTable('bankroulette',\$('.roomId').attr('id'),true,0);
                })
                \$('.joinTableGame').on('click', function(){
                    openMultiTable('bankroulette',\$('.roomId').attr('id'),true,1);
                })
            });



    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/games/new_lobby.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1388 => 1186,  1384 => 1185,  1350 => 1154,  1342 => 1149,  1333 => 1145,  1275 => 1092,  1271 => 1091,  1267 => 1090,  1223 => 1051,  1180 => 1011,  1145 => 981,  1141 => 980,  1137 => 979,  1117 => 962,  1091 => 939,  1085 => 936,  1048 => 902,  1010 => 867,  1003 => 862,  999 => 860,  997 => 859,  993 => 857,  989 => 855,  987 => 854,  973 => 842,  967 => 840,  965 => 839,  955 => 832,  949 => 831,  940 => 825,  875 => 763,  814 => 705,  802 => 696,  790 => 687,  771 => 671,  763 => 666,  751 => 657,  745 => 654,  653 => 565,  627 => 542,  623 => 541,  619 => 540,  615 => 539,  611 => 538,  607 => 537,  603 => 536,  599 => 535,  594 => 533,  563 => 505,  559 => 504,  547 => 494,  542 => 491,  540 => 490,  443 => 396,  365 => 321,  350 => 309,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css\">





<style>
    .backgroud-black{
        background: black;
        height:100%;
        min-width: 833px!important;
        padding-left: 15px;
        padding-right: 15px;
    }

    .logoLobby, .gamesLobby, .manageLobby{
        color:white;
        height: 30px;
    }

    .gamesContainer{
        display: block;
        width: 100%;
        height: 51px;
        /*background: red;*/
        margin-top: 15px;
        border-radius: 4px;
        /*background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);*/
    }

    .headerLobby{
        height: 66px;
    }

    .logoH{
        max-height: 51px;
        width: 140px;
        margin-top: 15px;
    }

    .usernamePosition{
        margin-top: 15px;
        border-radius: 4px 4px 4px 4px;
        background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);
        height: 51px;
        color: black;
    }

    .cashierPosition{
        margin-top: 15px;
        border-radius: 0 4px 4px 0;
        background: linear-gradient( #AF4C4C 0%, #AF4C4C 25%, #A13E3F 75%, #A13E3F 100%);
        height:51px;
        color: white;
        text-align: center;
        vertical-align: middle;
        line-height: 51px;
        cursor: pointer;
    }

    .cashierPosition:hover{
        opacity: 0.9;
    }

    body{
        background-color: #000!important;
    }

    .hidden{
        display: none!important;
    }

    .namePosition{
        font-size: 14px;
        font-weight: 600;
        padding: 5px 0px 0px 0px;
    }

    .creditPosition{
        font-size: 13px;
        padding-top: 1px;
        color: #5a5959;
    }

    .showCredit{
        float: right;
        font-size: 14px;
        color: black;
    }

    span.showCredit {
        float: right;
    }

    .mainLobby{
        margin-top: 14px!important;
        font-size: 12px;
        height: calc( 80% - 81px);
    }

    @media only screen and (max-width: 633px) {
        .col-xs-0{
            display: none;
        }

        .backgroud-black{
            min-width: 833px;
        }
    }

    .nav-tabs .nav-link{
        border-top-right-radius: 0!important;
        border-top-left-radius: 0!important;
        color: white;
        background: linear-gradient(#757678 0%, #6B6C6E 4.59%, #5C5C5D 15.37%, #515151 28.81%, #4A4A4A 47.66%, #494949 100%);
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        font-weight: 600;
        border: 0!important;
        height: 26px;
        /*background: linear-gradient(#979898 100%, #9FA0A0 94.31%, #C6C6C6 66.01%, #E2E1E1 39.92%, #F3F2F2 17.08%, #f9f8f8 0%)!important;*/


        background: #8e9eab; /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #bbbdbe, #f5f5f5); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #bbbdbe, #f5f5f5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .nav-link{
        padding: 0.2rem 2.5rem;
        text-transform: uppercase;
        border: 1px solid #707173!important;
    }

    ul > li:last-child > a.nav-link{
        border-radius: 0 3px 0 0!important;
    }

    ul > li:first-child > a.nav-link{
        border-radius: 3px 3px 0 0!important;
    }

    tr{
        border-radius: 4px;
    }


    .for2{
        right: -66%!important;
        margin-left: 4px!important;
    }


    .menuGames {
        color: black;
        text-align: center;
        line-height: 46px;
        text-transform: uppercase;
        font-size: 13px;
        background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);
        position: relative;
        float: right;
        right: 0;
        min-width: 32%;
        margin-left: 6px;
        border-radius: 3px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        /*border-bottom: 4px solid #4B95CF;*/
        cursor:pointer;
    }
    .nav-tabs {
        border-bottom: 0 solid #dee2e6;
    }

    .tab-content>.active {
        display: block;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        background: linear-gradient(#f9f8f8 100%, #F3F2F2 94.31%, #E2E1E1 66.01%, #C6C6C6 39.92%, #9FA0A0 17.08%, #979898 0%)!important;
    }

    .miniHeader{
        height: 22px;
        /*background: linear-gradient(#f9f8f8 0%, #F3F2F2 17.08%, #E2E1E1 39.92%, #C6C6C6 66.01%, #9FA0A0 94.31%, #979898 100%)!important;*/
    }

    thead{
        background: -webkit-linear-gradient(to top, #bbbdbe, #f5f5f5); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #bbbdbe, #f5f5f5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .tableLobby{
        text-align: center;
        line-height: 18px;
        font-size: 12px;
    }

    td {
        border: 1px solid #ddd;

    }

    tr:nth-child(even){
        background-color: #E6E7E8;
    }

    tr:hover, .colored {
        background: linear-gradient(#3d87c2 0%, #4B95CF 100%);}

    .tableContainer{
        overflow: hidden;
        overflow-y: auto;
        /*height:78%;*/
    }

    ul#playersTab > .nav-item > .nav-link {
        padding: 3px!important;
        text-align: center;
        border: 1px solid #707173;
    }
    ul#playersTab > .nav-item {
        width: calc(33.3%)!important;
    }

    ul#playersTab {
        margin-top: 26px;
    }

    .h-100-26{
        height: calc(100% - 26px);
    }

    #tBodytable tr{
        cursor: pointer;
    }

    .footerInfo{
        height: 81px;
        background: linear-gradient(#e6e7e8 25%,#e6e7e8 0%, #BBBDBF 75%, #BBBDBF 100%);
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        margin-top: 42px;
    }

    .menuGames.active{
        border-bottom: 4px solid #a0d1f9;
    }

    #actualTime{
        float: right;
        font-size: 12px;
        text-align: right;
        margin-right: 10px;
        margin-top: 4px;
    }

    .version{
        margin-right: -97px;
        font-size: 12px;
        margin-top: 22px;
        float: right;
    }

    #numberOfPlayers,#numberOfPlayers2 {
        text-align: center;
        float: left;
        font-size: 20px;
        display: inline-block;
        margin-left: 30px;
        margin-top: 23px;
        background: black;
        border-radius: 30px;
        /* border-color: #6f6f71; */
        border: 2px solid #6f6f71;
        padding-left: 26px;
        color: white;
        padding-top: 6px;
        padding-bottom: 5px;
        width: 100%;
        line-height: 24px;
        font-weight: 900;
    }

    #nrTalbe, #nrTalbe2{
        text-align: center;
        font-size: 20px;
        display: inline-block;
        margin-left: -30px;
        margin-top: 22px;
        background: black;
        border-radius: 30px;
        border: 2px solid #6f6f71;
        color: white;
        padding-top: 3px;
        padding-bottom: 4px;
        width: 100%;
        line-height: 24px;
        font-weight: 900;
        float: left;
    }

    .nrPlayer{
        background: url('{{commons_dir}}/media/images/jackpot/online_player.png') no-repeat left;
        background-size: 100%;
        height: 86px;
        display: inline-block;
        z-index: 1;
        width: 50px;
        margin-left: 10px;
        position: absolute;
        left: 18px;
    }

    .numberOfTalbe{
        background: url('{{commons_dir}}/media/images/jackpot/tables.png') no-repeat right;
        background-size: 100%;
        height: 82px;
        display: inline-block;
        z-index: 1;
        width: 50px;
        margin-left: -30px;
        position: absolute;
    }

    .joinGame, .joinTableGame{
        text-align: center;
        background: linear-gradient( #64B463 0%, #56A656 100%);
        width: 49%;
        height: 81px;
        display: inline-block;
        border-radius: 3px;
        line-height: 81px;
        color: white;
        cursor: pointer;
        font-size: 20px;
        margin-top: 42px;
        font-family: arial black;
        text-transform: uppercase;
        text-shadow: 4px 4px 9px #000000;
    }

    .joinGame:hover ,.joinTableGame:hover{
        opacity: 0.8;
    }

    .refreshStyle{
        color: #449d44;
        cursor: pointer;
    }

    .needLogin{
        position: absolute;
        background: black;
        width: 100%;
        height: 100%;
        display: block;
        z-index: 99999;
        top: 0;
        opacity: 0.6;
    }

    .modalInfo{
        position: absolute;
        color: white;
        display: block;
        margin: auto;
        align-content: center;
        text-align: center;
        width: 50%;
        z-index: 999999;
        top: 25%;
        background: #191919;
        left: 25%;
        height: 30%;
        font-size: 22px;
        vertical-align: middle;
        line-height: 9;
    }

    .noUserInfo{
        text-align: center;
        font-size: 20px;
        margin-top: 47px;
    }

    .jackpotImg{
        width: 300px;
        height: 120px;
        /* background-attachment: fixed; */
        background: url('{{commons_dir}}/media/images/jackpot/Jackpot.png') no-repeat center;
        position: relative;
        display: block;
        background-size: 100%;
        margin-top: -26px;
        z-index: 1;
        margin-left: auto;
        margin-right: auto;
    }

    .onlinePl{
        font-size: 12px;
        display: inline-block;
        color: darkgray;
        width: 60px;
        text-transform: uppercase;
        line-height: 1;
        text-align: left;
        float: left;
        margin-left: 13px;
    }

    .onlineTB{
        font-size: 12px;
        display: inline-block;
        color: darkgray;
        width: 72px;
        text-transform: uppercase;
        line-height: 1;
        text-align: right;
        margin-left: 13px;
        margin-top: 2px;
    }

    .centerJakcpot{
        text-align: center;
        color: white;
        /* font-weight: 900; */
        margin-top: 54px;
        position: absolute;
        width: 100%;
        font-size: 30px;
        font-family: arial black;
    }

    .spclJckp{
        background: #9a0000;
        color: white;
        border: 0.1em solid #e9b622;
        border-radius: 3px;
        text-shadow: 4px 4px 9px #000000;
        width: 100%;
        display: block;
    }

    .styleJack {
        color: #eebc42;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        text-transform: uppercase;
    }

    .opc0{
        opacity: 0;
    }

    .red{
        color:red;
        padding-left: 5px;
    }

    .fa-bolt.activess {
        padding-right: 5px;
        color: orange;
    }


</style>

<div class=\"backgroud-black\">

    <div class=\"row p-0 m-0 headerLobby\">
        <div class=\"col col-2 logoLobby\">
        </div>
        <div class=\"col col-md-6 col-lg-7 col-xs-0 mr-0 pr-0 gamesLobby\">
            <div class=\"gamesContainer\">
                <div class=\"row m-0 p-0\">
                    <!--  <div class=\"col-4 menuGames\"></div>
                      <div class=\"col-4 menuGames\"></div>-->

                    <div class=\"col-3 menuGames active hidden\" id=\"bankrouletteTab\">Bank roulette</div>




                    {% if gamesDisabled != 'zecchinetta' %}
                        <div class=\"col-3 menuGames hidden\" id=\"zecchinettaTab\">Zechinetta</div>

                    {% endif %}
                    <div class=\"col-3 menuGames hidden\" id=\"bankroulettemultiliveTab\">Bank roulette live</div>
                    <div class=\"col-3 menuGames hidden\" data-select=\"BankRouletteLivePorto\" id=\"bankrouletteliveportoTab\">Bank roulette live porto</div>
                    <!--<div class=\"col-3 menuGames hidden\" id=\"bankrouletteliveTab\">Bank roulette live</div>-->

                </div>
            </div>
        </div>
        <div class=\"col col-md-4 col-lg-3  manageLobby\">
            <div class=\"row ml-0\">
                <div class=\"col col-12 usernamePosition\">
                    <div class=\"namePosition\">{{ translator.getLang('Username') }}</div>
                    <div class=\"creditPosition\">{{ translator.getLang('Credit') }} <a id=\"refresh\" class=\"fa fa-refresh refreshStyle\" onclick=\"if(!this.clicked){this.clicked = true; setTimeout('document.getElementById('refresh').clicked = false;' ,5000); return true;} return false;\"></a> <span class=\"showCredit\">0</span></div>
                </div>
                <!--<div class=\"col-4 cashierPosition\" onclick=\"openCashier('cashier');\">Cashier</div> -->
            </div>
        </div>
    </div>
    <div class=\"row p-0 m-0  mainLobby\">
        <div class=\"col col-8 col-lg-9 p-0\">
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"all-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"all\" aria-selected=\"true\" href=\"#all\">All</a>
                </li>
                <!--<li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"freeContent-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"freeContent\" aria-selected=\"false\" href=\"#freeContent\">Free</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"vipContent-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"vipContent\" aria-selected=\"false\" href=\"#vipContent\">Vip</a>
                </li>-->

            </ul>
            <div class=\"tab-content h-100\" style=\"padding-bottom: 1px\">
                <div id=\"all\" class=\"tab-pane h-100 fade show active\" role=\"tabpanel\" aria-labelledby=\"all-tab\">
                    <div class=\"row h-100 m-0 p-0 miniHeader\">
                        <div class=\"col-12 p-0 m-0\">
                            <div class=\"tableContainer\">
                                <table id=\"tables\" class=\"tableLobby w-100\">
                                    <thead>
                                    <tr>
                                        <th>{{ translator.getLang('ID') }}</th>
                                        <!--<th>Start</th> -->
                                        <th class=\"jckpt styleJack\">{{ translator.getLang('Jackpot') }}</th>
                                        <th>{{ translator.getLang('Name') }}</th>
                                        <th>{{ translator.getLang('Buy-in') }}</th>
                                        <th>{{ translator.getLang('Min') }}</th>
                                        <th>{{ translator.getLang('Max') }}</th>
                                        <th>{{ translator.getLang('Credit') }}</th>
                                        <th>{{ translator.getLang('Status') }}</th>
                                        <th>{{ translator.getLang('On seat') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody id=\"tBodyTable\">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div id=\"freeContent\" class=\"tab-pane h-100 fade\" role=\"tabpanel\" aria-labelledby=\"freeContent-tab\">

                </div>
                <div id=\"vipContent\" class=\"tab-pane h-100 fade\" role=\"tabpanel\" aria-labelledby=\"vipContent-tab\">

                </div>
            </div>
        </div>
        <div class=\"col col-4 col-lg-3 pr-0 py-0\">
            <div class=\"newLine\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"playersTab\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"player-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"player\" aria-selected=\"true\" href=\"#player\">{{ translator.getLang('Player') }}</a>
                    </li>
                    <!--<li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"waiting-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"waiting\" aria-selected=\"false\" href=\"#waiting\">Waiting</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" id=\"info-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"info\" aria-selected=\"false\" href=\"#info\">Info</a>
                    </li>-->

                </ul>
                <div class=\"tab-content h-100\">
                    <div id=\"player\" class=\"tab-pane h-100-26 fade show active\" role=\"tabpanel\" aria-labelledby=\"player-tab\">
                        <div class=\"row h-100 m-0 p-0 miniHeader\">
                            <div class=\"col-12 p-0 m-0\">
                                <div class=\"tableContainer\">
                                    <table id=\"tables2\" class=\"tableLobby w-100\">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div id=\"waiting\" class=\"tab-pane h-100-26 \" role=\"tabpanel\" aria-labelledby=\"player-tab\">

                    </div>
                    <div id=\"info\" class=\"tab-pane h-100-26\" role=\"tabpanel\" aria-labelledby=\"player-tab\">

                    </div>-->
                </div>
            </div>
            <!--<div class=\"newLine\" style=\"height: 29%;\">
                <ul class=\"nav nav-tabs\" role=\"tablist\" id=\"tournamentsTab\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" id=\"player-tab\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tournaments\" aria-selected=\"true\" href=\"#tournaments\">My tournaments</a>
                    </li>
                </ul>
                <div class=\"tab-content h-100\">
                    <div id=\"tournaments\" class=\"tab-pane h-100-26 fade show active\" role=\"tabpanel\" aria-labelledby=\"tournaments-tab\">
                        <div class=\"row h-100 m-0 p-0 miniHeader\">
                            <div class=\"col-12 p-0 m-0\">
                                <div class=\"tableContainer\">
                                    <table id=\"tables3\" class=\"tableLobby w-100\">
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr><tr>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>

    <div class=\"row p-0 m-0 footerLobby\">
        <div class=\"col col-8 col-lg-9 p-0\">
            <div class=\"footerInfo\">
                <div class=\"row\" style=\"margin-top: -8px;\">
                    <div class=\"col-lg-3 col-md-2 mr-0\">
                        <div class=\"nrPlayer\"></div>
                        <div id=\"numberOfPlayers\"></div>
                    </div>
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"jackpotImg\">
                            <div class=\"centerJakcpot\"></div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-2 ml-0\">
                        <div id=\"nrTalbe\"></div>
                        <div class=\"numberOfTalbe\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col col-4 col-lg-3 pr-0 mr-0\" style=\"margin-top: -8px;\">
            <div class=\"joinGame\">
                {{ translator.getLang('Open room') }}
            </div>
            <div class=\"joinTableGame\">
                {{ translator.getLang('Add table') }}
            </div>
        </div>
    </div>
</div>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{{ scripts|raw }}

<script>
    nrIframes = 0;
    function openMultiTable(game,table,checkSess,type){
        var url = \"{{url}}\";
        var w= \"960\";
        var h= \"640\";

        var title=game+\".Table:\" + table;
        url +='&gid='+table;
        if(typeof targetWin != 'undefined' && targetWin != 'undefined'){
            if(type == 0 ){
                targetWin.close();
                targetWin = typeof ups;
                console.log('test0');
            }
        }

        if(typeof targetWin != 'undefined' && targetWin != 'undefined' ){
            if(nrIframes < 3){
                targetWin.document.write(\"<div><span class='fa fa-times closeIframe'>{{ translator.getLang('Quit') }}</span><iframe  id='iframe'\"+nrIframes+\" src=\"+url+\"></iframe></div>\");
                nrIframes++;
                console.log(nrIframes)
                if(nrIframes < 2){
                    targetWin.document.write (\"<style>iframe{position:relative;width: calc(100%); height: 50%; margin: 0 3px; border: 0;}</style>\");
                }else{
                    targetWin.document.write (\"<style>iframe{position:relative;width: calc(50% - 6px); height: 50%; margin: 0 3px; border: 0;}</style>\");
                }
            }else{
                alert(`{{ translator.getLang('You have reach the maximum tables') }}`)
            }

        }else
        {
            currentOpenedTable=table;
            var left = (screen.width/2)-(w/2);
            var top = (screen.height/2)-(h/2);
            targetWin = window.open ('', title,'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
            targetWin.document.write (\"<span class='fa fa-times closeIframe'>{{ translator.getLang('Quit') }}</span><iframe id='iframe1' src=\"+url+\"></iframe>\");
            targetWin.document.write (\"<style>body{    background: #000;}</style>\");
            targetWin.document.write (\"<style>iframe{width: 100%;height: 100%;border: 0;}</style>\");
            targetWin.document.write (\"<style>.closeIframe{color: #000;display: inline-block; position: absolute;top: 10px;text-transform: uppercase;text-decoration: none;font-weight: 900; background: linear-gradient(0deg, rgba(165,138,86,1) 0%, rgba(193,177,139,1) 57%);padding: 12px; border-radius: 2px; border: 1px solid #c1b18b; width: 8%; text-align: center; cursor: pointer;}</style>\");
            targetWin.focus();

            \$(\".closeIframe\", targetWin.document).click(function(e){
                \$(this).parent().remove();
            });

            targetWin.addEventListener('resize', function () {
                console.log(targetWin.width)
                console.log(targetWin.height)
            })

            targetWin.onunload = targetWin.onbeforeunload = (function(){
                currentOpenedTable='';nrIframes = 0;targetWin = 'undefined';
                return null;
            });

            targetWin.addEventListener(\"pagehide\", function(){
                currentOpenedTable='';nrIframes = 0;targetWin = 'undefined';
                return null;
            },false);

        }
    }

    function sessionNotExp(wdw,doNotRedirect){
        doNotRedirect = typeof doNotRedirect !== 'undefined' ? doNotRedirect : false;
        \$.post(\"/services\",{action:\"14\"}, function(data){
            if(data!=1){
                wdw.close();
                jAlert('Your session has expired.Please login again to enjoy out games!','Session Expired', function(answer) {
                    if (answer)
                    {
                        if(!doNotRedirect) {
                            doLogin();
                        }
                    }
                });

                return false;
            }
        });
    }
    function doLogin(){
        window.location.href = '/login/do';
    }



</script>
<script>
    secondsRefreshTime = 5000;
    currentOpenedTable='';
    noUser = 0;

    var webApp = '{{webApp}}'
    function openCashier(type){
        type = typeof type !== 'undefined' ? type : '';
        var w='1065';
        var h='650';

        var targetWin = window.open ('/cashierLobby?', type,'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top);

        targetWin.focus();


    }

    \$('#refresh').on('click', function(){
        \$('.showCredit').css('opacity','1');
        setTimeout(function(){
            \$('.showCredit').css('opacity','1');
        },500)
    });

    \$(document).ready(function(){
        getCredits();
        var maxH = '500px';

        var initialH2 = window.innerHeight - 210;
        \$('.tab-content').css('max-height', initialH2+'px')
        var initialH = document.getElementsByClassName('tab-content')[0].offsetHeight -12;

        \$('.tableContainer').css('max-height', initialH+'px')


        \$( window ).resize(function() {
            var initialH = document.getElementsByClassName('tab-content')[0].offsetHeight - 12;
            var initialH2 = window.innerHeight - 210;
            \$('.tableContainer').css('max-height', initialH+'px')
            \$('.tab-content').css('max-height', initialH2+'px');
        });
        var type, args = [];
        if( typeof location.search.substr(1) != 'undefined'){
            args = location.search.substr(1).split(/&/);

            if(typeof args[1] !='undefined'){
                if (args[1] != \"\") {
                    type = args[1].split('=')[1];
                }

                if(type == 'Zechinetta')
                    setTimeout(function(){
                        if(!\$('#zecchinettaTab').hasClass('hidden'))
                            \$('#zecchinettaTab').click();
                    },100);
            }

        }

        \$('.refreshStyle').on('click', function () {
            getCredits();
        });

        function getCredits(key)
        {
            \$.ajax({
                url: \"{{hostLobby}}\",
                xhrFields: {
                    withCredentials: true
                },
                type: \"POST\",
                data: {
                    sessionid: \"{% if key is defined  %}{{ key }}{% endif %}\",
                    opcode: '{{lobbyCreditRequestCode}}'
                }
            })
                .done(function( data ) {
                    try {
                        creditsnew = data.split(\"~\");
                        var credit = creditsnew[0];
                        {% if showCurrency != 'false' %}
                        credit+=  \" {{currency}}\";
                        {% endif %}
                        var username = creditsnew[1];
                        \$(\".showCredit\").fadeOut(\"slow\").fadeIn(\"slow\").empty().append(credit);
                        \$(\".namePosition\").empty().append(username);
                    }
                    catch (e){
                        console.log(e);
                    }

                });

        }

        {% if hasKeyVal == 0 %}
        \$('.logoH').appendTo(\$('.logoLobby'));
        {% endif %}


        {% if hasKeyVal == 1 %}
        \$('.logoH').remove();
        {% endif %}
        \$('.logoH').on('error', function(){
//            \$('.logoH').remove();
        });

        if(\$('.username').length == 0){
            \$('html').append('<div class=\"needLogin\"><div class=\"modalInfo\">{{ translator.getLang('You are not logged in') }}!</div></div>');
            setTimeout(function(){
                \$('.needLogin').remove();
            },3000);
            noUser = 0;
        }else {

            var text = \$('.username').text();
            \$('.namePosition').empty().append(text);

            var credit = \$('.credit').text();
            \$('.showCredit').empty().append(credit);
        }
        function actulizeTime() {
            var newDate = new Date();
            var newDateToPrint = newDate.getDate() + '-' + (newDate.getMonth() + 1) + '-' + newDate.getFullYear() + ' ' + (newDate.getHours() < 10 ? ('0' + newDate.getHours()) : newDate.getHours()) + ':' + (newDate.getMinutes() < 10 ? ('0' + newDate.getMinutes()) : newDate.getMinutes()) + ':' + (newDate.getSeconds() < 10 ? ('0' + newDate.getSeconds()) : newDate.getSeconds());
            \$('#actualTime').empty().append(newDateToPrint);
        }

        if(noUser == 1) {
            var intervalTime = setInterval(function () {
                actulizeTime();

            }, 1000);

            var intervalTime = setInterval(function () {

                updateGamesInfo();
            }, secondsRefreshTime);
        }



        function takeGames(){

            var url = '{{hostLobby}}';
            \$.ajax({
                url: url,
                method: 'POST',
                data: {
                    opcode: 4000,
                    hosts: true,
                    get: true
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    \$.each(obj ,function(key,item) {
                        \$('#'+ key.toLowerCase() +'Tab').removeClass('hidden').attr('data-select', key);

                        if(Object.keys(obj).length === 1){
                            \$('#'+ key.toLowerCase() +'Tab').addClass('for2');
                        }
                    })

                    if(\$('#bankrouletteTab').hasClass('hidden')){
                        \$('#bankrouletteTab').click();
                    }
                    rebuildRequest(\$('.menuGames.active').attr('data-select'));

                }
            });

        }

        onlyOneTime = 0;
        takeGames();
//        centerJakcpot
        function rebuildRequest(game) {
            \$.ajax({
                url: '{{hostLobby}}',
                method: 'POST',
                data: {
                    opcode: '{{lobbyInfoRequestCode}}',
                    gname: game,
                    get: true
                },
                success: function (data) {
                    if(noUser != 1 ) {
                        if(data == -48){
                            // \$('.tableContainer').empty().append('<div class=\"noUserInfo\">Service not available</div>')
                            buildLobbyStructure([]);
                        }else{
                            var gamesInfo = [];
                            var games = data.split('\$');
                            \$.each(games, function (index, element) {
                                gamesInfo[index] = element.split('~');
                            });

                            \$.each(gamesInfo, function (index, element) {
                                gamesInfo[index][5] = element[5].split('@');
                            });

                            buildLobbyStructure(gamesInfo);

                            \$.ajax({
                                url: '{{hostLobby}}',
                                method: 'POST',
                                data: {
                                    opcode: 4000,
                                    get: true,
                                    jackpot: true,
                                    gname: game
                                },
                                success: function (data) {

                                    // if (onlyOneTime == 0)
                                    if (noUser == 1) {
                                        var curr,rate;
                                        \$.ajax({
                                            url: webApp,
                                            type: \"POST\",
                                            data: {
                                                skinid : '{{skinid}}',
                                                username: '{{username}}',
                                                sessionid: \"{% if key is defined  %}{{ key }}{% endif %}\",
                                                extall: false,
                                                operationtype: 3006
                                            }
                                        })
                                            .done(function( data2 ) {
                                                curr = data2.split('~')[2];
                                                rate = data2.split('~')[3];
                                                var toFxd = 2;
                                                if(parseFloat(rate) > 50)
                                                    toFxd = 0
                                                if(parseFloat(rate) > 50)
                                                    if(!curr.startsWith('&'))
                                                        curr = '';
                                                data = JSON.parse(data);
                                                var totalJack = 0;
                                                \$.each(data, function (index, element) {
                                                    \$('.jackpot' + element.gid).find('span').html((element.amount * rate).toFixed(toFxd) +' '+curr)
                                                    totalJack = parseFloat(totalJack) + parseFloat(element.amount) * rate
                                                });

                                                var totalToPrint = totalJack;
                                                \$('.centerJakcpot').html(totalToPrint.toFixed(toFxd) + ' ' +curr);
                                            });
                                    }
                                }
                            })
                        }
                    }
                    else{
                        \$('.tableContainer').empty().append('<div class=\"noUserInfo\">{{ translator.getLang('You must login for play') }}</div>')
                    }
                }
            });
        }


        function updateGamesInfo(){
            rebuildRequest(\$('.menuGames.active').attr('data-select'));
        }

        \$('.menuGames').off('click')
        \$('.menuGames').on('click', function(){
            \$('.menuGames').removeClass('active')
            \$(this).addClass('active');

            if(\$('#zecchinettaTab').hasClass('active')){

                \$('.jckpt').addClass('hidden');
                \$('.jackpotImg').addClass('hidden');
            }else{
                if(\$('#bankrouletteliveTab').hasClass('active')){


                    \$('.jckpt').removeClass('hidden');
                    \$('.jackpotImg').removeClass('hidden');
                }else{

                    \$('.jckpt').removeClass('hidden');
                    \$('.jackpotImg').removeClass('hidden');
                }
            }
            rebuildRequest(\$('.menuGames.active').attr('data-select'));

        })
    });

    function buildGamesDetails(id, data){

        var toPrint = '';
        var header = '<thead><tr class=\"roomId\" id=\"'+ id +'\"><th> {{ translator.getLang('Username') }}</th><th>{{ translator.getLang('Credit') }}</th></tr></thead>';
        \$.each(data, function(index, element){
            if(element[2] == id) {
                if(element[5]) {
                    var nr  = element[5][5].split('/')[0];
                    if(element[5][8] != 'null'){
                        var players = element[5][8].split(';');

                        \$.each(players, function(key, player){
                            toPrint += '<tr><td>' + player.split(',')[0] + '</td><td>' + (player.split(',')[1] / 100) + '</td></tr>';
                        });

                        for(var i = 0 ;i < 10 - nr; i++){
                            toPrint += '<tr><td>-</td><td>-</td></tr>'
                        }

                    }
                }
            }

        });

        if(toPrint == ''){
            for(var j = 0 ;j < 10; j++){
                toPrint += '<tr><td>-</td><td>-</td></tr>'
            }

        }
        \$('#tables2').empty().append(header + toPrint);
    }



    function buildLobbyStructure(gamesInfoArray){
        var curr,rate;
        \$.ajax({
            url: webApp,
            type: \"POST\",
            data: {
                skinid : '{{skinid}}',
                username: '{{username}}',
                sessionid: \"{% if key is defined  %}{{ key }}{% endif %}\",
                extall: false,
                operationtype: 3006
            }
        })
            .done(function( data22 ) {
                curr = data22.split('~')[2];
                rate = data22.split('~')[3];
                var toFxd = 2;
                if(parseFloat(rate) > 50)
                    toFxd = 0
                if(parseFloat(rate) > 50)
                    if(!curr.startsWith('&'))
                        curr = '';
                var tableList = '';
                var totaltOnline = 0;
                var totaltTables = gamesInfoArray.length;

                \$.each(gamesInfoArray, function(index, element){
                    tableList += '<tr id=\"'+ element[2] +'\"  ondblclick=\"openMultiTable(\\'bankroulette\\',\$(\\'.roomId\\').attr(\\'id\\'),true);\">';
                    tableList += '<td>' + element[2] + '</td>';
                    if(\$('#zecchinettaTab').hasClass('active'))
                        tableList += '<td class=\"jckpt hidden jackpot'+element[2]+'\"><span class=\"spclJckp\">' + 0 +' '+curr+ '</span></td>';
                    else{
                        tableList += '<td class=\"jckpt jackpot'+element[2]+'\"><span class=\"spclJckp\">' + 0 +' '+curr+ '</span></td>';

                    }


                    if(element[5]) {
                        var toSplit = element[2].split('');

                        var flash = (element[5][9] <= 30 && element[5][9] > 0 && toSplit[0] == 1 && toSplit[1] == 1) ? ' <i class=\"fa fa-bolt red activess\"></i>' : '<i class=\"fa fa-bolt red opc0\"></i>';

//                    tableList += '<td>' + element[5][4].replace('=',' ') + '</td>';
                        tableList += '<td>' + element[5][0] + '</td>';
                        tableList += '<td>' + ((element[5][7].split(',')[1] / 100 )* rate).toFixed(toFxd) +' ' + curr + '/' + ((element[5][7].split(',')[0] / 100 )*rate).toFixed(toFxd) + ' ' + curr + '</td>';
                        tableList += '<td>' + ((element[5][6].split(',')[1] / 100 )* rate).toFixed(toFxd) +' '+ curr+ '</td>';
                        tableList += '<td>' + ((element[5][6].split(',')[0] / 100 )* rate).toFixed(toFxd)  +' '+ curr+ '</td>';
                        var locked = element[5][10] == '1' ? '<i class=\"fa fa-lock red activess\"></i>' : '<i class=\"fa fa-lock red opc0\"></i>';
                        if(element[5][8] != 'null'){
                            var players = element[5][8].split(';');
                            var total = 0;
                            var isDealear = 0;

                            \$.each(players, function(key, player){
                                total = total + (player.split(',')[1] / 100);
                                totaltOnline = totaltOnline + 1;

                                if(player.split(',')[2] == 'D')
                                    isDealear = isDealear + 1;
                            });
                            tableList += '<td>'+ (total.toFixed(toFxd) * rate).toFixed(toFxd) + ' ' + curr +'</td>';
                            tableList += '<td>' +flash+ (isDealear == 0 ? '<span class=\"text-success\">{{ translator.getLang('Classic') }}</span>' : '<span class=\"text-warning\">{{ translator.getLang('Banker') }}</span>') + locked+'</td>';

                        }else{
                            tableList += '<td>0</td>';
                            tableList += '<td>'+flash+'<span class=\"text-success\">{{ translator.getLang('Classic') }}</span>'+locked+'</td>'
                        }

                    }else{
                        tableList += '<td>0></td><td>0></td><td>0></td><td>0></td><td>0></td>';
                        tableList += '<td><span class=\"text-success\">{{ translator.getLang('Classic') }}</span></td>'
                    }




                    if(element[5])
                        tableList += '<td>' + element[5][5] +'</td>';
                    else
                        tableList += '<td>0'+' '+ curr+'/' + '0'+ ' ' + curr+'</td>'

                });
                tableList += '</tr>';

                var roomId = typeof \$('.roomId').attr('id') != 'undefined' ? \$('.roomId').attr('id') : 0;
                \$('#tBodyTable').empty().append(tableList);

                if(\$('.activess').length == 0){
                    \$('.opc0').remove();
                }
                if(roomId != 0){
                    \$('#'+ roomId).trigger('click');
                }else
                    setTimeout(function(){\$('#tBodytable tr').first().trigger('click')},500);
                \$('#tBodytable tr').off('click');
                \$('#tBodytable tr').on('click', function() {
                    \$('.colored').removeClass('colored');
                    \$(this).toggleClass('colored');
                    buildGamesDetails(\$(this).attr('id'), gamesInfoArray);
                });

                \$('#numberOfPlayers').empty().append('<span class=\"onlinePl\">{{ translator.getLang('Online players') }}</span> ' + totaltOnline);
                \$('#nrTalbe').empty().append(totaltTables + ' <span class=\"onlineTB\">{{ translator.getLang('Tables available') }}</span>');

                \$('.joinGame').on('click', function(){
                    openMultiTable('bankroulette',\$('.roomId').attr('id'),true,0);
                })
                \$('.joinTableGame').on('click', function(){
                    openMultiTable('bankroulette',\$('.roomId').attr('id'),true,1);
                })
            });



    }
</script>
", "default/games/new_lobby.html.twig", "/srv/workspace/backofficenew/templates/default/games/new_lobby.html.twig");
    }
}
