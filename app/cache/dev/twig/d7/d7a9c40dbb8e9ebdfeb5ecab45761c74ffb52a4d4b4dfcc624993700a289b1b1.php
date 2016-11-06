<?php

/* FilmappBundle:Default:index.html.twig */
class __TwigTemplate_71835a38a049a6b2ada45c674c09dc6dab2fbe995094da17ac70a92c3fb8b858 extends Twig_Template
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
        $__internal_72a47c551b6436b473c8ffd5dad24358a9a702f666104b8d9bb4de6ffbedd3a3 = $this->env->getExtension("native_profiler");
        $__internal_72a47c551b6436b473c8ffd5dad24358a9a702f666104b8d9bb4de6ffbedd3a3->enter($__internal_72a47c551b6436b473c8ffd5dad24358a9a702f666104b8d9bb4de6ffbedd3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a47c551b6436b473c8ffd5dad24358a9a702f666104b8d9bb4de6ffbedd3a3->leave($__internal_72a47c551b6436b473c8ffd5dad24358a9a702f666104b8d9bb4de6ffbedd3a3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_94b3b1191d7231eeb0ddf058bbda524849472c67eae230fb01f857a1c63fe0ae = $this->env->getExtension("native_profiler");
        $__internal_94b3b1191d7231eeb0ddf058bbda524849472c67eae230fb01f857a1c63fe0ae->enter($__internal_94b3b1191d7231eeb0ddf058bbda524849472c67eae230fb01f857a1c63fe0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "        
   ";
        // line 24
        echo "               ";
        // line 38
        echo "                     ";
        
        $__internal_94b3b1191d7231eeb0ddf058bbda524849472c67eae230fb01f857a1c63fe0ae->leave($__internal_94b3b1191d7231eeb0ddf058bbda524849472c67eae230fb01f857a1c63fe0ae_prof);

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
        return array (  71 => 38,  69 => 24,  66 => 15,  61 => 13,  57 => 12,  53 => 11,  48 => 10,  46 => 9,  40 => 7,  34 => 6,  11 => 2,);
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
/*         */
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
