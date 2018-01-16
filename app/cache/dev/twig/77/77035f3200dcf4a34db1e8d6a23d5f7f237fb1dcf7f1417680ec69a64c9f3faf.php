<?php

/* note/index.html.twig */
class __TwigTemplate_68ddd20af6d726bba2bbed48348216ba3a144ca05c1a24cf8ec166035fe66dfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79b79139fca45bde120f436eadda4858578748b6b24eda1e569581d2c8dc033e = $this->env->getExtension("native_profiler");
        $__internal_79b79139fca45bde120f436eadda4858578748b6b24eda1e569581d2c8dc033e->enter($__internal_79b79139fca45bde120f436eadda4858578748b6b24eda1e569581d2c8dc033e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79b79139fca45bde120f436eadda4858578748b6b24eda1e569581d2c8dc033e->leave($__internal_79b79139fca45bde120f436eadda4858578748b6b24eda1e569581d2c8dc033e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f96d26cdf4dcbcfe1c84070930a3dace3b7347506fae88ae460ce36382ca0932 = $this->env->getExtension("native_profiler");
        $__internal_f96d26cdf4dcbcfe1c84070930a3dace3b7347506fae88ae460ce36382ca0932->enter($__internal_f96d26cdf4dcbcfe1c84070930a3dace3b7347506fae88ae460ce36382ca0932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f96d26cdf4dcbcfe1c84070930a3dace3b7347506fae88ae460ce36382ca0932->leave($__internal_f96d26cdf4dcbcfe1c84070930a3dace3b7347506fae88ae460ce36382ca0932_prof);

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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
