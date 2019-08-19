<?php

/* default/chernoviki.html.twig */
class __TwigTemplate_cf3ddc4899313d2b9651b8c2edaadc7f228a0cc7bb22c55c5f307c35e2982555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/chernoviki.html.twig", 1);
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
        $__internal_0eab363b5ae26d407f2c01cf6870237a051747974b3df885613be7114ddb9265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eab363b5ae26d407f2c01cf6870237a051747974b3df885613be7114ddb9265->enter($__internal_0eab363b5ae26d407f2c01cf6870237a051747974b3df885613be7114ddb9265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/chernoviki.html.twig"));

        $__internal_d4fd75759bab963567f1389b8be0f6b4990caa194267334c4177be86cc5cb197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fd75759bab963567f1389b8be0f6b4990caa194267334c4177be86cc5cb197->enter($__internal_d4fd75759bab963567f1389b8be0f6b4990caa194267334c4177be86cc5cb197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/chernoviki.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eab363b5ae26d407f2c01cf6870237a051747974b3df885613be7114ddb9265->leave($__internal_0eab363b5ae26d407f2c01cf6870237a051747974b3df885613be7114ddb9265_prof);

        
        $__internal_d4fd75759bab963567f1389b8be0f6b4990caa194267334c4177be86cc5cb197->leave($__internal_d4fd75759bab963567f1389b8be0f6b4990caa194267334c4177be86cc5cb197_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_e54a79bd72eba0d2a56fa5f1e35fbeae218b50383b0adb9c661d8716fa27d7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54a79bd72eba0d2a56fa5f1e35fbeae218b50383b0adb9c661d8716fa27d7c7->enter($__internal_e54a79bd72eba0d2a56fa5f1e35fbeae218b50383b0adb9c661d8716fa27d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_02e9909ed682ca95554783e684ad824dc1307e8c63dca7cee4a54f75dd8b6181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e9909ed682ca95554783e684ad824dc1307e8c63dca7cee4a54f75dd8b6181->enter($__internal_02e9909ed682ca95554783e684ad824dc1307e8c63dca7cee4a54f75dd8b6181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            chernoviki
        </div>
    </div>
</div>
";
        
        $__internal_02e9909ed682ca95554783e684ad824dc1307e8c63dca7cee4a54f75dd8b6181->leave($__internal_02e9909ed682ca95554783e684ad824dc1307e8c63dca7cee4a54f75dd8b6181_prof);

        
        $__internal_e54a79bd72eba0d2a56fa5f1e35fbeae218b50383b0adb9c661d8716fa27d7c7->leave($__internal_e54a79bd72eba0d2a56fa5f1e35fbeae218b50383b0adb9c661d8716fa27d7c7_prof);

    }

    public function getTemplateName()
    {
        return "default/chernoviki.html.twig";
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
", "default/chernoviki.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\chernoviki.html.twig");
    }
}
