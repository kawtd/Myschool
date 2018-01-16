<?php

/* note/index.html.twig */
class __TwigTemplate_e745b08440e9d388194292731c76d148b60a8b31217c0f924739e3c0fa29ef42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "note/index.html.twig", 1);
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
        $__internal_ab6f34d827f90e8f479f77a509553cbdbeb7a8b8a46c558df07c7bf820baedf8 = $this->env->getExtension("native_profiler");
        $__internal_ab6f34d827f90e8f479f77a509553cbdbeb7a8b8a46c558df07c7bf820baedf8->enter($__internal_ab6f34d827f90e8f479f77a509553cbdbeb7a8b8a46c558df07c7bf820baedf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6f34d827f90e8f479f77a509553cbdbeb7a8b8a46c558df07c7bf820baedf8->leave($__internal_ab6f34d827f90e8f479f77a509553cbdbeb7a8b8a46c558df07c7bf820baedf8_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e41bec55254c05c1a9aa70f4f03601507b70931688bf8df85b149f58270ed2ef = $this->env->getExtension("native_profiler");
        $__internal_e41bec55254c05c1a9aa70f4f03601507b70931688bf8df85b149f58270ed2ef->enter($__internal_e41bec55254c05c1a9aa70f4f03601507b70931688bf8df85b149f58270ed2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>note list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Semestre</th>
                <th>Noteds</th>
                <th>Noteexam</th>
                <th>Pourcentageds</th>
                <th>Pourcentageexam</th>
                <th>Moyenne</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : $this->getContext($context, "notes")));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_show", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "semestre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "noteDs", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "noteExam", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "pourcentageDs", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "pourcentageExam", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "moyenne", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_show", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-eye-open\"></i>detail</a>
                        
                    <a class=\"btn btn-success\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_edit", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i>modifier</a> 
                    
                    <a class=\"btn btn-danger\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_delete", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i>supprimer</a> 
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("note_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e41bec55254c05c1a9aa70f4f03601507b70931688bf8df85b149f58270ed2ef->leave($__internal_e41bec55254c05c1a9aa70f4f03601507b70931688bf8df85b149f58270ed2ef_prof);

    }

    public function getTemplateName()
    {
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 43,  116 => 38,  106 => 34,  101 => 32,  96 => 30,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>note list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Semestre</th>*/
/*                 <th>Noteds</th>*/
/*                 <th>Noteexam</th>*/
/*                 <th>Pourcentageds</th>*/
/*                 <th>Pourcentageexam</th>*/
/*                 <th>Moyenne</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for note in notes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('note_show', { 'id': note.id }) }}">{{ note.id }}</a></td>*/
/*                 <td>{{ note.semestre }}</td>*/
/*                 <td>{{ note.noteDs }}</td>*/
/*                 <td>{{ note.noteExam }}</td>*/
/*                 <td>{{ note.pourcentageDs }}</td>*/
/*                 <td>{{ note.pourcentageExam }}</td>*/
/*                 <td>{{ note.moyenne }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-primary" href="{{ path('note_show', { 'id': note.id }) }}"><i class="glyphicon glyphicon-eye-open"></i>detail</a>*/
/*                         */
/*                     <a class="btn btn-success" href="{{ path('note_edit', { 'id': note.id }) }}"><i class="glyphicon glyphicon-edit"></i>modifier</a> */
/*                     */
/*                     <a class="btn btn-danger" href="{{ path('note_delete', { 'id': note.id }) }}"><i class="glyphicon glyphicon-trash"></i>supprimer</a> */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('note_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
