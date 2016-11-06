<?php

/* FilmappBundle:Director:show.html.twig */
class __TwigTemplate_b81061448f92e19ea6ef0320d8caabe52d59f4a88ce6ded66b689d3ca7a15650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Director:show.html.twig", 1);
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
        $__internal_56c0c6f53726ec4858da1f2eebb54a9cd95d23e05430d44873bbf0e94c613162 = $this->env->getExtension("native_profiler");
        $__internal_56c0c6f53726ec4858da1f2eebb54a9cd95d23e05430d44873bbf0e94c613162->enter($__internal_56c0c6f53726ec4858da1f2eebb54a9cd95d23e05430d44873bbf0e94c613162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Director:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56c0c6f53726ec4858da1f2eebb54a9cd95d23e05430d44873bbf0e94c613162->leave($__internal_56c0c6f53726ec4858da1f2eebb54a9cd95d23e05430d44873bbf0e94c613162_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c51d17b4a719b42a73886ed771e4643f58bc3f47dbfb1fb96a77700a2e399981 = $this->env->getExtension("native_profiler");
        $__internal_c51d17b4a719b42a73886ed771e4643f58bc3f47dbfb1fb96a77700a2e399981->enter($__internal_c51d17b4a719b42a73886ed771e4643f58bc3f47dbfb1fb96a77700a2e399981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Director</h1>

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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateOfBirth", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rating</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rating", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("Director");
        echo "\">
            Back to the list
        </a>
    </li>
    ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 38
            echo "        <li>
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Director_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                Edit
            </a>
        </li>
        <li>";
            // line 43
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
    ";
        }
        // line 45
        echo "</ul>
";
        
        $__internal_c51d17b4a719b42a73886ed771e4643f58bc3f47dbfb1fb96a77700a2e399981->leave($__internal_c51d17b4a719b42a73886ed771e4643f58bc3f47dbfb1fb96a77700a2e399981_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Director:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  98 => 39,  95 => 38,  93 => 37,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Director</h1>*/
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
/*                 <td>{{ entity.dateOfBirth|date('Y-m-d H:i:s') }}</td>*/
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
/*         <a href="{{ path('Director') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*         <li>*/
/*             <a href="{{ path('Director_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     {% endif %}*/
/* </ul>*/
/* {% endblock %}*/
/* */
