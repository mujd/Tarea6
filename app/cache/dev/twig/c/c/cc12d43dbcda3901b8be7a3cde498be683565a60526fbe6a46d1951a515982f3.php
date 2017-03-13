<?php

/* MRFProveedorBundle:Proveedor:edit.html.twig */
class __TwigTemplate_cc12d43dbcda3901b8be7a3cde498be683565a60526fbe6a46d1951a515982f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFProveedorBundle:Proveedor:edit.html.twig", 1);
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
        $__internal_30e81edb737676a222ff8efd067a0288578cd32c38c90520a163c9e5116e0e80 = $this->env->getExtension("native_profiler");
        $__internal_30e81edb737676a222ff8efd067a0288578cd32c38c90520a163c9e5116e0e80->enter($__internal_30e81edb737676a222ff8efd067a0288578cd32c38c90520a163c9e5116e0e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFProveedorBundle:Proveedor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e81edb737676a222ff8efd067a0288578cd32c38c90520a163c9e5116e0e80->leave($__internal_30e81edb737676a222ff8efd067a0288578cd32c38c90520a163c9e5116e0e80_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_932390f51a2f30ac57176bd8dc0da34ad767cb3b79cab7da61ce17a750a86460 = $this->env->getExtension("native_profiler");
        $__internal_932390f51a2f30ac57176bd8dc0da34ad767cb3b79cab7da61ce17a750a86460->enter($__internal_932390f51a2f30ac57176bd8dc0da34ad767cb3b79cab7da61ce17a750a86460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        echo "<h1 class=\"titulo-blog\">Proveedores</h1>";
        
        $__internal_932390f51a2f30ac57176bd8dc0da34ad767cb3b79cab7da61ce17a750a86460->leave($__internal_932390f51a2f30ac57176bd8dc0da34ad767cb3b79cab7da61ce17a750a86460_prof);

    }

    // line 5
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_434557cbae6d4097cc34c8fd87d90da529e8873df4480f949d8e71cca2ef854c = $this->env->getExtension("native_profiler");
        $__internal_434557cbae6d4097cc34c8fd87d90da529e8873df4480f949d8e71cca2ef854c->enter($__internal_434557cbae6d4097cc34c8fd87d90da529e8873df4480f949d8e71cca2ef854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 6
        echo "    <div class=\"col-lg-4\">
        <h2>Actualizar Proveedor:</h2><hr>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div >
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "class" => "form-control")));
        echo "
            <span >";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'widget', array("attr" => array("placeholder" => "Apellido Paterno", "class" => "form-control")));
        echo "
            <span >";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'label');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'widget', array("attr" => array("placeholder" => "Apellido materno", "class" => "form-control")));
        echo "
            <span >";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'label');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'widget', array("attr" => array("placeholder" => "Rut", "class" => "form-control")));
        echo "
            <span >";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial", array()), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial", array()), 'widget', array("attr" => array("placeholder" => "razonSocial", "class" => "form-control")));
        echo "
            <span >";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "razonSocial", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
            <span >";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'label');
        echo "
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fono", array()), 'widget', array("attr" => array("placeholder" => "Telefono", "max" => (isset($context["largoFono"]) ? $context["largoFono"] : $this->getContext($context, "largoFono")), "class" => "form-control")));
        echo "
            <span >";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <br>
        <p>
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Actualizar Proveedor", "attr" => array("class" => "form-control", "class" => "btn btn-success")));
        echo "
        </p>
        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

    <div class=\"clearfix\"></div>
";
        
        $__internal_434557cbae6d4097cc34c8fd87d90da529e8873df4480f949d8e71cca2ef854c->leave($__internal_434557cbae6d4097cc34c8fd87d90da529e8873df4480f949d8e71cca2ef854c_prof);

    }

    public function getTemplateName()
    {
        return "MRFProveedorBundle:Proveedor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 49,  162 => 47,  155 => 43,  151 => 42,  147 => 41,  141 => 38,  137 => 37,  133 => 36,  127 => 33,  123 => 32,  119 => 31,  113 => 28,  109 => 27,  105 => 26,  99 => 23,  95 => 22,  91 => 21,  85 => 18,  81 => 17,  77 => 16,  71 => 13,  67 => 12,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
