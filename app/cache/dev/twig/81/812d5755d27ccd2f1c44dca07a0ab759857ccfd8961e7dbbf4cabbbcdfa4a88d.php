<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b3b693b895d3d4f9811c161d83e27c3eac9c6f38fcf850f83fad50860c3ffee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8010e645853b5c397c5cc46067e5d7d7d1770a5669473651a3a888949f5a0e1c = $this->env->getExtension("native_profiler");
        $__internal_8010e645853b5c397c5cc46067e5d7d7d1770a5669473651a3a888949f5a0e1c->enter($__internal_8010e645853b5c397c5cc46067e5d7d7d1770a5669473651a3a888949f5a0e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8010e645853b5c397c5cc46067e5d7d7d1770a5669473651a3a888949f5a0e1c->leave($__internal_8010e645853b5c397c5cc46067e5d7d7d1770a5669473651a3a888949f5a0e1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5083b465811b8c60cb811503dc5851cba7f4063526e0f87425a9cb79a06c1b4e = $this->env->getExtension("native_profiler");
        $__internal_5083b465811b8c60cb811503dc5851cba7f4063526e0f87425a9cb79a06c1b4e->enter($__internal_5083b465811b8c60cb811503dc5851cba7f4063526e0f87425a9cb79a06c1b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5083b465811b8c60cb811503dc5851cba7f4063526e0f87425a9cb79a06c1b4e->leave($__internal_5083b465811b8c60cb811503dc5851cba7f4063526e0f87425a9cb79a06c1b4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
