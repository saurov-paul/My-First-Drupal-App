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

/* themes/contrib/thex/templates/misc/status-messages.html.twig */
class __TwigTemplate_b8770778c1caac8e1e6fef33146ebfa5 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/thex/templates/misc/status-messages.html.twig"));

        // line 24
        yield "<div data-drupal-messages class=\"messages-list\">
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            $context["classes"] = ["message", ("message-" . $this->sandbox->ensureToStringAllowed(            // line 29
$context["type"], 29, $this->source))];
            // line 32
            yield "  <div role=\"contentinfo\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 32, $this->source), "html", null, true);
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 32), 32, $this->source), "role", "aria-label"), "html", null, true);
            yield ">
    ";
            // line 33
            if (($context["type"] == "error")) {
                // line 34
                yield "      <div role=\"alert\" class=\"status-error\">
    ";
            }
            // line 36
            yield "      ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 37
                yield "        <h2 class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 37, $this->source), "html", null, true);
                yield "</h2>
      ";
            }
            // line 39
            yield "      ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["messages"]) > 1)) {
                // line 40
                yield "        <ul class=\"status-message-list\">
          ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 42
                    yield "            <li>";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 42, $this->source), "html", null, true);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                yield "        </ul>
      ";
            } else {
                // line 46
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["messages"], 46, $this->source)), "html", null, true);
                yield "
      ";
            }
            // line 48
            yield "    ";
            if (($context["type"] == "error")) {
                // line 49
                yield "      </div>
    ";
            }
            // line 51
            yield "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/thex/templates/misc/status-messages.html.twig";
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
        return array (  118 => 53,  111 => 51,  107 => 49,  104 => 48,  98 => 46,  94 => 44,  85 => 42,  81 => 41,  78 => 40,  75 => 39,  69 => 37,  66 => 36,  62 => 34,  60 => 33,  53 => 32,  51 => 29,  50 => 27,  46 => 25,  43 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/thex/templates/misc/status-messages.html.twig", "/app/web/themes/contrib/thex/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 25, "set" => 27, "if" => 33);
        static $filters = array("escape" => 32, "without" => 32, "length" => 39, "first" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
