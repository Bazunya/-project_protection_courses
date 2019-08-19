<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5db3997e6e1463468af557752d28b2c93243632cce9f6833f5998826be66157d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12a4d738f541aeac9ba18d8a8ed17b51d0ac14716c022e3d9ffa2d0adf5a7631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a4d738f541aeac9ba18d8a8ed17b51d0ac14716c022e3d9ffa2d0adf5a7631->enter($__internal_12a4d738f541aeac9ba18d8a8ed17b51d0ac14716c022e3d9ffa2d0adf5a7631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4f3580bd48ca115bd9eb7571ce17e4e496eca97041f1daa965f7ca9b4bcccf54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3580bd48ca115bd9eb7571ce17e4e496eca97041f1daa965f7ca9b4bcccf54->enter($__internal_4f3580bd48ca115bd9eb7571ce17e4e496eca97041f1daa965f7ca9b4bcccf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a4d738f541aeac9ba18d8a8ed17b51d0ac14716c022e3d9ffa2d0adf5a7631->leave($__internal_12a4d738f541aeac9ba18d8a8ed17b51d0ac14716c022e3d9ffa2d0adf5a7631_prof);

        
        $__internal_4f3580bd48ca115bd9eb7571ce17e4e496eca97041f1daa965f7ca9b4bcccf54->leave($__internal_4f3580bd48ca115bd9eb7571ce17e4e496eca97041f1daa965f7ca9b4bcccf54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d07cce84b71f751633475ba0a87a7101dd83c9ab2ad1b537433e41c1a61c6552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07cce84b71f751633475ba0a87a7101dd83c9ab2ad1b537433e41c1a61c6552->enter($__internal_d07cce84b71f751633475ba0a87a7101dd83c9ab2ad1b537433e41c1a61c6552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80b38a7ffd4c01a9742a304b31800b6e99a2b10542e101d761d1bea265879fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b38a7ffd4c01a9742a304b31800b6e99a2b10542e101d761d1bea265879fac->enter($__internal_80b38a7ffd4c01a9742a304b31800b6e99a2b10542e101d761d1bea265879fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_80b38a7ffd4c01a9742a304b31800b6e99a2b10542e101d761d1bea265879fac->leave($__internal_80b38a7ffd4c01a9742a304b31800b6e99a2b10542e101d761d1bea265879fac_prof);

        
        $__internal_d07cce84b71f751633475ba0a87a7101dd83c9ab2ad1b537433e41c1a61c6552->leave($__internal_d07cce84b71f751633475ba0a87a7101dd83c9ab2ad1b537433e41c1a61c6552_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3674928ed130b58ffa6fac59e8d2e38274592c804f0d1777a50918a71e702227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3674928ed130b58ffa6fac59e8d2e38274592c804f0d1777a50918a71e702227->enter($__internal_3674928ed130b58ffa6fac59e8d2e38274592c804f0d1777a50918a71e702227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39d832b79971f236e377ad3b324e47bf62b81ddb987e214e6812dba5ac93c283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d832b79971f236e377ad3b324e47bf62b81ddb987e214e6812dba5ac93c283->enter($__internal_39d832b79971f236e377ad3b324e47bf62b81ddb987e214e6812dba5ac93c283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_39d832b79971f236e377ad3b324e47bf62b81ddb987e214e6812dba5ac93c283->leave($__internal_39d832b79971f236e377ad3b324e47bf62b81ddb987e214e6812dba5ac93c283_prof);

        
        $__internal_3674928ed130b58ffa6fac59e8d2e38274592c804f0d1777a50918a71e702227->leave($__internal_3674928ed130b58ffa6fac59e8d2e38274592c804f0d1777a50918a71e702227_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
