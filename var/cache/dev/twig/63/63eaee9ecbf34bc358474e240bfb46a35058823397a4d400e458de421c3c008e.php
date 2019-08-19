<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_e42c783188af7ef01958625e708ecc903bd18dcbe05480c1581043c31e7d72d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b86aaa569abd6c2fa1906e7e8f65946a11a1147531c5bd0ddb77a047b0c92b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86aaa569abd6c2fa1906e7e8f65946a11a1147531c5bd0ddb77a047b0c92b11->enter($__internal_b86aaa569abd6c2fa1906e7e8f65946a11a1147531c5bd0ddb77a047b0c92b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_1e218a21e8c4f422fb4f3766d4a3018f9f6ab5e5b0a4c4219eb774213b001e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e218a21e8c4f422fb4f3766d4a3018f9f6ab5e5b0a4c4219eb774213b001e15->enter($__internal_1e218a21e8c4f422fb4f3766d4a3018f9f6ab5e5b0a4c4219eb774213b001e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b86aaa569abd6c2fa1906e7e8f65946a11a1147531c5bd0ddb77a047b0c92b11->leave($__internal_b86aaa569abd6c2fa1906e7e8f65946a11a1147531c5bd0ddb77a047b0c92b11_prof);

        
        $__internal_1e218a21e8c4f422fb4f3766d4a3018f9f6ab5e5b0a4c4219eb774213b001e15->leave($__internal_1e218a21e8c4f422fb4f3766d4a3018f9f6ab5e5b0a4c4219eb774213b001e15_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d62c7c33483a5da00187d9d38b9d658871695fea676a7519ab0734943974edad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62c7c33483a5da00187d9d38b9d658871695fea676a7519ab0734943974edad->enter($__internal_d62c7c33483a5da00187d9d38b9d658871695fea676a7519ab0734943974edad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_281ab4b2a9c464567e510c175c1c37aac16a33b3cb3b5dd4ec85a1e457d9c3a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ab4b2a9c464567e510c175c1c37aac16a33b3cb3b5dd4ec85a1e457d9c3a0->enter($__internal_281ab4b2a9c464567e510c175c1c37aac16a33b3cb3b5dd4ec85a1e457d9c3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_281ab4b2a9c464567e510c175c1c37aac16a33b3cb3b5dd4ec85a1e457d9c3a0->leave($__internal_281ab4b2a9c464567e510c175c1c37aac16a33b3cb3b5dd4ec85a1e457d9c3a0_prof);

        
        $__internal_d62c7c33483a5da00187d9d38b9d658871695fea676a7519ab0734943974edad->leave($__internal_d62c7c33483a5da00187d9d38b9d658871695fea676a7519ab0734943974edad_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c997c395ac7bfd157ab7afcbdcc261a30ed193755ad521342f513df3ba0dbcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c997c395ac7bfd157ab7afcbdcc261a30ed193755ad521342f513df3ba0dbcd5->enter($__internal_c997c395ac7bfd157ab7afcbdcc261a30ed193755ad521342f513df3ba0dbcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6128e2ed2a5f6f5ddc633c3b8e43ead5c7b8024414d32bdf7ef342f8c1145008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6128e2ed2a5f6f5ddc633c3b8e43ead5c7b8024414d32bdf7ef342f8c1145008->enter($__internal_6128e2ed2a5f6f5ddc633c3b8e43ead5c7b8024414d32bdf7ef342f8c1145008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6128e2ed2a5f6f5ddc633c3b8e43ead5c7b8024414d32bdf7ef342f8c1145008->leave($__internal_6128e2ed2a5f6f5ddc633c3b8e43ead5c7b8024414d32bdf7ef342f8c1145008_prof);

        
        $__internal_c997c395ac7bfd157ab7afcbdcc261a30ed193755ad521342f513df3ba0dbcd5->leave($__internal_c997c395ac7bfd157ab7afcbdcc261a30ed193755ad521342f513df3ba0dbcd5_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8e077497dc3ec2563612752e43e6fb22e87ba745c8a5ac36053dfaaf095a63fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e077497dc3ec2563612752e43e6fb22e87ba745c8a5ac36053dfaaf095a63fa->enter($__internal_8e077497dc3ec2563612752e43e6fb22e87ba745c8a5ac36053dfaaf095a63fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a8217854e8dace9fdae0c5c3c5744ccd7c1971cdc55690d3d9b2e8ac66527b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8217854e8dace9fdae0c5c3c5744ccd7c1971cdc55690d3d9b2e8ac66527b00->enter($__internal_a8217854e8dace9fdae0c5c3c5744ccd7c1971cdc55690d3d9b2e8ac66527b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a8217854e8dace9fdae0c5c3c5744ccd7c1971cdc55690d3d9b2e8ac66527b00->leave($__internal_a8217854e8dace9fdae0c5c3c5744ccd7c1971cdc55690d3d9b2e8ac66527b00_prof);

        
        $__internal_8e077497dc3ec2563612752e43e6fb22e87ba745c8a5ac36053dfaaf095a63fa->leave($__internal_8e077497dc3ec2563612752e43e6fb22e87ba745c8a5ac36053dfaaf095a63fa_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_68776e43d469ca4ca501f57b168bd70a9c589c80754398dfb63155e913ff0181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68776e43d469ca4ca501f57b168bd70a9c589c80754398dfb63155e913ff0181->enter($__internal_68776e43d469ca4ca501f57b168bd70a9c589c80754398dfb63155e913ff0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_241da7f3701af80e79fcb16042d8a386b9f7fb4feace44faacdc548596f68048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241da7f3701af80e79fcb16042d8a386b9f7fb4feace44faacdc548596f68048->enter($__internal_241da7f3701af80e79fcb16042d8a386b9f7fb4feace44faacdc548596f68048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_f7ca232f1bdd169fb1c0d3605bc15ed28da8c269e01402e930d7f8c315bc80df = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_67f2f475809be97f3be10607625a77dd06f4d85f64154b132be2ee270c4dbc1d = "{{") && ('' === $__internal_67f2f475809be97f3be10607625a77dd06f4d85f64154b132be2ee270c4dbc1d || 0 === strpos($__internal_f7ca232f1bdd169fb1c0d3605bc15ed28da8c269e01402e930d7f8c315bc80df, $__internal_67f2f475809be97f3be10607625a77dd06f4d85f64154b132be2ee270c4dbc1d)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_421d848bea6a4e5b51b112a71dadc8daf1df56f4f22a459c680d10e5a717fea2 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_9c89058c430db508255b63d640ea7e73b66f7f3c5c4df5baa5b6ad05a02e8e00 = "}}") && ('' === $__internal_9c89058c430db508255b63d640ea7e73b66f7f3c5c4df5baa5b6ad05a02e8e00 || $__internal_9c89058c430db508255b63d640ea7e73b66f7f3c5c4df5baa5b6ad05a02e8e00 === substr($__internal_421d848bea6a4e5b51b112a71dadc8daf1df56f4f22a459c680d10e5a717fea2, -strlen($__internal_9c89058c430db508255b63d640ea7e73b66f7f3c5c4df5baa5b6ad05a02e8e00))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_241da7f3701af80e79fcb16042d8a386b9f7fb4feace44faacdc548596f68048->leave($__internal_241da7f3701af80e79fcb16042d8a386b9f7fb4feace44faacdc548596f68048_prof);

        
        $__internal_68776e43d469ca4ca501f57b168bd70a9c589c80754398dfb63155e913ff0181->leave($__internal_68776e43d469ca4ca501f57b168bd70a9c589c80754398dfb63155e913ff0181_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_87547e288070a467348ed4d41fdc5a3374ad6edaa259617f081e4bf8c5d0918c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87547e288070a467348ed4d41fdc5a3374ad6edaa259617f081e4bf8c5d0918c->enter($__internal_87547e288070a467348ed4d41fdc5a3374ad6edaa259617f081e4bf8c5d0918c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_eb673f2c6ebd960bf46af711113afb8ff15854476a206b5c55606d0c95813ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb673f2c6ebd960bf46af711113afb8ff15854476a206b5c55606d0c95813ed4->enter($__internal_eb673f2c6ebd960bf46af711113afb8ff15854476a206b5c55606d0c95813ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_eb673f2c6ebd960bf46af711113afb8ff15854476a206b5c55606d0c95813ed4->leave($__internal_eb673f2c6ebd960bf46af711113afb8ff15854476a206b5c55606d0c95813ed4_prof);

        
        $__internal_87547e288070a467348ed4d41fdc5a3374ad6edaa259617f081e4bf8c5d0918c->leave($__internal_87547e288070a467348ed4d41fdc5a3374ad6edaa259617f081e4bf8c5d0918c_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_46adbc9e6aedc3b6112ed445102e00500886b691699514cf6c6db4d4e7e32038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46adbc9e6aedc3b6112ed445102e00500886b691699514cf6c6db4d4e7e32038->enter($__internal_46adbc9e6aedc3b6112ed445102e00500886b691699514cf6c6db4d4e7e32038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_85d8332b585b653e06e7eac8e58232afbcecb9fad4c7f739da4fa20d653dee93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d8332b585b653e06e7eac8e58232afbcecb9fad4c7f739da4fa20d653dee93->enter($__internal_85d8332b585b653e06e7eac8e58232afbcecb9fad4c7f739da4fa20d653dee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_85d8332b585b653e06e7eac8e58232afbcecb9fad4c7f739da4fa20d653dee93->leave($__internal_85d8332b585b653e06e7eac8e58232afbcecb9fad4c7f739da4fa20d653dee93_prof);

        
        $__internal_46adbc9e6aedc3b6112ed445102e00500886b691699514cf6c6db4d4e7e32038->leave($__internal_46adbc9e6aedc3b6112ed445102e00500886b691699514cf6c6db4d4e7e32038_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_544ff93be2afbee9dbe4c558331384056dcbf80b616eac2dd662cffd5bda7863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544ff93be2afbee9dbe4c558331384056dcbf80b616eac2dd662cffd5bda7863->enter($__internal_544ff93be2afbee9dbe4c558331384056dcbf80b616eac2dd662cffd5bda7863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4e87fa8b320931115eaada41bfbc10e260c567a102984f23de491ea8cacf5c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e87fa8b320931115eaada41bfbc10e260c567a102984f23de491ea8cacf5c65->enter($__internal_4e87fa8b320931115eaada41bfbc10e260c567a102984f23de491ea8cacf5c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_4e87fa8b320931115eaada41bfbc10e260c567a102984f23de491ea8cacf5c65->leave($__internal_4e87fa8b320931115eaada41bfbc10e260c567a102984f23de491ea8cacf5c65_prof);

        
        $__internal_544ff93be2afbee9dbe4c558331384056dcbf80b616eac2dd662cffd5bda7863->leave($__internal_544ff93be2afbee9dbe4c558331384056dcbf80b616eac2dd662cffd5bda7863_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f97fdac11720919ac7df92c665324fa7089d9d55ecf67c2ad29957d07247fa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97fdac11720919ac7df92c665324fa7089d9d55ecf67c2ad29957d07247fa2d->enter($__internal_f97fdac11720919ac7df92c665324fa7089d9d55ecf67c2ad29957d07247fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_292ffe7d8e9a78e689a3fb9267b80f3136691347e98a95f338a930bf9f94ee97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292ffe7d8e9a78e689a3fb9267b80f3136691347e98a95f338a930bf9f94ee97->enter($__internal_292ffe7d8e9a78e689a3fb9267b80f3136691347e98a95f338a930bf9f94ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_292ffe7d8e9a78e689a3fb9267b80f3136691347e98a95f338a930bf9f94ee97->leave($__internal_292ffe7d8e9a78e689a3fb9267b80f3136691347e98a95f338a930bf9f94ee97_prof);

        
        $__internal_f97fdac11720919ac7df92c665324fa7089d9d55ecf67c2ad29957d07247fa2d->leave($__internal_f97fdac11720919ac7df92c665324fa7089d9d55ecf67c2ad29957d07247fa2d_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4be5ad09be6af75750b38acf55e50b85ab0e7c06d31108f95682e18856bea212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be5ad09be6af75750b38acf55e50b85ab0e7c06d31108f95682e18856bea212->enter($__internal_4be5ad09be6af75750b38acf55e50b85ab0e7c06d31108f95682e18856bea212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9ef7635146308dc43c2d679668a0bde46b533eec7aba595455d6d328bd2c8ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef7635146308dc43c2d679668a0bde46b533eec7aba595455d6d328bd2c8ffb->enter($__internal_9ef7635146308dc43c2d679668a0bde46b533eec7aba595455d6d328bd2c8ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_9ef7635146308dc43c2d679668a0bde46b533eec7aba595455d6d328bd2c8ffb->leave($__internal_9ef7635146308dc43c2d679668a0bde46b533eec7aba595455d6d328bd2c8ffb_prof);

        
        $__internal_4be5ad09be6af75750b38acf55e50b85ab0e7c06d31108f95682e18856bea212->leave($__internal_4be5ad09be6af75750b38acf55e50b85ab0e7c06d31108f95682e18856bea212_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9841ff34792cd5d401ba7af60bc5d40abb67e47add15284ea9937fa564c744b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9841ff34792cd5d401ba7af60bc5d40abb67e47add15284ea9937fa564c744b2->enter($__internal_9841ff34792cd5d401ba7af60bc5d40abb67e47add15284ea9937fa564c744b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_544da52c278b96b0151d003511023c7a5ba6bd3c4c78a86f22f0c65024c69019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544da52c278b96b0151d003511023c7a5ba6bd3c4c78a86f22f0c65024c69019->enter($__internal_544da52c278b96b0151d003511023c7a5ba6bd3c4c78a86f22f0c65024c69019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_544da52c278b96b0151d003511023c7a5ba6bd3c4c78a86f22f0c65024c69019->leave($__internal_544da52c278b96b0151d003511023c7a5ba6bd3c4c78a86f22f0c65024c69019_prof);

        
        $__internal_9841ff34792cd5d401ba7af60bc5d40abb67e47add15284ea9937fa564c744b2->leave($__internal_9841ff34792cd5d401ba7af60bc5d40abb67e47add15284ea9937fa564c744b2_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9558ced4bc331c8d0d0be1b59f714e204c0e9ded303c4c41706359749e31884e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9558ced4bc331c8d0d0be1b59f714e204c0e9ded303c4c41706359749e31884e->enter($__internal_9558ced4bc331c8d0d0be1b59f714e204c0e9ded303c4c41706359749e31884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_06d09221b968e0e06180958faf112a52801f7f2c516a96e378bebc6a66508db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d09221b968e0e06180958faf112a52801f7f2c516a96e378bebc6a66508db4->enter($__internal_06d09221b968e0e06180958faf112a52801f7f2c516a96e378bebc6a66508db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_06d09221b968e0e06180958faf112a52801f7f2c516a96e378bebc6a66508db4->leave($__internal_06d09221b968e0e06180958faf112a52801f7f2c516a96e378bebc6a66508db4_prof);

        
        $__internal_9558ced4bc331c8d0d0be1b59f714e204c0e9ded303c4c41706359749e31884e->leave($__internal_9558ced4bc331c8d0d0be1b59f714e204c0e9ded303c4c41706359749e31884e_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9cf89e52ceeb1077a8f70ade0ac160bc375d9a5f9c269e8695a5cde427c68da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf89e52ceeb1077a8f70ade0ac160bc375d9a5f9c269e8695a5cde427c68da8->enter($__internal_9cf89e52ceeb1077a8f70ade0ac160bc375d9a5f9c269e8695a5cde427c68da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ba59202a260e1ffa3eb02dc3d02609aa72693ed9f2e788b96460f828a1b65a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba59202a260e1ffa3eb02dc3d02609aa72693ed9f2e788b96460f828a1b65a83->enter($__internal_ba59202a260e1ffa3eb02dc3d02609aa72693ed9f2e788b96460f828a1b65a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_ba59202a260e1ffa3eb02dc3d02609aa72693ed9f2e788b96460f828a1b65a83->leave($__internal_ba59202a260e1ffa3eb02dc3d02609aa72693ed9f2e788b96460f828a1b65a83_prof);

        
        $__internal_9cf89e52ceeb1077a8f70ade0ac160bc375d9a5f9c269e8695a5cde427c68da8->leave($__internal_9cf89e52ceeb1077a8f70ade0ac160bc375d9a5f9c269e8695a5cde427c68da8_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e2afa90d47e49f5b1acf8cc9c54f45bb105f5362342f757118c2846448327f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2afa90d47e49f5b1acf8cc9c54f45bb105f5362342f757118c2846448327f28->enter($__internal_e2afa90d47e49f5b1acf8cc9c54f45bb105f5362342f757118c2846448327f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_26c310d56fdd5247d403414372ece5affb42cb62b7e80a403391c6fb468b5f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c310d56fdd5247d403414372ece5affb42cb62b7e80a403391c6fb468b5f05->enter($__internal_26c310d56fdd5247d403414372ece5affb42cb62b7e80a403391c6fb468b5f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_26c310d56fdd5247d403414372ece5affb42cb62b7e80a403391c6fb468b5f05->leave($__internal_26c310d56fdd5247d403414372ece5affb42cb62b7e80a403391c6fb468b5f05_prof);

        
        $__internal_e2afa90d47e49f5b1acf8cc9c54f45bb105f5362342f757118c2846448327f28->leave($__internal_e2afa90d47e49f5b1acf8cc9c54f45bb105f5362342f757118c2846448327f28_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6f5dc4bc2f1dec343b90842db0ae5ec0cb97c85da671337dee84e80ed98557b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5dc4bc2f1dec343b90842db0ae5ec0cb97c85da671337dee84e80ed98557b2->enter($__internal_6f5dc4bc2f1dec343b90842db0ae5ec0cb97c85da671337dee84e80ed98557b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_58f081d09e814a5530287f741b44a30ba7f7a2a2ebe7fcdb845a06a256e3cbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f081d09e814a5530287f741b44a30ba7f7a2a2ebe7fcdb845a06a256e3cbb2->enter($__internal_58f081d09e814a5530287f741b44a30ba7f7a2a2ebe7fcdb845a06a256e3cbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_58f081d09e814a5530287f741b44a30ba7f7a2a2ebe7fcdb845a06a256e3cbb2->leave($__internal_58f081d09e814a5530287f741b44a30ba7f7a2a2ebe7fcdb845a06a256e3cbb2_prof);

        
        $__internal_6f5dc4bc2f1dec343b90842db0ae5ec0cb97c85da671337dee84e80ed98557b2->leave($__internal_6f5dc4bc2f1dec343b90842db0ae5ec0cb97c85da671337dee84e80ed98557b2_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7883edd71ff322f1281ec9d7749f7d3cf8fc67f381706387868f7c338ddd8742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7883edd71ff322f1281ec9d7749f7d3cf8fc67f381706387868f7c338ddd8742->enter($__internal_7883edd71ff322f1281ec9d7749f7d3cf8fc67f381706387868f7c338ddd8742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_7088185d87f5daa60bac6ebe886b7a9af33bd651a57e7dfb223a994dc68a696f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7088185d87f5daa60bac6ebe886b7a9af33bd651a57e7dfb223a994dc68a696f->enter($__internal_7088185d87f5daa60bac6ebe886b7a9af33bd651a57e7dfb223a994dc68a696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_7088185d87f5daa60bac6ebe886b7a9af33bd651a57e7dfb223a994dc68a696f->leave($__internal_7088185d87f5daa60bac6ebe886b7a9af33bd651a57e7dfb223a994dc68a696f_prof);

        
        $__internal_7883edd71ff322f1281ec9d7749f7d3cf8fc67f381706387868f7c338ddd8742->leave($__internal_7883edd71ff322f1281ec9d7749f7d3cf8fc67f381706387868f7c338ddd8742_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7cbb00c348d9b80f63a1f5b55108e055f33fb389a479aa1e6bad775acd98b573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbb00c348d9b80f63a1f5b55108e055f33fb389a479aa1e6bad775acd98b573->enter($__internal_7cbb00c348d9b80f63a1f5b55108e055f33fb389a479aa1e6bad775acd98b573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_8110daa6cceba0a25f0b9f6bca5a67f81882cef6a74ebbac662428daa3d7e1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8110daa6cceba0a25f0b9f6bca5a67f81882cef6a74ebbac662428daa3d7e1db->enter($__internal_8110daa6cceba0a25f0b9f6bca5a67f81882cef6a74ebbac662428daa3d7e1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8110daa6cceba0a25f0b9f6bca5a67f81882cef6a74ebbac662428daa3d7e1db->leave($__internal_8110daa6cceba0a25f0b9f6bca5a67f81882cef6a74ebbac662428daa3d7e1db_prof);

        
        $__internal_7cbb00c348d9b80f63a1f5b55108e055f33fb389a479aa1e6bad775acd98b573->leave($__internal_7cbb00c348d9b80f63a1f5b55108e055f33fb389a479aa1e6bad775acd98b573_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_408540cb0b8d6b2104e3945992d56bc633a017cf2357fbfa9aff9a73fb756b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408540cb0b8d6b2104e3945992d56bc633a017cf2357fbfa9aff9a73fb756b40->enter($__internal_408540cb0b8d6b2104e3945992d56bc633a017cf2357fbfa9aff9a73fb756b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f21d541b8f273cd3367a0dba3c47048475d525552e0339bdd2974e6f2750b14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21d541b8f273cd3367a0dba3c47048475d525552e0339bdd2974e6f2750b14f->enter($__internal_f21d541b8f273cd3367a0dba3c47048475d525552e0339bdd2974e6f2750b14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f21d541b8f273cd3367a0dba3c47048475d525552e0339bdd2974e6f2750b14f->leave($__internal_f21d541b8f273cd3367a0dba3c47048475d525552e0339bdd2974e6f2750b14f_prof);

        
        $__internal_408540cb0b8d6b2104e3945992d56bc633a017cf2357fbfa9aff9a73fb756b40->leave($__internal_408540cb0b8d6b2104e3945992d56bc633a017cf2357fbfa9aff9a73fb756b40_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6067dc70cba86a2dd7626008b10d92cd41adb548c9ce624d8165521df25f3b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6067dc70cba86a2dd7626008b10d92cd41adb548c9ce624d8165521df25f3b34->enter($__internal_6067dc70cba86a2dd7626008b10d92cd41adb548c9ce624d8165521df25f3b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e20e4ef6fa1ecc41e7b0e4c081dcb041d26b9d7c2c0bda096a9a3e0145010422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20e4ef6fa1ecc41e7b0e4c081dcb041d26b9d7c2c0bda096a9a3e0145010422->enter($__internal_e20e4ef6fa1ecc41e7b0e4c081dcb041d26b9d7c2c0bda096a9a3e0145010422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 218
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_e20e4ef6fa1ecc41e7b0e4c081dcb041d26b9d7c2c0bda096a9a3e0145010422->leave($__internal_e20e4ef6fa1ecc41e7b0e4c081dcb041d26b9d7c2c0bda096a9a3e0145010422_prof);

        
        $__internal_6067dc70cba86a2dd7626008b10d92cd41adb548c9ce624d8165521df25f3b34->leave($__internal_6067dc70cba86a2dd7626008b10d92cd41adb548c9ce624d8165521df25f3b34_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a9892fbe612d9872b7f575a1c83b5ab29487510225145f444d6422f0d6075fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9892fbe612d9872b7f575a1c83b5ab29487510225145f444d6422f0d6075fed->enter($__internal_a9892fbe612d9872b7f575a1c83b5ab29487510225145f444d6422f0d6075fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d5bd44c18b0d6d2fcfe51a0c68229f6c06e5edbcf8bb0add3c6fe05acc6305f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bd44c18b0d6d2fcfe51a0c68229f6c06e5edbcf8bb0add3c6fe05acc6305f7->enter($__internal_d5bd44c18b0d6d2fcfe51a0c68229f6c06e5edbcf8bb0add3c6fe05acc6305f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_d5bd44c18b0d6d2fcfe51a0c68229f6c06e5edbcf8bb0add3c6fe05acc6305f7->leave($__internal_d5bd44c18b0d6d2fcfe51a0c68229f6c06e5edbcf8bb0add3c6fe05acc6305f7_prof);

        
        $__internal_a9892fbe612d9872b7f575a1c83b5ab29487510225145f444d6422f0d6075fed->leave($__internal_a9892fbe612d9872b7f575a1c83b5ab29487510225145f444d6422f0d6075fed_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a81e7eb15c5ab2c9167d66a946d95ca8cf098b3a082475800f0d5e18c960aaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81e7eb15c5ab2c9167d66a946d95ca8cf098b3a082475800f0d5e18c960aaa4->enter($__internal_a81e7eb15c5ab2c9167d66a946d95ca8cf098b3a082475800f0d5e18c960aaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_72e4d5eb39e8c570ae3ab7ea3b48f7ab8245590457d62356cb4e55f0033005b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e4d5eb39e8c570ae3ab7ea3b48f7ab8245590457d62356cb4e55f0033005b3->enter($__internal_72e4d5eb39e8c570ae3ab7ea3b48f7ab8245590457d62356cb4e55f0033005b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_72e4d5eb39e8c570ae3ab7ea3b48f7ab8245590457d62356cb4e55f0033005b3->leave($__internal_72e4d5eb39e8c570ae3ab7ea3b48f7ab8245590457d62356cb4e55f0033005b3_prof);

        
        $__internal_a81e7eb15c5ab2c9167d66a946d95ca8cf098b3a082475800f0d5e18c960aaa4->leave($__internal_a81e7eb15c5ab2c9167d66a946d95ca8cf098b3a082475800f0d5e18c960aaa4_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_0a3922029c3494e7540302cc1aa3e6ddfb6e72eed6310cb228e593bf03c7902c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3922029c3494e7540302cc1aa3e6ddfb6e72eed6310cb228e593bf03c7902c->enter($__internal_0a3922029c3494e7540302cc1aa3e6ddfb6e72eed6310cb228e593bf03c7902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_aa1b735f8ed734d6dcf53da0afd8e9411372861a64e24aa7af2fb765661c0314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1b735f8ed734d6dcf53da0afd8e9411372861a64e24aa7af2fb765661c0314->enter($__internal_aa1b735f8ed734d6dcf53da0afd8e9411372861a64e24aa7af2fb765661c0314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aa1b735f8ed734d6dcf53da0afd8e9411372861a64e24aa7af2fb765661c0314->leave($__internal_aa1b735f8ed734d6dcf53da0afd8e9411372861a64e24aa7af2fb765661c0314_prof);

        
        $__internal_0a3922029c3494e7540302cc1aa3e6ddfb6e72eed6310cb228e593bf03c7902c->leave($__internal_0a3922029c3494e7540302cc1aa3e6ddfb6e72eed6310cb228e593bf03c7902c_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cca657bf80f4b6989472cf0336522222045b125025307b23df19115c41af127f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cca657bf80f4b6989472cf0336522222045b125025307b23df19115c41af127f->enter($__internal_cca657bf80f4b6989472cf0336522222045b125025307b23df19115c41af127f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e2d5d69221745d574406749c8cc9f33061e15f8247db4472324e478c431c0a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d5d69221745d574406749c8cc9f33061e15f8247db4472324e478c431c0a3d->enter($__internal_e2d5d69221745d574406749c8cc9f33061e15f8247db4472324e478c431c0a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e2d5d69221745d574406749c8cc9f33061e15f8247db4472324e478c431c0a3d->leave($__internal_e2d5d69221745d574406749c8cc9f33061e15f8247db4472324e478c431c0a3d_prof);

        
        $__internal_cca657bf80f4b6989472cf0336522222045b125025307b23df19115c41af127f->leave($__internal_cca657bf80f4b6989472cf0336522222045b125025307b23df19115c41af127f_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c65daf093f5887559c2aff449f87693510a9626c55503355a6bf363bce8c021a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65daf093f5887559c2aff449f87693510a9626c55503355a6bf363bce8c021a->enter($__internal_c65daf093f5887559c2aff449f87693510a9626c55503355a6bf363bce8c021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f747df8741a41761707cb17f0da26bc62240b90e492fa45d636fa1fe3768b9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f747df8741a41761707cb17f0da26bc62240b90e492fa45d636fa1fe3768b9c7->enter($__internal_f747df8741a41761707cb17f0da26bc62240b90e492fa45d636fa1fe3768b9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f747df8741a41761707cb17f0da26bc62240b90e492fa45d636fa1fe3768b9c7->leave($__internal_f747df8741a41761707cb17f0da26bc62240b90e492fa45d636fa1fe3768b9c7_prof);

        
        $__internal_c65daf093f5887559c2aff449f87693510a9626c55503355a6bf363bce8c021a->leave($__internal_c65daf093f5887559c2aff449f87693510a9626c55503355a6bf363bce8c021a_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_186134ff47758ac33ab05521d37397423c17d3638a131ff76d02447757c4a583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186134ff47758ac33ab05521d37397423c17d3638a131ff76d02447757c4a583->enter($__internal_186134ff47758ac33ab05521d37397423c17d3638a131ff76d02447757c4a583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b5c5d6911feb869c87ed11d9f1ce55e24644dbb1532b2d4763bfd059717847fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c5d6911feb869c87ed11d9f1ce55e24644dbb1532b2d4763bfd059717847fb->enter($__internal_b5c5d6911feb869c87ed11d9f1ce55e24644dbb1532b2d4763bfd059717847fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b5c5d6911feb869c87ed11d9f1ce55e24644dbb1532b2d4763bfd059717847fb->leave($__internal_b5c5d6911feb869c87ed11d9f1ce55e24644dbb1532b2d4763bfd059717847fb_prof);

        
        $__internal_186134ff47758ac33ab05521d37397423c17d3638a131ff76d02447757c4a583->leave($__internal_186134ff47758ac33ab05521d37397423c17d3638a131ff76d02447757c4a583_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_836da3fd8c58dcd0c6420763867ba358cf37736a3da5f9da59211161b86e46ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_836da3fd8c58dcd0c6420763867ba358cf37736a3da5f9da59211161b86e46ca->enter($__internal_836da3fd8c58dcd0c6420763867ba358cf37736a3da5f9da59211161b86e46ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_267817f4a8ff259d0de7c99d02bd14b01916926ee61cf876c2462453f3aebd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267817f4a8ff259d0de7c99d02bd14b01916926ee61cf876c2462453f3aebd07->enter($__internal_267817f4a8ff259d0de7c99d02bd14b01916926ee61cf876c2462453f3aebd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_267817f4a8ff259d0de7c99d02bd14b01916926ee61cf876c2462453f3aebd07->leave($__internal_267817f4a8ff259d0de7c99d02bd14b01916926ee61cf876c2462453f3aebd07_prof);

        
        $__internal_836da3fd8c58dcd0c6420763867ba358cf37736a3da5f9da59211161b86e46ca->leave($__internal_836da3fd8c58dcd0c6420763867ba358cf37736a3da5f9da59211161b86e46ca_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_4e923ff2b5c5cfcc22875c58cee1d20c3a2b775ff0e799d9c6101759651b80b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e923ff2b5c5cfcc22875c58cee1d20c3a2b775ff0e799d9c6101759651b80b4->enter($__internal_4e923ff2b5c5cfcc22875c58cee1d20c3a2b775ff0e799d9c6101759651b80b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0d5d537a6d92e97fd3e2f3c4ceccc48266e1aae244f21bef90cd56c56518759e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5d537a6d92e97fd3e2f3c4ceccc48266e1aae244f21bef90cd56c56518759e->enter($__internal_0d5d537a6d92e97fd3e2f3c4ceccc48266e1aae244f21bef90cd56c56518759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_0d5d537a6d92e97fd3e2f3c4ceccc48266e1aae244f21bef90cd56c56518759e->leave($__internal_0d5d537a6d92e97fd3e2f3c4ceccc48266e1aae244f21bef90cd56c56518759e_prof);

        
        $__internal_4e923ff2b5c5cfcc22875c58cee1d20c3a2b775ff0e799d9c6101759651b80b4->leave($__internal_4e923ff2b5c5cfcc22875c58cee1d20c3a2b775ff0e799d9c6101759651b80b4_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2940ce1ecdefc7962e7b56fbdcb6e51414c0008388f3a9842d0ab7f4aef72ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2940ce1ecdefc7962e7b56fbdcb6e51414c0008388f3a9842d0ab7f4aef72ca3->enter($__internal_2940ce1ecdefc7962e7b56fbdcb6e51414c0008388f3a9842d0ab7f4aef72ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_049ba89ddabbb6a1ec27988a3501aaa486ca9b0fb042b757b0b27febe7069f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049ba89ddabbb6a1ec27988a3501aaa486ca9b0fb042b757b0b27febe7069f6b->enter($__internal_049ba89ddabbb6a1ec27988a3501aaa486ca9b0fb042b757b0b27febe7069f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_049ba89ddabbb6a1ec27988a3501aaa486ca9b0fb042b757b0b27febe7069f6b->leave($__internal_049ba89ddabbb6a1ec27988a3501aaa486ca9b0fb042b757b0b27febe7069f6b_prof);

        
        $__internal_2940ce1ecdefc7962e7b56fbdcb6e51414c0008388f3a9842d0ab7f4aef72ca3->leave($__internal_2940ce1ecdefc7962e7b56fbdcb6e51414c0008388f3a9842d0ab7f4aef72ca3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
