<?php

/* AdsmanagerBundle:Ads:newAds.html.twig */
class __TwigTemplate_ac686bd4ed19670e3e15acf89c8633622e40e7d200515ddbd47f631357a4763c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdsmanagerBundle:Ads:newAds.html.twig", 1);
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
Crear Anuncio
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
 <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyC4Pta07pYlzbICVniGLYta4MLCrUrXrHE&sensor=false&libraries=geometry&v=3.4\" type=\"text/javascript\"></script>
 ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/maps.js"), "html", null, true);
        echo "\"></script>
<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;\">
";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("enctype" => "multipart/form-data")));
        echo "
  <div>
    <div id=\"wizard\" class=\"wizard\"
                 data-role=\"wizard\"
                 data-buttons='{\"next\": {\"show\": \"true\", \"title\": \"Siguiente\", \"cls\": \"success \"}, 
                 \t\t\t\t\"prior\": {\"show\": \"true\", \"title\": \"Atras\", \"cls\": \"primary\"}}'
                 data-stepper-clickable=\"false\">
     <div class=\"steps\">
       <div class=\"step\">
       \t\t    <div class=\"cell\" style=\"margin-top: -1rem;\">
\t\t      <div class=\"notify\">
\t\t        <span class=\"notify-icon mif-map\"></span>
\t\t        <span class=\"notify-title\">Direccion</span>
\t\t        <span class=\"notify-text\" id=\"address\"></span>
\t\t      </div>
\t\t    </div>
       \t\t\t<div id=\"mapCanvas\" class=\"marginFrame\" style=\"height: 15rem !important;overflow:hidden; width: 100% !important;\"></div>
\t\t\t  \t<div id=\"locationButton\">
\t\t\t  \t\t<a onclick=\"getMyLocation();getButtonContent(false)\" class=\"button loading-pulse lighten primary\" style=\"padding-top: 0.5rem;\">
\t\t\t  \t\t<span class=\"mif-location\"></span> Mi Ubicacion Actual</a>
\t\t\t  \t</div>
\t\t\t  \t";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adLatitude", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo " 
\t\t  \t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adLongitude", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
\t\t  \t\t
\t\t  \t\t<button style=\"float: right;\" onclick=\"showMessageHelpDialog('one');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
       \t       <div class=\"cell\">
\t\t\t   <select id=\"categories\" class=\"js-select\" data-placeholder=\"Seleccione Categoria\" style=\"width: 13rem;\">
\t\t\t   \t<optgroup>
\t\t\t   \t<option></option>
\t\t\t      ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 56
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 57
                echo "\t\t\t\t      \t</optgroup>
\t\t\t\t\t\t<optgroup label=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()));
                echo "\">
\t\t\t\t\t  ";
            } else {
                // line 59
                echo "\t 
\t\t\t\t       \t<option value='";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()));
                echo "</option>
\t\t\t\t       ";
            }
            // line 62
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t       </optgroup>
\t\t\t   </select>
\t\t\t</div>
\t    \t<br>
\t\t  ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "catid", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
\t\t  <div class=\"input-control select\" style=\"margin-bottom: 2rem;\">
\t\t  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adLocation", array()), 'row');
        echo "
\t\t  </div>
\t\t   ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adHeadline", array()), 'row');
        echo "
\t\t  ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adPhone", array()), 'row');
        echo "
\t\t  ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAddress", array()), 'row');
        echo "
\t\t  
\t\t  <button style=\"float: right;\" onclick=\"showMessageHelpDialog('two');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
\t\t  <div class=\"cell\">
\t\t     <label>Imagen</label><br>
\t\t       <div class=\"input-control file\" data-role=\"input\">
\t\t           <input id=\"ads_image\" name=\"imagen\" type=\"file\" onchange=\"readURL(this,'newImages');\" readonly=\"readonly\">
\t\t           <button type=\"button\" class=\"button\"><span class=\"mif-folder\"></span></button>
\t\t       </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t    <img id=\"newImages\" class=\"marginFrame\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
        echo "\">
\t\t  </div><br>
\t\t  ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adKeywords", array()), 'row');
        echo "
\t\t  <button style=\"float: right;\" onclick=\"showMessageHelpDialog('three');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
\t\t  ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adText", array()), 'row');
        echo "
\t\t    <h5>Horario de Atencion</h5>
\t\t  <div class=\"cell\">
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentionHoursInit", array()), 'widget');
        echo "
\t\t\t  </div>
\t\t\t  <span style=\"margin: 1rem;\">A</span>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentionHoursFinish", array()), 'widget');
        echo "
\t\t\t  </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t     <h5>Dias de Atencion</h5>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentiondaysInit", array()), 'widget');
        echo " 
\t\t\t  </div> 
\t\t\t  <span style=\"margin: 1rem;\">A</span>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adAttentiondaysFinish", array()), 'widget');
        echo "  
\t\t\t  </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t  <label class=\"input-control checkbox\">
                            <input type=\"checkbox\" required>
                            <span class=\"check\"></span>
                            <span class=\"caption\">Acepto las <a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
        echo "\" target=\"_blank\">Condiciones Del Servicio</a> y la <a href=\"";
        echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
        echo "\" target=\"_blank\">\t Politica de Privacidad</a> de SeekerPlus</span>
           </label>
           </div>
\t\t <br>
\t\t\t";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Guardar", array()), 'widget');
        echo "
\t\t <br>
\t\t <button style=\"float: right;\" onclick=\"showMessageHelpDialog('four');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
     </div>
  </div>
</div>
";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<script>
  initialize();
  \$(function(){
    \$(\"#categories\").select2({
        placeholder: \"Seleccione Categoria\",
        allowClear: true
      });
  });
  
  \$('[name=categories]').val(\"0\");
  
  function getButtonContent(button){
\t  if(button)
\t\t  \$(\"#locationButton\").html('<a onclick=\"getMyLocation();getButtonContent(false);\" class=\"button loading-pulse lighten primary\" style=\"padding-top: 0.5rem;\">\t<span class=\"mif-location\"></span> Mi Ubicacion Actual</a>');
\t  else
\t\t  \$(\"#locationButton\").html('<a onclick=\"stopLocation();getButtonContent(true);\" class=\"button loading-stop alert primary\" style=\"padding-top: 0.5rem;\">\t<span class=\"mif-stop\"></span> Detener</a>'); 
  }
  
  \$('#categories').on('change', function() {
\t\$(\"#seekerplus_adsmanagerbundle_adsmanagerads_catid\").val(this.value);
  });
  
  \$( document ).on( 'click', '.btn-help', function () {
\t  
\t});
\t
  function showMessageHelpDialog(id){
      var dialog = \$(\"#\"+id).data('dialog');
      dialog.open();
  }
</script> 
<div data-role=\"dialog\" id=\"one\" data-close-button=\"true\">
    <h1>Ubicacion del Anuncio en El Mapa</h1>
    <p>
        Selecciona el lugar donde se ubicara tu anuncio en el mapa , para ello debes dar un click en la ubicacion actual o puedes seleccionar un lugar en el mapa.
    </p>
</div> 
<div data-role=\"dialog\" id=\"two\" data-close-button=\"true\">
    <h1>Informacion Basica</h1>
    <p>
        Selecciona la categoria que se acomode a la actividad , el titulo ,telefono y direccion del Anuncio.
    </p>
</div>
<div data-role=\"dialog\" id=\"three\" data-close-button=\"true\">
    <h1>Imagen Anuncio</h1>
    <p>
        Selecciona la imagen de tu Anuncio , debes seleccionar la imagen en formato png,jpg,jpge.
        <br><br>Tambien escribe las palabras con la que deseas que encuentren el anuncio en el buscador.
    </p>
</div>
<div data-role=\"dialog\" id=\"four\" data-close-button=\"true\">
    <h1>Informacion General</h1>
    <p>
        Ingresa la descripcion de tu anuncio ,asi como el horario de atencion y los dias de atencion.
    </p>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Ads:newAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 131,  262 => 123,  253 => 119,  243 => 112,  236 => 108,  227 => 102,  220 => 98,  213 => 94,  205 => 89,  200 => 87,  183 => 73,  179 => 72,  175 => 71,  170 => 69,  165 => 67,  159 => 63,  153 => 62,  146 => 60,  143 => 59,  138 => 58,  135 => 57,  132 => 56,  128 => 55,  115 => 45,  111 => 44,  87 => 23,  82 => 21,  78 => 20,  75 => 19,  68 => 16,  64 => 15,  59 => 14,  56 => 13,  48 => 10,  40 => 6,  32 => 2,  11 => 1,);
    }
}
