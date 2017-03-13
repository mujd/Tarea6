<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_56e44ce3de5664a0487af2bbaa65215c0b3867ccc452427ddfb6ad8643f644cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afc0667482ae0970aa72f0dd416e3188df25e2f0b1ba910862eaec0331b95418 = $this->env->getExtension("native_profiler");
        $__internal_afc0667482ae0970aa72f0dd416e3188df25e2f0b1ba910862eaec0331b95418->enter($__internal_afc0667482ae0970aa72f0dd416e3188df25e2f0b1ba910862eaec0331b95418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc0667482ae0970aa72f0dd416e3188df25e2f0b1ba910862eaec0331b95418->leave($__internal_afc0667482ae0970aa72f0dd416e3188df25e2f0b1ba910862eaec0331b95418_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_807660c4f93f866ab7707b5e5ae7bde7f105fdc2f92778ced37423385f602c33 = $this->env->getExtension("native_profiler");
        $__internal_807660c4f93f866ab7707b5e5ae7bde7f105fdc2f92778ced37423385f602c33->enter($__internal_807660c4f93f866ab7707b5e5ae7bde7f105fdc2f92778ced37423385f602c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_807660c4f93f866ab7707b5e5ae7bde7f105fdc2f92778ced37423385f602c33->leave($__internal_807660c4f93f866ab7707b5e5ae7bde7f105fdc2f92778ced37423385f602c33_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dbcf4cb840dfaa508f852e7e11c3e1e0c553b0b634a6ddde4c47ff96da9a6c7 = $this->env->getExtension("native_profiler");
        $__internal_1dbcf4cb840dfaa508f852e7e11c3e1e0c553b0b634a6ddde4c47ff96da9a6c7->enter($__internal_1dbcf4cb840dfaa508f852e7e11c3e1e0c553b0b634a6ddde4c47ff96da9a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1dbcf4cb840dfaa508f852e7e11c3e1e0c553b0b634a6ddde4c47ff96da9a6c7->leave($__internal_1dbcf4cb840dfaa508f852e7e11c3e1e0c553b0b634a6ddde4c47ff96da9a6c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_29a5e77fd47c14bbabea014b8a27f5511395293bff59d4d12df54c0435b9b50f = $this->env->getExtension("native_profiler");
        $__internal_29a5e77fd47c14bbabea014b8a27f5511395293bff59d4d12df54c0435b9b50f->enter($__internal_29a5e77fd47c14bbabea014b8a27f5511395293bff59d4d12df54c0435b9b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_29a5e77fd47c14bbabea014b8a27f5511395293bff59d4d12df54c0435b9b50f->leave($__internal_29a5e77fd47c14bbabea014b8a27f5511395293bff59d4d12df54c0435b9b50f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
