<?php

/* PagesBundle:Default:contactenos.html.twig */
class __TwigTemplate_1402399ce05e3df9dab1b2c35496b3c1b2dd1b69634086e14e160885acbf2ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:contactenos.html.twig", 1);
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
Contactenos
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
Contáctese con nosotros enviandonos un mensaje.
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
contacto seekerplus
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
        // line 61
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 64
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
\t<h1><span class=\"mif-contacts-mail\"></span> Contactenos</h1>
\t\t<div class=\"cell\">
\t\t    <div class=\"input-control modern text\">
\t\t      <input id=\"producto_nombre\" name=\"producto[nombre]\" required=\"required\" maxlength=\"100\" placeholder=\"Nombre \" type=\"text\">
\t\t      <span class=\"informer\">Porfavor Ingrese su Nombre</span>
\t\t    </div>
\t\t  </div>
\t\t<div class=\"cell\">
\t\t    <div class=\"input-control modern text\">
\t\t      <input id=\"producto_nombre\" name=\"producto[nombre]\" required=\"required\" maxlength=\"100\" placeholder=\"Email\" type=\"text\">
\t\t      <span class=\"informer\">Porfavor Ingrese su Email</span>
\t\t    </div>
\t\t  </div>
\t    <div class=\"input-control block textarea\">
\t        <div class=\"input-control modern block text full-size\" style=\"margin-top: 2rem;margin-bottom: 4rem;\">
\t      \t\t<textarea id=\"producto_descripcion\" name=\"producto[descripcion]\" required=\"required\" placeholder=\"Comentario\"></textarea>
\t    \t</div>
        </div>
        <div>
        \t<button class=\"button success\">Enviar Comentario</button>
        </div>
        <br>
        <p>Estimado usuario: Es posible que los comentarios relacionados con cualquier petición, queja y/o reclamo que usted desea presentar por este medio, 
        no lleguen a través del portal de www.seekerplus.co.</p>
        <p>Por lo tanto,en caso de que su comentario no haya sido atendido por nosotros en un plazo de cinco(5) días contados desde su envío, 
        atentamente le solicitamos que nos escriba a través de los correos electrónicos 
        info@seekerimpulse.co. Lo anterior,
        con el fin de poder brindarle una atención completa, rápida y efectiva</p>
\t</div>
\t</div>
\t";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 62
        $this->displayParentBlock("footer", $context, $blocks);
        echo " 
\t";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:contactenos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  152 => 61,  114 => 28,  108 => 25,  103 => 24,  98 => 64,  95 => 61,  93 => 28,  90 => 27,  88 => 24,  82 => 22,  76 => 19,  71 => 18,  65 => 15,  60 => 14,  52 => 10,  44 => 6,  36 => 2,  11 => 1,);
    }
}
