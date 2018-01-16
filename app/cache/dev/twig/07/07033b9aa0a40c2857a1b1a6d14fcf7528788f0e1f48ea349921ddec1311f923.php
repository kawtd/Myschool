<?php

/* MyschoolBundle:Security:login_index.html.twig */
class __TwigTemplate_ff2bb57d0727fda4f5c5b30ed4e91cecd781fa1c0649bf5a0d6a75d7e6d2eb34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MyschoolBundle:Security:login_index.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92043cb8af389faba6cf6d4ca2fd453f3692c4ed64da2b58b6f9ca8ced48572e = $this->env->getExtension("native_profiler");
        $__internal_92043cb8af389faba6cf6d4ca2fd453f3692c4ed64da2b58b6f9ca8ced48572e->enter($__internal_92043cb8af389faba6cf6d4ca2fd453f3692c4ed64da2b58b6f9ca8ced48572e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyschoolBundle:Security:login_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92043cb8af389faba6cf6d4ca2fd453f3692c4ed64da2b58b6f9ca8ced48572e->leave($__internal_92043cb8af389faba6cf6d4ca2fd453f3692c4ed64da2b58b6f9ca8ced48572e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1bb42e7996a6637e189789e15037615b5c35a42d8658ad4b0faabc0c59c1643 = $this->env->getExtension("native_profiler");
        $__internal_e1bb42e7996a6637e189789e15037615b5c35a42d8658ad4b0faabc0c59c1643->enter($__internal_e1bb42e7996a6637e189789e15037615b5c35a42d8658ad4b0faabc0c59c1643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\""), "html", null, true);
        echo "\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Latest compiled and minified JavaScript -->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    <!-- Facebook and Twitter integration -->

    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/animate.css"), "html", null, true);
        echo "\">
    <!-- Icomoon Icon Fonts-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/icomoon.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/magnific-popup.css"), "html", null, true);
        echo "\">

    <!-- Owl Carousel  -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

    <!-- Flexslider  -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/flexslider.css"), "html", null, true);
        echo "\">

    <!-- Pricing -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/pricing.css"), "html", null, true);
        echo "\">

    <!-- Theme style  -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/style.css"), "html", null, true);
        echo "\">

    <!-- Modernizr JS -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
";
        
        $__internal_e1bb42e7996a6637e189789e15037615b5c35a42d8658ad4b0faabc0c59c1643->leave($__internal_e1bb42e7996a6637e189789e15037615b5c35a42d8658ad4b0faabc0c59c1643_prof);

    }

    // line 48
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87e06d727e9021130a1fdc4aeaaeb541f7861225b7fb215baa0271862c93ed1c = $this->env->getExtension("native_profiler");
        $__internal_87e06d727e9021130a1fdc4aeaaeb541f7861225b7fb215baa0271862c93ed1c->enter($__internal_87e06d727e9021130a1fdc4aeaaeb541f7861225b7fb215baa0271862c93ed1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 49
        echo "


<div class=\"fh5co-loader\"></div>

<div id=\"page\">
    <nav class=\"fh5co-nav\" role=\"navigation\">
        <div class=\"top-menu\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-2\">
                        <div id=\"fh5co-logo\"><a href=\"index.html\"><i class=\"icon-study\"></i>Educ<span>.</span></a></div>
                    </div>
                    <div class=\"col-xs-10 text-right menu-1\">
                        <ul>
                            <li class=\"active\"><a href=\"index.html\">Home</a></li>
                            <li><a href=\"#\">Courses</a></li>
                            <li><a href=\"#\">Teacher</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">Contact</a></li>
                            <li ><button class=\" btn  btn-warning\t\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">Login</button></li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </nav>
    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modal Header</h4>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                        <label  for=\"username\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" class=\"col-md-3 form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" /><br>

                        <label for=\"password\">";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" class=\"col-md-6 form-control\" id=\"password\" name=\"_password\" required=\"required\" /><br><br>
                        <div class=\"col-md-8\"></div>
                        <input type=\"checkbox\" class=\"\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label><br>
                        ";
        // line 101
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 102
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </div>


                        ";
        }
        // line 108
        echo "                        <input type=\"submit\" class=\"btn btn-primary \"id=\"_submit\" name=\"_submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /><br>

                    </form>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>

        </div>
    </div>
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">

            <div class=\"item active\">
                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Los Angeles\" style=\"width:100%;\">
            </div>





            <div class=\"item\">
                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/2.jpg"), "html", null, true);
        echo "\" alt=\"Chicago\" style=\"width:100%;\">
            </div>


        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
</div>
<div class=\"container pos\">
    <div class=\"row\">
        <div class=\"col-md-7 col-sm-7\">

            <h1 class=\"title1\">Education for Kids</h1>
            <p class=\"sub-title\">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo<br> at susp, vivamus orci urna.</p>


        </div>
    </div>
</div>
<style type=\"text/css\" media=\"screen\">
    .pos{
        position: absolute;
        top: 200px;
        left: 350px;
    }
    .title1{
        font-size: 65px;

    }
    .sub-title{
        font-size: 20px;
    }
</style>


<div id=\"fh5co-course-categories\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 text-center animate-box\">
                <div class=\"services\">
                    <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/09.png"), "html", null, true);
        echo "\" style=\"width: 150px;\" alt=\"\">

                    <div class=\"desc\">
                        <br>
                        <h3><a href=\"#\">activity</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 text-center animate-box\">
                <div class=\"services\">
                    <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/10.png"), "html", null, true);
        echo "\" style=\"width: 100px;\" alt=\"\">
                    <div class=\"desc\">
                        <br>
                        <h3><a href=\"#\">Health &amp; Psychology</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4 col-sm-6 text-center animate-box\">
                <div class=\"services\">
                    <img src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/08.png"), "html", null, true);
        echo "\" style=\"width: 100px;\" alt=\"\">
                    <div class=\"desc\">
                        <br>
                        <h3><a href=\"#\">Education</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class=\"container\">
        <div class=\"row animate-box\">
            <div class=\"col-md-6 col-md-offset-3 text-center fh5co-heading\">
                <h2>Our Course</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 animate-box\">
                <div class=\"course\">
                    <a href=\"#\" class=\"course-img\" style=\"background-image: url(";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-1.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"desc\">
                        <h3><a href=\"#\">Web Master</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href=\"#\" class=\"btn btn-primary btn-sm btn-course\">Take A Course</a></span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 animate-box\">
                <div class=\"course\">
                    <a href=\"#\" class=\"course-img\" style=\"background-image: url(";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-2.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"desc\">
                        <h3><a href=\"#\">Business &amp; Accounting</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href=\"#\" class=\"btn btn-primary btn-sm btn-course\">Take A Course</a></span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 animate-box\">
                <div class=\"course\">
                    <a href=\"#\" class=\"course-img\" style=\"background-image: url(";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-3.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"desc\">
                        <h3><a href=\"#\">Science &amp; Technology</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href=\"#\" class=\"btn btn-primary btn-sm btn-course\">Take A Course</a></span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 animate-box\">
                <div class=\"course\">
                    <a href=\"#\" class=\"course-img\" style=\"background-image: url(";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-4.jpg"), "html", null, true);
        echo ");\">
                    </a>
                    <div class=\"desc\">
                        <h3><a href=\"#\">Health &amp; Psychology</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                        <span><a href=\"#\" class=\"btn btn-primary btn-sm btn-course\">Take A Course</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"fh5co-testimonial\" style=\"background-image: url(";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/school.jpg"), "html", null, true);
        echo ");\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row animate-box\">
            <div class=\"col-md-6 col-md-offset-3 text-center fh5co-heading\">
                <h2><span>Testimonials</span></h2>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <div class=\"row animate-box\">
                    <div class=\"owl-carousel owl-carousel-fullwidth\">
                        <div class=\"item\">
                            <div class=\"testimony-slide active text-center\">
                                <div class=\"user\" style=\"background-image: url(";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/person1.jpg)"), "html", null, true);
        echo ");\"></div>
                                <span>Mary Walker<br><small>Students</small></span>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-slide active text-center\">
                                <div class=\"user\" style=\"background-image: url(";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/person2.jpg"), "html", null, true);
        echo ");\"></div>
                                <span>Mike Smith<br><small>Students</small></span>
                                <blockquote>
                                    <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-slide active text-center\">
                                <div class=\"user\" style=\"background-image: url(";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/person3.jpg"), "html", null, true);
        echo ");\"></div>
                                <span>Rita Jones<br><small>Teacher</small></span>
                                <blockquote>
                                    <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id=\" fh5co-blog\" >
    <div class=\"container\">
        <div class=\"service-area section-padding\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"section-title-wrapper\">
                            <div class=\"col-md-6 col-md-offset-3 text-center fh5co-heading\">
                                <br>
                                <h3>Our Services</h3>
                                <p>Our best services for your kids</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4 hidden-sm hidden-xs\">
                        <div class=\"single-service-item-wrapper\">
                            <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/12.png"), "html", null, true);
        echo "\" style=\"width: 100px; \" alt=\"\">
                            <div class=\"single-service-item\">
                                <div class=\"single-service-text\">
                                    <h4>Language Lessons</h4>
                                    <p>Quidem laudantium itaque reiciendis inventore. Nobis dolorem, odit ipsam ratione minus quisquam iste.</p>
                                </div>

                            </div>
                            <div class=\"single-service-item\">
                                <img src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/003.png"), "html", null, true);
        echo "\" style=\"width: 100px; \" alt=\"\">
                                <div class=\"single-service-text\">
                                    <h4>Transportation</h4>
                                    <p>Amet voluptate, aperiam praesentium voluptas eveniet dignissimos nisi commodi, illum fuga sapiente?</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 hidden-sm hidden-xs\">
                        <div class=\"service-image\">
                            <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"single-service-item-wrapper\">
                            <div class=\"single-service-item\">
                                <img src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/11.png"), "html", null, true);
        echo "\" style=\"width: 100px; \" alt=\"\">
                                <div class=\"single-service-text\">
                                    <h4>Full Day Session</h4>
                                    <p>Quibusdam harum est praesentium illo ad expedita nihil optio repellat, fugiat obcaecati is sunt.</p>
                                </div>
                            </div>
                            <div class=\"single-service-item\">
                                <img src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/11.png"), "html", null, true);
        echo "\" style=\"width: 100px; \" alt=\"\">
                                <div class=\"single-service-text\">
                                    <h4>Special Education</h4>
                                    <p>voluptatem, cupiditate eveniet dolores inventore delectus vel eius molestias tho minus, corporis.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<div id=\"fh5co-pricing\" class=\"fh5co-bg-section\">
    <div class=\"container\">
        <div class=\"row animate-box\">
            <div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
                <h2>Blog &amp; Events</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class=\"row row-padded-mb\">
            <div class=\"col-md-4 animate-box\">
                <div class=\"fh5co-event\">
                    <div class=\"date text-center\"><span>15<br>Mar.</span></div>
                    <h3><a href=\"#\">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href=\"#\">Read More</a></p>
                </div>
            </div>
            <div class=\"col-md-4 animate-box\">
                <div class=\"fh5co-event\">
                    <div class=\"date text-center\"><span>15<br>Mar.</span></div>
                    <h3><a href=\"#\">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href=\"#\">Read More</a></p>
                </div>
            </div>
            <div class=\"col-md-4 animate-box\">
                <div class=\"fh5co-event\">
                    <div class=\"date text-center\"><span>15<br>Mar.</span></div>
                    <h3><a href=\"#\">New Device Develope by Microsoft</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href=\"#\">Read More</a></p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"fh5co-blog animate-box\">
                    <a href=\"#\" class=\"blog-img-holder\" style=\"background-image: url(";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-1.jpg"), "html", null, true);
        echo ");\"></a>
                    <div class=\"blog-text\">
                        <h3><a href=\"#\">Healty Lifestyle &amp; Living</a></h3>
                        <span class=\"posted_on\">March. 15th</span>
                        <span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"fh5co-blog animate-box\">
                    <a href=\"#\" class=\"blog-img-holder\" style=\"background-image: url(";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-2.jpg"), "html", null, true);
        echo ");\"></a>
                    <div class=\"blog-text\">
                        <h3><a href=\"#\">Healty Lifestyle &amp; Living</a></h3>
                        <span class=\"posted_on\">March. 15th</span>
                        <span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4\">
                <div class=\"fh5co-blog animate-box\">
                    <a href=\"#\" class=\"blog-img-holder\" style=\"background-image: url(";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/project-3.jpg"), "html", null, true);
        echo ");\"></a>
                    <div class=\"blog-text\">
                        <h3><a href=\"#\">Healty Lifestyle &amp; Living</a></h3>
                        <span class=\"posted_on\">March. 15th</span>
                        <span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer id=\"fh5co-footer\" role=\"contentinfo\" style=\"background-image: url(";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/images/img_bg_4.jpg"), "html", null, true);
        echo ");\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row row-pb-md\">
            <div class=\"col-md-3 fh5co-widget\">
                <h3>About Education</h3>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget\">
                <h3>Learning</h3>
                <ul class=\"fh5co-footer-links\">
                    <li><a href=\"#\">Course</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Contact</a></li>
                    <li><a href=\"#\">Terms</a></li>
                    <li><a href=\"#\">Meetups</a></li>
                </ul>
            </div>

            <div class=\"col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget\">
                <h3>Learn &amp; Grow</h3>
                <ul class=\"fh5co-footer-links\">
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Privacy</a></li>
                    <li><a href=\"#\">Testimonials</a></li>
                    <li><a href=\"#\">Handbook</a></li>
                    <li><a href=\"#\">Held Desk</a></li>
                </ul>
            </div>

            <div class=\"col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget\">
                <h3>Engage us</h3>
                <ul class=\"fh5co-footer-links\">
                    <li><a href=\"#\">Marketing</a></li>
                    <li><a href=\"#\">Visual Assistant</a></li>
                    <li><a href=\"#\">System Analysis</a></li>
                    <li><a href=\"#\">Advertise</a></li>
                </ul>
            </div>

            <div class=\"col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget\">
                <h3>Legal</h3>
                <ul class=\"fh5co-footer-links\">
                    <li><a href=\"#\">Find Designers</a></li>
                    <li><a href=\"#\">Find Developers</a></li>
                    <li><a href=\"#\">Teams</a></li>
                    <li><a href=\"#\">Advertise</a></li>
                    <li><a href=\"#\">API</a></li>
                </ul>
            </div>
        </div>

        <div class=\"row copyright\">
            <div class=\"col-md-12 text-center\">
                <p>
                    <small class=\"block\">&copy; 2017-2018 </small>
                </p>
            </div>
        </div>

    </div>
</footer>
</div>

<div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
</div>
<!-- jQuery -->
<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Easing -->
<script src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Waypoints -->
<script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<!-- Stellar Parallax -->
<script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<!-- Carousel -->
<script src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<!-- Flexslider -->
<script src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<!-- countTo -->
<script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
<!-- Magnific Popup -->
<script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
<!-- Count Down -->
<script src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/simplyCountdown.js"), "html", null, true);
        echo "\"></script>
<!-- Main -->
<script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("color/js/main.js"), "html", null, true);
        echo "\"></script>
<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    \$('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
";
        
        $__internal_87e06d727e9021130a1fdc4aeaaeb541f7861225b7fb215baa0271862c93ed1c->leave($__internal_87e06d727e9021130a1fdc4aeaaeb541f7861225b7fb215baa0271862c93ed1c_prof);

    }

    public function getTemplateName()
    {
        return "MyschoolBundle:Security:login_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 556,  775 => 554,  770 => 552,  766 => 551,  761 => 549,  756 => 547,  751 => 545,  746 => 543,  741 => 541,  736 => 539,  731 => 537,  726 => 535,  655 => 467,  638 => 453,  624 => 442,  610 => 431,  555 => 379,  545 => 372,  536 => 366,  522 => 355,  510 => 346,  473 => 312,  461 => 303,  449 => 294,  432 => 280,  416 => 267,  402 => 256,  388 => 245,  374 => 234,  349 => 212,  335 => 201,  321 => 190,  268 => 140,  257 => 132,  229 => 108,  221 => 103,  218 => 102,  216 => 101,  212 => 100,  205 => 96,  200 => 94,  196 => 93,  191 => 91,  187 => 90,  144 => 49,  138 => 48,  129 => 45,  125 => 44,  120 => 42,  114 => 39,  108 => 36,  102 => 33,  96 => 30,  90 => 27,  86 => 26,  80 => 23,  74 => 20,  69 => 18,  64 => 16,  57 => 12,  51 => 9,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/* */
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"') }}" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css')}}" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/*     <!-- Facebook and Twitter integration -->*/
/* */
/*     <!-- Animate.css -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/animate.css') }}">*/
/*     <!-- Icomoon Icon Fonts-->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/icomoon.css') }}">*/
/*     <!-- Bootstrap  -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/bootstrap.css') }}">*/
/* */
/*     <!-- Magnific Popup -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/magnific-popup.css') }}">*/
/* */
/*     <!-- Owl Carousel  -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/owl.carousel.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('color/css/owl.theme.default.min.css') }}">*/
/* */
/*     <!-- Flexslider  -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/flexslider.css') }}">*/
/* */
/*     <!-- Pricing -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/pricing.css') }}">*/
/* */
/*     <!-- Theme style  -->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/style.css') }}">*/
/* */
/*     <!-- Modernizr JS -->*/
/*     <script src="{{ asset('color/js/modernizr-2.6.2.min.js') }}"></script>*/
/*     <!-- FOR IE9 below -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="{{ asset('color/js/respond.min.js') }}"></script>*/
/*     <![endif]-->*/
/*     <link rel="stylesheet" href="{{ asset('color/css/font-awesome.min.css') }}">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* {% endblock head %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* */
/* */
/* <div class="fh5co-loader"></div>*/
/* */
/* <div id="page">*/
/*     <nav class="fh5co-nav" role="navigation">*/
/*         <div class="top-menu">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-xs-2">*/
/*                         <div id="fh5co-logo"><a href="index.html"><i class="icon-study"></i>Educ<span>.</span></a></div>*/
/*                     </div>*/
/*                     <div class="col-xs-10 text-right menu-1">*/
/*                         <ul>*/
/*                             <li class="active"><a href="index.html">Home</a></li>*/
/*                             <li><a href="#">Courses</a></li>*/
/*                             <li><a href="#">Teacher</a></li>*/
/*                             <li><a href="#">About</a></li>*/
/*                             <li><a href="#">Contact</a></li>*/
/*                             <li ><button class=" btn  btn-warning	" type="button" data-toggle="modal" data-target="#myModal">Login</button></li>*/
/* */
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </nav>*/
/*     <div class="modal fade" id="myModal" role="dialog">*/
/*         <div class="modal-dialog">*/
/* */
/*             <!-- Modal content-->*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                     <h4 class="modal-title">Modal Header</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                         <label  for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         <input type="text" class="col-md-3 form-control" id="username" name="_username" value="{{ last_username }}" required="required" /><br>*/
/* */
/*                         <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                         <input type="password" class="col-md-6 form-control" id="password" name="_password" required="required" /><br><br>*/
/*                         <div class="col-md-8"></div>*/
/*                         <input type="checkbox" class="" id="remember_me" name="_remember_me" value="on" />*/
/*                         <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label><br>*/
/*                         {% if error %}*/
/*                             <div class="alert alert-danger">*/
/*                                 {{ error|trans({}, 'FOSUserBundle') }}*/
/*                             </div>*/
/* */
/* */
/*                         {% endif %}*/
/*                         <input type="submit" class="btn btn-primary "id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" /><br>*/
/* */
/*                     </form>*/
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*         <!-- Indicators -->*/
/*         <ol class="carousel-indicators">*/
/*             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*             <li data-target="#myCarousel" data-slide-to="1"></li>*/
/* */
/*         </ol>*/
/* */
/*         <!-- Wrapper for slides -->*/
/*         <div class="carousel-inner">*/
/* */
/*             <div class="item active">*/
/*                 <img src="{{ asset('color/images/1.jpg')}}" alt="Los Angeles" style="width:100%;">*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*             <div class="item">*/
/*                 <img src="{{ asset('color/images/2.jpg')}}" alt="Chicago" style="width:100%;">*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/*         <!-- Left and right controls -->*/
/*         <a class="left carousel-control" href="#myCarousel" data-slide="prev">*/
/*             <span class="glyphicon glyphicon-chevron-left"></span>*/
/*             <span class="sr-only">Previous</span>*/
/*         </a>*/
/*         <a class="right carousel-control" href="#myCarousel" data-slide="next">*/
/*             <span class="glyphicon glyphicon-chevron-right"></span>*/
/*             <span class="sr-only">Next</span>*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* <div class="container pos">*/
/*     <div class="row">*/
/*         <div class="col-md-7 col-sm-7">*/
/* */
/*             <h1 class="title1">Education for Kids</h1>*/
/*             <p class="sub-title">Donec sollicitudin lacus in felis luctus blandit. Ut hendrerit mattis justo<br> at susp, vivamus orci urna.</p>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <style type="text/css" media="screen">*/
/*     .pos{*/
/*         position: absolute;*/
/*         top: 200px;*/
/*         left: 350px;*/
/*     }*/
/*     .title1{*/
/*         font-size: 65px;*/
/* */
/*     }*/
/*     .sub-title{*/
/*         font-size: 20px;*/
/*     }*/
/* </style>*/
/* */
/* */
/* <div id="fh5co-course-categories">*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-4 col-sm-6 text-center animate-box">*/
/*                 <div class="services">*/
/*                     <img src="{{ asset('color/images/09.png')}}" style="width: 150px;" alt="">*/
/* */
/*                     <div class="desc">*/
/*                         <br>*/
/*                         <h3><a href="#">activity</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 col-sm-6 text-center animate-box">*/
/*                 <div class="services">*/
/*                     <img src="{{ asset('color/images/10.png')}}" style="width: 100px;" alt="">*/
/*                     <div class="desc">*/
/*                         <br>*/
/*                         <h3><a href="#">Health &amp; Psychology</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-4 col-sm-6 text-center animate-box">*/
/*                 <div class="services">*/
/*                     <img src="{{ asset('color/images/08.png')}}" style="width: 100px;" alt="">*/
/*                     <div class="desc">*/
/*                         <br>*/
/*                         <h3><a href="#">Education</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <br>*/
/*     <div class="container">*/
/*         <div class="row animate-box">*/
/*             <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">*/
/*                 <h2>Our Course</h2>*/
/*                 <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-6 animate-box">*/
/*                 <div class="course">*/
/*                     <a href="#" class="course-img" style="background-image: url({{ asset('color/images/project-1.jpg')}});">*/
/*                     </a>*/
/*                     <div class="desc">*/
/*                         <h3><a href="#">Web Master</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                         <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 animate-box">*/
/*                 <div class="course">*/
/*                     <a href="#" class="course-img" style="background-image: url({{ asset('color/images/project-2.jpg')}});">*/
/*                     </a>*/
/*                     <div class="desc">*/
/*                         <h3><a href="#">Business &amp; Accounting</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                         <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 animate-box">*/
/*                 <div class="course">*/
/*                     <a href="#" class="course-img" style="background-image: url({{ asset('color/images/project-3.jpg')}});">*/
/*                     </a>*/
/*                     <div class="desc">*/
/*                         <h3><a href="#">Science &amp; Technology</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                         <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6 animate-box">*/
/*                 <div class="course">*/
/*                     <a href="#" class="course-img" style="background-image: url({{ asset('color/images/project-4.jpg')}});">*/
/*                     </a>*/
/*                     <div class="desc">*/
/*                         <h3><a href="#">Health &amp; Psychology</a></h3>*/
/*                         <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*                         <span><a href="#" class="btn btn-primary btn-sm btn-course">Take A Course</a></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="fh5co-testimonial" style="background-image: url({{ asset('color/images/school.jpg')}});">*/
/*     <div class="overlay"></div>*/
/*     <div class="container">*/
/*         <div class="row animate-box">*/
/*             <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">*/
/*                 <h2><span>Testimonials</span></h2>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 <div class="row animate-box">*/
/*                     <div class="owl-carousel owl-carousel-fullwidth">*/
/*                         <div class="item">*/
/*                             <div class="testimony-slide active text-center">*/
/*                                 <div class="user" style="background-image: url({{ asset('color/images/person1.jpg)')}});"></div>*/
/*                                 <span>Mary Walker<br><small>Students</small></span>*/
/*                                 <blockquote>*/
/*                                     <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>*/
/*                                 </blockquote>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="item">*/
/*                             <div class="testimony-slide active text-center">*/
/*                                 <div class="user" style="background-image: url({{ asset('color/images/person2.jpg')}});"></div>*/
/*                                 <span>Mike Smith<br><small>Students</small></span>*/
/*                                 <blockquote>*/
/*                                     <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>*/
/*                                 </blockquote>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="item">*/
/*                             <div class="testimony-slide active text-center">*/
/*                                 <div class="user" style="background-image: url({{ asset('color/images/person3.jpg')}});"></div>*/
/*                                 <span>Rita Jones<br><small>Teacher</small></span>*/
/*                                 <blockquote>*/
/*                                     <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>*/
/*                                 </blockquote>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* <div id=" fh5co-blog" >*/
/*     <div class="container">*/
/*         <div class="service-area section-padding">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="section-title-wrapper">*/
/*                             <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">*/
/*                                 <br>*/
/*                                 <h3>Our Services</h3>*/
/*                                 <p>Our best services for your kids</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-md-4 hidden-sm hidden-xs">*/
/*                         <div class="single-service-item-wrapper">*/
/*                             <img src="{{ asset('color/images/12.png')}}" style="width: 100px; " alt="">*/
/*                             <div class="single-service-item">*/
/*                                 <div class="single-service-text">*/
/*                                     <h4>Language Lessons</h4>*/
/*                                     <p>Quidem laudantium itaque reiciendis inventore. Nobis dolorem, odit ipsam ratione minus quisquam iste.</p>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <div class="single-service-item">*/
/*                                 <img src="{{ asset('color/images/003.png')}}" style="width: 100px; " alt="">*/
/*                                 <div class="single-service-text">*/
/*                                     <h4>Transportation</h4>*/
/*                                     <p>Amet voluptate, aperiam praesentium voluptas eveniet dignissimos nisi commodi, illum fuga sapiente?</p>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4 hidden-sm hidden-xs">*/
/*                         <div class="service-image">*/
/*                             <img src="{{ asset('color/images/4.jpg')}}" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-sm-12 col-xs-12">*/
/*                         <div class="single-service-item-wrapper">*/
/*                             <div class="single-service-item">*/
/*                                 <img src="{{ asset('color/images/11.png')}}" style="width: 100px; " alt="">*/
/*                                 <div class="single-service-text">*/
/*                                     <h4>Full Day Session</h4>*/
/*                                     <p>Quibusdam harum est praesentium illo ad expedita nihil optio repellat, fugiat obcaecati is sunt.</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="single-service-item">*/
/*                                 <img src="{{ asset('color/images/11.png')}}" style="width: 100px; " alt="">*/
/*                                 <div class="single-service-text">*/
/*                                     <h4>Special Education</h4>*/
/*                                     <p>voluptatem, cupiditate eveniet dolores inventore delectus vel eius molestias tho minus, corporis.</p>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div id="fh5co-pricing" class="fh5co-bg-section">*/
/*     <div class="container">*/
/*         <div class="row animate-box">*/
/*             <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">*/
/*                 <h2>Blog &amp; Events</h2>*/
/*                 <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row row-padded-mb">*/
/*             <div class="col-md-4 animate-box">*/
/*                 <div class="fh5co-event">*/
/*                     <div class="date text-center"><span>15<br>Mar.</span></div>*/
/*                     <h3><a href="#">USA, International Triathlon Event</a></h3>*/
/*                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>*/
/*                     <p><a href="#">Read More</a></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 animate-box">*/
/*                 <div class="fh5co-event">*/
/*                     <div class="date text-center"><span>15<br>Mar.</span></div>*/
/*                     <h3><a href="#">USA, International Triathlon Event</a></h3>*/
/*                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>*/
/*                     <p><a href="#">Read More</a></p>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-4 animate-box">*/
/*                 <div class="fh5co-event">*/
/*                     <div class="date text-center"><span>15<br>Mar.</span></div>*/
/*                     <h3><a href="#">New Device Develope by Microsoft</a></h3>*/
/*                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>*/
/*                     <p><a href="#">Read More</a></p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-md-4">*/
/*                 <div class="fh5co-blog animate-box">*/
/*                     <a href="#" class="blog-img-holder" style="background-image: url({{ asset('color/images/project-1.jpg')}});"></a>*/
/*                     <div class="blog-text">*/
/*                         <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>*/
/*                         <span class="posted_on">March. 15th</span>*/
/*                         <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>*/
/*                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4 col-md-4">*/
/*                 <div class="fh5co-blog animate-box">*/
/*                     <a href="#" class="blog-img-holder" style="background-image: url({{ asset('color/images/project-2.jpg')}});"></a>*/
/*                     <div class="blog-text">*/
/*                         <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>*/
/*                         <span class="posted_on">March. 15th</span>*/
/*                         <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>*/
/*                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-lg-4 col-md-4">*/
/*                 <div class="fh5co-blog animate-box">*/
/*                     <a href="#" class="blog-img-holder" style="background-image: url({{ asset('color/images/project-3.jpg')}});"></a>*/
/*                     <div class="blog-text">*/
/*                         <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>*/
/*                         <span class="posted_on">March. 15th</span>*/
/*                         <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>*/
/*                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <footer id="fh5co-footer" role="contentinfo" style="background-image: url({{ asset('color/images/img_bg_4.jpg')}});">*/
/*     <div class="overlay"></div>*/
/*     <div class="container">*/
/*         <div class="row row-pb-md">*/
/*             <div class="col-md-3 fh5co-widget">*/
/*                 <h3>About Education</h3>*/
/*                 <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>*/
/*             </div>*/
/*             <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">*/
/*                 <h3>Learning</h3>*/
/*                 <ul class="fh5co-footer-links">*/
/*                     <li><a href="#">Course</a></li>*/
/*                     <li><a href="#">Blog</a></li>*/
/*                     <li><a href="#">Contact</a></li>*/
/*                     <li><a href="#">Terms</a></li>*/
/*                     <li><a href="#">Meetups</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">*/
/*                 <h3>Learn &amp; Grow</h3>*/
/*                 <ul class="fh5co-footer-links">*/
/*                     <li><a href="#">Blog</a></li>*/
/*                     <li><a href="#">Privacy</a></li>*/
/*                     <li><a href="#">Testimonials</a></li>*/
/*                     <li><a href="#">Handbook</a></li>*/
/*                     <li><a href="#">Held Desk</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">*/
/*                 <h3>Engage us</h3>*/
/*                 <ul class="fh5co-footer-links">*/
/*                     <li><a href="#">Marketing</a></li>*/
/*                     <li><a href="#">Visual Assistant</a></li>*/
/*                     <li><a href="#">System Analysis</a></li>*/
/*                     <li><a href="#">Advertise</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">*/
/*                 <h3>Legal</h3>*/
/*                 <ul class="fh5co-footer-links">*/
/*                     <li><a href="#">Find Designers</a></li>*/
/*                     <li><a href="#">Find Developers</a></li>*/
/*                     <li><a href="#">Teams</a></li>*/
/*                     <li><a href="#">Advertise</a></li>*/
/*                     <li><a href="#">API</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row copyright">*/
/*             <div class="col-md-12 text-center">*/
/*                 <p>*/
/*                     <small class="block">&copy; 2017-2018 </small>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </footer>*/
/* </div>*/
/* */
/* <div class="gototop js-top">*/
/*     <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>*/
/* </div>*/
/* <!-- jQuery -->*/
/* <script src="{{ asset('color/js/jquery.min.js') }}"></script>*/
/* <!-- jQuery Easing -->*/
/* <script src="{{ asset('color/js/jquery.easing.1.3.js') }}"></script>*/
/* <!-- Bootstrap -->*/
/* <script src="{{ asset('color/js/bootstrap.min.js') }}"></script>*/
/* <!-- Waypoints -->*/
/* <script src="{{ asset('color/js/jquery.waypoints.min.js') }}"></script>*/
/* <!-- Stellar Parallax -->*/
/* <script src="{{ asset('color/js/jquery.stellar.min.js') }}"></script>*/
/* <!-- Carousel -->*/
/* <script src="{{ asset('color/js/owl.carousel.min.js') }}"></script>*/
/* <!-- Flexslider -->*/
/* <script src="{{ asset('color/js/jquery.flexslider-min.js') }}"></script>*/
/* <!-- countTo -->*/
/* <script src="{{ asset('color/js/jquery.countTo.js') }}"></script>*/
/* <!-- Magnific Popup -->*/
/* <script src="{{ asset('color/js/jquery.magnific-popup.min.js') }}"></script>*/
/* <script src="{{ asset('color/js/magnific-popup-options.js') }}"></script>*/
/* <!-- Count Down -->*/
/* <script src="{{ asset('color/js/simplyCountdown.js') }}"></script>*/
/* <!-- Main -->*/
/* <script src="{{ asset('color/js/main.js') }}"></script>*/
/* <script>*/
/*     var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);*/
/* */
/*     // default example*/
/*     simplyCountdown('.simply-countdown-one', {*/
/*         year: d.getFullYear(),*/
/*         month: d.getMonth() + 1,*/
/*         day: d.getDate()*/
/*     });*/
/* */
/*     //jQuery example*/
/*     $('#simply-countdown-losange').simplyCountdown({*/
/*         year: d.getFullYear(),*/
/*         month: d.getMonth() + 1,*/
/*         day: d.getDate(),*/
/*         enableUtc: false*/
/*     });*/
/* </script>*/
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
