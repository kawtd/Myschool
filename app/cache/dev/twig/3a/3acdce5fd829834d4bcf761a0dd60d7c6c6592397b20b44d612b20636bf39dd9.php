<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_815f2866e24bb85ac3904215811f9ab668f9462c9df8959117633a5a73b48fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe04d90af30504a8881ff18da164284922f30120ad60002fa2499094e7b96308 = $this->env->getExtension("native_profiler");
        $__internal_fe04d90af30504a8881ff18da164284922f30120ad60002fa2499094e7b96308->enter($__internal_fe04d90af30504a8881ff18da164284922f30120ad60002fa2499094e7b96308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        <div>
            ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 18
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "        </div>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        <div>
            ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "        </div>
    </body>
</html>
";
        
        $__internal_fe04d90af30504a8881ff18da164284922f30120ad60002fa2499094e7b96308->leave($__internal_fe04d90af30504a8881ff18da164284922f30120ad60002fa2499094e7b96308_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_35762adc0777786403c3a89ac2ef8d273ad847935ac54147c1608c544191aa26 = $this->env->getExtension("native_profiler");
        $__internal_35762adc0777786403c3a89ac2ef8d273ad847935ac54147c1608c544191aa26->enter($__internal_35762adc0777786403c3a89ac2ef8d273ad847935ac54147c1608c544191aa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "        ";
        
        $__internal_35762adc0777786403c3a89ac2ef8d273ad847935ac54147c1608c544191aa26->leave($__internal_35762adc0777786403c3a89ac2ef8d273ad847935ac54147c1608c544191aa26_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5803dd80c4013a48fc45503fe6bfc625d496817b19048b97ebd629afcb1263b2 = $this->env->getExtension("native_profiler");
        $__internal_5803dd80c4013a48fc45503fe6bfc625d496817b19048b97ebd629afcb1263b2->enter($__internal_5803dd80c4013a48fc45503fe6bfc625d496817b19048b97ebd629afcb1263b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        
        $__internal_5803dd80c4013a48fc45503fe6bfc625d496817b19048b97ebd629afcb1263b2->leave($__internal_5803dd80c4013a48fc45503fe6bfc625d496817b19048b97ebd629afcb1263b2_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cd06f5755135209ff67fa787f8839be94986daf00983e468668d7c88f578a12 = $this->env->getExtension("native_profiler");
        $__internal_9cd06f5755135209ff67fa787f8839be94986daf00983e468668d7c88f578a12->enter($__internal_9cd06f5755135209ff67fa787f8839be94986daf00983e468668d7c88f578a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "            ";
        
        $__internal_9cd06f5755135209ff67fa787f8839be94986daf00983e468668d7c88f578a12->leave($__internal_9cd06f5755135209ff67fa787f8839be94986daf00983e468668d7c88f578a12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  142 => 31,  135 => 10,  129 => 9,  122 => 6,  116 => 5,  106 => 33,  104 => 31,  100 => 29,  94 => 28,  85 => 25,  80 => 24,  75 => 23,  71 => 22,  67 => 20,  59 => 18,  53 => 15,  49 => 14,  44 => 13,  42 => 12,  39 => 11,  37 => 9,  33 => 7,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         {% block head %}*/
/*         {% endblock head %}*/
/*     </head>*/
/*     <body>*/
/*     {% block body %}*/
/*     {% endblock body %}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
