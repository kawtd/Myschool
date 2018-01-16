<?php

/* MyschoolBundle:Student:editStudent.html.twig */
class __TwigTemplate_4c5c9085a89e268fa8904243fb1d5736e4c9eb4730bffdac5f82d37b652ff791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Student:editStudent.html.twig", 1);
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
        $__internal_bea08023998883408aab212e12d6b870e0547e314fed5a56147917fd5ede5292 = $this->env->getExtension("native_profiler");
        $__internal_bea08023998883408aab212e12d6b870e0547e314fed5a56147917fd5ede5292->enter($__internal_bea08023998883408aab212e12d6b870e0547e314fed5a56147917fd5ede5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:editStudent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bea08023998883408aab212e12d6b870e0547e314fed5a56147917fd5ede5292->leave($__internal_bea08023998883408aab212e12d6b870e0547e314fed5a56147917fd5ede5292_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0df5aea27dd14796aab5082cbad3d13773969eade9e35fa835dfa3de3c0af03b = $this->env->getExtension("native_profiler");
        $__internal_0df5aea27dd14796aab5082cbad3d13773969eade9e35fa835dfa3de3c0af03b->enter($__internal_0df5aea27dd14796aab5082cbad3d13773969eade9e35fa835dfa3de3c0af03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<h1>Welcome to the Student:addStudent page</h1>



";
        // line 8
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 9
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 11
        echo "<form action=\"\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo " >
<div class =\"container\">
<div class =\"row\">
<div class =\"form-group\">
    <div class =\"col-sm-10\">
         <label>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</label>
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
        <div class =\"col-sm-10\">
             <label>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</label>
 ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "   
   </div>
</div>
    <div class =\"form-group\">
    
    <div class =\"col-sm-10\"> 
         <label>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'label');
        echo "</label>
   ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
 <div class =\"dropdown\">
      
      <div class =\"col-sm-10\"> 
          <label>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</label>
   ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
 </div>
<div class =\"dropdown\">
     
         <div class =\"col-sm-10\">
             <label>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Classe", array()), 'label');
        echo "</label>
   ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>  
</div>
<div class =\"form-group\">
   
        <div class =\"col-sm-10\">
             <label>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'label');
        echo "</label>
   ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
    <div class =\"form-group\">
   
        <div class =\"col-sm-10\">
             <label>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "lieu", array()), 'label');
        echo "</label>
   ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
 
        <div class =\"col-sm-10\">
               <label>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomTuteur", array()), 'label');
        echo "</label>
   ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nomTuteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profition", array()), 'label');
        echo "</label>
   ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "profition", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>

<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'label');
        echo "</label>
   ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
       <div class =\"col-sm-10\">
            <label>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'label');
        echo "</label>
   ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
    <div class =\"form-group\">
         
           <div class =\"col-sm-10\">
               <label>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'label');
        echo "</label>
   ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
<div>
   <div class = \"form-group\">
          <div class =\"col-sm-10\">
           <label>Image</label>
   ";
        // line 102
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
        // line 115
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo " \">Retour à la liste des Student</a></p>
  </div>         
</div>
</div>
     ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
</form>
";
        
        $__internal_0df5aea27dd14796aab5082cbad3d13773969eade9e35fa835dfa3de3c0af03b->leave($__internal_0df5aea27dd14796aab5082cbad3d13773969eade9e35fa835dfa3de3c0af03b_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:editStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 119,  237 => 115,  221 => 102,  211 => 95,  207 => 94,  198 => 88,  194 => 87,  185 => 81,  181 => 80,  171 => 73,  167 => 72,  158 => 66,  154 => 65,  145 => 59,  141 => 58,  132 => 52,  128 => 51,  119 => 45,  115 => 44,  106 => 38,  102 => 37,  93 => 31,  89 => 30,  80 => 24,  76 => 23,  67 => 17,  63 => 16,  54 => 11,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/* <h1>Welcome to the Student:addStudent page</h1>*/
/* */
/* */
/* */
/* {% if message %}*/
/* <p>{{ message }}</p>*/
/* {% endif %}*/
/* <form action="" method="post" {{ form_enctype(f) }} >*/
/* <div class ="container">*/
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
/*  */
/*     <div class ="form-group">  */
/*     <div>*/
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
