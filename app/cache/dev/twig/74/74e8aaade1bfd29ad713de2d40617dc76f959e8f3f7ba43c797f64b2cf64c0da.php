<?php

/* FilmappBundle:Director:index.html.twig */
class __TwigTemplate_9782313dd3e0df509bd877fc687bc2d71146fadc1511ce74006ced5f4e2c02e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Director:index.html.twig", 1);
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
        $__internal_15dc77bb2c3d31da931e2fbcedb5486a9604ff0db06a6e71049d94bafb09d8d4 = $this->env->getExtension("native_profiler");
        $__internal_15dc77bb2c3d31da931e2fbcedb5486a9604ff0db06a6e71049d94bafb09d8d4->enter($__internal_15dc77bb2c3d31da931e2fbcedb5486a9604ff0db06a6e71049d94bafb09d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Director:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dc77bb2c3d31da931e2fbcedb5486a9604ff0db06a6e71049d94bafb09d8d4->leave($__internal_15dc77bb2c3d31da931e2fbcedb5486a9604ff0db06a6e71049d94bafb09d8d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52e66821bf1d053c0c43976eff9227a66cf3f34f8fde74ca23b02d0ec1e8c3bd = $this->env->getExtension("native_profiler");
        $__internal_52e66821bf1d053c0c43976eff9227a66cf3f34f8fde74ca23b02d0ec1e8c3bd->enter($__internal_52e66821bf1d053c0c43976eff9227a66cf3f34f8fde74ca23b02d0ec1e8c3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Director list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Dateofbirth</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Director_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["entity"], "dateOfBirth", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateOfBirth", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rating", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Director_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    ";
            // line 30
            if ($this->env->getExtension('security')->isGranted("USER_ADMIN")) {
                // line 31
                echo "                    <li>
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Director_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                    </li>
                    ";
            }
            // line 35
            echo "                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        <ul>
        ";
        // line 43
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 44
            echo "        <li>
            <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("Director_new");
            echo "\">
                Create a new entry
            </a>
        </li>
        ";
        }
        // line 50
        echo "    </ul>
    ";
        
        $__internal_52e66821bf1d053c0c43976eff9227a66cf3f34f8fde74ca23b02d0ec1e8c3bd->leave($__internal_52e66821bf1d053c0c43976eff9227a66cf3f34f8fde74ca23b02d0ec1e8c3bd_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Director:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  126 => 45,  123 => 44,  121 => 43,  115 => 39,  106 => 35,  100 => 32,  97 => 31,  95 => 30,  90 => 28,  83 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Director list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Dateofbirth</th>*/
/*                 <th>Rating</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('Director_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.firstName }}</td>*/
/*                 <td>{{ entity.lastName }}</td>*/
/*                 <td>{% if entity.dateOfBirth %}{{ entity.dateOfBirth|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.rating }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('Director_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     {% if is_granted('USER_ADMIN') %}*/
/*                     <li>*/
/*                         <a href="{{ path('Director_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}*/
/*         <li>*/
/*             <a href="{{ path('Director_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*         {% endif %}*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
