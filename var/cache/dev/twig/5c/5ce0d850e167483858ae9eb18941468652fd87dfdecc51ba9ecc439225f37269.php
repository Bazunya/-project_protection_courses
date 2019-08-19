<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_7696470e74b05ab542ba6bc6a33810113e2b9a60bcb73a76a8b34d64bbc8c794 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d41e1e87ec9f304cf6d78e637a7c4fb4743488fc08bd04ea15402302742ed503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41e1e87ec9f304cf6d78e637a7c4fb4743488fc08bd04ea15402302742ed503->enter($__internal_d41e1e87ec9f304cf6d78e637a7c4fb4743488fc08bd04ea15402302742ed503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_1c05282b6f9e6a90636964f33fc835141f446978c35368e755641437d6c1f0af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c05282b6f9e6a90636964f33fc835141f446978c35368e755641437d6c1f0af->enter($__internal_1c05282b6f9e6a90636964f33fc835141f446978c35368e755641437d6c1f0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41e1e87ec9f304cf6d78e637a7c4fb4743488fc08bd04ea15402302742ed503->leave($__internal_d41e1e87ec9f304cf6d78e637a7c4fb4743488fc08bd04ea15402302742ed503_prof);

        
        $__internal_1c05282b6f9e6a90636964f33fc835141f446978c35368e755641437d6c1f0af->leave($__internal_1c05282b6f9e6a90636964f33fc835141f446978c35368e755641437d6c1f0af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44fbb3f0fb6ab7a58279fd54d99ccb6fb2b44b38416000760976c7919942b677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fbb3f0fb6ab7a58279fd54d99ccb6fb2b44b38416000760976c7919942b677->enter($__internal_44fbb3f0fb6ab7a58279fd54d99ccb6fb2b44b38416000760976c7919942b677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_742251a31c5107dba5e323a9556f22771f5e48172e1affa6c8b44cf5acd6605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742251a31c5107dba5e323a9556f22771f5e48172e1affa6c8b44cf5acd6605c->enter($__internal_742251a31c5107dba5e323a9556f22771f5e48172e1affa6c8b44cf5acd6605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_742251a31c5107dba5e323a9556f22771f5e48172e1affa6c8b44cf5acd6605c->leave($__internal_742251a31c5107dba5e323a9556f22771f5e48172e1affa6c8b44cf5acd6605c_prof);

        
        $__internal_44fbb3f0fb6ab7a58279fd54d99ccb6fb2b44b38416000760976c7919942b677->leave($__internal_44fbb3f0fb6ab7a58279fd54d99ccb6fb2b44b38416000760976c7919942b677_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
