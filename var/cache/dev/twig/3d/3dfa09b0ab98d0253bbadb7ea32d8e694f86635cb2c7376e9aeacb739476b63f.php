<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9a8f1ca5437a7caa107c24579d1bc7745a8d435c9014c7c332539e625074599d extends Twig_Template
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
        $__internal_53ac407cd7942f839cfaf2c5258e989f032347de49557536f149f23071c28275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ac407cd7942f839cfaf2c5258e989f032347de49557536f149f23071c28275->enter($__internal_53ac407cd7942f839cfaf2c5258e989f032347de49557536f149f23071c28275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ffec74c475313407b2e9bf42fd89541b7d6512988d7618f84ce5904b5f26ccc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffec74c475313407b2e9bf42fd89541b7d6512988d7618f84ce5904b5f26ccc2->enter($__internal_ffec74c475313407b2e9bf42fd89541b7d6512988d7618f84ce5904b5f26ccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_53ac407cd7942f839cfaf2c5258e989f032347de49557536f149f23071c28275->leave($__internal_53ac407cd7942f839cfaf2c5258e989f032347de49557536f149f23071c28275_prof);

        
        $__internal_ffec74c475313407b2e9bf42fd89541b7d6512988d7618f84ce5904b5f26ccc2->leave($__internal_ffec74c475313407b2e9bf42fd89541b7d6512988d7618f84ce5904b5f26ccc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
