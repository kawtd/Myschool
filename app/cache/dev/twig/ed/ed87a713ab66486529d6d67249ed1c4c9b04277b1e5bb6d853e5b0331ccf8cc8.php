<?php

/* matiere/index.html.twig */
class __TwigTemplate_aedea510935af78caa4a8973b562685139ca60e6edd2a05a1eaf6831d70c0b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "matiere/index.html.twig", 1);
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
        $__internal_7fd66fd9013abed88f74ff200b21f3f2a4cfe87a6bb5d751f86abf317b349f7a = $this->env->getExtension("native_profiler");
        $__internal_7fd66fd9013abed88f74ff200b21f3f2a4cfe87a6bb5d751f86abf317b349f7a->enter($__internal_7fd66fd9013abed88f74ff200b21f3f2a4cfe87a6bb5d751f86abf317b349f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd66fd9013abed88f74ff200b21f3f2a4cfe87a6bb5d751f86abf317b349f7a->leave($__internal_7fd66fd9013abed88f74ff200b21f3f2a4cfe87a6bb5d751f86abf317b349f7a_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ed92179ab66498e0f11d897426dfa40834d5c8e76825f7f7daf5a617f6acb83 = $this->env->getExtension("native_profiler");
        $__internal_9ed92179ab66498e0f11d897426dfa40834d5c8e76825f7f7daf5a617f6acb83->enter($__internal_9ed92179ab66498e0f11d897426dfa40834d5c8e76825f7f7daf5a617f6acb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>Matiere list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "libelle", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>



                            <a class=\"btn btn-success\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-edit\"></i> modifier</a>

                            <a class=\"btn btn-danger\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_delete", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> supprimer</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9ed92179ab66498e0f11d897426dfa40834d5c8e76825f7f7daf5a617f6acb83->leave($__internal_9ed92179ab66498e0f11d897426dfa40834d5c8e76825f7f7daf5a617f6acb83_prof);

    }

    public function getTemplateName()
    {
        return "matiere/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  80 => 26,  75 => 24,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>Matiere list</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Libelle</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for matiere in matieres %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('matiere_show', { 'id': matiere.id }) }}">{{ matiere.id }}</a></td>*/
/*                 <td>{{ matiere.libelle }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/* */
/* */
/* */
/*                             <a class="btn btn-success" href="{{ path('matiere_edit', { 'id': matiere.id }) }}"><i class="glyphicon glyphicon-edit"></i> modifier</a>*/
/* */
/*                             <a class="btn btn-danger" href="{{ path('matiere_delete', { 'id': matiere.id }) }}"><i class="glyphicon glyphicon-trash"></i> supprimer</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matiere_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
