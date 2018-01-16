<?php

/* MyschoolBundle:Default:affichage.html.twig */
class __TwigTemplate_cb88bc11631324ef49026e06b5fb15ac31082fde6a956fd19b95791631a2d173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Default:affichage.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e65430a44e71008bf20b0665d63643e83ea83e0d86e664e741bb04f8c4c7ebfe = $this->env->getExtension("native_profiler");
        $__internal_e65430a44e71008bf20b0665d63643e83ea83e0d86e664e741bb04f8c4c7ebfe->enter($__internal_e65430a44e71008bf20b0665d63643e83ea83e0d86e664e741bb04f8c4c7ebfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Default:affichage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65430a44e71008bf20b0665d63643e83ea83e0d86e664e741bb04f8c4c7ebfe->leave($__internal_e65430a44e71008bf20b0665d63643e83ea83e0d86e664e741bb04f8c4c7ebfe_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d79d043ab3fb4bfed640b3d4a29b3cc4b84c34c6c1594d6164d341ed68660e19 = $this->env->getExtension("native_profiler");
        $__internal_d79d043ab3fb4bfed640b3d4a29b3cc4b84c34c6c1594d6164d341ed68660e19->enter($__internal_d79d043ab3fb4bfed640b3d4a29b3cc4b84c34c6c1594d6164d341ed68660e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_d79d043ab3fb4bfed640b3d4a29b3cc4b84c34c6c1594d6164d341ed68660e19->leave($__internal_d79d043ab3fb4bfed640b3d4a29b3cc4b84c34c6c1594d6164d341ed68660e19_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_38a3b67d122997e8063de9016b645ad81a2161d77a235a125f69f22124214cc9 = $this->env->getExtension("native_profiler");
        $__internal_38a3b67d122997e8063de9016b645ad81a2161d77a235a125f69f22124214cc9->enter($__internal_38a3b67d122997e8063de9016b645ad81a2161d77a235a125f69f22124214cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "   <div class =\"navbar navbar-inverse navbar-fixed-top\"  role  = \"navigation\">
            <div class =\"navbar-header\">
             
            <a class = \"navbar-brand\" href=\"\">
                <img src =\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagee/images1.png"), "html", null, true);
        echo "\" alt =\"logo\" style = \"width: 40px;height: 40px\"/></a>
            </div>
          <div  class = \"collapse navbar-collapse\" href=\"\">
          
              
              <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("affichage_path");
        echo "\" ></a>
               
              
          </div>
            </div>    
    

    
";
        
        $__internal_38a3b67d122997e8063de9016b645ad81a2161d77a235a125f69f22124214cc9->leave($__internal_38a3b67d122997e8063de9016b645ad81a2161d77a235a125f69f22124214cc9_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Default:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  71 => 12,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/*    <div class ="navbar navbar-inverse navbar-fixed-top"  role  = "navigation">*/
/*             <div class ="navbar-header">*/
/*              */
/*             <a class = "navbar-brand" href="">*/
/*                 <img src ="{{ asset ('imagee/images1.png')}}" alt ="logo" style = "width: 40px;height: 40px"/></a>*/
/*             </div>*/
/*           <div  class = "collapse navbar-collapse" href="">*/
/*           */
/*               */
/*               <a href="{{path('affichage_path')}}" ></a>*/
/*                */
/*               */
/*           </div>*/
/*             </div>    */
/*     */
/* */
/*     */
/* {% endblock %}*/
