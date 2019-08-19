<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b69534218bad8483fb5f40266f685f18e9e276e5dca8fed796d7fee49a3924c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_954c71f1555aadf49664e68f0f65a77ab3d047b08a01d04d6e2428248c86bb3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954c71f1555aadf49664e68f0f65a77ab3d047b08a01d04d6e2428248c86bb3f->enter($__internal_954c71f1555aadf49664e68f0f65a77ab3d047b08a01d04d6e2428248c86bb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_aa646548deaafe5f013ac41aea29c9f5b07b06e1c892515489c0b0f4685bfb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa646548deaafe5f013ac41aea29c9f5b07b06e1c892515489c0b0f4685bfb9e->enter($__internal_aa646548deaafe5f013ac41aea29c9f5b07b06e1c892515489c0b0f4685bfb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_954c71f1555aadf49664e68f0f65a77ab3d047b08a01d04d6e2428248c86bb3f->leave($__internal_954c71f1555aadf49664e68f0f65a77ab3d047b08a01d04d6e2428248c86bb3f_prof);

        
        $__internal_aa646548deaafe5f013ac41aea29c9f5b07b06e1c892515489c0b0f4685bfb9e->leave($__internal_aa646548deaafe5f013ac41aea29c9f5b07b06e1c892515489c0b0f4685bfb9e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a7381030473288c942769fc0e02c13303d9936ecb025a7348b0091fa49690a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7381030473288c942769fc0e02c13303d9936ecb025a7348b0091fa49690a95->enter($__internal_a7381030473288c942769fc0e02c13303d9936ecb025a7348b0091fa49690a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8a3ed40e06da2af2d46d2d23e2b8bc86fde7d2be8b2d28d15545fc9f7f778e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3ed40e06da2af2d46d2d23e2b8bc86fde7d2be8b2d28d15545fc9f7f778e65->enter($__internal_8a3ed40e06da2af2d46d2d23e2b8bc86fde7d2be8b2d28d15545fc9f7f778e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8a3ed40e06da2af2d46d2d23e2b8bc86fde7d2be8b2d28d15545fc9f7f778e65->leave($__internal_8a3ed40e06da2af2d46d2d23e2b8bc86fde7d2be8b2d28d15545fc9f7f778e65_prof);

        
        $__internal_a7381030473288c942769fc0e02c13303d9936ecb025a7348b0091fa49690a95->leave($__internal_a7381030473288c942769fc0e02c13303d9936ecb025a7348b0091fa49690a95_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6da2fe13bba689ad34550b15516fc29120ec54a5de85e87062fe4a1e5bb62f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da2fe13bba689ad34550b15516fc29120ec54a5de85e87062fe4a1e5bb62f26->enter($__internal_6da2fe13bba689ad34550b15516fc29120ec54a5de85e87062fe4a1e5bb62f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_31948facebd1f702e706d181801da03803b30b8e3ec69ff5b8cd9ea928cfa776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31948facebd1f702e706d181801da03803b30b8e3ec69ff5b8cd9ea928cfa776->enter($__internal_31948facebd1f702e706d181801da03803b30b8e3ec69ff5b8cd9ea928cfa776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_31948facebd1f702e706d181801da03803b30b8e3ec69ff5b8cd9ea928cfa776->leave($__internal_31948facebd1f702e706d181801da03803b30b8e3ec69ff5b8cd9ea928cfa776_prof);

        
        $__internal_6da2fe13bba689ad34550b15516fc29120ec54a5de85e87062fe4a1e5bb62f26->leave($__internal_6da2fe13bba689ad34550b15516fc29120ec54a5de85e87062fe4a1e5bb62f26_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7506009c5bde37271ceb31db2c77087e75c81fee0b5aa79dd8878d04a08a8441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7506009c5bde37271ceb31db2c77087e75c81fee0b5aa79dd8878d04a08a8441->enter($__internal_7506009c5bde37271ceb31db2c77087e75c81fee0b5aa79dd8878d04a08a8441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c8ce2cb9c6bdd3fba34b163bc1d16e52d4f1bff86d6c1fb458d4d5cda8158caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ce2cb9c6bdd3fba34b163bc1d16e52d4f1bff86d6c1fb458d4d5cda8158caa->enter($__internal_c8ce2cb9c6bdd3fba34b163bc1d16e52d4f1bff86d6c1fb458d4d5cda8158caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c8ce2cb9c6bdd3fba34b163bc1d16e52d4f1bff86d6c1fb458d4d5cda8158caa->leave($__internal_c8ce2cb9c6bdd3fba34b163bc1d16e52d4f1bff86d6c1fb458d4d5cda8158caa_prof);

        
        $__internal_7506009c5bde37271ceb31db2c77087e75c81fee0b5aa79dd8878d04a08a8441->leave($__internal_7506009c5bde37271ceb31db2c77087e75c81fee0b5aa79dd8878d04a08a8441_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
