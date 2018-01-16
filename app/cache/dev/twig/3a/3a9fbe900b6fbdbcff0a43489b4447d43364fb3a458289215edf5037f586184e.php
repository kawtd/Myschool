<?php

/* MyschoolBundle:Enseignant:addenseignant.html.twig */
class __TwigTemplate_b5b8e8b9f3c4ff7b11bd5a50dd6e000e29d3069e0d7aea447b0dfe5e5e33b2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Enseignant:addenseignant.html.twig", 1);
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
        $__internal_aaeadb3f46480a94760d4f59449055bdb3d9e02a2f2b5a48213c19164e78c865 = $this->env->getExtension("native_profiler");
        $__internal_aaeadb3f46480a94760d4f59449055bdb3d9e02a2f2b5a48213c19164e78c865->enter($__internal_aaeadb3f46480a94760d4f59449055bdb3d9e02a2f2b5a48213c19164e78c865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:addenseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaeadb3f46480a94760d4f59449055bdb3d9e02a2f2b5a48213c19164e78c865->leave($__internal_aaeadb3f46480a94760d4f59449055bdb3d9e02a2f2b5a48213c19164e78c865_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_109af9eeef721b867bcb34cd04d9d525c004995bb3f7d9ada4a18b2d293a63b5 = $this->env->getExtension("native_profiler");
        $__internal_109af9eeef721b867bcb34cd04d9d525c004995bb3f7d9ada4a18b2d293a63b5->enter($__internal_109af9eeef721b867bcb34cd04d9d525c004995bb3f7d9ada4a18b2d293a63b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<h1>Ajouter Enseignant </h1>



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
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'label');
        echo "</label>
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
        <div class =\"col-sm-10\">
             <label>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'label');
        echo "</label>
 ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
   </div>
</div>
    <div class =\"form-group\">
    
    <div class =\"col-sm-10\">
         <label>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'label');
        echo "</label>
   ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
 <div class =\"dropdown\">
      
      <div class =\"col-sm-10\">
          <label>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'label');
        echo "</label>
   ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "genre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
 </div>
<div class =\"dropdown\">
     
         <div class =\"col-sm-10\">
             <label>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Specialite", array()), 'label');
        echo "</label>
   ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Specialite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>  
</div>
<div class =\"form-group\">
   
        <div class =\"col-sm-10\">
             <label>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'label');
        echo "</label>
   ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
 
        <div class =\"col-sm-10\">
               <label>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "lieu", array()), 'label');
        echo "</label>
   ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "lieu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cin", array()), 'label');
        echo "</label>
   ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
   <div class =\"form-group\">
       <div class =\"col-sm-10\">
        
   <label>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datecin", array()), 'label');
        echo "</label>
   ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "datecin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">

       <div class =\"col-sm-10\">
                <label>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'label');
        echo "</label>
   ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
<div class =\"form-group\">
    
       <div class =\"col-sm-10\">
            <label>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'label');
        echo "</label>
   ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
</div>
    <div class =\"form-group\">
         
           <div class =\"col-sm-10\">
               <label>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'label');
        echo "</label>
   ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "obs", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
        <div class =\"form-group\">
         
           <div class =\"col-sm-10\">
               <label>";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nombank", array()), 'label');
        echo "</label>
   ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nombank", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
        <div class =\"form-group\">
         
           <div class =\"col-sm-10\">
               <label>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "numbank", array()), 'label');
        echo "</label>
   ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "numbank", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
    </div>
<div>
   
      <div class = \"form-group\">
          <div class =\"col-sm-10\">
           <label>Image</label>
   ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "<br>
    </div>
</div>
    <br>
    <div class =\"form-group\">
    <div class =\"col-sm-10\">
    <button type=\"submit\" Class =\"btn btn-primary\">
        <span class =\"glyphicon-plus\"/>Valider
    </button>
    </div>
    </div>
</div></div>
    <br><br>
 <div class =\"form-group\">
  <div class =\"col-sm-10\">
 <p><a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo " \">Retour à la liste des Enseignants</a></p>
  </div>         
</div>
</div>
     ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
</form>
";
        
        $__internal_109af9eeef721b867bcb34cd04d9d525c004995bb3f7d9ada4a18b2d293a63b5->leave($__internal_109af9eeef721b867bcb34cd04d9d525c004995bb3f7d9ada4a18b2d293a63b5_prof);

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
        return array (  274 => 137,  267 => 133,  249 => 118,  238 => 110,  234 => 109,  225 => 103,  221 => 102,  212 => 96,  208 => 95,  199 => 89,  195 => 88,  186 => 82,  182 => 81,  173 => 75,  169 => 74,  160 => 68,  156 => 67,  147 => 61,  143 => 60,  134 => 54,  130 => 53,  121 => 47,  117 => 46,  108 => 40,  104 => 39,  95 => 33,  91 => 32,  82 => 26,  78 => 25,  69 => 19,  65 => 18,  54 => 11,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/* <h1>Ajouter Enseignant </h1>*/
/* */
/* */
/* */
/* {% if message %}*/
/* <p>{{ message }}</p>*/
/* {% endif %}*/
/* <form action="" method="post" {{ form_enctype(f) }} >*/
/* <div class ="container">*/
/* */
/* <div class ="row">*/
/* */
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
/*  {{ form_widget(f.prenom,{attr:{'class':'form-control'}}) }}*/
/*    </div>*/
/* </div>*/
/*     <div class ="form-group">*/
/*     */
/*     <div class ="col-sm-10">*/
/*          <label>{{ form_label(f.adresse) }}</label>*/
/*    {{ form_widget(f.adresse,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/*  <div class ="dropdown">*/
/*       */
/*       <div class ="col-sm-10">*/
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
/*        <div class ="col-sm-10">*/
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
/*         <div class ="form-group">*/
/*          */
/*            <div class ="col-sm-10">*/
/*                <label>{{ form_label(f.nombank) }}</label>*/
/*    {{ form_widget(f.nombank,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/*         <div class ="form-group">*/
/*          */
/*            <div class ="col-sm-10">*/
/*                <label>{{ form_label(f.numbank) }}</label>*/
/*    {{ form_widget(f.numbank,{attr:{'class':'form-control'}}) }}*/
/*     </div>*/
/*     </div>*/
/* <div>*/
/*    */
/*       <div class = "form-group">*/
/*           <div class ="col-sm-10">*/
/*            <label>Image</label>*/
/*    {{ form_widget(f.file,{attr:{'class':'form-control'}}) }}<br>*/
/*     </div>*/
/* </div>*/
/*     <br>*/
/*     <div class ="form-group">*/
/*     <div class ="col-sm-10">*/
/*     <button type="submit" Class ="btn btn-primary">*/
/*         <span class ="glyphicon-plus"/>Valider*/
/*     </button>*/
/*     </div>*/
/*     </div>*/
/* </div></div>*/
/*     <br><br>*/
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
