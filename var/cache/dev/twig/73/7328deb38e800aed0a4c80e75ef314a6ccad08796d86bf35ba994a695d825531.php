<?php

/* :default:front.html.twig */
class __TwigTemplate_843d58e257a8c5687d41a90555d37bef2b83121be78a2e4dc592fbfdb84f5b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7fc125621ab5e1a3c65fe60c10ac5cfbeeb5846bb2d1657f7f9e3b9759985e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fc125621ab5e1a3c65fe60c10ac5cfbeeb5846bb2d1657f7f9e3b9759985e0->enter($__internal_c7fc125621ab5e1a3c65fe60c10ac5cfbeeb5846bb2d1657f7f9e3b9759985e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:front.html.twig"));

        $__internal_4734030020db0d3f47ff35e729fb23ccb4334bcda1f84acebb2952d64d017989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4734030020db0d3f47ff35e729fb23ccb4334bcda1f84acebb2952d64d017989->enter($__internal_4734030020db0d3f47ff35e729fb23ccb4334bcda1f84acebb2952d64d017989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:front.html.twig"));

        // line 1
        echo "
 ";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_c7fc125621ab5e1a3c65fe60c10ac5cfbeeb5846bb2d1657f7f9e3b9759985e0->leave($__internal_c7fc125621ab5e1a3c65fe60c10ac5cfbeeb5846bb2d1657f7f9e3b9759985e0_prof);

        
        $__internal_4734030020db0d3f47ff35e729fb23ccb4334bcda1f84acebb2952d64d017989->leave($__internal_4734030020db0d3f47ff35e729fb23ccb4334bcda1f84acebb2952d64d017989_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32ee076974b6ce18c2ddf02e66f6f3330468b5d5066f273baf7ea7f75fdc2f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ee076974b6ce18c2ddf02e66f6f3330468b5d5066f273baf7ea7f75fdc2f9a->enter($__internal_32ee076974b6ce18c2ddf02e66f6f3330468b5d5066f273baf7ea7f75fdc2f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24ed7d1205b43fb267baa29bdf3826ce7e7d9920049898c5880890d7d1255edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ed7d1205b43fb267baa29bdf3826ce7e7d9920049898c5880890d7d1255edc->enter($__internal_24ed7d1205b43fb267baa29bdf3826ce7e7d9920049898c5880890d7d1255edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/front.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
 ";
        
        $__internal_24ed7d1205b43fb267baa29bdf3826ce7e7d9920049898c5880890d7d1255edc->leave($__internal_24ed7d1205b43fb267baa29bdf3826ce7e7d9920049898c5880890d7d1255edc_prof);

        
        $__internal_32ee076974b6ce18c2ddf02e66f6f3330468b5d5066f273baf7ea7f75fdc2f9a->leave($__internal_32ee076974b6ce18c2ddf02e66f6f3330468b5d5066f273baf7ea7f75fdc2f9a_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_43d534bf130175b7cbba8ac1790c0133f59da31f38a93c700513718bde4489de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d534bf130175b7cbba8ac1790c0133f59da31f38a93c700513718bde4489de->enter($__internal_43d534bf130175b7cbba8ac1790c0133f59da31f38a93c700513718bde4489de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6fa8b77861120ea168ef4bb469bda13e3b857d585fe8ae02fc91123c93c5888a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa8b77861120ea168ef4bb469bda13e3b857d585fe8ae02fc91123c93c5888a->enter($__internal_6fa8b77861120ea168ef4bb469bda13e3b857d585fe8ae02fc91123c93c5888a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "    <body>
    <div id=\"intro_description\" class=\"col-sm-12 col-md-12\">
        <h1>Вас приветствует почтовый сервис Smail</h1>
        <div class=\"intro_feature\">
            <h3> Почтовый сервис Smail позволяет:</h3>
                    <h4><i class=\"fa fa-check\"></i>Обменваться сообщениями между адресатами.</h4>
                    <h4><i class=\"fa fa-check\"></i>Кроме текстовых сообшений по электронной почте можно передавать и любые другие файлы.</h4>
                    <h4>Все используемые функции почтового сервиса полностью бесплатны.</h4>
                    <h4>Предоставляет доступ к почтовым ящикам через веб-интерфейс.</h4>
        </div>
        <div class=\"intro_button text-center\">
            <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register");
        echo "\">Регистрация</a>
            <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_login");
        echo "\">Войти</a>
        </div>
    </div>
    </body>
";
        
        $__internal_6fa8b77861120ea168ef4bb469bda13e3b857d585fe8ae02fc91123c93c5888a->leave($__internal_6fa8b77861120ea168ef4bb469bda13e3b857d585fe8ae02fc91123c93c5888a_prof);

        
        $__internal_43d534bf130175b7cbba8ac1790c0133f59da31f38a93c700513718bde4489de->leave($__internal_43d534bf130175b7cbba8ac1790c0133f59da31f38a93c700513718bde4489de_prof);

    }

    public function getTemplateName()
    {
        return ":default:front.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  94 => 19,  81 => 8,  72 => 7,  60 => 5,  56 => 4,  51 => 3,  42 => 2,  32 => 7,  30 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
 {% block stylesheets %}
     <link href=\"{{ asset('/css/front.css') }}\" rel=\"stylesheet\" />
     <link href=\"{{ asset('/css/bootstrap.css') }}\" rel=\"stylesheet\" />
     <link href=\"{{ asset('/css/animate.css') }}\" rel=\"stylesheet\" />
 {% endblock %}
{% block page_content %}
    <body>
    <div id=\"intro_description\" class=\"col-sm-12 col-md-12\">
        <h1>Вас приветствует почтовый сервис Smail</h1>
        <div class=\"intro_feature\">
            <h3> Почтовый сервис Smail позволяет:</h3>
                    <h4><i class=\"fa fa-check\"></i>Обменваться сообщениями между адресатами.</h4>
                    <h4><i class=\"fa fa-check\"></i>Кроме текстовых сообшений по электронной почте можно передавать и любые другие файлы.</h4>
                    <h4>Все используемые функции почтового сервиса полностью бесплатны.</h4>
                    <h4>Предоставляет доступ к почтовым ящикам через веб-интерфейс.</h4>
        </div>
        <div class=\"intro_button text-center\">
            <a class=\"btn btn-primary btn-lg\" href=\"{{ url('fos_user_registration_register') }}\">Регистрация</a>
            <a class=\"btn btn-primary btn-lg\" href=\"{{ url('fos_user_security_login') }}\">Войти</a>
        </div>
    </div>
    </body>
{% endblock %}", ":default:front.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/front.html.twig");
    }
}
