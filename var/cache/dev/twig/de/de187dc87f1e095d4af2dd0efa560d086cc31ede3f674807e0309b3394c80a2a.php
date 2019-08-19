<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_8ad8fe2881de834a7270dd1dfe276022268f4d074a4cd344aab9ac418c46b328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_c2e579abe4f2a0f66d1634eea0fbc56203df454c639d5d0599cdbbc597db1ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e579abe4f2a0f66d1634eea0fbc56203df454c639d5d0599cdbbc597db1ae6->enter($__internal_c2e579abe4f2a0f66d1634eea0fbc56203df454c639d5d0599cdbbc597db1ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_cb58fbf9850a50bb56ee5ff04e970dae65d299ae6e86e3b97ee353aff923fa88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb58fbf9850a50bb56ee5ff04e970dae65d299ae6e86e3b97ee353aff923fa88->enter($__internal_cb58fbf9850a50bb56ee5ff04e970dae65d299ae6e86e3b97ee353aff923fa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2e579abe4f2a0f66d1634eea0fbc56203df454c639d5d0599cdbbc597db1ae6->leave($__internal_c2e579abe4f2a0f66d1634eea0fbc56203df454c639d5d0599cdbbc597db1ae6_prof);

        
        $__internal_cb58fbf9850a50bb56ee5ff04e970dae65d299ae6e86e3b97ee353aff923fa88->leave($__internal_cb58fbf9850a50bb56ee5ff04e970dae65d299ae6e86e3b97ee353aff923fa88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fdca2e1243f9a7d58497c4d67f0aa74e6b4d1613ff2c519f7713a66a3761cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fdca2e1243f9a7d58497c4d67f0aa74e6b4d1613ff2c519f7713a66a3761cc3->enter($__internal_9fdca2e1243f9a7d58497c4d67f0aa74e6b4d1613ff2c519f7713a66a3761cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_698a023f9bebceba5f7f8f9c2e4399f0374d240ed2486dceb5d951d6a5d242d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698a023f9bebceba5f7f8f9c2e4399f0374d240ed2486dceb5d951d6a5d242d7->enter($__internal_698a023f9bebceba5f7f8f9c2e4399f0374d240ed2486dceb5d951d6a5d242d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_698a023f9bebceba5f7f8f9c2e4399f0374d240ed2486dceb5d951d6a5d242d7->leave($__internal_698a023f9bebceba5f7f8f9c2e4399f0374d240ed2486dceb5d951d6a5d242d7_prof);

        
        $__internal_9fdca2e1243f9a7d58497c4d67f0aa74e6b4d1613ff2c519f7713a66a3761cc3->leave($__internal_9fdca2e1243f9a7d58497c4d67f0aa74e6b4d1613ff2c519f7713a66a3761cc3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
