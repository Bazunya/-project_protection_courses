<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_37b27188185e8c60a2301db6a86d11c7992e4b63d098bd3a8274fd05e72e5cfe extends Twig_Template
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
        $__internal_87d05ad3c7cd396027dfeeb2b30ac813c405ed9d5b07a62259ba926647f4ed18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d05ad3c7cd396027dfeeb2b30ac813c405ed9d5b07a62259ba926647f4ed18->enter($__internal_87d05ad3c7cd396027dfeeb2b30ac813c405ed9d5b07a62259ba926647f4ed18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8a71db823283470d3450e69eedb940907e2066def7dde01fe4d04e45c80e3f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a71db823283470d3450e69eedb940907e2066def7dde01fe4d04e45c80e3f4c->enter($__internal_8a71db823283470d3450e69eedb940907e2066def7dde01fe4d04e45c80e3f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_87d05ad3c7cd396027dfeeb2b30ac813c405ed9d5b07a62259ba926647f4ed18->leave($__internal_87d05ad3c7cd396027dfeeb2b30ac813c405ed9d5b07a62259ba926647f4ed18_prof);

        
        $__internal_8a71db823283470d3450e69eedb940907e2066def7dde01fe4d04e45c80e3f4c->leave($__internal_8a71db823283470d3450e69eedb940907e2066def7dde01fe4d04e45c80e3f4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
