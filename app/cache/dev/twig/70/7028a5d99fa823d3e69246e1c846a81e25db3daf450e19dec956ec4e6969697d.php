<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab1bd3d6d3ae4ff0e96b7d99152917cea5312ce46e37606e22e732c4c4047e2e extends Twig_Template
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
        $__internal_b144185e009b8281f8f2a0c218398fd685eb09ff6ed3e55e93da300c12d5d875 = $this->env->getExtension("native_profiler");
        $__internal_b144185e009b8281f8f2a0c218398fd685eb09ff6ed3e55e93da300c12d5d875->enter($__internal_b144185e009b8281f8f2a0c218398fd685eb09ff6ed3e55e93da300c12d5d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b144185e009b8281f8f2a0c218398fd685eb09ff6ed3e55e93da300c12d5d875->leave($__internal_b144185e009b8281f8f2a0c218398fd685eb09ff6ed3e55e93da300c12d5d875_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_359a5cd533c03dfb25ebdde6ea96d4c02dd53fe096c9a57563b3a107c1a1db34 = $this->env->getExtension("native_profiler");
        $__internal_359a5cd533c03dfb25ebdde6ea96d4c02dd53fe096c9a57563b3a107c1a1db34->enter($__internal_359a5cd533c03dfb25ebdde6ea96d4c02dd53fe096c9a57563b3a107c1a1db34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_359a5cd533c03dfb25ebdde6ea96d4c02dd53fe096c9a57563b3a107c1a1db34->leave($__internal_359a5cd533c03dfb25ebdde6ea96d4c02dd53fe096c9a57563b3a107c1a1db34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b66adba6cfec1928e43bc99f63f0366d36d1cb781ed6a83cef6b1fab49a51d2c = $this->env->getExtension("native_profiler");
        $__internal_b66adba6cfec1928e43bc99f63f0366d36d1cb781ed6a83cef6b1fab49a51d2c->enter($__internal_b66adba6cfec1928e43bc99f63f0366d36d1cb781ed6a83cef6b1fab49a51d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b66adba6cfec1928e43bc99f63f0366d36d1cb781ed6a83cef6b1fab49a51d2c->leave($__internal_b66adba6cfec1928e43bc99f63f0366d36d1cb781ed6a83cef6b1fab49a51d2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1785a9810186c9c117169326ab1362ba9e079afce08a69682fc7812f157007c8 = $this->env->getExtension("native_profiler");
        $__internal_1785a9810186c9c117169326ab1362ba9e079afce08a69682fc7812f157007c8->enter($__internal_1785a9810186c9c117169326ab1362ba9e079afce08a69682fc7812f157007c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1785a9810186c9c117169326ab1362ba9e079afce08a69682fc7812f157007c8->leave($__internal_1785a9810186c9c117169326ab1362ba9e079afce08a69682fc7812f157007c8_prof);

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
