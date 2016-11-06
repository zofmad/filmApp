<?php

/* FilmappBundle:User:index.html.twig */
class __TwigTemplate_184e0c544703bce34e44e1b349ed87316aed42cdd768528cf334df4e14619a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:User:index.html.twig", 1);
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
        $__internal_41da3d95ae1a0188a80ce6ae03940d65dab9d512afc7e63b2f1eaf74c2c73e8a = $this->env->getExtension("native_profiler");
        $__internal_41da3d95ae1a0188a80ce6ae03940d65dab9d512afc7e63b2f1eaf74c2c73e8a->enter($__internal_41da3d95ae1a0188a80ce6ae03940d65dab9d512afc7e63b2f1eaf74c2c73e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41da3d95ae1a0188a80ce6ae03940d65dab9d512afc7e63b2f1eaf74c2c73e8a->leave($__internal_41da3d95ae1a0188a80ce6ae03940d65dab9d512afc7e63b2f1eaf74c2c73e8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8797801b68274e404f15b0daf0d4d34af9287c7eec622e0d2bcac6a03212738c = $this->env->getExtension("native_profiler");
        $__internal_8797801b68274e404f15b0daf0d4d34af9287c7eec622e0d2bcac6a03212738c->enter($__internal_8797801b68274e404f15b0daf0d4d34af9287c7eec622e0d2bcac6a03212738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_8797801b68274e404f15b0daf0d4d34af9287c7eec622e0d2bcac6a03212738c->leave($__internal_8797801b68274e404f15b0daf0d4d34af9287c7eec622e0d2bcac6a03212738c_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  94 => 32,  82 => 26,  76 => 23,  67 => 19,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Username</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>*/
/*                     <a href="{{ path('user_show', { 'id': entity.id }) }}">{{ entity.username}}</a></td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('user_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('user_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
