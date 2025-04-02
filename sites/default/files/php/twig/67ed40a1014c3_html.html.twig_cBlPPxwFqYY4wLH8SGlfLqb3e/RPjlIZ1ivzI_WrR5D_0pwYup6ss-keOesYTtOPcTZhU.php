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

/* themes/contrib/tarapro/templates/layout/html.html.twig */
class __TwigTemplate_ba02e2af85861c7fba44fefc306b152f extends Template
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
        // line 27
        $context["body_classes"] = [(( !        // line 28
($context["root_path"] ?? null)) ? ("frontpage") : (("inner-page path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 29
($context["page"] ?? null), "slider", [], "any", false, false, true, 29)) ? ("slider-page") : ("")), ((        // line 30
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 31) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 31))) ? ("no-sidebar") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("one-sidebar sidebar-left") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-right") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34))) ? ("two-sidebar") : ("")), ((        // line 35
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-guest"))];
        // line 38
        yield "<!DOCTYPE html>
<html";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <title>";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    ";
        // line 43
        if ((($context["google_font"] ?? null) == "local")) {
            // line 44
            yield "    <link rel=\"preload\" as=\"font\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    ";
        }
        // line 47
        yield "    <css-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <js-placeholder token=\"";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
";
        // line 49
        if (($context["insert_head"] ?? null)) {
            // line 50
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/insert-codes/head-codes.html.twig", "themes/contrib/tarapro/templates/layout/html.html.twig", 50)->unwrap()->yield($context);
        }
        // line 52
        if ((($context["color_scheme"] ?? null) == "color_custom")) {
            // line 53
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/insert-codes/color.html.twig", "themes/contrib/tarapro/templates/layout/html.html.twig", 53)->unwrap()->yield($context);
        }
        // line 55
        if (($context["css_extra"] ?? null)) {
            // line 56
            yield "<style>
";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["css_code"] ?? null));
            yield "
</style>
";
        }
        // line 60
        yield "  </head>
  <body";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 61), "html", null, true);
        yield ">
";
        // line 62
        if (($context["insert_body_start"] ?? null)) {
            // line 63
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/insert-codes/body-start-codes.html.twig", "themes/contrib/tarapro/templates/layout/html.html.twig", 63)->unwrap()->yield($context);
        }
        // line 65
        if (($context["preloader_option"] ?? null)) {
            // line 66
            yield "  <div class=\"loader\"></div>
";
        }
        // line 68
        yield "    ";
        // line 72
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
";
        // line 78
        if ((($context["google_font"] ?? null) == "googlecdn")) {
            // line 79
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/googlefontscdn"), "html", null, true);
            yield "
";
        } elseif ((        // line 80
($context["google_font"] ?? null) == "local")) {
            // line 81
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/googlefontslocal"), "html", null, true);
            yield "
";
        }
        // line 83
        yield "    <js-bottom-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
";
        // line 84
        if (($context["sticky_footer"] ?? null)) {
            // line 85
            yield "<script>
jQuery(window).on(\"load\", function () {
  if (jQuery(window).width() > 767) {
    var footerheight = jQuery(\"#footer\").outerHeight(true);
    jQuery(\"#last-section\").css(\"height\", footerheight);
  }
});
</script>
<style>
@media screen and (min-width: 768px) {
#footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 0;
}
}
</style>
";
        }
        // line 105
        if (($context["preloader_option"] ?? null)) {
            // line 106
            yield "<script type=\"text/javascript\">
  jQuery(document).ready(function() {
    jQuery(\".loader\").fadeOut( 'slow' );
  });
</script>
";
        }
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/hjs"), "html", null, true);
        yield "
";
        // line 113
        if (($context["insert_body_end"] ?? null)) {
            // line 114
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/insert-codes/body-end-codes.html.twig", "themes/contrib/tarapro/templates/layout/html.html.twig", 114)->unwrap()->yield($context);
        }
        // line 116
        yield "  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["root_path", "page", "node_type", "logged_in", "html_attributes", "placeholder_token", "head_title", "google_font", "base_path", "directory", "insert_head", "color_scheme", "css_extra", "css_code", "attributes", "insert_body_start", "preloader_option", "page_top", "page_bottom", "sticky_footer", "insert_body_end"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tarapro/templates/layout/html.html.twig";
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
        return array (  219 => 116,  215 => 114,  213 => 113,  209 => 112,  201 => 106,  199 => 105,  177 => 85,  175 => 84,  170 => 83,  164 => 81,  162 => 80,  157 => 79,  155 => 78,  151 => 77,  147 => 76,  143 => 75,  138 => 73,  135 => 72,  133 => 68,  129 => 66,  127 => 65,  123 => 63,  121 => 62,  117 => 61,  114 => 60,  108 => 57,  105 => 56,  103 => 55,  99 => 53,  97 => 52,  93 => 50,  91 => 49,  87 => 48,  82 => 47,  77 => 45,  72 => 44,  70 => 43,  66 => 42,  62 => 41,  57 => 39,  54 => 38,  52 => 35,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tarapro/templates/layout/html.html.twig", "/home/customer/www/ssrepair.biz/public_html/themes/contrib/tarapro/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27, "if" => 43, "include" => 50];
        static $filters = ["clean_class" => 28, "escape" => 39, "raw" => 41, "safe_join" => 42, "t" => 73];
        static $functions = ["attach_library" => 79];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
                ['attach_library'],
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
