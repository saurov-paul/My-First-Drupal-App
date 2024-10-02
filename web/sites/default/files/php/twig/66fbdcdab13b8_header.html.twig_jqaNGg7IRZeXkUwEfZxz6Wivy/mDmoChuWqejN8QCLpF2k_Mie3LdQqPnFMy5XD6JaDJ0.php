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

/* @xara/template-parts/header.html.twig */
class __TwigTemplate_b6e8557b586466dc02214dfd797ff086 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_ad96c2d8979d8d23860453e7c5eb1520 = $this->extensions["Drupal\\tracer\\Twig\\Extension\\TraceableProfilerExtension"];
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@xara/template-parts/header.html.twig"));

        // line 1
        yield "<header class=\"header\">
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 2) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 2))) {
            // line 3
            yield "  <div class=\"header-top\">
    <div class=\"container\">
      <div class=\"header-top-container\">
        ";
            // line 6
            yield from             $this->loadTemplate("@thex/template-parts/header/header-top-left.html.twig", "@xara/template-parts/header.html.twig", 6)->unwrap()->yield($context);
            // line 7
            yield "        ";
            yield from             $this->loadTemplate("@thex/template-parts/header/header-top-right.html.twig", "@xara/template-parts/header.html.twig", 7)->unwrap()->yield($context);
            // line 8
            yield "      </div><!-- /header-top-container -->
    </div><!-- /container -->
  </div><!-- /header-top -->
";
        }
        // line 12
        yield "<div class=\"header-main\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15)) {
            // line 16
            yield "        <div class=\"site-brand\">
          ";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield "
        </div> <!--/.site-branding -->
      ";
        }
        // line 20
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 20) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 20))) {
            // line 21
            yield "      <div class=\"header-right\">
        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 22)) {
                // line 23
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/header/header-primary-menu.html.twig", "@xara/template-parts/header.html.twig", 23)->unwrap()->yield($context);
                // line 24
                yield "        ";
            }
            // line 25
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 25)) {
                // line 26
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@xara/template-parts/header.html.twig", 26)->unwrap()->yield($context);
                // line 27
                yield "        ";
            }
            // line 28
            yield "      </div> <!-- /.header-right -->
    ";
        }
        // line 30
        yield "    </div><!-- /header-container -->
  </div><!-- /container -->
</div><!-- /header main -->
";
        // line 33
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 34
            yield "  ";
            yield from             $this->loadTemplate("@xara/template-parts/slider.html.twig", "@xara/template-parts/header.html.twig", 34)->unwrap()->yield($context);
        } elseif (( !        // line 35
($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 35))) {
            // line 36
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/header/header-page.html.twig", "@xara/template-parts/header.html.twig", 36)->unwrap()->yield($context);
        }
        // line 38
        yield "</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "slider_show"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@xara/template-parts/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  123 => 38,  119 => 36,  117 => 35,  114 => 34,  112 => 33,  107 => 30,  103 => 28,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  88 => 23,  86 => 22,  83 => 21,  80 => 20,  74 => 17,  71 => 16,  69 => 15,  64 => 12,  58 => 8,  55 => 7,  53 => 6,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xara/template-parts/header.html.twig", "/app/web/themes/contrib/xara/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 6);
        static $filters = array("escape" => 17);
        static $functions = array();

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
