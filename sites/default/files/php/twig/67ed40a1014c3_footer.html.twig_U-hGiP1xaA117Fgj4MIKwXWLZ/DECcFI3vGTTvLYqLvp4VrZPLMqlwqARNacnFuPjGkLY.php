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

/* @tarapro/template-parts/footer.html.twig */
class __TwigTemplate_2927568b4adb0286322d896966b371a7 extends Template
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
        if (($context["sticky_footer"] ?? null)) {
            // line 2
            yield "<section id=\"last-section\"></section>
";
        }
        // line 4
        yield "<!-- Start: Footer -->
<footer id=\"footer\">
  <div class=\"footer\">
    <div class=\"container\">
    ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 8)) {
            // line 9
            yield "      <section class=\"footer-top\">
        ";
            // line 10
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 10), "html", null, true);
            yield "
      </section>
    ";
        }
        // line 12
        yield "<!-- /footer-top -->
    ";
        // line 13
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 13) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 13)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 13)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 13))) {
            // line 14
            yield "     <section class=\"footer-blocks\">
        ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 15)) {
                // line 16
                yield "          <div class=\"footer-block\">
            ";
                // line 17
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 17), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 19
            yield "<!--/footer-first -->
        ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 20)) {
                // line 21
                yield "          <div class=\"footer-block\">
            ";
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 22), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 24
            yield "<!--/footer-second -->
        ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 25)) {
                // line 26
                yield "          <div class=\"footer-block\">
            ";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 29
            yield "<!--/footer-third -->
        ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 30)) {
                // line 31
                yield "          <div class=\"footer-block\">
            ";
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 32), "html", null, true);
                yield "
          </div>
        ";
            }
            // line 34
            yield "<!--/footer-fourth -->
     </section> <!--/footer-blocks -->
   ";
        }
        // line 36
        yield " ";
        // line 37
        yield "  ";
        if ((($context["copyright_text"] ?? null) || ($context["social_icons_footer_option"] ?? null))) {
            // line 38
            yield "    <section class=\"footer-bottom-middle\">
      ";
            // line 39
            if (($context["copyright_text"] ?? null)) {
                // line 40
                yield "        <div class=\"copyright\">
          ";
                // line 41
                if ((($context["copyright_custom"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 41))) {
                    // line 42
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 42), "html", null, true);
                    yield "
          ";
                } else {
                    // line 44
                    yield "            &copy; ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
                    yield ", All rights reserved.
          ";
                }
                // line 45
                yield " <!-- end if copyright_text_custom -->
        </div><!-- /copyright -->
      ";
            }
            // line 47
            yield "<!-- end if for copyright -->
      ";
            // line 48
            if (($context["social_icons_footer_option"] ?? null)) {
                // line 49
                yield "        <div class=\"footer-bottom-middle-right\">
          ";
                // line 50
                yield from $this->loadTemplate("@tarapro/template-parts/social-icons.html.twig", "@tarapro/template-parts/footer.html.twig", 50)->unwrap()->yield($context);
                // line 51
                yield "        </div>
      ";
            }
            // line 52
            yield "<!-- end if social_icons_footer_option -->
    </section><!-- /footer-bottom-middle -->
  ";
        }
        // line 55
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 55)) {
            // line 56
            yield "    <div class=\"footer-bottom\">
      ";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 57), "html", null, true);
            yield "
    </div> <!--/.footer-bottom -->
  ";
        }
        // line 59
        yield "<!-- end condition for footer_bottom -->
    </div><!-- /.container -->
  </div> <!--/.footer -->
</footer>
";
        // line 63
        if (($context["cookie_message"] ?? null)) {
            // line 64
            yield "  ";
            yield from $this->loadTemplate("@tarapro/template-parts/cookie.html.twig", "@tarapro/template-parts/footer.html.twig", 64)->unwrap()->yield($context);
        }
        // line 66
        if (($context["scrolltotop_on"] ?? null)) {
            // line 67
            yield "<div class=\"scrolltop\"><i class=\"icon-arrow-up\" aria-hidden=\"true\"></i></div>
";
        }
        // line 69
        yield "<!-- End: Footer -->
";
        // line 70
        if (($context["iconmonstr"] ?? null)) {
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/iconmonstr"), "html", null, true);
            yield "
";
        } else {
            // line 73
            yield "<style>
.im {
  display: none;
}
</style>
";
        }
        // line 79
        if (($context["fontawesome_four"] ?? null)) {
            // line 80
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 82
        if (($context["fontawesome_five"] ?? null)) {
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/fontawesome5"), "html", null, true);
            yield "
";
        } else {
            // line 85
            yield "<style>
.fab {
  display: none;
}
</style>
";
        }
        // line 91
        if (($context["fontawesome_six"] ?? null)) {
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/fontawesome6"), "html", null, true);
            yield "
";
        }
        // line 94
        if (($context["bootstrapicons"] ?? null)) {
            // line 95
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        // line 97
        if (($context["material_icon_outlined"] ?? null)) {
            // line 98
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/material-outlined"), "html", null, true);
            yield "
";
        }
        // line 100
        if (($context["material_icon_filled"] ?? null)) {
            // line 101
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/material-filled"), "html", null, true);
            yield "
";
        }
        // line 103
        if (($context["material_icon_round"] ?? null)) {
            // line 104
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/material-round"), "html", null, true);
            yield "
";
        }
        // line 106
        if (($context["material_icon_sharp"] ?? null)) {
            // line 107
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/material-sharp"), "html", null, true);
            yield "
";
        }
        // line 109
        if (($context["material_icon_tone"] ?? null)) {
            // line 110
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tarapro/material-tone"), "html", null, true);
            yield "
";
        }
        // line 112
        if (($context["sticky_header_option"] ?? null)) {
            // line 113
            yield "<style>
.header {
  position: sticky;
  top: 0;
}
</style>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sticky_footer", "page", "copyright_text", "social_icons_footer_option", "copyright_custom", "site_name", "cookie_message", "scrolltotop_on", "iconmonstr", "fontawesome_four", "fontawesome_five", "fontawesome_six", "bootstrapicons", "material_icon_outlined", "material_icon_filled", "material_icon_round", "material_icon_sharp", "material_icon_tone", "sticky_header_option"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tarapro/template-parts/footer.html.twig";
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
        return array (  314 => 113,  312 => 112,  306 => 110,  304 => 109,  298 => 107,  296 => 106,  290 => 104,  288 => 103,  282 => 101,  280 => 100,  274 => 98,  272 => 97,  266 => 95,  264 => 94,  259 => 92,  257 => 91,  249 => 85,  244 => 83,  242 => 82,  236 => 80,  234 => 79,  226 => 73,  221 => 71,  219 => 70,  216 => 69,  212 => 67,  210 => 66,  206 => 64,  204 => 63,  198 => 59,  192 => 57,  189 => 56,  186 => 55,  181 => 52,  177 => 51,  175 => 50,  172 => 49,  170 => 48,  167 => 47,  162 => 45,  154 => 44,  148 => 42,  146 => 41,  143 => 40,  141 => 39,  138 => 38,  135 => 37,  133 => 36,  128 => 34,  122 => 32,  119 => 31,  117 => 30,  114 => 29,  108 => 27,  105 => 26,  103 => 25,  100 => 24,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  80 => 17,  77 => 16,  75 => 15,  72 => 14,  70 => 13,  67 => 12,  61 => 10,  58 => 9,  56 => 8,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tarapro/template-parts/footer.html.twig", "/home/customer/www/ssrepair.biz/public_html/themes/contrib/tarapro/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "include" => 50];
        static $filters = ["escape" => 10, "date" => 44];
        static $functions = ["attach_library" => 71];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape', 'date'],
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
