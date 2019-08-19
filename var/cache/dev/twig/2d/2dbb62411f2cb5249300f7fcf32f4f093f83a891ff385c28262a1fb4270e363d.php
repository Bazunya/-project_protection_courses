<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a1aab37af6de0bf5c121302fb4ce9ceaf1646df81cb1f5df54a11dbbd3ecc7ef extends Twig_Template
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
        $__internal_6cffb380fbd218cb273fe9abfe92329e28bb40346296fa1990728102b65f7ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cffb380fbd218cb273fe9abfe92329e28bb40346296fa1990728102b65f7ddc->enter($__internal_6cffb380fbd218cb273fe9abfe92329e28bb40346296fa1990728102b65f7ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7efbca78814e8d18dbad5a7641274355c3dbe0ca1e3f7bcad4c1a345864bb3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efbca78814e8d18dbad5a7641274355c3dbe0ca1e3f7bcad4c1a345864bb3a9->enter($__internal_7efbca78814e8d18dbad5a7641274355c3dbe0ca1e3f7bcad4c1a345864bb3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6cffb380fbd218cb273fe9abfe92329e28bb40346296fa1990728102b65f7ddc->leave($__internal_6cffb380fbd218cb273fe9abfe92329e28bb40346296fa1990728102b65f7ddc_prof);

        
        $__internal_7efbca78814e8d18dbad5a7641274355c3dbe0ca1e3f7bcad4c1a345864bb3a9->leave($__internal_7efbca78814e8d18dbad5a7641274355c3dbe0ca1e3f7bcad4c1a345864bb3a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
