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

/* core/themes/stable/templates/layout/layout--twocol-bricks.html.twig */
class __TwigTemplate_1489d826f868fc0a20be44500007f0321d7e2b984e987e6b0cca989bb959e02e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 17, "if" => 22];
        $filters = ["escape" => 23];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
        // line 17
        $context["classes"] = [0 => "layout", 1 => "layout--twocol-bricks"];
        // line 22
        if (($context["content"] ?? null)) {
            // line 23
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    ";
            // line 24
            if ($this->getAttribute(($context["content"] ?? null), "top", [])) {
                // line 25
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", []), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method")), "html", null, true);
                echo ">
        ";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if ($this->getAttribute(($context["content"] ?? null), "first_above", [])) {
                // line 31
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first_above", []), "addClass", [0 => "layout__region", 1 => "layout__region--first-above"], "method")), "html", null, true);
                echo ">
        ";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first_above", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 35
            echo "
    ";
            // line 36
            if ($this->getAttribute(($context["content"] ?? null), "second_above", [])) {
                // line 37
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second_above", []), "addClass", [0 => "layout__region", 1 => "layout__region--second-above"], "method")), "html", null, true);
                echo ">
        ";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "second_above", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 41
            echo "
    ";
            // line 42
            if ($this->getAttribute(($context["content"] ?? null), "middle", [])) {
                // line 43
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "middle", []), "addClass", [0 => "layout__region", 1 => "layout__region--middle"], "method")), "html", null, true);
                echo ">
        ";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "middle", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if ($this->getAttribute(($context["content"] ?? null), "first_below", [])) {
                // line 49
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first_below", []), "addClass", [0 => "layout__region", 1 => "layout__region--first-below"], "method")), "html", null, true);
                echo ">
        ";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "first_below", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 53
            echo "
    ";
            // line 54
            if ($this->getAttribute(($context["content"] ?? null), "second_below", [])) {
                // line 55
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second_below", []), "addClass", [0 => "layout__region", 1 => "layout__region--second-below"], "method")), "html", null, true);
                echo ">
        ";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "second_below", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 59
            echo "
    ";
            // line 60
            if ($this->getAttribute(($context["content"] ?? null), "bottom", [])) {
                // line 61
                echo "      <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", []), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method")), "html", null, true);
                echo ">
        ";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  167 => 62,  162 => 61,  160 => 60,  157 => 59,  151 => 56,  146 => 55,  144 => 54,  141 => 53,  135 => 50,  130 => 49,  128 => 48,  125 => 47,  119 => 44,  114 => 43,  112 => 42,  109 => 41,  103 => 38,  98 => 37,  96 => 36,  93 => 35,  87 => 32,  82 => 31,  80 => 30,  77 => 29,  71 => 26,  66 => 25,  64 => 24,  59 => 23,  57 => 22,  55 => 17,);
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
 * Default theme implementation for a two column layout.
 *
 * This template provides a two column display layout with full width areas at
 * the top, bottom and in the middle.
 *
 * Available variables:
 * - content: The content for this layout.
 * - attributes: HTML attributes for the layout <div>.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'layout',
    'layout--twocol-bricks',
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {% if content.top %}
      <div {{ region_attributes.top.addClass('layout__region', 'layout__region--top') }}>
        {{ content.top }}
      </div>
    {% endif %}

    {% if content.first_above %}
      <div {{ region_attributes.first_above.addClass('layout__region', 'layout__region--first-above') }}>
        {{ content.first_above }}
      </div>
    {% endif %}

    {% if content.second_above %}
      <div {{ region_attributes.second_above.addClass('layout__region', 'layout__region--second-above') }}>
        {{ content.second_above }}
      </div>
    {% endif %}

    {% if content.middle %}
      <div {{ region_attributes.middle.addClass('layout__region', 'layout__region--middle') }}>
        {{ content.middle }}
      </div>
    {% endif %}

    {% if content.first_below %}
      <div {{ region_attributes.first_below.addClass('layout__region', 'layout__region--first-below') }}>
        {{ content.first_below }}
      </div>
    {% endif %}

    {% if content.second_below %}
      <div {{ region_attributes.second_below.addClass('layout__region', 'layout__region--second-below') }}>
        {{ content.second_below }}
      </div>
    {% endif %}

    {% if content.bottom %}
      <div {{ region_attributes.bottom.addClass('layout__region', 'layout__region--bottom') }}>
        {{ content.bottom }}
      </div>
    {% endif %}
  </div>
{% endif %}
", "core/themes/stable/templates/layout/layout--twocol-bricks.html.twig", "/home/acretweb/acret-ph.com/public_html/multty/core/themes/stable/templates/layout/layout--twocol-bricks.html.twig");
    }
}
