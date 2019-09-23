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

/* modules/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig */
class __TwigTemplate_9334b08343a3685d82c86350334e3ff67c764273dd44df3c7d29a74180699229 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 31, "macro" => 1, "for" => 3, "set" => 5, "if" => 11];
        $filters = ["escape" => 10, "join" => 10, "length" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'for', 'set', 'if'],
                ['escape', 'join', 'length'],
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
        // line 30
        echo "
";
        // line 31
        $context["macros"] = $this;
        // line 32
        echo "<ul class=\"menu hierarchical-taxonomy-menu block-taxonomymenu__menu\">
  ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["macros"]->getmenu_links(($context["menu_tree"] ?? null), ($context["route_tid"] ?? null), 0, ($context["max_depth"] ?? null), ($context["collapsible"] ?? null)));
        echo "
</ul>
";
    }

    // line 1
    public function getmenu_links($__menu_tree__ = null, $__route_tid__ = null, $__current_depth__ = null, $__max_depth__ = null, $__collapsible__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "menu_tree" => $__menu_tree__,
            "route_tid" => $__route_tid__,
            "current_depth" => $__current_depth__,
            "max_depth" => $__max_depth__,
            "collapsible" => $__collapsible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  ";
            $context["macros"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu_tree"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "    ";
                // line 5
                $context["liClass"] = [0 => ((($this->getAttribute(                // line 6
$context["item"], "subitem", []) && (($context["current_depth"] ?? null) < ($context["max_depth"] ?? null)))) ? ("menu-item menu-item--expanded block-taxonomymenu__menu-item block-taxonomymenu__menu-item--expanded") : ("menu-item block-taxonomymenu__menu-item")), 1 => (((                // line 7
($context["route_tid"] ?? null) == $this->getAttribute($context["item"], "tid", []))) ? ("menu-item--active block-taxonomymenu__menu-item--active") : (""))];
                // line 10
                echo "    <li class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["liClass"] ?? null)), " "), "html", null, true);
                echo "\">
      ";
                // line 11
                if ($this->getAttribute($context["item"], "image", [])) {
                    // line 12
                    echo "        <img class=\"menu-item-image block-taxonomymenu__image\" src=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "image", [])), "html", null, true);
                    echo "\" ";
                    if (($this->getAttribute($context["item"], "use_image_style", []) == false)) {
                        echo "height=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "height", [])), "html", null, true);
                        echo "\" width=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "width", [])), "html", null, true);
                        echo "\"";
                    }
                    echo " />
      ";
                }
                // line 14
                echo "        <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                echo "\" class=\"block-taxonomymenu__link ";
                if ((($context["route_tid"] ?? null) == $this->getAttribute($context["item"], "tid", []))) {
                    echo "active block-taxonomymenu__link--active";
                }
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "name", [])), "html", null, true);
                if (($this->getAttribute($context["item"], "show_count", []) == true)) {
                    echo " [";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "nodes", []))), "html", null, true);
                    echo "]";
                }
                echo "</a>
      ";
                // line 15
                if (($this->getAttribute($context["item"], "subitem", []) && (($context["current_depth"] ?? null) < ($context["max_depth"] ?? null)))) {
                    // line 16
                    echo "        ";
                    if ($this->getAttribute($context["item"], "interactive_parent", [])) {
                        // line 17
                        echo "          <i class=\"arrow-right parent-toggle\" aria-hidden=\"true\"></i><span class=\"visually-hidden\">Expand Secondary Navigation Menu</span>
        ";
                    }
                    // line 19
                    echo "        ";
                    if ((($context["collapsible"] ?? null) == true)) {
                        // line 20
                        echo "          <ul class=\"menu block-taxonomymenu__submenu collapsed-submenu\">
        ";
                    } else {
                        // line 22
                        echo "          <ul class=\"menu block-taxonomymenu__submenu\">
        ";
                    }
                    // line 24
                    echo "          ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["macros"]->getmenu_links($this->getAttribute($context["item"], "subitem", []), ($context["route_tid"] ?? null), (($context["current_depth"] ?? null) + 1), ($context["max_depth"] ?? null), ($context["collapsible"] ?? null)));
                    echo "
        </ul>
      ";
                }
                // line 27
                echo "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 27,  157 => 24,  153 => 22,  149 => 20,  146 => 19,  142 => 17,  139 => 16,  137 => 15,  121 => 14,  107 => 12,  105 => 11,  100 => 10,  98 => 7,  97 => 6,  96 => 5,  94 => 4,  89 => 3,  86 => 2,  70 => 1,  63 => 33,  60 => 32,  58 => 31,  55 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro menu_links(menu_tree, route_tid, current_depth, max_depth, collapsible) %}
  {% import _self as macros %}
  {% for item in menu_tree %}
    {%
      set liClass = [
        item.subitem and current_depth < max_depth ? 'menu-item menu-item--expanded block-taxonomymenu__menu-item block-taxonomymenu__menu-item--expanded' : 'menu-item block-taxonomymenu__menu-item',
        route_tid == item.tid ? 'menu-item--active block-taxonomymenu__menu-item--active' : ''
      ]
    %}
    <li class=\"{{ liClass|join(' ') }}\">
      {% if item.image %}
        <img class=\"menu-item-image block-taxonomymenu__image\" src=\"{{ item.image }}\" {% if item.use_image_style == false %}height=\"{{ item.height }}\" width=\"{{ item.width }}\"{% endif %} />
      {% endif %}
        <a href=\"{{ item.url }}\" class=\"block-taxonomymenu__link {% if route_tid == item.tid %}active block-taxonomymenu__link--active{% endif %}\">{{ item.name }}{% if item.show_count == true %} [{{ item.nodes|length }}]{% endif %}</a>
      {% if item.subitem and current_depth < max_depth %}
        {% if item.interactive_parent %}
          <i class=\"arrow-right parent-toggle\" aria-hidden=\"true\"></i><span class=\"visually-hidden\">Expand Secondary Navigation Menu</span>
        {% endif %}
        {% if collapsible == TRUE %}
          <ul class=\"menu block-taxonomymenu__submenu collapsed-submenu\">
        {% else %}
          <ul class=\"menu block-taxonomymenu__submenu\">
        {% endif %}
          {{ macros.menu_links(item.subitem, route_tid, current_depth + 1, max_depth, collapsible) }}
        </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}

{% import _self as macros %}
<ul class=\"menu hierarchical-taxonomy-menu block-taxonomymenu__menu\">
  {{ macros.menu_links(menu_tree, route_tid, 0, max_depth, collapsible) }}
</ul>
", "modules/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig", "/home/acretweb/acret-ph.com/public_html/multty/modules/hierarchical_taxonomy_menu/templates/hierarchical-taxonomy-menu.html.twig");
    }
}
