<?php

/* base.html.twig */
class __TwigTemplate_9bd972ce2da840a428e3d0032afde2b5be7b6a3f5bee0cbdf3b1d35b6a4136e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Title</title>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "    </body>
</html>

";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Smail.com";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo "<div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"left-panel col-xs-1 col-sm-1 col-md-2 col-lg-1  col-lg-2 \">
                    <div class=\"logo\">
                        <p><a href=\"base.html.twig\">Smail.com</a></p>
                    </div>
                </div>
                <div class=\"right-panel col-xs-11 col-sm-11 col-md-9 col-lg-10 col-lg-10 \">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                            Ваш профиль
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Редактировать профиль</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Выход</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"black-panel\">
                    </div>
                    <div class=\"gray-panel col-xs-11 col-sm-11 col-md-9 col-lg-10 col-lg-10\">
                        <div class=\"search\">
                            <div id=\"imaginary_container\">
                                <div class=\"input-group stylish-input-group\">
                                    <input type=\"text\" class=\"form-control\"  placeholder=\"Search\" >
                                    <span class=\"input-group-addon\">
                        <button type=\"submit\">
                            <span class=\"glyphicon glyphicon-search\"></span>
                        </button>
                    </span>
                                </div>
                            </div>
                        </div>
                        <div class=\"listing\">
                            <button type=\"button\" class=\"btn  custom-but\">
                                <i class=\"glyphicon glyphicon-chevron-left\" ></i></button>
                            <button type=\"button\" class=\"btn  custom-butt\">
                                <i class=\"glyphicon glyphicon-chevron-right\" ></i></button>
                        </div>
                        <div class=\" dropdown-setting\">
                            <div class=\"butt-set\">
                                <button class=\"btn btn-default dropdown-toggle btn btn-medium \" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                                    <i class=\"glyphicon glyphicon-cog\" ></i>
                                    Настройки
                                    <span class=\"caret\"></span>
                                </button>
                                <ul class=\"dropdown-menu custom-menu\" aria-labelledby=\"dropdownMenu1\">
                                    Интерфейс:
                                    <li><a href=\"#\">Просторный(для больших дисплеев)</a></li>
                                    <li><a href=\"#\">Обычный(текущий режим просмотра)</a></li>
                                    <li><a href=\"#\">Компактный</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Настройки</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Темы</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Справка</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"panel panel-default custom-panel\">
                        <button type=\"button\" class=\"btn  custom-button\">НАПИСАТЬ</button>
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item\">Входящие <span class=\"badge\">22</span></a>
                            <a href=\"#\" class=\"list-group-item\">Отправленные <span class=\"badge\">24</span></a>
                            <a href=\"#\" class=\"list-group-item\">Черновики <span class=\"badge\">17</span></a>
                            <a href=\"#\" class=\"list-group-item\">Вся почта <span class=\"badge\">1</span></a>
                            <a href=\"#\" class=\"list-group-item\">Спам <span class=\"badge\">1</span></a>
                            <a href=\"#\" class=\"list-group-item\">Корзина <span class=\"badge\">1</span></a>
                        </div>
                    </div>
                </div>
            </div>";
    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        // line 100
        echo "            <script src=\"http://code.jquery.com/jquery.min.js\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  173 => 102,  169 => 101,  166 => 100,  163 => 99,  73 => 14,  67 => 10,  62 => 9,  59 => 8,  53 => 7,  46 => 104,  43 => 99,  41 => 14,  37 => 12,  35 => 8,  31 => 7,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\base.html.twig");
    }
}
