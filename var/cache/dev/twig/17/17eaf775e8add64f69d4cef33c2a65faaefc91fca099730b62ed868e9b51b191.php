<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_80dddae09f0770129a02ed62a459ad8f7a9dcadfd17058c5a8db51d77306bbe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("not_login.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "not_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_924624d1df9984e02e71765f78c1a6259d1daaa370d4142d1f97467292d9824c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924624d1df9984e02e71765f78c1a6259d1daaa370d4142d1f97467292d9824c->enter($__internal_924624d1df9984e02e71765f78c1a6259d1daaa370d4142d1f97467292d9824c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_38d4775fd3bd0662348d6822541f24bf54ff023b36f7702ec54cb2451ff44820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d4775fd3bd0662348d6822541f24bf54ff023b36f7702ec54cb2451ff44820->enter($__internal_38d4775fd3bd0662348d6822541f24bf54ff023b36f7702ec54cb2451ff44820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924624d1df9984e02e71765f78c1a6259d1daaa370d4142d1f97467292d9824c->leave($__internal_924624d1df9984e02e71765f78c1a6259d1daaa370d4142d1f97467292d9824c_prof);

        
        $__internal_38d4775fd3bd0662348d6822541f24bf54ff023b36f7702ec54cb2451ff44820->leave($__internal_38d4775fd3bd0662348d6822541f24bf54ff023b36f7702ec54cb2451ff44820_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_377408bcb7c0aaf1e43bd00320a170bb53ff5df3cb51faba2d8e26adbc1cfa07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377408bcb7c0aaf1e43bd00320a170bb53ff5df3cb51faba2d8e26adbc1cfa07->enter($__internal_377408bcb7c0aaf1e43bd00320a170bb53ff5df3cb51faba2d8e26adbc1cfa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e32c6fa44188c9ead51703e0ea94bcd642e27fca9c55b81222ae8f7f57536669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32c6fa44188c9ead51703e0ea94bcd642e27fca9c55b81222ae8f7f57536669->enter($__internal_e32c6fa44188c9ead51703e0ea94bcd642e27fca9c55b81222ae8f7f57536669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 3
        echo "
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "    </div>
";
        
        $__internal_e32c6fa44188c9ead51703e0ea94bcd642e27fca9c55b81222ae8f7f57536669->leave($__internal_e32c6fa44188c9ead51703e0ea94bcd642e27fca9c55b81222ae8f7f57536669_prof);

        
        $__internal_377408bcb7c0aaf1e43bd00320a170bb53ff5df3cb51faba2d8e26adbc1cfa07->leave($__internal_377408bcb7c0aaf1e43bd00320a170bb53ff5df3cb51faba2d8e26adbc1cfa07_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4476a35aa7fd667f34e74ab92a95f2161bf7fefff0a9bf671ac0118377db8497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4476a35aa7fd667f34e74ab92a95f2161bf7fefff0a9bf671ac0118377db8497->enter($__internal_4476a35aa7fd667f34e74ab92a95f2161bf7fefff0a9bf671ac0118377db8497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d37ebf177217d9e9caef60419510ecaa2fc8d4c31b2d8c1b16661b4613e85f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37ebf177217d9e9caef60419510ecaa2fc8d4c31b2d8c1b16661b4613e85f46->enter($__internal_d37ebf177217d9e9caef60419510ecaa2fc8d4c31b2d8c1b16661b4613e85f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_d37ebf177217d9e9caef60419510ecaa2fc8d4c31b2d8c1b16661b4613e85f46->leave($__internal_d37ebf177217d9e9caef60419510ecaa2fc8d4c31b2d8c1b16661b4613e85f46_prof);

        
        $__internal_4476a35aa7fd667f34e74ab92a95f2161bf7fefff0a9bf671ac0118377db8497->leave($__internal_4476a35aa7fd667f34e74ab92a95f2161bf7fefff0a9bf671ac0118377db8497_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 16,  105 => 15,  94 => 17,  92 => 15,  88 => 13,  85 => 12,  79 => 11,  70 => 8,  65 => 7,  60 => 6,  55 => 5,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'not_login.html.twig' %}
{% block page_content %}

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\symfonys\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
