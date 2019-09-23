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

/* modules/commerce_wishlist/templates/commerce-wishlist-block.html.twig */
class __TwigTemplate_335ba8f80c588f3c71ce21adc3b0c098e5ba24a45d34f4b698b67c5fa9ec6152 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7, "for" => 9];
        $filters = ["escape" => 1, "number_format" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'number_format'],
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
        // line 1
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "wishlist-block"], "method")), "html", null, true);
        echo ">
  <div class=\"wishlist-block__summary\">
    <a class=\"wishlist-block__summary__link\" href=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
      <span class=\"wishlist-block__summary__count\">";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count_text"] ?? null)), "html", null, true);
        echo "</span>
    </a>
  </div>
  ";
        // line 7
        if (($context["wishlists"] ?? null)) {
            // line 8
            echo "  <div class=\"wishlist-block__contents\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["wishlists"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
                // line 10
                echo "      <table class=\"wishlist-block__contents__wishlist\">
        <tbody>
          ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["wishlist"], "getItems", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 13
                    echo "            <tr>
              <td style=\"text-align: right;\">";
                    // line 14
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "getQuantity", []))), "html", null, true);
                    echo " x</td>
              <td>";
                    // line 15
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "label", [])), "html", null, true);
                    echo "</td>
            </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </tbody>
      </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "  </div>
  ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce_wishlist/templates/commerce-wishlist-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 23,  112 => 21,  104 => 18,  95 => 15,  91 => 14,  88 => 13,  84 => 12,  80 => 10,  76 => 9,  73 => 8,  71 => 7,  65 => 4,  61 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes.addClass('wishlist-block') }}>
  <div class=\"wishlist-block__summary\">
    <a class=\"wishlist-block__summary__link\" href=\"{{ url }}\">
      <span class=\"wishlist-block__summary__count\">{{ count_text }}</span>
    </a>
  </div>
  {% if wishlists %}
  <div class=\"wishlist-block__contents\">
    {% for wishlist in wishlists %}
      <table class=\"wishlist-block__contents__wishlist\">
        <tbody>
          {% for item in wishlist.getItems %}
            <tr>
              <td style=\"text-align: right;\">{{ item.getQuantity|number_format }} x</td>
              <td>{{ item.label }}</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endfor %}
  </div>
  {% endif %}
</div>
", "modules/commerce_wishlist/templates/commerce-wishlist-block.html.twig", "/home/acretweb/acret-ph.com/public_html/multty/modules/commerce_wishlist/templates/commerce-wishlist-block.html.twig");
    }
}
