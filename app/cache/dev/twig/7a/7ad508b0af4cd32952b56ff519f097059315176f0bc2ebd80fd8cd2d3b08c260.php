<?php

/* ::base.html.twig */
class __TwigTemplate_bc7287c4f64e67dd690ee4aec0b7de496d4fc754beeb844bb76dd2b7134c6a94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e23bac1870bd325c40f6c777e16be408c574ca7257082b0a0589eca24547d9bb = $this->env->getExtension("native_profiler");
        $__internal_e23bac1870bd325c40f6c777e16be408c574ca7257082b0a0589eca24547d9bb->enter($__internal_e23bac1870bd325c40f6c777e16be408c574ca7257082b0a0589eca24547d9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_e23bac1870bd325c40f6c777e16be408c574ca7257082b0a0589eca24547d9bb->leave($__internal_e23bac1870bd325c40f6c777e16be408c574ca7257082b0a0589eca24547d9bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83cecc4e49722c7d266c515e75c26a5c2e114ea3ab89feed061f65b976df69c7 = $this->env->getExtension("native_profiler");
        $__internal_83cecc4e49722c7d266c515e75c26a5c2e114ea3ab89feed061f65b976df69c7->enter($__internal_83cecc4e49722c7d266c515e75c26a5c2e114ea3ab89feed061f65b976df69c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_83cecc4e49722c7d266c515e75c26a5c2e114ea3ab89feed061f65b976df69c7->leave($__internal_83cecc4e49722c7d266c515e75c26a5c2e114ea3ab89feed061f65b976df69c7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5837a81bdad0580b064ac3ea6529e428ac5131b22d0e41c3dbb3033f553b9ea7 = $this->env->getExtension("native_profiler");
        $__internal_5837a81bdad0580b064ac3ea6529e428ac5131b22d0e41c3dbb3033f553b9ea7->enter($__internal_5837a81bdad0580b064ac3ea6529e428ac5131b22d0e41c3dbb3033f553b9ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_5837a81bdad0580b064ac3ea6529e428ac5131b22d0e41c3dbb3033f553b9ea7->leave($__internal_5837a81bdad0580b064ac3ea6529e428ac5131b22d0e41c3dbb3033f553b9ea7_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9ae1f067e8f51843475d329addd8c5f02243762f7293ff39622e091de49c7e9 = $this->env->getExtension("native_profiler");
        $__internal_a9ae1f067e8f51843475d329addd8c5f02243762f7293ff39622e091de49c7e9->enter($__internal_a9ae1f067e8f51843475d329addd8c5f02243762f7293ff39622e091de49c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9ae1f067e8f51843475d329addd8c5f02243762f7293ff39622e091de49c7e9->leave($__internal_a9ae1f067e8f51843475d329addd8c5f02243762f7293ff39622e091de49c7e9_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18cb05c5a8fbfcd4a7697e825a8ef338faa403240fa1d918ce68328eacd5b7fa = $this->env->getExtension("native_profiler");
        $__internal_18cb05c5a8fbfcd4a7697e825a8ef338faa403240fa1d918ce68328eacd5b7fa->enter($__internal_18cb05c5a8fbfcd4a7697e825a8ef338faa403240fa1d918ce68328eacd5b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
                            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_18cb05c5a8fbfcd4a7697e825a8ef338faa403240fa1d918ce68328eacd5b7fa->leave($__internal_18cb05c5a8fbfcd4a7697e825a8ef338faa403240fa1d918ce68328eacd5b7fa_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 21,  130 => 20,  126 => 19,  116 => 18,  105 => 17,  96 => 11,  92 => 10,  88 => 9,  84 => 8,  79 => 7,  73 => 6,  61 => 5,  52 => 22,  49 => 18,  47 => 17,  41 => 14,  38 => 13,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/jquery-1.10.2.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/main.js') }}"></script>*/
/*                 {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}<script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/jquery.js') }}"></script>*/
/*                             <script src="{{ asset('bundles/js/jquery-1.10.2.js') }}"></script>*/
/*  <script src="{{ asset('bundles/js/bootstrap.min.js') }}"></script>{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
