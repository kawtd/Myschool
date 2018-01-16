<?php

/* MyschoolBundle:Default:affichage.html.twig */
class __TwigTemplate_21b60117e6ca6565707f5f61297a3e13dc85be71073edaa0fedce5af15eee283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyschoolBundle:Default:affichage.html.twig", 1);
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
        $__internal_524929b81a8bfe345f8c96c76ec52f693516d6894a7eff02b91fc142b9e268f8 = $this->env->getExtension("native_profiler");
        $__internal_524929b81a8bfe345f8c96c76ec52f693516d6894a7eff02b91fc142b9e268f8->enter($__internal_524929b81a8bfe345f8c96c76ec52f693516d6894a7eff02b91fc142b9e268f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Default:affichage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_524929b81a8bfe345f8c96c76ec52f693516d6894a7eff02b91fc142b9e268f8->leave($__internal_524929b81a8bfe345f8c96c76ec52f693516d6894a7eff02b91fc142b9e268f8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3fa7a42c377ad99f95be1c5ad08413c2d1b1d6dfec255f6bdd8b2e502c520a5 = $this->env->getExtension("native_profiler");
        $__internal_b3fa7a42c377ad99f95be1c5ad08413c2d1b1d6dfec255f6bdd8b2e502c520a5->enter($__internal_b3fa7a42c377ad99f95be1c5ad08413c2d1b1d6dfec255f6bdd8b2e502c520a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b3fa7a42c377ad99f95be1c5ad08413c2d1b1d6dfec255f6bdd8b2e502c520a5->leave($__internal_b3fa7a42c377ad99f95be1c5ad08413c2d1b1d6dfec255f6bdd8b2e502c520a5_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_243d65939ea3c35406bdb1b44cd271c3215d6117de336b1042facdf766b02892 = $this->env->getExtension("native_profiler");
        $__internal_243d65939ea3c35406bdb1b44cd271c3215d6117de336b1042facdf766b02892->enter($__internal_243d65939ea3c35406bdb1b44cd271c3215d6117de336b1042facdf766b02892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

                                <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> Enseignant  <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("list_enseignant");
        echo "\">list Enseignant </a></li>
                                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("new_E");
        echo "\">ajouter Enseignant </a></li>
                                </ul>
                            </div>
                             <div class=\"dropdown\">
                                <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> Student  <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("student_list");
        echo "\">list Student </a></li>
                                    <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("student_new");
        echo "\">ajouter Student </a></li>
                                </ul>
                            </div>
                                <div class=\"dropdown\">
                                    <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> Classe  <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                        <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("classe_list");
        echo "\">list Classe </a></li>
                                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\">ajouter Classe </a></li>
                                    </ul>
                                </div>
                                <div class=\"dropdown\">
                                    <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> Specialite  <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("Specialite_list");
        echo "\">list Specialite </a></li>
                                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("Specialite_new");
        echo "\">ajouter Specialite </a></li>
                                    </ul>
                                </div>

                                <div class=\"dropdown\">
                                    <a class=\"btn btn-primary dropdown-toggle\"  data-toggle=\"dropdown\" style=\"width: 222px; \"><i class=\"fa fa-edit\"></i> Matiere  <span class=\"fa fa-chevron-down\"></span></a>
                                    <ul class=\"dropdown-menu\" style=\"width: 222px;\">
                                        <li><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("matiere_index");
        echo "\">list matiere </a></li>
                                        <li><a href=\"";
        // line 94
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
        // line 119
        $this->displayBlock('ar', $context, $blocks);
        // line 122
        echo "                            <li class=\"\">

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
        // line 137
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
        // line 155
        $this->displayBlock('menu', $context, $blocks);
        // line 158
        echo "

                    </div>
                </div>
            </div>
            <!-- page content -->



    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/js/custom.min.js\""), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/admin/css/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>



";
        
        $__internal_243d65939ea3c35406bdb1b44cd271c3215d6117de336b1042facdf766b02892->leave($__internal_243d65939ea3c35406bdb1b44cd271c3215d6117de336b1042facdf766b02892_prof);

    }

    // line 119
    public function block_ar($context, array $blocks = array())
    {
        $__internal_22500dfe544e7a3bbe4cfdd671bc9f6cd6d65e85137cf0f04f5dffd1416260bb = $this->env->getExtension("native_profiler");
        $__internal_22500dfe544e7a3bbe4cfdd671bc9f6cd6d65e85137cf0f04f5dffd1416260bb->enter($__internal_22500dfe544e7a3bbe4cfdd671bc9f6cd6d65e85137cf0f04f5dffd1416260bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ar"));

        // line 120
        echo "
                            ";
        
        $__internal_22500dfe544e7a3bbe4cfdd671bc9f6cd6d65e85137cf0f04f5dffd1416260bb->leave($__internal_22500dfe544e7a3bbe4cfdd671bc9f6cd6d65e85137cf0f04f5dffd1416260bb_prof);

    }

    // line 155
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fff114273ce7c85f74f60f7854a8121f2a60d2a7a7fae0142988d17bf9038491 = $this->env->getExtension("native_profiler");
        $__internal_fff114273ce7c85f74f60f7854a8121f2a60d2a7a7fae0142988d17bf9038491->enter($__internal_fff114273ce7c85f74f60f7854a8121f2a60d2a7a7fae0142988d17bf9038491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 156
        echo "
                           ";
        
        $__internal_fff114273ce7c85f74f60f7854a8121f2a60d2a7a7fae0142988d17bf9038491->leave($__internal_fff114273ce7c85f74f60f7854a8121f2a60d2a7a7fae0142988d17bf9038491_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Default:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 156,  351 => 155,  343 => 120,  337 => 119,  325 => 175,  321 => 174,  317 => 173,  313 => 172,  309 => 171,  305 => 170,  301 => 169,  297 => 168,  293 => 167,  282 => 158,  280 => 155,  259 => 137,  242 => 122,  240 => 119,  212 => 94,  208 => 93,  198 => 86,  194 => 85,  185 => 79,  181 => 78,  172 => 72,  168 => 71,  159 => 65,  155 => 64,  111 => 22,  105 => 21,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*                 {% endblock %}*/
/*     {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <body class="nav-md">*/
/*     <div class="container body">*/
/*         <div class="main_container">*/
/*             <div class="col-md-3 left_col">*/
/*                 <div class="left_col scroll-view">*/
/*                     <div class="navbar nav_title" style="border: 0;">*/
/*                         <span class="site_title"><i class="fa fa-paw"></i> <span>STS</span></span>*/
/*                     </div>*/
/* */
/*                     <div class="clearfix"></div>*/
/* */
/*                     <!-- menu profile quick info -->*/
/*                     <div class="profile clearfix">*/
/*                         <div class="profile_pic">*/
/* */
/*                         </div>*/
/*                         <div class="profile_info">*/
/*                             <span>Welcome,</span>*/
/*                             <h2></h2>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /menu profile quick info -->*/
/* */
/*                     <br />*/
/* */
/*                     <!-- sidebar menu -->*/
/*                     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*                         <div class="menu_section">*/
/*                             <h3>General</h3>*/
/*                             <ul class="nav side-menu">*/
/* */
/* */
/*                             <div class="dropdown">*/
/* */
/*                                 <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> Enseignant  <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="dropdown-menu" style="width: 222px;">*/
/*                                     <li><a href="{{ path('list_enseignant') }}">list Enseignant </a></li>*/
/*                                     <li><a href="{{ path('new_E') }}">ajouter Enseignant </a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                              <div class="dropdown">*/
/*                                 <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> Student  <span class="fa fa-chevron-down"></span></a>*/
/*                                 <ul class="dropdown-menu" style="width: 222px;">*/
/*                                     <li><a href="{{ path('student_list') }}">list Student </a></li>*/
/*                                     <li><a href="{{ path('student_new') }}">ajouter Student </a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                                 <div class="dropdown">*/
/*                                     <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> Classe  <span class="fa fa-chevron-down"></span></a>*/
/*                                     <ul class="dropdown-menu" style="width: 222px;">*/
/*                                         <li><a href="{{ path('classe_list') }}">list Classe </a></li>*/
/*                                         <li><a href="{{ path('classe_new') }}">ajouter Classe </a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="dropdown">*/
/*                                     <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> Specialite  <span class="fa fa-chevron-down"></span></a>*/
/*                                     <ul class="dropdown-menu" style="width: 222px;">*/
/*                                         <li><a href="{{ path('Specialite_list') }}">list Specialite </a></li>*/
/*                                         <li><a href="{{ path('Specialite_new') }}">ajouter Specialite </a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/* */
/*                                 <div class="dropdown">*/
/*                                     <a class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" style="width: 222px; "><i class="fa fa-edit"></i> Matiere  <span class="fa fa-chevron-down"></span></a>*/
/*                                     <ul class="dropdown-menu" style="width: 222px;">*/
/*                                         <li><a href="{{ path('matiere_index') }}">list matiere </a></li>*/
/*                                         <li><a href="{{ path('matiere_new') }}">ajouter matiere </a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </ul>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*                     <!-- /sidebar menu -->*/
/* */
/* */
/*                     <!-- /menu footer buttons -->*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- top navigation -->*/
/*             <div class="top_nav">*/
/*                 <div class="nav_menu">*/
/*                     <nav>*/
/*                         <div class="nav toggle">*/
/*                             <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/* */
/*                         </div>*/
/* */
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             {% block ar %}*/
/* */
/*                             {% endblock %}*/
/*                             <li class="">*/
/* */
/*                                 <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/* */
/*                                     <span class=" fa fa-angle-down"></span>*/
/*                                 </a>*/
/*                                 <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/* */
/*                                     <li>*/
/*                                         <a href="/Biblio/Parametre">*/
/* */
/*                                             <span>parametre</span>*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     <li><a href={{ path('fos_user_security_logout')}}><i class="fa fa-sign-out pull-right"></i> deconnecter</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/* */
/* */
/*                         </ul>*/
/*                     </nav>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /top navigation -->*/
/*             <!-- page content -->*/
/*             <div class="right_col" role="main">*/
/*                 <!-- top tiles -->*/
/*                 <div class="row tile_count">*/
/*                     <div class="x_content">*/
/* */
/* */
/* */
/*                            {% block menu %}*/
/* */
/*                            {% endblock %}*/
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- page content -->*/
/* */
/* */
/* */
/*     <script src="{{ asset('bundles/admin/css/vendors/jquery/dist/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/js/custom.min.js"') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/fastclick/lib/fastclick.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/nprogress/nprogress.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/Chart.js/dist/Chart.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/gauge.js/dist/gauge.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/admin/css/vendors/skycons/skycons.js') }}"></script>*/
/* */
/* */
/* */
/* {% endblock %}*/
