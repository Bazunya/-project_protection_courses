<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f16e506c4a531b1f823be17e6d9e6b4bf8932d15ab5804c5113056edbd5b0399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'h2' => array($this, 'block_h2'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ce3321bbb887b782a9ada26c1d95f9019299b8e1282ab3330bcb3b1f14752fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce3321bbb887b782a9ada26c1d95f9019299b8e1282ab3330bcb3b1f14752fc->enter($__internal_1ce3321bbb887b782a9ada26c1d95f9019299b8e1282ab3330bcb3b1f14752fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_c07a4cab608ca3b19a9e20875e1bc1c62376607ae4dbf23c06f98d97d77ddd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07a4cab608ca3b19a9e20875e1bc1c62376607ae4dbf23c06f98d97d77ddd1e->enter($__internal_c07a4cab608ca3b19a9e20875e1bc1c62376607ae4dbf23c06f98d97d77ddd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce3321bbb887b782a9ada26c1d95f9019299b8e1282ab3330bcb3b1f14752fc->leave($__internal_1ce3321bbb887b782a9ada26c1d95f9019299b8e1282ab3330bcb3b1f14752fc_prof);

        
        $__internal_c07a4cab608ca3b19a9e20875e1bc1c62376607ae4dbf23c06f98d97d77ddd1e->leave($__internal_c07a4cab608ca3b19a9e20875e1bc1c62376607ae4dbf23c06f98d97d77ddd1e_prof);

    }

    // line 2
    public function block_h2($context, array $blocks = array())
    {
        $__internal_eaf3708d86ce7ce3c33d83f6c27a678eba1fdc1fb87c72acbe36b7467253b195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf3708d86ce7ce3c33d83f6c27a678eba1fdc1fb87c72acbe36b7467253b195->enter($__internal_eaf3708d86ce7ce3c33d83f6c27a678eba1fdc1fb87c72acbe36b7467253b195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        $__internal_1b0f735fe60af5539fd6c0087d8a14b1afe3e8be6f7f90c0cc95c2af0b7ff1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0f735fe60af5539fd6c0087d8a14b1afe3e8be6f7f90c0cc95c2af0b7ff1ce->enter($__internal_1b0f735fe60af5539fd6c0087d8a14b1afe3e8be6f7f90c0cc95c2af0b7ff1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        // line 3
        echo "<h2 id=\"registr\">Войти</h2>
";
        
        $__internal_1b0f735fe60af5539fd6c0087d8a14b1afe3e8be6f7f90c0cc95c2af0b7ff1ce->leave($__internal_1b0f735fe60af5539fd6c0087d8a14b1afe3e8be6f7f90c0cc95c2af0b7ff1ce_prof);

        
        $__internal_eaf3708d86ce7ce3c33d83f6c27a678eba1fdc1fb87c72acbe36b7467253b195->leave($__internal_eaf3708d86ce7ce3c33d83f6c27a678eba1fdc1fb87c72acbe36b7467253b195_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b54b9e685c340b6d001431e498f963eb6ec3a36006e7b96608271a648dc2be6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54b9e685c340b6d001431e498f963eb6ec3a36006e7b96608271a648dc2be6e->enter($__internal_b54b9e685c340b6d001431e498f963eb6ec3a36006e7b96608271a648dc2be6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f29da6e51b4e5a26ebeab154f1a248ce1f795fa05e3bed9cd9e02ddcf6d7a1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29da6e51b4e5a26ebeab154f1a248ce1f795fa05e3bed9cd9e02ddcf6d7a1fc->enter($__internal_f29da6e51b4e5a26ebeab154f1a248ce1f795fa05e3bed9cd9e02ddcf6d7a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"fos_user_registration_register\">
        ";
        // line 7
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    </div>
";
        
        $__internal_f29da6e51b4e5a26ebeab154f1a248ce1f795fa05e3bed9cd9e02ddcf6d7a1fc->leave($__internal_f29da6e51b4e5a26ebeab154f1a248ce1f795fa05e3bed9cd9e02ddcf6d7a1fc_prof);

        
        $__internal_b54b9e685c340b6d001431e498f963eb6ec3a36006e7b96608271a648dc2be6e->leave($__internal_b54b9e685c340b6d001431e498f963eb6ec3a36006e7b96608271a648dc2be6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  70 => 6,  61 => 5,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}
{% block h2 %}
<h2 id=\"registr\">Войти</h2>
{% endblock %}
{% block fos_user_content %}
    <div class=\"fos_user_registration_register\">
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
