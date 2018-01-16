<?php

/* MyschoolBundle:Email:ensegniant.html.twig */
class __TwigTemplate_9d67b67d98bfcbbcd16f8bcac83789db50df670413ac95a9132a082edbd9620a extends Twig_Template
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
        $__internal_654d5ef05e1ff9f7301656753ee2679195639fa5ca7fc12b8d5a6953aa7d5abf = $this->env->getExtension("native_profiler");
        $__internal_654d5ef05e1ff9f7301656753ee2679195639fa5ca7fc12b8d5a6953aa7d5abf->enter($__internal_654d5ef05e1ff9f7301656753ee2679195639fa5ca7fc12b8d5a6953aa7d5abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Email:ensegniant.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

    </head>
    <body>
         votre mp est:
    ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["mp"]) ? $context["mp"] : $this->getContext($context, "mp")), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_654d5ef05e1ff9f7301656753ee2679195639fa5ca7fc12b8d5a6953aa7d5abf->leave($__internal_654d5ef05e1ff9f7301656753ee2679195639fa5ca7fc12b8d5a6953aa7d5abf_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Email:ensegniant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* */
/*     </head>*/
/*     <body>*/
/*          votre mp est:*/
/*     {{ mp }}*/
/*     </body>*/
/* </html>*/
/* */
