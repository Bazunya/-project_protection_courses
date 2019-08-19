<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_16350bf001733a06a7ae63d07fba7ee12b45d692c3491f9b2f5460493194e82a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b2b2b4c74769db64400c9eaf19486d1753ac5a1a7366397acf42b905a28bf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2b2b4c74769db64400c9eaf19486d1753ac5a1a7366397acf42b905a28bf44->enter($__internal_7b2b2b4c74769db64400c9eaf19486d1753ac5a1a7366397acf42b905a28bf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_4e7b8bf2341faa23e0d86ab3c15ce6ed9dea9ebf775e3848aad01a51ae9a4b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7b8bf2341faa23e0d86ab3c15ce6ed9dea9ebf775e3848aad01a51ae9a4b0e->enter($__internal_4e7b8bf2341faa23e0d86ab3c15ce6ed9dea9ebf775e3848aad01a51ae9a4b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_7b2b2b4c74769db64400c9eaf19486d1753ac5a1a7366397acf42b905a28bf44->leave($__internal_7b2b2b4c74769db64400c9eaf19486d1753ac5a1a7366397acf42b905a28bf44_prof);

        
        $__internal_4e7b8bf2341faa23e0d86ab3c15ce6ed9dea9ebf775e3848aad01a51ae9a4b0e->leave($__internal_4e7b8bf2341faa23e0d86ab3c15ce6ed9dea9ebf775e3848aad01a51ae9a4b0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
