<?php

/* not_login.html.twig */
class __TwigTemplate_42d5cea50774260702501998dc9f57f04bc07c63544d122fc7de05516ef07b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'h2' => array($this, 'block_h2'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_880a840eeb03f2f527de7c092b0af3cb28139686a7bc15d77445c6b15b124398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880a840eeb03f2f527de7c092b0af3cb28139686a7bc15d77445c6b15b124398->enter($__internal_880a840eeb03f2f527de7c092b0af3cb28139686a7bc15d77445c6b15b124398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not_login.html.twig"));

        $__internal_0c478179828506a88b195f2bacba4e27e7603ea759fb069d2be6fede2ccec2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c478179828506a88b195f2bacba4e27e7603ea759fb069d2be6fede2ccec2ec->enter($__internal_0c478179828506a88b195f2bacba4e27e7603ea759fb069d2be6fede2ccec2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "not_login.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_880a840eeb03f2f527de7c092b0af3cb28139686a7bc15d77445c6b15b124398->leave($__internal_880a840eeb03f2f527de7c092b0af3cb28139686a7bc15d77445c6b15b124398_prof);

        
        $__internal_0c478179828506a88b195f2bacba4e27e7603ea759fb069d2be6fede2ccec2ec->leave($__internal_0c478179828506a88b195f2bacba4e27e7603ea759fb069d2be6fede2ccec2ec_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c8a12e1eb47498891cdaaa792588c4abb3aa0fe4366e0ee80012d4a25b11104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8a12e1eb47498891cdaaa792588c4abb3aa0fe4366e0ee80012d4a25b11104->enter($__internal_0c8a12e1eb47498891cdaaa792588c4abb3aa0fe4366e0ee80012d4a25b11104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_786ae76ea37bb6791c57f8b19f99b1ab9e4e19f3f9d0c2fd795378f38ea64f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786ae76ea37bb6791c57f8b19f99b1ab9e4e19f3f9d0c2fd795378f38ea64f22->enter($__internal_786ae76ea37bb6791c57f8b19f99b1ab9e4e19f3f9d0c2fd795378f38ea64f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/avt.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_786ae76ea37bb6791c57f8b19f99b1ab9e4e19f3f9d0c2fd795378f38ea64f22->leave($__internal_786ae76ea37bb6791c57f8b19f99b1ab9e4e19f3f9d0c2fd795378f38ea64f22_prof);

        
        $__internal_0c8a12e1eb47498891cdaaa792588c4abb3aa0fe4366e0ee80012d4a25b11104->leave($__internal_0c8a12e1eb47498891cdaaa792588c4abb3aa0fe4366e0ee80012d4a25b11104_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff630f5002da11bef303dc00e23eeebbc72f11018d3655534c2a30934f67e522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff630f5002da11bef303dc00e23eeebbc72f11018d3655534c2a30934f67e522->enter($__internal_ff630f5002da11bef303dc00e23eeebbc72f11018d3655534c2a30934f67e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_497a2ef417552da18e978dcae666dcc6b995f102426d133453683c24bd7a3464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497a2ef417552da18e978dcae666dcc6b995f102426d133453683c24bd7a3464->enter($__internal_497a2ef417552da18e978dcae666dcc6b995f102426d133453683c24bd7a3464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        $this->displayBlock('h2', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('page_content', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_497a2ef417552da18e978dcae666dcc6b995f102426d133453683c24bd7a3464->leave($__internal_497a2ef417552da18e978dcae666dcc6b995f102426d133453683c24bd7a3464_prof);

        
        $__internal_ff630f5002da11bef303dc00e23eeebbc72f11018d3655534c2a30934f67e522->leave($__internal_ff630f5002da11bef303dc00e23eeebbc72f11018d3655534c2a30934f67e522_prof);

    }

    // line 7
    public function block_h2($context, array $blocks = array())
    {
        $__internal_24a81aef02f28b618673b2836e6d0deec366adcc48d966cd56948379aecd694a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a81aef02f28b618673b2836e6d0deec366adcc48d966cd56948379aecd694a->enter($__internal_24a81aef02f28b618673b2836e6d0deec366adcc48d966cd56948379aecd694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        $__internal_97a78f618c8a3dfb63eb1e968cca9c6a1b2cb6f4abbd416a64912daa71dbfbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a78f618c8a3dfb63eb1e968cca9c6a1b2cb6f4abbd416a64912daa71dbfbe8->enter($__internal_97a78f618c8a3dfb63eb1e968cca9c6a1b2cb6f4abbd416a64912daa71dbfbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "h2"));

        // line 8
        echo "    ";
        
        $__internal_97a78f618c8a3dfb63eb1e968cca9c6a1b2cb6f4abbd416a64912daa71dbfbe8->leave($__internal_97a78f618c8a3dfb63eb1e968cca9c6a1b2cb6f4abbd416a64912daa71dbfbe8_prof);

        
        $__internal_24a81aef02f28b618673b2836e6d0deec366adcc48d966cd56948379aecd694a->leave($__internal_24a81aef02f28b618673b2836e6d0deec366adcc48d966cd56948379aecd694a_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_614d23ecac8d44aa9ad4a4a0f3a1773b939edbdfabcd62d60976c59b83860c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614d23ecac8d44aa9ad4a4a0f3a1773b939edbdfabcd62d60976c59b83860c83->enter($__internal_614d23ecac8d44aa9ad4a4a0f3a1773b939edbdfabcd62d60976c59b83860c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_91644f32613f5d2162aac4ea4ef43002b2bf04e95607872cd250060417df4bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91644f32613f5d2162aac4ea4ef43002b2bf04e95607872cd250060417df4bef->enter($__internal_91644f32613f5d2162aac4ea4ef43002b2bf04e95607872cd250060417df4bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "    ";
        
        $__internal_91644f32613f5d2162aac4ea4ef43002b2bf04e95607872cd250060417df4bef->leave($__internal_91644f32613f5d2162aac4ea4ef43002b2bf04e95607872cd250060417df4bef_prof);

        
        $__internal_614d23ecac8d44aa9ad4a4a0f3a1773b939edbdfabcd62d60976c59b83860c83->leave($__internal_614d23ecac8d44aa9ad4a4a0f3a1773b939edbdfabcd62d60976c59b83860c83_prof);

    }

    public function getTemplateName()
    {
        return "not_login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 10,  116 => 9,  106 => 8,  97 => 7,  86 => 11,  83 => 9,  80 => 7,  71 => 6,  59 => 4,  55 => 3,  50 => 2,  41 => 1,  31 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link href=\"{{ asset('/css/avt.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('/css/animate.css') }}\" rel=\"stylesheet\"/>
{% endblock %}
{% block body %}
\t{% block h2 %}
    {% endblock %}
    {% block page_content %}
    {% endblock %}

{% endblock %}
", "not_login.html.twig", "C:\\wamp64\\www\\symfony\\app\\Resources\\views\\not_login.html.twig");
    }
}
