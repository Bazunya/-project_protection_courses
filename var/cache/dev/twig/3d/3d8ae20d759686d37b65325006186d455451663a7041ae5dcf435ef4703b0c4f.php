<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c5da39dec8672b4c36bcdfee422be453e914e1d1efc4cedc83e2612d64989bb0 extends Twig_Template
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
        $__internal_6fcbe1ac6d4070ca04d966914ff93e7a2c5006196014535a2d6f5b68bd9ca9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcbe1ac6d4070ca04d966914ff93e7a2c5006196014535a2d6f5b68bd9ca9fa->enter($__internal_6fcbe1ac6d4070ca04d966914ff93e7a2c5006196014535a2d6f5b68bd9ca9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_45b3c8aa241fe1de26b313adaaf941e2c3792d16a25a3c3ba69202c131d5b40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b3c8aa241fe1de26b313adaaf941e2c3792d16a25a3c3ba69202c131d5b40b->enter($__internal_45b3c8aa241fe1de26b313adaaf941e2c3792d16a25a3c3ba69202c131d5b40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6fcbe1ac6d4070ca04d966914ff93e7a2c5006196014535a2d6f5b68bd9ca9fa->leave($__internal_6fcbe1ac6d4070ca04d966914ff93e7a2c5006196014535a2d6f5b68bd9ca9fa_prof);

        
        $__internal_45b3c8aa241fe1de26b313adaaf941e2c3792d16a25a3c3ba69202c131d5b40b->leave($__internal_45b3c8aa241fe1de26b313adaaf941e2c3792d16a25a3c3ba69202c131d5b40b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
