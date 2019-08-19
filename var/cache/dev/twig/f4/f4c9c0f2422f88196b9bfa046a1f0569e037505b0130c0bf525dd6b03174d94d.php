<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_49e299a0e8b8011d452d6dc2c76fdcb44a83b33af90f6321e0f493f3aa51817f extends Twig_Template
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
        $__internal_e6d7043b1b4f521bd15b8513683106ba8db6c315dd3755b9d9057b4041bfae2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d7043b1b4f521bd15b8513683106ba8db6c315dd3755b9d9057b4041bfae2a->enter($__internal_e6d7043b1b4f521bd15b8513683106ba8db6c315dd3755b9d9057b4041bfae2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_dfb6855f4f265bf7105eee08d365d11735cb3ac9fce7a47e2e40df98167f76e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb6855f4f265bf7105eee08d365d11735cb3ac9fce7a47e2e40df98167f76e5->enter($__internal_dfb6855f4f265bf7105eee08d365d11735cb3ac9fce7a47e2e40df98167f76e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e6d7043b1b4f521bd15b8513683106ba8db6c315dd3755b9d9057b4041bfae2a->leave($__internal_e6d7043b1b4f521bd15b8513683106ba8db6c315dd3755b9d9057b4041bfae2a_prof);

        
        $__internal_dfb6855f4f265bf7105eee08d365d11735cb3ac9fce7a47e2e40df98167f76e5->leave($__internal_dfb6855f4f265bf7105eee08d365d11735cb3ac9fce7a47e2e40df98167f76e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
