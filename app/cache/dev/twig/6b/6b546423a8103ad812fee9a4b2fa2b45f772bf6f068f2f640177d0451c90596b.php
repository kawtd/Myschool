<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_44d2a9c68899799b9e82c284d83c281f2786a6f7cd6fef26cb02139d1fcc4d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_794c04136d8d63919c2bd35c9b01fc7e7c73f6690e084b1d30c65642f78bd483 = $this->env->getExtension("native_profiler");
        $__internal_794c04136d8d63919c2bd35c9b01fc7e7c73f6690e084b1d30c65642f78bd483->enter($__internal_794c04136d8d63919c2bd35c9b01fc7e7c73f6690e084b1d30c65642f78bd483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794c04136d8d63919c2bd35c9b01fc7e7c73f6690e084b1d30c65642f78bd483->leave($__internal_794c04136d8d63919c2bd35c9b01fc7e7c73f6690e084b1d30c65642f78bd483_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2d29ef8f51ff92a843fb5f4b1d1bf4843ec3be930b59a5f0716927b4205d251 = $this->env->getExtension("native_profiler");
        $__internal_b2d29ef8f51ff92a843fb5f4b1d1bf4843ec3be930b59a5f0716927b4205d251->enter($__internal_b2d29ef8f51ff92a843fb5f4b1d1bf4843ec3be930b59a5f0716927b4205d251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"col-md-6\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"col-md-6\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" class=\"col-md-6\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" class=\"btn btn-primary\"id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
    
";
        
        $__internal_b2d29ef8f51ff92a843fb5f4b1d1bf4843ec3be930b59a5f0716927b4205d251->leave($__internal_b2d29ef8f51ff92a843fb5f4b1d1bf4843ec3be930b59a5f0716927b4205d251_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96fbc4dd583a88f064c895d01e7ed4b293502ff1a6722778f484c902f28a49f3 = $this->env->getExtension("native_profiler");
        $__internal_96fbc4dd583a88f064c895d01e7ed4b293502ff1a6722778f484c902f28a49f3->enter($__internal_96fbc4dd583a88f064c895d01e7ed4b293502ff1a6722778f484c902f28a49f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "                   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
                           <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
                           <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                ";
        
        $__internal_96fbc4dd583a88f064c895d01e7ed4b293502ff1a6722778f484c902f28a49f3->leave($__internal_96fbc4dd583a88f064c895d01e7ed4b293502ff1a6722778f484c902f28a49f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 7,  107 => 6,  102 => 5,  96 => 4,  85 => 25,  80 => 23,  73 => 19,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  52 => 12,  46 => 10,  44 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% block stylesheets %}*/
/*                    <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*                            <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*                            <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*                 {% endblock %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="text" class="col-md-6" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="password" class="col-md-6" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" class="col-md-6" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*     <input type="submit" class="btn btn-primary"id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* </form>*/
/*     */
/* {% endblock fos_user_content %}*/
/* */
