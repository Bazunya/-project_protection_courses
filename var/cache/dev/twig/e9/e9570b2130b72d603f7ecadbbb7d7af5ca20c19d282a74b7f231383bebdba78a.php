<?php

/* default/compose.html.twig */
class __TwigTemplate_a0cf410810da109bf98131436ae952c3b00f2dc90c92724771a647ab2fae82f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/compose.html.twig", 1);
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
        $__internal_e2e1820024742b0fc5f79c3482fcf00e683874373b5ab3c300f9cd24395385dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e1820024742b0fc5f79c3482fcf00e683874373b5ab3c300f9cd24395385dc->enter($__internal_e2e1820024742b0fc5f79c3482fcf00e683874373b5ab3c300f9cd24395385dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/compose.html.twig"));

        $__internal_217122ef8ca99e3f43de4884d4b9959fe0c0986fd3a20fbfc63d85537671500b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217122ef8ca99e3f43de4884d4b9959fe0c0986fd3a20fbfc63d85537671500b->enter($__internal_217122ef8ca99e3f43de4884d4b9959fe0c0986fd3a20fbfc63d85537671500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/compose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e1820024742b0fc5f79c3482fcf00e683874373b5ab3c300f9cd24395385dc->leave($__internal_e2e1820024742b0fc5f79c3482fcf00e683874373b5ab3c300f9cd24395385dc_prof);

        
        $__internal_217122ef8ca99e3f43de4884d4b9959fe0c0986fd3a20fbfc63d85537671500b->leave($__internal_217122ef8ca99e3f43de4884d4b9959fe0c0986fd3a20fbfc63d85537671500b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b15800dfe2ae7c849ecb7c6913844d0c8b64aa9fd75adecd39602d3fb2c797fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15800dfe2ae7c849ecb7c6913844d0c8b64aa9fd75adecd39602d3fb2c797fb->enter($__internal_b15800dfe2ae7c849ecb7c6913844d0c8b64aa9fd75adecd39602d3fb2c797fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_84e1cdaa3f31044c5e373901d7df363e1f0c3d3c08f4a21cb320780e58daa353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e1cdaa3f31044c5e373901d7df363e1f0c3d3c08f4a21cb320780e58daa353->enter($__internal_84e1cdaa3f31044c5e373901d7df363e1f0c3d3c08f4a21cb320780e58daa353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"content\">
                <div id=\"compose-mail\">
                    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_84e1cdaa3f31044c5e373901d7df363e1f0c3d3c08f4a21cb320780e58daa353->leave($__internal_84e1cdaa3f31044c5e373901d7df363e1f0c3d3c08f4a21cb320780e58daa353_prof);

        
        $__internal_b15800dfe2ae7c849ecb7c6913844d0c8b64aa9fd75adecd39602d3fb2c797fb->leave($__internal_b15800dfe2ae7c849ecb7c6913844d0c8b64aa9fd75adecd39602d3fb2c797fb_prof);

    }

    public function getTemplateName()
    {
        return "default/compose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
                <div id=\"compose-mail\">
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "default/compose.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\compose.html.twig");
    }
}
