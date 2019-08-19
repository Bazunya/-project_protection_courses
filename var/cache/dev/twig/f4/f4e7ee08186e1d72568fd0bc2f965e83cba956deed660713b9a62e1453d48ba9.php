<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_30bb58281a81f0b79ede85b451a19d10dcba61e68199adb53fa3ee49d19e0c00 extends Twig_Template
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
        $__internal_8a3c8148ee73aa0ccf60153781a61f14d6f3a315ca3e40518da90092e3d8250b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3c8148ee73aa0ccf60153781a61f14d6f3a315ca3e40518da90092e3d8250b->enter($__internal_8a3c8148ee73aa0ccf60153781a61f14d6f3a315ca3e40518da90092e3d8250b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_3fa8ce00c595b0cfc6f0f444988f0f3bc23e222ea7e79afdd934a2a555b015be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa8ce00c595b0cfc6f0f444988f0f3bc23e222ea7e79afdd934a2a555b015be->enter($__internal_3fa8ce00c595b0cfc6f0f444988f0f3bc23e222ea7e79afdd934a2a555b015be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8a3c8148ee73aa0ccf60153781a61f14d6f3a315ca3e40518da90092e3d8250b->leave($__internal_8a3c8148ee73aa0ccf60153781a61f14d6f3a315ca3e40518da90092e3d8250b_prof);

        
        $__internal_3fa8ce00c595b0cfc6f0f444988f0f3bc23e222ea7e79afdd934a2a555b015be->leave($__internal_3fa8ce00c595b0cfc6f0f444988f0f3bc23e222ea7e79afdd934a2a555b015be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
