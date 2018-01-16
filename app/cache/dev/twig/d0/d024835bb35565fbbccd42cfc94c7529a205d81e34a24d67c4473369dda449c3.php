<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c095e244b682d33de8f99a53b611b54d91f039b535a533de79eaa9020418ff2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d10ed9c53db96f52f7d2573160268777e523d19a26f00947189d2038e8071a7 = $this->env->getExtension("native_profiler");
        $__internal_8d10ed9c53db96f52f7d2573160268777e523d19a26f00947189d2038e8071a7->enter($__internal_8d10ed9c53db96f52f7d2573160268777e523d19a26f00947189d2038e8071a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d10ed9c53db96f52f7d2573160268777e523d19a26f00947189d2038e8071a7->leave($__internal_8d10ed9c53db96f52f7d2573160268777e523d19a26f00947189d2038e8071a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c3e36180a8bab0c9e8600c1a4445abbd6657414fbd82bcaef0eaddd50670978 = $this->env->getExtension("native_profiler");
        $__internal_2c3e36180a8bab0c9e8600c1a4445abbd6657414fbd82bcaef0eaddd50670978->enter($__internal_2c3e36180a8bab0c9e8600c1a4445abbd6657414fbd82bcaef0eaddd50670978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c3e36180a8bab0c9e8600c1a4445abbd6657414fbd82bcaef0eaddd50670978->leave($__internal_2c3e36180a8bab0c9e8600c1a4445abbd6657414fbd82bcaef0eaddd50670978_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a68562bdcb39fbce990298063900659407a4476748731e1c16fb777db8df6f76 = $this->env->getExtension("native_profiler");
        $__internal_a68562bdcb39fbce990298063900659407a4476748731e1c16fb777db8df6f76->enter($__internal_a68562bdcb39fbce990298063900659407a4476748731e1c16fb777db8df6f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a68562bdcb39fbce990298063900659407a4476748731e1c16fb777db8df6f76->leave($__internal_a68562bdcb39fbce990298063900659407a4476748731e1c16fb777db8df6f76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f11cc690e42a212c6f8ad94f7443f5b5915ad977b80ba1737011ebd9488fdef5 = $this->env->getExtension("native_profiler");
        $__internal_f11cc690e42a212c6f8ad94f7443f5b5915ad977b80ba1737011ebd9488fdef5->enter($__internal_f11cc690e42a212c6f8ad94f7443f5b5915ad977b80ba1737011ebd9488fdef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f11cc690e42a212c6f8ad94f7443f5b5915ad977b80ba1737011ebd9488fdef5->leave($__internal_f11cc690e42a212c6f8ad94f7443f5b5915ad977b80ba1737011ebd9488fdef5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
