<?php

/* FilmappBundle:Genre:createGenre.html.twig */
class __TwigTemplate_f8a315c1817cded22ae03ad176ba072223ff2ee24b3b760f0eabf07a76edb88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Genre:createGenre.html.twig", 1);
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
        $__internal_9105c666617ea48699c929bcb58a6a4ac8ecb3670322811733c61378b8828f8c = $this->env->getExtension("native_profiler");
        $__internal_9105c666617ea48699c929bcb58a6a4ac8ecb3670322811733c61378b8828f8c->enter($__internal_9105c666617ea48699c929bcb58a6a4ac8ecb3670322811733c61378b8828f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Genre:createGenre.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9105c666617ea48699c929bcb58a6a4ac8ecb3670322811733c61378b8828f8c->leave($__internal_9105c666617ea48699c929bcb58a6a4ac8ecb3670322811733c61378b8828f8c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb577f894b5c505bd6b75ae6408fd58af1f98828050b1d82d4921b1ef756af3f = $this->env->getExtension("native_profiler");
        $__internal_cb577f894b5c505bd6b75ae6408fd58af1f98828050b1d82d4921b1ef756af3f->enter($__internal_cb577f894b5c505bd6b75ae6408fd58af1f98828050b1d82d4921b1ef756af3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FilmappBundle:Genre:createGenre";
        
        $__internal_cb577f894b5c505bd6b75ae6408fd58af1f98828050b1d82d4921b1ef756af3f->leave($__internal_cb577f894b5c505bd6b75ae6408fd58af1f98828050b1d82d4921b1ef756af3f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b59cd5c506bfafb0a4b874d9a8366d39d31dd8f607cac22d29dd095d1739861d = $this->env->getExtension("native_profiler");
        $__internal_b59cd5c506bfafb0a4b874d9a8366d39d31dd8f607cac22d29dd095d1739861d->enter($__internal_b59cd5c506bfafb0a4b874d9a8366d39d31dd8f607cac22d29dd095d1739861d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Genre:createGenre page</h1>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b59cd5c506bfafb0a4b874d9a8366d39d31dd8f607cac22d29dd095d1739861d->leave($__internal_b59cd5c506bfafb0a4b874d9a8366d39d31dd8f607cac22d29dd095d1739861d_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Genre:createGenre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 8,  59 => 7,  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* {% block title %}FilmappBundle:Genre:createGenre{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Genre:createGenre page</h1>*/
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
/* */
