<?php

/* MRFUsuarioBundle:Usuario:list.html.twig */
class __TwigTemplate_1f1aa01213ee146236572ccf87c877e86c2734297f42485bf1a63278b3f9b9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFUsuarioBundle:Usuario:list.html.twig", 1);
        $this->blocks = array(
            'seccion2' => array($this, 'block_seccion2'),
            'seccion3' => array($this, 'block_seccion3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45facf60011b8034faf7f71a8515d23ecfcbea622f6b7ec5a88e7ee1ac8b9d81 = $this->env->getExtension("native_profiler");
        $__internal_45facf60011b8034faf7f71a8515d23ecfcbea622f6b7ec5a88e7ee1ac8b9d81->enter($__internal_45facf60011b8034faf7f71a8515d23ecfcbea622f6b7ec5a88e7ee1ac8b9d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFUsuarioBundle:Usuario:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45facf60011b8034faf7f71a8515d23ecfcbea622f6b7ec5a88e7ee1ac8b9d81->leave($__internal_45facf60011b8034faf7f71a8515d23ecfcbea622f6b7ec5a88e7ee1ac8b9d81_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_2fbe0ddb8d5bf421f989174021506986b9bad3d30da16dd3bda0f457497ac202 = $this->env->getExtension("native_profiler");
        $__internal_2fbe0ddb8d5bf421f989174021506986b9bad3d30da16dd3bda0f457497ac202->enter($__internal_2fbe0ddb8d5bf421f989174021506986b9bad3d30da16dd3bda0f457497ac202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        echo "<h1 class=\"titulo-blog\">Usuarios</h1>";
        
        $__internal_2fbe0ddb8d5bf421f989174021506986b9bad3d30da16dd3bda0f457497ac202->leave($__internal_2fbe0ddb8d5bf421f989174021506986b9bad3d30da16dd3bda0f457497ac202_prof);

    }

    // line 5
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_9a1584b496bfcaef2dd698846372c415db4e810ccff2331cbb1ff285dbb4ffcc = $this->env->getExtension("native_profiler");
        $__internal_9a1584b496bfcaef2dd698846372c415db4e810ccff2331cbb1ff285dbb4ffcc->enter($__internal_9a1584b496bfcaef2dd698846372c415db4e810ccff2331cbb1ff285dbb4ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>

    <h2>Listado de Usuarios</h2><hr>

    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("mrf_usuario_add");
        echo "\" class=\"btn btn-info\" role=\"button\">Agregar Usuario</a><br><br>
    <div class=\"row table-responsive \">
        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        <table id=\"example\" class=\"table table-bordered table-condensed table-hover display\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Rol</th>                
                    <th>Rut</th>                
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre Usuario</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")));
        foreach ($context['_seq'] as $context["_key"] => $context["Usuario"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "rol", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "rut", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "nombres", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "apellidoP", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "apellidoM", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "username", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "password", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["Usuario"], "email", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 43
            if (((isset($context["usuarioRol"]) ? $context["usuarioRol"] : $this->getContext($context, "usuarioRol")) == "Administrador")) {
                // line 44
                echo "                            <a class=\"glyphicon glyphicon-pencil\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_usuario_edit", array("id" => $this->getAttribute($context["Usuario"], "id", array()))), "html", null, true);
                echo "\"></a>
                            <a class=\"glyphicon glyphicon-trash edel\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_usuario_delete", array("id" => $this->getAttribute($context["Usuario"], "id", array()))), "html", null, true);
                echo "\"></a>                            
                            ";
            }
            // line 47
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_9a1584b496bfcaef2dd698846372c415db4e810ccff2331cbb1ff285dbb4ffcc->leave($__internal_9a1584b496bfcaef2dd698846372c415db4e810ccff2331cbb1ff285dbb4ffcc_prof);

    }

    public function getTemplateName()
    {
        return "MRFUsuarioBundle:Usuario:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 50,  153 => 47,  148 => 45,  143 => 44,  141 => 43,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  97 => 31,  79 => 15,  70 => 13,  66 => 12,  61 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
