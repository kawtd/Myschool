<?php

/* MyschoolBundle:Student:add_student.html.twig */
class __TwigTemplate_15813e65e9b91df5c701159904e975394f7b99c3616f19e85e5a307e8d829bb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Student:add_student.html.twig", 1);
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
        $__internal_e3e3cf0efcd686fc61d6d642647f78a5c8077ca874cf7a7a5297cb35e243e9eb = $this->env->getExtension("native_profiler");
        $__internal_e3e3cf0efcd686fc61d6d642647f78a5c8077ca874cf7a7a5297cb35e243e9eb->enter($__internal_e3e3cf0efcd686fc61d6d642647f78a5c8077ca874cf7a7a5297cb35e243e9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:add_student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e3cf0efcd686fc61d6d642647f78a5c8077ca874cf7a7a5297cb35e243e9eb->leave($__internal_e3e3cf0efcd686fc61d6d642647f78a5c8077ca874cf7a7a5297cb35e243e9eb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ab91d63b3c03a0901f632e547cc47c124deffa9a97e9ef7d3dc9f45cda461893 = $this->env->getExtension("native_profiler");
        $__internal_ab91d63b3c03a0901f632e547cc47c124deffa9a97e9ef7d3dc9f45cda461893->enter($__internal_ab91d63b3c03a0901f632e547cc47c124deffa9a97e9ef7d3dc9f45cda461893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ab91d63b3c03a0901f632e547cc47c124deffa9a97e9ef7d3dc9f45cda461893->leave($__internal_ab91d63b3c03a0901f632e547cc47c124deffa9a97e9ef7d3dc9f45cda461893_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f18955790d1982b95ea055c1ab847e069fba8c96156881d7e0d13d03c08164c = $this->env->getExtension("native_profiler");
        $__internal_5f18955790d1982b95ea055c1ab847e069fba8c96156881d7e0d13d03c08164c->enter($__internal_5f18955790d1982b95ea055c1ab847e069fba8c96156881d7e0d13d03c08164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<h1>Welcome to the Student:addStudent page</h1>



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
                Add Student page
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Classe", array()), 'label');
        echo "</label>
   ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Classe", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomTuteur", array()), 'label');
        echo "</label>
   ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomTuteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profition", array()), 'label');
        echo "</label>
   ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profition", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>

<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'label');
        echo "</label>
   ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
       <div class =\"col-sm-10\">
            <label>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'label');
        echo "</label>
   ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
    <div class =\"form-group\">
         
           <div class =\"col-sm-10\">
               <label>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'label');
        echo "</label>
   ";
        // line 104
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
        
    <div class =\"col-sm-10\">
    <button type=\"submit\" Class =\"btn btn-primary\"> 
        <span class =\"glyphicon-plus\"/>Valider
    </button>
    </div>
    </div>
 <div class =\"form-group\">
  <div class =\"col-sm-10\">
 <p><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo " \">Retour à la liste des Student</a></p>
  </div>         
</div>
</div>
     ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
</form>
";
        
        $__internal_5f18955790d1982b95ea055c1ab847e069fba8c96156881d7e0d13d03c08164c->leave($__internal_5f18955790d1982b95ea055c1ab847e069fba8c96156881d7e0d13d03c08164c_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:add_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 129,  268 => 125,  251 => 111,  241 => 104,  237 => 103,  228 => 97,  224 => 96,  215 => 90,  211 => 89,  201 => 82,  197 => 81,  188 => 75,  184 => 74,  175 => 68,  171 => 67,  162 => 61,  158 => 60,  149 => 54,  145 => 53,  136 => 47,  132 => 46,  123 => 40,  119 => 39,  110 => 33,  106 => 32,  97 => 26,  93 => 25,  79 => 15,  73 => 13,  71 => 12,  65 => 8,  59 => 7,  50 => 5,  46 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/* <h1>Welcome to the Student:addStudent page</h1>*/
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
/*                 Add Student page*/
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
/*              <label>{{ form_label(f.Classe) }}</label>*/
/*    {{ form_widget(f.Classe,{attr:{'class':'form-control'}}) }}*/
/*     </div>  */
/* </div>*/
/* <div class ="form-group">*/
/*    */
/*         <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.date) }}</label>*/
/*    {{ form_widget(f.date,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/*     <div class ="form-group">*/
/*    */
/*         <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.lieu) }}</label>*/
/*    {{ form_widget(f.lieu,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/*  */
/*         <div class ="col-sm-10">*/
/*                <label>{{ form_label(f.nomTuteur) }}</label>*/
/*    {{ form_widget(f.nomTuteur,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/* */
/*        <div class ="col-sm-10">*/
/*                 <label>{{ form_label(f.profition) }}</label>*/
/*    {{ form_widget(f.profition,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* */
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
/*    <div class = "form-group">*/
/*           <div class ="col-sm-10">*/
/*            <label>Image</label>*/
/*    {{ form_widget(f.file,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/*     */
/*     <div class ="form-group"> */
/*         */
/*     <div class ="col-sm-10">*/
/*     <button type="submit" Class ="btn btn-primary"> */
/*         <span class ="glyphicon-plus"/>Valider*/
/*     </button>*/
/*     </div>*/
/*     </div>*/
/*  <div class ="form-group">*/
/*   <div class ="col-sm-10">*/
/*  <p><a href="{{ path('student_list') }} ">Retour à la liste des Student</a></p>*/
/*   </div>         */
/* </div>*/
/* </div>*/
/*      {{ form_widget(f) }}*/
/* </form>*/
/* {% endblock %}*/
/* */
