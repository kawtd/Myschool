<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_020a6df52b57383bf60192eb629dac4985c18d990bd7c656e2beeacefbbf24f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e31b1a3d0a38b4dd26cd8c5fb969a318654910f74e3da8fdf0c5425f2cd0d1d9 = $this->env->getExtension("native_profiler");
        $__internal_e31b1a3d0a38b4dd26cd8c5fb969a318654910f74e3da8fdf0c5425f2cd0d1d9->enter($__internal_e31b1a3d0a38b4dd26cd8c5fb969a318654910f74e3da8fdf0c5425f2cd0d1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e31b1a3d0a38b4dd26cd8c5fb969a318654910f74e3da8fdf0c5425f2cd0d1d9->leave($__internal_e31b1a3d0a38b4dd26cd8c5fb969a318654910f74e3da8fdf0c5425f2cd0d1d9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
