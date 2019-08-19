<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_552e7ccb975c781c0a1c96e006658095e1fff7fa13caf410eda52cbe304fef02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_f6ec8901d913fc778b7afb23190f48c6f2eae42f770b440f33f9d7db7913ee2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ec8901d913fc778b7afb23190f48c6f2eae42f770b440f33f9d7db7913ee2d->enter($__internal_f6ec8901d913fc778b7afb23190f48c6f2eae42f770b440f33f9d7db7913ee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0033e368bca19360c177aceac00d7abadf6e5442f59c2bf79d0187b56d94738b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0033e368bca19360c177aceac00d7abadf6e5442f59c2bf79d0187b56d94738b->enter($__internal_0033e368bca19360c177aceac00d7abadf6e5442f59c2bf79d0187b56d94738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ec8901d913fc778b7afb23190f48c6f2eae42f770b440f33f9d7db7913ee2d->leave($__internal_f6ec8901d913fc778b7afb23190f48c6f2eae42f770b440f33f9d7db7913ee2d_prof);

        
        $__internal_0033e368bca19360c177aceac00d7abadf6e5442f59c2bf79d0187b56d94738b->leave($__internal_0033e368bca19360c177aceac00d7abadf6e5442f59c2bf79d0187b56d94738b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed0916609a8ba84fd0d759dd8f7a98469989250ee5151c181c83bf1b108b2459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0916609a8ba84fd0d759dd8f7a98469989250ee5151c181c83bf1b108b2459->enter($__internal_ed0916609a8ba84fd0d759dd8f7a98469989250ee5151c181c83bf1b108b2459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed2237e75b579940618e9b14a8570a44a9988f5f385fde77e7fcf0a0a0c76e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2237e75b579940618e9b14a8570a44a9988f5f385fde77e7fcf0a0a0c76e08->enter($__internal_ed2237e75b579940618e9b14a8570a44a9988f5f385fde77e7fcf0a0a0c76e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"fos_user_registration_register\">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        <p><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("vsya_pochta");
        echo "\">Посмотреть почту</a></p>
    </div>
";
        
        $__internal_ed2237e75b579940618e9b14a8570a44a9988f5f385fde77e7fcf0a0a0c76e08->leave($__internal_ed2237e75b579940618e9b14a8570a44a9988f5f385fde77e7fcf0a0a0c76e08_prof);

        
        $__internal_ed0916609a8ba84fd0d759dd8f7a98469989250ee5151c181c83bf1b108b2459->leave($__internal_ed0916609a8ba84fd0d759dd8f7a98469989250ee5151c181c83bf1b108b2459_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div class=\"fos_user_registration_register\">
        <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
        <p><a href=\"{{ url('vsya_pochta') }}\">Посмотреть почту</a></p>
    </div>
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
