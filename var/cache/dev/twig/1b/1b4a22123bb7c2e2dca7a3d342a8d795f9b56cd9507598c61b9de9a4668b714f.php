<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_18083fa71081d6742988898d5777286571fa6f1da79cfaa7fdee735c06d20ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f35f76bf3da4c56730ea508cb5e1247ecf6367df999d6b90757462c5f33a1206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f76bf3da4c56730ea508cb5e1247ecf6367df999d6b90757462c5f33a1206->enter($__internal_f35f76bf3da4c56730ea508cb5e1247ecf6367df999d6b90757462c5f33a1206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e2de3f1e8c2116ead46c6d75b6b11f01a29baf370265244205b432c12c429637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2de3f1e8c2116ead46c6d75b6b11f01a29baf370265244205b432c12c429637->enter($__internal_e2de3f1e8c2116ead46c6d75b6b11f01a29baf370265244205b432c12c429637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35f76bf3da4c56730ea508cb5e1247ecf6367df999d6b90757462c5f33a1206->leave($__internal_f35f76bf3da4c56730ea508cb5e1247ecf6367df999d6b90757462c5f33a1206_prof);

        
        $__internal_e2de3f1e8c2116ead46c6d75b6b11f01a29baf370265244205b432c12c429637->leave($__internal_e2de3f1e8c2116ead46c6d75b6b11f01a29baf370265244205b432c12c429637_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_287696edc1b5922057633944294c50d7a60881ee0300bb3f2af63164021787cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287696edc1b5922057633944294c50d7a60881ee0300bb3f2af63164021787cf->enter($__internal_287696edc1b5922057633944294c50d7a60881ee0300bb3f2af63164021787cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6564d3fd6ba63b9bb5b16ebdc6a6c76f62de4de229f30e98a19ed4d3eddc8b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6564d3fd6ba63b9bb5b16ebdc6a6c76f62de4de229f30e98a19ed4d3eddc8b24->enter($__internal_6564d3fd6ba63b9bb5b16ebdc6a6c76f62de4de229f30e98a19ed4d3eddc8b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6564d3fd6ba63b9bb5b16ebdc6a6c76f62de4de229f30e98a19ed4d3eddc8b24->leave($__internal_6564d3fd6ba63b9bb5b16ebdc6a6c76f62de4de229f30e98a19ed4d3eddc8b24_prof);

        
        $__internal_287696edc1b5922057633944294c50d7a60881ee0300bb3f2af63164021787cf->leave($__internal_287696edc1b5922057633944294c50d7a60881ee0300bb3f2af63164021787cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
