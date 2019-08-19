<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a63dd8a74a06eeeccfa2a74e8573636975f5e3952e73049efb0a685b0bcb3475 extends Twig_Template
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
        $__internal_1be61d86d7c37296d84e7e015d7c2cf12ac4a245231402a8afbf0e9f961ee0a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be61d86d7c37296d84e7e015d7c2cf12ac4a245231402a8afbf0e9f961ee0a6->enter($__internal_1be61d86d7c37296d84e7e015d7c2cf12ac4a245231402a8afbf0e9f961ee0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c05c342d25cab7e4312b22c71b261b84a264113cd49e8c8f27d8cebc684e1ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05c342d25cab7e4312b22c71b261b84a264113cd49e8c8f27d8cebc684e1ceb->enter($__internal_c05c342d25cab7e4312b22c71b261b84a264113cd49e8c8f27d8cebc684e1ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1be61d86d7c37296d84e7e015d7c2cf12ac4a245231402a8afbf0e9f961ee0a6->leave($__internal_1be61d86d7c37296d84e7e015d7c2cf12ac4a245231402a8afbf0e9f961ee0a6_prof);

        
        $__internal_c05c342d25cab7e4312b22c71b261b84a264113cd49e8c8f27d8cebc684e1ceb->leave($__internal_c05c342d25cab7e4312b22c71b261b84a264113cd49e8c8f27d8cebc684e1ceb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
