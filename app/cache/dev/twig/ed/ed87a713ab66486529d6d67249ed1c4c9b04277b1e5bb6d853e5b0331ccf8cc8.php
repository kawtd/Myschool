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
        $__internal_8dc721aaaa13b07a9859f09842490000ccb48a6307151aafa6607f3d746043c1 = $this->env->getExtension("native_profiler");
        $__internal_8dc721aaaa13b07a9859f09842490000ccb48a6307151aafa6607f3d746043c1->enter($__internal_8dc721aaaa13b07a9859f09842490000ccb48a6307151aafa6607f3d746043c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc721aaaa13b07a9859f09842490000ccb48a6307151aafa6607f3d746043c1->leave($__internal_8dc721aaaa13b07a9859f09842490000ccb48a6307151aafa6607f3d746043c1_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c6d869939d7977dc0dd100b23f1baa4c8530c1a41f3113aa953b0426951c455 = $this->env->getExtension("native_profiler");
        $__internal_5c6d869939d7977dc0dd100b23f1baa4c8530c1a41f3113aa953b0426951c455->enter($__internal_5c6d869939d7977dc0dd100b23f1baa4c8530c1a41f3113aa953b0426951c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>Matiere list</h1>

    <table>
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
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute($context["matiere"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
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
        
        $__internal_5c6d869939d7977dc0dd100b23f1baa4c8530c1a41f3113aa953b0426951c455->leave($__internal_5c6d869939d7977dc0dd100b23f1baa4c8530c1a41f3113aa953b0426951c455_prof);

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
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>Matiere list</h1>*/
/* */
/*     <table>*/
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
/*                         <li>*/
/*                             <a href="{{ path('matiere_show', { 'id': matiere.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('matiere_edit', { 'id': matiere.id }) }}">edit</a>*/
/*                         </li>*/
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
