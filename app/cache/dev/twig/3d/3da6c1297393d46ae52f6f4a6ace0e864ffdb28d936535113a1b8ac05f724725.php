<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e2e78a67be08d90db42f857eea988a0317d463a80c9848dad895e0552c00a23 extends Twig_Template
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
        $__internal_c80870f85be6904dfd5907debcf120012c33968abe474bdab34186ad512f8d0f = $this->env->getExtension("native_profiler");
        $__internal_c80870f85be6904dfd5907debcf120012c33968abe474bdab34186ad512f8d0f->enter($__internal_c80870f85be6904dfd5907debcf120012c33968abe474bdab34186ad512f8d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80870f85be6904dfd5907debcf120012c33968abe474bdab34186ad512f8d0f->leave($__internal_c80870f85be6904dfd5907debcf120012c33968abe474bdab34186ad512f8d0f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a953a14c778c5e67956211168dd3b7f12ec3365b52748409f3e01e9dba8c41f6 = $this->env->getExtension("native_profiler");
        $__internal_a953a14c778c5e67956211168dd3b7f12ec3365b52748409f3e01e9dba8c41f6->enter($__internal_a953a14c778c5e67956211168dd3b7f12ec3365b52748409f3e01e9dba8c41f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a953a14c778c5e67956211168dd3b7f12ec3365b52748409f3e01e9dba8c41f6->leave($__internal_a953a14c778c5e67956211168dd3b7f12ec3365b52748409f3e01e9dba8c41f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4de7dc4d659d3fc1bf837d8c1dcdf1959be221760401bf0627120bdc71c80866 = $this->env->getExtension("native_profiler");
        $__internal_4de7dc4d659d3fc1bf837d8c1dcdf1959be221760401bf0627120bdc71c80866->enter($__internal_4de7dc4d659d3fc1bf837d8c1dcdf1959be221760401bf0627120bdc71c80866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4de7dc4d659d3fc1bf837d8c1dcdf1959be221760401bf0627120bdc71c80866->leave($__internal_4de7dc4d659d3fc1bf837d8c1dcdf1959be221760401bf0627120bdc71c80866_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c3a4c88c49a56fc9268e9a4488eef2932949fcff3712fc5507797b3cf1bad3e = $this->env->getExtension("native_profiler");
        $__internal_6c3a4c88c49a56fc9268e9a4488eef2932949fcff3712fc5507797b3cf1bad3e->enter($__internal_6c3a4c88c49a56fc9268e9a4488eef2932949fcff3712fc5507797b3cf1bad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6c3a4c88c49a56fc9268e9a4488eef2932949fcff3712fc5507797b3cf1bad3e->leave($__internal_6c3a4c88c49a56fc9268e9a4488eef2932949fcff3712fc5507797b3cf1bad3e_prof);

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
