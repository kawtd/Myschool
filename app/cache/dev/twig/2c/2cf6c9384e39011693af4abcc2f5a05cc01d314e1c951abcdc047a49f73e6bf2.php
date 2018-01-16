<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d91a893e499e1a79ef4e3951fe28b9c5ca0f224b114de39727fa39c8b65cf4e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a32918e7abfa68ce40a6727ef7fe207f35c51f0a37b83478add2d8d6eb9fdd8 = $this->env->getExtension("native_profiler");
        $__internal_1a32918e7abfa68ce40a6727ef7fe207f35c51f0a37b83478add2d8d6eb9fdd8->enter($__internal_1a32918e7abfa68ce40a6727ef7fe207f35c51f0a37b83478add2d8d6eb9fdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a32918e7abfa68ce40a6727ef7fe207f35c51f0a37b83478add2d8d6eb9fdd8->leave($__internal_1a32918e7abfa68ce40a6727ef7fe207f35c51f0a37b83478add2d8d6eb9fdd8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f4ee132b2c3ec2b9d53c4cd41a7d9bde283ea0af66a25dc4bb3ef905fb67b6f = $this->env->getExtension("native_profiler");
        $__internal_2f4ee132b2c3ec2b9d53c4cd41a7d9bde283ea0af66a25dc4bb3ef905fb67b6f->enter($__internal_2f4ee132b2c3ec2b9d53c4cd41a7d9bde283ea0af66a25dc4bb3ef905fb67b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f4ee132b2c3ec2b9d53c4cd41a7d9bde283ea0af66a25dc4bb3ef905fb67b6f->leave($__internal_2f4ee132b2c3ec2b9d53c4cd41a7d9bde283ea0af66a25dc4bb3ef905fb67b6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d2ff592b4d3a830f8e32a6c089c1a2ac3ace34e0ad18d19f0346b23ad7270c0 = $this->env->getExtension("native_profiler");
        $__internal_4d2ff592b4d3a830f8e32a6c089c1a2ac3ace34e0ad18d19f0346b23ad7270c0->enter($__internal_4d2ff592b4d3a830f8e32a6c089c1a2ac3ace34e0ad18d19f0346b23ad7270c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d2ff592b4d3a830f8e32a6c089c1a2ac3ace34e0ad18d19f0346b23ad7270c0->leave($__internal_4d2ff592b4d3a830f8e32a6c089c1a2ac3ace34e0ad18d19f0346b23ad7270c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5283f0d01a47a8a8192c292a947ea0d6e3b663ab9fb4b9cbe4e5ffa5ce0a3cb7 = $this->env->getExtension("native_profiler");
        $__internal_5283f0d01a47a8a8192c292a947ea0d6e3b663ab9fb4b9cbe4e5ffa5ce0a3cb7->enter($__internal_5283f0d01a47a8a8192c292a947ea0d6e3b663ab9fb4b9cbe4e5ffa5ce0a3cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5283f0d01a47a8a8192c292a947ea0d6e3b663ab9fb4b9cbe4e5ffa5ce0a3cb7->leave($__internal_5283f0d01a47a8a8192c292a947ea0d6e3b663ab9fb4b9cbe4e5ffa5ce0a3cb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
