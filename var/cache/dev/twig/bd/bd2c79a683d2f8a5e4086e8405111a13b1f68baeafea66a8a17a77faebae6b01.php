<?php

/* :default:registraciya.html.twig */
class __TwigTemplate_bc146791212a3b18b737bb09b2209aeb2497ea2246e8d3f909470d9419fb2e50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:registraciya.html.twig", 1);
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
        $__internal_ea6be49ba8182234e3bcbbd40d818b2acbf6b35b7e1126bacf7320d223f6815e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6be49ba8182234e3bcbbd40d818b2acbf6b35b7e1126bacf7320d223f6815e->enter($__internal_ea6be49ba8182234e3bcbbd40d818b2acbf6b35b7e1126bacf7320d223f6815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:registraciya.html.twig"));

        $__internal_6964ec056a834f164337a9a5289ed682e4ef3036b1c8f901146b5bb19efcd5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6964ec056a834f164337a9a5289ed682e4ef3036b1c8f901146b5bb19efcd5e4->enter($__internal_6964ec056a834f164337a9a5289ed682e4ef3036b1c8f901146b5bb19efcd5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:registraciya.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6be49ba8182234e3bcbbd40d818b2acbf6b35b7e1126bacf7320d223f6815e->leave($__internal_ea6be49ba8182234e3bcbbd40d818b2acbf6b35b7e1126bacf7320d223f6815e_prof);

        
        $__internal_6964ec056a834f164337a9a5289ed682e4ef3036b1c8f901146b5bb19efcd5e4->leave($__internal_6964ec056a834f164337a9a5289ed682e4ef3036b1c8f901146b5bb19efcd5e4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c533a77b2db8cd945fde86802127bc20576dabccbea6d49a44a2d1bda98de0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c533a77b2db8cd945fde86802127bc20576dabccbea6d49a44a2d1bda98de0a->enter($__internal_6c533a77b2db8cd945fde86802127bc20576dabccbea6d49a44a2d1bda98de0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93abbe03617b4cd020280da2ca348511adf94b18fbf4135823660e7cf5bdf7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93abbe03617b4cd020280da2ca348511adf94b18fbf4135823660e7cf5bdf7d4->enter($__internal_93abbe03617b4cd020280da2ca348511adf94b18fbf4135823660e7cf5bdf7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93abbe03617b4cd020280da2ca348511adf94b18fbf4135823660e7cf5bdf7d4->leave($__internal_93abbe03617b4cd020280da2ca348511adf94b18fbf4135823660e7cf5bdf7d4_prof);

        
        $__internal_6c533a77b2db8cd945fde86802127bc20576dabccbea6d49a44a2d1bda98de0a->leave($__internal_6c533a77b2db8cd945fde86802127bc20576dabccbea6d49a44a2d1bda98de0a_prof);

    }

    public function getTemplateName()
    {
        return ":default:registraciya.html.twig";
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
", ":default:registraciya.html.twig", "C:\\wamp64\\www\\symfony\\app/Resources\\views/default/registraciya.html.twig");
    }
}
