<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_28975658d9ed60de2b6fd5ebb8789e9a8dc213f1d5cc93d80af900542c9b9393 extends Twig_Template
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
        $__internal_cd03a50e6884fc52b9ae5431c6bae8b1b7899eabff698d5cb2f3ec292cfb1107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd03a50e6884fc52b9ae5431c6bae8b1b7899eabff698d5cb2f3ec292cfb1107->enter($__internal_cd03a50e6884fc52b9ae5431c6bae8b1b7899eabff698d5cb2f3ec292cfb1107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0d5c4da03cebd8b33b9acee73a48eec1847d7b80d34c9c5cd414d948fa9a88d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5c4da03cebd8b33b9acee73a48eec1847d7b80d34c9c5cd414d948fa9a88d0->enter($__internal_0d5c4da03cebd8b33b9acee73a48eec1847d7b80d34c9c5cd414d948fa9a88d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cd03a50e6884fc52b9ae5431c6bae8b1b7899eabff698d5cb2f3ec292cfb1107->leave($__internal_cd03a50e6884fc52b9ae5431c6bae8b1b7899eabff698d5cb2f3ec292cfb1107_prof);

        
        $__internal_0d5c4da03cebd8b33b9acee73a48eec1847d7b80d34c9c5cd414d948fa9a88d0->leave($__internal_0d5c4da03cebd8b33b9acee73a48eec1847d7b80d34c9c5cd414d948fa9a88d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
