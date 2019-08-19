<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_200317065dc2b4496cd194f3c956293620a7f557214a0ec1ab9c52ce37736cca extends Twig_Template
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
        $__internal_717ad181fe92142f1c3aaff83cc1506deaafb1774d4a70b5d59a47facccdc2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717ad181fe92142f1c3aaff83cc1506deaafb1774d4a70b5d59a47facccdc2c6->enter($__internal_717ad181fe92142f1c3aaff83cc1506deaafb1774d4a70b5d59a47facccdc2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b6727e6eb097bb72d4c3b39799c7ecfab6d3a63d763da4bc69fc1952adda7d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6727e6eb097bb72d4c3b39799c7ecfab6d3a63d763da4bc69fc1952adda7d54->enter($__internal_b6727e6eb097bb72d4c3b39799c7ecfab6d3a63d763da4bc69fc1952adda7d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_717ad181fe92142f1c3aaff83cc1506deaafb1774d4a70b5d59a47facccdc2c6->leave($__internal_717ad181fe92142f1c3aaff83cc1506deaafb1774d4a70b5d59a47facccdc2c6_prof);

        
        $__internal_b6727e6eb097bb72d4c3b39799c7ecfab6d3a63d763da4bc69fc1952adda7d54->leave($__internal_b6727e6eb097bb72d4c3b39799c7ecfab6d3a63d763da4bc69fc1952adda7d54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
