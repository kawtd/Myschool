<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b398d9ede06a7760cec55d87ae0b5d9c45951abdfa09463a531028dc5f7059c5 extends Twig_Template
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
        $__internal_18178f0f20d2af649eb558ad79c45f9ca677b2e5f4282840fb37f548577b6927 = $this->env->getExtension("native_profiler");
        $__internal_18178f0f20d2af649eb558ad79c45f9ca677b2e5f4282840fb37f548577b6927->enter($__internal_18178f0f20d2af649eb558ad79c45f9ca677b2e5f4282840fb37f548577b6927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18178f0f20d2af649eb558ad79c45f9ca677b2e5f4282840fb37f548577b6927->leave($__internal_18178f0f20d2af649eb558ad79c45f9ca677b2e5f4282840fb37f548577b6927_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44a12456b66631e2f4fa7b9a2afe8a880b891870106f652bc7b872cd59588f02 = $this->env->getExtension("native_profiler");
        $__internal_44a12456b66631e2f4fa7b9a2afe8a880b891870106f652bc7b872cd59588f02->enter($__internal_44a12456b66631e2f4fa7b9a2afe8a880b891870106f652bc7b872cd59588f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
   <div class=\"container d\" >


        <h2 class=\"form-signin-heading \">Connecter</h2>
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label  for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"col-md-3 form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

    <label for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"col-md-6 form-control\" id=\"password\" name=\"_password\" required=\"required\" /><br><br>  
    <div class=\"col-md-8\"></div>
    <input type=\"checkbox\" class=\"\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>
       ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 26
            echo "                  <div class=\"alert alert-danger\">
   ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
        
        
";
        }
        // line 32
        echo "    <input type=\"submit\" class=\"btn btn-primary \"id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /><br>
    
</form>
     </div>
      <style>
      .d{
          width: 400px;
          height: 500px;
      }
  </style>
";
        
        $__internal_44a12456b66631e2f4fa7b9a2afe8a880b891870106f652bc7b872cd59588f02->leave($__internal_44a12456b66631e2f4fa7b9a2afe8a880b891870106f652bc7b872cd59588f02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cdaf319bdbf594b9254dbc62303ac1f6e6837beb89980b8e21527f2c34acc28 = $this->env->getExtension("native_profiler");
        $__internal_1cdaf319bdbf594b9254dbc62303ac1f6e6837beb89980b8e21527f2c34acc28->enter($__internal_1cdaf319bdbf594b9254dbc62303ac1f6e6837beb89980b8e21527f2c34acc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1cdaf319bdbf594b9254dbc62303ac1f6e6837beb89980b8e21527f2c34acc28->leave($__internal_1cdaf319bdbf594b9254dbc62303ac1f6e6837beb89980b8e21527f2c34acc28_prof);

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
        return array (  127 => 7,  123 => 6,  118 => 5,  112 => 4,  93 => 32,  85 => 27,  82 => 26,  80 => 25,  76 => 24,  69 => 20,  64 => 18,  60 => 17,  55 => 15,  51 => 14,  44 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/*    <div class="container d" >*/
/* */
/* */
/*         <h2 class="form-signin-heading ">Connecter</h2>*/
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label  for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="text" class="col-md-3 form-control" id="username" name="_username" value="{{ last_username }}" required="required" /><br>*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="password" class="col-md-6 form-control" id="password" name="_password" required="required" /><br><br>  */
/*     <div class="col-md-8"></div>*/
/*     <input type="checkbox" class="" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label><br>*/
/*        {% if error %}*/
/*                   <div class="alert alert-danger">*/
/*    {{ error|trans({}, 'FOSUserBundle') }}*/
/* </div>*/
/*         */
/*         */
/* {% endif %}*/
/*     <input type="submit" class="btn btn-primary "id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" /><br>*/
/*     */
/* </form>*/
/*      </div>*/
/*       <style>*/
/*       .d{*/
/*           width: 400px;*/
/*           height: 500px;*/
/*       }*/
/*   </style>*/
/* {% endblock fos_user_content %}*/
/* */
