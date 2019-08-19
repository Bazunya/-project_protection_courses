<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_30936879706bd9139a631616b6c162d5bd67559c8dbe434ddf2ad988ef649f0f extends Twig_Template
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
        $__internal_a081b6785a90f53882123223c86e79d4fb0a5c37836ebe1b090c27612ef07440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a081b6785a90f53882123223c86e79d4fb0a5c37836ebe1b090c27612ef07440->enter($__internal_a081b6785a90f53882123223c86e79d4fb0a5c37836ebe1b090c27612ef07440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f78dfcaac9c8876826b8074f2bf8a5276cdf05116fe1f40ab50cfd6ae66b45ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78dfcaac9c8876826b8074f2bf8a5276cdf05116fe1f40ab50cfd6ae66b45ed->enter($__internal_f78dfcaac9c8876826b8074f2bf8a5276cdf05116fe1f40ab50cfd6ae66b45ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a081b6785a90f53882123223c86e79d4fb0a5c37836ebe1b090c27612ef07440->leave($__internal_a081b6785a90f53882123223c86e79d4fb0a5c37836ebe1b090c27612ef07440_prof);

        
        $__internal_f78dfcaac9c8876826b8074f2bf8a5276cdf05116fe1f40ab50cfd6ae66b45ed->leave($__internal_f78dfcaac9c8876826b8074f2bf8a5276cdf05116fe1f40ab50cfd6ae66b45ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
