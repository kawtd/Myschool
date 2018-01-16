<?php

/* MyschoolBundle:Student:add_classe.html.twig */
class __TwigTemplate_3be00007c9f0b8686975d57106630624248829892056c4d2686419cdcc415d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Student:add_classe.html.twig", 2);
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
        $__internal_c92f2b4250d63f9ac438dba808c430bb02382ae446545a291c3b1a1d75de4aab = $this->env->getExtension("native_profiler");
        $__internal_c92f2b4250d63f9ac438dba808c430bb02382ae446545a291c3b1a1d75de4aab->enter($__internal_c92f2b4250d63f9ac438dba808c430bb02382ae446545a291c3b1a1d75de4aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:add_classe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92f2b4250d63f9ac438dba808c430bb02382ae446545a291c3b1a1d75de4aab->leave($__internal_c92f2b4250d63f9ac438dba808c430bb02382ae446545a291c3b1a1d75de4aab_prof);

    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d7bff4b84a2e6771b197236c4c9570b158fbcd64ecd40eb7517fbea1ad5c1b1 = $this->env->getExtension("native_profiler");
        $__internal_1d7bff4b84a2e6771b197236c4c9570b158fbcd64ecd40eb7517fbea1ad5c1b1->enter($__internal_1d7bff4b84a2e6771b197236c4c9570b158fbcd64ecd40eb7517fbea1ad5c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 5
        echo "    <h1 align =\"center\">Ajout Classe</h1><hr>
 <form action=\"\" method=\"post\"  ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo ">
     <table>
<tr>
    <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'label');
        echo "</td>
    <td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget');
        echo "</td>
</tr>
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
<tr>
    <td><input type=\"submit\" value =\"Valider\" /></td>
</tr>
     </table>
 <h1>List Classe</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "libelle", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
        <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("classe_list");
        echo "\">
                Liste Classe
            </a>
        </li>
    </ul>
 </form>

 
";
        
        $__internal_1d7bff4b84a2e6771b197236c4c9570b158fbcd64ecd40eb7517fbea1ad5c1b1->leave($__internal_1d7bff4b84a2e6771b197236c4c9570b158fbcd64ecd40eb7517fbea1ad5c1b1_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:add_classe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  96 => 33,  87 => 30,  83 => 29,  80 => 28,  76 => 27,  58 => 12,  53 => 10,  49 => 9,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1 align ="center">Ajout Classe</h1><hr>*/
/*  <form action="" method="post"  {{form_enctype (f)}}>*/
/*      <table>*/
/* <tr>*/
/*     <td>{{ form_label(f.libelle) }}</td>*/
/*     <td>{{ form_widget(f.libelle) }}</td>*/
/* </tr>*/
/* {{ form_widget(f) }}*/
/* <tr>*/
/*     <td><input type="submit" value ="Valider" /></td>*/
/* </tr>*/
/*      </table>*/
/*  <h1>List Classe</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Libelle</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cl in cls %}*/
/*             <tr>*/
/*                 <td>{{ cl.id }}</td>*/
/*                 <td>{{ cl.libelle }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('classe_list') }}">*/
/*                 Liste Classe*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*  </form>*/
/* */
/*  */
/* {% endblock %}*/
