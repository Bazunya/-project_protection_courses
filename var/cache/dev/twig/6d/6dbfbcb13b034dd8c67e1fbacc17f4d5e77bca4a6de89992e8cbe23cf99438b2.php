<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_17ee817b16494bb4da06eba41731991f59969625568c96e6ad1ffd07ee389efa extends Twig_Template
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
        $__internal_7c2eb94851763671834ee91326889e16b28bfbbe141e3f1a172f9194cf0b13df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2eb94851763671834ee91326889e16b28bfbbe141e3f1a172f9194cf0b13df->enter($__internal_7c2eb94851763671834ee91326889e16b28bfbbe141e3f1a172f9194cf0b13df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_81264b29712ec7640b80750f6869e61497a8ec0042698642c5d2cd78441580ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81264b29712ec7640b80750f6869e61497a8ec0042698642c5d2cd78441580ee->enter($__internal_81264b29712ec7640b80750f6869e61497a8ec0042698642c5d2cd78441580ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7c2eb94851763671834ee91326889e16b28bfbbe141e3f1a172f9194cf0b13df->leave($__internal_7c2eb94851763671834ee91326889e16b28bfbbe141e3f1a172f9194cf0b13df_prof);

        
        $__internal_81264b29712ec7640b80750f6869e61497a8ec0042698642c5d2cd78441580ee->leave($__internal_81264b29712ec7640b80750f6869e61497a8ec0042698642c5d2cd78441580ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
