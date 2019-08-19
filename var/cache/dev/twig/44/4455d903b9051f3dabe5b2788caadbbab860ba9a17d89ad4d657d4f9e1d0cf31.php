<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef88fadc688161ad1c2d6fe0d74b690acf769e0b8fada078f18de3775ff5f6ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a67fba76557395ad7065d6a7cf7f39a3a3b745c4b16045d74ff46ae1f773599c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a67fba76557395ad7065d6a7cf7f39a3a3b745c4b16045d74ff46ae1f773599c->enter($__internal_a67fba76557395ad7065d6a7cf7f39a3a3b745c4b16045d74ff46ae1f773599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e927d85db80f9022f63d09731dea8339cf487001152597ad38662541e4682ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e927d85db80f9022f63d09731dea8339cf487001152597ad38662541e4682ccb->enter($__internal_e927d85db80f9022f63d09731dea8339cf487001152597ad38662541e4682ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67fba76557395ad7065d6a7cf7f39a3a3b745c4b16045d74ff46ae1f773599c->leave($__internal_a67fba76557395ad7065d6a7cf7f39a3a3b745c4b16045d74ff46ae1f773599c_prof);

        
        $__internal_e927d85db80f9022f63d09731dea8339cf487001152597ad38662541e4682ccb->leave($__internal_e927d85db80f9022f63d09731dea8339cf487001152597ad38662541e4682ccb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73407785ba49071a013826e64435c6a65114764a57097d7cce3fb1b917ae43b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73407785ba49071a013826e64435c6a65114764a57097d7cce3fb1b917ae43b4->enter($__internal_73407785ba49071a013826e64435c6a65114764a57097d7cce3fb1b917ae43b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_987772363f5fee6ac5bb3d14c877a418b4fbdf799d5ca9f4bb39f43d531f9a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987772363f5fee6ac5bb3d14c877a418b4fbdf799d5ca9f4bb39f43d531f9a13->enter($__internal_987772363f5fee6ac5bb3d14c877a418b4fbdf799d5ca9f4bb39f43d531f9a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_987772363f5fee6ac5bb3d14c877a418b4fbdf799d5ca9f4bb39f43d531f9a13->leave($__internal_987772363f5fee6ac5bb3d14c877a418b4fbdf799d5ca9f4bb39f43d531f9a13_prof);

        
        $__internal_73407785ba49071a013826e64435c6a65114764a57097d7cce3fb1b917ae43b4->leave($__internal_73407785ba49071a013826e64435c6a65114764a57097d7cce3fb1b917ae43b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_721ed420749a2da4e6c1b0205b1b1f065e5d04df374843b0bbc9e0b76d10a3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721ed420749a2da4e6c1b0205b1b1f065e5d04df374843b0bbc9e0b76d10a3c2->enter($__internal_721ed420749a2da4e6c1b0205b1b1f065e5d04df374843b0bbc9e0b76d10a3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_711110940301e4effaa110857e6d7f49de4e746e0a1203e2aa20972f48ab3f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711110940301e4effaa110857e6d7f49de4e746e0a1203e2aa20972f48ab3f6a->enter($__internal_711110940301e4effaa110857e6d7f49de4e746e0a1203e2aa20972f48ab3f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_711110940301e4effaa110857e6d7f49de4e746e0a1203e2aa20972f48ab3f6a->leave($__internal_711110940301e4effaa110857e6d7f49de4e746e0a1203e2aa20972f48ab3f6a_prof);

        
        $__internal_721ed420749a2da4e6c1b0205b1b1f065e5d04df374843b0bbc9e0b76d10a3c2->leave($__internal_721ed420749a2da4e6c1b0205b1b1f065e5d04df374843b0bbc9e0b76d10a3c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e1b355e5791b283234a30ad6cb4b66de2ac9acb58b6414dd85bf6763bb02ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1b355e5791b283234a30ad6cb4b66de2ac9acb58b6414dd85bf6763bb02ec7->enter($__internal_7e1b355e5791b283234a30ad6cb4b66de2ac9acb58b6414dd85bf6763bb02ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b69b726bdad0c224e6c6ee06ceb954071bd1bc5a73626cd9c4d7dd5eab618992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69b726bdad0c224e6c6ee06ceb954071bd1bc5a73626cd9c4d7dd5eab618992->enter($__internal_b69b726bdad0c224e6c6ee06ceb954071bd1bc5a73626cd9c4d7dd5eab618992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b69b726bdad0c224e6c6ee06ceb954071bd1bc5a73626cd9c4d7dd5eab618992->leave($__internal_b69b726bdad0c224e6c6ee06ceb954071bd1bc5a73626cd9c4d7dd5eab618992_prof);

        
        $__internal_7e1b355e5791b283234a30ad6cb4b66de2ac9acb58b6414dd85bf6763bb02ec7->leave($__internal_7e1b355e5791b283234a30ad6cb4b66de2ac9acb58b6414dd85bf6763bb02ec7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
