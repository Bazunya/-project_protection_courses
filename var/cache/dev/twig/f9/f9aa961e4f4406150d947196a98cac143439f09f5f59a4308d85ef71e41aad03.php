<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c7e8073e21da9a8dc616553c62e89f1a1d30141a9b8f9c148ae6254937692ed8 extends Twig_Template
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
        $__internal_6f08866a70859e80630fdc8445d60efb439e9a1d261dff87cef46d74d450ddb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f08866a70859e80630fdc8445d60efb439e9a1d261dff87cef46d74d450ddb2->enter($__internal_6f08866a70859e80630fdc8445d60efb439e9a1d261dff87cef46d74d450ddb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d0a47d138419b6e11246ca74826cc0392ce6ede986c6e92400c79e5d5e22cac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a47d138419b6e11246ca74826cc0392ce6ede986c6e92400c79e5d5e22cac5->enter($__internal_d0a47d138419b6e11246ca74826cc0392ce6ede986c6e92400c79e5d5e22cac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6f08866a70859e80630fdc8445d60efb439e9a1d261dff87cef46d74d450ddb2->leave($__internal_6f08866a70859e80630fdc8445d60efb439e9a1d261dff87cef46d74d450ddb2_prof);

        
        $__internal_d0a47d138419b6e11246ca74826cc0392ce6ede986c6e92400c79e5d5e22cac5->leave($__internal_d0a47d138419b6e11246ca74826cc0392ce6ede986c6e92400c79e5d5e22cac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
