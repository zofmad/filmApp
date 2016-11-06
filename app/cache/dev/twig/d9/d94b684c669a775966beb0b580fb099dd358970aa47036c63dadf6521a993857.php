<?php

/* FilmappBundle:Movie:createMovie.html.twig */
class __TwigTemplate_938ca1802a3ba9f273312c9b7611b0d0ef2e228864acd01bfd98975dc64ad309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Movie:createMovie.html.twig", 1);
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
        $__internal_b5890deec483677ac19a541f2efa5cd01ca94587c7ade70aaf248531d9427fc9 = $this->env->getExtension("native_profiler");
        $__internal_b5890deec483677ac19a541f2efa5cd01ca94587c7ade70aaf248531d9427fc9->enter($__internal_b5890deec483677ac19a541f2efa5cd01ca94587c7ade70aaf248531d9427fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Movie:createMovie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5890deec483677ac19a541f2efa5cd01ca94587c7ade70aaf248531d9427fc9->leave($__internal_b5890deec483677ac19a541f2efa5cd01ca94587c7ade70aaf248531d9427fc9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab2fc24e3c41a3ae39351b2e1543b86684e56421da7a75fe70ba5154e48d86ce = $this->env->getExtension("native_profiler");
        $__internal_ab2fc24e3c41a3ae39351b2e1543b86684e56421da7a75fe70ba5154e48d86ce->enter($__internal_ab2fc24e3c41a3ae39351b2e1543b86684e56421da7a75fe70ba5154e48d86ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FilmappBundle:Movie:createMovie";
        
        $__internal_ab2fc24e3c41a3ae39351b2e1543b86684e56421da7a75fe70ba5154e48d86ce->leave($__internal_ab2fc24e3c41a3ae39351b2e1543b86684e56421da7a75fe70ba5154e48d86ce_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_713627e7760a4743b47a42d643194f6bf8ac9702858678fc52ba2550f84077f0 = $this->env->getExtension("native_profiler");
        $__internal_713627e7760a4743b47a42d643194f6bf8ac9702858678fc52ba2550f84077f0->enter($__internal_713627e7760a4743b47a42d643194f6bf8ac9702858678fc52ba2550f84077f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Welcome to the Movie:createMovie page</h1>

    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div>
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </div>
        <div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "production_year", array()), 'label');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "production_year", array()), 'widget');
        echo "
    </div>
        <div>
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
    </div>
        <div>
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rating", array()), 'label');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rating", array()), 'widget');
        echo "
    </div>
   ";
        // line 29
        echo "
";
        // line 31
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_713627e7760a4743b47a42d643194f6bf8ac9702858678fc52ba2550f84077f0->leave($__internal_713627e7760a4743b47a42d643194f6bf8ac9702858678fc52ba2550f84077f0_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Movie:createMovie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  101 => 29,  96 => 24,  92 => 23,  86 => 20,  82 => 19,  76 => 16,  72 => 15,  66 => 12,  62 => 11,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {#{% form_theme form 'bootstrap_3_layout.html.twig' %}#}*/
/* */
/* {% block title %}FilmappBundle:Movie:createMovie{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Movie:createMovie page</h1>*/
/* */
/*     {{form_start(form)}}*/
/*     <div>*/
/*     {{form_label(form.name)}}*/
/*     {{form_widget(form.name)}}*/
/*     </div>*/
/*         <div>*/
/*     {{form_label(form.production_year)}}*/
/*     {{form_widget(form.production_year)}}*/
/*     </div>*/
/*         <div>*/
/*     {{form_label(form.description)}}*/
/*     {{form_widget(form.description)}}*/
/*     </div>*/
/*         <div>*/
/*     {{form_label(form.rating)}}*/
/*     {{form_widget(form.rating)}}*/
/*     </div>*/
/*    {# <div>*/
/*         {{ form_widget(form.save)}}*/
/*     </div>#}*/
/* */
/* {#    {{form_widget(form)}}#}*/
/*     {{form_end(form)}}*/
/* {% endblock %}*/
/* */
