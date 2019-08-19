<?php

/* :default:korzina.html.twig */
class __TwigTemplate_eb8c1b101d7de9722fd4e03435de6f0267e73e023dc1ea5e3fcb3da8b20896d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:korzina.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e568e797800de17a78c9a4a8a593d4a6d387367c39d3212d483a48aaf249e487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e568e797800de17a78c9a4a8a593d4a6d387367c39d3212d483a48aaf249e487->enter($__internal_e568e797800de17a78c9a4a8a593d4a6d387367c39d3212d483a48aaf249e487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:korzina.html.twig"));

        $__internal_abac79b28716201220aff37c20794a9545b047f2763714db7f591166ba3818ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abac79b28716201220aff37c20794a9545b047f2763714db7f591166ba3818ec->enter($__internal_abac79b28716201220aff37c20794a9545b047f2763714db7f591166ba3818ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:korzina.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e568e797800de17a78c9a4a8a593d4a6d387367c39d3212d483a48aaf249e487->leave($__internal_e568e797800de17a78c9a4a8a593d4a6d387367c39d3212d483a48aaf249e487_prof);

        
        $__internal_abac79b28716201220aff37c20794a9545b047f2763714db7f591166ba3818ec->leave($__internal_abac79b28716201220aff37c20794a9545b047f2763714db7f591166ba3818ec_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_56f4bfe7a12a135f9734f972f5b3778fb1a09bd0058b9192587ed11e4fcd795b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f4bfe7a12a135f9734f972f5b3778fb1a09bd0058b9192587ed11e4fcd795b->enter($__internal_56f4bfe7a12a135f9734f972f5b3778fb1a09bd0058b9192587ed11e4fcd795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b0d824e268555aa02033d4f286f0a5788f5cde7bb5922787b157ce8649caad62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d824e268555aa02033d4f286f0a5788f5cde7bb5922787b157ce8649caad62->enter($__internal_b0d824e268555aa02033d4f286f0a5788f5cde7bb5922787b157ce8649caad62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            korzina
        </div>
    </div>
</div>
";
        
        $__internal_b0d824e268555aa02033d4f286f0a5788f5cde7bb5922787b157ce8649caad62->leave($__internal_b0d824e268555aa02033d4f286f0a5788f5cde7bb5922787b157ce8649caad62_prof);

        
        $__internal_56f4bfe7a12a135f9734f972f5b3778fb1a09bd0058b9192587ed11e4fcd795b->leave($__internal_56f4bfe7a12a135f9734f972f5b3778fb1a09bd0058b9192587ed11e4fcd795b_prof);

    }

    public function getTemplateName()
    {
        return ":default:korzina.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block content %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            korzina
        </div>
    </div>
</div>
{% endblock %}
", ":default:korzina.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/korzina.html.twig");
    }
}
