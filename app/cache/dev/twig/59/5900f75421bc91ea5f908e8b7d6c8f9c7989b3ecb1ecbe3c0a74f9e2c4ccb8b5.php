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
        $__internal_d7776dd43db07c95c4c8d44e636cbf0d810599cfee2159c8dfbb98c9bb6d2df4 = $this->env->getExtension("native_profiler");
        $__internal_d7776dd43db07c95c4c8d44e636cbf0d810599cfee2159c8dfbb98c9bb6d2df4->enter($__internal_d7776dd43db07c95c4c8d44e636cbf0d810599cfee2159c8dfbb98c9bb6d2df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_classe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7776dd43db07c95c4c8d44e636cbf0d810599cfee2159c8dfbb98c9bb6d2df4->leave($__internal_d7776dd43db07c95c4c8d44e636cbf0d810599cfee2159c8dfbb98c9bb6d2df4_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fecb3c51d4ff161a8a21fe60097f82b46acfa99656aa0ea1c8f6a5f7ca27f43 = $this->env->getExtension("native_profiler");
        $__internal_7fecb3c51d4ff161a8a21fe60097f82b46acfa99656aa0ea1c8f6a5f7ca27f43->enter($__internal_7fecb3c51d4ff161a8a21fe60097f82b46acfa99656aa0ea1c8f6a5f7ca27f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>List Classe</h1>

    <table class=\"records_list\">
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
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\">
                Ajout Classe
            </a>
        </li>
    </ul>
    ";
        
        $__internal_7fecb3c51d4ff161a8a21fe60097f82b46acfa99656aa0ea1c8f6a5f7ca27f43->leave($__internal_7fecb3c51d4ff161a8a21fe60097f82b46acfa99656aa0ea1c8f6a5f7ca27f43_prof);

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
        return array (  84 => 27,  77 => 22,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>List Classe</h1>*/
/* */
/*     <table class="records_list">*/
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
