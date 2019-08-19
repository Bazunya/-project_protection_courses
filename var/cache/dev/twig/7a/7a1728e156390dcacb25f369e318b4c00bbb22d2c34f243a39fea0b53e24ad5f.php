<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_90721a6588024f473edd070e19ca1e79a1d95daf39835745a8badbada3160d1f extends Twig_Template
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
        $__internal_75de2629dc3a0d3176ce7157aafb82230440710e4f88121c7ee2e6337a701f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75de2629dc3a0d3176ce7157aafb82230440710e4f88121c7ee2e6337a701f17->enter($__internal_75de2629dc3a0d3176ce7157aafb82230440710e4f88121c7ee2e6337a701f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_b217c0ba8e0f546260f151c987fb1c6b5765c91322636efad73b2daf4d8ac3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b217c0ba8e0f546260f151c987fb1c6b5765c91322636efad73b2daf4d8ac3cb->enter($__internal_b217c0ba8e0f546260f151c987fb1c6b5765c91322636efad73b2daf4d8ac3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_75de2629dc3a0d3176ce7157aafb82230440710e4f88121c7ee2e6337a701f17->leave($__internal_75de2629dc3a0d3176ce7157aafb82230440710e4f88121c7ee2e6337a701f17_prof);

        
        $__internal_b217c0ba8e0f546260f151c987fb1c6b5765c91322636efad73b2daf4d8ac3cb->leave($__internal_b217c0ba8e0f546260f151c987fb1c6b5765c91322636efad73b2daf4d8ac3cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
