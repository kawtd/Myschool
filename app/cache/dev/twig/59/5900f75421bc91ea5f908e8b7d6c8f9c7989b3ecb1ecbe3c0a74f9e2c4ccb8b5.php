<?php

/* MyschoolBundle:Student:list_classe.html.twig */
class __TwigTemplate_2d21a96b56b7a2836ced593a5331996f66e1ea979820c8afcb20b8877f395b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Student:list_classe.html.twig", 1);
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
        $__internal_a38676cebcae7876f0af9a3356660fc35d32fa78d192cd9067b87a889465f159 = $this->env->getExtension("native_profiler");
        $__internal_a38676cebcae7876f0af9a3356660fc35d32fa78d192cd9067b87a889465f159->enter($__internal_a38676cebcae7876f0af9a3356660fc35d32fa78d192cd9067b87a889465f159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_classe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38676cebcae7876f0af9a3356660fc35d32fa78d192cd9067b87a889465f159->leave($__internal_a38676cebcae7876f0af9a3356660fc35d32fa78d192cd9067b87a889465f159_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75fc1de91add7f33b73637b624a036650d5c7b5c431bf114504676f4825a9246 = $this->env->getExtension("native_profiler");
        $__internal_75fc1de91add7f33b73637b624a036650d5c7b5c431bf114504676f4825a9246->enter($__internal_75fc1de91add7f33b73637b624a036650d5c7b5c431bf114504676f4825a9246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>List Classe</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "libelle", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn btn-success\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_Class", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus-sign\"></i> Modifier</a></td>
                <td><a class=\"btn btn-danger\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_Classe", array("id" => $this->getAttribute($context["cl"], "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\">
                Ajout Classe
            </a>
        </li>
    </ul>
    ";
        
        $__internal_75fc1de91add7f33b73637b624a036650d5c7b5c431bf114504676f4825a9246->leave($__internal_75fc1de91add7f33b73637b624a036650d5c7b5c431bf114504676f4825a9246_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:list_classe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  81 => 23,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>List Classe</h1>*/
/* */
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Libelle</th>*/
/*                 <th>action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cl in enss %}*/
/*             <tr>*/
/*                 <td>{{ cl.id }}</td>*/
/*                 <td>{{ cl.libelle }}</td>*/
/*                 <td><a class="btn btn-success" href="{{ path('edit_Class', { 'id': cl.id }) }}"><i class="glyphicon glyphicon-plus-sign"></i> Modifier</a></td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('remove_Classe', { 'id': cl.id }) }}"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('classe_new') }}">*/
/*                 Ajout Classe*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
