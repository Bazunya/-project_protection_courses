<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ba6373570de84a7f914d31e49997f72e2c50d010c483be895dcc1efb7eb4452c extends Twig_Template
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
        $__internal_a530ed8b1c3994b1d5cab4d8cf76749a0fdbf1d07302b5ddf361705252d63f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a530ed8b1c3994b1d5cab4d8cf76749a0fdbf1d07302b5ddf361705252d63f82->enter($__internal_a530ed8b1c3994b1d5cab4d8cf76749a0fdbf1d07302b5ddf361705252d63f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_f92144eed7f7c95fd15f448bc8a221ecc9b8f4d97bfee62a1dacd3f5a4dd2e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92144eed7f7c95fd15f448bc8a221ecc9b8f4d97bfee62a1dacd3f5a4dd2e2d->enter($__internal_f92144eed7f7c95fd15f448bc8a221ecc9b8f4d97bfee62a1dacd3f5a4dd2e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_a530ed8b1c3994b1d5cab4d8cf76749a0fdbf1d07302b5ddf361705252d63f82->leave($__internal_a530ed8b1c3994b1d5cab4d8cf76749a0fdbf1d07302b5ddf361705252d63f82_prof);

        
        $__internal_f92144eed7f7c95fd15f448bc8a221ecc9b8f4d97bfee62a1dacd3f5a4dd2e2d->leave($__internal_f92144eed7f7c95fd15f448bc8a221ecc9b8f4d97bfee62a1dacd3f5a4dd2e2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
