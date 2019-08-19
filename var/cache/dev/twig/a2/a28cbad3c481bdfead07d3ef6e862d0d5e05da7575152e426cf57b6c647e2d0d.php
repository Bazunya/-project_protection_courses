<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_09b5bc60bf1c81536eea2997011c34f3cdc4ed281a5ba9865d2143af8d66a847 extends Twig_Template
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
        $__internal_9123b5c5ec622cc093bf6e0811a019638d5dbde5a7181f6a7924b3836cb5306a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9123b5c5ec622cc093bf6e0811a019638d5dbde5a7181f6a7924b3836cb5306a->enter($__internal_9123b5c5ec622cc093bf6e0811a019638d5dbde5a7181f6a7924b3836cb5306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_772db15b4c808ac743b3d9b92d7bab492abae85fc1082dccd013bb82a3290ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772db15b4c808ac743b3d9b92d7bab492abae85fc1082dccd013bb82a3290ef3->enter($__internal_772db15b4c808ac743b3d9b92d7bab492abae85fc1082dccd013bb82a3290ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9123b5c5ec622cc093bf6e0811a019638d5dbde5a7181f6a7924b3836cb5306a->leave($__internal_9123b5c5ec622cc093bf6e0811a019638d5dbde5a7181f6a7924b3836cb5306a_prof);

        
        $__internal_772db15b4c808ac743b3d9b92d7bab492abae85fc1082dccd013bb82a3290ef3->leave($__internal_772db15b4c808ac743b3d9b92d7bab492abae85fc1082dccd013bb82a3290ef3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
