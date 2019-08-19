<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d708a49067bc0e33967b6cde79da7fa2329cc90b7f937df9a5ee2aeec63ad857 extends Twig_Template
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
        $__internal_4b793e5e84542e9e10ac151f18f584e153fd06db78a0642fd072547dc9c91628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b793e5e84542e9e10ac151f18f584e153fd06db78a0642fd072547dc9c91628->enter($__internal_4b793e5e84542e9e10ac151f18f584e153fd06db78a0642fd072547dc9c91628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_78f5599275ebec1a65ae4e5541c0b2883932765adf59b2d28dffcf93d6bd83b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f5599275ebec1a65ae4e5541c0b2883932765adf59b2d28dffcf93d6bd83b3->enter($__internal_78f5599275ebec1a65ae4e5541c0b2883932765adf59b2d28dffcf93d6bd83b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4b793e5e84542e9e10ac151f18f584e153fd06db78a0642fd072547dc9c91628->leave($__internal_4b793e5e84542e9e10ac151f18f584e153fd06db78a0642fd072547dc9c91628_prof);

        
        $__internal_78f5599275ebec1a65ae4e5541c0b2883932765adf59b2d28dffcf93d6bd83b3->leave($__internal_78f5599275ebec1a65ae4e5541c0b2883932765adf59b2d28dffcf93d6bd83b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
