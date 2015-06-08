<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b5d36ead9f51175e63589129bd1dd5b6f3db050ae2778d555457256fc232d2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
Iniciar Sesión
";
    }

    // line 6
    public function block_description($context, array $blocks = array())
    {
        echo " 
Iniciar Sesión en SeekerPlus.
";
    }

    // line 10
    public function block_keywords($context, array $blocks = array())
    {
        echo " 
login seekerplus
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"container page-content fg-dark\">
";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 17
            echo "<div class=\"cell\">
   <div class=\"notify alert\">
        <span class=\"notify-title\">Error</span>
        <span class=\"notify-text\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</span>
   </div>
</div>
";
        }
        // line 24
        echo "<h1><span class=\"mif-user\"></span>Iniciar Sesión</h1>
<br>
";
        // line 26
        echo $this->env->getExtension('facebook')->renderInitialize(array("xfbml" => true, "fbAsyncInit" => "onFbInit();"));
        echo "

";
        // line 28
        echo $this->env->getExtension('facebook')->renderLoginButton(array("autologoutlink" => true, "size" => "xlarge", "label" => "Login con Facebook"));
        echo "
<script>
  function goLogIn(){
\t  window.location = \"";
        // line 31
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
<form action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
    <label for=\"username\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>
    <div class=\"input-control text\">
\t\t<span class=\"mif-user prepend-icon\"></span>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t</div><br>
\t
    <label for=\"password\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>
\t<div class=\"input-control text\">
\t\t<span class=\"mif-lock prepend-icon\"></span> 
\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t</div><br>
    

    
    <label class=\"input-control checkbox\">
       <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" checked/>
       <span class=\"check\"></span>
       <span class=\"caption\"><label for=\"remember_me\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
    </label>
    <br><br>
    <input class=\"primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
\t\t<br>
\t\t<a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"><span class=\"mif-lock\"></span>¿Olvidaste tu contraseña?</a> 
<br>
<br>
<h5>¿No dispones de una cuenta en SeekerPlus? 
\t<a href=\"/SeekerPlusWeb/web/app_dev.php/register/\">Regístrate ahora</a>
</h5>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  146 => 66,  140 => 63,  126 => 52,  120 => 49,  114 => 46,  110 => 45,  106 => 44,  90 => 31,  84 => 28,  79 => 26,  75 => 24,  68 => 20,  63 => 17,  61 => 16,  58 => 15,  55 => 14,  47 => 10,  39 => 6,  31 => 2,  11 => 1,);
    }
}
