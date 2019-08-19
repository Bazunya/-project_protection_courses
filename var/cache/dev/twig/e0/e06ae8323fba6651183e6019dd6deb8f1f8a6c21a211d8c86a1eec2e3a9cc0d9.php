<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_feee55e0468ded255d23ba0be7644fb341f35261baebab533db395fe531a5cb0 extends Twig_Template
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
        $__internal_c9b3a0968f56b7a556ac835cba39c935fc32ee8cbcf3196858796c287bf67e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b3a0968f56b7a556ac835cba39c935fc32ee8cbcf3196858796c287bf67e89->enter($__internal_c9b3a0968f56b7a556ac835cba39c935fc32ee8cbcf3196858796c287bf67e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b432625659730c24d25eb9adb76e719dfe7ae426b12f85f89a9581fca6bcc4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b432625659730c24d25eb9adb76e719dfe7ae426b12f85f89a9581fca6bcc4c5->enter($__internal_b432625659730c24d25eb9adb76e719dfe7ae426b12f85f89a9581fca6bcc4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c9b3a0968f56b7a556ac835cba39c935fc32ee8cbcf3196858796c287bf67e89->leave($__internal_c9b3a0968f56b7a556ac835cba39c935fc32ee8cbcf3196858796c287bf67e89_prof);

        
        $__internal_b432625659730c24d25eb9adb76e719dfe7ae426b12f85f89a9581fca6bcc4c5->leave($__internal_b432625659730c24d25eb9adb76e719dfe7ae426b12f85f89a9581fca6bcc4c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
