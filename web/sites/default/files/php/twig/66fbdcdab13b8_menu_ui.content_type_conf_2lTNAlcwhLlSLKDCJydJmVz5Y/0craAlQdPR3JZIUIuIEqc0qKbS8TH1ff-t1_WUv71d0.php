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

/* @help_topics/menu_ui.content_type_configuration.html.twig */
class __TwigTemplate_d4be290e024c937a75f8cfdf2a0bdfa7 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/menu_ui.content_type_configuration.html.twig"));

        // line 8
        $context["content_types_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Content types", array());
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["content_types_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["content_types_text"] ?? null), 9, $this->source), "entity.node_type.collection"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("For an existing content type, configure the available menus that will be shown as options on content editing screens; links to content items of this type can be added to these menus during editing.", array());
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; @content_types_link.", array("@content_types_link" => ($context["content_types_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Locate the content type you want to configure, and click <em>Edit</em> in the <em>Operations</em> list.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Under <em>Menu settings</em>, check the menus that you want to be available when editing a content item of this type.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Optionally, select the <em>Default parent item</em>, to put links to content items under a default location in the menu structure.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Click <em>Save</em>.", array());
        yield "</li>
</ol>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/menu_ui.content_type_configuration.html.twig";
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
        return array (  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  55 => 11,  50 => 10,  48 => 9,  43 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/menu_ui.content_type_configuration.html.twig", "/app/web/core/modules/menu_ui/help_topics/menu_ui.content_type_configuration.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "trans" => 8);
        static $filters = array("escape" => 14);
        static $functions = array("render_var" => 9, "help_route_link" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link'],
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
