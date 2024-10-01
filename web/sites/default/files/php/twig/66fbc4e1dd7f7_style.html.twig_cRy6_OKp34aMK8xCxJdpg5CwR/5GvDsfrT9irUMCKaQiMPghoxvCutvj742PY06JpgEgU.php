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

/* @xara/template-parts/style.html.twig */
class __TwigTemplate_5d3895985f135f3420aca489d84ec1fe extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@xara/template-parts/style.html.twig"));

        // line 1
        yield "<style>
";
        // line 3
        yield "body {
  font-size: ";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_font_size"] ?? null), 4, $this->source), "html", null, true);
        yield "rem;
}
";
        // line 7
        if ( !($context["main_menu_default"] ?? null)) {
            // line 8
            yield ".menu-wrap ul.menu {
  font-size: ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_size"] ?? null), 9, $this->source), "html", null, true);
            yield "rem;
}
.menu-wrap {
  font-weight: ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_weight"] ?? null), 12, $this->source), "html", null, true);
            yield ";
}
.menu-wrap ul.menu > li > a {
  text-transform: ";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_top_transform"] ?? null), 15, $this->source), "html", null, true);
            yield ";
}
.menu-wrap ul.menu ul.submenu {
  fontweight: ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_weight"] ?? null), 18, $this->source), "html", null, true);
            yield ";
}
.menu-wrap ul.menu ul.submenu li {
  font-size: ";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_size"] ?? null), 21, $this->source), "html", null, true);
            yield "rem;  
  text-transform: ";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu_sub_transform"] ?? null), 22, $this->source), "html", null, true);
            yield ";
}
";
        }
        // line 25
        yield "@media (min-width: 1170px) {
  .container {
    max-width: ";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container_width"] ?? null), 27, $this->source), "html", null, true);
        yield "px;
  }
}
";
        // line 31
        if ((($context["header_width"] ?? null) == "header_width_full")) {
            // line 32
            yield ".header-top .container,
.header .container,
.page-header .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 39
        if ((($context["main_width"] ?? null) == "main_width_full")) {
            // line 40
            yield ".main-wrapper .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 45
        yield "
";
        // line 46
        if ((($context["footer_width"] ?? null) == "footer_width_full")) {
            // line 47
            yield ".footer-top footer .container,
.footer-blocks .container,
.footer-bottom-blocks .container,
.footer-bottom .container {
  width: 100%;
  max-width: 100%;
}
";
        }
        // line 56
        yield ".region-page-header {
  align-items: ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_page_content_position"] ?? null), 57, $this->source), "html", null, true);
        yield ";
}

@media (min-width: 768px) {
  ";
        // line 61
        if ( !($context["sidebar_width_default"] ?? null)) {
            // line 62
            yield "  .sidebar-left #main {
    flex: 1 1 calc(100% - ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 63, $this->source), "html", null, true);
            yield "%);
  }
  .sidebar-right #main {
    flex: 1 1 calc(100% - ";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 66, $this->source), "html", null, true);
            yield "%);
  }
  .two-sidebar #main {
    flex: 1 1 calc(100% - ";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 69, $this->source), "html", null, true);
            yield "% - ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 69, $this->source), "html", null, true);
            yield "%);
  }
  #sidebar-left {
    flex: 0 1 ";
            // line 72
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_left"] ?? null), 72, $this->source), "html", null, true);
            yield "%;
  }
  #sidebar-right {
    flex: 0 1 ";
            // line 75
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_width_right"] ?? null), 75, $this->source), "html", null, true);
            yield "%;
  }
  ";
        }
        // line 78
        yield "}
";
        // line 80
        if ( !($context["page_title_default"] ?? null)) {
            // line 81
            yield ".page-title {
  font-size: ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_size"] ?? null), 82, $this->source), "html", null, true);
            yield "rem;
  text-transform: ";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_transform"] ?? null), 83, $this->source), "html", null, true);
            yield ";
}
";
        }
        // line 86
        if (($context["highlight_author_comment"] ?? null)) {
            // line 87
            yield ".comment-by-author {
  box-shadow: 0 0 6px 1px var(--secondary);
}
";
        }
        // line 91
        yield "</style>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["body_font_size", "main_menu_default", "main_menu_top_size", "main_menu_top_weight", "main_menu_top_transform", "main_menu_sub_weight", "main_menu_sub_size", "main_menu_sub_transform", "container_width", "header_width", "main_width", "footer_width", "header_page_content_position", "sidebar_width_default", "sidebar_width_left", "sidebar_width_right", "page_title_default", "page_title_size", "page_title_transform", "highlight_author_comment"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@xara/template-parts/style.html.twig";
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
        return array (  211 => 91,  205 => 87,  203 => 86,  197 => 83,  193 => 82,  190 => 81,  188 => 80,  185 => 78,  179 => 75,  173 => 72,  165 => 69,  159 => 66,  153 => 63,  150 => 62,  148 => 61,  141 => 57,  138 => 56,  128 => 47,  126 => 46,  123 => 45,  116 => 40,  114 => 39,  105 => 32,  103 => 31,  97 => 27,  93 => 25,  87 => 22,  83 => 21,  77 => 18,  71 => 15,  65 => 12,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xara/template-parts/style.html.twig", "/app/web/themes/contrib/xara/templates/template-parts/style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
