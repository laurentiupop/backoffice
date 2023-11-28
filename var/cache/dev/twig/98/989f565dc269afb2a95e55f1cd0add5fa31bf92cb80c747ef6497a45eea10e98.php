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

/* default/base_structure/footer.html.twig */
class __TwigTemplate_dfe775afafcedbc75e5434f8855bdc2e7e1df3e7460109e311d2ba4e63bea8b0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/base_structure/footer.html.twig"));

        // line 1
        echo "<!-- PAGE FOOTER -->
<div class=\"page-footer\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t<span class=\"txt-color-white\">Admin <span class=\"hidden-xs\"> - </span> © ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
\t\t</div>

\t\t<div class=\"col-xs-6 col-sm-6 text-right hidden-xs\">
\t\t\t<div class=\"txt-color-white inline-block\">
\t\t\t\t<i class=\"txt-color-blueLight hidden-mobile\">Last account activity <i class=\"fa fa-clock-o\"></i> <strong>52 mins ago &nbsp;</strong> </i>
\t\t\t\t<div class=\"btn-group dropup\">
\t\t\t\t\t<button class=\"btn btn-xs dropdown-toggle bg-color-blue txt-color-white\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-link\"></i> <span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu pull-right text-left\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<p class=\"txt-color-darken font-sm no-margin\">Download Progress</p>
\t\t\t\t\t\t\t\t<div class=\"progress progress-micro no-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" style=\"width: 50%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<p class=\"txt-color-darken font-sm no-margin\">Server Load</p>
\t\t\t\t\t\t\t\t<div class=\"progress progress-micro no-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" style=\"width: 20%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<p class=\"txt-color-darken font-sm no-margin\">Memory Load <span class=\"text-danger\">*critical*</span></p>
\t\t\t\t\t\t\t\t<div class=\"progress progress-micro no-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" style=\"width: 70%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-block btn-default\">refresh</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id=\"shortcut\">
\t<ul class=\"leftUl\">
\t\t<li class=\"leftLi\">
            <div class=\"creditField\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 63, $this->source); })()), "getLang", [0 => "Credit"], "method", false, false, false, 63), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["credit"]) || array_key_exists("credit", $context) ? $context["credit"] : (function () { throw new RuntimeError('Variable "credit" does not exist.', 63, $this->source); })()), "html", null, true);
        echo (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 63, $this->source); })());
        echo "</div>
\t\t</li>

\t\t";
        // line 67
        echo "\t\t</li>
\t</ul>
</div>
<!-- END SHORTCUT AREA -->
<!-- MAIN APP JS FILE -->
<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ \"restartOnRequestAfter\": true }' src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/pace/pace.min.js"), "html", null, true);
        echo "\"></script>



<!-- IMPORTANT: APP CONFIG -->
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.config.js"), "html", null, true);
        echo "\"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>

<!-- BOOTSTRAP JS -->
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- CUSTOM NOTIFICATION -->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notification/SmartNotification.min.js"), "html", null, true);
        echo "\"></script>

<!-- JARVIS WIDGETS -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/smartwidgets/jarvis.widget.min.js"), "html", null, true);
        echo "\"></script>

<!-- EASY PIE CHARTS -->
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- SPARKLINES -->
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>

<!-- JQUERY VALIDATE -->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/jquery-validate/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

<!-- JQUERY MASKED INPUT -->
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/masked-input/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/select2/select2.min.js"), "html", null, true);
        echo "\"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/bootstrap-slider/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>

<!-- browser msie issue fix -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/msie-fix/jquery.mb.browser.min.js"), "html", null, true);
        echo "\"></script>

<!-- FastClick: For mobile devices -->
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.min.js"), "html", null, true);
        echo "\"></script>



<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/speech/voicecommand.min.js"), "html", null, true);
        echo "\"></script>

<!-- SmartChat UI : plugin -->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/smart-chat-ui/smart.chat.ui.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/smart-chat-ui/smart.chat.manager.min.js"), "html", null, true);
        echo "\"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/flot/jquery.flot.cust.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/flot/jquery.flot.time.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/flot/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

<!-- Full Calendar -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugin/fullcalendar/jquery.fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
<script>
\tfunction openDash(){
\t        \$('#printAjax').empty();
\t\t}
\t\$(document).ready(function(){
\t    \$('.top-menu-invisible li').on('click', function () {
\t\t\t\$('.top-menu-invisible li').removeClass('active')
\t\t\t\$(this).addClass('active')

\t\t\t\$('#subSectionName').text(\$(this).text())
        })
\t\t
\t\t\$('.sectionNm').on('click', function () {
\t\t\t\$('#sectionName').text(\$(this).text())
        })


\t})
</script>
<script>
    \$(document).ready(function() {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        /*
         * PAGE RELATED SCRIPTS
         */

        \$(\".js-status-update a\").click(function() {
            var selText = \$(this).text();
            var \$this = \$(this);
            \$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class=\"caret\"></span>');
            \$this.parents('.dropdown-menu').find('li').removeClass('active');
            \$this.parent().addClass('active');
        });

        /*
        * TODO: add a way to add more todo's to list
        */

        // initialize sortable
        \$(function() {
            \$(\"#sortable1, #sortable2\").sortable({
                handle : '.handle',
                connectWith : \".todo\",
                update : countTasks
            }).disableSelection();
        });

        // check and uncheck
        \$('.todo .checkbox > input[type=\"checkbox\"]').click(function() {
            var \$this = \$(this).parent().parent().parent();

            if (\$(this).prop('checked')) {
                \$this.addClass(\"complete\");

                // remove this if you want to undo a check list once checked
                //\$(this).attr(\"disabled\", true);
                \$(this).parent().hide();

                // once clicked - add class, copy to memory then remove and add to sortable3
                \$this.slideUp(500, function() {
                    \$this.clone().prependTo(\"#sortable3\").effect(\"highlight\", {}, 800);
                    \$this.remove();
                    countTasks();
                });
            } else {
                // insert undo code here...
            }

        })
        // count tasks
        function countTasks() {

            \$('.todo-group-title').each(function() {
                var \$this = \$(this);
                \$this.find(\".num-of-tasks\").text(\$this.next().find(\"li\").size());
            });

        }

        ";
        // line 233
        echo "        ";
        // line 234
        echo "        ";
        // line 235
        echo "        ";
        // line 236
        echo "
        ";
        // line 238
        echo "        ";
        // line 239
        echo "
        ";
        // line 241
        echo "
        ";
        // line 243
        echo "        ";
        // line 244
        echo "        ";
        // line 245
        echo "
        ";
        // line 247
        echo "        ";
        // line 248
        echo "        ";
        // line 249
        echo "        ";
        // line 250
        echo "        ";
        // line 251
        echo "        ";
        // line 252
        echo "        ";
        // line 253
        echo "        ";
        // line 254
        echo "        ";
        // line 255
        echo "        ";
        // line 256
        echo "
        ";
        // line 258
        echo "        ";
        // line 259
        echo "        ";
        // line 260
        echo "        ";
        // line 261
        echo "        ";
        // line 262
        echo "        ";
        // line 263
        echo "
        ";
        // line 265
        echo "        ";
        // line 266
        echo "        ";
        // line 267
        echo "
        ";
        // line 269
        echo "        ";
        // line 270
        echo "        ";
        // line 271
        echo "        ";
        // line 272
        echo "        ";
        // line 273
        echo "
        ";
        // line 275
        echo "
        ";
        // line 277
        echo "        ";
        // line 278
        echo "        ";
        // line 279
        echo "        ";
        // line 280
        echo "        ";
        // line 281
        echo "        ";
        // line 282
        echo "        ";
        // line 283
        echo "        ";
        // line 284
        echo "        ";
        // line 285
        echo "        ";
        // line 286
        echo "        ";
        // line 287
        echo "        ";
        // line 288
        echo "        ";
        // line 289
        echo "        ";
        // line 290
        echo "        ";
        // line 291
        echo "        ";
        // line 292
        echo "        ";
        // line 293
        echo "        ";
        // line 294
        echo "        ";
        // line 295
        echo "        ";
        // line 296
        echo "        ";
        // line 297
        echo "        ";
        // line 298
        echo "        ";
        // line 299
        echo "
        ";
        // line 301
        echo "        ";
        // line 302
        echo "        ";
        // line 303
        echo "
        ";
        // line 305
        echo "
        ";
        // line 307
        echo "        ";
        // line 308
        echo "        ";
        // line 309
        echo "        ";
        // line 310
        echo "        ";
        // line 311
        echo "        ";
        // line 312
        echo "        ";
        // line 313
        echo "        ";
        // line 314
        echo "        ";
        // line 315
        echo "        ";
        // line 316
        echo "        ";
        // line 317
        echo "
        ";
        // line 319
        echo "        ";
        // line 320
        echo "        ";
        // line 321
        echo "        ";
        // line 322
        echo "        ";
        // line 323
        echo "
        ";
        // line 325
        echo "        ";
        // line 326
        echo "        ";
        // line 327
        echo "
        ";
        // line 329
        echo "
        ";
        // line 331
        echo "
        ";
        // line 333
        echo "
        ";
        // line 335
        echo "
        ";
        // line 337
        echo "        ";
        // line 338
        echo "        ";
        // line 339
        echo "        ";
        // line 340
        echo "        ";
        // line 341
        echo "        ";
        // line 342
        echo "        ";
        // line 343
        echo "        ";
        // line 344
        echo "        ";
        // line 345
        echo "        ";
        // line 346
        echo "        ";
        // line 347
        echo "        ";
        // line 348
        echo "        ";
        // line 349
        echo "        ";
        // line 350
        echo "        ";
        // line 351
        echo "        ";
        // line 352
        echo "        ";
        // line 353
        echo "        ";
        // line 354
        echo "        ";
        // line 355
        echo "        ";
        // line 356
        echo "        ";
        // line 357
        echo "        ";
        // line 358
        echo "        ";
        // line 359
        echo "        ";
        // line 360
        echo "        ";
        // line 361
        echo "        ";
        // line 362
        echo "        ";
        // line 363
        echo "        ";
        // line 364
        echo "        ";
        // line 365
        echo "        ";
        // line 366
        echo "        ";
        // line 367
        echo "        ";
        // line 368
        echo "        ";
        // line 369
        echo "        ";
        // line 370
        echo "        ";
        // line 371
        echo "        ";
        // line 372
        echo "        ";
        // line 373
        echo "        ";
        // line 374
        echo "        ";
        // line 375
        echo "
        ";
        // line 377
        echo "        ";
        // line 378
        echo "        ";
        // line 379
        echo "        ";
        // line 380
        echo "        ";
        // line 381
        echo "        ";
        // line 382
        echo "        ";
        // line 383
        echo "        ";
        // line 384
        echo "        ";
        // line 385
        echo "        ";
        // line 386
        echo "        ";
        // line 387
        echo "        ";
        // line 388
        echo "        ";
        // line 389
        echo "        ";
        // line 390
        echo "
        ";
        // line 392
        echo "        ";
        // line 393
        echo "
        ";
        // line 395
        echo "        ";
        // line 396
        echo "
        ";
        // line 398
        echo "
        ";
        // line 400
        echo "        ";
        // line 401
        echo "
        ";
        // line 403
        echo "
        ";
        // line 405
        echo "
        ";
        // line 407
        echo "        ";
        // line 408
        echo "        ";
        // line 409
        echo "        ";
        // line 410
        echo "        ";
        // line 411
        echo "        ";
        // line 412
        echo "        ";
        // line 413
        echo "        ";
        // line 414
        echo "        ";
        // line 415
        echo "        ";
        // line 416
        echo "        ";
        // line 417
        echo "        ";
        // line 418
        echo "        ";
        // line 419
        echo "        ";
        // line 420
        echo "        ";
        // line 421
        echo "        ";
        // line 422
        echo "        ";
        // line 423
        echo "        ";
        // line 424
        echo "        ";
        // line 425
        echo "        ";
        // line 426
        echo "        ";
        // line 427
        echo "        ";
        // line 428
        echo "        ";
        // line 429
        echo "        ";
        // line 430
        echo "        ";
        // line 431
        echo "        ";
        // line 432
        echo "        ";
        // line 433
        echo "        ";
        // line 434
        echo "        ";
        // line 435
        echo "        ";
        // line 436
        echo "        ";
        // line 437
        echo "
        ";
        // line 439
        echo "        ";
        // line 440
        echo "        ";
        // line 441
        echo "        ";
        // line 442
        echo "        ";
        // line 443
        echo "        ";
        // line 444
        echo "        ";
        // line 445
        echo "        ";
        // line 446
        echo "        ";
        // line 447
        echo "        ";
        // line 448
        echo "        ";
        // line 449
        echo "        ";
        // line 450
        echo "        ";
        // line 451
        echo "        ";
        // line 452
        echo "        ";
        // line 453
        echo "        ";
        // line 454
        echo "        ";
        // line 455
        echo "        ";
        // line 456
        echo "        ";
        // line 457
        echo "
        ";
        // line 459
        echo "
        ";
        // line 461
        echo "
        ";
        // line 463
        echo "        ";
        // line 464
        echo "        ";
        // line 465
        echo "        ";
        // line 466
        echo "        ";
        // line 467
        echo "        ";
        // line 468
        echo "        ";
        // line 469
        echo "        ";
        // line 470
        echo "        ";
        // line 471
        echo "        ";
        // line 472
        echo "        ";
        // line 473
        echo "        ";
        // line 474
        echo "        ";
        // line 475
        echo "        ";
        // line 476
        echo "        ";
        // line 477
        echo "
        ";
        // line 479
        echo "
        ";
        // line 481
        echo "        ";
        // line 482
        echo "        ";
        // line 483
        echo "        ";
        // line 484
        echo "
        ";
        // line 486
        echo "
        ";
        // line 488
        echo "        ";
        // line 489
        echo "        ";
        // line 490
        echo "
        ";
        // line 492
        echo "        ";
        // line 493
        echo "        ";
        // line 494
        echo "        ";
        // line 495
        echo "        ";
        // line 496
        echo "        ";
        // line 497
        echo "        ";
        // line 498
        echo "        ";
        // line 499
        echo "        ";
        // line 500
        echo "        ";
        // line 501
        echo "
        ";
        // line 503
        echo "        ";
        // line 504
        echo "        ";
        // line 505
        echo "        ";
        // line 506
        echo "        ";
        // line 507
        echo "        ";
        // line 508
        echo "        ";
        // line 509
        echo "        ";
        // line 510
        echo "        ";
        // line 511
        echo "        ";
        // line 512
        echo "        ";
        // line 513
        echo "        ";
        // line 514
        echo "        ";
        // line 515
        echo "        ";
        // line 516
        echo "        ";
        // line 517
        echo "        ";
        // line 518
        echo "        ";
        // line 519
        echo "        ";
        // line 520
        echo "        ";
        // line 521
        echo "        ";
        // line 522
        echo "        ";
        // line 523
        echo "        ";
        // line 524
        echo "        ";
        // line 525
        echo "        ";
        // line 526
        echo "        ";
        // line 527
        echo "        ";
        // line 528
        echo "        ";
        // line 529
        echo "
        ";
        // line 531
        echo "        ";
        // line 532
        echo "        ";
        // line 533
        echo "
        ";
        // line 535
        echo "        ";
        // line 536
        echo "        ";
        // line 537
        echo "        ";
        // line 538
        echo "        ";
        // line 539
        echo "
        ";
        // line 541
        echo "
        ";
        // line 543
        echo "        ";
        // line 544
        echo "        ";
        // line 545
        echo "        ";
        // line 546
        echo "        ";
        // line 547
        echo "        ";
        // line 548
        echo "        ";
        // line 549
        echo "
        ";
        // line 551
        echo "        ";
        // line 552
        echo "        ";
        // line 553
        echo "        ";
        // line 554
        echo "        ";
        // line 555
        echo "
        ";
        // line 557
        echo "        ";
        // line 558
        echo "        ";
        // line 559
        echo "        ";
        // line 560
        echo "        ";
        // line 561
        echo "        ";
        // line 562
        echo "        ";
        // line 563
        echo "        ";
        // line 564
        echo "        ";
        // line 565
        echo "        ";
        // line 566
        echo "        ";
        // line 567
        echo "        ";
        // line 568
        echo "        ";
        // line 569
        echo "
        ";
        // line 571
        echo "        ";
        // line 572
        echo "        ";
        // line 573
        echo "        ";
        // line 574
        echo "        ";
        // line 575
        echo "        ";
        // line 576
        echo "        ";
        // line 577
        echo "        ";
        // line 578
        echo "        ";
        // line 579
        echo "        ";
        // line 580
        echo "        ";
        // line 581
        echo "        ";
        // line 582
        echo "        ";
        // line 583
        echo "        ";
        // line 584
        echo "        ";
        // line 585
        echo "        ";
        // line 586
        echo "        ";
        // line 587
        echo "        ";
        // line 588
        echo "        ";
        // line 589
        echo "        ";
        // line 590
        echo "        ";
        // line 591
        echo "        ";
        // line 592
        echo "        ";
        // line 593
        echo "        ";
        // line 594
        echo "        ";
        // line 595
        echo "        ";
        // line 596
        echo "        ";
        // line 597
        echo "        ";
        // line 598
        echo "        ";
        // line 599
        echo "        ";
        // line 600
        echo "        ";
        // line 601
        echo "        ";
        // line 602
        echo "        ";
        // line 603
        echo "        ";
        // line 604
        echo "        ";
        // line 605
        echo "        ";
        // line 606
        echo "        ";
        // line 607
        echo "        ";
        // line 608
        echo "        ";
        // line 609
        echo "        ";
        // line 610
        echo "        ";
        // line 611
        echo "        ";
        // line 612
        echo "        ";
        // line 613
        echo "        ";
        // line 614
        echo "        ";
        // line 615
        echo "        ";
        // line 616
        echo "        ";
        // line 617
        echo "        ";
        // line 618
        echo "        ";
        // line 619
        echo "

        ";
        // line 622
        echo "        ";
        // line 623
        echo "        ";
        // line 624
        echo "        ";
        // line 625
        echo "        ";
        // line 626
        echo "        ";
        // line 627
        echo "        ";
        // line 628
        echo "        ";
        // line 629
        echo "        ";
        // line 630
        echo "
        ";
        // line 632
        echo "
        ";
        // line 634
        echo "        ";
        // line 635
        echo "
        ";
        // line 637
        echo "        ";
        // line 638
        echo "        ";
        // line 639
        echo "        ";
        // line 640
        echo "        ";
        // line 641
        echo "
        ";
        // line 643
        echo "        ";
        // line 644
        echo "        ";
        // line 645
        echo "        ";
        // line 646
        echo "        ";
        // line 647
        echo "
        ";
        // line 649
        echo "        ";
        // line 650
        echo "        ";
        // line 651
        echo "        ";
        // line 652
        echo "        ";
        // line 653
        echo "
        ";
        // line 655
        echo "        ";
        // line 656
        echo "        ";
        // line 657
        echo "        ";
        // line 658
        echo "
        ";
        // line 660
        echo "        ";
        // line 661
        echo "        ";
        // line 662
        echo "        ";
        // line 663
        echo "
        ";
        // line 665
        echo "        ";
        // line 666
        echo "        ";
        // line 667
        echo "        ";
        // line 668
        echo "
        ";
        // line 670
        echo "        ";
        // line 671
        echo "        ";
        // line 672
        echo "
        ";
        // line 674
        echo "        ";
        // line 675
        echo "        ";
        // line 676
        echo "        ";
        // line 677
        echo "        ";
        // line 678
        echo "
        ";
        // line 680
        echo "        ";
        // line 681
        echo "        ";
        // line 682
        echo "
        ";
        // line 684
        echo "        ";
        // line 685
        echo "        ";
        // line 686
        echo "        ";
        // line 687
        echo "
        ";
        // line 689
        echo "        ";
        // line 690
        echo "
        ";
        // line 692
        echo "        ";
        // line 693
        echo "        ";
        // line 694
        echo "        ";
        // line 695
        echo "        ";
        // line 696
        echo "        ";
        // line 697
        echo "        ";
        // line 698
        echo "        ";
        // line 699
        echo "        ";
        // line 700
        echo "        ";
        // line 701
        echo "        ";
        // line 702
        echo "        ";
        // line 703
        echo "        ";
        // line 704
        echo "        ";
        // line 705
        echo "
        ";
        // line 707
        echo "
        ";
        // line 709
        echo "
        ";
        // line 711
        echo "        ";
        // line 712
        echo "
        ";
        // line 714
        echo "        ";
        // line 715
        echo "        ";
        // line 716
        echo "        ";
        // line 717
        echo "
        ";
        // line 719
        echo "        ";
        // line 720
        echo "        ";
        // line 721
        echo "        ";
        // line 722
        echo "
    });

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type=\"text/javascript\">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- IMPORTANT: APP CONFIG -->
<script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.config.js"), "html", null, true);
        echo "\"></script>
<!-- CUSTOM NOTIFICATION -->
<script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notification/SmartNotification.min.js"), "html", null, true);
        echo "\"></script>

<!-- JARVIS WIDGETS -->
<script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/smartwidgets/jarvis.widget.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.min.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/base_structure/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1314 => 751,  1310 => 750,  1304 => 747,  1299 => 745,  1274 => 722,  1272 => 721,  1270 => 720,  1268 => 719,  1265 => 717,  1263 => 716,  1261 => 715,  1259 => 714,  1256 => 712,  1254 => 711,  1251 => 709,  1248 => 707,  1245 => 705,  1243 => 704,  1241 => 703,  1239 => 702,  1237 => 701,  1235 => 700,  1233 => 699,  1231 => 698,  1229 => 697,  1227 => 696,  1225 => 695,  1223 => 694,  1221 => 693,  1219 => 692,  1216 => 690,  1214 => 689,  1211 => 687,  1209 => 686,  1207 => 685,  1205 => 684,  1202 => 682,  1200 => 681,  1198 => 680,  1195 => 678,  1193 => 677,  1191 => 676,  1189 => 675,  1187 => 674,  1184 => 672,  1182 => 671,  1180 => 670,  1177 => 668,  1175 => 667,  1173 => 666,  1171 => 665,  1168 => 663,  1166 => 662,  1164 => 661,  1162 => 660,  1159 => 658,  1157 => 657,  1155 => 656,  1153 => 655,  1150 => 653,  1148 => 652,  1146 => 651,  1144 => 650,  1142 => 649,  1139 => 647,  1137 => 646,  1135 => 645,  1133 => 644,  1131 => 643,  1128 => 641,  1126 => 640,  1124 => 639,  1122 => 638,  1120 => 637,  1117 => 635,  1115 => 634,  1112 => 632,  1109 => 630,  1107 => 629,  1105 => 628,  1103 => 627,  1101 => 626,  1099 => 625,  1097 => 624,  1095 => 623,  1093 => 622,  1089 => 619,  1087 => 618,  1085 => 617,  1083 => 616,  1081 => 615,  1079 => 614,  1077 => 613,  1075 => 612,  1073 => 611,  1071 => 610,  1069 => 609,  1067 => 608,  1065 => 607,  1063 => 606,  1061 => 605,  1059 => 604,  1057 => 603,  1055 => 602,  1053 => 601,  1051 => 600,  1049 => 599,  1047 => 598,  1045 => 597,  1043 => 596,  1041 => 595,  1039 => 594,  1037 => 593,  1035 => 592,  1033 => 591,  1031 => 590,  1029 => 589,  1027 => 588,  1025 => 587,  1023 => 586,  1021 => 585,  1019 => 584,  1017 => 583,  1015 => 582,  1013 => 581,  1011 => 580,  1009 => 579,  1007 => 578,  1005 => 577,  1003 => 576,  1001 => 575,  999 => 574,  997 => 573,  995 => 572,  993 => 571,  990 => 569,  988 => 568,  986 => 567,  984 => 566,  982 => 565,  980 => 564,  978 => 563,  976 => 562,  974 => 561,  972 => 560,  970 => 559,  968 => 558,  966 => 557,  963 => 555,  961 => 554,  959 => 553,  957 => 552,  955 => 551,  952 => 549,  950 => 548,  948 => 547,  946 => 546,  944 => 545,  942 => 544,  940 => 543,  937 => 541,  934 => 539,  932 => 538,  930 => 537,  928 => 536,  926 => 535,  923 => 533,  921 => 532,  919 => 531,  916 => 529,  914 => 528,  912 => 527,  910 => 526,  908 => 525,  906 => 524,  904 => 523,  902 => 522,  900 => 521,  898 => 520,  896 => 519,  894 => 518,  892 => 517,  890 => 516,  888 => 515,  886 => 514,  884 => 513,  882 => 512,  880 => 511,  878 => 510,  876 => 509,  874 => 508,  872 => 507,  870 => 506,  868 => 505,  866 => 504,  864 => 503,  861 => 501,  859 => 500,  857 => 499,  855 => 498,  853 => 497,  851 => 496,  849 => 495,  847 => 494,  845 => 493,  843 => 492,  840 => 490,  838 => 489,  836 => 488,  833 => 486,  830 => 484,  828 => 483,  826 => 482,  824 => 481,  821 => 479,  818 => 477,  816 => 476,  814 => 475,  812 => 474,  810 => 473,  808 => 472,  806 => 471,  804 => 470,  802 => 469,  800 => 468,  798 => 467,  796 => 466,  794 => 465,  792 => 464,  790 => 463,  787 => 461,  784 => 459,  781 => 457,  779 => 456,  777 => 455,  775 => 454,  773 => 453,  771 => 452,  769 => 451,  767 => 450,  765 => 449,  763 => 448,  761 => 447,  759 => 446,  757 => 445,  755 => 444,  753 => 443,  751 => 442,  749 => 441,  747 => 440,  745 => 439,  742 => 437,  740 => 436,  738 => 435,  736 => 434,  734 => 433,  732 => 432,  730 => 431,  728 => 430,  726 => 429,  724 => 428,  722 => 427,  720 => 426,  718 => 425,  716 => 424,  714 => 423,  712 => 422,  710 => 421,  708 => 420,  706 => 419,  704 => 418,  702 => 417,  700 => 416,  698 => 415,  696 => 414,  694 => 413,  692 => 412,  690 => 411,  688 => 410,  686 => 409,  684 => 408,  682 => 407,  679 => 405,  676 => 403,  673 => 401,  671 => 400,  668 => 398,  665 => 396,  663 => 395,  660 => 393,  658 => 392,  655 => 390,  653 => 389,  651 => 388,  649 => 387,  647 => 386,  645 => 385,  643 => 384,  641 => 383,  639 => 382,  637 => 381,  635 => 380,  633 => 379,  631 => 378,  629 => 377,  626 => 375,  624 => 374,  622 => 373,  620 => 372,  618 => 371,  616 => 370,  614 => 369,  612 => 368,  610 => 367,  608 => 366,  606 => 365,  604 => 364,  602 => 363,  600 => 362,  598 => 361,  596 => 360,  594 => 359,  592 => 358,  590 => 357,  588 => 356,  586 => 355,  584 => 354,  582 => 353,  580 => 352,  578 => 351,  576 => 350,  574 => 349,  572 => 348,  570 => 347,  568 => 346,  566 => 345,  564 => 344,  562 => 343,  560 => 342,  558 => 341,  556 => 340,  554 => 339,  552 => 338,  550 => 337,  547 => 335,  544 => 333,  541 => 331,  538 => 329,  535 => 327,  533 => 326,  531 => 325,  528 => 323,  526 => 322,  524 => 321,  522 => 320,  520 => 319,  517 => 317,  515 => 316,  513 => 315,  511 => 314,  509 => 313,  507 => 312,  505 => 311,  503 => 310,  501 => 309,  499 => 308,  497 => 307,  494 => 305,  491 => 303,  489 => 302,  487 => 301,  484 => 299,  482 => 298,  480 => 297,  478 => 296,  476 => 295,  474 => 294,  472 => 293,  470 => 292,  468 => 291,  466 => 290,  464 => 289,  462 => 288,  460 => 287,  458 => 286,  456 => 285,  454 => 284,  452 => 283,  450 => 282,  448 => 281,  446 => 280,  444 => 279,  442 => 278,  440 => 277,  437 => 275,  434 => 273,  432 => 272,  430 => 271,  428 => 270,  426 => 269,  423 => 267,  421 => 266,  419 => 265,  416 => 263,  414 => 262,  412 => 261,  410 => 260,  408 => 259,  406 => 258,  403 => 256,  401 => 255,  399 => 254,  397 => 253,  395 => 252,  393 => 251,  391 => 250,  389 => 249,  387 => 248,  385 => 247,  382 => 245,  380 => 244,  378 => 243,  375 => 241,  372 => 239,  370 => 238,  367 => 236,  365 => 235,  363 => 234,  361 => 233,  275 => 149,  271 => 148,  265 => 145,  261 => 144,  255 => 141,  251 => 140,  247 => 139,  243 => 138,  235 => 133,  231 => 132,  225 => 129,  216 => 123,  204 => 114,  198 => 111,  192 => 108,  186 => 105,  180 => 102,  174 => 99,  168 => 96,  162 => 93,  156 => 90,  150 => 87,  144 => 84,  138 => 81,  132 => 78,  124 => 73,  116 => 67,  107 => 63,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- PAGE FOOTER -->
<div class=\"page-footer\">
\t<div class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t<span class=\"txt-color-white\">Admin <span class=\"hidden-xs\"> - </span> © {{ \"now\"|date(\"Y\") }}</span>
\t\t</div>

\t\t<div class=\"col-xs-6 col-sm-6 text-right hidden-xs\">
\t\t\t<div class=\"txt-color-white inline-block\">
\t\t\t\t<i class=\"txt-color-blueLight hidden-mobile\">Last account activity <i class=\"fa fa-clock-o\"></i> <strong>52 mins ago &nbsp;</strong> </i>
\t\t\t\t<div class=\"btn-group dropup\">
\t\t\t\t\t<button class=\"btn btn-xs dropdown-toggle bg-color-blue txt-color-white\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-link\"></i> <span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu pull-right text-left\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<p class=\"txt-color-darken font-sm no-margin\">Download Progress</p>
\t\t\t\t\t\t\t\t<div class=\"progress progress-micro no-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" style=\"width: 50%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<p class=\"txt-color-darken font-sm no-margin\">Server Load</p>
\t\t\t\t\t\t\t\t<div class=\"progress progress-micro no-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-success\" style=\"width: 20%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<p class=\"txt-color-darken font-sm no-margin\">Memory Load <span class=\"text-danger\">*critical*</span></p>
\t\t\t\t\t\t\t\t<div class=\"progress progress-micro no-margin\">
\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-danger\" style=\"width: 70%;\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"padding-5\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-block btn-default\">refresh</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- END PAGE FOOTER -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id=\"shortcut\">
\t<ul class=\"leftUl\">
\t\t<li class=\"leftLi\">
            <div class=\"creditField\">{{ translator.getLang('Credit') }} : {{ credit }}{{ currency|raw }}</div>
\t\t</li>

\t\t{#<a href=\"#\" class=\"jarvismetro-tile big-cubes selected bg-color-pinkDark\"> <span class=\"iconbox\"> <i class=\"fa fa-user fa-4x\"></i> <span>My Profile </span> </span> </a>#}
\t\t</li>
\t</ul>
</div>
<!-- END SHORTCUT AREA -->
<!-- MAIN APP JS FILE -->
<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ \"restartOnRequestAfter\": true }' src=\"{{ asset('js/plugin/pace/pace.min.js') }}\"></script>



<!-- IMPORTANT: APP CONFIG -->
<script src=\"{{ asset('js/app.config.js') }}\"></script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src=\"{{ asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') }}\"></script>

<!-- BOOTSTRAP JS -->
<script src=\"{{ asset('js/bootstrap/bootstrap.min.js') }}\"></script>

<!-- CUSTOM NOTIFICATION -->
<script src=\"{{ asset('js/notification/SmartNotification.min.js') }}\"></script>

<!-- JARVIS WIDGETS -->
<script src=\"{{ asset('js/smartwidgets/jarvis.widget.min.js') }}\"></script>

<!-- EASY PIE CHARTS -->
<script src=\"{{ asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') }}\"></script>

<!-- SPARKLINES -->
<script src=\"{{ asset('js/plugin/sparkline/jquery.sparkline.min.js') }}\"></script>

<!-- JQUERY VALIDATE -->
<script src=\"{{ asset('js/plugin/jquery-validate/jquery.validate.min.js') }}\"></script>

<!-- JQUERY MASKED INPUT -->
<script src=\"{{ asset('js/plugin/masked-input/jquery.maskedinput.min.js') }}\"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src=\"{{ asset('js/plugin/select2/select2.min.js') }}\"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src=\"{{ asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js') }}\"></script>

<!-- browser msie issue fix -->
<script src=\"{{ asset('js/plugin/msie-fix/jquery.mb.browser.min.js') }}\"></script>

<!-- FastClick: For mobile devices -->
<script src=\"{{ asset('js/plugin/fastclick/fastclick.min.js') }}\"></script>

<!--[if IE 8]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src=\"{{ asset('js/demo.min.js') }}\"></script>



<!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
<!-- Voice command : plugin -->
<script src=\"{{ asset('js/speech/voicecommand.min.js') }}\"></script>

<!-- SmartChat UI : plugin -->
<script src=\"{{ asset('js/smart-chat-ui/smart.chat.ui.min.js') }}\"></script>
<script src=\"{{ asset('js/smart-chat-ui/smart.chat.manager.min.js') }}\"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src=\"{{ asset('js/plugin/flot/jquery.flot.cust.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/flot/jquery.flot.resize.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/flot/jquery.flot.time.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/flot/jquery.flot.tooltip.min.js') }}\"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src=\"{{ asset('js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/vectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>

<!-- Full Calendar -->
<script src=\"{{ asset('js/plugin/moment/moment.min.js') }}\"></script>
<script src=\"{{ asset('js/plugin/fullcalendar/jquery.fullcalendar.min.js') }}\"></script>
<script>
\tfunction openDash(){
\t        \$('#printAjax').empty();
\t\t}
\t\$(document).ready(function(){
\t    \$('.top-menu-invisible li').on('click', function () {
\t\t\t\$('.top-menu-invisible li').removeClass('active')
\t\t\t\$(this).addClass('active')

\t\t\t\$('#subSectionName').text(\$(this).text())
        })
\t\t
\t\t\$('.sectionNm').on('click', function () {
\t\t\t\$('#sectionName').text(\$(this).text())
        })


\t})
</script>
<script>
    \$(document).ready(function() {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        /*
         * PAGE RELATED SCRIPTS
         */

        \$(\".js-status-update a\").click(function() {
            var selText = \$(this).text();
            var \$this = \$(this);
            \$this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class=\"caret\"></span>');
            \$this.parents('.dropdown-menu').find('li').removeClass('active');
            \$this.parent().addClass('active');
        });

        /*
        * TODO: add a way to add more todo's to list
        */

        // initialize sortable
        \$(function() {
            \$(\"#sortable1, #sortable2\").sortable({
                handle : '.handle',
                connectWith : \".todo\",
                update : countTasks
            }).disableSelection();
        });

        // check and uncheck
        \$('.todo .checkbox > input[type=\"checkbox\"]').click(function() {
            var \$this = \$(this).parent().parent().parent();

            if (\$(this).prop('checked')) {
                \$this.addClass(\"complete\");

                // remove this if you want to undo a check list once checked
                //\$(this).attr(\"disabled\", true);
                \$(this).parent().hide();

                // once clicked - add class, copy to memory then remove and add to sortable3
                \$this.slideUp(500, function() {
                    \$this.clone().prependTo(\"#sortable3\").effect(\"highlight\", {}, 800);
                    \$this.remove();
                    countTasks();
                });
            } else {
                // insert undo code here...
            }

        })
        // count tasks
        function countTasks() {

            \$('.todo-group-title').each(function() {
                var \$this = \$(this);
                \$this.find(\".num-of-tasks\").text(\$this.next().find(\"li\").size());
            });

        }

        {#{% if loggedUser != '' %}#}
        {#/*#}
        {#* RUN PAGE GRAPHS#}
        {#*/#}

        {#/* TAB 1: UPDATING CHART */#}
        {#// For the demo we use generated data, but normally it would be coming from the server#}

        {#var data = [], totalPoints = 200, \$UpdatingChartColors = \$(\"#updating-chart\").css('color');#}

        {#function getRandomData() {#}
        {#if (data.length > 0)#}
        {#data = data.slice(1);#}

        {#// do a random walk#}
        {#while (data.length < totalPoints) {#}
        {#var prev = data.length > 0 ? data[data.length - 1] : 50;#}
        {#var y = prev + Math.random() * 10 - 5;#}
        {#if (y < 0)#}
        {#y = 0;#}
        {#if (y > 100)#}
        {#y = 100;#}
        {#data.push(y);#}
        {#}#}

        {#// zip the generated y values with the x values#}
        {#var res = [];#}
        {#for (var i = 0; i < data.length; ++i)#}
        {#res.push([i, data[i]])#}
        {#return res;#}
        {#}#}

        {#// setup control widget#}
        {#var updateInterval = 1500;#}
        {#\$(\"#updating-chart\").val(updateInterval).change(function() {#}

        {#var v = \$(this).val();#}
        {#if (v && !isNaN(+v)) {#}
        {#updateInterval = +v;#}
        {#\$(this).val(\"\" + updateInterval);#}
        {#}#}

        {#});#}

        {#// setup plot#}
        {#var options = {#}
        {#yaxis : {#}
        {#min : 0,#}
        {#max : 100#}
        {#},#}
        {#xaxis : {#}
        {#min : 0,#}
        {#max : 100#}
        {#},#}
        {#colors : [\$UpdatingChartColors],#}
        {#series : {#}
        {#lines : {#}
        {#lineWidth : 1,#}
        {#fill : true,#}
        {#fillColor : {#}
        {#colors : [{#}
        {#opacity : 0.4#}
        {#}, {#}
        {#opacity : 0#}
        {#}]#}
        {#},#}
        {#steps : false#}

        {#}#}
        {#}#}
        {#};#}

        {#var plot = \$.plot(\$(\"#updating-chart\"), [getRandomData()], options);#}

        {#/* live switch */#}
        {#\$('input[type=\"checkbox\"]#start_interval').click(function() {#}
        {#if (\$(this).prop('checked')) {#}
        {#\$on = true;#}
        {#updateInterval = 1500;#}
        {#update();#}
        {#} else {#}
        {#clearInterval(updateInterval);#}
        {#\$on = false;#}
        {#}#}
        {#});#}

        {#function update() {#}
        {#if (\$on == true) {#}
        {#plot.setData([getRandomData()]);#}
        {#plot.draw();#}
        {#setTimeout(update, updateInterval);#}

        {#} else {#}
        {#clearInterval(updateInterval)#}
        {#}#}

        {#}#}

        {#var \$on = false;#}

        {#/*end updating chart*/#}

        {#/* TAB 2: Social Network  */#}

        {#\$(function() {#}
        {#// jQuery Flot Chart#}
        {#var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{#}
        {#label : \"Twitter\",#}
        {#data : twitter,#}
        {#lines : {#}
        {#show : true,#}
        {#lineWidth : 1,#}
        {#fill : true,#}
        {#fillColor : {#}
        {#colors : [{#}
        {#opacity : 0.1#}
        {#}, {#}
        {#opacity : 0.13#}
        {#}]#}
        {#}#}
        {#},#}
        {#points : {#}
        {#show : true#}
        {#}#}
        {#}, {#}
        {#label : \"Facebook\",#}
        {#data : facebook,#}
        {#lines : {#}
        {#show : true,#}
        {#lineWidth : 1,#}
        {#fill : true,#}
        {#fillColor : {#}
        {#colors : [{#}
        {#opacity : 0.1#}
        {#}, {#}
        {#opacity : 0.13#}
        {#}]#}
        {#}#}
        {#},#}
        {#points : {#}
        {#show : true#}
        {#}#}
        {#}];#}

        {#var options = {#}
        {#grid : {#}
        {#hoverable : true#}
        {#},#}
        {#colors : [\"#568A89\", \"#3276B1\"],#}
        {#tooltip : true,#}
        {#tooltipOpts : {#}
        {#//content : \"Value <b>\$x</b> Value <span>\$y</span>\",#}
        {#defaultTheme : false#}
        {#},#}
        {#xaxis : {#}
        {#ticks : [[1, \"JAN\"], [2, \"FEB\"], [3, \"MAR\"], [4, \"APR\"], [5, \"MAY\"], [6, \"JUN\"], [7, \"JUL\"], [8, \"AUG\"], [9, \"SEP\"], [10, \"OCT\"], [11, \"NOV\"], [12, \"DEC\"], [13, \"JAN+1\"]]#}
        {#},#}
        {#yaxes : {#}

        {#}#}
        {#};#}

        {#var plot3 = \$.plot(\$(\"#statsChart\"), data, options);#}
        {#});#}

        {#// END TAB 2#}

        {#// TAB THREE GRAPH //#}
        {#/* TAB 3: Revenew  */#}

        {#\$(function() {#}

        {#var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = \$(\"#rev-toggles\"), target = \$(\"#flotcontainer\");#}

        {#var data = [{#}
        {#label : \"Target Profit\",#}
        {#data : trgt,#}
        {#bars : {#}
        {#show : true,#}
        {#align : \"center\",#}
        {#barWidth : 30 * 30 * 60 * 1000 * 80#}
        {#}#}
        {#}, {#}
        {#label : \"Actual Profit\",#}
        {#data : prft,#}
        {#color : '#3276B1',#}
        {#lines : {#}
        {#show : true,#}
        {#lineWidth : 3#}
        {#},#}
        {#points : {#}
        {#show : true#}
        {#}#}
        {#}, {#}
        {#label : \"Actual Signups\",#}
        {#data : sgnups,#}
        {#color : '#71843F',#}
        {#lines : {#}
        {#show : true,#}
        {#lineWidth : 1#}
        {#},#}
        {#points : {#}
        {#show : true#}
        {#}#}
        {#}]#}

        {#var options = {#}
        {#grid : {#}
        {#hoverable : true#}
        {#},#}
        {#tooltip : true,#}
        {#tooltipOpts : {#}
        {#//content: '%x - %y',#}
        {#//dateFormat: '%b %y',#}
        {#defaultTheme : false#}
        {#},#}
        {#xaxis : {#}
        {#mode : \"time\"#}
        {#},#}
        {#yaxes : {#}
        {#tickFormatter : function(val, axis) {#}
        {#return \"\$\" + val;#}
        {#},#}
        {#max : 1200#}
        {#}#}

        {#};#}

        {#plot2 = null;#}

        {#function plotNow() {#}
        {#var d = [];#}
        {#toggles.find(':checkbox').each(function() {#}
        {#if (\$(this).is(':checked')) {#}
        {#d.push(data[\$(this).attr(\"name\").substr(4, 1)]);#}
        {#}#}
        {#});#}
        {#if (d.length > 0) {#}
        {#if (plot2) {#}
        {#plot2.setData(d);#}
        {#plot2.draw();#}
        {#} else {#}
        {#plot2 = \$.plot(target, d, options);#}
        {#}#}
        {#}#}

        {#};#}

        {#toggles.find(':checkbox').on('change', function() {#}
        {#plotNow();#}
        {#});#}
        {#plotNow()#}

        {#});#}

        {#/*#}
        {#* VECTOR MAP#}
        {#*/#}

        {#data_array = {#}
        {#\"US\" : 4977,#}
        {#\"AU\" : 4873,#}
        {#\"IN\" : 3671,#}
        {#\"BR\" : 2476,#}
        {#\"TR\" : 1476,#}
        {#\"CN\" : 146,#}
        {#\"CA\" : 134,#}
        {#\"BD\" : 100#}
        {#};#}

        {#\$('#vector-map').vectorMap({#}
        {#map : 'world_mill_en',#}
        {#backgroundColor : '#fff',#}
        {#regionStyle : {#}
        {#initial : {#}
        {#fill : '#c4c4c4'#}
        {#},#}
        {#hover : {#}
        {#\"fill-opacity\" : 1#}
        {#}#}
        {#},#}
        {#series : {#}
        {#regions : [{#}
        {#values : data_array,#}
        {#scale : ['#85a8b6', '#4d7686'],#}
        {#normalizeFunction : 'polynomial'#}
        {#}]#}
        {#},#}
        {#onRegionLabelShow : function(e, el, code) {#}
        {#if ( typeof data_array[code] == 'undefined') {#}
        {#e.preventDefault();#}
        {#} else {#}
        {#var countrylbl = data_array[code];#}
        {#el.html(el.html() + ': ' + countrylbl + ' visits');#}
        {#}#}
        {#}#}
        {#});#}

        {#/*#}
        {#* FULL CALENDAR JS#}
        {#*/#}

        {#if (\$(\"#calendar\").length) {#}
        {#var date = new Date();#}
        {#var d = date.getDate();#}
        {#var m = date.getMonth();#}
        {#var y = date.getFullYear();#}

        {#var calendar = \$('#calendar').fullCalendar({#}

        {#editable : true,#}
        {#draggable : true,#}
        {#selectable : false,#}
        {#selectHelper : true,#}
        {#unselectAuto : false,#}
        {#disableResizing : false,#}
        {#height: \"auto\",#}

        {#header : {#}
        {#left : 'title', //,today#}
        {#center : 'prev, next, today',#}
        {#right : 'month, agendaWeek, agenDay' //month, agendaDay,#}
        {#},#}

        {#select : function(start, end, allDay) {#}
        {#var title = prompt('Event Title:');#}
        {#if (title) {#}
        {#calendar.fullCalendar('renderEvent', {#}
        {#title : title,#}
        {#start : start,#}
        {#end : end,#}
        {#allDay : allDay#}
        {#}, true // make the event \"stick\"#}
        {#);#}
        {#}#}
        {#calendar.fullCalendar('unselect');#}
        {#},#}

        {#events : [{#}
        {#title : 'All Day Event',#}
        {#start : new Date(y, m, 1),#}
        {#description : 'long description',#}
        {#className : [\"event\", \"bg-color-greenLight\"],#}
        {#icon : 'fa-check'#}
        {#}, {#}
        {#title : 'Long Event',#}
        {#start : new Date(y, m, d - 5),#}
        {#end : new Date(y, m, d - 2),#}
        {#className : [\"event\", \"bg-color-red\"],#}
        {#icon : 'fa-lock'#}
        {#}, {#}
        {#id : 999,#}
        {#title : 'Repeating Event',#}
        {#start : new Date(y, m, d - 3, 16, 0),#}
        {#allDay : false,#}
        {#className : [\"event\", \"bg-color-blue\"],#}
        {#icon : 'fa-clock-o'#}
        {#}, {#}
        {#id : 999,#}
        {#title : 'Repeating Event',#}
        {#start : new Date(y, m, d + 4, 16, 0),#}
        {#allDay : false,#}
        {#className : [\"event\", \"bg-color-blue\"],#}
        {#icon : 'fa-clock-o'#}
        {#}, {#}
        {#title : 'Meeting',#}
        {#start : new Date(y, m, d, 10, 30),#}
        {#allDay : false,#}
        {#className : [\"event\", \"bg-color-darken\"]#}
        {#}, {#}
        {#title : 'Lunch',#}
        {#start : new Date(y, m, d, 12, 0),#}
        {#end : new Date(y, m, d, 14, 0),#}
        {#allDay : false,#}
        {#className : [\"event\", \"bg-color-darken\"]#}
        {#}, {#}
        {#title : 'Birthday Party',#}
        {#start : new Date(y, m, d + 1, 19, 0),#}
        {#end : new Date(y, m, d + 1, 22, 30),#}
        {#allDay : false,#}
        {#className : [\"event\", \"bg-color-darken\"]#}
        {#}, {#}
        {#title : 'Smartadmin Open Day',#}
        {#start : new Date(y, m, 28),#}
        {#end : new Date(y, m, 29),#}
        {#className : [\"event\", \"bg-color-darken\"]#}
        {#}],#}


        {#eventRender : function(event, element, icon) {#}
        {#if (!event.description == \"\") {#}
        {#element.find('.fc-title').append(\"<br/><span class='ultra-light'>\" + event.description + \"</span>\");#}
        {#}#}
        {#if (!event.icon == \"\") {#}
        {#element.find('.fc-title').append(\"<i class='air air-top-right fa \" + event.icon + \" '></i>\");#}
        {#}#}
        {#}#}
        {#});#}

        {#};#}

        {#/* hide default buttons */#}
        {#\$('.fc-toolbar .fc-right, .fc-toolbar .fc-center').hide();#}

        {#// calendar prev#}
        {#\$('#calendar-buttons #btn-prev').click(function() {#}
        {#\$('.fc-prev-button').click();#}
        {#return false;#}
        {#});#}

        {#// calendar next#}
        {#\$('#calendar-buttons #btn-next').click(function() {#}
        {#\$('.fc-next-button').click();#}
        {#return false;#}
        {#});#}

        {#// calendar today#}
        {#\$('#calendar-buttons #btn-today').click(function() {#}
        {#\$('.fc-button-today').click();#}
        {#return false;#}
        {#});#}

        {#// calendar month#}
        {#\$('#mt').click(function() {#}
        {#\$('#calendar').fullCalendar('changeView', 'month');#}
        {#});#}

        {#// calendar agenda week#}
        {#\$('#ag').click(function() {#}
        {#\$('#calendar').fullCalendar('changeView', 'agendaWeek');#}
        {#});#}

        {#// calendar agenda day#}
        {#\$('#td').click(function() {#}
        {#\$('#calendar').fullCalendar('changeView', 'agendaDay');#}
        {#});#}

        {#/*#}
        {#* CHAT#}
        {#*/#}

        {#\$.filter_input = \$('#filter-chat-list');#}
        {#\$.chat_users_container = \$('#chat-container > .chat-list-body')#}
        {#\$.chat_users = \$('#chat-users')#}
        {#\$.chat_list_btn = \$('#chat-container > .chat-list-open-close');#}
        {#\$.chat_body = \$('#chat-body');#}

        {#/*#}
        {#* LIST FILTER (CHAT)#}
        {#*/#}

        {#// custom css expression for a case-insensitive contains()#}
        {#jQuery.expr[':'].Contains = function(a, i, m) {#}
        {#return (a.textContent || a.innerText || \"\").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;#}
        {#};#}

        {#function listFilter(list) {// header is any element, list is an unordered list#}
        {#// create and add the filter form to the header#}

        {#\$.filter_input.change(function() {#}
        {#var filter = \$(this).val();#}
        {#if (filter) {#}
        {#// this finds all links in a list that contain the input,#}
        {#// and hide the ones not containing the input while showing the ones that do#}
        {#\$.chat_users.find(\"a:not(:Contains(\" + filter + \"))\").parent().slideUp();#}
        {#\$.chat_users.find(\"a:Contains(\" + filter + \")\").parent().slideDown();#}
        {#} else {#}
        {#\$.chat_users.find(\"li\").slideDown();#}
        {#}#}
        {#return false;#}
        {#}).keyup(function() {#}
        {#// fire the above change event after every letter#}
        {#\$(this).change();#}

        {#});#}

        {#}#}

        {#// on dom ready#}
        {#listFilter(\$.chat_users);#}

        {#// open chat list#}
        {#\$.chat_list_btn.click(function() {#}
        {#\$(this).parent('#chat-container').toggleClass('open');#}
        {#})#}

        {#\$.chat_body.animate({#}
        {#scrollTop : \$.chat_body[0].scrollHeight#}
        {#}, 500);#}
        {#{% endif %}#}

    });

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type=\"text/javascript\">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

<!-- IMPORTANT: APP CONFIG -->
<script src=\"{{ asset('js/app.config.js') }}\"></script>
<!-- CUSTOM NOTIFICATION -->
<script src=\"{{ asset('js/notification/SmartNotification.min.js') }}\"></script>

<!-- JARVIS WIDGETS -->
<script src=\"{{ asset('js/smartwidgets/jarvis.widget.min.js') }}\"></script>
<script src=\"{{ asset('js/app.min.js') }}\"></script>


", "default/base_structure/footer.html.twig", "/srv/workspace/backofficenew/templates/default/base_structure/footer.html.twig");
    }
}
