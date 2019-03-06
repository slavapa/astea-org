<?php

/* core/themes/stable/templates/admin/ckeditor-settings-toolbar.html.twig */
class __TwigTemplate_5a1c9df01b5ee1f72739ac64d2226f13dc1bd41f755d11dafa54b3cb78083814 extends Twig_Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/ckeditor-settings-toolbar.html.twig"));

        $tags = array("spaceless" => 14, "trans" => 19, "for" => 28);
        $filters = array("t" => 16);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('spaceless', 'trans', 'for'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        ob_start();
        // line 15
        echo "  <fieldset role=\"form\" aria-labelledby=\"ckeditor-button-configuration ckeditor-button-description\">
    <legend id=\"ckeditor-button-configuration\">";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toolbar configuration")));
        echo "</legend>
    <div class=\"fieldset-wrapper\">
      <div id=\"ckeditor-button-description\" class=\"fieldset-description\">";
        // line 19
        echo t("Move a button into the <em>Active toolbar</em> to enable it, or into the list of <em>Available buttons</em> to disable it. Buttons may be moved with the mouse or keyboard arrow keys. Toolbar group names are provided to support screen reader users. Empty toolbar groups will be removed upon save.", array());
        // line 22
        echo "</div>
      <div class=\"ckeditor-toolbar-disabled clearfix\">
        ";
        // line 25
        echo "        <div class=\"ckeditor-toolbar-available\">
          <label for=\"ckeditor-available-buttons\">";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Available buttons")));
        echo "</label>
          <ul id=\"ckeditor-available-buttons\" class=\"ckeditor-buttons clearfix\" role=\"form\" data-drupal-ckeditor-button-sorting=\"source\">
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disabled_buttons"]) ? $context["disabled_buttons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["disabled_button"]) {
            // line 29
            echo "             <li";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["disabled_button"], "attributes", array()), "addClass", array(0 => "ckeditor-button"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["disabled_button"], "value", array()), "html", null, true));
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disabled_button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "          </ul>
        </div>
        ";
        // line 34
        echo "        <div class=\"ckeditor-toolbar-dividers\">
          <label for=\"ckeditor-multiple-buttons\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Button divider")));
        echo "</label>
          <ul id=\"ckeditor-multiple-buttons\" class=\"ckeditor-multiple-buttons\" role=\"form\" data-drupal-ckeditor-button-sorting=\"dividers\">
          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["multiple_buttons"]) ? $context["multiple_buttons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["multiple_button"]) {
            // line 38
            echo "            <li";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["multiple_button"], "attributes", array()), "addClass", array(0 => "ckeditor-multiple-button"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["multiple_button"], "value", array()), "html", null, true));
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['multiple_button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </ul>
        </div>
      </div>
      ";
        // line 44
        echo "      <div class=\"clearfix\">
        <label id=\"ckeditor-active-toolbar\">";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Active toolbar")));
        echo "</label>
      </div>
      <div data-toolbar=\"active\" role=\"form\" class=\"ckeditor-toolbar ckeditor-toolbar-active clearfix\">
        <ul class=\"ckeditor-active-toolbar-configuration\" role=\"presentation\" aria-label=\"";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("CKEditor toolbar and button configuration.")));
        echo "\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["active_buttons"]) ? $context["active_buttons"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["button_row"]) {
            // line 50
            echo "          <li class=\"ckeditor-row\" role=\"group\" aria-labelledby=\"ckeditor-active-toolbar\">
            <ul class=\"ckeditor-toolbar-groups clearfix\">
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["button_row"]);
            foreach ($context['_seq'] as $context["group_name"] => $context["button_group"]) {
                // line 53
                echo "              <li class=\"ckeditor-toolbar-group\" role=\"presentation\" data-drupal-ckeditor-type=\"group\" data-drupal-ckeditor-toolbar-group-name=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["group_name"], "html", null, true));
                echo "\" tabindex=\"0\">
                <h3 class=\"ckeditor-toolbar-group-name\" id=\"ckeditor-toolbar-group-aria-label-for-";
                // line 54
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["button_group"], "group_name_class", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["group_name"], "html", null, true));
                echo "</h3>
                <ul class=\"ckeditor-buttons ckeditor-toolbar-group-buttons\" role=\"toolbar\" data-drupal-ckeditor-button-sorting=\"target\" aria-labelledby=\"ckeditor-toolbar-group-aria-label-for-";
                // line 55
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["button_group"], "group_name_class", array()), "html", null, true));
                echo "\">
                ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button_group"], "buttons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["active_button"]) {
                    // line 57
                    echo "                  <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["active_button"], "attributes", array()), "addClass", array(0 => (($this->getAttribute($context["active_button"], "multiple", array())) ? ("ckeditor-multiple-button") : ("ckeditor-button"))), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["active_button"], "value", array()), "html", null, true));
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['active_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                </ul>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['button_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "            </ul>
          </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "          <li>
            <ul class=\"ckeditor-buttons\"></ul>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        </ul>
      </div>
    </div>
  </fieldset>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/ckeditor-settings-toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 69,  188 => 65,  181 => 62,  173 => 59,  162 => 57,  158 => 56,  154 => 55,  148 => 54,  143 => 53,  139 => 52,  135 => 50,  130 => 49,  126 => 48,  120 => 45,  117 => 44,  112 => 40,  101 => 38,  97 => 37,  92 => 35,  89 => 34,  85 => 31,  74 => 29,  70 => 28,  65 => 26,  62 => 25,  58 => 22,  56 => 19,  51 => 16,  48 => 15,  46 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/ckeditor-settings-toolbar.html.twig", "/home/ubuntu/workspace/core/themes/stable/templates/admin/ckeditor-settings-toolbar.html.twig");
    }
}
