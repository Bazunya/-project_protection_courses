<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_2a308bf5c7ef6b76e7635dc34be67136a3a45492e5d2e6b9a50359e93e7d5480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_92b68b09cee79c4ed9cdca5e2de8d76d491816f9b9fad26959e391cd9b29feec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b68b09cee79c4ed9cdca5e2de8d76d491816f9b9fad26959e391cd9b29feec->enter($__internal_92b68b09cee79c4ed9cdca5e2de8d76d491816f9b9fad26959e391cd9b29feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f44283b569585a099291e533142838401765d3e2d914934032cf687c132a27e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44283b569585a099291e533142838401765d3e2d914934032cf687c132a27e5->enter($__internal_f44283b569585a099291e533142838401765d3e2d914934032cf687c132a27e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b68b09cee79c4ed9cdca5e2de8d76d491816f9b9fad26959e391cd9b29feec->leave($__internal_92b68b09cee79c4ed9cdca5e2de8d76d491816f9b9fad26959e391cd9b29feec_prof);

        
        $__internal_f44283b569585a099291e533142838401765d3e2d914934032cf687c132a27e5->leave($__internal_f44283b569585a099291e533142838401765d3e2d914934032cf687c132a27e5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4a79fd174e413eb6d62e53d4afcc1b6822f473a62acd2a8ccf0272025192fea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a79fd174e413eb6d62e53d4afcc1b6822f473a62acd2a8ccf0272025192fea2->enter($__internal_4a79fd174e413eb6d62e53d4afcc1b6822f473a62acd2a8ccf0272025192fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ba548ac58131e3e39a0b6fc2779f0b0e756557ca1834703641f4eb345a6b5932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba548ac58131e3e39a0b6fc2779f0b0e756557ca1834703641f4eb345a6b5932->enter($__internal_ba548ac58131e3e39a0b6fc2779f0b0e756557ca1834703641f4eb345a6b5932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ba548ac58131e3e39a0b6fc2779f0b0e756557ca1834703641f4eb345a6b5932->leave($__internal_ba548ac58131e3e39a0b6fc2779f0b0e756557ca1834703641f4eb345a6b5932_prof);

        
        $__internal_4a79fd174e413eb6d62e53d4afcc1b6822f473a62acd2a8ccf0272025192fea2->leave($__internal_4a79fd174e413eb6d62e53d4afcc1b6822f473a62acd2a8ccf0272025192fea2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc5beaa7220a078abc1db7abe8a470a470fef0e0c8767d05a2e33dfb270837df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5beaa7220a078abc1db7abe8a470a470fef0e0c8767d05a2e33dfb270837df->enter($__internal_bc5beaa7220a078abc1db7abe8a470a470fef0e0c8767d05a2e33dfb270837df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a692c1829fd504b7e80f73610be2770c4749c30f296c5bfb34fea2eaac89cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a692c1829fd504b7e80f73610be2770c4749c30f296c5bfb34fea2eaac89cc8->enter($__internal_4a692c1829fd504b7e80f73610be2770c4749c30f296c5bfb34fea2eaac89cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4a692c1829fd504b7e80f73610be2770c4749c30f296c5bfb34fea2eaac89cc8->leave($__internal_4a692c1829fd504b7e80f73610be2770c4749c30f296c5bfb34fea2eaac89cc8_prof);

        
        $__internal_bc5beaa7220a078abc1db7abe8a470a470fef0e0c8767d05a2e33dfb270837df->leave($__internal_bc5beaa7220a078abc1db7abe8a470a470fef0e0c8767d05a2e33dfb270837df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
