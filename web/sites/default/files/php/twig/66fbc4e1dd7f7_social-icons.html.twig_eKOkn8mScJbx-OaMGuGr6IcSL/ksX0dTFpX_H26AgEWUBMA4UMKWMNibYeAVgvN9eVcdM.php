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

/* @xara/template-parts/social-icons.html.twig */
class __TwigTemplate_425691e00ba46dd67e5c114a261da3c9 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@xara/template-parts/social-icons.html.twig"));

        // line 1
        yield "<ul class=\"social-icons\">
  ";
        // line 2
        if ((($context["facebook_url"] ?? null) != "")) {
            // line 3
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 3, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-facebook\"></i></a></li>
  ";
        }
        // line 5
        yield "  ";
        if ((($context["twitter_url"] ?? null) != "")) {
            // line 6
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 6, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-twitter\"></i></a></li>
  ";
        }
        // line 8
        yield "  ";
        if ((($context["instagram_url"] ?? null) != "")) {
            // line 9
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 9, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-instagram\"></i></a></li>
  ";
        }
        // line 11
        yield "  ";
        if ((($context["linkedin_url"] ?? null) != "")) {
            // line 12
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 12, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-linkedin\"></i></a></li>
  ";
        }
        // line 14
        yield "  ";
        if ((($context["youtube_url"] ?? null) != "")) {
            // line 15
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 15, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-youtube\"></i></a></li>
  ";
        }
        // line 17
        yield "  ";
        if ((($context["vimeo_url"] ?? null) != "")) {
            // line 18
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vimeo_url"] ?? null), 18, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-vimeo\"></i></a></li>
  ";
        }
        // line 20
        yield "  ";
        if ((($context["telegram_url"] ?? null) != "")) {
            // line 21
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["telegram_url"] ?? null), 21, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-telegram\"></i></a></li>
  ";
        }
        // line 23
        yield "  ";
        if ((($context["whatsapp_url"] ?? null) != "")) {
            // line 24
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["whatsapp_url"] ?? null), 24, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-whatsapp\"></i></a></li>
  ";
        }
        // line 26
        yield "  ";
        if ((($context["github_url"] ?? null) != "")) {
            // line 27
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["github_url"] ?? null), 27, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-github\"></i></a></li>
  ";
        }
        // line 29
        yield "  ";
        if ((($context["vk_url"] ?? null) != "")) {
            // line 30
            yield "    <li><a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["vk_url"] ?? null), 30, $this->source), "html", null, true);
            yield "\" target=\"_blank\"><i class=\"icon-vk\" aria-hidden=\"true\"></i></a></li>
  ";
        }
        // line 32
        yield "</ul>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["facebook_url", "twitter_url", "instagram_url", "linkedin_url", "youtube_url", "vimeo_url", "telegram_url", "whatsapp_url", "github_url", "vk_url"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@xara/template-parts/social-icons.html.twig";
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
        return array (  135 => 32,  129 => 30,  126 => 29,  120 => 27,  117 => 26,  111 => 24,  108 => 23,  102 => 21,  99 => 20,  93 => 18,  90 => 17,  84 => 15,  81 => 14,  75 => 12,  72 => 11,  66 => 9,  63 => 8,  57 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xara/template-parts/social-icons.html.twig", "/app/web/themes/contrib/xara/templates/template-parts/social-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 3);
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
