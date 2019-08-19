<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e52524aa315a4a122ffd032a8b197baf9cf86728985ee890c7c58e3dd25119a9 extends Twig_Template
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
        $__internal_3055dda11d8549ad927573233623fe142758221067c4f53069af61701ec24975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3055dda11d8549ad927573233623fe142758221067c4f53069af61701ec24975->enter($__internal_3055dda11d8549ad927573233623fe142758221067c4f53069af61701ec24975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_221c29d20f575a9ee1fc9fca725b84bb5f013043df94ba874d4860631eb3c004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221c29d20f575a9ee1fc9fca725b84bb5f013043df94ba874d4860631eb3c004->enter($__internal_221c29d20f575a9ee1fc9fca725b84bb5f013043df94ba874d4860631eb3c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3055dda11d8549ad927573233623fe142758221067c4f53069af61701ec24975->leave($__internal_3055dda11d8549ad927573233623fe142758221067c4f53069af61701ec24975_prof);

        
        $__internal_221c29d20f575a9ee1fc9fca725b84bb5f013043df94ba874d4860631eb3c004->leave($__internal_221c29d20f575a9ee1fc9fca725b84bb5f013043df94ba874d4860631eb3c004_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_05630e618781ff72056b43667fa59d81f01c2b4cf615dd43174e562a68476a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05630e618781ff72056b43667fa59d81f01c2b4cf615dd43174e562a68476a92->enter($__internal_05630e618781ff72056b43667fa59d81f01c2b4cf615dd43174e562a68476a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ed499b0416c812dc59c5d691146ce1069a3bbd938ba5e242606d11bef065d1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed499b0416c812dc59c5d691146ce1069a3bbd938ba5e242606d11bef065d1af->enter($__internal_ed499b0416c812dc59c5d691146ce1069a3bbd938ba5e242606d11bef065d1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ed499b0416c812dc59c5d691146ce1069a3bbd938ba5e242606d11bef065d1af->leave($__internal_ed499b0416c812dc59c5d691146ce1069a3bbd938ba5e242606d11bef065d1af_prof);

        
        $__internal_05630e618781ff72056b43667fa59d81f01c2b4cf615dd43174e562a68476a92->leave($__internal_05630e618781ff72056b43667fa59d81f01c2b4cf615dd43174e562a68476a92_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a4d1b78ff636f947c105da11be9c230d05949ad43098e6a3658e954ca498d5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d1b78ff636f947c105da11be9c230d05949ad43098e6a3658e954ca498d5e8->enter($__internal_a4d1b78ff636f947c105da11be9c230d05949ad43098e6a3658e954ca498d5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_df93d20f32db1306464c8b365c20e8cbbe60d789f9a30e0e8ea433ddd150c0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df93d20f32db1306464c8b365c20e8cbbe60d789f9a30e0e8ea433ddd150c0bb->enter($__internal_df93d20f32db1306464c8b365c20e8cbbe60d789f9a30e0e8ea433ddd150c0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_df93d20f32db1306464c8b365c20e8cbbe60d789f9a30e0e8ea433ddd150c0bb->leave($__internal_df93d20f32db1306464c8b365c20e8cbbe60d789f9a30e0e8ea433ddd150c0bb_prof);

        
        $__internal_a4d1b78ff636f947c105da11be9c230d05949ad43098e6a3658e954ca498d5e8->leave($__internal_a4d1b78ff636f947c105da11be9c230d05949ad43098e6a3658e954ca498d5e8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c361c149c4626c18b41e34aff332d176fa96bc5bd274dd9c07a5164d58b56c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c361c149c4626c18b41e34aff332d176fa96bc5bd274dd9c07a5164d58b56c36->enter($__internal_c361c149c4626c18b41e34aff332d176fa96bc5bd274dd9c07a5164d58b56c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_30abf57cbb316d01042efca577db86130e0d39ff0336d831c4c102748f92d78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30abf57cbb316d01042efca577db86130e0d39ff0336d831c4c102748f92d78c->enter($__internal_30abf57cbb316d01042efca577db86130e0d39ff0336d831c4c102748f92d78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_30abf57cbb316d01042efca577db86130e0d39ff0336d831c4c102748f92d78c->leave($__internal_30abf57cbb316d01042efca577db86130e0d39ff0336d831c4c102748f92d78c_prof);

        
        $__internal_c361c149c4626c18b41e34aff332d176fa96bc5bd274dd9c07a5164d58b56c36->leave($__internal_c361c149c4626c18b41e34aff332d176fa96bc5bd274dd9c07a5164d58b56c36_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
