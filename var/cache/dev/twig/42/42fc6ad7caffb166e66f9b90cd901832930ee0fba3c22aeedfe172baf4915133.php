<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_def964f84eace8512d87cfb0414dffc7e8495a4dfc8dacc22a0446a6218f5c06 extends Twig_Template
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
        $__internal_2535cb39fdd42671364118cf0d43a38ea09012576de49c2b101ba7bb6a8f9973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2535cb39fdd42671364118cf0d43a38ea09012576de49c2b101ba7bb6a8f9973->enter($__internal_2535cb39fdd42671364118cf0d43a38ea09012576de49c2b101ba7bb6a8f9973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e7f8408b791ea87d6be6d22886abf5ee5d044e35c4f3bfdde2b98ec5a53a686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7f8408b791ea87d6be6d22886abf5ee5d044e35c4f3bfdde2b98ec5a53a686->enter($__internal_5e7f8408b791ea87d6be6d22886abf5ee5d044e35c4f3bfdde2b98ec5a53a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2535cb39fdd42671364118cf0d43a38ea09012576de49c2b101ba7bb6a8f9973->leave($__internal_2535cb39fdd42671364118cf0d43a38ea09012576de49c2b101ba7bb6a8f9973_prof);

        
        $__internal_5e7f8408b791ea87d6be6d22886abf5ee5d044e35c4f3bfdde2b98ec5a53a686->leave($__internal_5e7f8408b791ea87d6be6d22886abf5ee5d044e35c4f3bfdde2b98ec5a53a686_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
