<?php

/* layout.html.twig */
class __TwigTemplate_007d8c05ac00ff77a3369f50a72056cab8e3458e2fac8e971704c5a7a1ee8c56 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Smail.com";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"left-panel col-xs-1 col-sm-1 col-md-2 col-lg-1  col-lg-2 \">
                <div class=\"logo\">
                    <p><a href=\"\">Smail.com</a></p>
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
    </div>
";
    }

    // line 92
    public function block_content($context, array $blocks = array())
    {
        // line 93
        echo "
  ";
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
        return array (  131 => 93,  128 => 92,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
