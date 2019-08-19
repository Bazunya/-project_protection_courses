<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b185f90f3bf01b3d2e57a3eb18d740c2f70a578f21f97c30e901540053578551 extends Twig_Template
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
        $__internal_8a8b54382e1ff28437d23473e337fbccf7be8da40b0e17c3bc8fa0418fefdc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8b54382e1ff28437d23473e337fbccf7be8da40b0e17c3bc8fa0418fefdc85->enter($__internal_8a8b54382e1ff28437d23473e337fbccf7be8da40b0e17c3bc8fa0418fefdc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1d11458845f61825d5bae5130833e187395a4b1842cae785647ffd278e9a71c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d11458845f61825d5bae5130833e187395a4b1842cae785647ffd278e9a71c1->enter($__internal_1d11458845f61825d5bae5130833e187395a4b1842cae785647ffd278e9a71c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8a8b54382e1ff28437d23473e337fbccf7be8da40b0e17c3bc8fa0418fefdc85->leave($__internal_8a8b54382e1ff28437d23473e337fbccf7be8da40b0e17c3bc8fa0418fefdc85_prof);

        
        $__internal_1d11458845f61825d5bae5130833e187395a4b1842cae785647ffd278e9a71c1->leave($__internal_1d11458845f61825d5bae5130833e187395a4b1842cae785647ffd278e9a71c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
