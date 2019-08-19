<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_55960ed48512056f76b96ff1be77cb50250a536479a012de2b64e1417bf13cb0 extends Twig_Template
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
        $__internal_3f8b539ae14dd2614d1396cd10a6cb9d764fe971fa540b12e19ac43953997a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8b539ae14dd2614d1396cd10a6cb9d764fe971fa540b12e19ac43953997a08->enter($__internal_3f8b539ae14dd2614d1396cd10a6cb9d764fe971fa540b12e19ac43953997a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f508b439b29c76e2ce1a4c20846bc6dcba34a4b22359340962c4ef2367a8af46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f508b439b29c76e2ce1a4c20846bc6dcba34a4b22359340962c4ef2367a8af46->enter($__internal_f508b439b29c76e2ce1a4c20846bc6dcba34a4b22359340962c4ef2367a8af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3f8b539ae14dd2614d1396cd10a6cb9d764fe971fa540b12e19ac43953997a08->leave($__internal_3f8b539ae14dd2614d1396cd10a6cb9d764fe971fa540b12e19ac43953997a08_prof);

        
        $__internal_f508b439b29c76e2ce1a4c20846bc6dcba34a4b22359340962c4ef2367a8af46->leave($__internal_f508b439b29c76e2ce1a4c20846bc6dcba34a4b22359340962c4ef2367a8af46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
