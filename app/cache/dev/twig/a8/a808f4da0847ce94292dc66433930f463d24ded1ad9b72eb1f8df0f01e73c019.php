<?php

/* MyschoolBundle:Enseignant:alert.html.twig */
class __TwigTemplate_64d2ce2302f893cb5b98ac191c28fdb0ac352203769cbe74f16c0f6d6102892a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Enseignant:alert.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_0b91d87ecd8bbb1b66e196523c75b611077050fb458067b4d47b5b9d1f052e2c = $this->env->getExtension("native_profiler");
        $__internal_0b91d87ecd8bbb1b66e196523c75b611077050fb458067b4d47b5b9d1f052e2c->enter($__internal_0b91d87ecd8bbb1b66e196523c75b611077050fb458067b4d47b5b9d1f052e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:alert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b91d87ecd8bbb1b66e196523c75b611077050fb458067b4d47b5b9d1f052e2c->leave($__internal_0b91d87ecd8bbb1b66e196523c75b611077050fb458067b4d47b5b9d1f052e2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_830e8e8f7fbd60056ce94e82059b15766dd0c26ba62eb84e85f4f8a8246f5638 = $this->env->getExtension("native_profiler");
        $__internal_830e8e8f7fbd60056ce94e82059b15766dd0c26ba62eb84e85f4f8a8246f5638->enter($__internal_830e8e8f7fbd60056ce94e82059b15766dd0c26ba62eb84e85f4f8a8246f5638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ecoleEcoleBundle:Enseignant:listEnseignant";
        
        $__internal_830e8e8f7fbd60056ce94e82059b15766dd0c26ba62eb84e85f4f8a8246f5638->leave($__internal_830e8e8f7fbd60056ce94e82059b15766dd0c26ba62eb84e85f4f8a8246f5638_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77c20a019ca8b4fb0470676e1301a1aeb628160c50f5f5c084416a33584f8d3b = $this->env->getExtension("native_profiler");
        $__internal_77c20a019ca8b4fb0470676e1301a1aeb628160c50f5f5c084416a33584f8d3b->enter($__internal_77c20a019ca8b4fb0470676e1301a1aeb628160c50f5f5c084416a33584f8d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_77c20a019ca8b4fb0470676e1301a1aeb628160c50f5f5c084416a33584f8d3b->leave($__internal_77c20a019ca8b4fb0470676e1301a1aeb628160c50f5f5c084416a33584f8d3b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bee02118fd77f386162d67d939ef00176e3b90ed860e3dba2efab339885fdff = $this->env->getExtension("native_profiler");
        $__internal_6bee02118fd77f386162d67d939ef00176e3b90ed860e3dba2efab339885fdff->enter($__internal_6bee02118fd77f386162d67d939ef00176e3b90ed860e3dba2efab339885fdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "       <div class =\"navbar navbar-inverse navbar-fixed-top\"  role  = \"navigation\">
            <div class =\"navbar-header\">
             
            <a class = \"navbar-brand\" href=\"\">
                <img src =\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagee/images1.png"), "html", null, true);
        echo "\" alt =\"logo\" style = \"width: 40px;height: 40px\"/></a>
            </div>
          <div  class = \"collapse navbar-collapse\" href=\"\">
          <ul class =\"nav navbar-nav\">
              <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo "\">Enseignant</a></li>
              <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo "\">Student</a></li>
          </ul>
              <form class =\"navbar-form navbar-right\" method =\"get\" action =\"";
        // line 21
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 32
            echo "      <li class=\"list-group-item col-md-12\">
          
            <a href=\"";
            // line 34
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
        // line 37
        echo "  </ul>
  </div>
  
  ";
        // line 40
        if ((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep"))) {
            // line 41
            echo "      <form method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getPath("alert");
            echo "\">
      <div class=\"col-md-4\">
          <ul class=\"list-group\">
  ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")));
            foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                // line 45
                echo "      <li class=\"list-group-item col-md-12\">
          <input type=\"checkbox\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
                echo "\">
      <label >";
                // line 47
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
        // line 52
        echo "      </ul>
      </div>
     <input class=\"btn btn-danger \" type=\"submit\" value=\"submit\">
  </form>

";
        
        $__internal_6bee02118fd77f386162d67d939ef00176e3b90ed860e3dba2efab339885fdff->leave($__internal_6bee02118fd77f386162d67d939ef00176e3b90ed860e3dba2efab339885fdff_prof);

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
        return array (  170 => 52,  157 => 47,  153 => 46,  150 => 45,  146 => 44,  139 => 41,  137 => 40,  132 => 37,  121 => 34,  117 => 32,  113 => 31,  100 => 21,  95 => 19,  91 => 18,  84 => 14,  78 => 10,  72 => 9,  63 => 7,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ecoleEcoleBundle:Enseignant:listEnseignant{% endblock %}*/
/* {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
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
