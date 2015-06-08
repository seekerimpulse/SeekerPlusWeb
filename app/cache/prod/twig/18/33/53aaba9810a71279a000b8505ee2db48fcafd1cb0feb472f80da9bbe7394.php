<?php

/* FOSFacebookBundle::initialize.html.twig */
class __TwigTemplate_183353aaba9810a71279a000b8505ee2db48fcafd1cb0feb472f80da9bbe7394 extends Twig_Template
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
        echo "<div id=\"fb-root\"></div>
";
        // line 2
        if ( !(isset($context["async"]) ? $context["async"] : null)) {
            // line 3
            echo "<script type=\"text/javascript\" src=\"http://connect.facebook.net/";
            echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : null), "html", null, true);
            echo "/all.js\"></script>
";
        }
        // line 5
        echo "<script type=\"text/javascript\">
";
        // line 7
        if ((isset($context["async"]) ? $context["async"] : null)) {
            // line 8
            echo "window.fbAsyncInit = function() {
";
        }
        // line 10
        echo "  FB.init(";
        echo twig_jsonencode_filter(array("appId" => (isset($context["appId"]) ? $context["appId"] : null), "xfbml" => (isset($context["xfbml"]) ? $context["xfbml"] : null), "oauth" => (isset($context["oauth"]) ? $context["oauth"] : null), "status" => (isset($context["status"]) ? $context["status"] : null), "cookie" => (isset($context["cookie"]) ? $context["cookie"] : null), "logging" => (isset($context["logging"]) ? $context["logging"] : null), "channelUrl" => (isset($context["channelUrl"]) ? $context["channelUrl"] : null)));
        echo ");
";
        // line 11
        if ((isset($context["async"]) ? $context["async"] : null)) {
            // line 12
            echo "  ";
            echo (isset($context["fbAsyncInit"]) ? $context["fbAsyncInit"] : null);
            echo "
};

(function() {
  var e = document.createElement('script');
  e.src = document.location.protocol + ";
            // line 17
            echo twig_jsonencode_filter(sprintf("//connect.facebook.net/%s/all.js", (isset($context["culture"]) ? $context["culture"] : null)));
            echo ";
  e.async = true;
  document.getElementById('fb-root').appendChild(e);
}());
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "FOSFacebookBundle::initialize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  55 => 17,  46 => 12,  44 => 11,  39 => 10,  35 => 8,  33 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
