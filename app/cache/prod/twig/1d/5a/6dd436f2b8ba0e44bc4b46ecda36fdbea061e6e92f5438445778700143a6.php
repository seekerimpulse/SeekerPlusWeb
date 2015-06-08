<?php

/* BannerBundle:Default:noExist.html.twig */
class __TwigTemplate_1d5a6dd436f2b8ba0e44bc4b46ecda36fdbea061e6e92f5438445778700143a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BannerBundle:Default:noExist.html.twig", 1);
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
Banner no Encontrado
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 

";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 

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
        // line 36
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 39
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
\t<h1><span class=\"mif-blocked\"></span> Banner no Encontrado</h1>
\t<h3>¡Ouh! El banner no existe o no esta publicado.</h3>
\t<img id=\"newImages\" class=\"marginFrame\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
        echo "\">
\t</div>
\t</div>
\t";
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 37
        $this->displayParentBlock("footer", $context, $blocks);
        echo " 
\t";
    }

    public function getTemplateName()
    {
        return "BannerBundle:Default:noExist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 37,  130 => 36,  122 => 32,  114 => 28,  108 => 25,  103 => 24,  98 => 39,  95 => 36,  93 => 28,  90 => 27,  88 => 24,  82 => 22,  76 => 19,  71 => 18,  65 => 15,  60 => 14,  52 => 10,  44 => 6,  36 => 2,  11 => 1,);
    }
}
