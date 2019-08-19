<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_12e55a6e3d206ae4c3759a267fcbf8d31e90a25533d91129c250217105dae5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_76db8f9e9fdeeebc6bf5664d1097d657ecdf5f501135879ffbe705fdaecb6a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76db8f9e9fdeeebc6bf5664d1097d657ecdf5f501135879ffbe705fdaecb6a95->enter($__internal_76db8f9e9fdeeebc6bf5664d1097d657ecdf5f501135879ffbe705fdaecb6a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5a75c25f362cfc1622e3a2be0701aaae9cfeed5b7f70935024e9a23a9c3d4314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a75c25f362cfc1622e3a2be0701aaae9cfeed5b7f70935024e9a23a9c3d4314->enter($__internal_5a75c25f362cfc1622e3a2be0701aaae9cfeed5b7f70935024e9a23a9c3d4314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76db8f9e9fdeeebc6bf5664d1097d657ecdf5f501135879ffbe705fdaecb6a95->leave($__internal_76db8f9e9fdeeebc6bf5664d1097d657ecdf5f501135879ffbe705fdaecb6a95_prof);

        
        $__internal_5a75c25f362cfc1622e3a2be0701aaae9cfeed5b7f70935024e9a23a9c3d4314->leave($__internal_5a75c25f362cfc1622e3a2be0701aaae9cfeed5b7f70935024e9a23a9c3d4314_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_223438e114c35a33380381b1e0800b904a72e50f9449592ef8263f877433cb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223438e114c35a33380381b1e0800b904a72e50f9449592ef8263f877433cb3e->enter($__internal_223438e114c35a33380381b1e0800b904a72e50f9449592ef8263f877433cb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c15d9d3da1cb0dc7c1df6ab0bcefe6e3def9a066e330528b1264ea653f7ce77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c15d9d3da1cb0dc7c1df6ab0bcefe6e3def9a066e330528b1264ea653f7ce77e->enter($__internal_c15d9d3da1cb0dc7c1df6ab0bcefe6e3def9a066e330528b1264ea653f7ce77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c15d9d3da1cb0dc7c1df6ab0bcefe6e3def9a066e330528b1264ea653f7ce77e->leave($__internal_c15d9d3da1cb0dc7c1df6ab0bcefe6e3def9a066e330528b1264ea653f7ce77e_prof);

        
        $__internal_223438e114c35a33380381b1e0800b904a72e50f9449592ef8263f877433cb3e->leave($__internal_223438e114c35a33380381b1e0800b904a72e50f9449592ef8263f877433cb3e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
