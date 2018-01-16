<?php

/* ::base.html.twig */
class __TwigTemplate_4f87ccc7d4e63fec4aff0c59434ad01fa295ca28c9e1834b378af1f9a6601045 extends Twig_Template
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
        $__internal_f63364d175ee0e844374de9e0c98b30aaf642e5fda60f19311475eb78503a242 = $this->env->getExtension("native_profiler");
        $__internal_f63364d175ee0e844374de9e0c98b30aaf642e5fda60f19311475eb78503a242->enter($__internal_f63364d175ee0e844374de9e0c98b30aaf642e5fda60f19311475eb78503a242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 12
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_f63364d175ee0e844374de9e0c98b30aaf642e5fda60f19311475eb78503a242->leave($__internal_f63364d175ee0e844374de9e0c98b30aaf642e5fda60f19311475eb78503a242_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7eb39d7e98bfed4f49a4b5c045ad2dcdae25e280b9d852b81f53fa74536a7f9 = $this->env->getExtension("native_profiler");
        $__internal_f7eb39d7e98bfed4f49a4b5c045ad2dcdae25e280b9d852b81f53fa74536a7f9->enter($__internal_f7eb39d7e98bfed4f49a4b5c045ad2dcdae25e280b9d852b81f53fa74536a7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7eb39d7e98bfed4f49a4b5c045ad2dcdae25e280b9d852b81f53fa74536a7f9->leave($__internal_f7eb39d7e98bfed4f49a4b5c045ad2dcdae25e280b9d852b81f53fa74536a7f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbadf610f25adee080e8358d2f91c6b9dd43e51e8c1ebb99d67cdd35d8d367a1 = $this->env->getExtension("native_profiler");
        $__internal_fbadf610f25adee080e8358d2f91c6b9dd43e51e8c1ebb99d67cdd35d8d367a1->enter($__internal_fbadf610f25adee080e8358d2f91c6b9dd43e51e8c1ebb99d67cdd35d8d367a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
                ";
        
        $__internal_fbadf610f25adee080e8358d2f91c6b9dd43e51e8c1ebb99d67cdd35d8d367a1->leave($__internal_fbadf610f25adee080e8358d2f91c6b9dd43e51e8c1ebb99d67cdd35d8d367a1_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_d744e84c9400bbdb58a2f96160d5f9a7d3fe7f05256be6707bf45514a4dc92d9 = $this->env->getExtension("native_profiler");
        $__internal_d744e84c9400bbdb58a2f96160d5f9a7d3fe7f05256be6707bf45514a4dc92d9->enter($__internal_d744e84c9400bbdb58a2f96160d5f9a7d3fe7f05256be6707bf45514a4dc92d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d744e84c9400bbdb58a2f96160d5f9a7d3fe7f05256be6707bf45514a4dc92d9->leave($__internal_d744e84c9400bbdb58a2f96160d5f9a7d3fe7f05256be6707bf45514a4dc92d9_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bf3ad320915ca3ee3ed02b99d5cab5eeafc127902a0d085a059c70ee59c5fb1 = $this->env->getExtension("native_profiler");
        $__internal_6bf3ad320915ca3ee3ed02b99d5cab5eeafc127902a0d085a059c70ee59c5fb1->enter($__internal_6bf3ad320915ca3ee3ed02b99d5cab5eeafc127902a0d085a059c70ee59c5fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6bf3ad320915ca3ee3ed02b99d5cab5eeafc127902a0d085a059c70ee59c5fb1->leave($__internal_6bf3ad320915ca3ee3ed02b99d5cab5eeafc127902a0d085a059c70ee59c5fb1_prof);

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
        return array (  130 => 20,  126 => 19,  122 => 18,  112 => 17,  101 => 16,  92 => 10,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 21,  49 => 17,  47 => 16,  41 => 13,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*                 {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}<script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/jquery.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/jquery-1.10.2.js') }}"></script>*/
/*  <script src="{{ asset('bundles/js/bootstrap.min.js') }}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
