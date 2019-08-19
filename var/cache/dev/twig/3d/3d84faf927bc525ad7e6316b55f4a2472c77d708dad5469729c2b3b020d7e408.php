<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_81d54c0bb99e72dd43f5877fb16b1f443708a1fe64ee8eb19bd38f52aa8726dc extends Twig_Template
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
        $__internal_d8bebe744f7635f8d8972e92952f32ab696fbfab948802aeaa249bd3c7b111ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bebe744f7635f8d8972e92952f32ab696fbfab948802aeaa249bd3c7b111ec->enter($__internal_d8bebe744f7635f8d8972e92952f32ab696fbfab948802aeaa249bd3c7b111ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_a2b81193d305fbb3a8dddfe674cde68b0c6a6531c3137c41cf3998593982b54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b81193d305fbb3a8dddfe674cde68b0c6a6531c3137c41cf3998593982b54d->enter($__internal_a2b81193d305fbb3a8dddfe674cde68b0c6a6531c3137c41cf3998593982b54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d8bebe744f7635f8d8972e92952f32ab696fbfab948802aeaa249bd3c7b111ec->leave($__internal_d8bebe744f7635f8d8972e92952f32ab696fbfab948802aeaa249bd3c7b111ec_prof);

        
        $__internal_a2b81193d305fbb3a8dddfe674cde68b0c6a6531c3137c41cf3998593982b54d->leave($__internal_a2b81193d305fbb3a8dddfe674cde68b0c6a6531c3137c41cf3998593982b54d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
