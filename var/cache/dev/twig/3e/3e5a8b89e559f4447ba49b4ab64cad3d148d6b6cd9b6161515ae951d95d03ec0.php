<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_31e76afde84a91fa9c41b1b72b7bde1cb3b3b7162d1461a82496fcda84add11a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fbbae6fed671f876f809553f5283e5a2ca98a587b1827b4d47adb0c5cb5d3ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbae6fed671f876f809553f5283e5a2ca98a587b1827b4d47adb0c5cb5d3ac3->enter($__internal_fbbae6fed671f876f809553f5283e5a2ca98a587b1827b4d47adb0c5cb5d3ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c3dce891f4427ec3d04d6d363559c8f094520555e4ebb4b0290ccb4e65f652f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dce891f4427ec3d04d6d363559c8f094520555e4ebb4b0290ccb4e65f652f1->enter($__internal_c3dce891f4427ec3d04d6d363559c8f094520555e4ebb4b0290ccb4e65f652f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbbae6fed671f876f809553f5283e5a2ca98a587b1827b4d47adb0c5cb5d3ac3->leave($__internal_fbbae6fed671f876f809553f5283e5a2ca98a587b1827b4d47adb0c5cb5d3ac3_prof);

        
        $__internal_c3dce891f4427ec3d04d6d363559c8f094520555e4ebb4b0290ccb4e65f652f1->leave($__internal_c3dce891f4427ec3d04d6d363559c8f094520555e4ebb4b0290ccb4e65f652f1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e24f4629ec4efa1293b581280acf8cff3e3032f582285533356948a36afa614d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24f4629ec4efa1293b581280acf8cff3e3032f582285533356948a36afa614d->enter($__internal_e24f4629ec4efa1293b581280acf8cff3e3032f582285533356948a36afa614d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e1865e57a7612af152a2434344ef4279396f595ea455d973ecc49af12a23d232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1865e57a7612af152a2434344ef4279396f595ea455d973ecc49af12a23d232->enter($__internal_e1865e57a7612af152a2434344ef4279396f595ea455d973ecc49af12a23d232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e1865e57a7612af152a2434344ef4279396f595ea455d973ecc49af12a23d232->leave($__internal_e1865e57a7612af152a2434344ef4279396f595ea455d973ecc49af12a23d232_prof);

        
        $__internal_e24f4629ec4efa1293b581280acf8cff3e3032f582285533356948a36afa614d->leave($__internal_e24f4629ec4efa1293b581280acf8cff3e3032f582285533356948a36afa614d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
