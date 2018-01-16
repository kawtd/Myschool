<?php

/* note/show.html.twig */
class __TwigTemplate_b9208a98a2677ed8ed6ac524b6d386c8c35efdf30b272e279e4e0e57a8df3f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "note/show.html.twig", 1);
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
        $__internal_699b20398a1fe4fc4203d904040898cfaeff44167a49b70c8ecce968f90c0030 = $this->env->getExtension("native_profiler");
        $__internal_699b20398a1fe4fc4203d904040898cfaeff44167a49b70c8ecce968f90c0030->enter($__internal_699b20398a1fe4fc4203d904040898cfaeff44167a49b70c8ecce968f90c0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699b20398a1fe4fc4203d904040898cfaeff44167a49b70c8ecce968f90c0030->leave($__internal_699b20398a1fe4fc4203d904040898cfaeff44167a49b70c8ecce968f90c0030_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e9b158790f17f49ade39f914dbfe40e34b83124ca24191650e0ce2263f1cfa3 = $this->env->getExtension("native_profiler");
        $__internal_3e9b158790f17f49ade39f914dbfe40e34b83124ca24191650e0ce2263f1cfa3->enter($__internal_3e9b158790f17f49ade39f914dbfe40e34b83124ca24191650e0ce2263f1cfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>note</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Semestre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "semestre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Noteds</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "noteDs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Noteexam</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "noteExam", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pourcentageds</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "pourcentageDs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pourcentageexam</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "pourcentageExam", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Moyenne</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "moyenne", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("note_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_edit", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3e9b158790f17f49ade39f914dbfe40e34b83124ca24191650e0ce2263f1cfa3->leave($__internal_3e9b158790f17f49ade39f914dbfe40e34b83124ca24191650e0ce2263f1cfa3_prof);

    }

    public function getTemplateName()
    {
        return "note/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 47,  106 => 44,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>note</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ note.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Semestre</th>*/
/*                 <td>{{ note.semestre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Noteds</th>*/
/*                 <td>{{ note.noteDs }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Noteexam</th>*/
/*                 <td>{{ note.noteExam }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pourcentageds</th>*/
/*                 <td>{{ note.pourcentageDs }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pourcentageexam</th>*/
/*                 <td>{{ note.pourcentageExam }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Moyenne</th>*/
/*                 <td>{{ note.moyenne }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('note_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('note_edit', { 'id': note.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
