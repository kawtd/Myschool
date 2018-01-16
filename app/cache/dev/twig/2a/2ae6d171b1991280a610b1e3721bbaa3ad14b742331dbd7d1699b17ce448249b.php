<?php

/* MyschoolBundle:Enseignant:alert.html.twig */
class __TwigTemplate_527a7d3be77a3fee800aa06b8c025a14e8cb43dcec7b861077b67b1fa2631acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Enseignant:alert.html.twig", 1);
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
        $__internal_d787242d2b5326578b022c6b2f4b0e4a20d31ceae222bb282e6ec28e1b05e2ec = $this->env->getExtension("native_profiler");
        $__internal_d787242d2b5326578b022c6b2f4b0e4a20d31ceae222bb282e6ec28e1b05e2ec->enter($__internal_d787242d2b5326578b022c6b2f4b0e4a20d31ceae222bb282e6ec28e1b05e2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:alert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d787242d2b5326578b022c6b2f4b0e4a20d31ceae222bb282e6ec28e1b05e2ec->leave($__internal_d787242d2b5326578b022c6b2f4b0e4a20d31ceae222bb282e6ec28e1b05e2ec_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_197a2e4452f09bc93afa28c3e972987c9eca3ac3325b1f5c22774ae1d37a75c4 = $this->env->getExtension("native_profiler");
        $__internal_197a2e4452f09bc93afa28c3e972987c9eca3ac3325b1f5c22774ae1d37a75c4->enter($__internal_197a2e4452f09bc93afa28c3e972987c9eca3ac3325b1f5c22774ae1d37a75c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "       <div class =\"navbar navbar-inverse navbar-fixed-top\"  role  = \"navigation\">
            <div class =\"navbar-header\">
             
            <a class = \"navbar-brand\" href=\"\">
                <img src =\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagee/images1.png"), "html", null, true);
        echo "\" alt =\"logo\" style = \"width: 40px;height: 40px\"/></a>
            </div>
          <div  class = \"collapse navbar-collapse\" href=\"\">
          <ul class =\"nav navbar-nav\">
              <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo "\">Enseignant</a></li>
              <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo "\">Student</a></li>
          </ul>
              <form class =\"navbar-form navbar-right\" method =\"get\" action =\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("rechStudent");
        echo "\">
                  <input type text class =\"form-control\" placeholder = \"Search ....\" name =\"m\" 
                         > 
               
              </form>
          </div>
       </div><br><br><br><br><br>      
       <div class=\"col-md-4\">

           <ul class=\"list-group\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 26
            echo "      <li class=\"list-group-item col-md-12\">
          
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alert", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "libelle", array()), "html", null, true);
            echo "</a>
      </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </ul>
  </div>
  
  ";
        // line 34
        if ((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep"))) {
            // line 35
            echo "      <form method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getPath("alert");
            echo "\">
      <div class=\"col-md-4\">
          <ul class=\"list-group\">
  ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")));
            foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                // line 39
                echo "      <li class=\"list-group-item col-md-12\">
          <input type=\"checkbox\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
                echo "\">
      <label >";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
                echo "</label>
      </li>
      
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 46
        echo "      </ul>
      </div>
     <input class=\"btn btn-danger \" type=\"submit\" value=\"submit\">
  </form>

";
        
        $__internal_197a2e4452f09bc93afa28c3e972987c9eca3ac3325b1f5c22774ae1d37a75c4->leave($__internal_197a2e4452f09bc93afa28c3e972987c9eca3ac3325b1f5c22774ae1d37a75c4_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Enseignant:alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  119 => 41,  115 => 40,  112 => 39,  108 => 38,  101 => 35,  99 => 34,  94 => 31,  83 => 28,  79 => 26,  75 => 25,  62 => 15,  57 => 13,  53 => 12,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*        <div class ="navbar navbar-inverse navbar-fixed-top"  role  = "navigation">*/
/*             <div class ="navbar-header">*/
/*              */
/*             <a class = "navbar-brand" href="">*/
/*                 <img src ="{{ asset ('imagee/images1.png')}}" alt ="logo" style = "width: 40px;height: 40px"/></a>*/
/*             </div>*/
/*           <div  class = "collapse navbar-collapse" href="">*/
/*           <ul class ="nav navbar-nav">*/
/*               <li><a href="{{ path('list_enseignant') }}">Enseignant</a></li>*/
/*               <li><a href="{{ path('student_list') }}">Student</a></li>*/
/*           </ul>*/
/*               <form class ="navbar-form navbar-right" method ="get" action ="{{ path('rechStudent')}}">*/
/*                   <input type text class ="form-control" placeholder = "Search ...." name ="m" */
/*                          > */
/*                */
/*               </form>*/
/*           </div>*/
/*        </div><br><br><br><br><br>      */
/*        <div class="col-md-4">*/
/* */
/*            <ul class="list-group">*/
/*   {% for cl in enss %}*/
/*       <li class="list-group-item col-md-12">*/
/*           */
/*             <a href="{{ path('alert', { 'id': cl.id }) }}">{{ cl.libelle }}</a>*/
/*       </li>*/
/*   {% endfor %}*/
/*   </ul>*/
/*   </div>*/
/*   */
/*   {% if rep %}*/
/*       <form method="post" action="{{ path('alert')}}">*/
/*       <div class="col-md-4">*/
/*           <ul class="list-group">*/
/*   {% for st in rep %}*/
/*       <li class="list-group-item col-md-12">*/
/*           <input type="checkbox" value="{{st.id}}">*/
/*       <label >{{st.nom}} {{st.prenom}}</label>*/
/*       </li>*/
/*       */
/*   {% endfor %}*/
/* {% endif %}*/
/*       </ul>*/
/*       </div>*/
/*      <input class="btn btn-danger " type="submit" value="submit">*/
/*   </form>*/
/* */
/* {% endblock %}*/
