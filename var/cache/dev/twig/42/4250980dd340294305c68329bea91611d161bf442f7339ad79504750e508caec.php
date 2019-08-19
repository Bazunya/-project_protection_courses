<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_942143af46b2d887f1719297d66559827cf1bd840ee9f5bad137eec7f269645d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_daf89e06050e701e5e15cc5f7010cc62418c2fb37c5cb646896404c111a47df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf89e06050e701e5e15cc5f7010cc62418c2fb37c5cb646896404c111a47df3->enter($__internal_daf89e06050e701e5e15cc5f7010cc62418c2fb37c5cb646896404c111a47df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dbd869618bdd873ac3cc3e4233e6eb255567fe75f70f034b24627e2b1511ebde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd869618bdd873ac3cc3e4233e6eb255567fe75f70f034b24627e2b1511ebde->enter($__internal_dbd869618bdd873ac3cc3e4233e6eb255567fe75f70f034b24627e2b1511ebde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf89e06050e701e5e15cc5f7010cc62418c2fb37c5cb646896404c111a47df3->leave($__internal_daf89e06050e701e5e15cc5f7010cc62418c2fb37c5cb646896404c111a47df3_prof);

        
        $__internal_dbd869618bdd873ac3cc3e4233e6eb255567fe75f70f034b24627e2b1511ebde->leave($__internal_dbd869618bdd873ac3cc3e4233e6eb255567fe75f70f034b24627e2b1511ebde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_10dc986c6674d7b1031a511dff0fca1ab60d212321f3a73e407fec56d3723385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dc986c6674d7b1031a511dff0fca1ab60d212321f3a73e407fec56d3723385->enter($__internal_10dc986c6674d7b1031a511dff0fca1ab60d212321f3a73e407fec56d3723385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f899385da5fa9e1bf559f4c9b5b26a9857d6c385aabb89af1939e6d3c45748df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f899385da5fa9e1bf559f4c9b5b26a9857d6c385aabb89af1939e6d3c45748df->enter($__internal_f899385da5fa9e1bf559f4c9b5b26a9857d6c385aabb89af1939e6d3c45748df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f899385da5fa9e1bf559f4c9b5b26a9857d6c385aabb89af1939e6d3c45748df->leave($__internal_f899385da5fa9e1bf559f4c9b5b26a9857d6c385aabb89af1939e6d3c45748df_prof);

        
        $__internal_10dc986c6674d7b1031a511dff0fca1ab60d212321f3a73e407fec56d3723385->leave($__internal_10dc986c6674d7b1031a511dff0fca1ab60d212321f3a73e407fec56d3723385_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_678b5a5db7925772e7242acdac9178e4eb280127c5af82ae4aa6a23ba14c808e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678b5a5db7925772e7242acdac9178e4eb280127c5af82ae4aa6a23ba14c808e->enter($__internal_678b5a5db7925772e7242acdac9178e4eb280127c5af82ae4aa6a23ba14c808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c7d0efddac2ee4b0fc82cdb85d9f2c28f8b89741b907b77ab6283e658ebfa8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7d0efddac2ee4b0fc82cdb85d9f2c28f8b89741b907b77ab6283e658ebfa8c->enter($__internal_8c7d0efddac2ee4b0fc82cdb85d9f2c28f8b89741b907b77ab6283e658ebfa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8c7d0efddac2ee4b0fc82cdb85d9f2c28f8b89741b907b77ab6283e658ebfa8c->leave($__internal_8c7d0efddac2ee4b0fc82cdb85d9f2c28f8b89741b907b77ab6283e658ebfa8c_prof);

        
        $__internal_678b5a5db7925772e7242acdac9178e4eb280127c5af82ae4aa6a23ba14c808e->leave($__internal_678b5a5db7925772e7242acdac9178e4eb280127c5af82ae4aa6a23ba14c808e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_089d8b7d8f4da078f26b7cf5be7044d35e3ea399c6a428a3cf8fb7bbe364c7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089d8b7d8f4da078f26b7cf5be7044d35e3ea399c6a428a3cf8fb7bbe364c7b4->enter($__internal_089d8b7d8f4da078f26b7cf5be7044d35e3ea399c6a428a3cf8fb7bbe364c7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c0515675ef4d17b4f6857ad76dea523a4792fbae6423517c20b2002cc47ae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0515675ef4d17b4f6857ad76dea523a4792fbae6423517c20b2002cc47ae3a->enter($__internal_7c0515675ef4d17b4f6857ad76dea523a4792fbae6423517c20b2002cc47ae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7c0515675ef4d17b4f6857ad76dea523a4792fbae6423517c20b2002cc47ae3a->leave($__internal_7c0515675ef4d17b4f6857ad76dea523a4792fbae6423517c20b2002cc47ae3a_prof);

        
        $__internal_089d8b7d8f4da078f26b7cf5be7044d35e3ea399c6a428a3cf8fb7bbe364c7b4->leave($__internal_089d8b7d8f4da078f26b7cf5be7044d35e3ea399c6a428a3cf8fb7bbe364c7b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
