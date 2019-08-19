<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b74b532a34ac810c3949f9a8ca523565dd69c9b979ecf750318c25612b159c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e47f797c3f8a3a436c5889dd0ca7962a3a67f41093070625b2e294fef2043341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47f797c3f8a3a436c5889dd0ca7962a3a67f41093070625b2e294fef2043341->enter($__internal_e47f797c3f8a3a436c5889dd0ca7962a3a67f41093070625b2e294fef2043341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_63a71d9cdeb4db95490cdd98a0c7747ee033bd1d02a9eabff645c5c5d5093602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a71d9cdeb4db95490cdd98a0c7747ee033bd1d02a9eabff645c5c5d5093602->enter($__internal_63a71d9cdeb4db95490cdd98a0c7747ee033bd1d02a9eabff645c5c5d5093602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e47f797c3f8a3a436c5889dd0ca7962a3a67f41093070625b2e294fef2043341->leave($__internal_e47f797c3f8a3a436c5889dd0ca7962a3a67f41093070625b2e294fef2043341_prof);

        
        $__internal_63a71d9cdeb4db95490cdd98a0c7747ee033bd1d02a9eabff645c5c5d5093602->leave($__internal_63a71d9cdeb4db95490cdd98a0c7747ee033bd1d02a9eabff645c5c5d5093602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
