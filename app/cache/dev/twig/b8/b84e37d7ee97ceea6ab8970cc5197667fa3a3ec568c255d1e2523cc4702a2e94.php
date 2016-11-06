<?php

/* FilmappBundle:User:edit.html.twig */
class __TwigTemplate_c9f6cfa108fa0a4db639e11ca8e0306f5fdf740c9f9f0e70e3a772396f6051be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:User:edit.html.twig", 1);
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
        $__internal_1cc931b967d80d3362670e0888e4b2bf64f242085a844c3ee3345ce5717d77ae = $this->env->getExtension("native_profiler");
        $__internal_1cc931b967d80d3362670e0888e4b2bf64f242085a844c3ee3345ce5717d77ae->enter($__internal_1cc931b967d80d3362670e0888e4b2bf64f242085a844c3ee3345ce5717d77ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cc931b967d80d3362670e0888e4b2bf64f242085a844c3ee3345ce5717d77ae->leave($__internal_1cc931b967d80d3362670e0888e4b2bf64f242085a844c3ee3345ce5717d77ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aa07d817ca2a24502e3baad2f708c0bc5160e7266ce44f4969a567a94b16730 = $this->env->getExtension("native_profiler");
        $__internal_3aa07d817ca2a24502e3baad2f708c0bc5160e7266ce44f4969a567a94b16730->enter($__internal_3aa07d817ca2a24502e3baad2f708c0bc5160e7266ce44f4969a567a94b16730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user");
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
        
        $__internal_3aa07d817ca2a24502e3baad2f708c0bc5160e7266ce44f4969a567a94b16730->leave($__internal_3aa07d817ca2a24502e3baad2f708c0bc5160e7266ce44f4969a567a94b16730_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:User:edit.html.twig";
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
/*     <h1>User edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
