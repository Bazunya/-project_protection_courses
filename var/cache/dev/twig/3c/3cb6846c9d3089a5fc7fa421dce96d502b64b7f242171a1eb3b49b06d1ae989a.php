<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_95b082ebcbbd8f83793c451d409360e34d8b41223dbfba580f06ffd6a4dc2eac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_68f270381071eca3e984d5b533fcf915b56a6e957ce347f68743b47fef4a867e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f270381071eca3e984d5b533fcf915b56a6e957ce347f68743b47fef4a867e->enter($__internal_68f270381071eca3e984d5b533fcf915b56a6e957ce347f68743b47fef4a867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a2df88b14bac62a1e5d5aa21fef9492dca02b9c2dfc044f5d5b2b19e943b8827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2df88b14bac62a1e5d5aa21fef9492dca02b9c2dfc044f5d5b2b19e943b8827->enter($__internal_a2df88b14bac62a1e5d5aa21fef9492dca02b9c2dfc044f5d5b2b19e943b8827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68f270381071eca3e984d5b533fcf915b56a6e957ce347f68743b47fef4a867e->leave($__internal_68f270381071eca3e984d5b533fcf915b56a6e957ce347f68743b47fef4a867e_prof);

        
        $__internal_a2df88b14bac62a1e5d5aa21fef9492dca02b9c2dfc044f5d5b2b19e943b8827->leave($__internal_a2df88b14bac62a1e5d5aa21fef9492dca02b9c2dfc044f5d5b2b19e943b8827_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be4421494c691d58a4bfbaaccb9961cfdf111729de298f985c1d75b49c714ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4421494c691d58a4bfbaaccb9961cfdf111729de298f985c1d75b49c714ad0->enter($__internal_be4421494c691d58a4bfbaaccb9961cfdf111729de298f985c1d75b49c714ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6038ad7847d60e2ad24a8f33bb296e9ac81eb2f8f9fc98d6655049873cd6cc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6038ad7847d60e2ad24a8f33bb296e9ac81eb2f8f9fc98d6655049873cd6cc93->enter($__internal_6038ad7847d60e2ad24a8f33bb296e9ac81eb2f8f9fc98d6655049873cd6cc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6038ad7847d60e2ad24a8f33bb296e9ac81eb2f8f9fc98d6655049873cd6cc93->leave($__internal_6038ad7847d60e2ad24a8f33bb296e9ac81eb2f8f9fc98d6655049873cd6cc93_prof);

        
        $__internal_be4421494c691d58a4bfbaaccb9961cfdf111729de298f985c1d75b49c714ad0->leave($__internal_be4421494c691d58a4bfbaaccb9961cfdf111729de298f985c1d75b49c714ad0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
