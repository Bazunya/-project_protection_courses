<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a55ceb3b08007be2f1a70139b0934012761a384bd0fd278b18150cd28bd8ce75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db97a7fd412a9d3eafa7b1033088774cd03c166043710c85d698ca2a6e5c63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db97a7fd412a9d3eafa7b1033088774cd03c166043710c85d698ca2a6e5c63d->enter($__internal_5db97a7fd412a9d3eafa7b1033088774cd03c166043710c85d698ca2a6e5c63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ce67440b70135416e898df0b0552278e9fddc5862081ec1ae53337b972c42f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce67440b70135416e898df0b0552278e9fddc5862081ec1ae53337b972c42f1d->enter($__internal_ce67440b70135416e898df0b0552278e9fddc5862081ec1ae53337b972c42f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db97a7fd412a9d3eafa7b1033088774cd03c166043710c85d698ca2a6e5c63d->leave($__internal_5db97a7fd412a9d3eafa7b1033088774cd03c166043710c85d698ca2a6e5c63d_prof);

        
        $__internal_ce67440b70135416e898df0b0552278e9fddc5862081ec1ae53337b972c42f1d->leave($__internal_ce67440b70135416e898df0b0552278e9fddc5862081ec1ae53337b972c42f1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_57dbaaabafc704b38d17a6f6ae4f14bc9b94a87b0445d17313d1ffb864efbbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dbaaabafc704b38d17a6f6ae4f14bc9b94a87b0445d17313d1ffb864efbbb2->enter($__internal_57dbaaabafc704b38d17a6f6ae4f14bc9b94a87b0445d17313d1ffb864efbbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54a732c90dd3e243e206cb41b5cbc14ce3a65ab5d88f129fbe3b51da004200b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a732c90dd3e243e206cb41b5cbc14ce3a65ab5d88f129fbe3b51da004200b8->enter($__internal_54a732c90dd3e243e206cb41b5cbc14ce3a65ab5d88f129fbe3b51da004200b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_54a732c90dd3e243e206cb41b5cbc14ce3a65ab5d88f129fbe3b51da004200b8->leave($__internal_54a732c90dd3e243e206cb41b5cbc14ce3a65ab5d88f129fbe3b51da004200b8_prof);

        
        $__internal_57dbaaabafc704b38d17a6f6ae4f14bc9b94a87b0445d17313d1ffb864efbbb2->leave($__internal_57dbaaabafc704b38d17a6f6ae4f14bc9b94a87b0445d17313d1ffb864efbbb2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e8faaf9492060f670a1206bc094891ebefda136d5b1f1dfa4efcaf84a574562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8faaf9492060f670a1206bc094891ebefda136d5b1f1dfa4efcaf84a574562->enter($__internal_5e8faaf9492060f670a1206bc094891ebefda136d5b1f1dfa4efcaf84a574562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eafc136ecbc8bcd7079817268e2d90ef782ed41feec972b9e624f38887296922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafc136ecbc8bcd7079817268e2d90ef782ed41feec972b9e624f38887296922->enter($__internal_eafc136ecbc8bcd7079817268e2d90ef782ed41feec972b9e624f38887296922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eafc136ecbc8bcd7079817268e2d90ef782ed41feec972b9e624f38887296922->leave($__internal_eafc136ecbc8bcd7079817268e2d90ef782ed41feec972b9e624f38887296922_prof);

        
        $__internal_5e8faaf9492060f670a1206bc094891ebefda136d5b1f1dfa4efcaf84a574562->leave($__internal_5e8faaf9492060f670a1206bc094891ebefda136d5b1f1dfa4efcaf84a574562_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8cbb6f75a496ad940a9915764fa8a2eda93d0d3bdd5defd611a8b15b34e639b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cbb6f75a496ad940a9915764fa8a2eda93d0d3bdd5defd611a8b15b34e639b->enter($__internal_d8cbb6f75a496ad940a9915764fa8a2eda93d0d3bdd5defd611a8b15b34e639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00b07288db562783a7436ef891cd80922bd80386075c06f9bc2c1103bef36287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b07288db562783a7436ef891cd80922bd80386075c06f9bc2c1103bef36287->enter($__internal_00b07288db562783a7436ef891cd80922bd80386075c06f9bc2c1103bef36287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_00b07288db562783a7436ef891cd80922bd80386075c06f9bc2c1103bef36287->leave($__internal_00b07288db562783a7436ef891cd80922bd80386075c06f9bc2c1103bef36287_prof);

        
        $__internal_d8cbb6f75a496ad940a9915764fa8a2eda93d0d3bdd5defd611a8b15b34e639b->leave($__internal_d8cbb6f75a496ad940a9915764fa8a2eda93d0d3bdd5defd611a8b15b34e639b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
