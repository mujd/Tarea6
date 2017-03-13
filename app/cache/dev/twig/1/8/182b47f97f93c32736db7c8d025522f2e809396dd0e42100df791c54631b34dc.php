<?php

/* MRFUsuarioBundle:Login:login.html.twig */
class __TwigTemplate_182b47f97f93c32736db7c8d025522f2e809396dd0e42100df791c54631b34dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_326275ac6abec83fbecc229b9f62a35a835532dff59f961f47204e7e23d16e79 = $this->env->getExtension("native_profiler");
        $__internal_326275ac6abec83fbecc229b9f62a35a835532dff59f961f47204e7e23d16e79->enter($__internal_326275ac6abec83fbecc229b9f62a35a835532dff59f961f47204e7e23d16e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MRFUsuarioBundle:Login:login.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Login</title>
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/login-style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    </head>
    <body>

      
            <div class=\"container\" style=\"margin-top: 10%;\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-md-offset-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"h3\">Log-In</h3>
                                <div class=\"container-fluid\">
                                ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        <div class =\"container\">";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                                </div>
                            </div>
                            <div class=\"panel-body\">
                                <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("mrf_usuario_validar");
        echo "\" method=\"post\" role=\"form\">
                                    <fieldset>
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"username\" autofocus>
                                        </div>
                                        <div class=\"form-group\">
                                            <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-block\">Login <i class=\"glyphicon glyphicon-log-in\"></i></button>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_326275ac6abec83fbecc229b9f62a35a835532dff59f961f47204e7e23d16e79->leave($__internal_326275ac6abec83fbecc229b9f62a35a835532dff59f961f47204e7e23d16e79_prof);

    }

    public function getTemplateName()
    {
        return "MRFUsuarioBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 47,  91 => 46,  70 => 28,  65 => 25,  56 => 22,  53 => 21,  49 => 20,  34 => 8,  30 => 7,  22 => 1,);
    }
}
