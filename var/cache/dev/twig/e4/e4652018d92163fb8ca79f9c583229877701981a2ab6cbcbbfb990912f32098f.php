<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_b332328f65c07630a07ee3177eb98a5832ff160985f0bdb395c0c872eceeffb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_320d0bf24045d7f677bd6a22a013de5bb62e91085b7e3c71c79285bf910e851e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320d0bf24045d7f677bd6a22a013de5bb62e91085b7e3c71c79285bf910e851e->enter($__internal_320d0bf24045d7f677bd6a22a013de5bb62e91085b7e3c71c79285bf910e851e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_b535428ee72a3a6d1fad3cd74156e1741780ba2a99c594c9205cf32f4894db6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b535428ee72a3a6d1fad3cd74156e1741780ba2a99c594c9205cf32f4894db6e->enter($__internal_b535428ee72a3a6d1fad3cd74156e1741780ba2a99c594c9205cf32f4894db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320d0bf24045d7f677bd6a22a013de5bb62e91085b7e3c71c79285bf910e851e->leave($__internal_320d0bf24045d7f677bd6a22a013de5bb62e91085b7e3c71c79285bf910e851e_prof);

        
        $__internal_b535428ee72a3a6d1fad3cd74156e1741780ba2a99c594c9205cf32f4894db6e->leave($__internal_b535428ee72a3a6d1fad3cd74156e1741780ba2a99c594c9205cf32f4894db6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfaea0914efe72f55f53dc5ecd065493090b3931c9ec3e98e44274910529203c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfaea0914efe72f55f53dc5ecd065493090b3931c9ec3e98e44274910529203c->enter($__internal_bfaea0914efe72f55f53dc5ecd065493090b3931c9ec3e98e44274910529203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d46c43dc633e95c646ffa1be6cd436eb411d952c882a14c0b92681b0347109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d46c43dc633e95c646ffa1be6cd436eb411d952c882a14c0b92681b0347109c->enter($__internal_9d46c43dc633e95c646ffa1be6cd436eb411d952c882a14c0b92681b0347109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9d46c43dc633e95c646ffa1be6cd436eb411d952c882a14c0b92681b0347109c->leave($__internal_9d46c43dc633e95c646ffa1be6cd436eb411d952c882a14c0b92681b0347109c_prof);

        
        $__internal_bfaea0914efe72f55f53dc5ecd065493090b3931c9ec3e98e44274910529203c->leave($__internal_bfaea0914efe72f55f53dc5ecd065493090b3931c9ec3e98e44274910529203c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
