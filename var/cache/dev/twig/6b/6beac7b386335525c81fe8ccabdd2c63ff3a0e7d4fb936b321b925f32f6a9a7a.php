<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_77dd43daf3ae7f20d5e21e0cbc6c673301f271c3fb166ec29ddfc50df2db7570 extends Twig_Template
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
        $__internal_540adc6218cfe2559e4f9a848e8cfb95f1473a3574770550a0f7dee7b8c7cb6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540adc6218cfe2559e4f9a848e8cfb95f1473a3574770550a0f7dee7b8c7cb6d->enter($__internal_540adc6218cfe2559e4f9a848e8cfb95f1473a3574770550a0f7dee7b8c7cb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_47a267003d3e916c687c13a6b4a8a0bfb081423763da4afdc854ce641bd92a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a267003d3e916c687c13a6b4a8a0bfb081423763da4afdc854ce641bd92a87->enter($__internal_47a267003d3e916c687c13a6b4a8a0bfb081423763da4afdc854ce641bd92a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_540adc6218cfe2559e4f9a848e8cfb95f1473a3574770550a0f7dee7b8c7cb6d->leave($__internal_540adc6218cfe2559e4f9a848e8cfb95f1473a3574770550a0f7dee7b8c7cb6d_prof);

        
        $__internal_47a267003d3e916c687c13a6b4a8a0bfb081423763da4afdc854ce641bd92a87->leave($__internal_47a267003d3e916c687c13a6b4a8a0bfb081423763da4afdc854ce641bd92a87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
