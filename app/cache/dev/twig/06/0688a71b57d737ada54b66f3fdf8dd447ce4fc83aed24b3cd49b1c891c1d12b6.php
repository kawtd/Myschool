<?php

/* note/show.html.twig */
class __TwigTemplate_d78b791da9cb70d95444472a97d5b3d5d279596a213016d2e8058c13b06d57d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:ens.html.twig", "note/show.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyschoolBundle:Default:ens.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17970b9c42ca1d8f2727da82231c7a2d75796fc49b43ada2ce2077895750192b = $this->env->getExtension("native_profiler");
        $__internal_17970b9c42ca1d8f2727da82231c7a2d75796fc49b43ada2ce2077895750192b->enter($__internal_17970b9c42ca1d8f2727da82231c7a2d75796fc49b43ada2ce2077895750192b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17970b9c42ca1d8f2727da82231c7a2d75796fc49b43ada2ce2077895750192b->leave($__internal_17970b9c42ca1d8f2727da82231c7a2d75796fc49b43ada2ce2077895750192b_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89083cec05d34a74c00be5f27c225c043d200171e185723615c9fc67fbfe1e8b = $this->env->getExtension("native_profiler");
        $__internal_89083cec05d34a74c00be5f27c225c043d200171e185723615c9fc67fbfe1e8b->enter($__internal_89083cec05d34a74c00be5f27c225c043d200171e185723615c9fc67fbfe1e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>note</h1>

    <table class=\"table\">
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
            <tr>
                <th>action</th>
                <td><a  class=\"btn btn-success\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_edit", array("id" => $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i>modifier</a>";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"btn btn-danger\" type=\"submit\" value=\"supprimer\">
                    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo " </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("note_index");
        echo "\">Back to the list</a>
        </li>


    </ul>
";
        
        $__internal_89083cec05d34a74c00be5f27c225c043d200171e185723615c9fc67fbfe1e8b->leave($__internal_89083cec05d34a74c00be5f27c225c043d200171e185723615c9fc67fbfe1e8b_prof);

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
        return array (  114 => 47,  104 => 40,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:ens.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>note</h1>*/
/* */
/*     <table class="table">*/
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
/*             <tr>*/
/*                 <th>action</th>*/
/*                 <td><a  class="btn btn-success" href="{{ path('note_edit', { 'id': note.id }) }}"><i class="glyphicon glyphicon-edit"></i>modifier</a>{{ form_start(delete_form) }}*/
/*                     <input class="btn btn-danger" type="submit" value="supprimer">*/
/*                     {{ form_end(delete_form) }} </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('note_index') }}">Back to the list</a>*/
/*         </li>*/
/* */
/* */
/*     </ul>*/
/* {% endblock %}*/
/* */
