<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9b47d939361a5630786fe82794605660882c8e779b9d5027f07020090148c4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d14eca1a548f80a3594a4cab272010ad22c3e1eb34510f4a32c324bfff18a316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14eca1a548f80a3594a4cab272010ad22c3e1eb34510f4a32c324bfff18a316->enter($__internal_d14eca1a548f80a3594a4cab272010ad22c3e1eb34510f4a32c324bfff18a316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_02b8a2d87050b64ea2f43d6668c8c414ae2956c1057afdd3e74d521d3cd467a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b8a2d87050b64ea2f43d6668c8c414ae2956c1057afdd3e74d521d3cd467a6->enter($__internal_02b8a2d87050b64ea2f43d6668c8c414ae2956c1057afdd3e74d521d3cd467a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d14eca1a548f80a3594a4cab272010ad22c3e1eb34510f4a32c324bfff18a316->leave($__internal_d14eca1a548f80a3594a4cab272010ad22c3e1eb34510f4a32c324bfff18a316_prof);

        
        $__internal_02b8a2d87050b64ea2f43d6668c8c414ae2956c1057afdd3e74d521d3cd467a6->leave($__internal_02b8a2d87050b64ea2f43d6668c8c414ae2956c1057afdd3e74d521d3cd467a6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7142777bf388f5e8f5baef8d92fe1e7c1c9788fa448d4616903f8b76c4247b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7142777bf388f5e8f5baef8d92fe1e7c1c9788fa448d4616903f8b76c4247b6->enter($__internal_c7142777bf388f5e8f5baef8d92fe1e7c1c9788fa448d4616903f8b76c4247b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8b25f0ba052300aa6b0cd1bb17163ce58bf63f54192741f3360232742e72e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b25f0ba052300aa6b0cd1bb17163ce58bf63f54192741f3360232742e72e1d->enter($__internal_b8b25f0ba052300aa6b0cd1bb17163ce58bf63f54192741f3360232742e72e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b8b25f0ba052300aa6b0cd1bb17163ce58bf63f54192741f3360232742e72e1d->leave($__internal_b8b25f0ba052300aa6b0cd1bb17163ce58bf63f54192741f3360232742e72e1d_prof);

        
        $__internal_c7142777bf388f5e8f5baef8d92fe1e7c1c9788fa448d4616903f8b76c4247b6->leave($__internal_c7142777bf388f5e8f5baef8d92fe1e7c1c9788fa448d4616903f8b76c4247b6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
