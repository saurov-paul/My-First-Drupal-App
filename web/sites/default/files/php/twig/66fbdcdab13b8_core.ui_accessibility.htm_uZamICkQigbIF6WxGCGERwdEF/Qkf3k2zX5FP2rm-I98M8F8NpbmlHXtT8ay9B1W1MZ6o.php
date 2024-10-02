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

/* @help_topics/core.ui_accessibility.html.twig */
class __TwigTemplate_2b179d1bedec41dcc3fd56934602a296 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@help_topics/core.ui_accessibility.html.twig"));

        // line 6
        yield "<h2>";
        yield t("Overview of accessibility", array());
        yield "</h2>
<p>";
        // line 7
        yield t("The core administrative interface has built-in compliance with many accessibility standards so that most pages are accessible to most users in their default state. However, certain pages become more accessible to some users through the use of a non-default or improved interface. These interfaces include:", array());
        yield "</p>
<dl>
  <dt>";
        // line 9
        yield t("Disabling drag-and-drop functionality", array());
        yield "</dt>
  <dd>";
        // line 10
        yield t("The default drag-and-drop user interface for ordering tables in the administrative interface presents a challenge for some users, including keyboard-only users and users of screen readers and other assistive technology. The drag-and-drop interface can be disabled in a table by clicking a link labeled <em>Show row weights</em> above the table. The replacement interface allows users to order the table by choosing numerical weights (with increasing numbers) instead of dragging table rows.", array());
        yield "</dd>
  <dt>";
        // line 11
        yield t("Enabling inline form errors", array());
        yield "</dt>
  <dd>";
        // line 12
        yield t("Errors that occur when you submit a form, such as not filling in a required field, are sometimes difficult for users to understand and locate. In order to make these errors easier to find, the best practice is to put a summary of the errors at the top of the form page. To make them easier to understand, the best practice is to display error messages with the form fields they are related to. Both of these practices are implemented by the core Inline Form Errors module.", array());
        yield "</dd>
</dl>";
        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/core.ui_accessibility.html.twig";
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
        return array (  65 => 12,  61 => 11,  57 => 10,  53 => 9,  48 => 7,  43 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/core.ui_accessibility.html.twig", "/app/web/core/modules/help/help_topics/core.ui_accessibility.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
