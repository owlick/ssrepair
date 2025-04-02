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

/* themes/contrib/tarapro/templates/layout/page--front.html.twig */
class __TwigTemplate_918d2180a29af62c154e8dbd90b9b98b extends Template
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
        // line 11
        yield from $this->loadTemplate("@tarapro/template-parts/header.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 11)->unwrap()->yield($context);
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 12)) {
            // line 13
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/slider.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 13)->unwrap()->yield($context);
        }
        // line 15
        yield from $this->loadTemplate("@tarapro/template-parts/highlighted.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
    ";
        // line 18
        if (($context["front_sidebar"] ?? null)) {
            // line 19
            yield "      <div class=\"main-container\">
    ";
        }
        // line 21
        yield "    <main id=\"main\" class=\"homepage-content page-content\" role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 23
        yield "      ";
        yield from $this->loadTemplate("@tarapro/template-parts/content_top.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 23)->unwrap()->yield($context);
        // line 24
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 24)) {
            // line 25
            yield "        <div class=\"homepage-content-block\">
          ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home", [], "any", false, false, true, 26), "html", null, true);
            yield "
        </div><!--/.homepage-content -->
      ";
        }
        // line 29
        yield "      ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 29)) {
            // line 30
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 30), "html", null, true);
            yield "
      ";
        }
        // line 32
        yield "      ";
        yield from $this->loadTemplate("@tarapro/template-parts/content_bottom.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "    </main>
    ";
        // line 34
        if (($context["front_sidebar"] ?? null)) {
            // line 35
            yield "      ";
            yield from $this->loadTemplate("@tarapro/template-parts/left_sidebar.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 35)->unwrap()->yield($context);
            // line 36
            yield "      ";
            yield from $this->loadTemplate("@tarapro/template-parts/right_sidebar.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 36)->unwrap()->yield($context);
            // line 37
            yield "      </div><!-- /main-container -->
    ";
        }
        // line 39
        yield "  </div><!--/.container -->
</div><!-- /main-wrapper -->
";
        // line 41
        if (($context["animated_sidebar_option"] ?? null)) {
            // line 42
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/sidebar_sliding.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 42)->unwrap()->yield($context);
        }
        // line 44
        yield from $this->loadTemplate("@tarapro/template-parts/footer.html.twig", "themes/contrib/tarapro/templates/layout/page--front.html.twig", 44)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "front_sidebar", "animated_sidebar_option"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tarapro/templates/layout/page--front.html.twig";
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
        return array (  119 => 44,  115 => 42,  113 => 41,  109 => 39,  105 => 37,  102 => 36,  99 => 35,  97 => 34,  94 => 33,  91 => 32,  85 => 30,  82 => 29,  76 => 26,  73 => 25,  70 => 24,  67 => 23,  64 => 21,  60 => 19,  58 => 18,  54 => 16,  52 => 15,  48 => 13,  46 => 12,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tarapro/templates/layout/page--front.html.twig", "/home/customer/www/ssrepair.biz/public_html/themes/contrib/tarapro/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 11, "if" => 12];
        static $filters = ["escape" => 26];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
