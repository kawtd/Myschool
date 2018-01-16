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
        $__internal_f6dd8b74d9be51c2ea17fe528dfa18974a22ed66b5c602d8b14968fbcdae79cd = $this->env->getExtension("native_profiler");
        $__internal_f6dd8b74d9be51c2ea17fe528dfa18974a22ed66b5c602d8b14968fbcdae79cd->enter($__internal_f6dd8b74d9be51c2ea17fe528dfa18974a22ed66b5c602d8b14968fbcdae79cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6dd8b74d9be51c2ea17fe528dfa18974a22ed66b5c602d8b14968fbcdae79cd->leave($__internal_f6dd8b74d9be51c2ea17fe528dfa18974a22ed66b5c602d8b14968fbcdae79cd_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e78c570001813b35ea67595edbee7fd660f7c3d85580354767f036481f010368 = $this->env->getExtension("native_profiler");
        $__internal_e78c570001813b35ea67595edbee7fd660f7c3d85580354767f036481f010368->enter($__internal_e78c570001813b35ea67595edbee7fd660f7c3d85580354767f036481f010368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        <input type=\"submit\" value=\"Create\" />
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
        
        $__internal_e78c570001813b35ea67595edbee7fd660f7c3d85580354767f036481f010368->leave($__internal_e78c570001813b35ea67595edbee7fd660f7c3d85580354767f036481f010368_prof);

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
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matiere_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
