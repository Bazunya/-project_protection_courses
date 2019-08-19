<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_83469e314eb22dce0e696a4bb89bf81700f92a28e43d91e4162720b7023e884c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef4f8bfbccd2d3bdf8003f42bbd95d485646f7c4523b6fb19e5dfd6cc798203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef4f8bfbccd2d3bdf8003f42bbd95d485646f7c4523b6fb19e5dfd6cc798203->enter($__internal_eef4f8bfbccd2d3bdf8003f42bbd95d485646f7c4523b6fb19e5dfd6cc798203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_a1d2127d26467ca18cc65228e433584c090c2623aac54627930ef3cfa527ba7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d2127d26467ca18cc65228e433584c090c2623aac54627930ef3cfa527ba7b->enter($__internal_a1d2127d26467ca18cc65228e433584c090c2623aac54627930ef3cfa527ba7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef4f8bfbccd2d3bdf8003f42bbd95d485646f7c4523b6fb19e5dfd6cc798203->leave($__internal_eef4f8bfbccd2d3bdf8003f42bbd95d485646f7c4523b6fb19e5dfd6cc798203_prof);

        
        $__internal_a1d2127d26467ca18cc65228e433584c090c2623aac54627930ef3cfa527ba7b->leave($__internal_a1d2127d26467ca18cc65228e433584c090c2623aac54627930ef3cfa527ba7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6bb67192df98ebe610ca373e04e1bd03fbbc28711cb04d817ce787593ee7d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6bb67192df98ebe610ca373e04e1bd03fbbc28711cb04d817ce787593ee7d10->enter($__internal_b6bb67192df98ebe610ca373e04e1bd03fbbc28711cb04d817ce787593ee7d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7878ce4fcfcd4a01e6bfdab4ebab9f2f4003af04accba9d102135d446e625070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7878ce4fcfcd4a01e6bfdab4ebab9f2f4003af04accba9d102135d446e625070->enter($__internal_7878ce4fcfcd4a01e6bfdab4ebab9f2f4003af04accba9d102135d446e625070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7878ce4fcfcd4a01e6bfdab4ebab9f2f4003af04accba9d102135d446e625070->leave($__internal_7878ce4fcfcd4a01e6bfdab4ebab9f2f4003af04accba9d102135d446e625070_prof);

        
        $__internal_b6bb67192df98ebe610ca373e04e1bd03fbbc28711cb04d817ce787593ee7d10->leave($__internal_b6bb67192df98ebe610ca373e04e1bd03fbbc28711cb04d817ce787593ee7d10_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
