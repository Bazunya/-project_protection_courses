<?php

/* :default:compose.html.twig */
class __TwigTemplate_06b20f5f919d2cd5098fa529a422cfaf6ae44ec6dd7dfb3214ef334882c0afb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":default:compose.html.twig", 1);
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
        $__internal_e4647bd2ba34e8d5dc6f40f2110a8272cbea7a1ff72a0c6ef7d03220eca53dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4647bd2ba34e8d5dc6f40f2110a8272cbea7a1ff72a0c6ef7d03220eca53dcf->enter($__internal_e4647bd2ba34e8d5dc6f40f2110a8272cbea7a1ff72a0c6ef7d03220eca53dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:compose.html.twig"));

        $__internal_7f1811b9f7fcda400719c43f5bf23e97d95034010841b86f467e00b10c7b014e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1811b9f7fcda400719c43f5bf23e97d95034010841b86f467e00b10c7b014e->enter($__internal_7f1811b9f7fcda400719c43f5bf23e97d95034010841b86f467e00b10c7b014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:compose.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4647bd2ba34e8d5dc6f40f2110a8272cbea7a1ff72a0c6ef7d03220eca53dcf->leave($__internal_e4647bd2ba34e8d5dc6f40f2110a8272cbea7a1ff72a0c6ef7d03220eca53dcf_prof);

        
        $__internal_7f1811b9f7fcda400719c43f5bf23e97d95034010841b86f467e00b10c7b014e->leave($__internal_7f1811b9f7fcda400719c43f5bf23e97d95034010841b86f467e00b10c7b014e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_19d685f570f3b2c5175943b705c80aa0124ff0b864f0327cffe8fec4535c4850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d685f570f3b2c5175943b705c80aa0124ff0b864f0327cffe8fec4535c4850->enter($__internal_19d685f570f3b2c5175943b705c80aa0124ff0b864f0327cffe8fec4535c4850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ca0907b21097ad3e73c0076b579a1378055004e19f22d1070966b31fca05714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca0907b21097ad3e73c0076b579a1378055004e19f22d1070966b31fca05714->enter($__internal_3ca0907b21097ad3e73c0076b579a1378055004e19f22d1070966b31fca05714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"content\">
                ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3ca0907b21097ad3e73c0076b579a1378055004e19f22d1070966b31fca05714->leave($__internal_3ca0907b21097ad3e73c0076b579a1378055004e19f22d1070966b31fca05714_prof);

        
        $__internal_19d685f570f3b2c5175943b705c80aa0124ff0b864f0327cffe8fec4535c4850->leave($__internal_19d685f570f3b2c5175943b705c80aa0124ff0b864f0327cffe8fec4535c4850_prof);

    }

    public function getTemplateName()
    {
        return ":default:compose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  58 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", ":default:compose.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/compose.html.twig");
    }
}
