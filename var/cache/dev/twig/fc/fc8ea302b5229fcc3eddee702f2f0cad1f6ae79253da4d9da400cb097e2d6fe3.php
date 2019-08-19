<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_76a51ade51cfd1ebe6fca42c0834aa4cf692ed7d1c7cf0efd2632a2e86da6f8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6aa2422c7b3feb497cf55b4042451e245d4d0d72d29f157af05acd4cf31cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6aa2422c7b3feb497cf55b4042451e245d4d0d72d29f157af05acd4cf31cb5->enter($__internal_ea6aa2422c7b3feb497cf55b4042451e245d4d0d72d29f157af05acd4cf31cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1ac292e6a959ee252476f9c90b381434508d60ff319f6eb6898fd86f6cd8975a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac292e6a959ee252476f9c90b381434508d60ff319f6eb6898fd86f6cd8975a->enter($__internal_1ac292e6a959ee252476f9c90b381434508d60ff319f6eb6898fd86f6cd8975a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6aa2422c7b3feb497cf55b4042451e245d4d0d72d29f157af05acd4cf31cb5->leave($__internal_ea6aa2422c7b3feb497cf55b4042451e245d4d0d72d29f157af05acd4cf31cb5_prof);

        
        $__internal_1ac292e6a959ee252476f9c90b381434508d60ff319f6eb6898fd86f6cd8975a->leave($__internal_1ac292e6a959ee252476f9c90b381434508d60ff319f6eb6898fd86f6cd8975a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d04a039f69b517547d7318fd46b995ac14f2434b7de85bf60e10e4819e8adf01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04a039f69b517547d7318fd46b995ac14f2434b7de85bf60e10e4819e8adf01->enter($__internal_d04a039f69b517547d7318fd46b995ac14f2434b7de85bf60e10e4819e8adf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4f7b9e369e6da2cbb15ea90db1dfe01576213288d6112a63aa18b4bd2542fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f7b9e369e6da2cbb15ea90db1dfe01576213288d6112a63aa18b4bd2542fad->enter($__internal_d4f7b9e369e6da2cbb15ea90db1dfe01576213288d6112a63aa18b4bd2542fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d4f7b9e369e6da2cbb15ea90db1dfe01576213288d6112a63aa18b4bd2542fad->leave($__internal_d4f7b9e369e6da2cbb15ea90db1dfe01576213288d6112a63aa18b4bd2542fad_prof);

        
        $__internal_d04a039f69b517547d7318fd46b995ac14f2434b7de85bf60e10e4819e8adf01->leave($__internal_d04a039f69b517547d7318fd46b995ac14f2434b7de85bf60e10e4819e8adf01_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
