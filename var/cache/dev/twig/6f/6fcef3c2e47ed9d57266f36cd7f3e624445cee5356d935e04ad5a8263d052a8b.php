<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f5f88c27c8755429dbd497f5f6ecd1f14525708f64eba3d111c5c5ddb956ea4a extends Twig_Template
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
        $__internal_f04799b34b6a7770935fa2d81892540cc8f44ec55caa918122153146e0ea1bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04799b34b6a7770935fa2d81892540cc8f44ec55caa918122153146e0ea1bdf->enter($__internal_f04799b34b6a7770935fa2d81892540cc8f44ec55caa918122153146e0ea1bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d350b6903acdcfc9fb24ed96435fb6815f861a5d5516aaca9774e31bfc7ad6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d350b6903acdcfc9fb24ed96435fb6815f861a5d5516aaca9774e31bfc7ad6e3->enter($__internal_d350b6903acdcfc9fb24ed96435fb6815f861a5d5516aaca9774e31bfc7ad6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f04799b34b6a7770935fa2d81892540cc8f44ec55caa918122153146e0ea1bdf->leave($__internal_f04799b34b6a7770935fa2d81892540cc8f44ec55caa918122153146e0ea1bdf_prof);

        
        $__internal_d350b6903acdcfc9fb24ed96435fb6815f861a5d5516aaca9774e31bfc7ad6e3->leave($__internal_d350b6903acdcfc9fb24ed96435fb6815f861a5d5516aaca9774e31bfc7ad6e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
