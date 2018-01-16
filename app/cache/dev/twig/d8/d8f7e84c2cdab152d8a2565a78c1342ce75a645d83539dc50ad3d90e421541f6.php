<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7348d39eee748560fe4882718cc820ea1c663b95bd2402184e69ef484cc2cfc0 extends Twig_Template
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
        $__internal_c0f5bfd44e9e84308881c9911e8a1fd9522c2320b34614e39a7f09c2bbf3e4ea = $this->env->getExtension("native_profiler");
        $__internal_c0f5bfd44e9e84308881c9911e8a1fd9522c2320b34614e39a7f09c2bbf3e4ea->enter($__internal_c0f5bfd44e9e84308881c9911e8a1fd9522c2320b34614e39a7f09c2bbf3e4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f5bfd44e9e84308881c9911e8a1fd9522c2320b34614e39a7f09c2bbf3e4ea->leave($__internal_c0f5bfd44e9e84308881c9911e8a1fd9522c2320b34614e39a7f09c2bbf3e4ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b891522da9107e8437d0df4af41cf0a4c0966610cfd8e652ae12a866d461d3e = $this->env->getExtension("native_profiler");
        $__internal_9b891522da9107e8437d0df4af41cf0a4c0966610cfd8e652ae12a866d461d3e->enter($__internal_9b891522da9107e8437d0df4af41cf0a4c0966610cfd8e652ae12a866d461d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b891522da9107e8437d0df4af41cf0a4c0966610cfd8e652ae12a866d461d3e->leave($__internal_9b891522da9107e8437d0df4af41cf0a4c0966610cfd8e652ae12a866d461d3e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6cbf76a2727cfc06df0f24aa6ea16dbb65f46d0f03b7bfe6a6e9f0c69577916 = $this->env->getExtension("native_profiler");
        $__internal_d6cbf76a2727cfc06df0f24aa6ea16dbb65f46d0f03b7bfe6a6e9f0c69577916->enter($__internal_d6cbf76a2727cfc06df0f24aa6ea16dbb65f46d0f03b7bfe6a6e9f0c69577916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6cbf76a2727cfc06df0f24aa6ea16dbb65f46d0f03b7bfe6a6e9f0c69577916->leave($__internal_d6cbf76a2727cfc06df0f24aa6ea16dbb65f46d0f03b7bfe6a6e9f0c69577916_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74f7fe935772ce974997095c2fb4ca112423b9154b338b8bf2a89412bb5ae9d8 = $this->env->getExtension("native_profiler");
        $__internal_74f7fe935772ce974997095c2fb4ca112423b9154b338b8bf2a89412bb5ae9d8->enter($__internal_74f7fe935772ce974997095c2fb4ca112423b9154b338b8bf2a89412bb5ae9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74f7fe935772ce974997095c2fb4ca112423b9154b338b8bf2a89412bb5ae9d8->leave($__internal_74f7fe935772ce974997095c2fb4ca112423b9154b338b8bf2a89412bb5ae9d8_prof);

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
