<?php

/* MRFRolBundle:Rol:list.html.twig */
class __TwigTemplate_4836d7b0bba2682a16a921ea5aad8a719636a337316f8f9b7ced7ed5019207c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFRolBundle:Rol:list.html.twig", 1);
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
        $__internal_b7ddf9d74578b6fac05f5b0e9bec3f86c663060dc982c073405c817bc62f959f = $this->env->getExtension("native_profiler");
        $__internal_b7ddf9d74578b6fac05f5b0e9bec3f86c663060dc982c073405c817bc62f959f->enter($__internal_b7ddf9d74578b6fac05f5b0e9bec3f86c663060dc982c073405c817bc62f959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFRolBundle:Rol:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ddf9d74578b6fac05f5b0e9bec3f86c663060dc982c073405c817bc62f959f->leave($__internal_b7ddf9d74578b6fac05f5b0e9bec3f86c663060dc982c073405c817bc62f959f_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_8531fc62899484efd28ee7b4830c794911a471a05c2812f85ec8b3e014e57fc8 = $this->env->getExtension("native_profiler");
        $__internal_8531fc62899484efd28ee7b4830c794911a471a05c2812f85ec8b3e014e57fc8->enter($__internal_8531fc62899484efd28ee7b4830c794911a471a05c2812f85ec8b3e014e57fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        // line 4
        echo "    <h1 class=\"titulo-blog\">Roles</h1>

";
        
        $__internal_8531fc62899484efd28ee7b4830c794911a471a05c2812f85ec8b3e014e57fc8->leave($__internal_8531fc62899484efd28ee7b4830c794911a471a05c2812f85ec8b3e014e57fc8_prof);

    }

    // line 8
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_387758373288a40809dbdb105a7e9155439ca19e2c77933081af2624846abd1a = $this->env->getExtension("native_profiler");
        $__internal_387758373288a40809dbdb105a7e9155439ca19e2c77933081af2624846abd1a->enter($__internal_387758373288a40809dbdb105a7e9155439ca19e2c77933081af2624846abd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>

    <h2>Listado de Roles</h2><hr>

    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("mrf_rol_add");
        echo "\" class=\"btn btn-info\" role=\"button\">Agregar Rol</a><br><br>
    <div class=\"row table-responsive \">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        <table id=\"example\" class=\"table table-bordered table-condensed table-hover display\" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Listar</th>
                    <th>Agregar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Acciones</th>                
                </tr>
            </thead>
            <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")));
        foreach ($context['_seq'] as $context["_key"] => $context["Rol"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Rol"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Rol"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Rol"], "listar", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Rol"], "agregar", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Rol"], "editar", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Rol"], "eliminar", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"glyphicon glyphicon-pencil\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_rol_edit", array("id" => $this->getAttribute($context["Rol"], "id", array()))), "html", null, true);
            echo "\"></a>
                            <a class=\"glyphicon glyphicon-trash edel\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_rol_delete", array("id" => $this->getAttribute($context["Rol"], "id", array()))), "html", null, true);
            echo "\"></a>                            
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_387758373288a40809dbdb105a7e9155439ca19e2c77933081af2624846abd1a->leave($__internal_387758373288a40809dbdb105a7e9155439ca19e2c77933081af2624846abd1a_prof);

    }

    public function getTemplateName()
    {
        return "MRFRolBundle:Rol:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  133 => 41,  129 => 40,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  97 => 31,  82 => 18,  73 => 16,  69 => 15,  64 => 13,  56 => 9,  50 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
