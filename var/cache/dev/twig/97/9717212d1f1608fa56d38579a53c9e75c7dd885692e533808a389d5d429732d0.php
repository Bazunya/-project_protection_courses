<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_948b165730b43a57be0b772b934f6cf255de8dc44fc6704667dcad9dad93c8bd extends Twig_Template
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
        $__internal_13a5da5ce4108f89ec7a0cc34803a681e813d86a1bac49b8fb98ab22600ec58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a5da5ce4108f89ec7a0cc34803a681e813d86a1bac49b8fb98ab22600ec58b->enter($__internal_13a5da5ce4108f89ec7a0cc34803a681e813d86a1bac49b8fb98ab22600ec58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_f9e301bfc1b3a4c3f47cf31445f53eb7ec93fecd31f122a0e39c3cb067067152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e301bfc1b3a4c3f47cf31445f53eb7ec93fecd31f122a0e39c3cb067067152->enter($__internal_f9e301bfc1b3a4c3f47cf31445f53eb7ec93fecd31f122a0e39c3cb067067152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_13a5da5ce4108f89ec7a0cc34803a681e813d86a1bac49b8fb98ab22600ec58b->leave($__internal_13a5da5ce4108f89ec7a0cc34803a681e813d86a1bac49b8fb98ab22600ec58b_prof);

        
        $__internal_f9e301bfc1b3a4c3f47cf31445f53eb7ec93fecd31f122a0e39c3cb067067152->leave($__internal_f9e301bfc1b3a4c3f47cf31445f53eb7ec93fecd31f122a0e39c3cb067067152_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
