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

/* modules/commerce/modules/product/templates/commerce-product-attribute-value.html.twig */
class __TwigTemplate_c767482ef0b6ed0c5ca7cd9b742ab9c6f16df3cc16861e08fd9f34fb4ab1f1bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 21
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_attribute_value"] ?? null)), "html", null, true);
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/commerce/modules/product/templates/commerce-product-attribute-value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  59 => 22,  55 => 21,);
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
 *
 * Default template for product attribute values.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product_attribute_value: The rendered product attribute value fields.
 *   Use 'product_attribute_value' to print them all, or print a subset such as
 *   'product_attribute_value.name'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product_attribute_value|without('name') }}
 *   @endcode
 * - product_attribute_value_entity: The product attribute value entity.
 *
 * @ingroup themeable
 */
#}
<div{{ attributes }}>
  {{- product_attribute_value -}}
</div>
", "modules/commerce/modules/product/templates/commerce-product-attribute-value.html.twig", "/home/acretweb/acret-ph.com/public_html/multty/modules/commerce/modules/product/templates/commerce-product-attribute-value.html.twig");
    }
}
