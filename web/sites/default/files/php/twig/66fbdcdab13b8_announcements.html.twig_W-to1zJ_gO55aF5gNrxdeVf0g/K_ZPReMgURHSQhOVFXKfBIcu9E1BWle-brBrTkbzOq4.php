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

/* @announcements_feed/announcements.html.twig */
class __TwigTemplate_b92130d8d746ba4bf761969bcfe1b748 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@announcements_feed/announcements.html.twig"));

        // line 1
        if (($context["count"] ?? null)) {
            // line 2
            yield "  <nav class=\"announcements\">
    <ul>
      ";
            // line 4
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["featured"] ?? null))) {
                // line 5
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["featured"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                    // line 6
                    yield "          <li class=\"announcement announcement--featured\" data-drupal-featured>
            <div class=\"announcement__title\">
              <h4>";
                    // line 8
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                    yield "</h4>
            </div>
            <div class=\"announcement__teaser\">
              ";
                    // line 11
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "content", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    yield "
            </div>
            <div class=\"announcement__link\">
              <a href=\"";
                    // line 14
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Learn More"));
                    yield "</a>
            </div>
          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                yield "      ";
            }
            // line 19
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["standard"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 20
                yield "        <li class=\"announcement announcement--standard\">
          <div class=\"announcement__title\">
            <a href=\"";
                // line 22
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                yield "</a>
            <div class=\"announcement__date\">";
                // line 23
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->env->getFilter('format_date')->getCallable()($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "datePublishedTimestamp", [], "any", false, false, true, 23), 23, $this->source), "short"), "html", null, true);
                yield "</div>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    </ul>
  </nav>

  ";
            // line 30
            if (($context["feed_link"] ?? null)) {
                // line 31
                yield "    <p class=\"announcements--view-all\">
      <a target=\"_blank\" href=\"";
                // line 32
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_link"] ?? null), 32, $this->source), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View all announcements"));
                yield "</a>
    </p>
  ";
            }
        } else {
            // line 36
            yield "  <div class=\"announcements announcements--empty\"><p> ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No announcements available"));
            yield "</p></div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["count", "featured", "standard", "feed_link"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@announcements_feed/announcements.html.twig";
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
        return array (  131 => 36,  122 => 32,  119 => 31,  117 => 30,  112 => 27,  102 => 23,  96 => 22,  92 => 20,  87 => 19,  84 => 18,  72 => 14,  66 => 11,  60 => 8,  56 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@announcements_feed/announcements.html.twig", "/app/web/core/modules/announcements_feed/templates/announcements.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 5);
        static $filters = array("length" => 4, "escape" => 8, "t" => 14, "format_date" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'escape', 't', 'format_date'],
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
