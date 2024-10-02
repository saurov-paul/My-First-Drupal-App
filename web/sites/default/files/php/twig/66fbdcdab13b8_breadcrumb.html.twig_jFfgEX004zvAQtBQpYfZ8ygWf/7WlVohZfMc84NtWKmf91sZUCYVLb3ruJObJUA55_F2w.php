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

/* themes/contrib/thex/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_65bae9d1f28bc972e1c6c4478b7d4e9a extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/thex/templates/navigation/breadcrumb.html.twig"));

        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            yield "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <ol class=\"breadcrumb-items\">
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                yield "      <li class=\"breadcrumb-item\">
        ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15)) {
                    // line 16
                    yield "          <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    yield "\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    yield "</a><span><i class=\"icon-angle-right\"></i></span>
        ";
                } else {
                    // line 18
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    yield "
        ";
                }
                // line 20
                yield "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "    </ol>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["breadcrumb"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/thex/templates/navigation/breadcrumb.html.twig";
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
        return array (  79 => 22,  72 => 20,  66 => 18,  58 => 16,  56 => 15,  53 => 14,  49 => 13,  45 => 11,  43 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/thex/templates/navigation/breadcrumb.html.twig", "/app/web/themes/contrib/thex/templates/navigation/breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "for" => 13);
        static $filters = array("escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
