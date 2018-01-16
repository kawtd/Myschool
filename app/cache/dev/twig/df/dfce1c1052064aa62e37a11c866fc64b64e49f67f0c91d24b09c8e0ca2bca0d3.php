<?php

/* ::base.html.twig */
class __TwigTemplate_e3aad0a8bb9355027ecd0eef137fa538d8f521eff7aa764bf44bd34ec5f0ca73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29819c76b98b6b6d6ed913e3e14990d0c295e21a99241e556f3b2e5e284520ec = $this->env->getExtension("native_profiler");
        $__internal_29819c76b98b6b6d6ed913e3e14990d0c295e21a99241e556f3b2e5e284520ec->enter($__internal_29819c76b98b6b6d6ed913e3e14990d0c295e21a99241e556f3b2e5e284520ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>

";
        
        $__internal_29819c76b98b6b6d6ed913e3e14990d0c295e21a99241e556f3b2e5e284520ec->leave($__internal_29819c76b98b6b6d6ed913e3e14990d0c295e21a99241e556f3b2e5e284520ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1148d59723ad77d46c55a4e318933171a8fc69a04162a6cad520d07b6c4cd8b = $this->env->getExtension("native_profiler");
        $__internal_e1148d59723ad77d46c55a4e318933171a8fc69a04162a6cad520d07b6c4cd8b->enter($__internal_e1148d59723ad77d46c55a4e318933171a8fc69a04162a6cad520d07b6c4cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e1148d59723ad77d46c55a4e318933171a8fc69a04162a6cad520d07b6c4cd8b->leave($__internal_e1148d59723ad77d46c55a4e318933171a8fc69a04162a6cad520d07b6c4cd8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17fb760b03e541a303a83fae5e61e1a69db2f9177bd83fc027b24a550fe2faec = $this->env->getExtension("native_profiler");
        $__internal_17fb760b03e541a303a83fae5e61e1a69db2f9177bd83fc027b24a550fe2faec->enter($__internal_17fb760b03e541a303a83fae5e61e1a69db2f9177bd83fc027b24a550fe2faec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>





                ";
        
        $__internal_17fb760b03e541a303a83fae5e61e1a69db2f9177bd83fc027b24a550fe2faec->leave($__internal_17fb760b03e541a303a83fae5e61e1a69db2f9177bd83fc027b24a550fe2faec_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2fcf273a1dde9e82171e7877670421c242207fb40d7dbfd754965bb9fdc83d9 = $this->env->getExtension("native_profiler");
        $__internal_b2fcf273a1dde9e82171e7877670421c242207fb40d7dbfd754965bb9fdc83d9->enter($__internal_b2fcf273a1dde9e82171e7877670421c242207fb40d7dbfd754965bb9fdc83d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2fcf273a1dde9e82171e7877670421c242207fb40d7dbfd754965bb9fdc83d9->leave($__internal_b2fcf273a1dde9e82171e7877670421c242207fb40d7dbfd754965bb9fdc83d9_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f76a8ec93785c0b99b6ab177f0b0afae10f98f8fed217d73acc3beb145b28d3 = $this->env->getExtension("native_profiler");
        $__internal_8f76a8ec93785c0b99b6ab177f0b0afae10f98f8fed217d73acc3beb145b28d3->enter($__internal_8f76a8ec93785c0b99b6ab177f0b0afae10f98f8fed217d73acc3beb145b28d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>





 <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_8f76a8ec93785c0b99b6ab177f0b0afae10f98f8fed217d73acc3beb145b28d3->leave($__internal_8f76a8ec93785c0b99b6ab177f0b0afae10f98f8fed217d73acc3beb145b28d3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 31,  136 => 25,  132 => 24,  122 => 23,  111 => 22,  97 => 11,  93 => 10,  89 => 9,  85 => 8,  80 => 7,  74 => 6,  62 => 5,  52 => 32,  49 => 23,  47 => 22,  41 => 19,  38 => 18,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/jquery-1.10.2.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/main.js') }}"></script>*/
/* */
/* */
/* */
/* */
/* */
/*                 {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}<script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/jquery.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/jquery-1.10.2.js') }}"></script>*/
/* */
/* */
/* */
/* */
/* */
/*  <script src="{{ asset('bundles/js/bootstrap.min.js') }}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
/* */
