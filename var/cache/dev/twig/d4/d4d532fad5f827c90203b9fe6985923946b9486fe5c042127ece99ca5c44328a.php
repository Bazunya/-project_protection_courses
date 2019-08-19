<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a542999d4a88e9cf9d35879a586f3359ed1dd9c577a4d58f3a20170cd141c3b8 extends Twig_Template
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
        $__internal_b3e9dff84124e94f24492d0ef9a4421c93555985f9d3573ff994f7d691d8da6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e9dff84124e94f24492d0ef9a4421c93555985f9d3573ff994f7d691d8da6e->enter($__internal_b3e9dff84124e94f24492d0ef9a4421c93555985f9d3573ff994f7d691d8da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b62bd85db1524f29bf89a7dc781b3d53177b9161ed6754986e8da41ada6d6b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62bd85db1524f29bf89a7dc781b3d53177b9161ed6754986e8da41ada6d6b52->enter($__internal_b62bd85db1524f29bf89a7dc781b3d53177b9161ed6754986e8da41ada6d6b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b3e9dff84124e94f24492d0ef9a4421c93555985f9d3573ff994f7d691d8da6e->leave($__internal_b3e9dff84124e94f24492d0ef9a4421c93555985f9d3573ff994f7d691d8da6e_prof);

        
        $__internal_b62bd85db1524f29bf89a7dc781b3d53177b9161ed6754986e8da41ada6d6b52->leave($__internal_b62bd85db1524f29bf89a7dc781b3d53177b9161ed6754986e8da41ada6d6b52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
