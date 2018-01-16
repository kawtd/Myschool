<?php

/* note/show.html.twig */
class __TwigTemplate_d78b791da9cb70d95444472a97d5b3d5d279596a213016d2e8058c13b06d57d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "note/show.html.twig", 1);
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
        $__internal_b5ff15fd949b106f8129045e8c120116f16c64198d494f9f2fde8c4a8735c60c = $this->env->getExtension("native_profiler");
        $__internal_b5ff15fd949b106f8129045e8c120116f16c64198d494f9f2fde8c4a8735c60c->enter($__internal_b5ff15fd949b106f8129045e8c120116f16c64198d494f9f2fde8c4a8735c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ff15fd949b106f8129045e8c120116f16c64198d494f9f2fde8c4a8735c60c->leave($__internal_b5ff15fd949b106f8129045e8c120116f16c64198d494f9f2fde8c4a8735c60c_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e83eef5d7b5bfccdec07f3083e1e67eceb415c968fb09aa3e47a9c7ac085c0a = $this->env->getExtension("native_profiler");
        $__internal_9e83eef5d7b5bfccdec07f3083e1e67eceb415c968fb09aa3e47a9c7ac085c0a->enter($__internal_9e83eef5d7b5bfccdec07f3083e1e67eceb415c968fb09aa3e47a9c7ac085c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9e83eef5d7b5bfccdec07f3083e1e67eceb415c968fb09aa3e47a9c7ac085c0a->leave($__internal_9e83eef5d7b5bfccdec07f3083e1e67eceb415c968fb09aa3e47a9c7ac085c0a_prof);

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
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
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
