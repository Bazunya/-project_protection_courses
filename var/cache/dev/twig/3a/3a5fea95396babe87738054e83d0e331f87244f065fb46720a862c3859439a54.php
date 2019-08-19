<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_31a9a709fb47ac49393033b6ed83e5c0114e2d3e880ce7fffab78787a8f43e37 extends Twig_Template
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
        $__internal_c61fd5dd921e61fcca38bfbc3731d09725a0af1d56c4a50b86dfe80a47dbc5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61fd5dd921e61fcca38bfbc3731d09725a0af1d56c4a50b86dfe80a47dbc5a4->enter($__internal_c61fd5dd921e61fcca38bfbc3731d09725a0af1d56c4a50b86dfe80a47dbc5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bd3bb08efdba966a14abf4c8484d3fa0e55bafbad3d216e12082dc65fd154c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3bb08efdba966a14abf4c8484d3fa0e55bafbad3d216e12082dc65fd154c82->enter($__internal_bd3bb08efdba966a14abf4c8484d3fa0e55bafbad3d216e12082dc65fd154c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c61fd5dd921e61fcca38bfbc3731d09725a0af1d56c4a50b86dfe80a47dbc5a4->leave($__internal_c61fd5dd921e61fcca38bfbc3731d09725a0af1d56c4a50b86dfe80a47dbc5a4_prof);

        
        $__internal_bd3bb08efdba966a14abf4c8484d3fa0e55bafbad3d216e12082dc65fd154c82->leave($__internal_bd3bb08efdba966a14abf4c8484d3fa0e55bafbad3d216e12082dc65fd154c82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
