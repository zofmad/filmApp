<?php

/* FilmappBundle:Movie:showMovie.html.twig */
class __TwigTemplate_a7e2e100c924d18ab4a19b6c0140f39d55ff22f8d10860574147f132ac5951cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Movie:showMovie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df7e2556e8f33363a4ac3ebf029df94eed12ed3595b542b026e12f03fceab411 = $this->env->getExtension("native_profiler");
        $__internal_df7e2556e8f33363a4ac3ebf029df94eed12ed3595b542b026e12f03fceab411->enter($__internal_df7e2556e8f33363a4ac3ebf029df94eed12ed3595b542b026e12f03fceab411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Movie:showMovie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df7e2556e8f33363a4ac3ebf029df94eed12ed3595b542b026e12f03fceab411->leave($__internal_df7e2556e8f33363a4ac3ebf029df94eed12ed3595b542b026e12f03fceab411_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c39f4870e057a2776b4537caff3e43d593f9fb44bc669e327f41ff94a52e2d01 = $this->env->getExtension("native_profiler");
        $__internal_c39f4870e057a2776b4537caff3e43d593f9fb44bc669e327f41ff94a52e2d01->enter($__internal_c39f4870e057a2776b4537caff3e43d593f9fb44bc669e327f41ff94a52e2d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FilmappBundle:Movie:showMovie";
        
        $__internal_c39f4870e057a2776b4537caff3e43d593f9fb44bc669e327f41ff94a52e2d01->leave($__internal_c39f4870e057a2776b4537caff3e43d593f9fb44bc669e327f41ff94a52e2d01_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e828f9f838ee7f92bc9d83336dc4ebe779a280ca0dd112ec75988a2faee9ab4 = $this->env->getExtension("native_profiler");
        $__internal_1e828f9f838ee7f92bc9d83336dc4ebe779a280ca0dd112ec75988a2faee9ab4->enter($__internal_1e828f9f838ee7f92bc9d83336dc4ebe779a280ca0dd112ec75988a2faee9ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " Nazwa: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "name", array()), "html", null, true);
        echo " 
 Opis: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "description", array()), "html", null, true);
        echo " 
 Ocena: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "rating", array()), "html", null, true);
        echo " 
 Gatunki:
 ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "genres", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 11
            echo "     ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
            echo "
     ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 13
            echo "         Brak gatunków
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
 ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmapp_movie_editmovie", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))), "html", null, true);
            echo "\">Edytuj film</a>
     <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmapp_movie_deletemovie", array("id" => $this->getAttribute((isset($context["movie"]) ? $context["movie"] : $this->getContext($context, "movie")), "id", array()))), "html", null, true);
            echo "\">Usun film</a>
 ";
        }
        // line 20
        echo " <br>
 <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("filmapp_movie_listmovies");
        echo "\">Wróć do listy</a>
 
 
";
        
        $__internal_1e828f9f838ee7f92bc9d83336dc4ebe779a280ca0dd112ec75988a2faee9ab4->leave($__internal_1e828f9f838ee7f92bc9d83336dc4ebe779a280ca0dd112ec75988a2faee9ab4_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Movie:showMovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  102 => 20,  97 => 18,  92 => 17,  90 => 16,  87 => 15,  80 => 13,  72 => 11,  67 => 10,  62 => 8,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}FilmappBundle:Movie:showMovie{% endblock %}*/
/* */
/* {% block body %}*/
/*  Nazwa: {{movie.name}} */
/*  Opis: {{movie.description}} */
/*  Ocena: {{movie.rating}} */
/*  Gatunki:*/
/*  {% for genre in movie.genres %}*/
/*      {{ genre.name }}*/
/*      {% else %}*/
/*          Brak gatunków*/
/*  {% endfor %}*/
/*  */
/*  {% if is_granted('ROLE_ADMIN') %}*/
/*      <a href="{{path('filmapp_movie_editmovie', {'id': movie.id})}}">Edytuj film</a>*/
/*      <a href="{{path('filmapp_movie_deletemovie', {'id': movie.id})}}">Usun film</a>*/
/*  {% endif %}*/
/*  <br>*/
/*  <a href="{{path('filmapp_movie_listmovies')}}">Wróć do listy</a>*/
/*  */
/*  */
/* {#{{dump(movie)}}#}*/
/* {% endblock %}*/
/* */
