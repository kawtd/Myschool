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
        $__internal_7f73eddc7f76ea18c93a27b1eba6b7f6c3764546126328c137c645b5ef2290c2 = $this->env->getExtension("native_profiler");
        $__internal_7f73eddc7f76ea18c93a27b1eba6b7f6c3764546126328c137c645b5ef2290c2->enter($__internal_7f73eddc7f76ea18c93a27b1eba6b7f6c3764546126328c137c645b5ef2290c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:alert.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f73eddc7f76ea18c93a27b1eba6b7f6c3764546126328c137c645b5ef2290c2->leave($__internal_7f73eddc7f76ea18c93a27b1eba6b7f6c3764546126328c137c645b5ef2290c2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e0a2ea708d9d6ce4a8754a0205a5e6e18ca3f97078a58817997b06db79a0a87 = $this->env->getExtension("native_profiler");
        $__internal_0e0a2ea708d9d6ce4a8754a0205a5e6e18ca3f97078a58817997b06db79a0a87->enter($__internal_0e0a2ea708d9d6ce4a8754a0205a5e6e18ca3f97078a58817997b06db79a0a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "
       <div class=\"col-md-4\">

           <ul class=\"list-group\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 9
            echo "      <li class=\"list-group-item col-md-12\">
          
            <a href=\"";
            // line 11
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
        // line 14
        echo "  </ul>
  </div>
  
  ";
        // line 17
        if ((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep"))) {
            // line 18
            echo "      <form method=\"post\" action=\"";
            echo $this->env->getExtension('routing')->getPath("alert");
            echo "\">
      <div class=\"col-md-4\">
          <ul class=\"list-group\">
  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")));
            foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
                // line 22
                echo "      <li class=\"list-group-item col-md-12\">
          <input type=\"checkbox\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
                echo "\">
      <label >";
                // line 24
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
        // line 29
        echo "      </ul>
      </div>
     <input class=\"btn btn-danger \" type=\"submit\" value=\"submit\">
  </form>

";
        
        $__internal_0e0a2ea708d9d6ce4a8754a0205a5e6e18ca3f97078a58817997b06db79a0a87->leave($__internal_0e0a2ea708d9d6ce4a8754a0205a5e6e18ca3f97078a58817997b06db79a0a87_prof);

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
        return array (  103 => 29,  90 => 24,  86 => 23,  83 => 22,  79 => 21,  72 => 18,  70 => 17,  65 => 14,  54 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/* */
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
