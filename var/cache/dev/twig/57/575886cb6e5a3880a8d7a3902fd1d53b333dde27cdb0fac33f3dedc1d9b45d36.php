<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_3f04f3b7cfd2dde7b1af2e55c7ff4985e435c377057173d79c808994e1f30798 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'h2' => array($this, 'block_h2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_278b2d572c426b07ae480325a45f83a24e29dffbb61f649d0b8187f8f029364d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278b2d572c426b07ae480325a45f83a24e29dffbb61f649d0b8187f8f029364d->enter($__internal_278b2d572c426b07ae480325a45f83a24e29dffbb61f649d0b8187f8f029364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_e9e1873409bcfd7c4cf3919cf46f72d419d65c7bbbb995ccbb6ab997585dcd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e1873409bcfd7c4cf3919cf46f72d419d65c7bbbb995ccbb6ab997585dcd86->enter($__internal_e9e1873409bcfd7c4cf3919cf46f72d419d65c7bbbb995ccbb6ab997585dcd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('h2', $context, $blocks);
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_278b2d572c426b07ae480325a45f83a24e29dffbb61f649d0b8187f8f029364d->leave($__internal_278b2d572c426b07ae480325a45f83a24e29dffbb61f649d0b8187f8f029364d_prof);

        
        $__internal_e9e1873409bcfd7c4cf3919cf46f72d419d65c7bbbb995ccbb6ab997585dcd86->leave($__internal_e9e1873409bcfd7c4cf3919cf46f72d419d65c7bbbb995ccbb6ab997585dcd86_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54d22c1376a63c5935fe34ef76c94f565804a29f15884d605e71e681e859dcd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d22c1376a63c5935fe34ef76c94f565804a29f15884d605e71e681e859dcd7->enter($__internal_54d22c1376a63c5935fe34ef76c94f565804a29f15884d605e71e681e859dcd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2f195f9078f51191887364c8edb1f21155772cb8f5e3f3b3c248f053d6410824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f195f9078f51191887364c8edb1f21155772cb8f5e3f3b3c248f053d6410824->enter($__internal_2f195f9078f51191887364c8edb1f21155772cb8f5e3f3b3c248f053d6410824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/regs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_2f195f9078f51191887364c8edb1f21155772cb8f5e3f3b3c248f053d6410824->leave($__internal_2f195f9078f51191887364c8edb1f21155772cb8f5e3f3b3c248f053d6410824_prof);

        
        $__internal_54d22c1376a63c5935fe34ef76c94f565804a29f15884d605e71e681e859dcd7->leave($__internal_54d22c1376a63c5935fe34ef76c94f565804a29f15884d605e71e681e859dcd7_prof);

    }

    // line 7
    public function block_h2($context, array $blocks = array())
    {
        $__internal_58018213c9214c4674c0c709cfb1a4f5c250b19224a8ccd46ad5fbe3a618b544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58018213c9214c4674c0c709cfb1a4f5c250b19224a8ccd46ad5fbe3a618b544->enter($__internal_58018213c9214c4674c0c709cfb1a4f5c250b19224a8ccd46ad5fbe3a618b544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        $__internal_4df4e0d6cc00725e1445e6f6d17c61873c975b9b3bf9306c82ec836637d26630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df4e0d6cc00725e1445e6f6d17c61873c975b9b3bf9306c82ec836637d26630->enter($__internal_4df4e0d6cc00725e1445e6f6d17c61873c975b9b3bf9306c82ec836637d26630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        // line 8
        echo "<h2 id=\"registr\">Регистрация</h2>
";
        
        $__internal_4df4e0d6cc00725e1445e6f6d17c61873c975b9b3bf9306c82ec836637d26630->leave($__internal_4df4e0d6cc00725e1445e6f6d17c61873c975b9b3bf9306c82ec836637d26630_prof);

        
        $__internal_58018213c9214c4674c0c709cfb1a4f5c250b19224a8ccd46ad5fbe3a618b544->leave($__internal_58018213c9214c4674c0c709cfb1a4f5c250b19224a8ccd46ad5fbe3a618b544_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 8,  114 => 7,  102 => 4,  98 => 3,  93 => 2,  84 => 1,  72 => 23,  69 => 22,  61 => 20,  55 => 17,  51 => 16,  46 => 15,  44 => 14,  40 => 13,  35 => 11,  31 => 10,  29 => 7,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link href=\"{{ asset('/css/regs.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('/css/bootstrap.css') }}\" rel=\"stylesheet\" />
    <link href=\"{{ asset('/css/animate.css') }}\" rel=\"stylesheet\" />
{% endblock %}
{% trans_default_domain 'FOSUserBundle' %}
{% block h2 %}
<h2 id=\"registr\">Регистрация</h2>
{% endblock %}
{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
