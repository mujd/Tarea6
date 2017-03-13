<?php

/* layout.html.twig */
class __TwigTemplate_847f167712878cec882e4e0a0a051086cb50ff9c81b8c5462371beecb013dd7d extends Twig_Template
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
        $__internal_55de89c4abd50ede212e9326293c83f49d4004d5e230d27325cd0edd4f67cf1e = $this->env->getExtension("native_profiler");
        $__internal_55de89c4abd50ede212e9326293c83f49d4004d5e230d27325cd0edd4f67cf1e->enter($__internal_55de89c4abd50ede212e9326293c83f49d4004d5e230d27325cd0edd4f67cf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_55de89c4abd50ede212e9326293c83f49d4004d5e230d27325cd0edd4f67cf1e->leave($__internal_55de89c4abd50ede212e9326293c83f49d4004d5e230d27325cd0edd4f67cf1e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59cbf4d5084e59bd889cfe47fe2cc6116d988cb1642fe84dc25af17e26a3110 = $this->env->getExtension("native_profiler");
        $__internal_d59cbf4d5084e59bd889cfe47fe2cc6116d988cb1642fe84dc25af17e26a3110->enter($__internal_d59cbf4d5084e59bd889cfe47fe2cc6116d988cb1642fe84dc25af17e26a3110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mantenedores!";
        
        $__internal_d59cbf4d5084e59bd889cfe47fe2cc6116d988cb1642fe84dc25af17e26a3110->leave($__internal_d59cbf4d5084e59bd889cfe47fe2cc6116d988cb1642fe84dc25af17e26a3110_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f47d752680030b3b45e3dacdb10c064c21555453d10519d45bd03f199d84ccc5 = $this->env->getExtension("native_profiler");
        $__internal_f47d752680030b3b45e3dacdb10c064c21555453d10519d45bd03f199d84ccc5->enter($__internal_f47d752680030b3b45e3dacdb10c064c21555453d10519d45bd03f199d84ccc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f47d752680030b3b45e3dacdb10c064c21555453d10519d45bd03f199d84ccc5->leave($__internal_f47d752680030b3b45e3dacdb10c064c21555453d10519d45bd03f199d84ccc5_prof);

    }

    // line 55
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_0254db5a481ee2c6973d83b9347b4612cabb6d87179c060434dcf93c68ae5562 = $this->env->getExtension("native_profiler");
        $__internal_0254db5a481ee2c6973d83b9347b4612cabb6d87179c060434dcf93c68ae5562->enter($__internal_0254db5a481ee2c6973d83b9347b4612cabb6d87179c060434dcf93c68ae5562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        // line 56
        echo "                       
                ";
        
        $__internal_0254db5a481ee2c6973d83b9347b4612cabb6d87179c060434dcf93c68ae5562->leave($__internal_0254db5a481ee2c6973d83b9347b4612cabb6d87179c060434dcf93c68ae5562_prof);

    }

    // line 70
    public function block_seccion1($context, array $blocks = array())
    {
        $__internal_9d1d9df1ddaef89ebed55af17d5c808abc9e15412ab6e1521f5fece0cd3e41a2 = $this->env->getExtension("native_profiler");
        $__internal_9d1d9df1ddaef89ebed55af17d5c808abc9e15412ab6e1521f5fece0cd3e41a2->enter($__internal_9d1d9df1ddaef89ebed55af17d5c808abc9e15412ab6e1521f5fece0cd3e41a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion1"));

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
        
        $__internal_9d1d9df1ddaef89ebed55af17d5c808abc9e15412ab6e1521f5fece0cd3e41a2->leave($__internal_9d1d9df1ddaef89ebed55af17d5c808abc9e15412ab6e1521f5fece0cd3e41a2_prof);

    }

    // line 86
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_ea16ecd213d2a5e0fac1f9bf25f6169c430c7c4561b4a1cb4f3e07b44c6b2496 = $this->env->getExtension("native_profiler");
        $__internal_ea16ecd213d2a5e0fac1f9bf25f6169c430c7c4561b4a1cb4f3e07b44c6b2496->enter($__internal_ea16ecd213d2a5e0fac1f9bf25f6169c430c7c4561b4a1cb4f3e07b44c6b2496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 87
        echo "
            ";
        
        $__internal_ea16ecd213d2a5e0fac1f9bf25f6169c430c7c4561b4a1cb4f3e07b44c6b2496->leave($__internal_ea16ecd213d2a5e0fac1f9bf25f6169c430c7c4561b4a1cb4f3e07b44c6b2496_prof);

    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6ccdb820e5d64f325ac2a77433c6fe83f595316090c0766ed8b9a0dce377d3e0 = $this->env->getExtension("native_profiler");
        $__internal_6ccdb820e5d64f325ac2a77433c6fe83f595316090c0766ed8b9a0dce377d3e0->enter($__internal_6ccdb820e5d64f325ac2a77433c6fe83f595316090c0766ed8b9a0dce377d3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6ccdb820e5d64f325ac2a77433c6fe83f595316090c0766ed8b9a0dce377d3e0->leave($__internal_6ccdb820e5d64f325ac2a77433c6fe83f595316090c0766ed8b9a0dce377d3e0_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
