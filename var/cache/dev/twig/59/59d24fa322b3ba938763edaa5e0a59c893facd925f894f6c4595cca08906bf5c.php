<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_05ef413ef486e6f84bc2014c1b7dd1dad896cde3bf53711c5286de37c59b61ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ba94c1716db2732f45e7810daf1c9a62137e796088fb067024503d39eed30688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba94c1716db2732f45e7810daf1c9a62137e796088fb067024503d39eed30688->enter($__internal_ba94c1716db2732f45e7810daf1c9a62137e796088fb067024503d39eed30688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_cf5503931635ae4f16e1293aa4360a79598556337189124a9a655ba7340782a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5503931635ae4f16e1293aa4360a79598556337189124a9a655ba7340782a5->enter($__internal_cf5503931635ae4f16e1293aa4360a79598556337189124a9a655ba7340782a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba94c1716db2732f45e7810daf1c9a62137e796088fb067024503d39eed30688->leave($__internal_ba94c1716db2732f45e7810daf1c9a62137e796088fb067024503d39eed30688_prof);

        
        $__internal_cf5503931635ae4f16e1293aa4360a79598556337189124a9a655ba7340782a5->leave($__internal_cf5503931635ae4f16e1293aa4360a79598556337189124a9a655ba7340782a5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd261ec83f9a37fa828ed200ad0a2c663be99c7f2d9fb0e1bf1aba7edfc83f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd261ec83f9a37fa828ed200ad0a2c663be99c7f2d9fb0e1bf1aba7edfc83f34->enter($__internal_cd261ec83f9a37fa828ed200ad0a2c663be99c7f2d9fb0e1bf1aba7edfc83f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a942de149a0784bd3558ef64452c61748183e58732f2d5264ec9b88c0d02133d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a942de149a0784bd3558ef64452c61748183e58732f2d5264ec9b88c0d02133d->enter($__internal_a942de149a0784bd3558ef64452c61748183e58732f2d5264ec9b88c0d02133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a942de149a0784bd3558ef64452c61748183e58732f2d5264ec9b88c0d02133d->leave($__internal_a942de149a0784bd3558ef64452c61748183e58732f2d5264ec9b88c0d02133d_prof);

        
        $__internal_cd261ec83f9a37fa828ed200ad0a2c663be99c7f2d9fb0e1bf1aba7edfc83f34->leave($__internal_cd261ec83f9a37fa828ed200ad0a2c663be99c7f2d9fb0e1bf1aba7edfc83f34_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15ca042c53e95932b3f1bc07bf9438f1f61509f0529c933f51da10b0964a153f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ca042c53e95932b3f1bc07bf9438f1f61509f0529c933f51da10b0964a153f->enter($__internal_15ca042c53e95932b3f1bc07bf9438f1f61509f0529c933f51da10b0964a153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef282572c9fcda5e9c7fa03425d9a98f57bfc644ac4edc0508e8274ce20442a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef282572c9fcda5e9c7fa03425d9a98f57bfc644ac4edc0508e8274ce20442a4->enter($__internal_ef282572c9fcda5e9c7fa03425d9a98f57bfc644ac4edc0508e8274ce20442a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef282572c9fcda5e9c7fa03425d9a98f57bfc644ac4edc0508e8274ce20442a4->leave($__internal_ef282572c9fcda5e9c7fa03425d9a98f57bfc644ac4edc0508e8274ce20442a4_prof);

        
        $__internal_15ca042c53e95932b3f1bc07bf9438f1f61509f0529c933f51da10b0964a153f->leave($__internal_15ca042c53e95932b3f1bc07bf9438f1f61509f0529c933f51da10b0964a153f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1da97349ac644ac6155c8fe3dc9324cfff1ec4533c252a66abb01bce42f3d392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da97349ac644ac6155c8fe3dc9324cfff1ec4533c252a66abb01bce42f3d392->enter($__internal_1da97349ac644ac6155c8fe3dc9324cfff1ec4533c252a66abb01bce42f3d392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0b4eff1e1dce2d599cb938f82b4d4f3148693b308aeb60ac5982ae1a6f13ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b4eff1e1dce2d599cb938f82b4d4f3148693b308aeb60ac5982ae1a6f13ee3->enter($__internal_c0b4eff1e1dce2d599cb938f82b4d4f3148693b308aeb60ac5982ae1a6f13ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c0b4eff1e1dce2d599cb938f82b4d4f3148693b308aeb60ac5982ae1a6f13ee3->leave($__internal_c0b4eff1e1dce2d599cb938f82b4d4f3148693b308aeb60ac5982ae1a6f13ee3_prof);

        
        $__internal_1da97349ac644ac6155c8fe3dc9324cfff1ec4533c252a66abb01bce42f3d392->leave($__internal_1da97349ac644ac6155c8fe3dc9324cfff1ec4533c252a66abb01bce42f3d392_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
