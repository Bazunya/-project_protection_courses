<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a9aadc1914b11d24ff09f6963e664c10b621727597b422693f9462d4784e9d50 extends Twig_Template
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
        $__internal_612ca1138792835dd2ad421d8c269cbd04114a18df4e57e68e617bcf71b5e4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612ca1138792835dd2ad421d8c269cbd04114a18df4e57e68e617bcf71b5e4b3->enter($__internal_612ca1138792835dd2ad421d8c269cbd04114a18df4e57e68e617bcf71b5e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ba7cef59c6ee36c7ec8818ce75d1547289f46c1b0f822b286aa9dd696946c5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7cef59c6ee36c7ec8818ce75d1547289f46c1b0f822b286aa9dd696946c5d9->enter($__internal_ba7cef59c6ee36c7ec8818ce75d1547289f46c1b0f822b286aa9dd696946c5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_612ca1138792835dd2ad421d8c269cbd04114a18df4e57e68e617bcf71b5e4b3->leave($__internal_612ca1138792835dd2ad421d8c269cbd04114a18df4e57e68e617bcf71b5e4b3_prof);

        
        $__internal_ba7cef59c6ee36c7ec8818ce75d1547289f46c1b0f822b286aa9dd696946c5d9->leave($__internal_ba7cef59c6ee36c7ec8818ce75d1547289f46c1b0f822b286aa9dd696946c5d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
