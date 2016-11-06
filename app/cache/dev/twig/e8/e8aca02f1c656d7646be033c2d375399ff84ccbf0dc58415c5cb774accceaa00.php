<?php

/* FilmappBundle:Actor:edit.html.twig */
class __TwigTemplate_3968f4391c01e908b58b488bb96d985eca520f4e21f7130d4bf135f58cc50788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Actor:edit.html.twig", 1);
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
        $__internal_9f8831c6124c88ce0c124913b1df708f0b1b680f777dde25a57a1cbc9478bbd3 = $this->env->getExtension("native_profiler");
        $__internal_9f8831c6124c88ce0c124913b1df708f0b1b680f777dde25a57a1cbc9478bbd3->enter($__internal_9f8831c6124c88ce0c124913b1df708f0b1b680f777dde25a57a1cbc9478bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Actor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f8831c6124c88ce0c124913b1df708f0b1b680f777dde25a57a1cbc9478bbd3->leave($__internal_9f8831c6124c88ce0c124913b1df708f0b1b680f777dde25a57a1cbc9478bbd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_588bdf1240410784a60c575c1b172c3b51ad437d1560eabcdf36b5dabc854cce = $this->env->getExtension("native_profiler");
        $__internal_588bdf1240410784a60c575c1b172c3b51ad437d1560eabcdf36b5dabc854cce->enter($__internal_588bdf1240410784a60c575c1b172c3b51ad437d1560eabcdf36b5dabc854cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Actor edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_588bdf1240410784a60c575c1b172c3b51ad437d1560eabcdf36b5dabc854cce->leave($__internal_588bdf1240410784a60c575c1b172c3b51ad437d1560eabcdf36b5dabc854cce_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Actor:edit.html.twig";
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
/*     <h1>Actor edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('actor') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
