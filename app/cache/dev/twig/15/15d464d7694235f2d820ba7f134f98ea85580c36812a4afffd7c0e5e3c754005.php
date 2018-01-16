<?php

/* MyschoolBundle:Specialite:list_specialite.html.twig */
class __TwigTemplate_74edd2a10e41d47a0e23a236177af9445bb4ae4420fef8e01f7d257b4079d924 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Specialite:list_specialite.html.twig", 1);
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
        $__internal_1925c70ae26c5868f41d2d125ac94542d44d1fc8174dc1862886f549a575acdc = $this->env->getExtension("native_profiler");
        $__internal_1925c70ae26c5868f41d2d125ac94542d44d1fc8174dc1862886f549a575acdc->enter($__internal_1925c70ae26c5868f41d2d125ac94542d44d1fc8174dc1862886f549a575acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Specialite:list_specialite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1925c70ae26c5868f41d2d125ac94542d44d1fc8174dc1862886f549a575acdc->leave($__internal_1925c70ae26c5868f41d2d125ac94542d44d1fc8174dc1862886f549a575acdc_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a15028287fc0791e725ff4fed3b7db1c7f78a94719c5016480633520ca02a0cb = $this->env->getExtension("native_profiler");
        $__internal_a15028287fc0791e725ff4fed3b7db1c7f78a94719c5016480633520ca02a0cb->enter($__internal_a15028287fc0791e725ff4fed3b7db1c7f78a94719c5016480633520ca02a0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "<h1>Welcome to the Enseignant:listEnseignant page</h1>

<form>
    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>libelle</th>
                
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enss"]) ? $context["enss"] : $this->getContext($context, "enss")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "libelle", array()), "html", null, true);
            echo "</td>
                
 <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_enseignant", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
 <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_enseignant", array("id" => $this->getAttribute($context["st"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "<tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
        <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("Specialite_new");
        echo "\">
                Add Specialite
            </a>
        </li>
    </ul>
  
</form>
    ";
        
        $__internal_a15028287fc0791e725ff4fed3b7db1c7f78a94719c5016480633520ca02a0cb->leave($__internal_a15028287fc0791e725ff4fed3b7db1c7f78a94719c5016480633520ca02a0cb_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Specialite:list_specialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  92 => 29,  84 => 26,  76 => 23,  72 => 22,  67 => 20,  63 => 19,  60 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/* <h1>Welcome to the Enseignant:listEnseignant page</h1>*/
/* */
/* <form>*/
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>libelle</th>*/
/*                 */
/*               */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for st in enss %}*/
/*             <tr>*/
/*                 <td>{{ st.id }}</td>*/
/*                 <td>{{ st.libelle }}</td>*/
/*                 */
/*  <td><a href="{{ path('edit_enseignant', { 'id': st.id }) }}">Modifier</a></td>*/
/*  <td><a href="{{ path('remove_enseignant', { 'id': st.id }) }}">Supprimer</a></td>*/
/* </tr>*/
/* {% else %}*/
/* <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('Specialite_new') }}">*/
/*                 Add Specialite*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*   */
/* </form>*/
/*     {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
