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
        $__internal_57d29be9caf28f21bfa4bf926562a03930413e71b322ee53466b960dbd92263f = $this->env->getExtension("native_profiler");
        $__internal_57d29be9caf28f21bfa4bf926562a03930413e71b322ee53466b960dbd92263f->enter($__internal_57d29be9caf28f21bfa4bf926562a03930413e71b322ee53466b960dbd92263f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:list_classe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57d29be9caf28f21bfa4bf926562a03930413e71b322ee53466b960dbd92263f->leave($__internal_57d29be9caf28f21bfa4bf926562a03930413e71b322ee53466b960dbd92263f_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15898f88d204142dcaf37ff37052a048fe19ee497fea59ef9d62e01a0bb4ffc0 = $this->env->getExtension("native_profiler");
        $__internal_15898f88d204142dcaf37ff37052a048fe19ee497fea59ef9d62e01a0bb4ffc0->enter($__internal_15898f88d204142dcaf37ff37052a048fe19ee497fea59ef9d62e01a0bb4ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>List Classe</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "libelle", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\">
                Ajout Classe
            </a>
        </li>
    </ul>
    ";
        
        $__internal_15898f88d204142dcaf37ff37052a048fe19ee497fea59ef9d62e01a0bb4ffc0->leave($__internal_15898f88d204142dcaf37ff37052a048fe19ee497fea59ef9d62e01a0bb4ffc0_prof);

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
        return array (  79 => 25,  72 => 20,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cl in enss %}*/
/*             <tr>*/
/*                 <td>{{ cl.id }}</td>*/
/*                 <td>{{ cl.libelle }}</td>*/
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
