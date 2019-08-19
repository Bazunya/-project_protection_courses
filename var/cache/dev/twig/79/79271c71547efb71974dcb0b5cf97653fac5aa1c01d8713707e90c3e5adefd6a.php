<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_5d21476bec7435f236a0a767e3eaa924201b91953989ddecd76f995e186f72a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_bfe3c091bea2236c5f1ea48810d61b8eaaa3e792d1c43bb4145e54d796923c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe3c091bea2236c5f1ea48810d61b8eaaa3e792d1c43bb4145e54d796923c73->enter($__internal_bfe3c091bea2236c5f1ea48810d61b8eaaa3e792d1c43bb4145e54d796923c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_02e2fd5dd423d6bbacd11fe0ab5485ac83c013bc241a16de9549cfd08092cda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e2fd5dd423d6bbacd11fe0ab5485ac83c013bc241a16de9549cfd08092cda8->enter($__internal_02e2fd5dd423d6bbacd11fe0ab5485ac83c013bc241a16de9549cfd08092cda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfe3c091bea2236c5f1ea48810d61b8eaaa3e792d1c43bb4145e54d796923c73->leave($__internal_bfe3c091bea2236c5f1ea48810d61b8eaaa3e792d1c43bb4145e54d796923c73_prof);

        
        $__internal_02e2fd5dd423d6bbacd11fe0ab5485ac83c013bc241a16de9549cfd08092cda8->leave($__internal_02e2fd5dd423d6bbacd11fe0ab5485ac83c013bc241a16de9549cfd08092cda8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_527795751b969bd389a9362e1a4bf5add0ad31655f59f11f2319ada072ff6f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527795751b969bd389a9362e1a4bf5add0ad31655f59f11f2319ada072ff6f43->enter($__internal_527795751b969bd389a9362e1a4bf5add0ad31655f59f11f2319ada072ff6f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c3944e3dcc515aa99fccb8216aa82cbf23545efa3a32a662f936b66da88bc83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3944e3dcc515aa99fccb8216aa82cbf23545efa3a32a662f936b66da88bc83a->enter($__internal_c3944e3dcc515aa99fccb8216aa82cbf23545efa3a32a662f936b66da88bc83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c3944e3dcc515aa99fccb8216aa82cbf23545efa3a32a662f936b66da88bc83a->leave($__internal_c3944e3dcc515aa99fccb8216aa82cbf23545efa3a32a662f936b66da88bc83a_prof);

        
        $__internal_527795751b969bd389a9362e1a4bf5add0ad31655f59f11f2319ada072ff6f43->leave($__internal_527795751b969bd389a9362e1a4bf5add0ad31655f59f11f2319ada072ff6f43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
