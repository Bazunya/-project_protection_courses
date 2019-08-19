<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_81aa087b7124e23d1b2e4f8001bce99a06a973984cdb6a63d59794d395428550 extends Twig_Template
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
        $__internal_ff7fe66790a94793940a06456e3854922c550bbf41b9cc9e3b52f8e1c587cc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7fe66790a94793940a06456e3854922c550bbf41b9cc9e3b52f8e1c587cc04->enter($__internal_ff7fe66790a94793940a06456e3854922c550bbf41b9cc9e3b52f8e1c587cc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_05feb2eec8a30d01b0c39770107b0a55e9db80b243cc36d4085104931906b135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05feb2eec8a30d01b0c39770107b0a55e9db80b243cc36d4085104931906b135->enter($__internal_05feb2eec8a30d01b0c39770107b0a55e9db80b243cc36d4085104931906b135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ff7fe66790a94793940a06456e3854922c550bbf41b9cc9e3b52f8e1c587cc04->leave($__internal_ff7fe66790a94793940a06456e3854922c550bbf41b9cc9e3b52f8e1c587cc04_prof);

        
        $__internal_05feb2eec8a30d01b0c39770107b0a55e9db80b243cc36d4085104931906b135->leave($__internal_05feb2eec8a30d01b0c39770107b0a55e9db80b243cc36d4085104931906b135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
