<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_dbf551960ead1f940b99d725276f7a574c529b2464ea43128b50ebff429b62a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_d0bf9df6be7dd0af6d79577c1ba4603de7b32b0db3e17f58598f1a151033ef7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bf9df6be7dd0af6d79577c1ba4603de7b32b0db3e17f58598f1a151033ef7f->enter($__internal_d0bf9df6be7dd0af6d79577c1ba4603de7b32b0db3e17f58598f1a151033ef7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_7e7374a8d6980adab047558de0cc0eceae16b5f3e8b619b6219980bd8efbf6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7374a8d6980adab047558de0cc0eceae16b5f3e8b619b6219980bd8efbf6b0->enter($__internal_7e7374a8d6980adab047558de0cc0eceae16b5f3e8b619b6219980bd8efbf6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0bf9df6be7dd0af6d79577c1ba4603de7b32b0db3e17f58598f1a151033ef7f->leave($__internal_d0bf9df6be7dd0af6d79577c1ba4603de7b32b0db3e17f58598f1a151033ef7f_prof);

        
        $__internal_7e7374a8d6980adab047558de0cc0eceae16b5f3e8b619b6219980bd8efbf6b0->leave($__internal_7e7374a8d6980adab047558de0cc0eceae16b5f3e8b619b6219980bd8efbf6b0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be4125cfba6cbd01e05350a65210b7363753ece99c11f40b135226d54e92b934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4125cfba6cbd01e05350a65210b7363753ece99c11f40b135226d54e92b934->enter($__internal_be4125cfba6cbd01e05350a65210b7363753ece99c11f40b135226d54e92b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5fb24b137ef7e3b9e7d02a085848af26896f1d9931e2483528db47f7d059494e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb24b137ef7e3b9e7d02a085848af26896f1d9931e2483528db47f7d059494e->enter($__internal_5fb24b137ef7e3b9e7d02a085848af26896f1d9931e2483528db47f7d059494e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5fb24b137ef7e3b9e7d02a085848af26896f1d9931e2483528db47f7d059494e->leave($__internal_5fb24b137ef7e3b9e7d02a085848af26896f1d9931e2483528db47f7d059494e_prof);

        
        $__internal_be4125cfba6cbd01e05350a65210b7363753ece99c11f40b135226d54e92b934->leave($__internal_be4125cfba6cbd01e05350a65210b7363753ece99c11f40b135226d54e92b934_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
