<?php

/* ::base.html.twig */
class __TwigTemplate_a4de801e57ceadadab6e2827d2ec91f2c4716f6fe8ab4d0d42eb6124bcd5e3c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85248204cedaa866300a8122f868ec1b440c59eabfecf885d7b566a7362aaafe = $this->env->getExtension("native_profiler");
        $__internal_85248204cedaa866300a8122f868ec1b440c59eabfecf885d7b566a7362aaafe->enter($__internal_85248204cedaa866300a8122f868ec1b440c59eabfecf885d7b566a7362aaafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 13
        echo "


<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmapp/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/filmapp/css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <div id=\"wrapper\">

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("filmapp_default_index");
        echo "\">Filmapp</a>
            </div>
            ";
        // line 67
        echo "            <!-- Top Menu Items -->
            <ul class=\"nav navbar-right top-nav\">
";
        // line 70
        echo "                <li class=\"dropdown\">
  ";
        // line 72
        echo "                    <ul class=\"dropdown-menu message-dropdown\">
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
   
                                        <h5 class=\"media-heading\">
                                            <strong>John Smith</strong>
                                        </h5>
                                        
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                     
                                        ";
        // line 101
        echo "                                        
                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>

                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-preview\">
                            <a href=\"#\">
                                <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"http://placehold.it/50x50\" alt=\"\">
                                    </span>
                                    <div class=\"media-body\">
                                       ";
        // line 118
        echo "                                        <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"message-footer\">
                            <a href=\"#\">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
      ";
        // line 130
        echo "                
                
               ";
        // line 159
        echo "                
                    ";
        // line 160
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 161
            echo "
                        <li class=\"dropdown\">

                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Profile</a>
                                    </li>
";
            // line 175
            echo "                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"";
            // line 177
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                    ";
        } else {
            // line 182
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><input type=\"button\" name=\"login\" value=\"login\"></input></a>
                            <a href=\"";
            // line 183
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><input type=\"button\" name=\"register\" value=\"register\"></input></a>
                            
                            
                        
                    ";
        }
        // line 188
        echo "                    
                
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                  ";
        // line 195
        echo "                    <li>
                        <a href=\"";
        // line 196
        echo $this->env->getExtension('routing')->getUrl("filmapp_default_index");
        echo "\"><i class=\"fa fa-fw fa-dashboard\"></i> Index</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 199
        echo $this->env->getExtension('routing')->getUrl("filmapp_movie_listmovies");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i>Movies</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 202
        echo $this->env->getExtension('routing')->getUrl("actor");
        echo "\"><i class=\"fa fa-fw fa-table\"></i> Actors</a>
                    </li>
                    <li>
                       ";
        // line 206
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("Director");
        echo "\"><i class=\"fa fa-fw fa-edit\"></i> Directors</a>
                    </li>
                    ";
        // line 208
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 209
            echo "                    <li>
                        <a href=\"";
            // line 210
            echo $this->env->getExtension('routing')->getUrl("user");
            echo "\"><i class=\"fa fa-fw fa-edit\"></i> Users</a>
                    </li>
                    ";
        }
        // line 213
        echo "                    <br>
                    ";
        // line 237
        echo "                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id=\"page-wrapper\">
";
        // line 243
        $this->displayBlock('body', $context, $blocks);
        // line 245
        echo "       ";
        // line 377
        echo "
      ";
        // line 389
        echo "                                   ";
        // line 445
        echo "                          ";
        // line 515
        echo "                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
                  ";
        // line 525
        $this->displayBlock('javascripts', $context, $blocks);
        // line 537
        echo "</body>

</html>
";
        
        $__internal_85248204cedaa866300a8122f868ec1b440c59eabfecf885d7b566a7362aaafe->leave($__internal_85248204cedaa866300a8122f868ec1b440c59eabfecf885d7b566a7362aaafe_prof);

    }

    // line 243
    public function block_body($context, array $blocks = array())
    {
        $__internal_014ad8b765818243c1469290f25f66702d093f285e76727fefb62120acb6b540 = $this->env->getExtension("native_profiler");
        $__internal_014ad8b765818243c1469290f25f66702d093f285e76727fefb62120acb6b540->enter($__internal_014ad8b765818243c1469290f25f66702d093f285e76727fefb62120acb6b540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 244
        echo "    ";
        
        $__internal_014ad8b765818243c1469290f25f66702d093f285e76727fefb62120acb6b540->leave($__internal_014ad8b765818243c1469290f25f66702d093f285e76727fefb62120acb6b540_prof);

    }

    // line 525
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad8280c5e6ad0aaadb1fc727379deb263697e867c798081541f56dff7605affa = $this->env->getExtension("native_profiler");
        $__internal_ad8280c5e6ad0aaadb1fc727379deb263697e867c798081541f56dff7605affa->enter($__internal_ad8280c5e6ad0aaadb1fc727379deb263697e867c798081541f56dff7605affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 526
        echo "    <!-- jQuery -->
    <script src=\"bundles/filmapp/js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"bundles/filmapp/js/bootstrap.min.js\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"bundles/filmapp/js/plugins/morris/raphael.min.js\"></script>
    <script src=\"bundles/filmapp/js/plugins/morris/morris.min.js\"></script>
    <script src=\"bundles/filmapp/js/plugins/morris/morris-data.js\"></script>
";
        
        $__internal_ad8280c5e6ad0aaadb1fc727379deb263697e867c798081541f56dff7605affa->leave($__internal_ad8280c5e6ad0aaadb1fc727379deb263697e867c798081541f56dff7605affa_prof);

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
        return array (  321 => 526,  315 => 525,  308 => 244,  302 => 243,  292 => 537,  290 => 525,  278 => 515,  276 => 445,  274 => 389,  271 => 377,  269 => 245,  267 => 243,  259 => 237,  256 => 213,  250 => 210,  247 => 209,  245 => 208,  239 => 206,  233 => 202,  227 => 199,  221 => 196,  218 => 195,  210 => 188,  202 => 183,  197 => 182,  189 => 177,  185 => 175,  180 => 167,  174 => 164,  169 => 161,  167 => 160,  164 => 159,  160 => 130,  147 => 118,  130 => 101,  101 => 72,  98 => 70,  94 => 67,  89 => 64,  61 => 39,  55 => 36,  49 => 33,  43 => 30,  24 => 13,);
    }
}
/* {#<!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>#}*/
/* */
/* */
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>SB Admin - Bootstrap Admin Template</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{asset('bundles/filmapp/css/bootstrap.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="{{asset('bundles/filmapp/css/sb-admin.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Morris Charts CSS -->*/
/*     <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom Fonts -->*/
/*     <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <div id="wrapper">*/
/* */
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{url('filmapp_default_index')}}">Filmapp</a>*/
/*             </div>*/
/*             {#<input type="button" class="media-heading" name="register">Register</button>#}*/
/*             <!-- Top Menu Items -->*/
/*             <ul class="nav navbar-right top-nav">*/
/* {#                <input type="button" name="register" style="color: white">Register#}*/
/*                 <li class="dropdown">*/
/*   {#                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>#}*/
/*                     <ul class="dropdown-menu message-dropdown">*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*    */
/*                                         <h5 class="media-heading">*/
/*                                             <strong>John Smith</strong>*/
/*                                         </h5>*/
/*                                         */
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                      */
/*                                         {#<h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>#}*/
/*                                         */
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-preview">*/
/*                             <a href="#">*/
/*                                 <div class="media">*/
/*                                     <span class="pull-left">*/
/*                                         <img class="media-object" src="http://placehold.it/50x50" alt="">*/
/*                                     </span>*/
/*                                     <div class="media-body">*/
/*                                        {# <h5 class="media-heading"><strong>John Smith</strong>*/
/*                                         </h5>#}*/
/*                                         <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>*/
/*                                         <p>Lorem ipsum dolor sit amet, consectetur...</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="message-footer">*/
/*                             <a href="#">Read All New Messages</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*       {#          //DROPDOWN#}*/
/*                 */
/*                 */
/*                {# <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>*/
/*                     <ul class="dropdown-menu alert-dropdown">*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>*/
/*                         </li>*/
/*                         <li class="divider"></li>*/
/*                         <li>*/
/*                             <a href="#">View All</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>#}*/
/*                 */
/*                     {% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN') %}*/
/* */
/*                         <li class="dropdown">*/
/* */
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ app.user }} <b class="caret"></b></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li>*/
/*                                         <a href="{{ path('user_show', { 'id': app.user.id }) }}">Profile</a>*/
/*                                     </li>*/
/* {#                                    <li>*/
/*                                         <a href="#"><i class="fa fa-fw fa-envelope"></i> Login</a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>*/
/*                                     </li>#}*/
/*                                     <li class="divider"></li>*/
/*                                     <li>*/
/*                                         <a href="{{ path('fos_user_security_logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                     {% else %}*/
/*                             <a href="{{ path('fos_user_security_login') }}"><input type="button" name="login" value="login"></input></a>*/
/*                             <a href="{{ path('fos_user_registration_register') }}"><input type="button" name="register" value="register"></input></a>*/
/*                             */
/*                             */
/*                         */
/*                     {% endif %}*/
/*                     */
/*                 */
/*             </ul>*/
/*             <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->*/
/*             <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                   {#  <li class="active">#}*/
/*                     <li>*/
/*                         <a href="{{url('filmapp_default_index')}}"><i class="fa fa-fw fa-dashboard"></i> Index</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{url('filmapp_movie_listmovies')}}"><i class="fa fa-fw fa-bar-chart-o"></i>Movies</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{url('actor')}}"><i class="fa fa-fw fa-table"></i> Actors</a>*/
/*                     </li>*/
/*                     <li>*/
/*                        {# <a href="{{url('filmapp_default_listdirectors')}}"><i class="fa fa-fw fa-edit"></i> Directors</a>#}*/
/*                         <a href="{{url('Director')}}"><i class="fa fa-fw fa-edit"></i> Directors</a>*/
/*                     </li>*/
/*                     {% if is_granted('ROLE_ADMIN') %}*/
/*                     <li>*/
/*                         <a href="{{url('user')}}"><i class="fa fa-fw fa-edit"></i> Users</a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                     <br>*/
/*                     {#<li>*/
/*                         <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>*/
/*                         <ul id="demo" class="collapse">*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#">Dropdown Item</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>*/
/*                     </li>#}*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </nav>*/
/* */
/*         <div id="page-wrapper">*/
/* {% block body %}*/
/*     {% endblock %}*/
/*        {#     <div class="container-fluid">*/
/* */
/*                 <!-- Page Heading -->*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <h1 class="page-header">*/
/*                             Dashboard <small>Statistics Overview</small>*/
/*                         </h1>*/
/*                         <ol class="breadcrumb">*/
/*                             <li class="active">*/
/*                                 <i class="fa fa-dashboard"></i> Dashboard*/
/*                             </li>*/
/*                         </ol>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="alert alert-info alert-dismissable">*/
/*                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*                             <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-3 col-md-6">*/
/*                         <div class="panel panel-primary">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-3">*/
/*                                         <i class="fa fa-comments fa-5x"></i>*/
/*                                     </div>*/
/*                                     <div class="col-xs-9 text-right">*/
/*                                         <div class="huge">26</div>*/
/*                                         <div>New Comments!</div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a href="#">*/
/*                                 <div class="panel-footer">*/
/*                                     <span class="pull-left">View Details</span>*/
/*                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6">*/
/*                         <div class="panel panel-green">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-3">*/
/*                                         <i class="fa fa-tasks fa-5x"></i>*/
/*                                     </div>*/
/*                                     <div class="col-xs-9 text-right">*/
/*                                         <div class="huge">12</div>*/
/*                                         <div>New Tasks!</div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a href="#">*/
/*                                 <div class="panel-footer">*/
/*                                     <span class="pull-left">View Details</span>*/
/*                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6">*/
/*                         <div class="panel panel-yellow">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-3">*/
/*                                         <i class="fa fa-shopping-cart fa-5x"></i>*/
/*                                     </div>*/
/*                                     <div class="col-xs-9 text-right">*/
/*                                         <div class="huge">124</div>*/
/*                                         <div>New Orders!</div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a href="#">*/
/*                                 <div class="panel-footer">*/
/*                                     <span class="pull-left">View Details</span>*/
/*                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6">*/
/*                         <div class="panel panel-red">*/
/*                             <div class="panel-heading">*/
/*                                 <div class="row">*/
/*                                     <div class="col-xs-3">*/
/*                                         <i class="fa fa-support fa-5x"></i>*/
/*                                     </div>*/
/*                                     <div class="col-xs-9 text-right">*/
/*                                         <div class="huge">13</div>*/
/*                                         <div>Support Tickets!</div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <a href="#">*/
/*                                 <div class="panel-footer">*/
/*                                     <span class="pull-left">View Details</span>*/
/*                                     <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                                     <div class="clearfix"></div>*/
/*                                 </div>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-12">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div id="morris-area-chart"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /.row -->#}*/
/* */
/*       {#          <div class="row">*/
/*                     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                  {% block body %}*/
/*                                 <div id="morris-donut-chart"></div>*/
/*                                 <div class="text-right">*/
/*                                     {% endblock %}#}*/
/*                                    {# <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                {# </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div class="list-group">*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">just now</span>*/
/*                                         <i class="fa fa-fw fa-calendar"></i> Calendar updated*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">4 minutes ago</span>*/
/*                                         <i class="fa fa-fw fa-comment"></i> Commented on a post*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">23 minutes ago</span>*/
/*                                         <i class="fa fa-fw fa-truck"></i> Order 392 shipped*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">46 minutes ago</span>*/
/*                                         <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">1 hour ago</span>*/
/*                                         <i class="fa fa-fw fa-user"></i> A new user has been added*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">2 hours ago</span>*/
/*                                         <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">yesterday</span>*/
/*                                         <i class="fa fa-fw fa-globe"></i> Saved the world*/
/*                                     </a>*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         <span class="badge">two days ago</span>*/
/*                                         <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="text-right">*/
/*                                     <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* {#{#                    <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>*/
/*                             </div>#}*/
/*                           {# <div class="panel-body">*/
/*                                 <div class="table-responsive">*/
/*                                     <table class="table table-bordered table-hover table-striped">*/
/*                                         <thead>*/
/*                                             <tr>*/
/*                                                 <th>Order #</th>*/
/*                                                 <th>Order Date</th>*/
/*                                                 <th>Order Time</th>*/
/*                                                 <th>Amount (USD)</th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                             <tr>*/
/*                                                 <td>3326</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>3:29 PM</td>*/
/*                                                 <td>$321.33</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3325</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>3:20 PM</td>*/
/*                                                 <td>$234.34</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3324</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>3:03 PM</td>*/
/*                                                 <td>$724.17</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3323</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>3:00 PM</td>*/
/*                                                 <td>$23.71</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3322</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>2:49 PM</td>*/
/*                                                 <td>$8345.23</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3321</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>2:23 PM</td>*/
/*                                                 <td>$245.12</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3320</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>2:15 PM</td>*/
/*                                                 <td>$5663.54</td>*/
/*                                             </tr>*/
/*                                             <tr>*/
/*                                                 <td>3319</td>*/
/*                                                 <td>10/21/2013</td>*/
/*                                                 <td>2:13 PM</td>*/
/*                                                 <td>$943.45</td>*/
/*                                             </tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/*                                 <div class="text-right">*/
/*                                     <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>#}*/
/*                 <!-- /.row -->*/
/* */
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/* */
/*         </div>*/
/*         <!-- /#page-wrapper -->*/
/* */
/*     </div>*/
/*     <!-- /#wrapper -->*/
/*                   {% block javascripts %}*/
/*     <!-- jQuery -->*/
/*     <script src="bundles/filmapp/js/jquery.js"></script>*/
/* */
/*     <!-- Bootstrap Core JavaScript -->*/
/*     <script src="bundles/filmapp/js/bootstrap.min.js"></script>*/
/* */
/*     <!-- Morris Charts JavaScript -->*/
/*     <script src="bundles/filmapp/js/plugins/morris/raphael.min.js"></script>*/
/*     <script src="bundles/filmapp/js/plugins/morris/morris.min.js"></script>*/
/*     <script src="bundles/filmapp/js/plugins/morris/morris-data.js"></script>*/
/* {% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
