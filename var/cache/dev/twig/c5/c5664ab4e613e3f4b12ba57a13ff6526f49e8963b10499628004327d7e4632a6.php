<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c776b9a95ce04b27bf9a34c4d2ad80558cf79d6ced4ab616ca6f233907648bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_bb182d8b5c0df658b2792927edd93ddcba903e40b65df829c6adb5953d3136f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb182d8b5c0df658b2792927edd93ddcba903e40b65df829c6adb5953d3136f5->enter($__internal_bb182d8b5c0df658b2792927edd93ddcba903e40b65df829c6adb5953d3136f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_9b83dddfb8c6946533037e9b648dc2ff57c2c5da41e3c035dc766a251075960f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b83dddfb8c6946533037e9b648dc2ff57c2c5da41e3c035dc766a251075960f->enter($__internal_9b83dddfb8c6946533037e9b648dc2ff57c2c5da41e3c035dc766a251075960f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb182d8b5c0df658b2792927edd93ddcba903e40b65df829c6adb5953d3136f5->leave($__internal_bb182d8b5c0df658b2792927edd93ddcba903e40b65df829c6adb5953d3136f5_prof);

        
        $__internal_9b83dddfb8c6946533037e9b648dc2ff57c2c5da41e3c035dc766a251075960f->leave($__internal_9b83dddfb8c6946533037e9b648dc2ff57c2c5da41e3c035dc766a251075960f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_908eee286b699ba544b592747e2ac068f7ed70febd2e112be90f78829ed3ca67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_908eee286b699ba544b592747e2ac068f7ed70febd2e112be90f78829ed3ca67->enter($__internal_908eee286b699ba544b592747e2ac068f7ed70febd2e112be90f78829ed3ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ced7354521124097b17d7b3e63ae88e0a07f6c53c08d6fe80972bac3a7c27be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ced7354521124097b17d7b3e63ae88e0a07f6c53c08d6fe80972bac3a7c27be->enter($__internal_0ced7354521124097b17d7b3e63ae88e0a07f6c53c08d6fe80972bac3a7c27be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0ced7354521124097b17d7b3e63ae88e0a07f6c53c08d6fe80972bac3a7c27be->leave($__internal_0ced7354521124097b17d7b3e63ae88e0a07f6c53c08d6fe80972bac3a7c27be_prof);

        
        $__internal_908eee286b699ba544b592747e2ac068f7ed70febd2e112be90f78829ed3ca67->leave($__internal_908eee286b699ba544b592747e2ac068f7ed70febd2e112be90f78829ed3ca67_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
