<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8a5bcd21c561efc20f770312b0fbe1312ee1b53b7ae7584a22d348c3a788dbbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35aae8c48940b03dc3dd8289e67ba6c8377338b206054066e85fce9c94e1a18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35aae8c48940b03dc3dd8289e67ba6c8377338b206054066e85fce9c94e1a18e->enter($__internal_35aae8c48940b03dc3dd8289e67ba6c8377338b206054066e85fce9c94e1a18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f13105e03f31402d9de747cd1dd6735a7926ee259cc65feedbbf7b9f5dc2ee46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13105e03f31402d9de747cd1dd6735a7926ee259cc65feedbbf7b9f5dc2ee46->enter($__internal_f13105e03f31402d9de747cd1dd6735a7926ee259cc65feedbbf7b9f5dc2ee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35aae8c48940b03dc3dd8289e67ba6c8377338b206054066e85fce9c94e1a18e->leave($__internal_35aae8c48940b03dc3dd8289e67ba6c8377338b206054066e85fce9c94e1a18e_prof);

        
        $__internal_f13105e03f31402d9de747cd1dd6735a7926ee259cc65feedbbf7b9f5dc2ee46->leave($__internal_f13105e03f31402d9de747cd1dd6735a7926ee259cc65feedbbf7b9f5dc2ee46_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0383546df434867e3c199cbf2626a93617265d65dcc9bb4c3226465a8a25fe56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0383546df434867e3c199cbf2626a93617265d65dcc9bb4c3226465a8a25fe56->enter($__internal_0383546df434867e3c199cbf2626a93617265d65dcc9bb4c3226465a8a25fe56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_534139eb329c248da63f1606829db43abc64d89cca371eb3eff116f8f494b397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534139eb329c248da63f1606829db43abc64d89cca371eb3eff116f8f494b397->enter($__internal_534139eb329c248da63f1606829db43abc64d89cca371eb3eff116f8f494b397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_534139eb329c248da63f1606829db43abc64d89cca371eb3eff116f8f494b397->leave($__internal_534139eb329c248da63f1606829db43abc64d89cca371eb3eff116f8f494b397_prof);

        
        $__internal_0383546df434867e3c199cbf2626a93617265d65dcc9bb4c3226465a8a25fe56->leave($__internal_0383546df434867e3c199cbf2626a93617265d65dcc9bb4c3226465a8a25fe56_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dac3e2a280a5ef7bad33ca0c1d8bb8dbda31b94cb0a89eaa529efcf4d6d2c2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac3e2a280a5ef7bad33ca0c1d8bb8dbda31b94cb0a89eaa529efcf4d6d2c2eb->enter($__internal_dac3e2a280a5ef7bad33ca0c1d8bb8dbda31b94cb0a89eaa529efcf4d6d2c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc25e28e98c4c8264bec6e246b7e38059c83ea1e31c5cd9479258a769873d031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc25e28e98c4c8264bec6e246b7e38059c83ea1e31c5cd9479258a769873d031->enter($__internal_fc25e28e98c4c8264bec6e246b7e38059c83ea1e31c5cd9479258a769873d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fc25e28e98c4c8264bec6e246b7e38059c83ea1e31c5cd9479258a769873d031->leave($__internal_fc25e28e98c4c8264bec6e246b7e38059c83ea1e31c5cd9479258a769873d031_prof);

        
        $__internal_dac3e2a280a5ef7bad33ca0c1d8bb8dbda31b94cb0a89eaa529efcf4d6d2c2eb->leave($__internal_dac3e2a280a5ef7bad33ca0c1d8bb8dbda31b94cb0a89eaa529efcf4d6d2c2eb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
