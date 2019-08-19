<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e9e7c1448826cb605f630e2ae38679efad07b78213bccaf753b118826b7b0d49 extends Twig_Template
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
        $__internal_bc75a25c7cd51dc92ec357afffd7eb6abc4a685d2a4c23649845f87cdd6fe77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc75a25c7cd51dc92ec357afffd7eb6abc4a685d2a4c23649845f87cdd6fe77d->enter($__internal_bc75a25c7cd51dc92ec357afffd7eb6abc4a685d2a4c23649845f87cdd6fe77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b33a70c715ec4a9548bc7e83fa7d2baf9a026df598a7902913444ce59dca5021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33a70c715ec4a9548bc7e83fa7d2baf9a026df598a7902913444ce59dca5021->enter($__internal_b33a70c715ec4a9548bc7e83fa7d2baf9a026df598a7902913444ce59dca5021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_bc75a25c7cd51dc92ec357afffd7eb6abc4a685d2a4c23649845f87cdd6fe77d->leave($__internal_bc75a25c7cd51dc92ec357afffd7eb6abc4a685d2a4c23649845f87cdd6fe77d_prof);

        
        $__internal_b33a70c715ec4a9548bc7e83fa7d2baf9a026df598a7902913444ce59dca5021->leave($__internal_b33a70c715ec4a9548bc7e83fa7d2baf9a026df598a7902913444ce59dca5021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
