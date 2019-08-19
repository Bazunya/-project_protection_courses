<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_bb8afd2787e110b4e3306617e010a5187075033fae58256d54cd35af55e19d01 extends Twig_Template
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
        $__internal_7075e5c9ab339b055d09db117faff30b48a19cd2a23af173e716feb24df95f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7075e5c9ab339b055d09db117faff30b48a19cd2a23af173e716feb24df95f16->enter($__internal_7075e5c9ab339b055d09db117faff30b48a19cd2a23af173e716feb24df95f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1a074e133d07bf7c62c900c7ac1d81b9b6d97d0356bb7958b330851cea55c7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a074e133d07bf7c62c900c7ac1d81b9b6d97d0356bb7958b330851cea55c7da->enter($__internal_1a074e133d07bf7c62c900c7ac1d81b9b6d97d0356bb7958b330851cea55c7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7075e5c9ab339b055d09db117faff30b48a19cd2a23af173e716feb24df95f16->leave($__internal_7075e5c9ab339b055d09db117faff30b48a19cd2a23af173e716feb24df95f16_prof);

        
        $__internal_1a074e133d07bf7c62c900c7ac1d81b9b6d97d0356bb7958b330851cea55c7da->leave($__internal_1a074e133d07bf7c62c900c7ac1d81b9b6d97d0356bb7958b330851cea55c7da_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b790e7c4e41208ed3bcb027fb01e20fbd458c7fc8673aaa3d63cd2ac278e7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b790e7c4e41208ed3bcb027fb01e20fbd458c7fc8673aaa3d63cd2ac278e7b7->enter($__internal_9b790e7c4e41208ed3bcb027fb01e20fbd458c7fc8673aaa3d63cd2ac278e7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66808330867148f148612b9f7642b91b63429baef5964d7a62742672ae705556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66808330867148f148612b9f7642b91b63429baef5964d7a62742672ae705556->enter($__internal_66808330867148f148612b9f7642b91b63429baef5964d7a62742672ae705556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_66808330867148f148612b9f7642b91b63429baef5964d7a62742672ae705556->leave($__internal_66808330867148f148612b9f7642b91b63429baef5964d7a62742672ae705556_prof);

        
        $__internal_9b790e7c4e41208ed3bcb027fb01e20fbd458c7fc8673aaa3d63cd2ac278e7b7->leave($__internal_9b790e7c4e41208ed3bcb027fb01e20fbd458c7fc8673aaa3d63cd2ac278e7b7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c2390f77c8dbefff702bff7eef1eafd07299aaf6744b37fb15323ff76c4efc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2390f77c8dbefff702bff7eef1eafd07299aaf6744b37fb15323ff76c4efc8->enter($__internal_1c2390f77c8dbefff702bff7eef1eafd07299aaf6744b37fb15323ff76c4efc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4ab27c6e6d9b7e46756949446a240fa3075d0c502c987b92de292a404b91b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ab27c6e6d9b7e46756949446a240fa3075d0c502c987b92de292a404b91b65->enter($__internal_e4ab27c6e6d9b7e46756949446a240fa3075d0c502c987b92de292a404b91b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e4ab27c6e6d9b7e46756949446a240fa3075d0c502c987b92de292a404b91b65->leave($__internal_e4ab27c6e6d9b7e46756949446a240fa3075d0c502c987b92de292a404b91b65_prof);

        
        $__internal_1c2390f77c8dbefff702bff7eef1eafd07299aaf6744b37fb15323ff76c4efc8->leave($__internal_1c2390f77c8dbefff702bff7eef1eafd07299aaf6744b37fb15323ff76c4efc8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d248f93620bd330ecfd237db6965ea218748e7532fa8a6585325ed058de12aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d248f93620bd330ecfd237db6965ea218748e7532fa8a6585325ed058de12aa->enter($__internal_3d248f93620bd330ecfd237db6965ea218748e7532fa8a6585325ed058de12aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30732d25cb5c92ae82d7ab1cfb956c2e75b44ae94a13482a092c3148b73cfc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30732d25cb5c92ae82d7ab1cfb956c2e75b44ae94a13482a092c3148b73cfc25->enter($__internal_30732d25cb5c92ae82d7ab1cfb956c2e75b44ae94a13482a092c3148b73cfc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30732d25cb5c92ae82d7ab1cfb956c2e75b44ae94a13482a092c3148b73cfc25->leave($__internal_30732d25cb5c92ae82d7ab1cfb956c2e75b44ae94a13482a092c3148b73cfc25_prof);

        
        $__internal_3d248f93620bd330ecfd237db6965ea218748e7532fa8a6585325ed058de12aa->leave($__internal_3d248f93620bd330ecfd237db6965ea218748e7532fa8a6585325ed058de12aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
