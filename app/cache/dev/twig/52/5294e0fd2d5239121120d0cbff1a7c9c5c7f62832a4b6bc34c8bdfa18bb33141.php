<?php

/* FilmappBundle:Movie:listMovies.html.twig */
class __TwigTemplate_a2e94a290740c0220fb18484a7dbf474db8bf2306636799e95269b471baaf337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Movie:listMovies.html.twig", 3);
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
        $__internal_52bdc9e754339af1e5f3ac6ca82f782e845090808c96497592dbe5353bb6421c = $this->env->getExtension("native_profiler");
        $__internal_52bdc9e754339af1e5f3ac6ca82f782e845090808c96497592dbe5353bb6421c->enter($__internal_52bdc9e754339af1e5f3ac6ca82f782e845090808c96497592dbe5353bb6421c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Movie:listMovies.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bdc9e754339af1e5f3ac6ca82f782e845090808c96497592dbe5353bb6421c->leave($__internal_52bdc9e754339af1e5f3ac6ca82f782e845090808c96497592dbe5353bb6421c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3aca1414e3aa7b4a2e1ffc0b858cc39458e8aef073ff7e1a9ffa56bcb3d02d2 = $this->env->getExtension("native_profiler");
        $__internal_c3aca1414e3aa7b4a2e1ffc0b858cc39458e8aef073ff7e1a9ffa56bcb3d02d2->enter($__internal_c3aca1414e3aa7b4a2e1ffc0b858cc39458e8aef073ff7e1a9ffa56bcb3d02d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "   
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) ? $context["movies"] : $this->getContext($context, "movies")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 8
            echo "        <li>Nazwa: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "name", array()), "html", null, true);
            echo " 
            Rok produkcji: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "productionYear", array()), "html", null, true);
            echo " 
        </li>
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("filmapp_movie_showmovie", array("id" => $this->getAttribute($context["movie"], "id", array()))), "html", null, true);
            echo "\">
            Przejdz do filmu
        </a>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "        Nie istnieja filmy
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    <br><br>
    ";
        // line 18
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 19
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("filmapp_movie_createmovie");
            echo "\">Dodaj film</a>
    ";
        }
        
        $__internal_c3aca1414e3aa7b4a2e1ffc0b858cc39458e8aef073ff7e1a9ffa56bcb3d02d2->leave($__internal_c3aca1414e3aa7b4a2e1ffc0b858cc39458e8aef073ff7e1a9ffa56bcb3d02d2_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Movie:listMovies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  77 => 18,  74 => 17,  67 => 15,  58 => 11,  53 => 9,  48 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*    */
/*     {% for movie in movies %}*/
/*         <li>Nazwa: {{movie.name}} */
/*             Rok produkcji: {{movie.productionYear}} */
/*         </li>*/
/*         <a href="{{ path('filmapp_movie_showmovie', {'id': movie.id}) }}">*/
/*             Przejdz do filmu*/
/*         </a>*/
/*     {% else %}*/
/*         Nie istnieja filmy*/
/*     {% endfor %}*/
/*     <br><br>*/
/*     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}*/
/*         <a href="{{path('filmapp_movie_createmovie')}}">Dodaj film</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/*     */
/* */
/* */
/* */
/* */
/* */
/* */
