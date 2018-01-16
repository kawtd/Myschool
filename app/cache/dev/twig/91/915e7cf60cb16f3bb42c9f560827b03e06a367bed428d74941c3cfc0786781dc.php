<?php

/* MyschoolBundle:Enseignant:addenseignant.html.twig */
class __TwigTemplate_3cb3200097bcb00fadf4e3880d6b0e9b9652eb0a75f3ce8bb871f20a91dbca91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Enseignant:addenseignant.html.twig", 1);
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
        $__internal_86ffcc93fa09463783adf5fd41337f1938306f6c3b4948c9b929d62103f471f0 = $this->env->getExtension("native_profiler");
        $__internal_86ffcc93fa09463783adf5fd41337f1938306f6c3b4948c9b929d62103f471f0->enter($__internal_86ffcc93fa09463783adf5fd41337f1938306f6c3b4948c9b929d62103f471f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:addenseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ffcc93fa09463783adf5fd41337f1938306f6c3b4948c9b929d62103f471f0->leave($__internal_86ffcc93fa09463783adf5fd41337f1938306f6c3b4948c9b929d62103f471f0_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa586349b9716acf73456147898dd43d87cfcce9061b634ccd260090d8a6b485 = $this->env->getExtension("native_profiler");
        $__internal_aa586349b9716acf73456147898dd43d87cfcce9061b634ccd260090d8a6b485->enter($__internal_aa586349b9716acf73456147898dd43d87cfcce9061b634ccd260090d8a6b485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aa586349b9716acf73456147898dd43d87cfcce9061b634ccd260090d8a6b485->leave($__internal_aa586349b9716acf73456147898dd43d87cfcce9061b634ccd260090d8a6b485_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_32d07ba12fb92cf0733cca816ecfe55307f4e4778fd1149b09214344a1085fbc = $this->env->getExtension("native_profiler");
        $__internal_32d07ba12fb92cf0733cca816ecfe55307f4e4778fd1149b09214344a1085fbc->enter($__internal_32d07ba12fb92cf0733cca816ecfe55307f4e4778fd1149b09214344a1085fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>Welcome to the Enseignant:addEnseignant page</h1>



";
        // line 12
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 13
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 15
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo " >
<div class =\"container\">
        <div class =\"navbar navbar-inverse\">
            <div class =\"navbar-brand\">
                MajEnseignant page
            </div>
        </div>  
<div class =\"row\">
<div class =\"form-group\">
    <div class =\"col-sm-10\">
         <label>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</label>
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
        <div class =\"col-sm-10\">
             <label>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</label>
 ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
   </div>
</div>
    <div class =\"form-group\">
    
    <div class =\"col-sm-10\"> 
         <label>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'label');
        echo "</label>
   ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
 <div class =\"dropdown\">
      
      <div class =\"col-sm-10\"> 
          <label>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</label>
   ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
 </div>
<div class =\"dropdown\">
     
         <div class =\"col-sm-10\">
             <label>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Specialite", array()), 'label');
        echo "</label>
   ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Specialite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>  
</div>
<div class =\"form-group\">
   
        <div class =\"col-sm-10\">
             <label>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'label');
        echo "</label>
   ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
 
        <div class =\"col-sm-10\">
               <label>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "lieu", array()), 'label');
        echo "</label>
   ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cin", array()), 'label');
        echo "</label>
   ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
   <div class =\"form-group\">
       <div class =\"col-sm-10\"> 
        
   <label>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datecin", array()), 'label');
        echo "</label>
   ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datecin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'label');
        echo "</label>
   ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
       <div class =\"col-sm-10\">
            <label>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'label');
        echo "</label>
   ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
    <div class =\"form-group\">
         
           <div class =\"col-sm-10\">
               <label>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'label');
        echo "</label>
   ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
<div>
   
      <div class = \"form-group\">
          <div class =\"col-sm-10\">
           <label>Image</label>
   ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
    <div class =\"form-group\">  
    <div>
    <button type=\"submit\" Class =\"btn btn-primary\"> 
        <span class =\"glyphicon-plus\"/>Valider
    </button>
    </div>
    </div>
 <div class =\"form-group\">
  <div class =\"col-sm-10\">
 <p><a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo " \">Retour à la liste des Enseignants</a></p>
  </div>         
</div>
</div>
     ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
</form>
";
        
        $__internal_32d07ba12fb92cf0733cca816ecfe55307f4e4778fd1149b09214344a1085fbc->leave($__internal_32d07ba12fb92cf0733cca816ecfe55307f4e4778fd1149b09214344a1085fbc_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Enseignant:addenseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 127,  266 => 123,  251 => 111,  240 => 103,  236 => 102,  227 => 96,  223 => 95,  214 => 89,  210 => 88,  201 => 82,  197 => 81,  188 => 75,  184 => 74,  175 => 68,  171 => 67,  162 => 61,  158 => 60,  149 => 54,  145 => 53,  136 => 47,  132 => 46,  123 => 40,  119 => 39,  110 => 33,  106 => 32,  97 => 26,  93 => 25,  79 => 15,  73 => 13,  71 => 12,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/* <h1>Welcome to the Enseignant:addEnseignant page</h1>*/
/* */
/* */
/* */
/* {% if message %}*/
/* <p>{{ message }}</p>*/
/* {% endif %}*/
/* <form action="" method="post" {{ form_enctype(f) }} >*/
/* <div class ="container">*/
/*         <div class ="navbar navbar-inverse">*/
/*             <div class ="navbar-brand">*/
/*                 MajEnseignant page*/
/*             </div>*/
/*         </div>  */
/* <div class ="row">*/
/* <div class ="form-group">*/
/*     <div class ="col-sm-10">*/
/*          <label>{{ form_label(f.nom) }}</label>*/
/*     {{ form_widget(f.nom,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/*     */
/*         <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.prenom) }}</label>*/
/*  {{ form_widget(f.prenom,{attr:{'class':'form-control'}}) }}   */
/*    </div>*/
/* </div>*/
/*     <div class ="form-group">*/
/*     */
/*     <div class ="col-sm-10"> */
/*          <label>{{ form_label(f.adresse) }}</label>*/
/*    {{ form_widget(f.adresse,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/*  <div class ="dropdown">*/
/*       */
/*       <div class ="col-sm-10"> */
/*           <label>{{ form_label(f.genre) }}</label>*/
/*    {{ form_widget(f.genre,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*  </div>*/
/* <div class ="dropdown">*/
/*      */
/*          <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.Specialite) }}</label>*/
/*    {{ form_widget(f.Specialite,{attr:{'class':'form-control'}}) }}*/
/*     </div>  */
/* </div>*/
/* <div class ="form-group">*/
/*    */
/*         <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.date) }}</label>*/
/*    {{ form_widget(f.date,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/*  */
/*         <div class ="col-sm-10">*/
/*                <label>{{ form_label(f.lieu) }}</label>*/
/*    {{ form_widget(f.lieu,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/* */
/*        <div class ="col-sm-10">*/
/*                 <label>{{ form_label(f.cin) }}</label>*/
/*    {{ form_widget(f.cin,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/*    <div class ="form-group">*/
/*        <div class ="col-sm-10"> */
/*         */
/*    <label>{{ form_label(f.datecin) }}</label>*/
/*    {{ form_widget(f.datecin,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/* */
/*        <div class ="col-sm-10">*/
/*                 <label>{{ form_label(f.tel) }}</label>*/
/*    {{ form_widget(f.tel,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/*     */
/*        <div class ="col-sm-10">*/
/*             <label>{{ form_label(f.email) }}</label>*/
/*    {{ form_widget(f.email,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/*     <div class ="form-group">*/
/*          */
/*            <div class ="col-sm-10">*/
/*                <label>{{ form_label(f.obs) }}</label>*/
/*    {{ form_widget(f.obs,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/* <div>*/
/*    */
/*       <div class = "form-group">*/
/*           <div class ="col-sm-10">*/
/*            <label>Image</label>*/
/*    {{ form_widget(f.file,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/*     <div class ="form-group">  */
/*     <div>*/
/*     <button type="submit" Class ="btn btn-primary"> */
/*         <span class ="glyphicon-plus"/>Valider*/
/*     </button>*/
/*     </div>*/
/*     </div>*/
/*  <div class ="form-group">*/
/*   <div class ="col-sm-10">*/
/*  <p><a href="{{ path('list_enseignant') }} ">Retour à la liste des Enseignants</a></p>*/
/*   </div>         */
/* </div>*/
/* </div>*/
/*      {{ form_widget(f) }}*/
/* </form>*/
/* {% endblock %}*/
/* */
