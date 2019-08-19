<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2bd6d79903e5c5b9a2d23811763e51cb15e118c0a426fd22ca9e4ae37898b0f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'h2' => array($this, 'block_h2'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18abaca4f9daf91c4b01ac7bba55435696a9fac0569d2d9f80f6da95633e1eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18abaca4f9daf91c4b01ac7bba55435696a9fac0569d2d9f80f6da95633e1eeb->enter($__internal_18abaca4f9daf91c4b01ac7bba55435696a9fac0569d2d9f80f6da95633e1eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_836c5fca9db051219b2504f91896bea8c947b9b8efbec11024aa4fd692e5b0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836c5fca9db051219b2504f91896bea8c947b9b8efbec11024aa4fd692e5b0d0->enter($__internal_836c5fca9db051219b2504f91896bea8c947b9b8efbec11024aa4fd692e5b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18abaca4f9daf91c4b01ac7bba55435696a9fac0569d2d9f80f6da95633e1eeb->leave($__internal_18abaca4f9daf91c4b01ac7bba55435696a9fac0569d2d9f80f6da95633e1eeb_prof);

        
        $__internal_836c5fca9db051219b2504f91896bea8c947b9b8efbec11024aa4fd692e5b0d0->leave($__internal_836c5fca9db051219b2504f91896bea8c947b9b8efbec11024aa4fd692e5b0d0_prof);

    }

    // line 2
    public function block_h2($context, array $blocks = array())
    {
        $__internal_6a219bb1103971fe3d4c6a53a90bbd685210daa84238fa3494384c231ab955e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a219bb1103971fe3d4c6a53a90bbd685210daa84238fa3494384c231ab955e2->enter($__internal_6a219bb1103971fe3d4c6a53a90bbd685210daa84238fa3494384c231ab955e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        $__internal_eb73dade5d1114749f248b13897ef1ad2527b53b7e2b6a0b0c1e7c6dad31384f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb73dade5d1114749f248b13897ef1ad2527b53b7e2b6a0b0c1e7c6dad31384f->enter($__internal_eb73dade5d1114749f248b13897ef1ad2527b53b7e2b6a0b0c1e7c6dad31384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        // line 3
        echo "<h2 id=\"registr\">Авторизация</h2>
";
        
        $__internal_eb73dade5d1114749f248b13897ef1ad2527b53b7e2b6a0b0c1e7c6dad31384f->leave($__internal_eb73dade5d1114749f248b13897ef1ad2527b53b7e2b6a0b0c1e7c6dad31384f_prof);

        
        $__internal_6a219bb1103971fe3d4c6a53a90bbd685210daa84238fa3494384c231ab955e2->leave($__internal_6a219bb1103971fe3d4c6a53a90bbd685210daa84238fa3494384c231ab955e2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d322bbed18c3616199b5fe05218f88ef5bb869525ef2b8639e83efbd26972aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d322bbed18c3616199b5fe05218f88ef5bb869525ef2b8639e83efbd26972aa->enter($__internal_7d322bbed18c3616199b5fe05218f88ef5bb869525ef2b8639e83efbd26972aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fef5aeca2448f077221c3e8ffb5d9b4db0d20114dfd3b4e67d3ec686f6ebc937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef5aeca2448f077221c3e8ffb5d9b4db0d20114dfd3b4e67d3ec686f6ebc937->enter($__internal_fef5aeca2448f077221c3e8ffb5d9b4db0d20114dfd3b4e67d3ec686f6ebc937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"fos_user_registration_register\">
        <div class=\"password_l\">
        ";
        // line 8
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    </div>
";
        
        $__internal_fef5aeca2448f077221c3e8ffb5d9b4db0d20114dfd3b4e67d3ec686f6ebc937->leave($__internal_fef5aeca2448f077221c3e8ffb5d9b4db0d20114dfd3b4e67d3ec686f6ebc937_prof);

        
        $__internal_7d322bbed18c3616199b5fe05218f88ef5bb869525ef2b8639e83efbd26972aa->leave($__internal_7d322bbed18c3616199b5fe05218f88ef5bb869525ef2b8639e83efbd26972aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 8,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
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
{% block h2 %}
<h2 id=\"registr\">Авторизация</h2>
{% endblock %}
{% block fos_user_content %}
    <div class=\"fos_user_registration_register\">
        <div class=\"password_l\">
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
