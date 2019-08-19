<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7c081aa39c20737eaa0eca3e057e2de205aeb4c73fa105f28cb6f3b835da354e extends Twig_Template
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
        $__internal_f5c63572f09cbeadc1f81392c0539f8a8ec5d79bf2ceb645ff11dfa70b2230be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c63572f09cbeadc1f81392c0539f8a8ec5d79bf2ceb645ff11dfa70b2230be->enter($__internal_f5c63572f09cbeadc1f81392c0539f8a8ec5d79bf2ceb645ff11dfa70b2230be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_aa56d08b9cf2d5b806ce455209a6a339ceb18ee978a4784299bd00ede65d27ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa56d08b9cf2d5b806ce455209a6a339ceb18ee978a4784299bd00ede65d27ca->enter($__internal_aa56d08b9cf2d5b806ce455209a6a339ceb18ee978a4784299bd00ede65d27ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f5c63572f09cbeadc1f81392c0539f8a8ec5d79bf2ceb645ff11dfa70b2230be->leave($__internal_f5c63572f09cbeadc1f81392c0539f8a8ec5d79bf2ceb645ff11dfa70b2230be_prof);

        
        $__internal_aa56d08b9cf2d5b806ce455209a6a339ceb18ee978a4784299bd00ede65d27ca->leave($__internal_aa56d08b9cf2d5b806ce455209a6a339ceb18ee978a4784299bd00ede65d27ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
