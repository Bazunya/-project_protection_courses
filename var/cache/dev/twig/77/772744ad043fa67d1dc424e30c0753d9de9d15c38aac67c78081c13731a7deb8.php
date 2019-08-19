<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e82d79d6e83d1e48a7a552afba108fe69c134c28bafb641c0cf9cf1086d88b79 extends Twig_Template
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
        $__internal_19d28e056d63d7191c2b79096386fe60215637c231e9873e8585b52351e333a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d28e056d63d7191c2b79096386fe60215637c231e9873e8585b52351e333a1->enter($__internal_19d28e056d63d7191c2b79096386fe60215637c231e9873e8585b52351e333a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_fdf3c4c618dc9717fd507c5c11619eca4155281b1b0649df07d5cfa1b87fe7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf3c4c618dc9717fd507c5c11619eca4155281b1b0649df07d5cfa1b87fe7da->enter($__internal_fdf3c4c618dc9717fd507c5c11619eca4155281b1b0649df07d5cfa1b87fe7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_19d28e056d63d7191c2b79096386fe60215637c231e9873e8585b52351e333a1->leave($__internal_19d28e056d63d7191c2b79096386fe60215637c231e9873e8585b52351e333a1_prof);

        
        $__internal_fdf3c4c618dc9717fd507c5c11619eca4155281b1b0649df07d5cfa1b87fe7da->leave($__internal_fdf3c4c618dc9717fd507c5c11619eca4155281b1b0649df07d5cfa1b87fe7da_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_be5efe0f01b39ee7610f8f61570940e5f2e4fbad8f1d542dca2d4499a01b356a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5efe0f01b39ee7610f8f61570940e5f2e4fbad8f1d542dca2d4499a01b356a->enter($__internal_be5efe0f01b39ee7610f8f61570940e5f2e4fbad8f1d542dca2d4499a01b356a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e48a2c19a793f7ed39aacdc0b27372ad2576fed742a403688e5c576dfd4a23f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48a2c19a793f7ed39aacdc0b27372ad2576fed742a403688e5c576dfd4a23f6->enter($__internal_e48a2c19a793f7ed39aacdc0b27372ad2576fed742a403688e5c576dfd4a23f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e48a2c19a793f7ed39aacdc0b27372ad2576fed742a403688e5c576dfd4a23f6->leave($__internal_e48a2c19a793f7ed39aacdc0b27372ad2576fed742a403688e5c576dfd4a23f6_prof);

        
        $__internal_be5efe0f01b39ee7610f8f61570940e5f2e4fbad8f1d542dca2d4499a01b356a->leave($__internal_be5efe0f01b39ee7610f8f61570940e5f2e4fbad8f1d542dca2d4499a01b356a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_887f67ea66d2e9dcc8ff7d86494afb159ea79db9b4a5c6c17a924cb68a9c0580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887f67ea66d2e9dcc8ff7d86494afb159ea79db9b4a5c6c17a924cb68a9c0580->enter($__internal_887f67ea66d2e9dcc8ff7d86494afb159ea79db9b4a5c6c17a924cb68a9c0580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_aec9ceb9e905e9b7ba6fda7aa53899c599c27eac1a86b25e7b13ae43f85ce330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec9ceb9e905e9b7ba6fda7aa53899c599c27eac1a86b25e7b13ae43f85ce330->enter($__internal_aec9ceb9e905e9b7ba6fda7aa53899c599c27eac1a86b25e7b13ae43f85ce330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aec9ceb9e905e9b7ba6fda7aa53899c599c27eac1a86b25e7b13ae43f85ce330->leave($__internal_aec9ceb9e905e9b7ba6fda7aa53899c599c27eac1a86b25e7b13ae43f85ce330_prof);

        
        $__internal_887f67ea66d2e9dcc8ff7d86494afb159ea79db9b4a5c6c17a924cb68a9c0580->leave($__internal_887f67ea66d2e9dcc8ff7d86494afb159ea79db9b4a5c6c17a924cb68a9c0580_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_24c2f55d50eeeb89aa14859ee8b2bfe9496b34b160b5f6cce8c9b8853671e6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c2f55d50eeeb89aa14859ee8b2bfe9496b34b160b5f6cce8c9b8853671e6cc->enter($__internal_24c2f55d50eeeb89aa14859ee8b2bfe9496b34b160b5f6cce8c9b8853671e6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e38f924f4c3d878889a25205398c98f8bf2bf57cce82bbf18659757d1694ebb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38f924f4c3d878889a25205398c98f8bf2bf57cce82bbf18659757d1694ebb6->enter($__internal_e38f924f4c3d878889a25205398c98f8bf2bf57cce82bbf18659757d1694ebb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e38f924f4c3d878889a25205398c98f8bf2bf57cce82bbf18659757d1694ebb6->leave($__internal_e38f924f4c3d878889a25205398c98f8bf2bf57cce82bbf18659757d1694ebb6_prof);

        
        $__internal_24c2f55d50eeeb89aa14859ee8b2bfe9496b34b160b5f6cce8c9b8853671e6cc->leave($__internal_24c2f55d50eeeb89aa14859ee8b2bfe9496b34b160b5f6cce8c9b8853671e6cc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
