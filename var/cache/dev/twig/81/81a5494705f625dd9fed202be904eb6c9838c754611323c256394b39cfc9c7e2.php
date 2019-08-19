<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1064861b4e8bb80dd50cf586461e6d5d84b8a9c54ae7198a8afc93c040e66f2b extends Twig_Template
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
        $__internal_48133b65b06cf9ccb538d97e55971782f45fe44e2b43befd4cf0edb3f8cf9649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48133b65b06cf9ccb538d97e55971782f45fe44e2b43befd4cf0edb3f8cf9649->enter($__internal_48133b65b06cf9ccb538d97e55971782f45fe44e2b43befd4cf0edb3f8cf9649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a5b35607645effbeba8f70b8560231143fcddab3ce51339284c29239b7cc3719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b35607645effbeba8f70b8560231143fcddab3ce51339284c29239b7cc3719->enter($__internal_a5b35607645effbeba8f70b8560231143fcddab3ce51339284c29239b7cc3719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_48133b65b06cf9ccb538d97e55971782f45fe44e2b43befd4cf0edb3f8cf9649->leave($__internal_48133b65b06cf9ccb538d97e55971782f45fe44e2b43befd4cf0edb3f8cf9649_prof);

        
        $__internal_a5b35607645effbeba8f70b8560231143fcddab3ce51339284c29239b7cc3719->leave($__internal_a5b35607645effbeba8f70b8560231143fcddab3ce51339284c29239b7cc3719_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
