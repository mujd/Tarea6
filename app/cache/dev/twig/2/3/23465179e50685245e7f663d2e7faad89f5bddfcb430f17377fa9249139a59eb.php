<?php

/* ::layout.html.twig */
class __TwigTemplate_23465179e50685245e7f663d2e7faad89f5bddfcb430f17377fa9249139a59eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'seccion2' => array($this, 'block_seccion2'),
            'seccion1' => array($this, 'block_seccion1'),
            'seccion3' => array($this, 'block_seccion3'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b5837cd8519a2c33d623218f4236ea79e3791009f441a38978c4db4336c6146 = $this->env->getExtension("native_profiler");
        $__internal_1b5837cd8519a2c33d623218f4236ea79e3791009f441a38978c4db4336c6146->enter($__internal_1b5837cd8519a2c33d623218f4236ea79e3791009f441a38978c4db4336c6146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("//code.jquery.com/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/suitestd/codebase/dhtmlx.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/dhtmlxSuite_v50_std/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\" class=\"init\"  >

            \$(document).ready(function () {
                \$('#example').DataTable({
                    \"language\": {
                        \"lengthMenu\": \"Mostrar _MENU_ Registros por pagína\",
                        \"zeroRecords\": \"No se encontraron registros.\",
                        \"info\": \"Mostrando Pagina _PAGE_ de _PAGES_\",
                        \"infoEmpty\": \"No hay registros disponibles con ese nombre\",
                        \"infoFiltered\": \"(Registros disponibles: _MAX_)\",
                        \"infoPostFix\": \"\",
                        \"thousands\": \",\",
                        \"loadingRecords\": \"Cargando...\",
                        \"processing\": \"Procesando...\",
                        \"search\": \"Buscar:\",
                        \"paginate\": {
                            \"first\": \"Primero\",
                            \"last\": \"Ultimo\",
                            \"next\": \"Siguiente\",
                            \"previous\": \"Anterior\", },
                        \"aria\": {
                            \"sortAscending\": \": activar el ordenar columnas de forma ascendente\",
                            \"sortDescending\": \": activar el ordenar columnas de forma descendente\"
                        }

                    }
                });
            });

        </script>
    </head>
    <body>


        <section class=\"jumbotron jumbotron\">
           
            <div class=\"container\">
                ";
        // line 55
        $this->displayBlock('seccion2', $context, $blocks);
        // line 58
        echo "                
            </div>
        </section>
        <section class=\"main container\" id=\"menus\">
            ";
        // line 68
        echo "            </div>
            <aside class=\"col-lg-2\">
                ";
        // line 70
        $this->displayBlock('seccion1', $context, $blocks);
        // line 84
        echo "            </aside>

            ";
        // line 86
        $this->displayBlock('seccion3', $context, $blocks);
        // line 89
        echo "        </section>

    ";
        // line 91
        $this->displayBlock('javascript', $context, $blocks);
        // line 92
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/suitestd/codebase/dhtmlx.js"), "html", null, true);
        echo "\"></script>



</body>
</html>
";
        
        $__internal_1b5837cd8519a2c33d623218f4236ea79e3791009f441a38978c4db4336c6146->leave($__internal_1b5837cd8519a2c33d623218f4236ea79e3791009f441a38978c4db4336c6146_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a915472a9c7730b3102c55de473f0870ebe68f62aa0a7e4925b4dc268af2901 = $this->env->getExtension("native_profiler");
        $__internal_7a915472a9c7730b3102c55de473f0870ebe68f62aa0a7e4925b4dc268af2901->enter($__internal_7a915472a9c7730b3102c55de473f0870ebe68f62aa0a7e4925b4dc268af2901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mantenedores!";
        
        $__internal_7a915472a9c7730b3102c55de473f0870ebe68f62aa0a7e4925b4dc268af2901->leave($__internal_7a915472a9c7730b3102c55de473f0870ebe68f62aa0a7e4925b4dc268af2901_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d17e0cebdd4ca77f8ef63928f49ef6b02e5cd7b622a5fdc5da5a86bb455d2fbf = $this->env->getExtension("native_profiler");
        $__internal_d17e0cebdd4ca77f8ef63928f49ef6b02e5cd7b622a5fdc5da5a86bb455d2fbf->enter($__internal_d17e0cebdd4ca77f8ef63928f49ef6b02e5cd7b622a5fdc5da5a86bb455d2fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "            
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            ";
        // line 10
        echo "   
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>            

        ";
        
        $__internal_d17e0cebdd4ca77f8ef63928f49ef6b02e5cd7b622a5fdc5da5a86bb455d2fbf->leave($__internal_d17e0cebdd4ca77f8ef63928f49ef6b02e5cd7b622a5fdc5da5a86bb455d2fbf_prof);

    }

    // line 55
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_bdde18ff13f050beeee6c93c6970d4c21e07f04ab996e6207dab7fad7501ef12 = $this->env->getExtension("native_profiler");
        $__internal_bdde18ff13f050beeee6c93c6970d4c21e07f04ab996e6207dab7fad7501ef12->enter($__internal_bdde18ff13f050beeee6c93c6970d4c21e07f04ab996e6207dab7fad7501ef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        // line 56
        echo "                       
                ";
        
        $__internal_bdde18ff13f050beeee6c93c6970d4c21e07f04ab996e6207dab7fad7501ef12->leave($__internal_bdde18ff13f050beeee6c93c6970d4c21e07f04ab996e6207dab7fad7501ef12_prof);

    }

    // line 70
    public function block_seccion1($context, array $blocks = array())
    {
        $__internal_891146e94e1f35e917895957995257a8bcf23ccbebf1c2dbe13bb4379ea018a5 = $this->env->getExtension("native_profiler");
        $__internal_891146e94e1f35e917895957995257a8bcf23ccbebf1c2dbe13bb4379ea018a5->enter($__internal_891146e94e1f35e917895957995257a8bcf23ccbebf1c2dbe13bb4379ea018a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion1"));

        // line 71
        echo "                    <div class=\"list-group\">
                        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("mrf_home_homepage");
        echo "\"><h4 class=\"abc\">Menu para:</h4></a>
                        ";
        // line 73
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MRFUsuarioBundle:Menu:list"));
        echo "


                        <strong class=\"list-group-item\">    
                            ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d - m -Y"), "html", null, true);
        echo "

                            ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i:s", "America/Santiago"), "html", null, true);
        echo "

                        </strong>
                    </div>
                ";
        
        $__internal_891146e94e1f35e917895957995257a8bcf23ccbebf1c2dbe13bb4379ea018a5->leave($__internal_891146e94e1f35e917895957995257a8bcf23ccbebf1c2dbe13bb4379ea018a5_prof);

    }

    // line 86
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_80dfd7a6e0fb8deca6a1e96f4f2352720142d2dcc557643fe1460da696f8a801 = $this->env->getExtension("native_profiler");
        $__internal_80dfd7a6e0fb8deca6a1e96f4f2352720142d2dcc557643fe1460da696f8a801->enter($__internal_80dfd7a6e0fb8deca6a1e96f4f2352720142d2dcc557643fe1460da696f8a801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 87
        echo "
            ";
        
        $__internal_80dfd7a6e0fb8deca6a1e96f4f2352720142d2dcc557643fe1460da696f8a801->leave($__internal_80dfd7a6e0fb8deca6a1e96f4f2352720142d2dcc557643fe1460da696f8a801_prof);

    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_19bfc78ff0b6ce5f217a650510946860a46d25defbe8eb163a8a0498c999d455 = $this->env->getExtension("native_profiler");
        $__internal_19bfc78ff0b6ce5f217a650510946860a46d25defbe8eb163a8a0498c999d455->enter($__internal_19bfc78ff0b6ce5f217a650510946860a46d25defbe8eb163a8a0498c999d455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_19bfc78ff0b6ce5f217a650510946860a46d25defbe8eb163a8a0498c999d455->leave($__internal_19bfc78ff0b6ce5f217a650510946860a46d25defbe8eb163a8a0498c999d455_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 91,  243 => 87,  237 => 86,  225 => 79,  220 => 77,  213 => 73,  209 => 72,  206 => 71,  200 => 70,  192 => 56,  186 => 55,  176 => 11,  173 => 10,  169 => 9,  161 => 8,  149 => 7,  135 => 95,  131 => 94,  127 => 93,  122 => 92,  120 => 91,  116 => 89,  114 => 86,  110 => 84,  108 => 70,  104 => 68,  98 => 58,  96 => 55,  55 => 17,  51 => 16,  47 => 15,  42 => 14,  40 => 8,  36 => 7,  28 => 1,);
    }
}
