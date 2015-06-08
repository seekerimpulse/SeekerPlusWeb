<?php

/* AdsmanagerBundle:Product:editProductAds.html.twig */
class __TwigTemplate_dc62e09338cba1512d2881d434b99074c7c85fb92517575cd63ee504ae772f73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdsmanagerBundle:Product:editProductAds.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'javascripts' => array($this, 'block_javascripts'),
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
Modificar Producto Anuncio
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
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
 <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/myJs.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;\">
<h1><span class=\"mif-tag\"></span> Modificar Producto</h1><br>
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("enctype" => "multipart/form-data")));
        echo "

\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "

\t\t  <div class=\"cell\">
\t\t     <label>Imagen</label><br>
\t\t       <div class=\"input-control file\" data-role=\"input\">
\t\t           <input id=\"ads_image\" name=\"imagen\" type=\"file\" onchange=\"readURL(this,'newImages');\" readonly=\"readonly\">
\t\t           <button type=\"button\" class=\"button\"><span class=\"mif-folder\"></span></button>
\t\t       </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t    ";
        // line 34
        if (((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")) == "noImages.jpg")) {
            // line 35
            echo "\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
            echo "\">
\t\t    ";
        } else {
            // line 37
            echo "\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "html", null, true);
            echo "\">
\t\t    ";
        }
        // line 39
        echo "\t\t  </div><br>
\t\t    <div class=\"cell\">
    <div class=\"input-control modern text\" style=\"margin-bottom: 4rem;\">
      <input style=\"height: 2rem;\" type=\"text\" id=\"price\" name=\"price\" required=\"required\" placeholder=\"Precio\"
              onkeyup=\"numberSeparator(this,this.value.charAt(this.value.length-1))\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : $this->getContext($context, "price")), "html", null, true);
        echo "\">
      <span class=\"label\">Obligatorio</span>
      <span class=\"informer\">Porfavor Ingrese el Precio</span>
    </div>
  </div>
";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Product:editProductAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  124 => 43,  118 => 39,  109 => 37,  103 => 35,  101 => 34,  88 => 24,  84 => 23,  79 => 21,  73 => 18,  70 => 17,  64 => 15,  59 => 14,  56 => 13,  48 => 10,  40 => 6,  32 => 2,  11 => 1,);
    }
}
