<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6e1eeb3da60693b856ce9cfb10f6e8418f66b929cfae6dc24435f19ffda81cf0 extends Twig_Template
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
        $__internal_b9e67965bfc025c3eb7cb50223d4549073dad5f9697be3ea1fa75a3531dc8f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e67965bfc025c3eb7cb50223d4549073dad5f9697be3ea1fa75a3531dc8f9c->enter($__internal_b9e67965bfc025c3eb7cb50223d4549073dad5f9697be3ea1fa75a3531dc8f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_13d0fdefe0752c51a933108164f20e8f63b44d35e751a8b4955037b4807675d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d0fdefe0752c51a933108164f20e8f63b44d35e751a8b4955037b4807675d6->enter($__internal_13d0fdefe0752c51a933108164f20e8f63b44d35e751a8b4955037b4807675d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_b9e67965bfc025c3eb7cb50223d4549073dad5f9697be3ea1fa75a3531dc8f9c->leave($__internal_b9e67965bfc025c3eb7cb50223d4549073dad5f9697be3ea1fa75a3531dc8f9c_prof);

        
        $__internal_13d0fdefe0752c51a933108164f20e8f63b44d35e751a8b4955037b4807675d6->leave($__internal_13d0fdefe0752c51a933108164f20e8f63b44d35e751a8b4955037b4807675d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
