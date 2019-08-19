<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_970b1c3e5fd51129ed98068e5dc762dcc2a81e054dc63e3413ce2b292c07f3ff extends Twig_Template
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
        $__internal_dbcd983b84c4518e5aebe82204ec0f5f1daca6d4dcaa5ec0c3d1a2ba9f5e0437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcd983b84c4518e5aebe82204ec0f5f1daca6d4dcaa5ec0c3d1a2ba9f5e0437->enter($__internal_dbcd983b84c4518e5aebe82204ec0f5f1daca6d4dcaa5ec0c3d1a2ba9f5e0437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d8db878e0e33310894ec09a181444084b7ee4ceb466d013608515a8eaa7bc481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8db878e0e33310894ec09a181444084b7ee4ceb466d013608515a8eaa7bc481->enter($__internal_d8db878e0e33310894ec09a181444084b7ee4ceb466d013608515a8eaa7bc481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_dbcd983b84c4518e5aebe82204ec0f5f1daca6d4dcaa5ec0c3d1a2ba9f5e0437->leave($__internal_dbcd983b84c4518e5aebe82204ec0f5f1daca6d4dcaa5ec0c3d1a2ba9f5e0437_prof);

        
        $__internal_d8db878e0e33310894ec09a181444084b7ee4ceb466d013608515a8eaa7bc481->leave($__internal_d8db878e0e33310894ec09a181444084b7ee4ceb466d013608515a8eaa7bc481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
