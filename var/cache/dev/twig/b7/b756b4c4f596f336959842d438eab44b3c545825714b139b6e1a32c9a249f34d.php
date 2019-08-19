<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b4952b52b0a7e5308d0ec150a1c2d35a8150303e01eafad28a2bcd35c379b883 extends Twig_Template
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
        $__internal_e32e414cd9ce374f9269ec5dcf7b6e73c7a97ac215bddaf9682fbefd0e59315d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32e414cd9ce374f9269ec5dcf7b6e73c7a97ac215bddaf9682fbefd0e59315d->enter($__internal_e32e414cd9ce374f9269ec5dcf7b6e73c7a97ac215bddaf9682fbefd0e59315d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ad4fb8612272724d75e28236d2491b4a5ba409727f7513ef835216c2f5eb01cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4fb8612272724d75e28236d2491b4a5ba409727f7513ef835216c2f5eb01cf->enter($__internal_ad4fb8612272724d75e28236d2491b4a5ba409727f7513ef835216c2f5eb01cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e32e414cd9ce374f9269ec5dcf7b6e73c7a97ac215bddaf9682fbefd0e59315d->leave($__internal_e32e414cd9ce374f9269ec5dcf7b6e73c7a97ac215bddaf9682fbefd0e59315d_prof);

        
        $__internal_ad4fb8612272724d75e28236d2491b4a5ba409727f7513ef835216c2f5eb01cf->leave($__internal_ad4fb8612272724d75e28236d2491b4a5ba409727f7513ef835216c2f5eb01cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
