<?php

/* FOSFacebookBundle::loginButton.html.twig */
class __TwigTemplate_0816292926e10bfd3049be599c4ab37692cbbd12257bbad07ffcdf4ba351e3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fb-login-button\" data-show-faces=\"";
        echo twig_escape_filter($this->env, (isset($context["showFaces"]) ? $context["showFaces"] : null), "html", null, true);
        echo "\" data-size=\"";
        echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
        echo "\" data-scope=\"";
        echo twig_escape_filter($this->env, (isset($context["scope"]) ? $context["scope"] : null), "html", null, true);
        echo "\" data-autologoutlink=\"";
        echo twig_escape_filter($this->env, (isset($context["autologoutlink"]) ? $context["autologoutlink"] : null), "html", null, true);
        echo "\" data-width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" data-max-rows=\"";
        echo twig_escape_filter($this->env, (isset($context["maxRows"]) ? $context["maxRows"] : null), "html", null, true);
        echo "\"  data-onlogin=\"";
        echo twig_escape_filter($this->env, (isset($context["onlogin"]) ? $context["onlogin"] : null), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::loginButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 2,  19 => 1,);
    }
}
