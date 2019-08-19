<?php

/* :default:sent.html.twig */
class __TwigTemplate_ca9910d981f8fb24cc7f754bf272e64d7b81d8f555e38f89d288866691aedd57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:sent.html.twig", 1);
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
        $__internal_69d9e532fb520dd66ec38330776d7735200552aeb94d7c7c44fa1389d72a0939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d9e532fb520dd66ec38330776d7735200552aeb94d7c7c44fa1389d72a0939->enter($__internal_69d9e532fb520dd66ec38330776d7735200552aeb94d7c7c44fa1389d72a0939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:sent.html.twig"));

        $__internal_476c55e52b76f615418644f86deda0e7637c424fb0e756a849fcff225c761bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476c55e52b76f615418644f86deda0e7637c424fb0e756a849fcff225c761bce->enter($__internal_476c55e52b76f615418644f86deda0e7637c424fb0e756a849fcff225c761bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d9e532fb520dd66ec38330776d7735200552aeb94d7c7c44fa1389d72a0939->leave($__internal_69d9e532fb520dd66ec38330776d7735200552aeb94d7c7c44fa1389d72a0939_prof);

        
        $__internal_476c55e52b76f615418644f86deda0e7637c424fb0e756a849fcff225c761bce->leave($__internal_476c55e52b76f615418644f86deda0e7637c424fb0e756a849fcff225c761bce_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c62fd30c92cd9d27e9b6bc7a2eeec0c6cd6bea0706ca18ecb064f54db472b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c62fd30c92cd9d27e9b6bc7a2eeec0c6cd6bea0706ca18ecb064f54db472b46->enter($__internal_1c62fd30c92cd9d27e9b6bc7a2eeec0c6cd6bea0706ca18ecb064f54db472b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_64fd9ae9f8968c810a55d8cc6f86fefb159f56a643776c40abb31a1a2353310b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fd9ae9f8968c810a55d8cc6f86fefb159f56a643776c40abb31a1a2353310b->enter($__internal_64fd9ae9f8968c810a55d8cc6f86fefb159f56a643776c40abb31a1a2353310b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <th>Кому</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getTo", array()));
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
        
        $__internal_64fd9ae9f8968c810a55d8cc6f86fefb159f56a643776c40abb31a1a2353310b->leave($__internal_64fd9ae9f8968c810a55d8cc6f86fefb159f56a643776c40abb31a1a2353310b_prof);

        
        $__internal_1c62fd30c92cd9d27e9b6bc7a2eeec0c6cd6bea0706ca18ecb064f54db472b46->leave($__internal_1c62fd30c92cd9d27e9b6bc7a2eeec0c6cd6bea0706ca18ecb064f54db472b46_prof);

    }

    public function getTemplateName()
    {
        return ":default:sent.html.twig";
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
                        <th>Кому</th>
                    </thead>
                    <tbody>
                    {% for mail in mails %}
                        <tr>
                            <th style=\"width:3%\">{{ mail.getTitle|e }}</th>
                            <td style=\"width:20%\" >{{ mail.getMessage|e }}</td>
                            <td style=\"width:75%\">{{ mail.getDate|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
                            <td style=\"width:5%\">{{ mail.getTo|e }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", ":default:sent.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/sent.html.twig");
    }
}
