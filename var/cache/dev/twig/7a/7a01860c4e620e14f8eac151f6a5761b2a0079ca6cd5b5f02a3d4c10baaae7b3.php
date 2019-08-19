<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d18d0ca16d2d6505325cd0d131e0af234b0263f607263809fc9256ea1639d190 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_bdc36bf1e627febeb1180f84613429681a3e4ee4151be3ad7a92d7825a44e020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdc36bf1e627febeb1180f84613429681a3e4ee4151be3ad7a92d7825a44e020->enter($__internal_bdc36bf1e627febeb1180f84613429681a3e4ee4151be3ad7a92d7825a44e020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5d4fc1d0f63a664a64a1c5cb5b2282d2e93e60486a9e72d2f109b49aa4347759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4fc1d0f63a664a64a1c5cb5b2282d2e93e60486a9e72d2f109b49aa4347759->enter($__internal_5d4fc1d0f63a664a64a1c5cb5b2282d2e93e60486a9e72d2f109b49aa4347759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdc36bf1e627febeb1180f84613429681a3e4ee4151be3ad7a92d7825a44e020->leave($__internal_bdc36bf1e627febeb1180f84613429681a3e4ee4151be3ad7a92d7825a44e020_prof);

        
        $__internal_5d4fc1d0f63a664a64a1c5cb5b2282d2e93e60486a9e72d2f109b49aa4347759->leave($__internal_5d4fc1d0f63a664a64a1c5cb5b2282d2e93e60486a9e72d2f109b49aa4347759_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c0c3d1f4159b4c4d5b5407e8bf683c6eac6da734b35f187bd785dc5dd30ff03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0c3d1f4159b4c4d5b5407e8bf683c6eac6da734b35f187bd785dc5dd30ff03->enter($__internal_0c0c3d1f4159b4c4d5b5407e8bf683c6eac6da734b35f187bd785dc5dd30ff03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d78eb975f408aa6c7bc6940cf5fa8441a2dacbfb019a91a2581d0f5c88cb5dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78eb975f408aa6c7bc6940cf5fa8441a2dacbfb019a91a2581d0f5c88cb5dfd->enter($__internal_d78eb975f408aa6c7bc6940cf5fa8441a2dacbfb019a91a2581d0f5c88cb5dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d78eb975f408aa6c7bc6940cf5fa8441a2dacbfb019a91a2581d0f5c88cb5dfd->leave($__internal_d78eb975f408aa6c7bc6940cf5fa8441a2dacbfb019a91a2581d0f5c88cb5dfd_prof);

        
        $__internal_0c0c3d1f4159b4c4d5b5407e8bf683c6eac6da734b35f187bd785dc5dd30ff03->leave($__internal_0c0c3d1f4159b4c4d5b5407e8bf683c6eac6da734b35f187bd785dc5dd30ff03_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
