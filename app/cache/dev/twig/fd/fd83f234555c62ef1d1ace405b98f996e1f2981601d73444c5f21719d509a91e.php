<?php

/* FilmappBundle:User:show.html.twig */
class __TwigTemplate_3e789c0e6da6995050d90c2ab1344d0799c711fe2b16f02caa8b7615034e4efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:User:show.html.twig", 1);
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
        $__internal_5e53536042c3aca57a0ae06775e3222a1da3851b9125c627c0674fd156f76797 = $this->env->getExtension("native_profiler");
        $__internal_5e53536042c3aca57a0ae06775e3222a1da3851b9125c627c0674fd156f76797->enter($__internal_5e53536042c3aca57a0ae06775e3222a1da3851b9125c627c0674fd156f76797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e53536042c3aca57a0ae06775e3222a1da3851b9125c627c0674fd156f76797->leave($__internal_5e53536042c3aca57a0ae06775e3222a1da3851b9125c627c0674fd156f76797_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b988971fa89aabbb4d5145328b92cc894bac34699b8117e754913b9533dc45a = $this->env->getExtension("native_profiler");
        $__internal_1b988971fa89aabbb4d5145328b92cc894bac34699b8117e754913b9533dc45a->enter($__internal_1b988971fa89aabbb4d5145328b92cc894bac34699b8117e754913b9533dc45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>User</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id </th>
                
                <th>Username </th> 
                
                <th>Mail </th> 
                
                <th>Last login </th> 
                
            </tr>
            <tr>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo " </td> 
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo " </td> 
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo " </td> 
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array()), "date", array()), "html", null, true);
        echo " </td> 
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">
            Back to the list
        </a>
    </li>
    
    ";
        // line 34
        if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 35
            echo "        <li>
            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\">
                Edit
            </a>
        </li>
    ";
        }
        // line 41
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 42
            echo "        <li>";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
            echo "</li>
    ";
        }
        // line 44
        echo "</ul>
";
        
        $__internal_1b988971fa89aabbb4d5145328b92cc894bac34699b8117e754913b9533dc45a->leave($__internal_1b988971fa89aabbb4d5145328b92cc894bac34699b8117e754913b9533dc45a_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  103 => 42,  100 => 41,  92 => 36,  89 => 35,  87 => 34,  79 => 29,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>User</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id </th>*/
/*                 */
/*                 <th>Username </th> */
/*                 */
/*                 <th>Mail </th> */
/*                 */
/*                 <th>Last login </th> */
/*                 */
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ entity.id }} </td> */
/*                 <td>{{ entity.username}} </td> */
/*                 <td>{{ entity.email}} </td> */
/*                 <td>{{ entity.lastLogin.date}} </td> */
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     */
/*     {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')%}*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </li>*/
/*     {% endif %}*/
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     {% endif %}*/
/* </ul>*/
/* {% endblock %}*/
/* */
