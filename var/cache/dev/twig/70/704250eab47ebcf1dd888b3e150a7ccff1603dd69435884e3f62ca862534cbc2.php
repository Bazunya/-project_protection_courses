<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d7f0fdba052a24fad5428703df033399734f46a526bf5e80f774037c1642d421 extends Twig_Template
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
        $__internal_f8aac2fb5929ac8998216876167464c6b39ca231beaa74f0db2b75cc99778b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8aac2fb5929ac8998216876167464c6b39ca231beaa74f0db2b75cc99778b44->enter($__internal_f8aac2fb5929ac8998216876167464c6b39ca231beaa74f0db2b75cc99778b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fed03a9abe1d78327a88679f8edd91489796af1f41060c52d5c09da2027317d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed03a9abe1d78327a88679f8edd91489796af1f41060c52d5c09da2027317d8->enter($__internal_fed03a9abe1d78327a88679f8edd91489796af1f41060c52d5c09da2027317d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f8aac2fb5929ac8998216876167464c6b39ca231beaa74f0db2b75cc99778b44->leave($__internal_f8aac2fb5929ac8998216876167464c6b39ca231beaa74f0db2b75cc99778b44_prof);

        
        $__internal_fed03a9abe1d78327a88679f8edd91489796af1f41060c52d5c09da2027317d8->leave($__internal_fed03a9abe1d78327a88679f8edd91489796af1f41060c52d5c09da2027317d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
