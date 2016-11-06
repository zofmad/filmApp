<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7ffee218eea6906fc94136bd83bf118f47027a46b19304b766dbe0aef14d5e6f extends Twig_Template
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
        $__internal_b21db17ce03abb9d953491bbc0dd7c1be93de7911e6795b5453c5d90a21d7320 = $this->env->getExtension("native_profiler");
        $__internal_b21db17ce03abb9d953491bbc0dd7c1be93de7911e6795b5453c5d90a21d7320->enter($__internal_b21db17ce03abb9d953491bbc0dd7c1be93de7911e6795b5453c5d90a21d7320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21db17ce03abb9d953491bbc0dd7c1be93de7911e6795b5453c5d90a21d7320->leave($__internal_b21db17ce03abb9d953491bbc0dd7c1be93de7911e6795b5453c5d90a21d7320_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f0ef8b26f7b27e507a08f93fe00ba9522c7476f2257453127f803f8f68f0da5 = $this->env->getExtension("native_profiler");
        $__internal_7f0ef8b26f7b27e507a08f93fe00ba9522c7476f2257453127f803f8f68f0da5->enter($__internal_7f0ef8b26f7b27e507a08f93fe00ba9522c7476f2257453127f803f8f68f0da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7f0ef8b26f7b27e507a08f93fe00ba9522c7476f2257453127f803f8f68f0da5->leave($__internal_7f0ef8b26f7b27e507a08f93fe00ba9522c7476f2257453127f803f8f68f0da5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_110095ea4f2e988a063c21604842b9ed8da1b87864d1ca4e4bc223d67de7852b = $this->env->getExtension("native_profiler");
        $__internal_110095ea4f2e988a063c21604842b9ed8da1b87864d1ca4e4bc223d67de7852b->enter($__internal_110095ea4f2e988a063c21604842b9ed8da1b87864d1ca4e4bc223d67de7852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_110095ea4f2e988a063c21604842b9ed8da1b87864d1ca4e4bc223d67de7852b->leave($__internal_110095ea4f2e988a063c21604842b9ed8da1b87864d1ca4e4bc223d67de7852b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3baeff83a6caa5ae29e36d631ed439e92ec79caf9a6f85f35a01145a2fbda7a7 = $this->env->getExtension("native_profiler");
        $__internal_3baeff83a6caa5ae29e36d631ed439e92ec79caf9a6f85f35a01145a2fbda7a7->enter($__internal_3baeff83a6caa5ae29e36d631ed439e92ec79caf9a6f85f35a01145a2fbda7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3baeff83a6caa5ae29e36d631ed439e92ec79caf9a6f85f35a01145a2fbda7a7->leave($__internal_3baeff83a6caa5ae29e36d631ed439e92ec79caf9a6f85f35a01145a2fbda7a7_prof);

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
