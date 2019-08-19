<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_16e9a64db13ba28d841e744745dfc76cabfb97d37d481084da9b0976266c6b5f extends Twig_Template
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
        $__internal_d48bea8be275453e09138dbe032bf78825676f1c56611f365200b37433fa6be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48bea8be275453e09138dbe032bf78825676f1c56611f365200b37433fa6be0->enter($__internal_d48bea8be275453e09138dbe032bf78825676f1c56611f365200b37433fa6be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3dcc62f483703b8e02cc7f822e51cab4bb52d4eacc533a3b90980a8e3b8dcfc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcc62f483703b8e02cc7f822e51cab4bb52d4eacc533a3b90980a8e3b8dcfc1->enter($__internal_3dcc62f483703b8e02cc7f822e51cab4bb52d4eacc533a3b90980a8e3b8dcfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d48bea8be275453e09138dbe032bf78825676f1c56611f365200b37433fa6be0->leave($__internal_d48bea8be275453e09138dbe032bf78825676f1c56611f365200b37433fa6be0_prof);

        
        $__internal_3dcc62f483703b8e02cc7f822e51cab4bb52d4eacc533a3b90980a8e3b8dcfc1->leave($__internal_3dcc62f483703b8e02cc7f822e51cab4bb52d4eacc533a3b90980a8e3b8dcfc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
