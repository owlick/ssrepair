<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @tarapro/template-parts/insert-codes/color.html.twig */
class __TwigTemplate_d8017d892d12cdfd59170360d65e0810 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<style>
  :root {
  --bg-body: ";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_body"] ?? null), "html", null, true);
        yield ";
  --color-primary: ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_primary"] ?? null), "html", null, true);
        yield ";
  --color-primary-light: ";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_primary_light"] ?? null), "html", null, true);
        yield ";
  --color-secondary: ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_secondary"] ?? null), "html", null, true);
        yield ";
  --dark: ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_dark"] ?? null), "html", null, true);
        yield ";
  --light: ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_light"] ?? null), "html", null, true);
        yield ";
  --border: ";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_border"] ?? null), "html", null, true);
        yield ";
  --text-color: ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_text"] ?? null), "html", null, true);
        yield ";
  --bold-color: ";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["color_heading"] ?? null), "html", null, true);
        yield ";
  }
  .header {
    background-color: ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bg_header"] ?? null), "html", null, true);
        yield ";
  }
</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bg_body", "color_primary", "color_primary_light", "color_secondary", "color_dark", "color_light", "color_border", "color_text", "color_heading", "bg_header"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tarapro/template-parts/insert-codes/color.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  86 => 14,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tarapro/template-parts/insert-codes/color.html.twig", "/home/customer/www/ssrepair.biz/public_html/themes/contrib/tarapro/templates/template-parts/insert-codes/color.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
