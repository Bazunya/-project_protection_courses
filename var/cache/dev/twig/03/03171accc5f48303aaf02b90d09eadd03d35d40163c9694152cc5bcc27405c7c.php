<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ebf4e9ba7a4b3407c463e915597e8f8a947dbb8881cc76d61c1b13ae1e1bfee2 extends Twig_Template
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
        $__internal_18784cd8202f5e6a736994833c6cd18802316268b7304c4578d090876de389d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18784cd8202f5e6a736994833c6cd18802316268b7304c4578d090876de389d6->enter($__internal_18784cd8202f5e6a736994833c6cd18802316268b7304c4578d090876de389d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_43b88cadf272b716ba52b39291046f811b3639ba99e2c31033c7d24e12e7ac22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b88cadf272b716ba52b39291046f811b3639ba99e2c31033c7d24e12e7ac22->enter($__internal_43b88cadf272b716ba52b39291046f811b3639ba99e2c31033c7d24e12e7ac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_18784cd8202f5e6a736994833c6cd18802316268b7304c4578d090876de389d6->leave($__internal_18784cd8202f5e6a736994833c6cd18802316268b7304c4578d090876de389d6_prof);

        
        $__internal_43b88cadf272b716ba52b39291046f811b3639ba99e2c31033c7d24e12e7ac22->leave($__internal_43b88cadf272b716ba52b39291046f811b3639ba99e2c31033c7d24e12e7ac22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
