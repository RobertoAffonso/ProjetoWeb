<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_0fcd0607ad41da6c5f85960315e875795667ba2ed78981170aaf88f7ed4f622a extends Twig_Template
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
        $__internal_ead2beeafc0851a46f1aa4e10c6408a44a58d6e72b2ea2cbbb7aadede5edc90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead2beeafc0851a46f1aa4e10c6408a44a58d6e72b2ea2cbbb7aadede5edc90e->enter($__internal_ead2beeafc0851a46f1aa4e10c6408a44a58d6e72b2ea2cbbb7aadede5edc90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_8fc4ea491e0e74c1b6fc0bb70392dda891b75d088565d1d446e48597c55a43a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc4ea491e0e74c1b6fc0bb70392dda891b75d088565d1d446e48597c55a43a2->enter($__internal_8fc4ea491e0e74c1b6fc0bb70392dda891b75d088565d1d446e48597c55a43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ead2beeafc0851a46f1aa4e10c6408a44a58d6e72b2ea2cbbb7aadede5edc90e->leave($__internal_ead2beeafc0851a46f1aa4e10c6408a44a58d6e72b2ea2cbbb7aadede5edc90e_prof);

        
        $__internal_8fc4ea491e0e74c1b6fc0bb70392dda891b75d088565d1d446e48597c55a43a2->leave($__internal_8fc4ea491e0e74c1b6fc0bb70392dda891b75d088565d1d446e48597c55a43a2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_75e4a54297e5dc931a26a040f81d95d21083bf3918b0bc519e1c7a2ae3618448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75e4a54297e5dc931a26a040f81d95d21083bf3918b0bc519e1c7a2ae3618448->enter($__internal_75e4a54297e5dc931a26a040f81d95d21083bf3918b0bc519e1c7a2ae3618448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_dff1c3520fb4485cb3d4aba40cea7df38bb6aed4f8fa182372e1acd3ac3b7595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff1c3520fb4485cb3d4aba40cea7df38bb6aed4f8fa182372e1acd3ac3b7595->enter($__internal_dff1c3520fb4485cb3d4aba40cea7df38bb6aed4f8fa182372e1acd3ac3b7595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_dff1c3520fb4485cb3d4aba40cea7df38bb6aed4f8fa182372e1acd3ac3b7595->leave($__internal_dff1c3520fb4485cb3d4aba40cea7df38bb6aed4f8fa182372e1acd3ac3b7595_prof);

        
        $__internal_75e4a54297e5dc931a26a040f81d95d21083bf3918b0bc519e1c7a2ae3618448->leave($__internal_75e4a54297e5dc931a26a040f81d95d21083bf3918b0bc519e1c7a2ae3618448_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b321d57ba6376900137329cff67cdc222bbb471bd2e79eb8e25d70c1a785b4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b321d57ba6376900137329cff67cdc222bbb471bd2e79eb8e25d70c1a785b4c4->enter($__internal_b321d57ba6376900137329cff67cdc222bbb471bd2e79eb8e25d70c1a785b4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b74ea850e46379dd50850ffdbf41f933e3a334177ce2079105d76311ee728527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74ea850e46379dd50850ffdbf41f933e3a334177ce2079105d76311ee728527->enter($__internal_b74ea850e46379dd50850ffdbf41f933e3a334177ce2079105d76311ee728527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b74ea850e46379dd50850ffdbf41f933e3a334177ce2079105d76311ee728527->leave($__internal_b74ea850e46379dd50850ffdbf41f933e3a334177ce2079105d76311ee728527_prof);

        
        $__internal_b321d57ba6376900137329cff67cdc222bbb471bd2e79eb8e25d70c1a785b4c4->leave($__internal_b321d57ba6376900137329cff67cdc222bbb471bd2e79eb8e25d70c1a785b4c4_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bcc5cea8ecb4e524c0910aaf66ae51a895ee42ffb39076d9aea02a5b905ee46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc5cea8ecb4e524c0910aaf66ae51a895ee42ffb39076d9aea02a5b905ee46d->enter($__internal_bcc5cea8ecb4e524c0910aaf66ae51a895ee42ffb39076d9aea02a5b905ee46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_aa8eb6877b98f19606cce3fdcc77fe4507a354f6d4d834355d88df24a5f3e7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8eb6877b98f19606cce3fdcc77fe4507a354f6d4d834355d88df24a5f3e7d0->enter($__internal_aa8eb6877b98f19606cce3fdcc77fe4507a354f6d4d834355d88df24a5f3e7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_aa8eb6877b98f19606cce3fdcc77fe4507a354f6d4d834355d88df24a5f3e7d0->leave($__internal_aa8eb6877b98f19606cce3fdcc77fe4507a354f6d4d834355d88df24a5f3e7d0_prof);

        
        $__internal_bcc5cea8ecb4e524c0910aaf66ae51a895ee42ffb39076d9aea02a5b905ee46d->leave($__internal_bcc5cea8ecb4e524c0910aaf66ae51a895ee42ffb39076d9aea02a5b905ee46d_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_1c0cee54b68cc264e8cb7b19f73de6bb3bec09bd749477dbb392505c91542e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0cee54b68cc264e8cb7b19f73de6bb3bec09bd749477dbb392505c91542e83->enter($__internal_1c0cee54b68cc264e8cb7b19f73de6bb3bec09bd749477dbb392505c91542e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_96a47ec36b44169ca1c5d5677ae77b31b92b0314de0c2bd6ee1abc5fb9896e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a47ec36b44169ca1c5d5677ae77b31b92b0314de0c2bd6ee1abc5fb9896e7c->enter($__internal_96a47ec36b44169ca1c5d5677ae77b31b92b0314de0c2bd6ee1abc5fb9896e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_373176acf3642c107b0597a99f197ab095a688cba7a27808b996bf4012bad16b = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_173e49fe00d373a2ade5196afd97b23bdd7dd92b29302b139ed5bbc379c6b28b = "{{") && ('' === $__internal_173e49fe00d373a2ade5196afd97b23bdd7dd92b29302b139ed5bbc379c6b28b || 0 === strpos($__internal_373176acf3642c107b0597a99f197ab095a688cba7a27808b996bf4012bad16b, $__internal_173e49fe00d373a2ade5196afd97b23bdd7dd92b29302b139ed5bbc379c6b28b)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_96a47ec36b44169ca1c5d5677ae77b31b92b0314de0c2bd6ee1abc5fb9896e7c->leave($__internal_96a47ec36b44169ca1c5d5677ae77b31b92b0314de0c2bd6ee1abc5fb9896e7c_prof);

        
        $__internal_1c0cee54b68cc264e8cb7b19f73de6bb3bec09bd749477dbb392505c91542e83->leave($__internal_1c0cee54b68cc264e8cb7b19f73de6bb3bec09bd749477dbb392505c91542e83_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ccd8611847c97b9aa596aee8382f44c8de224aebcdd2dfc437b5ef1bcd56ef42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd8611847c97b9aa596aee8382f44c8de224aebcdd2dfc437b5ef1bcd56ef42->enter($__internal_ccd8611847c97b9aa596aee8382f44c8de224aebcdd2dfc437b5ef1bcd56ef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_4ea4fe571697239268b24d0bac2b7c8d8adae008207ed363f25284dd649694b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea4fe571697239268b24d0bac2b7c8d8adae008207ed363f25284dd649694b3->enter($__internal_4ea4fe571697239268b24d0bac2b7c8d8adae008207ed363f25284dd649694b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_4ea4fe571697239268b24d0bac2b7c8d8adae008207ed363f25284dd649694b3->leave($__internal_4ea4fe571697239268b24d0bac2b7c8d8adae008207ed363f25284dd649694b3_prof);

        
        $__internal_ccd8611847c97b9aa596aee8382f44c8de224aebcdd2dfc437b5ef1bcd56ef42->leave($__internal_ccd8611847c97b9aa596aee8382f44c8de224aebcdd2dfc437b5ef1bcd56ef42_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_fa87d8a3c99c84d471b7a82a5cadb587254713303a68a4001840b9fbc3de03d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa87d8a3c99c84d471b7a82a5cadb587254713303a68a4001840b9fbc3de03d2->enter($__internal_fa87d8a3c99c84d471b7a82a5cadb587254713303a68a4001840b9fbc3de03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_85211e93abae056d871ddb7914ad2c46ea4642db4ba33636951c4a8278616fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85211e93abae056d871ddb7914ad2c46ea4642db4ba33636951c4a8278616fda->enter($__internal_85211e93abae056d871ddb7914ad2c46ea4642db4ba33636951c4a8278616fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_85211e93abae056d871ddb7914ad2c46ea4642db4ba33636951c4a8278616fda->leave($__internal_85211e93abae056d871ddb7914ad2c46ea4642db4ba33636951c4a8278616fda_prof);

        
        $__internal_fa87d8a3c99c84d471b7a82a5cadb587254713303a68a4001840b9fbc3de03d2->leave($__internal_fa87d8a3c99c84d471b7a82a5cadb587254713303a68a4001840b9fbc3de03d2_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5a25d233b0b848c0e336cac4f4cdb0c06325270601dd666f18d23fa249efe81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a25d233b0b848c0e336cac4f4cdb0c06325270601dd666f18d23fa249efe81e->enter($__internal_5a25d233b0b848c0e336cac4f4cdb0c06325270601dd666f18d23fa249efe81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_0f87996d00faed1542d6201de12510329d90f31f304316746f89c78c2e624125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f87996d00faed1542d6201de12510329d90f31f304316746f89c78c2e624125->enter($__internal_0f87996d00faed1542d6201de12510329d90f31f304316746f89c78c2e624125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_0f87996d00faed1542d6201de12510329d90f31f304316746f89c78c2e624125->leave($__internal_0f87996d00faed1542d6201de12510329d90f31f304316746f89c78c2e624125_prof);

        
        $__internal_5a25d233b0b848c0e336cac4f4cdb0c06325270601dd666f18d23fa249efe81e->leave($__internal_5a25d233b0b848c0e336cac4f4cdb0c06325270601dd666f18d23fa249efe81e_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_afc8a8a164b9fcc5f40d8e9ffb2b55019ffb78c89d08b88a5375b0c82f5a7f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc8a8a164b9fcc5f40d8e9ffb2b55019ffb78c89d08b88a5375b0c82f5a7f21->enter($__internal_afc8a8a164b9fcc5f40d8e9ffb2b55019ffb78c89d08b88a5375b0c82f5a7f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bc86b4573c08efe1e84f510ee16849a1cc83b350270470158f0de360885653d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc86b4573c08efe1e84f510ee16849a1cc83b350270470158f0de360885653d5->enter($__internal_bc86b4573c08efe1e84f510ee16849a1cc83b350270470158f0de360885653d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_bc86b4573c08efe1e84f510ee16849a1cc83b350270470158f0de360885653d5->leave($__internal_bc86b4573c08efe1e84f510ee16849a1cc83b350270470158f0de360885653d5_prof);

        
        $__internal_afc8a8a164b9fcc5f40d8e9ffb2b55019ffb78c89d08b88a5375b0c82f5a7f21->leave($__internal_afc8a8a164b9fcc5f40d8e9ffb2b55019ffb78c89d08b88a5375b0c82f5a7f21_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_673445dd060d2696bd6fd5c19aa833537a4c8faa9d6bfede48fc697fc49f88f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673445dd060d2696bd6fd5c19aa833537a4c8faa9d6bfede48fc697fc49f88f0->enter($__internal_673445dd060d2696bd6fd5c19aa833537a4c8faa9d6bfede48fc697fc49f88f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_86d5b2b86fa074f65a6f90324c1ac1cfad72b3879d5bb31c0da3f564318079a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d5b2b86fa074f65a6f90324c1ac1cfad72b3879d5bb31c0da3f564318079a8->enter($__internal_86d5b2b86fa074f65a6f90324c1ac1cfad72b3879d5bb31c0da3f564318079a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_86d5b2b86fa074f65a6f90324c1ac1cfad72b3879d5bb31c0da3f564318079a8->leave($__internal_86d5b2b86fa074f65a6f90324c1ac1cfad72b3879d5bb31c0da3f564318079a8_prof);

        
        $__internal_673445dd060d2696bd6fd5c19aa833537a4c8faa9d6bfede48fc697fc49f88f0->leave($__internal_673445dd060d2696bd6fd5c19aa833537a4c8faa9d6bfede48fc697fc49f88f0_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_8287b7f52d8395734f5bbef6b61abb689896c523dd0095138fa27be5f82bd3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8287b7f52d8395734f5bbef6b61abb689896c523dd0095138fa27be5f82bd3fd->enter($__internal_8287b7f52d8395734f5bbef6b61abb689896c523dd0095138fa27be5f82bd3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_92d448fda26ff7dcfd73c47eefe961306d2789d95d1cf824fee9b5fd8bba1407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d448fda26ff7dcfd73c47eefe961306d2789d95d1cf824fee9b5fd8bba1407->enter($__internal_92d448fda26ff7dcfd73c47eefe961306d2789d95d1cf824fee9b5fd8bba1407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_92d448fda26ff7dcfd73c47eefe961306d2789d95d1cf824fee9b5fd8bba1407->leave($__internal_92d448fda26ff7dcfd73c47eefe961306d2789d95d1cf824fee9b5fd8bba1407_prof);

        
        $__internal_8287b7f52d8395734f5bbef6b61abb689896c523dd0095138fa27be5f82bd3fd->leave($__internal_8287b7f52d8395734f5bbef6b61abb689896c523dd0095138fa27be5f82bd3fd_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ecbe4ba23b437df7351f1986c5a889852ed66cdac4020f98dc6d0569b34ad649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbe4ba23b437df7351f1986c5a889852ed66cdac4020f98dc6d0569b34ad649->enter($__internal_ecbe4ba23b437df7351f1986c5a889852ed66cdac4020f98dc6d0569b34ad649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8bf5c8c2db672f83d7c5bc3e5618e68ae51223f4566a76dd99061656eba5619e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf5c8c2db672f83d7c5bc3e5618e68ae51223f4566a76dd99061656eba5619e->enter($__internal_8bf5c8c2db672f83d7c5bc3e5618e68ae51223f4566a76dd99061656eba5619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_8bf5c8c2db672f83d7c5bc3e5618e68ae51223f4566a76dd99061656eba5619e->leave($__internal_8bf5c8c2db672f83d7c5bc3e5618e68ae51223f4566a76dd99061656eba5619e_prof);

        
        $__internal_ecbe4ba23b437df7351f1986c5a889852ed66cdac4020f98dc6d0569b34ad649->leave($__internal_ecbe4ba23b437df7351f1986c5a889852ed66cdac4020f98dc6d0569b34ad649_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c392d3de26a061b7124c03f5ec2df01d3c82e4e860e8ded2479adb9896512b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c392d3de26a061b7124c03f5ec2df01d3c82e4e860e8ded2479adb9896512b9b->enter($__internal_c392d3de26a061b7124c03f5ec2df01d3c82e4e860e8ded2479adb9896512b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f3a2e73f761f9f288883d055d17c61a42986582a84274facabe2025b7b4bffb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a2e73f761f9f288883d055d17c61a42986582a84274facabe2025b7b4bffb5->enter($__internal_f3a2e73f761f9f288883d055d17c61a42986582a84274facabe2025b7b4bffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_f3a2e73f761f9f288883d055d17c61a42986582a84274facabe2025b7b4bffb5->leave($__internal_f3a2e73f761f9f288883d055d17c61a42986582a84274facabe2025b7b4bffb5_prof);

        
        $__internal_c392d3de26a061b7124c03f5ec2df01d3c82e4e860e8ded2479adb9896512b9b->leave($__internal_c392d3de26a061b7124c03f5ec2df01d3c82e4e860e8ded2479adb9896512b9b_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a0921f81863a59141ddc14d8817f79ff08b0de47e2c4967e811b40ff1cf3a3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0921f81863a59141ddc14d8817f79ff08b0de47e2c4967e811b40ff1cf3a3e0->enter($__internal_a0921f81863a59141ddc14d8817f79ff08b0de47e2c4967e811b40ff1cf3a3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_88ea750bf82a840d131cd3a5f336786c8e9ab5e65e92ef32127109eb90e5d057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ea750bf82a840d131cd3a5f336786c8e9ab5e65e92ef32127109eb90e5d057->enter($__internal_88ea750bf82a840d131cd3a5f336786c8e9ab5e65e92ef32127109eb90e5d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_88ea750bf82a840d131cd3a5f336786c8e9ab5e65e92ef32127109eb90e5d057->leave($__internal_88ea750bf82a840d131cd3a5f336786c8e9ab5e65e92ef32127109eb90e5d057_prof);

        
        $__internal_a0921f81863a59141ddc14d8817f79ff08b0de47e2c4967e811b40ff1cf3a3e0->leave($__internal_a0921f81863a59141ddc14d8817f79ff08b0de47e2c4967e811b40ff1cf3a3e0_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_156050d7e220305deca9af53f0d58217a00c01fdefeae48bc88ff19bf5a09d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156050d7e220305deca9af53f0d58217a00c01fdefeae48bc88ff19bf5a09d42->enter($__internal_156050d7e220305deca9af53f0d58217a00c01fdefeae48bc88ff19bf5a09d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2b4af7bcc37514bedebf3aa2519bb4234bacccc75b2ee669e79649cf91beb94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4af7bcc37514bedebf3aa2519bb4234bacccc75b2ee669e79649cf91beb94d->enter($__internal_2b4af7bcc37514bedebf3aa2519bb4234bacccc75b2ee669e79649cf91beb94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_2b4af7bcc37514bedebf3aa2519bb4234bacccc75b2ee669e79649cf91beb94d->leave($__internal_2b4af7bcc37514bedebf3aa2519bb4234bacccc75b2ee669e79649cf91beb94d_prof);

        
        $__internal_156050d7e220305deca9af53f0d58217a00c01fdefeae48bc88ff19bf5a09d42->leave($__internal_156050d7e220305deca9af53f0d58217a00c01fdefeae48bc88ff19bf5a09d42_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7445a1d6180a5ae6b90f068ece32459c2f742e548f66c7c504765eac39429480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7445a1d6180a5ae6b90f068ece32459c2f742e548f66c7c504765eac39429480->enter($__internal_7445a1d6180a5ae6b90f068ece32459c2f742e548f66c7c504765eac39429480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_ec23199b598eb1e0bf724b534f21cd7de4923ec9c6e420f7cb5516f531896bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec23199b598eb1e0bf724b534f21cd7de4923ec9c6e420f7cb5516f531896bf1->enter($__internal_ec23199b598eb1e0bf724b534f21cd7de4923ec9c6e420f7cb5516f531896bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ec23199b598eb1e0bf724b534f21cd7de4923ec9c6e420f7cb5516f531896bf1->leave($__internal_ec23199b598eb1e0bf724b534f21cd7de4923ec9c6e420f7cb5516f531896bf1_prof);

        
        $__internal_7445a1d6180a5ae6b90f068ece32459c2f742e548f66c7c504765eac39429480->leave($__internal_7445a1d6180a5ae6b90f068ece32459c2f742e548f66c7c504765eac39429480_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a6c4d3e9a30cae92cc19439303efb3b706a914b5585b8e5f171c6f4501f56fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c4d3e9a30cae92cc19439303efb3b706a914b5585b8e5f171c6f4501f56fa8->enter($__internal_a6c4d3e9a30cae92cc19439303efb3b706a914b5585b8e5f171c6f4501f56fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_cb2a68f4e0d798da065c0f45a00ab4ecc46a358f4fb8c3084c405130d23f519e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2a68f4e0d798da065c0f45a00ab4ecc46a358f4fb8c3084c405130d23f519e->enter($__internal_cb2a68f4e0d798da065c0f45a00ab4ecc46a358f4fb8c3084c405130d23f519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cb2a68f4e0d798da065c0f45a00ab4ecc46a358f4fb8c3084c405130d23f519e->leave($__internal_cb2a68f4e0d798da065c0f45a00ab4ecc46a358f4fb8c3084c405130d23f519e_prof);

        
        $__internal_a6c4d3e9a30cae92cc19439303efb3b706a914b5585b8e5f171c6f4501f56fa8->leave($__internal_a6c4d3e9a30cae92cc19439303efb3b706a914b5585b8e5f171c6f4501f56fa8_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9aeb9b0ab3b126f39c1526015ab44942a1af43042ae2d76d1c2d9fcf3e3a8c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aeb9b0ab3b126f39c1526015ab44942a1af43042ae2d76d1c2d9fcf3e3a8c49->enter($__internal_9aeb9b0ab3b126f39c1526015ab44942a1af43042ae2d76d1c2d9fcf3e3a8c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f1fa22dcdc45d28f7e8ee98cdf646928f251fd6159f3f09b7bb7e11844b2c11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1fa22dcdc45d28f7e8ee98cdf646928f251fd6159f3f09b7bb7e11844b2c11b->enter($__internal_f1fa22dcdc45d28f7e8ee98cdf646928f251fd6159f3f09b7bb7e11844b2c11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f1fa22dcdc45d28f7e8ee98cdf646928f251fd6159f3f09b7bb7e11844b2c11b->leave($__internal_f1fa22dcdc45d28f7e8ee98cdf646928f251fd6159f3f09b7bb7e11844b2c11b_prof);

        
        $__internal_9aeb9b0ab3b126f39c1526015ab44942a1af43042ae2d76d1c2d9fcf3e3a8c49->leave($__internal_9aeb9b0ab3b126f39c1526015ab44942a1af43042ae2d76d1c2d9fcf3e3a8c49_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_24ae7227be3d248a0a939204b3326798fe70710c0f7b430d8f119be1ca826182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ae7227be3d248a0a939204b3326798fe70710c0f7b430d8f119be1ca826182->enter($__internal_24ae7227be3d248a0a939204b3326798fe70710c0f7b430d8f119be1ca826182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_37bc0ac5f190ded9f0752519aeb0440ef7c7823f91b751ef00bf0fe5376135c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bc0ac5f190ded9f0752519aeb0440ef7c7823f91b751ef00bf0fe5376135c9->enter($__internal_37bc0ac5f190ded9f0752519aeb0440ef7c7823f91b751ef00bf0fe5376135c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
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
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_37bc0ac5f190ded9f0752519aeb0440ef7c7823f91b751ef00bf0fe5376135c9->leave($__internal_37bc0ac5f190ded9f0752519aeb0440ef7c7823f91b751ef00bf0fe5376135c9_prof);

        
        $__internal_24ae7227be3d248a0a939204b3326798fe70710c0f7b430d8f119be1ca826182->leave($__internal_24ae7227be3d248a0a939204b3326798fe70710c0f7b430d8f119be1ca826182_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a97cfbc05fff15fe12c6f5e5688c32060810b5807529a18ff0272caab444b3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97cfbc05fff15fe12c6f5e5688c32060810b5807529a18ff0272caab444b3ae->enter($__internal_a97cfbc05fff15fe12c6f5e5688c32060810b5807529a18ff0272caab444b3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_444d36306f92d6afde2dc55f911e3b56361a01777057dd8336758c1d22858ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444d36306f92d6afde2dc55f911e3b56361a01777057dd8336758c1d22858ea3->enter($__internal_444d36306f92d6afde2dc55f911e3b56361a01777057dd8336758c1d22858ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_444d36306f92d6afde2dc55f911e3b56361a01777057dd8336758c1d22858ea3->leave($__internal_444d36306f92d6afde2dc55f911e3b56361a01777057dd8336758c1d22858ea3_prof);

        
        $__internal_a97cfbc05fff15fe12c6f5e5688c32060810b5807529a18ff0272caab444b3ae->leave($__internal_a97cfbc05fff15fe12c6f5e5688c32060810b5807529a18ff0272caab444b3ae_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7dcdec6baa7bdbc986b224f8bc26bdb3721902374af5e5270045999dfbc72679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcdec6baa7bdbc986b224f8bc26bdb3721902374af5e5270045999dfbc72679->enter($__internal_7dcdec6baa7bdbc986b224f8bc26bdb3721902374af5e5270045999dfbc72679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a8cec3a976561bccdb27aa1f6b3b66b633ca7eb89fbcff5dd44986e724fa30f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cec3a976561bccdb27aa1f6b3b66b633ca7eb89fbcff5dd44986e724fa30f8->enter($__internal_a8cec3a976561bccdb27aa1f6b3b66b633ca7eb89fbcff5dd44986e724fa30f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_a8cec3a976561bccdb27aa1f6b3b66b633ca7eb89fbcff5dd44986e724fa30f8->leave($__internal_a8cec3a976561bccdb27aa1f6b3b66b633ca7eb89fbcff5dd44986e724fa30f8_prof);

        
        $__internal_7dcdec6baa7bdbc986b224f8bc26bdb3721902374af5e5270045999dfbc72679->leave($__internal_7dcdec6baa7bdbc986b224f8bc26bdb3721902374af5e5270045999dfbc72679_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b86a767e407bdd97709f7ba9e50d5f16167863258925c72ce9fd05a5b4c1302d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86a767e407bdd97709f7ba9e50d5f16167863258925c72ce9fd05a5b4c1302d->enter($__internal_b86a767e407bdd97709f7ba9e50d5f16167863258925c72ce9fd05a5b4c1302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2a0236c5981d33b1cf145c1aaef072915a8172a845c148e6dfa3fb03b021562b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0236c5981d33b1cf145c1aaef072915a8172a845c148e6dfa3fb03b021562b->enter($__internal_2a0236c5981d33b1cf145c1aaef072915a8172a845c148e6dfa3fb03b021562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2a0236c5981d33b1cf145c1aaef072915a8172a845c148e6dfa3fb03b021562b->leave($__internal_2a0236c5981d33b1cf145c1aaef072915a8172a845c148e6dfa3fb03b021562b_prof);

        
        $__internal_b86a767e407bdd97709f7ba9e50d5f16167863258925c72ce9fd05a5b4c1302d->leave($__internal_b86a767e407bdd97709f7ba9e50d5f16167863258925c72ce9fd05a5b4c1302d_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_7dc4cc2921d309acc4e252aa56e56868ac861ad34fc556a1a5b0e4d5058d0139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc4cc2921d309acc4e252aa56e56868ac861ad34fc556a1a5b0e4d5058d0139->enter($__internal_7dc4cc2921d309acc4e252aa56e56868ac861ad34fc556a1a5b0e4d5058d0139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_19bbb83ece3f44e5d0d8c2dde70d1b2526687daca8390ce7aa634d26203e201b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bbb83ece3f44e5d0d8c2dde70d1b2526687daca8390ce7aa634d26203e201b->enter($__internal_19bbb83ece3f44e5d0d8c2dde70d1b2526687daca8390ce7aa634d26203e201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_19bbb83ece3f44e5d0d8c2dde70d1b2526687daca8390ce7aa634d26203e201b->leave($__internal_19bbb83ece3f44e5d0d8c2dde70d1b2526687daca8390ce7aa634d26203e201b_prof);

        
        $__internal_7dc4cc2921d309acc4e252aa56e56868ac861ad34fc556a1a5b0e4d5058d0139->leave($__internal_7dc4cc2921d309acc4e252aa56e56868ac861ad34fc556a1a5b0e4d5058d0139_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5eaf3a728bf759bbe032e733aeee05dd82120fc77b60e28399a21f1b62de7999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eaf3a728bf759bbe032e733aeee05dd82120fc77b60e28399a21f1b62de7999->enter($__internal_5eaf3a728bf759bbe032e733aeee05dd82120fc77b60e28399a21f1b62de7999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4bc8b2d926c37d6f525b0a218d25a42b4f7ef5fe2d0fd758d0eb889dedb15437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc8b2d926c37d6f525b0a218d25a42b4f7ef5fe2d0fd758d0eb889dedb15437->enter($__internal_4bc8b2d926c37d6f525b0a218d25a42b4f7ef5fe2d0fd758d0eb889dedb15437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4bc8b2d926c37d6f525b0a218d25a42b4f7ef5fe2d0fd758d0eb889dedb15437->leave($__internal_4bc8b2d926c37d6f525b0a218d25a42b4f7ef5fe2d0fd758d0eb889dedb15437_prof);

        
        $__internal_5eaf3a728bf759bbe032e733aeee05dd82120fc77b60e28399a21f1b62de7999->leave($__internal_5eaf3a728bf759bbe032e733aeee05dd82120fc77b60e28399a21f1b62de7999_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a1d6d41a6a588800903692585173a393296d4db99b50311a6f77c544fa105611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d6d41a6a588800903692585173a393296d4db99b50311a6f77c544fa105611->enter($__internal_a1d6d41a6a588800903692585173a393296d4db99b50311a6f77c544fa105611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_cec2ff48bb09b085d7eb3a5b3cb770e9efd8e0b02bd4cd2dba5d9e1a45c1217d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec2ff48bb09b085d7eb3a5b3cb770e9efd8e0b02bd4cd2dba5d9e1a45c1217d->enter($__internal_cec2ff48bb09b085d7eb3a5b3cb770e9efd8e0b02bd4cd2dba5d9e1a45c1217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cec2ff48bb09b085d7eb3a5b3cb770e9efd8e0b02bd4cd2dba5d9e1a45c1217d->leave($__internal_cec2ff48bb09b085d7eb3a5b3cb770e9efd8e0b02bd4cd2dba5d9e1a45c1217d_prof);

        
        $__internal_a1d6d41a6a588800903692585173a393296d4db99b50311a6f77c544fa105611->leave($__internal_a1d6d41a6a588800903692585173a393296d4db99b50311a6f77c544fa105611_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_13819bdc599df315e49acb794034826dad1b91ea31b921521eb022ee6ab2f2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13819bdc599df315e49acb794034826dad1b91ea31b921521eb022ee6ab2f2ab->enter($__internal_13819bdc599df315e49acb794034826dad1b91ea31b921521eb022ee6ab2f2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6840acc3bb53c9fd8b0b5ecab747b1d491812775c4594f959f638930cf1de207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6840acc3bb53c9fd8b0b5ecab747b1d491812775c4594f959f638930cf1de207->enter($__internal_6840acc3bb53c9fd8b0b5ecab747b1d491812775c4594f959f638930cf1de207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_6840acc3bb53c9fd8b0b5ecab747b1d491812775c4594f959f638930cf1de207->leave($__internal_6840acc3bb53c9fd8b0b5ecab747b1d491812775c4594f959f638930cf1de207_prof);

        
        $__internal_13819bdc599df315e49acb794034826dad1b91ea31b921521eb022ee6ab2f2ab->leave($__internal_13819bdc599df315e49acb794034826dad1b91ea31b921521eb022ee6ab2f2ab_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d620cf1749d733e24c9da4e7b24e65bef65c534eae90f5a995c2b7b4b1f099c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d620cf1749d733e24c9da4e7b24e65bef65c534eae90f5a995c2b7b4b1f099c4->enter($__internal_d620cf1749d733e24c9da4e7b24e65bef65c534eae90f5a995c2b7b4b1f099c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a0a6dd9db07663e83deebfc99a1d1323fbb36d59264bb7c6226c2fb357f80f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a6dd9db07663e83deebfc99a1d1323fbb36d59264bb7c6226c2fb357f80f06->enter($__internal_a0a6dd9db07663e83deebfc99a1d1323fbb36d59264bb7c6226c2fb357f80f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_a0a6dd9db07663e83deebfc99a1d1323fbb36d59264bb7c6226c2fb357f80f06->leave($__internal_a0a6dd9db07663e83deebfc99a1d1323fbb36d59264bb7c6226c2fb357f80f06_prof);

        
        $__internal_d620cf1749d733e24c9da4e7b24e65bef65c534eae90f5a995c2b7b4b1f099c4->leave($__internal_d620cf1749d733e24c9da4e7b24e65bef65c534eae90f5a995c2b7b4b1f099c4_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_b12bda1d9a31e087e2afe6b218c1234d33d9fc27520df97351caeac614c7d6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12bda1d9a31e087e2afe6b218c1234d33d9fc27520df97351caeac614c7d6a5->enter($__internal_b12bda1d9a31e087e2afe6b218c1234d33d9fc27520df97351caeac614c7d6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_8f8b224369d3ec9255fffba67a6b540b483471fc8713ae654ac9d106fadb961b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8b224369d3ec9255fffba67a6b540b483471fc8713ae654ac9d106fadb961b->enter($__internal_8f8b224369d3ec9255fffba67a6b540b483471fc8713ae654ac9d106fadb961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_8f8b224369d3ec9255fffba67a6b540b483471fc8713ae654ac9d106fadb961b->leave($__internal_8f8b224369d3ec9255fffba67a6b540b483471fc8713ae654ac9d106fadb961b_prof);

        
        $__internal_b12bda1d9a31e087e2afe6b218c1234d33d9fc27520df97351caeac614c7d6a5->leave($__internal_b12bda1d9a31e087e2afe6b218c1234d33d9fc27520df97351caeac614c7d6a5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
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
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
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
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
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
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/roberto/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
