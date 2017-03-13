<?php

/* MRFProveedorBundle:Proveedor:add.html.twig */
class __TwigTemplate_a89f4a48c5fffaac9a777af328764b86582466341bd08419daa6a285f7226d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFProveedorBundle:Proveedor:add.html.twig", 1);
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
        $__internal_347f4a6ba1efebf8cf638b709c79c1db30d6181d72f203a262024db1823b7e00 = $this->env->getExtension("native_profiler");
        $__internal_347f4a6ba1efebf8cf638b709c79c1db30d6181d72f203a262024db1823b7e00->enter($__internal_347f4a6ba1efebf8cf638b709c79c1db30d6181d72f203a262024db1823b7e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFProveedorBundle:Proveedor:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_347f4a6ba1efebf8cf638b709c79c1db30d6181d72f203a262024db1823b7e00->leave($__internal_347f4a6ba1efebf8cf638b709c79c1db30d6181d72f203a262024db1823b7e00_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_323258df54a61ef8a45df6e1ae5a8e80bfe4302dffe33e354e2cf5f9c310ca4d = $this->env->getExtension("native_profiler");
        $__internal_323258df54a61ef8a45df6e1ae5a8e80bfe4302dffe33e354e2cf5f9c310ca4d->enter($__internal_323258df54a61ef8a45df6e1ae5a8e80bfe4302dffe33e354e2cf5f9c310ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        echo "<h1 class=\"titulo-blog\">Proveedores</h1>";
        
        $__internal_323258df54a61ef8a45df6e1ae5a8e80bfe4302dffe33e354e2cf5f9c310ca4d->leave($__internal_323258df54a61ef8a45df6e1ae5a8e80bfe4302dffe33e354e2cf5f9c310ca4d_prof);

    }

    // line 5
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_a78b2d57087c4e1c78b384c86771a39e01862b7de07c5a2f8ce17f9cadb1a346 = $this->env->getExtension("native_profiler");
        $__internal_a78b2d57087c4e1c78b384c86771a39e01862b7de07c5a2f8ce17f9cadb1a346->enter($__internal_a78b2d57087c4e1c78b384c86771a39e01862b7de07c5a2f8ce17f9cadb1a346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 6
        echo "    <div class=\"col-lg-4\">
    <h2>Agregar Proveedor</h2><hr>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div >
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "class" => "form-control")));
        echo "
            <span >";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'widget', array("attr" => array("placeholder" => "Apellido Paterno", "class" => "form-control")));
        echo "
            <span >";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'widget', array("attr" => array("placeholder" => "Apellido materno", "class" => "form-control")));
        echo "
            <span >";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'label');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'widget', array("attr" => array("placeholder" => "Rut", "class" => "form-control")));
        echo "
            <span >";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial", array()), 'label');
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial", array()), 'widget', array("attr" => array("placeholder" => "razonSocial", "class" => "form-control")));
        echo "
            <span >";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
            <span >";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'label');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'widget', array("attr" => array("placeholder" => "Telefono", "max" => (isset($context["largoFono"]) ? $context["largoFono"] : $this->getContext($context, "largoFono")), "class" => "form-control")));
        echo "
            <span >";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <br>
        <p>
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Agregar Proveedor", "attr" => array("class" => "form-control", "class" => "btn btn-success")));
        echo "
        </p>    
    ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>
";
        
        $__internal_a78b2d57087c4e1c78b384c86771a39e01862b7de07c5a2f8ce17f9cadb1a346->leave($__internal_a78b2d57087c4e1c78b384c86771a39e01862b7de07c5a2f8ce17f9cadb1a346_prof);

    }

    public function getTemplateName()
    {
        return "MRFProveedorBundle:Proveedor:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 48,  161 => 46,  154 => 42,  150 => 41,  146 => 40,  140 => 37,  136 => 36,  132 => 35,  126 => 32,  122 => 31,  118 => 30,  112 => 27,  108 => 26,  104 => 25,  98 => 22,  94 => 21,  90 => 20,  84 => 17,  80 => 16,  76 => 15,  70 => 12,  66 => 11,  62 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
