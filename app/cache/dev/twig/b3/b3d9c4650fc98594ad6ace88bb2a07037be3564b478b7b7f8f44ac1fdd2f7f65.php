<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ac6c1260a9da9239f72135b4f608794cd600fee9c50ceaa90296ab77b0b6d685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c330d1dbbaac992afb8e5890750cec628b7fc82f0bb65d1acdcc4155113b004a = $this->env->getExtension("native_profiler");
        $__internal_c330d1dbbaac992afb8e5890750cec628b7fc82f0bb65d1acdcc4155113b004a->enter($__internal_c330d1dbbaac992afb8e5890750cec628b7fc82f0bb65d1acdcc4155113b004a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
";
        // line 7
        echo "    <body>
";
        // line 9
        echo "        <div>
       
            ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "FOSUserBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a> |
                
                 
                <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("filmapp_default_index");
            echo "\"> main page </a>
                
            ";
        } else {
            // line 21
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 23
        echo "            
        </div>

        ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 27
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 28
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 29
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 30
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
        }
        // line 35
        echo "
        <div>
            ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "        </div>
        
    </body>
</html>
";
        
        $__internal_c330d1dbbaac992afb8e5890750cec628b7fc82f0bb65d1acdcc4155113b004a->leave($__internal_c330d1dbbaac992afb8e5890750cec628b7fc82f0bb65d1acdcc4155113b004a_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_d13ebce72ac1377973ea8ad4c5ff7ffa704d626e79ea64c8adcaf707689f5552 = $this->env->getExtension("native_profiler");
        $__internal_d13ebce72ac1377973ea8ad4c5ff7ffa704d626e79ea64c8adcaf707689f5552->enter($__internal_d13ebce72ac1377973ea8ad4c5ff7ffa704d626e79ea64c8adcaf707689f5552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 41
        echo "            ";
        
        $__internal_d13ebce72ac1377973ea8ad4c5ff7ffa704d626e79ea64c8adcaf707689f5552->leave($__internal_d13ebce72ac1377973ea8ad4c5ff7ffa704d626e79ea64c8adcaf707689f5552_prof);

    }

    // line 38
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fba0c8e0b0922c27d58bce135c0e73617bb6893962f13957020a015ab5105778 = $this->env->getExtension("native_profiler");
        $__internal_fba0c8e0b0922c27d58bce135c0e73617bb6893962f13957020a015ab5105778->enter($__internal_fba0c8e0b0922c27d58bce135c0e73617bb6893962f13957020a015ab5105778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 39
        echo "                
            ";
        
        $__internal_fba0c8e0b0922c27d58bce135c0e73617bb6893962f13957020a015ab5105778->leave($__internal_fba0c8e0b0922c27d58bce135c0e73617bb6893962f13957020a015ab5105778_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 39,  144 => 38,  137 => 41,  134 => 38,  128 => 37,  117 => 42,  115 => 37,  111 => 35,  108 => 34,  102 => 33,  93 => 30,  88 => 29,  83 => 28,  78 => 27,  76 => 26,  71 => 23,  63 => 21,  57 => 18,  50 => 14,  46 => 13,  39 => 12,  37 => 11,  33 => 9,  30 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* {#         {% form_theme form 'bootstrap_3_layout.html.twig' %}#}*/
/* {#         {% form_theme form 'bootstrap_3_layout.html.twig' %}#}*/
/*     <body>*/
/* {#        <h1>Bazowy szablon</h1>#}*/
/*         <div>*/
/*        */
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user}, 'FOSUserBundle') }} {{ app.user.username}} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a> |*/
/*                 */
/*                  */
/*                 <a href="{{ path('filmapp_default_index') }}"> main page </a>*/
/*                 */
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*             */
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block content %}*/
/*             {% block fos_user_content %}*/
/*                 */
/*             {% endblock fos_user_content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         */
/*     </body>*/
/* </html>*/
/* */
