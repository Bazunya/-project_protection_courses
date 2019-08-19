<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3fae85a1349efe2df00086b87fc4523cb571d12c5b4b3a5fb4e031d632b79df3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_3952d3ae285156f1454aadbd8781cc49fd1d14a71713bd8e79564eb2c37f6691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3952d3ae285156f1454aadbd8781cc49fd1d14a71713bd8e79564eb2c37f6691->enter($__internal_3952d3ae285156f1454aadbd8781cc49fd1d14a71713bd8e79564eb2c37f6691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_4574ced9e92c06c60831dd7e12a51d6bce429897caa0ccdec4ac48e22ccba572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4574ced9e92c06c60831dd7e12a51d6bce429897caa0ccdec4ac48e22ccba572->enter($__internal_4574ced9e92c06c60831dd7e12a51d6bce429897caa0ccdec4ac48e22ccba572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3952d3ae285156f1454aadbd8781cc49fd1d14a71713bd8e79564eb2c37f6691->leave($__internal_3952d3ae285156f1454aadbd8781cc49fd1d14a71713bd8e79564eb2c37f6691_prof);

        
        $__internal_4574ced9e92c06c60831dd7e12a51d6bce429897caa0ccdec4ac48e22ccba572->leave($__internal_4574ced9e92c06c60831dd7e12a51d6bce429897caa0ccdec4ac48e22ccba572_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80b49bff0c70fb1c3f5dcbdbeebbad6b729bc9298a9828e60657ff36209d078b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b49bff0c70fb1c3f5dcbdbeebbad6b729bc9298a9828e60657ff36209d078b->enter($__internal_80b49bff0c70fb1c3f5dcbdbeebbad6b729bc9298a9828e60657ff36209d078b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_505b5762113efc9496a732a99011f3a9f9e974b551acd6f72c1c00fef67cd4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505b5762113efc9496a732a99011f3a9f9e974b551acd6f72c1c00fef67cd4dd->enter($__internal_505b5762113efc9496a732a99011f3a9f9e974b551acd6f72c1c00fef67cd4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_505b5762113efc9496a732a99011f3a9f9e974b551acd6f72c1c00fef67cd4dd->leave($__internal_505b5762113efc9496a732a99011f3a9f9e974b551acd6f72c1c00fef67cd4dd_prof);

        
        $__internal_80b49bff0c70fb1c3f5dcbdbeebbad6b729bc9298a9828e60657ff36209d078b->leave($__internal_80b49bff0c70fb1c3f5dcbdbeebbad6b729bc9298a9828e60657ff36209d078b_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
