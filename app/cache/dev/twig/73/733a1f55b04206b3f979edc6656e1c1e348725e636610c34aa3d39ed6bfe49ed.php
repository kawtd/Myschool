<?php

/* note/new.html.twig */
class __TwigTemplate_227ee9ffa9e0278e0635d4781b0ce300aaf3356a007fbef320380b95e03edb14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "note/new.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyschoolBundle:Default:affichage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_308375b4eb81129c06a27be1b2cdc481e7ac75186cd7dba060ea2ba79dfd8aa4 = $this->env->getExtension("native_profiler");
        $__internal_308375b4eb81129c06a27be1b2cdc481e7ac75186cd7dba060ea2ba79dfd8aa4->enter($__internal_308375b4eb81129c06a27be1b2cdc481e7ac75186cd7dba060ea2ba79dfd8aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308375b4eb81129c06a27be1b2cdc481e7ac75186cd7dba060ea2ba79dfd8aa4->leave($__internal_308375b4eb81129c06a27be1b2cdc481e7ac75186cd7dba060ea2ba79dfd8aa4_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18c06a04a3276f1d7ef521144a941727ded94f88d0129aef2159cd368cb8b5a5 = $this->env->getExtension("native_profiler");
        $__internal_18c06a04a3276f1d7ef521144a941727ded94f88d0129aef2159cd368cb8b5a5->enter($__internal_18c06a04a3276f1d7ef521144a941727ded94f88d0129aef2159cd368cb8b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>note creation</h1>


<form action=\"\" method=\"post\" >
<div class =\"container\">
        <div class =\"navbar navbar-inverse\">
            <div class =\"navbar-brand\">
                note creation
            </div>
        </div>  
<div class =\"row\">
<div class =\"form-group\">
    <div class =\"col-sm-10\">
         <label>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "semestre", array()), 'label');
        echo "</label>
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "semestre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
        <div class =\"col-sm-10\">
             <label>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "noteDs", array()), 'label');
        echo "</label>
 ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "noteDs", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
   </div>
</div>
    <div class =\"form-group\">
    
    <div class =\"col-sm-10\"> 
         <label>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "noteExam", array()), 'label');
        echo "</label>
   ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "noteExam", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
 <div class =\"dropdown\">
      
      <div class =\"col-sm-10\"> 
          <label>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pourcentageDs", array()), 'label');
        echo "</label>
   ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pourcentageDs", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
 </div>
<div class =\"dropdown\">
     
         <div class =\"col-sm-10\">
             <label>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pourcentageExam", array()), 'label');
        echo "</label>
   ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "pourcentageExam", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>  
</div>
<div class =\"form-group\">
   
        <div class =\"col-sm-10\">
             <label>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "matiers", array()), 'label');
        echo "</label>
   ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "matiers", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
 
        <div class =\"col-sm-10\">
               <label>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Classe", array()), 'label');
        echo "</label>
               
   ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Student", array()), 'label');
        echo "</label>
   ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Student", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
   
    <div class =\"form-group\">  
    <div>
        <button type=\"submit\" Class =\"btn btn-primary\"><span class =\"glyphicon-plus\"/>Valider</button>

    </div>
    </div>
 <div class =\"form-group\">
  <div class =\"col-sm-10\">
 <p>  <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("note_index");
        echo "\">Back to the list</a></p>
  </div>         
</div>
</div>
     ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
</form>

";
        
        $__internal_18c06a04a3276f1d7ef521144a941727ded94f88d0129aef2159cd368cb8b5a5->leave($__internal_18c06a04a3276f1d7ef521144a941727ded94f88d0129aef2159cd368cb8b5a5_prof);

    }

    public function getTemplateName()
    {
        return "note/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 84,  166 => 80,  151 => 68,  147 => 67,  138 => 61,  133 => 59,  124 => 53,  120 => 52,  111 => 46,  107 => 45,  98 => 39,  94 => 38,  85 => 32,  81 => 31,  72 => 25,  68 => 24,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>note creation</h1>*/
/* */
/* */
/* <form action="" method="post" >*/
/* <div class ="container">*/
/*         <div class ="navbar navbar-inverse">*/
/*             <div class ="navbar-brand">*/
/*                 note creation*/
/*             </div>*/
/*         </div>  */
/* <div class ="row">*/
/* <div class ="form-group">*/
/*     <div class ="col-sm-10">*/
/*          <label>{{ form_label(f.semestre) }}</label>*/
/*     {{ form_widget(f.semestre,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/*     */
/*         <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.noteDs) }}</label>*/
/*  {{ form_widget(f.noteDs,{attr:{'class':'form-control'}}) }}   */
/*    </div>*/
/* </div>*/
/*     <div class ="form-group">*/
/*     */
/*     <div class ="col-sm-10"> */
/*          <label>{{ form_label(f.noteExam) }}</label>*/
/*    {{ form_widget(f.noteExam,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/*  <div class ="dropdown">*/
/*       */
/*       <div class ="col-sm-10"> */
/*           <label>{{ form_label(f.pourcentageDs) }}</label>*/
/*    {{ form_widget(f.pourcentageDs,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*  </div>*/
/* <div class ="dropdown">*/
/*      */
/*          <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.pourcentageExam) }}</label>*/
/*    {{ form_widget(f.pourcentageExam,{attr:{'class':'form-control'}}) }}*/
/*     </div>  */
/* </div>*/
/* <div class ="form-group">*/
/*    */
/*         <div class ="col-sm-10">*/
/*              <label>{{ form_label(f.matiers) }}</label>*/
/*    {{ form_widget(f.matiers,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/*  */
/*         <div class ="col-sm-10">*/
/*                <label>{{ form_label(f.Classe) }}</label>*/
/*                */
/*    {{ form_widget(f.Classe,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/* <div class ="form-group">*/
/* */
/*        <div class ="col-sm-10">*/
/*                 <label>{{ form_label(f.Student) }}</label>*/
/*    {{ form_widget(f.Student,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/* </div>*/
/*    */
/*     <div class ="form-group">  */
/*     <div>*/
/*         <button type="submit" Class ="btn btn-primary"><span class ="glyphicon-plus"/>Valider</button>*/
/* */
/*     </div>*/
/*     </div>*/
/*  <div class ="form-group">*/
/*   <div class ="col-sm-10">*/
/*  <p>  <a href="{{ path('note_index') }}">Back to the list</a></p>*/
/*   </div>         */
/* </div>*/
/* </div>*/
/*      {{ form_widget(f) }}*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
