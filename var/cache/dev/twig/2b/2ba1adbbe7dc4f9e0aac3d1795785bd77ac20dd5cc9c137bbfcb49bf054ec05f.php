<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e9fbcb1aa7a940adbe422bc37509a444e3418891af4f75a30e79892c9198a548 extends Twig_Template
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
        $__internal_c5f586d9b85e194354f7aae1d28af321b81710a097314c9c7c29f167f1cb68bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f586d9b85e194354f7aae1d28af321b81710a097314c9c7c29f167f1cb68bd->enter($__internal_c5f586d9b85e194354f7aae1d28af321b81710a097314c9c7c29f167f1cb68bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e37c2180f039535d694a1f1ff8cb6bfa9a8a793c212cc28862ab75d8197c1d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37c2180f039535d694a1f1ff8cb6bfa9a8a793c212cc28862ab75d8197c1d17->enter($__internal_e37c2180f039535d694a1f1ff8cb6bfa9a8a793c212cc28862ab75d8197c1d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c5f586d9b85e194354f7aae1d28af321b81710a097314c9c7c29f167f1cb68bd->leave($__internal_c5f586d9b85e194354f7aae1d28af321b81710a097314c9c7c29f167f1cb68bd_prof);

        
        $__internal_e37c2180f039535d694a1f1ff8cb6bfa9a8a793c212cc28862ab75d8197c1d17->leave($__internal_e37c2180f039535d694a1f1ff8cb6bfa9a8a793c212cc28862ab75d8197c1d17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
