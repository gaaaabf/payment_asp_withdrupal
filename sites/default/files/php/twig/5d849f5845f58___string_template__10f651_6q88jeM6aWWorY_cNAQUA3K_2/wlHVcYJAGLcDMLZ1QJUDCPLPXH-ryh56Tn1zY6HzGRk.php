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

/* __string_template__10f6516d722970a70b02913543152dba3fb814996715986c01a2f26290860101 */
class __TwigTemplate_f0125a22669fa02575acc1ba12613815795e472ac3dba6e531e863d556e67c4e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "destination=/multty/admin/structure/views/view/product_stock_list/preview/page_1%3F_wrapper_format%3Ddrupal_ajax%26SKU%3D%26title%3D%26field_stock_value%3DAll%26order%3Dfield_stock_1%26sort%3Dasc";
    }

    public function getTemplateName()
    {
        return "__string_template__10f6516d722970a70b02913543152dba3fb814996715986c01a2f26290860101";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}destination=/multty/admin/structure/views/view/product_stock_list/preview/page_1%3F_wrapper_format%3Ddrupal_ajax%26SKU%3D%26title%3D%26field_stock_value%3DAll%26order%3Dfield_stock_1%26sort%3Dasc", "__string_template__10f6516d722970a70b02913543152dba3fb814996715986c01a2f26290860101", "");
    }
}
