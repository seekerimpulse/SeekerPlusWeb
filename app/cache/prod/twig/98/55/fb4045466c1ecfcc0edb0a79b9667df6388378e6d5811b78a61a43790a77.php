<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9855fb4045466c1ecfcc0edb0a79b9667df6388378e6d5811b78a61a43790a77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
Registrarse
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
Crear Cuenta en SeekerPlus.
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
Crear Cuenta seekerplus
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"container page-content fg-dark\">
<h1><span class=\"mif-user-plus\"></span> Crear Cuenta</h1>
<br>
";
        // line 17
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

";
        // line 19
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true, "size" => "large", "label" => "Crear cuenta con Facebook"));
        echo "
<script>
  function goLogIn(){
\t  window.location = \"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\";
  }
  function onFbInit() {
\t  if (typeof(FB) != 'undefined' && FB != null ) {
\t\t  FB.Event.subscribe('auth.statusChange', function(response) {
\t\t\t  setTimeout(goLogIn, 500);
\t\t  });
\t  }
  }
</script>
<br>
<br>
<br>
";
        // line 35
        $this->loadTemplate("UserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 35)->display($context);
        // line 36
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  90 => 35,  74 => 22,  68 => 19,  63 => 17,  58 => 14,  55 => 13,  47 => 10,  39 => 6,  31 => 2,  11 => 1,);
    }
}
