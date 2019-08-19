<?php

/* default/front.html.twig */
class __TwigTemplate_054b946a55805e15cea223ce21a51cbad24e822063c9f493dc0c073c6138c1da extends Twig_Template
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
        $__internal_938717ace74bd54e43c3d12d2589053f58aa093173e40a51a3fbf0f8e7f39ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938717ace74bd54e43c3d12d2589053f58aa093173e40a51a3fbf0f8e7f39ab9->enter($__internal_938717ace74bd54e43c3d12d2589053f58aa093173e40a51a3fbf0f8e7f39ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/front.html.twig"));

        $__internal_84a9a1faaddff45107b4045e913c62751c57ca1db2a02af3b1e383b5c9e66876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a9a1faaddff45107b4045e913c62751c57ca1db2a02af3b1e383b5c9e66876->enter($__internal_84a9a1faaddff45107b4045e913c62751c57ca1db2a02af3b1e383b5c9e66876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/front.html.twig"));

        // line 1
        echo "
 ";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('page_content', $context, $blocks);
        
        $__internal_938717ace74bd54e43c3d12d2589053f58aa093173e40a51a3fbf0f8e7f39ab9->leave($__internal_938717ace74bd54e43c3d12d2589053f58aa093173e40a51a3fbf0f8e7f39ab9_prof);

        
        $__internal_84a9a1faaddff45107b4045e913c62751c57ca1db2a02af3b1e383b5c9e66876->leave($__internal_84a9a1faaddff45107b4045e913c62751c57ca1db2a02af3b1e383b5c9e66876_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_744200e0d3b73f7692f04a9973791a7afcb410ed8ca57dd53ad28d7921758afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744200e0d3b73f7692f04a9973791a7afcb410ed8ca57dd53ad28d7921758afd->enter($__internal_744200e0d3b73f7692f04a9973791a7afcb410ed8ca57dd53ad28d7921758afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c67b7510352e1faba966ae26a736803b17d0803456839e7795cdddacadf428d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67b7510352e1faba966ae26a736803b17d0803456839e7795cdddacadf428d3->enter($__internal_c67b7510352e1faba966ae26a736803b17d0803456839e7795cdddacadf428d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c67b7510352e1faba966ae26a736803b17d0803456839e7795cdddacadf428d3->leave($__internal_c67b7510352e1faba966ae26a736803b17d0803456839e7795cdddacadf428d3_prof);

        
        $__internal_744200e0d3b73f7692f04a9973791a7afcb410ed8ca57dd53ad28d7921758afd->leave($__internal_744200e0d3b73f7692f04a9973791a7afcb410ed8ca57dd53ad28d7921758afd_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_57cab8e8d9540d23bc44619fa51101ef4fa1891e73d6267d48586d18002150ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cab8e8d9540d23bc44619fa51101ef4fa1891e73d6267d48586d18002150ff->enter($__internal_57cab8e8d9540d23bc44619fa51101ef4fa1891e73d6267d48586d18002150ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_70e19d9d41492b59cd8a2c0f542a4140d2be167f607bacbf092c28fb539593bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e19d9d41492b59cd8a2c0f542a4140d2be167f607bacbf092c28fb539593bf->enter($__internal_70e19d9d41492b59cd8a2c0f542a4140d2be167f607bacbf092c28fb539593bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_70e19d9d41492b59cd8a2c0f542a4140d2be167f607bacbf092c28fb539593bf->leave($__internal_70e19d9d41492b59cd8a2c0f542a4140d2be167f607bacbf092c28fb539593bf_prof);

        
        $__internal_57cab8e8d9540d23bc44619fa51101ef4fa1891e73d6267d48586d18002150ff->leave($__internal_57cab8e8d9540d23bc44619fa51101ef4fa1891e73d6267d48586d18002150ff_prof);

    }

    public function getTemplateName()
    {
        return "default/front.html.twig";
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
{% endblock %}", "default/front.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\front.html.twig");
    }
}
