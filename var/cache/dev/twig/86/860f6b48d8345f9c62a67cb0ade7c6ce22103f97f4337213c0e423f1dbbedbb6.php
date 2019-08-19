<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6cba34a5015a7904190ecad1e877d241fe273799ca2558ab396588b795898d12 extends Twig_Template
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
        $__internal_dd9d3c78f7d225caeb0503723cf65cefe8be18b18494e6f0cfbf58535639e645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9d3c78f7d225caeb0503723cf65cefe8be18b18494e6f0cfbf58535639e645->enter($__internal_dd9d3c78f7d225caeb0503723cf65cefe8be18b18494e6f0cfbf58535639e645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3ecd9a4cc8e43a2bc8275d6f86dc85858f4bfad9dc743e099393c23ec3d780cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecd9a4cc8e43a2bc8275d6f86dc85858f4bfad9dc743e099393c23ec3d780cb->enter($__internal_3ecd9a4cc8e43a2bc8275d6f86dc85858f4bfad9dc743e099393c23ec3d780cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_dd9d3c78f7d225caeb0503723cf65cefe8be18b18494e6f0cfbf58535639e645->leave($__internal_dd9d3c78f7d225caeb0503723cf65cefe8be18b18494e6f0cfbf58535639e645_prof);

        
        $__internal_3ecd9a4cc8e43a2bc8275d6f86dc85858f4bfad9dc743e099393c23ec3d780cb->leave($__internal_3ecd9a4cc8e43a2bc8275d6f86dc85858f4bfad9dc743e099393c23ec3d780cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
