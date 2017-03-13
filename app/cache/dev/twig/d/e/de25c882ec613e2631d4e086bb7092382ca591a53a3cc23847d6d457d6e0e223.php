<?php

/* MRFUsuarioBundle:Usuario:add.html.twig */
class __TwigTemplate_de25c882ec613e2631d4e086bb7092382ca591a53a3cc23847d6d457d6e0e223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MRFUsuarioBundle:Usuario:add.html.twig", 1);
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
        $__internal_f8fbb4c8396df14d9039ea83bb2f4adffa65a3314463f401667559c585033b0e = $this->env->getExtension("native_profiler");
        $__internal_f8fbb4c8396df14d9039ea83bb2f4adffa65a3314463f401667559c585033b0e->enter($__internal_f8fbb4c8396df14d9039ea83bb2f4adffa65a3314463f401667559c585033b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFUsuarioBundle:Usuario:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8fbb4c8396df14d9039ea83bb2f4adffa65a3314463f401667559c585033b0e->leave($__internal_f8fbb4c8396df14d9039ea83bb2f4adffa65a3314463f401667559c585033b0e_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_8307c951bea352bd06a07ab8c4650b66a734b0458f6583ba03166aefcb3ef41b = $this->env->getExtension("native_profiler");
        $__internal_8307c951bea352bd06a07ab8c4650b66a734b0458f6583ba03166aefcb3ef41b->enter($__internal_8307c951bea352bd06a07ab8c4650b66a734b0458f6583ba03166aefcb3ef41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        // line 4
        echo "    <h1 class=\"titulo-blog\">Usuarios</h1>

";
        
        $__internal_8307c951bea352bd06a07ab8c4650b66a734b0458f6583ba03166aefcb3ef41b->leave($__internal_8307c951bea352bd06a07ab8c4650b66a734b0458f6583ba03166aefcb3ef41b_prof);

    }

    // line 8
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_2cbef003c8185606959b8637bdae93b126ee8e922f494562eaf995a37337a50d = $this->env->getExtension("native_profiler");
        $__internal_2cbef003c8185606959b8637bdae93b126ee8e922f494562eaf995a37337a50d->enter($__internal_2cbef003c8185606959b8637bdae93b126ee8e922f494562eaf995a37337a50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 9
        echo "    <div class=\"col-lg-4\">
        <h2>Agregar Usuario:</h2><hr>
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div >
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            <span >";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'widget', array("attr" => array("placeholder" => "Rut", "class" => "form-control")));
        echo "
            <span >";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rut", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'widget', array("attr" => array("placeholder" => "Nombre", "class" => "form-control")));
        echo "
            <span >";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'widget', array("attr" => array("placeholder" => "Apellido Paterno", "class" => "form-control")));
        echo "
            <span >";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoP", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'label');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'widget', array("attr" => array("placeholder" => "Apellido materno", "class" => "form-control")));
        echo "
            <span >";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidoM", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "username", "class" => "form-control")));
        echo "
            <span >";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
        </div>

        <div >
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("placeholder" => "password", "class" => "form-control")));
        echo "
            <span >";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
        </div>
        <div >
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email", "class" => "form-control")));
        echo "
            <span >";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
        </div>
        <br>
        <p>
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Agregar Usuario", "attr" => array("class" => "form-control", "class" => "btn btn-success")));
        echo "
        </p>    
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2cbef003c8185606959b8637bdae93b126ee8e922f494562eaf995a37337a50d->leave($__internal_2cbef003c8185606959b8637bdae93b126ee8e922f494562eaf995a37337a50d_prof);

    }

    public function getTemplateName()
    {
        return "MRFUsuarioBundle:Usuario:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 57,  179 => 55,  172 => 51,  168 => 50,  164 => 49,  158 => 46,  154 => 45,  150 => 44,  143 => 40,  139 => 39,  135 => 38,  129 => 35,  125 => 34,  121 => 33,  115 => 30,  111 => 29,  107 => 28,  101 => 25,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  79 => 18,  73 => 15,  69 => 14,  65 => 13,  60 => 11,  56 => 9,  50 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
