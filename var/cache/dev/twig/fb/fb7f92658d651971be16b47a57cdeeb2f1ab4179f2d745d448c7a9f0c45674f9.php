<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_9c8296c954295786db69ac285ffde09ba8e458fac4241fa23912055bbfb3a0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_a77df1e32d168aec2f43321492a15bb0aa8604f3e13c9f0d1fb5f6159befa890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77df1e32d168aec2f43321492a15bb0aa8604f3e13c9f0d1fb5f6159befa890->enter($__internal_a77df1e32d168aec2f43321492a15bb0aa8604f3e13c9f0d1fb5f6159befa890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_b2d50ca829b281ddf26fb93563171118aa4856f061778bb3073981896c10140c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d50ca829b281ddf26fb93563171118aa4856f061778bb3073981896c10140c->enter($__internal_b2d50ca829b281ddf26fb93563171118aa4856f061778bb3073981896c10140c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a77df1e32d168aec2f43321492a15bb0aa8604f3e13c9f0d1fb5f6159befa890->leave($__internal_a77df1e32d168aec2f43321492a15bb0aa8604f3e13c9f0d1fb5f6159befa890_prof);

        
        $__internal_b2d50ca829b281ddf26fb93563171118aa4856f061778bb3073981896c10140c->leave($__internal_b2d50ca829b281ddf26fb93563171118aa4856f061778bb3073981896c10140c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cedf081196f36a9530a38681a17cda2bdab92e6db61a304160d6dd81a7f93b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cedf081196f36a9530a38681a17cda2bdab92e6db61a304160d6dd81a7f93b7->enter($__internal_2cedf081196f36a9530a38681a17cda2bdab92e6db61a304160d6dd81a7f93b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc095857de019be8f01ee177be22d7292138fad9793c1a9236e7c8353c9376f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc095857de019be8f01ee177be22d7292138fad9793c1a9236e7c8353c9376f0->enter($__internal_fc095857de019be8f01ee177be22d7292138fad9793c1a9236e7c8353c9376f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fc095857de019be8f01ee177be22d7292138fad9793c1a9236e7c8353c9376f0->leave($__internal_fc095857de019be8f01ee177be22d7292138fad9793c1a9236e7c8353c9376f0_prof);

        
        $__internal_2cedf081196f36a9530a38681a17cda2bdab92e6db61a304160d6dd81a7f93b7->leave($__internal_2cedf081196f36a9530a38681a17cda2bdab92e6db61a304160d6dd81a7f93b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
