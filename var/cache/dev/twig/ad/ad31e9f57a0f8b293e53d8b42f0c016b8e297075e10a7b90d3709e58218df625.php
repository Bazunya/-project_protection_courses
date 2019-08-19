<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_00340579a8b0fe79724c93f1c9b302a31b35e10bf3ef839290bcf0629d46ee5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04197daecd6b02d490e3ceeeb72629de06796a7548d04ea2fc774add0c1b07df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04197daecd6b02d490e3ceeeb72629de06796a7548d04ea2fc774add0c1b07df->enter($__internal_04197daecd6b02d490e3ceeeb72629de06796a7548d04ea2fc774add0c1b07df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_e8ecc4a825f6a245ace6926bf90b6d8694641b7711f5f97b1cd23a59e89a653a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ecc4a825f6a245ace6926bf90b6d8694641b7711f5f97b1cd23a59e89a653a->enter($__internal_e8ecc4a825f6a245ace6926bf90b6d8694641b7711f5f97b1cd23a59e89a653a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04197daecd6b02d490e3ceeeb72629de06796a7548d04ea2fc774add0c1b07df->leave($__internal_04197daecd6b02d490e3ceeeb72629de06796a7548d04ea2fc774add0c1b07df_prof);

        
        $__internal_e8ecc4a825f6a245ace6926bf90b6d8694641b7711f5f97b1cd23a59e89a653a->leave($__internal_e8ecc4a825f6a245ace6926bf90b6d8694641b7711f5f97b1cd23a59e89a653a_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b699a6c422a9e749584aa13f2154e422afa9635bf1ede705ce7233f369d8ae96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b699a6c422a9e749584aa13f2154e422afa9635bf1ede705ce7233f369d8ae96->enter($__internal_b699a6c422a9e749584aa13f2154e422afa9635bf1ede705ce7233f369d8ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b6f9595ae0a8de50deff5daba27f682050876ddc9a4498259c9c3e86a48c5eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f9595ae0a8de50deff5daba27f682050876ddc9a4498259c9c3e86a48c5eb3->enter($__internal_b6f9595ae0a8de50deff5daba27f682050876ddc9a4498259c9c3e86a48c5eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b6f9595ae0a8de50deff5daba27f682050876ddc9a4498259c9c3e86a48c5eb3->leave($__internal_b6f9595ae0a8de50deff5daba27f682050876ddc9a4498259c9c3e86a48c5eb3_prof);

        
        $__internal_b699a6c422a9e749584aa13f2154e422afa9635bf1ede705ce7233f369d8ae96->leave($__internal_b699a6c422a9e749584aa13f2154e422afa9635bf1ede705ce7233f369d8ae96_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_393143a20471afdfdda112a536fbfa409ea1738d8b0261a498f58ad4c408b704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393143a20471afdfdda112a536fbfa409ea1738d8b0261a498f58ad4c408b704->enter($__internal_393143a20471afdfdda112a536fbfa409ea1738d8b0261a498f58ad4c408b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_dfc1ddafdc5f4c341e05f76ea2908430dadffff6d87d5625ca6fa5ca448f39c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc1ddafdc5f4c341e05f76ea2908430dadffff6d87d5625ca6fa5ca448f39c0->enter($__internal_dfc1ddafdc5f4c341e05f76ea2908430dadffff6d87d5625ca6fa5ca448f39c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_dfc1ddafdc5f4c341e05f76ea2908430dadffff6d87d5625ca6fa5ca448f39c0->leave($__internal_dfc1ddafdc5f4c341e05f76ea2908430dadffff6d87d5625ca6fa5ca448f39c0_prof);

        
        $__internal_393143a20471afdfdda112a536fbfa409ea1738d8b0261a498f58ad4c408b704->leave($__internal_393143a20471afdfdda112a536fbfa409ea1738d8b0261a498f58ad4c408b704_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_09caf5cd73d4fb2a32309ba69bad80e9456f7b92c736e47a32ac09f721ff7965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09caf5cd73d4fb2a32309ba69bad80e9456f7b92c736e47a32ac09f721ff7965->enter($__internal_09caf5cd73d4fb2a32309ba69bad80e9456f7b92c736e47a32ac09f721ff7965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_0662a4f647037ea3bef7543c1e692cbfa4a55f7fc0d32a398972183554bd9cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0662a4f647037ea3bef7543c1e692cbfa4a55f7fc0d32a398972183554bd9cdf->enter($__internal_0662a4f647037ea3bef7543c1e692cbfa4a55f7fc0d32a398972183554bd9cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_0662a4f647037ea3bef7543c1e692cbfa4a55f7fc0d32a398972183554bd9cdf->leave($__internal_0662a4f647037ea3bef7543c1e692cbfa4a55f7fc0d32a398972183554bd9cdf_prof);

        
        $__internal_09caf5cd73d4fb2a32309ba69bad80e9456f7b92c736e47a32ac09f721ff7965->leave($__internal_09caf5cd73d4fb2a32309ba69bad80e9456f7b92c736e47a32ac09f721ff7965_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_8e86b8aeb460506be2f758deb571b978fc64f380e844909ae490e26cab6fb06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e86b8aeb460506be2f758deb571b978fc64f380e844909ae490e26cab6fb06a->enter($__internal_8e86b8aeb460506be2f758deb571b978fc64f380e844909ae490e26cab6fb06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_12ff316e035646f7a46071c0b271031dd470eac1ea31acc029ac5f6a147900ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ff316e035646f7a46071c0b271031dd470eac1ea31acc029ac5f6a147900ee->enter($__internal_12ff316e035646f7a46071c0b271031dd470eac1ea31acc029ac5f6a147900ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_12ff316e035646f7a46071c0b271031dd470eac1ea31acc029ac5f6a147900ee->leave($__internal_12ff316e035646f7a46071c0b271031dd470eac1ea31acc029ac5f6a147900ee_prof);

        
        $__internal_8e86b8aeb460506be2f758deb571b978fc64f380e844909ae490e26cab6fb06a->leave($__internal_8e86b8aeb460506be2f758deb571b978fc64f380e844909ae490e26cab6fb06a_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1cdb2ed954912cc8d1d76e039b4c53e59f6ce95a9b18ffcd1366f7e6d2c71332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdb2ed954912cc8d1d76e039b4c53e59f6ce95a9b18ffcd1366f7e6d2c71332->enter($__internal_1cdb2ed954912cc8d1d76e039b4c53e59f6ce95a9b18ffcd1366f7e6d2c71332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_55137635ad74547a8b64dde55588062922fea8b4e521f6da057c05e4587854d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55137635ad74547a8b64dde55588062922fea8b4e521f6da057c05e4587854d2->enter($__internal_55137635ad74547a8b64dde55588062922fea8b4e521f6da057c05e4587854d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_55137635ad74547a8b64dde55588062922fea8b4e521f6da057c05e4587854d2->leave($__internal_55137635ad74547a8b64dde55588062922fea8b4e521f6da057c05e4587854d2_prof);

        
        $__internal_1cdb2ed954912cc8d1d76e039b4c53e59f6ce95a9b18ffcd1366f7e6d2c71332->leave($__internal_1cdb2ed954912cc8d1d76e039b4c53e59f6ce95a9b18ffcd1366f7e6d2c71332_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_bd025943e864d95b0959939afa49ebf1afab4972307e61a8aa05124927150498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd025943e864d95b0959939afa49ebf1afab4972307e61a8aa05124927150498->enter($__internal_bd025943e864d95b0959939afa49ebf1afab4972307e61a8aa05124927150498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7a81c8a9a5be3024f139f69cef682f474dbd5556b016a6bf956bd5722988d975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a81c8a9a5be3024f139f69cef682f474dbd5556b016a6bf956bd5722988d975->enter($__internal_7a81c8a9a5be3024f139f69cef682f474dbd5556b016a6bf956bd5722988d975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_7a81c8a9a5be3024f139f69cef682f474dbd5556b016a6bf956bd5722988d975->leave($__internal_7a81c8a9a5be3024f139f69cef682f474dbd5556b016a6bf956bd5722988d975_prof);

        
        $__internal_bd025943e864d95b0959939afa49ebf1afab4972307e61a8aa05124927150498->leave($__internal_bd025943e864d95b0959939afa49ebf1afab4972307e61a8aa05124927150498_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_12daf558e9839d98a1e0d403cfec9e97c9e4625ed66bb8d0b01e8460d6f3e9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12daf558e9839d98a1e0d403cfec9e97c9e4625ed66bb8d0b01e8460d6f3e9b5->enter($__internal_12daf558e9839d98a1e0d403cfec9e97c9e4625ed66bb8d0b01e8460d6f3e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5c37a0fc346931e1c7ff640b9be49c283d8f299265c94739e9fd5c5ba244f4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c37a0fc346931e1c7ff640b9be49c283d8f299265c94739e9fd5c5ba244f4b3->enter($__internal_5c37a0fc346931e1c7ff640b9be49c283d8f299265c94739e9fd5c5ba244f4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_5c37a0fc346931e1c7ff640b9be49c283d8f299265c94739e9fd5c5ba244f4b3->leave($__internal_5c37a0fc346931e1c7ff640b9be49c283d8f299265c94739e9fd5c5ba244f4b3_prof);

        
        $__internal_12daf558e9839d98a1e0d403cfec9e97c9e4625ed66bb8d0b01e8460d6f3e9b5->leave($__internal_12daf558e9839d98a1e0d403cfec9e97c9e4625ed66bb8d0b01e8460d6f3e9b5_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cefe2acd9f163d5e1a46f5a0c6256beaa9ed80d46697a947f03e5bc4541cb83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefe2acd9f163d5e1a46f5a0c6256beaa9ed80d46697a947f03e5bc4541cb83e->enter($__internal_cefe2acd9f163d5e1a46f5a0c6256beaa9ed80d46697a947f03e5bc4541cb83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e967f7c5fa79279ef01bff98660d407984587b65996cee23ddbb9f4f5d30959c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e967f7c5fa79279ef01bff98660d407984587b65996cee23ddbb9f4f5d30959c->enter($__internal_e967f7c5fa79279ef01bff98660d407984587b65996cee23ddbb9f4f5d30959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_e967f7c5fa79279ef01bff98660d407984587b65996cee23ddbb9f4f5d30959c->leave($__internal_e967f7c5fa79279ef01bff98660d407984587b65996cee23ddbb9f4f5d30959c_prof);

        
        $__internal_cefe2acd9f163d5e1a46f5a0c6256beaa9ed80d46697a947f03e5bc4541cb83e->leave($__internal_cefe2acd9f163d5e1a46f5a0c6256beaa9ed80d46697a947f03e5bc4541cb83e_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_49ebae480715baa58ec77b8c3642458743e691b0da0d5b2e0e1d96c57e5f2a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ebae480715baa58ec77b8c3642458743e691b0da0d5b2e0e1d96c57e5f2a64->enter($__internal_49ebae480715baa58ec77b8c3642458743e691b0da0d5b2e0e1d96c57e5f2a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_63688a912f84e847a5b8c588d18136259c4a463e56208b04c1d59b553a32b710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63688a912f84e847a5b8c588d18136259c4a463e56208b04c1d59b553a32b710->enter($__internal_63688a912f84e847a5b8c588d18136259c4a463e56208b04c1d59b553a32b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_63688a912f84e847a5b8c588d18136259c4a463e56208b04c1d59b553a32b710->leave($__internal_63688a912f84e847a5b8c588d18136259c4a463e56208b04c1d59b553a32b710_prof);

        
        $__internal_49ebae480715baa58ec77b8c3642458743e691b0da0d5b2e0e1d96c57e5f2a64->leave($__internal_49ebae480715baa58ec77b8c3642458743e691b0da0d5b2e0e1d96c57e5f2a64_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1f2e5ff4e99989915ef446825fb077460e32e601be406a707f367c0dd28cec0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2e5ff4e99989915ef446825fb077460e32e601be406a707f367c0dd28cec0b->enter($__internal_1f2e5ff4e99989915ef446825fb077460e32e601be406a707f367c0dd28cec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_239ab49221936a099383803e2ef623257850fe896b49108ca7ace258db237ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239ab49221936a099383803e2ef623257850fe896b49108ca7ace258db237ffd->enter($__internal_239ab49221936a099383803e2ef623257850fe896b49108ca7ace258db237ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_239ab49221936a099383803e2ef623257850fe896b49108ca7ace258db237ffd->leave($__internal_239ab49221936a099383803e2ef623257850fe896b49108ca7ace258db237ffd_prof);

        
        $__internal_1f2e5ff4e99989915ef446825fb077460e32e601be406a707f367c0dd28cec0b->leave($__internal_1f2e5ff4e99989915ef446825fb077460e32e601be406a707f367c0dd28cec0b_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f762de10c765a267148aa28694f0e5e85b4b8a8ad76800629d9a8f6d6e65071c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f762de10c765a267148aa28694f0e5e85b4b8a8ad76800629d9a8f6d6e65071c->enter($__internal_f762de10c765a267148aa28694f0e5e85b4b8a8ad76800629d9a8f6d6e65071c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6db8924b4b745a804acedc9f452230f062e39d829877cada73e4b68c24f6bb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db8924b4b745a804acedc9f452230f062e39d829877cada73e4b68c24f6bb6f->enter($__internal_6db8924b4b745a804acedc9f452230f062e39d829877cada73e4b68c24f6bb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_6db8924b4b745a804acedc9f452230f062e39d829877cada73e4b68c24f6bb6f->leave($__internal_6db8924b4b745a804acedc9f452230f062e39d829877cada73e4b68c24f6bb6f_prof);

        
        $__internal_f762de10c765a267148aa28694f0e5e85b4b8a8ad76800629d9a8f6d6e65071c->leave($__internal_f762de10c765a267148aa28694f0e5e85b4b8a8ad76800629d9a8f6d6e65071c_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f5eee1bb123421632322bd4968eef1e0c50d6ebacc1d7c09290235a70c6ffc44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5eee1bb123421632322bd4968eef1e0c50d6ebacc1d7c09290235a70c6ffc44->enter($__internal_f5eee1bb123421632322bd4968eef1e0c50d6ebacc1d7c09290235a70c6ffc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7b78ebd64af0dc5679ddce9f3b9270fb06f93019a27ba267522450ce20b9e697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b78ebd64af0dc5679ddce9f3b9270fb06f93019a27ba267522450ce20b9e697->enter($__internal_7b78ebd64af0dc5679ddce9f3b9270fb06f93019a27ba267522450ce20b9e697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_7b78ebd64af0dc5679ddce9f3b9270fb06f93019a27ba267522450ce20b9e697->leave($__internal_7b78ebd64af0dc5679ddce9f3b9270fb06f93019a27ba267522450ce20b9e697_prof);

        
        $__internal_f5eee1bb123421632322bd4968eef1e0c50d6ebacc1d7c09290235a70c6ffc44->leave($__internal_f5eee1bb123421632322bd4968eef1e0c50d6ebacc1d7c09290235a70c6ffc44_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_760885f5916c1bd1723b37bcc849c9e7b0ff38f6e835bbddf8aae8e9559a9f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760885f5916c1bd1723b37bcc849c9e7b0ff38f6e835bbddf8aae8e9559a9f86->enter($__internal_760885f5916c1bd1723b37bcc849c9e7b0ff38f6e835bbddf8aae8e9559a9f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_dabad9ca332406fb388d5e411bbeffd8c7daab13e553ccb1016d36208ebc3d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabad9ca332406fb388d5e411bbeffd8c7daab13e553ccb1016d36208ebc3d2d->enter($__internal_dabad9ca332406fb388d5e411bbeffd8c7daab13e553ccb1016d36208ebc3d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_dabad9ca332406fb388d5e411bbeffd8c7daab13e553ccb1016d36208ebc3d2d->leave($__internal_dabad9ca332406fb388d5e411bbeffd8c7daab13e553ccb1016d36208ebc3d2d_prof);

        
        $__internal_760885f5916c1bd1723b37bcc849c9e7b0ff38f6e835bbddf8aae8e9559a9f86->leave($__internal_760885f5916c1bd1723b37bcc849c9e7b0ff38f6e835bbddf8aae8e9559a9f86_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_940857afa0fd171559871875eb65a7284d5c180c134b4164c4ddeecfde84a5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940857afa0fd171559871875eb65a7284d5c180c134b4164c4ddeecfde84a5a7->enter($__internal_940857afa0fd171559871875eb65a7284d5c180c134b4164c4ddeecfde84a5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1695a6b78e8891aec5c8eaba119e42dddfa26470227f70daa7e52e4a25a32e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1695a6b78e8891aec5c8eaba119e42dddfa26470227f70daa7e52e4a25a32e5f->enter($__internal_1695a6b78e8891aec5c8eaba119e42dddfa26470227f70daa7e52e4a25a32e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1695a6b78e8891aec5c8eaba119e42dddfa26470227f70daa7e52e4a25a32e5f->leave($__internal_1695a6b78e8891aec5c8eaba119e42dddfa26470227f70daa7e52e4a25a32e5f_prof);

        
        $__internal_940857afa0fd171559871875eb65a7284d5c180c134b4164c4ddeecfde84a5a7->leave($__internal_940857afa0fd171559871875eb65a7284d5c180c134b4164c4ddeecfde84a5a7_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_16bc5758cc25b8e7dd091c43530b6fe3fe7db8320f714dc12640beae5ce63349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bc5758cc25b8e7dd091c43530b6fe3fe7db8320f714dc12640beae5ce63349->enter($__internal_16bc5758cc25b8e7dd091c43530b6fe3fe7db8320f714dc12640beae5ce63349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_34aa5fc52bc60eb88ae7736ba9c8dd119ffcae375f714cfb6c4ab6dbbc4a4712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34aa5fc52bc60eb88ae7736ba9c8dd119ffcae375f714cfb6c4ab6dbbc4a4712->enter($__internal_34aa5fc52bc60eb88ae7736ba9c8dd119ffcae375f714cfb6c4ab6dbbc4a4712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_34aa5fc52bc60eb88ae7736ba9c8dd119ffcae375f714cfb6c4ab6dbbc4a4712->leave($__internal_34aa5fc52bc60eb88ae7736ba9c8dd119ffcae375f714cfb6c4ab6dbbc4a4712_prof);

        
        $__internal_16bc5758cc25b8e7dd091c43530b6fe3fe7db8320f714dc12640beae5ce63349->leave($__internal_16bc5758cc25b8e7dd091c43530b6fe3fe7db8320f714dc12640beae5ce63349_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_af0aa8ebfee77aa156fd3fc6aa2363cb0c1d4e294eb34c2ae4cefcdfe557a169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0aa8ebfee77aa156fd3fc6aa2363cb0c1d4e294eb34c2ae4cefcdfe557a169->enter($__internal_af0aa8ebfee77aa156fd3fc6aa2363cb0c1d4e294eb34c2ae4cefcdfe557a169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_834055289fee4835403eb53575f0d6a8fcc4c81d51551d48040b99f7b04c5993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834055289fee4835403eb53575f0d6a8fcc4c81d51551d48040b99f7b04c5993->enter($__internal_834055289fee4835403eb53575f0d6a8fcc4c81d51551d48040b99f7b04c5993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_834055289fee4835403eb53575f0d6a8fcc4c81d51551d48040b99f7b04c5993->leave($__internal_834055289fee4835403eb53575f0d6a8fcc4c81d51551d48040b99f7b04c5993_prof);

        
        $__internal_af0aa8ebfee77aa156fd3fc6aa2363cb0c1d4e294eb34c2ae4cefcdfe557a169->leave($__internal_af0aa8ebfee77aa156fd3fc6aa2363cb0c1d4e294eb34c2ae4cefcdfe557a169_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_10c7b1b95dbd631390ebbc63197c94d5086d2c8feb0de3b37888324694276c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c7b1b95dbd631390ebbc63197c94d5086d2c8feb0de3b37888324694276c93->enter($__internal_10c7b1b95dbd631390ebbc63197c94d5086d2c8feb0de3b37888324694276c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_0e62ed3b695e330f717c467f5df97e2b0d8bac10056af70b95e1d9bdeb672212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e62ed3b695e330f717c467f5df97e2b0d8bac10056af70b95e1d9bdeb672212->enter($__internal_0e62ed3b695e330f717c467f5df97e2b0d8bac10056af70b95e1d9bdeb672212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_0e62ed3b695e330f717c467f5df97e2b0d8bac10056af70b95e1d9bdeb672212->leave($__internal_0e62ed3b695e330f717c467f5df97e2b0d8bac10056af70b95e1d9bdeb672212_prof);

        
        $__internal_10c7b1b95dbd631390ebbc63197c94d5086d2c8feb0de3b37888324694276c93->leave($__internal_10c7b1b95dbd631390ebbc63197c94d5086d2c8feb0de3b37888324694276c93_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e508ae7e610986c987df864016498eacbd66c3e3bbc295d1eb73ccf72af9ae90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e508ae7e610986c987df864016498eacbd66c3e3bbc295d1eb73ccf72af9ae90->enter($__internal_e508ae7e610986c987df864016498eacbd66c3e3bbc295d1eb73ccf72af9ae90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_24d9cf26ae18451deb85ccc131951227693fc92b4afac005de795b0f5bfb57ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d9cf26ae18451deb85ccc131951227693fc92b4afac005de795b0f5bfb57ad->enter($__internal_24d9cf26ae18451deb85ccc131951227693fc92b4afac005de795b0f5bfb57ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_24d9cf26ae18451deb85ccc131951227693fc92b4afac005de795b0f5bfb57ad->leave($__internal_24d9cf26ae18451deb85ccc131951227693fc92b4afac005de795b0f5bfb57ad_prof);

        
        $__internal_e508ae7e610986c987df864016498eacbd66c3e3bbc295d1eb73ccf72af9ae90->leave($__internal_e508ae7e610986c987df864016498eacbd66c3e3bbc295d1eb73ccf72af9ae90_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6b24bede6cb4ddbfe6f247faae6d1dbfead24db496b26e9fe7660e7296522955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b24bede6cb4ddbfe6f247faae6d1dbfead24db496b26e9fe7660e7296522955->enter($__internal_6b24bede6cb4ddbfe6f247faae6d1dbfead24db496b26e9fe7660e7296522955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0cbb735d5ad50be24dbe4a90b16a1e22eed3c86444f1a3004692908d5f309309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbb735d5ad50be24dbe4a90b16a1e22eed3c86444f1a3004692908d5f309309->enter($__internal_0cbb735d5ad50be24dbe4a90b16a1e22eed3c86444f1a3004692908d5f309309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0cbb735d5ad50be24dbe4a90b16a1e22eed3c86444f1a3004692908d5f309309->leave($__internal_0cbb735d5ad50be24dbe4a90b16a1e22eed3c86444f1a3004692908d5f309309_prof);

        
        $__internal_6b24bede6cb4ddbfe6f247faae6d1dbfead24db496b26e9fe7660e7296522955->leave($__internal_6b24bede6cb4ddbfe6f247faae6d1dbfead24db496b26e9fe7660e7296522955_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6bb7e5afb3a95bd4956a3e84d2fd9eade058fec700c27768ec527d273b0abfcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb7e5afb3a95bd4956a3e84d2fd9eade058fec700c27768ec527d273b0abfcc->enter($__internal_6bb7e5afb3a95bd4956a3e84d2fd9eade058fec700c27768ec527d273b0abfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9a3abcf22ef641fe8ad8daa0de26e46949e1a8999608b6b7a1393f74df551c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3abcf22ef641fe8ad8daa0de26e46949e1a8999608b6b7a1393f74df551c43->enter($__internal_9a3abcf22ef641fe8ad8daa0de26e46949e1a8999608b6b7a1393f74df551c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9a3abcf22ef641fe8ad8daa0de26e46949e1a8999608b6b7a1393f74df551c43->leave($__internal_9a3abcf22ef641fe8ad8daa0de26e46949e1a8999608b6b7a1393f74df551c43_prof);

        
        $__internal_6bb7e5afb3a95bd4956a3e84d2fd9eade058fec700c27768ec527d273b0abfcc->leave($__internal_6bb7e5afb3a95bd4956a3e84d2fd9eade058fec700c27768ec527d273b0abfcc_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_789b3010480c7bf3088862aeffb3763c04a102ca32ea83244e57d05ae29433c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789b3010480c7bf3088862aeffb3763c04a102ca32ea83244e57d05ae29433c5->enter($__internal_789b3010480c7bf3088862aeffb3763c04a102ca32ea83244e57d05ae29433c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ef80b280c4f90240c01a65722b78359f9311f0df4398ff676ea28d0e896b2b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef80b280c4f90240c01a65722b78359f9311f0df4398ff676ea28d0e896b2b59->enter($__internal_ef80b280c4f90240c01a65722b78359f9311f0df4398ff676ea28d0e896b2b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ef80b280c4f90240c01a65722b78359f9311f0df4398ff676ea28d0e896b2b59->leave($__internal_ef80b280c4f90240c01a65722b78359f9311f0df4398ff676ea28d0e896b2b59_prof);

        
        $__internal_789b3010480c7bf3088862aeffb3763c04a102ca32ea83244e57d05ae29433c5->leave($__internal_789b3010480c7bf3088862aeffb3763c04a102ca32ea83244e57d05ae29433c5_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f9dd25230812bbda316a73e4ea249bb6b58c36e7cd089a61e9922f674931c01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dd25230812bbda316a73e4ea249bb6b58c36e7cd089a61e9922f674931c01e->enter($__internal_f9dd25230812bbda316a73e4ea249bb6b58c36e7cd089a61e9922f674931c01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3ca9c1b6e0d68eb93a752eeff6aa8260ac8ebcab12e1422782a1efb9f945c5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca9c1b6e0d68eb93a752eeff6aa8260ac8ebcab12e1422782a1efb9f945c5cc->enter($__internal_3ca9c1b6e0d68eb93a752eeff6aa8260ac8ebcab12e1422782a1efb9f945c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3ca9c1b6e0d68eb93a752eeff6aa8260ac8ebcab12e1422782a1efb9f945c5cc->leave($__internal_3ca9c1b6e0d68eb93a752eeff6aa8260ac8ebcab12e1422782a1efb9f945c5cc_prof);

        
        $__internal_f9dd25230812bbda316a73e4ea249bb6b58c36e7cd089a61e9922f674931c01e->leave($__internal_f9dd25230812bbda316a73e4ea249bb6b58c36e7cd089a61e9922f674931c01e_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_79bd0471f066cde97634cf5da603fdea67b0a40583209fb5662c16f9b1f18f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79bd0471f066cde97634cf5da603fdea67b0a40583209fb5662c16f9b1f18f79->enter($__internal_79bd0471f066cde97634cf5da603fdea67b0a40583209fb5662c16f9b1f18f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c1f101678d56404b07a7188a781027ecd7aa4d0f57939667e6c870d1b014d534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f101678d56404b07a7188a781027ecd7aa4d0f57939667e6c870d1b014d534->enter($__internal_c1f101678d56404b07a7188a781027ecd7aa4d0f57939667e6c870d1b014d534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c1f101678d56404b07a7188a781027ecd7aa4d0f57939667e6c870d1b014d534->leave($__internal_c1f101678d56404b07a7188a781027ecd7aa4d0f57939667e6c870d1b014d534_prof);

        
        $__internal_79bd0471f066cde97634cf5da603fdea67b0a40583209fb5662c16f9b1f18f79->leave($__internal_79bd0471f066cde97634cf5da603fdea67b0a40583209fb5662c16f9b1f18f79_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1148cacd8d6411054f9abc960aa892a22d2ad40e9e31aaa0608d4f65a9c64958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1148cacd8d6411054f9abc960aa892a22d2ad40e9e31aaa0608d4f65a9c64958->enter($__internal_1148cacd8d6411054f9abc960aa892a22d2ad40e9e31aaa0608d4f65a9c64958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_bebf45a750941d64076378c3e8047f0f6c0c256a8f589d147ae27c1db344e303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebf45a750941d64076378c3e8047f0f6c0c256a8f589d147ae27c1db344e303->enter($__internal_bebf45a750941d64076378c3e8047f0f6c0c256a8f589d147ae27c1db344e303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_bebf45a750941d64076378c3e8047f0f6c0c256a8f589d147ae27c1db344e303->leave($__internal_bebf45a750941d64076378c3e8047f0f6c0c256a8f589d147ae27c1db344e303_prof);

        
        $__internal_1148cacd8d6411054f9abc960aa892a22d2ad40e9e31aaa0608d4f65a9c64958->leave($__internal_1148cacd8d6411054f9abc960aa892a22d2ad40e9e31aaa0608d4f65a9c64958_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_abb4f5a376c8d2f9fe57a337055620ce9167dea87efb7161b4f5f10e7b35c964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb4f5a376c8d2f9fe57a337055620ce9167dea87efb7161b4f5f10e7b35c964->enter($__internal_abb4f5a376c8d2f9fe57a337055620ce9167dea87efb7161b4f5f10e7b35c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_88dc6d921e44bf07bc532bff4f09f805d3c63307e4c51fd53de6119330ae8444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dc6d921e44bf07bc532bff4f09f805d3c63307e4c51fd53de6119330ae8444->enter($__internal_88dc6d921e44bf07bc532bff4f09f805d3c63307e4c51fd53de6119330ae8444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_88dc6d921e44bf07bc532bff4f09f805d3c63307e4c51fd53de6119330ae8444->leave($__internal_88dc6d921e44bf07bc532bff4f09f805d3c63307e4c51fd53de6119330ae8444_prof);

        
        $__internal_abb4f5a376c8d2f9fe57a337055620ce9167dea87efb7161b4f5f10e7b35c964->leave($__internal_abb4f5a376c8d2f9fe57a337055620ce9167dea87efb7161b4f5f10e7b35c964_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp64\\www\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
