<?php

/* ::not_login.html.twig */
class __TwigTemplate_20ec58b841952f0e6a3c92ab2c7b7bbfd85f2e0b9330a5ae5f6f4a8b78bff045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'h2' => array($this, 'block_h2'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fda71aa5563b3182f2ab6002b4d0e07a998579ee886a183a2131a9c3668d8c40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda71aa5563b3182f2ab6002b4d0e07a998579ee886a183a2131a9c3668d8c40->enter($__internal_fda71aa5563b3182f2ab6002b4d0e07a998579ee886a183a2131a9c3668d8c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::not_login.html.twig"));

        $__internal_ce1869055a5a52b682f056523c8d12dab7b79d8d2a58188866e2d1052beb7fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1869055a5a52b682f056523c8d12dab7b79d8d2a58188866e2d1052beb7fce->enter($__internal_ce1869055a5a52b682f056523c8d12dab7b79d8d2a58188866e2d1052beb7fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::not_login.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fda71aa5563b3182f2ab6002b4d0e07a998579ee886a183a2131a9c3668d8c40->leave($__internal_fda71aa5563b3182f2ab6002b4d0e07a998579ee886a183a2131a9c3668d8c40_prof);

        
        $__internal_ce1869055a5a52b682f056523c8d12dab7b79d8d2a58188866e2d1052beb7fce->leave($__internal_ce1869055a5a52b682f056523c8d12dab7b79d8d2a58188866e2d1052beb7fce_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1ed42a9e556e106fd44f2c77c85c4695898f8e654b1e622f1727da542fcc4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ed42a9e556e106fd44f2c77c85c4695898f8e654b1e622f1727da542fcc4a3->enter($__internal_d1ed42a9e556e106fd44f2c77c85c4695898f8e654b1e622f1727da542fcc4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a68d7d50e35edf75dcc838392922cf15a7dd246175bf940346e5df761c7df021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68d7d50e35edf75dcc838392922cf15a7dd246175bf940346e5df761c7df021->enter($__internal_a68d7d50e35edf75dcc838392922cf15a7dd246175bf940346e5df761c7df021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/regs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_a68d7d50e35edf75dcc838392922cf15a7dd246175bf940346e5df761c7df021->leave($__internal_a68d7d50e35edf75dcc838392922cf15a7dd246175bf940346e5df761c7df021_prof);

        
        $__internal_d1ed42a9e556e106fd44f2c77c85c4695898f8e654b1e622f1727da542fcc4a3->leave($__internal_d1ed42a9e556e106fd44f2c77c85c4695898f8e654b1e622f1727da542fcc4a3_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec6452a287b5f0e5a3fb54791d0fc663ed3be48d0d6ad5013835a977fcd22741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6452a287b5f0e5a3fb54791d0fc663ed3be48d0d6ad5013835a977fcd22741->enter($__internal_ec6452a287b5f0e5a3fb54791d0fc663ed3be48d0d6ad5013835a977fcd22741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32cf4ed70fdedce8c42616ce8e3bc05ab0fb5f2fc1499ce1566215300b423aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cf4ed70fdedce8c42616ce8e3bc05ab0fb5f2fc1499ce1566215300b423aa7->enter($__internal_32cf4ed70fdedce8c42616ce8e3bc05ab0fb5f2fc1499ce1566215300b423aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        $this->displayBlock('h2', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('page_content', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_32cf4ed70fdedce8c42616ce8e3bc05ab0fb5f2fc1499ce1566215300b423aa7->leave($__internal_32cf4ed70fdedce8c42616ce8e3bc05ab0fb5f2fc1499ce1566215300b423aa7_prof);

        
        $__internal_ec6452a287b5f0e5a3fb54791d0fc663ed3be48d0d6ad5013835a977fcd22741->leave($__internal_ec6452a287b5f0e5a3fb54791d0fc663ed3be48d0d6ad5013835a977fcd22741_prof);

    }

    // line 7
    public function block_h2($context, array $blocks = array())
    {
        $__internal_15b3cecea22ae1a14b2b57c8a447621d492096d0860b96349a60cfe455bbb699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b3cecea22ae1a14b2b57c8a447621d492096d0860b96349a60cfe455bbb699->enter($__internal_15b3cecea22ae1a14b2b57c8a447621d492096d0860b96349a60cfe455bbb699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        $__internal_c41acc989ed2c26b581a3fe441b43c590750d133ba6acbc76d1145ce889bb11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41acc989ed2c26b581a3fe441b43c590750d133ba6acbc76d1145ce889bb11a->enter($__internal_c41acc989ed2c26b581a3fe441b43c590750d133ba6acbc76d1145ce889bb11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        // line 8
        echo "    ";
        
        $__internal_c41acc989ed2c26b581a3fe441b43c590750d133ba6acbc76d1145ce889bb11a->leave($__internal_c41acc989ed2c26b581a3fe441b43c590750d133ba6acbc76d1145ce889bb11a_prof);

        
        $__internal_15b3cecea22ae1a14b2b57c8a447621d492096d0860b96349a60cfe455bbb699->leave($__internal_15b3cecea22ae1a14b2b57c8a447621d492096d0860b96349a60cfe455bbb699_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6d74b512102da751b90303f4a41108fb2f707a9bb3eb11a78f55fa5d5dce6f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d74b512102da751b90303f4a41108fb2f707a9bb3eb11a78f55fa5d5dce6f35->enter($__internal_6d74b512102da751b90303f4a41108fb2f707a9bb3eb11a78f55fa5d5dce6f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_c547293667de36808131b04c48356d265fc80a0b4037f9d94ef3a375f5d0fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c547293667de36808131b04c48356d265fc80a0b4037f9d94ef3a375f5d0fee1->enter($__internal_c547293667de36808131b04c48356d265fc80a0b4037f9d94ef3a375f5d0fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "    ";
        
        $__internal_c547293667de36808131b04c48356d265fc80a0b4037f9d94ef3a375f5d0fee1->leave($__internal_c547293667de36808131b04c48356d265fc80a0b4037f9d94ef3a375f5d0fee1_prof);

        
        $__internal_6d74b512102da751b90303f4a41108fb2f707a9bb3eb11a78f55fa5d5dce6f35->leave($__internal_6d74b512102da751b90303f4a41108fb2f707a9bb3eb11a78f55fa5d5dce6f35_prof);

    }

    public function getTemplateName()
    {
        return "::not_login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 10,  116 => 9,  106 => 8,  97 => 7,  86 => 11,  83 => 9,  80 => 7,  71 => 6,  59 => 4,  55 => 3,  50 => 2,  41 => 1,  31 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link href=\"{{ asset('/css/regs.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('/css/animate.css') }}\" rel=\"stylesheet\"/>
{% endblock %}
{% block body %}
\t{% block h2 %}
    {% endblock %}
    {% block page_content %}
    {% endblock %}

{% endblock %}
", "::not_login.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/not_login.html.twig");
    }
}
