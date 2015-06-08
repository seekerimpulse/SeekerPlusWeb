<?php

/* AdsmanagerBundle:Ads:myAds.html.twig */
class __TwigTemplate_fb2ea3e27ecc05ba5b175ceecc6c6fd95cda78355abb9a393039103e0bcd7807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdsmanagerBundle:Ads:myAds.html.twig", 1);
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
Mis Anuncios
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
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<div class=\"container page-content fg-dark\" style=\"padding: 0.5rem;\">
<h1><span class=\"mif-file-text\"></span> Mis Anuncios</h1>
<div class=\"cell\">
\t<div class=\"listview-outlook\" data-role=\"listview\">
\t\t<div class=\"list-group \">
        \t<span class=\"list-group-toggle\">Anuncios</span>
        \t <div class=\"list-group-content\">
\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ads"]) ? $context["ads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 26
            echo "\t\t\t\t<div class=\"list\">
                   <div class=\"list-content\">
                      <span class=\"list-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo "</span>
                      <span class=\"list-subtitle\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adText", array()));
            echo "</span>
                      <span class=\"list-remark\"><span class=\"mif-phone\"></span>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adPhone", array()));
            echo "</span>
                      <span class=\"list-remark\"><span class=\"mif-location\"></span> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adAddress", array()));
            echo "</span>
                      <span class=\"list-title\"><span class=\"mif-earth\"></span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adLocation", array()));
            echo "</span>
                      <span class=\"list-remark\">Creado el    : ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "dateCreated", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                      <span class=\"list-remark\">Valido Hasta : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "expirationDate", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                      <span class=\"list-remark\">Ultima Modificacion : ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "dateModified", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                      <span class=\"place-right\" style=\"float: right; margin-top: -8rem;\">\t\t    
                      ";
            // line 37
            if (($this->getAttribute($context["field"], "images", array()) == "noImages.jpg")) {
                // line 38
                echo "\t\t\t\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                echo "\">
\t\t\t\t\t  ";
            } else {
                // line 40
                echo "\t\t\t\t\t    \t<img id=\"newImages\" class=\"marginFrame\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "images", array()), "html", null, true);
                echo "\">
\t\t\t\t\t  ";
            }
            // line 41
            echo "</span>
                      <br>
     
                      \t<label class=\"switch\">
                      \t";
            // line 45
            if (($this->getAttribute($context["field"], "published", array()) == 1)) {
                // line 46
                echo "                            Publicado <input checked=\"\" type=\"checkbox\">
                        ";
            } else {
                // line 48
                echo "                            Despublicado <input  type=\"checkbox\">
                        ";
            }
            // line 50
            echo "                            <span class=\"check\"></span>
                        </label>\t
                    </div>
                 </div><br><br>
\t     \t\t<div class=\"treeview\" data-role=\"treeview\">
                <ul>
                 <li class=\"node active collapsed\">
                         <span class=\"leaf\"><span class=\"mif-tags\"></span> Productos y/o Servicios</span>
                         <span class=\"node-toggle\"></span>
                   <ul>
                   \t<li>
\t\t\t          <table class=\"table striped\">
\t\t\t          <tbody>
\t\t\t          <thead>
\t\t\t          <th></th>
\t\t\t          <th></th>
\t\t\t          <th></th>
\t\t\t          </thead>
\t\t\t              ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "getProducts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                echo "\t\t\t                
\t\t\t                <tr>
\t\t\t                    <td style=\"width: 4rem ! important;\">
\t\t\t\t\t\t\t          ";
                // line 72
                if (($this->getAttribute($context["product"], "images", array()) == "noImages.jpg")) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t    \t<img style=\"width: 5rem ! important; height: 5rem ! important;\" class=\"marginFrame\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/noImages.jpg"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t  ";
                } else {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t    \t<img style=\"width: 5rem ! important; height: 5rem ! important;\" class=\"marginFrame\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/ids/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "images", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t  ";
                }
                // line 76
                echo "</span>
\t\t\t                      \t
\t\t\t\t\t\t\t\t</td>
\t\t\t                    <td>
\t\t\t                    <h4>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</h4>
\t\t\t                    <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
                echo "</span>
\t\t\t                  \t</td>
\t\t\t                  \t<td style=\"width: 7rem;\">
\t\t\t                  \t  <p>\$ ";
                // line 84
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0), "html", null, true);
                echo "</p>
\t\t\t                  \t</td>
\t\t\t                  \t\t\t\t\t            <td>
\t\t\t                 <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_product_ads", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\"class=\"button warning\"> Modificar</a>
 \t\t\t\t\t\t\t <br><a onclick=\"showMessageProductDeleteDialog('";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "');\" class=\"button alert\"> Eliminar </a>
               \t\t\t\t</td>
\t\t\t                </tr>
\t\t\t   <div data-role=\"dialog\" id=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo "\" data-close-button=\"true\" data-type=\"alert\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Eliminar Producto</h1>
\t\t\t\t\t  <p>Esta a punto de eliminar el anuncio ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()));
                echo " , al eliminar el registro la informacion no se podra recuperar.
\t\t\t\t\t  <p>
\t\t\t\t\t      ¿ Esta seguro que desea eliminar el anuncio ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()));
                echo " ?.
\t\t\t\t\t  </p>
\t\t\t\t\t  <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_product_ads", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" class=\"button fg-black\"><span class=\"mif-warning\"></span> Eliminar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "        
\t\t\t         \t\t</tbody>
\t\t\t         </table>
                   </li>
                  </ul>
               </li>
              </ul>
              </div>     
                <span>
                <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("new_ads_product", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\"class=\"button success\"><span class=\"mif-plus\"></span> Agregar Producto</a>
                </span>
                
                <span class=\"list-subtitle\" style=\"float: right; padding-top: 1rem; padding-bottom: 2rem;\">
                 <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\"class=\"button link\"><span class=\"mif-mail\"></span> Mensajes</a>
                 <a onclick=\"showMessageRenewDialog('p";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "');\" class=\"button primary\">Renovar</a>
                 <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button warning\">Modificar</a>
                 <a onclick=\"showMessageDeleteDialog('";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "');\" class=\"button alert\">Eliminar</a>
                </span><br><br><br><br>
                <div data-role=\"dialog\" id=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "\" data-close-button=\"true\" data-type=\"alert\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Eliminar Anuncio</h1>
\t\t\t\t\t  <p>Esta a punto de eliminar el anuncio ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo " , al eliminar el registro la informacion no se podra recuperar.
\t\t\t\t\t  <p>
\t\t\t\t\t      ¿ Esta seguro que desea eliminar el anuncio ";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo " ?.
\t\t\t\t\t  </p>
\t\t\t\t\t  <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button fg-black\"><span class=\"mif-warning\"></span> Eliminar</a>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t\t<div data-role=\"dialog\" id=\"p";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "id", array()), "html", null, true);
            echo "\" data-close-button=\"true\" class=\"success\" data-windows-style=\"true\">
\t\t\t\t\t<div style=\"padding: 2rem;\">
\t\t\t\t\t  <h1>Renovar Anuncio</h1>
\t\t\t\t\t  <p>Esta a punto de renovar el anuncio ";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "adHeadline", array()));
            echo " , se agregara un año mas apartir de hoy.
\t\t\t\t\t  <p>
\t\t\t\t\t  <span class=\"caption\">Acepto las <a class=\"fg-black\" href=\"";
            // line 134
            echo $this->env->getExtension('routing')->getPath("condicionesDeUso");
            echo "\" target=\"_blank\">Condiciones Del Servicio</a> y la <a class=\"fg-black\" href=\"";
            echo $this->env->getExtension('routing')->getPath("politicasDePrivacidad");
            echo "\" target=\"_blank\">\t Politica de Privacidad</a> de SeekerPlus</span>
\t\t\t\t\t  </p>
\t\t\t\t\t  <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ads", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button fg-black\"><span class=\"mif-alarm\"></span> Aceptar</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "\t\t    <br><br>
\t\t    <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("new_ads");
        echo "\" class=\"button success\"><span class=\"mif-plus\"></span> Nuevo</a>
         \t</div><br>
    \t</div>

\t\t<div class=\"list-group collapsed\">
\t    \t<span class=\"list-group-toggle\">Banners</span>
\t        <div class=\"list-group-content\">
\t        \t";
        // line 148
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 149
            echo "\t        \t<div class=\"list\">
\t            \t<div class=\"list-content\">
\t                \t<span class=\"list-title\"><span class=\"place-right icon-flag-2 fg-red smaller\"></span>";
            // line 151
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "name", array()), "html", null, true);
            echo "</span>
\t                    <span class=\"list-subtitle\">
\t                    <img id=\"newImages\" class=\"marginFrame\" src=\"";
            // line 153
            echo $this->env->getExtension('routing')->getUrl("index");
            echo "../../";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "params", array()), "html", null, true);
            echo "\" style=\"width: 30rem ! important;\"> 
\t                    </span>
\t                    <p>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "description", array()), "html", null, true);
            echo "</p><br><br>
\t                    <label class=\"switch\">
                      \t";
            // line 157
            if (($this->getAttribute($context["field"], "state", array()) == 1)) {
                // line 158
                echo "                            Publicado <input checked=\"\" type=\"checkbox\">
                        ";
            } else {
                // line 160
                echo "                            Expirado <input  type=\"checkbox\">
                        ";
            }
            // line 162
            echo "                            <span class=\"check\"></span>
                        </label>
                        <span class=\"list-subtitle\">Inicio   : ";
            // line 164
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "publishUp", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                        <span class=\"list-subtitle\">Finaliza : ";
            // line 165
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["field"], "publishDown", array()), "Y-m-d"), "html", null, true);
            echo "</span>
\t                    <span class=\"list-remark\">Impresiones</span>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "impmade", array()), "html", null, true);
            echo "
\t                    <span class=\"list-remark\">Clicks</span>";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "clicks", array()), "html", null, true);
            echo "<br>
\t                </div>
\t            </div>
\t            <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_banner", array("id" => $this->getAttribute($context["field"], "id", array()))), "html", null, true);
            echo "\" class=\"button primary\"><span class=\"mif-eye\"></span> Ver</a>
\t            <br><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "\t        </div>
\t    </div>
\t</div>
</div>
<script type=\"text/javascript\">
function showMessageDeleteDialog(id){
    var dialog = \$(\"#\"+id).data('dialog');
    dialog.open();
}

function showMessageProductDeleteDialog(id){
    var dialog = \$(\"#\"+id).data('dialog');
    dialog.open();
}

function showMessageRenewDialog(id){
    var dialog = \$(\"#\"+id).data('dialog');
    dialog.open();
}
</script>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AdsmanagerBundle:Ads:myAds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 173,  413 => 170,  407 => 167,  403 => 166,  399 => 165,  395 => 164,  391 => 162,  387 => 160,  383 => 158,  381 => 157,  376 => 155,  369 => 153,  364 => 151,  360 => 149,  356 => 148,  346 => 141,  343 => 140,  333 => 136,  326 => 134,  321 => 132,  315 => 129,  309 => 126,  304 => 124,  299 => 122,  293 => 119,  288 => 117,  284 => 116,  280 => 115,  276 => 114,  269 => 110,  258 => 101,  248 => 98,  243 => 96,  238 => 94,  232 => 91,  226 => 88,  222 => 87,  216 => 84,  210 => 81,  206 => 80,  200 => 76,  191 => 75,  185 => 73,  183 => 72,  178 => 69,  174 => 68,  154 => 50,  150 => 48,  146 => 46,  144 => 45,  138 => 41,  129 => 40,  123 => 38,  121 => 37,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 26,  80 => 25,  69 => 17,  66 => 16,  59 => 14,  56 => 13,  48 => 10,  40 => 6,  32 => 2,  11 => 1,);
    }
}
