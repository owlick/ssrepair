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

/* @tarapro/template-parts/header.html.twig */
class __TwigTemplate_7308357455cdb937eca9e4fa4d452e02 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 1) || ($context["social_icons_header_option"] ?? null))) {
            // line 2
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/header_top.html.twig", "@tarapro/template-parts/header.html.twig", 2)->unwrap()->yield($context);
        }
        // line 4
        yield "<header class=\"header\">
  <div class=\"container\">
    <div class=\"header-container\">
    ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 7)) {
            // line 8
            yield "      <div class=\"site-branding\">
        ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 9), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 12
        yield "<div class=\"header-right\">
<!-- Start: primary menu region -->
";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 14)) {
            // line 15
            yield "<div class=\"mobile-menu\">
  <span></span>
  <span></span>
  <span></span>
</div>
<div class=\"primary-menu-wrapper\">
<div class=\"menu-wrap\">
<div class=\"close-mobile-menu\"><i class=\"icon-close\" aria-hidden=\"true\"></i></div>
";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 23), "html", null, true);
            yield "
</div>
</div>
";
        }
        // line 27
        yield "<!-- End: primary menu region -->
";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 28)) {
            // line 29
            yield "<div class=\"full-page-search\">
<div class=\"search-icon\"><i class=\"icon-search\" aria-hidden=\"true\"></i></div> <!--/.search icon -->
<div class=\"search-box\">
  <div class=\"search-box-close\"></div>
  <div class=\"search-box-content\">
    ";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 34), "html", null, true);
            yield "
  </div>
  <div class=\"search-box-close\"></div>
</div><!--/search-box-->
</div> <!--/.full-page-search -->
";
        }
        // line 39
        yield " <!--/end if for page.search_box -->
  ";
        // line 40
        if (($context["animated_sidebar_option"] ?? null)) {
            // line 41
            yield "    <div class=\"sliding-panel-icon\">
      <span></span>
      <span></span>
      <span></span>
    </div>
  ";
        }
        // line 46
        yield " <!--/end if for animated_sidebar_option -->
</div> <!--/.header-right -->
  </div> <!--/.header-container -->
  </div> <!--/.container -->
</header><!-- /.header -->
<!-- End: Header -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "social_icons_header_option", "animated_sidebar_option"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tarapro/template-parts/header.html.twig";
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
        return array (  123 => 46,  115 => 41,  113 => 40,  110 => 39,  101 => 34,  94 => 29,  92 => 28,  89 => 27,  82 => 23,  72 => 15,  70 => 14,  66 => 12,  60 => 9,  57 => 8,  55 => 7,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tarapro/template-parts/header.html.twig", "/home/customer/www/ssrepair.biz/public_html/themes/contrib/tarapro/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "include" => 2];
        static $filters = ["escape" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
