<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1bdfe1387f2a880d07ba1183d75f4085d3ebd4ce14af1d40ab313e68acb7bc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16d9f2df8680ff27f1e289e37c6597b672ab8e7ae3525a536b76d618f3700440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d9f2df8680ff27f1e289e37c6597b672ab8e7ae3525a536b76d618f3700440->enter($__internal_16d9f2df8680ff27f1e289e37c6597b672ab8e7ae3525a536b76d618f3700440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ef8be939dc917db2a71b2e85640f8489e40cf471f02debb54829b9f45a4a458d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8be939dc917db2a71b2e85640f8489e40cf471f02debb54829b9f45a4a458d->enter($__internal_ef8be939dc917db2a71b2e85640f8489e40cf471f02debb54829b9f45a4a458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_16d9f2df8680ff27f1e289e37c6597b672ab8e7ae3525a536b76d618f3700440->leave($__internal_16d9f2df8680ff27f1e289e37c6597b672ab8e7ae3525a536b76d618f3700440_prof);

        
        $__internal_ef8be939dc917db2a71b2e85640f8489e40cf471f02debb54829b9f45a4a458d->leave($__internal_ef8be939dc917db2a71b2e85640f8489e40cf471f02debb54829b9f45a4a458d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2aea38a43232a047de7f02bed52ce8e716a16028a291b13c1bf40d99af5d2add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aea38a43232a047de7f02bed52ce8e716a16028a291b13c1bf40d99af5d2add->enter($__internal_2aea38a43232a047de7f02bed52ce8e716a16028a291b13c1bf40d99af5d2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d050cf6f7e7359ca2d2a00c02a9da916a60a46189ef941a56e9f01646ebe0a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d050cf6f7e7359ca2d2a00c02a9da916a60a46189ef941a56e9f01646ebe0a0b->enter($__internal_d050cf6f7e7359ca2d2a00c02a9da916a60a46189ef941a56e9f01646ebe0a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d050cf6f7e7359ca2d2a00c02a9da916a60a46189ef941a56e9f01646ebe0a0b->leave($__internal_d050cf6f7e7359ca2d2a00c02a9da916a60a46189ef941a56e9f01646ebe0a0b_prof);

        
        $__internal_2aea38a43232a047de7f02bed52ce8e716a16028a291b13c1bf40d99af5d2add->leave($__internal_2aea38a43232a047de7f02bed52ce8e716a16028a291b13c1bf40d99af5d2add_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
