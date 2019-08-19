<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1eadbab23d60575f022d24f481279786dd527f593c5aff93b54b527da22ba3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b45fc1dc7a1e7b1d9f86324e60b19c5c15372584f3440b9bc0db698f20be399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b45fc1dc7a1e7b1d9f86324e60b19c5c15372584f3440b9bc0db698f20be399->enter($__internal_8b45fc1dc7a1e7b1d9f86324e60b19c5c15372584f3440b9bc0db698f20be399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_2c74f8b93506b1abca2f475f008a0ceb625cf73dded23ac52b15adb2fe4b2ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c74f8b93506b1abca2f475f008a0ceb625cf73dded23ac52b15adb2fe4b2ba5->enter($__internal_2c74f8b93506b1abca2f475f008a0ceb625cf73dded23ac52b15adb2fe4b2ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b45fc1dc7a1e7b1d9f86324e60b19c5c15372584f3440b9bc0db698f20be399->leave($__internal_8b45fc1dc7a1e7b1d9f86324e60b19c5c15372584f3440b9bc0db698f20be399_prof);

        
        $__internal_2c74f8b93506b1abca2f475f008a0ceb625cf73dded23ac52b15adb2fe4b2ba5->leave($__internal_2c74f8b93506b1abca2f475f008a0ceb625cf73dded23ac52b15adb2fe4b2ba5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd10d154d9c27e6f0cd0f29fe9dcc54b4f6ef6ae2939dabc9b2c408feb7237b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd10d154d9c27e6f0cd0f29fe9dcc54b4f6ef6ae2939dabc9b2c408feb7237b8->enter($__internal_fd10d154d9c27e6f0cd0f29fe9dcc54b4f6ef6ae2939dabc9b2c408feb7237b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f16782e8e4488f4ce63cdef112551e62b65a0b1ca55fda33fc74e1fed93acbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f16782e8e4488f4ce63cdef112551e62b65a0b1ca55fda33fc74e1fed93acbf->enter($__internal_1f16782e8e4488f4ce63cdef112551e62b65a0b1ca55fda33fc74e1fed93acbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1f16782e8e4488f4ce63cdef112551e62b65a0b1ca55fda33fc74e1fed93acbf->leave($__internal_1f16782e8e4488f4ce63cdef112551e62b65a0b1ca55fda33fc74e1fed93acbf_prof);

        
        $__internal_fd10d154d9c27e6f0cd0f29fe9dcc54b4f6ef6ae2939dabc9b2c408feb7237b8->leave($__internal_fd10d154d9c27e6f0cd0f29fe9dcc54b4f6ef6ae2939dabc9b2c408feb7237b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
