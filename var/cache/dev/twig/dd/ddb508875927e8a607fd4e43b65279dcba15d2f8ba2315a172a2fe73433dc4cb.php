<?php

/* ::layout.html.twig */
class __TwigTemplate_3af98d35fe1fe9743a8fdbc81da2662848e11962a648c3c8fdc10e06045590b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout.html.twig", 1);
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
        $__internal_46bc15095db211429f08d5ea0dcedb4e3871a17b7a474d221392ec86628beb6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bc15095db211429f08d5ea0dcedb4e3871a17b7a474d221392ec86628beb6d->enter($__internal_46bc15095db211429f08d5ea0dcedb4e3871a17b7a474d221392ec86628beb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_2b859ddc423cf7da9e3d16323070b43c65b616d68a6eb8eae27b6dd1f865bdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b859ddc423cf7da9e3d16323070b43c65b616d68a6eb8eae27b6dd1f865bdae->enter($__internal_2b859ddc423cf7da9e3d16323070b43c65b616d68a6eb8eae27b6dd1f865bdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bc15095db211429f08d5ea0dcedb4e3871a17b7a474d221392ec86628beb6d->leave($__internal_46bc15095db211429f08d5ea0dcedb4e3871a17b7a474d221392ec86628beb6d_prof);

        
        $__internal_2b859ddc423cf7da9e3d16323070b43c65b616d68a6eb8eae27b6dd1f865bdae->leave($__internal_2b859ddc423cf7da9e3d16323070b43c65b616d68a6eb8eae27b6dd1f865bdae_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7690e7fe66d6e82502a41e1a635ffa784a6927f95b710fcaa1d8204e82affdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7690e7fe66d6e82502a41e1a635ffa784a6927f95b710fcaa1d8204e82affdf->enter($__internal_f7690e7fe66d6e82502a41e1a635ffa784a6927f95b710fcaa1d8204e82affdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ed65dd89d6dad2bb2a9b1508515fa63ce679e53d8cb6f900ac60dd37f659fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed65dd89d6dad2bb2a9b1508515fa63ce679e53d8cb6f900ac60dd37f659fe7->enter($__internal_3ed65dd89d6dad2bb2a9b1508515fa63ce679e53d8cb6f900ac60dd37f659fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Smail.com";
        
        $__internal_3ed65dd89d6dad2bb2a9b1508515fa63ce679e53d8cb6f900ac60dd37f659fe7->leave($__internal_3ed65dd89d6dad2bb2a9b1508515fa63ce679e53d8cb6f900ac60dd37f659fe7_prof);

        
        $__internal_f7690e7fe66d6e82502a41e1a635ffa784a6927f95b710fcaa1d8204e82affdf->leave($__internal_f7690e7fe66d6e82502a41e1a635ffa784a6927f95b710fcaa1d8204e82affdf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92e52fa9d84165ebc8a1f0ef72dc4a09b28429dd3cdc8bc8fab08ac9029cc05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92e52fa9d84165ebc8a1f0ef72dc4a09b28429dd3cdc8bc8fab08ac9029cc05d->enter($__internal_92e52fa9d84165ebc8a1f0ef72dc4a09b28429dd3cdc8bc8fab08ac9029cc05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6bc8773f60359afc06d0b14f7dc193f0ddd3210624f0752dff92a2b4ee18535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6bc8773f60359afc06d0b14f7dc193f0ddd3210624f0752dff92a2b4ee18535->enter($__internal_f6bc8773f60359afc06d0b14f7dc193f0ddd3210624f0752dff92a2b4ee18535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">У Вас есть 4 сообщения</li>
                            <li>
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user8-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
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
                                                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user5-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user1-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
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
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">У вас есть 10 уведомлений</li>
                            <li>
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 новых членов присоединились сегодня
                                        </a>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> Добавленно 5 новых друзей
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> Вы изменили свое имя пользователя
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">Посмотреть все</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user1-128x128.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Александр Обжора</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"user-header\">
                                <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user1-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Александр Обжора
                                    <small>Зарегестрирован с 13 апреля 2018</small>
                                </p>
                            </li>
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Подпищики</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Друзья </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Мой профиль</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Выход</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"";
        // line 161
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
                    <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/img/user1-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                </div>
                <div class=\"pull-left info\">
                    <p>Алесандр Обжора</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Всети</a>
                </div>
            </div>
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li>
                    <a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("compose");
        echo "\" class=\"mail btn btn-primary btn-lg\">Написать</a>
                <li>
                <li>
                    <a href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("vsya_pochta");
        echo "\">
                        <i class=\"fa fa-files-o\"></i>
                        <span>Входящие</span>
                        <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                    </a>
                <li>
                    <a href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mail_sent");
        echo "\">
                        <i class=\"fa fa-th\"></i> <span>Отправленные</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("chernoviki");
        echo "\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Черновики</span>
                        <span class=\"pull-right-container\">
               <small class=\"label pull-right bg-blue\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("vsya_pochta");
        echo "\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>Вся почта</span>
                        <span class=\"pull-right-container\">
                <small class=\"label pull-right bg-yellow\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("spam");
        echo "\">
                        <i class=\"fa fa-edit\"></i> <span>Спам</span>
                        <span class=\"pull-right-container\">
               <small class=\"label pull-right bg-red\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("korzina");
        echo "\">
                        <i class=\"fa fa-folder\"></i> <span>Корзина</span>
                        <span class=\"pull-right-container\">
               <small class=\"label pull-right bg-gray\">2</small>
            </span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class=\"content-wrapper\">
        <div class=\"content\">
            ";
        // line 246
        $this->displayBlock('content', $context, $blocks);
        // line 248
        echo "        </div>
    </div>
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright 2018 <a href=\"https://adminlte.io\">MRK</a>.</strong>Все права защищены.
    </footer>
    <aside class=\"control-sidebar control-sidebar-dark\">
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Последние события</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Андрей день рождения</h4>

                                <p>Будет 2 Апреля </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Максим Марков обновил(а) свой профиль
                                </h4>

                                <p>Новый телефон +1 (800) 555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Ира присоединился к списку рассылки</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                        </a>
                    </li>
                </ul>
            </div>

            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">
                        Общие настройки</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Использование панели отчетов
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Некоторая информация об этом параметре общих настроек
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Разрешить перенаправление почты
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Доступны другие варианты
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Выводить имя автора в сообщениях
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Разрешить пользователю показывать свое имя в сообщениях в блоге
                        </p>
                    </div>
                    <h3 class=\"control-sidebar-heading\">Настройки чата</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Смотреть онлайн
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Выключить уведомления
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Удалить историю чата
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <div class=\"control-sidebar-bg\"></div>
</div>
";
        
        $__internal_f6bc8773f60359afc06d0b14f7dc193f0ddd3210624f0752dff92a2b4ee18535->leave($__internal_f6bc8773f60359afc06d0b14f7dc193f0ddd3210624f0752dff92a2b4ee18535_prof);

        
        $__internal_92e52fa9d84165ebc8a1f0ef72dc4a09b28429dd3cdc8bc8fab08ac9029cc05d->leave($__internal_92e52fa9d84165ebc8a1f0ef72dc4a09b28429dd3cdc8bc8fab08ac9029cc05d_prof);

    }

    // line 246
    public function block_content($context, array $blocks = array())
    {
        $__internal_9379a4e6c1ba59c8bab7135c63fcbdff0b31d0797595f9b33f857ea5f7f9ad96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9379a4e6c1ba59c8bab7135c63fcbdff0b31d0797595f9b33f857ea5f7f9ad96->enter($__internal_9379a4e6c1ba59c8bab7135c63fcbdff0b31d0797595f9b33f857ea5f7f9ad96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_018e02d6df0fc53411b2c70cd06292a10e17d75e589ed13f8e0706add0d46787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018e02d6df0fc53411b2c70cd06292a10e17d75e589ed13f8e0706add0d46787->enter($__internal_018e02d6df0fc53411b2c70cd06292a10e17d75e589ed13f8e0706add0d46787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 247
        echo "            ";
        
        $__internal_018e02d6df0fc53411b2c70cd06292a10e17d75e589ed13f8e0706add0d46787->leave($__internal_018e02d6df0fc53411b2c70cd06292a10e17d75e589ed13f8e0706add0d46787_prof);

        
        $__internal_9379a4e6c1ba59c8bab7135c63fcbdff0b31d0797595f9b33f857ea5f7f9ad96->leave($__internal_9379a4e6c1ba59c8bab7135c63fcbdff0b31d0797595f9b33f857ea5f7f9ad96_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 247,  489 => 246,  363 => 248,  361 => 246,  346 => 234,  335 => 226,  323 => 217,  311 => 208,  300 => 200,  289 => 192,  283 => 189,  262 => 171,  249 => 161,  218 => 133,  210 => 128,  159 => 80,  143 => 67,  127 => 54,  111 => 41,  95 => 28,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">У Вас есть 4 сообщения</li>
                            <li>
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{ asset('/img/user8-128x128.jpg') }}\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{ asset('/img/user3-128x128.jpg') }}\" class=\"img-circle\"
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
                                                <img src=\"{{ asset('/img/user4-128x128.jpg') }}\" class=\"img-circle\"
                                                     alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"{{ asset('/img/user5-128x128.jpg') }}\" class=\"img-circle\"
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
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
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
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">У вас есть 10 уведомлений</li>
                            <li>
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 новых членов присоединились сегодня
                                        </a>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> Добавленно 5 новых друзей
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> Вы изменили свое имя пользователя
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">Посмотреть все</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('/img/user1-128x128.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Александр Обжора</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"user-header\">
                                <img src=\"{{ asset('/img/user1-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                                <p>
                                    Александр Обжора
                                    <small>Зарегестрирован с 13 апреля 2018</small>
                                </p>
                            </li>
                            <li class=\"user-body\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Подпищики</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Друзья </a>
                                    </div>
                                </div>
                            </li>
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Мой профиль</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Выход</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
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
                    <img src=\"{{ asset('/img/user1-128x128.jpg') }}\" class=\"img-circle\" alt=\"User Image\"/>
                </div>
                <div class=\"pull-left info\">
                    <p>Алесандр Обжора</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Всети</a>
                </div>
            </div>
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                    <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <ul class=\"sidebar-menu\" data-widget=\"tree\">
                <li>
                    <a href=\"{{ url('compose') }}\" class=\"mail btn btn-primary btn-lg\">Написать</a>
                <li>
                <li>
                    <a href=\"{{ url('vsya_pochta') }}\">
                        <i class=\"fa fa-files-o\"></i>
                        <span>Входящие</span>
                        <span class=\"pull-right-container\">
              <span class=\"label label-primary pull-right\">4</span>
            </span>
                    </a>
                <li>
                    <a href=\"{{ url('mail_sent') }}\">
                        <i class=\"fa fa-th\"></i> <span>Отправленные</span>
                        <span class=\"pull-right-container\">
              <small class=\"label pull-right bg-green\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ url('chernoviki') }}\">
                        <i class=\"fa fa-pie-chart\"></i>
                        <span>Черновики</span>
                        <span class=\"pull-right-container\">
               <small class=\"label pull-right bg-blue\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ url('vsya_pochta') }}\">
                        <i class=\"fa fa-laptop\"></i>
                        <span>Вся почта</span>
                        <span class=\"pull-right-container\">
                <small class=\"label pull-right bg-yellow\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ url('spam') }}\">
                        <i class=\"fa fa-edit\"></i> <span>Спам</span>
                        <span class=\"pull-right-container\">
               <small class=\"label pull-right bg-red\">2</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href=\"{{ url('korzina') }}\">
                        <i class=\"fa fa-folder\"></i> <span>Корзина</span>
                        <span class=\"pull-right-container\">
               <small class=\"label pull-right bg-gray\">2</small>
            </span>
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
    <aside class=\"control-sidebar control-sidebar-dark\">
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Последние события</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Андрей день рождения</h4>

                                <p>Будет 2 Апреля </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Максим Марков обновил(а) свой профиль
                                </h4>

                                <p>Новый телефон +1 (800) 555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Ира присоединился к списку рассылки</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:void(0)\">
                        </a>
                    </li>
                </ul>
            </div>

            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">
                        Общие настройки</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Использование панели отчетов
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Некоторая информация об этом параметре общих настроек
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Разрешить перенаправление почты
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Доступны другие варианты
                        </p>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Выводить имя автора в сообщениях
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>

                        <p>
                            Разрешить пользователю показывать свое имя в сообщениях в блоге
                        </p>
                    </div>
                    <h3 class=\"control-sidebar-heading\">Настройки чата</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Смотреть онлайн
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Выключить уведомления
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Удалить историю чата
                            <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <div class=\"control-sidebar-bg\"></div>
</div>
{% endblock %}







", "::layout.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/layout.html.twig");
    }
}
