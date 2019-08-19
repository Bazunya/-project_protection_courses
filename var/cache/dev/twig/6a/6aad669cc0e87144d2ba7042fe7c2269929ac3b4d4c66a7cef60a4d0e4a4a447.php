<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1d77cf807b40536a366303602957d65eb915dbaf74668de1c176bbd62cbb9964 extends Twig_Template
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
        $__internal_20c6127248b1c2e58570d6b42568b6e32f9ed712728f601f62c55c740a0f432e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c6127248b1c2e58570d6b42568b6e32f9ed712728f601f62c55c740a0f432e->enter($__internal_20c6127248b1c2e58570d6b42568b6e32f9ed712728f601f62c55c740a0f432e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_684e41ac852d044fd9ad64896f6e6de1956c37f76efe35ef988f15cb7d67d84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684e41ac852d044fd9ad64896f6e6de1956c37f76efe35ef988f15cb7d67d84c->enter($__internal_684e41ac852d044fd9ad64896f6e6de1956c37f76efe35ef988f15cb7d67d84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_20c6127248b1c2e58570d6b42568b6e32f9ed712728f601f62c55c740a0f432e->leave($__internal_20c6127248b1c2e58570d6b42568b6e32f9ed712728f601f62c55c740a0f432e_prof);

        
        $__internal_684e41ac852d044fd9ad64896f6e6de1956c37f76efe35ef988f15cb7d67d84c->leave($__internal_684e41ac852d044fd9ad64896f6e6de1956c37f76efe35ef988f15cb7d67d84c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
