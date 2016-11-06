<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9883878eaf2fc20c5720042865eb1805b6dc33fd7f8c0ee053e7d52134e65808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_372f29974f84333270350418c87fcc66e88b4973b17614cbce7f277b3968d3ad = $this->env->getExtension("native_profiler");
        $__internal_372f29974f84333270350418c87fcc66e88b4973b17614cbce7f277b3968d3ad->enter($__internal_372f29974f84333270350418c87fcc66e88b4973b17614cbce7f277b3968d3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_372f29974f84333270350418c87fcc66e88b4973b17614cbce7f277b3968d3ad->leave($__internal_372f29974f84333270350418c87fcc66e88b4973b17614cbce7f277b3968d3ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_431e940807ad59236ad09f68c72cf9e6174fea18e1d845be467911402037a4ef = $this->env->getExtension("native_profiler");
        $__internal_431e940807ad59236ad09f68c72cf9e6174fea18e1d845be467911402037a4ef->enter($__internal_431e940807ad59236ad09f68c72cf9e6174fea18e1d845be467911402037a4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_431e940807ad59236ad09f68c72cf9e6174fea18e1d845be467911402037a4ef->leave($__internal_431e940807ad59236ad09f68c72cf9e6174fea18e1d845be467911402037a4ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2685f9b99a6b3870594edb42a086da18efcd58a6ee2eab3da19a25c4266107df = $this->env->getExtension("native_profiler");
        $__internal_2685f9b99a6b3870594edb42a086da18efcd58a6ee2eab3da19a25c4266107df->enter($__internal_2685f9b99a6b3870594edb42a086da18efcd58a6ee2eab3da19a25c4266107df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2685f9b99a6b3870594edb42a086da18efcd58a6ee2eab3da19a25c4266107df->leave($__internal_2685f9b99a6b3870594edb42a086da18efcd58a6ee2eab3da19a25c4266107df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_22d70f9956ac76f5a48965be0af1204a17842b2f8bcc51ec0af5330ca6a342a3 = $this->env->getExtension("native_profiler");
        $__internal_22d70f9956ac76f5a48965be0af1204a17842b2f8bcc51ec0af5330ca6a342a3->enter($__internal_22d70f9956ac76f5a48965be0af1204a17842b2f8bcc51ec0af5330ca6a342a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_22d70f9956ac76f5a48965be0af1204a17842b2f8bcc51ec0af5330ca6a342a3->leave($__internal_22d70f9956ac76f5a48965be0af1204a17842b2f8bcc51ec0af5330ca6a342a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
