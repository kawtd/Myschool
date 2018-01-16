<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e77ed11b2751c05443b2d5fe1c174118e94d5a3f880c6e1577d09f22aa3054b5 extends Twig_Template
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
        $__internal_abe8dc06aa716c755b0f076ff305267d4a5fef60306d6e75733508854fd3d842 = $this->env->getExtension("native_profiler");
        $__internal_abe8dc06aa716c755b0f076ff305267d4a5fef60306d6e75733508854fd3d842->enter($__internal_abe8dc06aa716c755b0f076ff305267d4a5fef60306d6e75733508854fd3d842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abe8dc06aa716c755b0f076ff305267d4a5fef60306d6e75733508854fd3d842->leave($__internal_abe8dc06aa716c755b0f076ff305267d4a5fef60306d6e75733508854fd3d842_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d24e6c83d34c767837f928156892c8cb86ec2ee2d854569347dec380b9532dbd = $this->env->getExtension("native_profiler");
        $__internal_d24e6c83d34c767837f928156892c8cb86ec2ee2d854569347dec380b9532dbd->enter($__internal_d24e6c83d34c767837f928156892c8cb86ec2ee2d854569347dec380b9532dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
   <div class=\"container d\" >
        <h2 class=\"form-signin-heading \">Connecter</h2>
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label  for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"col-md-3 form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"col-md-6 form-control\" id=\"password\" name=\"_password\" required=\"required\" /><br><br>  
    <div class=\"col-md-8\"></div>
    <input type=\"checkbox\" class=\"\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>

    <input type=\"submit\" class=\"btn btn-primary \"id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /><br>
    ";
        // line 25
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 26
            echo "        <span class=\"col-md-2 \" ></span>
        <div style=\"color: red;font-size: 18px;\" >";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 29
        echo "</form>
     </div>
      <style>
      .d{
          width: 400px;
          height: 500px;
      }
  </style>
";
        
        $__internal_d24e6c83d34c767837f928156892c8cb86ec2ee2d854569347dec380b9532dbd->leave($__internal_d24e6c83d34c767837f928156892c8cb86ec2ee2d854569347dec380b9532dbd_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5304290522d4da6c2bc7f4205a695fc41500bec214d70d21bf66af8487058319 = $this->env->getExtension("native_profiler");
        $__internal_5304290522d4da6c2bc7f4205a695fc41500bec214d70d21bf66af8487058319->enter($__internal_5304290522d4da6c2bc7f4205a695fc41500bec214d70d21bf66af8487058319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5304290522d4da6c2bc7f4205a695fc41500bec214d70d21bf66af8487058319->leave($__internal_5304290522d4da6c2bc7f4205a695fc41500bec214d70d21bf66af8487058319_prof);

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
        return array (  123 => 7,  119 => 6,  114 => 5,  108 => 4,  93 => 29,  88 => 27,  85 => 26,  83 => 25,  79 => 24,  74 => 22,  67 => 18,  62 => 16,  58 => 15,  53 => 13,  49 => 12,  44 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/*     <input type="submit" class="btn btn-primary "id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" /><br>*/
/*     {% if error %}*/
/*         <span class="col-md-2 " ></span>*/
/*         <div style="color: red;font-size: 18px;" >{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
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
