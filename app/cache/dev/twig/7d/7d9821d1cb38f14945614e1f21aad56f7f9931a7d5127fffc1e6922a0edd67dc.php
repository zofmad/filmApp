<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ec667e72a9cb2693b5c12e177c448754051f1d36e7ed0988f149a74405643bd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_264e99a83bede4a69afcb5ff4adc8f1c39fb268fe9f5ef441ef0c58dadbc5543 = $this->env->getExtension("native_profiler");
        $__internal_264e99a83bede4a69afcb5ff4adc8f1c39fb268fe9f5ef441ef0c58dadbc5543->enter($__internal_264e99a83bede4a69afcb5ff4adc8f1c39fb268fe9f5ef441ef0c58dadbc5543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_264e99a83bede4a69afcb5ff4adc8f1c39fb268fe9f5ef441ef0c58dadbc5543->leave($__internal_264e99a83bede4a69afcb5ff4adc8f1c39fb268fe9f5ef441ef0c58dadbc5543_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1ae0fe426d40cca41d09b55b4833421d67a70a164091325806a4696aee27552 = $this->env->getExtension("native_profiler");
        $__internal_d1ae0fe426d40cca41d09b55b4833421d67a70a164091325806a4696aee27552->enter($__internal_d1ae0fe426d40cca41d09b55b4833421d67a70a164091325806a4696aee27552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d1ae0fe426d40cca41d09b55b4833421d67a70a164091325806a4696aee27552->leave($__internal_d1ae0fe426d40cca41d09b55b4833421d67a70a164091325806a4696aee27552_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
