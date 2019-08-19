<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ee1e6bba65bde9096290d88fad835ddb98671f49b7a3a7b6400416c0f44a5629 extends Twig_Template
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
        $__internal_465861362feab9e58e6b9d51334e6a5c522971bb2d160ed865aedc521bdb425f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465861362feab9e58e6b9d51334e6a5c522971bb2d160ed865aedc521bdb425f->enter($__internal_465861362feab9e58e6b9d51334e6a5c522971bb2d160ed865aedc521bdb425f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c4d49ef6cd7c7d4d68b3d5551249f0da73be078be616c3bf5308a6b78234c9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4d49ef6cd7c7d4d68b3d5551249f0da73be078be616c3bf5308a6b78234c9bf->enter($__internal_c4d49ef6cd7c7d4d68b3d5551249f0da73be078be616c3bf5308a6b78234c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_465861362feab9e58e6b9d51334e6a5c522971bb2d160ed865aedc521bdb425f->leave($__internal_465861362feab9e58e6b9d51334e6a5c522971bb2d160ed865aedc521bdb425f_prof);

        
        $__internal_c4d49ef6cd7c7d4d68b3d5551249f0da73be078be616c3bf5308a6b78234c9bf->leave($__internal_c4d49ef6cd7c7d4d68b3d5551249f0da73be078be616c3bf5308a6b78234c9bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
