<?php

/* MRFUsuarioBundle:Menu:list.html.twig */
class __TwigTemplate_ab85a9466a9fa5c59cd16e996a81c26bf8eab636120a7f17cd23d38fbd826074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'seccion1' => array($this, 'block_seccion1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b58b482868a5c90dfc62fce58c76bacfb98be100d465078b3c7b77cd328845c = $this->env->getExtension("native_profiler");
        $__internal_7b58b482868a5c90dfc62fce58c76bacfb98be100d465078b3c7b77cd328845c->enter($__internal_7b58b482868a5c90dfc62fce58c76bacfb98be100d465078b3c7b77cd328845c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFUsuarioBundle:Menu:list.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('seccion1', $context, $blocks);
        // line 13
        echo "
";
        
        $__internal_7b58b482868a5c90dfc62fce58c76bacfb98be100d465078b3c7b77cd328845c->leave($__internal_7b58b482868a5c90dfc62fce58c76bacfb98be100d465078b3c7b77cd328845c_prof);

    }

    // line 3
    public function block_seccion1($context, array $blocks = array())
    {
        $__internal_92c825473811ba0c4e7b026c10fb40af9e536136961465b4b039a11160d0fd90 = $this->env->getExtension("native_profiler");
        $__internal_92c825473811ba0c4e7b026c10fb40af9e536136961465b4b039a11160d0fd90->enter($__internal_92c825473811ba0c4e7b026c10fb40af9e536136961465b4b039a11160d0fd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "seccion1"));

        // line 4
        echo "    
        
            <b class=\"list-group-item\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["usuarioNombre"]) ? $context["usuarioNombre"] : $this->getContext($context, "usuarioNombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["usuarioRol"]) ? $context["usuarioRol"] : $this->getContext($context, "usuarioRol")), "html", null, true);
        echo "</b> 
            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menuRol"]) ? $context["menuRol"] : $this->getContext($context, "menuRol")));
        foreach ($context['_seq'] as $context["_key"] => $context["Menu"]) {
            // line 8
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Menu"], "menu", array()), "ruta", array()), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["Menu"], "menu", array()), "nombre", array()), "html", null, true);
            echo "</a>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            
        
";
        
        $__internal_92c825473811ba0c4e7b026c10fb40af9e536136961465b4b039a11160d0fd90->leave($__internal_92c825473811ba0c4e7b026c10fb40af9e536136961465b4b039a11160d0fd90_prof);

    }

    public function getTemplateName()
    {
        return "MRFUsuarioBundle:Menu:list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  57 => 8,  53 => 7,  47 => 6,  43 => 4,  37 => 3,  29 => 13,  27 => 3,  23 => 1,);
    }
}
