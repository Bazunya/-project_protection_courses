<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7ab5098c7bc3a85e8205e6720abe3f1306a3f5d8f87c5ea6724883addc2eb7df extends Twig_Template
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
        $__internal_d7b876d6640e7d3f5453b0b182beedc8432ce58f763c208338dd76b00f403dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b876d6640e7d3f5453b0b182beedc8432ce58f763c208338dd76b00f403dd1->enter($__internal_d7b876d6640e7d3f5453b0b182beedc8432ce58f763c208338dd76b00f403dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_24b5e21974ab19a389f154649ffb2726bc55fb54235112ee7b4c93f39b6e7740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b5e21974ab19a389f154649ffb2726bc55fb54235112ee7b4c93f39b6e7740->enter($__internal_24b5e21974ab19a389f154649ffb2726bc55fb54235112ee7b4c93f39b6e7740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d7b876d6640e7d3f5453b0b182beedc8432ce58f763c208338dd76b00f403dd1->leave($__internal_d7b876d6640e7d3f5453b0b182beedc8432ce58f763c208338dd76b00f403dd1_prof);

        
        $__internal_24b5e21974ab19a389f154649ffb2726bc55fb54235112ee7b4c93f39b6e7740->leave($__internal_24b5e21974ab19a389f154649ffb2726bc55fb54235112ee7b4c93f39b6e7740_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
