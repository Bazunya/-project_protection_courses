<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_af99db24d1f6b0a3f9cebea0a03c730e8698df462b37880e9fcc2662761c014c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'h2' => array($this, 'block_h2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e88bcca46bb01ecdf7a190e0de6727c4bb3a0f64f37250d4bc34c6f47121a7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88bcca46bb01ecdf7a190e0de6727c4bb3a0f64f37250d4bc34c6f47121a7e6->enter($__internal_e88bcca46bb01ecdf7a190e0de6727c4bb3a0f64f37250d4bc34c6f47121a7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_c4c2ff6882105081a59102df0e465496a2ad460da1232b9c543cb3386533e15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c2ff6882105081a59102df0e465496a2ad460da1232b9c543cb3386533e15e->enter($__internal_c4c2ff6882105081a59102df0e465496a2ad460da1232b9c543cb3386533e15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        $this->displayBlock('h2', $context, $blocks);
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 15
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e88bcca46bb01ecdf7a190e0de6727c4bb3a0f64f37250d4bc34c6f47121a7e6->leave($__internal_e88bcca46bb01ecdf7a190e0de6727c4bb3a0f64f37250d4bc34c6f47121a7e6_prof);

        
        $__internal_c4c2ff6882105081a59102df0e465496a2ad460da1232b9c543cb3386533e15e->leave($__internal_c4c2ff6882105081a59102df0e465496a2ad460da1232b9c543cb3386533e15e_prof);

    }

    // line 2
    public function block_h2($context, array $blocks = array())
    {
        $__internal_8181f3a98413bc15326b937ad3e0af4a1c476e37609a43c614f5836f5d2bae5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8181f3a98413bc15326b937ad3e0af4a1c476e37609a43c614f5836f5d2bae5f->enter($__internal_8181f3a98413bc15326b937ad3e0af4a1c476e37609a43c614f5836f5d2bae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        $__internal_cfb1d5137a06728aa27cc2f55e6aafe953f3e8eeb38cf9be2f927ae26fc8a870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb1d5137a06728aa27cc2f55e6aafe953f3e8eeb38cf9be2f927ae26fc8a870->enter($__internal_cfb1d5137a06728aa27cc2f55e6aafe953f3e8eeb38cf9be2f927ae26fc8a870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        // line 3
        echo "<h2 id=\"registr\">Регистрация</h2>
";
        
        $__internal_cfb1d5137a06728aa27cc2f55e6aafe953f3e8eeb38cf9be2f927ae26fc8a870->leave($__internal_cfb1d5137a06728aa27cc2f55e6aafe953f3e8eeb38cf9be2f927ae26fc8a870_prof);

        
        $__internal_8181f3a98413bc15326b937ad3e0af4a1c476e37609a43c614f5836f5d2bae5f->leave($__internal_8181f3a98413bc15326b937ad3e0af4a1c476e37609a43c614f5836f5d2bae5f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 3,  81 => 2,  69 => 18,  66 => 17,  58 => 15,  52 => 12,  48 => 11,  43 => 10,  41 => 9,  37 => 8,  32 => 6,  28 => 5,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
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
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
