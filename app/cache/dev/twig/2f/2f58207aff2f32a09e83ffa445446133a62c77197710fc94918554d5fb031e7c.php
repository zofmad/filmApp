<?php

/* FilmappBundle:Genre:listGenres.html.twig */
class __TwigTemplate_a18171f47a60fac9d6b91426348e8e173baac34b5307e3ca3485b95904c3f1fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FilmappBundle:Genre:listGenres.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ec4a9e30bccf81393f4c45db45855fbd31afa0c97b1725d4e75becda25fe8d6 = $this->env->getExtension("native_profiler");
        $__internal_7ec4a9e30bccf81393f4c45db45855fbd31afa0c97b1725d4e75becda25fe8d6->enter($__internal_7ec4a9e30bccf81393f4c45db45855fbd31afa0c97b1725d4e75becda25fe8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FilmappBundle:Genre:listGenres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ec4a9e30bccf81393f4c45db45855fbd31afa0c97b1725d4e75becda25fe8d6->leave($__internal_7ec4a9e30bccf81393f4c45db45855fbd31afa0c97b1725d4e75becda25fe8d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd11d245e5e13de39e2e117b9e37769eb499f5702960c1b5fc5640e0c75023b4 = $this->env->getExtension("native_profiler");
        $__internal_dd11d245e5e13de39e2e117b9e37769eb499f5702960c1b5fc5640e0c75023b4->enter($__internal_dd11d245e5e13de39e2e117b9e37769eb499f5702960c1b5fc5640e0c75023b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FilmappBundle:Genre:listGenres";
        
        $__internal_dd11d245e5e13de39e2e117b9e37769eb499f5702960c1b5fc5640e0c75023b4->leave($__internal_dd11d245e5e13de39e2e117b9e37769eb499f5702960c1b5fc5640e0c75023b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb977fa191aee9f928b53c5bc56e6e509ffad63ed7b90eff0953ed22e9aedf27 = $this->env->getExtension("native_profiler");
        $__internal_bb977fa191aee9f928b53c5bc56e6e509ffad63ed7b90eff0953ed22e9aedf27->enter($__internal_bb977fa191aee9f928b53c5bc56e6e509ffad63ed7b90eff0953ed22e9aedf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Genre:listGenres page</h1>

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 9
            echo "
    <li>Nazwa: ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
            echo "</li>
    
    
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    
";
        
        $__internal_bb977fa191aee9f928b53c5bc56e6e509ffad63ed7b90eff0953ed22e9aedf27->leave($__internal_bb977fa191aee9f928b53c5bc56e6e509ffad63ed7b90eff0953ed22e9aedf27_prof);

    }

    public function getTemplateName()
    {
        return "FilmappBundle:Genre:listGenres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  64 => 10,  61 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}FilmappBundle:Genre:listGenres{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Genre:listGenres page</h1>*/
/* */
/* {% for genre in genres %}*/
/* */
/*     <li>Nazwa: {{genre.name}}</li>*/
/*     */
/*     */
/*     */
/*     */
/* {% endfor %}*/
/*     */
/* {% endblock %}*/
/* */
