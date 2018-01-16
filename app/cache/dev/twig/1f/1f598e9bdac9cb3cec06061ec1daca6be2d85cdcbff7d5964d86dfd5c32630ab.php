<?php

/* MyschoolBundle:Student:list_student.html.twig */
class __TwigTemplate_423396b1b22922f3991676dd0cf0235eb24ffb8cd5f9c6ec5fe7f5f1ba2f0b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Student:list_student.html.twig", 1);
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
        $__internal_390a66525be92407b30393f68a36e07888d54f294b3716e5c2b1951dc52a97bd = $this->env->getExtension("native_profiler");
        $__internal_390a66525be92407b30393f68a36e07888d54f294b3716e5c2b1951dc52a97bd->enter($__internal_390a66525be92407b30393f68a36e07888d54f294b3716e5c2b1951dc52a97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_student.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_390a66525be92407b30393f68a36e07888d54f294b3716e5c2b1951dc52a97bd->leave($__internal_390a66525be92407b30393f68a36e07888d54f294b3716e5c2b1951dc52a97bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7707650f34ad0c95961fe957fbaf9eb1720e276384de2804c6677fbfc6cb80aa = $this->env->getExtension("native_profiler");
        $__internal_7707650f34ad0c95961fe957fbaf9eb1720e276384de2804c6677fbfc6cb80aa->enter($__internal_7707650f34ad0c95961fe957fbaf9eb1720e276384de2804c6677fbfc6cb80aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ecoleEcoleBundle:Enseignant:listEnseignant";
        
        $__internal_7707650f34ad0c95961fe957fbaf9eb1720e276384de2804c6677fbfc6cb80aa->leave($__internal_7707650f34ad0c95961fe957fbaf9eb1720e276384de2804c6677fbfc6cb80aa_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9e65ddc930f76132d5fc17e19da5143efb3e52e72f20537415f004d252b4939 = $this->env->getExtension("native_profiler");
        $__internal_b9e65ddc930f76132d5fc17e19da5143efb3e52e72f20537415f004d252b4939->enter($__internal_b9e65ddc930f76132d5fc17e19da5143efb3e52e72f20537415f004d252b4939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "                    <link rel=\"stylesheet\" href=\"";
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
        
        $__internal_b9e65ddc930f76132d5fc17e19da5143efb3e52e72f20537415f004d252b4939->leave($__internal_b9e65ddc930f76132d5fc17e19da5143efb3e52e72f20537415f004d252b4939_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_44b9e74d7fa9aa8a450ff4cab07e35addc8fdfb9468d60c890cd1becc3ea9342 = $this->env->getExtension("native_profiler");
        $__internal_44b9e74d7fa9aa8a450ff4cab07e35addc8fdfb9468d60c890cd1becc3ea9342->enter($__internal_44b9e74d7fa9aa8a450ff4cab07e35addc8fdfb9468d60c890cd1becc3ea9342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <br><br>
    <h1>Student List</h1>
    
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
        echo $this->env->getExtension('routing')->getPath("rechStudent");
        echo "\">
                  <input type text class =\"form-control\" placeholder = \"Search ....\" name =\"m\" 
                         > 
               
              </form>
          </div>
            </div>
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
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["studs"]) ? $context["studs"] : $this->getContext($context, "studs")));
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 46
            echo "            <tr>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "genre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "lieu", array()), "html", null, true);
            echo "</td>
                <td > <img  width=\"100\" height=\"100\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute($context["st"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" /></td>
                <td><a class=\"btn btn-success\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_Student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Modifier</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_Student", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
              
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
                <div class=\"navigation\">
    ";
        // line 62
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["studs"]) ? $context["studs"] : $this->getContext($context, "studs")));
        echo "
                </div>
        <ul>
        <li>
            <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">
                Add Student
            </a>
        </li>
    </ul>
    ";
        
        $__internal_44b9e74d7fa9aa8a450ff4cab07e35addc8fdfb9468d60c890cd1becc3ea9342->leave($__internal_44b9e74d7fa9aa8a450ff4cab07e35addc8fdfb9468d60c890cd1becc3ea9342_prof);

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
        return array (  188 => 66,  181 => 62,  176 => 59,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  131 => 46,  127 => 45,  103 => 24,  98 => 22,  94 => 21,  87 => 17,  78 => 10,  72 => 9,  63 => 7,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ecoleEcoleBundle:Enseignant:listEnseignant{% endblock %}*/
/* {% block stylesheets %}*/
/*                     <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                             <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% block body %}*/
/*     <br><br>*/
/*     <h1>Student List</h1>*/
/*     */
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
/*               <form class ="navbar-form navbar-right" method ="get" action ="{{ path('rechStudent')}}">*/
/*                   <input type text class ="form-control" placeholder = "Search ...." name ="m" */
/*                          > */
/*                */
/*               </form>*/
/*           </div>*/
/*             </div>*/
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
