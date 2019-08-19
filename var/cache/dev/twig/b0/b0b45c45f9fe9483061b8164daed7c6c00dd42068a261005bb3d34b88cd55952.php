<?php

/* default/registraciya.html.twig */
class __TwigTemplate_02d4c48efcda4cbf1d6ed7445dbe198dec169274450844cb7647d6935d56b986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/registraciya.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb1dccefce19be492f0665a512bf8155278b9f68b95f3f3b3a0fed8b3671bb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1dccefce19be492f0665a512bf8155278b9f68b95f3f3b3a0fed8b3671bb04->enter($__internal_fb1dccefce19be492f0665a512bf8155278b9f68b95f3f3b3a0fed8b3671bb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/registraciya.html.twig"));

        $__internal_521375d4d292542d01694a8d64ba28da6d866a3e982b7fbf9372432c7a193744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521375d4d292542d01694a8d64ba28da6d866a3e982b7fbf9372432c7a193744->enter($__internal_521375d4d292542d01694a8d64ba28da6d866a3e982b7fbf9372432c7a193744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/registraciya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1dccefce19be492f0665a512bf8155278b9f68b95f3f3b3a0fed8b3671bb04->leave($__internal_fb1dccefce19be492f0665a512bf8155278b9f68b95f3f3b3a0fed8b3671bb04_prof);

        
        $__internal_521375d4d292542d01694a8d64ba28da6d866a3e982b7fbf9372432c7a193744->leave($__internal_521375d4d292542d01694a8d64ba28da6d866a3e982b7fbf9372432c7a193744_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c039e75c46e0333d7d7a9e2b715b0acc391566956d2297616a928670c495c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c039e75c46e0333d7d7a9e2b715b0acc391566956d2297616a928670c495c30->enter($__internal_8c039e75c46e0333d7d7a9e2b715b0acc391566956d2297616a928670c495c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_496c81da4d819dcfeb0cc8c27863c7e8382edcb6a6ed7949554e9b36baeaf8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496c81da4d819dcfeb0cc8c27863c7e8382edcb6a6ed7949554e9b36baeaf8bb->enter($__internal_496c81da4d819dcfeb0cc8c27863c7e8382edcb6a6ed7949554e9b36baeaf8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body>
    <div class=\"top-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2 text\">
                    <h1 class=\"wow fadeInLeftBig\">Регистрация</h1>
                    <div class=\"description wow fadeInLeftBig\">
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp\">
                    <div class=\"r-form-1-top\">
                        <div class=\"r-form-1-top-left\">
                        </div>
                        <div class=\"r-form-1-top-right\">

                        </div>
                    </div>
                    <div class=\"r-form-1-bottom\">
                        <form role=\"form\" action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-first-name\">First name</label>
                                <input type=\"text\" name=\"r-form-1-first-name\" placeholder=\"Имя\" class=\"r-form-1-first-name form-control\" id=\"r-form-1-first-name\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-last-name\">Last name</label>
                                <input type=\"text\" name=\"r-form-1-last-name\" placeholder=\"Фамилия\" class=\"r-form-1-last-name form-control\" id=\"r-form-1-last-name\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-email\">pass</label>
                                <input type=\"text\" name=\"r-form-1-email\" placeholder=\"Пароль\" class=\"r-form-1-email form-control\" id=\"r-form-1-email\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-email\">pass</label>
                                <input type=\"text\" name=\"r-form-1-email\" placeholder=\"Желаемый почтовый ящик\" class=\"r-form-1-email form-control\" id=\"r-form-1-email\">
                            </div>
                            <button type=\"submit\" class=\"btn\">Зарегестрироваться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
";
        
        $__internal_496c81da4d819dcfeb0cc8c27863c7e8382edcb6a6ed7949554e9b36baeaf8bb->leave($__internal_496c81da4d819dcfeb0cc8c27863c7e8382edcb6a6ed7949554e9b36baeaf8bb_prof);

        
        $__internal_8c039e75c46e0333d7d7a9e2b715b0acc391566956d2297616a928670c495c30->leave($__internal_8c039e75c46e0333d7d7a9e2b715b0acc391566956d2297616a928670c495c30_prof);

    }

    public function getTemplateName()
    {
        return "default/registraciya.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig'%}
{% block body %}
    <body>
    <div class=\"top-content\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2 text\">
                    <h1 class=\"wow fadeInLeftBig\">Регистрация</h1>
                    <div class=\"description wow fadeInLeftBig\">
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp\">
                    <div class=\"r-form-1-top\">
                        <div class=\"r-form-1-top-left\">
                        </div>
                        <div class=\"r-form-1-top-right\">

                        </div>
                    </div>
                    <div class=\"r-form-1-bottom\">
                        <form role=\"form\" action=\"\" method=\"post\">
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-first-name\">First name</label>
                                <input type=\"text\" name=\"r-form-1-first-name\" placeholder=\"Имя\" class=\"r-form-1-first-name form-control\" id=\"r-form-1-first-name\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-last-name\">Last name</label>
                                <input type=\"text\" name=\"r-form-1-last-name\" placeholder=\"Фамилия\" class=\"r-form-1-last-name form-control\" id=\"r-form-1-last-name\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-email\">pass</label>
                                <input type=\"text\" name=\"r-form-1-email\" placeholder=\"Пароль\" class=\"r-form-1-email form-control\" id=\"r-form-1-email\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"sr-only\" for=\"r-form-1-email\">pass</label>
                                <input type=\"text\" name=\"r-form-1-email\" placeholder=\"Желаемый почтовый ящик\" class=\"r-form-1-email form-control\" id=\"r-form-1-email\">
                            </div>
                            <button type=\"submit\" class=\"btn\">Зарегестрироваться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
{% endblock %}
", "default/registraciya.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\registraciya.html.twig");
    }
}
