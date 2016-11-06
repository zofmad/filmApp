<?php

/* FilmappBundle:Director:edit.html.twig */
class __TwigTemplate_b5c344dde49a95ee24350cdd997aef2eee6f6059fcdc9ebe502a7d5e1fde1545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Director:edit.html.twig", 1);
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
        $__internal_4fd03259586fff808f4aa14387f9d84b06257f76a6c3a1446c934c7716d66c46 = $this->env->getExtension("native_profiler");
        $__internal_4fd03259586fff808f4aa14387f9d84b06257f76a6c3a1446c934c7716d66c46->enter($__internal_4fd03259586fff808f4aa14387f9d84b06257f76a6c3a1446c934c7716d66c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Director:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd03259586fff808f4aa14387f9d84b06257f76a6c3a1446c934c7716d66c46->leave($__internal_4fd03259586fff808f4aa14387f9d84b06257f76a6c3a1446c934c7716d66c46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd56f9c8a14d1c743407cc176a4c116a4ff4f5fa4dc91085a766eb78f1fad5e = $this->env->getExtension("native_profiler");
        $__internal_0bd56f9c8a14d1c743407cc176a4c116a4ff4f5fa4dc91085a766eb78f1fad5e->enter($__internal_0bd56f9c8a14d1c743407cc176a4c116a4ff4f5fa4dc91085a766eb78f1fad5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Director edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("Director");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_0bd56f9c8a14d1c743407cc176a4c116a4ff4f5fa4dc91085a766eb78f1fad5e->leave($__internal_0bd56f9c8a14d1c743407cc176a4c116a4ff4f5fa4dc91085a766eb78f1fad5e_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Director:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Director edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('Director') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
