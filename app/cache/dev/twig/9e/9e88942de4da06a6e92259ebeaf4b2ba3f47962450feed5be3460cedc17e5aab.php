<?php

/* matiere/show.html.twig */
class __TwigTemplate_716b15d180f9d08dfc12db4eb6f0a9d731902afce5155b8a0d0ad8b77cb0714d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/show.html.twig", 1);
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
        $__internal_81913c25f8c68f560350ddf8c5248e46b3c253fca5dc980a272590e1de02d235 = $this->env->getExtension("native_profiler");
        $__internal_81913c25f8c68f560350ddf8c5248e46b3c253fca5dc980a272590e1de02d235->enter($__internal_81913c25f8c68f560350ddf8c5248e46b3c253fca5dc980a272590e1de02d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81913c25f8c68f560350ddf8c5248e46b3c253fca5dc980a272590e1de02d235->leave($__internal_81913c25f8c68f560350ddf8c5248e46b3c253fca5dc980a272590e1de02d235_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ce448e02b4e2bad55f4f17cb5373f719dcda5079c3d8c59dfe87466ff4fd67f = $this->env->getExtension("native_profiler");
        $__internal_4ce448e02b4e2bad55f4f17cb5373f719dcda5079c3d8c59dfe87466ff4fd67f->enter($__internal_4ce448e02b4e2bad55f4f17cb5373f719dcda5079c3d8c59dfe87466ff4fd67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matiere</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "libelle", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("matiere_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4ce448e02b4e2bad55f4f17cb5373f719dcda5079c3d8c59dfe87466ff4fd67f->leave($__internal_4ce448e02b4e2bad55f4f17cb5373f719dcda5079c3d8c59dfe87466ff4fd67f_prof);

    }

    public function getTemplateName()
    {
        return "matiere/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Matiere</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ matiere.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Libelle</th>*/
/*                 <td>{{ matiere.libelle }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matiere_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('matiere_edit', { 'id': matiere.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
