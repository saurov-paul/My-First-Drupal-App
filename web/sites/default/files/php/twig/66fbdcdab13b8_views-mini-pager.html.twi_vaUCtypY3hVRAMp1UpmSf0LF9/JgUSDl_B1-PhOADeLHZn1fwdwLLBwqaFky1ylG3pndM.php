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

/* core/themes/olivero/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_c58e959a685dc5db363c52b198e9657a extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/views/views-mini-pager.html.twig"));

        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 14) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 14))) {
            // line 15
            yield "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 15, $this->source), "html", null, true);
            yield "\">
    <";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_heading_level"] ?? null), 16, $this->source), "html", null, true);
            yield " id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 16, $this->source), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pagination_heading_level"] ?? null), 16, $this->source), "html", null, true);
            yield ">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 19
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 19)) {
                // line 20
                yield "        ";
                $___internal_parse_2_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 21
                    yield "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                    // line 22
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 22), "href", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    yield "\" class=\"pager__link\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    yield "\" rel=\"prev\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 22), "attributes", [], "any", false, false, true, 22), 22, $this->source), "href", "title", "rel", "class"), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 23
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                    yield "</span>
              ";
                    // line 24
                    yield from                     $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/views/views-mini-pager.html.twig", 24)->unwrap()->yield($context);
                    // line 25
                    yield "            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_2_));
                // line 28
                yield "      ";
            }
            // line 29
            yield "
      ";
            // line 31
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 31)) {
                // line 32
                yield "        <li class=\"pager__item pager__item--active\">
          ";
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                yield "
        </li>
      ";
            }
            // line 36
            yield "
      ";
            // line 38
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 38)) {
                // line 39
                yield "        ";
                $___internal_parse_3_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 40
                    yield "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                    // line 41
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 41), "href", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    yield "\" class=\"pager__link\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    yield "\" rel=\"next\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 41), "attributes", [], "any", false, false, true, 41), 41, $this->source), "href", "title", "rel"), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 42
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                    yield "</span>
              ";
                    // line 43
                    yield from                     $this->loadTemplate("@olivero/../images/pager-previous.svg", "core/themes/olivero/templates/views/views-mini-pager.html.twig", 43)->unwrap()->yield($context);
                    // line 44
                    yield "            </a>
          </li>
        ";
                    return; yield '';
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_3_));
                // line 47
                yield "      ";
            }
            // line 48
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/themes/olivero/templates/views/views-mini-pager.html.twig";
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
        return array (  147 => 48,  144 => 47,  142 => 39,  136 => 44,  134 => 43,  130 => 42,  122 => 41,  119 => 40,  116 => 39,  113 => 38,  110 => 36,  104 => 33,  101 => 32,  98 => 31,  95 => 29,  92 => 28,  90 => 20,  84 => 25,  82 => 24,  78 => 23,  70 => 22,  67 => 21,  64 => 20,  61 => 19,  50 => 16,  45 => 15,  43 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/views/views-mini-pager.html.twig", "/app/web/core/themes/olivero/templates/views/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "apply" => 20, "include" => 24);
        static $filters = array("escape" => 15, "t" => 16, "without" => 22, "spaceless" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'include'],
                ['escape', 't', 'without', 'spaceless'],
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
