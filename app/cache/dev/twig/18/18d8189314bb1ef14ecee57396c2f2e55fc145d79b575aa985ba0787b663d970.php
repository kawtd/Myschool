<?php

/* matiere/index.html.twig */
class __TwigTemplate_6e39304859b737a82c178692267588d48dd356155e637ea579fd74070298beba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/index.html.twig", 1);
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
        $__internal_0f5974002422c0703a6b05348f19d0cba29e5f6c32edc4b40e7a7b513ed3b164 = $this->env->getExtension("native_profiler");
        $__internal_0f5974002422c0703a6b05348f19d0cba29e5f6c32edc4b40e7a7b513ed3b164->enter($__internal_0f5974002422c0703a6b05348f19d0cba29e5f6c32edc4b40e7a7b513ed3b164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f5974002422c0703a6b05348f19d0cba29e5f6c32edc4b40e7a7b513ed3b164->leave($__internal_0f5974002422c0703a6b05348f19d0cba29e5f6c32edc4b40e7a7b513ed3b164_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b60c44cf1b5328b540db3909f96cbbac393802a939ecc946af5c504098b5e712 = $this->env->getExtension("native_profiler");
        $__internal_b60c44cf1b5328b540db3909f96cbbac393802a939ecc946af5c504098b5e712->enter($__internal_b60c44cf1b5328b540db3909f96cbbac393802a939ecc946af5c504098b5e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b60c44cf1b5328b540db3909f96cbbac393802a939ecc946af5c504098b5e712->leave($__internal_b60c44cf1b5328b540db3909f96cbbac393802a939ecc946af5c504098b5e712_prof);

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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
