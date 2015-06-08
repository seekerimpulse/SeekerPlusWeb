<?php

/* BannerBundle:Default:show.html.twig */
class __TwigTemplate_7d5a40773d780b827fe1814ca10e783979ffe3530c9619cd895bfa1f160c70f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BannerBundle:Default:show.html.twig", 1);
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
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "name", array()), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "description", array()), "html", null, true);
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
        // line 48
        echo "\t";
        $this->displayBlock('footer', $context, $blocks);
        // line 51
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
\t<h1><span class=\"mif-event-available\"></span> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "name", array()), "html", null, true);
        echo "</h1>
\t    <div class=\"grid\">
        <div class=\"row cells2\">
            <div class=\"cell\">
            \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
        // line 34
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "../../";
        echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
        echo "\" style=\"width: 30rem ! important;\"> 
\t\t\t\t<br><br><p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "description", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"cell\">
\t            <div class=\"align-center\">
\t            \t<h3><span class=\"mif-alarm-on\"></span> Expiración en</h3>
\t                <div style=\"font-size: 1rem\" class=\"countdown labels-top\" data-role=\"countdown\" data-days=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["time"]) ? $context["time"] : null), "days", array()), "html", null, true);
        echo "\" data-hours=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["time"]) ? $context["time"] : null), "hours", array()), "html", null, true);
        echo "\" data-minutes=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["time"]) ? $context["time"] : null), "minutes", array()), "html", null, true);
        echo "\" data-seconds=\"0\" data-background-color=\"bg-green\" data-divider-color=\"fg-dark\" data-label-color=\"fg-gray\"></div>
\t            </div>
            </div>
        </div>
    </div>
\t</div>
\t</div>
\t";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 49
        $this->displayParentBlock("footer", $context, $blocks);
        echo " 
\t";
    }

    public function getTemplateName()
    {
        return "BannerBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  163 => 48,  147 => 40,  139 => 35,  133 => 34,  126 => 30,  120 => 28,  114 => 25,  109 => 24,  104 => 51,  101 => 48,  99 => 28,  96 => 27,  94 => 24,  88 => 22,  82 => 19,  77 => 18,  71 => 15,  66 => 14,  58 => 10,  52 => 7,  47 => 6,  41 => 3,  36 => 2,  11 => 1,);
    }
}
