<?php

/* default/vsya_pochta.html.twig */
class __TwigTemplate_4c53ff62f58b71925972a07e30042d1a1d59f9dc2fb88bb48b7e7f7b6814d6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/vsya_pochta.html.twig", 1);
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
        $__internal_f048ff205dd434892ae8c8cf918ec439b14aa0d08e67c8acf08779704cceda11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f048ff205dd434892ae8c8cf918ec439b14aa0d08e67c8acf08779704cceda11->enter($__internal_f048ff205dd434892ae8c8cf918ec439b14aa0d08e67c8acf08779704cceda11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/vsya_pochta.html.twig"));

        $__internal_38fdc65f3e5379fee358764667d9701856606da8140cdcb6206f401f53d5d261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fdc65f3e5379fee358764667d9701856606da8140cdcb6206f401f53d5d261->enter($__internal_38fdc65f3e5379fee358764667d9701856606da8140cdcb6206f401f53d5d261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/vsya_pochta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f048ff205dd434892ae8c8cf918ec439b14aa0d08e67c8acf08779704cceda11->leave($__internal_f048ff205dd434892ae8c8cf918ec439b14aa0d08e67c8acf08779704cceda11_prof);

        
        $__internal_38fdc65f3e5379fee358764667d9701856606da8140cdcb6206f401f53d5d261->leave($__internal_38fdc65f3e5379fee358764667d9701856606da8140cdcb6206f401f53d5d261_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_58d740709157445d9f71fe94bc531ca3c9fc6ccc1319dab5cff831a86367c03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d740709157445d9f71fe94bc531ca3c9fc6ccc1319dab5cff831a86367c03a->enter($__internal_58d740709157445d9f71fe94bc531ca3c9fc6ccc1319dab5cff831a86367c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29f5dd14821e3b49be3a67e157bce705090168d9f033c432c56c4a08f9d98b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f5dd14821e3b49be3a67e157bce705090168d9f033c432c56c4a08f9d98b2c->enter($__internal_29f5dd14821e3b49be3a67e157bce705090168d9f033c432c56c4a08f9d98b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <th>Адрес</th>
                    <th>Файл</th>
                    <th>Управление</th>
                    </thead>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? $this->getContext($context, "mails")));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 19
            echo "                        <tr>
                            <th style=\"width:3%\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getTitle", array()));
            echo "</th>
                            <td style=\"width:20%\" >";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getMessage", array()));
            echo "</td>
                            <td style=\"width:75%\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mail"], "getDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</td>
                            <td style=\"width:5%\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getFrom", array()));
            echo "</td>
                            <td style=\"width:5%\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mail"], "getFrom", array()), "getEmail", array()));
            echo "</td>
                            <td style=\"width:5%\"><a target=\"_blank\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("download_file", array("filename" => twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getFile", array())))), "html", null, true);
            echo "\">Скачать</a></td>
                            <td style=\"width:5%\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mail_delete", array("id" => $this->getAttribute($context["mail"], "getId", array()))), "html", null, true);
            echo "\">Удалить</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_29f5dd14821e3b49be3a67e157bce705090168d9f033c432c56c4a08f9d98b2c->leave($__internal_29f5dd14821e3b49be3a67e157bce705090168d9f033c432c56c4a08f9d98b2c_prof);

        
        $__internal_58d740709157445d9f71fe94bc531ca3c9fc6ccc1319dab5cff831a86367c03a->leave($__internal_58d740709157445d9f71fe94bc531ca3c9fc6ccc1319dab5cff831a86367c03a_prof);

    }

    public function getTemplateName()
    {
        return "default/vsya_pochta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  70 => 19,  66 => 18,  49 => 3,  40 => 2,  11 => 1,);
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
                    <th>Адрес</th>
                    <th>Файл</th>
                    <th>Управление</th>
                    </thead>
                    <tbody>
                    {% for mail in mails %}
                        <tr>
                            <th style=\"width:3%\">{{ mail.getTitle|e }}</th>
                            <td style=\"width:20%\" >{{ mail.getMessage|e }}</td>
                            <td style=\"width:75%\">{{ mail.getDate|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
                            <td style=\"width:5%\">{{ mail.getFrom|e }}</td>
                            <td style=\"width:5%\">{{ mail.getFrom.getEmail|e }}</td>
                            <td style=\"width:5%\"><a target=\"_blank\" href=\"{{ url('download_file', {'filename': mail.getFile|e}) }}\">Скачать</a></td>
                            <td style=\"width:5%\"><a href=\"{{ url('mail_delete', {'id': mail.getId}) }}\">Удалить</a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "default/vsya_pochta.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\vsya_pochta.html.twig");
    }
}
