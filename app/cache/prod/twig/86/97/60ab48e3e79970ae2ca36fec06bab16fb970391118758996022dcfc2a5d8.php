<?php

/* ::base.html.twig */
class __TwigTemplate_869760ab48e3e79970ae2ca36fec06bab16fb970391118758996022dcfc2a5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    \t<meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    \t<meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('keywords', $context, $blocks);
        echo "\">
    \t<meta name=\"author\" content=\"SeekerImpulse S.A.S\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    \t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/metro-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   \t \t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    \t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/my.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/metro.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettify/run_prettify.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ga.js"), "html", null, true);
        echo "\"></script>
    \t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/myJs.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </head>
    <body>
    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "</html>";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 8
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 127
        echo "    </body>
";
    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"app-bar\" data-role=\"appbar\">
\t<a style=\"font-size: 1.2rem;\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"
\t\t\" class=\"app-bar-element branding\"> 
\t\t<img style=\"width: 2rem; margin-right: 0.5rem;\" alt=\"\"
\t\tsrc=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> SeekerPlus
\t</a> <span class=\"app-bar-pull\"></span>
\t<div class=\"app-bar-divider\"></div>
\t<ul class=\"app-bar-menu\">
\t\t<li data-flexorder=\"1\" data-flexorderorigin=\"0\"><a href=\"\"><span class=\"mif-display\"></span> App</a></li>
\t\t<li data-flexorder=\"2\" data-flexorderorigin=\"1\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("servicios");
        echo "\"><span class=\"mif-tags\"></span> Servicios</a></li>
\t\t<li data-flexorder=\"3\" data-flexorderorigin=\"2\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\"><span class=\"mif-contacts-mail\"></span> Contactenos</a></li>
\t\t<li data-flexorder=\"4\" data-flexorderorigin=\"3\"><a href=\"\"><span class=\"mif-question\"></span> Ayuda</a></li>
\t</ul>
\t<div class=\"app-bar-element\">
\t\t<a class=\"dropdown-toggle fg-white\"><span class=\"mif-user\"></span>
\t\tLogin
\t\t</a>
\t\t<div style=\"display: none;\"
\t\t\tclass=\"app-bar-drop-container bg-white fg-dark place-right\"
\t\t\tdata-role=\"dropdown\" data-no-close=\"true\">
\t\t\t<div class=\"padding20\">
\t\t\t\t<form>
\t\t\t\t\t<h4 class=\"text-light\">Iniciar Sesión</h4>
\t\t\t\t\t<div class=\"input-control text\">
\t\t\t\t\t\t<span class=\"mif-user prepend-icon\"></span> <input type=\"text\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-control text\">
\t\t\t\t\t\t<span class=\"mif-lock prepend-icon\"></span> <input type=\"password\">
\t\t\t\t\t</div>
\t\t\t\t\t<label class=\"input-control checkbox small-check\"> <input
\t\t\t\t\t\ttype=\"checkbox\"> <span class=\"check\"></span> 
\t\t\t\t\t\t<span class=\"caption\">Recuerdame</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t<button class=\"button\">Ingresar</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "<footer style=\"background-color: #323232;margin-top:3rem\">
    <div class=\"container\">
        <div class=\"padding20\">
            <div class=\"grid responsive\">
                <div class=\"row cells4\">
                    <div class=\"fg-white  cell colspan2 padding20 no-padding-top no-padding-bottom\">
                        <h1 class=\"padding10 text-shadow\">Veloz, Sencillo y exacto !</h1>
                        <br>
                        <h4>Descárgala ahora:</h4>
                        <span style=\"font-size: 6rem;\" class=\"mif-mobile\"></span>
\t\t\t\t\t\t   <a href=\"https://play.google.com/store/apps/details?id=com.seekerimpulse.SeekerPlus\" target=\"_blank\"><img style=\"margin-right: 0.5rem;\" alt=\"\"
\t\t\t\t\t\t\t\t\t\t src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/android.png"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t></a>
                        <div class=\"bg-white bg-red fg-white padding10 align-center no-display\" id=\"job\">
                        </div>
                        <hr class=\"thin\" style=\"margin-top: 20px\">
                    </div>
                </div>
                <div class=\"fg-white row cells3\">
                    <div class=\"cell\">
                    \t<h4 class=\"padding10 text-shadow\">Social</h4>
                    \t<ul style=\"list-style: outside none none;margin: 0px 30px 0px 0px;padding: 0px;float: left;\">
                    \t\t<li><a class=\"fg-white\" href=\"https://www.facebook.com/seekerpluscolombia\" target=\"_blank\"><span class=\"mif-facebook\"></span> Facebook</a></li>
                    \t\t<li><a class=\"fg-white\" href=\"https://twitter.com/seekerimpulse\" target=\"_blank\"><span class=\"mif-twitter\"></span> Twitter</a></li>
                    \t\t<li><a class=\"fg-white\" href=\"https://instagram.com/seekerimpulse/\" target=\"_blank\"><span class=\"mif-image\"></span> Instagram</a></li>
                    \t</ul>
                    </div>
                    <div class=\"cell\">
                    \t<h4 class=\"fg-white padding10 text-shadow\">Sobre Nosotros</h4>
                    \t<ul style=\"list-style: outside none none;margin: 0px 30px 0px 0px;padding: 0px;float: left;\">
                    \t\t<li><span class=\"mif-users\"></span> Nuestro Equipo</li>
                    \t</ul>
                    </div>
                    <div class=\"cell\">
                    \t<h4 class=\"fg-white padding10 text-shadow\">Legal</h4>
                    \t<ul style=\"list-style: outside none none;margin: 0px 30px 0px 0px;padding: 0px;float: left;\">
                    \t\t<li><a class=\"fg-white\" href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
        echo "\"\"><span class=\"mif-file-text\"></span> Condiciones de uso</a></li>
                    \t\t<li><a class=\"fg-white\" href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
        echo "\"\"><span class=\"mif-security\"></span> Política de privacidad</a></li>
                    \t</ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"fg-white align-center padding20 text-small\">
            SeekerPlus ® es una marca registrada de SeekerImpulse S.A.S<br>
\t\t\tCopyright © 2015 SeekerImpulse S.A.S Todos los derechos reservados.
\t\t<a href=\"mailto:info@seekerimpulse.co\">SeekerImpulse S.A.S</a>
        </div>
    </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 113,  264 => 112,  236 => 87,  223 => 76,  220 => 75,  215 => 72,  179 => 39,  175 => 38,  167 => 33,  161 => 30,  158 => 29,  155 => 28,  150 => 127,  148 => 75,  145 => 74,  143 => 72,  140 => 71,  137 => 28,  134 => 27,  129 => 24,  124 => 15,  119 => 10,  114 => 8,  109 => 7,  105 => 129,  103 => 27,  99 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  67 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }
}
