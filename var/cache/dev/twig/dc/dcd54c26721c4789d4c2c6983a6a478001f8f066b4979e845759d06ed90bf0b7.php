<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b55015960af9bae8f65726f7db17adfeb6c765f46bc23b25d370c1a191912088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("not_login.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_9f8a15c377003e0fb45f9d37a44441a3683fc968dae51a0531728d2a0c7302a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8a15c377003e0fb45f9d37a44441a3683fc968dae51a0531728d2a0c7302a5->enter($__internal_9f8a15c377003e0fb45f9d37a44441a3683fc968dae51a0531728d2a0c7302a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_5952280d26ce7737cc81cd85fed0fc35a83002c71ebf21a5531d5aca1af9e014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5952280d26ce7737cc81cd85fed0fc35a83002c71ebf21a5531d5aca1af9e014->enter($__internal_5952280d26ce7737cc81cd85fed0fc35a83002c71ebf21a5531d5aca1af9e014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f8a15c377003e0fb45f9d37a44441a3683fc968dae51a0531728d2a0c7302a5->leave($__internal_9f8a15c377003e0fb45f9d37a44441a3683fc968dae51a0531728d2a0c7302a5_prof);

        
        $__internal_5952280d26ce7737cc81cd85fed0fc35a83002c71ebf21a5531d5aca1af9e014->leave($__internal_5952280d26ce7737cc81cd85fed0fc35a83002c71ebf21a5531d5aca1af9e014_prof);

    }

    // line 2
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dff60bb6f3105f1eede14668e0deb693927e3e87c5e4746edcded9d35004e5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff60bb6f3105f1eede14668e0deb693927e3e87c5e4746edcded9d35004e5a5->enter($__internal_dff60bb6f3105f1eede14668e0deb693927e3e87c5e4746edcded9d35004e5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_62d739a472bff6e2bb4c00a3701ba6b02aead3a6d95ad2ef869696a0735ba413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d739a472bff6e2bb4c00a3701ba6b02aead3a6d95ad2ef869696a0735ba413->enter($__internal_62d739a472bff6e2bb4c00a3701ba6b02aead3a6d95ad2ef869696a0735ba413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_62d739a472bff6e2bb4c00a3701ba6b02aead3a6d95ad2ef869696a0735ba413->leave($__internal_62d739a472bff6e2bb4c00a3701ba6b02aead3a6d95ad2ef869696a0735ba413_prof);

        
        $__internal_dff60bb6f3105f1eede14668e0deb693927e3e87c5e4746edcded9d35004e5a5->leave($__internal_dff60bb6f3105f1eede14668e0deb693927e3e87c5e4746edcded9d35004e5a5_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39e03bc53fcad64b089c88f87f77f164b1e42693305881158ecf22dd3a3a2c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e03bc53fcad64b089c88f87f77f164b1e42693305881158ecf22dd3a3a2c44->enter($__internal_39e03bc53fcad64b089c88f87f77f164b1e42693305881158ecf22dd3a3a2c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4edbb23d51ef3e12d84cc61cf6b696781f0ce5a8e020cda8a8edd61bf483b6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edbb23d51ef3e12d84cc61cf6b696781f0ce5a8e020cda8a8edd61bf483b6bf->enter($__internal_4edbb23d51ef3e12d84cc61cf6b696781f0ce5a8e020cda8a8edd61bf483b6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_4edbb23d51ef3e12d84cc61cf6b696781f0ce5a8e020cda8a8edd61bf483b6bf->leave($__internal_4edbb23d51ef3e12d84cc61cf6b696781f0ce5a8e020cda8a8edd61bf483b6bf_prof);

        
        $__internal_39e03bc53fcad64b089c88f87f77f164b1e42693305881158ecf22dd3a3a2c44->leave($__internal_39e03bc53fcad64b089c88f87f77f164b1e42693305881158ecf22dd3a3a2c44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
