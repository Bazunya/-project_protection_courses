<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_49b152077208b516ce6b61bce30cf8511705af64acae134294b8294aa2515afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7783cc18d53a743e85bdfbda5ecc8c97b6a8b6adcace7650875f2e59b870b46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7783cc18d53a743e85bdfbda5ecc8c97b6a8b6adcace7650875f2e59b870b46c->enter($__internal_7783cc18d53a743e85bdfbda5ecc8c97b6a8b6adcace7650875f2e59b870b46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_73bb342ec2e4fa1397069c4aec1f1917cd8f06bf5194557454aba443aa5b0ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bb342ec2e4fa1397069c4aec1f1917cd8f06bf5194557454aba443aa5b0ef3->enter($__internal_73bb342ec2e4fa1397069c4aec1f1917cd8f06bf5194557454aba443aa5b0ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7783cc18d53a743e85bdfbda5ecc8c97b6a8b6adcace7650875f2e59b870b46c->leave($__internal_7783cc18d53a743e85bdfbda5ecc8c97b6a8b6adcace7650875f2e59b870b46c_prof);

        
        $__internal_73bb342ec2e4fa1397069c4aec1f1917cd8f06bf5194557454aba443aa5b0ef3->leave($__internal_73bb342ec2e4fa1397069c4aec1f1917cd8f06bf5194557454aba443aa5b0ef3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_171851744346c53ae2d969407ceef7527da14a8d257b8df1acaaec8f9917ac0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171851744346c53ae2d969407ceef7527da14a8d257b8df1acaaec8f9917ac0c->enter($__internal_171851744346c53ae2d969407ceef7527da14a8d257b8df1acaaec8f9917ac0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75156b5c5b9dd62c07227191b9ad3ab70937c60d24d603ea3a74bebcd200127a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75156b5c5b9dd62c07227191b9ad3ab70937c60d24d603ea3a74bebcd200127a->enter($__internal_75156b5c5b9dd62c07227191b9ad3ab70937c60d24d603ea3a74bebcd200127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_75156b5c5b9dd62c07227191b9ad3ab70937c60d24d603ea3a74bebcd200127a->leave($__internal_75156b5c5b9dd62c07227191b9ad3ab70937c60d24d603ea3a74bebcd200127a_prof);

        
        $__internal_171851744346c53ae2d969407ceef7527da14a8d257b8df1acaaec8f9917ac0c->leave($__internal_171851744346c53ae2d969407ceef7527da14a8d257b8df1acaaec8f9917ac0c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd24ce9e9394dfaf7d93e8de50489642babf8d994a076ff43b464b616d694ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd24ce9e9394dfaf7d93e8de50489642babf8d994a076ff43b464b616d694ee1->enter($__internal_cd24ce9e9394dfaf7d93e8de50489642babf8d994a076ff43b464b616d694ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eac49d2e40318fa7be5c417510fcde17a67f27df4f87394ba5ab6a8fecccd3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac49d2e40318fa7be5c417510fcde17a67f27df4f87394ba5ab6a8fecccd3de->enter($__internal_eac49d2e40318fa7be5c417510fcde17a67f27df4f87394ba5ab6a8fecccd3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_eac49d2e40318fa7be5c417510fcde17a67f27df4f87394ba5ab6a8fecccd3de->leave($__internal_eac49d2e40318fa7be5c417510fcde17a67f27df4f87394ba5ab6a8fecccd3de_prof);

        
        $__internal_cd24ce9e9394dfaf7d93e8de50489642babf8d994a076ff43b464b616d694ee1->leave($__internal_cd24ce9e9394dfaf7d93e8de50489642babf8d994a076ff43b464b616d694ee1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
