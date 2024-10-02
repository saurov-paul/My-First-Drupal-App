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

/* @xara/template-parts/footer.html.twig */
class __TwigTemplate_3657f230206e121c023e55282a5128b6 extends Template
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
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->enter($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@xara/template-parts/footer.html.twig"));

        // line 1
        yield "<footer class=\"site-footer footer\">
";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-top.html.twig", "@xara/template-parts/footer.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_one", [], "any", false, false, true, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_two", [], "any", false, false, true, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_three", [], "any", false, false, true, 5)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 5))) {
            // line 6
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-blocks.html.twig", "@xara/template-parts/footer.html.twig", 6)->unwrap()->yield($context);
        }
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 8) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 8))) {
            // line 9
            yield "  ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-bottom-blocks.html.twig", "@xara/template-parts/footer.html.twig", 9)->unwrap()->yield($context);
        }
        // line 11
        if ((($context["copyright_text"] ?? null) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_last", [], "any", false, false, true, 11))) {
            // line 12
            yield "  <footer class=\"footer-bottom footer\">
    <div class=\"container\">
      <div class=\"footer-bottom-container\">
        ";
            // line 15
            if (($context["copyright_text"] ?? null)) {
                // line 16
                yield "          ";
                yield from                 $this->loadTemplate("@thex/template-parts/footer/footer-copyright.html.twig", "@xara/template-parts/footer.html.twig", 16)->unwrap()->yield($context);
                // line 17
                yield "        ";
            }
            // line 18
            yield "        ";
            yield from             $this->loadTemplate("@thex/template-parts/footer/footer-bottom-last.html.twig", "@xara/template-parts/footer.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "      ";
            if (($context["social_icons_show"] ?? null)) {
                // line 20
                yield "        <div class=\"footer-social\">
          ";
                // line 21
                yield from                 $this->loadTemplate("@xara/template-parts/social-icons.html.twig", "@xara/template-parts/footer.html.twig", 21)->unwrap()->yield($context);
                // line 22
                yield "        </div>
      ";
            }
            // line 24
            yield "      </div><!-- /footer-bottom-container -->
    </div><!-- /container -->
  </footer><!-- /footer-bottom -->
";
        }
        // line 28
        yield "</footer>
";
        // line 29
        if (($context["scrolltotop_on"] ?? null)) {
            // line 30
            yield "  <div class=\"scrolltop\"><i class=\"icon-arrow-up\"></i></div>
";
        }
        // line 32
        yield from         $this->loadTemplate("@xara/template-parts/style.html.twig", "@xara/template-parts/footer.html.twig", 32)->unwrap()->yield($context);
        // line 33
        if (($context["fontawesome_four"] ?? null)) {
            // line 34
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome4"), "html", null, true);
            yield "
";
        }
        // line 36
        if (($context["fontawesome_five"] ?? null)) {
            // line 37
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/fontawesome5"), "html", null, true);
            yield "
";
        }
        // line 39
        if (($context["bootstrapicons"] ?? null)) {
            // line 40
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("thex/bootstrap-icons"), "html", null, true);
            yield "
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "copyright_text", "social_icons_show", "scrolltotop_on", "fontawesome_four", "fontawesome_five", "bootstrapicons"]);        
        $__internal_ad96c2d8979d8d23860453e7c5eb1520->leave($__internal_ad96c2d8979d8d23860453e7c5eb1520_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@xara/template-parts/footer.html.twig";
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
        return array (  129 => 40,  127 => 39,  121 => 37,  119 => 36,  113 => 34,  111 => 33,  109 => 32,  105 => 30,  103 => 29,  100 => 28,  94 => 24,  90 => 22,  88 => 21,  85 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  71 => 15,  66 => 12,  64 => 11,  60 => 9,  58 => 8,  54 => 6,  52 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@xara/template-parts/footer.html.twig", "/app/web/themes/contrib/xara/templates/template-parts/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 3);
        static $filters = array("escape" => 34);
        static $functions = array("attach_library" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                ['attach_library'],
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
