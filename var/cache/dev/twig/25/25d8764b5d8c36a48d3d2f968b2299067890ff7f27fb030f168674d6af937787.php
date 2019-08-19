<?php

/* :default:vsya_pochta.html.twig */
class __TwigTemplate_757ed18c6a4924e8bab944adaad485795821831f2eba2dddcc4a5690f8b34483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:vsya_pochta.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f56c488196d6334161252541ad7246031e83da40819f74f091a0c840290aac40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56c488196d6334161252541ad7246031e83da40819f74f091a0c840290aac40->enter($__internal_f56c488196d6334161252541ad7246031e83da40819f74f091a0c840290aac40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:vsya_pochta.html.twig"));

        $__internal_bec4999de1b75fb609a2f7032bad9ab1027ff5ac2e57bf3c7445aaa21cd3fad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec4999de1b75fb609a2f7032bad9ab1027ff5ac2e57bf3c7445aaa21cd3fad6->enter($__internal_bec4999de1b75fb609a2f7032bad9ab1027ff5ac2e57bf3c7445aaa21cd3fad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:vsya_pochta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f56c488196d6334161252541ad7246031e83da40819f74f091a0c840290aac40->leave($__internal_f56c488196d6334161252541ad7246031e83da40819f74f091a0c840290aac40_prof);

        
        $__internal_bec4999de1b75fb609a2f7032bad9ab1027ff5ac2e57bf3c7445aaa21cd3fad6->leave($__internal_bec4999de1b75fb609a2f7032bad9ab1027ff5ac2e57bf3c7445aaa21cd3fad6_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed756fb068d6e12ba0bbfb741a31f62b58526cf73fc357b98ae09f6f05c6f61c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed756fb068d6e12ba0bbfb741a31f62b58526cf73fc357b98ae09f6f05c6f61c->enter($__internal_ed756fb068d6e12ba0bbfb741a31f62b58526cf73fc357b98ae09f6f05c6f61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_44cfedffd74de86682c4cf455493bbb5724fd9cdaa636722bd18ffb3e9bcc2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cfedffd74de86682c4cf455493bbb5724fd9cdaa636722bd18ffb3e9bcc2f3->enter($__internal_44cfedffd74de86682c4cf455493bbb5724fd9cdaa636722bd18ffb3e9bcc2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered  table-hover table-sm \">
                    <thead>
                    <th>Заголовок</th>
                    <th>Сообщение</th>
                    <th>Дата</th>
                    <th>От кого</th>
                    </thead>
                    <tbody>
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? $this->getContext($context, "mails")));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 16
            echo "                        <tr>
                            <th style=\"width:3%\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getTitle", array()));
            echo "</th>
                            <td style=\"width:20%\" >";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getMessage", array()));
            echo "</td>
                            <td style=\"width:75%\">";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mail"], "getDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</td>
                            <td style=\"width:5%\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getFrom", array()));
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_44cfedffd74de86682c4cf455493bbb5724fd9cdaa636722bd18ffb3e9bcc2f3->leave($__internal_44cfedffd74de86682c4cf455493bbb5724fd9cdaa636722bd18ffb3e9bcc2f3_prof);

        
        $__internal_ed756fb068d6e12ba0bbfb741a31f62b58526cf73fc357b98ae09f6f05c6f61c->leave($__internal_ed756fb068d6e12ba0bbfb741a31f62b58526cf73fc357b98ae09f6f05c6f61c_prof);

    }

    public function getTemplateName()
    {
        return ":default:vsya_pochta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  67 => 16,  63 => 15,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block content %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered  table-hover table-sm \">
                    <thead>
                    <th>Заголовок</th>
                    <th>Сообщение</th>
                    <th>Дата</th>
                    <th>От кого</th>
                    </thead>
                    <tbody>
                    {% for mail in mails %}
                        <tr>
                            <th style=\"width:3%\">{{ mail.getTitle|e }}</th>
                            <td style=\"width:20%\" >{{ mail.getMessage|e }}</td>
                            <td style=\"width:75%\">{{ mail.getDate|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
                            <td style=\"width:5%\">{{ mail.getFrom|e }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", ":default:vsya_pochta.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/vsya_pochta.html.twig");
    }
}
