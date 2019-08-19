<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_da8280e9abd97c1c617787f992435aa476132b210b33f797921461cd352f4398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_128a4a3aa7db06467c269eca3f93c38fe01cdc0115614fdade58f732a2699daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128a4a3aa7db06467c269eca3f93c38fe01cdc0115614fdade58f732a2699daa->enter($__internal_128a4a3aa7db06467c269eca3f93c38fe01cdc0115614fdade58f732a2699daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_2ced98f50d75d9d35815aa783b80552c2106cf06f6f9d4962b315a34c0e1cfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ced98f50d75d9d35815aa783b80552c2106cf06f6f9d4962b315a34c0e1cfa9->enter($__internal_2ced98f50d75d9d35815aa783b80552c2106cf06f6f9d4962b315a34c0e1cfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_128a4a3aa7db06467c269eca3f93c38fe01cdc0115614fdade58f732a2699daa->leave($__internal_128a4a3aa7db06467c269eca3f93c38fe01cdc0115614fdade58f732a2699daa_prof);

        
        $__internal_2ced98f50d75d9d35815aa783b80552c2106cf06f6f9d4962b315a34c0e1cfa9->leave($__internal_2ced98f50d75d9d35815aa783b80552c2106cf06f6f9d4962b315a34c0e1cfa9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71a29053010880dfcb0c36899417fd8aa02d73b530285285c2d7fa0bfc7f556a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a29053010880dfcb0c36899417fd8aa02d73b530285285c2d7fa0bfc7f556a->enter($__internal_71a29053010880dfcb0c36899417fd8aa02d73b530285285c2d7fa0bfc7f556a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_89648bf36fa546f9e4582e44ab73a9ff94b5549347d1c575a3f754cb8e5f2625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89648bf36fa546f9e4582e44ab73a9ff94b5549347d1c575a3f754cb8e5f2625->enter($__internal_89648bf36fa546f9e4582e44ab73a9ff94b5549347d1c575a3f754cb8e5f2625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_89648bf36fa546f9e4582e44ab73a9ff94b5549347d1c575a3f754cb8e5f2625->leave($__internal_89648bf36fa546f9e4582e44ab73a9ff94b5549347d1c575a3f754cb8e5f2625_prof);

        
        $__internal_71a29053010880dfcb0c36899417fd8aa02d73b530285285c2d7fa0bfc7f556a->leave($__internal_71a29053010880dfcb0c36899417fd8aa02d73b530285285c2d7fa0bfc7f556a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
