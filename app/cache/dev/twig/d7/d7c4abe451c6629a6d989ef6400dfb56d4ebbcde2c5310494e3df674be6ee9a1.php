<?php

/* MyschoolBundle:Default:index.html.twig */
class __TwigTemplate_784028ddcf662052a1d5e667a65c729d5cf0a65d05032e6097ee9592b13450ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MyschoolBundle:Default:affichage.html.twig", "MyschoolBundle:Default:index.html.twig", 1);
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
        $__internal_cde76980c8adc722c868c770f9454a3684812fcafd3373790204d5ae30694d07 = $this->env->getExtension("native_profiler");
        $__internal_cde76980c8adc722c868c770f9454a3684812fcafd3373790204d5ae30694d07->enter($__internal_cde76980c8adc722c868c770f9454a3684812fcafd3373790204d5ae30694d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde76980c8adc722c868c770f9454a3684812fcafd3373790204d5ae30694d07->leave($__internal_cde76980c8adc722c868c770f9454a3684812fcafd3373790204d5ae30694d07_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c3dd43e51ac2e7a6873bdbc762eca674dfd0953cfd12cf138264096c6a8d2fd = $this->env->getExtension("native_profiler");
        $__internal_7c3dd43e51ac2e7a6873bdbc762eca674dfd0953cfd12cf138264096c6a8d2fd->enter($__internal_7c3dd43e51ac2e7a6873bdbc762eca674dfd0953cfd12cf138264096c6a8d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "hello world
";
        
        $__internal_7c3dd43e51ac2e7a6873bdbc762eca674dfd0953cfd12cf138264096c6a8d2fd->leave($__internal_7c3dd43e51ac2e7a6873bdbc762eca674dfd0953cfd12cf138264096c6a8d2fd_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Default:index.html.twig";
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
/* {% extends "MyschoolBundle:Default:affichage.html.twig" %}*/
/* */
/* {% block menu %}*/
/* hello world*/
/* {% endblock %}*/
/* */
/* */
