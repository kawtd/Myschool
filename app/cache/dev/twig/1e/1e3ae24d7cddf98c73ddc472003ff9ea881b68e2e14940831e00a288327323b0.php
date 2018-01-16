<?php

/* MyschoolBundle:Specialite:add_specialite.html.twig */
class __TwigTemplate_3022632801cd666a81cf333fbbe92d7188811ac96d865c52793faffab3bbdb33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Specialite:add_specialite.html.twig", 1);
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
        $__internal_4c8e14e316299efb71b3e282905cce6281410e8adebbf9ec16cefd2bc72f7e99 = $this->env->getExtension("native_profiler");
        $__internal_4c8e14e316299efb71b3e282905cce6281410e8adebbf9ec16cefd2bc72f7e99->enter($__internal_4c8e14e316299efb71b3e282905cce6281410e8adebbf9ec16cefd2bc72f7e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Specialite:add_specialite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8e14e316299efb71b3e282905cce6281410e8adebbf9ec16cefd2bc72f7e99->leave($__internal_4c8e14e316299efb71b3e282905cce6281410e8adebbf9ec16cefd2bc72f7e99_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3058fe765bc0be958ae8d831226d9ffce8c91aa0757cb744029f0a5088bdf74c = $this->env->getExtension("native_profiler");
        $__internal_3058fe765bc0be958ae8d831226d9ffce8c91aa0757cb744029f0a5088bdf74c->enter($__internal_3058fe765bc0be958ae8d831226d9ffce8c91aa0757cb744029f0a5088bdf74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1 align =\"center\">Ajout Specialite</h1><hr>
 <form action=\"\" method=\"post\"  ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'enctype');
        echo ">
     <table>
<tr>
    <td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'label');
        echo "</td>
    <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle", array()), 'widget');
        echo "</td>
</tr>
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
<tr>
    <td><input type=\"submit\" value =\"Valider\" /></td>
</tr>
     </table>
 <h1>List Specialite</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Libelle</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cls"]) ? $context["cls"] : $this->getContext($context, "cls")));
        foreach ($context['_seq'] as $context["_key"] => $context["cl"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["cl"], "libelle", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
        <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("Specialite_list");
        echo "\">
                Liste Specialite
            </a>
        </li>
    </ul>
 </form>

 
";
        
        $__internal_3058fe765bc0be958ae8d831226d9ffce8c91aa0757cb744029f0a5088bdf74c->leave($__internal_3058fe765bc0be958ae8d831226d9ffce8c91aa0757cb744029f0a5088bdf74c_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Specialite:add_specialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 36,  96 => 32,  87 => 29,  83 => 28,  80 => 27,  76 => 26,  58 => 11,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1 align ="center">Ajout Specialite</h1><hr>*/
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
/*  <h1>List Specialite</h1>*/
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
/*             <a href="{{ path('Specialite_list') }}">*/
/*                 Liste Specialite*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*  </form>*/
/* */
/*  */
/* {% endblock %}*/
