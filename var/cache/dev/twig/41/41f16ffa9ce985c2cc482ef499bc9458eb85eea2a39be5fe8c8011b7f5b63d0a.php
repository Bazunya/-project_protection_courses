<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0f466e54338706954ab69bf281d2f631a0e488ad1a148a7d9da3b22aba1dfadf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97dd570b6fe98d3fd10857a9f209bb18813fdb6b22a95881539bb0b0f070bc7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97dd570b6fe98d3fd10857a9f209bb18813fdb6b22a95881539bb0b0f070bc7e->enter($__internal_97dd570b6fe98d3fd10857a9f209bb18813fdb6b22a95881539bb0b0f070bc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0dc6c5aa9f61f6290a2de2506231a60f78e90488ab2924b407b9270dd9a3fc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc6c5aa9f61f6290a2de2506231a60f78e90488ab2924b407b9270dd9a3fc07->enter($__internal_0dc6c5aa9f61f6290a2de2506231a60f78e90488ab2924b407b9270dd9a3fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97dd570b6fe98d3fd10857a9f209bb18813fdb6b22a95881539bb0b0f070bc7e->leave($__internal_97dd570b6fe98d3fd10857a9f209bb18813fdb6b22a95881539bb0b0f070bc7e_prof);

        
        $__internal_0dc6c5aa9f61f6290a2de2506231a60f78e90488ab2924b407b9270dd9a3fc07->leave($__internal_0dc6c5aa9f61f6290a2de2506231a60f78e90488ab2924b407b9270dd9a3fc07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffc07ce10f74e7e0d9deb4caabc7a58f4fbf0efa5f3a3236db3f7db81d7dbf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffc07ce10f74e7e0d9deb4caabc7a58f4fbf0efa5f3a3236db3f7db81d7dbf21->enter($__internal_ffc07ce10f74e7e0d9deb4caabc7a58f4fbf0efa5f3a3236db3f7db81d7dbf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9b4b44d5181d66b65ed42d0cc4a1292a3884d7a6e5a3b36fd40ffda4033abbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b4b44d5181d66b65ed42d0cc4a1292a3884d7a6e5a3b36fd40ffda4033abbe->enter($__internal_c9b4b44d5181d66b65ed42d0cc4a1292a3884d7a6e5a3b36fd40ffda4033abbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c9b4b44d5181d66b65ed42d0cc4a1292a3884d7a6e5a3b36fd40ffda4033abbe->leave($__internal_c9b4b44d5181d66b65ed42d0cc4a1292a3884d7a6e5a3b36fd40ffda4033abbe_prof);

        
        $__internal_ffc07ce10f74e7e0d9deb4caabc7a58f4fbf0efa5f3a3236db3f7db81d7dbf21->leave($__internal_ffc07ce10f74e7e0d9deb4caabc7a58f4fbf0efa5f3a3236db3f7db81d7dbf21_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f76f39388a6d9604c63b45cea62032d34e2c1c9ac2df143c8afb3154732763a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76f39388a6d9604c63b45cea62032d34e2c1c9ac2df143c8afb3154732763a5->enter($__internal_f76f39388a6d9604c63b45cea62032d34e2c1c9ac2df143c8afb3154732763a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1d07d7f1dbc0f27258430bde629a7d63d7209ddbfa3a2eedda933f66c5a11ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d07d7f1dbc0f27258430bde629a7d63d7209ddbfa3a2eedda933f66c5a11ec->enter($__internal_b1d07d7f1dbc0f27258430bde629a7d63d7209ddbfa3a2eedda933f66c5a11ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b1d07d7f1dbc0f27258430bde629a7d63d7209ddbfa3a2eedda933f66c5a11ec->leave($__internal_b1d07d7f1dbc0f27258430bde629a7d63d7209ddbfa3a2eedda933f66c5a11ec_prof);

        
        $__internal_f76f39388a6d9604c63b45cea62032d34e2c1c9ac2df143c8afb3154732763a5->leave($__internal_f76f39388a6d9604c63b45cea62032d34e2c1c9ac2df143c8afb3154732763a5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
