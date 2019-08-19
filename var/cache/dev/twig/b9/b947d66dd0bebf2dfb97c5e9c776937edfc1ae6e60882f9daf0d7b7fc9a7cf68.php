<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_efd219f957d91fc453045b05336d62b5a241424b84666910839b86a26e71e9dc extends Twig_Template
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
        $__internal_39023f01ebcff449c108984204878b76f950e618ec220b573af25683bef11b7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39023f01ebcff449c108984204878b76f950e618ec220b573af25683bef11b7a->enter($__internal_39023f01ebcff449c108984204878b76f950e618ec220b573af25683bef11b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_25349d5fdae95b6d76c51a2506e172f9cd2b077083bff9b16bdb6844e1474a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25349d5fdae95b6d76c51a2506e172f9cd2b077083bff9b16bdb6844e1474a38->enter($__internal_25349d5fdae95b6d76c51a2506e172f9cd2b077083bff9b16bdb6844e1474a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_39023f01ebcff449c108984204878b76f950e618ec220b573af25683bef11b7a->leave($__internal_39023f01ebcff449c108984204878b76f950e618ec220b573af25683bef11b7a_prof);

        
        $__internal_25349d5fdae95b6d76c51a2506e172f9cd2b077083bff9b16bdb6844e1474a38->leave($__internal_25349d5fdae95b6d76c51a2506e172f9cd2b077083bff9b16bdb6844e1474a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
