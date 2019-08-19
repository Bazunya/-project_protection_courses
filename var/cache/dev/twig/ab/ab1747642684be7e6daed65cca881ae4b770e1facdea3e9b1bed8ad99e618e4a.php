<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_48517192bd64975284510359f253a9290b2638908af076108dd2f177cfe740f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_80a734b2720a4af6361d3d557d813a174213278f79c7dfd672bc560c2cab6cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a734b2720a4af6361d3d557d813a174213278f79c7dfd672bc560c2cab6cdb->enter($__internal_80a734b2720a4af6361d3d557d813a174213278f79c7dfd672bc560c2cab6cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_9ee9810cbf2b7f49aee943cd7f8651c6fbc81d5927bb7b92953233d384c31d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee9810cbf2b7f49aee943cd7f8651c6fbc81d5927bb7b92953233d384c31d35->enter($__internal_9ee9810cbf2b7f49aee943cd7f8651c6fbc81d5927bb7b92953233d384c31d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a734b2720a4af6361d3d557d813a174213278f79c7dfd672bc560c2cab6cdb->leave($__internal_80a734b2720a4af6361d3d557d813a174213278f79c7dfd672bc560c2cab6cdb_prof);

        
        $__internal_9ee9810cbf2b7f49aee943cd7f8651c6fbc81d5927bb7b92953233d384c31d35->leave($__internal_9ee9810cbf2b7f49aee943cd7f8651c6fbc81d5927bb7b92953233d384c31d35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3bb9495d615ae4e8e17ef3a5311beff43bf4a984122006fa9575646d8e5fef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bb9495d615ae4e8e17ef3a5311beff43bf4a984122006fa9575646d8e5fef0->enter($__internal_f3bb9495d615ae4e8e17ef3a5311beff43bf4a984122006fa9575646d8e5fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_edae522e0dbf22f7bab98a37185fd426c56431377912731eef0231bdeb68cd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edae522e0dbf22f7bab98a37185fd426c56431377912731eef0231bdeb68cd29->enter($__internal_edae522e0dbf22f7bab98a37185fd426c56431377912731eef0231bdeb68cd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_edae522e0dbf22f7bab98a37185fd426c56431377912731eef0231bdeb68cd29->leave($__internal_edae522e0dbf22f7bab98a37185fd426c56431377912731eef0231bdeb68cd29_prof);

        
        $__internal_f3bb9495d615ae4e8e17ef3a5311beff43bf4a984122006fa9575646d8e5fef0->leave($__internal_f3bb9495d615ae4e8e17ef3a5311beff43bf4a984122006fa9575646d8e5fef0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
