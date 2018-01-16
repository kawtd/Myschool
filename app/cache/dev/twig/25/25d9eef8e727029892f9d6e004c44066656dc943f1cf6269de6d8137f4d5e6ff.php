<?php

/* MyschoolBundle:Default:ens.html.twig */
class __TwigTemplate_ae073c5ca16bd6ed63363ea4dd8bb2530c78835d588ea1d657ac8f4f76b34ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Default:ens.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'ar' => array($this, 'block_ar'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d5d4ecd1eef40ab8178c7ebe1d8b9028cc5a5df9673b821292df65f635fce11 = $this->env->getExtension("native_profiler");
        $__internal_5d5d4ecd1eef40ab8178c7ebe1d8b9028cc5a5df9673b821292df65f635fce11->enter($__internal_5d5d4ecd1eef40ab8178c7ebe1d8b9028cc5a5df9673b821292df65f635fce11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Default:ens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5d4ecd1eef40ab8178c7ebe1d8b9028cc5a5df9673b821292df65f635fce11->leave($__internal_5d5d4ecd1eef40ab8178c7ebe1d8b9028cc5a5df9673b821292df65f635fce11_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_863fa467d1a3bdcf5363d58f4552df845f36d23a0b57e56adfba47b59d806ace = $this->env->getExtension("native_profiler");
        $__internal_863fa467d1a3bdcf5363d58f4552df845f36d23a0b57e56adfba47b59d806ace->enter($__internal_863fa467d1a3bdcf5363d58f4552df845f36d23a0b57e56adfba47b59d806ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/custom.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_863fa467d1a3bdcf5363d58f4552df845f36d23a0b57e56adfba47b59d806ace->leave($__internal_863fa467d1a3bdcf5363d58f4552df845f36d23a0b57e56adfba47b59d806ace_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_67896d327c4b89644fbdffa347bb7042c77808e6f0a16c36d2d6476a69d33107 = $this->env->getExtension("native_profiler");
        $__internal_67896d327c4b89644fbdffa347bb7042c77808e6f0a16c36d2d6476a69d33107->enter($__internal_67896d327c4b89644fbdffa347bb7042c77808e6f0a16c36d2d6476a69d33107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "





        <body class=\"nav-md\">
    <div class=\"container body\">
        <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
            <div class=\"left_col scroll-view\">
                <div class=\"navbar nav_title\" style=\"border: 0;\">
                    <span class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>STS</span></span>
                </div>

                <div class=\"clearfix\"></div>

                <!-- menu profile quick info -->
                <div class=\"profile clearfix\">
                    <div class=\"profile_pic\">

                    </div>
                    <div class=\"profile_info\">
                        <span>Welcome,</span>
                        <h2></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                    <div class=\"menu_section\">
                        <h3>General</h3>
                        <ul class=\"nav side-menu\">



                            <div class=\"dropdown\">
                                <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> Note  <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("note_index");
        echo "\">list note </a></li>
                                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("note_new");
        echo "\">ajouter note </a></li>
                                </ul>
                            </div>
                            <div class=\"dropdown\">
                                <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> absonce  <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("matiere_index");
        echo "\">list matiere </a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\">ajouter matiere </a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->


                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">
            <div class=\"nav_menu\">
                <nav>
                    <div class=\"nav toggle\">
                        <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>

                    </div>

                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 97
        $this->displayBlock('ar', $context, $blocks);
        // line 100
        echo "                        <li class=\"\">

                            <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">

                                <span class=\" fa fa-angle-down\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-usermenu pull-right\">

                                <li>
                                    <a href=\"/Biblio/Parametre\">

                                        <span>parametre</span>
                                    </a>
                                </li>

                                <li><a href=";
        // line 115
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "><i class=\"fa fa-sign-out pull-right\"></i> deconnecter</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            <!-- top tiles -->
            <div class=\"row tile_count\">
                <div class=\"x_content\">



                    ";
        // line 133
        $this->displayBlock('menu', $context, $blocks);
        // line 136
        echo "

                </div>
            </div>
        </div>
        <!-- page content -->



        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/custom.min.js\""), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>



    ";
        
        $__internal_67896d327c4b89644fbdffa347bb7042c77808e6f0a16c36d2d6476a69d33107->leave($__internal_67896d327c4b89644fbdffa347bb7042c77808e6f0a16c36d2d6476a69d33107_prof);

    }

    // line 97
    public function block_ar($context, array $blocks = array())
    {
        $__internal_50fc7276c4cd28df8c1422c00f2e40aafb845bcbff32dda1847a3d9b68a3d671 = $this->env->getExtension("native_profiler");
        $__internal_50fc7276c4cd28df8c1422c00f2e40aafb845bcbff32dda1847a3d9b68a3d671->enter($__internal_50fc7276c4cd28df8c1422c00f2e40aafb845bcbff32dda1847a3d9b68a3d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ar"));

        // line 98
        echo "
                        ";
        
        $__internal_50fc7276c4cd28df8c1422c00f2e40aafb845bcbff32dda1847a3d9b68a3d671->leave($__internal_50fc7276c4cd28df8c1422c00f2e40aafb845bcbff32dda1847a3d9b68a3d671_prof);

    }

    // line 133
    public function block_menu($context, array $blocks = array())
    {
        $__internal_100ebdb72420f7ba4503f34f7d074f30cee71c7ad26ac1bd9ca6e6d0ab6a5f4c = $this->env->getExtension("native_profiler");
        $__internal_100ebdb72420f7ba4503f34f7d074f30cee71c7ad26ac1bd9ca6e6d0ab6a5f4c->enter($__internal_100ebdb72420f7ba4503f34f7d074f30cee71c7ad26ac1bd9ca6e6d0ab6a5f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 134
        echo "
                    ";
        
        $__internal_100ebdb72420f7ba4503f34f7d074f30cee71c7ad26ac1bd9ca6e6d0ab6a5f4c->leave($__internal_100ebdb72420f7ba4503f34f7d074f30cee71c7ad26ac1bd9ca6e6d0ab6a5f4c_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Default:ens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 134,  311 => 133,  303 => 98,  297 => 97,  285 => 153,  281 => 152,  277 => 151,  273 => 150,  269 => 149,  265 => 148,  261 => 147,  257 => 146,  253 => 145,  242 => 136,  240 => 133,  219 => 115,  202 => 100,  200 => 97,  172 => 72,  168 => 71,  159 => 65,  155 => 64,  111 => 22,  105 => 21,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/css/bootstrap.css') }}">*/
/*     <script src="{{ asset('bundles/js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/js/bootstrap.js') }}"></script>*/
/*     <script src="{{ asset('bundles/js/jquery-1.10.2.js') }}"></script>*/
/*     <script src="{{ asset('bundles/js/main.js') }}"></script>*/
/* */
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/bootstrap/dist/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/font-awesome/css/font-awesome.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/nprogress/nprogress.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/iCheck/skins/flat/green.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/jqvmap/dist/jqvmap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/vendors/bootstrap-daterangepicker/daterangepicker.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/admin/css/custom.min.css') }}">*/
/* {% endblock %}*/
/*     {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*         <body class="nav-md">*/
/*     <div class="container body">*/
/*         <div class="main_container">*/
/*         <div class="col-md-3 left_col">*/
/*             <div class="left_col scroll-view">*/
/*                 <div class="navbar nav_title" style="border: 0;">*/
/*                     <span class="site_title"><i class="fa fa-paw"></i> <span>STS</span></span>*/
/*                 </div>*/
/* */
/*                 <div class="clearfix"></div>*/
/* */
/*                 <!-- menu profile quick info -->*/
/*                 <div class="profile clearfix">*/
/*                     <div class="profile_pic">*/
/* */
/*                     </div>*/
/*                     <div class="profile_info">*/
/*                         <span>Welcome,</span>*/
/*                         <h2></h2>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /menu profile quick info -->*/
/* */
/*                 <br />*/
/* */
/*                 <!-- sidebar menu -->*/
/*                 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*                     <div class="menu_section">*/
/*                         <h3>General</h3>*/
/*                         <ul class="nav side-menu">*/
/* */
/* */
/* */
/*                             <div class="dropdown">*/
/*                                 <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> Note  <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="dropdown-menu" style="width: 222px;">*/
/*                                     <li><a href="{{ path('note_index') }}">list note </a></li>*/
/*                                     <li><a href="{{ path('note_new') }}">ajouter note </a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="dropdown">*/
/*                                 <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> absonce  <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="dropdown-menu" style="width: 222px;">*/
/*                                     <li><a href="{{ path('matiere_index') }}">list matiere </a></li>*/
/*                                     <li><a href="{{ path('matiere_new') }}">ajouter matiere </a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*                 <!-- /sidebar menu -->*/
/* */
/* */
/*                 <!-- /menu footer buttons -->*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- top navigation -->*/
/*         <div class="top_nav">*/
/*             <div class="nav_menu">*/
/*                 <nav>*/
/*                     <div class="nav toggle">*/
/*                         <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/* */
/*                     </div>*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         {% block ar %}*/
/* */
/*                         {% endblock %}*/
/*                         <li class="">*/
/* */
/*                             <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/* */
/*                                 <span class=" fa fa-angle-down"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/* */
/*                                 <li>*/
/*                                     <a href="/Biblio/Parametre">*/
/* */
/*                                         <span>parametre</span>*/
/*                                     </a>*/
/*                                 </li>*/
/* */
/*                                 <li><a href={{ path('fos_user_security_logout')}}><i class="fa fa-sign-out pull-right"></i> deconnecter</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/* */
/*                     </ul>*/
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /top navigation -->*/
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*             <!-- top tiles -->*/
/*             <div class="row tile_count">*/
/*                 <div class="x_content">*/
/* */
/* */
/* */
/*                     {% block menu %}*/
/* */
/*                     {% endblock %}*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- page content -->*/
/* */
/* */
/* */
/*         <script src="{{ asset('bundles/admin/css/vendors/jquery/dist/jquery.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/js/custom.min.js"') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/fastclick/lib/fastclick.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/nprogress/nprogress.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/Chart.js/dist/Chart.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/gauge.js/dist/gauge.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/*         <script src="{{ asset('bundles/admin/css/vendors/skycons/skycons.js') }}"></script>*/
/* */
/* */
/* */
/*     {% endblock %}*/
