<?php

/* FilmappBundle:Actor:index.html.twig */
class __TwigTemplate_12e7f8ee73d27cca061dffb5e6c9934c9d12a370bbda2a6e601683837e1c348d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Actor:index.html.twig", 1);
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
        $__internal_1c11900d879a36454353bb48056106b1ea0c8ab5124ae6a7fce07d53168a94aa = $this->env->getExtension("native_profiler");
        $__internal_1c11900d879a36454353bb48056106b1ea0c8ab5124ae6a7fce07d53168a94aa->enter($__internal_1c11900d879a36454353bb48056106b1ea0c8ab5124ae6a7fce07d53168a94aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Actor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c11900d879a36454353bb48056106b1ea0c8ab5124ae6a7fce07d53168a94aa->leave($__internal_1c11900d879a36454353bb48056106b1ea0c8ab5124ae6a7fce07d53168a94aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89d8c290befc0bc359a992112aa204096e43507a825b7e3585ba2c15c21a000f = $this->env->getExtension("native_profiler");
        $__internal_89d8c290befc0bc359a992112aa204096e43507a825b7e3585ba2c15c21a000f->enter($__internal_89d8c290befc0bc359a992112aa204096e43507a825b7e3585ba2c15c21a000f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Actor list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Dateofbirth</th>
                <th>Biography</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actor_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["entity"], "dateOfBirth", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateOfBirth", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "biography", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rating", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actor_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    ";
            // line 32
            if ($this->env->getExtension('security')->isGranted("USER_ADMIN")) {
                // line 33
                echo "                        <li>
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("actor_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                        </li>
                    ";
            }
            // line 37
            echo "                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

        <ul>
        ";
        // line 45
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 46
            echo "            <li>
                <a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("actor_new");
            echo "\">
                    Create a new entry
                </a>
            </li>
        ";
        }
        // line 52
        echo "    </ul>
    ";
        
        $__internal_89d8c290befc0bc359a992112aa204096e43507a825b7e3585ba2c15c21a000f->leave($__internal_89d8c290befc0bc359a992112aa204096e43507a825b7e3585ba2c15c21a000f_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Actor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  131 => 47,  128 => 46,  126 => 45,  120 => 41,  111 => 37,  105 => 34,  102 => 33,  100 => 32,  95 => 30,  88 => 26,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Actor list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Firstname</th>*/
/*                 <th>Lastname</th>*/
/*                 <th>Dateofbirth</th>*/
/*                 <th>Biography</th>*/
/*                 <th>Rating</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('actor_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.firstName }}</td>*/
/*                 <td>{{ entity.lastName }}</td>*/
/*                 <td>{% if entity.dateOfBirth %}{{ entity.dateOfBirth|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.biography }}</td>*/
/*                 <td>{{ entity.rating }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('actor_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     {% if is_granted('USER_ADMIN') %}*/
/*                         <li>*/
/*                             <a href="{{ path('actor_edit', { 'id': entity.id }) }}">edit</a>*/
/*                         </li>*/
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
/*             <li>*/
/*                 <a href="{{ path('actor_new') }}">*/
/*                     Create a new entry*/
/*                 </a>*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
