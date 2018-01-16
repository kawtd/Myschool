<?php

/* MyschoolBundle:Enseignant:listenseignant.html.twig */
class __TwigTemplate_8c2b5c024ec98c3e4ee4d175ec2785e5cd8afe02ce9cb7418448212b5a2c1793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Enseignant:listenseignant.html.twig", 1);
        $this->blocks = array(
            'ar' => array($this, 'block_ar'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyschoolBundle:Default:affichage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5bc29eeb54d123c2df52d3e775156a093febffb3d13680e3186db8ac439524a = $this->env->getExtension("native_profiler");
        $__internal_a5bc29eeb54d123c2df52d3e775156a093febffb3d13680e3186db8ac439524a->enter($__internal_a5bc29eeb54d123c2df52d3e775156a093febffb3d13680e3186db8ac439524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:listenseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5bc29eeb54d123c2df52d3e775156a093febffb3d13680e3186db8ac439524a->leave($__internal_a5bc29eeb54d123c2df52d3e775156a093febffb3d13680e3186db8ac439524a_prof);

    }

    // line 4
    public function block_ar($context, array $blocks = array())
    {
        $__internal_48fdd18695c76c08252fc1681846a589ec319ab070462e802d2d84be3bf1b595 = $this->env->getExtension("native_profiler");
        $__internal_48fdd18695c76c08252fc1681846a589ec319ab070462e802d2d84be3bf1b595->enter($__internal_48fdd18695c76c08252fc1681846a589ec319ab070462e802d2d84be3bf1b595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ar"));

        // line 5
        echo "
    <form class =\"navbar-form navbar-left\" style=\"margin-left: 900px;\" method =\"get\" action =\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("rechEnseignant");
        echo "\">
        <input type text class =\"form-control\" placeholder = \"Search ....\" name =\"m\">

    </form>

";
        
        $__internal_48fdd18695c76c08252fc1681846a589ec319ab070462e802d2d84be3bf1b595->leave($__internal_48fdd18695c76c08252fc1681846a589ec319ab070462e802d2d84be3bf1b595_prof);

    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e06a7b0cb77c6d3092aeecd7ab9831c405b7f0bf9684bb64aca4e288388d1296 = $this->env->getExtension("native_profiler");
        $__internal_e06a7b0cb77c6d3092aeecd7ab9831c405b7f0bf9684bb64aca4e288388d1296->enter($__internal_e06a7b0cb77c6d3092aeecd7ab9831c405b7f0bf9684bb64aca4e288388d1296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 14
        echo "
<br><br>
    <div class=\"title_left\">
        <h1>Enseignant List</h1>
    </div>

  <!-- <div class =\"navbar navbar-inverse navbar-fixed-top\"  role  = \"navigation\">
            <div class =\"navbar-header\">

            <a class = \"navbar-brand\" href=\"\">
                <img src =\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagee/images1.png"), "html", null, true);
        echo "\" alt =\"logo\" style = \"width: 40px;height: 40px\"/></a>
            </div>
          <div  class = \"collapse navbar-collapse\" href=\"\">
          <ul class =\"nav navbar-nav\">
              <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo "\">Enseignant</a></li>
              <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo "\">Student</a></li>
          </ul>
              <form class =\"navbar-form navbar-right\" method =\"get\" action =\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("rechEnseignant");
        echo "\">
                  <input type text class =\"form-control\" placeholder = \"Search ....\" name =\"m\"
                         >

              </form>
          </div></div>-->

<form>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Genre</th>
                <th>Date Naissance</th>
                <th>Lieu</th>
                <th>image</th>

              
            </tr>
        </thead>
        <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 55
            echo "            <tr>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "lieu", array()), "html", null, true);
            echo "</td>
                <td> <img width=\"100\" height=\"100\"  src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute($context["st"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" /></td>
                <td><a class=\"btn btn-success\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_enseignant", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i>Modifier</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_enseignant", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "<tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
         <div class=\"navigation\">
    ";
        // line 73
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        echo "
                </div>
        <ul>
        <li>
            <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("new_enseignant");
        echo "\">
                Add Enseignant
            </a>
        </li>
    </ul>
  
</form>
    ";
        
        $__internal_e06a7b0cb77c6d3092aeecd7ab9831c405b7f0bf9684bb64aca4e288388d1296->leave($__internal_e06a7b0cb77c6d3092aeecd7ab9831c405b7f0bf9684bb64aca4e288388d1296_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Enseignant:listenseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 77,  178 => 73,  173 => 70,  165 => 67,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  122 => 55,  117 => 54,  91 => 31,  86 => 29,  82 => 28,  75 => 24,  63 => 14,  57 => 13,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* */
/* {% block ar %}*/
/* */
/*     <form class ="navbar-form navbar-left" style="margin-left: 900px;" method ="get" action ="{{ path('rechEnseignant')}}">*/
/*         <input type text class ="form-control" placeholder = "Search ...." name ="m">*/
/* */
/*     </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* */
/* <br><br>*/
/*     <div class="title_left">*/
/*         <h1>Enseignant List</h1>*/
/*     </div>*/
/* */
/*   <!-- <div class ="navbar navbar-inverse navbar-fixed-top"  role  = "navigation">*/
/*             <div class ="navbar-header">*/
/* */
/*             <a class = "navbar-brand" href="">*/
/*                 <img src ="{{ asset ('imagee/images1.png')}}" alt ="logo" style = "width: 40px;height: 40px"/></a>*/
/*             </div>*/
/*           <div  class = "collapse navbar-collapse" href="">*/
/*           <ul class ="nav navbar-nav">*/
/*               <li><a href="{{ path('list_enseignant') }}">Enseignant</a></li>*/
/*               <li><a href="{{ path('student_list') }}">Student</a></li>*/
/*           </ul>*/
/*               <form class ="navbar-form navbar-right" method ="get" action ="{{ path('rechEnseignant')}}">*/
/*                   <input type text class ="form-control" placeholder = "Search ...." name ="m"*/
/*                          >*/
/* */
/*               </form>*/
/*           </div></div>-->*/
/* */
/* <form>*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prénom</th>*/
/*                 <th>Genre</th>*/
/*                 <th>Date Naissance</th>*/
/*                 <th>Lieu</th>*/
/*                 <th>image</th>*/
/* */
/*               */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for st in enss %}*/
/*             <tr>*/
/*                 <td>{{ st.id }}</td>*/
/*                 <td>{{ st.nom }}</td>*/
/*                 <td>{{ st.prenom }}</td>*/
/*                 <td>{{ st.genre }}</td>*/
/*                 <td>{{ st.date|date('d-m-Y') }}</td>*/
/*                 <td>{{ st.lieu }}</td>*/
/*                 <td> <img width="100" height="100"  src="{{ asset('images/'~st.path)}}" alt="" /></td>*/
/*                 <td><a class="btn btn-success" href="{{ path('edit_enseignant', { 'id': st.id }) }}"><i class="glyphicon glyphicon-plus-sign"></i>Modifier</a></td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('remove_enseignant', { 'id': st.id }) }}"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*          <div class="navigation">*/
/*     {{ knp_pagination_render(enss) }}*/
/*                 </div>*/
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('new_enseignant') }}">*/
/*                 Add Enseignant*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*   */
/* </form>*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
