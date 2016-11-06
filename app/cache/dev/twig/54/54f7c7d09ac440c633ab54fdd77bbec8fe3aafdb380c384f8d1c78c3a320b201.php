<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1334fb63ab4ad71453f9dab54e18b91c78fbf8f43516da2a0bc93a90481acc8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_1635934a8dea16a6ee2fa4b212c26e0fc0cfc1fe179ec824e6615c73697fdee2 = $this->env->getExtension("native_profiler");
        $__internal_1635934a8dea16a6ee2fa4b212c26e0fc0cfc1fe179ec824e6615c73697fdee2->enter($__internal_1635934a8dea16a6ee2fa4b212c26e0fc0cfc1fe179ec824e6615c73697fdee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1635934a8dea16a6ee2fa4b212c26e0fc0cfc1fe179ec824e6615c73697fdee2->leave($__internal_1635934a8dea16a6ee2fa4b212c26e0fc0cfc1fe179ec824e6615c73697fdee2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_835dde9e2e9dee43624c9af84a787390a6f3e893dbf9ac2f6a635ba7f3ef810c = $this->env->getExtension("native_profiler");
        $__internal_835dde9e2e9dee43624c9af84a787390a6f3e893dbf9ac2f6a635ba7f3ef810c->enter($__internal_835dde9e2e9dee43624c9af84a787390a6f3e893dbf9ac2f6a635ba7f3ef810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    
    ";
        // line 8
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 9
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_835dde9e2e9dee43624c9af84a787390a6f3e893dbf9ac2f6a635ba7f3ef810c->leave($__internal_835dde9e2e9dee43624c9af84a787390a6f3e893dbf9ac2f6a635ba7f3ef810c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     */
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
