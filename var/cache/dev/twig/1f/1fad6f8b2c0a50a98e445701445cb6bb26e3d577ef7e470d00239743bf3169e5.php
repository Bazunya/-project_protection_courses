<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8fa3623f35bfd8ce0ef4b814528dc590e140c55ffbf6ace23ec82b168f713dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2e83b86345b60dfba27d19e66656d7751b64845fda1dfdaca86fc4b6354f47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e83b86345b60dfba27d19e66656d7751b64845fda1dfdaca86fc4b6354f47d->enter($__internal_a2e83b86345b60dfba27d19e66656d7751b64845fda1dfdaca86fc4b6354f47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1484fe2b1f8f19309dcf0bd625f6bd98d635a40f953c8f61062020dc06425712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1484fe2b1f8f19309dcf0bd625f6bd98d635a40f953c8f61062020dc06425712->enter($__internal_1484fe2b1f8f19309dcf0bd625f6bd98d635a40f953c8f61062020dc06425712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e83b86345b60dfba27d19e66656d7751b64845fda1dfdaca86fc4b6354f47d->leave($__internal_a2e83b86345b60dfba27d19e66656d7751b64845fda1dfdaca86fc4b6354f47d_prof);

        
        $__internal_1484fe2b1f8f19309dcf0bd625f6bd98d635a40f953c8f61062020dc06425712->leave($__internal_1484fe2b1f8f19309dcf0bd625f6bd98d635a40f953c8f61062020dc06425712_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0039bb33ba2b52b8c17d1d47fa901be4c49e17df40a254d443c67feaf9e0999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0039bb33ba2b52b8c17d1d47fa901be4c49e17df40a254d443c67feaf9e0999->enter($__internal_d0039bb33ba2b52b8c17d1d47fa901be4c49e17df40a254d443c67feaf9e0999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c77c7bd6d98b5a9169e1e49567ed64288998b0b4b93d068b1e9fdda342f426fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77c7bd6d98b5a9169e1e49567ed64288998b0b4b93d068b1e9fdda342f426fc->enter($__internal_c77c7bd6d98b5a9169e1e49567ed64288998b0b4b93d068b1e9fdda342f426fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c77c7bd6d98b5a9169e1e49567ed64288998b0b4b93d068b1e9fdda342f426fc->leave($__internal_c77c7bd6d98b5a9169e1e49567ed64288998b0b4b93d068b1e9fdda342f426fc_prof);

        
        $__internal_d0039bb33ba2b52b8c17d1d47fa901be4c49e17df40a254d443c67feaf9e0999->leave($__internal_d0039bb33ba2b52b8c17d1d47fa901be4c49e17df40a254d443c67feaf9e0999_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_32b32ff3c70389335bf638508f9ff4f221c692a75b29f65cbf29b97acebf2240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b32ff3c70389335bf638508f9ff4f221c692a75b29f65cbf29b97acebf2240->enter($__internal_32b32ff3c70389335bf638508f9ff4f221c692a75b29f65cbf29b97acebf2240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ff4a777e3bc5888a69c0311ad80767c606cf8f604c29a629a1c33500b025e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff4a777e3bc5888a69c0311ad80767c606cf8f604c29a629a1c33500b025e73->enter($__internal_8ff4a777e3bc5888a69c0311ad80767c606cf8f604c29a629a1c33500b025e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8ff4a777e3bc5888a69c0311ad80767c606cf8f604c29a629a1c33500b025e73->leave($__internal_8ff4a777e3bc5888a69c0311ad80767c606cf8f604c29a629a1c33500b025e73_prof);

        
        $__internal_32b32ff3c70389335bf638508f9ff4f221c692a75b29f65cbf29b97acebf2240->leave($__internal_32b32ff3c70389335bf638508f9ff4f221c692a75b29f65cbf29b97acebf2240_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e99ab8a5537f25a4a5504d7852f8bbfc40d7a3e6ecc4d8809be5f6aba7f802a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e99ab8a5537f25a4a5504d7852f8bbfc40d7a3e6ecc4d8809be5f6aba7f802a->enter($__internal_4e99ab8a5537f25a4a5504d7852f8bbfc40d7a3e6ecc4d8809be5f6aba7f802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_693594450afb6ccf1a0e1e54d6dc6b9d95036ee534081be31fe2321c592c156a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693594450afb6ccf1a0e1e54d6dc6b9d95036ee534081be31fe2321c592c156a->enter($__internal_693594450afb6ccf1a0e1e54d6dc6b9d95036ee534081be31fe2321c592c156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_693594450afb6ccf1a0e1e54d6dc6b9d95036ee534081be31fe2321c592c156a->leave($__internal_693594450afb6ccf1a0e1e54d6dc6b9d95036ee534081be31fe2321c592c156a_prof);

        
        $__internal_4e99ab8a5537f25a4a5504d7852f8bbfc40d7a3e6ecc4d8809be5f6aba7f802a->leave($__internal_4e99ab8a5537f25a4a5504d7852f8bbfc40d7a3e6ecc4d8809be5f6aba7f802a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
