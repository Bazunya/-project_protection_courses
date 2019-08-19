<?php

/* default/sent.html.twig */
class __TwigTemplate_6659d0cf4f4e8fcca7459f76497b69fc0592b67d23ca4274aecf0c7e6f21bff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/sent.html.twig", 1);
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
        $__internal_942a7a67ad11efe4c69cf0464ae4dd38a811b91ea6d99d3a35004a0d2bee5d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942a7a67ad11efe4c69cf0464ae4dd38a811b91ea6d99d3a35004a0d2bee5d21->enter($__internal_942a7a67ad11efe4c69cf0464ae4dd38a811b91ea6d99d3a35004a0d2bee5d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sent.html.twig"));

        $__internal_f5a2e061fa09dfe820571e979ad481a368f0f43d72d3bc31ad5f93c033b44e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a2e061fa09dfe820571e979ad481a368f0f43d72d3bc31ad5f93c033b44e4f->enter($__internal_f5a2e061fa09dfe820571e979ad481a368f0f43d72d3bc31ad5f93c033b44e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942a7a67ad11efe4c69cf0464ae4dd38a811b91ea6d99d3a35004a0d2bee5d21->leave($__internal_942a7a67ad11efe4c69cf0464ae4dd38a811b91ea6d99d3a35004a0d2bee5d21_prof);

        
        $__internal_f5a2e061fa09dfe820571e979ad481a368f0f43d72d3bc31ad5f93c033b44e4f->leave($__internal_f5a2e061fa09dfe820571e979ad481a368f0f43d72d3bc31ad5f93c033b44e4f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_40fb8c3531597f4a8687c9ea410823669ac30f2fefd3206c07fe6a94b20257f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40fb8c3531597f4a8687c9ea410823669ac30f2fefd3206c07fe6a94b20257f2->enter($__internal_40fb8c3531597f4a8687c9ea410823669ac30f2fefd3206c07fe6a94b20257f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_39aa1f0972e657f1e967871834c5629dfff2f3c0e5a6ea68b3aece7a77a11ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39aa1f0972e657f1e967871834c5629dfff2f3c0e5a6ea68b3aece7a77a11ebb->enter($__internal_39aa1f0972e657f1e967871834c5629dfff2f3c0e5a6ea68b3aece7a77a11ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <th>Файл</th>
                        <th>Адрес</th>
                    </thead>
                    <tbody>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? $this->getContext($context, "mails")));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 18
            echo "                        <tr>
                            <th style=\"width:3%\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getTitle", array()));
            echo "</th>
                            <td style=\"width:20%\" >";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getMessage", array()));
            echo "</td>
                            <td style=\"width:75%\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mail"], "getDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</td>
                            <td style=\"width:5%\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getTo", array()));
            echo "</td>
                            <td style=\"width:5%\"><a target=\"_blank\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download_file", array("filename" => twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getFile", array())))), "html", null, true);
            echo "\">Скачать</a></td>
                            <td style=\"width:5%\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mail"], "getTo", array()), "getEmail", array()));
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_39aa1f0972e657f1e967871834c5629dfff2f3c0e5a6ea68b3aece7a77a11ebb->leave($__internal_39aa1f0972e657f1e967871834c5629dfff2f3c0e5a6ea68b3aece7a77a11ebb_prof);

        
        $__internal_40fb8c3531597f4a8687c9ea410823669ac30f2fefd3206c07fe6a94b20257f2->leave($__internal_40fb8c3531597f4a8687c9ea410823669ac30f2fefd3206c07fe6a94b20257f2_prof);

    }

    public function getTemplateName()
    {
        return "default/sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  69 => 18,  65 => 17,  49 => 3,  40 => 2,  11 => 1,);
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
                        <th>Файл</th>
                        <th>Адрес</th>
                    </thead>
                    <tbody>
                    {% for mail in mails %}
                        <tr>
                            <th style=\"width:3%\">{{ mail.getTitle|e }}</th>
                            <td style=\"width:20%\" >{{ mail.getMessage|e }}</td>
                            <td style=\"width:75%\">{{ mail.getDate|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
                            <td style=\"width:5%\">{{ mail.getTo|e }}</td>
                            <td style=\"width:5%\"><a target=\"_blank\" href=\"{{ url('download_file', {'filename': mail.getFile|e}) }}\">Скачать</a></td>
                            <td style=\"width:5%\">{{ mail.getTo.getEmail|e }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "default/sent.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\sent.html.twig");
    }
}
