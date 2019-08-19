<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f6b0caef4a799c4886c71bb46c30f6309d1c43d175bb56a4b713f82eb9045369 extends Twig_Template
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
        $__internal_d39ef62d3c4c604e33724fd407040d736506be692a2aa6beb8b31ea036032ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39ef62d3c4c604e33724fd407040d736506be692a2aa6beb8b31ea036032ce4->enter($__internal_d39ef62d3c4c604e33724fd407040d736506be692a2aa6beb8b31ea036032ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_397cc7d16eb270f55d60f64c6f345b819d360f27b852e90cb040052c45501d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397cc7d16eb270f55d60f64c6f345b819d360f27b852e90cb040052c45501d7c->enter($__internal_397cc7d16eb270f55d60f64c6f345b819d360f27b852e90cb040052c45501d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d39ef62d3c4c604e33724fd407040d736506be692a2aa6beb8b31ea036032ce4->leave($__internal_d39ef62d3c4c604e33724fd407040d736506be692a2aa6beb8b31ea036032ce4_prof);

        
        $__internal_397cc7d16eb270f55d60f64c6f345b819d360f27b852e90cb040052c45501d7c->leave($__internal_397cc7d16eb270f55d60f64c6f345b819d360f27b852e90cb040052c45501d7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
