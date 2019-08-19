<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ef96e54e3a8afb9df227955af4ba1b0fe88b7ed2a110b1e948da3e03509b1017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e78269a462d653a2e4ad64d2581339dba4dafa5cda970efc5aef98e896eb91f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78269a462d653a2e4ad64d2581339dba4dafa5cda970efc5aef98e896eb91f1->enter($__internal_e78269a462d653a2e4ad64d2581339dba4dafa5cda970efc5aef98e896eb91f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_84386ecf3ca2d5ea604517f29b1aa1460bf0bb76b9dc88cea8de5b75ceb53696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84386ecf3ca2d5ea604517f29b1aa1460bf0bb76b9dc88cea8de5b75ceb53696->enter($__internal_84386ecf3ca2d5ea604517f29b1aa1460bf0bb76b9dc88cea8de5b75ceb53696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78269a462d653a2e4ad64d2581339dba4dafa5cda970efc5aef98e896eb91f1->leave($__internal_e78269a462d653a2e4ad64d2581339dba4dafa5cda970efc5aef98e896eb91f1_prof);

        
        $__internal_84386ecf3ca2d5ea604517f29b1aa1460bf0bb76b9dc88cea8de5b75ceb53696->leave($__internal_84386ecf3ca2d5ea604517f29b1aa1460bf0bb76b9dc88cea8de5b75ceb53696_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_765c6cc79a5da9e93d77b5bda76efb2b3e9ed0cd980ee8ecac008f27b2794da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765c6cc79a5da9e93d77b5bda76efb2b3e9ed0cd980ee8ecac008f27b2794da9->enter($__internal_765c6cc79a5da9e93d77b5bda76efb2b3e9ed0cd980ee8ecac008f27b2794da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8248aaac959b28b0312212d4eeb1ef5534699d47b9d684f4d82979dc2645da22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8248aaac959b28b0312212d4eeb1ef5534699d47b9d684f4d82979dc2645da22->enter($__internal_8248aaac959b28b0312212d4eeb1ef5534699d47b9d684f4d82979dc2645da22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8248aaac959b28b0312212d4eeb1ef5534699d47b9d684f4d82979dc2645da22->leave($__internal_8248aaac959b28b0312212d4eeb1ef5534699d47b9d684f4d82979dc2645da22_prof);

        
        $__internal_765c6cc79a5da9e93d77b5bda76efb2b3e9ed0cd980ee8ecac008f27b2794da9->leave($__internal_765c6cc79a5da9e93d77b5bda76efb2b3e9ed0cd980ee8ecac008f27b2794da9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
