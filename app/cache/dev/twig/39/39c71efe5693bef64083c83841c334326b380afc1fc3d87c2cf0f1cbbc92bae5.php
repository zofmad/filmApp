<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_437accafafd6eeac010528dcc8bc260fb09532440bd09e8419674e1b5eda5db3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0b5decd5d585e3853e1e7e88186aa97381f52ff698a7d8b1ee9e23458f32de1c = $this->env->getExtension("native_profiler");
        $__internal_0b5decd5d585e3853e1e7e88186aa97381f52ff698a7d8b1ee9e23458f32de1c->enter($__internal_0b5decd5d585e3853e1e7e88186aa97381f52ff698a7d8b1ee9e23458f32de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5decd5d585e3853e1e7e88186aa97381f52ff698a7d8b1ee9e23458f32de1c->leave($__internal_0b5decd5d585e3853e1e7e88186aa97381f52ff698a7d8b1ee9e23458f32de1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e976a19746bc04ccc3d3daf8c4a9ef230d6cf885544df28e27541901676ec85b = $this->env->getExtension("native_profiler");
        $__internal_e976a19746bc04ccc3d3daf8c4a9ef230d6cf885544df28e27541901676ec85b->enter($__internal_e976a19746bc04ccc3d3daf8c4a9ef230d6cf885544df28e27541901676ec85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e976a19746bc04ccc3d3daf8c4a9ef230d6cf885544df28e27541901676ec85b->leave($__internal_e976a19746bc04ccc3d3daf8c4a9ef230d6cf885544df28e27541901676ec85b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
