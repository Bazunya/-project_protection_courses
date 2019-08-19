<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_7ee13b318c520b73a1d43498025f719084d3ec3db8aa1eb9d6ad74acdfe31882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_1f03a8a5585444cfce9456fea02692f2e6ada74e13fee2321168da826592f9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f03a8a5585444cfce9456fea02692f2e6ada74e13fee2321168da826592f9a0->enter($__internal_1f03a8a5585444cfce9456fea02692f2e6ada74e13fee2321168da826592f9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_a64aed580140eceb6e0e82b042356e2010b6c77bf7c9d869203da8e0189e73d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64aed580140eceb6e0e82b042356e2010b6c77bf7c9d869203da8e0189e73d3->enter($__internal_a64aed580140eceb6e0e82b042356e2010b6c77bf7c9d869203da8e0189e73d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f03a8a5585444cfce9456fea02692f2e6ada74e13fee2321168da826592f9a0->leave($__internal_1f03a8a5585444cfce9456fea02692f2e6ada74e13fee2321168da826592f9a0_prof);

        
        $__internal_a64aed580140eceb6e0e82b042356e2010b6c77bf7c9d869203da8e0189e73d3->leave($__internal_a64aed580140eceb6e0e82b042356e2010b6c77bf7c9d869203da8e0189e73d3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da5441691e115cd5afc343c8607793a71c80a3cc216b4f7ec66627adac7b3428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5441691e115cd5afc343c8607793a71c80a3cc216b4f7ec66627adac7b3428->enter($__internal_da5441691e115cd5afc343c8607793a71c80a3cc216b4f7ec66627adac7b3428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6531b35698e8600bdd37cb1808ae3a67c712d01843c1eb4389c2e784f7131922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6531b35698e8600bdd37cb1808ae3a67c712d01843c1eb4389c2e784f7131922->enter($__internal_6531b35698e8600bdd37cb1808ae3a67c712d01843c1eb4389c2e784f7131922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6531b35698e8600bdd37cb1808ae3a67c712d01843c1eb4389c2e784f7131922->leave($__internal_6531b35698e8600bdd37cb1808ae3a67c712d01843c1eb4389c2e784f7131922_prof);

        
        $__internal_da5441691e115cd5afc343c8607793a71c80a3cc216b4f7ec66627adac7b3428->leave($__internal_da5441691e115cd5afc343c8607793a71c80a3cc216b4f7ec66627adac7b3428_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
