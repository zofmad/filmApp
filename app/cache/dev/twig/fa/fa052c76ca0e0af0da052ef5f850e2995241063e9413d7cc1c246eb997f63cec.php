<?php

/* FilmappBundle:Genre:editGenre.html.twig */
class __TwigTemplate_1dc4fd177ae1574e2c8671ad42f0f0b72f10ccbf9b876d437cde87c7a0c4d9ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Genre:editGenre.html.twig", 1);
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
        $__internal_75df87db6fb9efcf6f6257f69163f31284eb54d7d42f95bf27317d5b0cc76dfd = $this->env->getExtension("native_profiler");
        $__internal_75df87db6fb9efcf6f6257f69163f31284eb54d7d42f95bf27317d5b0cc76dfd->enter($__internal_75df87db6fb9efcf6f6257f69163f31284eb54d7d42f95bf27317d5b0cc76dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Genre:editGenre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75df87db6fb9efcf6f6257f69163f31284eb54d7d42f95bf27317d5b0cc76dfd->leave($__internal_75df87db6fb9efcf6f6257f69163f31284eb54d7d42f95bf27317d5b0cc76dfd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20ad5a043c5df4e488bb8267ade7c9dbfd13f88e0b89711353c1d9fbc52c6a88 = $this->env->getExtension("native_profiler");
        $__internal_20ad5a043c5df4e488bb8267ade7c9dbfd13f88e0b89711353c1d9fbc52c6a88->enter($__internal_20ad5a043c5df4e488bb8267ade7c9dbfd13f88e0b89711353c1d9fbc52c6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FilmappBundle:Genre:editGenre";
        
        $__internal_20ad5a043c5df4e488bb8267ade7c9dbfd13f88e0b89711353c1d9fbc52c6a88->leave($__internal_20ad5a043c5df4e488bb8267ade7c9dbfd13f88e0b89711353c1d9fbc52c6a88_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42572006652afc3a8a9694b8c421bbf0e8ea193b3893be459d78e2ffc526c3e2 = $this->env->getExtension("native_profiler");
        $__internal_42572006652afc3a8a9694b8c421bbf0e8ea193b3893be459d78e2ffc526c3e2->enter($__internal_42572006652afc3a8a9694b8c421bbf0e8ea193b3893be459d78e2ffc526c3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Genre:editGenre page</h1>


    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_42572006652afc3a8a9694b8c421bbf0e8ea193b3893be459d78e2ffc526c3e2->leave($__internal_42572006652afc3a8a9694b8c421bbf0e8ea193b3893be459d78e2ffc526c3e2_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Genre:editGenre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}FilmappBundle:Genre:editGenre{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Genre:editGenre page</h1>*/
/* */
/* */
/*     {{form_start(form)}}*/
/*     {{form_widget(form)}}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
/* */
