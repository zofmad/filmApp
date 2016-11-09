<?php

/* FilmappBundle:Default:index.html.twig */
class __TwigTemplate_3a9ecf0afce4dd8c59c76223177922dbdd8e01419f4a4caccea2541ab90d2c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81024c6d1de48341e8571abfda841268199b83a20faaeb18413b1cb8815b3840 = $this->env->getExtension("native_profiler");
        $__internal_81024c6d1de48341e8571abfda841268199b83a20faaeb18413b1cb8815b3840->enter($__internal_81024c6d1de48341e8571abfda841268199b83a20faaeb18413b1cb8815b3840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81024c6d1de48341e8571abfda841268199b83a20faaeb18413b1cb8815b3840->leave($__internal_81024c6d1de48341e8571abfda841268199b83a20faaeb18413b1cb8815b3840_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_97aedbfb649fba056baa4082817c71a3d6604bb8205d1a808c19607510defc4a = $this->env->getExtension("native_profiler");
        $__internal_97aedbfb649fba056baa4082817c71a3d6604bb8205d1a808c19607510defc4a->enter($__internal_97aedbfb649fba056baa4082817c71a3d6604bb8205d1a808c19607510defc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    Welcome ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "!
    <br>
    ";
        // line 9
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 10
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("filmapp_movie_createmovie");
            echo "\">Dodaj film</a>
        <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("actor_new");
            echo "\">Dodaj aktora</a>
        <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("Director_new");
            echo "\">Dodaj rezysera</a>
        <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("filmapp_genre_creategenre");
            echo "\">Dodaj gatunek</a>
    ";
        }
        // line 15
        echo "    <table>
        <th>
            <ol>Najlepsze filmy:</ol></th> 
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 19
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo " rating:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "rating", array()), "html", null, true);
            echo "</li>    
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ol>
    <table>
        
 
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Best films</h3>
                            </div>
                            <div class=\"panel-body\">
                            <ol>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 34
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo " rating:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "rating", array()), "html", null, true);
            echo "</li>    
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            </ol>
                                 ";
        // line 43
        echo "                            </div>
                        </div>
                    </div>
                             <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Best films</h3>
                            </div>
                            <div class=\"panel-body\">
                            <ol>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 55
            echo "                                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo " rating:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "rating", array()), "html", null, true);
            echo "</li>    
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                            </ol>
                                 ";
        // line 59
        echo "                                <div id=\"morris-donut-chart\"></div>
                                <div class=\"text-right\">
                               ";
        // line 62
        echo "                              <a href=\"#\">View Details <i class=\"fa fa-arrow-circle-right\"></i></a>
                               ";
        // line 68
        echo "        ";
        // line 85
        echo "                            </div>
                        </div>
                    </div>
                   ";
        // line 128
        echo "                        ";
        // line 131
        echo "                     ";
        // line 134
        echo "                    <div class=\"col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\"><i class=\"fa fa-money fa-fw\"></i> Transactions Panel</h3>
                            </div>       
        
    
   ";
        // line 149
        echo "               ";
        // line 163
        echo "                     ";
        
        $__internal_97aedbfb649fba056baa4082817c71a3d6604bb8205d1a808c19607510defc4a->leave($__internal_97aedbfb649fba056baa4082817c71a3d6604bb8205d1a808c19607510defc4a_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 163,  176 => 149,  167 => 134,  165 => 131,  163 => 128,  158 => 85,  156 => 68,  153 => 62,  149 => 59,  146 => 57,  135 => 55,  131 => 54,  118 => 43,  115 => 36,  104 => 34,  100 => 33,  86 => 21,  75 => 19,  71 => 18,  66 => 15,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  46 => 9,  40 => 7,  34 => 6,  11 => 2,);
    }
}
/* {#Hello {{ name }}!#}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {#<div id="wrapper">#}*/
/* */
/* {% block body %}*/
/*     Welcome {{app.user}}!*/
/*     <br>*/
/*     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}*/
/*         <a href="{{path("filmapp_movie_createmovie")}}">Dodaj film</a>*/
/*         <a href="{{path("actor_new")}}">Dodaj aktora</a>*/
/*         <a href="{{path("Director_new")}}">Dodaj rezysera</a>*/
/*         <a href="{{path("filmapp_genre_creategenre")}}">Dodaj gatunek</a>*/
/*     {% endif %}*/
/*     <table>*/
/*         <th>*/
/*             <ol>Najlepsze filmy:</ol></th> */
/*     {% for movie in movies %}*/
/*         <li>{{movie.name}} rating:{{movie.rating}}</li>    */
/*     {% endfor %}*/
/*     </ol>*/
/*     <table>*/
/*         */
/*  */
/*                 <div class="row">*/
/*                     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best films</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                             <ol>*/
/*                                 {% for movie in movies %}*/
/*                                     <li>{{movie.name}} rating:{{movie.rating}}</li>    */
/*                                 {% endfor %}*/
/*                             </ol>*/
/*                                  {#{% block body %}*/
/*                                 <div id="morris-donut-chart"></div>*/
/*                                 <div class="text-right">*/
/*                                     {% endblock %}*/
/*                               {#   {#  {# <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                {# </div>#}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                              <div class="row">*/
/*                     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best films</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                             <ol>*/
/*                                 {% for movie in movies %}*/
/*                                     <li>{{movie.name}} rating:{{movie.rating}}</li>    */
/*                                 {% endfor %}*/
/*                             </ol>*/
/*                                  {#{% block body %}#}*/
/*                                 <div id="morris-donut-chart"></div>*/
/*                                 <div class="text-right">*/
/*                                {#     {% endblock %}#}*/
/*                               <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                {#</div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                           {#   <div class="row">#}*/
/*         {#            <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best films</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                             <ol>*/
/*                                 {% for movie in movies %}*/
/*                                     <li>{{movie.name}} rating:{{movie.rating}}</li>    */
/*                                 {% endfor %}*/
/*                             </ol>*/
/*                                  {#{% block body %}*/
/*                                 <div id="morris-donut-chart"></div>*/
/*                                 <div class="text-right">*/
/*                                     {% endblock %}*/
/*                               {#   {#  {# <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                {# </div>#}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                    {# <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div class="list-group">*/
/*                                     <a href="#" class="list-group-item">*/
/*                                         {#<span class="badge">just now</span>*/
/*                                         <i class="fa fa-fw fa-calendar"></i> Calendar updated*/
/*                                     </a>*/
/*                                     {#<a href="#" class="list-group-item">*/
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
/*                                 </div>#}*/
/*                         {#        <div class="text-right">*/
/*                                     <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                 </div>#}*/
/*                      {#       </div>*/
/*                         </div>*/
/*                     </div>#}*/
/*                     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>*/
/*                             </div>       */
/*         */
/*     */
/*    {# <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*                 <ul class="nav navbar-nav side-nav">*/
/*                     <li class="active">*/
/*                         <a href="{{url('filmapp_genre_creategenre')}}"><i class="fa fa-fw fa-dashboard"></i> Index</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{url('filmapp_genre_creategenre')}}"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>*/
/*                     </li>#}*/
/*                {#     <li>*/
/*                         <a href="{{url{{'tables.html'}}"><i class="fa fa-fw fa-table"></i> Tables</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{url('forms.html')}}"><i class="fa fa-fw fa-edit"></i> Forms</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{url('bootstrap-elements.')}}"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{url('bootstrap-grid.html')}}"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       {#  <a href="javascript:" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>#}*/
/*                      {#   <ul id="demo" class="collapse">*/
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
/*                     </li>*/
/*                 </ul>#}*/
/* {#            </div>#}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
