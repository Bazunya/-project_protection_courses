<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_b49b09150cb62f2c9fbdb473ef02d4fa891096a3b71ab3f46b766e1249b423c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_773aae2ec39ad480c02087cad117b90a57bc1f97c71cb1454e45824cb14d619a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773aae2ec39ad480c02087cad117b90a57bc1f97c71cb1454e45824cb14d619a->enter($__internal_773aae2ec39ad480c02087cad117b90a57bc1f97c71cb1454e45824cb14d619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_e29dfe32be1489fbd8272dae370f72270e50e6019580beab6af439dc71591e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29dfe32be1489fbd8272dae370f72270e50e6019580beab6af439dc71591e56->enter($__internal_e29dfe32be1489fbd8272dae370f72270e50e6019580beab6af439dc71591e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_773aae2ec39ad480c02087cad117b90a57bc1f97c71cb1454e45824cb14d619a->leave($__internal_773aae2ec39ad480c02087cad117b90a57bc1f97c71cb1454e45824cb14d619a_prof);

        
        $__internal_e29dfe32be1489fbd8272dae370f72270e50e6019580beab6af439dc71591e56->leave($__internal_e29dfe32be1489fbd8272dae370f72270e50e6019580beab6af439dc71591e56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bfde12447d2ddd0df0b244f6f7ad164ee6ced8a4f0982f2d1115e1478fb8d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bfde12447d2ddd0df0b244f6f7ad164ee6ced8a4f0982f2d1115e1478fb8d01->enter($__internal_4bfde12447d2ddd0df0b244f6f7ad164ee6ced8a4f0982f2d1115e1478fb8d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d41104a625934bee5b8be03b62e856bac8c2e105be1b16ea734d951106aae46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d41104a625934bee5b8be03b62e856bac8c2e105be1b16ea734d951106aae46->enter($__internal_4d41104a625934bee5b8be03b62e856bac8c2e105be1b16ea734d951106aae46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4d41104a625934bee5b8be03b62e856bac8c2e105be1b16ea734d951106aae46->leave($__internal_4d41104a625934bee5b8be03b62e856bac8c2e105be1b16ea734d951106aae46_prof);

        
        $__internal_4bfde12447d2ddd0df0b244f6f7ad164ee6ced8a4f0982f2d1115e1478fb8d01->leave($__internal_4bfde12447d2ddd0df0b244f6f7ad164ee6ced8a4f0982f2d1115e1478fb8d01_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec48bcd6d1da82e88077b4d73a09b4647211d1e1700a02362744df0cef4929ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec48bcd6d1da82e88077b4d73a09b4647211d1e1700a02362744df0cef4929ee->enter($__internal_ec48bcd6d1da82e88077b4d73a09b4647211d1e1700a02362744df0cef4929ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b44f6fcba774106465511ffd86e605bd5025715293befbc603cda787d4101163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44f6fcba774106465511ffd86e605bd5025715293befbc603cda787d4101163->enter($__internal_b44f6fcba774106465511ffd86e605bd5025715293befbc603cda787d4101163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b44f6fcba774106465511ffd86e605bd5025715293befbc603cda787d4101163->leave($__internal_b44f6fcba774106465511ffd86e605bd5025715293befbc603cda787d4101163_prof);

        
        $__internal_ec48bcd6d1da82e88077b4d73a09b4647211d1e1700a02362744df0cef4929ee->leave($__internal_ec48bcd6d1da82e88077b4d73a09b4647211d1e1700a02362744df0cef4929ee_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc17b777035978028753ea3b1f9b537e0d4ccf794bc1fee5a06bab2df172db3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc17b777035978028753ea3b1f9b537e0d4ccf794bc1fee5a06bab2df172db3e->enter($__internal_bc17b777035978028753ea3b1f9b537e0d4ccf794bc1fee5a06bab2df172db3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ca79188aac8d05003d979bef6174d1a82016821ced141e72aac562798119c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca79188aac8d05003d979bef6174d1a82016821ced141e72aac562798119c66->enter($__internal_5ca79188aac8d05003d979bef6174d1a82016821ced141e72aac562798119c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ca79188aac8d05003d979bef6174d1a82016821ced141e72aac562798119c66->leave($__internal_5ca79188aac8d05003d979bef6174d1a82016821ced141e72aac562798119c66_prof);

        
        $__internal_bc17b777035978028753ea3b1f9b537e0d4ccf794bc1fee5a06bab2df172db3e->leave($__internal_bc17b777035978028753ea3b1f9b537e0d4ccf794bc1fee5a06bab2df172db3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
