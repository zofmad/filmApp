<?php

/* FilmappBundle:User:new.html.twig */
class __TwigTemplate_4ddf4709225c6dae700b69bbb5748b114b55fee673d6d1474c2b8f2db54d5210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:User:new.html.twig", 1);
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
        $__internal_03d752decd8c1cf9aa50ad3dedef4f5ccbd2fc967b4c9d936cfacd711401c8bf = $this->env->getExtension("native_profiler");
        $__internal_03d752decd8c1cf9aa50ad3dedef4f5ccbd2fc967b4c9d936cfacd711401c8bf->enter($__internal_03d752decd8c1cf9aa50ad3dedef4f5ccbd2fc967b4c9d936cfacd711401c8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d752decd8c1cf9aa50ad3dedef4f5ccbd2fc967b4c9d936cfacd711401c8bf->leave($__internal_03d752decd8c1cf9aa50ad3dedef4f5ccbd2fc967b4c9d936cfacd711401c8bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_108412ecd13456d576cd6e8072060303e0663e5985fc037a4e0468f786d1f8fe = $this->env->getExtension("native_profiler");
        $__internal_108412ecd13456d576cd6e8072060303e0663e5985fc037a4e0468f786d1f8fe->enter($__internal_108412ecd13456d576cd6e8072060303e0663e5985fc037a4e0468f786d1f8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_108412ecd13456d576cd6e8072060303e0663e5985fc037a4e0468f786d1f8fe->leave($__internal_108412ecd13456d576cd6e8072060303e0663e5985fc037a4e0468f786d1f8fe_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:User:new.html.twig";
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
/*     <h1>User creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
