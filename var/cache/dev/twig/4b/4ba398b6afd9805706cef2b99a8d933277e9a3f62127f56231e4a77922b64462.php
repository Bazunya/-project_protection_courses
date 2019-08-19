<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_0fc33afded129d2b6eec5057211689f1772b6bdca400e66140dfb13d59d09496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2c8473dee154499471a0b8c773ec0848149586cbd0b933fe9fe858e6f16da29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c8473dee154499471a0b8c773ec0848149586cbd0b933fe9fe858e6f16da29->enter($__internal_a2c8473dee154499471a0b8c773ec0848149586cbd0b933fe9fe858e6f16da29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_0805d7c9da39ae1168cbb8f13ed34e2dd1bd0d27a332efb8069d9b9ab62a827b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0805d7c9da39ae1168cbb8f13ed34e2dd1bd0d27a332efb8069d9b9ab62a827b->enter($__internal_0805d7c9da39ae1168cbb8f13ed34e2dd1bd0d27a332efb8069d9b9ab62a827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c8473dee154499471a0b8c773ec0848149586cbd0b933fe9fe858e6f16da29->leave($__internal_a2c8473dee154499471a0b8c773ec0848149586cbd0b933fe9fe858e6f16da29_prof);

        
        $__internal_0805d7c9da39ae1168cbb8f13ed34e2dd1bd0d27a332efb8069d9b9ab62a827b->leave($__internal_0805d7c9da39ae1168cbb8f13ed34e2dd1bd0d27a332efb8069d9b9ab62a827b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2502b90bee79805fe3a055133fd0deba5b818c7adb541615ca0f4773ff34ef0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2502b90bee79805fe3a055133fd0deba5b818c7adb541615ca0f4773ff34ef0d->enter($__internal_2502b90bee79805fe3a055133fd0deba5b818c7adb541615ca0f4773ff34ef0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f13faf288e6e287e6011fc103291d4597c6702ea37e349cef03a5e766899b91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13faf288e6e287e6011fc103291d4597c6702ea37e349cef03a5e766899b91f->enter($__internal_f13faf288e6e287e6011fc103291d4597c6702ea37e349cef03a5e766899b91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_f13faf288e6e287e6011fc103291d4597c6702ea37e349cef03a5e766899b91f->leave($__internal_f13faf288e6e287e6011fc103291d4597c6702ea37e349cef03a5e766899b91f_prof);

        
        $__internal_2502b90bee79805fe3a055133fd0deba5b818c7adb541615ca0f4773ff34ef0d->leave($__internal_2502b90bee79805fe3a055133fd0deba5b818c7adb541615ca0f4773ff34ef0d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
