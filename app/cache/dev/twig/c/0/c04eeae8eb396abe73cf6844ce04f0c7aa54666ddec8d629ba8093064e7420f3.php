<?php

/* MRFMenuBundle:Menu:list.html.twig */
class __TwigTemplate_c04eeae8eb396abe73cf6844ce04f0c7aa54666ddec8d629ba8093064e7420f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFMenuBundle:Menu:list.html.twig", 1);
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
        $__internal_f25e30aea7198b97779f23df63a59f24d46ad453450ab567a6846118af940061 = $this->env->getExtension("native_profiler");
        $__internal_f25e30aea7198b97779f23df63a59f24d46ad453450ab567a6846118af940061->enter($__internal_f25e30aea7198b97779f23df63a59f24d46ad453450ab567a6846118af940061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFMenuBundle:Menu:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25e30aea7198b97779f23df63a59f24d46ad453450ab567a6846118af940061->leave($__internal_f25e30aea7198b97779f23df63a59f24d46ad453450ab567a6846118af940061_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_e3ca459d3c20f955277db5e2421acaa33100b609d5cd718fdd89801655a51994 = $this->env->getExtension("native_profiler");
        $__internal_e3ca459d3c20f955277db5e2421acaa33100b609d5cd718fdd89801655a51994->enter($__internal_e3ca459d3c20f955277db5e2421acaa33100b609d5cd718fdd89801655a51994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        // line 4
        echo "    <h1 class=\"titulo-blog\">Menus</h1>

";
        
        $__internal_e3ca459d3c20f955277db5e2421acaa33100b609d5cd718fdd89801655a51994->leave($__internal_e3ca459d3c20f955277db5e2421acaa33100b609d5cd718fdd89801655a51994_prof);

    }

    // line 8
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_60501d69cc372925cb78d9140c51533329ed7b7d3c934ac1b07754572b120c3f = $this->env->getExtension("native_profiler");
        $__internal_60501d69cc372925cb78d9140c51533329ed7b7d3c934ac1b07754572b120c3f->enter($__internal_60501d69cc372925cb78d9140c51533329ed7b7d3c934ac1b07754572b120c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>
    
        <h2>Listado de Menus</h2><hr>
        
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("mrf_menu_add");
        echo "\" class=\"btn btn-info\" role=\"button\">Agregar Menu</a>
        <br><br>        
        <div class=\"row table-responsive \">
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        <table id=\"example\" class=\"table table-info table-bordered table-condensed table-hover display\" >
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ruta</th>
                    <th>Listar</th>
                    <th>Agregar</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Acciones</th>                
                </tr>
            </thead>
            <tbody>
                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["Menu"]) {
            // line 34
            echo "                    <tr>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "nombre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "ruta", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "listar", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "agregar", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "editar", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["Menu"], "eliminar", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"glyphicon glyphicon-pencil\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_menu_edit", array("id" => $this->getAttribute($context["Menu"], "id", array()))), "html", null, true);
            echo "\"></a>
                            <a class=\"glyphicon glyphicon-trash edel\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mrf_menu_delete", array("id" => $this->getAttribute($context["Menu"], "id", array()))), "html", null, true);
            echo "\"></a>                            
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>        
    </div>
";
        
        $__internal_60501d69cc372925cb78d9140c51533329ed7b7d3c934ac1b07754572b120c3f->leave($__internal_60501d69cc372925cb78d9140c51533329ed7b7d3c934ac1b07754572b120c3f_prof);

    }

    public function getTemplateName()
    {
        return "MRFMenuBundle:Menu:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  139 => 44,  135 => 43,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  103 => 34,  99 => 33,  83 => 19,  74 => 17,  70 => 16,  64 => 13,  56 => 9,  50 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
