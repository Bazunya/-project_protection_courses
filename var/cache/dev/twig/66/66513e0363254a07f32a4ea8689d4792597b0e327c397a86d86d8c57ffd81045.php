<?php

/* layout.html.twig */
class __TwigTemplate_85a24d937df7bacaf07a259c4533f8defafb214fc4e8e5a2871b596d2d188140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be0c63cb020b2659b0351523fd81739d11e8672f11c8f01e6f203ee62235455e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0c63cb020b2659b0351523fd81739d11e8672f11c8f01e6f203ee62235455e->enter($__internal_be0c63cb020b2659b0351523fd81739d11e8672f11c8f01e6f203ee62235455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_37cf5faf32829260eccc3bb5a2b0920d64623a96a6e51d75c9222f01d3a29c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cf5faf32829260eccc3bb5a2b0920d64623a96a6e51d75c9222f01d3a29c4f->enter($__internal_37cf5faf32829260eccc3bb5a2b0920d64623a96a6e51d75c9222f01d3a29c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0c63cb020b2659b0351523fd81739d11e8672f11c8f01e6f203ee62235455e->leave($__internal_be0c63cb020b2659b0351523fd81739d11e8672f11c8f01e6f203ee62235455e_prof);

        
        $__internal_37cf5faf32829260eccc3bb5a2b0920d64623a96a6e51d75c9222f01d3a29c4f->leave($__internal_37cf5faf32829260eccc3bb5a2b0920d64623a96a6e51d75c9222f01d3a29c4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b9d828cc0964e94d7e692a6d1a12f45574eae666ddb41780f16fcf7ddb5c7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9d828cc0964e94d7e692a6d1a12f45574eae666ddb41780f16fcf7ddb5c7d6->enter($__internal_0b9d828cc0964e94d7e692a6d1a12f45574eae666ddb41780f16fcf7ddb5c7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9301cade48c9ba7d2da40262b972bc1bd718ab39788bbedd29e76756f8637e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9301cade48c9ba7d2da40262b972bc1bd718ab39788bbedd29e76756f8637e50->enter($__internal_9301cade48c9ba7d2da40262b972bc1bd718ab39788bbedd29e76756f8637e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Smail.com";
        
        $__internal_9301cade48c9ba7d2da40262b972bc1bd718ab39788bbedd29e76756f8637e50->leave($__internal_9301cade48c9ba7d2da40262b972bc1bd718ab39788bbedd29e76756f8637e50_prof);

        
        $__internal_0b9d828cc0964e94d7e692a6d1a12f45574eae666ddb41780f16fcf7ddb5c7d6->leave($__internal_0b9d828cc0964e94d7e692a6d1a12f45574eae666ddb41780f16fcf7ddb5c7d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5edb17ca5a3b8d3374d6ff723101a236dfc83781307ed6d39c3db2086dc3c548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edb17ca5a3b8d3374d6ff723101a236dfc83781307ed6d39c3db2086dc3c548->enter($__internal_5edb17ca5a3b8d3374d6ff723101a236dfc83781307ed6d39c3db2086dc3c548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_448e09d88c50a0d0ff999cb78a2d625886bba25b54799bcbda6d1cd26b3c6bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448e09d88c50a0d0ff999cb78a2d625886bba25b54799bcbda6d1cd26b3c6bb6->enter($__internal_448e09d88c50a0d0ff999cb78a2d625886bba25b54799bcbda6d1cd26b3c6bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">
    <header class=\"main-header\">
        <a href=\"#\" class=\"logo\">
            <span class=\"logo-mini\"><b>S</b>mail</span>
            <span class=\"logo-lg\"><b>Smail</b>.com</span>
        </a>
        <nav class=\"navbar navbar-static-top\">
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            </a>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        </a>
                        <ul class=\"dropdown-menu\">

                            <li>
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Valera
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">

                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user1-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">Посмотреть все сообщения</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                        </a>
                    <li class=\"dropdown user user-menu\">
                        <a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_security_logout");
        echo "\">Выйти</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
            </div>
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li>
                    <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("compose");
        echo "\" class=\"mail btn btn-primary btn-lg\">Написать</a>
                <li>
                <li>
                    <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("vsya_pochta");
        echo "\">
                        <i class=\"fa fa-files-o\"></i>
                        <span>Входящие</span>
                    </a>
                <li>
                    <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mail_sent");
        echo "\">
                        <i class=\"fa fa-th\"></i> <span>Отправленные</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("korzina");
        echo "\">
                        <i class=\"fa fa-folder\"></i> <span>Корзина</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class=\"content-wrapper\">
        <div class=\"content\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 129
        echo "        </div>
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright 2018 <a href=\"https://adminlte.io\">MRK</a>.</strong>Все права защищены.
    </footer>
</div>
";
        
        $__internal_448e09d88c50a0d0ff999cb78a2d625886bba25b54799bcbda6d1cd26b3c6bb6->leave($__internal_448e09d88c50a0d0ff999cb78a2d625886bba25b54799bcbda6d1cd26b3c6bb6_prof);

        
        $__internal_5edb17ca5a3b8d3374d6ff723101a236dfc83781307ed6d39c3db2086dc3c548->leave($__internal_5edb17ca5a3b8d3374d6ff723101a236dfc83781307ed6d39c3db2086dc3c548_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b9fd6bf5e77cd98fc531dfd5a68f8d6198135561a3d64db2bd186d280522ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b9fd6bf5e77cd98fc531dfd5a68f8d6198135561a3d64db2bd186d280522ee6->enter($__internal_3b9fd6bf5e77cd98fc531dfd5a68f8d6198135561a3d64db2bd186d280522ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5aac0af7731bfa73c3822aa900219e6e11b9bafa429af61d2f3ad279c335eeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aac0af7731bfa73c3822aa900219e6e11b9bafa429af61d2f3ad279c335eeb3->enter($__internal_5aac0af7731bfa73c3822aa900219e6e11b9bafa429af61d2f3ad279c335eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "            ";
        
        $__internal_5aac0af7731bfa73c3822aa900219e6e11b9bafa429af61d2f3ad279c335eeb3->leave($__internal_5aac0af7731bfa73c3822aa900219e6e11b9bafa429af61d2f3ad279c335eeb3_prof);

        
        $__internal_3b9fd6bf5e77cd98fc531dfd5a68f8d6198135561a3d64db2bd186d280522ee6->leave($__internal_3b9fd6bf5e77cd98fc531dfd5a68f8d6198135561a3d64db2bd186d280522ee6_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 128,  233 => 127,  214 => 129,  212 => 127,  200 => 118,  192 => 113,  184 => 108,  178 => 105,  162 => 92,  140 => 73,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %} Smail.com{% endblock %}
{% block body %}
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">
    <header class=\"main-header\">
        <a href=\"#\" class=\"logo\">
            <span class=\"logo-mini\"><b>S</b>mail</span>
            <span class=\"logo-lg\"><b>Smail</b>.com</span>
        </a>
        <nav class=\"navbar navbar-static-top\">
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
            </a>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        </a>
                        <ul class=\"dropdown-menu\">

                            <li>
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Valera
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">

                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{ asset('/img/user1-128x128.jpg') }}\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">Посмотреть все сообщения</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">

                        </a>
                    <li class=\"dropdown user user-menu\">
                        <a href=\"{{ url('fos_user_security_logout') }}\">Выйти</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
            </div>
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li>
                    <a href=\"{{ url('compose') }}\" class=\"mail btn btn-primary btn-lg\">Написать</a>
                <li>
                <li>
                    <a href=\"{{ url('vsya_pochta') }}\">
                        <i class=\"fa fa-files-o\"></i>
                        <span>Входящие</span>
                    </a>
                <li>
                    <a href=\"{{ url('mail_sent') }}\">
                        <i class=\"fa fa-th\"></i> <span>Отправленные</span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ url('korzina') }}\">
                        <i class=\"fa fa-folder\"></i> <span>Корзина</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class=\"content-wrapper\">
        <div class=\"content\">
            {% block content %}
            {% endblock %}
        </div>
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright 2018 <a href=\"https://adminlte.io\">MRK</a>.</strong>Все права защищены.
    </footer>
</div>
{% endblock %}







", "layout.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
