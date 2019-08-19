<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_5f7b527b02922f16e44c99c2607b90a99943679b7d2ff5e2be3306fbaffc9043 extends Twig_Template
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
        $__internal_280adb15ee4066c3e799a39dd23d26cdc552ba5fe2b38cfe548a995bacf76658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280adb15ee4066c3e799a39dd23d26cdc552ba5fe2b38cfe548a995bacf76658->enter($__internal_280adb15ee4066c3e799a39dd23d26cdc552ba5fe2b38cfe548a995bacf76658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_bbda26a1379af4222898fbc8b7ba217ffa2f3afc7b75222f47a1064c5f4a6544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbda26a1379af4222898fbc8b7ba217ffa2f3afc7b75222f47a1064c5f4a6544->enter($__internal_bbda26a1379af4222898fbc8b7ba217ffa2f3afc7b75222f47a1064c5f4a6544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_280adb15ee4066c3e799a39dd23d26cdc552ba5fe2b38cfe548a995bacf76658->leave($__internal_280adb15ee4066c3e799a39dd23d26cdc552ba5fe2b38cfe548a995bacf76658_prof);

        
        $__internal_bbda26a1379af4222898fbc8b7ba217ffa2f3afc7b75222f47a1064c5f4a6544->leave($__internal_bbda26a1379af4222898fbc8b7ba217ffa2f3afc7b75222f47a1064c5f4a6544_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
