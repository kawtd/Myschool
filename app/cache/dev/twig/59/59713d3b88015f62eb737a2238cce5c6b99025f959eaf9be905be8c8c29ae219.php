<?php

/* matiere/new.html.twig */
class __TwigTemplate_3edbc11c65f0de9593772068eb45ecbeb8061abf0fab6e5d0ddadd83532c386b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "matiere/new.html.twig", 1);
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
        $__internal_a0b68102cf134c2a0db9e52e6968993b57e2bb937d21fb22be0cc52290642739 = $this->env->getExtension("native_profiler");
        $__internal_a0b68102cf134c2a0db9e52e6968993b57e2bb937d21fb22be0cc52290642739->enter($__internal_a0b68102cf134c2a0db9e52e6968993b57e2bb937d21fb22be0cc52290642739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b68102cf134c2a0db9e52e6968993b57e2bb937d21fb22be0cc52290642739->leave($__internal_a0b68102cf134c2a0db9e52e6968993b57e2bb937d21fb22be0cc52290642739_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23da0d85167012d6c6bae443aef720e2d2881fb4a7b50f678474f4e7ea036ff1 = $this->env->getExtension("native_profiler");
        $__internal_23da0d85167012d6c6bae443aef720e2d2881fb4a7b50f678474f4e7ea036ff1->enter($__internal_23da0d85167012d6c6bae443aef720e2d2881fb4a7b50f678474f4e7ea036ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "    <h1>Matiere creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input Class =\"btn btn-primary\" type=\"submit\" value=\"Valider\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("matiere_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_23da0d85167012d6c6bae443aef720e2d2881fb4a7b50f678474f4e7ea036ff1->leave($__internal_23da0d85167012d6c6bae443aef720e2d2881fb4a7b50f678474f4e7ea036ff1_prof);

    }

    public function getTemplateName()
    {
        return "matiere/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     <h1>Matiere creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input Class ="btn btn-primary" type="submit" value="Valider" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matiere_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
