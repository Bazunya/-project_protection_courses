<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7e90f01b43a9e1ddc8c6d62cb289c63273ea9d7401f78648d689cf740ca7d867 extends Twig_Template
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
        $__internal_24f2281e774e1db9e22064eb66832426ca8943bfed8fab6dfc58da1652d50c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f2281e774e1db9e22064eb66832426ca8943bfed8fab6dfc58da1652d50c7e->enter($__internal_24f2281e774e1db9e22064eb66832426ca8943bfed8fab6dfc58da1652d50c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_ebd5c2f92f4dee4bb662b853afafc83e19c81dedab50e6a8a5be74d9c1f59f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd5c2f92f4dee4bb662b853afafc83e19c81dedab50e6a8a5be74d9c1f59f47->enter($__internal_ebd5c2f92f4dee4bb662b853afafc83e19c81dedab50e6a8a5be74d9c1f59f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_24f2281e774e1db9e22064eb66832426ca8943bfed8fab6dfc58da1652d50c7e->leave($__internal_24f2281e774e1db9e22064eb66832426ca8943bfed8fab6dfc58da1652d50c7e_prof);

        
        $__internal_ebd5c2f92f4dee4bb662b853afafc83e19c81dedab50e6a8a5be74d9c1f59f47->leave($__internal_ebd5c2f92f4dee4bb662b853afafc83e19c81dedab50e6a8a5be74d9c1f59f47_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
