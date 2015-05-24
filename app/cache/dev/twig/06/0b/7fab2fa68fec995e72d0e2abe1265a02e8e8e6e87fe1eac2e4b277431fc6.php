<?php

/* PagesBundle:Default:index.html.twig */
class __TwigTemplate_060b7fab2fa68fec995e72d0e2abe1265a02e8e8e6e87fe1eac2e4b277431fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " 
Bienvenido a SeekerPlus
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
Bienvenido a seekerplus geolocalizador de productos y servicios.
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
seekerplus,productos,servicios
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
";
        // line 15
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
";
        // line 19
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        echo " 

\t";
        // line 24
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "
\t";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "\t
";
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 25
        $this->displayParentBlock("menu", $context, $blocks);
        echo " 
\t";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t<div class=\"container page-content\">
\t\t<div class=\"grid responsive\">
\t\t\t<div class=\"row cells12\">
\t\t       <div class=\"cell colspan7\">
\t\t       <h2>Descubre los negocios que se encuentran a tu alrededor..</h2>
\t\t       <img style=\"margin-right: 0.5rem;\" alt=\"\"
\t\t\t\t\t\t\t src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/map.png"), "html", null, true);
        echo "\"
\t\t\t\t>
\t\t\t   <p>Seekerplus es la aplicación que permite encontrar productos y servicios cercanos a tu ubicacion.
\t\t\t   </p>
\t\t\t   <h4>SeekerPlus. Veloz, Sencillo y exacto !</h4><br>
\t\t\t   <a href=\"https://play.google.com/store/apps/details?id=com.seekerimpulse.SeekerPlus\" target=\"_blank\"><img style=\"margin-right: 0.5rem;\" alt=\"\"
\t\t\t\t\t\t\t src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/android.png"), "html", null, true);
        echo "\"
\t\t\t\t></a>
\t\t       </div>
\t\t       <div id=\"phone\" style='width: 17rem; height: 31.5rem;background-image: url(\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/phone.png"), "html", null, true);
        echo "\");' class=\"cell\">
\t\t\t\t<iframe id=\"video\" style=\"margin-top: 4rem; margin-left: 1.2rem; height: 23.5rem; width: 14.8rem;\" src=\"https://www.youtube.com/embed/w282ykmZt9k?controls=0&amp;showinfo=0\" allowfullscreen=\"\" frameborder=\"0\"></iframe>
\t\t       </div>
\t\t    </div>
\t    </div>
\t</div>
\t   <div>
            <div class=\"presenter\" data-role=\"presenter\" data-height=\"220\" data-easing=\"swing\">
                <h1>Bienvenido a SeekerPlus !</h1>
                <div class=\"scene\">
                    <div class=\"act bg-blue fg-white\">
                        <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/searchProduct.png"), "html", null, true);
        echo "\" class=\"actor\" data-position=\"10,10\" style=\"height: 200px\">
                        <h1 class=\"actor\" data-position=\"10,250\">Buscas un producto o servicio</h1>
                        <p class=\"actor\" data-position=\"70,250\">Encuentra los diferentes negocios a tu alrededor , tenemos una lista de categorias donde podras encontrar restaurantes , bancos ,gasolineras y algunos otros mas.</p>
                        <a class=\"actor button success\" data-position=\"130,250\" href=\"https://play.google.com/store/apps/details?id=com.seekerimpulse.SeekerPlus\" target=\"_blank\">Descargar !</a>
                        <p class=\"actor\" data-position=\"130,250\"></p>
                        
                    </div>
                    <div class=\"act bg-blue fg-white\">
                        <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/publicFree.png"), "html", null, true);
        echo "\" class=\"actor\" data-position=\"10,10\" style=\"height: 200px\">
                        <h1 class=\"actor\" data-position=\"10,270\" >Publica gratis tu negocio</h1>
                        <p class=\"actor\" data-position=\"60,270\" >Tienes un negocio y deseas tener visibilidad ,publica tu negocio gratis en nuestro aplicativo.</p>
                        <a class=\"actor button success\" data-position=\"100,270\"  href=\"#\">Registrate</a>
                        <p class=\"actor\" data-position=\"120,270\"></p>
                        
                    </div>
                    <div class=\"act bg-darkCyan fg-white\">
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/services.png"), "html", null, true);
        echo "\" class=\"actor\" data-position=\"10,10\" style=\"height: 200px\">
                        <h1 class=\"actor\" data-position=\"10,300\" >Nuestros Servicios</h1>
                        <p class=\"actor\" data-position=\"60,300\">Conoce los servicios gratuitos y de pago que presta seekerplus</p>
                        <a class=\"actor button success\" data-position=\"130,300\" href=\"http://www.jetbrains.com/phpstorm/\">Ver Servicios</a>
                    </div>
                </div>
            </div>
        </div>
\t</div>
\t";
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 82
        $this->displayParentBlock("footer", $context, $blocks);
        echo " 
\t";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 82,  190 => 81,  176 => 71,  165 => 63,  154 => 55,  140 => 44,  134 => 41,  125 => 35,  114 => 28,  108 => 25,  103 => 24,  98 => 84,  95 => 81,  93 => 28,  90 => 27,  88 => 24,  82 => 22,  76 => 19,  71 => 18,  65 => 15,  60 => 14,  52 => 10,  44 => 6,  36 => 2,  11 => 1,);
    }
}
