<?php

/* FilmappBundle:Actor:show.html.twig */
class __TwigTemplate_f857e40b85db2b304ffc0adeff2722e6070a64009854fb43ca1daabb3476814c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Actor:show.html.twig", 1);
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
        $__internal_0e00bbddfda81a0810b07bd71b00b5e6b2d52a1e595eb6cb655d67df86fa6f33 = $this->env->getExtension("native_profiler");
        $__internal_0e00bbddfda81a0810b07bd71b00b5e6b2d52a1e595eb6cb655d67df86fa6f33->enter($__internal_0e00bbddfda81a0810b07bd71b00b5e6b2d52a1e595eb6cb655d67df86fa6f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Actor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e00bbddfda81a0810b07bd71b00b5e6b2d52a1e595eb6cb655d67df86fa6f33->leave($__internal_0e00bbddfda81a0810b07bd71b00b5e6b2d52a1e595eb6cb655d67df86fa6f33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_894d6c0c09bd7bed62f625816c632b9dab54ace60a5db01988ee9e2d77b7564b = $this->env->getExtension("native_profiler");
        $__internal_894d6c0c09bd7bed62f625816c632b9dab54ace60a5db01988ee9e2d77b7564b->enter($__internal_894d6c0c09bd7bed62f625816c632b9dab54ace60a5db01988ee9e2d77b7564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Actor</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateofbirth</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateOfBirth", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Biography</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "biography", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rating", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("actor");
        echo "\">
            Back to the list
        </a>
    </li>
    ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "        <li>
            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actor_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                Edit
            </a>
        </li>
        <li>";
            // line 47
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
    ";
        }
        // line 49
        echo "</ul>
";
        
        $__internal_894d6c0c09bd7bed62f625816c632b9dab54ace60a5db01988ee9e2d77b7564b->leave($__internal_894d6c0c09bd7bed62f625816c632b9dab54ace60a5db01988ee9e2d77b7564b_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Actor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 47,  105 => 43,  102 => 42,  100 => 41,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Actor</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ entity.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastname</th>*/
/*                 <td>{{ entity.lastName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dateofbirth</th>*/
/*                 <td>{{ entity.dateOfBirth|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Biography</th>*/
/*                 <td>{{ entity.biography }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Rating</th>*/
/*                 <td>{{ entity.rating }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('actor') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     {% if is_granted('ROLE_ADMIN')%}*/
/*         <li>*/
/*             <a href="{{ path('actor_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     {% endif %}*/
/* </ul>*/
/* {% endblock %}*/
/* */
