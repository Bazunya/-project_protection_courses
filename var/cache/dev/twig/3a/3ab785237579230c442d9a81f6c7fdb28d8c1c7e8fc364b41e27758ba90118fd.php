<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_362783e924dc52eba0ec0adea5b5dced2f28ad1496ea6e059b2d4888597e1116 extends Twig_Template
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
        $__internal_fe51a3ad3dcb3e1ba46d4715d2e365ae564017eabb34a00e3548377f19d25a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe51a3ad3dcb3e1ba46d4715d2e365ae564017eabb34a00e3548377f19d25a5c->enter($__internal_fe51a3ad3dcb3e1ba46d4715d2e365ae564017eabb34a00e3548377f19d25a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_89c223c31f251fd93016b02fd3a3fe2652db0281f02b5e8503cb345a3f9a5539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c223c31f251fd93016b02fd3a3fe2652db0281f02b5e8503cb345a3f9a5539->enter($__internal_89c223c31f251fd93016b02fd3a3fe2652db0281f02b5e8503cb345a3f9a5539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_fe51a3ad3dcb3e1ba46d4715d2e365ae564017eabb34a00e3548377f19d25a5c->leave($__internal_fe51a3ad3dcb3e1ba46d4715d2e365ae564017eabb34a00e3548377f19d25a5c_prof);

        
        $__internal_89c223c31f251fd93016b02fd3a3fe2652db0281f02b5e8503cb345a3f9a5539->leave($__internal_89c223c31f251fd93016b02fd3a3fe2652db0281f02b5e8503cb345a3f9a5539_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
