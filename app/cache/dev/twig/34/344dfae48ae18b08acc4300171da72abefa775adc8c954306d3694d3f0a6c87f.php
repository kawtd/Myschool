<?php

/* MyschoolBundle:Student:list_student.html.twig */
class __TwigTemplate_36a761b11b820c61869e4e006fbb933d242cc2e1321de10ec0b1f683c5e4ccff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Student:list_student.html.twig", 1);
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
        $__internal_84773dd6b6d245db6424d9651bee922448f8944a1d223c95ea79d3acfcc4d624 = $this->env->getExtension("native_profiler");
        $__internal_84773dd6b6d245db6424d9651bee922448f8944a1d223c95ea79d3acfcc4d624->enter($__internal_84773dd6b6d245db6424d9651bee922448f8944a1d223c95ea79d3acfcc4d624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84773dd6b6d245db6424d9651bee922448f8944a1d223c95ea79d3acfcc4d624->leave($__internal_84773dd6b6d245db6424d9651bee922448f8944a1d223c95ea79d3acfcc4d624_prof);

    }

    // line 4
    public function block_ar($context, array $blocks = array())
    {
        $__internal_b961e3978f916316d1877359f24651f0f4c5f3508f3cef31ced880003bbc48a1 = $this->env->getExtension("native_profiler");
        $__internal_b961e3978f916316d1877359f24651f0f4c5f3508f3cef31ced880003bbc48a1->enter($__internal_b961e3978f916316d1877359f24651f0f4c5f3508f3cef31ced880003bbc48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ar"));

        // line 5
        echo "
    <form class =\"navbar-form navbar-left\" style=\"margin-left: 900px;\" method =\"get\" action =\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("rechEnseignant");
        echo "\">
        <input type text class =\"form-control\" placeholder = \"Search ....\" name =\"m\">

    </form>

";
        
        $__internal_b961e3978f916316d1877359f24651f0f4c5f3508f3cef31ced880003bbc48a1->leave($__internal_b961e3978f916316d1877359f24651f0f4c5f3508f3cef31ced880003bbc48a1_prof);

    }

    // line 13
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ef2e974e0ae512e65b8eee58fa8691e97f8bde91ac0b3c6ecde6ff89daa3d68 = $this->env->getExtension("native_profiler");
        $__internal_6ef2e974e0ae512e65b8eee58fa8691e97f8bde91ac0b3c6ecde6ff89daa3d68->enter($__internal_6ef2e974e0ae512e65b8eee58fa8691e97f8bde91ac0b3c6ecde6ff89daa3d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 14
        echo "    <br><br>
    <h1>Student List</h1>
    

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Genre</th>
                <th>Date Naissance</th>
                <th>Lieu</th>
                <th>Image</th>
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studs"]) ? $context["studs"] : $this->getContext($context, "studs")));
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "lieu", array()), "html", null, true);
            echo "</td>
                <td > <img  width=\"100\" height=\"100\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute($context["st"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" /></td>
                <td><a class=\"btn btn-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_Student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Modifier</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_Student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
              
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
                <div class=\"navigation\">
    ";
        // line 49
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["studs"]) ? $context["studs"] : $this->getContext($context, "studs")));
        echo "
                </div>
        <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">
                Add Student
            </a>
        </li>
    </ul>
    ";
        
        $__internal_6ef2e974e0ae512e65b8eee58fa8691e97f8bde91ac0b3c6ecde6ff89daa3d68->leave($__internal_6ef2e974e0ae512e65b8eee58fa8691e97f8bde91ac0b3c6ecde6ff89daa3d68_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:list_student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 53,  137 => 49,  132 => 46,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  87 => 33,  83 => 32,  63 => 14,  57 => 13,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
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
/*     <br><br>*/
/*     <h1>Student List</h1>*/
/*     */
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prénom</th>*/
/*                 <th>Genre</th>*/
/*                 <th>Date Naissance</th>*/
/*                 <th>Lieu</th>*/
/*                 <th>Image</th>*/
/*               */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for st in studs %}*/
/*             <tr>*/
/*                 <td>{{ st.id }}</td>*/
/*                 <td>{{ st.nom }}</td>*/
/*                 <td>{{ st.prenom }}</td>*/
/*                 <td>{{ st.genre }}</td>*/
/*                 <td>{{ st.date|date('d-m-Y') }}</td>*/
/*                 <td>{{ st.lieu }}</td>*/
/*                 <td > <img  width="100" height="100" src="{{ asset('images/'~st.path)}}" alt="" /></td>*/
/*                 <td><a class="btn btn-success" href="{{ path('edit_Student', { 'id': st.id }) }}"><i class="glyphicon glyphicon-plus-sign"></i> Modifier</a></td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('remove_Student', { 'id': st.id }) }}"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></td>*/
/*               */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*                 <div class="navigation">*/
/*     {{ knp_pagination_render(studs) }}*/
/*                 </div>*/
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('student_new') }}">*/
/*                 Add Student*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
/* */
/* */
