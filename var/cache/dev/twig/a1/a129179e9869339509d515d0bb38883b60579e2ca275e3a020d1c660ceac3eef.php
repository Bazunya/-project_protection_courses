<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dbe2769a70789d850dd24605f399e4bd716950efba16fef71db129a530aeb48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b714438f2f0d6ec0292f11f4d13d347a336a36a557f243a50a973efcd4439300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b714438f2f0d6ec0292f11f4d13d347a336a36a557f243a50a973efcd4439300->enter($__internal_b714438f2f0d6ec0292f11f4d13d347a336a36a557f243a50a973efcd4439300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2a607f016ade35f6e3e07d1fe424c9c328e35318cd6f404704fd52fd96f1141f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a607f016ade35f6e3e07d1fe424c9c328e35318cd6f404704fd52fd96f1141f->enter($__internal_2a607f016ade35f6e3e07d1fe424c9c328e35318cd6f404704fd52fd96f1141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b714438f2f0d6ec0292f11f4d13d347a336a36a557f243a50a973efcd4439300->leave($__internal_b714438f2f0d6ec0292f11f4d13d347a336a36a557f243a50a973efcd4439300_prof);

        
        $__internal_2a607f016ade35f6e3e07d1fe424c9c328e35318cd6f404704fd52fd96f1141f->leave($__internal_2a607f016ade35f6e3e07d1fe424c9c328e35318cd6f404704fd52fd96f1141f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f21bfc53593b0871ea457f4eabd38f2b1161bdb3041dda29f37d98b49c2cc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f21bfc53593b0871ea457f4eabd38f2b1161bdb3041dda29f37d98b49c2cc83->enter($__internal_3f21bfc53593b0871ea457f4eabd38f2b1161bdb3041dda29f37d98b49c2cc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4d95cb9b6b60829f8c95926fa808a3823135b9321542972a1053e3f43aec5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d95cb9b6b60829f8c95926fa808a3823135b9321542972a1053e3f43aec5eb->enter($__internal_a4d95cb9b6b60829f8c95926fa808a3823135b9321542972a1053e3f43aec5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a4d95cb9b6b60829f8c95926fa808a3823135b9321542972a1053e3f43aec5eb->leave($__internal_a4d95cb9b6b60829f8c95926fa808a3823135b9321542972a1053e3f43aec5eb_prof);

        
        $__internal_3f21bfc53593b0871ea457f4eabd38f2b1161bdb3041dda29f37d98b49c2cc83->leave($__internal_3f21bfc53593b0871ea457f4eabd38f2b1161bdb3041dda29f37d98b49c2cc83_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb927e2889d6347fd87457794829cf255c270b853cf4bcae04d8486ec6fcbb30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb927e2889d6347fd87457794829cf255c270b853cf4bcae04d8486ec6fcbb30->enter($__internal_eb927e2889d6347fd87457794829cf255c270b853cf4bcae04d8486ec6fcbb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b771ab8ae90a01940e58dfdb8431dc1e52a56184d17508552a234edfdbb7fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b771ab8ae90a01940e58dfdb8431dc1e52a56184d17508552a234edfdbb7fa5->enter($__internal_1b771ab8ae90a01940e58dfdb8431dc1e52a56184d17508552a234edfdbb7fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1b771ab8ae90a01940e58dfdb8431dc1e52a56184d17508552a234edfdbb7fa5->leave($__internal_1b771ab8ae90a01940e58dfdb8431dc1e52a56184d17508552a234edfdbb7fa5_prof);

        
        $__internal_eb927e2889d6347fd87457794829cf255c270b853cf4bcae04d8486ec6fcbb30->leave($__internal_eb927e2889d6347fd87457794829cf255c270b853cf4bcae04d8486ec6fcbb30_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
