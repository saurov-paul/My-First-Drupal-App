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

/* themes/contrib/xara/templates/layout/page--front.html.twig */
class __TwigTemplate_b3779fd4a8c68381577fbc49c625f9b9 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/xara/templates/layout/page--front.html.twig"));

        // line 1
        yield from         $this->loadTemplate("@xara/template-parts/header.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
  ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home_top", [], "any", false, false, true, 6)) {
            // line 7
            yield "    ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_home_top.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 7)->unwrap()->yield($context);
            // line 8
            yield "  ";
        }
        // line 9
        yield "  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content front-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 13)) {
            // line 14
            yield "          ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "        ";
        }
        // line 16
        yield "        <div class=\"node-content\">
          ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        yield "
        </div>
        ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 19)) {
            // line 20
            yield "          ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 20)->unwrap()->yield($context);
            // line 21
            yield "        ";
        }
        // line 22
        yield "      </main>
    ";
        // line 23
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 23))) {
            // line 24
            yield "      ";
            yield from             $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "    ";
        }
        // line 26
        yield "    ";
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 26))) {
            // line 27
            yield "      ";
            yield from             $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "    ";
        }
        // line 29
        yield "    </div><!--/main-container -->
  </div><!--/container -->
  ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home_bottom", [], "any", false, false, true, 31)) {
            // line 32
            yield "    ";
            yield from             $this->loadTemplate("@thex/template-parts/content-parts/content_home_bottom.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 32)->unwrap()->yield($context);
            // line 33
            yield "  ";
        }
        // line 34
        yield "</div><!--/main-wrapper -->
";
        // line 35
        yield from         $this->loadTemplate("@xara/template-parts/footer.html.twig", "themes/contrib/xara/templates/layout/page--front.html.twig", 35)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "front_sidebar"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/xara/templates/layout/page--front.html.twig";
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
        return array (  127 => 35,  124 => 34,  121 => 33,  118 => 32,  116 => 31,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  84 => 19,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  68 => 13,  62 => 9,  59 => 8,  56 => 7,  54 => 6,  51 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/xara/templates/layout/page--front.html.twig", "/app/web/themes/contrib/xara/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1, "if" => 2);
        static $filters = array("escape" => 17);
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
