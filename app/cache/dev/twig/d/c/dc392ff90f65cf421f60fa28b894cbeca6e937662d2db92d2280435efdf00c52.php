<?php

/* MRFProveedorBundle:Proveedor:list.html.twig */
class __TwigTemplate_dc392ff90f65cf421f60fa28b894cbeca6e937662d2db92d2280435efdf00c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFProveedorBundle:Proveedor:list.html.twig", 1);
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
        $__internal_9716ffe1352504da060ce236b1824bff8fa808b90869ed0cf89d6f4ffb01c8a0 = $this->env->getExtension("native_profiler");
        $__internal_9716ffe1352504da060ce236b1824bff8fa808b90869ed0cf89d6f4ffb01c8a0->enter($__internal_9716ffe1352504da060ce236b1824bff8fa808b90869ed0cf89d6f4ffb01c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFProveedorBundle:Proveedor:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9716ffe1352504da060ce236b1824bff8fa808b90869ed0cf89d6f4ffb01c8a0->leave($__internal_9716ffe1352504da060ce236b1824bff8fa808b90869ed0cf89d6f4ffb01c8a0_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_ce77ad6bc22e4fa432b765cdcdddb127f1ef6ed9d64461e7fa82ea2e00b2d2a5 = $this->env->getExtension("native_profiler");
        $__internal_ce77ad6bc22e4fa432b765cdcdddb127f1ef6ed9d64461e7fa82ea2e00b2d2a5->enter($__internal_ce77ad6bc22e4fa432b765cdcdddb127f1ef6ed9d64461e7fa82ea2e00b2d2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        echo "<h1 class=\"titulo-blog\">Proveedores</h1>";
        
        $__internal_ce77ad6bc22e4fa432b765cdcdddb127f1ef6ed9d64461e7fa82ea2e00b2d2a5->leave($__internal_ce77ad6bc22e4fa432b765cdcdddb127f1ef6ed9d64461e7fa82ea2e00b2d2a5_prof);

    }

    // line 5
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_d2613ac0086f29ea1fcef8dde4f52aca5b31cd7d6027954012ab0d7f1dbb6c4f = $this->env->getExtension("native_profiler");
        $__internal_d2613ac0086f29ea1fcef8dde4f52aca5b31cd7d6027954012ab0d7f1dbb6c4f->enter($__internal_d2613ac0086f29ea1fcef8dde4f52aca5b31cd7d6027954012ab0d7f1dbb6c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>

    <h2>Listado de Proveedores</h2><hr>

    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("mrf_proveedor_add");
        echo "\" class=\"btn btn-info\" role=\"button\">Agregar Proveedor</a><br><br>
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
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Rut</th>
                    <th>Razon Social</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")));
        foreach ($context['_seq'] as $context["_key"] => $context["Proveedor"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "nombres", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "apellidoP", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "apellidoM", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "rut", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "razonSocial", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Proveedor"], "fono", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 41
            if (((isset($context["usuarioRol"]) ? $context["usuarioRol"] : $this->getContext($context, "usuarioRol")) == "Administrador")) {
                // line 42
                echo "                                <a class=\"glyphicon glyphicon-pencil\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_proveedor_edit", array("id" => $this->getAttribute($context["Proveedor"], "id", array()))), "html", null, true);
                echo "\"></a>
                                <a class=\"glyphicon glyphicon-trash edel\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_proveedor_delete", array("id" => $this->getAttribute($context["Proveedor"], "id", array()))), "html", null, true);
                echo "\"></a>                            
                            ";
            }
            // line 45
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>
    </div>        
";
        
        $__internal_d2613ac0086f29ea1fcef8dde4f52aca5b31cd7d6027954012ab0d7f1dbb6c4f->leave($__internal_d2613ac0086f29ea1fcef8dde4f52aca5b31cd7d6027954012ab0d7f1dbb6c4f_prof);

    }

    public function getTemplateName()
    {
        return "MRFProveedorBundle:Proveedor:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  148 => 45,  143 => 43,  138 => 42,  136 => 41,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  100 => 31,  96 => 30,  79 => 15,  70 => 13,  66 => 12,  61 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
