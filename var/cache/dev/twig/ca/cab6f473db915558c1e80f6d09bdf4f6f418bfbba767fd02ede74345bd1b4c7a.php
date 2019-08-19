<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3d3ea420fdf5575c6ae73ae7a176a9a0bba43fe059950e8c22c1290e138f020c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_d92d544911ac02006f9c63a355fae86742a22983a37fde688bece945e61fecc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92d544911ac02006f9c63a355fae86742a22983a37fde688bece945e61fecc4->enter($__internal_d92d544911ac02006f9c63a355fae86742a22983a37fde688bece945e61fecc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_60cfbf8bc0cf620f9dfa511e4068524e4c7de9f3baa275c76660b082720320c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cfbf8bc0cf620f9dfa511e4068524e4c7de9f3baa275c76660b082720320c3->enter($__internal_60cfbf8bc0cf620f9dfa511e4068524e4c7de9f3baa275c76660b082720320c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92d544911ac02006f9c63a355fae86742a22983a37fde688bece945e61fecc4->leave($__internal_d92d544911ac02006f9c63a355fae86742a22983a37fde688bece945e61fecc4_prof);

        
        $__internal_60cfbf8bc0cf620f9dfa511e4068524e4c7de9f3baa275c76660b082720320c3->leave($__internal_60cfbf8bc0cf620f9dfa511e4068524e4c7de9f3baa275c76660b082720320c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1442d2ef2c61454fdd76792a7dae46415131104b134b8044de888e6ebb3195c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1442d2ef2c61454fdd76792a7dae46415131104b134b8044de888e6ebb3195c->enter($__internal_c1442d2ef2c61454fdd76792a7dae46415131104b134b8044de888e6ebb3195c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_248552dd21618b8d8b41b6bf133f17453bf405c07b5dad98969f39bb08505a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248552dd21618b8d8b41b6bf133f17453bf405c07b5dad98969f39bb08505a0a->enter($__internal_248552dd21618b8d8b41b6bf133f17453bf405c07b5dad98969f39bb08505a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_248552dd21618b8d8b41b6bf133f17453bf405c07b5dad98969f39bb08505a0a->leave($__internal_248552dd21618b8d8b41b6bf133f17453bf405c07b5dad98969f39bb08505a0a_prof);

        
        $__internal_c1442d2ef2c61454fdd76792a7dae46415131104b134b8044de888e6ebb3195c->leave($__internal_c1442d2ef2c61454fdd76792a7dae46415131104b134b8044de888e6ebb3195c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
