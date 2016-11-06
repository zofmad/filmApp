<?php

/* FilmappBundle:Default:listActors.html.twig */
class __TwigTemplate_2d448ebb9b70a7de0b3cada2a5799e4b13c0cb242a591a3f15c244ed39c3387c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Default:listActors.html.twig", 4);
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
        $__internal_d3c13e12312250e852d25a1d3d7950af43ebd311b689ec35ef8939a892ad9963 = $this->env->getExtension("native_profiler");
        $__internal_d3c13e12312250e852d25a1d3d7950af43ebd311b689ec35ef8939a892ad9963->enter($__internal_d3c13e12312250e852d25a1d3d7950af43ebd311b689ec35ef8939a892ad9963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Default:listActors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c13e12312250e852d25a1d3d7950af43ebd311b689ec35ef8939a892ad9963->leave($__internal_d3c13e12312250e852d25a1d3d7950af43ebd311b689ec35ef8939a892ad9963_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3136744128fa4aee69113875a20c0206141ecfe72e89b04775f111e39d348d8f = $this->env->getExtension("native_profiler");
        $__internal_3136744128fa4aee69113875a20c0206141ecfe72e89b04775f111e39d348d8f->enter($__internal_3136744128fa4aee69113875a20c0206141ecfe72e89b04775f111e39d348d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actors"]) ? $context["actors"] : $this->getContext($context, "actors")));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 9
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("actor_show", array("id" => $this->getAttribute($context["actor"], "id", array()))), "html", null, true);
            echo "\">
            <br>
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "lastName", array()), "html", null, true);
            echo " </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    
";
        
        $__internal_3136744128fa4aee69113875a20c0206141ecfe72e89b04775f111e39d348d8f->leave($__internal_3136744128fa4aee69113875a20c0206141ecfe72e89b04775f111e39d348d8f_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Default:listActors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  51 => 11,  45 => 9,  40 => 8,  34 => 7,  11 => 4,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     {% for actor in actors %}*/
/*         <a href="{{ url('actor_show', {'id': actor.id}) }}">*/
/*             <br>*/
/*             {{ actor.firstName }} {{actor.lastName}} </a>*/
/*     {% endfor %}*/
/*     */
/* {% endblock %}*/
/* */
