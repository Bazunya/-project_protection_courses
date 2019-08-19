<?php

/* default/front.html.twig */
class __TwigTemplate_fb47a57f3d30ce74492ea48489f2d0e76a1c2c9af690bbef9b3ab0e3e63e3fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/front.html.twig", 1);
        $this->blocks = array(
            'front_content' => array($this, 'block_front_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_front_content($context, array $blocks = array())
    {
        // line 3
        echo "    Front page
";
    }

    public function getTemplateName()
    {
        return "default/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/front.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\front.html.twig");
    }
}
