<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_28d3b6135bf4661b890f782ad056b24db508928e41c88b6e1a3909fa537f7e66 extends Twig_Template
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
        $__internal_58c8c4338525e892cef3526e36f64b58662a2112484ce3d4951e8cfc941e27b8 = $this->env->getExtension("native_profiler");
        $__internal_58c8c4338525e892cef3526e36f64b58662a2112484ce3d4951e8cfc941e27b8->enter($__internal_58c8c4338525e892cef3526e36f64b58662a2112484ce3d4951e8cfc941e27b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c8c4338525e892cef3526e36f64b58662a2112484ce3d4951e8cfc941e27b8->leave($__internal_58c8c4338525e892cef3526e36f64b58662a2112484ce3d4951e8cfc941e27b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_791226d88a299c2be80d1076ee08c64d09d5a6d0c8b0770e16deb7236c1f6c90 = $this->env->getExtension("native_profiler");
        $__internal_791226d88a299c2be80d1076ee08c64d09d5a6d0c8b0770e16deb7236c1f6c90->enter($__internal_791226d88a299c2be80d1076ee08c64d09d5a6d0c8b0770e16deb7236c1f6c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_791226d88a299c2be80d1076ee08c64d09d5a6d0c8b0770e16deb7236c1f6c90->leave($__internal_791226d88a299c2be80d1076ee08c64d09d5a6d0c8b0770e16deb7236c1f6c90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc274b492bccad5c890900d7562b7fc525b728ca3c6aae092ad14be9a7cd983 = $this->env->getExtension("native_profiler");
        $__internal_ebc274b492bccad5c890900d7562b7fc525b728ca3c6aae092ad14be9a7cd983->enter($__internal_ebc274b492bccad5c890900d7562b7fc525b728ca3c6aae092ad14be9a7cd983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebc274b492bccad5c890900d7562b7fc525b728ca3c6aae092ad14be9a7cd983->leave($__internal_ebc274b492bccad5c890900d7562b7fc525b728ca3c6aae092ad14be9a7cd983_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a1a3eb34b94832eeee3d7f7daf8a23ddfc70b35de6f2219ef3942af4ec1b755 = $this->env->getExtension("native_profiler");
        $__internal_3a1a3eb34b94832eeee3d7f7daf8a23ddfc70b35de6f2219ef3942af4ec1b755->enter($__internal_3a1a3eb34b94832eeee3d7f7daf8a23ddfc70b35de6f2219ef3942af4ec1b755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3a1a3eb34b94832eeee3d7f7daf8a23ddfc70b35de6f2219ef3942af4ec1b755->leave($__internal_3a1a3eb34b94832eeee3d7f7daf8a23ddfc70b35de6f2219ef3942af4ec1b755_prof);

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
