<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_72af347ad97dcd6d0cdcffa5d5fccc04eb4a108fb9699a4a1ef743a590e20693 extends Twig_Template
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
        $__internal_097b6110ae52b4f280c5ebce15c2ba77db00990998b79188428c128101c947f1 = $this->env->getExtension("native_profiler");
        $__internal_097b6110ae52b4f280c5ebce15c2ba77db00990998b79188428c128101c947f1->enter($__internal_097b6110ae52b4f280c5ebce15c2ba77db00990998b79188428c128101c947f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_097b6110ae52b4f280c5ebce15c2ba77db00990998b79188428c128101c947f1->leave($__internal_097b6110ae52b4f280c5ebce15c2ba77db00990998b79188428c128101c947f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9545e20c7cd192a8b20c57221528f00c6fa750f54108a852bee0fe00d4e13b6c = $this->env->getExtension("native_profiler");
        $__internal_9545e20c7cd192a8b20c57221528f00c6fa750f54108a852bee0fe00d4e13b6c->enter($__internal_9545e20c7cd192a8b20c57221528f00c6fa750f54108a852bee0fe00d4e13b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9545e20c7cd192a8b20c57221528f00c6fa750f54108a852bee0fe00d4e13b6c->leave($__internal_9545e20c7cd192a8b20c57221528f00c6fa750f54108a852bee0fe00d4e13b6c_prof);

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
