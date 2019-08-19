<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5e014d49a22c4e542a73de72e498d13a9664bb3406432a0084673b9d1ae508db extends Twig_Template
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
        $__internal_2348f1ac32f751c4c258ac4efd6985f416ef4a6dba86eb7f7e7c96eff4312d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2348f1ac32f751c4c258ac4efd6985f416ef4a6dba86eb7f7e7c96eff4312d0b->enter($__internal_2348f1ac32f751c4c258ac4efd6985f416ef4a6dba86eb7f7e7c96eff4312d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a1bc518a9aa2fc4068a440163fd4f31d4ca52237721860da3004c4be4ca2529b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bc518a9aa2fc4068a440163fd4f31d4ca52237721860da3004c4be4ca2529b->enter($__internal_a1bc518a9aa2fc4068a440163fd4f31d4ca52237721860da3004c4be4ca2529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2348f1ac32f751c4c258ac4efd6985f416ef4a6dba86eb7f7e7c96eff4312d0b->leave($__internal_2348f1ac32f751c4c258ac4efd6985f416ef4a6dba86eb7f7e7c96eff4312d0b_prof);

        
        $__internal_a1bc518a9aa2fc4068a440163fd4f31d4ca52237721860da3004c4be4ca2529b->leave($__internal_a1bc518a9aa2fc4068a440163fd4f31d4ca52237721860da3004c4be4ca2529b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
