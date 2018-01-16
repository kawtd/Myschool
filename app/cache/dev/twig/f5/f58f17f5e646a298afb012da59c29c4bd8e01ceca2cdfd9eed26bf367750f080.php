<?php

/* MyschoolBundle:Enseignant:listenseignant.html.twig */
class __TwigTemplate_51b727ac8e5ef2d67203fe345e0ae442b79052b2e6432c2ccc17059abc55519e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Enseignant:listenseignant.html.twig", 1);
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
        $__internal_9c63e149388e20e3dd4761498a7b087273961b82e6cfc5250d22083f213d0e74 = $this->env->getExtension("native_profiler");
        $__internal_9c63e149388e20e3dd4761498a7b087273961b82e6cfc5250d22083f213d0e74->enter($__internal_9c63e149388e20e3dd4761498a7b087273961b82e6cfc5250d22083f213d0e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Enseignant:listenseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c63e149388e20e3dd4761498a7b087273961b82e6cfc5250d22083f213d0e74->leave($__internal_9c63e149388e20e3dd4761498a7b087273961b82e6cfc5250d22083f213d0e74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aab91a5d95c9b32d11482289d9b31de9917df190377aa064e44d39aa0f74cf8 = $this->env->getExtension("native_profiler");
        $__internal_0aab91a5d95c9b32d11482289d9b31de9917df190377aa064e44d39aa0f74cf8->enter($__internal_0aab91a5d95c9b32d11482289d9b31de9917df190377aa064e44d39aa0f74cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ecoleEcoleBundle:Enseignant:listEnseignant";
        
        $__internal_0aab91a5d95c9b32d11482289d9b31de9917df190377aa064e44d39aa0f74cf8->leave($__internal_0aab91a5d95c9b32d11482289d9b31de9917df190377aa064e44d39aa0f74cf8_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e976a77b3905ea1571b9c3566fa895aa4aebb04ee505410fc7acb6558a0ff640 = $this->env->getExtension("native_profiler");
        $__internal_e976a77b3905ea1571b9c3566fa895aa4aebb04ee505410fc7acb6558a0ff640->enter($__internal_e976a77b3905ea1571b9c3566fa895aa4aebb04ee505410fc7acb6558a0ff640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e976a77b3905ea1571b9c3566fa895aa4aebb04ee505410fc7acb6558a0ff640->leave($__internal_e976a77b3905ea1571b9c3566fa895aa4aebb04ee505410fc7acb6558a0ff640_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a01a0d5de5fa395a9741e347f2826b4cfc55e836ed081b1c9626f842ce93cb = $this->env->getExtension("native_profiler");
        $__internal_17a01a0d5de5fa395a9741e347f2826b4cfc55e836ed081b1c9626f842ce93cb->enter($__internal_17a01a0d5de5fa395a9741e347f2826b4cfc55e836ed081b1c9626f842ce93cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<br><br>
<h1>Enseignant List</h1>
   <div class =\"navbar navbar-inverse navbar-fixed-top\"  role  = \"navigation\">
            <div class =\"navbar-header\">
             
            <a class = \"navbar-brand\" href=\"\">
                <img src =\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("imagee/images1.png"), "html", null, true);
        echo "\" alt =\"logo\" style = \"width: 40px;height: 40px\"/></a>
            </div>
          <div  class = \"collapse navbar-collapse\" href=\"\">
          <ul class =\"nav navbar-nav\">
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo "\">Enseignant</a></li>
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo "\">Student</a></li>
          </ul>
              <form class =\"navbar-form navbar-right\" method =\"get\" action =\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("rechEnseignant");
        echo "\">
                  <input type text class =\"form-control\" placeholder = \"Search ....\" name =\"m\" 
                         > 
               
              </form>
          </div></div>
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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 47
            echo "            <tr>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "lieu", array()), "html", null, true);
            echo "</td>
                <td> <img width=\"100\" height=\"100\"  src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute($context["st"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" /></td>
                <td><a class=\"btn btn-success\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_enseignant", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i>Modifier</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_enseignant", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "<tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>
         <div class=\"navigation\">
    ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        echo "
                </div>
        <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("new_enseignant");
        echo "\">
                Add Enseignant
            </a>
        </li>
    </ul>
  
</form>
    ";
        
        $__internal_17a01a0d5de5fa395a9741e347f2826b4cfc55e836ed081b1c9626f842ce93cb->leave($__internal_17a01a0d5de5fa395a9741e347f2826b4cfc55e836ed081b1c9626f842ce93cb_prof);

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
        return array (  196 => 69,  189 => 65,  184 => 62,  176 => 59,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  133 => 47,  128 => 46,  103 => 24,  98 => 22,  94 => 21,  87 => 17,  78 => 10,  72 => 9,  63 => 7,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
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
/* */
/* <br><br>*/
/* <h1>Enseignant List</h1>*/
/*    <div class ="navbar navbar-inverse navbar-fixed-top"  role  = "navigation">*/
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
/*               <form class ="navbar-form navbar-right" method ="get" action ="{{ path('rechEnseignant')}}">*/
/*                   <input type text class ="form-control" placeholder = "Search ...." name ="m" */
/*                          > */
/*                */
/*               </form>*/
/*           </div></div>*/
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
