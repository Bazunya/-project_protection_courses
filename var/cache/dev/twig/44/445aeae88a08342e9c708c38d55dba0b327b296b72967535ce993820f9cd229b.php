<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_63495ca7f9af703b506760e24e9f2b53df06f761eea7882f1e3920dc77f56309 extends Twig_Template
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
        $__internal_c7b5fa3f0cf1cc3c050badd0d85702c5b0df47388d2745ce3d1d6dffdde7547a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b5fa3f0cf1cc3c050badd0d85702c5b0df47388d2745ce3d1d6dffdde7547a->enter($__internal_c7b5fa3f0cf1cc3c050badd0d85702c5b0df47388d2745ce3d1d6dffdde7547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f0db33ee8088f4a3bfb21853df75eb7334870045bde5786feda5af5d18485368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0db33ee8088f4a3bfb21853df75eb7334870045bde5786feda5af5d18485368->enter($__internal_f0db33ee8088f4a3bfb21853df75eb7334870045bde5786feda5af5d18485368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c7b5fa3f0cf1cc3c050badd0d85702c5b0df47388d2745ce3d1d6dffdde7547a->leave($__internal_c7b5fa3f0cf1cc3c050badd0d85702c5b0df47388d2745ce3d1d6dffdde7547a_prof);

        
        $__internal_f0db33ee8088f4a3bfb21853df75eb7334870045bde5786feda5af5d18485368->leave($__internal_f0db33ee8088f4a3bfb21853df75eb7334870045bde5786feda5af5d18485368_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
