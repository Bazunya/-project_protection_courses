<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a70a1af3332270b28151b75ef55324d951ca62c3f41c65041e355151631bc7be extends Twig_Template
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
        $__internal_6ce8177cb1e20f6f7140a99585ade2d2ef0d2f48f6d5e6840dc3eda0f6a6427d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce8177cb1e20f6f7140a99585ade2d2ef0d2f48f6d5e6840dc3eda0f6a6427d->enter($__internal_6ce8177cb1e20f6f7140a99585ade2d2ef0d2f48f6d5e6840dc3eda0f6a6427d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d530ee10be01bdcfcca26cd70141da50a906dd12c246fbc5accf5e04364f28b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d530ee10be01bdcfcca26cd70141da50a906dd12c246fbc5accf5e04364f28b5->enter($__internal_d530ee10be01bdcfcca26cd70141da50a906dd12c246fbc5accf5e04364f28b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6ce8177cb1e20f6f7140a99585ade2d2ef0d2f48f6d5e6840dc3eda0f6a6427d->leave($__internal_6ce8177cb1e20f6f7140a99585ade2d2ef0d2f48f6d5e6840dc3eda0f6a6427d_prof);

        
        $__internal_d530ee10be01bdcfcca26cd70141da50a906dd12c246fbc5accf5e04364f28b5->leave($__internal_d530ee10be01bdcfcca26cd70141da50a906dd12c246fbc5accf5e04364f28b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
