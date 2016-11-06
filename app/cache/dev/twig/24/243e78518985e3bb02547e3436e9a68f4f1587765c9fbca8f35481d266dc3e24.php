<?php

/* FilmappBundle:Actor:new.html.twig */
class __TwigTemplate_f8d0d3c7ac8511760fce539b7e1474ef3062253bd2ec8ba7e10980f55bd3fb3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Actor:new.html.twig", 1);
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
        $__internal_3e7ebf5468fb5c1720ea702283b8e899a6039f251e62b8d084cd42b9ba2cd1ae = $this->env->getExtension("native_profiler");
        $__internal_3e7ebf5468fb5c1720ea702283b8e899a6039f251e62b8d084cd42b9ba2cd1ae->enter($__internal_3e7ebf5468fb5c1720ea702283b8e899a6039f251e62b8d084cd42b9ba2cd1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Actor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7ebf5468fb5c1720ea702283b8e899a6039f251e62b8d084cd42b9ba2cd1ae->leave($__internal_3e7ebf5468fb5c1720ea702283b8e899a6039f251e62b8d084cd42b9ba2cd1ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae181f7860e3c23630c3cee341be6eb8342d7a82be4c9d6b4b7a9bf5565dca88 = $this->env->getExtension("native_profiler");
        $__internal_ae181f7860e3c23630c3cee341be6eb8342d7a82be4c9d6b4b7a9bf5565dca88->enter($__internal_ae181f7860e3c23630c3cee341be6eb8342d7a82be4c9d6b4b7a9bf5565dca88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Actor creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("actor");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_ae181f7860e3c23630c3cee341be6eb8342d7a82be4c9d6b4b7a9bf5565dca88->leave($__internal_ae181f7860e3c23630c3cee341be6eb8342d7a82be4c9d6b4b7a9bf5565dca88_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Actor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Actor creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('actor') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
