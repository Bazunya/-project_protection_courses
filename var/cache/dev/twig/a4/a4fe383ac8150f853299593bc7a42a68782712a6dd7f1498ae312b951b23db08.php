<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_9306661a804a02dd478f2e5fe9e9817af6346e9d7225597f21e9b1ffc7c2f43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d56fc08941f14aad3b4b668d866ea012b02773765edf608e24ea0e8ef1885525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d56fc08941f14aad3b4b668d866ea012b02773765edf608e24ea0e8ef1885525->enter($__internal_d56fc08941f14aad3b4b668d866ea012b02773765edf608e24ea0e8ef1885525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_d35c58daf69982451613a3d4785864450e38d07da944c3900c65db4de966cb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35c58daf69982451613a3d4785864450e38d07da944c3900c65db4de966cb23->enter($__internal_d35c58daf69982451613a3d4785864450e38d07da944c3900c65db4de966cb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56fc08941f14aad3b4b668d866ea012b02773765edf608e24ea0e8ef1885525->leave($__internal_d56fc08941f14aad3b4b668d866ea012b02773765edf608e24ea0e8ef1885525_prof);

        
        $__internal_d35c58daf69982451613a3d4785864450e38d07da944c3900c65db4de966cb23->leave($__internal_d35c58daf69982451613a3d4785864450e38d07da944c3900c65db4de966cb23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2736f07937326ee41257e9335eb6e60f099c745368b4dde1aeeddc0555fc28d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2736f07937326ee41257e9335eb6e60f099c745368b4dde1aeeddc0555fc28d8->enter($__internal_2736f07937326ee41257e9335eb6e60f099c745368b4dde1aeeddc0555fc28d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bfd70d657cc4bcaa64e4fc7463250608ad72fc3ab70ac22ff4a92f5f214388ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd70d657cc4bcaa64e4fc7463250608ad72fc3ab70ac22ff4a92f5f214388ee->enter($__internal_bfd70d657cc4bcaa64e4fc7463250608ad72fc3ab70ac22ff4a92f5f214388ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_bfd70d657cc4bcaa64e4fc7463250608ad72fc3ab70ac22ff4a92f5f214388ee->leave($__internal_bfd70d657cc4bcaa64e4fc7463250608ad72fc3ab70ac22ff4a92f5f214388ee_prof);

        
        $__internal_2736f07937326ee41257e9335eb6e60f099c745368b4dde1aeeddc0555fc28d8->leave($__internal_2736f07937326ee41257e9335eb6e60f099c745368b4dde1aeeddc0555fc28d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
