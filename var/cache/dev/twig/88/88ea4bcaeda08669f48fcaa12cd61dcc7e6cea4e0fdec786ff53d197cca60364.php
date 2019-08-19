<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3a8fe003a98dfd34d75f3aaf7c9e766dc7ab9cce48bffe9b5f76af28decc271c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_efa468932f53a53361d886756a1561376ae31a0b1d21359d86fe8ffd49e1dc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa468932f53a53361d886756a1561376ae31a0b1d21359d86fe8ffd49e1dc3b->enter($__internal_efa468932f53a53361d886756a1561376ae31a0b1d21359d86fe8ffd49e1dc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_4388abbb2ad9615789ec444bc36f5790b2b395470a8da6161a917ff76a8c6ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4388abbb2ad9615789ec444bc36f5790b2b395470a8da6161a917ff76a8c6ed0->enter($__internal_4388abbb2ad9615789ec444bc36f5790b2b395470a8da6161a917ff76a8c6ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa468932f53a53361d886756a1561376ae31a0b1d21359d86fe8ffd49e1dc3b->leave($__internal_efa468932f53a53361d886756a1561376ae31a0b1d21359d86fe8ffd49e1dc3b_prof);

        
        $__internal_4388abbb2ad9615789ec444bc36f5790b2b395470a8da6161a917ff76a8c6ed0->leave($__internal_4388abbb2ad9615789ec444bc36f5790b2b395470a8da6161a917ff76a8c6ed0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0fb0ad80267c01336e4f19b1e9893760fa2c73a2b642b6ae377e4d2e3c638d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb0ad80267c01336e4f19b1e9893760fa2c73a2b642b6ae377e4d2e3c638d16->enter($__internal_0fb0ad80267c01336e4f19b1e9893760fa2c73a2b642b6ae377e4d2e3c638d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74436c8f15a572c1c4fe5dd2bae698424bf9f5b6227db0964276507622468a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74436c8f15a572c1c4fe5dd2bae698424bf9f5b6227db0964276507622468a5f->enter($__internal_74436c8f15a572c1c4fe5dd2bae698424bf9f5b6227db0964276507622468a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_74436c8f15a572c1c4fe5dd2bae698424bf9f5b6227db0964276507622468a5f->leave($__internal_74436c8f15a572c1c4fe5dd2bae698424bf9f5b6227db0964276507622468a5f_prof);

        
        $__internal_0fb0ad80267c01336e4f19b1e9893760fa2c73a2b642b6ae377e4d2e3c638d16->leave($__internal_0fb0ad80267c01336e4f19b1e9893760fa2c73a2b642b6ae377e4d2e3c638d16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
