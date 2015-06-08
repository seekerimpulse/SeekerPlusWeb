<?php

/* PagesBundle:Default:servicios.html.twig */
class __TwigTemplate_f35d0a44703f8e82aef0a3459c603eba1698f375322dc82ba7160219eb11c75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:servicios.html.twig", 1);
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
Servicios
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
Conoce los diferentes servicios que presta SeekerPlus.
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
Servicios seekerplus
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
        // line 119
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 122
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
\t<div class=\"container page-content fg-dark\">
\t<h1><span class=\"mif-tags\"></span> Servicios</h1>
\t<h3 style=\"text-align: center;\">¡Bienvenido! ¿Qué plan quieres para utilizar SeekerPlus?</h3>
\t<br>
\t<br>
\t<div class=\"grid\">
\t\t<div class=\"row cells3\">
                    <div class=\"cell\">
                        <div class=\"panel\">
                            <div style=\"height: 10rem;\" class=\"bg-grayLight heading\">
                                <span class=\"bg-red\t icon mif-air\"></span>
                                <span style=\"font-size: 3rem;\" class=\"title\">Gratuito</span>
                                <p style=\"font-size: 3rem; text-align: center; margin-top: 0rem;\" class=\"title\">\$ 0.0</p>
                                <p class=\"panelContent\">(facturados una vez al año) </p>
                            </div>
                            <div class=\"content\">
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>1 Anuncio</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Ubicacion en el Mapa</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Palabras Claves</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Descripcion</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Informacion</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>3 Productos/o Servicios</p>
                                <p><span class=\"fg-red icon mif-cross\"></span>Estadisticas Anuncio</p>
                                <p><span class=\"fg-red icon mif-cross\"></span>Posicionamiento SeekerPlus</p>
                                <p><span class=\"fg-red icon mif-cross\"></span>Publicidad en Redes Sociales</p>
                                <p><span class=\"fg-red icon mif-cross\"></span>Publicidad SeekerPlus</p>
                            </div>
                            <br>
                             <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">
                             \t<button style=\" margin-left: 5rem;\" class=\"button\">Registrarse</button>
                             </a>
                        </div>
                    </div>
                    <div class=\"cell\">
                        <div class=\"panel\">
                            <div style=\"height: 10rem;\" class=\"heading\">
                                <span class=\"bg-lightOlive icon mif-dollar\"></span>
                                <span style=\"font-size: 3rem;\" class=\"title\">Plus</span>
                                <p style=\"font-size: 3rem; text-align: center; margin-top: 0rem;\" class=\"title\">\$ 100.000</p>
                                <p class=\"panelContent\">(facturados una vez al año) </p>
                            </div>
                            <div class=\"content\">
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>2 Anuncio</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Ubicacion en el Mapa</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Palabras Claves</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Descripcion</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Informacion</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>10 Productos/o Servicios</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Estadisticas Anuncio</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Posicionamiento SeekerPlus</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Publicidad en Redes Sociales</p>
                                <p><span class=\"fg-red icon mif-cross\"></span>Publicidad en SeekerPlus</p>
                            </div>
                             <br>
                             <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">
                             \t<button style=\" margin-left: 5rem;\" class=\"button fg-white bg-lightOlive\">Contactar</button>
                             </a>
                        </div>
                    </div>
                    <div class=\"cell\">
                        <div class=\"panel\">
                            <div style=\"height: 10rem;\" class=\"bg-darkCobalt heading\">
                                <span class=\"icon mif-dollars\"></span>
                                <span style=\"font-size: 3rem;\" class=\"title\">Premium</span>
                                <p style=\"font-size: 3rem; text-align: center; margin-top: 0rem;\" class=\"title\">\$ 300.000</p>
                                <p class=\"panelContent\">(facturados una vez al año) </p>
                            </div>
                            <div class=\"content\">
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>5 Anuncio</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Ubicacion en el Mapa</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Palabras Claves</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Descripcion</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Informacion</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Ilimitados Productos/o Servicios</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Estadisticas Anuncio</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Posicionamiento SeekerPlus</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Publicidad en Redes Sociales</p>
                                <p><span class=\"fg-lightOlive icon mif-checkmark\"></span>Publicidad en SeekerPlus</p>
                             </div>
                             <br>
                             <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("contactenos");
        echo "\">
                             \t<button style=\" margin-left: 5rem;\" class=\"button fg-white bg-darkCobalt\">Contactar</button>
                             </a>
                        </div>
                    </div>
                </div>
      </div>
\t</div>
\t</div>
\t";
    }

    // line 119
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 120
        $this->displayParentBlock("footer", $context, $blocks);
        echo " 
\t";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:servicios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 120,  219 => 119,  205 => 109,  176 => 83,  147 => 57,  114 => 28,  108 => 25,  103 => 24,  98 => 122,  95 => 119,  93 => 28,  90 => 27,  88 => 24,  82 => 22,  76 => 19,  71 => 18,  65 => 15,  60 => 14,  52 => 10,  44 => 6,  36 => 2,  11 => 1,);
    }
}
