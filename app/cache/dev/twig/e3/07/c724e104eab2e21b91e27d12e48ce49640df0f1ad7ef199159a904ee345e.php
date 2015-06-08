<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_e307c724e104eab2e21b91e27d12e48ce49640df0f1ad7ef199159a904ee345e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
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
Felicitaciones
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

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"container page-content fg-dark\">
<div class=\"cell\">
   <div style=\"max-width: 30rem ! important;\" class=\"notify success\">
        <span class=\"notify-title\">El usuario se ha creado satisfactoriamente</span>
        <span class=\"notify-text\">
\t\t";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "
        </span>
   </div>
</div>
<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><button class=\"button primary\">Inicio</button></a>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  65 => 19,  58 => 14,  55 => 13,  47 => 10,  39 => 6,  31 => 2,  11 => 1,);
    }
}
