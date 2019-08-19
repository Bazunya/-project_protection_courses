<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7569cde5a9351ac5fb9cbae92cc856c7e2595c0ca83bed9f204143be6e936379 extends Twig_Template
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
        $__internal_c51b53dcdb23591ed05f5fa65830448fe9e3df499062a06d7c6ff7e23d6f127c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51b53dcdb23591ed05f5fa65830448fe9e3df499062a06d7c6ff7e23d6f127c->enter($__internal_c51b53dcdb23591ed05f5fa65830448fe9e3df499062a06d7c6ff7e23d6f127c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d35e919c5ea7fb4183dc65f3dc8e7f67d03a5dc58d1db4e30d247af054bf2a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35e919c5ea7fb4183dc65f3dc8e7f67d03a5dc58d1db4e30d247af054bf2a1e->enter($__internal_d35e919c5ea7fb4183dc65f3dc8e7f67d03a5dc58d1db4e30d247af054bf2a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c51b53dcdb23591ed05f5fa65830448fe9e3df499062a06d7c6ff7e23d6f127c->leave($__internal_c51b53dcdb23591ed05f5fa65830448fe9e3df499062a06d7c6ff7e23d6f127c_prof);

        
        $__internal_d35e919c5ea7fb4183dc65f3dc8e7f67d03a5dc58d1db4e30d247af054bf2a1e->leave($__internal_d35e919c5ea7fb4183dc65f3dc8e7f67d03a5dc58d1db4e30d247af054bf2a1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
