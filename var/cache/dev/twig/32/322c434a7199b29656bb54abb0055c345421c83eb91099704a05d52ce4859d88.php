<?php

/* default/korzina.html.twig */
class __TwigTemplate_feb097f41c8e5fa1f797adfeec3f7e08ae646de1ccd7265d237a5ec18abfde86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d10a98c7fa1fdb160cb766f7b1fb84322cbe010031d5de89ffa041925bd0bfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10a98c7fa1fdb160cb766f7b1fb84322cbe010031d5de89ffa041925bd0bfa3->enter($__internal_d10a98c7fa1fdb160cb766f7b1fb84322cbe010031d5de89ffa041925bd0bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/korzina.html.twig"));

        $__internal_28c99bb8a644239cf6c25c2886d71f8641d0470a723f426143d66c8ff2de7e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c99bb8a644239cf6c25c2886d71f8641d0470a723f426143d66c8ff2de7e50->enter($__internal_28c99bb8a644239cf6c25c2886d71f8641d0470a723f426143d66c8ff2de7e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/korzina.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d10a98c7fa1fdb160cb766f7b1fb84322cbe010031d5de89ffa041925bd0bfa3->leave($__internal_d10a98c7fa1fdb160cb766f7b1fb84322cbe010031d5de89ffa041925bd0bfa3_prof);

        
        $__internal_28c99bb8a644239cf6c25c2886d71f8641d0470a723f426143d66c8ff2de7e50->leave($__internal_28c99bb8a644239cf6c25c2886d71f8641d0470a723f426143d66c8ff2de7e50_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_0c6dc653bcbfc46d965a8d8f8f1e1b0e43cbcc113271696287a14749e725d245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6dc653bcbfc46d965a8d8f8f1e1b0e43cbcc113271696287a14749e725d245->enter($__internal_0c6dc653bcbfc46d965a8d8f8f1e1b0e43cbcc113271696287a14749e725d245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2fce80b50f176e88518b4d469723a448f09593f6d2dd699180f0b9e47c4b43e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fce80b50f176e88518b4d469723a448f09593f6d2dd699180f0b9e47c4b43e7->enter($__internal_2fce80b50f176e88518b4d469723a448f09593f6d2dd699180f0b9e47c4b43e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"content\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered  table-hover table-sm \">
                        <thead>
                        <th>Заголовок</th>
                        <th>Сообщение</th>
                        <th>Дата</th>
                        <th>Адрес</th>
                        <th>От кого</th>
                        </thead>
                        <tbody>
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mails"] ?? $this->getContext($context, "mails")));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 17
            echo "                            <tr>
                                <th style=\"width:3%\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getTitle", array()));
            echo "</th>
                                <td style=\"width:20%\" >";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getMessage", array()));
            echo "</td>
                                <td style=\"width:25%\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mail"], "getDate", array()), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</td>
                                <td style=\"width:15%\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mail"], "getFrom", array()), "getEmail", array()));
            echo "</td>
                                <td style=\"width:15%\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["mail"], "getFrom", array()));
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2fce80b50f176e88518b4d469723a448f09593f6d2dd699180f0b9e47c4b43e7->leave($__internal_2fce80b50f176e88518b4d469723a448f09593f6d2dd699180f0b9e47c4b43e7_prof);

        
        $__internal_0c6dc653bcbfc46d965a8d8f8f1e1b0e43cbcc113271696287a14749e725d245->leave($__internal_0c6dc653bcbfc46d965a8d8f8f1e1b0e43cbcc113271696287a14749e725d245_prof);

    }

    public function getTemplateName()
    {
        return "default/korzina.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  66 => 17,  62 => 16,  47 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
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
                        <th>Адрес</th>
                        <th>От кого</th>
                        </thead>
                        <tbody>
                        {% for mail in mails %}
                            <tr>
                                <th style=\"width:3%\">{{ mail.getTitle|e }}</th>
                                <td style=\"width:20%\" >{{ mail.getMessage|e }}</td>
                                <td style=\"width:25%\">{{ mail.getDate|date(\"F jS \\\\a\\\\t g:ia\") }}</td>
                                <td style=\"width:15%\">{{ mail.getFrom.getEmail|e }}</td>
                                <td style=\"width:15%\">{{ mail.getFrom|e }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "default/korzina.html.twig", "C:\\wamp64\\www\\symfonys\\app\\Resources\\views\\default\\korzina.html.twig");
    }
}
