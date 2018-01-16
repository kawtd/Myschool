<?php

/* matiere/new.html.twig */
class __TwigTemplate_b26244c0dcc6e620c99213d83ecfd5fa9fb2003961ce81e77e8d64b9714eff37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matiere/new.html.twig", 1);
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
        $__internal_7df1a1f7612d2584e258a1047d9e2754e3361b391e8cfff11f808bcd2854c4b8 = $this->env->getExtension("native_profiler");
        $__internal_7df1a1f7612d2584e258a1047d9e2754e3361b391e8cfff11f808bcd2854c4b8->enter($__internal_7df1a1f7612d2584e258a1047d9e2754e3361b391e8cfff11f808bcd2854c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matiere/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df1a1f7612d2584e258a1047d9e2754e3361b391e8cfff11f808bcd2854c4b8->leave($__internal_7df1a1f7612d2584e258a1047d9e2754e3361b391e8cfff11f808bcd2854c4b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc843bae0acc671e16a8ea8c7ec15607741221b1c8c09edae74959d95fe1f2ce = $this->env->getExtension("native_profiler");
        $__internal_dc843bae0acc671e16a8ea8c7ec15607741221b1c8c09edae74959d95fe1f2ce->enter($__internal_dc843bae0acc671e16a8ea8c7ec15607741221b1c8c09edae74959d95fe1f2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dc843bae0acc671e16a8ea8c7ec15607741221b1c8c09edae74959d95fe1f2ce->leave($__internal_dc843bae0acc671e16a8ea8c7ec15607741221b1c8c09edae74959d95fe1f2ce_prof);

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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
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
