<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_60ac8b7ff6df7f75ffc310b14d057c3485168b3b8f24dfadbb24c9a015f6c03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e72e981a435769630b914e0a0aaf48cb76f8318aed23e9c52d41d29ee63ade53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72e981a435769630b914e0a0aaf48cb76f8318aed23e9c52d41d29ee63ade53->enter($__internal_e72e981a435769630b914e0a0aaf48cb76f8318aed23e9c52d41d29ee63ade53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_74fb3f7ea79a0c85c33afe42fd795a3786835c88da84d09bcc544f8b812d8c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fb3f7ea79a0c85c33afe42fd795a3786835c88da84d09bcc544f8b812d8c40->enter($__internal_74fb3f7ea79a0c85c33afe42fd795a3786835c88da84d09bcc544f8b812d8c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e72e981a435769630b914e0a0aaf48cb76f8318aed23e9c52d41d29ee63ade53->leave($__internal_e72e981a435769630b914e0a0aaf48cb76f8318aed23e9c52d41d29ee63ade53_prof);

        
        $__internal_74fb3f7ea79a0c85c33afe42fd795a3786835c88da84d09bcc544f8b812d8c40->leave($__internal_74fb3f7ea79a0c85c33afe42fd795a3786835c88da84d09bcc544f8b812d8c40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
