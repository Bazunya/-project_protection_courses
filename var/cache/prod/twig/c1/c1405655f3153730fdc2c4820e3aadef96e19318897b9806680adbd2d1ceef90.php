<?php

/* default/spam.html.twig */
class __TwigTemplate_3fe078a3373c3fb0ef3aedec1b70e13bc78b0cf6b521ecfd8ab0ad6cf30f93dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "default/spam.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"content\">
            <p>Бессменный мидер Natus Vincere Данил «Dendi»
                Ишутин оценил актуальные составы СНГ-команд и сделал прогнозы на ближайшие квалификации.
                В нашем материале — главное из беседы игрока с журналистами prodota.ru.</p>
            <p>Бессменный мидер Natus Vincere Данил «Dendi»
                Ишутин оценил актуальные составы СНГ-команд и сделал прогнозы на ближайшие квалификации.
                В нашем материале — главное из беседы игрока с журналистами prodota.ru.</p>
            <p>Бессменный мидер Natus Vincere Данил «Dendi»
                Ишутин оценил актуальные составы СНГ-команд и сделал прогнозы на ближайшие квалификации.
                В нашем материале — главное из беседы игрока с журналистами prodota.ru.</p>
            <p>Бессменный мидер Natus Vincere Данил «Dendi»
                Ишутин оценил актуальные составы СНГ-команд и сделал прогнозы на ближайшие квалификации.
                В нашем материале — главное из беседы игрока с журналистами prodota.ru.</p>
            <p>Бессменный мидер Natus Vincere Данил «Dendi»
                Ишутин оценил актуальные составы СНГ-команд и сделал прогнозы на ближайшие квалификации.
                В нашем материале — главное из беседы игрока с журналистами prodota.ru.</p>
            <p>Бессменный мидер Natus Vincere Данил «Dendi»
                Ишутин оценил актуальные составы СНГ-команд и сделал прогнозы на ближайшие квалификации.
                В нашем материале — главное из беседы игрока с журналистами prodota.ru.</p>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/spam.html.twig";
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
        return new Twig_Source("", "default/spam.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\default\\spam.html.twig");
    }
}
