<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1c3952a2a5e0edbaa12870b9b80ea260777fe49de7eaeeb59a08b51a0cb8b07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e6e7d2ef039cc762b6378ea44dd20bb495810f4129a64bc64de065069553b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6e7d2ef039cc762b6378ea44dd20bb495810f4129a64bc64de065069553b25->enter($__internal_9e6e7d2ef039cc762b6378ea44dd20bb495810f4129a64bc64de065069553b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_67d9e039cf49e2ad5a4492c26154bb60c79bcc5a0df571f151688b8ff4cb82a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d9e039cf49e2ad5a4492c26154bb60c79bcc5a0df571f151688b8ff4cb82a6->enter($__internal_67d9e039cf49e2ad5a4492c26154bb60c79bcc5a0df571f151688b8ff4cb82a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9e6e7d2ef039cc762b6378ea44dd20bb495810f4129a64bc64de065069553b25->leave($__internal_9e6e7d2ef039cc762b6378ea44dd20bb495810f4129a64bc64de065069553b25_prof);

        
        $__internal_67d9e039cf49e2ad5a4492c26154bb60c79bcc5a0df571f151688b8ff4cb82a6->leave($__internal_67d9e039cf49e2ad5a4492c26154bb60c79bcc5a0df571f151688b8ff4cb82a6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_99b84df6be8a7a42797f3d7f3cd44c920a5035222aceb10f16dd6d63feb32559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b84df6be8a7a42797f3d7f3cd44c920a5035222aceb10f16dd6d63feb32559->enter($__internal_99b84df6be8a7a42797f3d7f3cd44c920a5035222aceb10f16dd6d63feb32559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_518ab5a2d4259f5346f4be61582312ad8496a50432f80749cdb8c77775dcde42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518ab5a2d4259f5346f4be61582312ad8496a50432f80749cdb8c77775dcde42->enter($__internal_518ab5a2d4259f5346f4be61582312ad8496a50432f80749cdb8c77775dcde42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_518ab5a2d4259f5346f4be61582312ad8496a50432f80749cdb8c77775dcde42->leave($__internal_518ab5a2d4259f5346f4be61582312ad8496a50432f80749cdb8c77775dcde42_prof);

        
        $__internal_99b84df6be8a7a42797f3d7f3cd44c920a5035222aceb10f16dd6d63feb32559->leave($__internal_99b84df6be8a7a42797f3d7f3cd44c920a5035222aceb10f16dd6d63feb32559_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_844cb6e0dfb774d4a1ca45ebf8aa1f1b5a829486bfe392d1405a040942c2fe83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_844cb6e0dfb774d4a1ca45ebf8aa1f1b5a829486bfe392d1405a040942c2fe83->enter($__internal_844cb6e0dfb774d4a1ca45ebf8aa1f1b5a829486bfe392d1405a040942c2fe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_657a7364747b3055813d21916a7b8a1443a0ee06103d54cca1dca91f52fe25cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657a7364747b3055813d21916a7b8a1443a0ee06103d54cca1dca91f52fe25cf->enter($__internal_657a7364747b3055813d21916a7b8a1443a0ee06103d54cca1dca91f52fe25cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_657a7364747b3055813d21916a7b8a1443a0ee06103d54cca1dca91f52fe25cf->leave($__internal_657a7364747b3055813d21916a7b8a1443a0ee06103d54cca1dca91f52fe25cf_prof);

        
        $__internal_844cb6e0dfb774d4a1ca45ebf8aa1f1b5a829486bfe392d1405a040942c2fe83->leave($__internal_844cb6e0dfb774d4a1ca45ebf8aa1f1b5a829486bfe392d1405a040942c2fe83_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6dc3870fc199058be04f74ea1dc6da5f748951da1cae03482b396116542e1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6dc3870fc199058be04f74ea1dc6da5f748951da1cae03482b396116542e1f1->enter($__internal_b6dc3870fc199058be04f74ea1dc6da5f748951da1cae03482b396116542e1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a54bf893b6471cb444da1b366b4441569ebacf9d1fb8896d672d848c582d2c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54bf893b6471cb444da1b366b4441569ebacf9d1fb8896d672d848c582d2c1f->enter($__internal_a54bf893b6471cb444da1b366b4441569ebacf9d1fb8896d672d848c582d2c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a54bf893b6471cb444da1b366b4441569ebacf9d1fb8896d672d848c582d2c1f->leave($__internal_a54bf893b6471cb444da1b366b4441569ebacf9d1fb8896d672d848c582d2c1f_prof);

        
        $__internal_b6dc3870fc199058be04f74ea1dc6da5f748951da1cae03482b396116542e1f1->leave($__internal_b6dc3870fc199058be04f74ea1dc6da5f748951da1cae03482b396116542e1f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
