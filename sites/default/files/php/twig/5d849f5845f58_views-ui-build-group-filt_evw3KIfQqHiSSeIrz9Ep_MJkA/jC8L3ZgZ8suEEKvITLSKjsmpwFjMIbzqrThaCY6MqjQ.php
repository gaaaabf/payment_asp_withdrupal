<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/admin/views-ui-build-group-filter-form.html.twig */
class __TwigTemplate_790cce133e7ec5bd6a06c275cbf9ff5babff25f89425155796c139a6f8cedffd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 24, "without" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "form_description", [])), "html", null, true);
        echo "
";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "expose_button", [])), "html", null, true);
        echo "
";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "group_button", [])), "html", null, true);
        echo "
<div class=\"views-left-40\">
  ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "optional", [])), "html", null, true);
        echo "
  ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "remember", [])), "html", null, true);
        echo "
</div>
<div class=\"views-right-60\">
  ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "widget", [])), "html", null, true);
        echo "
  ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "label", [])), "html", null, true);
        echo "
  ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "description", [])), "html", null, true);
        echo "
</div>
";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "form_description", "expose_button", "group_button", "optional", "remember", "widget", "label", "description", "add_group", "more"), "html", null, true);
        // line 52
        echo "
";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["table"] ?? null)), "html", null, true);
        echo "
";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "add_group", [])), "html", null, true);
        echo "
";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "more", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-build-group-filter-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 55,  100 => 54,  96 => 53,  93 => 52,  91 => 40,  86 => 34,  82 => 33,  78 => 32,  72 => 29,  68 => 28,  63 => 26,  59 => 25,  55 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for Views UI build group filter form.
 *
 * Available variables:
 * - form: A render element representing the form. Contains the following:
 *   - form_description: The exposed filter's description.
 *   - expose_button: The button to toggle the expose filter form.
 *   - group_button: Toggle options between single and grouped filters.
 *   - label: A filter label input field.
 *   - description: A filter description field.
 *   - value: The filters available values.
 *   - optional: A checkbox to require this filter or not.
 *   - remember: A checkbox to remember selected filter value(s) (per user).
 *   - widget: Radio Buttons to select the filter widget.
 *   - add_group: A button to add another row to the table.
 *   - more: A details element for additional field exposed filter fields.
 * - table: A rendered table element of the group filter form.
 *
 * @see template_preprocess_views_ui_build_group_filter_form()
 */
#}
{{ form.form_description }}
{{ form.expose_button }}
{{ form.group_button }}
<div class=\"views-left-40\">
  {{ form.optional }}
  {{ form.remember }}
</div>
<div class=\"views-right-60\">
  {{ form.widget }}
  {{ form.label }}
  {{ form.description }}
</div>
{#
  Render the rest of the form elements excluding elements that are rendered
  elsewhere.
#}
{{ form|without(
    'form_description',
    'expose_button',
    'group_button',
    'optional',
    'remember',
    'widget',
    'label',
    'description',
    'add_group',
    'more'
  )
}}
{{ table }}
{{ form.add_group }}
{{ form.more }}
", "core/themes/stable/templates/admin/views-ui-build-group-filter-form.html.twig", "/home/acretweb/acret-ph.com/public_html/multty/core/themes/stable/templates/admin/views-ui-build-group-filter-form.html.twig");
    }
}
