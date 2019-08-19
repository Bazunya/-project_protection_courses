<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_def70224a1989cd41752e18e83b83ea5740f89d4b84c82d1fccaeb90ce749e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cffa1cf6a79c797b30e0ad07f81a74bad94b84d3141f120062450810fa37d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cffa1cf6a79c797b30e0ad07f81a74bad94b84d3141f120062450810fa37d43->enter($__internal_0cffa1cf6a79c797b30e0ad07f81a74bad94b84d3141f120062450810fa37d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ba5f8c45d1bace7a906f358a2d7d05094625510f9fa87cf9d36fc4983054122e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5f8c45d1bace7a906f358a2d7d05094625510f9fa87cf9d36fc4983054122e->enter($__internal_ba5f8c45d1bace7a906f358a2d7d05094625510f9fa87cf9d36fc4983054122e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_0cffa1cf6a79c797b30e0ad07f81a74bad94b84d3141f120062450810fa37d43->leave($__internal_0cffa1cf6a79c797b30e0ad07f81a74bad94b84d3141f120062450810fa37d43_prof);

        
        $__internal_ba5f8c45d1bace7a906f358a2d7d05094625510f9fa87cf9d36fc4983054122e->leave($__internal_ba5f8c45d1bace7a906f358a2d7d05094625510f9fa87cf9d36fc4983054122e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_61719186a427b1905a59f0e771b8bcdabac0993013e63eab0ff6bcade6f0de11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61719186a427b1905a59f0e771b8bcdabac0993013e63eab0ff6bcade6f0de11->enter($__internal_61719186a427b1905a59f0e771b8bcdabac0993013e63eab0ff6bcade6f0de11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_1d2065e424d7964ce5ebe8eb622b9389d3e649501d716edf2230502541e4f6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2065e424d7964ce5ebe8eb622b9389d3e649501d716edf2230502541e4f6e6->enter($__internal_1d2065e424d7964ce5ebe8eb622b9389d3e649501d716edf2230502541e4f6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_1d2065e424d7964ce5ebe8eb622b9389d3e649501d716edf2230502541e4f6e6->leave($__internal_1d2065e424d7964ce5ebe8eb622b9389d3e649501d716edf2230502541e4f6e6_prof);

        
        $__internal_61719186a427b1905a59f0e771b8bcdabac0993013e63eab0ff6bcade6f0de11->leave($__internal_61719186a427b1905a59f0e771b8bcdabac0993013e63eab0ff6bcade6f0de11_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c1a23d1817bf7ccbcb9980742bc54742b6d9b4ea3fdf9c15da00fbb90be95381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a23d1817bf7ccbcb9980742bc54742b6d9b4ea3fdf9c15da00fbb90be95381->enter($__internal_c1a23d1817bf7ccbcb9980742bc54742b6d9b4ea3fdf9c15da00fbb90be95381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_76c348401559f5fe889e0629b1b80c8db33349281d2d01a10dace7a6c89db182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c348401559f5fe889e0629b1b80c8db33349281d2d01a10dace7a6c89db182->enter($__internal_76c348401559f5fe889e0629b1b80c8db33349281d2d01a10dace7a6c89db182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_76c348401559f5fe889e0629b1b80c8db33349281d2d01a10dace7a6c89db182->leave($__internal_76c348401559f5fe889e0629b1b80c8db33349281d2d01a10dace7a6c89db182_prof);

        
        $__internal_c1a23d1817bf7ccbcb9980742bc54742b6d9b4ea3fdf9c15da00fbb90be95381->leave($__internal_c1a23d1817bf7ccbcb9980742bc54742b6d9b4ea3fdf9c15da00fbb90be95381_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_dca1209d608b76678eec222c5ed5f3184feb5667c59eb3ac163a070a6ee35673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca1209d608b76678eec222c5ed5f3184feb5667c59eb3ac163a070a6ee35673->enter($__internal_dca1209d608b76678eec222c5ed5f3184feb5667c59eb3ac163a070a6ee35673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3490d3a65e28dd0e6ac058f893d178d56ecbe2852526388889b010066ea8454c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3490d3a65e28dd0e6ac058f893d178d56ecbe2852526388889b010066ea8454c->enter($__internal_3490d3a65e28dd0e6ac058f893d178d56ecbe2852526388889b010066ea8454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_3490d3a65e28dd0e6ac058f893d178d56ecbe2852526388889b010066ea8454c->leave($__internal_3490d3a65e28dd0e6ac058f893d178d56ecbe2852526388889b010066ea8454c_prof);

        
        $__internal_dca1209d608b76678eec222c5ed5f3184feb5667c59eb3ac163a070a6ee35673->leave($__internal_dca1209d608b76678eec222c5ed5f3184feb5667c59eb3ac163a070a6ee35673_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6cf073d559f927994a0e029f777eb360725bde942b3487b5fdbfd80b8af17b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf073d559f927994a0e029f777eb360725bde942b3487b5fdbfd80b8af17b8b->enter($__internal_6cf073d559f927994a0e029f777eb360725bde942b3487b5fdbfd80b8af17b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_951eb12de8bc0376e6fd3c6a7bed8f03d1dedb4056fc7f58301cc2911e645e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951eb12de8bc0376e6fd3c6a7bed8f03d1dedb4056fc7f58301cc2911e645e03->enter($__internal_951eb12de8bc0376e6fd3c6a7bed8f03d1dedb4056fc7f58301cc2911e645e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_951eb12de8bc0376e6fd3c6a7bed8f03d1dedb4056fc7f58301cc2911e645e03->leave($__internal_951eb12de8bc0376e6fd3c6a7bed8f03d1dedb4056fc7f58301cc2911e645e03_prof);

        
        $__internal_6cf073d559f927994a0e029f777eb360725bde942b3487b5fdbfd80b8af17b8b->leave($__internal_6cf073d559f927994a0e029f777eb360725bde942b3487b5fdbfd80b8af17b8b_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_805b2015e6be437e9c6078d0354e0aade19d074a22aa7ac8f0f01e8f13ebb36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_805b2015e6be437e9c6078d0354e0aade19d074a22aa7ac8f0f01e8f13ebb36a->enter($__internal_805b2015e6be437e9c6078d0354e0aade19d074a22aa7ac8f0f01e8f13ebb36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_560e9ae2cff0ddbd0335126e10013f3648268ab7a1a9a4829b150634b4ab142d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560e9ae2cff0ddbd0335126e10013f3648268ab7a1a9a4829b150634b4ab142d->enter($__internal_560e9ae2cff0ddbd0335126e10013f3648268ab7a1a9a4829b150634b4ab142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_560e9ae2cff0ddbd0335126e10013f3648268ab7a1a9a4829b150634b4ab142d->leave($__internal_560e9ae2cff0ddbd0335126e10013f3648268ab7a1a9a4829b150634b4ab142d_prof);

        
        $__internal_805b2015e6be437e9c6078d0354e0aade19d074a22aa7ac8f0f01e8f13ebb36a->leave($__internal_805b2015e6be437e9c6078d0354e0aade19d074a22aa7ac8f0f01e8f13ebb36a_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7b8ce648c1fac373c11b5be868603687cac6868f7622ffb3a4e6a60dd4cf2bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8ce648c1fac373c11b5be868603687cac6868f7622ffb3a4e6a60dd4cf2bde->enter($__internal_7b8ce648c1fac373c11b5be868603687cac6868f7622ffb3a4e6a60dd4cf2bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_596a62406212d3087760f29eb6906aa8a36a6cceca07a1cc39e7e17b1f644942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596a62406212d3087760f29eb6906aa8a36a6cceca07a1cc39e7e17b1f644942->enter($__internal_596a62406212d3087760f29eb6906aa8a36a6cceca07a1cc39e7e17b1f644942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_596a62406212d3087760f29eb6906aa8a36a6cceca07a1cc39e7e17b1f644942->leave($__internal_596a62406212d3087760f29eb6906aa8a36a6cceca07a1cc39e7e17b1f644942_prof);

        
        $__internal_7b8ce648c1fac373c11b5be868603687cac6868f7622ffb3a4e6a60dd4cf2bde->leave($__internal_7b8ce648c1fac373c11b5be868603687cac6868f7622ffb3a4e6a60dd4cf2bde_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_4eaa5d48088eeaed93af6ae13a3bca0092697e410c26f352c19f1e56ec34e816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaa5d48088eeaed93af6ae13a3bca0092697e410c26f352c19f1e56ec34e816->enter($__internal_4eaa5d48088eeaed93af6ae13a3bca0092697e410c26f352c19f1e56ec34e816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_d11fe919b927ff7a6920d0c3c01a16f27eb3fdb93f4831eca6387dae2d7acdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11fe919b927ff7a6920d0c3c01a16f27eb3fdb93f4831eca6387dae2d7acdc0->enter($__internal_d11fe919b927ff7a6920d0c3c01a16f27eb3fdb93f4831eca6387dae2d7acdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d11fe919b927ff7a6920d0c3c01a16f27eb3fdb93f4831eca6387dae2d7acdc0->leave($__internal_d11fe919b927ff7a6920d0c3c01a16f27eb3fdb93f4831eca6387dae2d7acdc0_prof);

        
        $__internal_4eaa5d48088eeaed93af6ae13a3bca0092697e410c26f352c19f1e56ec34e816->leave($__internal_4eaa5d48088eeaed93af6ae13a3bca0092697e410c26f352c19f1e56ec34e816_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c173a4b341cf5f35199a4ace9dd57c0b7cfa1de19b80c71a84a4b50f0c82ce91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c173a4b341cf5f35199a4ace9dd57c0b7cfa1de19b80c71a84a4b50f0c82ce91->enter($__internal_c173a4b341cf5f35199a4ace9dd57c0b7cfa1de19b80c71a84a4b50f0c82ce91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b1598bf532f1bcfa91bb7f387ee54b4a8ba57b03dfb8a10ddc48acaa0aa5d09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1598bf532f1bcfa91bb7f387ee54b4a8ba57b03dfb8a10ddc48acaa0aa5d09f->enter($__internal_b1598bf532f1bcfa91bb7f387ee54b4a8ba57b03dfb8a10ddc48acaa0aa5d09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b1598bf532f1bcfa91bb7f387ee54b4a8ba57b03dfb8a10ddc48acaa0aa5d09f->leave($__internal_b1598bf532f1bcfa91bb7f387ee54b4a8ba57b03dfb8a10ddc48acaa0aa5d09f_prof);

        
        $__internal_c173a4b341cf5f35199a4ace9dd57c0b7cfa1de19b80c71a84a4b50f0c82ce91->leave($__internal_c173a4b341cf5f35199a4ace9dd57c0b7cfa1de19b80c71a84a4b50f0c82ce91_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_d0b6143ae85b24222714a8a6165b7409b1e45bfae996c6b07e49082adb107c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b6143ae85b24222714a8a6165b7409b1e45bfae996c6b07e49082adb107c73->enter($__internal_d0b6143ae85b24222714a8a6165b7409b1e45bfae996c6b07e49082adb107c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_a5ec958cb5bf1bb51703aac3a476b40ac210f9dcf6ac21f775f33c94c229d3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ec958cb5bf1bb51703aac3a476b40ac210f9dcf6ac21f775f33c94c229d3c2->enter($__internal_a5ec958cb5bf1bb51703aac3a476b40ac210f9dcf6ac21f775f33c94c229d3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a5ec958cb5bf1bb51703aac3a476b40ac210f9dcf6ac21f775f33c94c229d3c2->leave($__internal_a5ec958cb5bf1bb51703aac3a476b40ac210f9dcf6ac21f775f33c94c229d3c2_prof);

        
        $__internal_d0b6143ae85b24222714a8a6165b7409b1e45bfae996c6b07e49082adb107c73->leave($__internal_d0b6143ae85b24222714a8a6165b7409b1e45bfae996c6b07e49082adb107c73_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8bf8034ad0acbcefc6a2744bb8f38b27a6cce6a21a7433646e86a31b315d925c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf8034ad0acbcefc6a2744bb8f38b27a6cce6a21a7433646e86a31b315d925c->enter($__internal_8bf8034ad0acbcefc6a2744bb8f38b27a6cce6a21a7433646e86a31b315d925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2c566c75704556d129d6239a51798e0a95f066e882a2c77f7fd1129031bec92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c566c75704556d129d6239a51798e0a95f066e882a2c77f7fd1129031bec92e->enter($__internal_2c566c75704556d129d6239a51798e0a95f066e882a2c77f7fd1129031bec92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_2c566c75704556d129d6239a51798e0a95f066e882a2c77f7fd1129031bec92e->leave($__internal_2c566c75704556d129d6239a51798e0a95f066e882a2c77f7fd1129031bec92e_prof);

        
        $__internal_8bf8034ad0acbcefc6a2744bb8f38b27a6cce6a21a7433646e86a31b315d925c->leave($__internal_8bf8034ad0acbcefc6a2744bb8f38b27a6cce6a21a7433646e86a31b315d925c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
