<?php

/* MRFHomeBundle:Home:index.html.twig */
class __TwigTemplate_01c203a1a36d2c42d0ac67372a34c7fca739df8feec1bd298e9ce8fab76c5247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "MRFHomeBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'seccion2' => array($this, 'block_seccion2'),
            'seccion3' => array($this, 'block_seccion3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2e27abe1eafbd21f6fa9aae59efed1301b0db31275d317ab40bd9626b39a2d2 = $this->env->getExtension("native_profiler");
        $__internal_b2e27abe1eafbd21f6fa9aae59efed1301b0db31275d317ab40bd9626b39a2d2->enter($__internal_b2e27abe1eafbd21f6fa9aae59efed1301b0db31275d317ab40bd9626b39a2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFHomeBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e27abe1eafbd21f6fa9aae59efed1301b0db31275d317ab40bd9626b39a2d2->leave($__internal_b2e27abe1eafbd21f6fa9aae59efed1301b0db31275d317ab40bd9626b39a2d2_prof);

    }

    // line 3
    public function block_seccion2($context, array $blocks = array())
    {
        $__internal_01923ff92ca3acd3d3b0e673a930497d67ab0c154a479df17bc85d6be9414fa6 = $this->env->getExtension("native_profiler");
        $__internal_01923ff92ca3acd3d3b0e673a930497d67ab0c154a479df17bc85d6be9414fa6->enter($__internal_01923ff92ca3acd3d3b0e673a930497d67ab0c154a479df17bc85d6be9414fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion2"));

        echo "<h1 class=\"titulo-blog\">HOME</h1>";
        
        $__internal_01923ff92ca3acd3d3b0e673a930497d67ab0c154a479df17bc85d6be9414fa6->leave($__internal_01923ff92ca3acd3d3b0e673a930497d67ab0c154a479df17bc85d6be9414fa6_prof);

    }

    // line 5
    public function block_seccion3($context, array $blocks = array())
    {
        $__internal_6d0f9e4a126aa5aa9baaf01a55441ee2f544af79e9ed6384740242a77a5dd9d1 = $this->env->getExtension("native_profiler");
        $__internal_6d0f9e4a126aa5aa9baaf01a55441ee2f544af79e9ed6384740242a77a5dd9d1->enter($__internal_6d0f9e4a126aa5aa9baaf01a55441ee2f544af79e9ed6384740242a77a5dd9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion3"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"/>
    
    
    <div class=\"row col-lg-10\">
        <br><br><hr>
        <h2 class=\"home\" align=\"center\">Seleccione mantenedor</h2><hr>
        
        <p align=\"center\"><b>Sistema desarrollado para controlar y mantener las diferentes entidades que existen o 
                que podrian existir en la aplicación.</b></p>
        
    </div>


";
        
        $__internal_6d0f9e4a126aa5aa9baaf01a55441ee2f544af79e9ed6384740242a77a5dd9d1->leave($__internal_6d0f9e4a126aa5aa9baaf01a55441ee2f544af79e9ed6384740242a77a5dd9d1_prof);

    }

    public function getTemplateName()
    {
        return "MRFHomeBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
