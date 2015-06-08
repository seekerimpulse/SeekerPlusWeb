<?php

/* AdsmanagerBundle:Ads:editAds.html.twig */
class __TwigTemplate_51fcc04866d340b4e189ffeff674ed641a9563f66be0cee8ca43b27b3f518257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdsmanagerBundle:Ads:editAds.html.twig", 1);
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
Modificar ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "adHeadline", array()), "html", null, true);
        echo "
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
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("enctype" => "multipart/form-data")));
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
\t\t        <span class=\"notify-title\">Direccion de <b>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "adHeadline", array()), "html", null, true);
        echo "</b></span>
\t\t        <span class=\"notify-text\" id=\"address\"></span>
\t\t      </div>
\t\t      
\t\t    </div>
       \t\t\t<div id=\"mapCanvas\" class=\"marginFrame\" style=\"height: 15rem !important;overflow:hidden; width: 100% !important;\"></div>
\t\t\t  \t<div id=\"locationButton\">
\t\t\t  \t\t<a onclick=\"getMyLocation();getButtonContent(false)\" class=\"button loading-pulse lighten primary\" style=\"padding-top: 0.5rem;\">
\t\t\t  \t\t<span class=\"mif-location\"></span> Mi Ubicacion Actual</a>
\t\t\t  \t</div>
\t\t\t  \t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adLatitude", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo " 
\t\t  \t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adLongitude", array()), 'widget', array("attr" => array("style" => "display:none")));
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
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 58
            echo "\t\t\t\t      ";
            if (($this->getAttribute($context["field"], "parent", array()) == 0)) {
                // line 59
                echo "\t\t\t\t      \t</optgroup>
\t\t\t\t\t\t<optgroup label=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()));
                echo "\">
\t\t\t\t\t  ";
            } else {
                // line 61
                echo "\t 
\t\t\t\t\t     <option value='";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()));
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()));
                echo "</option>
\t\t\t\t      ";
            }
            // line 64
            echo "\t\t\t       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t       </optgroup>
\t\t\t   </select>
\t\t\t</div>
\t    \t<br>
\t\t  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "catid", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
\t\t  <div class=\"input-control select\" style=\"margin-bottom: 2rem;\">
\t\t  ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adLocation", array()), 'row');
        echo "
\t\t  </div>
\t\t   ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adHeadline", array()), 'row');
        echo "
\t\t  ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adPhone", array()), 'row');
        echo "
\t\t  ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adAddress", array()), 'row');
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
\t\t    ";
        // line 89
        if (((isset($context["image"]) ? $context["image"] : null) == "noImages.jpg")) {
            // line 90
            echo "\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
            echo "\">
\t\t    ";
        } else {
            // line 92
            echo "\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "\">
\t\t    ";
        }
        // line 94
        echo "\t\t  </div><br>
\t\t  ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adKeywords", array()), 'row');
        echo "
\t\t  <button style=\"float: right;\" onclick=\"showMessageHelpDialog('three');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
       <div class=\"step\">
\t\t  ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adText", array()), 'row');
        echo "
\t\t    <h5>Horario de Atencion</h5>
\t\t  <div class=\"cell\">
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adAttentionHoursInit", array()), 'widget');
        echo "
\t\t\t  </div>
\t\t\t  <span style=\"margin: 1rem;\">A</span>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adAttentionHoursFinish", array()), 'widget');
        echo "
\t\t\t  </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t     <h5>Dias de Atencion</h5>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adAttentiondaysInit", array()), 'widget');
        echo " 
\t\t\t  </div> 
\t\t\t  <span style=\"margin: 1rem;\">A</span>
\t\t\t  <div class=\"input-control select\" style=\"min-width: 5rem;\">
\t\t\t  ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adAttentiondaysFinish", array()), 'widget');
        echo "  
\t\t\t  </div>
\t\t  </div>
\t\t  <div class=\"cell\">
\t\t  <label class=\"input-control checkbox\">
                            <input type=\"checkbox\" required>
                            <span class=\"check\"></span>
                            <span class=\"caption\">Acepto las <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
        echo "\" target=\"_blank\">Condiciones Del Servicio</a> y la <a href=\"";
        echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
        echo "\" target=\"_blank\">\t Politica de Privacidad</a> de SeekerPlus</span>
           </label>
           </div>
\t\t <br>
\t\t\t";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Guardar", array()), 'widget');
        echo "
\t\t <br>
\t\t <button style=\"float: right;\" onclick=\"showMessageHelpDialog('four');\" class=\"btn-help cycle-button medium-button\" 
\t\t  \t\ttype=\"button\">?</button>
       </div>
     </div>
  </div>
</div>
";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
<script>
  \$('#categories').val(\$(\"#seekerplus_adsmanagerbundle_adsmanagerads_catid\").val());
  latitude=";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "adLatitude", array()), "html", null, true);
        echo ";
  longitude=";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "value", array()), "adLongitude", array()), "html", null, true);
        echo ";
  initialize();
  map.setZoom(16);
  circle.setVisible(true);
  
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
        return "AdsmanagerBundle:Ads:editAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 141,  302 => 140,  296 => 137,  285 => 129,  276 => 125,  266 => 118,  259 => 114,  250 => 108,  243 => 104,  236 => 100,  228 => 95,  225 => 94,  216 => 92,  210 => 90,  208 => 89,  191 => 75,  187 => 74,  183 => 73,  178 => 71,  173 => 69,  167 => 65,  161 => 64,  154 => 62,  151 => 61,  146 => 60,  143 => 59,  140 => 58,  136 => 57,  123 => 47,  119 => 46,  106 => 36,  91 => 24,  85 => 21,  81 => 20,  78 => 19,  71 => 16,  67 => 15,  62 => 14,  59 => 13,  51 => 10,  43 => 6,  37 => 3,  32 => 2,  11 => 1,);
    }
}
