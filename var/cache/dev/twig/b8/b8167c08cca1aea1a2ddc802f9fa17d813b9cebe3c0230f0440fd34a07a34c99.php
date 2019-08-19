<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_716475f6be8de419d42a51e5344167ea634ae59b71944b5cf837a27669e7a102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_4bcb5ffb9959b03491f957ab0600e5e1fc09bd5fdf737235d144d45ee7e7f801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bcb5ffb9959b03491f957ab0600e5e1fc09bd5fdf737235d144d45ee7e7f801->enter($__internal_4bcb5ffb9959b03491f957ab0600e5e1fc09bd5fdf737235d144d45ee7e7f801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_02a455b9377c697c49c1763b5ec8a3df6c10b666a28a21704a437fbfca0fdabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a455b9377c697c49c1763b5ec8a3df6c10b666a28a21704a437fbfca0fdabe->enter($__internal_02a455b9377c697c49c1763b5ec8a3df6c10b666a28a21704a437fbfca0fdabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bcb5ffb9959b03491f957ab0600e5e1fc09bd5fdf737235d144d45ee7e7f801->leave($__internal_4bcb5ffb9959b03491f957ab0600e5e1fc09bd5fdf737235d144d45ee7e7f801_prof);

        
        $__internal_02a455b9377c697c49c1763b5ec8a3df6c10b666a28a21704a437fbfca0fdabe->leave($__internal_02a455b9377c697c49c1763b5ec8a3df6c10b666a28a21704a437fbfca0fdabe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4be644e58e2a4fd80d078fc3e8aed47098713f629ee05cc2766e7109b62ff16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4be644e58e2a4fd80d078fc3e8aed47098713f629ee05cc2766e7109b62ff16->enter($__internal_d4be644e58e2a4fd80d078fc3e8aed47098713f629ee05cc2766e7109b62ff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6622d01bcfc2f0d262f377dbe2e0193a27c4f556f884cc17bbaebb53bf263ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6622d01bcfc2f0d262f377dbe2e0193a27c4f556f884cc17bbaebb53bf263ebb->enter($__internal_6622d01bcfc2f0d262f377dbe2e0193a27c4f556f884cc17bbaebb53bf263ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6622d01bcfc2f0d262f377dbe2e0193a27c4f556f884cc17bbaebb53bf263ebb->leave($__internal_6622d01bcfc2f0d262f377dbe2e0193a27c4f556f884cc17bbaebb53bf263ebb_prof);

        
        $__internal_d4be644e58e2a4fd80d078fc3e8aed47098713f629ee05cc2766e7109b62ff16->leave($__internal_d4be644e58e2a4fd80d078fc3e8aed47098713f629ee05cc2766e7109b62ff16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
