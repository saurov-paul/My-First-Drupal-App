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

/* themes/contrib/xara/templates/layout/page.html.twig */
class __TwigTemplate_a4599ea3d08f44b4c8f9358f789642b1 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/xara/templates/layout/page.html.twig"));

        // line 1
        yield from         $this->loadTemplate("@xara/template-parts/header.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 10)) {
            // line 11
            yield "          ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "        ";
        }
        // line 13
        yield "        <div class=\"node-content\">
          ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        yield "
        </div>
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 16)) {
            // line 17
            yield "          ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "        ";
        }
        // line 19
        yield "      </main>
    ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 20)) {
            // line 21
            yield "      ";
            yield from             $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 21)->unwrap()->yield($context);
            // line 22
            yield "    ";
        }
        // line 23
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 23)) {
            // line 24
            yield "      ";
            yield from             $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "    ";
        }
        // line 26
        yield "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 29
        yield from         $this->loadTemplate("@xara/template-parts/footer.html.twig", "themes/contrib/xara/templates/layout/page.html.twig", 29)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/xara/templates/layout/page.html.twig";
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
        return array (  107 => 29,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  90 => 22,  87 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  74 => 16,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  58 => 10,  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/xara/templates/layout/page.html.twig", "/app/web/themes/contrib/xara/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 14);
        static $functions = array();

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
