<?php

/* FilmappBundle:Director:new.html.twig */
class __TwigTemplate_90aea9e773fc4f909b6442b4ae4a4a15f1e44adc42c34c5ce461827b42b07cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Director:new.html.twig", 1);
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
        $__internal_b711efbefd14a346c5fc6de2d15a44a381ce780d38f751acd50cca89dfe6c485 = $this->env->getExtension("native_profiler");
        $__internal_b711efbefd14a346c5fc6de2d15a44a381ce780d38f751acd50cca89dfe6c485->enter($__internal_b711efbefd14a346c5fc6de2d15a44a381ce780d38f751acd50cca89dfe6c485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Director:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b711efbefd14a346c5fc6de2d15a44a381ce780d38f751acd50cca89dfe6c485->leave($__internal_b711efbefd14a346c5fc6de2d15a44a381ce780d38f751acd50cca89dfe6c485_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_57182d0cef0366cd41f12fbd2c16eaa18f61f49c1b22fd9244a7abb4b77fcfc6 = $this->env->getExtension("native_profiler");
        $__internal_57182d0cef0366cd41f12fbd2c16eaa18f61f49c1b22fd9244a7abb4b77fcfc6->enter($__internal_57182d0cef0366cd41f12fbd2c16eaa18f61f49c1b22fd9244a7abb4b77fcfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Director creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("Director");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_57182d0cef0366cd41f12fbd2c16eaa18f61f49c1b22fd9244a7abb4b77fcfc6->leave($__internal_57182d0cef0366cd41f12fbd2c16eaa18f61f49c1b22fd9244a7abb4b77fcfc6_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Director:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  47 => 7,  43 => 5,  37 => 4,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Director creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('Director') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
