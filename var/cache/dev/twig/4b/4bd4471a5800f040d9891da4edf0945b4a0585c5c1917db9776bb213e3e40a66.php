<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_ccdbb3bfd8a8c8367d75238233830668605b692607dd265030343ed28b2a7baf extends Twig_Template
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
        $__internal_8e45075414a3fd84738db5452dd6c128e4a80de3cdd7ce9b9956b451aea35e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e45075414a3fd84738db5452dd6c128e4a80de3cdd7ce9b9956b451aea35e39->enter($__internal_8e45075414a3fd84738db5452dd6c128e4a80de3cdd7ce9b9956b451aea35e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_8b068e2f1c8f903f902aff277dcb73a4094a7d1ed19effc696525881bbe3841d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b068e2f1c8f903f902aff277dcb73a4094a7d1ed19effc696525881bbe3841d->enter($__internal_8b068e2f1c8f903f902aff277dcb73a4094a7d1ed19effc696525881bbe3841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8e45075414a3fd84738db5452dd6c128e4a80de3cdd7ce9b9956b451aea35e39->leave($__internal_8e45075414a3fd84738db5452dd6c128e4a80de3cdd7ce9b9956b451aea35e39_prof);

        
        $__internal_8b068e2f1c8f903f902aff277dcb73a4094a7d1ed19effc696525881bbe3841d->leave($__internal_8b068e2f1c8f903f902aff277dcb73a4094a7d1ed19effc696525881bbe3841d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
