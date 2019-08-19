<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e4c77e5e0acf7ed94253984010dbe3d91163caa8789acab9ba55f7fba2d2c0d6 extends Twig_Template
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
        $__internal_c235f330bf859fc18c7fb543c119b33683d6f908386b693036c32a6359a2bc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c235f330bf859fc18c7fb543c119b33683d6f908386b693036c32a6359a2bc80->enter($__internal_c235f330bf859fc18c7fb543c119b33683d6f908386b693036c32a6359a2bc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_f6190d69033b91bcde5f96c5dd4687eecc2c29743f9b024a3d724cde204cab6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6190d69033b91bcde5f96c5dd4687eecc2c29743f9b024a3d724cde204cab6b->enter($__internal_f6190d69033b91bcde5f96c5dd4687eecc2c29743f9b024a3d724cde204cab6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_c235f330bf859fc18c7fb543c119b33683d6f908386b693036c32a6359a2bc80->leave($__internal_c235f330bf859fc18c7fb543c119b33683d6f908386b693036c32a6359a2bc80_prof);

        
        $__internal_f6190d69033b91bcde5f96c5dd4687eecc2c29743f9b024a3d724cde204cab6b->leave($__internal_f6190d69033b91bcde5f96c5dd4687eecc2c29743f9b024a3d724cde204cab6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
