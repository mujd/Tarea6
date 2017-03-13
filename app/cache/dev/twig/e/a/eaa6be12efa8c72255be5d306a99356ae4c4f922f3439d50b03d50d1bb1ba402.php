<?php

/* MRFClienteBundle:Cliente:list.html.twig */
class __TwigTemplate_eaa6be12efa8c72255be5d306a99356ae4c4f922f3439d50b03d50d1bb1ba402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "MRFClienteBundle:Cliente:list.html.twig", 1);
        $this->blocks = array(
            'seccion2' => array($this, 'block_seccion2'),
            'seccion3' => array($this, 'block_seccion3'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e25b350c1e2d035c2f0d008adbd6a019cfc6587d9afdf6e062153fac39e2bee = $this->env->getExtension("native_profiler");
        $__internal_0e25b350c1e2d035c2f0d008adbd6a019cfc6587d9afdf6e062153fac39e2bee->enter($__internal_0e25b350c1e2d035c2f0d008adbd6a019cfc6587d9afdf6e062153fac39e2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClienteBundle:Cliente:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e25b350c1e2d035c2f0d008adbd6a019cfc6587d9afdf6e062153fac39e2bee->leave($__internal_0e25b350c1e2d035c2f0d008adbd6a019cfc6587d9afdf6e062153fac39e2bee_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_abbd363f0e23a07b9d1031019d27d0adfab7f9eb76b3a4851a2de237eff8d76a = $this->env->getExtension("native_profiler");
        $__internal_abbd363f0e23a07b9d1031019d27d0adfab7f9eb76b3a4851a2de237eff8d76a->enter($__internal_abbd363f0e23a07b9d1031019d27d0adfab7f9eb76b3a4851a2de237eff8d76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        echo "<h1 class=\"titulo-blog\">Clientes</h1>";
        
        $__internal_abbd363f0e23a07b9d1031019d27d0adfab7f9eb76b3a4851a2de237eff8d76a->leave($__internal_abbd363f0e23a07b9d1031019d27d0adfab7f9eb76b3a4851a2de237eff8d76a_prof);

    }

    // line 5
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_6a0614b631ccbee3da6f4c47aff2b36a69573b09cddb245108e4f063e72a1bea = $this->env->getExtension("native_profiler");
        $__internal_6a0614b631ccbee3da6f4c47aff2b36a69573b09cddb245108e4f063e72a1bea->enter($__internal_6a0614b631ccbee3da6f4c47aff2b36a69573b09cddb245108e4f063e72a1bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>

    <h2>Listado de Clientes</h2><hr>

    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("mrf_cliente_add");
        echo "\" class=\"btn btn-info\" role=\"button\">Agregar Cliente</a><br><br>
    ";
        // line 16
        echo "

    <div class=\"row table-responsive col-lg-10\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

        <table id=\"example\" class=\"table table-bordered table-condensed table-hover display\">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Rut</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")));
        foreach ($context['_seq'] as $context["_key"] => $context["Cliente"]) {
            // line 41
            echo "                    <tr>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "nombres", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "apellidoP", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "apellidoM", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "rut", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "direccion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["Cliente"], "fono", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 51
            if (((isset($context["usuarioRol"]) ? $context["usuarioRol"] : $this->getContext($context, "usuarioRol")) == "Administrador")) {
                // line 52
                echo "                                <a class=\"glyphicon glyphicon-pencil\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_cliente_edit", array("id" => $this->getAttribute($context["Cliente"], "id", array()))), "html", null, true);
                echo "\"></a>
                                <a class=\"glyphicon glyphicon-trash edel\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_cliente_delete", array("id" => $this->getAttribute($context["Cliente"], "id", array()))), "html", null, true);
                echo "\"></a>                            
                            ";
            }
            // line 55
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                
            </tbody>
        </table>
    </div>

";
        
        $__internal_6a0614b631ccbee3da6f4c47aff2b36a69573b09cddb245108e4f063e72a1bea->leave($__internal_6a0614b631ccbee3da6f4c47aff2b36a69573b09cddb245108e4f063e72a1bea_prof);

    }

    // line 64
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9cf218ad5e5e3bf874f84209aad082f89df64411a012090e88b07ae62369dcc3 = $this->env->getExtension("native_profiler");
        $__internal_9cf218ad5e5e3bf874f84209aad082f89df64411a012090e88b07ae62369dcc3->enter($__internal_9cf218ad5e5e3bf874f84209aad082f89df64411a012090e88b07ae62369dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 65
        echo "    <script type=\"text/javascript\">


        function registrar() {



            alert(\"OK\");
        }


    </script>

    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/mae/maeFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/comFunciones.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/dhtmlxSuite_v50_std/codebase/dhtmlx.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_9cf218ad5e5e3bf874f84209aad082f89df64411a012090e88b07ae62369dcc3->leave($__internal_9cf218ad5e5e3bf874f84209aad082f89df64411a012090e88b07ae62369dcc3_prof);

    }

    public function getTemplateName()
    {
        return "MRFClienteBundle:Cliente:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 80,  201 => 79,  197 => 78,  182 => 65,  176 => 64,  164 => 57,  156 => 55,  151 => 53,  146 => 52,  144 => 51,  139 => 49,  135 => 48,  131 => 47,  127 => 46,  123 => 45,  119 => 44,  115 => 43,  111 => 42,  108 => 41,  104 => 40,  84 => 22,  75 => 20,  71 => 19,  66 => 16,  62 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
