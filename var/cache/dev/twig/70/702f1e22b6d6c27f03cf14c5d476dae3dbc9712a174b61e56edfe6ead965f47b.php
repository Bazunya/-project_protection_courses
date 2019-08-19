<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3a9faa40b042510b6d8bdc1f0db95b04584d05a23b4b7d33c47707bd2474e60a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6cf646f5a882d4618b7b5d942fbafd2e1189e4f3f0f3bdc24402902e9f000ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cf646f5a882d4618b7b5d942fbafd2e1189e4f3f0f3bdc24402902e9f000ca->enter($__internal_e6cf646f5a882d4618b7b5d942fbafd2e1189e4f3f0f3bdc24402902e9f000ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d8a7550f66b85522b0bfc274ada4f612f6c42f881e411af7204a75baa450ffc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a7550f66b85522b0bfc274ada4f612f6c42f881e411af7204a75baa450ffc5->enter($__internal_d8a7550f66b85522b0bfc274ada4f612f6c42f881e411af7204a75baa450ffc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6cf646f5a882d4618b7b5d942fbafd2e1189e4f3f0f3bdc24402902e9f000ca->leave($__internal_e6cf646f5a882d4618b7b5d942fbafd2e1189e4f3f0f3bdc24402902e9f000ca_prof);

        
        $__internal_d8a7550f66b85522b0bfc274ada4f612f6c42f881e411af7204a75baa450ffc5->leave($__internal_d8a7550f66b85522b0bfc274ada4f612f6c42f881e411af7204a75baa450ffc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a560a90f6a0f25ff88d13097e5283235c9bfa777f55405a5c7bb34b3ea8efd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a560a90f6a0f25ff88d13097e5283235c9bfa777f55405a5c7bb34b3ea8efd85->enter($__internal_a560a90f6a0f25ff88d13097e5283235c9bfa777f55405a5c7bb34b3ea8efd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_908483d2282d4348e61f5c02512d0d2b6767738b524266540caa0ac8a39fedac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908483d2282d4348e61f5c02512d0d2b6767738b524266540caa0ac8a39fedac->enter($__internal_908483d2282d4348e61f5c02512d0d2b6767738b524266540caa0ac8a39fedac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_908483d2282d4348e61f5c02512d0d2b6767738b524266540caa0ac8a39fedac->leave($__internal_908483d2282d4348e61f5c02512d0d2b6767738b524266540caa0ac8a39fedac_prof);

        
        $__internal_a560a90f6a0f25ff88d13097e5283235c9bfa777f55405a5c7bb34b3ea8efd85->leave($__internal_a560a90f6a0f25ff88d13097e5283235c9bfa777f55405a5c7bb34b3ea8efd85_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_001564490c1727109c83fd10c181fc4d64e0dd5111a23385aa10453b28ee1326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001564490c1727109c83fd10c181fc4d64e0dd5111a23385aa10453b28ee1326->enter($__internal_001564490c1727109c83fd10c181fc4d64e0dd5111a23385aa10453b28ee1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_626a548b7a013147fe1227bb34cfdad29301889fa9c316b0570d5ea1c93d694b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626a548b7a013147fe1227bb34cfdad29301889fa9c316b0570d5ea1c93d694b->enter($__internal_626a548b7a013147fe1227bb34cfdad29301889fa9c316b0570d5ea1c93d694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_626a548b7a013147fe1227bb34cfdad29301889fa9c316b0570d5ea1c93d694b->leave($__internal_626a548b7a013147fe1227bb34cfdad29301889fa9c316b0570d5ea1c93d694b_prof);

        
        $__internal_001564490c1727109c83fd10c181fc4d64e0dd5111a23385aa10453b28ee1326->leave($__internal_001564490c1727109c83fd10c181fc4d64e0dd5111a23385aa10453b28ee1326_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f510f079b0511f58fbfad00312da49826388940aeeeeba400cd99a380de273be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f510f079b0511f58fbfad00312da49826388940aeeeeba400cd99a380de273be->enter($__internal_f510f079b0511f58fbfad00312da49826388940aeeeeba400cd99a380de273be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d64a56381e2680e28d18a0244716872604a3123bd7228076a839b6cbded4ad02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64a56381e2680e28d18a0244716872604a3123bd7228076a839b6cbded4ad02->enter($__internal_d64a56381e2680e28d18a0244716872604a3123bd7228076a839b6cbded4ad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d64a56381e2680e28d18a0244716872604a3123bd7228076a839b6cbded4ad02->leave($__internal_d64a56381e2680e28d18a0244716872604a3123bd7228076a839b6cbded4ad02_prof);

        
        $__internal_f510f079b0511f58fbfad00312da49826388940aeeeeba400cd99a380de273be->leave($__internal_f510f079b0511f58fbfad00312da49826388940aeeeeba400cd99a380de273be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
