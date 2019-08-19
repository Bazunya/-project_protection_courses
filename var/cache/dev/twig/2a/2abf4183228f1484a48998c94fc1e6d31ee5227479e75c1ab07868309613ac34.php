<?php

/* :default:chernoviki.html.twig */
class __TwigTemplate_f0724d90d0c80bd0bde45db2624b4379940d9b1ea3185b21d2232c4804d40649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:chernoviki.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ad93d4ebb566b476e2766fbe4f1a77e19416241685bbdd7967269320247308b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad93d4ebb566b476e2766fbe4f1a77e19416241685bbdd7967269320247308b->enter($__internal_2ad93d4ebb566b476e2766fbe4f1a77e19416241685bbdd7967269320247308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:chernoviki.html.twig"));

        $__internal_6078ab05898a6c80a6b96e1325ce80575a0d629686ac9ca0bd0a486d6cf0effb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6078ab05898a6c80a6b96e1325ce80575a0d629686ac9ca0bd0a486d6cf0effb->enter($__internal_6078ab05898a6c80a6b96e1325ce80575a0d629686ac9ca0bd0a486d6cf0effb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:chernoviki.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad93d4ebb566b476e2766fbe4f1a77e19416241685bbdd7967269320247308b->leave($__internal_2ad93d4ebb566b476e2766fbe4f1a77e19416241685bbdd7967269320247308b_prof);

        
        $__internal_6078ab05898a6c80a6b96e1325ce80575a0d629686ac9ca0bd0a486d6cf0effb->leave($__internal_6078ab05898a6c80a6b96e1325ce80575a0d629686ac9ca0bd0a486d6cf0effb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_40df33f21ddeadc167064ab7ee3ada335bed5a3c8488061e151982da205b9da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40df33f21ddeadc167064ab7ee3ada335bed5a3c8488061e151982da205b9da0->enter($__internal_40df33f21ddeadc167064ab7ee3ada335bed5a3c8488061e151982da205b9da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_90fe2acb339cdf47aaa6b28175ff0723b29e686619f9ccb26792187bb63ea27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fe2acb339cdf47aaa6b28175ff0723b29e686619f9ccb26792187bb63ea27d->enter($__internal_90fe2acb339cdf47aaa6b28175ff0723b29e686619f9ccb26792187bb63ea27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            chernoviki
        </div>
    </div>
</div>
";
        
        $__internal_90fe2acb339cdf47aaa6b28175ff0723b29e686619f9ccb26792187bb63ea27d->leave($__internal_90fe2acb339cdf47aaa6b28175ff0723b29e686619f9ccb26792187bb63ea27d_prof);

        
        $__internal_40df33f21ddeadc167064ab7ee3ada335bed5a3c8488061e151982da205b9da0->leave($__internal_40df33f21ddeadc167064ab7ee3ada335bed5a3c8488061e151982da205b9da0_prof);

    }

    public function getTemplateName()
    {
        return ":default:chernoviki.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block content %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            chernoviki
        </div>
    </div>
</div>
{% endblock %}
", ":default:chernoviki.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/chernoviki.html.twig");
    }
}
