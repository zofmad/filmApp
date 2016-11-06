<?php

/* ::showUsers.html.twig */
class __TwigTemplate_f28892c50b9933ef7d8693e086280576875c7cc6d1a8b85e6cfa575b7c315a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3530389423970861a315c523b3f7d00206dee56d19356753fcc268dd1eccdd2e = $this->env->getExtension("native_profiler");
        $__internal_3530389423970861a315c523b3f7d00206dee56d19356753fcc268dd1eccdd2e->enter($__internal_3530389423970861a315c523b3f7d00206dee56d19356753fcc268dd1eccdd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::showUsers.html.twig"));

        // line 3
        echo "Lista userow:
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 7
            echo "        <br>
        Mail: <li>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</li>
        
        <li>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "roles", array()), 0, array(), "array"), "html", null, true);
            echo "</li>
        <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("filmapp_user_changerole", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Zmien role</a>
";
            // line 13
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        Nie ma userow.
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
    


";
        
        $__internal_3530389423970861a315c523b3f7d00206dee56d19356753fcc268dd1eccdd2e->leave($__internal_3530389423970861a315c523b3f7d00206dee56d19356753fcc268dd1eccdd2e_prof);

    }

    public function getTemplateName()
    {
        return "::showUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  51 => 14,  46 => 13,  42 => 11,  38 => 10,  33 => 8,  30 => 7,  25 => 4,  22 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {#{% extends '::base.html.twig' %}#}*/
/* Lista userow:*/
/* {% for user in users %}*/
/* {#    if{% hasrole('ROLE_USER') %}#}*/
/* {#        <li>{{dump(user)}}</li>#}*/
/*         <br>*/
/*         Mail: <li>{{user.email}}</li>*/
/*         */
/*         <li>{{user.roles[0]}}</li>*/
/*         <a href="{{url("filmapp_user_changerole", {'id': user.id})}}">Zmien role</a>*/
/* {#        <a href#}*/
/*     {% else %}*/
/*         Nie ma userow.*/
/* {% endfor %} */
/*     */
/* */
/* */
/* */
