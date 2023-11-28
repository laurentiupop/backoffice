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

/* default/twig-styles/indexStyle.html.twig */
class __TwigTemplate_87ca433101122d027d68a3123cba735419cdbc9cae09bb552370ae37ea03ff66 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/twig-styles/indexStyle.html.twig"));

        // line 1
        echo "<style>
    .homeLoginForm{
        width: 20%;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #172e49;
        border-radius: 7px;
        margin-top: 11px;
        padding: 10px;
        background: #fff;
    }

    @media screen and (max-width: 1500px){
        .homeLoginForm{
            width: 60%;
        }
    }

    .erroMessage {
    color: red;
    font-weight: 900;
}
</style>

<script>

    \$(document).ready(function(){
        \$('.homeLoginForm').on('submit',function (e) {
            e.preventDefault();
            e.stopPropagation();
            console.log(e)
            console.log(hash(this))
        });
    })

    ";
        // line 37
        echo "    function hash(form) {
        if (valid_js()) {
            var passwd = form.admin_password.value;
            var challenge = form.challenge.value;
            var hash;
            var hash_challenge;
            var hashed_passwd = \"\";
            if (passwd) {
                hash = MD5(passwd);
                hashed_challenge = hash + challenge;
                hashed_passwd = MD5(hashed_challenge);
            }

            form.admin_password.value = hash;
            form.hashed_password.value = hashed_passwd;
            console.log(form)
            form.submit();
            form.onsubmit = null;
            return false;
        }
        else {
            alert(\"Unsupported Browser\");
        }
        return true;
    }
    /*
 * A JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Digest Algorithm, as defined in RFC 1321.
 * Copyright (C) Paul Johnston 1999 - 2000.
 * Updated by Greg Holt 2000 - 2001.
 * See http://pajhome.org.uk/site/legal.html for details.
 */

    /*
     * Convert a 32-bit number to a hex string with ls-byte first
     */
    var hex_chr = \"0123456789abcdef\";
    function rhex(num)
    {
        str = \"\";
        for(j = 0; j <= 3; j++)
            str += hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) +
                hex_chr.charAt((num >> (j * 8)) & 0x0F);
        return str;
    }

    /*
     * Convert a string to a sequence of 16-word blocks, stored as an array.
     * Append padding bits and the length, as described in the MD5 standard.
     */
    function str2blks_MD5(str)
    {
        nblk = ((str.length + 8) >> 6) + 1;
        blks = new Array(nblk * 16);
        for(i = 0; i < nblk * 16; i++) blks[i] = 0;
        for(i = 0; i < str.length; i++)
            blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8);
        blks[i >> 2] |= 0x80 << ((i % 4) * 8);
        blks[nblk * 16 - 2] = str.length * 8;
        return blks;
    }

    /*
     * Add integers, wrapping at 2^32. This uses 16-bit operations internally
     * to work around bugs in some JS interpreters.
     */
    function add(x, y)
    {
        var lsw = (x & 0xFFFF) + (y & 0xFFFF);
        var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
        return (msw << 16) | (lsw & 0xFFFF);
    }

    /*
     * Bitwise rotate a 32-bit number to the left
     */
    function rol(num, cnt)
    {
        return (num << cnt) | (num >>> (32 - cnt));
    }

    /*
     * These functions implement the basic operation for each round of the
     * algorithm.
     */
    function cmn(q, a, b, x, s, t)
    {
        return add(rol(add(add(a, q), add(x, t)), s), b);
    }
    function ff(a, b, c, d, x, s, t)
    {
        return cmn((b & c) | ((~b) & d), a, b, x, s, t);
    }
    function gg(a, b, c, d, x, s, t)
    {
        return cmn((b & d) | (c & (~d)), a, b, x, s, t);
    }
    function hh(a, b, c, d, x, s, t)
    {
        return cmn(b ^ c ^ d, a, b, x, s, t);
    }
    function ii(a, b, c, d, x, s, t)
    {
        return cmn(c ^ (b | (~d)), a, b, x, s, t);
    }

    /*
     * Take a string and return the hex representation of its MD5.
     */
    function MD5(str)
    {
        x = str2blks_MD5(str);
        var a =  1732584193;
        var b = -271733879;
        var c = -1732584194;
        var d =  271733878;

        for(i = 0; i < x.length; i += 16)
        {
            var olda = a;
            var oldb = b;
            var oldc = c;
            var oldd = d;

            a = ff(a, b, c, d, x[i+ 0], 7 , -680876936);
            d = ff(d, a, b, c, x[i+ 1], 12, -389564586);
            c = ff(c, d, a, b, x[i+ 2], 17,  606105819);
            b = ff(b, c, d, a, x[i+ 3], 22, -1044525330);
            a = ff(a, b, c, d, x[i+ 4], 7 , -176418897);
            d = ff(d, a, b, c, x[i+ 5], 12,  1200080426);
            c = ff(c, d, a, b, x[i+ 6], 17, -1473231341);
            b = ff(b, c, d, a, x[i+ 7], 22, -45705983);
            a = ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
            d = ff(d, a, b, c, x[i+ 9], 12, -1958414417);
            c = ff(c, d, a, b, x[i+10], 17, -42063);
            b = ff(b, c, d, a, x[i+11], 22, -1990404162);
            a = ff(a, b, c, d, x[i+12], 7 ,  1804603682);
            d = ff(d, a, b, c, x[i+13], 12, -40341101);
            c = ff(c, d, a, b, x[i+14], 17, -1502002290);
            b = ff(b, c, d, a, x[i+15], 22,  1236535329);

            a = gg(a, b, c, d, x[i+ 1], 5 , -165796510);
            d = gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
            c = gg(c, d, a, b, x[i+11], 14,  643717713);
            b = gg(b, c, d, a, x[i+ 0], 20, -373897302);
            a = gg(a, b, c, d, x[i+ 5], 5 , -701558691);
            d = gg(d, a, b, c, x[i+10], 9 ,  38016083);
            c = gg(c, d, a, b, x[i+15], 14, -660478335);
            b = gg(b, c, d, a, x[i+ 4], 20, -405537848);
            a = gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
            d = gg(d, a, b, c, x[i+14], 9 , -1019803690);
            c = gg(c, d, a, b, x[i+ 3], 14, -187363961);
            b = gg(b, c, d, a, x[i+ 8], 20,  1163531501);
            a = gg(a, b, c, d, x[i+13], 5 , -1444681467);
            d = gg(d, a, b, c, x[i+ 2], 9 , -51403784);
            c = gg(c, d, a, b, x[i+ 7], 14,  1735328473);
            b = gg(b, c, d, a, x[i+12], 20, -1926607734);

            a = hh(a, b, c, d, x[i+ 5], 4 , -378558);
            d = hh(d, a, b, c, x[i+ 8], 11, -2022574463);
            c = hh(c, d, a, b, x[i+11], 16,  1839030562);
            b = hh(b, c, d, a, x[i+14], 23, -35309556);
            a = hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
            d = hh(d, a, b, c, x[i+ 4], 11,  1272893353);
            c = hh(c, d, a, b, x[i+ 7], 16, -155497632);
            b = hh(b, c, d, a, x[i+10], 23, -1094730640);
            a = hh(a, b, c, d, x[i+13], 4 ,  681279174);
            d = hh(d, a, b, c, x[i+ 0], 11, -358537222);
            c = hh(c, d, a, b, x[i+ 3], 16, -722521979);
            b = hh(b, c, d, a, x[i+ 6], 23,  76029189);
            a = hh(a, b, c, d, x[i+ 9], 4 , -640364487);
            d = hh(d, a, b, c, x[i+12], 11, -421815835);
            c = hh(c, d, a, b, x[i+15], 16,  530742520);
            b = hh(b, c, d, a, x[i+ 2], 23, -995338651);

            a = ii(a, b, c, d, x[i+ 0], 6 , -198630844);
            d = ii(d, a, b, c, x[i+ 7], 10,  1126891415);
            c = ii(c, d, a, b, x[i+14], 15, -1416354905);
            b = ii(b, c, d, a, x[i+ 5], 21, -57434055);
            a = ii(a, b, c, d, x[i+12], 6 ,  1700485571);
            d = ii(d, a, b, c, x[i+ 3], 10, -1894986606);
            c = ii(c, d, a, b, x[i+10], 15, -1051523);
            b = ii(b, c, d, a, x[i+ 1], 21, -2054922799);
            a = ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
            d = ii(d, a, b, c, x[i+15], 10, -30611744);
            c = ii(c, d, a, b, x[i+ 6], 15, -1560198380);
            b = ii(b, c, d, a, x[i+13], 21,  1309151649);
            a = ii(a, b, c, d, x[i+ 4], 6 , -145523070);
            d = ii(d, a, b, c, x[i+11], 10, -1120210379);
            c = ii(c, d, a, b, x[i+ 2], 15,  718787259);
            b = ii(b, c, d, a, x[i+ 9], 21, -343485551);

            a = add(a, olda);
            b = add(b, oldb);
            c = add(c, oldc);
            d = add(d, oldd);
        }
        return rhex(a) + rhex(b) + rhex(c) + rhex(d);
    }

    function valid_js() {
        // anything that claims NS 4 or higher functionality better work
        if (navigator.userAgent.indexOf(\"Mozilla/\") == 0) {
            console.log((parseInt(navigator.appVersion)))
            console.log((parseInt(navigator.appVersion) >= 4))
            return (parseInt(navigator.appVersion) >= 4);
        }
        return false;
    }


</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/twig-styles/indexStyle.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .homeLoginForm{
        width: 20%;
        margin-left: auto;
        margin-right: auto;
        border: 1px solid #172e49;
        border-radius: 7px;
        margin-top: 11px;
        padding: 10px;
        background: #fff;
    }

    @media screen and (max-width: 1500px){
        .homeLoginForm{
            width: 60%;
        }
    }

    .erroMessage {
    color: red;
    font-weight: 900;
}
</style>

<script>

    \$(document).ready(function(){
        \$('.homeLoginForm').on('submit',function (e) {
            e.preventDefault();
            e.stopPropagation();
            console.log(e)
            console.log(hash(this))
        });
    })

    {# --- function used for login form --- #}
    function hash(form) {
        if (valid_js()) {
            var passwd = form.admin_password.value;
            var challenge = form.challenge.value;
            var hash;
            var hash_challenge;
            var hashed_passwd = \"\";
            if (passwd) {
                hash = MD5(passwd);
                hashed_challenge = hash + challenge;
                hashed_passwd = MD5(hashed_challenge);
            }

            form.admin_password.value = hash;
            form.hashed_password.value = hashed_passwd;
            console.log(form)
            form.submit();
            form.onsubmit = null;
            return false;
        }
        else {
            alert(\"Unsupported Browser\");
        }
        return true;
    }
    /*
 * A JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Digest Algorithm, as defined in RFC 1321.
 * Copyright (C) Paul Johnston 1999 - 2000.
 * Updated by Greg Holt 2000 - 2001.
 * See http://pajhome.org.uk/site/legal.html for details.
 */

    /*
     * Convert a 32-bit number to a hex string with ls-byte first
     */
    var hex_chr = \"0123456789abcdef\";
    function rhex(num)
    {
        str = \"\";
        for(j = 0; j <= 3; j++)
            str += hex_chr.charAt((num >> (j * 8 + 4)) & 0x0F) +
                hex_chr.charAt((num >> (j * 8)) & 0x0F);
        return str;
    }

    /*
     * Convert a string to a sequence of 16-word blocks, stored as an array.
     * Append padding bits and the length, as described in the MD5 standard.
     */
    function str2blks_MD5(str)
    {
        nblk = ((str.length + 8) >> 6) + 1;
        blks = new Array(nblk * 16);
        for(i = 0; i < nblk * 16; i++) blks[i] = 0;
        for(i = 0; i < str.length; i++)
            blks[i >> 2] |= str.charCodeAt(i) << ((i % 4) * 8);
        blks[i >> 2] |= 0x80 << ((i % 4) * 8);
        blks[nblk * 16 - 2] = str.length * 8;
        return blks;
    }

    /*
     * Add integers, wrapping at 2^32. This uses 16-bit operations internally
     * to work around bugs in some JS interpreters.
     */
    function add(x, y)
    {
        var lsw = (x & 0xFFFF) + (y & 0xFFFF);
        var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
        return (msw << 16) | (lsw & 0xFFFF);
    }

    /*
     * Bitwise rotate a 32-bit number to the left
     */
    function rol(num, cnt)
    {
        return (num << cnt) | (num >>> (32 - cnt));
    }

    /*
     * These functions implement the basic operation for each round of the
     * algorithm.
     */
    function cmn(q, a, b, x, s, t)
    {
        return add(rol(add(add(a, q), add(x, t)), s), b);
    }
    function ff(a, b, c, d, x, s, t)
    {
        return cmn((b & c) | ((~b) & d), a, b, x, s, t);
    }
    function gg(a, b, c, d, x, s, t)
    {
        return cmn((b & d) | (c & (~d)), a, b, x, s, t);
    }
    function hh(a, b, c, d, x, s, t)
    {
        return cmn(b ^ c ^ d, a, b, x, s, t);
    }
    function ii(a, b, c, d, x, s, t)
    {
        return cmn(c ^ (b | (~d)), a, b, x, s, t);
    }

    /*
     * Take a string and return the hex representation of its MD5.
     */
    function MD5(str)
    {
        x = str2blks_MD5(str);
        var a =  1732584193;
        var b = -271733879;
        var c = -1732584194;
        var d =  271733878;

        for(i = 0; i < x.length; i += 16)
        {
            var olda = a;
            var oldb = b;
            var oldc = c;
            var oldd = d;

            a = ff(a, b, c, d, x[i+ 0], 7 , -680876936);
            d = ff(d, a, b, c, x[i+ 1], 12, -389564586);
            c = ff(c, d, a, b, x[i+ 2], 17,  606105819);
            b = ff(b, c, d, a, x[i+ 3], 22, -1044525330);
            a = ff(a, b, c, d, x[i+ 4], 7 , -176418897);
            d = ff(d, a, b, c, x[i+ 5], 12,  1200080426);
            c = ff(c, d, a, b, x[i+ 6], 17, -1473231341);
            b = ff(b, c, d, a, x[i+ 7], 22, -45705983);
            a = ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
            d = ff(d, a, b, c, x[i+ 9], 12, -1958414417);
            c = ff(c, d, a, b, x[i+10], 17, -42063);
            b = ff(b, c, d, a, x[i+11], 22, -1990404162);
            a = ff(a, b, c, d, x[i+12], 7 ,  1804603682);
            d = ff(d, a, b, c, x[i+13], 12, -40341101);
            c = ff(c, d, a, b, x[i+14], 17, -1502002290);
            b = ff(b, c, d, a, x[i+15], 22,  1236535329);

            a = gg(a, b, c, d, x[i+ 1], 5 , -165796510);
            d = gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
            c = gg(c, d, a, b, x[i+11], 14,  643717713);
            b = gg(b, c, d, a, x[i+ 0], 20, -373897302);
            a = gg(a, b, c, d, x[i+ 5], 5 , -701558691);
            d = gg(d, a, b, c, x[i+10], 9 ,  38016083);
            c = gg(c, d, a, b, x[i+15], 14, -660478335);
            b = gg(b, c, d, a, x[i+ 4], 20, -405537848);
            a = gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
            d = gg(d, a, b, c, x[i+14], 9 , -1019803690);
            c = gg(c, d, a, b, x[i+ 3], 14, -187363961);
            b = gg(b, c, d, a, x[i+ 8], 20,  1163531501);
            a = gg(a, b, c, d, x[i+13], 5 , -1444681467);
            d = gg(d, a, b, c, x[i+ 2], 9 , -51403784);
            c = gg(c, d, a, b, x[i+ 7], 14,  1735328473);
            b = gg(b, c, d, a, x[i+12], 20, -1926607734);

            a = hh(a, b, c, d, x[i+ 5], 4 , -378558);
            d = hh(d, a, b, c, x[i+ 8], 11, -2022574463);
            c = hh(c, d, a, b, x[i+11], 16,  1839030562);
            b = hh(b, c, d, a, x[i+14], 23, -35309556);
            a = hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
            d = hh(d, a, b, c, x[i+ 4], 11,  1272893353);
            c = hh(c, d, a, b, x[i+ 7], 16, -155497632);
            b = hh(b, c, d, a, x[i+10], 23, -1094730640);
            a = hh(a, b, c, d, x[i+13], 4 ,  681279174);
            d = hh(d, a, b, c, x[i+ 0], 11, -358537222);
            c = hh(c, d, a, b, x[i+ 3], 16, -722521979);
            b = hh(b, c, d, a, x[i+ 6], 23,  76029189);
            a = hh(a, b, c, d, x[i+ 9], 4 , -640364487);
            d = hh(d, a, b, c, x[i+12], 11, -421815835);
            c = hh(c, d, a, b, x[i+15], 16,  530742520);
            b = hh(b, c, d, a, x[i+ 2], 23, -995338651);

            a = ii(a, b, c, d, x[i+ 0], 6 , -198630844);
            d = ii(d, a, b, c, x[i+ 7], 10,  1126891415);
            c = ii(c, d, a, b, x[i+14], 15, -1416354905);
            b = ii(b, c, d, a, x[i+ 5], 21, -57434055);
            a = ii(a, b, c, d, x[i+12], 6 ,  1700485571);
            d = ii(d, a, b, c, x[i+ 3], 10, -1894986606);
            c = ii(c, d, a, b, x[i+10], 15, -1051523);
            b = ii(b, c, d, a, x[i+ 1], 21, -2054922799);
            a = ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
            d = ii(d, a, b, c, x[i+15], 10, -30611744);
            c = ii(c, d, a, b, x[i+ 6], 15, -1560198380);
            b = ii(b, c, d, a, x[i+13], 21,  1309151649);
            a = ii(a, b, c, d, x[i+ 4], 6 , -145523070);
            d = ii(d, a, b, c, x[i+11], 10, -1120210379);
            c = ii(c, d, a, b, x[i+ 2], 15,  718787259);
            b = ii(b, c, d, a, x[i+ 9], 21, -343485551);

            a = add(a, olda);
            b = add(b, oldb);
            c = add(c, oldc);
            d = add(d, oldd);
        }
        return rhex(a) + rhex(b) + rhex(c) + rhex(d);
    }

    function valid_js() {
        // anything that claims NS 4 or higher functionality better work
        if (navigator.userAgent.indexOf(\"Mozilla/\") == 0) {
            console.log((parseInt(navigator.appVersion)))
            console.log((parseInt(navigator.appVersion) >= 4))
            return (parseInt(navigator.appVersion) >= 4);
        }
        return false;
    }


</script>", "default/twig-styles/indexStyle.html.twig", "/srv/workspace/backofficenew/templates/default/twig-styles/indexStyle.html.twig");
    }
}
