<?php

/* MRFClienteBundle:Cliente:add.html.twig */
class __TwigTemplate_05ae9b4fa52e1181d6ee281f874da20856be0dcd9d9750b29838461cc2eaa019 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFClienteBundle:Cliente:add.html.twig", 1);
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
        $__internal_721ff235ccd8e506df7f955cf9f03868a72b43a3a546e49919f7ebb7199aae91 = $this->env->getExtension("native_profiler");
        $__internal_721ff235ccd8e506df7f955cf9f03868a72b43a3a546e49919f7ebb7199aae91->enter($__internal_721ff235ccd8e506df7f955cf9f03868a72b43a3a546e49919f7ebb7199aae91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFClienteBundle:Cliente:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_721ff235ccd8e506df7f955cf9f03868a72b43a3a546e49919f7ebb7199aae91->leave($__internal_721ff235ccd8e506df7f955cf9f03868a72b43a3a546e49919f7ebb7199aae91_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_2e7dd9520e4282b5edbf4bf7b14e53891ea113bab3cd0107b0d2f39b220299a2 = $this->env->getExtension("native_profiler");
        $__internal_2e7dd9520e4282b5edbf4bf7b14e53891ea113bab3cd0107b0d2f39b220299a2->enter($__internal_2e7dd9520e4282b5edbf4bf7b14e53891ea113bab3cd0107b0d2f39b220299a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        // line 4
        echo "    <h1 class=\"titulo-blog\">Clientes</h1>
";
        
        $__internal_2e7dd9520e4282b5edbf4bf7b14e53891ea113bab3cd0107b0d2f39b220299a2->leave($__internal_2e7dd9520e4282b5edbf4bf7b14e53891ea113bab3cd0107b0d2f39b220299a2_prof);

    }

    // line 7
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_cec0f3cfd9aa11c8445e8db62f06c15cc1860e6c5b93325266c33c7a8326fae8 = $this->env->getExtension("native_profiler");
        $__internal_cec0f3cfd9aa11c8445e8db62f06c15cc1860e6c5b93325266c33c7a8326fae8->enter($__internal_cec0f3cfd9aa11c8445e8db62f06c15cc1860e6c5b93325266c33c7a8326fae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 8
        echo "    
    <div class=\"col-lg-4\">
        <h2 class=\"h2\">Agregar Cliente</h2>
        <hr>
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div >
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "class" => "form-control")));
        echo "
            <span >";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'label');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'widget', array("attr" => array("placeholder" => "Apellido Paterno", "class" => "form-control")));
        echo "
            <span >";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'widget', array("attr" => array("placeholder" => "Apellido materno", "class" => "form-control")));
        echo "
            <span >";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'widget', array("attr" => array("placeholder" => "Rut", "class" => "form-control")));
        echo "
            <span >";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Direccion", "class" => "form-control")));
        echo "
            <span >";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
            <span >";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'label');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'widget', array("attr" => array("placeholder" => "Telefono", "max" => (isset($context["largoFono"]) ? $context["largoFono"] : $this->getContext($context, "largoFono")), "class" => "form-control")));
        echo "
            <span >";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <br>
        <p>
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Guardar Cliente", "attr" => array("class" => "form-control", "class" => "btn btn-success")));
        echo "
        </p>
        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>    
";
        
        $__internal_cec0f3cfd9aa11c8445e8db62f06c15cc1860e6c5b93325266c33c7a8326fae8->leave($__internal_cec0f3cfd9aa11c8445e8db62f06c15cc1860e6c5b93325266c33c7a8326fae8_prof);

    }

    public function getTemplateName()
    {
        return "MRFClienteBundle:Cliente:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 52,  165 => 50,  158 => 46,  154 => 45,  150 => 44,  144 => 41,  140 => 40,  136 => 39,  130 => 36,  126 => 35,  122 => 34,  116 => 31,  112 => 30,  108 => 29,  102 => 26,  98 => 25,  94 => 24,  88 => 21,  84 => 20,  80 => 19,  74 => 16,  70 => 15,  66 => 14,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
