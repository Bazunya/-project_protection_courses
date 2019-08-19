<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0ffb25a8bad0d332a5b74b7c70d52cf64519aaf32d1d167276b2a6075ac061b9 extends Twig_Template
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
        $__internal_ed02cddaec9acd7d7672f7f9eb102afd0699037d37887e1997a2e6e66066a928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed02cddaec9acd7d7672f7f9eb102afd0699037d37887e1997a2e6e66066a928->enter($__internal_ed02cddaec9acd7d7672f7f9eb102afd0699037d37887e1997a2e6e66066a928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0d5236b5e64086b6fcc50b09e02f4e0534c1cdf0de1e70eee16f9bb09505604d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5236b5e64086b6fcc50b09e02f4e0534c1cdf0de1e70eee16f9bb09505604d->enter($__internal_0d5236b5e64086b6fcc50b09e02f4e0534c1cdf0de1e70eee16f9bb09505604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ed02cddaec9acd7d7672f7f9eb102afd0699037d37887e1997a2e6e66066a928->leave($__internal_ed02cddaec9acd7d7672f7f9eb102afd0699037d37887e1997a2e6e66066a928_prof);

        
        $__internal_0d5236b5e64086b6fcc50b09e02f4e0534c1cdf0de1e70eee16f9bb09505604d->leave($__internal_0d5236b5e64086b6fcc50b09e02f4e0534c1cdf0de1e70eee16f9bb09505604d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
