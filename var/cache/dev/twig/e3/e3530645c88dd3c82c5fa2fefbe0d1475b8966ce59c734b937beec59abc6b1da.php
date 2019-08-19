<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f3804c3af95333b946f1ce6531297ec36b0e2c7577629571b4947e415745a945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c181927afb1c03f1ec4f058aae6f252521e64a69c80865751efe0c85aeb9c780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c181927afb1c03f1ec4f058aae6f252521e64a69c80865751efe0c85aeb9c780->enter($__internal_c181927afb1c03f1ec4f058aae6f252521e64a69c80865751efe0c85aeb9c780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_9666e1897d1f01445301028173ee4047a05a6e0fcd587a97a338b5904478a655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9666e1897d1f01445301028173ee4047a05a6e0fcd587a97a338b5904478a655->enter($__internal_9666e1897d1f01445301028173ee4047a05a6e0fcd587a97a338b5904478a655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c181927afb1c03f1ec4f058aae6f252521e64a69c80865751efe0c85aeb9c780->leave($__internal_c181927afb1c03f1ec4f058aae6f252521e64a69c80865751efe0c85aeb9c780_prof);

        
        $__internal_9666e1897d1f01445301028173ee4047a05a6e0fcd587a97a338b5904478a655->leave($__internal_9666e1897d1f01445301028173ee4047a05a6e0fcd587a97a338b5904478a655_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
