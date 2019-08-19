<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b2c4805605b2adc317fea08c2bdb3fcf6bb4ff510a1f441f70106329a1342941 extends Twig_Template
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
        $__internal_cf37b5f49d381e68b9190c3fa64cb9221db0ceee4810226d9b4c0a6f18f0b35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf37b5f49d381e68b9190c3fa64cb9221db0ceee4810226d9b4c0a6f18f0b35b->enter($__internal_cf37b5f49d381e68b9190c3fa64cb9221db0ceee4810226d9b4c0a6f18f0b35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_14e53be662dee73ac750374593398ad5eee938fd93424e546f080b7d07d02131 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e53be662dee73ac750374593398ad5eee938fd93424e546f080b7d07d02131->enter($__internal_14e53be662dee73ac750374593398ad5eee938fd93424e546f080b7d07d02131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cf37b5f49d381e68b9190c3fa64cb9221db0ceee4810226d9b4c0a6f18f0b35b->leave($__internal_cf37b5f49d381e68b9190c3fa64cb9221db0ceee4810226d9b4c0a6f18f0b35b_prof);

        
        $__internal_14e53be662dee73ac750374593398ad5eee938fd93424e546f080b7d07d02131->leave($__internal_14e53be662dee73ac750374593398ad5eee938fd93424e546f080b7d07d02131_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
