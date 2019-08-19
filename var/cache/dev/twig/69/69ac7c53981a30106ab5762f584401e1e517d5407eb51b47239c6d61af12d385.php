<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c43355c770256d790fabf4835ec6298e36a9e78ff2a871a15826d8027860312e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5a956c33ec14a84105f445f84172bb8e58bf9bf0218a2778c9147ddbae914695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a956c33ec14a84105f445f84172bb8e58bf9bf0218a2778c9147ddbae914695->enter($__internal_5a956c33ec14a84105f445f84172bb8e58bf9bf0218a2778c9147ddbae914695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_49779928ca67645323058a1b9808fb8e15fcd62e8d306a8f3f228baf207b29ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49779928ca67645323058a1b9808fb8e15fcd62e8d306a8f3f228baf207b29ea->enter($__internal_49779928ca67645323058a1b9808fb8e15fcd62e8d306a8f3f228baf207b29ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a956c33ec14a84105f445f84172bb8e58bf9bf0218a2778c9147ddbae914695->leave($__internal_5a956c33ec14a84105f445f84172bb8e58bf9bf0218a2778c9147ddbae914695_prof);

        
        $__internal_49779928ca67645323058a1b9808fb8e15fcd62e8d306a8f3f228baf207b29ea->leave($__internal_49779928ca67645323058a1b9808fb8e15fcd62e8d306a8f3f228baf207b29ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_072a5b6bbc0a648d5412c2c80b960a8a05382faa6fd9bd38c33b03a25c5effce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072a5b6bbc0a648d5412c2c80b960a8a05382faa6fd9bd38c33b03a25c5effce->enter($__internal_072a5b6bbc0a648d5412c2c80b960a8a05382faa6fd9bd38c33b03a25c5effce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9f2b2e55918e6d6514f81e414b07b26adae3b369c9f193deadc511bf1da3839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f2b2e55918e6d6514f81e414b07b26adae3b369c9f193deadc511bf1da3839->enter($__internal_c9f2b2e55918e6d6514f81e414b07b26adae3b369c9f193deadc511bf1da3839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c9f2b2e55918e6d6514f81e414b07b26adae3b369c9f193deadc511bf1da3839->leave($__internal_c9f2b2e55918e6d6514f81e414b07b26adae3b369c9f193deadc511bf1da3839_prof);

        
        $__internal_072a5b6bbc0a648d5412c2c80b960a8a05382faa6fd9bd38c33b03a25c5effce->leave($__internal_072a5b6bbc0a648d5412c2c80b960a8a05382faa6fd9bd38c33b03a25c5effce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
