<?php

/* FilmappBundle:Genre:showGenre.html.twig */
class __TwigTemplate_5d3d46ee9eb663660253b995b688a9ee8f3031d551e15832fc78d07f27306e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Genre:showGenre.html.twig", 1);
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
        $__internal_4436aac55c6c2f4a88d541a5f640f5dac799b1bd8ded59b0955187dd1a7bc21d = $this->env->getExtension("native_profiler");
        $__internal_4436aac55c6c2f4a88d541a5f640f5dac799b1bd8ded59b0955187dd1a7bc21d->enter($__internal_4436aac55c6c2f4a88d541a5f640f5dac799b1bd8ded59b0955187dd1a7bc21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Genre:showGenre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4436aac55c6c2f4a88d541a5f640f5dac799b1bd8ded59b0955187dd1a7bc21d->leave($__internal_4436aac55c6c2f4a88d541a5f640f5dac799b1bd8ded59b0955187dd1a7bc21d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f68344086afb17358b1e9b9d1d0c525db958d5e8d5f071b2457b0623807f6871 = $this->env->getExtension("native_profiler");
        $__internal_f68344086afb17358b1e9b9d1d0c525db958d5e8d5f071b2457b0623807f6871->enter($__internal_f68344086afb17358b1e9b9d1d0c525db958d5e8d5f071b2457b0623807f6871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FilmappBundle:Genre:showGenre";
        
        $__internal_f68344086afb17358b1e9b9d1d0c525db958d5e8d5f071b2457b0623807f6871->leave($__internal_f68344086afb17358b1e9b9d1d0c525db958d5e8d5f071b2457b0623807f6871_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2f033ad9eaf2872c18def6983cc0f59ea2321649932435dc8cb87a8576d3353 = $this->env->getExtension("native_profiler");
        $__internal_b2f033ad9eaf2872c18def6983cc0f59ea2321649932435dc8cb87a8576d3353->enter($__internal_b2f033ad9eaf2872c18def6983cc0f59ea2321649932435dc8cb87a8576d3353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Genre:showGenre page</h1>
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "id", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_b2f033ad9eaf2872c18def6983cc0f59ea2321649932435dc8cb87a8576d3353->leave($__internal_b2f033ad9eaf2872c18def6983cc0f59ea2321649932435dc8cb87a8576d3353_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Genre:showGenre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}FilmappBundle:Genre:showGenre{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Genre:showGenre page</h1>*/
/* {{genre.id}}{{genre.name}}*/
/* {% endblock %}*/
/* */
