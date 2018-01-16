<?php

/* base.html.twig */
class __TwigTemplate_e22d8860ebd720b4b9464a43f862f41fe5e97b5c2607d757696264fbc9a69ef6 extends Twig_Template
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
        $__internal_84271973aea157775ebe5601e425b7da87595e9c8983130de3b223f2ada2b98c = $this->env->getExtension("native_profiler");
        $__internal_84271973aea157775ebe5601e425b7da87595e9c8983130de3b223f2ada2b98c->enter($__internal_84271973aea157775ebe5601e425b7da87595e9c8983130de3b223f2ada2b98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_84271973aea157775ebe5601e425b7da87595e9c8983130de3b223f2ada2b98c->leave($__internal_84271973aea157775ebe5601e425b7da87595e9c8983130de3b223f2ada2b98c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52df42b6affeae189f72ce23e400412d4c8f03908dede299e69c83a404f2fab8 = $this->env->getExtension("native_profiler");
        $__internal_52df42b6affeae189f72ce23e400412d4c8f03908dede299e69c83a404f2fab8->enter($__internal_52df42b6affeae189f72ce23e400412d4c8f03908dede299e69c83a404f2fab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_52df42b6affeae189f72ce23e400412d4c8f03908dede299e69c83a404f2fab8->leave($__internal_52df42b6affeae189f72ce23e400412d4c8f03908dede299e69c83a404f2fab8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7b3fe5578a7dd44b9952e6a8cd34deee18d896c47c97db3e7b04cf346852308 = $this->env->getExtension("native_profiler");
        $__internal_f7b3fe5578a7dd44b9952e6a8cd34deee18d896c47c97db3e7b04cf346852308->enter($__internal_f7b3fe5578a7dd44b9952e6a8cd34deee18d896c47c97db3e7b04cf346852308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f7b3fe5578a7dd44b9952e6a8cd34deee18d896c47c97db3e7b04cf346852308->leave($__internal_f7b3fe5578a7dd44b9952e6a8cd34deee18d896c47c97db3e7b04cf346852308_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddb51ce8c0da41c36689969088326ec2913ba71a421f2821c4028a0e5ed77774 = $this->env->getExtension("native_profiler");
        $__internal_ddb51ce8c0da41c36689969088326ec2913ba71a421f2821c4028a0e5ed77774->enter($__internal_ddb51ce8c0da41c36689969088326ec2913ba71a421f2821c4028a0e5ed77774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddb51ce8c0da41c36689969088326ec2913ba71a421f2821c4028a0e5ed77774->leave($__internal_ddb51ce8c0da41c36689969088326ec2913ba71a421f2821c4028a0e5ed77774_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab61a69c0d5daed0fc783ea610e5c9eb9ca8216a67aa37fe6aa8d77fc898780c = $this->env->getExtension("native_profiler");
        $__internal_ab61a69c0d5daed0fc783ea610e5c9eb9ca8216a67aa37fe6aa8d77fc898780c->enter($__internal_ab61a69c0d5daed0fc783ea610e5c9eb9ca8216a67aa37fe6aa8d77fc898780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ab61a69c0d5daed0fc783ea610e5c9eb9ca8216a67aa37fe6aa8d77fc898780c->leave($__internal_ab61a69c0d5daed0fc783ea610e5c9eb9ca8216a67aa37fe6aa8d77fc898780c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
