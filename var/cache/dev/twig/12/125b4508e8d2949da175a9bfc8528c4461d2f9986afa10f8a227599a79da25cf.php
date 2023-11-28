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

/* default/index.html.twig */
class __TwigTemplate_78b7d1ea5f5db4a7abda7f907c1a4b09f0b61700dac3e464e998a20a9e464bc8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 2
        $context["bodyClass"] = ("actualpage_" . twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "pathinfo", [], "any", false, false, false, 2), "/"));
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->loadTemplate("default/twig-styles/indexStyle.html.twig", "default/index.html.twig", 5)->display($context);
        // line 6
        echo "    <div class=\"text-center\">

    ";
        // line 8
        if ((0 === twig_compare((isset($context["loggedUser"]) || array_key_exists("loggedUser", $context) ? $context["loggedUser"] : (function () { throw new RuntimeError('Variable "loggedUser" does not exist.', 8, $this->source); })()), ""))) {
            // line 9
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"form-signin homeLoginForm\"  autocomplete=\"off\" method=\"POST\">
            <input type=\"hidden\" name=\"do_login\" value=\"yes\"/>
            <input type=\"hidden\" name=\"challenge\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["challenge"]) || array_key_exists("challenge", $context) ? $context["challenge"] : (function () { throw new RuntimeError('Variable "challenge" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"hashed_password\" value=\"false\"/>
            <img class=\"mb-3\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/admin-icon.png"), "html", null, true);
            echo "\" alt=\"\" width=\"72\" height=\"72\">
            <h1 class=\"h3 mb-3 font-weight-normal\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 14, $this->source); })()), "getLang", [0 => "Sign in"], "method", false, false, false, 14), "html", null, true);
            echo "</h1>
            <label for=\"inputUsername\" class=\"sr-only\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 15, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 15), "html", null, true);
            echo "</label>
            <input type=\"text\" id=\"inputUsername\" name=\"admin_username\" class=\"form-control my-1\" placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 16, $this->source); })()), "getLang", [0 => "Username"], "method", false, false, false, 16), "html", null, true);
            echo "\" required=\"\" autofocus=\"\">
            <label for=\"inputPassword\" class=\"sr-only\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 17, $this->source); })()), "getLang", [0 => "Password"], "method", false, false, false, 17), "html", null, true);
            echo "</label>
            <input type=\"password\" id=\"inputPassword\" name=\"admin_password\" class=\"form-control my-1\" placeholder=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 18, $this->source); })()), "getLang", [0 => "Password"], "method", false, false, false, 18), "html", null, true);
            echo "\" required=\"\">


            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 21, $this->source); })()), "getLang", [0 => "Sign in"], "method", false, false, false, 21), "html", null, true);
            echo "</button>
            <div class=\"erroMessage\"> ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "</div>
            <p class=\"mt-3 mb-1 text-muted\">© ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</p>
        </form>
        </div>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ((0 !== twig_compare((isset($context["loggedUser"]) || array_key_exists("loggedUser", $context) ? $context["loggedUser"] : (function () { throw new RuntimeError('Variable "loggedUser" does not exist.', 28, $this->source); })()), ""))) {
            // line 29
            echo "        <aside id=\"left-panel\">

            <!-- User info -->
            <div class=\"login-info\">
\t\t\t\t<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"show-shortcut\" data-action=\"toggleShortcut\">
\t\t\t\t\t\t<i class=\"fa fa-user\" style=\"    font-size: 21px;    position: relative;    top: 4px;\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["loggedUser"]) || array_key_exists("loggedUser", $context) ? $context["loggedUser"] : (function () { throw new RuntimeError('Variable "loggedUser" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</a>

\t\t\t\t</span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive-->
            <nav>
                <!--
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href=\"\" links. See documentation for details.
                -->

                <ul>
                    <li class=\"\">

                        <a href=\"#\" onclick=\"openDash()\" title=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 58, $this->source); })()), "getLang", [0 => "Dashboard"], "method", false, false, false, 58), "html", null, true);
            echo "\" class=\"active sectionNm\"><i class=\"fa fa-lg fa-fw fa-home\"></i> <span class=\"menu-item-parent\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 58, $this->source); })()), "getLang", [0 => "Dashboard"], "method", false, false, false, 58), "html", null, true);
            echo "</span></a>

                    </li >
                    <li class=\"\">
                        <a href=\"#\" class=\"sectionNm\"><i class=\"fa fa-lg fa-fw fa-cube\"></i> <span class=\"menu-item-parent\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 62, $this->source); })()), "getLang", [0 => "Users"], "method", false, false, false, 62), "html", null, true);
            echo "</span></a>
                        <ul>
                            <li class=\"\">
                                <a href=\"#\" onclick=\"openPage('";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fast_registration");
            echo "')\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 65, $this->source); })()), "getLang", [0 => "Fast registration"], "method", false, false, false, 65), "html", null, true);
            echo "\"><span class=\"menu-item-parent\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 65, $this->source); })()), "getLang", [0 => "Fast registration"], "method", false, false, false, 65), "html", null, true);
            echo "</span></a>
                            </li>
                            <li class=\"\">
                                <a href=\"#\"  onclick=\"openPage('";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_search");
            echo "')\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 68, $this->source); })()), "getLang", [0 => "Search"], "method", false, false, false, 68), "html", null, true);
            echo "\"><span class=\"menu-item-parent\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 68, $this->source); })()), "getLang", [0 => "Search"], "method", false, false, false, 68), "html", null, true);
            echo "</span></a>
                            </li>
                        </ul>
                    </li>
                    ";
            // line 73
            echo "                    ";
            // line 74
            echo "                    ";
            // line 75
            echo "                    ";
            // line 76
            echo "                    ";
            // line 77
            echo "                    ";
            // line 78
            echo "                    ";
            // line 79
            echo "                    ";
            // line 80
            echo "                    ";
            // line 81
            echo "                    ";
            // line 82
            echo "                    ";
            // line 83
            echo "                    ";
            // line 84
            echo "                    ";
            // line 85
            echo "                    ";
            // line 86
            echo "                    ";
            // line 87
            echo "                    ";
            // line 88
            echo "                    ";
            // line 89
            echo "                    ";
            // line 90
            echo "                    ";
            // line 91
            echo "                    ";
            // line 92
            echo "                    ";
            // line 93
            echo "                    ";
            // line 94
            echo "                    ";
            // line 95
            echo "                    ";
            // line 96
            echo "                    ";
            // line 97
            echo "                    ";
            // line 98
            echo "                    ";
            // line 99
            echo "                    ";
            // line 100
            echo "                    ";
            // line 101
            echo "                    ";
            // line 102
            echo "                    ";
            // line 103
            echo "                    ";
            // line 104
            echo "                    ";
            // line 105
            echo "                    ";
            // line 106
            echo "                    ";
            // line 107
            echo "                    ";
            // line 108
            echo "                    ";
            // line 109
            echo "                    ";
            // line 110
            echo "                    ";
            // line 111
            echo "                    ";
            // line 112
            echo "                    ";
            // line 113
            echo "                    ";
            // line 114
            echo "                    ";
            // line 115
            echo "
                    ";
            // line 117
            echo "                    ";
            // line 118
            echo "                    ";
            // line 119
            echo "                    ";
            // line 120
            echo "                    ";
            // line 121
            echo "                    ";
            // line 122
            echo "                    ";
            // line 123
            echo "                    ";
            // line 124
            echo "                    ";
            // line 125
            echo "                    ";
            // line 126
            echo "                    ";
            // line 127
            echo "                    ";
            // line 128
            echo "                    ";
            // line 129
            echo "                    ";
            // line 130
            echo "                    ";
            // line 131
            echo "                    ";
            // line 132
            echo "                    ";
            // line 133
            echo "                    ";
            // line 134
            echo "                    ";
            // line 135
            echo "                    ";
            // line 136
            echo "                    ";
            // line 137
            echo "                    ";
            // line 138
            echo "                    ";
            // line 139
            echo "                    ";
            // line 140
            echo "                    ";
            // line 141
            echo "                    ";
            // line 142
            echo "                    ";
            // line 143
            echo "                    ";
            // line 144
            echo "                    ";
            // line 145
            echo "                    ";
            // line 146
            echo "                    ";
            // line 147
            echo "                    ";
            // line 148
            echo "                    ";
            // line 149
            echo "                    ";
            // line 150
            echo "                    ";
            // line 151
            echo "                    ";
            // line 152
            echo "                    ";
            // line 153
            echo "                    ";
            // line 154
            echo "                    ";
            // line 155
            echo "                    ";
            // line 156
            echo "                    ";
            // line 157
            echo "                    ";
            // line 158
            echo "                    ";
            // line 159
            echo "                    ";
            // line 160
            echo "                    ";
            // line 161
            echo "                    ";
            // line 162
            echo "                    ";
            // line 163
            echo "                    ";
            // line 164
            echo "                    ";
            // line 165
            echo "                    ";
            // line 166
            echo "                    ";
            // line 167
            echo "                    ";
            // line 168
            echo "                    ";
            // line 169
            echo "                    ";
            // line 170
            echo "                    ";
            // line 171
            echo "                    ";
            // line 172
            echo "                    ";
            // line 173
            echo "                    ";
            // line 174
            echo "                    ";
            // line 175
            echo "                    ";
            // line 176
            echo "                    ";
            // line 177
            echo "                    ";
            // line 178
            echo "                    ";
            // line 179
            echo "                    ";
            // line 180
            echo "                    ";
            // line 181
            echo "                    ";
            // line 182
            echo "                    ";
            // line 183
            echo "                    ";
            // line 184
            echo "                    ";
            // line 185
            echo "                    ";
            // line 186
            echo "                    ";
            // line 187
            echo "                    ";
            // line 188
            echo "                    ";
            // line 189
            echo "                    ";
            // line 190
            echo "                    ";
            // line 191
            echo "                    ";
            // line 192
            echo "                    ";
            // line 193
            echo "                    ";
            // line 194
            echo "                    ";
            // line 195
            echo "                    ";
            // line 196
            echo "                    ";
            // line 197
            echo "                    ";
            // line 198
            echo "                    ";
            // line 199
            echo "                    ";
            // line 200
            echo "                    ";
            // line 201
            echo "                    ";
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
            echo "
                    ";
            // line 220
            echo "                    ";
            // line 221
            echo "                    ";
            // line 222
            echo "                    ";
            // line 223
            echo "                    ";
            // line 224
            echo "                    ";
            // line 225
            echo "                    ";
            // line 226
            echo "                    ";
            // line 227
            echo "                    ";
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
            echo "
                    ";
            // line 238
            echo "                    ";
            // line 239
            echo "                    ";
            // line 240
            echo "                    ";
            // line 241
            echo "                    ";
            // line 242
            echo "                    ";
            // line 243
            echo "                    ";
            // line 244
            echo "                    ";
            // line 245
            echo "                    ";
            // line 246
            echo "                    ";
            // line 247
            echo "                    ";
            // line 248
            echo "                    ";
            // line 249
            echo "                    ";
            // line 250
            echo "                    ";
            // line 251
            echo "                    ";
            // line 252
            echo "                    ";
            // line 253
            echo "                    ";
            // line 254
            echo "                    ";
            // line 255
            echo "                    ";
            // line 256
            echo "                    ";
            // line 257
            echo "                    ";
            // line 258
            echo "                    ";
            // line 259
            echo "                    ";
            // line 260
            echo "                    ";
            // line 261
            echo "                    ";
            // line 262
            echo "                    ";
            // line 263
            echo "                    ";
            // line 264
            echo "                    ";
            // line 265
            echo "                    ";
            // line 266
            echo "                    ";
            // line 267
            echo "                    ";
            // line 268
            echo "                    ";
            // line 269
            echo "                    ";
            // line 270
            echo "                    ";
            // line 271
            echo "                    ";
            // line 272
            echo "                    ";
            // line 273
            echo "                    ";
            // line 274
            echo "                    ";
            // line 275
            echo "                    ";
            // line 276
            echo "                    ";
            // line 277
            echo "                    ";
            // line 278
            echo "                    ";
            // line 279
            echo "                    ";
            // line 280
            echo "                    ";
            // line 281
            echo "                    ";
            // line 282
            echo "                    ";
            // line 283
            echo "                    ";
            // line 284
            echo "                    ";
            // line 285
            echo "                    ";
            // line 286
            echo "                    ";
            // line 287
            echo "                    ";
            // line 288
            echo "                    ";
            // line 289
            echo "                    ";
            // line 290
            echo "                    ";
            // line 291
            echo "                    ";
            // line 292
            echo "                    ";
            // line 293
            echo "                    ";
            // line 294
            echo "                    ";
            // line 295
            echo "                    ";
            // line 296
            echo "                    ";
            // line 297
            echo "                    ";
            // line 298
            echo "                    ";
            // line 299
            echo "                    ";
            // line 300
            echo "                    ";
            // line 301
            echo "                    ";
            // line 302
            echo "                    ";
            // line 303
            echo "                    ";
            // line 304
            echo "                    ";
            // line 305
            echo "                    ";
            // line 306
            echo "                    ";
            // line 307
            echo "                    ";
            // line 308
            echo "                    ";
            // line 309
            echo "                    ";
            // line 310
            echo "                    ";
            // line 311
            echo "                    ";
            // line 312
            echo "                    ";
            // line 313
            echo "                    ";
            // line 314
            echo "                    ";
            // line 315
            echo "                    ";
            // line 316
            echo "                    ";
            // line 317
            echo "                    ";
            // line 318
            echo "                    ";
            // line 319
            echo "                    ";
            // line 320
            echo "                    ";
            // line 321
            echo "                    ";
            // line 322
            echo "                    ";
            // line 323
            echo "                    ";
            // line 324
            echo "                    ";
            // line 325
            echo "                    ";
            // line 326
            echo "                    ";
            // line 327
            echo "                    ";
            // line 328
            echo "                    ";
            // line 329
            echo "                    ";
            // line 330
            echo "                    ";
            // line 331
            echo "                    ";
            // line 332
            echo "                    ";
            // line 333
            echo "                    ";
            // line 334
            echo "                    ";
            // line 335
            echo "
                    ";
            // line 337
            echo "
                    ";
            // line 339
            echo "                    ";
            // line 340
            echo "                    ";
            // line 341
            echo "                    ";
            // line 342
            echo "                    ";
            // line 343
            echo "                    ";
            // line 344
            echo "                    ";
            // line 345
            echo "                    ";
            // line 346
            echo "                    ";
            // line 347
            echo "                    ";
            // line 348
            echo "                    ";
            // line 349
            echo "                    ";
            // line 350
            echo "                    ";
            // line 351
            echo "                    ";
            // line 352
            echo "                    ";
            // line 353
            echo "                    ";
            // line 354
            echo "                    ";
            // line 355
            echo "                    ";
            // line 356
            echo "                    ";
            // line 357
            echo "                    ";
            // line 358
            echo "                    ";
            // line 359
            echo "
                    ";
            // line 361
            echo "                    ";
            // line 362
            echo "                    ";
            // line 363
            echo "                    ";
            // line 364
            echo "                    ";
            // line 365
            echo "                    ";
            // line 366
            echo "                    ";
            // line 367
            echo "                    ";
            // line 368
            echo "                    ";
            // line 369
            echo "                    ";
            // line 370
            echo "                    ";
            // line 371
            echo "                    ";
            // line 372
            echo "                    ";
            // line 373
            echo "                    ";
            // line 374
            echo "                    ";
            // line 375
            echo "                    ";
            // line 376
            echo "                    ";
            // line 377
            echo "                    ";
            // line 378
            echo "                    ";
            // line 379
            echo "                    ";
            // line 380
            echo "                    ";
            // line 381
            echo "
                    ";
            // line 383
            echo "                    ";
            // line 384
            echo "                    ";
            // line 385
            echo "                    ";
            // line 386
            echo "                    ";
            // line 387
            echo "                    ";
            // line 388
            echo "                    ";
            // line 389
            echo "                    ";
            // line 390
            echo "                    ";
            // line 391
            echo "                    ";
            // line 392
            echo "                    ";
            // line 393
            echo "                    ";
            // line 394
            echo "                    ";
            // line 395
            echo "                    ";
            // line 396
            echo "                    ";
            // line 397
            echo "                    ";
            // line 398
            echo "                    ";
            // line 399
            echo "                    ";
            // line 400
            echo "                    ";
            // line 401
            echo "
                    ";
            // line 403
            echo "                    ";
            // line 404
            echo "                    ";
            // line 405
            echo "                    ";
            // line 406
            echo "                    ";
            // line 407
            echo "                    ";
            // line 408
            echo "                    ";
            // line 409
            echo "                    ";
            // line 410
            echo "                    ";
            // line 411
            echo "                    ";
            // line 412
            echo "                    ";
            // line 413
            echo "                    ";
            // line 414
            echo "                    ";
            // line 415
            echo "                    ";
            // line 416
            echo "                    ";
            // line 417
            echo "                    ";
            // line 418
            echo "                    ";
            // line 419
            echo "                    ";
            // line 420
            echo "                    ";
            // line 421
            echo "
                    ";
            // line 423
            echo "                    ";
            // line 424
            echo "                    ";
            // line 425
            echo "                    ";
            // line 426
            echo "                    ";
            // line 427
            echo "                    ";
            // line 428
            echo "                    ";
            // line 429
            echo "                    ";
            // line 430
            echo "                    ";
            // line 431
            echo "                    ";
            // line 432
            echo "                    ";
            // line 433
            echo "                    ";
            // line 434
            echo "                    ";
            // line 435
            echo "                    ";
            // line 436
            echo "                    ";
            // line 437
            echo "                    ";
            // line 438
            echo "                    ";
            // line 439
            echo "                    ";
            // line 440
            echo "                    ";
            // line 441
            echo "
                    ";
            // line 443
            echo "                    ";
            // line 444
            echo "                    ";
            // line 445
            echo "                    ";
            // line 446
            echo "                    ";
            // line 447
            echo "                    ";
            // line 448
            echo "                    ";
            // line 449
            echo "                    ";
            // line 450
            echo "                    ";
            // line 451
            echo "                    ";
            // line 452
            echo "                    ";
            // line 453
            echo "                    ";
            // line 454
            echo "                    ";
            // line 455
            echo "                    ";
            // line 456
            echo "                    ";
            // line 457
            echo "                    ";
            // line 458
            echo "                    ";
            // line 459
            echo "                    ";
            // line 460
            echo "                    ";
            // line 461
            echo "
                    ";
            // line 463
            echo "
                    ";
            // line 465
            echo "                    ";
            // line 466
            echo "                    ";
            // line 467
            echo "                    ";
            // line 468
            echo "                    ";
            // line 469
            echo "                </ul>
            </nav>


            <span class=\"minifyme\" data-action=\"minifyMenu\">
\t\t\t\t<i class=\"fa fa-arrow-circle-left hit\"></i>
\t\t\t</span>

        </aside>
        <!-- END NAVIGATION -->


        <!-- MAIN PANEL -->
        <div id=\"main\" role=\"main\">

        <!-- RIBBON -->
        <div id=\"ribbon\">

\t\t\t\t<span class=\"ribbon-button-alignment\">
\t\t\t\t\t<span id=\"refresh\" class=\"btn btn-ribbon\" data-action=\"resetWidgets\" data-title=\"refresh\"  rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings.\" data-html=\"true\">
\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t</span>
\t\t\t\t</span>

            <!-- breadcrumb -->
            <ol class=\"breadcrumb\">
                <li>";
            // line 495
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 495, $this->source); })()), "getLang", [0 => "Home"], "method", false, false, false, 495), "html", null, true);
            echo "</li><li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 495, $this->source); })()), "getLang", [0 => "Dashboard"], "method", false, false, false, 495), "html", null, true);
            echo "</li>
            </ol>
            <!-- end breadcrumb -->

            <!-- You can also add more buttons to the
            ribbon for further usability

            Example below:

            <span class=\"ribbon-button-alignment pull-right\">
            <span id=\"search\" class=\"btn btn-ribbon hidden-xs\" data-title=\"search\"><i class=\"fa-grid\"></i> Change Grid</span>
            <span id=\"add\" class=\"btn btn-ribbon hidden-xs\" data-title=\"add\"><i class=\"fa-plus\"></i> Add</span>
            <span id=\"search\" class=\"btn btn-ribbon\" data-title=\"search\"><i class=\"fa-search\"></i> <span class=\"hidden-mobile\">Search</span></span>
            </span> -->

        </div>
        <!-- END RIBBON -->

        <!-- MAIN CONTENT -->
        <div id=\"content\">

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
                    <h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-home\"></i> <span id=\"sectionName\"> ";
            // line 518
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 518, $this->source); })()), "getLang", [0 => "Dashboard"], "method", false, false, false, 518), "html", null, true);
            echo " </span> <span> > </span> <span id=\"subSectionName\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 518, $this->source); })()), "getLang", [0 => "Hello"], "method", false, false, false, 518), "html", null, true);
            echo "</span></h1>
                </div>
                <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-8\">
                    <ul id=\"sparks\" class=\"\">
                        ";
            // line 523
            echo "                        ";
            // line 524
            echo "                        ";
            // line 525
            echo "                        ";
            // line 526
            echo "                        ";
            // line 527
            echo "                        ";
            // line 528
            echo "
                    </ul>
                </div>
            </div>
            <!-- widget grid -->
            ";
            // line 534
            echo "
            ";
            // line 536
            echo "            ";
            // line 537
            echo "            ";
            // line 538
            echo "            ";
            // line 539
            echo "            ";
            // line 540
            echo "            ";
            // line 541
            echo "            ";
            // line 542
            echo "
            ";
            // line 544
            echo "            ";
            // line 545
            echo "            ";
            // line 546
            echo "            ";
            // line 547
            echo "            ";
            // line 548
            echo "            ";
            // line 549
            echo "            ";
            // line 550
            echo "            ";
            // line 553
            echo "            ";
            // line 554
            echo "            ";
            // line 555
            echo "            ";
            // line 556
            echo "
            ";
            // line 558
            echo "            ";
            // line 559
            echo "            ";
            // line 560
            echo "            ";
            // line 561
            echo "
            ";
            // line 563
            echo "            ";
            // line 564
            echo "            ";
            // line 565
            echo "
            ";
            // line 567
            echo "            ";
            // line 568
            echo "            ";
            // line 569
            echo "            ";
            // line 570
            echo "
            ";
            // line 572
            echo "
            ";
            // line 574
            echo "            ";
            // line 575
            echo "            ";
            // line 576
            echo "            ";
            // line 577
            echo "
            ";
            // line 579
            echo "            ";
            // line 580
            echo "            ";
            // line 581
            echo "
            ";
            // line 583
            echo "            ";
            // line 584
            echo "            ";
            // line 585
            echo "            ";
            // line 586
            echo "            ";
            // line 587
            echo "            ";
            // line 588
            echo "            ";
            // line 589
            echo "            ";
            // line 590
            echo "            ";
            // line 591
            echo "            ";
            // line 592
            echo "            ";
            // line 593
            echo "            ";
            // line 594
            echo "
            ";
            // line 596
            echo "            ";
            // line 597
            echo "
            ";
            // line 599
            echo "            ";
            // line 600
            echo "            ";
            // line 601
            echo "            ";
            // line 602
            echo "            ";
            // line 603
            echo "            ";
            // line 604
            echo "            ";
            // line 605
            echo "            ";
            // line 606
            echo "            ";
            // line 607
            echo "            ";
            // line 608
            echo "            ";
            // line 609
            echo "            ";
            // line 610
            echo "            ";
            // line 611
            echo "            ";
            // line 612
            echo "            ";
            // line 613
            echo "            ";
            // line 614
            echo "            ";
            // line 615
            echo "
            ";
            // line 617
            echo "
            ";
            // line 619
            echo "
            ";
            // line 621
            echo "            ";
            // line 622
            echo "
            ";
            // line 624
            echo "            ";
            // line 625
            echo "
            ";
            // line 627
            echo "            ";
            // line 628
            echo "            ";
            // line 629
            echo "            ";
            // line 630
            echo "            ";
            // line 631
            echo "            ";
            // line 632
            echo "            ";
            // line 633
            echo "            ";
            // line 634
            echo "            ";
            // line 635
            echo "            ";
            // line 636
            echo "            ";
            // line 637
            echo "            ";
            // line 638
            echo "            ";
            // line 639
            echo "            ";
            // line 640
            echo "            ";
            // line 641
            echo "            ";
            // line 642
            echo "            ";
            // line 643
            echo "            ";
            // line 644
            echo "            ";
            // line 645
            echo "            ";
            // line 646
            echo "            ";
            // line 647
            echo "            ";
            // line 648
            echo "            ";
            // line 649
            echo "            ";
            // line 650
            echo "            ";
            // line 651
            echo "            ";
            // line 652
            echo "            ";
            // line 653
            echo "            ";
            // line 654
            echo "            ";
            // line 655
            echo "            ";
            // line 656
            echo "            ";
            // line 657
            echo "            ";
            // line 658
            echo "            ";
            // line 659
            echo "            ";
            // line 660
            echo "            ";
            // line 661
            echo "            ";
            // line 662
            echo "            ";
            // line 663
            echo "            ";
            // line 664
            echo "            ";
            // line 665
            echo "            ";
            // line 666
            echo "            ";
            // line 667
            echo "            ";
            // line 668
            echo "            ";
            // line 669
            echo "            ";
            // line 670
            echo "            ";
            // line 671
            echo "            ";
            // line 672
            echo "            ";
            // line 673
            echo "            ";
            // line 674
            echo "            ";
            // line 675
            echo "            ";
            // line 676
            echo "            ";
            // line 677
            echo "            ";
            // line 678
            echo "            ";
            // line 679
            echo "            ";
            // line 680
            echo "            ";
            // line 681
            echo "            ";
            // line 682
            echo "            ";
            // line 683
            echo "            ";
            // line 684
            echo "            ";
            // line 685
            echo "            ";
            // line 686
            echo "            ";
            // line 687
            echo "            ";
            // line 688
            echo "            ";
            // line 689
            echo "            ";
            // line 690
            echo "            ";
            // line 691
            echo "            ";
            // line 692
            echo "            ";
            // line 693
            echo "            ";
            // line 694
            echo "
            ";
            // line 696
            echo "            ";
            // line 697
            echo "
            ";
            // line 699
            echo "            ";
            // line 700
            echo "
            ";
            // line 702
            echo "
            ";
            // line 704
            echo "            ";
            // line 705
            echo "            ";
            // line 706
            echo "            ";
            // line 707
            echo "            ";
            // line 708
            echo "            ";
            // line 709
            echo "            ";
            // line 710
            echo "
            ";
            // line 712
            echo "            ";
            // line 713
            echo "            ";
            // line 714
            echo "            ";
            // line 715
            echo "            ";
            // line 716
            echo "            ";
            // line 717
            echo "            ";
            // line 718
            echo "            ";
            // line 719
            echo "            ";
            // line 720
            echo "            ";
            // line 721
            echo "            ";
            // line 722
            echo "
            ";
            // line 724
            echo "
            ";
            // line 726
            echo "            ";
            // line 727
            echo "            ";
            // line 728
            echo "            ";
            // line 729
            echo "
            ";
            // line 731
            echo "            ";
            // line 732
            echo "
            ";
            // line 734
            echo "
            ";
            // line 736
            echo "
            ";
            // line 738
            echo "
            ";
            // line 740
            echo "            ";
            // line 741
            echo "            ";
            // line 742
            echo "            ";
            // line 743
            echo "            ";
            // line 744
            echo "            ";
            // line 745
            echo "            ";
            // line 746
            echo "            ";
            // line 747
            echo "            ";
            // line 748
            echo "            ";
            // line 749
            echo "
            ";
            // line 751
            echo "            ";
            // line 752
            echo "            ";
            // line 753
            echo "            ";
            // line 754
            echo "            ";
            // line 755
            echo "            ";
            // line 756
            echo "            ";
            // line 757
            echo "            ";
            // line 758
            echo "            ";
            // line 759
            echo "            ";
            // line 760
            echo "            ";
            // line 761
            echo "
            ";
            // line 763
            echo "
            ";
            // line 765
            echo "            ";
            // line 766
            echo "            ";
            // line 767
            echo "            ";
            // line 768
            echo "            ";
            // line 769
            echo "            ";
            // line 770
            echo "
            ";
            // line 772
            echo "            ";
            // line 773
            echo "
            ";
            // line 775
            echo "            ";
            // line 776
            echo "            ";
            // line 777
            echo "            ";
            // line 778
            echo "
            ";
            // line 780
            echo "            ";
            // line 781
            echo "
            ";
            // line 783
            echo "
            <!-- row -->

            <div class=\"row\" id=\"printAjax\">


                ";
            // line 790
            echo "
                ";
            // line 792
            echo "                ";
            // line 793
            echo "
                ";
            // line 795
            echo "                ";
            // line 796
            echo "
                ";
            // line 798
            echo "                ";
            // line 799
            echo "                ";
            // line 800
            echo "                ";
            // line 801
            echo "                ";
            // line 802
            echo "                ";
            // line 803
            echo "                ";
            // line 804
            echo "                ";
            // line 807
            echo "
                ";
            // line 809
            echo "                ";
            // line 810
            echo "                ";
            // line 811
            echo "                ";
            // line 812
            echo "                ";
            // line 813
            echo "                ";
            // line 814
            echo "                ";
            // line 815
            echo "                ";
            // line 816
            echo "                ";
            // line 817
            echo "                ";
            // line 818
            echo "
                ";
            // line 820
            echo "                ";
            // line 821
            echo "                ";
            // line 822
            echo "                ";
            // line 823
            echo "                ";
            // line 824
            echo "                ";
            // line 825
            echo "                ";
            // line 826
            echo "                ";
            // line 827
            echo "                ";
            // line 828
            echo "                ";
            // line 829
            echo "
                ";
            // line 831
            echo "                ";
            // line 832
            echo "
                ";
            // line 834
            echo "                ";
            // line 835
            echo "                ";
            // line 836
            echo "
                ";
            // line 838
            echo "                ";
            // line 839
            echo "
                ";
            // line 841
            echo "                ";
            // line 842
            echo "                ";
            // line 843
            echo "                ";
            // line 844
            echo "                ";
            // line 845
            echo "                ";
            // line 846
            echo "                ";
            // line 847
            echo "                ";
            // line 848
            echo "                ";
            // line 849
            echo "                ";
            // line 850
            echo "                ";
            // line 851
            echo "                ";
            // line 852
            echo "                ";
            // line 853
            echo "                ";
            // line 854
            echo "                ";
            // line 855
            echo "                ";
            // line 856
            echo "                ";
            // line 857
            echo "                ";
            // line 858
            echo "                ";
            // line 859
            echo "                ";
            // line 860
            echo "                ";
            // line 861
            echo "                ";
            // line 862
            echo "                ";
            // line 863
            echo "                ";
            // line 864
            echo "                ";
            // line 865
            echo "                ";
            // line 866
            echo "                ";
            // line 867
            echo "                ";
            // line 868
            echo "                ";
            // line 869
            echo "                ";
            // line 870
            echo "                ";
            // line 871
            echo "                ";
            // line 872
            echo "                ";
            // line 873
            echo "                ";
            // line 874
            echo "                ";
            // line 875
            echo "                ";
            // line 876
            echo "                ";
            // line 877
            echo "                ";
            // line 878
            echo "                ";
            // line 879
            echo "                ";
            // line 880
            echo "                ";
            // line 881
            echo "                ";
            // line 882
            echo "                ";
            // line 883
            echo "                ";
            // line 884
            echo "                ";
            // line 885
            echo "                ";
            // line 886
            echo "                ";
            // line 887
            echo "                ";
            // line 888
            echo "                ";
            // line 889
            echo "                ";
            // line 890
            echo "                ";
            // line 891
            echo "                ";
            // line 892
            echo "                ";
            // line 893
            echo "                ";
            // line 894
            echo "                ";
            // line 895
            echo "                ";
            // line 896
            echo "                ";
            // line 897
            echo "                ";
            // line 898
            echo "                ";
            // line 899
            echo "                ";
            // line 900
            echo "                ";
            // line 901
            echo "                ";
            // line 902
            echo "                ";
            // line 903
            echo "                ";
            // line 904
            echo "                ";
            // line 905
            echo "                ";
            // line 906
            echo "                ";
            // line 907
            echo "                ";
            // line 908
            echo "                ";
            // line 909
            echo "                ";
            // line 910
            echo "                ";
            // line 911
            echo "                ";
            // line 912
            echo "                ";
            // line 913
            echo "                ";
            // line 914
            echo "                ";
            // line 915
            echo "                ";
            // line 916
            echo "                ";
            // line 917
            echo "                ";
            // line 918
            echo "                ";
            // line 919
            echo "                ";
            // line 920
            echo "                ";
            // line 921
            echo "                ";
            // line 922
            echo "                ";
            // line 923
            echo "                ";
            // line 924
            echo "                ";
            // line 925
            echo "                ";
            // line 926
            echo "                ";
            // line 927
            echo "                ";
            // line 928
            echo "                ";
            // line 929
            echo "                ";
            // line 930
            echo "                ";
            // line 931
            echo "                ";
            // line 932
            echo "                ";
            // line 933
            echo "                ";
            // line 934
            echo "                ";
            // line 935
            echo "                ";
            // line 936
            echo "                ";
            // line 937
            echo "                ";
            // line 938
            echo "                ";
            // line 939
            echo "                ";
            // line 940
            echo "                ";
            // line 941
            echo "                ";
            // line 942
            echo "                ";
            // line 943
            echo "                ";
            // line 944
            echo "                ";
            // line 945
            echo "                ";
            // line 946
            echo "                ";
            // line 947
            echo "                ";
            // line 948
            echo "                ";
            // line 949
            echo "                ";
            // line 950
            echo "                ";
            // line 951
            echo "                ";
            // line 952
            echo "                ";
            // line 953
            echo "                ";
            // line 954
            echo "                ";
            // line 955
            echo "                ";
            // line 956
            echo "                ";
            // line 957
            echo "                ";
            // line 958
            echo "                ";
            // line 959
            echo "                ";
            // line 960
            echo "                ";
            // line 961
            echo "                ";
            // line 962
            echo "                ";
            // line 963
            echo "                ";
            // line 964
            echo "                ";
            // line 965
            echo "                ";
            // line 966
            echo "                ";
            // line 967
            echo "                ";
            // line 968
            echo "                ";
            // line 969
            echo "                ";
            // line 970
            echo "                ";
            // line 971
            echo "                ";
            // line 972
            echo "                ";
            // line 973
            echo "                ";
            // line 974
            echo "                ";
            // line 975
            echo "                ";
            // line 976
            echo "                ";
            // line 977
            echo "                ";
            // line 978
            echo "                ";
            // line 979
            echo "                ";
            // line 980
            echo "                ";
            // line 981
            echo "                ";
            // line 982
            echo "                ";
            // line 983
            echo "                ";
            // line 984
            echo "                ";
            // line 985
            echo "                ";
            // line 986
            echo "                ";
            // line 987
            echo "                ";
            // line 988
            echo "                ";
            // line 989
            echo "                ";
            // line 990
            echo "                ";
            // line 991
            echo "                ";
            // line 992
            echo "                ";
            // line 993
            echo "                ";
            // line 994
            echo "                ";
            // line 995
            echo "                ";
            // line 996
            echo "                ";
            // line 997
            echo "                ";
            // line 998
            echo "                ";
            // line 999
            echo "                ";
            // line 1000
            echo "                ";
            // line 1001
            echo "                ";
            // line 1002
            echo "                ";
            // line 1003
            echo "                ";
            // line 1004
            echo "                ";
            // line 1005
            echo "                ";
            // line 1006
            echo "                ";
            // line 1007
            echo "                ";
            // line 1008
            echo "                ";
            // line 1009
            echo "                ";
            // line 1010
            echo "                ";
            // line 1011
            echo "                ";
            // line 1012
            echo "                ";
            // line 1013
            echo "                ";
            // line 1014
            echo "                ";
            // line 1015
            echo "                ";
            // line 1016
            echo "                ";
            // line 1017
            echo "                ";
            // line 1018
            echo "                ";
            // line 1019
            echo "                ";
            // line 1020
            echo "                ";
            // line 1021
            echo "                ";
            // line 1022
            echo "                ";
            // line 1023
            echo "                ";
            // line 1024
            echo "                ";
            // line 1025
            echo "                ";
            // line 1026
            echo "                ";
            // line 1027
            echo "                ";
            // line 1028
            echo "                ";
            // line 1029
            echo "                ";
            // line 1030
            echo "                ";
            // line 1031
            echo "                ";
            // line 1032
            echo "                ";
            // line 1033
            echo "                ";
            // line 1034
            echo "                ";
            // line 1035
            echo "                ";
            // line 1036
            echo "                ";
            // line 1037
            echo "                ";
            // line 1038
            echo "                ";
            // line 1039
            echo "                ";
            // line 1040
            echo "                ";
            // line 1041
            echo "                ";
            // line 1042
            echo "                ";
            // line 1043
            echo "                ";
            // line 1044
            echo "                ";
            // line 1045
            echo "                ";
            // line 1046
            echo "                ";
            // line 1047
            echo "                ";
            // line 1048
            echo "                ";
            // line 1049
            echo "                ";
            // line 1050
            echo "                ";
            // line 1051
            echo "                ";
            // line 1052
            echo "                ";
            // line 1053
            echo "                ";
            // line 1054
            echo "                ";
            // line 1055
            echo "
                ";
            // line 1057
            echo "
                ";
            // line 1059
            echo "
                ";
            // line 1061
            echo "                ";
            // line 1062
            echo "                ";
            // line 1063
            echo "                ";
            // line 1064
            echo "
                ";
            // line 1066
            echo "                ";
            // line 1067
            echo "
                ";
            // line 1069
            echo "                ";
            // line 1070
            echo "
                ";
            // line 1072
            echo "                ";
            // line 1073
            echo "                ";
            // line 1074
            echo "                ";
            // line 1075
            echo "                ";
            // line 1076
            echo "                ";
            // line 1077
            echo "                ";
            // line 1078
            echo "                ";
            // line 1081
            echo "
                ";
            // line 1083
            echo "                ";
            // line 1084
            echo "                ";
            // line 1085
            echo "                ";
            // line 1086
            echo "                ";
            // line 1087
            echo "
                ";
            // line 1089
            echo "                ";
            // line 1090
            echo "
                ";
            // line 1092
            echo "                ";
            // line 1093
            echo "                ";
            // line 1094
            echo "                ";
            // line 1095
            echo "                ";
            // line 1096
            echo "                ";
            // line 1097
            echo "                ";
            // line 1098
            echo "                ";
            // line 1099
            echo "                ";
            // line 1100
            echo "                ";
            // line 1101
            echo "
                ";
            // line 1103
            echo "                ";
            // line 1104
            echo "                ";
            // line 1105
            echo "                ";
            // line 1106
            echo "                ";
            // line 1107
            echo "                ";
            // line 1108
            echo "                ";
            // line 1109
            echo "                ";
            // line 1110
            echo "                ";
            // line 1111
            echo "                ";
            // line 1112
            echo "                ";
            // line 1113
            echo "                ";
            // line 1114
            echo "                ";
            // line 1115
            echo "                ";
            // line 1116
            echo "                ";
            // line 1117
            echo "                ";
            // line 1118
            echo "                ";
            // line 1119
            echo "                ";
            // line 1120
            echo "                ";
            // line 1121
            echo "                ";
            // line 1122
            echo "                ";
            // line 1123
            echo "                ";
            // line 1124
            echo "                ";
            // line 1125
            echo "                ";
            // line 1126
            echo "                ";
            // line 1127
            echo "                ";
            // line 1128
            echo "                ";
            // line 1129
            echo "                ";
            // line 1130
            echo "                ";
            // line 1131
            echo "                ";
            // line 1132
            echo "                ";
            // line 1133
            echo "                ";
            // line 1134
            echo "                ";
            // line 1135
            echo "                ";
            // line 1136
            echo "                ";
            // line 1137
            echo "                ";
            // line 1138
            echo "                ";
            // line 1139
            echo "                ";
            // line 1140
            echo "                ";
            // line 1141
            echo "                ";
            // line 1142
            echo "                ";
            // line 1143
            echo "                ";
            // line 1144
            echo "                ";
            // line 1145
            echo "
                ";
            // line 1147
            echo "                ";
            // line 1148
            echo "                ";
            // line 1149
            echo "                ";
            // line 1150
            echo "                ";
            // line 1151
            echo "                ";
            // line 1152
            echo "                ";
            // line 1153
            echo "                ";
            // line 1154
            echo "                ";
            // line 1155
            echo "                ";
            // line 1156
            echo "                ";
            // line 1157
            echo "                ";
            // line 1158
            echo "
                ";
            // line 1160
            echo "                ";
            // line 1161
            echo "
                ";
            // line 1163
            echo "                ";
            // line 1164
            echo "                ";
            // line 1165
            echo "                ";
            // line 1166
            echo "
                ";
            // line 1168
            echo "
                ";
            // line 1170
            echo "
                ";
            // line 1172
            echo "
                ";
            // line 1174
            echo "                <!-- end widget grid -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
    ";
        }
        // line 1182
        echo "
    <script>

        function openFullscreen() {
            var elem = document.body;
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }

        function openPage(url){
            \$.ajax({
                url: url,
                method: 'POST',
                success: function(data){
                    if(data == -1){

                    }else{
                        \$('#printAjax').empty().append(data);
                    }

                },
                error: function(data){
                    \$.bigBox({
                        title : \"Error\",
                        content : \"Something went wrong!\",
                        color : \"#C46A69\",
                        //timeout: 6000,
                        icon : \"fa fa-warning shake animated\",
                        number : \"1\",
                        timeout : 6000
                    });
                }
            })
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2271 => 1182,  2261 => 1174,  2258 => 1172,  2255 => 1170,  2252 => 1168,  2249 => 1166,  2247 => 1165,  2245 => 1164,  2243 => 1163,  2240 => 1161,  2238 => 1160,  2235 => 1158,  2233 => 1157,  2231 => 1156,  2229 => 1155,  2227 => 1154,  2225 => 1153,  2223 => 1152,  2221 => 1151,  2219 => 1150,  2217 => 1149,  2215 => 1148,  2213 => 1147,  2210 => 1145,  2208 => 1144,  2206 => 1143,  2204 => 1142,  2202 => 1141,  2200 => 1140,  2198 => 1139,  2196 => 1138,  2194 => 1137,  2192 => 1136,  2190 => 1135,  2188 => 1134,  2186 => 1133,  2184 => 1132,  2182 => 1131,  2180 => 1130,  2178 => 1129,  2176 => 1128,  2174 => 1127,  2172 => 1126,  2170 => 1125,  2168 => 1124,  2166 => 1123,  2164 => 1122,  2162 => 1121,  2160 => 1120,  2158 => 1119,  2156 => 1118,  2154 => 1117,  2152 => 1116,  2150 => 1115,  2148 => 1114,  2146 => 1113,  2144 => 1112,  2142 => 1111,  2140 => 1110,  2138 => 1109,  2136 => 1108,  2134 => 1107,  2132 => 1106,  2130 => 1105,  2128 => 1104,  2126 => 1103,  2123 => 1101,  2121 => 1100,  2119 => 1099,  2117 => 1098,  2115 => 1097,  2113 => 1096,  2111 => 1095,  2109 => 1094,  2107 => 1093,  2105 => 1092,  2102 => 1090,  2100 => 1089,  2097 => 1087,  2095 => 1086,  2093 => 1085,  2091 => 1084,  2089 => 1083,  2086 => 1081,  2084 => 1078,  2082 => 1077,  2080 => 1076,  2078 => 1075,  2076 => 1074,  2074 => 1073,  2072 => 1072,  2069 => 1070,  2067 => 1069,  2064 => 1067,  2062 => 1066,  2059 => 1064,  2057 => 1063,  2055 => 1062,  2053 => 1061,  2050 => 1059,  2047 => 1057,  2044 => 1055,  2042 => 1054,  2040 => 1053,  2038 => 1052,  2036 => 1051,  2034 => 1050,  2032 => 1049,  2030 => 1048,  2028 => 1047,  2026 => 1046,  2024 => 1045,  2022 => 1044,  2020 => 1043,  2018 => 1042,  2016 => 1041,  2014 => 1040,  2012 => 1039,  2010 => 1038,  2008 => 1037,  2006 => 1036,  2004 => 1035,  2002 => 1034,  2000 => 1033,  1998 => 1032,  1996 => 1031,  1994 => 1030,  1992 => 1029,  1990 => 1028,  1988 => 1027,  1986 => 1026,  1984 => 1025,  1982 => 1024,  1980 => 1023,  1978 => 1022,  1976 => 1021,  1974 => 1020,  1972 => 1019,  1970 => 1018,  1968 => 1017,  1966 => 1016,  1964 => 1015,  1962 => 1014,  1960 => 1013,  1958 => 1012,  1956 => 1011,  1954 => 1010,  1952 => 1009,  1950 => 1008,  1948 => 1007,  1946 => 1006,  1944 => 1005,  1942 => 1004,  1940 => 1003,  1938 => 1002,  1936 => 1001,  1934 => 1000,  1932 => 999,  1930 => 998,  1928 => 997,  1926 => 996,  1924 => 995,  1922 => 994,  1920 => 993,  1918 => 992,  1916 => 991,  1914 => 990,  1912 => 989,  1910 => 988,  1908 => 987,  1906 => 986,  1904 => 985,  1902 => 984,  1900 => 983,  1898 => 982,  1896 => 981,  1894 => 980,  1892 => 979,  1890 => 978,  1888 => 977,  1886 => 976,  1884 => 975,  1882 => 974,  1880 => 973,  1878 => 972,  1876 => 971,  1874 => 970,  1872 => 969,  1870 => 968,  1868 => 967,  1866 => 966,  1864 => 965,  1862 => 964,  1860 => 963,  1858 => 962,  1856 => 961,  1854 => 960,  1852 => 959,  1850 => 958,  1848 => 957,  1846 => 956,  1844 => 955,  1842 => 954,  1840 => 953,  1838 => 952,  1836 => 951,  1834 => 950,  1832 => 949,  1830 => 948,  1828 => 947,  1826 => 946,  1824 => 945,  1822 => 944,  1820 => 943,  1818 => 942,  1816 => 941,  1814 => 940,  1812 => 939,  1810 => 938,  1808 => 937,  1806 => 936,  1804 => 935,  1802 => 934,  1800 => 933,  1798 => 932,  1796 => 931,  1794 => 930,  1792 => 929,  1790 => 928,  1788 => 927,  1786 => 926,  1784 => 925,  1782 => 924,  1780 => 923,  1778 => 922,  1776 => 921,  1774 => 920,  1772 => 919,  1770 => 918,  1768 => 917,  1766 => 916,  1764 => 915,  1762 => 914,  1760 => 913,  1758 => 912,  1756 => 911,  1754 => 910,  1752 => 909,  1750 => 908,  1748 => 907,  1746 => 906,  1744 => 905,  1742 => 904,  1740 => 903,  1738 => 902,  1736 => 901,  1734 => 900,  1732 => 899,  1730 => 898,  1728 => 897,  1726 => 896,  1724 => 895,  1722 => 894,  1720 => 893,  1718 => 892,  1716 => 891,  1714 => 890,  1712 => 889,  1710 => 888,  1708 => 887,  1706 => 886,  1704 => 885,  1702 => 884,  1700 => 883,  1698 => 882,  1696 => 881,  1694 => 880,  1692 => 879,  1690 => 878,  1688 => 877,  1686 => 876,  1684 => 875,  1682 => 874,  1680 => 873,  1678 => 872,  1676 => 871,  1674 => 870,  1672 => 869,  1670 => 868,  1668 => 867,  1666 => 866,  1664 => 865,  1662 => 864,  1660 => 863,  1658 => 862,  1656 => 861,  1654 => 860,  1652 => 859,  1650 => 858,  1648 => 857,  1646 => 856,  1644 => 855,  1642 => 854,  1640 => 853,  1638 => 852,  1636 => 851,  1634 => 850,  1632 => 849,  1630 => 848,  1628 => 847,  1626 => 846,  1624 => 845,  1622 => 844,  1620 => 843,  1618 => 842,  1616 => 841,  1613 => 839,  1611 => 838,  1608 => 836,  1606 => 835,  1604 => 834,  1601 => 832,  1599 => 831,  1596 => 829,  1594 => 828,  1592 => 827,  1590 => 826,  1588 => 825,  1586 => 824,  1584 => 823,  1582 => 822,  1580 => 821,  1578 => 820,  1575 => 818,  1573 => 817,  1571 => 816,  1569 => 815,  1567 => 814,  1565 => 813,  1563 => 812,  1561 => 811,  1559 => 810,  1557 => 809,  1554 => 807,  1552 => 804,  1550 => 803,  1548 => 802,  1546 => 801,  1544 => 800,  1542 => 799,  1540 => 798,  1537 => 796,  1535 => 795,  1532 => 793,  1530 => 792,  1527 => 790,  1519 => 783,  1516 => 781,  1514 => 780,  1511 => 778,  1509 => 777,  1507 => 776,  1505 => 775,  1502 => 773,  1500 => 772,  1497 => 770,  1495 => 769,  1493 => 768,  1491 => 767,  1489 => 766,  1487 => 765,  1484 => 763,  1481 => 761,  1479 => 760,  1477 => 759,  1475 => 758,  1473 => 757,  1471 => 756,  1469 => 755,  1467 => 754,  1465 => 753,  1463 => 752,  1461 => 751,  1458 => 749,  1456 => 748,  1454 => 747,  1452 => 746,  1450 => 745,  1448 => 744,  1446 => 743,  1444 => 742,  1442 => 741,  1440 => 740,  1437 => 738,  1434 => 736,  1431 => 734,  1428 => 732,  1426 => 731,  1423 => 729,  1421 => 728,  1419 => 727,  1417 => 726,  1414 => 724,  1411 => 722,  1409 => 721,  1407 => 720,  1405 => 719,  1403 => 718,  1401 => 717,  1399 => 716,  1397 => 715,  1395 => 714,  1393 => 713,  1391 => 712,  1388 => 710,  1386 => 709,  1384 => 708,  1382 => 707,  1380 => 706,  1378 => 705,  1376 => 704,  1373 => 702,  1370 => 700,  1368 => 699,  1365 => 697,  1363 => 696,  1360 => 694,  1358 => 693,  1356 => 692,  1354 => 691,  1352 => 690,  1350 => 689,  1348 => 688,  1346 => 687,  1344 => 686,  1342 => 685,  1340 => 684,  1338 => 683,  1336 => 682,  1334 => 681,  1332 => 680,  1330 => 679,  1328 => 678,  1326 => 677,  1324 => 676,  1322 => 675,  1320 => 674,  1318 => 673,  1316 => 672,  1314 => 671,  1312 => 670,  1310 => 669,  1308 => 668,  1306 => 667,  1304 => 666,  1302 => 665,  1300 => 664,  1298 => 663,  1296 => 662,  1294 => 661,  1292 => 660,  1290 => 659,  1288 => 658,  1286 => 657,  1284 => 656,  1282 => 655,  1280 => 654,  1278 => 653,  1276 => 652,  1274 => 651,  1272 => 650,  1270 => 649,  1268 => 648,  1266 => 647,  1264 => 646,  1262 => 645,  1260 => 644,  1258 => 643,  1256 => 642,  1254 => 641,  1252 => 640,  1250 => 639,  1248 => 638,  1246 => 637,  1244 => 636,  1242 => 635,  1240 => 634,  1238 => 633,  1236 => 632,  1234 => 631,  1232 => 630,  1230 => 629,  1228 => 628,  1226 => 627,  1223 => 625,  1221 => 624,  1218 => 622,  1216 => 621,  1213 => 619,  1210 => 617,  1207 => 615,  1205 => 614,  1203 => 613,  1201 => 612,  1199 => 611,  1197 => 610,  1195 => 609,  1193 => 608,  1191 => 607,  1189 => 606,  1187 => 605,  1185 => 604,  1183 => 603,  1181 => 602,  1179 => 601,  1177 => 600,  1175 => 599,  1172 => 597,  1170 => 596,  1167 => 594,  1165 => 593,  1163 => 592,  1161 => 591,  1159 => 590,  1157 => 589,  1155 => 588,  1153 => 587,  1151 => 586,  1149 => 585,  1147 => 584,  1145 => 583,  1142 => 581,  1140 => 580,  1138 => 579,  1135 => 577,  1133 => 576,  1131 => 575,  1129 => 574,  1126 => 572,  1123 => 570,  1121 => 569,  1119 => 568,  1117 => 567,  1114 => 565,  1112 => 564,  1110 => 563,  1107 => 561,  1105 => 560,  1103 => 559,  1101 => 558,  1098 => 556,  1096 => 555,  1094 => 554,  1092 => 553,  1090 => 550,  1088 => 549,  1086 => 548,  1084 => 547,  1082 => 546,  1080 => 545,  1078 => 544,  1075 => 542,  1073 => 541,  1071 => 540,  1069 => 539,  1067 => 538,  1065 => 537,  1063 => 536,  1060 => 534,  1053 => 528,  1051 => 527,  1049 => 526,  1047 => 525,  1045 => 524,  1043 => 523,  1034 => 518,  1006 => 495,  978 => 469,  976 => 468,  974 => 467,  972 => 466,  970 => 465,  967 => 463,  964 => 461,  962 => 460,  960 => 459,  958 => 458,  956 => 457,  954 => 456,  952 => 455,  950 => 454,  948 => 453,  946 => 452,  944 => 451,  942 => 450,  940 => 449,  938 => 448,  936 => 447,  934 => 446,  932 => 445,  930 => 444,  928 => 443,  925 => 441,  923 => 440,  921 => 439,  919 => 438,  917 => 437,  915 => 436,  913 => 435,  911 => 434,  909 => 433,  907 => 432,  905 => 431,  903 => 430,  901 => 429,  899 => 428,  897 => 427,  895 => 426,  893 => 425,  891 => 424,  889 => 423,  886 => 421,  884 => 420,  882 => 419,  880 => 418,  878 => 417,  876 => 416,  874 => 415,  872 => 414,  870 => 413,  868 => 412,  866 => 411,  864 => 410,  862 => 409,  860 => 408,  858 => 407,  856 => 406,  854 => 405,  852 => 404,  850 => 403,  847 => 401,  845 => 400,  843 => 399,  841 => 398,  839 => 397,  837 => 396,  835 => 395,  833 => 394,  831 => 393,  829 => 392,  827 => 391,  825 => 390,  823 => 389,  821 => 388,  819 => 387,  817 => 386,  815 => 385,  813 => 384,  811 => 383,  808 => 381,  806 => 380,  804 => 379,  802 => 378,  800 => 377,  798 => 376,  796 => 375,  794 => 374,  792 => 373,  790 => 372,  788 => 371,  786 => 370,  784 => 369,  782 => 368,  780 => 367,  778 => 366,  776 => 365,  774 => 364,  772 => 363,  770 => 362,  768 => 361,  765 => 359,  763 => 358,  761 => 357,  759 => 356,  757 => 355,  755 => 354,  753 => 353,  751 => 352,  749 => 351,  747 => 350,  745 => 349,  743 => 348,  741 => 347,  739 => 346,  737 => 345,  735 => 344,  733 => 343,  731 => 342,  729 => 341,  727 => 340,  725 => 339,  722 => 337,  719 => 335,  717 => 334,  715 => 333,  713 => 332,  711 => 331,  709 => 330,  707 => 329,  705 => 328,  703 => 327,  701 => 326,  699 => 325,  697 => 324,  695 => 323,  693 => 322,  691 => 321,  689 => 320,  687 => 319,  685 => 318,  683 => 317,  681 => 316,  679 => 315,  677 => 314,  675 => 313,  673 => 312,  671 => 311,  669 => 310,  667 => 309,  665 => 308,  663 => 307,  661 => 306,  659 => 305,  657 => 304,  655 => 303,  653 => 302,  651 => 301,  649 => 300,  647 => 299,  645 => 298,  643 => 297,  641 => 296,  639 => 295,  637 => 294,  635 => 293,  633 => 292,  631 => 291,  629 => 290,  627 => 289,  625 => 288,  623 => 287,  621 => 286,  619 => 285,  617 => 284,  615 => 283,  613 => 282,  611 => 281,  609 => 280,  607 => 279,  605 => 278,  603 => 277,  601 => 276,  599 => 275,  597 => 274,  595 => 273,  593 => 272,  591 => 271,  589 => 270,  587 => 269,  585 => 268,  583 => 267,  581 => 266,  579 => 265,  577 => 264,  575 => 263,  573 => 262,  571 => 261,  569 => 260,  567 => 259,  565 => 258,  563 => 257,  561 => 256,  559 => 255,  557 => 254,  555 => 253,  553 => 252,  551 => 251,  549 => 250,  547 => 249,  545 => 248,  543 => 247,  541 => 246,  539 => 245,  537 => 244,  535 => 243,  533 => 242,  531 => 241,  529 => 240,  527 => 239,  525 => 238,  522 => 236,  520 => 235,  518 => 234,  516 => 233,  514 => 232,  512 => 231,  510 => 230,  508 => 229,  506 => 228,  504 => 227,  502 => 226,  500 => 225,  498 => 224,  496 => 223,  494 => 222,  492 => 221,  490 => 220,  487 => 218,  485 => 217,  483 => 216,  481 => 215,  479 => 214,  477 => 213,  475 => 212,  473 => 211,  471 => 210,  469 => 209,  467 => 208,  465 => 207,  463 => 206,  461 => 205,  459 => 204,  457 => 203,  455 => 202,  453 => 201,  451 => 200,  449 => 199,  447 => 198,  445 => 197,  443 => 196,  441 => 195,  439 => 194,  437 => 193,  435 => 192,  433 => 191,  431 => 190,  429 => 189,  427 => 188,  425 => 187,  423 => 186,  421 => 185,  419 => 184,  417 => 183,  415 => 182,  413 => 181,  411 => 180,  409 => 179,  407 => 178,  405 => 177,  403 => 176,  401 => 175,  399 => 174,  397 => 173,  395 => 172,  393 => 171,  391 => 170,  389 => 169,  387 => 168,  385 => 167,  383 => 166,  381 => 165,  379 => 164,  377 => 163,  375 => 162,  373 => 161,  371 => 160,  369 => 159,  367 => 158,  365 => 157,  363 => 156,  361 => 155,  359 => 154,  357 => 153,  355 => 152,  353 => 151,  351 => 150,  349 => 149,  347 => 148,  345 => 147,  343 => 146,  341 => 145,  339 => 144,  337 => 143,  335 => 142,  333 => 141,  331 => 140,  329 => 139,  327 => 138,  325 => 137,  323 => 136,  321 => 135,  319 => 134,  317 => 133,  315 => 132,  313 => 131,  311 => 130,  309 => 129,  307 => 128,  305 => 127,  303 => 126,  301 => 125,  299 => 124,  297 => 123,  295 => 122,  293 => 121,  291 => 120,  289 => 119,  287 => 118,  285 => 117,  282 => 115,  280 => 114,  278 => 113,  276 => 112,  274 => 111,  272 => 110,  270 => 109,  268 => 108,  266 => 107,  264 => 106,  262 => 105,  260 => 104,  258 => 103,  256 => 102,  254 => 101,  252 => 100,  250 => 99,  248 => 98,  246 => 97,  244 => 96,  242 => 95,  240 => 94,  238 => 93,  236 => 92,  234 => 91,  232 => 90,  230 => 89,  228 => 88,  226 => 87,  224 => 86,  222 => 85,  220 => 84,  218 => 83,  216 => 82,  214 => 81,  212 => 80,  210 => 79,  208 => 78,  206 => 77,  204 => 76,  202 => 75,  200 => 74,  198 => 73,  187 => 68,  177 => 65,  171 => 62,  162 => 58,  139 => 38,  128 => 29,  126 => 28,  123 => 27,  116 => 23,  112 => 22,  108 => 21,  102 => 18,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  82 => 13,  77 => 11,  71 => 9,  69 => 8,  65 => 6,  62 => 5,  55 => 4,  47 => 1,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set bodyClass = 'actualpage_'~app.request.pathinfo|trim('/') %}

{% block body %}
    {% include (\"default/twig-styles/indexStyle.html.twig\") %}
    <div class=\"text-center\">

    {% if loggedUser == '' %}
        <form action=\"{{ path('login') }}\" class=\"form-signin homeLoginForm\"  autocomplete=\"off\" method=\"POST\">
            <input type=\"hidden\" name=\"do_login\" value=\"yes\"/>
            <input type=\"hidden\" name=\"challenge\" value=\"{{ challenge }}\"/>
            <input type=\"hidden\" name=\"hashed_password\" value=\"false\"/>
            <img class=\"mb-3\" src=\"{{ asset('img/icons/admin-icon.png') }}\" alt=\"\" width=\"72\" height=\"72\">
            <h1 class=\"h3 mb-3 font-weight-normal\">{{ translator.getLang('Sign in') }}</h1>
            <label for=\"inputUsername\" class=\"sr-only\">{{ translator.getLang('Username') }}</label>
            <input type=\"text\" id=\"inputUsername\" name=\"admin_username\" class=\"form-control my-1\" placeholder=\"{{ translator.getLang('Username') }}\" required=\"\" autofocus=\"\">
            <label for=\"inputPassword\" class=\"sr-only\">{{ translator.getLang('Password') }}</label>
            <input type=\"password\" id=\"inputPassword\" name=\"admin_password\" class=\"form-control my-1\" placeholder=\"{{ translator.getLang('Password') }}\" required=\"\">


            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">{{ translator.getLang('Sign in') }}</button>
            <div class=\"erroMessage\"> {{ errorMessage }}</div>
            <p class=\"mt-3 mb-1 text-muted\">© {{ 'now' | date('Y') }}</p>
        </form>
        </div>
    {% endif %}

    {% if loggedUser != '' %}
        <aside id=\"left-panel\">

            <!-- User info -->
            <div class=\"login-info\">
\t\t\t\t<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

\t\t\t\t\t<a href=\"javascript:void(0);\" id=\"show-shortcut\" data-action=\"toggleShortcut\">
\t\t\t\t\t\t<i class=\"fa fa-user\" style=\"    font-size: 21px;    position: relative;    top: 4px;\"></i>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t{{ loggedUser }}
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t</a>

\t\t\t\t</span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive-->
            <nav>
                <!--
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href=\"\" links. See documentation for details.
                -->

                <ul>
                    <li class=\"\">

                        <a href=\"#\" onclick=\"openDash()\" title=\"{{ translator.getLang('Dashboard') }}\" class=\"active sectionNm\"><i class=\"fa fa-lg fa-fw fa-home\"></i> <span class=\"menu-item-parent\">{{ translator.getLang('Dashboard') }}</span></a>

                    </li >
                    <li class=\"\">
                        <a href=\"#\" class=\"sectionNm\"><i class=\"fa fa-lg fa-fw fa-cube\"></i> <span class=\"menu-item-parent\">{{ translator.getLang('Users') }}</span></a>
                        <ul>
                            <li class=\"\">
                                <a href=\"#\" onclick=\"openPage('{{ path('fast_registration') }}')\" title=\"{{ translator.getLang('Fast registration') }}\"><span class=\"menu-item-parent\">{{ translator.getLang('Fast registration') }}</span></a>
                            </li>
                            <li class=\"\">
                                <a href=\"#\"  onclick=\"openPage('{{ path('user_search') }}')\" title=\"{{ translator.getLang('Search') }}\"><span class=\"menu-item-parent\">{{ translator.getLang('Search') }}</span></a>
                            </li>
                        </ul>
                    </li>
                    {#<li class=\"top-menu-invisible\">#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-cube txt-color-blue\"></i> <span class=\"menu-item-parent\">SmartAdmin Intel</span></a>#}
                    {#<ul>#}
                    {#<li class=\"\">#}
                    {#<a href=\"layouts.html\" title=\"Dashboard\"><i class=\"fa fa-lg fa-fw fa-gear\"></i> <span class=\"menu-item-parent\">App Layouts</span></a>#}
                    {#</li>#}
                    {#<li class=\"\">#}
                    {#<a href=\"skins.html\" title=\"Dashboard\"><i class=\"fa fa-lg fa-fw fa-picture-o\"></i> <span class=\"menu-item-parent\">Prebuilt Skins</span></a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"applayout.html\"><i class=\"fa fa-cube\"></i> App Settings</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"inbox.html\"><i class=\"fa fa-lg fa-fw fa-inbox\"></i> <span class=\"menu-item-parent\">Outlook</span> <span class=\"badge pull-right inbox-badge margin-right-13\">14</span></a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-bar-chart-o\"></i> <span class=\"menu-item-parent\">Graphs</span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"flot.html\">Flot Chart</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"morris.html\">Morris Charts</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"sparkline-charts.html\">Sparklines</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"easypie-charts.html\">EasyPieCharts</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"dygraphs.html\">Dygraphs</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"chartjs.html\">Chart.js</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"hchartable.html\">HighchartTable <span class=\"badge pull-right inbox-badge bg-color-yellow\">new</span></a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}

                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-pencil-square-o\"></i> <span class=\"menu-item-parent\">Forms</span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"form-elements.html\">Smart Form Elements</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"form-templates.html\">Smart Form Layouts</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"validation.html\">Smart Form Validation</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"bootstrap-forms.html\">Bootstrap Form Elements</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"bootstrap-validator.html\">Bootstrap Form Validation</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"plugins.html\">Form Plugins</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"wizard.html\">Wizards</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"other-editors.html\">Bootstrap Editors</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"dropzone.html\">Dropzone</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"image-editor.html\">Image Cropping</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"ckeditor.html\">CK Editor</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-desktop\"></i> <span class=\"menu-item-parent\">UI Elements</span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"general-elements.html\">General Elements</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"buttons.html\">Buttons</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\">Icons</a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"fa.html\"><i class=\"fa fa-plane\"></i> Font Awesome</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"glyph.html\"><i class=\"glyphicon glyphicon-plane\"></i> Glyph Icons</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"flags.html\"><i class=\"fa fa-flag\"></i> Flags</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"grid.html\">Grid</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"treeview.html\">Tree View</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"nestable-list.html\">Nestable Lists</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"jqui.html\">JQuery UI</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"typography.html\">Typography</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\">Six Level Menu</a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-folder-open\"></i> Item #2</a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-folder-open\"></i> Sub #2.1 </a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-file-text\"></i> Item #2.1.1</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-plus\"></i> Expand</a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-file-text\"></i> File</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-folder-open\"></i> Item #3</a>#}

                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-folder-open\"></i> 3ed Level </a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-file-text\"></i> File</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-fw fa-file-text\"></i> File</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\" class=\"inactive\"><i class=\"fa fa-fw fa-folder-open\"></i> Item #4 (disabled)</a>#}
                    {#</li>#}

                    {#</ul>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"widgets.html\"><i class=\"fa fa-lg fa-fw fa-list-alt\"></i> <span class=\"menu-item-parent\">Widgets</span></a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-cloud\"><em>3</em></i> <span class=\"menu-item-parent\">Cool Features!</span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"calendar.html\"><i class=\"fa fa-lg fa-fw fa-calendar\"></i> <span class=\"menu-item-parent\">Calendar</span></a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"gmap-xml.html\"><i class=\"fa fa-lg fa-fw fa-map-marker\"></i> <span class=\"menu-item-parent\">GMap Skins</span><span class=\"badge bg-color-greenLight pull-right inbox-badge\">9</span></a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-puzzle-piece\"></i> <span class=\"menu-item-parent\">App Views</span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"projects.html\"><i class=\"fa fa-file-text-o\"></i> Projects</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"blog.html\"><i class=\"fa fa-paragraph\"></i> Blog</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"gallery.html\"><i class=\"fa fa-picture-o\"></i> Gallery</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-comments\"></i> Forum Layout</a>#}
                    {#<ul>#}
                    {#<li><a href=\"forum.html\">General View</a></li>#}
                    {#<li><a href=\"forum-topic.html\">Topic View</a></li>#}
                    {#<li><a href=\"forum-post.html\">Post View</a></li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"profile.html\"><i class=\"fa fa-group\"></i> Profile</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"timeline.html\"><i class=\"fa fa-clock-o\"></i> Timeline</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"search.html\"><i class=\"fa fa-search\"></i>  Search Page</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-shopping-cart\"></i> <span class=\"menu-item-parent\">E-Commerce</span></a>#}
                    {#<ul>#}
                    {#<li><a href=\"orders.html\">Orders</a></li>#}
                    {#<li><a href=\"products-view.html\">Products View</a></li>#}
                    {#<li><a href=\"products-detail.html\">Products Detail</a></li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-windows\"></i> <span class=\"menu-item-parent\">Miscellaneous</span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<a href=\"../Landing_Page/\" target=\"_blank\">Landing Page <i class=\"fa fa-external-link\"></i></a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"pricing-table.html\">Pricing Tables</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"invoice.html\">Invoice</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"login.html\" target=\"_top\">Login</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"register.html\" target=\"_top\">Register</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"forgotpassword.html\" target=\"_top\">Forgot Password</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"lock.html\" target=\"_top\">Locked Screen</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"error404.html\">Error 404</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"error500.html\">Error 500</a>#}
                    {#</li>#}
                    {#<li>#}
                    {#<a href=\"blank_.html\">Blank Page</a>#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                    {#<li class=\"chat-users top-menu-invisible\">#}
                    {#<a href=\"#\"><i class=\"fa fa-lg fa-fw fa-comment-o\"><em class=\"bg-color-pink flash animated\">!</em></i> <span class=\"menu-item-parent\">Smart Chat API <sup>beta</sup></span></a>#}
                    {#<ul>#}
                    {#<li>#}
                    {#<!-- DISPLAY USERS -->#}
                    {#<div class=\"display-users\">#}

                    {#<input class=\"form-control chat-user-filter\" placeholder=\"Filter\" type=\"text\">#}

                    {#<a href=\"#\" class=\"usr\"#}
                    {#data-chat-id=\"cha1\"#}
                    {#data-chat-fname=\"Sadi\"#}
                    {#data-chat-lname=\"Orlaf\"#}
                    {#data-chat-status=\"busy\"#}
                    {#data-chat-alertmsg=\"Sadi Orlaf is in a meeting. Please do not disturb!\"#}
                    {#data-chat-alertshow=\"true\"#}
                    {#data-rel=\"popover-hover\"#}
                    {#data-placement=\"right\"#}
                    {#data-html=\"true\"#}
                    {#data-content=\"#}
                    {#<div class='usr-card'>#}
                    {#<img src='img/avatars/5.png' alt='Sadi Orlaf'>#}
                    {#<div class='usr-card-content'>#}
                    {#<h3>Sadi Orlaf</h3>#}
                    {#<p>Marketing Executive</p>#}
                    {#</div>#}
                    {#</div>#}
                    {#\">#}
                    {#<i></i>Sadi Orlaf#}
                    {#</a>#}

                    {#<a href=\"#\" class=\"usr\"#}
                    {#data-chat-id=\"cha2\"#}
                    {#data-chat-fname=\"Jessica\"#}
                    {#data-chat-lname=\"Dolof\"#}
                    {#data-chat-status=\"online\"#}
                    {#data-chat-alertmsg=\"\"#}
                    {#data-chat-alertshow=\"false\"#}
                    {#data-rel=\"popover-hover\"#}
                    {#data-placement=\"right\"#}
                    {#data-html=\"true\"#}
                    {#data-content=\"#}
                    {#<div class='usr-card'>#}
                    {#<img src='img/avatars/1.png' alt='Jessica Dolof'>#}
                    {#<div class='usr-card-content'>#}
                    {#<h3>Jessica Dolof</h3>#}
                    {#<p>Sales Administrator</p>#}
                    {#</div>#}
                    {#</div>#}
                    {#\">#}
                    {#<i></i>Jessica Dolof#}
                    {#</a>#}

                    {#<a href=\"#\" class=\"usr\"#}
                    {#data-chat-id=\"cha3\"#}
                    {#data-chat-fname=\"Zekarburg\"#}
                    {#data-chat-lname=\"Almandalie\"#}
                    {#data-chat-status=\"online\"#}
                    {#data-rel=\"popover-hover\"#}
                    {#data-placement=\"right\"#}
                    {#data-html=\"true\"#}
                    {#data-content=\"#}
                    {#<div class='usr-card'>#}
                    {#<img src='img/avatars/3.png' alt='Zekarburg Almandalie'>#}
                    {#<div class='usr-card-content'>#}
                    {#<h3>Zekarburg Almandalie</h3>#}
                    {#<p>Sales Admin</p>#}
                    {#</div>#}
                    {#</div>#}
                    {#\">#}
                    {#<i></i>Zekarburg Almandalie#}
                    {#</a>#}

                    {#<a href=\"#\" class=\"usr\"#}
                    {#data-chat-id=\"cha4\"#}
                    {#data-chat-fname=\"Barley\"#}
                    {#data-chat-lname=\"Krazurkth\"#}
                    {#data-chat-status=\"away\"#}
                    {#data-rel=\"popover-hover\"#}
                    {#data-placement=\"right\"#}
                    {#data-html=\"true\"#}
                    {#data-content=\"#}
                    {#<div class='usr-card'>#}
                    {#<img src='img/avatars/4.png' alt='Barley Krazurkth'>#}
                    {#<div class='usr-card-content'>#}
                    {#<h3>Barley Krazurkth</h3>#}
                    {#<p>Sales Director</p>#}
                    {#</div>#}
                    {#</div>#}
                    {#\">#}
                    {#<i></i>Barley Krazurkth#}
                    {#</a>#}

                    {#<a href=\"#\" class=\"usr offline\"#}
                    {#data-chat-id=\"cha5\"#}
                    {#data-chat-fname=\"Farhana\"#}
                    {#data-chat-lname=\"Amrin\"#}
                    {#data-chat-status=\"incognito\"#}
                    {#data-rel=\"popover-hover\"#}
                    {#data-placement=\"right\"#}
                    {#data-html=\"true\"#}
                    {#data-content=\"#}
                    {#<div class='usr-card'>#}
                    {#<img src='img/avatars/female.png' alt='Farhana Amrin'>#}
                    {#<div class='usr-card-content'>#}
                    {#<h3>Farhana Amrin</h3>#}
                    {#<p>Support Admin <small><i class='fa fa-music'></i> Playing Beethoven Classics</small></p>#}
                    {#</div>#}
                    {#</div>#}
                    {#\">#}
                    {#<i></i>Farhana Amrin (offline)#}
                    {#</a>#}

                    {#<a href=\"#\" class=\"usr offline\"#}
                    {#data-chat-id=\"cha6\"#}
                    {#data-chat-fname=\"Lezley\"#}
                    {#data-chat-lname=\"Jacob\"#}
                    {#data-chat-status=\"incognito\"#}
                    {#data-rel=\"popover-hover\"#}
                    {#data-placement=\"right\"#}
                    {#data-html=\"true\"#}
                    {#data-content=\"#}
                    {#<div class='usr-card'>#}
                    {#<img src='img/avatars/male.png' alt='Lezley Jacob'>#}
                    {#<div class='usr-card-content'>#}
                    {#<h3>Lezley Jacob</h3>#}
                    {#<p>Sales Director</p>#}
                    {#</div>#}
                    {#</div>#}
                    {#\">#}
                    {#<i></i>Lezley Jacob (offline)#}
                    {#</a>#}

                    {#<a href=\"ajax/chat.html\" class=\"btn btn-xs btn-default btn-block sa-chat-learnmore-btn\">About the API</a>#}

                    {#</div>#}
                    {#<!-- END DISPLAY USERS -->#}
                    {#</li>#}
                    {#</ul>#}
                    {#</li>#}
                </ul>
            </nav>


            <span class=\"minifyme\" data-action=\"minifyMenu\">
\t\t\t\t<i class=\"fa fa-arrow-circle-left hit\"></i>
\t\t\t</span>

        </aside>
        <!-- END NAVIGATION -->


        <!-- MAIN PANEL -->
        <div id=\"main\" role=\"main\">

        <!-- RIBBON -->
        <div id=\"ribbon\">

\t\t\t\t<span class=\"ribbon-button-alignment\">
\t\t\t\t\t<span id=\"refresh\" class=\"btn btn-ribbon\" data-action=\"resetWidgets\" data-title=\"refresh\"  rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings.\" data-html=\"true\">
\t\t\t\t\t\t<i class=\"fa fa-refresh\"></i>
\t\t\t\t\t</span>
\t\t\t\t</span>

            <!-- breadcrumb -->
            <ol class=\"breadcrumb\">
                <li>{{ translator.getLang('Home') }}</li><li>{{ translator.getLang('Dashboard') }}</li>
            </ol>
            <!-- end breadcrumb -->

            <!-- You can also add more buttons to the
            ribbon for further usability

            Example below:

            <span class=\"ribbon-button-alignment pull-right\">
            <span id=\"search\" class=\"btn btn-ribbon hidden-xs\" data-title=\"search\"><i class=\"fa-grid\"></i> Change Grid</span>
            <span id=\"add\" class=\"btn btn-ribbon hidden-xs\" data-title=\"add\"><i class=\"fa-plus\"></i> Add</span>
            <span id=\"search\" class=\"btn btn-ribbon\" data-title=\"search\"><i class=\"fa-search\"></i> <span class=\"hidden-mobile\">Search</span></span>
            </span> -->

        </div>
        <!-- END RIBBON -->

        <!-- MAIN CONTENT -->
        <div id=\"content\">

            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-7 col-md-7 col-lg-4\">
                    <h1 class=\"page-title txt-color-blueDark\"><i class=\"fa-fw fa fa-home\"></i> <span id=\"sectionName\"> {{ translator.getLang('Dashboard') }} </span> <span> > </span> <span id=\"subSectionName\"> {{ translator.getLang('Hello') }}</span></h1>
                </div>
                <div class=\"col-xs-12 col-sm-5 col-md-5 col-lg-8\">
                    <ul id=\"sparks\" class=\"\">
                        {#<li class=\"sparks-info\">#}
                        {#<h5> {{ translator.getLang('My Income') }} <span class=\"txt-color-blue\">{{ credit }}{{ currency|raw }}</span></h5>#}
                        {#<div class=\"sparkline txt-color-blue hidden-mobile hidden-md hidden-sm\">#}
                        {#1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471#}
                        {#</div>#}
                        {#</li>#}

                    </ul>
                </div>
            </div>
            <!-- widget grid -->
            {#<section id=\"widget-grid\" class=\"\">#}

            {#<!-- row -->#}
            {#<div class=\"row\">#}
            {#<article class=\"col-sm-12\">#}
            {#<!-- new widget -->#}
            {#<div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-togglebutton=\"false\" data-widget-editbutton=\"false\" data-widget-fullscreenbutton=\"false\" data-widget-colorbutton=\"false\" data-widget-deletebutton=\"false\">#}
            {#<!-- widget options:#}
            {#usage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">#}

            {#data-widget-colorbutton=\"false\"#}
            {#data-widget-editbutton=\"false\"#}
            {#data-widget-togglebutton=\"false\"#}
            {#data-widget-deletebutton=\"false\"#}
            {#data-widget-fullscreenbutton=\"false\"#}
            {#data-widget-custombutton=\"false\"#}
            {#data-widget-collapsed=\"true\"#}
            {#data-widget-sortable=\"false\"#}

            {#-->#}
            {#<header>#}
            {#<span class=\"widget-icon\"> <i class=\"glyphicon glyphicon-stats txt-color-darken\"></i> </span>#}
            {#<h2>Live Feeds </h2>#}

            {#<ul class=\"nav nav-tabs pull-right in\" id=\"myTab\">#}
            {#<li class=\"active\">#}
            {#<a data-toggle=\"tab\" href=\"#s1\"><i class=\"fa fa-clock-o\"></i> <span class=\"hidden-mobile hidden-tablet\">Live Stats</span></a>#}
            {#</li>#}

            {#<li>#}
            {#<a data-toggle=\"tab\" href=\"#s2\"><i class=\"fa fa-facebook\"></i> <span class=\"hidden-mobile hidden-tablet\">Social Network</span></a>#}
            {#</li>#}

            {#<li>#}
            {#<a data-toggle=\"tab\" href=\"#s3\"><i class=\"fa fa-dollar\"></i> <span class=\"hidden-mobile hidden-tablet\">Revenue</span></a>#}
            {#</li>#}
            {#</ul>#}

            {#</header>#}

            {#<!-- widget div-->#}
            {#<div class=\"no-padding\">#}
            {#<!-- widget edit box -->#}
            {#<div class=\"jarviswidget-editbox\">#}

            {#test#}
            {#</div>#}
            {#<!-- end widget edit box -->#}

            {#<div class=\"widget-body\">#}
            {#<!-- content -->#}
            {#<div id=\"myTabContent\" class=\"tab-content\">#}
            {#<div class=\"tab-pane fade active in padding-10 no-padding-bottom\" id=\"s1\">#}
            {#<div class=\"row no-space\">#}
            {#<div class=\"col-xs-12 col-sm-12 col-md-8 col-lg-8\">#}
            {#<span class=\"demo-liveupdate-1\"> <span class=\"onoffswitch-title\">Live switch</span> <span class=\"onoffswitch\">#}
            {#<input type=\"checkbox\" name=\"start_interval\" class=\"onoffswitch-checkbox\" id=\"start_interval\">#}
            {#<label class=\"onoffswitch-label\" for=\"start_interval\">#}
            {#<span class=\"onoffswitch-inner\" data-swchon-text=\"ON\" data-swchoff-text=\"OFF\"></span>#}
            {#<span class=\"onoffswitch-switch\"></span> </label> </span> </span>#}
            {#<div id=\"updating-chart\" class=\"chart-large txt-color-blue\"></div>#}

            {#</div>#}
            {#<div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4 show-stats\">#}

            {#<div class=\"row\">#}
            {#<div class=\"col-xs-6 col-sm-6 col-md-12 col-lg-12\"> <span class=\"text\"> My Tasks <span class=\"pull-right\">130/200</span> </span>#}
            {#<div class=\"progress\">#}
            {#<div class=\"progress-bar bg-color-blueDark\" style=\"width: 65%;\"></div>#}
            {#</div> </div>#}
            {#<div class=\"col-xs-6 col-sm-6 col-md-12 col-lg-12\"> <span class=\"text\"> Transfered <span class=\"pull-right\">440 GB</span> </span>#}
            {#<div class=\"progress\">#}
            {#<div class=\"progress-bar bg-color-blue\" style=\"width: 34%;\"></div>#}
            {#</div> </div>#}
            {#<div class=\"col-xs-6 col-sm-6 col-md-12 col-lg-12\"> <span class=\"text\"> Bugs Squashed<span class=\"pull-right\">77%</span> </span>#}
            {#<div class=\"progress\">#}
            {#<div class=\"progress-bar bg-color-blue\" style=\"width: 77%;\"></div>#}
            {#</div> </div>#}
            {#<div class=\"col-xs-6 col-sm-6 col-md-12 col-lg-12\"> <span class=\"text\"> User Testing <span class=\"pull-right\">7 Days</span> </span>#}
            {#<div class=\"progress\">#}
            {#<div class=\"progress-bar bg-color-greenLight\" style=\"width: 84%;\"></div>#}
            {#</div> </div>#}

            {#<span class=\"show-stat-buttons\"> <span class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <a href=\"javascript:void(0);\" class=\"btn btn-default btn-block hidden-xs\">Generate PDF</a> </span> <span class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\"> <a href=\"javascript:void(0);\" class=\"btn btn-default btn-block hidden-xs\">Report a bug</a> </span> </span>#}

            {#</div>#}

            {#</div>#}
            {#</div>#}

            {#<div class=\"show-stat-microcharts\">#}
            {#<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">#}

            {#<div class=\"easy-pie-chart txt-color-orangeDark\" data-percent=\"33\" data-pie-size=\"50\">#}
            {#<span class=\"percent percent-sign\">35</span>#}
            {#</div>#}
            {#<span class=\"easy-pie-title\"> Server Load <i class=\"fa fa-caret-up icon-color-bad\"></i> </span>#}
            {#<ul class=\"smaller-stat hidden-sm pull-right\">#}
            {#<li>#}
            {#<span class=\"label bg-color-greenLight\"><i class=\"fa fa-caret-up\"></i> 97%</span>#}
            {#</li>#}
            {#<li>#}
            {#<span class=\"label bg-color-blueLight\"><i class=\"fa fa-caret-down\"></i> 44%</span>#}
            {#</li>#}
            {#</ul>#}
            {#<div class=\"sparkline txt-color-greenLight hidden-sm hidden-md pull-right\" data-sparkline-type=\"line\" data-sparkline-height=\"33px\" data-sparkline-width=\"70px\" data-fill-color=\"transparent\">#}
            {#130, 187, 250, 257, 200, 210, 300, 270, 363, 247, 270, 363, 247#}
            {#</div>#}
            {#</div>#}
            {#<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">#}
            {#<div class=\"easy-pie-chart txt-color-greenLight\" data-percent=\"78.9\" data-pie-size=\"50\">#}
            {#<span class=\"percent percent-sign\">78.9 </span>#}
            {#</div>#}
            {#<span class=\"easy-pie-title\"> Disk Space <i class=\"fa fa-caret-down icon-color-good\"></i></span>#}
            {#<ul class=\"smaller-stat hidden-sm pull-right\">#}
            {#<li>#}
            {#<span class=\"label bg-color-blueDark\"><i class=\"fa fa-caret-up\"></i> 76%</span>#}
            {#</li>#}
            {#<li>#}
            {#<span class=\"label bg-color-blue\"><i class=\"fa fa-caret-down\"></i> 3%</span>#}
            {#</li>#}
            {#</ul>#}
            {#<div class=\"sparkline txt-color-blue hidden-sm hidden-md pull-right\" data-sparkline-type=\"line\" data-sparkline-height=\"33px\" data-sparkline-width=\"70px\" data-fill-color=\"transparent\">#}
            {#257, 200, 210, 300, 270, 363, 130, 187, 250, 247, 270, 363, 247#}
            {#</div>#}
            {#</div>#}
            {#<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">#}
            {#<div class=\"easy-pie-chart txt-color-blue\" data-percent=\"23\" data-pie-size=\"50\">#}
            {#<span class=\"percent percent-sign\">23 </span>#}
            {#</div>#}
            {#<span class=\"easy-pie-title\"> Transfered <i class=\"fa fa-caret-up icon-color-good\"></i></span>#}
            {#<ul class=\"smaller-stat hidden-sm pull-right\">#}
            {#<li>#}
            {#<span class=\"label bg-color-darken\">10GB</span>#}
            {#</li>#}
            {#<li>#}
            {#<span class=\"label bg-color-blueDark\"><i class=\"fa fa-caret-up\"></i> 10%</span>#}
            {#</li>#}
            {#</ul>#}
            {#<div class=\"sparkline txt-color-darken hidden-sm hidden-md pull-right\" data-sparkline-type=\"line\" data-sparkline-height=\"33px\" data-sparkline-width=\"70px\" data-fill-color=\"transparent\">#}
            {#200, 210, 363, 247, 300, 270, 130, 187, 250, 257, 363, 247, 270#}
            {#</div>#}
            {#</div>#}
            {#<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">#}
            {#<div class=\"easy-pie-chart txt-color-darken\" data-percent=\"36\" data-pie-size=\"50\">#}
            {#<span class=\"percent degree-sign\">36 <i class=\"fa fa-caret-up\"></i></span>#}
            {#</div>#}
            {#<span class=\"easy-pie-title\"> Temperature <i class=\"fa fa-caret-down icon-color-good\"></i></span>#}
            {#<ul class=\"smaller-stat hidden-sm pull-right\">#}
            {#<li>#}
            {#<span class=\"label bg-color-red\"><i class=\"fa fa-caret-up\"></i> 124</span>#}
            {#</li>#}
            {#<li>#}
            {#<span class=\"label bg-color-blue\"><i class=\"fa fa-caret-down\"></i> 40 F</span>#}
            {#</li>#}
            {#</ul>#}
            {#<div class=\"sparkline txt-color-red hidden-sm hidden-md pull-right\" data-sparkline-type=\"line\" data-sparkline-height=\"33px\" data-sparkline-width=\"70px\" data-fill-color=\"transparent\">#}
            {#2700, 3631, 2471, 2700, 3631, 2471, 1300, 1877, 2500, 2577, 2000, 2100, 3000#}
            {#</div>#}
            {#</div>#}
            {#</div>#}

            {#</div>#}
            {#<!-- end s1 tab pane -->#}

            {#<div class=\"tab-pane fade\" id=\"s2\">#}
            {#<div class=\"widget-body-toolbar bg-color-white\">#}

            {#<form class=\"form-inline\" role=\"form\">#}

            {#<div class=\"form-group\">#}
            {#<label class=\"sr-only\" for=\"s123\">Show From</label>#}
            {#<input type=\"email\" class=\"form-control input-sm\" id=\"s123\" placeholder=\"Show From\">#}
            {#</div>#}
            {#<div class=\"form-group\">#}
            {#<input type=\"email\" class=\"form-control input-sm\" id=\"s124\" placeholder=\"To\">#}
            {#</div>#}

            {#<div class=\"btn-group hidden-phone pull-right\">#}
            {#<a class=\"btn dropdown-toggle btn-xs btn-default\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i> More <span class=\"caret\"> </span> </a>#}
            {#<ul class=\"dropdown-menu pull-right\">#}
            {#<li>#}
            {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file-text-alt\"></i> Export to PDF</a>#}
            {#</li>#}
            {#<li>#}
            {#<a href=\"javascript:void(0);\"><i class=\"fa fa-question-sign\"></i> Help</a>#}
            {#</li>#}
            {#</ul>#}
            {#</div>#}

            {#</form>#}

            {#</div>#}
            {#<div class=\"padding-10\">#}
            {#<div id=\"statsChart\" class=\"chart-large has-legend-unique\"></div>#}
            {#</div>#}

            {#</div>#}
            {#<!-- end s2 tab pane -->#}

            {#<div class=\"tab-pane fade\" id=\"s3\">#}

            {#<div class=\"widget-body-toolbar bg-color-white smart-form\" id=\"rev-toggles\">#}

            {#<div class=\"inline-group\">#}

            {#<label for=\"gra-0\" class=\"checkbox\">#}
            {#<input type=\"checkbox\" name=\"gra-0\" id=\"gra-0\" checked=\"checked\">#}
            {#<i></i> Target </label>#}
            {#<label for=\"gra-1\" class=\"checkbox\">#}
            {#<input type=\"checkbox\" name=\"gra-1\" id=\"gra-1\" checked=\"checked\">#}
            {#<i></i> Actual </label>#}
            {#<label for=\"gra-2\" class=\"checkbox\">#}
            {#<input type=\"checkbox\" name=\"gra-2\" id=\"gra-2\" checked=\"checked\">#}
            {#<i></i> Signups </label>#}
            {#</div>#}

            {#<div class=\"btn-group hidden-phone pull-right\">#}
            {#<a class=\"btn dropdown-toggle btn-xs btn-default\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i> More <span class=\"caret\"> </span> </a>#}
            {#<ul class=\"dropdown-menu pull-right\">#}
            {#<li>#}
            {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file-text-alt\"></i> Export to PDF</a>#}
            {#</li>#}
            {#<li>#}
            {#<a href=\"javascript:void(0);\"><i class=\"fa fa-question-sign\"></i> Help</a>#}
            {#</li>#}
            {#</ul>#}
            {#</div>#}

            {#</div>#}

            {#<div class=\"padding-10\">#}
            {#<div id=\"flotcontainer\" class=\"chart-large has-legend-unique\"></div>#}
            {#</div>#}
            {#</div>#}
            {#<!-- end s3 tab pane -->#}
            {#</div>#}

            {#<!-- end content -->#}
            {#</div>#}

            {#</div>#}
            {#<!-- end widget div -->#}
            {#</div>#}
            {#<!-- end widget -->#}

            {#</article>#}
            {#</div>#}

            {#<!-- end row -->#}

            <!-- row -->

            <div class=\"row\" id=\"printAjax\">


                {#<article class=\"col-sm-12 col-md-12 col-lg-6\">#}

                {#<!-- new widget -->#}
                {#<div class=\"jarviswidget\" id=\"wid-id-2\" data-widget-colorbutton=\"false\" data-widget-editbutton=\"false\">#}

                {#<!-- widget options:#}
                {#usage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">#}

                {#data-widget-colorbutton=\"false\"#}
                {#data-widget-editbutton=\"false\"#}
                {#data-widget-togglebutton=\"false\"#}
                {#data-widget-deletebutton=\"false\"#}
                {#data-widget-fullscreenbutton=\"false\"#}
                {#data-widget-custombutton=\"false\"#}
                {#data-widget-collapsed=\"true\"#}
                {#data-widget-sortable=\"false\"#}

                {#-->#}

                {#<header>#}
                {#<span class=\"widget-icon\"> <i class=\"fa fa-map-marker\"></i> </span>#}
                {#<h2>Birds Eye</h2>#}
                {#<div class=\"widget-toolbar hidden-mobile\">#}
                {#<span class=\"onoffswitch-title\"><i class=\"fa fa-location-arrow\"></i> Realtime</span>#}
                {#<span class=\"onoffswitch\">#}
                {#<input type=\"checkbox\" name=\"onoffswitch\" class=\"onoffswitch-checkbox\" checked=\"checked\" id=\"myonoffswitch\">#}
                {#<label class=\"onoffswitch-label\" for=\"myonoffswitch\"> <span class=\"onoffswitch-inner\" data-swchon-text=\"YES\" data-swchoff-text=\"NO\"></span> <span class=\"onoffswitch-switch\"></span> </label> </span>#}
                {#</div>#}
                {#</header>#}

                {#<!-- widget div-->#}
                {#<div>#}
                {#<!-- widget edit box -->#}
                {#<div class=\"jarviswidget-editbox\">#}
                {#<div>#}
                {#<label>Title:</label>#}
                {#<input type=\"text\" />#}
                {#</div>#}
                {#</div>#}
                {#<!-- end widget edit box -->#}

                {#<div class=\"widget-body no-padding\">#}
                {#<!-- content goes here -->#}

                {#<div id=\"vector-map\" class=\"vector-map\"></div>#}
                {#<div id=\"heat-fill\">#}
                {#<span class=\"fill-a\">0</span>#}

                {#<span class=\"fill-b\">5,000</span>#}
                {#</div>#}

                {#<table class=\"table table-striped table-hover table-condensed\">#}
                {#<thead>#}
                {#<tr>#}
                {#<th>Country</th>#}
                {#<th>Visits</th>#}
                {#<th class=\"text-align-center\">User Activity</th>#}
                {#<th class=\"text-align-center hidden-xs\">Online</th>#}
                {#<th class=\"text-align-center\">Demographic</th>#}
                {#</tr>#}
                {#</thead>#}
                {#<tbody>#}
                {#<tr>#}
                {#<td><a href=\"javascript:void(0);\">USA</a></td>#}
                {#<td>4,977</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline txt-color-blue text-align-center\" data-sparkline-height=\"22px\" data-sparkline-width=\"90px\" data-sparkline-barwidth=\"2\">#}
                {#2700, 3631, 2471, 1300, 1877, 2500, 2577, 2700, 3631, 2471, 2000, 2100, 3000#}
                {#</div></td>#}
                {#<td class=\"text-align-center hidden-xs\">143</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline display-inline\" data-sparkline-type='pie' data-sparkline-piecolor='[\"#E979BB\", \"#57889C\"]' data-sparkline-offset=\"90\" data-sparkline-piesize=\"23px\">#}
                {#17,83#}
                {#</div>#}
                {#<div class=\"btn-group display-inline pull-right text-align-left hidden-tablet\">#}
                {#<button class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">#}
                {#<i class=\"fa fa-cog fa-lg\"></i>#}
                {#</button>#}
                {#<ul class=\"dropdown-menu dropdown-menu-xs pull-right\">#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file fa-lg fa-fw txt-color-greenLight\"></i> <u>P</u>DF</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-times fa-lg fa-fw txt-color-red\"></i> <u>D</u>elete</a>#}
                {#</li>#}
                {#<li class=\"divider\"></li>#}
                {#<li class=\"text-align-center\">#}
                {#<a href=\"javascript:void(0);\">Cancel</a>#}
                {#</li>#}
                {#</ul>#}
                {#</div></td>#}
                {#</tr>#}
                {#<tr>#}
                {#<td><a href=\"javascript:void(0);\">Australia</a></td>#}
                {#<td>4,873</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline txt-color-blue text-align-center\" data-sparkline-height=\"22px\" data-sparkline-width=\"90px\" data-sparkline-barwidth=\"2\">#}
                {#1000, 1100, 3030, 1300, -1877, -2500, -2577, -2700, 3631, 2471, 4700, 1631, 2471#}
                {#</div></td>#}
                {#<td class=\"text-align-center hidden-xs\">247</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline display-inline\" data-sparkline-type='pie' data-sparkline-piecolor='[\"#E979BB\", \"#57889C\"]' data-sparkline-offset=\"90\" data-sparkline-piesize=\"23px\">#}
                {#22,88#}
                {#</div>#}
                {#<div class=\"btn-group display-inline pull-right text-align-left hidden-tablet\">#}
                {#<button class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">#}
                {#<i class=\"fa fa-cog fa-lg\"></i>#}
                {#</button>#}
                {#<ul class=\"dropdown-menu dropdown-menu-xs pull-right\">#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file fa-lg fa-fw txt-color-greenLight\"></i> <u>P</u>DF</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-times fa-lg fa-fw txt-color-red\"></i> <u>D</u>elete</a>#}
                {#</li>#}
                {#<li class=\"divider\"></li>#}
                {#<li class=\"text-align-center\">#}
                {#<a href=\"javascript:void(0);\">Cancel</a>#}
                {#</li>#}
                {#</ul>#}
                {#</div></td>#}
                {#</tr>#}
                {#<tr>#}
                {#<td><a href=\"javascript:void(0);\">India</a></td>#}
                {#<td>3,671</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline txt-color-blue text-align-center\" data-sparkline-height=\"22px\" data-sparkline-width=\"90px\" data-sparkline-barwidth=\"2\">#}
                {#3631, 1471, 2400, 3631, 471, 1300, 1177, 2500, 2577, 3000, 4100, 3000, 7700#}
                {#</div></td>#}
                {#<td class=\"text-align-center hidden-xs\">373</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline display-inline\" data-sparkline-type='pie' data-sparkline-piecolor='[\"#E979BB\", \"#57889C\"]' data-sparkline-offset=\"90\" data-sparkline-piesize=\"23px\">#}
                {#10,90#}
                {#</div>#}
                {#<div class=\"btn-group display-inline pull-right text-align-left hidden-tablet\">#}
                {#<button class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">#}
                {#<i class=\"fa fa-cog fa-lg\"></i>#}
                {#</button>#}
                {#<ul class=\"dropdown-menu dropdown-menu-xs pull-right\">#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file fa-lg fa-fw txt-color-greenLight\"></i> <u>P</u>DF</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-times fa-lg fa-fw txt-color-red\"></i> <u>D</u>elete</a>#}
                {#</li>#}
                {#<li class=\"divider\"></li>#}
                {#<li class=\"text-align-center\">#}
                {#<a href=\"javascript:void(0);\">Cancel</a>#}
                {#</li>#}
                {#</ul>#}
                {#</div></td>#}
                {#</tr>#}
                {#<tr>#}
                {#<td><a href=\"javascript:void(0);\">Brazil</a></td>#}
                {#<td>2,476</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline txt-color-blue text-align-center\" data-sparkline-height=\"22px\" data-sparkline-width=\"90px\" data-sparkline-barwidth=\"2\">#}
                {#2700, 1877, 2500, 2577, 2000, 3631, 2471, -2700, -3631, 2471, 1300, 2100, 3000,#}
                {#</div></td>#}
                {#<td class=\"text-align-center hidden-xs \">741</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline display-inline\" data-sparkline-type='pie' data-sparkline-piecolor='[\"#E979BB\", \"#57889C\"]' data-sparkline-offset=\"90\" data-sparkline-piesize=\"23px\">#}
                {#34,66#}
                {#</div>#}
                {#<div class=\"btn-group display-inline pull-right text-align-left hidden-tablet\">#}
                {#<button class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">#}
                {#<i class=\"fa fa-cog fa-lg\"></i>#}
                {#</button>#}
                {#<ul class=\"dropdown-menu dropdown-menu-xs pull-right\">#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file fa-lg fa-fw txt-color-greenLight\"></i> <u>P</u>DF</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-times fa-lg fa-fw txt-color-red\"></i> <u>D</u>elete</a>#}
                {#</li>#}
                {#<li class=\"divider\"></li>#}
                {#<li class=\"text-align-center\">#}
                {#<a href=\"javascript:void(0);\">Cancel</a>#}
                {#</li>#}
                {#</ul>#}
                {#</div></td>#}
                {#</tr>#}
                {#<tr>#}
                {#<td><a href=\"javascript:void(0);\">Turkey</a></td>#}
                {#<td>1,476</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline txt-color-blue text-align-center\" data-sparkline-height=\"22px\" data-sparkline-width=\"90px\" data-sparkline-barwidth=\"2\">#}
                {#1300, 1877, 2500, 2577, 2000, 2100, 3000, -2471, -2700, -3631, -2471, 2700, 3631#}
                {#</div></td>#}
                {#<td class=\"text-align-center hidden-xs\">123</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline display-inline\" data-sparkline-type='pie' data-sparkline-piecolor='[\"#E979BB\", \"#57889C\"]' data-sparkline-offset=\"90\" data-sparkline-piesize=\"23px\">#}
                {#75,25#}
                {#</div>#}
                {#<div class=\"btn-group display-inline pull-right text-align-left hidden-tablet\">#}
                {#<button class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">#}
                {#<i class=\"fa fa-cog fa-lg\"></i>#}
                {#</button>#}
                {#<ul class=\"dropdown-menu dropdown-menu-xs pull-right\">#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file fa-lg fa-fw txt-color-greenLight\"></i> <u>P</u>DF</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-times fa-lg fa-fw txt-color-red\"></i> <u>D</u>elete</a>#}
                {#</li>#}
                {#<li class=\"divider\"></li>#}
                {#<li class=\"text-align-center\">#}
                {#<a href=\"javascript:void(0);\">Cancel</a>#}
                {#</li>#}
                {#</ul>#}
                {#</div></td>#}
                {#</tr>#}
                {#<tr>#}
                {#<td><a href=\"javascript:void(0);\">Canada</a></td>#}
                {#<td>146</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline txt-color-orange text-align-center\" data-sparkline-height=\"22px\" data-sparkline-width=\"90px\" data-sparkline-barwidth=\"2\">#}
                {#5, 34, 10, 1, 4, 6, -9, -1, 0, 0, 5, 6, 7#}
                {#</div></td>#}
                {#<td class=\"text-align-center hidden-xs\">23</td>#}
                {#<td class=\"text-align-center\">#}
                {#<div class=\"sparkline display-inline\" data-sparkline-type='pie' data-sparkline-piecolor='[\"#E979BB\", \"#57889C\"]' data-sparkline-offset=\"90\" data-sparkline-piesize=\"23px\">#}
                {#50,50#}
                {#</div>#}
                {#<div class=\"btn-group display-inline pull-right text-align-left hidden-tablet\">#}
                {#<button class=\"btn btn-xs btn-default dropdown-toggle\" data-toggle=\"dropdown\">#}
                {#<i class=\"fa fa-cog fa-lg\"></i>#}
                {#</button>#}
                {#<ul class=\"dropdown-menu dropdown-menu-xs pull-right\">#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-file fa-lg fa-fw txt-color-greenLight\"></i> <u>P</u>DF</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\"><i class=\"fa fa-times fa-lg fa-fw txt-color-red\"></i> <u>D</u>elete</a>#}
                {#</li>#}
                {#<li class=\"divider\"></li>#}
                {#<li class=\"text-align-center\">#}
                {#<a href=\"javascript:void(0);\">Cancel</a>#}
                {#</li>#}
                {#</ul>#}
                {#</div></td>#}
                {#</tr>#}
                {#</tbody>#}
                {#<tfoot>#}
                {#<tr>#}
                {#<td colspan=5>#}
                {#<ul class=\"pagination pagination-xs no-margin\">#}
                {#<li class=\"prev disabled\">#}
                {#<a href=\"javascript:void(0);\">Previous</a>#}
                {#</li>#}
                {#<li class=\"active\">#}
                {#<a href=\"javascript:void(0);\">1</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\">2</a>#}
                {#</li>#}
                {#<li>#}
                {#<a href=\"javascript:void(0);\">3</a>#}
                {#</li>#}
                {#<li class=\"next\">#}
                {#<a href=\"javascript:void(0);\">Next</a>#}
                {#</li>#}
                {#</ul></td>#}
                {#</tr>#}
                {#</tfoot>#}
                {#</table>#}

                {#<!-- end content -->#}

                {#</div>#}

                {#</div>#}
                {#<!-- end widget div -->#}
                {#</div>#}
                {#<!-- end widget -->#}

                {#<!-- new widget -->#}
                {#<div class=\"jarviswidget jarviswidget-color-blue\" id=\"wid-id-4\" data-widget-editbutton=\"false\" data-widget-colorbutton=\"false\">#}

                {#<!-- widget options:#}
                {#usage: <div class=\"jarviswidget\" id=\"wid-id-0\" data-widget-editbutton=\"false\">#}

                {#data-widget-colorbutton=\"false\"#}
                {#data-widget-editbutton=\"false\"#}
                {#data-widget-togglebutton=\"false\"#}
                {#data-widget-deletebutton=\"false\"#}
                {#data-widget-fullscreenbutton=\"false\"#}
                {#data-widget-custombutton=\"false\"#}
                {#data-widget-collapsed=\"true\"#}
                {#data-widget-sortable=\"false\"#}

                {#-->#}

                {#<header>#}
                {#<span class=\"widget-icon\"> <i class=\"fa fa-check txt-color-white\"></i> </span>#}
                {#<h2> ToDo's </h2>#}
                {#<!-- <div class=\"widget-toolbar\">#}
                {#add: non-hidden - to disable auto hide#}

                {#</div>-->#}
                {#</header>#}

                {#<!-- widget div-->#}
                {#<div>#}
                {#<!-- widget edit box -->#}
                {#<div class=\"jarviswidget-editbox\">#}
                {#<div>#}
                {#<label>Title:</label>#}
                {#<input type=\"text\" />#}
                {#</div>#}
                {#</div>#}
                {#<!-- end widget edit box -->#}

                {#<div class=\"widget-body no-padding smart-form\">#}
                {#<!-- content goes here -->#}
                {#<h5 class=\"todo-group-title\"><i class=\"fa fa-warning\"></i> Critical Tasks (<small class=\"num-of-tasks\">1</small>)</h5>#}
                {#<ul id=\"sortable1\" class=\"todo\">#}
                {#<li>#}
                {#<span class=\"handle\"> <label class=\"checkbox\">#}
                {#<input type=\"checkbox\" name=\"checkbox-inline\">#}
                {#<i></i> </label> </span>#}
                {#<p>#}
                {#<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href=\"javascript:void(0);\" class=\"font-xs\">More Details</a>] <span class=\"text-muted\">Sea deep blessed bearing under darkness from God air living isn't. </span>#}
                {#<span class=\"date\">Jan 1, 2014</span>#}
                {#</p>#}
                {#</li>#}
                {#</ul>#}
                {#<h5 class=\"todo-group-title\"><i class=\"fa fa-exclamation\"></i> Important Tasks (<small class=\"num-of-tasks\">3</small>)</h5>#}
                {#<ul id=\"sortable2\" class=\"todo\">#}
                {#<li>#}
                {#<span class=\"handle\"> <label class=\"checkbox\">#}
                {#<input type=\"checkbox\" name=\"checkbox-inline\">#}
                {#<i></i> </label> </span>#}
                {#<p>#}
                {#<strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href=\"javascript:void(0);\" class=\"font-xs\">More Details</a>] <span class=\"date\">Nov 22, 2013</span>#}
                {#</p>#}
                {#</li>#}
                {#<li>#}
                {#<span class=\"handle\"> <label class=\"checkbox\">#}
                {#<input type=\"checkbox\" name=\"checkbox-inline\">#}
                {#<i></i> </label> </span>#}
                {#<p>#}
                {#<strong>Ticket #1314</strong> - Call customer support re: Issue <a href=\"javascript:void(0);\" class=\"font-xs\">#6134</a><small>(code review)</small>#}
                {#<span class=\"date\">Nov 22, 2013</span>#}
                {#</p>#}
                {#</li>#}
                {#<li>#}
                {#<span class=\"handle\"> <label class=\"checkbox\">#}
                {#<input type=\"checkbox\" name=\"checkbox-inline\">#}
                {#<i></i> </label> </span>#}
                {#<p>#}
                {#<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href=\"javascript:void(0);\" class=\"font-xs\">More Details</a>] <span class=\"text-muted\">Sea deep blessed bearing under darkness from God air living isn't. </span>#}
                {#<span class=\"date\">Jan 1, 2014</span>#}
                {#</p>#}
                {#</li>#}
                {#</ul>#}

                {#<h5 class=\"todo-group-title\"><i class=\"fa fa-check\"></i> Completed Tasks (<small class=\"num-of-tasks\">1</small>)</h5>#}
                {#<ul id=\"sortable3\" class=\"todo\">#}
                {#<li class=\"complete\">#}
                {#<span class=\"handle\" style=\"display:none\"> <label class=\"checkbox state-disabled\">#}
                {#<input type=\"checkbox\" name=\"checkbox-inline\" checked=\"checked\" disabled=\"disabled\">#}
                {#<i></i> </label> </span>#}
                {#<p>#}
                {#<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href=\"javascript:void(0);\" class=\"font-xs\">More Details</a>] <span class=\"text-muted\">Sea deep blessed bearing under darkness from God air living isn't. </span>#}
                {#<span class=\"date\">Jan 1, 2014</span>#}
                {#</p>#}
                {#</li>#}
                {#</ul>#}

                {#<!-- end content -->#}
                {#</div>#}

                {#</div>#}
                {#<!-- end widget div -->#}
                {#</div>#}
                {#<!-- end widget -->#}

                {#</article>#}

                {#</div>#}

                {#<!-- end row -->#}

                {#</section>#}
                <!-- end widget grid -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
    {% endif %}

    <script>

        function openFullscreen() {
            var elem = document.body;
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
            }
        }

        function openPage(url){
            \$.ajax({
                url: url,
                method: 'POST',
                success: function(data){
                    if(data == -1){

                    }else{
                        \$('#printAjax').empty().append(data);
                    }

                },
                error: function(data){
                    \$.bigBox({
                        title : \"Error\",
                        content : \"Something went wrong!\",
                        color : \"#C46A69\",
                        //timeout: 6000,
                        icon : \"fa fa-warning shake animated\",
                        number : \"1\",
                        timeout : 6000
                    });
                }
            })
        }
    </script>


{% endblock %}", "default/index.html.twig", "/srv/workspace/backofficenew/templates/default/index.html.twig");
    }
}
