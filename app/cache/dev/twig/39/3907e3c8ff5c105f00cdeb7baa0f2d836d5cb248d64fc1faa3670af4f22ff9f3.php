<?php

/* FilmappBundle:User:edit.html.twig */
class __TwigTemplate_0d2e6f8c4805d2acc3da7a933387bbeb42002595cbd1cf7581a8dcd62709e4e4 extends Twig_Template
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
        $__internal_c9ce5a5c105a7ff21f07664c6914248abef5dc9753b5eabdbca83114102b6037 = $this->env->getExtension("native_profiler");
        $__internal_c9ce5a5c105a7ff21f07664c6914248abef5dc9753b5eabdbca83114102b6037->enter($__internal_c9ce5a5c105a7ff21f07664c6914248abef5dc9753b5eabdbca83114102b6037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ce5a5c105a7ff21f07664c6914248abef5dc9753b5eabdbca83114102b6037->leave($__internal_c9ce5a5c105a7ff21f07664c6914248abef5dc9753b5eabdbca83114102b6037_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51fc99e7c548630341520e32dc60c463e550bfdef9da0979b219aa5147da5cdf = $this->env->getExtension("native_profiler");
        $__internal_51fc99e7c548630341520e32dc60c463e550bfdef9da0979b219aa5147da5cdf->enter($__internal_51fc99e7c548630341520e32dc60c463e550bfdef9da0979b219aa5147da5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51fc99e7c548630341520e32dc60c463e550bfdef9da0979b219aa5147da5cdf->leave($__internal_51fc99e7c548630341520e32dc60c463e550bfdef9da0979b219aa5147da5cdf_prof);

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
