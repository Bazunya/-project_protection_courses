<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9b380db57bac0cfb33a9cc6f3d070e209f365fc5a5e80d1d168c3be040288fef extends Twig_Template
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
        $__internal_c58246b418b8873c9b34e1c60f1425c6c35018246c7d4a154aeb64e72fe09223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58246b418b8873c9b34e1c60f1425c6c35018246c7d4a154aeb64e72fe09223->enter($__internal_c58246b418b8873c9b34e1c60f1425c6c35018246c7d4a154aeb64e72fe09223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9c7fb66f4c2a0a1f90fea443caa2f891298af144cf5f8e355d4135b7b5a2447c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7fb66f4c2a0a1f90fea443caa2f891298af144cf5f8e355d4135b7b5a2447c->enter($__internal_9c7fb66f4c2a0a1f90fea443caa2f891298af144cf5f8e355d4135b7b5a2447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c58246b418b8873c9b34e1c60f1425c6c35018246c7d4a154aeb64e72fe09223->leave($__internal_c58246b418b8873c9b34e1c60f1425c6c35018246c7d4a154aeb64e72fe09223_prof);

        
        $__internal_9c7fb66f4c2a0a1f90fea443caa2f891298af144cf5f8e355d4135b7b5a2447c->leave($__internal_9c7fb66f4c2a0a1f90fea443caa2f891298af144cf5f8e355d4135b7b5a2447c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
