<?php

/* default/index.html.twig */
class __TwigTemplate_76ba5b45dc1f922adb775602794415ca94031f5c0a7c9dac7fe97b11539cf0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<body>
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "</body>
";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</html>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/avtorizaciya.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"forms\">
                <div class=\" col-xs-12 col-sm-6 col-lg-6\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">
                                @Smail.com</h3>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-6 col-md-6 login-box\">
                                    <form role=\"form\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                            <input type=\"text\" class=\"form-control\" placeholder=\"Имя пользователя\" required autofocus />
                                        </div>
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-lock\"></span></span>
                                            <input type=\"password\" class=\"form-control\" placeholder=\"Ваш пароль\" required />
                                        </div>
                                        <p id=\"pas\">
                                            <a href=\"#\">Забыли свой пароль?</a></p>
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" value=\"Remember\">
                                                Запомнить меня
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-6\">
                            <div class=\"vhod\">
                                <button type=\"button\" class=\" btn btn-labeled btn-success\">
                                    <span>Войти</span></button>
                            </div>
                        </div>
                        <div class=\"panel-footer\">
                            <div class=\"col-xs-12 col-sm-6 col-md-6\">
                                <div class=\"rege\">
                                    <button type=\"button\" class=\"btn btn-labeled btn-success\">
                                        Регистрация  ящика</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "    <script src=\"http://code.jquery.com/jquery.min.js\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 70,  126 => 69,  123 => 68,  120 => 67,  63 => 12,  60 => 11,  54 => 7,  49 => 6,  46 => 5,  41 => 72,  39 => 67,  36 => 66,  34 => 11,  30 => 9,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\index.html.twig");
    }
}
