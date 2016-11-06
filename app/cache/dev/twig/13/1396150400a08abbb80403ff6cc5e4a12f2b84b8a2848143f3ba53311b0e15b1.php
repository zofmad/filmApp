<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e6338fb635b05284cd178cfc1a1324f433f279e5f2f8a20d88beda946982410a extends Twig_Template
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
        $__internal_ae359c966d93574109739eec6466a5d15db0381528dbab25da5c89d0ebe2db67 = $this->env->getExtension("native_profiler");
        $__internal_ae359c966d93574109739eec6466a5d15db0381528dbab25da5c89d0ebe2db67->enter($__internal_ae359c966d93574109739eec6466a5d15db0381528dbab25da5c89d0ebe2db67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae359c966d93574109739eec6466a5d15db0381528dbab25da5c89d0ebe2db67->leave($__internal_ae359c966d93574109739eec6466a5d15db0381528dbab25da5c89d0ebe2db67_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6a480357b05e7be7c54dcaece1fef84dfebae2558bc0f985df65908509fc0b4 = $this->env->getExtension("native_profiler");
        $__internal_d6a480357b05e7be7c54dcaece1fef84dfebae2558bc0f985df65908509fc0b4->enter($__internal_d6a480357b05e7be7c54dcaece1fef84dfebae2558bc0f985df65908509fc0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6a480357b05e7be7c54dcaece1fef84dfebae2558bc0f985df65908509fc0b4->leave($__internal_d6a480357b05e7be7c54dcaece1fef84dfebae2558bc0f985df65908509fc0b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fda020526d4bbf60555e0a56dbdd8a7e14c48aa900e79c5186eecd34828f51f = $this->env->getExtension("native_profiler");
        $__internal_1fda020526d4bbf60555e0a56dbdd8a7e14c48aa900e79c5186eecd34828f51f->enter($__internal_1fda020526d4bbf60555e0a56dbdd8a7e14c48aa900e79c5186eecd34828f51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fda020526d4bbf60555e0a56dbdd8a7e14c48aa900e79c5186eecd34828f51f->leave($__internal_1fda020526d4bbf60555e0a56dbdd8a7e14c48aa900e79c5186eecd34828f51f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_13d0876b2ad3cacde110933924004bb23eb1c774362f0e4fab5bcc9c82430c5c = $this->env->getExtension("native_profiler");
        $__internal_13d0876b2ad3cacde110933924004bb23eb1c774362f0e4fab5bcc9c82430c5c->enter($__internal_13d0876b2ad3cacde110933924004bb23eb1c774362f0e4fab5bcc9c82430c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_13d0876b2ad3cacde110933924004bb23eb1c774362f0e4fab5bcc9c82430c5c->leave($__internal_13d0876b2ad3cacde110933924004bb23eb1c774362f0e4fab5bcc9c82430c5c_prof);

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
