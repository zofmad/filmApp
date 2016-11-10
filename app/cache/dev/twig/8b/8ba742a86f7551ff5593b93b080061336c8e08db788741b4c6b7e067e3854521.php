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
        $__internal_af53328ea67bb2e30f012d8cb34305aa4d3599d112df5b992e21aec8a409abf4 = $this->env->getExtension("native_profiler");
        $__internal_af53328ea67bb2e30f012d8cb34305aa4d3599d112df5b992e21aec8a409abf4->enter($__internal_af53328ea67bb2e30f012d8cb34305aa4d3599d112df5b992e21aec8a409abf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af53328ea67bb2e30f012d8cb34305aa4d3599d112df5b992e21aec8a409abf4->leave($__internal_af53328ea67bb2e30f012d8cb34305aa4d3599d112df5b992e21aec8a409abf4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b9cea209d93fcfc0610d9d73313d8ab18571676c23ab07ab31939de8bd78561 = $this->env->getExtension("native_profiler");
        $__internal_2b9cea209d93fcfc0610d9d73313d8ab18571676c23ab07ab31939de8bd78561->enter($__internal_2b9cea209d93fcfc0610d9d73313d8ab18571676c23ab07ab31939de8bd78561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 23
        echo "<br><br>
              
                            
<div class=\"row\">
    <div class=\"col-lg-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Best films</h3>
            </div>
            <div class=\"panel-body\">
            <ol>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 35
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo " rating:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "rating", array()), "html", null, true);
            echo "</li>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </ol>
                 ";
        // line 44
        echo "            </div>
        </div>
    </div>

<div class=\"row\">
    <div class=\"col-lg-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Best actors</h3>
            </div>
            <div class=\"panel-body\">
            <ol>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 57
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "lastName", array()), "html", null, true);
            echo " rating:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "rating", array()), "html", null, true);
            echo "</li>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </ol>
                 ";
        // line 66
        echo "            </div>
        </div>
    </div>
            <div class=\"row\">
    <div class=\"col-lg-4\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-long-arrow-right fa-fw\"></i> Best directors</h3>
            </div>
            <div class=\"panel-body\">
            <ol>
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directors"]) ? $context["directors"] : $this->getContext($context, "directors")));
        foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
            // line 78
            echo "                    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "lastName", array()), "html", null, true);
            echo " rating:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "rating", array()), "html", null, true);
            echo "</li>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </ol>
                 ";
        // line 87
        echo "            </div>
        </div>
    </div>
                            
                            ";
        // line 103
        echo "                                 ";
        // line 104
        echo "                               ";
        // line 106
        echo "                               ";
        // line 107
        echo "                           ";
        // line 108
        echo "                               ";
        // line 113
        echo "        ";
        // line 130
        echo "               ";
        // line 141
        echo "                                        ";
        // line 183
        echo "   
        
    
   ";
        // line 194
        echo "               ";
        // line 208
        echo "                     ";
        
        $__internal_2b9cea209d93fcfc0610d9d73313d8ab18571676c23ab07ab31939de8bd78561->leave($__internal_2b9cea209d93fcfc0610d9d73313d8ab18571676c23ab07ab31939de8bd78561_prof);

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
        return array (  193 => 208,  191 => 194,  186 => 183,  184 => 141,  182 => 130,  180 => 113,  178 => 108,  176 => 107,  174 => 106,  172 => 104,  170 => 103,  164 => 87,  161 => 80,  148 => 78,  144 => 77,  131 => 66,  128 => 59,  115 => 57,  111 => 56,  97 => 44,  94 => 37,  83 => 35,  79 => 34,  66 => 23,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  46 => 9,  40 => 7,  34 => 6,  11 => 2,);
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
/* {#    <table>*/
/*         <th>*/
/*             <ol>Najlepsze filmy:</ol></th> */
/*     {% for movie in movies %}*/
/*         <li>{{movie.name}} rating:{{movie.rating}}</li>    */
/*     {% endfor %}*/
/*     </ol>*/
/*     <table>#}*/
/* <br><br>*/
/*               */
/*                             */
/* <div class="row">*/
/*     <div class="col-lg-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best films</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*             <ol>*/
/*                 {% for movie in movies %}*/
/*                     <li>{{movie.name}} rating:{{movie.rating}}</li>    */
/*                 {% endfor %}*/
/*             </ol>*/
/*                  {#{% block body %}*/
/*                 <div id="morris-donut-chart"></div>*/
/*                 <div class="text-right">*/
/*                     {% endblock %}*/
/*               {#   {#  {# <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                {# </div>#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* <div class="row">*/
/*     <div class="col-lg-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best actors</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*             <ol>*/
/*                 {% for actor in actors %}*/
/*                     <li>{{actor.firstName}} {{actor.lastName}} rating:{{actor.rating}}</li>    */
/*                 {% endfor %}*/
/*             </ol>*/
/*                  {#{% block body %}*/
/*                 <div id="morris-donut-chart"></div>*/
/*                 <div class="text-right">*/
/*                     {% endblock %}*/
/*               {#   {#  {# <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                {# </div>#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*             <div class="row">*/
/*     <div class="col-lg-4">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best directors</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*             <ol>*/
/*                 {% for director in directors %}*/
/*                     <li>{{director.firstName}} {{director.lastName}} rating:{{director.rating}}</li>    */
/*                 {% endfor %}*/
/*             </ol>*/
/*                  {#{% block body %}*/
/*                 <div id="morris-donut-chart"></div>*/
/*                 <div class="text-right">*/
/*                     {% endblock %}*/
/*               {#   {#  {# <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>*/
/*                {# </div>#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                             */
/*                             {# <div class="row">*/
/*                     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Best films</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                             <ol>*/
/*                                 {% for actor in actors %}*/
/*                                     <li>{{actor.firstName}}{{actor.lastName}} rating:{{actor.rating}}</li>    */
/*                                 {% endfor %}*/
/*                             </ol>#}*/
/*                                  {#{% block body %}#}*/
/*                                {# <div id="morris-donut-chart"></div>*/
/*                                 <div class="text-right">#}*/
/*                                {#     {% endblock %}#}*/
/*                            {#   <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>#}*/
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
/*                {#             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                    <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 <div class="list-group">*/
/*                                     <a href="#" class="list-group-item">#}*/
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
/*                                 </div>*/
/*                         {#        <div class="text-right">*/
/*                                     <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>*/
/*                                 </div>*/
/*                      {#       </div>*/
/*                         </div>*/
/*                     </div>*/
/*                {#     <div class="col-lg-4">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>*/
/*                             </div>    #}   */
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
