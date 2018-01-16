<?php

/* MyschoolBundle:Student:add_classe.html.twig */
class __TwigTemplate_3be00007c9f0b8686975d57106630624248829892056c4d2686419cdcc415d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Student:add_classe.html.twig", 1);
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
        $__internal_798e5c3fa4d955a82aef8cc984d28e0f6e2bcf2d37c03f51a81103e291f01698 = $this->env->getExtension("native_profiler");
        $__internal_798e5c3fa4d955a82aef8cc984d28e0f6e2bcf2d37c03f51a81103e291f01698->enter($__internal_798e5c3fa4d955a82aef8cc984d28e0f6e2bcf2d37c03f51a81103e291f01698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Student:add_classe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_798e5c3fa4d955a82aef8cc984d28e0f6e2bcf2d37c03f51a81103e291f01698->leave($__internal_798e5c3fa4d955a82aef8cc984d28e0f6e2bcf2d37c03f51a81103e291f01698_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c36c6c342946a4eb7ced03fe9b8606f1ed1a326ed456a46afdb63e8aeedf0ea7 = $this->env->getExtension("native_profiler");
        $__internal_c36c6c342946a4eb7ced03fe9b8606f1ed1a326ed456a46afdb63e8aeedf0ea7->enter($__internal_c36c6c342946a4eb7ced03fe9b8606f1ed1a326ed456a46afdb63e8aeedf0ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1 align =\"center\">Ajout Classe</h1><hr>
    ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'widget');
        echo "
    <input Class =\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "

        <ul>
        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("classe_list");
        echo "\">
                Liste Classe
            </a>
        </li>
    </ul>


 
";
        
        $__internal_c36c6c342946a4eb7ced03fe9b8606f1ed1a326ed456a46afdb63e8aeedf0ea7->leave($__internal_c36c6c342946a4eb7ced03fe9b8606f1ed1a326ed456a46afdb63e8aeedf0ea7_prof);

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
        return array (  59 => 12,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1 align ="center">Ajout Classe</h1><hr>*/
/*     {{ form_start(f) }}*/
/*     {{ form_widget(f) }}*/
/*     <input Class ="btn btn-primary" type="submit" value="Valider" />*/
/*     {{ form_end(f) }}*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('classe_list') }}">*/
/*                 Liste Classe*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
/*  */
/* {% endblock %}*/
