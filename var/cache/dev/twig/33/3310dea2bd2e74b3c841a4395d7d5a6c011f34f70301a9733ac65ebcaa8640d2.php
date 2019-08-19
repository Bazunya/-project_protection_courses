<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_86d766b03ef2ada7a6e6cbe7462ce8ba7f9b53fcf8bc5bdfdfe0262e91851ae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_fc35b04ec95d174a6348ff2c5325c917e22074b33a4bfab25b81d5d195f2af3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc35b04ec95d174a6348ff2c5325c917e22074b33a4bfab25b81d5d195f2af3b->enter($__internal_fc35b04ec95d174a6348ff2c5325c917e22074b33a4bfab25b81d5d195f2af3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_341189303b5619e8174bff791c64628eb0d6e140a0c1852c2f09aab91fea4c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341189303b5619e8174bff791c64628eb0d6e140a0c1852c2f09aab91fea4c1c->enter($__internal_341189303b5619e8174bff791c64628eb0d6e140a0c1852c2f09aab91fea4c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc35b04ec95d174a6348ff2c5325c917e22074b33a4bfab25b81d5d195f2af3b->leave($__internal_fc35b04ec95d174a6348ff2c5325c917e22074b33a4bfab25b81d5d195f2af3b_prof);

        
        $__internal_341189303b5619e8174bff791c64628eb0d6e140a0c1852c2f09aab91fea4c1c->leave($__internal_341189303b5619e8174bff791c64628eb0d6e140a0c1852c2f09aab91fea4c1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4670b1fce92256897ab58af67e30736efd7edbf3109fde5010a9441c91f7fec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4670b1fce92256897ab58af67e30736efd7edbf3109fde5010a9441c91f7fec0->enter($__internal_4670b1fce92256897ab58af67e30736efd7edbf3109fde5010a9441c91f7fec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11ecd562c87bcfdfde2c0bd77d4e15a44b1060be8d99c954b929311232e323ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ecd562c87bcfdfde2c0bd77d4e15a44b1060be8d99c954b929311232e323ed->enter($__internal_11ecd562c87bcfdfde2c0bd77d4e15a44b1060be8d99c954b929311232e323ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_11ecd562c87bcfdfde2c0bd77d4e15a44b1060be8d99c954b929311232e323ed->leave($__internal_11ecd562c87bcfdfde2c0bd77d4e15a44b1060be8d99c954b929311232e323ed_prof);

        
        $__internal_4670b1fce92256897ab58af67e30736efd7edbf3109fde5010a9441c91f7fec0->leave($__internal_4670b1fce92256897ab58af67e30736efd7edbf3109fde5010a9441c91f7fec0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
