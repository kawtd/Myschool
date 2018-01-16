<?php

/* MyschoolBundle:Student:editClasse.html.twig */
class __TwigTemplate_677a0bf2aade31d552db6cf856d1d3f06a3544507e3b8b32e9dddeec95240cb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Student:editClasse.html.twig", 1);
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
        $__internal_1429100fc9b976cd344de8a3093e9ae953f3cba41aa94152f8c0724538dab4a2 = $this->env->getExtension("native_profiler");
        $__internal_1429100fc9b976cd344de8a3093e9ae953f3cba41aa94152f8c0724538dab4a2->enter($__internal_1429100fc9b976cd344de8a3093e9ae953f3cba41aa94152f8c0724538dab4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:editClasse.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1429100fc9b976cd344de8a3093e9ae953f3cba41aa94152f8c0724538dab4a2->leave($__internal_1429100fc9b976cd344de8a3093e9ae953f3cba41aa94152f8c0724538dab4a2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8dc7c90ef22d8a18a77f168b0d5f7bd18907662d452efcd2c4170d929fc6e08 = $this->env->getExtension("native_profiler");
        $__internal_b8dc7c90ef22d8a18a77f168b0d5f7bd18907662d452efcd2c4170d929fc6e08->enter($__internal_b8dc7c90ef22d8a18a77f168b0d5f7bd18907662d452efcd2c4170d929fc6e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1 align =\"center\">modifer Classe</h1><hr>

    ";
        // line 6
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 7
            echo "        <p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
    ";
        }
        // line 9
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
    <input Class =\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("classe_list");
        echo "\">
                Liste Classe
            </a>
        </li>
    </ul>



";
        
        $__internal_b8dc7c90ef22d8a18a77f168b0d5f7bd18907662d452efcd2c4170d929fc6e08->leave($__internal_b8dc7c90ef22d8a18a77f168b0d5f7bd18907662d452efcd2c4170d929fc6e08_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Student:editClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  62 => 12,  57 => 10,  52 => 9,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1 align ="center">modifer Classe</h1><hr>*/
/* */
/*     {% if message %}*/
/*         <p>{{ message }}</p>*/
/*     {% endif %}*/
/*     {{ form_start(f) }}*/
/*     {{ form_widget(f) }}*/
/*     <input Class ="btn btn-primary" type="submit" value="Valider" />*/
/*     {{ form_end(f) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('classe_list') }}">*/
/*                 Liste Classe*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/* */
/* {% endblock %}*/
