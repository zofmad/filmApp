<?php

/* FilmappBundle:Default:listDirectors.html.twig */
class __TwigTemplate_df7f8ed12a791492ac11e1bab05e420eb2a2393a2d05250cd1c1f4681e42a07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Default:listDirectors.html.twig", 5);
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
        $__internal_6a72713abe4a2f73191f8a66ada1ac7d3d203317cdfa4d076da90440e3ca1150 = $this->env->getExtension("native_profiler");
        $__internal_6a72713abe4a2f73191f8a66ada1ac7d3d203317cdfa4d076da90440e3ca1150->enter($__internal_6a72713abe4a2f73191f8a66ada1ac7d3d203317cdfa4d076da90440e3ca1150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Default:listDirectors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a72713abe4a2f73191f8a66ada1ac7d3d203317cdfa4d076da90440e3ca1150->leave($__internal_6a72713abe4a2f73191f8a66ada1ac7d3d203317cdfa4d076da90440e3ca1150_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea457d5cbe34a3f05e070d397d58fee242a7457706e624590823a2ddf65e862 = $this->env->getExtension("native_profiler");
        $__internal_0ea457d5cbe34a3f05e070d397d58fee242a7457706e624590823a2ddf65e862->enter($__internal_0ea457d5cbe34a3f05e070d397d58fee242a7457706e624590823a2ddf65e862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["directors"]) ? $context["directors"] : $this->getContext($context, "directors")));
        foreach ($context['_seq'] as $context["_key"] => $context["director"]) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("Director_show", array("id" => $this->getAttribute($context["director"], "id", array()))), "html", null, true);
            echo "\">
            <br>
            ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["director"], "lastName", array()), "html", null, true);
            echo "
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['director'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
    ";
        
        $__internal_0ea457d5cbe34a3f05e070d397d58fee242a7457706e624590823a2ddf65e862->leave($__internal_0ea457d5cbe34a3f05e070d397d58fee242a7457706e624590823a2ddf65e862_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Default:listDirectors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  53 => 12,  47 => 10,  43 => 9,  40 => 8,  34 => 7,  11 => 5,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     */
/*     {% for director in directors %}*/
/*         <a href="{{ url('Director_show', { 'id': director.id }) }}">*/
/*             <br>*/
/*             {{ director.firstName }} {{director.lastName }}*/
/*         </a>*/
/*         {% endfor %} */
/*     {% endblock %}*/
