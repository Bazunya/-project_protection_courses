<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e1df866ef8fbb58e2a4eb6a11907b626cbd6cfeda395126c6e38d064b7043496 extends Twig_Template
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
        $__internal_779fcb9be9e4310c7f25412f89367da277e05a64c5ba80b438edf322b2f7a7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779fcb9be9e4310c7f25412f89367da277e05a64c5ba80b438edf322b2f7a7a2->enter($__internal_779fcb9be9e4310c7f25412f89367da277e05a64c5ba80b438edf322b2f7a7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c616d83a584fd341af3cb4baa8a665a8c22e03168bc08c724d27ab055f34c9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c616d83a584fd341af3cb4baa8a665a8c22e03168bc08c724d27ab055f34c9b0->enter($__internal_c616d83a584fd341af3cb4baa8a665a8c22e03168bc08c724d27ab055f34c9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_779fcb9be9e4310c7f25412f89367da277e05a64c5ba80b438edf322b2f7a7a2->leave($__internal_779fcb9be9e4310c7f25412f89367da277e05a64c5ba80b438edf322b2f7a7a2_prof);

        
        $__internal_c616d83a584fd341af3cb4baa8a665a8c22e03168bc08c724d27ab055f34c9b0->leave($__internal_c616d83a584fd341af3cb4baa8a665a8c22e03168bc08c724d27ab055f34c9b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
